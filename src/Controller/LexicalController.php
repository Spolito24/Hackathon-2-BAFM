<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_USER')]
class LexicalController extends AbstractController
{
    #[Route('/lexical', name: 'app_lexical')]
    public function index(): Response
    {
        return $this->render('lexical/index.html.twig', [
            'controller_name' => 'LexicalController',
        ]);
    }
}
