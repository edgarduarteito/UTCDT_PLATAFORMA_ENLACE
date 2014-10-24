<?php

namespace ItoSoftware\Base\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visitas
 */
class Visitas
{
    /**
     * @var integer
     */
    private $visitas;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set visitas
     *
     * @param integer $visitas
     * @return Visitas
     */
    public function setVisitas($visitas)
    {
        $this->visitas = $visitas;

        return $this;
    }

    /**
     * Get visitas
     *
     * @return integer 
     */
    public function getVisitas()
    {
        return $this->visitas;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
