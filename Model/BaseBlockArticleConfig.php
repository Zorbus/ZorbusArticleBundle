<?php
namespace Zorbus\ArticleBundle\Model;

use Zorbus\BlockBundle\Model\BlockConfig;

abstract class BaseBlockArticleConfig extends BlockConfig
{
    protected $em;

    public function setEntityManager($em)
    {
        $this->em = $em;
    }
    public function getEntityManager()
    {
        return $this->em;
    }
    public function getArticlesAsArray()
    {
        $objects = $this->em->getRepository('ZorbusArticleBundle:Article')->findAll();
        $articles = array();
        foreach ($objects as $article)
        {
            $articles[$article->getId()] = $article->getTitle();
        }

        return $articles;
    }
}