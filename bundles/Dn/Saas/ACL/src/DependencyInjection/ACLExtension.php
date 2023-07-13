<?php

namespace Dn\Saas\ACL\DependencyInjection;

use Composer\InstalledVersions;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class ACLExtension extends Extension
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

        $this->loadAnnotation($configs, $container);

        $configuration = $this->getConfiguration($configs, $container);

        $this->processConfiguration($configuration, $configs);
    }

    /**
     * @param array $configs
     * @param ContainerBuilder $container
     * @return void
     * @throws \Exception
     */
    protected function loadAnnotation(array $configs, ContainerBuilder $container): void
    {
        $loader = new PhpFileLoader($container, new FileLocator(\dirname(__DIR__).'/Resources/config'));

        if (class_exists(InstalledVersions::class) && InstalledVersions::isInstalled('symfony/symfony') && 'symfony/symfony' !== (InstalledVersions::getRootPackage()['name'] ?? '')) {
            trigger_deprecation('symfony/symfony', '6.1', 'Requiring the "symfony/symfony" package is deprecated; replace it with standalone components instead.');
        }
        $loader->load('annotation.php');
    }

    /**
     * This once to define bundle name and bundle config name /packages/dn_saas_admin.yaml
     *
     * @return string
     */
    public function getAlias(): string
    {
        return 'dn_saas_acl';
    }
}