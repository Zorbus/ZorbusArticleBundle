<?php

namespace Zorbus\ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zorbus\ArticleBundle\Entity\Category
 */
class Category
{
    public function __toString()
    {
        return $this->getName();
    }
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $description
     */
    private $description;

    /**
     * @var string $lang
     */
    private $lang;

    /**
     * @var string $image
     */
    private $image;

    /**
     * @var boolean $is_highlighted
     */
    private $is_highlighted;

    /**
     * @var boolean $is_enabled
     */
    private $is_enabled;

    /**
     * @var integer $user_id
     */
    private $user_id;

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
     * @return Category
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
     * Set description
     *
     * @param string $description
     * @return Category
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set lang
     *
     * @param string $lang
     * @return Category
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
     * Set image
     *
     * @param string $image
     * @return Category
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
     * Set is_highlighted
     *
     * @param boolean $isHighlighted
     * @return Category
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
     * @return Category
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
     * Set user_id
     *
     * @param integer $userId
     * @return Category
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
     * Set slug
     *
     * @param string $slug
     * @return Category
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
     * @return Category
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
     * @return Category
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
     * Add articles
     *
     * @param Zorbus\ArticleBundle\Entity\Article $articles
     * @return Category
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
    /**
     * @var integer $lft
     */
    private $lft;

    /**
     * @var integer $rgt
     */
    private $rgt;

    /**
     * @var integer $root
     */
    private $root;

    /**
     * @var integer $lvl
     */
    private $lvl;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $children;

    /**
     * @var Zorbus\ArticleBundle\Entity\Category
     */
    private $parent;


    /**
     * Set lft
     *
     * @param integer $lft
     * @return Category
     */
    public function setLft($lft)
    {
        $this->lft = $lft;
    
        return $this;
    }

    /**
     * Get lft
     *
     * @return integer 
     */
    public function getLft()
    {
        return $this->lft;
    }

    /**
     * Set rgt
     *
     * @param integer $rgt
     * @return Category
     */
    public function setRgt($rgt)
    {
        $this->rgt = $rgt;
    
        return $this;
    }

    /**
     * Get rgt
     *
     * @return integer 
     */
    public function getRgt()
    {
        return $this->rgt;
    }

    /**
     * Set root
     *
     * @param integer $root
     * @return Category
     */
    public function setRoot($root)
    {
        $this->root = $root;
    
        return $this;
    }

    /**
     * Get root
     *
     * @return integer 
     */
    public function getRoot()
    {
        return $this->root;
    }

    /**
     * Set lvl
     *
     * @param integer $lvl
     * @return Category
     */
    public function setLvl($lvl)
    {
        $this->lvl = $lvl;
    
        return $this;
    }

    /**
     * Get lvl
     *
     * @return integer 
     */
    public function getLvl()
    {
        return $this->lvl;
    }

    /**
     * Add children
     *
     * @param Zorbus\ArticleBundle\Entity\Category $children
     * @return Category
     */
    public function addChildren(\Zorbus\ArticleBundle\Entity\Category $children)
    {
        $this->children[] = $children;
    
        return $this;
    }

    /**
     * Remove children
     *
     * @param Zorbus\ArticleBundle\Entity\Category $children
     */
    public function removeChildren(\Zorbus\ArticleBundle\Entity\Category $children)
    {
        $this->children->removeElement($children);
    }

    /**
     * Get children
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set parent
     *
     * @param Zorbus\ArticleBundle\Entity\Category $parent
     * @return Category
     */
    public function setParent(\Zorbus\ArticleBundle\Entity\Category $parent = null)
    {
        $this->parent = $parent;
    
        return $this;
    }

    /**
     * Get parent
     *
     * @return Zorbus\ArticleBundle\Entity\Category 
     */
    public function getParent()
    {
        return $this->parent;
    }
}