<?php

namespace ItoSoftware\Base\ModelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ItoSoftware\Base\ModelBundle\Entity\EventoFoto;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class FixturesEventoFotos extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface {

    public function getOrder() {
        return 60;
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


        $fotos = array(
            array(
                'nombre' => 'aula 6',
                'foto' => 'aula6.JPG',
                'descripcion' => 'Descripcion de la foto',
                'evento' => 'concierto-inaugural',
            ),
            array(
                'nombre' => 'aula 7',
                'foto' => 'aula7.JPG',
                'descripcion' => 'Descripcion de la foto',
                'evento' => 'presentacion-alfonso-jimenez',
            ),
            
            
        );


            foreach ($fotos as $foto) {
                $new_foto = new EventoFoto();
                $new_foto->setNombre($foto['nombre']);
                $new_foto->setFoto($foto['foto']);
                $new_foto->setDescripcion($foto['descripcion']);
                $new_foto->setEvento($this->getReference('evento_' . $foto['evento']));
                $manager->persist($new_foto);
                $manager->flush();
        }
    }

   

}

?>