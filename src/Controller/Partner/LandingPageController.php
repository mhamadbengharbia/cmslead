<?php

namespace App\Controller\Partner;

use App\Entity\LandingPage;
use App\Entity\Partner;
use App\Entity\User;
use App\Form\LandingPageType;
use App\Repository\LandingPageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\AsciiSlugger;

#[Route('/partner/landing-pages')]
final class LandingPageController extends AbstractController
{
    #[Route('', name: 'partner_landing_page_index', methods: ['GET'])]
    public function index(LandingPageRepository $landingPageRepository): Response
    {
        $partner = $this->getActivePartner();

        $landingPages = $landingPageRepository->findBy(
            ['partner' => $partner],
            ['createdAt' => 'DESC']
        );

        return $this->render('partner/landing_page/index.html.twig', [
            'partner' => $partner,
            'landingPages' => $landingPages,
        ]);
    }

    #[Route('/new', name: 'partner_landing_page_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $partner = $this->getActivePartner();

        $landingPage = new LandingPage();
        $landingPage->setPartner($partner);
        $landingPage->setIsActive(true);
        $landingPage->setCreatedAt(new \DateTimeImmutable());
        $landingPage->setUpdatedAt(new \DateTimeImmutable());

        $form = $this->createForm(LandingPageType::class, $landingPage, [
            'is_edit' => false,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $landingPage->setSlug($this->normalizeSlug((string) $landingPage->getSlug()));
            $landingPage->setTitle($this->normalizeTitle((string) $landingPage->getTitle()));

            $existingLandingPage = $entityManager->getRepository(LandingPage::class)->findOneBy([
                'partner' => $partner,
                'slug' => $landingPage->getSlug(),
            ]);

            if ($existingLandingPage) {
                $form->get('slug')->addError(
                    new FormError('Une landing page avec ce slug existe déjà pour ce partner.')
                );
            }

            if ($form->isValid()) {
                $entityManager->persist($landingPage);
                $entityManager->flush();

                $this->addFlash('success', 'Landing page créée avec succès.');

                return $this->redirectToRoute('partner_landing_page_index');
            }
        }

        return $this->render('partner/landing_page/new.html.twig', [
            'partner' => $partner,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'partner_landing_page_edit', methods: ['GET', 'POST'])]
    public function edit(
        LandingPage $landingPage,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $partner = $this->getActivePartner();

        if ($landingPage->getPartner()?->getId() !== $partner->getId()) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas modifier cette landing page.');
        }

        $form = $this->createForm(LandingPageType::class, $landingPage, [
            'is_edit' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $landingPage->setSlug($this->normalizeSlug((string) $landingPage->getSlug()));
            $landingPage->setTitle($this->normalizeTitle((string) $landingPage->getTitle()));

            $existingLandingPage = $entityManager->getRepository(LandingPage::class)->findOneBy([
                'partner' => $partner,
                'slug' => $landingPage->getSlug(),
            ]);

            if ($existingLandingPage && $existingLandingPage->getId() !== $landingPage->getId()) {
                $form->get('slug')->addError(
                    new FormError('Une landing page avec ce slug existe déjà pour ce partner.')
                );
            }

            if ($form->isValid()) {
                $landingPage->setUpdatedAt(new \DateTimeImmutable());

                $entityManager->flush();

                $this->addFlash('success', 'Landing page mise à jour avec succès.');

                return $this->redirectToRoute('partner_landing_page_edit', [
                    'id' => $landingPage->getId(),
                ]);
            }
        }

        return $this->render('partner/landing_page/edit.html.twig', [
            'partner' => $partner,
            'landingPage' => $landingPage,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/toggle-status', name: 'partner_landing_page_toggle_status', methods: ['POST'])]
    public function toggleStatus(
        LandingPage $landingPage,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $partner = $this->getActivePartner();

        if ($landingPage->getPartner()?->getId() !== $partner->getId()) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas modifier cette landing page.');
        }

        if (!$this->isCsrfTokenValid(
            'toggle_landing_page_'.$landingPage->getId(),
            (string) $request->request->get('_token')
        )) {
            throw $this->createAccessDeniedException('Invalid CSRF token.');
        }

        $landingPage->setIsActive(!($landingPage->isActive() ?? false));
        $landingPage->setUpdatedAt(new \DateTimeImmutable());

        $entityManager->flush();

        $this->addFlash(
            'success',
            $landingPage->isActive()
                ? 'Landing page activée avec succès.'
                : 'Landing page désactivée avec succès.'
        );

        return $this->redirectToRoute('partner_landing_page_index');
    }

    private function getActivePartner(): Partner
    {
        /** @var User|null $user */
        $user = $this->getUser();
        $partner = $user?->getPartner();

        if (!$user || !$user->isActive() || !$partner || !$partner->isActive()) {
            throw $this->createAccessDeniedException('Votre accès partner est désactivé.');
        }

        return $partner;
    }

    private function normalizeSlug(string $slug): string
    {
        $slugger = new AsciiSlugger();

        $slug = strtolower($slugger->slug(trim($slug))->toString());
        $slug = preg_replace('/[^a-z-]+/', '-', $slug);
        $slug = preg_replace('/-+/', '-', $slug);
        $slug = trim((string) $slug, '-');

        return $slug;
    }

    private function normalizeTitle(string $title): string
    {
        $title = trim($title);

        if ($title === '') {
            return $title;
        }

        $first = mb_strtoupper(mb_substr($title, 0, 1));
        $rest = mb_substr($title, 1);

        return $first.$rest;
    }
}