<?php

namespace Watcher\BeeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/hellrrtt/{name}")
     * @Template()
     */
    public function indexAction($name, Request $request)
    {
        $page = $request->query->get('page', 1);
        return array('name' => $name, 'page' => $page);
    }

    /**
     * @Route("/ou")
     * @Template()
     */
    public function opAction()
    {
        $ou = $this->getDoctrine()
            ->getRepository('WatcherBeeBundle:OpUser')
            ->find(3);

        if (!$ou) {
            throw $this->createNotFoundException(
                'No op user found for id 3'
            );
        }
//        dump($ou);
//        die;
        return array('name' => 'ou', 'ou' => $ou);
    }
}
