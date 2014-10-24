<?php

namespace ItoSoftware\Base\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComentarioAula
 */
class ComentarioAula
{
    
    
//    ******************************************************************************************
//    ****ADICIONES
//    ******************************************************************************************

    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue() {
        $this->activo = true;
        $this->created_at = new \DateTime();
        $this->updated_at = new \DateTime();
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue() {
        $this->updated_at = new \DateTime();
    }

//    ******************************************************************************************
//    ****MODIFICACIONES
//    ******************************************************************************************    
    /**
     * @var string
     */
    private $texto;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \ItoSoftware\Base\ModelBundle\Entity\User
     */
    private $User;

    /**
     * @var \ItoSoftware\Base\ModelBundle\Entity\AulaMusical
     */
    private $aula;


    /**
     * Set texto
     *
     * @param string $texto
     * @return ComentarioHotel
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get texto
     *
     * @return string 
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return ComentarioHotel
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return ComentarioHotel
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
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

    /**
     * Set User
     *
     * @param \ItoSoftware\Base\ModelBundle\Entity\User $user
     * @return ComentarioAula
     */
    public function setUser(\ItoSoftware\Base\ModelBundle\Entity\User $user)
    {
        $this->User = $user;

        return $this;
    }

    /**
     * Get User
     *
     * @return \ItoSoftware\Base\ModelBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->User;
    }

    /**
     * Set AulaMusical
     *
     * @param \ItoSoftware\Base\ModelBundle\Entity\AulaMusical $aula
     * @return ComentarioAula
     */
    public function setAula(\ItoSoftware\Base\ModelBundle\Entity\AulaMusical $aula)
    {
        $this->aula = $aula;

        return $this;
    }

    /**
     * Get aula
     *
     * @return \ItoSoftware\Base\ModelBundle\Entity\AulaMusical
     */
    public function getAula()
    {
        return $this->aula;
    }
    /**
     * @var int
     */
    private $calificacion;


    /**
     * Set calificacion
     *
     * @param \int $calificacion
     * @return ComentarioAula
     */
    public function setCalificacion($calificacion)
    {
        $this->calificacion = $calificacion;

        return $this;
    }

    /**
     * Get calificacion
     *
     * @return \int 
     */
    public function getCalificacion()
    {
        return $this->calificacion;
    }
}
