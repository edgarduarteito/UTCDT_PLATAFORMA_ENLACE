<?php

namespace ItoSoftware\Base\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use SamJ\DoctrineSluggableBundle\SluggableInterface;

/**
 * Evento
 */
class Evento implements SluggableInterface
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
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var integer
     */
    private $municipio;

    /**
     * @var string
     */
    private $descripcionCorta;

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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $comentarios_evento;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $evento_fotos;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comentarios_evento = new \Doctrine\Common\Collections\ArrayCollection();
        $this->evento_fotos = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Evento
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Evento
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set municipio
     *
     * @param \ItoSoftware\Base\ModelBundle\Entity\Municipio $municipio
     * @return Evento
     */
    public function setMunicipio( \ItoSoftware\Base\ModelBundle\Entity\Municipio $municipio = null)
    {
         $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipioId
     *
     *@return \ItoSoftware\Base\ModelBundle\Entity\Municipio 
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set descripcionCorta
     *
     * @param string $descripcionCorta
     * @return Evento
     */
    public function setDescripcionCorta($descripcionCorta)
    {
        $this->descripcionCorta = $descripcionCorta;

        return $this;
    }

    /**
     * Get descripcionCorta
     *
     * @return string 
     */
    public function getDescripcionCorta()
    {
        return $this->descripcionCorta;
    }

    /**
     * Set detalle
     *
     * @param string $detalle
     * @return Evento
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
     * @return Evento
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
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    public function getSlugFields() {
       return $this->getTitulo();  
    }

    public function setSlug($slug) {
        if (!empty($this->slug))
            return false;
        $this->slug = $slug;
        
    }
    
    public function __toString() {
        return $this->getTitulo();
    }
    /**
     * Add comentarios_evento
     *
     * @param \ItoSoftware\Base\ModelBundle\Entity\ComentarioEvento $comentariosEvento
     * @return Evento
     */
    public function addComentariosEvento(\ItoSoftware\Base\ModelBundle\Entity\ComentarioEvento $comentariosEvento)
    {
        $this->comentarios_evento[] = $comentariosEvento;

        return $this;
    }

    /**
     * Remove comentarios_evento
     *
     * @param \ItoSoftware\Base\ModelBundle\Entity\ComentarioEvento $comentariosEvento
     */
    public function removeComentariosEvento(\ItoSoftware\Base\ModelBundle\Entity\ComentarioEvento $comentariosEvento)
    {
        $this->comentarios_evento->removeElement($comentariosEvento);
    }

    /**
     * Get comentarios_evento
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComentariosEvento()
    {
        return $this->comentarios_evento;
    }
    
    /**
     * Add evento_fotos
     *
     * @param \ItoSoftware\Base\ModelBundle\Entity\EventoFoto $eventoFotos
     * @return Evento
     */
    public function addEventoFoto(\ItoSoftware\Base\ModelBundle\Entity\EventoFoto $eventoFotos)
    {
        $this->evento_fotos[] = $eventoFotos;

        return $this;
    }

    /**
     * Remove evento_fotos
     *
     * @param \ItoSoftware\Base\ModelBundle\Entity\EventoFoto $eventoFotos
     */
    public function removeEventoFoto(\ItoSoftware\Base\ModelBundle\Entity\EventoFoto $eventoFotos)
    {
        $this->evento_fotos->removeElement($eventoFotos);
    }

    /**
     * Get evento_fotos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEventoFotos()
    {
        return $this->evento_fotos;
    }

    


}
