<?php

namespace Zorbus\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller
{

    public function indexAction()
    {
        $articles = $this->getDoctrine()->getRepository($this->container->getParameter('zorbus_article.article.repository'))->getArticles();
        return $this->render('ZorbusArticleBundle:Article:index.html.twig', array('articles' => $articles));
    }
    public function tagAction($slug)
    {
        $tag = $this->getDoctrine()->getRepository($this->container->getParameter('zorbus_article.tag.repository'))->findOneBy(array('slug' => $slug));
        $articles = $this->getDoctrine()->getRepository($this->container->getParameter('zorbus_article.article.repository'))->getArticlesWithTag($slug);
        return $this->render('ZorbusArticleBundle:Article:tag.html.twig', array('articles' => $articles, 'tag' => $tag));
    }
    public function categoryAction($slug)
    {
        $category = $this->getDoctrine()->getRepository($this->container->getParameter('zorbus_article.category.repository'))->findOneBy(array('slug' => $slug));
        $articles = $this->getDoctrine()->getRepository($this->container->getParameter('zorbus_article.article.repository'))->getArticlesWithCategory($slug);
        return $this->render('ZorbusArticleBundle:Article:category.html.twig', array('articles' => $articles, 'category' => $category));
    }

    public function showAction($slug)
    {
        $article = $this->getDoctrine()->getRepository($this->container->getParameter('zorbus_article.article.repository'))->findOneBy(array('slug' => $slug));
        return $this->render('ZorbusArticleBundle:Article:show.html.twig', array('article' => $article));
    }

}
