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

/* partner/dashboard/index.html.twig */
class __TwigTemplate_0436854e482f351fddf893623a071cc2 extends Template
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
            'page_title' => [$this, 'block_page_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "partner/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partner/dashboard/index.html.twig"));

        $this->parent = $this->load("partner/base.html.twig", 1);
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

        yield "Dashboard Partner";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "    <div class=\"card-grid\">
        <div class=\"card\">
            <h3>Partner</h3>
            <p><strong>";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
        yield "</strong></p>
            <p>Slug : ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 11, $this->source); })()), "slug", [], "any", false, false, false, 11), "html", null, true);
        yield "</p>
        </div>

        <div class=\"card\">
            <h3>Nombre de leads</h3>
            <h2>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 16, $this->source); })())), "html", null, true);
        yield "</h2>
        </div>

        <div class=\"card\">
            <h3>Actions rapides</h3>
            <p>
                <a class=\"btn btn-primary\" href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partner_landing_page_index");
        yield "\">Gérer mes landing pages</a>
            </p>
        </div>
    </div>

    <div class=\"table-wrapper\">
        <h2>Mes leads récents</h2>

        ";
        // line 30
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 30, $this->source); })()))) {
            // line 31
            yield "            <p>Aucun lead pour le moment.</p>
        ";
        } else {
            // line 33
            yield "            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Entreprise</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["leads"]) || array_key_exists("leads", $context) ? $context["leads"] : (function () { throw new RuntimeError('Variable "leads" does not exist.', 45, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["lead"]) {
                // line 46
                yield "                        <tr>
                            <td>";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "fullName", [], "any", false, false, false, 47), "html", null, true);
                yield "</td>
                            <td>";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "email", [], "any", false, false, false, 48), "html", null, true);
                yield "</td>
                            <td>";
                // line 49
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "phone", [], "any", false, false, false, 49)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "phone", [], "any", false, false, false, 49), "html", null, true)) : ("-"));
                yield "</td>
                            <td>";
                // line 50
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "company", [], "any", false, false, false, 50)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "company", [], "any", false, false, false, 50), "html", null, true)) : ("-"));
                yield "</td>
                            <td>";
                // line 51
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "message", [], "any", false, false, false, 51)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "message", [], "any", false, false, false, 51), "html", null, true)) : ("-"));
                yield "</td>
                            <td>";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["lead"], "createdAt", [], "any", false, false, false, 52), "Y-m-d H:i"), "html", null, true);
                yield "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['lead'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            yield "                </tbody>
            </table>
        ";
        }
        // line 58
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partner/dashboard/index.html.twig";
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
        return array (  201 => 58,  196 => 55,  187 => 52,  183 => 51,  179 => 50,  175 => 49,  171 => 48,  167 => 47,  164 => 46,  160 => 45,  146 => 33,  142 => 31,  140 => 30,  129 => 22,  120 => 16,  112 => 11,  108 => 10,  103 => 7,  93 => 6,  76 => 4,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'partner/base.html.twig' %}

{% block title %}Dashboard Partner{% endblock %}
{% block page_title %}Dashboard{% endblock %}

{% block body %}
    <div class=\"card-grid\">
        <div class=\"card\">
            <h3>Partner</h3>
            <p><strong>{{ partner.name }}</strong></p>
            <p>Slug : {{ partner.slug }}</p>
        </div>

        <div class=\"card\">
            <h3>Nombre de leads</h3>
            <h2>{{ leads|length }}</h2>
        </div>

        <div class=\"card\">
            <h3>Actions rapides</h3>
            <p>
                <a class=\"btn btn-primary\" href=\"{{ path('partner_landing_page_index') }}\">Gérer mes landing pages</a>
            </p>
        </div>
    </div>

    <div class=\"table-wrapper\">
        <h2>Mes leads récents</h2>

        {% if leads is empty %}
            <p>Aucun lead pour le moment.</p>
        {% else %}
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Entreprise</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    {% for lead in leads %}
                        <tr>
                            <td>{{ lead.fullName }}</td>
                            <td>{{ lead.email }}</td>
                            <td>{{ lead.phone ?: '-' }}</td>
                            <td>{{ lead.company ?: '-' }}</td>
                            <td>{{ lead.message ?: '-' }}</td>
                            <td>{{ lead.createdAt|date('Y-m-d H:i') }}</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% endif %}
    </div>
{% endblock %}", "partner/dashboard/index.html.twig", "C:\\Users\\mhame\\OneDrive\\Desktop\\owl labs\\test technique\\Mini Cms\\mini-cms-acquisition\\templates\\partner\\dashboard\\index.html.twig");
    }
}
