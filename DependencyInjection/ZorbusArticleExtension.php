<?php

namespace Zorbus\ArticleBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class ZorbusArticleExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter('zorbus_article.article.themes', $this->getThemes($config['article']['themes']));
        $container->setParameter('zorbus_article.category.themes', $this->getThemes($config['category']['themes']));

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        $container->setParameter('zorbus_article.article.admin.class', $config['article']['admin']['class']);
        $container->setParameter('zorbus_article.category.admin.class', $config['article']['admin']['class']);
        $container->setParameter('zorbus_article.tag.admin.class', $config['article']['admin']['class']);

        $container->setParameter('zorbus_article.article.entity.class', $config['article']['admin']['entity']);
        $container->setParameter('zorbus_article.category.entity.class', $config['category']['admin']['entity']);
        $container->setParameter('zorbus_article.tag.entity.class', $config['tag']['admin']['entity']);

        $container->setParameter('zorbus_article.article.controller.class', $config['article']['admin']['controller']);
        $container->setParameter('zorbus_article.category.controller.class', $config['category']['admin']['controller']);
        $container->setParameter('zorbus_article.tag.controller.class', $config['tag']['admin']['controller']);
    }
    protected function getThemes(array $themes)
    {
        $t = array();

        foreach ($themes as $controller => $name)
        {
            $t[$controller] = $name['name'];
        }

        return $t;
    }
}
