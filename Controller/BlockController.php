<?php

namespace Zorbus\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlockController extends Controller
{

    public function articleAction($block)
    {
        $parameters = json_decode($block->getParameters());
        $article = $this->getDoctrine()->getRepository('ZorbusArticleBundle:Article')->find($parameters->article);

        return $this->render('ZorbusArticleBundle:Block:article.html.twig', array(
                    'block' => $block, 'article' => $article
                ));
    }
    public function categoryAction($block)
    {
        $parameters = json_decode($block->getParameters());
        $category = $this->getDoctrine()->getRepository('ZorbusArticleBundle:Category')->find($parameters->category);

        return $this->render('ZorbusArticleBundle:Block:category.html.twig', array(
                    'block' => $block, 'category' => $category
                ));
    }

}
