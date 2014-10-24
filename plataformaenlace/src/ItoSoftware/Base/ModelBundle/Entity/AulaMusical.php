<?php

namespace ItoSoftware\Base\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use SamJ\DoctrineSluggableBundle\SluggableInterface;
/**
 * AulaMusical
 */
class AulaMusical implements SluggableInterface
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titulo;

    /**
     * @var string
     */
    private $municipio;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $componente;

    /**
     * @var string
     */
    private $capacitaciones;

    /**
     * @var string
     */
    private $detalle;

    /**
     * @var string
     */
    private $lugar;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var array
     */
    private $comentarios_aula;

    /**
     * @var array
     */
    private $aula_fotos;
    
    public function __construct() {
        $this->comentarios_aula=new \Doctrine\Common\Collections\ArrayCollection();
        $this->aula_fotos=new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set titulo
     *
     * @param string $titulo
     * @return AulaMusical
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set municipio
     *
     *  @param \ItoSoftware\Base\ModelBundle\Entity\Municipio $municipio
     * @return AulaMusical
     */
    public function setMunicipio(\ItoSoftware\Base\ModelBundle\Entity\Municipio $municipio = null)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio
     *
     * @return string 
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return AulaMusical
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set componente
     *
     * @param string $componente
     * @return AulaMusical
     */
    public function setComponente($componente)
    {
        $this->componente = $componente;

        return $this;
    }

    /**
     * Get componente
     *
     * @return string 
     */
    public function getComponente()
    {
        return $this->componente;
    }

    /**
     * Set capacitaciones
     *
     * @param string $capacitaciones
     * @return AulaMusical
     */
    public function setCapacitaciones($capacitaciones)
    {
        $this->capacitaciones = $capacitaciones;

        return $this;
    }

    /**
     * Get capacitaciones
     *
     * @return string 
     */
    public function getCapacitaciones()
    {
        return $this->capacitaciones;
    }

    /**
     * Set detalle
     *
     * @param string $detalle
     * @return AulaMusical
     */
    public function setDetalle($detalle)
    {
        $this->detalle = $detalle;

        return $this;
    }

    /**
     * Get detalle
     *
     * @return string 
     */
    public function getDetalle()
    {
        return $this->detalle;
    }

    /**
     * Set lugar
     *
     * @param string $lugar
     * @return AulaMusical
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;

        return $this;
    }

    /**
     * Get lugar
     *
     * @return string 
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return AulaMusical
     */
    public function setSlug($slug)
    {
       if (!empty($this->slug))
            return false;
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set comentariosAula
     *
     * @param array $comentariosAula
     * @return AulaMusical
     */
    public function addComentariosAula(\ItoSoftware\Base\ModelBundle\Entity\ComentarioAula $comentariosAula)
    {
        $this->comentarios_aula[] = $comentariosAula;

        return $this;
    }
    /**
     * Remove comentarios_aula
     *
     * @param \ItoSoftware\Base\ModelBundle\Entity\ComentarioAula $comentariosAula
     */
    public function removeComentariosAula(\ItoSoftware\Base\ModelBundle\Entity\ComentarioAula $comentariosAula)
    {
        $this->comentarios_aula->removeElement($comentariosAula);
    }


    /**
     * Get comentariosAula
     *
     * @return array 
     */
    public function getComentariosAula()
    {
        return $this->comentarios_aula;
    }

    /**
     * Set aulaFotos
     *
     * @param array $aulaFotos
     * @return AulaMusical
     */
    public function addAulaFoto(\ItoSoftware\Base\ModelBundle\Entity\AulaFoto $aulaFotos)
    {
        $this->aula_fotos[] = $aulaFotos;

        return $this;
    }

    /**
     * Get aulaFotos
     *
     * @return array 
     */
    public function getAulaFotos()
    {
        return $this->aula_fotos;
    }

    public function getSlugFields() {
        return $this->getTitulo();
    }
    
     public function __toString() {
        return $this->getTitulo();
    }

}
