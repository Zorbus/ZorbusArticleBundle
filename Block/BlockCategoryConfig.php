<?php

namespace Zorbus\ArticleBundle\Block;

use Symfony\Component\Validator\Constraints as Assert;
use Zorbus\BlockBundle\Entity\Block as BlockEntity;
use Zorbus\BlockBundle\Model\BlockConfig;
use Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Admin\AdminInterface;
use Symfony\Component\Form\FormFactory;

class BlockCategoryConfig extends BlockConfig
{

    public function __construct(AdminInterface $admin, TimedTwigEngine $template, FormFactory $formFactory)
    {
        parent::__construct('zorbus_article.block.categories', 'Article Category Block', $admin, $formFactory);
        $this->enabled = true;
        $this->themes = array();
        $this->template = $template;
    }

    public function getFormBuilder()
    {
        $formMapper = new FormMapper($this->admin->getFormContractor(), $this->formBuilder, $this->admin);
        $formMapper
                ->add('title', 'text', array('constraints' => array(
                        new Assert\NotBlank()
                        )))
                ->add('url', 'text', array('constraints' => array(
                        new Assert\NotBlank(),
                        new Assert\Url()
                        )))
                ->add('lang', 'text')
                ->add('name', 'text')
                ->add('enabled', 'checkbox', array('required' => false));

        return $formMapper->getFormBuilder();
    }

    public function getBlockEntity(array $data, BlockEntity $block = null)
    {
        $block = null === $block ? new Block() : $block;

        $block->setService($this->getService());
        $block->setParameters(json_encode(array('title' => $data['title'], 'url' => $data['url'])));
        $block->setEnabled((boolean) $data['enabled']);
        $block->setLang($data['lang']);
        $block->setName($data['name']);

        return $block;
    }

    public function render(BlockEntity $block)
    {
        if ($block->getService() != $this->getService())
        {
            throw new \InvalidArgumentException('Block service not supported');
        }

        $parameters = json_decode($block->getParameters());

        return $this->template->renderResponse('ZorbusArticleBundle:Render:text.html.twig', array('block' => $block, 'parameters' => $parameters));
    }

}