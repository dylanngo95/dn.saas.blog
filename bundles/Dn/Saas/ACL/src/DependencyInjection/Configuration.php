<?php

namespace Dn\Saas\ACL\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('dn_saas_acl');
        /** @var ArrayNodeDefinition $rootNode */
        $treeBuilder->getRootNode()
            ->children()
                ->arrayNode('config')
                    ->children()
                        ->scalarNode('enable')->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}