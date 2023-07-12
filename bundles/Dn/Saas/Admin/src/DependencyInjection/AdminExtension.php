<?php

declare(strict_types=1);

namespace Dn\Saas\Admin\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class AdminExtension extends Extension
{

    /**
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__ . '/../../config/')
        );
        $loader->load('services.yaml');

        $configuration = $this->getConfiguration($configs, $container);

        $this->processConfiguration($configuration, $configs);
    }

    /**
     * This once to define bundle name and bundle config name /packages/dn_saas_admin.yaml
     *
     * @return string
     */
    public function getAlias(): string
    {
        return 'dn_saas_admin';
    }
}