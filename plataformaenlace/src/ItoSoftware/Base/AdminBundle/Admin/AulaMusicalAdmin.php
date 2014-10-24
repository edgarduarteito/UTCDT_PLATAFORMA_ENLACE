<?php

namespace ItoSoftware\Base\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class AulaMusicalAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('titulo')
            ->add('descripcion')
            ->add('componente')
            ->add('capacitaciones')
            ->add('detalle')
            ->add('lugar')
            
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('titulo')
            ->add('descripcion')
            ->add('municipio', null, array('required' => true))     
             ->add('detalle', null, array('label' => 'detalle', 'template' => 'ItoAdminBundle:HotelFoto:detalle.html.twig'))        
            ->add('_action', 'actions', array('label'=>'Acciones',
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('titulo')
            ->add('descripcion')
            ->add('componente', 'textarea', array('required'=>true))
            ->add('capacitaciones', 'textarea', array('required'=>true))
            ->add('detalle', 'textarea', array('required'=>true))
            ->add('municipio', null, array('required' => true))     
            ->add('lugar')
            
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('titulo')
            ->add('descripcion')
            ->add('componente')
            ->add('capacitaciones')
            ->add('detalle')
            ->add('municipio')     
            ->add('lugar')
            
        ;
    }
}
