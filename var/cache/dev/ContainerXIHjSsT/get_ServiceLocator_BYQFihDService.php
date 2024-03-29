<?php

namespace ContainerXIHjSsT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BYQFihDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BYQFihD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BYQFihD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'comentario' => ['privates', '.errored..service_locator.BYQFihD.App\\Entity\\Comentario', NULL, 'Cannot autowire service ".service_locator.BYQFihD": it references class "App\\Entity\\Comentario" but no such service exists.'],
        ], [
            'comentario' => 'App\\Entity\\Comentario',
        ]);
    }
}
