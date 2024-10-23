<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }
    // #[Route('/', name: 'home')]
    // function index () : Response {  
    //     return new Response(
    //         content :"<head>
    //                  <title> Ma premiere page </title>
    //                  <body><h1> Hello Techwall  Symfony 8</h1></body>
    //         </head>"
    //     );
    //  }

}
