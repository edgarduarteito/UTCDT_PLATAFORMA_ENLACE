<?php

namespace ItoSoftware\Base\ModelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ItoSoftware\Base\ModelBundle\Entity\Evento;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class FixturesEventos extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface {

    public function getOrder() {
        return 40;
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


        $eventos = array(
            array(
                'titulo' => 'Concierto Inaugural',
                'fecha'=>new \DateTime('2014-10-24'),
                'municipio' => 'municipio_ibague',
                'descripcion' => 'muestra del talento musical de la aula musical de Ibague.',
                'detalle' => '<p>Características:
                    • 5 Pisos.
                    • 70 habitaciones.
                    • 58 habitaciones de 13,5 m2, cama doble de 1,40 x 1,90.
                    • 11 Habitaciones de 15 m2, 2 camas sencillas de 1,00 x 1,90.
                    • 1 habitación para discapacitados, con cama doble de 1,40 x 1,90.
                    • Lobby bar abierto 24 horas.
                    • Salón de reuniones.
                    • Terraza de comidas.
                    • Parqueadero.
                    En Eco Star Hotel ofrecemos hospedaje de alto diseño y calidad, al mejor precio y contamos con dos tipos de habitaciones:
                    • Habitación de cama doble
                    • Habitación de dos camas sencillas
                    Capacidad máxima para dos personas.</p>',
                'lugar' => 'Calle 60 No.9-96 Ibagué-Tolima'
                
            ),
            array(
                'titulo' => 'Presentacion Alfonso Jimenez',
                'fecha'=>new \DateTime('2014-12-18'),
                'municipio' => 'municipio_melgar',
                'descripcion' => 'El mejor del talento tolimense de la aula musical del melgar.',
                'detalle' => '<p>Características:
                    • 5 Pisos.
                    • 70 habitaciones.
                    • 58 habitaciones de 13,5 m2, cama doble de 1,40 x 1,90.
                    • 11 Habitaciones de 15 m2, 2 camas sencillas de 1,00 x 1,90.
                    • 1 habitación para discapacitados, con cama doble de 1,40 x 1,90.
                    • Lobby bar abierto 24 horas.
                    • Salón de reuniones.
                    • Terraza de comidas.
                    • Parqueadero.
                    En Eco Star Hotel ofrecemos hospedaje de alto diseño y calidad, al mejor precio y contamos con dos tipos de habitaciones:
                    • Habitación de cama doble
                    • Habitación de dos camas sencillas
                    Capacidad máxima para dos personas.</p>',
                'lugar' => 'Calle 80 No.9-96 Melgar-Tolima'
            ),
            
        );


        foreach ($eventos as $evento) {
            $new_evento = new Evento();
            $new_evento->setTitulo($evento['titulo']);
            $new_evento->setFecha($evento['fecha']);
            $new_evento->setMunicipio($this->getReference($evento['municipio']));
            $new_evento->setDescripcionCorta($evento['descripcion']);
            $new_evento->setDetalle($evento['detalle']);
            $new_evento->setLugar($evento['lugar']);
           
            $manager->persist($new_evento);
           $this->setReference('evento_' . $new_evento->getSlug(), $new_evento);
        }
        $manager->flush();
    }

}

?>