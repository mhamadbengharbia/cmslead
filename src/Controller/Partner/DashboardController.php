<?php

namespace App\Controller\Partner;

use App\Entity\User;
use App\Repository\LeadRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DashboardController extends AbstractController
{
    #[Route('/partner', name: 'partner_dashboard', methods: ['GET'])]
    public function index(LeadRepository $leadRepository): Response
    {
        /** @var User|null $user */
        $user = $this->getUser();
        $partner = $user?->getPartner();

        if (!$user || !$user->isActive() || !$partner || !$partner->isActive()) {
            throw $this->createAccessDeniedException('Votre accès partner est désactivé.');
        }

        $leads = $leadRepository->findBy(
            ['partner' => $partner],
            ['createdAt' => 'DESC']
        );

        return $this->render('partner/dashboard/index.html.twig', [
            'partner' => $partner,
            'leads' => $leads,
        ]);
    }
}