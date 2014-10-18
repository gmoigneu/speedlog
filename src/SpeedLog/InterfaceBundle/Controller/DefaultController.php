<?php

namespace SpeedLog\InterfaceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SpeedLogInterfaceBundle:Default:index.html.twig');
    }
}
