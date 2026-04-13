<?php

namespace App\Controller\Admin;

use App\Repository\LandingPageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/landing-pages')]
final class LandingPageController extends AbstractController
{
    #[Route('', name: 'admin_landing_page_index', methods: ['GET'])]
    public function index(LandingPageRepository $landingPageRepository): Response
    {
        return $this->render('admin/landing_page/index.html.twig', [
            'landingPages' => $landingPageRepository->findBy([], ['createdAt' => 'DESC']),
        ]);
    }
}