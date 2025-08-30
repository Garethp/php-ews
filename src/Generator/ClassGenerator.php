<?php

namespace garethp\ews\Generator;

use garethp\ews\API\Enumeration;
use Goetas\Xsd\XsdToPhp\Php\Structure\PHPClassOf;
use Zend\Code\Generator;
use Goetas\Xsd\XsdToPhp\Php\Structure\PHPClass;
use Zend\Code\Generator\DocBlockGenerator;
use Zend\Code\Generator\PropertyGenerator;
use Goetas\Xsd\XsdToPhp\Php\Structure\PHPProperty;
use Doctrine\Common\Inflector\Inflector;

/**
 * This whole class acts as our main generator for our Types and Messages from the xsd specifications. It's responsible
 * for creating the class, properties and methods that exist within the class. The list of things that we attempt to
 * handle are:
 *
 * * Set the class to extend from either the Type/Message that already exists or a base class that we've created.
 * * For each property in the xsd schema, we create a property in the class.
 * * For each property in the xsd schema, we create a getter and setter method.
 * * For each boolean property in the xsd schema, we create an is method.
 * * For each array property in the xsd schema, we create an adder method.
 */
class ClassGenerator
{
    public function fixInterfaces(Generator\ClassGenerator $class): Generator\ClassGenerator
    {
        $interfaces = $class->getImplementedInterfaces();

        if (in_array('Traversable', $interfaces) && in_array('IteratorAggregate', $interfaces)) {
            unset($interfaces[array_search('Traversable', $interfaces)]);
        }

        $class->setImplementedInterfaces($interfaces);

        return $class;
    }

    public function generate(Generator\ClassGenerator $class, PHPClass $type)
    {
        $class = $this->fixInterfaces($class);

        /**
         * If the class doesn't already exist and there's a class with the same name as it's namespace
         * (Example: the class is \garethp\ews\API\Type\EmailAddressType and the class \garethp\ews\API\Type exists)
         * then we should extend that class.
         */
        if (!($extends = $type->getExtends()) && class_exists($type->getNamespace())) {
            $extendNamespace = $type->getNamespace();
            $extendNamespace = explode('\\', $extendNamespace);
            $extendClass = array_pop($extendNamespace);
            $extendNamespace = implode('\\', $extendNamespace);

            $extends = new PHPClass();
            $extends->setName($extendClass);
            $extends->setNamespace($extendNamespace);

            $class->setExtendedClass($extends);
        }

        if ($type->getNamespace() == Enumeration::class) {
            $extendNamespace = $type->getNamespace();
            $extendNamespace = explode('\\', $extendNamespace);
            $extendClass = array_pop($extendNamespace);
            $extendNamespace = implode('\\', $extendNamespace);

            $extends = new PHPClass();
            $extends->setName($extendClass);
            $extends->setNamespace($extendNamespace);

            $class->setExtendedClass($extends);
        }

        if ($extends->getName() == "string"
            && $extends->getNamespace() == ""
            && class_exists($type->getNamespace() . '\\String')) {
            $extends->setName('String');
            $extends->setNamespace($type->getNamespace());
        } elseif ($extends->getName() == "string"
            && $extends->getNamespace() == ""
            && class_exists(($type->getNamespace()))) {
            $extendNamespace = $type->getNamespace();
            $extendNamespace = explode('\\', $extendNamespace);
            $extendClass = array_pop($extendNamespace);
            $extendNamespace = implode('\\', $extendNamespace);

            $extends = new PHPClass();
            $extends->setName($extendClass);
            $extends->setNamespace($extendNamespace);

            $class->setExtendedClass($extends);
        }

        $docblock = new DocBlockGenerator("Class representing " . $type->getName());
        if ($type->getDoc()) {
            $docblock->setLongDescription($type->getDoc());
        }
        $class->setNamespaceName($type->getNamespace());
        $class->setName($type->getName());
        $class->setDocblock($docblock);

        $class->setExtendedClass($extends->getName());

        if ($extends->getNamespace() != $type->getNamespace()) {
            if ($extends->getName() == $type->getName()) {
                $class->addUse($type->getExtends()
                    ->getFullName(), $extends->getName() . "Base");
                $class->setExtendedClass($extends->getName() . "Base");
            } else {
                $class->addUse($extends->getFullName());
            }
        }

        if ($this->handleBody($class, $type)) {
            return true;
        }
    }

    /**
     * This acts as our entrypoint to creating the body of the class, all the properties and methods that existing
     * within it. We loop over the properties twice so that properties will always sit at the top of the class.
     *
     * @param Generator\ClassGenerator $class
     * @param PHPClass $type
     * @return bool
     */
    protected function handleBody(Generator\ClassGenerator $class, PHPClass $type): bool
    {
        $this->handleEnumeration($class, $type);

        foreach ($type->getProperties() as $prop) {
            if ($prop->getName() !== '__value') {
                $this->handleProperty($class, $prop);
            }
        }

        foreach ($type->getProperties() as $prop) {
            if ($prop->getName() !== '__value') {
                $this->handleMethod($class, $prop, $type);
            }
        }

        if (count($type->getProperties()) === 1 && $type->hasProperty('__value')) {
            return false;
        }

        return true;
    }

    /**
     * Here we generate the actual property for the class. We check if there's an existing property so that we can
     * respect any Docblock changes that we've made ourselves. We attach the correct typing to the property since we
     * don't have features such as Typed Arrays in PHP.
     *
     * We also check if the property is a type that we need to do some additional casting on, which is mostly DateTimes,
     * Dates and Times.
     *
     * @param Generator\ClassGenerator $class
     * @param PHPProperty $prop
     * @return void
     */
    protected function handleProperty(Generator\ClassGenerator $class, PHPProperty $prop): void
    {
        $generatedProp = new PropertyGenerator($prop->getName());
        $generatedProp->setVisibility(PropertyGenerator::VISIBILITY_PROTECTED);

        if (!$class->hasProperty($prop->getName())) {
            $class->addPropertyFromGenerator($generatedProp);
        } else {
            $generatedProp = $class->getProperty($prop->getName());
        }

        $docBlock = new DocBlockGenerator();
        $generatedProp->setDocBlock($docBlock);

        if ($prop->getDoc()) {
            $docBlock->setLongDescription($prop->getDoc());
        }
        $tag = new Generator\DocBlock\Tag();
        $tag->setName("@var {$this->getPropertyType($prop)}");
        $docBlock->setTag($tag);
    }

    /**
     * This acts as our entry point into creating the methods for our properties. For Arrays, we create an adder method,
     * for boolean properties we create an is method and for all properties we create a getter and setter.
     *
     * @param Generator\ClassGenerator $generator
     * @param PHPProperty $prop
     * @param PHPClass $class
     * @return void
     */
    protected function handleMethod(Generator\ClassGenerator $generator, PHPProperty $prop, PHPClass $class): void
    {
        if ($prop->getType() instanceof PHPClassOf) {
            $this->handleAdder($generator, $prop, $class);
        }

        if ($this->getPropertyType($prop) == "boolean") {
            $this->handleIs($generator, $prop, $class);
        }

        $this->handleGetter($generator, $prop, $class);
        $this->handleSetter($generator, $prop, $class);
    }

    /**
     * add* methods are created for properties that are supposed to be collections, so we can add an item onto the
     * array. However, the property can either be null for no values or a single value (due to how EWS returns
     * collections), so we have a small check in the add* method to ensure that our property is an array before we add
     * the value to it. If it's not an array, we convert it to an array (preserving any values in it) and then add the\
     * item
     *
     * @param Generator\ClassGenerator $generator
     * @param PHPProperty $prop
     * @param PHPClass $class
     * @return void
     */
    protected function handleAdder(Generator\ClassGenerator $generator, PHPProperty $prop, PHPClass $class): void
    {
        $name = "add" . Inflector::classify($prop->getName());

        $type = $this->getPropertyType($prop);
        $namespace = explode("\\", $type);
        $namespaceClass = array_pop($namespace);
        $namespace = implode("\\", $namespace);

        if ($namespace == $class->getNamespace() || $namespace == "\\" . $class->getNamespace()) {
            $type = $namespaceClass;
        }
        if (substr($type, -2) == "[]") {
            $type = substr($type, 0, strlen($type) - 2);
        }

        if ($generator->hasMethod($name)) {
            if (!$this->isMethodAutoGenerated($generator->getMethod($name))) {
                return;
            }

            $generator->removeMethod($name);
        }

        $generatedMethod = (new Generator\MethodGenerator($name))
            ->setParameters([['name' => 'value', 'type' => $type]])
            ->setBody("
            if (\$this->{$prop->getName()} === null) {
                \$this->{$prop->getName()} = array();
            }

            if (!is_array(\$this->{$prop->getName()})) {
                \$this->{$prop->getName()} = array(\$this->{$prop->getName()});
            }\n\n\$this->{$prop->getName()}[] = \$value;\nreturn \$this;
            ")
            ->setDocBlock(
                (new DocBlockGenerator())
                    ->setTags([
                        new Generator\DocBlock\Tag\GenericTag("@autogenerated", "This method is safe to replace"),
                        new Generator\DocBlock\Tag\GenericTag("@param", "\$value $type"),
                        new Generator\DocBlock\Tag\GenericTag("@return", $class->getName())
                    ])
            )
        ;

        $generator->addMethodFromGenerator($generatedMethod);
    }

    /**
     * is* methods are generated for boolean properties, it just returns the property cast as a boolean, which means
     * that if the property is null it'll return false.
     *
     * @param Generator\ClassGenerator $generator
     * @param PHPProperty $prop
     * @param PHPClass $class
     * @return void
     */
    protected function handleIs(Generator\ClassGenerator $generator, PHPProperty $prop, PHPClass $class): void
    {
        $name = $prop->getName();
        if (strtolower(substr($name, 0, 2)) !== "is") {
            $name = "is" . Inflector::classify($name);
        }

        if ($generator->hasMethod($name)) {
            if (!$this->isMethodAutoGenerated($generator->getMethod($name))) {
                return;
            }

            $generator->removeMethod($name);
        }

        $newMethod = (new Generator\MethodGenerator($name))
            ->setBody("return ((bool) \$this->{$prop->getName()});")
            ->setDocBlock(
                (new DocBlockGenerator())
                    ->setTags([
                        new Generator\DocBlock\Tag\GenericTag("@autogenerated", "This method is safe to replace"),
                        new Generator\DocBlock\Tag\GenericTag("@return", "bool")
                    ])
            );

        $generator->addMethodFromGenerator($newMethod);
    }

    /**
     * This is where we generate our concrete getter method for the property. It's overall pretty simple, getter methods
     * don't do much, however in a future version we'd like to force returning an array when we have a property that's
     * meant to be a collection. EWS doesn't actually work like that, collections will sometimes come back as single
     * items instead so at the moment properties that are meant to be collections can come back as single items. This
     * will be a breaking change, so I've implemented the logic but left it disabled. Though it's probably going to be
     * a better idea to handle this in the setter method instead.
     *
     * @param Generator\ClassGenerator $generator
     * @param PHPProperty $prop
     * @param PHPClass $class
     * @return void
     */
    protected function handleGetter(Generator\ClassGenerator $generator, PHPProperty $prop, PHPClass $class): void
    {
        $type = $this->getPropertyType($prop);
        $namespace = explode("\\", $type);
        $namespaceClass = array_pop($namespace);
        $namespace = implode("\\", $namespace);
        if ($namespace == $class->getNamespace() || $namespace == "\\" . $class->getNamespace()) {
            $type = $namespaceClass;
        }

        $name = "get" . Inflector::classify($prop->getName());

        $ensureArrayWhenGettingArray = false;

        if ($generator->hasMethod($name)) {
            if (!$ensureArrayWhenGettingArray && !$this->isMethodAutoGenerated($generator->getMethod($name))) {
                return;
            }

            $generator->removeMethod($name);
        }

        $newMethod = (new Generator\MethodGenerator($name))
            ->setDocBlock(
                (new DocBlockGenerator())
                    ->setTags([
                        new Generator\DocBlock\Tag\GenericTag("@autogenerated", "This method is safe to replace"),
                        new Generator\DocBlock\Tag\GenericTag("@return", $type)
                    ])
            );

        if (str_ends_with($type, "[]") && $ensureArrayWhenGettingArray) {
            $newMethod->setBody("if (!is_array(\$this->{$prop->getName()}) && \$this->{$prop->getName()} !== null) {
return array(\$this->{$prop->getName()});
        }

return \$this->{$prop->getName()};");
        } else {
            $newMethod->setBody("return \$this->{$prop->getName()};");
        }

        $generator->addMethodFromGenerator($newMethod);
    }

    /**
     * Here we generate the setter methods for each property. Type-mapped properties (Date, DateTime, Time) need to also
     * accept string as a parameter since we'll be casting the value to the correct type. We also need to accept single
     * values for properties that are meant to be collections. At the moment we're calling a castValueIfNeeded method
     * for each property, however we want to inline this logic. In the future we probably also want to ensure
     * collections get cast to arrays when setting them, rather than allowing single values from EWS. This is going to
     * be a breaking change and require more testing.
     *
     * @param Generator\ClassGenerator $generator
     * @param PHPProperty $prop
     * @param PHPClass $class
     * @return void
     */
    protected function handleSetter(Generator\ClassGenerator $generator, PHPProperty $prop, PHPClass $class): void
    {
        $name = "set" . Inflector::classify($prop->getName());

        $type = $this->getPropertyType($prop);
        $namespace = explode("\\", $type);
        $namespaceClass = array_pop($namespace);
        $namespace = implode("\\", $namespace);

        $originalType = "";

        if ($namespace == $class->getNamespace() || $namespace == "\\" . $class->getNamespace()) {
            $type = $namespaceClass;
        }

        // It looks like we may be requiring too narrow a class. If the class we require is empty (has no methods and
        // no properties), we should then look for the nearest parent class that has some properties/methods
        if ($type === "Transition[]") {
            $t1 = $namespaceClass;
            if (substr($t1, -2) === "[]") {
                $t1 = substr($t1, 0, -2);
            }
            $c1 = $namespace . "\\" . $t1;
            $exists = class_exists($c1);
            if (class_exists($c1)) {
                while (true) {
                    $classGen = $classGen = \Zend\Code\Generator\ClassGenerator::fromReflection(new \Zend\Code\Reflection\ClassReflection($c1));

                    if (count($classGen->getProperties()) > 0 || count($classGen->getMethods()) > 0) {
                        break;
                    }

                    $c1 = $classGen->getExtendedClass();
                }
            }

            $t1 = $classGen->getName();
            if (substr($type, -2) === "[]") {
                $t1 .= "[]";
            }

            $type = $t1;
        }

        if (substr($type, -2) === "[]") {
            $originalSingleType = substr($type, 0, -2);
            $originalType = "$type|$originalSingleType";
            $type = "array|$originalSingleType";
        }

        if ($type === "boolean") {
            $type = "bool";
        }

        if ($type === "integer") {
            $type = "int";
        }

        if ($type === "\\DateTime") {
            $type = "\\DateTime|string";
        }

        if ($type === "\\DateInterval") {
            $type = "\\DateInterval|string";
        }

        if ($generator->hasMethod($name)) {
            if (!$this->isMethodAutoGenerated($generator->getMethod($name))) {
                return;
            }

            $generator->removeMethod($name);
        }

        $docblockType = $originalType === "" ? $type : $originalType;

        $newMethod = (new Generator\MethodGenerator($name))
            ->setParameters([['name' => 'value', 'type' => $type]])
            ->setBody("\$this->{$prop->getName()} = \$value;\nreturn \$this;")
            ->setDocBlock(
                (new DocBlockGenerator())
                    ->setTags([
                        new Generator\DocBlock\Tag\GenericTag("@autogenerated", "This method is safe to replace"),
                        new Generator\DocBlock\Tag\GenericTag("@param", "\$value $docblockType"),
                        new Generator\DocBlock\Tag\GenericTag("@return", $class->getName())
                    ])
            );

        if (str_starts_with($type, "array|")) {
            $newMethod->setBody("if (!is_array(\$value)) { \n \$value = [\$value];\n } \n" . $newMethod->getBody());
        }

        if ($type === "\\DateTime|string") {
            $newMethod->setBody("if (is_string(\$value)) { \n \$value = new \\DateTime(\$value);\n } \n" . $newMethod->getBody());
        }

        if ($type === "\\DateInterval|string") {
            $newMethod->setBody("if (is_string(\$value)) { \n \$invert = false; \n \$value = new \\DateInterval(\$value);\n \$value->invert = \$invert; \n } \n" . $newMethod->getBody());
        }

        $generator->addMethodFromGenerator($newMethod);
    }

    /**
     * If the type that we fetched from the xsd schema has an enumeration check on it's value, then we can create those
     * enumerated constants on the class.
     *
     * @param Generator\ClassGenerator $class
     * @param PHPClass $type
     * @return void
     */
    protected function handleEnumeration(Generator\ClassGenerator $class, PHPClass $type): void
    {
        if ($type->getChecks('__value') && isset($type->getChecks('__value')['enumeration'])) {
            $enums = $type->getChecks('__value')['enumeration'];

            foreach ($enums as $enum) {
                $name = $enum['value'];
                $name = preg_replace("~([a-z])([A-Z])~", "$1_$2", $name);
                $name = preg_replace("~([a-z])([0-9])~", "$1_$2", $name);
                $name = strtoupper($name);
                $name = str_replace(':', '_', $name);

                switch ($name) {
                    case "DEFAULT":
                    case "PRIVATE":
                    case "EMPTY":
                        $name .= "_CONSTANT";
                        break;
                }

                $value = $enum['value'];

                if (!$class->hasConstant($name)) {
                    $class->addConstant($name, $value);
                }
            }
        }
    }

    protected function isOneType(PHPClass $type, $onlyParent = false)
    {
        if ($onlyParent) {
            $extension = $type->getExtends();
            if ($extension) {
                if ($extension->hasProperty('__value')) {
                    return $extension->getProperty('__value');
                }
            }
        } else {
            if ($type->hasPropertyInHierarchy('__value') && count($type->getPropertiesInHierarchy()) === 1) {
                return $type->getPropertyInHierarchy("__value");
            }
        }
    }

    /**
     * Gets the FQN of the PHP Type for the given class
     *
     * @param PHPClass $class
     * @return string|null
     */
    protected function getPhpType(PHPClass $class): ?string
    {
        if (!$class->getNamespace()) {
            if ($this->isNativeType($class)) {
                return (string) $class->getName();
            }

            return "\\" . $class->getName();
        }

        return "\\" . $class->getFullName();
    }

    /**
     * Checks whether the given class is a PHP Native Type or not
     *
     * @param PHPClass $class
     * @return bool
     */
    protected function isNativeType(PHPClass $class): bool
    {
        return !$class->getNamespace() && in_array($class->getName(), [
                'string',
                'int',
                'float',
                'integer',
                'boolean',
                'array',
                'mixed',
                'callable'
            ]);
    }

    /**
     * Checks whether we've auto-generated a method or not based on the presence of the @autogenerated tag in the
     * DocBlock. This is useful for when we need to regenerate the class and don't want to overwrite any custom
     * changes that have been made.
     *
     * @param Generator\MethodGenerator $method
     * @return bool
     */
    protected function isMethodAutoGenerated(Generator\MethodGenerator $method): bool
    {
        $tags = $method->getDocBlock()?->getTags() ?? [];
        return count(array_filter($tags, static function ($tag) {
                return $tag->getName() === "autogenerated";
        })) !== 0;
    }

    /**
     * Here, we fetch the PHP Type for a property. This won't be our concrete type-hint, since we'll return typed arrays
     * such as "EmailAddress[]" however it'll return the information that we actually care about
     *
     * @param $property
     * @return string
     */
    protected function getPropertyType($property): string
    {
        $type = $property->getType();
        $returnType = "";

        // For some reason we were generating properties that were expecting a \garethp\ews\API\Type\LangAType for the
        // xml property "lang" on ReplyBodyType without actually generating a "LangAType" class. Looking at EWS
        // documentation it should just be the language code as a string, so we manually set it to be a string.
        if ($property->getName() === "lang" && $type->getName() === "LangAType") {
            return "string";
        }

        // PHPClassOf indicates that it's a collection of a single type. Even though we don't have typed arrays in PHP,
        // we'll still return it as a typed array for Docblock purposes. When we create the actual concrete type-hints
        // we'll detect it and turn it into array|SingleType.
        if ($type && $type instanceof PHPClassOf) {
            $singleType = $type->getArg()->getType();
            $returnType = $this->getPhpType($singleType) . "[]";
            if ($p = $this->isOneType($singleType)) {
                if (($t = $p->getType())) {
                    $returnType = $this->getPhpType($t) . "[]";
                }
            }
        } elseif ($type) {
            if ($this->isNativeType($type)) {
                $returnType = $this->getPhpType($type);
            } elseif (($p = $this->isOneType($type)) && ($t = $p->getType())) {
                $returnType = $this->getPhpType($t);
            } else {
                $returnType = $this->getPhpType($property->getType());
            }
        }

        return $returnType;
    }
}
