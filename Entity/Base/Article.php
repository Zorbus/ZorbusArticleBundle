<?php

namespace Zorbus\ArticleBundle\Entity\Base;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Zorbus\ArticleBundle\Entity\Article
 */
abstract class Article
{

    protected $imageTemp;
    protected $attachmentTemp;
    protected $image;
    protected $attachment;

    public function __toString()
    {
        return $this->getTitle();
    }

    public function getImageTemp()
    {
        return $this->imageTemp;
    }

    public function setImageTemp($image)
    {
        $this->imageTemp = $image;
    }

    public function getAttachmentTemp()
    {
        return $this->attachmentTemp;
    }

    public function setAttachmentTemp($attachment)
    {
        $this->attachmentTemp = $attachment;
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

    /**
     * @ORM\PrePersist
     */
    public function preImageUpload()
    {
        if (null !== $this->imageTemp)
        {
            $this->image = sha1(uniqid(mt_rand(), true)) . '.' . $this->imageTemp->guessExtension();
        }
    }

    /**
     * @ORM\PrePersist
     */
    public function preAttachmentUpload()
    {
        if (null !== $this->attachmentTemp)
        {
            $this->attachment = sha1(uniqid(mt_rand(), true)) . '.' . $this->attachmentTemp->guessExtension();
        }
    }

    /**
     * @ORM\PostRemove
     */
    public function postRemove()
    {
        if ($file = $this->getAbsolutePath($this->image))
        {
            @unlink($file);
        }
        if ($file = $this->getAbsolutePath($this->attachment))
        {
            @unlink($file);
        }
    }

    /**
     * @ORM\PostPersist
     */
    public function postImageUpload()
    {
        if ($this->imageTemp instanceof UploadedFile)
        {
            $this->imageTemp->move($this->getUploadRootDir(), $this->image);

            unset($this->imageTemp);
        }
    }

    /**
     * @ORM\PostPersist
     */
    public function postAttachmentUpload()
    {
        if ($this->attachmentTemp instanceof UploadedFile)
        {
            $this->attachmentTemp->move($this->getUploadRootDir(), $this->attachment);

            unset($this->attachmentTemp);
        }
    }

}