<?php
namespace Zorbus\ArticleBundle\Model;

use Zorbus\BlockBundle\Model\BlockConfig;

abstract class BaseBlockCategoryConfig extends BlockConfig
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
    public function getCategoriesAsArray()
    {
        $objects = $this->em->getRepository('ZorbusArticleBundle:Category')->findAll();
        $categories = array();
        foreach ($objects as $category)
        {
            $categories[$category->getId()] = $category->getName();
        }

        return $categories;
    }
}