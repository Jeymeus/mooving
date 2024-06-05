<?php

namespace Container5G4vI7i;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_G2fKdh_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.G2fKdh.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.G2fKdh.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'end_date' => ['privates', '.errored..service_locator.G2fKdh..DateTime', NULL, 'Cannot autowire service ".service_locator.G2fKdh.": it references class "DateTime" but no such service exists.'],
            'start_date' => ['privates', '.errored..service_locator.G2fKdh..DateTime', NULL, 'Cannot autowire service ".service_locator.G2fKdh.": it references class "DateTime" but no such service exists.'],
        ], [
            'end_date' => 'DateTime',
            'start_date' => 'DateTime',
        ]);
    }
}
