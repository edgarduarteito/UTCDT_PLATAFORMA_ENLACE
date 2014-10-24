<?php

// MySuperFilterType.php

namespace WebApp\FrontendBundle\Filter;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Lexik\Bundle\FormFilterBundle\Filter\Query\QueryInterface;

class HotelFilterType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $builder->add('titulo', 'filter_text', array('attr'=>array('class'=>'form-control'),
            'apply_filter' => function (QueryInterface $filterQuery, $field, $values) {
            if (!empty($values['value'])) {
                $qb = $filterQuery->getQueryBuilder();
                $qb->andWhere("LOWER(" . $field . ") LIKE " . "LOWER('%" . $values['value'] . "%')");
            }
        }));
        
        $builder->add('municipio', 'filter_entity', array(
    'empty_value' => 'Municipio','attr'=>array('class'=>'form-control'),'class' => 'ItoModelBundle:Municipio', 'property' => 'nombre',
            'apply_filter' => function (QueryInterface $filterQuery, $field, $values) {
            if (!empty($values['value'])) {
                $qb = $filterQuery->getQueryBuilder();
                $qb->andWhere("h.municipio=" . $values["value"]->getId());
            }
        }));
        $builder->add('estrellas', 'filter_choice', array(
    'empty_value' => 'Estrellas ',
            'choices'=>array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5),
            'apply_filter' => function (QueryInterface $filterQuery, $field, $values) {
            if (!empty($values['value'])) {
                $qb = $filterQuery->getQueryBuilder();
                $qb->andWhere("h.calificacion=" . $values['value']);
            }
        }));
    }

    public function getName() {
        return 'plataforma_filter';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'csrf_protection' => false,
            'validation_groups' => array('filtering') // avoid NotBlank() constraint-related message
        ));
    }

}
