<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ParallaxeController extends AbstractController
{
    #[Route('/parallaxe', name: 'app_parallaxe')]
    public function index(): Response
    {
        return $this->render('parallaxe/index.html.twig', [
            'controller_name' => 'Flovia - Parallaxe',
        ]);
    }
}
