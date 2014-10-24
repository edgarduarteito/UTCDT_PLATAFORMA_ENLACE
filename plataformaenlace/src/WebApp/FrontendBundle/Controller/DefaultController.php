<?php

namespace WebApp\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use WebApp\FrontendBundle\Filter\HotelFilterType;
use WebApp\FrontendBundle\Form\Type\ComentarioFormType;
use WebApp\FrontendBundle\Form\Type\ContactoFormType;
use ItoSoftware\Base\ModelBundle\Entity\Contacto;
use Symfony\Component\HttpFoundation\JsonResponse;


class DefaultController extends Controller {

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $slide = $em->getRepository('ItoModelBundle:FotoSlide')->findAll();
        $form = $this->get('form.factory')->create(new HotelFilterType());
        $pagination = $this->filtroAula($form);
        $page=$this->get('request')->get('page');
        return $this->render('WebAppFrontendBundle:Default:index.html.twig', array(
                    'form' => $form->createView(),
                    'pagination' => $pagination,
                    'page'=>$page,
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
                $filterBuilder, $this->get('request')->query->get('page', 1)/* page number */, 4/* limit per page */
        );
        return $pagination;
    }
    public function getJsonAction() {
        $em = $this->getDoctrine()->getManager();
        $eventos_entity = $em->getRepository('ItoModelBundle:Evento')->findAll();
        $eventos = array();
        foreach ($eventos_entity as $evento) {
            $eventos_u = array(
                'date' => $evento->getFecha()->format('U') . '000',
                'type' => 'meeting',
                'title' => $evento->getTitulo(),
                'description' => $evento->getDescripcionCorta(),
                'url' => $this->generateUrl('web_app_frontend_detalle_evento', array('slug' => $evento->getSlug())),
                'image'=>$evento->getEventoFotos()
                
            );
            $eventos[]=$eventos_u;
        }
        return new JsonResponse($eventos);
    }
    public function contactoAction(\Symfony\Component\HttpFoundation\Request $request) {
        $em = $this->getDoctrine()->getManager();
        $contacto = $this->get('form.factory')->create(new ContactoFormType());
        $contacto->bind($request);
//if ($request->isMethod('POST')){
//     $contacto->handleRequest($request);
        if ($contacto->isValid()) {
           
            $objcontact = new Contacto();
            $data = $contacto->getData();
            $objcontact->setEmail($data['email']);
            $objcontact->setAsunto($data['asunto']);
            $objcontact->setMensaje($data['mensaje']);
            $em->persist($objcontact);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                    'sucess', 'mensaje enviado correctamente pronto nos comunicaremos con usted'
            );

            return $this->redirect($this->generateUrl('web_app_frontend_contacto'));
        }
//}

        return $this->render('WebAppFrontendBundle:Default:contacto.html.twig', array('contacto' => $contacto->createView()));
        
        
        
    }
    
    public function getParent()
    {
        return 'FOSUserBundle';
    }
    
    


}
