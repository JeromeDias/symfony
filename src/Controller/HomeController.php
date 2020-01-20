<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    public $prenom = "Jérôme";
    public $nom = "Dias";
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'prenom' => $this->prenom,
        ]);
    }

    private function coller(){
        return $this->prenom . " " . $this->nom;
    }

    /**
     * @Route("/connected", name="connected")
     */
    public function connect()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'user' => $this->coller(),
        ]);
    }
}
