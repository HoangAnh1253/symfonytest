<?php

<<<<<<< HEAD:var/cache/dev/ContainerZLMyazr/getRedirectControllerService.php
<<<<<<< HEAD:var/cache/dev/ContainerFFfIZfl/getRedirectControllerService.php
namespace ContainerFFfIZfl;

=======
namespace ContainerZLMyazr;
>>>>>>> 9b03bdf0df8650d60f8b2bd0d2214076809a92cf:var/cache/dev/ContainerZLMyazr/getRedirectControllerService.php
=======
namespace ContainerBDdVKy1;
>>>>>>> 021acb7f1c1b8268aafe571d0af6e812e6d8d48c:var/cache/dev/ContainerBDdVKy1/getRedirectControllerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRedirectControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\RedirectController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'RedirectController.php';

        $a = ($container->privates['router.request_context'] ?? $container->getRouter_RequestContextService());

        return $container->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'] = new \Symfony\Bundle\FrameworkBundle\Controller\RedirectController(($container->services['router'] ?? $container->getRouterService()), $a->getHttpPort(), $a->getHttpsPort());
    }
}