<?php

namespace Container2yuiyUZ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YwOwGVpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ywOwGVp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ywOwGVp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\EquipmentController::delete' => ['privates', '.service_locator.1eTIucE', 'get_ServiceLocator_1eTIucEService', true],
            'App\\Controller\\EquipmentController::edit' => ['privates', '.service_locator.vRM4WuB', 'get_ServiceLocator_VRM4WuBService', true],
            'App\\Controller\\EquipmentController::filterByCategory' => ['privates', '.service_locator.7P87fGM', 'get_ServiceLocator_7P87fGMService', true],
            'App\\Controller\\EquipmentController::show' => ['privates', '.service_locator.vRM4WuB', 'get_ServiceLocator_VRM4WuBService', true],
            'App\\Controller\\MoviesController::edit' => ['privates', '.service_locator.I4k6Jea', 'get_ServiceLocator_I4k6JeaService', true],
            'App\\Controller\\MoviesController::show' => ['privates', '.service_locator.I4k6Jea', 'get_ServiceLocator_I4k6JeaService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\EquipmentController:delete' => ['privates', '.service_locator.1eTIucE', 'get_ServiceLocator_1eTIucEService', true],
            'App\\Controller\\EquipmentController:edit' => ['privates', '.service_locator.vRM4WuB', 'get_ServiceLocator_VRM4WuBService', true],
            'App\\Controller\\EquipmentController:filterByCategory' => ['privates', '.service_locator.7P87fGM', 'get_ServiceLocator_7P87fGMService', true],
            'App\\Controller\\EquipmentController:show' => ['privates', '.service_locator.vRM4WuB', 'get_ServiceLocator_VRM4WuBService', true],
            'App\\Controller\\MoviesController:edit' => ['privates', '.service_locator.I4k6Jea', 'get_ServiceLocator_I4k6JeaService', true],
            'App\\Controller\\MoviesController:show' => ['privates', '.service_locator.I4k6Jea', 'get_ServiceLocator_I4k6JeaService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\EquipmentController::delete' => '?',
            'App\\Controller\\EquipmentController::edit' => '?',
            'App\\Controller\\EquipmentController::filterByCategory' => '?',
            'App\\Controller\\EquipmentController::show' => '?',
            'App\\Controller\\MoviesController::edit' => '?',
            'App\\Controller\\MoviesController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\EquipmentController:delete' => '?',
            'App\\Controller\\EquipmentController:edit' => '?',
            'App\\Controller\\EquipmentController:filterByCategory' => '?',
            'App\\Controller\\EquipmentController:show' => '?',
            'App\\Controller\\MoviesController:edit' => '?',
            'App\\Controller\\MoviesController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}