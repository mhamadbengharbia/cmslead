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

/* admin/landing_page/index.html.twig */
class __TwigTemplate_5b2f781a61974f840161b94f48092258 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/landing_page/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Admin Landing Pages</title>
</head>
<body>
    <h1>Toutes les landing pages</h1>

    <p><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\">← Retour dashboard</a></p>

    ";
        // line 12
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["landingPages"]) || array_key_exists("landingPages", $context) ? $context["landingPages"] : (function () { throw new RuntimeError('Variable "landingPages" does not exist.', 12, $this->source); })()))) {
            // line 13
            yield "        <p>Aucune landing page.</p>
    ";
        } else {
            // line 15
            yield "        <table border=\"1\" cellpadding=\"8\" cellspacing=\"0\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Slug</th>
                    <th>Partner</th>
                    <th>Template</th>
                    <th>Active</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["landingPages"]) || array_key_exists("landingPages", $context) ? $context["landingPages"] : (function () { throw new RuntimeError('Variable "landingPages" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["landingPage"]) {
                // line 27
                yield "                    <tr>
                        <td>";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["landingPage"], "name", [], "any", false, false, false, 28), "html", null, true);
                yield "</td>
                        <td>";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["landingPage"], "slug", [], "any", false, false, false, 29), "html", null, true);
                yield "</td>
                        <td>";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["landingPage"], "partner", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
                yield "</td>
                        <td>";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["landingPage"], "landingTemplate", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
                yield "</td>
                        <td>";
                // line 32
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["landingPage"], "isActive", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
                yield "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['landingPage'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "            </tbody>
        </table>
    ";
        }
        // line 38
        yield "</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/landing_page/index.html.twig";
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
        return array (  117 => 38,  112 => 35,  103 => 32,  99 => 31,  95 => 30,  91 => 29,  87 => 28,  84 => 27,  80 => 26,  67 => 15,  63 => 13,  61 => 12,  56 => 10,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Admin Landing Pages</title>
</head>
<body>
    <h1>Toutes les landing pages</h1>

    <p><a href=\"{{ path('admin_dashboard') }}\">← Retour dashboard</a></p>

    {% if landingPages is empty %}
        <p>Aucune landing page.</p>
    {% else %}
        <table border=\"1\" cellpadding=\"8\" cellspacing=\"0\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Slug</th>
                    <th>Partner</th>
                    <th>Template</th>
                    <th>Active</th>
                </tr>
            </thead>
            <tbody>
                {% for landingPage in landingPages %}
                    <tr>
                        <td>{{ landingPage.name }}</td>
                        <td>{{ landingPage.slug }}</td>
                        <td>{{ landingPage.partner.name }}</td>
                        <td>{{ landingPage.landingTemplate.name }}</td>
                        <td>{{ landingPage.isActive ? 'Oui' : 'Non' }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
</body>
</html>", "admin/landing_page/index.html.twig", "C:\\Users\\mhame\\OneDrive\\Desktop\\owl labs\\test technique\\Mini Cms\\mini-cms-acquisition\\templates\\admin\\landing_page\\index.html.twig");
    }
}
