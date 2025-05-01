<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HelloController extends AbstractController
{
    #[Route('/hello', name: 'app_hello')]
    public function hello():Response{
        return $this->render('hello/index.html.twig');
    }

    #[Route('/', name: 'app_home')]
    public function home():Response{
        return new Response('Bienvenu sur la page d\'accueil');
    }

}
