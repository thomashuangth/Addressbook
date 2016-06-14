<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class HomeController extends Controller
{
    /**
     * @Route("/home")
     */
    public function indexAction()
    {
       	$data = array(
     		'title' => "Hello Home !"
       	);

       	/*$html = $this->container->get('templating')->render('home.htmlt.twig', $data);*/

        /*return new Response($html);*/

        return $this->render('home.html.twig', $data);
    }
}