<?php

namespace ItoSoftware\Base\ModelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ItoSoftware\Base\ModelBundle\Entity\Visitas;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class FixturesVisitas extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface {

    public function getOrder() {
        return 10;
    }

    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }

    public function load(ObjectManager $manager) {
        
        $em = $this->container->get('doctrine')->getEntityManager();
        
        
        $visitas = array(
            array(
                'visita' => 1,
            ),
        );
        
        
        
        foreach ($visitas as $visita) {
            $new_visita = new Visitas();
            $new_visita->setVisitas($visita['visita']);
            $manager->persist($new_visita);
        }
        $manager->flush();
    }

}

?>