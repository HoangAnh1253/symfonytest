<?php

namespace ContainerZTHr9vU;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VRM4WuBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vRM4WuB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vRM4WuB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'equipment' => ['privates', '.errored..service_locator.vRM4WuB.App\\Entity\\Equipment', NULL, 'Cannot autowire service ".service_locator.vRM4WuB": it references class "App\\Entity\\Equipment" but no such service exists.'],
        ], [
            'equipment' => 'App\\Entity\\Equipment',
        ]);
    }
}
