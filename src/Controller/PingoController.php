<?php

namespace App\Controller;

use App\Repository\EvenementsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PingoController extends AbstractController
{
    #[Route('/pingo', name: 'app_pingo')]
    public function index(EvenementsRepository $evenementsRepository): Response
    {
        $list = $evenementsRepository->findAll();

        return $this->render('pingo/index.html.twig', [
            'controller_name' => 'Flovia - PinGo',
            'list' => $list,
        ]);
    }
}
