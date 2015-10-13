<?php

namespace Acme\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}/{r}")
     * @Template()
     */
    public function indexAction($name, $r)
    {
        // return array('name' => $name);
        return $this->render('AcmeTestBundle:Default:index.html.twig', array(
            'name' => $r));
    }
}
