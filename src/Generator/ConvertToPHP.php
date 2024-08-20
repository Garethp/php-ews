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
 * Created by PhpStorm.
 * User: gareth
 * Date: 7-8-15
 * Time: 15:18
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
            if (class_exists($itemClass)) {
                $fileGen = new FileGenerator();
                $fileGen->setFilename($path);

                $existingFile = (new \Zend\Code\Reflection\ClassReflection($itemClass))->getDeclaringFile();
                $classGen = \Zend\Code\Generator\ClassGenerator::fromReflection(new \Zend\Code\Reflection\ClassReflection($itemClass));

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
                if (isset($item->type) && $item->type->getName() != "" && $item->getNamespace() !== Enumeration::class) {
                    $classMap[$item->type->getName()] =
                        '\\' . $namespace . '\\' . $classGen->getName();
                }
            } else {
            }
        }

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
     * @return array
     */
    protected function setClientMethodDocblocks()
    {
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
