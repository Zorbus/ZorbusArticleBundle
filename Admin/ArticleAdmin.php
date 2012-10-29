<?php

namespace Zorbus\ArticleBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

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
                ->with('Personal info')
                ->add('title')
                ->add('subtitle')
                ->add('body', 'textarea', array('attr' => array('class' => 'ckeditor')))
                ->end()
                ->with('General')
                ->add('type')
                ->add('attachmentTemp', 'file', array('required' => false, 'label' => 'Attachment'))
                ->add('imageTemp', 'file', array('required' => false, 'label' => 'Image'))
                ->add('status')
                ->add('is_highlighted')
                ->add('date_show')
                ->add('date_hide')
                ->add('date_published')
                ->add('date_event')
                ->add('categories', null, array('expanded' => true, 'required' => false))
                ->add('tags', null, array('expanded' => true, 'required' => false))
                ->add('enabled', null, array('required' => false))
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
                ->add('title')
                ->add('type')
                ->add('status')
                ->add('categories')
                ->add('tags')
                ->add('date_published')
                ->add('enabled')
        ;
    }

    public function validate(ErrorElement $errorElement, $object)
    {
        $errorElement
                ->with('title')
                ->assertMaxLength(array('limit' => 255))
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