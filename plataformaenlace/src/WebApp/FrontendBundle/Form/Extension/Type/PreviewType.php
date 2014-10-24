<?php

namespace WebApp\FrontendBundle\Form\Extension\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PreviewType extends AbstractType {

    public function getName() {
        return 'preview';
    }

}