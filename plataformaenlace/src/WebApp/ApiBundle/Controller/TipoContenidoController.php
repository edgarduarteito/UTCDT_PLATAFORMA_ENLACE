<?php

namespace WebApp\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController as controller;
use Symfony\Component\HttpFoundation\Request;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class TipoContenidoController extends Controller {

    public function getTipocontenidoAction(Request $request) {

        $em = $this->getDoctrine()->getManager();
        $parametros = array();
            if($request->get('id'))
                $parametros['id'] = $request->get('id');
                
        $tipo_contenidos = $em->getRepository('WebAppModeloBundle:TipoContenido')->findBy($parametros);
        
        $view = $this->view($tipo_contenidos, null)
                ->setTemplateVar('data')
                ->setFormat('json')
        ;
        return $this->handleView($view);
    }
}
