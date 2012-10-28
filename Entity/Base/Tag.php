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

    public function isEnabled()
    {
        return $this->enabled;
    }
}