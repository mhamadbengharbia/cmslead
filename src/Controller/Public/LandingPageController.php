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

final class LandingPageController extends AbstractController
{
#[Route(
    '/landing/{partnerSlug}/{landingSlug}',
    name: 'public_landing_show',
    methods: ['GET', 'POST'],
    requirements: [
        'partnerSlug' => '[a-z0-9\-]+',
        'landingSlug' => '[a-z0-9\-]+',
    ]
)]    public function show(
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

            $this->addFlash('success', $landingPage->getSuccessMessage() ?: 'Merci, votre demande a bien été envoyée.');

            return $this->redirectToRoute('public_landing_show', [
                'partnerSlug' => $partnerSlug,
                'landingSlug' => $landingSlug,
            ]);
        }

        $templateCode = $landingPage->getLandingTemplate()?->getCode();

        $template = match ($templateCode) {
            'template_direct' => 'public/landing/template_direct.html.twig',
            'template_reassurance' => 'public/landing/template_reassurance.html.twig',
            default => 'public/landing/template_direct.html.twig',
        };
        $template = match ($templateCode) {
            'template_direct' => 'public/landing/template_direct.html.twig',
            'template_reassurance' => 'public/landing/template_reassurance.html.twig',
            'template_split' => 'public/landing/template_split.html.twig',
            default => 'public/landing/template_direct.html.twig',
};
        return $this->render($template, [
            'landingPage' => $landingPage,
            'leadForm' => $form->createView(),
        ]);
    }
}