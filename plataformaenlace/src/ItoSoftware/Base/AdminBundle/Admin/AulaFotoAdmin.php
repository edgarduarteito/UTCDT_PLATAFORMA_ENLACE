<?php

namespace ItoSoftware\Base\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class AulaFotoAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nombre')
            ->add('descripcion')
            ->add('aula')    
            
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
         $listMapper
            ->add('nombre')
            ->add('foto', null, array('label' => 'Imagen', 'template' => 'ItoAdminBundle:HotelFoto:imagenAula.html.twig'))
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
            ->add('aula',null,array('label'=>'Aula'))    
            
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('nombre')
            ->add('foto', null, array('label' => 'Imagen', 'template' => 'ItoAdminBundle:HotelFoto:show_aula_img.html.twig'))
            ->add('descripcion')
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
