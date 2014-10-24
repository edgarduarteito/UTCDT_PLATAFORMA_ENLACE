<?php

namespace WebApp\FrontendBundle\Form\Type;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Collection;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
 use Symfony\Component\Validator\Constraints\Blank;
class ContactoFormType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder->add('email', 'email', array('required' => true, 'invalid_message' => 'email requerido',
       'constraints' => new Email(),
                    'attr' => array(
                        'placeholder' => '',
                        'class' => 'form-control'
                    )
                ))
                ->add('asunto', 'text', array('required' => true,'constraints' => new NotBlank(),'invalid_message' => 'no vacio',
        'error_bubbling' => true,
                    'attr' => array(
                        'placeholder' => '',
                        'class' => 'form-control'
                    )
                ))
                ->add('mensaje', 'textarea', array(
                    'required' => true,'constraints' => new NotBlank(),'invalid_message' => 'no vacio',
        'error_bubbling' => true,
                    'attr' => array(
                        'cols' => 68,
                        'rows' => 6,
                        'placeholder' => '',
                        'class' => 'form-control'
                    )
        ));

//        $municipioSubscriber = new AddMunicipioSubscriber($factory);
//        $builder->addEventSubscriber($municipioSubscriber);
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
//        $collectionConstraint = new Collection(array(
//            
//            'email' => array(
//                new NotBlank(array('message' => 'Email Requerido.')),
//                new Email(array('message' => 'Email invalido.'))
//            ),
//            'asunto' => array(
//                new NotBlank(array('message' => 'asunto requerido.')),
//               
//            ),
//            'mensaje' => array(
//                new NotBlank(array('message' => 'mensaje requerido.')),
//                
//            )
//        ));

        $resolver->setDefaults(array(
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
        ));
    }

    public function getName() {
        return 'contacto';
    }

}
