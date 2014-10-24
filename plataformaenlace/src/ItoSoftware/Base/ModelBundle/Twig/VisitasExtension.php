<?php

namespace ItoSoftware\Base\ModelBundle\Twig;

class VisitasExtension extends \Twig_Extension {

    public function getFunctions() {

        return array('visitas' => new \Twig_Function_Method($this, 'totalVisitas'),);
    }
    protected $session;

        public function __construct(\Symfony\Component\HttpFoundation\Session\Session $session)
        {
            $this->session = $session;
        }

    public function totalVisitas() {
        $container = \Utilities\ApplicationBoot::getContainer();
        $em = $container->get('doctrine')->getManager();
        $session = $this->session;
        $visitas = $em->getRepository('ItoModelBundle:Visitas')->findAll();
        if (!$session->get('visited')) {
            $session->set('visited', 'yes');
            $cont = $visitas[0]->getVisitas();
            $cont++;
            $visitas[0]->setVisitas($cont);
            $em->persist($visitas[0]);
            $em->flush();
        }
                  
        return $visitas[0]->getVisitas();
    }

    public function getName() {
        return 'visitas_extension';
    }

}
