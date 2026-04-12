<?php

namespace App\Controller\Public;

use App\Entity\Lead;
use App\Form\LeadFormType;
use App\Repository\LandingPageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LandingPageController extends AbstractController
{
    #[Route('/{partnerSlug}/{landingSlug}', name: 'public_landing_show', methods: ['GET', 'POST'])]
    public function show(
        string $partnerSlug,
        string $landingSlug,
        Request $request,
        LandingPageRepository $landingPageRepository,
        EntityManagerInterface $entityManager
    ): Response {
        $landingPage = $landingPageRepository->findOneByPartnerAndSlug($partnerSlug, $landingSlug);

        if (!$landingPage) {
            throw $this->createNotFoundException('Landing page not found.');
        }

        $lead = new Lead();
        $form = $this->createForm(LeadFormType::class, $lead);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $lead->setCreatedAt(new \DateTimeImmutable());
            $lead->setPartner($landingPage->getPartner());
            $lead->setLandingPage($landingPage);

            $entityManager->persist($lead);
            $entityManager->flush();

            $this->addFlash('success', 'Merci, votre demande a bien été envoyée.');

            return $this->redirectToRoute('public_landing_show', [
                'partnerSlug' => $partnerSlug,
                'landingSlug' => $landingSlug,
            ]);
        }

        return $this->render('public/landing/show.html.twig', [
            'landingPage' => $landingPage,
            'leadForm' => $form->createView(),
        ]);
    }
}