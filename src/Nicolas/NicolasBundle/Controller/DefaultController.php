<?php

namespace Nicolas\NicolasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NicolasNicolasBundle:Default:index.html.twig', array('name' => $name));
    }
}
