<?php

namespace Zorbus\ArticleBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('zorbus_article');

        $rootNode
            ->children()
                ->arrayNode('article')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->arrayNode('themes')
                            ->defaultValue(array(
                                    'ZorbusArticleBundle:Block:article' => array('name' => 'Default')
                                ))
                            ->useAttributeAsKey('controller')
                            ->prototype('array')
                                ->children()
                                    ->scalarNode('name')->isRequired()->end()
                                ->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
                ->arrayNode('category')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->arrayNode('themes')
                            ->defaultValue(array(
                                    'ZorbusArticleBundle:Block:category' => array('name' => 'Default')
                                ))
                            ->useAttributeAsKey('controller')
                            ->prototype('array')
                                ->children()
                                    ->scalarNode('name')->isRequired()->end()
                                ->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
