<?php

namespace WebApp\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController as controller;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations\Patch;
use Symfony\Component\HttpFoundation\Request;

class AudioController extends Controller {

    public function getAudioAction(Request $request) {

        $id = $request->get('id');
        
        $em = $this->getDoctrine()->getManager();
        $tipo_contenidos = $em->getRepository('WebAppModeloBundle:TipoContenido')->findBy(array('es_audio' => true));
        if($id){
            $contenidos_audio = $em->getRepository('WebAppModeloBundle:Contenido')->findBy(array(
                'tipo_contenido' => $tipo_contenidos,
                'id' => $id
                    ));
        } else {
            $contenidos_audio = $em->getRepository('WebAppModeloBundle:Contenido')->findBy(array('tipo_contenido' => $tipo_contenidos));
        }
        
        $array_audio = array();
        $archivo_tipe = null;
        $archivo_tipe_respaldo = null;
        
        foreach ($contenidos_audio as $audio) {
            $poster = $audio->getUrlPoster();
            
            if($audio->getArchivo()){
                $type =  explode("/",$audio->getMimeType());
                if($type[1] == 'ogg')
                    $archivo_tipe = 'oga';
                 else if($type[1] == 'mpeg')
                     $archivo_tipe = 'mp3';
                 else
                     $archivo_tipe = null;
            }
            
            if($audio->getArchivoRespaldo()){
                $type =  explode("/",$audio->getMimeTypeRespaldo());
                if($type[1] == 'ogg')
                    $archivo_tipe_respaldo = 'oga';
                 else if($type[1] == 'mpeg')
                     $archivo_tipe_respaldo = 'mp3';
                 else
                     $archivo_tipe_respaldo = null;
            }
            
            $new_audio = array(
                'id' => $audio->getId(),
                'title' => $audio->getTitulo(),
                'artist' => null,
                $archivo_tipe ? $archivo_tipe : null => $archivo_tipe ? $audio->getWebPathArchivo() : null,
                $archivo_tipe_respaldo ? $archivo_tipe_respaldo : null => $archivo_tipe_respaldo ? $audio->getWebPathArchivoRespaldo() : null,
                'poster' => $poster ? $poster : null
            );
            array_push($array_audio, $new_audio);
        }

        $view = $this->view($array_audio, null)
                ->setTemplateVar('data')
                ->setHeader('Access-Control-Allow-Origin', '*')
                ->setHeader('Content-Type', 'application/json')
                ->setFormat('json')
        ;
        return $this->handleView($view);
    }

}
