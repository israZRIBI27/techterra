<?php

namespace ContainerLOp0gLB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__Hh8PIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._.hh8PI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._.hh8PI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\BackendRepliesController::delete' => ['privates', '.service_locator.LuYAUBz', 'get_ServiceLocator_LuYAUBzService', true],
            'App\\Controller\\BackendRepliesController::edit' => ['privates', '.service_locator.LuYAUBz', 'get_ServiceLocator_LuYAUBzService', true],
            'App\\Controller\\BackendRepliesController::index' => ['privates', '.service_locator.lHIe9KD', 'get_ServiceLocator_LHIe9KDService', true],
            'App\\Controller\\BackendRepliesController::show' => ['privates', '.service_locator.PkoNfOe', 'get_ServiceLocator_PkoNfOeService', true],
            'App\\Controller\\BackendThreadsController::delete' => ['privates', '.service_locator.FLTieui', 'get_ServiceLocator_FLTieuiService', true],
            'App\\Controller\\BackendThreadsController::deleteAuthor' => ['privates', '.service_locator.F3Hojpz', 'get_ServiceLocator_F3HojpzService', true],
            'App\\Controller\\BackendThreadsController::edit' => ['privates', '.service_locator.FLTieui', 'get_ServiceLocator_FLTieuiService', true],
            'App\\Controller\\BackendThreadsController::index' => ['privates', '.service_locator.zAOy9XD', 'get_ServiceLocator_ZAOy9XDService', true],
            'App\\Controller\\BackendThreadsController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\BackendThreadsController::show' => ['privates', '.service_locator.pquPSYi', 'get_ServiceLocator_PquPSYiService', true],
            'App\\Controller\\BackendTopicsController::delete' => ['privates', '.service_locator.pzDelrD', 'get_ServiceLocator_PzDelrDService', true],
            'App\\Controller\\BackendTopicsController::deleteTopic' => ['privates', '.service_locator.BclwFzF', 'get_ServiceLocator_BclwFzFService', true],
            'App\\Controller\\BackendTopicsController::edit' => ['privates', '.service_locator.pzDelrD', 'get_ServiceLocator_PzDelrDService', true],
            'App\\Controller\\BackendTopicsController::index' => ['privates', '.service_locator.Fe_l5bV', 'get_ServiceLocator_FeL5bVService', true],
            'App\\Controller\\BackendTopicsController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\BackendTopicsController::show' => ['privates', '.service_locator.gBMNm5H', 'get_ServiceLocator_GBMNm5HService', true],
            'App\\Controller\\RepliesController::delete' => ['privates', '.service_locator.LuYAUBz', 'get_ServiceLocator_LuYAUBzService', true],
            'App\\Controller\\RepliesController::edit' => ['privates', '.service_locator.LuYAUBz', 'get_ServiceLocator_LuYAUBzService', true],
            'App\\Controller\\RepliesController::index' => ['privates', '.service_locator.lHIe9KD', 'get_ServiceLocator_LHIe9KDService', true],
            'App\\Controller\\RepliesController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\RepliesController::show' => ['privates', '.service_locator.PkoNfOe', 'get_ServiceLocator_PkoNfOeService', true],
            'App\\Controller\\ThreadsController::delete' => ['privates', '.service_locator.FLTieui', 'get_ServiceLocator_FLTieuiService', true],
            'App\\Controller\\ThreadsController::deleteR' => ['privates', '.service_locator.LuYAUBz', 'get_ServiceLocator_LuYAUBzService', true],
            'App\\Controller\\ThreadsController::edit' => ['privates', '.service_locator.FLTieui', 'get_ServiceLocator_FLTieuiService', true],
            'App\\Controller\\ThreadsController::index' => ['privates', '.service_locator.nByn7Rk', 'get_ServiceLocator_NByn7RkService', true],
            'App\\Controller\\ThreadsController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ThreadsController::showThreads' => ['privates', '.service_locator.FLTieui', 'get_ServiceLocator_FLTieuiService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\BackendRepliesController:delete' => ['privates', '.service_locator.LuYAUBz', 'get_ServiceLocator_LuYAUBzService', true],
            'App\\Controller\\BackendRepliesController:edit' => ['privates', '.service_locator.LuYAUBz', 'get_ServiceLocator_LuYAUBzService', true],
            'App\\Controller\\BackendRepliesController:index' => ['privates', '.service_locator.lHIe9KD', 'get_ServiceLocator_LHIe9KDService', true],
            'App\\Controller\\BackendRepliesController:show' => ['privates', '.service_locator.PkoNfOe', 'get_ServiceLocator_PkoNfOeService', true],
            'App\\Controller\\BackendThreadsController:delete' => ['privates', '.service_locator.FLTieui', 'get_ServiceLocator_FLTieuiService', true],
            'App\\Controller\\BackendThreadsController:deleteAuthor' => ['privates', '.service_locator.F3Hojpz', 'get_ServiceLocator_F3HojpzService', true],
            'App\\Controller\\BackendThreadsController:edit' => ['privates', '.service_locator.FLTieui', 'get_ServiceLocator_FLTieuiService', true],
            'App\\Controller\\BackendThreadsController:index' => ['privates', '.service_locator.zAOy9XD', 'get_ServiceLocator_ZAOy9XDService', true],
            'App\\Controller\\BackendThreadsController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\BackendThreadsController:show' => ['privates', '.service_locator.pquPSYi', 'get_ServiceLocator_PquPSYiService', true],
            'App\\Controller\\BackendTopicsController:delete' => ['privates', '.service_locator.pzDelrD', 'get_ServiceLocator_PzDelrDService', true],
            'App\\Controller\\BackendTopicsController:deleteTopic' => ['privates', '.service_locator.BclwFzF', 'get_ServiceLocator_BclwFzFService', true],
            'App\\Controller\\BackendTopicsController:edit' => ['privates', '.service_locator.pzDelrD', 'get_ServiceLocator_PzDelrDService', true],
            'App\\Controller\\BackendTopicsController:index' => ['privates', '.service_locator.Fe_l5bV', 'get_ServiceLocator_FeL5bVService', true],
            'App\\Controller\\BackendTopicsController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\BackendTopicsController:show' => ['privates', '.service_locator.gBMNm5H', 'get_ServiceLocator_GBMNm5HService', true],
            'App\\Controller\\RepliesController:delete' => ['privates', '.service_locator.LuYAUBz', 'get_ServiceLocator_LuYAUBzService', true],
            'App\\Controller\\RepliesController:edit' => ['privates', '.service_locator.LuYAUBz', 'get_ServiceLocator_LuYAUBzService', true],
            'App\\Controller\\RepliesController:index' => ['privates', '.service_locator.lHIe9KD', 'get_ServiceLocator_LHIe9KDService', true],
            'App\\Controller\\RepliesController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\RepliesController:show' => ['privates', '.service_locator.PkoNfOe', 'get_ServiceLocator_PkoNfOeService', true],
            'App\\Controller\\ThreadsController:delete' => ['privates', '.service_locator.FLTieui', 'get_ServiceLocator_FLTieuiService', true],
            'App\\Controller\\ThreadsController:deleteR' => ['privates', '.service_locator.LuYAUBz', 'get_ServiceLocator_LuYAUBzService', true],
            'App\\Controller\\ThreadsController:edit' => ['privates', '.service_locator.FLTieui', 'get_ServiceLocator_FLTieuiService', true],
            'App\\Controller\\ThreadsController:index' => ['privates', '.service_locator.nByn7Rk', 'get_ServiceLocator_NByn7RkService', true],
            'App\\Controller\\ThreadsController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ThreadsController:showThreads' => ['privates', '.service_locator.FLTieui', 'get_ServiceLocator_FLTieuiService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\BackendRepliesController::delete' => '?',
            'App\\Controller\\BackendRepliesController::edit' => '?',
            'App\\Controller\\BackendRepliesController::index' => '?',
            'App\\Controller\\BackendRepliesController::show' => '?',
            'App\\Controller\\BackendThreadsController::delete' => '?',
            'App\\Controller\\BackendThreadsController::deleteAuthor' => '?',
            'App\\Controller\\BackendThreadsController::edit' => '?',
            'App\\Controller\\BackendThreadsController::index' => '?',
            'App\\Controller\\BackendThreadsController::new' => '?',
            'App\\Controller\\BackendThreadsController::show' => '?',
            'App\\Controller\\BackendTopicsController::delete' => '?',
            'App\\Controller\\BackendTopicsController::deleteTopic' => '?',
            'App\\Controller\\BackendTopicsController::edit' => '?',
            'App\\Controller\\BackendTopicsController::index' => '?',
            'App\\Controller\\BackendTopicsController::new' => '?',
            'App\\Controller\\BackendTopicsController::show' => '?',
            'App\\Controller\\RepliesController::delete' => '?',
            'App\\Controller\\RepliesController::edit' => '?',
            'App\\Controller\\RepliesController::index' => '?',
            'App\\Controller\\RepliesController::new' => '?',
            'App\\Controller\\RepliesController::show' => '?',
            'App\\Controller\\ThreadsController::delete' => '?',
            'App\\Controller\\ThreadsController::deleteR' => '?',
            'App\\Controller\\ThreadsController::edit' => '?',
            'App\\Controller\\ThreadsController::index' => '?',
            'App\\Controller\\ThreadsController::new' => '?',
            'App\\Controller\\ThreadsController::showThreads' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\BackendRepliesController:delete' => '?',
            'App\\Controller\\BackendRepliesController:edit' => '?',
            'App\\Controller\\BackendRepliesController:index' => '?',
            'App\\Controller\\BackendRepliesController:show' => '?',
            'App\\Controller\\BackendThreadsController:delete' => '?',
            'App\\Controller\\BackendThreadsController:deleteAuthor' => '?',
            'App\\Controller\\BackendThreadsController:edit' => '?',
            'App\\Controller\\BackendThreadsController:index' => '?',
            'App\\Controller\\BackendThreadsController:new' => '?',
            'App\\Controller\\BackendThreadsController:show' => '?',
            'App\\Controller\\BackendTopicsController:delete' => '?',
            'App\\Controller\\BackendTopicsController:deleteTopic' => '?',
            'App\\Controller\\BackendTopicsController:edit' => '?',
            'App\\Controller\\BackendTopicsController:index' => '?',
            'App\\Controller\\BackendTopicsController:new' => '?',
            'App\\Controller\\BackendTopicsController:show' => '?',
            'App\\Controller\\RepliesController:delete' => '?',
            'App\\Controller\\RepliesController:edit' => '?',
            'App\\Controller\\RepliesController:index' => '?',
            'App\\Controller\\RepliesController:new' => '?',
            'App\\Controller\\RepliesController:show' => '?',
            'App\\Controller\\ThreadsController:delete' => '?',
            'App\\Controller\\ThreadsController:deleteR' => '?',
            'App\\Controller\\ThreadsController:edit' => '?',
            'App\\Controller\\ThreadsController:index' => '?',
            'App\\Controller\\ThreadsController:new' => '?',
            'App\\Controller\\ThreadsController:showThreads' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
