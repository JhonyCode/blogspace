<?php

namespace ContainerXIHjSsT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_V6G2LRwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.v6G2LRw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.v6G2LRw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'etiquetaRepository' => ['privates', 'App\\Repository\\EtiquetaRepository', 'getEtiquetaRepositoryService', true],
            'etiquetum' => ['privates', '.errored..service_locator.v6G2LRw.App\\Entity\\Etiqueta', NULL, 'Cannot autowire service ".service_locator.v6G2LRw": it references class "App\\Entity\\Etiqueta" but no such service exists.'],
        ], [
            'etiquetaRepository' => 'App\\Repository\\EtiquetaRepository',
            'etiquetum' => 'App\\Entity\\Etiqueta',
        ]);
    }
}
