<?php

namespace App\Controller\Partner;

use App\Entity\LandingPage;
use App\Form\LandingPageType;
use App\Repository\LandingPageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/partner/landing-pages')]
final class LandingPageController extends AbstractController
{
    #[Route('', name: 'partner_landing_page_index', methods: ['GET'])]
    public function index(LandingPageRepository $landingPageRepository): Response
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        $partner = $user?->getPartner();

        if (!$partner) {
            throw $this->createAccessDeniedException('No partner linked to this account.');
        }

        $landingPages = $landingPageRepository->findBy(
            ['partner' => $partner],
            ['createdAt' => 'DESC']
        );

        return $this->render('partner/landing_page/index.html.twig', [
            'partner' => $partner,
            'landingPages' => $landingPages,
        ]);
    }

    #[Route('/{id}/edit', name: 'partner_landing_page_edit', methods: ['GET', 'POST'])]
    public function edit(
        LandingPage $landingPage,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        $partner = $user?->getPartner();

        if (!$partner || $landingPage->getPartner()?->getId() !== $partner->getId()) {
            throw $this->createAccessDeniedException('You cannot edit this landing page.');
        }

        $form = $this->createForm(LandingPageType::class, $landingPage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $landingPage->setUpdatedAt(new \DateTimeImmutable());
            $entityManager->flush();

            $this->addFlash('success', 'Landing page mise à jour avec succès.');

            return $this->redirectToRoute('partner_landing_page_edit', [
                'id' => $landingPage->getId(),
            ]);
        }

        return $this->render('partner/landing_page/edit.html.twig', [
            'partner' => $partner,
            'landingPage' => $landingPage,
            'form' => $form->createView(),
        ]);
    }
}