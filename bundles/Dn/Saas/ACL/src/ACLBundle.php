<?php

namespace Dn\Saas\ACL;

use Dn\Saas\ACL\DependencyInjection\ACLExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class ACLBundle  extends AbstractBundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        if (!$this->extension) {
            $this->extension = new ACLExtension();
        }
        return $this->extension;
    }

    public function getPath(): string
    {
        return dirname(__DIR__);
    }
}