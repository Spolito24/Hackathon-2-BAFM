<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TutorialController extends AbstractController
{
    #[Route('/tutorial', name: 'app_tutorial')]
    public function index(): Response
    {
        return $this->render('tutorial/index.html.twig', [
            'controller_name' => 'TutorialController',
        ]);
    }
}
