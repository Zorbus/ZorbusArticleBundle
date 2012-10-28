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

    public function isHighlighted()
    {
        return $this->is_highlighted;
    }

    public function isEnabled()
    {
        return $this->enabled;
    }

}