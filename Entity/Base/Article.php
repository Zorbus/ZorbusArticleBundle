<?php

namespace Zorbus\ArticleBundle\Entity\Base;

/**
 * Zorbus\ArticleBundle\Entity\Article
 */
abstract class Article
{
    public $imageTemp;
    public $attachmentTemp;

    public function __toString()
    {
        return $this->getTitle();
    }

    public function getAbsolutePath($file)
    {
        return null === $file ? null : $this->getUploadRootDir() . '/' . $file;
    }

    public function getWebPath($file)
    {
        return null === $file ? null : $this->getUploadDir() . '/' . $file;
    }

    protected function getUploadRootDir()
    {
        return __DIR__ . '/../../../../../../../web/' . $this->getUploadDir();
    }

    protected function getUploadDir()
    {
        return 'uploads/articles';
    }
}