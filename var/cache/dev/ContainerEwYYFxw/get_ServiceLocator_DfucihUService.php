<?php

namespace ContainerEwYYFxw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DfucihUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DfucihU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DfucihU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'image' => ['privates', '.errored..service_locator.DfucihU.App\\Entity\\Image', NULL, 'Cannot autowire service ".service_locator.DfucihU": it needs an instance of "App\\Entity\\Image" but this type has been excluded in "config/services.yaml".'],
        ], [
            'doctrine' => '?',
            'image' => 'App\\Entity\\Image',
        ]);
    }
}
