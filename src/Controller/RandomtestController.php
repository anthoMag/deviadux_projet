<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RandomtestController extends AbstractController
{
    #[Route('/randomtest', name: 'app_randomtest')]
    public function index(): Response
    {
        return $this->render('randomtest/index.html.twig', [
            'controller_name' => 'RandomtestController',
        ]);
    }
}
