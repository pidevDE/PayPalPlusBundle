<?php

namespace pidevDE\PayPalPlusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('pidevDEPayPalPlusBundle:Default:index.html.twig');
    }
}
