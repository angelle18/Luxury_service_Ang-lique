<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/contact-nous", name="contactez-nous")
     */
    public function contact(){
        return $this->render('contactez-nous.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
