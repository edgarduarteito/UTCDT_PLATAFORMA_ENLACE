<?php

namespace WebApp\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->redirect($this->generateUrl('sonata_admin_dashboard'));
    }

    public function redirectAdminAction() {
        $_locale = $this->container->getParameter('locale');
        $request = $this->getRequest();
        $request->setLocale($_locale);
        return $this->redirect($this->generateUrl('web_app_admin_homepage'));
    }

}
