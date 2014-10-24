<?php

namespace ItoSoftware\Base\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Utilities\ApplicationBoot;

/**
 * FotoSlide
 */
class FotoSlide
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $foto;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;


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
     * Set nombre
     *
     * @param string $nombre
     * @return FotoSlide
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return FotoSlide
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
     * Set foto
     *
     * @param string $foto
     * @return FotoSlide
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return FotoSlide
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return FotoSlide
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
     //--------------------------------------------------------------------------------
    //--------------------------------------------------------------------------------
    //ADICIONES
    //
    public function getViewImage() {
        if ($this->getFoto()) {
            return $this->getUploadDir() . '/' . $this->getFoto();
        } else {
            return null;
        }
    }

    public function setViewImage($value) {
        
    }
    const UPLOAD_DIR = "/uploads/slider";

    public function upload() {
        // the file property can be empty if the field is not required
        if (null === $this->getFoto()) {
            return;
        }
        
        $basepath = ApplicationBoot::getContainer()->get('kernel')->getRootDir() . '/../web/';
        $nombre_archivo = $this->obtenerNuevoNombreArchivo($this->getFoto()->getClientOriginalName());
        // we use the original file name here but you should
        // sanitize it at least to avoid any security issues
        // move takes the target directory and target filename as params
        
        
        $this->getFoto()->move($this->getUploadRootDir($basepath), $nombre_archivo);
        
        // set the path property to the filename where you've saved the file
        $this->setFoto($nombre_archivo);
    }
    
    public function obtenerNuevoNombreArchivo($nombre_original) {
        $nombre_archivo_array = explode('.', $nombre_original);
        $extension_archivo = $nombre_archivo_array[count($nombre_archivo_array) - 1];
        $nombre_picture = rand(1, 9999) . '_picture_' . date('YmsHis') . '.' . $extension_archivo;
        return $nombre_picture;
    }
    protected function getUploadRootDir() {
        // the absolute directory path where uploaded documents should be saved
        $basepath = ApplicationBoot::getContainer()->get('kernel')->getRootDir() . '/../web/';
        return $basepath . $this->getUploadDir();
    }

    protected function getUploadDir() {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return self::UPLOAD_DIR;
    }
     /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue() {
        $this->setCreatedAt(new \DateTime());
        $this->setUpdatedAt(new \DateTime());
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue() {
        $this->updated_at = new \DateTime();
    }
    
    public function __toString() {
        return $this->getNombre();
    }
    

//    ******************************************************************************************
//    ****MODIFICACIONES
//    ******************************************************************************************    
}

