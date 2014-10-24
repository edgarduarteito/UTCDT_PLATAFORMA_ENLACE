<?php

namespace WebApp\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WebApp\FrontendBundle\Filter\HotelFilterType;
use WebApp\FrontendBundle\Form\Type\ComentarioFormType;
use ItoSoftware\Base\ModelBundle\Entity\ComentarioAula;

class AulaMusicalController extends Controller {
    
public function aulaAction() {
        $em = $this->getDoctrine()->getManager();
        $slide = $em->getRepository('ItoModelBundle:FotoSlide')->findAll();
        $form = $this->get('form.factory')->create(new HotelFilterType());
        $pagination = $this->filtroAula($form);
        $page=$this->get('request')->get('page');
        return $this->render('WebAppFrontendBundle:Aula:aula.html.twig', array(
                    'form' => $form->createView(),
                    'pagination' => $pagination,
                    'page'=>$page,
                    'slide'=>$slide
        ));
        
    }
    public function detalleAction($slug, \Symfony\Component\HttpFoundation\Request $request) {
        $em = $this->getDoctrine()->getManager();
        $aulamusical = $em->getRepository('ItoModelBundle:AulaMusical')->findOneBySlug($slug);
        $slide = $em->getRepository('ItoModelBundle:FotoSlide')->findAll();
        $calificacion_total = 0;
        $contador_calificaciones = 0;
        foreach ($aulamusical->getComentariosAula() as $value) {
            $calificacion_total = $calificacion_total + $value->getCalificacion();
            $contador_calificaciones++;
        }
        $media_calificacion = 0;
        if ($contador_calificaciones != 0) {
            $media_calificacion = round($calificacion_total / $contador_calificaciones);
        }
//        $url = false;
//        if ($aulamusical->getTitulo() != "") {
//            if (strpos($aulamusical->getUrl(), '@') !== false) {
//                $url = true;
//            }
//        }
        //comentarios
        $form = $this->get('form.factory')->create(new HotelFilterType());
        $form_comentario = $this->get('form.factory')->create(new ComentarioFormType());
        $user = $this->getUser();
        $comentado = $em->getRepository('ItoModelBundle:ComentarioAula')->findBy(array('User' => $user, 'aula' => $aulamusical));
        $form_comentario->bind($request);
        if ($form_comentario->isValid()) {
            $comentario = new ComentarioAula();
            $data = $form_comentario->getData();
            $comentario->setCalificacion($data['estrellas']);
            $comentario->setTexto($data['comentario']);
            $comentario->setAula($aulamusical);
            $user = $em->getRepository('ItoModelBundle:User')->find($this->getUser()->getId());
            $comentario->setUser($user);
            $em->persist($comentario);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                    'notice', 'Calificación y Comentario ingresado'
            );
            return $this->redirect($this->generateUrl('web_app_frontend_detalle_aula', array(
                                'slug' => $slug,
            )));
        }
        $datosComentario = $this->getDoctrine()
                ->getRepository('ItoModelBundle:ComentarioAula')
                ->findBy(array('aula' => $aulamusical->getId()));
        $em = $this->getDoctrine()->getManager();

        $comemnt = $em->getRepository('ItoModelBundle:ComentarioAula')->findBy(array('aula' => $aulamusical->getId()));

        $totalcomment = count($comemnt);


        return $this->render('WebAppFrontendBundle:Aula:detalle_aula.html.twig', array(
                    'form' => $form->createView(),
                    'aula' => $aulamusical,
                    'comentario' => $form_comentario->createView(),
                    'media_calificacion' => $media_calificacion,
                    'comentado' => $comentado,
                    'datosComentario' => $datosComentario,
                    'tcomment' => $totalcomment,
                    'slide'=>$slide
        ));
    }
    
    
    public function filtroAula($form) {
        $em = $this->getDoctrine()->getManager();
        $filterBuilder = $em
                ->getRepository('ItoModelBundle:AulaMusical')
                ->createQueryBuilder('h')
                ->orderBy('h.titulo', 'asc')
        ;
        // bind values from the request
        $form->bind($this->get('request'));
        // initialize a query builder
        // build the query from the given form object

        $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($form, $filterBuilder);
        //$estudios = $filterBuilder->getQuery()->getResult();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $filterBuilder, $this->get('request')->query->get('page', 1)/* page number */, 6/* limit per page */
        );
        return $pagination;
    }
    

}
