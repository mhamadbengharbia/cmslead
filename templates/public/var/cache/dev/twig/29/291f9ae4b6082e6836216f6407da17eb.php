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

/* admin/lead/index.html.twig */
class __TwigTemplate_3067c4a712a6f6d6e2be4aa0ec36f2b9 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/lead/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Admin Leads</title>
</head>
<body>
    <h1>Tous les leads</h1>

    <p><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\">← Retour dashboard</a></p>

    ";
        // line 12
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 12, $this->source); })()))) {
            // line 13
            yield "        <p>Aucun lead.</p>
    ";
        } else {
            // line 15
            yield "        <table border=\"1\" cellpadding=\"8\" cellspacing=\"0\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Partner</th>
                    <th>Landing page</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["lead"]) {
                // line 27
                yield "                    <tr>
                        <td>";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "fullName", [], "any", false, false, false, 28), "html", null, true);
                yield "</td>
                        <td>";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "email", [], "any", false, false, false, 29), "html", null, true);
                yield "</td>
                        <td>";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "partner", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
                yield "</td>
                        <td>";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "landingPage", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
                yield "</td>
                        <td>";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "createdAt", [], "any", false, false, false, 32), "Y-m-d H:i"), "html", null, true);
                yield "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['lead'], $context['_parent']);
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
        return "admin/lead/index.html.twig";
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
    <title>Admin Leads</title>
</head>
<body>
    <h1>Tous les leads</h1>

    <p><a href=\"{{ path('admin_dashboard') }}\">← Retour dashboard</a></p>

    {% if leads is empty %}
        <p>Aucun lead.</p>
    {% else %}
        <table border=\"1\" cellpadding=\"8\" cellspacing=\"0\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Partner</th>
                    <th>Landing page</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                {% for lead in leads %}
                    <tr>
                        <td>{{ lead.fullName }}</td>
                        <td>{{ lead.email }}</td>
                        <td>{{ lead.partner.name }}</td>
                        <td>{{ lead.landingPage.name }}</td>
                        <td>{{ lead.createdAt|date('Y-m-d H:i') }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
</body>
</html>", "admin/lead/index.html.twig", "C:\\Users\\mhame\\OneDrive\\Desktop\\owl labs\\test technique\\Mini Cms\\mini-cms-acquisition\\templates\\admin\\lead\\index.html.twig");
    }
}
