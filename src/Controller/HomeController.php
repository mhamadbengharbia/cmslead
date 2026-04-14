<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $templates = [
            [
                'code' => 'template_modern',
                'name' => 'Template 1',
                'title' => 'Moderne & performant',
                'description' => 'Design moderne et orienté conversion avec hero impactant et CTA visible.',
                'image' => 'images/templates/template1-preview.png',
            ],
            [
                'code' => 'template_story',
                'name' => 'Template 2',
                'title' => 'Narratif & rassurant',
                'description' => 'Approche plus éditoriale, pensée pour inspirer confiance avant la conversion.',
                'image' => 'images/templates/template2-preview.png',
            ],
        ];

        return $this->render('home/index.html.twig', [
            'templates' => $templates,
        ]);
    }

    #[Route('/preview/{code}', name: 'app_template_preview')]
    public function preview(string $code): Response
    {
        $allowedTemplates = ['template_modern', 'template_story'];

        if (!in_array($code, $allowedTemplates, true)) {
            throw $this->createNotFoundException('Template introuvable.');
        }

        return $this->render(sprintf('preview/%s.html.twig', $code));
    }
}