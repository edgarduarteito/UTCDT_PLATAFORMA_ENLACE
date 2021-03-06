<?php

namespace ItoSoftware\Base\ModelBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Sonata\UserBundle\Entity\BaseUser as BaseUser;
use Doctrine\ORM\Mapping as ORM;
/**
 * User
 */
class User extends BaseUser
{
//    ******************************************************************************************
//    ****ADICIONES
//    ******************************************************************************************
     static $UPLOAD_DIR = "/uploads/usuarios";

    /**
     * @Assert\File(maxSize="6000000")
     */
    protected $file_picture;

    public function uploadPicture() {
        if (null === $this->file_picture) {
            return;
        }

        $basepath = ApplicationBoot::getContainer()->get('kernel')->getRootDir() . '/../web';
        $nombre_archivo = $this->obtenerNuevoNombreArchivo($this->file_picture->getClientOriginalName());
        $this->file_picture->move($this->getUploadRootDir($basepath), $nombre_archivo);
        $this->setPicture($nombre_archivo);
        $this->file_picture = null;
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
        return self::$UPLOAD_DIR;
    }

    public function getAbsolutePathPicture() {
        return null === $this->picture ? null : $this->getUploadRootDir() . '/' . $this->picture;
    }

    public function getWebPathPicture() {
        return null === $this->picture ? null : 'http://' . $_SERVER['HTTP_HOST'] . '/' . $this->getUploadDir() . '/' . $this->picture;
    }

    public function getViewImage() {
        if ($this->getPicture()) {
            return $this->getUploadDir() . '/' . $this->getPicture();
        } else {
            return null;
        }
    }

    public function setViewImage($value) {
        
    }

    public function getFilePicture() {
        return $this->file_picture;
    }

    public function setFilePicture($file_picture) {
        return $this->file_picture = $file_picture;
    }
///
//    ******************************************************************************************
//    ****MODIFICACIONES
//    ******************************************************************************************

    public function __construct() {
        parent::__construct();
        $this->groups = new \Doctrine\Common\Collections\ArrayCollection();
        // your own logic
    }
    /**
     * @var string
     */
    protected $picture;

    /**
     * @var integer
     */
    protected $id;


    /**
     * Set picture
     *
     * @param string $picture
     * @return User
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
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
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $groups;

    /**
     * Add groups
     *
     * @param \ItoSoftware\Base\ModelBundle\Entity\Group $groups
     * @return User
     */
    public function addGroup(\FOS\UserBundle\Model\GroupInterface $groups)
    {
        $this->groups[] = $groups;

        return $this;
    }

    /**
     * Remove groups
     *
     * @param \ItoSoftware\Base\ModelBundle\Entity\Group $groups
     */
    public function removeGroup(\FOS\UserBundle\Model\GroupInterface $groups)
    {
        $this->groups->removeElement($groups);
    }

    /**
     * Get groups
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGroups()
    {
        return $this->groups;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $comentarios_evento;
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    
    private $comentarios_aula;



    /**
     * Add comentarios_evento
     *
     * @param \ItoSoftware\Base\ModelBundle\Entity\ComentarioEvento $comentariosEvento
     * @return User
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
     * Add comentarios_aula
     *
     * @param \ItoSoftware\Base\ModelBundle\Entity\ComentarioAula $comentariosAula
     * @return User
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
     * Get comentarios_aula
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComentariosAula()
    {
        return $this->comentarios_aula;
    }

}
