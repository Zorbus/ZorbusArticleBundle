<?php

namespace Zorbus\ArticleBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\MaxLength;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Image;

class ArticleAdmin extends Admin
{

    public function __construct($code, $class, $baseControllerName)
    {
        parent::__construct($code, $class, $baseControllerName);
        $this->baseRouteName = 'article_admin';
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
                ->with('Identification')
                    ->add('title', null, array(
                        'required' => true,
                        'constraints' => array(
                            new NotBlank(),
                            new MaxLength(array('limit' => 255))
                        )
                    ))
                    ->add('subtitle')
                    ->add('resume', 'textarea', array(
                        'required' => false,
                        'attr' => array('class' => 'ckeditor')
                    ))
                    ->add('body', 'textarea', array(
                        'required' => false,
                        'attr' => array('class' => 'ckeditor'),
                        'constraints' => array(
                            new NotBlank()
                        )
                    ))
                ->end()
                ->with('Configuration', array('collapsed' => false))
                    ->add('type')
                    ->add('attachmentTemp', 'file', array(
                        'required' => false,
                        'label' => 'Attachment',
                        'constraints' => array(
                            new File()
                        )
                    ))
                    ->add('imageTemp', 'file', array(
                        'required' => false,
                        'label' => 'Image',
                        'constraints' => array(
                            new Image()
                        )
                    ))
                    ->add('status', 'sonata_type_translatable_choice', array(
                        'catalogue' => 'ZorbusArticleBundle',
                        'choices' => array(
                            'draft' => 'Draft',
                            'published' => 'Published',
                            'archived' => 'Archived'
                        )
                    ))
                    ->add('is_highlighted')
                    ->add('enabled', null, array('required' => false))
                ->end()
                ->with('Dates', array('collapsed' => true))
                    ->add('date_show')
                    ->add('date_hide')
                    ->add('date_published')
                    ->add('date_event')
                ->end()
                ->with('Classification', array('collapsed' => true))
                    ->add('categories', 'entity', array(
                        'class' => 'Zorbus\\ArticleBundle\\Entity\\Category',
                        'multiple' => true,
                        'expanded' => false,
                        'required' => false,
                        'attr' => array('class' => 'select2 span5')
                    ))
                    ->add('tags', 'entity', array(
                        'class' => 'Zorbus\\ArticleBundle\\Entity\\Tag',
                        'multiple' => true,
                        'expanded' => false,
                        'required' => false,
                        'attr' => array('class' => 'select2 span5')
                    ))
                ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                ->add('title')
                ->add('type')
                ->add('status')
                ->add('enabled')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
                ->addIdentifier('title')
                ->add('type')
                ->add('status')
                ->add('enabled')
        ;
    }

    public function configureShowFields(ShowMapper $filter)
    {
        $filter
            ->with('Identification')
                ->add('title')
                ->add('subtitle')
                ->add('resume', 'text', array('safe' => true))
                ->add('body', 'text', array('safe' => true))
            ->end()
            ->with('Configuration')
                ->add('type')
                ->add('status', 'trans', array(
                    'catalogue' => 'ZorbusArticleBundle'
                ))
                ->add('categories')
                ->add('tags')
                ->add('date_published')
                ->add('is_highlighted')
                ->add('enabled')
            ->end()
        ;
    }

    public function prePersist($object)
    {
        $object->setUpdatedAt(new \DateTime());
    }

    public function preUpdate($object)
    {
        $object->setUpdatedAt(new \DateTime());
    }

}