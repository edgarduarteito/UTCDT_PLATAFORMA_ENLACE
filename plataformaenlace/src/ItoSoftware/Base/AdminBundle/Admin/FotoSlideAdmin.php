<?php

namespace ItoSoftware\Base\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class FotoSlideAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nombre',null,array('label'=>'Nombre'))
            ->add('descripcion',null,array('label'=>'Descripción'))
                 ;
    }

    public function getExportFields() {
        $results = $this->getModelManager()->getExportFields($this->getClass()); 

        // Need to add again our foreign key field here
        $results[] = 'nombre';

        return $results;
    }
    
    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nombre')
            ->add('descripcion')
            ->add('foto', null, array('label' => 'Imagen', 'template' => 'ItoAdminBundle:HotelFoto:slide_img.html.twig'))
            ->add('createdAt',null,array('label'=>'Fecha de Creación','template' => 'ItoAdminBundle:HotelFoto:fcreacion.html.twig'))
            ->add('updatedAt',null,array('label'=>'Fecha de Actualizacion','template' => 'ItoAdminBundle:HotelFoto:fupdate.html.twig'))
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
        $object = $this->getSubject();
        $this->foto = $object->getFoto();
                $nuevo = true;
        if ($object->getId() && $object->getFoto()) {
            $nuevo = false;
        }
        $formMapper
            ->add('nombre')
                ->add('view_image', 'view_image', array('label' => ' '))
                ->add('foto', 'file', array(
                    'data_class' => null,
                    'required' => $nuevo
                ))
            ->add('descripcion')
               
            
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('nombre')
            ->add('descripcion')
            ->add('foto', null, array('label' => 'Imagen', 'template' => 'ItoAdminBundle:HotelFoto:show_slide_img.html.twig'))
            ->add('createdAt',null,array('label'=>'Fecha de Creación','template' => 'ItoAdminBundle:HotelFoto:show_fcreate.html.twig'))
            ->add('updatedAt',null,array('label'=>'Fecha de Actualización','template' => 'ItoAdminBundle:HotelFoto:show_fupdate.html.twig'))
            
        ;
    }
    public function prePersist($object) {
        //$this->manageFileUpload($object);
        $object->upload();
    }

    public function preUpdate($object) {

        if ($object->getFoto()) {
            $object->upload();
        } else {
            $object->setNombreArchivo($this->foto);
        }
    }
}
