<?php

namespace ContainerZTHr9vU;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEquipmentControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\EquipmentController' shared autowired service.
     *
     * @return \App\Controller\EquipmentController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'EquipmentController.php';

        $container->services['App\\Controller\\EquipmentController'] = $instance = new \App\Controller\EquipmentController(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['App\\Repository\\EquipmentRepository'] ?? $container->load('getEquipmentRepositoryService')), ($container->services['App\\Repository\\CategoryRepository'] ?? $container->load('getCategoryRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), ($container->privates['validator'] ?? $container->load('getValidatorService')));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\EquipmentController', $container));

        return $instance;
    }
}
