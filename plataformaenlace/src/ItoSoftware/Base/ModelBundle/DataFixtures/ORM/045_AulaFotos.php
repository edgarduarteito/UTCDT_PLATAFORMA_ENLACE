<?php

namespace ItoSoftware\Base\ModelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ItoSoftware\Base\ModelBundle\Entity\AulaFoto;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class FixturesAulaFotos extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface {

    public function getOrder() {
        return 45;
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
                'nombre' => 'aula 1',
                'foto' => 'aula1.jpg',
                'descripcion' => 'Descripcion de la foto',
                'aula' => 'aula-musical-ibague',
            ),
            array(
                'nombre' => 'aula 2',
                'foto' => 'aula2.JPG',
                'descripcion' => 'Descripcion de la foto',
                'aula' => 'aula-musical-melgar',
            ),
            array(
                'nombre' => 'aula 3',
                'foto' => 'aula3.JPG',
                'descripcion' => 'Descripcion de la foto',
                'aula' => 'aula-musical-honda',
            ),
            array(
                'nombre' => 'aula 4',
                'foto' => 'aula4.png',
                'descripcion' => 'Descripcion de la foto',
                'aula' => 'aula-musical-melgar',
            ),
            array(
                'nombre' => 'aula 5',
                'foto' => 'aula5.jpg',
                'descripcion' => 'Descripcion de la foto',
                'aula' => 'aula-musical-honda',
            ),
            
        );


            foreach ($fotos as $foto) {
                $new_foto = new AulaFoto();
                $new_foto->setNombre($foto['nombre']);
                $new_foto->setFoto($foto['foto']);
                $new_foto->setDescripcion($foto['descripcion']);
                $new_foto->setAula($this->getReference('aula_' . $foto['aula']));
                $manager->persist($new_foto);
                $manager->flush();
        }
    }

}

?>