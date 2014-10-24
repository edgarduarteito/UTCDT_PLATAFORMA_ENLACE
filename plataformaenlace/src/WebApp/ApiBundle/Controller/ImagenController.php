<?php

namespace WebApp\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController as controller;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class ImagenController extends controller {

    public function getImagenesAction() {
        
        $contenido_imagen = array();
        $em = $this->getDoctrine()->getManager();
        $tipo_contenido = $em->getRepository('WebAppModeloBundle:TipoContenido')->findOneBy(array('es_imagen' => true));
        $contenido_imagenes = $em->getRepository('WebAppModeloBundle:Contenido')->findBy(array('tipo_contenido' => $tipo_contenido));
        
        foreach ($contenido_imagenes as $imagen) {
            array_push($contenido_imagen, array(
                'href' => $imagen->getWebPathArchivo(),
                'title' => $imagen->getTitulo()
            ));
        }
        $view = $this->view($contenido_imagen, null)
                ->setTemplateVar('data')
                ->setHeader('Access-Control-Allow-Origin', '*')
                ->setHeader('Content-Type', 'application/json')
                ->setFormat('json')
        ;
        return $this->handleView($view);
    }
}
