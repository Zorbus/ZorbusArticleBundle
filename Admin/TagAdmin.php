<?php
namespace Zorbus\ArticleBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\MaxLength;
use Sonata\AdminBundle\Form\FormMapper;

class TagAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', null, array(
                'constraints' => array(
                    new NotBlank(),
                    new MaxLength(array('limit' => 255))
                )
            ))
            ->add('enabled')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('enabled')
        ;
    }

    public function configureShowFields(ShowMapper $filter)
    {
        $filter
                ->add('name')
                ->add('enabled')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('enabled')
        ;
    }
}