<?php

namespace ItoSoftware\Base\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ComentarioEventoAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('texto',null,array('label'=>'Comentario'))
            ->add('calificacion',null,array('label'=>'Calificación'))
            
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('texto',null,array('label'=>'Comentario', 'template' => 'ItoAdminBundle:HotelFoto:comenta.html.twig'))
            ->add('calificacion',null,array('label'=>'Calificación'))
            ->add('_action', 'actions', array('label'=>'Acciones',
                'actions' => array(
                    'show' => array(),
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
            ->add('texto',null,array('label'=>'Comentario'))
            ->add('calificacion',null,array('label'=>'Calificación'))
           
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('texto',null,array('label'=>'Comentario'))
            ->add('calificacion',null,array('label'=>'Calificación'))
            
        ;
    }
     protected function configureRoutes(\Sonata\AdminBundle\Route\RouteCollection $collection) {
        parent::configureRoutes($collection);
        $collection->remove('create');
        $collection->remove('update');
       
        
    }
}
