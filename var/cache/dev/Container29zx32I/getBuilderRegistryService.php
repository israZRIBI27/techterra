<?php

namespace Container29zx32I;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBuilderRegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Endroid\QrCode\Builder\BuilderRegistry' shared autowired service.
     *
     * @return \Endroid\QrCode\Builder\BuilderRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'endroid'.\DIRECTORY_SEPARATOR.'qr-code'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Builder'.\DIRECTORY_SEPARATOR.'BuilderRegistryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'endroid'.\DIRECTORY_SEPARATOR.'qr-code'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Builder'.\DIRECTORY_SEPARATOR.'BuilderRegistry.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'endroid'.\DIRECTORY_SEPARATOR.'qr-code'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Builder'.\DIRECTORY_SEPARATOR.'BuilderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'endroid'.\DIRECTORY_SEPARATOR.'qr-code'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Builder'.\DIRECTORY_SEPARATOR.'Builder.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'endroid'.\DIRECTORY_SEPARATOR.'qr-code'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Encoding'.\DIRECTORY_SEPARATOR.'EncodingInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'endroid'.\DIRECTORY_SEPARATOR.'qr-code'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Encoding'.\DIRECTORY_SEPARATOR.'Encoding.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'endroid'.\DIRECTORY_SEPARATOR.'qr-code'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Writer'.\DIRECTORY_SEPARATOR.'WriterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'endroid'.\DIRECTORY_SEPARATOR.'qr-code'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Writer'.\DIRECTORY_SEPARATOR.'ValidatingWriterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'endroid'.\DIRECTORY_SEPARATOR.'qr-code'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Writer'.\DIRECTORY_SEPARATOR.'AbstractGdWriter.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'endroid'.\DIRECTORY_SEPARATOR.'qr-code'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Writer'.\DIRECTORY_SEPARATOR.'PngWriter.php';

        $container->privates['Endroid\\QrCode\\Builder\\BuilderRegistry'] = $instance = new \Endroid\QrCode\Builder\BuilderRegistry();

        $a = new \Endroid\QrCode\Builder\Builder();
        $a->writer(($container->privates['Endroid\\QrCode\\Writer\\PngWriter'] ?? ($container->privates['Endroid\\QrCode\\Writer\\PngWriter'] = new \Endroid\QrCode\Writer\PngWriter())));
        $a->size(300);
        $a->margin(10);
        $a->encoding(new \Endroid\QrCode\Encoding\Encoding('UTF-8'));
        $a->errorCorrectionLevel(\Endroid\QrCode\ErrorCorrectionLevel::Low);
        $a->roundBlockSizeMode(\Endroid\QrCode\RoundBlockSizeMode::Margin);
        $a->validateResult(false);

        $instance->addBuilder('default', $a);

        return $instance;
    }
}