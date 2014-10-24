<?php

namespace ItoSoftware\Base\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EventoAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('titulo')
            ->add('fecha')
            ->add('descripcionCorta')
            ->add('lugar')
            ->add('municipio')    
            
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('titulo')
            ->add('fecha', null, array('label' => 'Fecha', 'template' => 'ItoAdminBundle:HotelFoto:fecha.html.twig'))
            ->add('descripcionCorta')
            ->add('detalle', null, array('label' => 'detalle', 'template' => 'ItoAdminBundle:HotelFoto:detalle.html.twig'))
            ->add('lugar')
            ->add('municipio') 
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
            ->add('fecha','datetime',array('label'=>'Fecha Creación', 'years'=> range(1950, 2020)))
            ->add('municipio', null, array('required' => true))     
            ->add('descripcionCorta')
            ->add('detalle', 'textarea', array('required'=>true))
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
            ->add('fecha', null, array('label' => 'Fecha', 'template' => 'ItoAdminBundle:HotelFoto:show_fecha.html.twig'))
            ->add('descripcionCorta')
            ->add('detalle', null, array('safe' => true))
            ->add('lugar')
            ->add('municipio')     
            
        ;
    }
}
