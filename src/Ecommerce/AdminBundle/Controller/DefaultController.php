<?php

namespace Ecommerce\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EcommerceAdminBundle:Default:index.html.twig');
    }
}
