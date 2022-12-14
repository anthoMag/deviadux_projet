<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PingoController extends AbstractController
{
    #[Route('/pingo', name: 'app_pingo')]
    public function index(): Response
    {
        return $this->render('pingo/index.html.twig', [
            'controller_name' => 'PingoController',
        ]);
    }
}
