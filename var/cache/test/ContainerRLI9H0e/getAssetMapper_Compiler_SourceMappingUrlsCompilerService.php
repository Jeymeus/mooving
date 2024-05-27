<?php

namespace ContainerRLI9H0e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Compiler_SourceMappingUrlsCompilerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'asset_mapper.compiler.source_mapping_urls_compiler' shared service.
     *
     * @return \Symfony\Component\AssetMapper\Compiler\SourceMappingUrlsCompiler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset-mapper'.\DIRECTORY_SEPARATOR.'Compiler'.\DIRECTORY_SEPARATOR.'AssetCompilerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset-mapper'.\DIRECTORY_SEPARATOR.'Compiler'.\DIRECTORY_SEPARATOR.'SourceMappingUrlsCompiler.php';

        return $container->privates['asset_mapper.compiler.source_mapping_urls_compiler'] = new \Symfony\Component\AssetMapper\Compiler\SourceMappingUrlsCompiler();
    }
}
