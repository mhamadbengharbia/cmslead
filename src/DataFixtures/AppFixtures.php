<?php

namespace App\DataFixtures;

use App\Entity\Lead;
use App\Entity\User;
use App\Entity\Partner;
use App\Entity\LandingPage;
use App\Entity\LandingTemplate;
use App\Entity\LandingPageSection;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    public function __construct(
        private UserPasswordHasherInterface $passwordHasher
    ) {
    }

    public function load(ObjectManager $manager): void
    {
        $now = new \DateTimeImmutable();

        // ADMIN USER
        $admin = new User();
        $admin->setEmail('admin@test.com');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setPassword($this->passwordHasher->hashPassword($admin, 'admin123'));
        $admin->setIsActive(true);
        $admin->setCreatedAt($now);
        $admin->setUpdatedAt($now);

        $manager->persist($admin);

        // PARTNER USER
        $partnerUser = new User();
        $partnerUser->setEmail('partner@test.com');
        $partnerUser->setRoles(['ROLE_PARTNER']);
        $partnerUser->setPassword($this->passwordHasher->hashPassword($partnerUser, 'partner123'));
        $partnerUser->setIsActive(true);
        $partnerUser->setCreatedAt($now);
        $partnerUser->setUpdatedAt($now);

        $manager->persist($partnerUser);

        // PARTNER
        $partner = new Partner();
        $partner->setName('AssurPro');
        $partner->setSlug('assurpro');
        $partner->setUser($partnerUser);
        $partner->setIsActive(true);
        $partner->setCreatedAt($now);
        $partner->setUpdatedAt($now);

        $manager->persist($partner);

        // TEMPLATES
        $templateDirect = new LandingTemplate();
        $templateDirect->setCode('template_direct');
        $templateDirect->setName('Direct Conversion');
        $templateDirect->setDescription('Template orienté conversion immédiate');
        $templateDirect->setPreviewImage(null);
        $templateDirect->setIsActive(true);

        $manager->persist($templateDirect);

        $templateReassurance = new LandingTemplate();
        $templateReassurance->setCode('template_reassurance');
        $templateReassurance->setName('Reassurance');
        $templateReassurance->setDescription('Template orienté persuasion et réassurance');
        $templateReassurance->setPreviewImage(null);
        $templateReassurance->setIsActive(true);

        $manager->persist($templateReassurance);

        // LANDING PAGE
        $landingPage = new LandingPage();
        $landingPage->setName('Offre Auto');
        $landingPage->setSlug('offre-auto');
        $landingPage->setTitle('Obtenez votre devis auto rapidement');
        $landingPage->setSubtitle('Une simulation simple, rapide et sans engagement.');
        $landingPage->setCtaText('Je demande mon devis');
        $landingPage->setHeroImage(null);
        $landingPage->setPrimaryColor('#1D4ED8');
        $landingPage->setSecondaryColor('#EFF6FF');
        $landingPage->setButtonColor('#2563EB');
        $landingPage->setFormTitle('Demandez votre devis');
        $landingPage->setSuccessMessage('Merci, votre demande a bien été envoyée.');
        $landingPage->setIsActive(true);
        $landingPage->setCreatedAt($now);
        $landingPage->setUpdatedAt($now);
        $landingPage->setPartner($partner);
        $landingPage->setLandingTemplate($templateDirect);

        $manager->persist($landingPage);

        // LANDING PAGE SECTIONS
        $heroSection = new LandingPageSection();
        $heroSection->setSectionKey('hero');
        $heroSection->setIsEnabled(true);
        $heroSection->setContentJson([
            'headline' => 'Obtenez votre devis auto rapidement',
            'subheadline' => 'Une simulation simple, rapide et sans engagement.',
        ]);
        $heroSection->setSortOrder(1);
        $heroSection->setCreatedAt($now);
        $heroSection->setUpdatedAt($now);
        $heroSection->setLandingPage($landingPage);

        $manager->persist($heroSection);

        $benefitsSection = new LandingPageSection();
        $benefitsSection->setSectionKey('benefits');
        $benefitsSection->setIsEnabled(true);
        $benefitsSection->setContentJson([
            'title' => 'Pourquoi nous choisir',
            'items' => [
                'Réponse rapide',
                'Accompagnement personnalisé',
                'Sans engagement',
            ],
        ]);
        $benefitsSection->setSortOrder(2);
        $benefitsSection->setCreatedAt($now);
        $benefitsSection->setUpdatedAt($now);
        $benefitsSection->setLandingPage($landingPage);

        $manager->persist($benefitsSection);

        $testimonialsSection = new LandingPageSection();
        $testimonialsSection->setSectionKey('testimonials');
        $testimonialsSection->setIsEnabled(true);
        $testimonialsSection->setContentJson([
            'title' => 'Ils nous font confiance',
            'items' => [
                'Service rapide et clair',
                'Très bonne expérience',
                'Je recommande vivement',
            ],
        ]);
        $testimonialsSection->setSortOrder(3);
        $testimonialsSection->setCreatedAt($now);
        $testimonialsSection->setUpdatedAt($now);
        $testimonialsSection->setLandingPage($landingPage);

        $manager->persist($testimonialsSection);

        // SAMPLE LEAD
        $lead = new Lead();
        $lead->setFullName('Jean Dupont');
        $lead->setEmail('jean.dupont@test.com');
        $lead->setPhone('0601020304');
        $lead->setCompany('Dupont SARL');
        $lead->setMessage('Je souhaite être recontacté pour un devis.');
        $lead->setUtmSource('google');
        $lead->setUtmMedium('cpc');
        $lead->setUtmCampaign('offre-auto-avril');
        $lead->setCreatedAt($now);
        $lead->setPartner($partner);
        $lead->setLandingPage($landingPage);

        $manager->persist($lead);

        $manager->flush();
    }
}