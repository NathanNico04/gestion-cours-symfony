<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HelloController
{
    #[Route('/hello', name: 'app_hello')]
    public function hello():Response{
        return new Response('Mon message');
    }

    #[Route('/', name: 'app_home')]
    public function home():Response{
        return new Response('Bienvenu sur la page d\'accueil');
    }

}
