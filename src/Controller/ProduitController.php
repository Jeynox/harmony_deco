<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    #[Route('/produit/{id}', name: 'app_produit')]
    public function index(ProduitRepository $produitRepository, int $id): Response
    {
        $produit = $produitRepository->findOneBy(['id' => $id]);

        return $this->render('produit/index.html.twig', [
            'produit' => $produit,
        ]);
    }
}
