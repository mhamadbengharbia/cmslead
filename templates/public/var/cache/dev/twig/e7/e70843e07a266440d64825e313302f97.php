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

/* admin/dashboard/index.html.twig */
class __TwigTemplate_d612ada6fbc3f95d9eb184d38952654a extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Dashboard Admin</title>
</head>
<body>
    <div style=\"display:flex; justify-content:space-between; align-items:center;\">
        <h1>Dashboard Admin</h1>
        <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Logout</a>
    </div>

    <div style=\"display:flex; gap:20px; margin:20px 0;\">
        <div style=\"padding:20px; border:1px solid #ccc;\">
            <h2>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["partnerCount"]) || array_key_exists("partnerCount", $context) ? $context["partnerCount"] : (function () { throw new RuntimeError('Variable "partnerCount" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "</h2>
            <p>Partners</p>
        </div>
        <div style=\"padding:20px; border:1px solid #ccc;\">
            <h2>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["landingPageCount"]) || array_key_exists("landingPageCount", $context) ? $context["landingPageCount"] : (function () { throw new RuntimeError('Variable "landingPageCount" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "</h2>
            <p>Landing pages</p>
        </div>
        <div style=\"padding:20px; border:1px solid #ccc;\">
            <h2>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["leadCount"]) || array_key_exists("leadCount", $context) ? $context["leadCount"] : (function () { throw new RuntimeError('Variable "leadCount" does not exist.', 23, $this->source); })()), "html", null, true);
        yield "</h2>
            <p>Leads</p>
        </div>
    </div>

<ul>
<li><a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_partner_index");
        yield "\">Gérer les partners</a></li>
    <li><a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_lead_index");
        yield "\">Gérer les leads</a></li>
    <li><a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_landing_page_index");
        yield "\">Gérer les landing pages</a></li>
</ul>
</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/dashboard/index.html.twig";
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
        return array (  95 => 31,  91 => 30,  87 => 29,  78 => 23,  71 => 19,  64 => 15,  56 => 10,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Dashboard Admin</title>
</head>
<body>
    <div style=\"display:flex; justify-content:space-between; align-items:center;\">
        <h1>Dashboard Admin</h1>
        <a href=\"{{ path('app_logout') }}\">Logout</a>
    </div>

    <div style=\"display:flex; gap:20px; margin:20px 0;\">
        <div style=\"padding:20px; border:1px solid #ccc;\">
            <h2>{{ partnerCount }}</h2>
            <p>Partners</p>
        </div>
        <div style=\"padding:20px; border:1px solid #ccc;\">
            <h2>{{ landingPageCount }}</h2>
            <p>Landing pages</p>
        </div>
        <div style=\"padding:20px; border:1px solid #ccc;\">
            <h2>{{ leadCount }}</h2>
            <p>Leads</p>
        </div>
    </div>

<ul>
<li><a href=\"{{ path('admin_partner_index') }}\">Gérer les partners</a></li>
    <li><a href=\"{{ path('admin_lead_index') }}\">Gérer les leads</a></li>
    <li><a href=\"{{ path('admin_landing_page_index') }}\">Gérer les landing pages</a></li>
</ul>
</body>
</html>", "admin/dashboard/index.html.twig", "C:\\Users\\mhame\\OneDrive\\Desktop\\owl labs\\test technique\\Mini Cms\\mini-cms-acquisition\\templates\\admin\\dashboard\\index.html.twig");
    }
}
