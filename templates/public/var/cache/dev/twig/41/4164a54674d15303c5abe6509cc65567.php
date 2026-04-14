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

/* partner/landing_page/index.html.twig */
class __TwigTemplate_63c623356a36d1c5d4d503b7f3f9632b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partner/landing_page/index.html.twig"));

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

        yield "Mes landing pages";
        
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

        yield "Mes landing pages";
        
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
        yield "    <div class=\"page-actions\">
        <a class=\"btn btn-secondary\" href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partner_dashboard");
        yield "\">Retour dashboard</a>
    </div>

    <div class=\"table-wrapper\">
        ";
        // line 12
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["landingPages"]) || array_key_exists("landingPages", $context) ? $context["landingPages"] : (function () { throw new RuntimeError('Variable "landingPages" does not exist.', 12, $this->source); })()))) {
            // line 13
            yield "            <p>Aucune landing page.</p>
        ";
        } else {
            // line 15
            yield "            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Slug</th>
                        <th>Template</th>
                        <th>Statut</th>
                        <th>URL</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["landingPages"]) || array_key_exists("landingPages", $context) ? $context["landingPages"] : (function () { throw new RuntimeError('Variable "landingPages" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["landingPage"]) {
                // line 28
                yield "                        <tr>
                            <td>";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["landingPage"], "name", [], "any", false, false, false, 29), "html", null, true);
                yield "</td>
                            <td>";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["landingPage"], "slug", [], "any", false, false, false, 30), "html", null, true);
                yield "</td>
                            <td>";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["landingPage"], "landingTemplate", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
                yield "</td>
                            <td>
                                ";
                // line 33
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["landingPage"], "isActive", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 34
                    yield "                                    <span class=\"status-active\">Active</span>
                                ";
                } else {
                    // line 36
                    yield "                                    <span class=\"status-inactive\">Inactive</span>
                                ";
                }
                // line 38
                yield "                            </td>
                            <td>
                                <a href=\"/";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 40, $this->source); })()), "slug", [], "any", false, false, false, 40), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["landingPage"], "slug", [], "any", false, false, false, 40), "html", null, true);
                yield "\" target=\"_blank\">
                                    Voir la page
                                </a>
                            </td>
                            <td>
                                <a class=\"btn btn-primary\" href=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partner_landing_page_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["landingPage"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                yield "\">
                                    Modifier
                                </a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['landingPage'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "                </tbody>
            </table>
        ";
        }
        // line 54
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
        return "partner/landing_page/index.html.twig";
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
        return array (  194 => 54,  189 => 51,  177 => 45,  167 => 40,  163 => 38,  159 => 36,  155 => 34,  153 => 33,  148 => 31,  144 => 30,  140 => 29,  137 => 28,  133 => 27,  119 => 15,  115 => 13,  113 => 12,  106 => 8,  103 => 7,  93 => 6,  76 => 4,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'partner/base.html.twig' %}

{% block title %}Mes landing pages{% endblock %}
{% block page_title %}Mes landing pages{% endblock %}

{% block body %}
    <div class=\"page-actions\">
        <a class=\"btn btn-secondary\" href=\"{{ path('partner_dashboard') }}\">Retour dashboard</a>
    </div>

    <div class=\"table-wrapper\">
        {% if landingPages is empty %}
            <p>Aucune landing page.</p>
        {% else %}
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Slug</th>
                        <th>Template</th>
                        <th>Statut</th>
                        <th>URL</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {% for landingPage in landingPages %}
                        <tr>
                            <td>{{ landingPage.name }}</td>
                            <td>{{ landingPage.slug }}</td>
                            <td>{{ landingPage.landingTemplate.name }}</td>
                            <td>
                                {% if landingPage.isActive %}
                                    <span class=\"status-active\">Active</span>
                                {% else %}
                                    <span class=\"status-inactive\">Inactive</span>
                                {% endif %}
                            </td>
                            <td>
                                <a href=\"/{{ partner.slug }}/{{ landingPage.slug }}\" target=\"_blank\">
                                    Voir la page
                                </a>
                            </td>
                            <td>
                                <a class=\"btn btn-primary\" href=\"{{ path('partner_landing_page_edit', {id: landingPage.id}) }}\">
                                    Modifier
                                </a>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% endif %}
    </div>
{% endblock %}", "partner/landing_page/index.html.twig", "C:\\Users\\mhame\\OneDrive\\Desktop\\owl labs\\test technique\\Mini Cms\\mini-cms-acquisition\\templates\\partner\\landing_page\\index.html.twig");
    }
}
