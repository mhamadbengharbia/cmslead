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

/* admin/partner/index.html.twig */
class __TwigTemplate_382753fb58940d03539d51d088c3d71c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partner/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Admin Partners</title>
</head>
<body>
    <div style=\"display:flex; justify-content:space-between; align-items:center;\">
        <h1>Tous les partners</h1>
        <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Logout</a>
    </div>

    <p>
        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\">← Retour dashboard</a> |
        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_partner_new");
        yield "\">Créer un partner</a>
    </p>

    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", ["success"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            yield "        <div style=\"background:#dcfce7; color:#166534; padding:10px; margin-bottom:15px;\">
            ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "flashes", ["error"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            yield "        <div style=\"background:#fee2e2; color:#991b1b; padding:10px; margin-bottom:15px;\">
            ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "
    ";
        // line 30
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["partners"]) || array_key_exists("partners", $context) ? $context["partners"] : (function () { throw new RuntimeError('Variable "partners" does not exist.', 30, $this->source); })()))) {
            // line 31
            yield "        <p>Aucun partner.</p>
    ";
        } else {
            // line 33
            yield "        <table border=\"1\" cellpadding=\"8\" cellspacing=\"0\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Slug</th>
                    <th>User</th>
                    <th>Actif</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["partners"]) || array_key_exists("partners", $context) ? $context["partners"] : (function () { throw new RuntimeError('Variable "partners" does not exist.', 44, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
                // line 45
                yield "                    <tr>
                        <td>";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "name", [], "any", false, false, false, 46), "html", null, true);
                yield "</td>
                        <td>";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "slug", [], "any", false, false, false, 47), "html", null, true);
                yield "</td>
                        <td>";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "user", [], "any", false, false, false, 48), "email", [], "any", false, false, false, 48), "html", null, true);
                yield "</td>
                        <td>";
                // line 49
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "isActive", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
                yield "</td>
                                                  
                <td>
                    <a href=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_partner_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                yield "\">Modifier</a>

                    <form method=\"post\"
                        action=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_partner_toggle_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                yield "\"
                        style=\"display:inline-block; margin-left:10px;\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle_partner_" . CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "id", [], "any", false, false, false, 57))), "html", null, true);
                yield "\">
                        <button type=\"submit\">
                            ";
                // line 59
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "isActive", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
                yield "
                        </button>
                    </form>

                    <form method=\"post\"
                        action=\"";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_partner_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                yield "\"
                        style=\"display:inline-block; margin-left:10px;\"
                        onsubmit=\"return confirm('Supprimer ce partner et toutes ses données ?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_partner_" . CoreExtension::getAttribute($this->env, $this->source, $context["partner"], "id", [], "any", false, false, false, 67))), "html", null, true);
                yield "\">
                        <button type=\"submit\" style=\"color:red;\">
                            Supprimer
                        </button>
                    </form>
                </td>

                        
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['partner'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "            </tbody>
        </table>
    ";
        }
        // line 80
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
        return "admin/partner/index.html.twig";
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
        return array (  206 => 80,  201 => 77,  185 => 67,  179 => 64,  171 => 59,  166 => 57,  161 => 55,  155 => 52,  149 => 49,  145 => 48,  141 => 47,  137 => 46,  134 => 45,  130 => 44,  117 => 33,  113 => 31,  111 => 30,  108 => 29,  99 => 26,  96 => 25,  92 => 24,  89 => 23,  80 => 20,  77 => 19,  73 => 18,  67 => 15,  63 => 14,  56 => 10,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Admin Partners</title>
</head>
<body>
    <div style=\"display:flex; justify-content:space-between; align-items:center;\">
        <h1>Tous les partners</h1>
        <a href=\"{{ path('app_logout') }}\">Logout</a>
    </div>

    <p>
        <a href=\"{{ path('admin_dashboard') }}\">← Retour dashboard</a> |
        <a href=\"{{ path('admin_partner_new') }}\">Créer un partner</a>
    </p>

    {% for message in app.flashes('success') %}
        <div style=\"background:#dcfce7; color:#166534; padding:10px; margin-bottom:15px;\">
            {{ message }}
        </div>
    {% endfor %}

    {% for message in app.flashes('error') %}
        <div style=\"background:#fee2e2; color:#991b1b; padding:10px; margin-bottom:15px;\">
            {{ message }}
        </div>
    {% endfor %}

    {% if partners is empty %}
        <p>Aucun partner.</p>
    {% else %}
        <table border=\"1\" cellpadding=\"8\" cellspacing=\"0\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Slug</th>
                    <th>User</th>
                    <th>Actif</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for partner in partners %}
                    <tr>
                        <td>{{ partner.name }}</td>
                        <td>{{ partner.slug }}</td>
                        <td>{{ partner.user.email }}</td>
                        <td>{{ partner.isActive ? 'Oui' : 'Non' }}</td>
                                                  
                <td>
                    <a href=\"{{ path('admin_partner_edit', {id: partner.id}) }}\">Modifier</a>

                    <form method=\"post\"
                        action=\"{{ path('admin_partner_toggle_status', {id: partner.id}) }}\"
                        style=\"display:inline-block; margin-left:10px;\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle_partner_' ~ partner.id) }}\">
                        <button type=\"submit\">
                            {{ partner.isActive ? 'Désactiver' : 'Activer' }}
                        </button>
                    </form>

                    <form method=\"post\"
                        action=\"{{ path('admin_partner_delete', {id: partner.id}) }}\"
                        style=\"display:inline-block; margin-left:10px;\"
                        onsubmit=\"return confirm('Supprimer ce partner et toutes ses données ?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_partner_' ~ partner.id) }}\">
                        <button type=\"submit\" style=\"color:red;\">
                            Supprimer
                        </button>
                    </form>
                </td>

                        
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
</body>
</html>", "admin/partner/index.html.twig", "C:\\Users\\mhame\\OneDrive\\Desktop\\owl labs\\test technique\\Mini Cms\\mini-cms-acquisition\\templates\\admin\\partner\\index.html.twig");
    }
}
