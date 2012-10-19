<?php

namespace Zorbus\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zorbus\ArticleBundle\Entity\Article
 */
class Article
{
    public function __toString()
    {
        return $this->getTitle();
    }
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $title
     */
    private $title;

    /**
     * @var string $subtitle
     */
    private $subtitle;

    /**
     * @var string $body
     */
    private $body;

    /**
     * @var string $lang
     */
    private $lang;

    /**
     * @var string $type
     */
    private $type;

    /**
     * @var string $attachment
     */
    private $attachment;
    public $attachmentTemp;

    /**
     * @var string $image
     */
    private $image;
    public $imageTemp;

    /**
     * @var string $status
     */
    private $status;

    /**
     * @var string $author
     */
    private $author;

    /**
     * @var string $source
     */
    private $source;

    /**
     * @var string $local
     */
    private $local;

    /**
     * @var boolean $is_highlighted
     */
    private $is_highlighted;

    /**
     * @var boolean $is_enabled
     */
    private $is_enabled;

    /**
     * @var \DateTime $date_show
     */
    private $date_show;

    /**
     * @var \DateTime $date_hide
     */
    private $date_hide;

    /**
     * @var boolean $date_published
     */
    private $date_published;

    /**
     * @var string $date_event
     */
    private $date_event;

    /**
     * @var integer $user_id
     */
    private $user_id;

    /**
     * @var string $observations
     */
    private $observations;

    /**
     * @var string $slug
     */
    private $slug;

    /**
     * @var \DateTime $created_at
     */
    private $created_at;

    /**
     * @var \DateTime $updated_at
     */
    private $updated_at;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $categories;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $tags;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Article
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set subtitle
     *
     * @param string $subtitle
     * @return Article
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * Get subtitle
     *
     * @return string
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return Article
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set lang
     *
     * @param string $lang
     * @return Article
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Article
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set attachment
     *
     * @param string $attachment
     * @return Article
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * Get attachment
     *
     * @return string
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Article
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Article
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Article
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set source
     *
     * @param string $source
     * @return Article
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set local
     *
     * @param string $local
     * @return Article
     */
    public function setLocal($local)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get local
     *
     * @return string
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Set is_highlighted
     *
     * @param boolean $isHighlighted
     * @return Article
     */
    public function setIsHighlighted($isHighlighted)
    {
        $this->is_highlighted = $isHighlighted;

        return $this;
    }

    /**
     * Get is_highlighted
     *
     * @return boolean
     */
    public function getIsHighlighted()
    {
        return $this->is_highlighted;
    }

    /**
     * Set is_enabled
     *
     * @param boolean $isEnabled
     * @return Article
     */
    public function setIsEnabled($isEnabled)
    {
        $this->is_enabled = $isEnabled;

        return $this;
    }

    /**
     * Get is_enabled
     *
     * @return boolean
     */
    public function getIsEnabled()
    {
        return $this->is_enabled;
    }

    /**
     * Set date_show
     *
     * @param \DateTime $dateShow
     * @return Article
     */
    public function setDateShow($dateShow)
    {
        $this->date_show = $dateShow;

        return $this;
    }

    /**
     * Get date_show
     *
     * @return \DateTime
     */
    public function getDateShow()
    {
        return $this->date_show;
    }

    /**
     * Set date_hide
     *
     * @param \DateTime $dateHide
     * @return Article
     */
    public function setDateHide($dateHide)
    {
        $this->date_hide = $dateHide;

        return $this;
    }

    /**
     * Get date_hide
     *
     * @return \DateTime
     */
    public function getDateHide()
    {
        return $this->date_hide;
    }

    /**
     * Set date_published
     *
     * @param boolean $datePublished
     * @return Article
     */
    public function setDatePublished($datePublished)
    {
        $this->date_published = $datePublished;

        return $this;
    }

    /**
     * Get date_published
     *
     * @return boolean
     */
    public function getDatePublished()
    {
        return $this->date_published;
    }

    /**
     * Set date_event
     *
     * @param string $dateEvent
     * @return Article
     */
    public function setDateEvent($dateEvent)
    {
        $this->date_event = $dateEvent;

        return $this;
    }

    /**
     * Get date_event
     *
     * @return string
     */
    public function getDateEvent()
    {
        return $this->date_event;
    }

    /**
     * Set user_id
     *
     * @param integer $userId
     * @return Article
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Get user_id
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set observations
     *
     * @param string $observations
     * @return Article
     */
    public function setObservations($observations)
    {
        $this->observations = $observations;

        return $this;
    }

    /**
     * Get observations
     *
     * @return string
     */
    public function getObservations()
    {
        return $this->observations;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Article
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Article
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Article
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Add categories
     *
     * @param Zorbus\ArticleBundle\Entity\Category $categories
     * @return Article
     */
    public function addCategorie(\Zorbus\ArticleBundle\Entity\Category $categories)
    {
        $this->categories[] = $categories;

        return $this;
    }

    /**
     * Add categories
     *
     * @param Zorbus\ArticleBundle\Entity\Category $categories
     * @return Article
     */
    public function setCategories(\Zorbus\ArticleBundle\Entity\Category $categories = null)
    {
        return null === $categories ? $this : $this->addCategorie($categories);
    }

    /**
     * Remove categories
     *
     * @param Zorbus\ArticleBundle\Entity\Category $categories
     */
    public function removeCategorie(\Zorbus\ArticleBundle\Entity\Category $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add tags
     *
     * @param Zorbus\ArticleBundle\Entity\Tag $tags
     * @return Article
     */
    public function addTag(\Zorbus\ArticleBundle\Entity\Tag $tags)
    {
        $this->tags[] = $tags;

        return $this;
    }

    /**
     * Add tags
     *
     * @param Zorbus\ArticleBundle\Entity\Tag $tags
     * @return Article
     */
    public function setTags(\Zorbus\ArticleBundle\Entity\Tag $tags = null)
    {
        return null === $tags ? $this : $this->addTag($tags);
    }

    /**
     * Remove tags
     *
     * @param Zorbus\ArticleBundle\Entity\Tag $tags
     */
    public function removeTag(\Zorbus\ArticleBundle\Entity\Tag $tags)
    {
        $this->tags->removeElement($tags);
    }

    /**
     * Get tags
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getTags()
    {
        return $this->tags;
    }

    /***
     * custom methods
     */
    public function getAbsolutePath($file)
    {
        return null === $file ? null : $this->getUploadRootDir().'/'.$file;
    }

    public function getWebPath($file)
    {
        return null === $file ? null : $this->getUploadDir().'/'.$file;
    }

    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../../../web/'.$this->getUploadDir();
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
        if (null !== $this->imageTemp) {
            $this->image = sha1(uniqid(mt_rand(), true)).'.'.$this->imageTemp->guessExtension();
        }
    }

    /**
     * @ORM\PrePersist
     */
    public function preFileUpload()
    {
        if (null !== $this->attachmentTemp) {
            $this->attachment = sha1(uniqid(mt_rand(), true)).'.'.$this->attachmentTemp->guessExtension();
        }
    }

    /**
     * @ORM\PostRemove
     */
    public function postRemove()
    {
        if ($file = $this->getAbsolutePath($this->image)) {
            @unlink($file);
        }
        if ($file = $this->getAbsolutePath($this->attachment)) {
            @unlink($file);
        }
    }

    /**
     * @ORM\PostPersist
     */
    public function postImageUpload()
    {
        if (null === $this->imageTemp) {
            return;
        }

        $this->imageTemp->move($this->getUploadRootDir(), $this->image);

        unset($this->imageTemp);
    }

    /**
     * @ORM\PostPersist
     */
    public function postFileUpload()
    {
        if (null === $this->attachmentTemp) {
            return;
        }

        $this->attachmentTemp->move($this->getUploadRootDir(), $this->attachment);

        unset($this->attachmentTemp);
    }
}