<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Contact;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin/', name: 'app_admin_')]
class DashboardController extends AbstractController
{
    #[Route('dashboard', name: 'dashboard')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $userCount = $entityManager->getRepository(User::class)->countRegisteredUsers();

        $messageCount = $entityManager->getRepository(Contact::class)->countMessages();

        return $this->render('admin/dashboard/index.html.twig', [
            'userCount' => $userCount,
            'messages' => $messageCount
        ]);
    }
}
