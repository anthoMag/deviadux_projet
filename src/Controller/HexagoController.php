<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HexagoController extends AbstractController
{
    #[Route('/hexago', name: 'app_hexago')]
    public function index(): Response
    {
        return $this->render('hexago/index.html.twig', [
            'controller_name' => 'Flovia - Hexago',
        ]);
    }
}
