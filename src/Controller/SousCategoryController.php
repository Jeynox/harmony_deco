<?php

namespace App\Controller;

use App\Repository\SousCategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SousCategoryController extends AbstractController
{
    #[Route('/sousCategory/{id}', name: 'app_sous_category')]
    public function index(SousCategoryRepository $sousCategoryRepository): Response
    {
        $sousCategories = $sousCategoryRepository->findAll();

        return $this->render('sous_category/index.html.twig', [
            'sousCategories' => $sousCategories,
        ]);
    }
}
