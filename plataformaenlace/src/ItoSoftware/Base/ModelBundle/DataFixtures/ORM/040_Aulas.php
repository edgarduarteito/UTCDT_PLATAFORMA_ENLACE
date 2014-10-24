<?php

namespace ItoSoftware\Base\ModelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ItoSoftware\Base\ModelBundle\Entity\AulaMusical;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Description of 080_Aulas
 *
 * @author edgarduarte
 */
class FixturesAulas extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface {

    private $container;

    public function getOrder() {
        return 40;
    }

    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }

    public function load(ObjectManager $manager) {
        $em = $this->container->get('doctrine')->getEntityManager();
        $aulas = array(
            array(
                'titulo' => 'Aula Musical Ibague',
                'municipio' => 'municipio_ibague',
                'descripcion' => 'aula musical del municipio de Ibague Jose Garzon Velez',
                'componente' => 'El aula Musical cuenta con 22 violines,40 tambores,98 guitarras, 23 guitarras Electricas'
                . '12 flautas.',
                'capacitacion' => 'se informa que el dia 28 de octubre daremos una capacitacion'
                . ' a los nuevos estudiantes sobre el manejo de los instrumentos y un recorrido virtual por las instalaciones',
                'detalle' => 'el aula cuenta con 8 salones con los respectivos instrumentos,4 baños para hombre y mujer, internet, wifi, tablets,computadores',
                'lugar' => 'carrera 10 45-78 Ibague-Tolima'
            ),
            array(
                'titulo' => 'Aula Musical Melgar',
                'municipio' => 'municipio_melgar',
                'descripcion' => 'aula musical del municipio de Melgar Manuela Caldas',
                'componente' => 'El aula Musical cuenta con 92 violines,90 tambores,98 guitarras, 83 guitarras Electricas'
                . '42 flautas.',
                'capacitacion' => 'se informa que el dia 1 de Noviembre daremos una capacitacion'
                . ' a los nuevos estudiantes sobre el manejo de los instrumentos y un recorrido virtual por las instalaciones',
                'detalle' => 'el aula cuenta con 8 salones con los respectivos instrumentos,4 baños para hombre y mujer, internet, wifi, tablets,computadores',
                'lugar' => 'calle 80 1-98 Melgar-Tolima'
            ),
            array(
                'titulo' => 'Aula Musical Honda',
                'municipio' => 'municipio_honda',
                'descripcion' => 'aula musical del municipio de Acanda Gustavo Rojas',
                'componente' => 'El aula Musical cuenta con 92 violines,90 tambores,98 guitarras, 83 guitarras Electricas'
                . '42 flautas.',
                'capacitacion' => 'se informa que el dia 1 de Noviembre del 2014 daremos una capacitacion'
                . ' a los nuevos estudiantes sobre el manejo de los instrumentos y un recorrido virtual por las instalaciones',
                'detalle' => 'el aula cuenta con 8 salones con los respectivos instrumentos,4 baños para hombre y mujer, internet, wifi, tablets,computadores',
                'lugar' => 'calle 100 90-68 Honda-Tolima'
            ),
        );
        foreach ($aulas as $aula) {
            $new_aula = new AulaMusical();
            $new_aula->setTitulo($aula['titulo']);
            $new_aula->setMunicipio($this->getReference($aula['municipio']));
            $new_aula->setDescripcion($aula['descripcion']);
            $new_aula->setComponente($aula['componente']);
            $new_aula->setCapacitaciones($aula['capacitacion']);
            $new_aula->setDetalle($aula['detalle']);
            $new_aula->setLugar($aula['lugar']);

            $manager->persist($new_aula);
            $this->setReference('aula_' . $new_aula->getSlug(), $new_aula);
        }
        $manager->flush();
    }

//put your code here
}
