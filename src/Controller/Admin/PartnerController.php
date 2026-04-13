<?php

namespace App\Controller\Admin;

use App\Entity\LandingPage;
use App\Entity\Partner;
use App\Entity\User;
use App\Form\AdminPartnerType;
use App\Repository\LandingTemplateRepository;
use App\Repository\PartnerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/partners')]
final class PartnerController extends AbstractController
{
    #[Route('', name: 'admin_partner_index', methods: ['GET'])]
    public function index(PartnerRepository $partnerRepository): Response
    {
        return $this->render('admin/partner/index.html.twig', [
            'partners' => $partnerRepository->findBy([], ['createdAt' => 'DESC']),
        ]);
    }

    #[Route('/new', name: 'admin_partner_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher,
        LandingTemplateRepository $landingTemplateRepository
    ): Response {
        $partner = new Partner();
        $partner->setIsActive(true);

        $form = $this->createForm(AdminPartnerType::class, $partner, [
            'is_edit' => false,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $email = (string) $form->get('email')->getData();
            $plainPassword = (string) $form->get('plainPassword')->getData();

            $existingUser = $entityManager->getRepository(User::class)->findOneBy([
                'email' => $email,
            ]);

            if ($existingUser) {
                $this->addFlash('error', 'Un utilisateur avec cet email existe déjà.');

                return $this->render('admin/partner/new.html.twig', [
                    'form' => $form->createView(),
                ]);
            }

            $existingPartner = $entityManager->getRepository(Partner::class)->findOneBy([
                'slug' => $partner->getSlug(),
            ]);

            if ($existingPartner) {
                $this->addFlash('error', 'Un partner avec ce slug existe déjà.');

                return $this->render('admin/partner/new.html.twig', [
                    'form' => $form->createView(),
                ]);
            }

            $user = new User();
            $user->setEmail($email);
            $user->setRoles(['ROLE_PARTNER']);
            $user->setPassword($passwordHasher->hashPassword($user, $plainPassword));
            $user->setIsActive($partner->isActive() ?? true);
            $user->setCreatedAt(new \DateTimeImmutable());
            $user->setUpdatedAt(new \DateTimeImmutable());

            $partner->setUser($user);
            $partner->setCreatedAt(new \DateTimeImmutable());
            $partner->setUpdatedAt(new \DateTimeImmutable());

            $defaultTemplate = $landingTemplateRepository->findOneBy(['code' => 'template_direct']);

            if (!$defaultTemplate) {
                $defaultTemplate = $landingTemplateRepository->findOneBy(['isActive' => true]);
            }

            if (!$defaultTemplate) {
                throw $this->createNotFoundException('Aucun template actif trouvé.');
            }

            $landingPage = new LandingPage();
            $landingPage->setPartner($partner);
            $landingPage->setLandingTemplate($defaultTemplate);
            $landingPage->setName('Landing principale');
            $landingPage->setSlug('landing-principale');
            $landingPage->setTitle('Bienvenue chez ' . $partner->getName());
            $landingPage->setSubtitle('Découvrez notre offre et laissez-nous vos coordonnées.');
            $landingPage->setCtaText('Je veux être recontacté');
            $landingPage->setHeroImage(null);
            $landingPage->setPrimaryColor('#1D4ED8');
            $landingPage->setSecondaryColor('#EFF6FF');
            $landingPage->setButtonColor('#2563EB');
            $landingPage->setFormTitle('Contactez-nous');
            $landingPage->setSuccessMessage('Merci, votre demande a bien été envoyée.');
            $landingPage->setIsActive(true);
            $landingPage->setCreatedAt(new \DateTimeImmutable());
            $landingPage->setUpdatedAt(new \DateTimeImmutable());

            $entityManager->persist($user);
            $entityManager->persist($partner);
            $entityManager->persist($landingPage);
            $entityManager->flush();

            $this->addFlash('success', 'Partner créé avec succès.');

            return $this->redirectToRoute('admin_partner_index');
        }

        return $this->render('admin/partner/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_partner_edit', methods: ['GET', 'POST'])]
    public function edit(
        Partner $partner,
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        $user = $partner->getUser();

        $form = $this->createForm(AdminPartnerType::class, $partner, [
            'is_edit' => true,
        ]);

        $form->get('email')->setData($user?->getEmail());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $email = (string) $form->get('email')->getData();
            $plainPassword = (string) $form->get('plainPassword')->getData();

            $existingUser = $entityManager->getRepository(User::class)->findOneBy([
                'email' => $email,
            ]);

            if ($existingUser && $existingUser->getId() !== $user?->getId()) {
                $this->addFlash('error', 'Un utilisateur avec cet email existe déjà.');

                return $this->render('admin/partner/edit.html.twig', [
                    'partner' => $partner,
                    'form' => $form->createView(),
                ]);
            }

            $existingPartner = $entityManager->getRepository(Partner::class)->findOneBy([
                'slug' => $partner->getSlug(),
            ]);

            if ($existingPartner && $existingPartner->getId() !== $partner->getId()) {
                $this->addFlash('error', 'Un partner avec ce slug existe déjà.');

                return $this->render('admin/partner/edit.html.twig', [
                    'partner' => $partner,
                    'form' => $form->createView(),
                ]);
            }

            if ($user) {
                $user->setEmail($email);
                $user->setIsActive($partner->isActive() ?? true);
                $user->setUpdatedAt(new \DateTimeImmutable());

                if ($plainPassword !== '') {
                    $user->setPassword($passwordHasher->hashPassword($user, $plainPassword));
                }
            }

            $partner->setUpdatedAt(new \DateTimeImmutable());

            $entityManager->flush();

            $this->addFlash('success', 'Partner mis à jour avec succès.');

            return $this->redirectToRoute('admin_partner_edit', [
                'id' => $partner->getId(),
            ]);
        }

        return $this->render('admin/partner/edit.html.twig', [
            'partner' => $partner,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/toggle-status', name: 'admin_partner_toggle_status', methods: ['POST'])]
    public function toggleStatus(
        Partner $partner,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        if (!$this->isCsrfTokenValid('toggle_partner_'.$partner->getId(), (string) $request->request->get('_token'))) {
            throw $this->createAccessDeniedException('Invalid CSRF token.');
        }

        $newStatus = !($partner->isActive() ?? false);

        $partner->setIsActive($newStatus);
        $partner->setUpdatedAt(new \DateTimeImmutable());

        if ($partner->getUser()) {
            $partner->getUser()->setIsActive($newStatus);
            $partner->getUser()->setUpdatedAt(new \DateTimeImmutable());
        }

        $entityManager->flush();

        $this->addFlash('success', $newStatus
            ? 'Partner activé avec succès.'
            : 'Partner désactivé avec succès.'
        );

        return $this->redirectToRoute('admin_partner_index');
    }
}