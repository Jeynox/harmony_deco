<?php

namespace App\Controller;

use App\Entity\SousCategory;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SousCategoryController extends AbstractController
{
    #[Route('/sousCategory/{id}', name: 'app_sous_category')]
    public function index(SousCategory $sousCategory): Response
    {
       $produits = $sousCategory->getProduits();

        return $this->render('sous_category/index.html.twig', [
            'sousCategory' => $sousCategory,
            'produits' => $produits
        ]);
    }
}
