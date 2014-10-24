<?php

namespace WebApp\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SiteMapController extends Controller {

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $slide = $em->getRepository('ItoModelBundle:FotoSlide')->findAll();
        $urls = array(
            array(
                'nombre' => 'Inicio',
                'path' => 'web_app_frontend_homepage',
            ),
            array(
                'nombre' => 'Contacto',
                'path' => 'web_app_frontend_contacto',
            ),
            array(
                'nombre' => 'Evento',
                'path' => 'web_app_frontend_evento',
            ),
            array(
                'nombre' => 'Aula Musical',
                'path' => 'web_app_frontend_aula',
            ),
            
            array(
                'nombre' => 'Mapa del Sitio',
                'path' => 'web_app_frontend_sitemap',
            ),
        );

        return $this->render('WebAppFrontendBundle:Default:sitemap.html.twig', array(
                    'urls' => $urls,'slide'=>$slide
        ));
    }

}
