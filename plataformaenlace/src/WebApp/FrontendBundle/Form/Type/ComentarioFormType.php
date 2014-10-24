<?php
namespace WebApp\FrontendBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class ComentarioFormType extends  AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('estrellas','genemu_jqueryrating',array('label'=>'Calificación','required'=>true));
        $builder->add('comentario','textarea',array('label'=>'Comentario','required'=>true));

//        $municipioSubscriber = new AddMunicipioSubscriber($factory);
//        $builder->addEventSubscriber($municipioSubscriber);
    }

    public function getName()
    {
        return 'comentario_form';
    }
}
