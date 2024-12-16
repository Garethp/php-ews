<?php

namespace garethp\ews\Generator;

use garethp\ews\API\ClassMap;
use garethp\ews\API\Enumeration;
use garethp\ews\API\ExchangeWebServices;
use Laminas\Code\Generator\FileGenerator;
use Laminas\Code\Generator;
use Laminas\Code\Reflection\ClassReflection;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Goetas\Xsd\XsdToPhp\Php\PathGenerator\Psr4PathGenerator;
use Goetas\Xsd\XsdToPhp\AbstractConverter;
use Symfony\Component\Console\Output\OutputInterface;
use Goetas\Xsd\XsdToPhp\Naming\NamingStrategy;
use Goetas\Xsd\XsdToPhp\Php\Structure\PHPClass;

/**
 * We extend the ConvertToPHP command since it did mostly what we want. We just want to provider some default values,
 * sub in our own PHPConverter, alias maps, file generation and docblocks on the ExchangeWebServices class.
 */
class ConvertToPHP extends \Goetas\Xsd\XsdToPhp\Command\ConvertToPHP
{
    /**
     *
     * @see Console\Command\Command
     */
    protected function configure()
    {
        parent::configure();

        $this->setDefinition(array(
            new InputArgument(
                'src',
                InputArgument::OPTIONAL | InputArgument::IS_ARRAY,
                'Where is located your XSD definitions',
                array(
                    __DIR__ . '/../../Resources/wsdl/types.xsd',
                    __DIR__ . '/../../Resources/wsdl/messages.xsd'
                )
            ),
            new InputOption(
                'ns-map',
                null,
                InputOption::VALUE_OPTIONAL | InputOption::VALUE_IS_ARRAY,
                'How to map XML namespaces to PHP namespaces? Syntax: <info>XML-namespace;PHP-namespace</info>',
                array(
                    'http://schemas.microsoft.com/exchange/services/2006/types;/garethp/ews/API/Type/',
                    'http://schemas.microsoft.com/exchange/services/2006/messages;/garethp/ews/API/Message/'
                )
            ),
            new InputOption(
                'ns-dest',
                null,
                InputOption::VALUE_OPTIONAL | InputOption::VALUE_IS_ARRAY,
                'Where place the generated files? Syntax: <info>PHP-namespace;destination-directory</info>',
                array(
                    'garethp/ews/API/Type/;' . __DIR__ . '/../API/Type',
                    'garethp/ews/API/Message/;' . __DIR__ . '/../API/Message',
                    'garethp/ews/API/Enumeration/;' . __DIR__ . '/../API/Enumeration'
                )
            ),
            new InputOption(
                'alias-map',
                null,
                InputOption::VALUE_OPTIONAL | InputOption::VALUE_IS_ARRAY,
                'How to map XML namespaces into existing PHP classes? Syntax: <info>XML-namespace;XML-type;PHP-type</info>. '
            ),
            new InputOption(
                'naming-strategy',
                null,
                InputOption::VALUE_OPTIONAL,
                'The naming strategy for classes. short|long',
                'short'
            )
        ));
    }

    protected function getConverterter(NamingStrategy $naming)
    {
        return new PhpConverter($naming);
    }

    /**
     * Here we're passed in a converter which we add our AliasMaps to and use that to fetch our schemas that'll be
     * transformed into our PHP Classes. We then iterate over each of the classes, check if we've already got a class
     * by that name and load those classes in (so that we don't override any custom code) or create new ones if they
     * don't exist. We pass that into our PhpConverter which will generate the bodies of the classes. Finally, we write
     * the generated classes to disk. We also generate a ClassMap class that represents which xsd types/messages map
     * to which PHP classes.
     *
     * @param AbstractConverter $converter
     * @param array $schemas
     * @param array $targets
     * @param OutputInterface $output
     * @return void
     * @throws \Goetas\Xsd\XsdToPhp\PathGenerator\PathGeneratorException
     * @throws \ReflectionException
     */
    protected function convert(AbstractConverter $converter, array $schemas, array $targets, OutputInterface $output)
    {
        $this->setClientMethodDocblocks();

        $generator = new ClassGenerator();
        $pathGenerator = new Psr4PathGenerator($targets);

        $converter->addAliasMap(
            'http://schemas.microsoft.com/exchange/services/2006/types',
            'Or',
            function ($type) use ($schemas) {
                return "OrElement";
            }
        );

        $converter->addAliasMap(
            'http://schemas.microsoft.com/exchange/services/2006/types',
            'And',
            function ($type) use ($schemas) {
                return "AndElement";
            }
        );

        $converter->addAliasMap(
            'http://schemas.microsoft.com/exchange/services/2006/types',
            'EmailAddress',
            function ($type) use ($schemas) {
                return "garethp\\ews\\API\\Type\\EmailAddressType";
            }
        );

        $items = $converter->convert($schemas);
        $progress = new ProgressBar($output, count($items));
        $progress->start(count($items));
        $classMap = [];

        foreach ($items as $item) {
            /** @var PHPClass $item */

            $progress->advance(1, true);
            $path = $pathGenerator->getPath($item);

            $fileGen = new FileGenerator();
            $fileGen->setFilename($path);
            $classGen = new \Zend\Code\Generator\ClassGenerator();

            $itemClass = $item->getNamespace() . '\\' . $item->getName();

            // If our class already exists, we'll load that and use it for `$classGen` so that we don't override any
            // custom code
            if (class_exists($itemClass)) {
                $fileGen = new FileGenerator();
                $fileGen->setFilename($path);

                $existingFile = (new \Zend\Code\Reflection\ClassReflection($itemClass))->getDeclaringFile();
                $classGen = \Zend\Code\Generator\ClassGenerator::fromReflection(new \Zend\Code\Reflection\ClassReflection($itemClass));

                // Neither Laminas/Zend Code packages preserve `use` statements, so we're going to look them up through
                // regex and add them back in
                $usesToPreserve = preg_match_all("/\nuse ([^;]+);/", $existingFile->getContents(), $matches);

                if ($usesToPreserve > 0) {
                    foreach ($matches[1] as $use) {
                        $classGen->addUse($use);
                    }
                }
            }

            if ($generator->generate($classGen, $item)) {
                $namespace = $classGen->getNamespaceName();

                $fileGen->setBody($classGen->generate());

                $fileGen->write();

                // Add the class to our classMap for writing
                if (isset($item->type) && $item->type->getName() != "" && $item->getNamespace() !== Enumeration::class) {
                    $classMap[$item->type->getName()] =
                        '\\' . $namespace . '\\' . $classGen->getName();
                }
            }
        }

        // Once we're done with all the classes, write out our ClassMap
        $mappingClassReflection = new ClassReflection(ClassMap::class);
        $mappingClass = Generator\ClassGenerator::fromReflection($mappingClassReflection);
        $mappingClass->getProperty('classMap')->setDefaultValue($classMap);

        $fileGen = new FileGenerator();
        $fileGen->setFilename($mappingClassReflection->getFileName());
        $fileGen->setClass($mappingClass);
        $fileGen->write();

        $progress->finish();
    }

    /**
     * To allow for better IDE support, we're going to add docblocks to the ExchangeWebServices class that show what
     * methods we can call on the SOAP client. We fetch the methods by creating an actual SoapClient and converting the
     * method names into method names that we can then add to the docblock. We reflect on the current
     * ExchangeWebServices class so that we're not overriding any custom code or docblocks, just addin our methods tags
     * on top of the existing class.
     */
    protected function setClientMethodDocblocks(): void
    {
        // @TODO: Can we pass the TypeMap into this SoapClient and get the actual method responses in our docblocks?
        $client = new \SoapClient(__DIR__ . '/../../Resources/wsdl/services.wsdl');
        $functions = $client->__getFunctions();

        sort($functions);
        $functions = array_map(function ($function) {
            return preg_replace(
                "~^[a-z]+\\s([a-z]+) ?\\(.+\\)$~i",
                "\$1",
                $function
            );
        }, $functions);

        $exchangeWebServicesReflection = new ClassReflection(ExchangeWebServices::class);
        $fileGen = (new FileGenerator())->setFilename($exchangeWebServicesReflection->getFileName());
        $fileGen->setFilename($exchangeWebServicesReflection->getFileName());

        $exchangeWebServicesClass = Generator\ClassGenerator::fromReflection($exchangeWebServicesReflection);
        $uses = [
            'garethp\ews\API\Exception\ExchangeException',
            'garethp\ews\API\Exception\NoResponseReturnedException',
            'garethp\ews\API\Exception\ServiceUnavailableException',
            'garethp\ews\API\Exception\UnauthorizedException',
            'garethp\ews\API\ExchangeWebServices\MiddlewareFactory',
            'garethp\ews\API\Message\ResponseMessageType',
            'garethp\ews\API\Type\EmailAddressType',
            '\Closure'
        ];

        // The Laminas/Zend Code package doesn't preserve any `use` statements, so we've got a list of manual uses that
        // we always need to add back in
        foreach ($uses as $use) {
            if (!$exchangeWebServicesClass->hasUse($use)) {
                $exchangeWebServicesClass->addUse($use);
            }
        }

        $docblock = $exchangeWebServicesClass->getDocBlock();
        $reflection = new \ReflectionClass($docblock);
        $property = $reflection->getProperty('tags');
        $property->setAccessible(true);
        $property->setValue($docblock, []);
        $docblock->setWordWrap(false);

        $tags = [];
        $tags[] = new Generator\DocBlock\Tag\GenericTag('@package php-ews\\Client');
        $tags[] = new EmptyDocblockTag();

        foreach ($functions as $function) {
            $tag = new MethodWIthRequestTag($function, ['Type']);

            $tags[] = $tag;
        }

        $docblock->setTags($tags);
        $exchangeWebServicesClass->getDocBlock()->setSourceDirty(true);

        $fileGen->setClass($exchangeWebServicesClass);
        $fileGen->setDocBlock(
            (new Generator\DocBlockGenerator())->setShortDescription("Contains ExchangeWebServices.")
        );

        $fileGen->write();
    }
}
