<?php

namespace Zorbus\ArticleBundle\Entity\Base;

/**
 * Zorbus\ArticleBundle\Entity\Category
 */
abstract class Category
{

    public function __toString()
    {
        return $this->getName();
    }

}