<?php

namespace App\Controller\Admin;

use App\Repository\LeadRepository;
use App\Repository\PartnerRepository;
use App\Repository\LandingPageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DashboardController extends AbstractController
{
    #[Route('/admin', name: 'admin_dashboard', methods: ['GET'])]
    public function index(
        PartnerRepository $partnerRepository,
        LandingPageRepository $landingPageRepository,
        LeadRepository $leadRepository
    ): Response {
        return $this->render('admin/dashboard/index.html.twig', [
            'partnerCount' => $partnerRepository->count([]),
            'landingPageCount' => $landingPageRepository->count([]),
            'leadCount' => $leadRepository->count([]),
        ]);
    }
}