<?php

namespace Zorbus\ArticleBundle\Entity\Base;

/**
 * Zorbus\ArticleBundle\Entity\Tag
 */
abstract class Tag
{
    public function __toString()
    {
        return $this->getName();
    }
}