<?php

declare(strict_types=1);

namespace Dn\Saas\Admin;

use Dn\Saas\Admin\DependencyInjection\AdminExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class AdminBundle extends AbstractBundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        if (!$this->extension) {
            $this->extension = new AdminExtension();
        }
        return $this->extension;
    }

    public function getPath(): string
    {
        return dirname(__DIR__);
    }

}