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

/* public/landing/show.html.twig */
class __TwigTemplate_4e53390fcfb43f7a4b94357374e28038 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/landing/show.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 900px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .flash-success {
            background: #dcfce7;
            color: #166534;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .section {
            margin-bottom: 24px;
            padding: 16px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        form div {
            margin-bottom: 15px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            background: ";
        // line 41
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 41, $this->source); })()), "buttonColor", [], "any", false, false, false, 41)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 41, $this->source); })()), "buttonColor", [], "any", false, false, false, 41), "html", null, true)) : ("#2563EB"));
        yield ";
            color: white;
            border: none;
            padding: 12px 18px;
            border-radius: 6px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "flashes", ["success"], "method", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 52
            yield "        <div class=\"flash-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "
    <h1>";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 55, $this->source); })()), "title", [], "any", false, false, false, 55), "html", null, true);
        yield "</h1>

    ";
        // line 57
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 57, $this->source); })()), "subtitle", [], "any", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 58
            yield "        <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 58, $this->source); })()), "subtitle", [], "any", false, false, false, 58), "html", null, true);
            yield "</p>
    ";
        }
        // line 60
        yield "
    <p><strong>Partner :</strong> ";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 61, $this->source); })()), "partner", [], "any", false, false, false, 61), "name", [], "any", false, false, false, 61), "html", null, true);
        yield "</p>
    <p><strong>Template :</strong> ";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 62, $this->source); })()), "landingTemplate", [], "any", false, false, false, 62), "name", [], "any", false, false, false, 62), "html", null, true);
        yield "</p>
    <p><strong>CTA :</strong> ";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 63, $this->source); })()), "ctaText", [], "any", false, false, false, 63), "html", null, true);
        yield "</p>

    <hr>

    <h2>Sections</h2>

    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 69, $this->source); })()), "sections", [], "any", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 70
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["section"], "isEnabled", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 71
                yield "            <div class=\"section\">
                <h3>";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["section"], "sectionKey", [], "any", false, false, false, 72), "html", null, true);
                yield "</h3>

                ";
                // line 74
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "contentJson", [], "any", false, true, false, 74), "title", [], "any", true, true, false, 74)) {
                    // line 75
                    yield "                    <p><strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "contentJson", [], "any", false, false, false, 75), "title", [], "any", false, false, false, 75), "html", null, true);
                    yield "</strong></p>
                ";
                }
                // line 77
                yield "
                ";
                // line 78
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "contentJson", [], "any", false, true, false, 78), "headline", [], "any", true, true, false, 78)) {
                    // line 79
                    yield "                    <p>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "contentJson", [], "any", false, false, false, 79), "headline", [], "any", false, false, false, 79), "html", null, true);
                    yield "</p>
                ";
                }
                // line 81
                yield "
                ";
                // line 82
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "contentJson", [], "any", false, true, false, 82), "subheadline", [], "any", true, true, false, 82)) {
                    // line 83
                    yield "                    <p>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "contentJson", [], "any", false, false, false, 83), "subheadline", [], "any", false, false, false, 83), "html", null, true);
                    yield "</p>
                ";
                }
                // line 85
                yield "
                ";
                // line 86
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "contentJson", [], "any", false, true, false, 86), "items", [], "any", true, true, false, 86)) {
                    // line 87
                    yield "                    <ul>
                        ";
                    // line 88
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "contentJson", [], "any", false, false, false, 88), "items", [], "any", false, false, false, 88));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 89
                        yield "                            <li>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
                        yield "</li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 91
                    yield "                    </ul>
                ";
                }
                // line 93
                yield "            </div>
        ";
            }
            // line 95
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['section'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "
    <hr>

    <h2>";
        // line 99
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 99, $this->source); })()), "formTitle", [], "any", false, false, false, 99)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 99, $this->source); })()), "formTitle", [], "any", false, false, false, 99), "html", null, true)) : ("Contactez-nous"));
        yield "</h2>

    ";
        // line 101
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["leadForm"]) || array_key_exists("leadForm", $context) ? $context["leadForm"] : (function () { throw new RuntimeError('Variable "leadForm" does not exist.', 101, $this->source); })()), 'form_start');
        yield "
        ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["leadForm"]) || array_key_exists("leadForm", $context) ? $context["leadForm"] : (function () { throw new RuntimeError('Variable "leadForm" does not exist.', 102, $this->source); })()), "fullName", [], "any", false, false, false, 102), 'row');
        yield "
        ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["leadForm"]) || array_key_exists("leadForm", $context) ? $context["leadForm"] : (function () { throw new RuntimeError('Variable "leadForm" does not exist.', 103, $this->source); })()), "email", [], "any", false, false, false, 103), 'row');
        yield "
        ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["leadForm"]) || array_key_exists("leadForm", $context) ? $context["leadForm"] : (function () { throw new RuntimeError('Variable "leadForm" does not exist.', 104, $this->source); })()), "phone", [], "any", false, false, false, 104), 'row');
        yield "
        ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["leadForm"]) || array_key_exists("leadForm", $context) ? $context["leadForm"] : (function () { throw new RuntimeError('Variable "leadForm" does not exist.', 105, $this->source); })()), "company", [], "any", false, false, false, 105), 'row');
        yield "
        ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["leadForm"]) || array_key_exists("leadForm", $context) ? $context["leadForm"] : (function () { throw new RuntimeError('Variable "leadForm" does not exist.', 106, $this->source); })()), "message", [], "any", false, false, false, 106), 'row');
        yield "
        ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["leadForm"]) || array_key_exists("leadForm", $context) ? $context["leadForm"] : (function () { throw new RuntimeError('Variable "leadForm" does not exist.', 107, $this->source); })()), "submit", [], "any", false, false, false, 107), 'row');
        yield "
    ";
        // line 108
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["leadForm"]) || array_key_exists("leadForm", $context) ? $context["leadForm"] : (function () { throw new RuntimeError('Variable "leadForm" does not exist.', 108, $this->source); })()), 'form_end');
        yield "
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
        return "public/landing/show.html.twig";
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
        return array (  270 => 108,  266 => 107,  262 => 106,  258 => 105,  254 => 104,  250 => 103,  246 => 102,  242 => 101,  237 => 99,  232 => 96,  226 => 95,  222 => 93,  218 => 91,  209 => 89,  205 => 88,  202 => 87,  200 => 86,  197 => 85,  191 => 83,  189 => 82,  186 => 81,  180 => 79,  178 => 78,  175 => 77,  169 => 75,  167 => 74,  162 => 72,  159 => 71,  156 => 70,  152 => 69,  143 => 63,  139 => 62,  135 => 61,  132 => 60,  126 => 58,  124 => 57,  119 => 55,  116 => 54,  107 => 52,  103 => 51,  90 => 41,  51 => 5,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>{{ landingPage.title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 900px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .flash-success {
            background: #dcfce7;
            color: #166534;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .section {
            margin-bottom: 24px;
            padding: 16px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        form div {
            margin-bottom: 15px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            background: {{ landingPage.buttonColor ?: '#2563EB' }};
            color: white;
            border: none;
            padding: 12px 18px;
            border-radius: 6px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    {% for message in app.flashes('success') %}
        <div class=\"flash-success\">{{ message }}</div>
    {% endfor %}

    <h1>{{ landingPage.title }}</h1>

    {% if landingPage.subtitle %}
        <p>{{ landingPage.subtitle }}</p>
    {% endif %}

    <p><strong>Partner :</strong> {{ landingPage.partner.name }}</p>
    <p><strong>Template :</strong> {{ landingPage.landingTemplate.name }}</p>
    <p><strong>CTA :</strong> {{ landingPage.ctaText }}</p>

    <hr>

    <h2>Sections</h2>

    {% for section in landingPage.sections %}
        {% if section.isEnabled %}
            <div class=\"section\">
                <h3>{{ section.sectionKey }}</h3>

                {% if section.contentJson.title is defined %}
                    <p><strong>{{ section.contentJson.title }}</strong></p>
                {% endif %}

                {% if section.contentJson.headline is defined %}
                    <p>{{ section.contentJson.headline }}</p>
                {% endif %}

                {% if section.contentJson.subheadline is defined %}
                    <p>{{ section.contentJson.subheadline }}</p>
                {% endif %}

                {% if section.contentJson.items is defined %}
                    <ul>
                        {% for item in section.contentJson.items %}
                            <li>{{ item }}</li>
                        {% endfor %}
                    </ul>
                {% endif %}
            </div>
        {% endif %}
    {% endfor %}

    <hr>

    <h2>{{ landingPage.formTitle ?: 'Contactez-nous' }}</h2>

    {{ form_start(leadForm) }}
        {{ form_row(leadForm.fullName) }}
        {{ form_row(leadForm.email) }}
        {{ form_row(leadForm.phone) }}
        {{ form_row(leadForm.company) }}
        {{ form_row(leadForm.message) }}
        {{ form_row(leadForm.submit) }}
    {{ form_end(leadForm) }}
</body>
</html>", "public/landing/show.html.twig", "C:\\Users\\mhame\\OneDrive\\Desktop\\owl labs\\test technique\\Mini Cms\\mini-cms-acquisition\\templates\\public\\landing\\show.html.twig");
    }
}
