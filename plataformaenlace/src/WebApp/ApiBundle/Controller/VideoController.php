<?php

namespace WebApp\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController as controller;
use Symfony\Component\HttpFoundation\Request;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class VideoController extends controller {

    public function getVideosAction() {
        $tipo_contenido = null;
        $contenido_video = null;
        $video_array = null;

        $em = $this->getDoctrine()->getManager();
        $tipo_contenido = $em->getRepository('WebAppModeloBundle:TipoContenido')->findOneBy(array('es_video' => true));
        $contenido_video = $em->getRepository('WebAppModeloBundle:Contenido')->findBy(array('tipo_contenido' => $tipo_contenido));

        $video_array = array();
        foreach ($contenido_video as $video) {
            $sub_item = array(array('href' => $video->getWebPathArchivo(), "type" => $video->getMimeType()));
            if ($video->getWebPathArchivoRespaldo())
                array_push($sub_item, array('href' => $video->getWebPathArchivoRespaldo(), "type" => $video->getMimeTypeRespaldo()));

            $item = array(
                'id' => $video->getId(),
                'title' => $video->getTitulo(),
                'type' => 'video/*',
                'sources' => count($sub_item) ? $sub_item : null,
            );
            array_push($video_array, $item);
        }

        $tipo_contenido = $em->getRepository('WebAppModeloBundle:TipoContenido')->findOneBy(array('es_youtube' => true));
        $contenido_video = $em->getRepository('WebAppModeloBundle:Contenido')->findBy(array('tipo_contenido' => $tipo_contenido));
        foreach ($contenido_video as $video) {

            if ($video->getUrlVideoYoutube()) {
                $ar = explode("=", $video->getUrlVideoYoutube());
                $code = $ar[count($ar) - 1];
                $item = array(
                    'id' => $video->getId(),
                    'title' => $video->getTitulo(),
                    'href' => $video->getUrlVideoYoutube(),
                    'type' => 'text/html',
                    'youtube' => $code,
                    'poster' => "http://img.youtube.com/vi/".$code."/0.jpg"
                );
                array_push($video_array, $item);
            }
        }

        $view = $this->view($video_array, null)
                ->setTemplateVar('data')
                
                ->setFormat('json')
        ;
        return $this->handleView($view);
    }

    public function getVideosToMovilAction(Request $request) {
        $tipo_contenido = null;
        $contenido_video = null;
        $video_array = null;
        
        $id = $request->get('id');

        $em = $this->getDoctrine()->getManager();
        $tipo_contenido = $em->getRepository('WebAppModeloBundle:TipoContenido')->findOneBy(array('es_video' => true));
        
        if($id){ 
            $contenido_video = $em->getRepository('WebAppModeloBundle:Contenido')->findBy(array(
                'tipo_contenido' => $tipo_contenido,
                'id' => $id
                    ));
        } else {
            $contenido_video = $em->getRepository('WebAppModeloBundle:Contenido')->findBy(array('tipo_contenido' => $tipo_contenido));
        }
        
        $video_array = array();
        foreach ($contenido_video as $video) {

            if ($video->getWebPathArchivo()) {
                $type = explode("/", $video->getMimeType());
                $archivo_tipe = $type[1];
            }
            if ($video->getWebPathArchivoRespaldo()) {
                $type = explode("/", $video->getMimeTypeRespaldo());
                $archivo_tipe_respaldo = $type[1];
            }


            $item = array(
                'id' => $video->getId(),
                'title' => $video->getTitulo(),
                $archivo_tipe ? $archivo_tipe : null => $archivo_tipe ? $video->getWebPathArchivo() : null,
                $archivo_tipe_respaldo ? $archivo_tipe_respaldo : null => $archivo_tipe_respaldo ? $video->getWebPathArchivoRespaldo() : null,
            );
            array_push($video_array, $item);
        }

        $view = $this->view($video_array, null)
                ->setTemplateVar('data')
                ->setHeader('Access-Control-Allow-Origin', '*')
                ->setHeader('Content-Type', 'application/json')
                ->setFormat('json')
        ;
        return $this->handleView($view);
    }

}
