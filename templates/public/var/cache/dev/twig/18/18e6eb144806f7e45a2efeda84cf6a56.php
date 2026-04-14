<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* home/index.html.twig */
class __TwigTemplate_c922dde5acdb59ea1a392e0aa35b0dd9 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<header class=\"home-header\">
    <div class=\"container\">
        <div class=\"home-navbar\">
            <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"brand\">Mini CMS</a>

            <nav class=\"nav-links d-none d-lg-flex\">
                <a href=\"#hero\">Accueil</a>
                <a href=\"#features\">Fonctionnalités</a>
                <a href=\"#templates\">Templates</a>
                <a href=\"#contact\">Contact</a>
            </nav>

            <a href=\"#\" class=\"btn btn-primary\">Connexion</a>
        </div>
    </div>
</header>

<section id=\"hero\" class=\"hero-home\">
    <div class=\"container\">
        <div class=\"row align-items-center g-5 min-vh-100\">
            <div class=\"col-lg-6\">
                <span class=\"hero-badge\">Plateforme d’acquisition</span>
                <h1 class=\"hero-title\">
                    Créez des landing pages puissantes pour convertir vos visiteurs en leads.
                </h1>
                <p class=\"hero-subtitle\">
                    Une plateforme simple pour présenter plusieurs templates, laisser les partenaires choisir leur design
                    et piloter leurs performances.
                </p>

                <div class=\"hero-actions\">
                    <a href=\"#templates\" class=\"btn btn-primary btn-lg\">Voir les modèles</a>
                    <a href=\"#features\" class=\"btn btn-outline-primary btn-lg\">Découvrir</a>
                </div>

                <div class=\"hero-metrics\">
                    <div class=\"metric-card\">
                        <strong>+30%</strong>
                        <span>conversion moyenne</span>
                    </div>
                    <div class=\"metric-card\">
                        <strong>2 templates</strong>
                        <span>prêts à l’emploi</span>
                    </div>
                    <div class=\"metric-card\">
                        <strong>100%</strong>
                        <span>personnalisable</span>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6\">
                <div class=\"hero-mockup\">
                    <div class=\"mockup-window\">
                        <div class=\"mockup-top\">
                            <span></span><span></span><span></span>
                        </div>
                        <div class=\"mockup-body\">
                            <div class=\"mockup-sidebar\"></div>
                            <div class=\"mockup-content\">
                                <div class=\"mockup-chart\"></div>
                                <div class=\"mockup-cards\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class=\"mockup-table\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"floating-card floating-card-one\">Leads</div>
                    <div class=\"floating-card floating-card-two\">Templates</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id=\"features\" class=\"section-home bg-white\">
    <div class=\"container\">
        <div class=\"section-heading text-center\">
            <span class=\"section-tag\">Fonctionnalités</span>
            <h2>Une base solide pour une plateforme scalable</h2>
            <p>
                Une architecture pensée pour gérer plusieurs partenaires, plusieurs templates
                et des landing pages publiques orientées conversion.
            </p>
        </div>

        <div class=\"row g-4 mt-4\">
            <div class=\"col-md-4\">
                <div class=\"feature-card\">
                    <h3>Templates multiples</h3>
                    <p>Ajoutez facilement de nouveaux designs sans casser la structure de l’application.</p>
                </div>
            </div>

            <div class=\"col-md-4\">
                <div class=\"feature-card\">
                    <h3>Leads centralisés</h3>
                    <p>Chaque formulaire envoyé est lié au bon partenaire et exploitable depuis les dashboards.</p>
                </div>
            </div>

            <div class=\"col-md-4\">
                <div class=\"feature-card\">
                    <h3>Gestion simple</h3>
                    <p>Admins et partenaires peuvent piloter les pages, les accès et les performances.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id=\"templates\" class=\"section-home templates-section\">
    <div class=\"container\">
        <div class=\"section-heading text-center\">
            <span class=\"section-tag\">Templates</span>
            <h2>Choisissez un modèle de landing page</h2>
            <p>
                Prévisualisez les designs disponibles et ouvrez un aperçu complet en un clic.
            </p>
        </div>

        <div class=\"templates-carousel-wrapper mt-5\">
            <button class=\"carousel-arrow left\" type=\"button\" id=\"scrollLeft\">
                ‹
            </button>

            <div class=\"templates-carousel\" id=\"templatesCarousel\">
                ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["templates"]) || array_key_exists("templates", $context) ? $context["templates"] : (function () { throw new RuntimeError('Variable "templates" does not exist.', 136, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 137
            yield "                    <article class=\"template-card\">
                        <div class=\"template-image-wrapper\">
                            <img src=\"";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["template"], "image", [], "any", false, false, false, 139)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["template"], "name", [], "any", false, false, false, 139), "html", null, true);
            yield "\" class=\"template-image\">
                        </div>

                        <div class=\"template-content\">
                            <span class=\"template-name\">";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["template"], "name", [], "any", false, false, false, 143), "html", null, true);
            yield "</span>
                            <h3>";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["template"], "title", [], "any", false, false, false, 144), "html", null, true);
            yield "</h3>
                            <p>";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["template"], "description", [], "any", false, false, false, 145), "html", null, true);
            yield "</p>

                            <a href=\"";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_template_preview", ["code" => CoreExtension::getAttribute($this->env, $this->source, $context["template"], "code", [], "any", false, false, false, 147)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                                Voir l’aperçu
                            </a>
                        </div>
                    </article>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['template'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        yield "            </div>

            <button class=\"carousel-arrow right\" type=\"button\" id=\"scrollRight\">
                ›
            </button>
        </div>
    </div>
</section>

<section id=\"contact\" class=\"section-home bg-white\">
    <div class=\"container\">
        <div class=\"section-heading text-center\">
            <span class=\"section-tag\">Contact</span>
            <h2>Prêt à lancer la plateforme ?</h2>
            <p>
                Commencez avec une base propre, moderne et conçue pour évoluer avec de nouveaux templates.
            </p>
        </div>

        <div class=\"text-center mt-4\">
            <a href=\"#templates\" class=\"btn btn-primary btn-lg\">Explorer les templates</a>
        </div>
    </div>
</section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 180
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 181
        yield "<script>
    document.addEventListener('DOMContentLoaded', function () {
        const carousel = document.getElementById('templatesCarousel');
        const scrollLeft = document.getElementById('scrollLeft');
        const scrollRight = document.getElementById('scrollRight');

        if (carousel && scrollLeft && scrollRight) {
            scrollLeft.addEventListener('click', () => {
                carousel.scrollBy({ left: -380, behavior: 'smooth' });
            });

            scrollRight.addEventListener('click', () => {
                carousel.scrollBy({ left: 380, behavior: 'smooth' });
            });
        }
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  306 => 181,  296 => 180,  263 => 153,  251 => 147,  246 => 145,  242 => 144,  238 => 143,  229 => 139,  225 => 137,  221 => 136,  91 => 9,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}
<header class=\"home-header\">
    <div class=\"container\">
        <div class=\"home-navbar\">
            <a href=\"{{ path('app_home') }}\" class=\"brand\">Mini CMS</a>

            <nav class=\"nav-links d-none d-lg-flex\">
                <a href=\"#hero\">Accueil</a>
                <a href=\"#features\">Fonctionnalités</a>
                <a href=\"#templates\">Templates</a>
                <a href=\"#contact\">Contact</a>
            </nav>

            <a href=\"#\" class=\"btn btn-primary\">Connexion</a>
        </div>
    </div>
</header>

<section id=\"hero\" class=\"hero-home\">
    <div class=\"container\">
        <div class=\"row align-items-center g-5 min-vh-100\">
            <div class=\"col-lg-6\">
                <span class=\"hero-badge\">Plateforme d’acquisition</span>
                <h1 class=\"hero-title\">
                    Créez des landing pages puissantes pour convertir vos visiteurs en leads.
                </h1>
                <p class=\"hero-subtitle\">
                    Une plateforme simple pour présenter plusieurs templates, laisser les partenaires choisir leur design
                    et piloter leurs performances.
                </p>

                <div class=\"hero-actions\">
                    <a href=\"#templates\" class=\"btn btn-primary btn-lg\">Voir les modèles</a>
                    <a href=\"#features\" class=\"btn btn-outline-primary btn-lg\">Découvrir</a>
                </div>

                <div class=\"hero-metrics\">
                    <div class=\"metric-card\">
                        <strong>+30%</strong>
                        <span>conversion moyenne</span>
                    </div>
                    <div class=\"metric-card\">
                        <strong>2 templates</strong>
                        <span>prêts à l’emploi</span>
                    </div>
                    <div class=\"metric-card\">
                        <strong>100%</strong>
                        <span>personnalisable</span>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-6\">
                <div class=\"hero-mockup\">
                    <div class=\"mockup-window\">
                        <div class=\"mockup-top\">
                            <span></span><span></span><span></span>
                        </div>
                        <div class=\"mockup-body\">
                            <div class=\"mockup-sidebar\"></div>
                            <div class=\"mockup-content\">
                                <div class=\"mockup-chart\"></div>
                                <div class=\"mockup-cards\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class=\"mockup-table\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"floating-card floating-card-one\">Leads</div>
                    <div class=\"floating-card floating-card-two\">Templates</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id=\"features\" class=\"section-home bg-white\">
    <div class=\"container\">
        <div class=\"section-heading text-center\">
            <span class=\"section-tag\">Fonctionnalités</span>
            <h2>Une base solide pour une plateforme scalable</h2>
            <p>
                Une architecture pensée pour gérer plusieurs partenaires, plusieurs templates
                et des landing pages publiques orientées conversion.
            </p>
        </div>

        <div class=\"row g-4 mt-4\">
            <div class=\"col-md-4\">
                <div class=\"feature-card\">
                    <h3>Templates multiples</h3>
                    <p>Ajoutez facilement de nouveaux designs sans casser la structure de l’application.</p>
                </div>
            </div>

            <div class=\"col-md-4\">
                <div class=\"feature-card\">
                    <h3>Leads centralisés</h3>
                    <p>Chaque formulaire envoyé est lié au bon partenaire et exploitable depuis les dashboards.</p>
                </div>
            </div>

            <div class=\"col-md-4\">
                <div class=\"feature-card\">
                    <h3>Gestion simple</h3>
                    <p>Admins et partenaires peuvent piloter les pages, les accès et les performances.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id=\"templates\" class=\"section-home templates-section\">
    <div class=\"container\">
        <div class=\"section-heading text-center\">
            <span class=\"section-tag\">Templates</span>
            <h2>Choisissez un modèle de landing page</h2>
            <p>
                Prévisualisez les designs disponibles et ouvrez un aperçu complet en un clic.
            </p>
        </div>

        <div class=\"templates-carousel-wrapper mt-5\">
            <button class=\"carousel-arrow left\" type=\"button\" id=\"scrollLeft\">
                ‹
            </button>

            <div class=\"templates-carousel\" id=\"templatesCarousel\">
                {% for template in templates %}
                    <article class=\"template-card\">
                        <div class=\"template-image-wrapper\">
                            <img src=\"{{ asset(template.image) }}\" alt=\"{{ template.name }}\" class=\"template-image\">
                        </div>

                        <div class=\"template-content\">
                            <span class=\"template-name\">{{ template.name }}</span>
                            <h3>{{ template.title }}</h3>
                            <p>{{ template.description }}</p>

                            <a href=\"{{ path('app_template_preview', { code: template.code }) }}\" class=\"btn btn-primary\">
                                Voir l’aperçu
                            </a>
                        </div>
                    </article>
                {% endfor %}
            </div>

            <button class=\"carousel-arrow right\" type=\"button\" id=\"scrollRight\">
                ›
            </button>
        </div>
    </div>
</section>

<section id=\"contact\" class=\"section-home bg-white\">
    <div class=\"container\">
        <div class=\"section-heading text-center\">
            <span class=\"section-tag\">Contact</span>
            <h2>Prêt à lancer la plateforme ?</h2>
            <p>
                Commencez avec une base propre, moderne et conçue pour évoluer avec de nouveaux templates.
            </p>
        </div>

        <div class=\"text-center mt-4\">
            <a href=\"#templates\" class=\"btn btn-primary btn-lg\">Explorer les templates</a>
        </div>
    </div>
</section>

{% endblock %}

{% block javascripts %}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const carousel = document.getElementById('templatesCarousel');
        const scrollLeft = document.getElementById('scrollLeft');
        const scrollRight = document.getElementById('scrollRight');

        if (carousel && scrollLeft && scrollRight) {
            scrollLeft.addEventListener('click', () => {
                carousel.scrollBy({ left: -380, behavior: 'smooth' });
            });

            scrollRight.addEventListener('click', () => {
                carousel.scrollBy({ left: 380, behavior: 'smooth' });
            });
        }
    });
</script>
{% endblock %}
 ", "home/index.html.twig", "C:\\Users\\mhame\\OneDrive\\Desktop\\owl labs\\test technique\\Mini Cms\\mini-cms-acquisition\\templates\\home\\index.html.twig");
    }
}
