<?php

namespace ContainerZTHr9vU;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SKD5_GsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sKD5.Gs' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sKD5.Gs'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'equipment' => ['privates', '.errored..service_locator.sKD5.Gs.App\\Entity\\Equipment', NULL, 'Cannot autowire service ".service_locator.sKD5.Gs": it references class "App\\Entity\\Equipment" but no such service exists.'],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'equipment' => 'App\\Entity\\Equipment',
            'paginator' => '?',
        ]);
    }
}
