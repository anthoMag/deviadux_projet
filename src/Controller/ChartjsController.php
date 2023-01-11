<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChartjsController extends AbstractController
{
    #[Route('/chartjs', name: 'app_chartjs')]
    public function index(): Response
    {
        return $this->render('chartjs/index.html.twig', [
            'controller_name' => 'Flova - ChartjS',
        ]);
    }
}
