<?php

namespace ContainerRLI9H0e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_MimeBodyRendererService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'twig.mime_body_renderer' shared service.
     *
     * @return \Symfony\Bridge\Twig\Mime\BodyRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mime'.\DIRECTORY_SEPARATOR.'BodyRendererInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Mime'.\DIRECTORY_SEPARATOR.'BodyRenderer.php';

        $a = ($container->privates['twig'] ?? self::getTwigService($container));

        if (isset($container->privates['twig.mime_body_renderer'])) {
            return $container->privates['twig.mime_body_renderer'];
        }

        return $container->privates['twig.mime_body_renderer'] = new \Symfony\Bridge\Twig\Mime\BodyRenderer($a, localeSwitcher: ($container->privates['translation.locale_switcher'] ?? self::getTranslation_LocaleSwitcherService($container)));
    }
}
