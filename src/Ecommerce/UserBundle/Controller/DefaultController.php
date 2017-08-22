<?php

namespace Ecommerce\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EcommerceUserBundle:Default:index.html.twig');
    }
}
