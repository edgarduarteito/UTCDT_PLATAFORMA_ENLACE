<?php

namespace ItoSoftware\Base\ModelBundle\Twig;

class HotelesExtension extends \Twig_Extension {

    public function getFunctions() {

        return array('hoteles' => new \Twig_Function_Method($this, 'masHoteles'),);
    }

    public function masHoteles() {
        $container = \Utilities\ApplicationBoot::getContainer();
        $em = $container->get('doctrine')->getManager();
        $hotel = $em->getRepository('ItoModelBundle:Hotel');
        $count = $hotel->createQueryBuilder('u')
                ->select('COUNT(u)')
                ->getQuery()
                ->getResult();
        $consulta= $hotel->createQueryBuilder('u')
                        ->setFirstResult(rand(0, $count[0][1]))
                        ->setMaxResults(2)
                        ->getQuery()
                        ->getResult()
        ;
        return $consulta;
    }

    public function getName() {
        return 'hoteles_extension';
    }

}
