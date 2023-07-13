<?php

namespace Dn\Saas\ACL\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class RouterListener implements EventSubscriberInterface
{

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => [['onKernelRequest', 33]],
            KernelEvents::FINISH_REQUEST => [['onKernelFinishRequest', 0]],
            KernelEvents::EXCEPTION => ['onKernelException', -64],
        ];
    }

    public function onKernelRequest(RequestEvent $event): void
    {
        $tmp = 0;
    }

    public function onKernelFinishRequest()
    {
        $tmp = 0;
    }

    public function onKernelException()
    {
        $tmp = 0;
    }
}