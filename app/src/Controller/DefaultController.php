<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_default')]
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController'
        ]);
    }

    #[Route('/historique', name: 'app_historique')]
    public function historique(): Response
    {
        $prenom = 'Hervé';
        return $this->render('default/historique.html.twig', [
            'controller_name' => 'DefaultController',
            'prenom' => $prenom,
        ]);
    }
}