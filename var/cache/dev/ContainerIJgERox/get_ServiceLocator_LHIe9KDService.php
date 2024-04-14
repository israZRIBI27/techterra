<?php

namespace ContainerIJgERox;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LHIe9KDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lHIe9KD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lHIe9KD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repliesRepository' => ['privates', 'App\\Repository\\RepliesRepository', 'getRepliesRepositoryService', true],
        ], [
            'repliesRepository' => 'App\\Repository\\RepliesRepository',
        ]);
    }
}
