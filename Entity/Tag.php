<?php

namespace Zorbus\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zorbus\ArticleBundle\Entity\Tag
 */
class Tag extends Base\Tag
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var boolean $enabled
     */
    private $enabled;

    /**
     * @var string $slug
     */
    private $slug;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $articles;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->articles = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Tag
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return Tag
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Tag
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
     * Add articles
     *
     * @param Zorbus\ArticleBundle\Entity\Article $articles
     * @return Tag
     */
    public function addArticle(\Zorbus\ArticleBundle\Entity\Article $articles)
    {
        $this->articles[] = $articles;

        return $this;
    }

    /**
     * Remove articles
     *
     * @param Zorbus\ArticleBundle\Entity\Article $articles
     */
    public function removeArticle(\Zorbus\ArticleBundle\Entity\Article $articles)
    {
        $this->articles->removeElement($articles);
    }

    /**
     * Get articles
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getArticles()
    {
        return $this->articles;
    }
}