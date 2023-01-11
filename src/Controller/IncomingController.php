<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IncomingController extends AbstractController
{
    #[Route('/incoming', name: 'app_incoming')]
    public function index(): Response
    {
        return $this->render('incoming/index.html.twig', [
            'controller_name' => 'Flovia - À venir',
        ]);
    }
}
