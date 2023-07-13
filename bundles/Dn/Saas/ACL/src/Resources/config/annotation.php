<?php

use Dn\Saas\ACL\Loader\AnnotationFileLoader;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function(ContainerConfigurator $container) {
    $container->services()
        ->set('routing.loader.annotation.file', AnnotationFileLoader::class)
        ->args([
            service('file_locator'),
            service('routing.loader.annotation'),
        ])
        ->tag('routing.loader', ['priority' => -10]);
};
