<?php

declare(strict_types=1);

namespace Dn\Saas\Admin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('dn_saas_admin');
        /** @var ArrayNodeDefinition $rootNode */
        $treeBuilder->getRootNode()
            ->children()
                ->arrayNode('config')
                    ->children()
                        ->scalarNode('email')->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}