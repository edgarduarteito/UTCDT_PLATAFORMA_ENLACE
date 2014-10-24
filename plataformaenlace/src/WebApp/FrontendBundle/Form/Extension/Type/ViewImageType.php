<?php

namespace WebApp\FrontendBundle\Form\Extension\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ViewImageType extends AbstractType {

    public function getName() {
        return 'view_image';
    }
}