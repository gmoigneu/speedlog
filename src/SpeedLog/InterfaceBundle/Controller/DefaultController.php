<?php

namespace SpeedLog\InterfaceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Dashboard controller.
 *
 * @Route("/")
 */
class DefaultController extends Controller
{
    /**
     * Display dashboard
     *
     * @Route("/", name="dashboard")
     * @Template()
     *
     * @return array
     */
    public function indexAction()
    {
        return $this->render('SpeedLogInterfaceBundle:Default:index.html.twig');
    }
}
