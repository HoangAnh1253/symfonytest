<?php

namespace App\EventSubscriber;

use App\Controller\TokenAuthenticatedControllerr;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class JWTSubscriber implements EventSubscriberInterface
{
    public function onKernelController(ControllerEvent $event): void
    {
        // ...
        $controller = $event->getController();
      
        if (is_array($controller)) {
            $action = $controller[1];
            $controller = $controller[0];
           
        }
       
        if ($controller instanceof TokenAuthenticatedControllerr) {
            error_log($event->getRequest()->cookies->get('PHPSESSID'));
            // $token = $event->getRequest()->query->get('token');
            // if (!in_array($token, $this->tokens)) {
            //     throw new AccessDeniedHttpException('This action needs a valid token!');
            // }
        }
    }

    public static function getSubscribedEvents(): array
    {
        return [
            'kernel.controller' => 'onKernelController',
        ];
    }
}