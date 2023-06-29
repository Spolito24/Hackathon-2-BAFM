<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_USER')]
#[Route('/category')]
class CategoryController extends AbstractController
{
    #[Route('/{id}', name: 'app_category_show', methods: ['GET'])]
    public function show(Category $category, ArticleRepository $articleRepository): Response
    {

        return $this->render('category/show.html.twig', [
            'category' => $category,
        ]);
    }
}
