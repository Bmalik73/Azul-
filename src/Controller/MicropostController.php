<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MicropostController extends AbstractController
{
    #[Route('/micropost', name: 'app_micropost')]
    public function index(): Response
    {
        return $this->render('micropost/index.html.twig', [
            'controller_name' => 'MicropostController',
        ]);
    }
}
