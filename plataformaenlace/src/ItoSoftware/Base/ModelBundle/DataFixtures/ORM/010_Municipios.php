<?php

namespace ItoSoftware\Base\ModelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ItoSoftware\Base\ModelBundle\Entity\Municipio;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class FixturesMunicipios extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface {

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
        
        
        $municipios = array(
            array('codigo' => '73024','nombre' => 'Alpujarra', 'activo' => true ),
            array('codigo' => '73026','nombre' => 'Alvarado', 'activo' => true ),
            array('codigo' => '73030', 'nombre' => 'Ambalema', 'activo' => true ),
            array('codigo' => '73043','nombre' => 'Anzoátegui', 'activo' => true ),
            array('codigo' => '73055','nombre' => 'Armero Guayabal', 'activo' => true ),
            array('codigo' => '73067','nombre' => 'Ataco', 'activo' => true ),
            array('codigo' => '73124','nombre' => 'Cajamarca', 'activo' => true ),
            array('codigo' => '73148','nombre' => 'Carmen de apicalá', 'activo' => true ),
            array('codigo' => '73152','nombre' => 'Casabianca', 'activo' => true ),
            array('codigo' => '73168','nombre' => 'Chaparral', 'activo' => true ),
            array('codigo' => '73200','nombre' => 'Coello', 'activo' => true ),
            array('codigo' => '73217', 'nombre' => 'Coyaima', 'activo' => true ),
            array('codigo' => '73226','nombre' => 'Cunday', 'activo' => true ),
            array('codigo' => '73236', 'nombre' => 'Dolores', 'activo' => true ),
            array('codigo' => '73268','nombre' => 'Espinal', 'activo' => true ),
            array('codigo' => '73270','nombre' => 'Falan', 'activo' => true ),
            array('codigo' => '73275','nombre' => 'Flandes', 'activo' => true ),
            array('codigo' => '73283','nombre' => 'Fresno', 'activo' => true ),
            array('codigo' => '73319', 'nombre' => 'Guamo', 'activo' => true ),
            array('codigo' => '73347','nombre' => 'Herveo', 'activo' => true ),
            array('codigo' => '73349', 'nombre' => 'Honda', 'activo' => true ),
            array('codigo' => '73001', 'nombre' => 'Ibagué', 'activo' => true ),
            array('codigo' => '73352', 'nombre' => 'Icononzo', 'activo' => true ),
            array('codigo' => '73408', 'nombre' => 'Lérida', 'activo' => true ),
            array('codigo' => '73411','nombre' => 'Líbano', 'activo' => true ),
            array('codigo' => '73443', 'nombre' => 'Mariquita', 'activo' => true ),
            array('codigo' => '73449','nombre' => 'Melgar', 'activo' => true ),
            array('codigo' => '73461','nombre' => 'Murillo', 'activo' => true ),
            array('codigo' => '73483', 'nombre' => 'Natagaima', 'activo' => true ),
            array('codigo' => '73504', 'nombre' => 'Ortega', 'activo' => true ),
            array('codigo' => '73520','nombre' => 'Palocabildo', 'activo' => true ),
            array('codigo' => '73547','nombre' => 'Piedras', 'activo' => true ),
            array('codigo' => '73555','nombre' => 'Planadas', 'activo' => true ),
            array('codigo' => '73563', 'nombre' => 'Prado', 'activo' => true ),
            array('codigo' => '73585', 'nombre' => 'Purificación', 'activo' => true ),
            array('codigo' => '73616', 'nombre' => 'Rioblanco', 'activo' => true ),
            array('codigo' => '73622', 'nombre' => 'Roncesvalles', 'activo' => true ),
            array('codigo' => '73624','nombre' => 'Rovira', 'activo' => true ),
            array('codigo' => '73671', 'nombre' => 'Saldaña', 'activo' => true ),
            array('codigo' => '73675','nombre' => 'San antonio', 'activo' => true ),
            array('codigo' => '73678', 'nombre' => 'San luis', 'activo' => true ),
            array('codigo' => '73686', 'nombre' => 'Santa isabel', 'activo' => true ),
            array('codigo' => '73770','nombre' => 'Suárez', 'activo' => true ),
            array('codigo' => '73854','nombre' => 'Valle de san juan', 'activo' => true ),
            array('codigo' => '73861','nombre' => 'Venadillo', 'activo' => true ),
            array('codigo' => '73870','nombre' => 'Villahermosa', 'activo' => true ),
            array('codigo' => '73873','nombre' => 'Villarrica', 'activo' => true ),
        );      
        
        
        foreach ($municipios as $municipio) {
            $new_municipio = new Municipio();
            $new_municipio->setNombre($municipio['nombre']);
            $new_municipio->setCodigo($municipio['codigo']);
            $new_municipio->setActivo($municipio['activo']);
            
            $manager->persist($new_municipio);
            $this->setReference('municipio_'.$new_municipio->getSlug(), $new_municipio);
        }
            $manager->flush();
    }

}

?>