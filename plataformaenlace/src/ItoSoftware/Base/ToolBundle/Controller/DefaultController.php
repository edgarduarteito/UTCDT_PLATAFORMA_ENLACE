<?php

namespace ItoSoftware\Base\ToolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ItoToolBundle:Default:index.html.twig', array('name' => $name));
    }
}
