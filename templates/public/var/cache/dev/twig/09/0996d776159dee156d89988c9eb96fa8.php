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

/* public/landing/template_reassurance.html.twig */
class __TwigTemplate_4b7eab0be936cf72f7f972c47e9d3652 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/landing/template_reassurance.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #ffffff;
            color: #0f172a;
        }

        .hero {
            background: ";
        // line 15
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 15, $this->source); })()), "primaryColor", [], "any", false, false, false, 15)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 15, $this->source); })()), "primaryColor", [], "any", false, false, false, 15), "html", null, true)) : ("#1D4ED8"));
        yield ";
            color: white;
            padding: 70px 20px;
            text-align: center;
        }

        .hero h1 {
            margin: 0 0 14px 0;
            font-size: 42px;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 30px 20px;
        }

        .block {
            background: ";
        // line 33
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 33, $this->source); })()), "secondaryColor", [], "any", false, false, false, 33)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 33, $this->source); })()), "secondaryColor", [], "any", false, false, false, 33), "html", null, true)) : ("#f8fafc"));
        yield ";
            border-radius: 16px;
            padding: 24px;
            margin-bottom: 24px;
        }

        .form-box {
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.06);
        }

        h2 {
            margin-top: 0;
        }

        form div {
            margin-bottom: 14px;
        }

        input, textarea, select {
            width: 100%;
            padding: 12px;
            border: 1px solid #cbd5e1;
            border-radius: 10px;
            margin-top: 6px;
        }

        button {
            background: ";
        // line 64
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 64, $this->source); })()), "buttonColor", [], "any", false, false, false, 64)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 64, $this->source); })()), "buttonColor", [], "any", false, false, false, 64), "html", null, true)) : ("#2563EB"));
        yield ";
            color: white;
            border: none;
            padding: 14px 18px;
            border-radius: 10px;
            cursor: pointer;
        }

        .flash-success {
            background: #dcfce7;
            color: #166534;
            padding: 12px 14px;
            border-radius: 10px;
            margin-bottom: 18px;
        }
    </style>
</head>
<body>
    <section class=\"hero\">
        <h1>";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 83, $this->source); })()), "title", [], "any", false, false, false, 83), "html", null, true);
        yield "</h1>
";
        // line 84
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 84, $this->source); })()), "heroImage", [], "any", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 85
            yield "    <div class=\"container\" style=\"margin-top: -30px;\">
        <div class=\"block\" style=\"padding: 12px;\">
            <img
                src=\"";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 88, $this->source); })()), "heroImage", [], "any", false, false, false, 88), "html", null, true);
            yield "\"
                alt=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 89, $this->source); })()), "title", [], "any", false, false, false, 89), "html", null, true);
            yield "\"
                style=\"width: 100%; max-height: 420px; object-fit: cover; border-radius: 14px;\"
            >
        </div>
    </div>
";
        }
        // line 95
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 95, $this->source); })()), "subtitle", [], "any", false, false, false, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 96
            yield "            <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 96, $this->source); })()), "subtitle", [], "any", false, false, false, 96), "html", null, true);
            yield "</p>
        ";
        }
        // line 98
        yield "    </section>

    <div class=\"container\">
        ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "flashes", ["success"], "method", false, false, false, 101));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 102
            yield "            <div class=\"flash-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        yield "
        ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 105, $this->source); })()), "sections", [], "any", false, false, false, 105));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 106
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["section"], "isEnabled", [], "any", false, false, false, 106)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 107
                yield "                <div class=\"block\">
                    <h2>";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["section"], "sectionKey", [], "any", false, false, false, 108)), "html", null, true);
                yield "</h2>

                    ";
                // line 110
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "contentJson", [], "any", false, true, false, 110), "title", [], "any", true, true, false, 110)) {
                    // line 111
                    yield "                        <p><strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "contentJson", [], "any", false, false, false, 111), "title", [], "any", false, false, false, 111), "html", null, true);
                    yield "</strong></p>
                    ";
                }
                // line 113
                yield "
                    ";
                // line 114
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "contentJson", [], "any", false, true, false, 114), "headline", [], "any", true, true, false, 114)) {
                    // line 115
                    yield "                        <p>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "contentJson", [], "any", false, false, false, 115), "headline", [], "any", false, false, false, 115), "html", null, true);
                    yield "</p>
                    ";
                }
                // line 117
                yield "
                    ";
                // line 118
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "contentJson", [], "any", false, true, false, 118), "subheadline", [], "any", true, true, false, 118)) {
                    // line 119
                    yield "                        <p>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "contentJson", [], "any", false, false, false, 119), "subheadline", [], "any", false, false, false, 119), "html", null, true);
                    yield "</p>
                    ";
                }
                // line 121
                yield "
                    ";
                // line 122
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "contentJson", [], "any", false, true, false, 122), "items", [], "any", true, true, false, 122)) {
                    // line 123
                    yield "                        <ul>
                            ";
                    // line 124
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "contentJson", [], "any", false, false, false, 124), "items", [], "any", false, false, false, 124));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 125
                        yield "                                <li>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
                        yield "</li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 127
                    yield "                        </ul>
                    ";
                }
                // line 129
                yield "                </div>
            ";
            }
            // line 131
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['section'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        yield "
        <div class=\"form-box\">
            <h2>";
        // line 134
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 134, $this->source); })()), "formTitle", [], "any", false, false, false, 134)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 134, $this->source); })()), "formTitle", [], "any", false, false, false, 134), "html", null, true)) : ("Demandez votre devis"));
        yield "</h2>

            ";
        // line 136
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["leadForm"]) || array_key_exists("leadForm", $context) ? $context["leadForm"] : (function () { throw new RuntimeError('Variable "leadForm" does not exist.', 136, $this->source); })()), 'form_start');
        yield "
                ";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["leadForm"]) || array_key_exists("leadForm", $context) ? $context["leadForm"] : (function () { throw new RuntimeError('Variable "leadForm" does not exist.', 137, $this->source); })()), "fullName", [], "any", false, false, false, 137), 'row');
        yield "
                ";
        // line 138
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["leadForm"]) || array_key_exists("leadForm", $context) ? $context["leadForm"] : (function () { throw new RuntimeError('Variable "leadForm" does not exist.', 138, $this->source); })()), "email", [], "any", false, false, false, 138), 'row');
        yield "
                ";
        // line 139
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["leadForm"]) || array_key_exists("leadForm", $context) ? $context["leadForm"] : (function () { throw new RuntimeError('Variable "leadForm" does not exist.', 139, $this->source); })()), "phone", [], "any", false, false, false, 139), 'row');
        yield "
                ";
        // line 140
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["leadForm"]) || array_key_exists("leadForm", $context) ? $context["leadForm"] : (function () { throw new RuntimeError('Variable "leadForm" does not exist.', 140, $this->source); })()), "company", [], "any", false, false, false, 140), 'row');
        yield "
                ";
        // line 141
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["leadForm"]) || array_key_exists("leadForm", $context) ? $context["leadForm"] : (function () { throw new RuntimeError('Variable "leadForm" does not exist.', 141, $this->source); })()), "message", [], "any", false, false, false, 141), 'row');
        yield "
                ";
        // line 142
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["leadForm"]) || array_key_exists("leadForm", $context) ? $context["leadForm"] : (function () { throw new RuntimeError('Variable "leadForm" does not exist.', 142, $this->source); })()), "submit", [], "any", false, false, false, 142), 'row');
        yield "
            ";
        // line 143
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["leadForm"]) || array_key_exists("leadForm", $context) ? $context["leadForm"] : (function () { throw new RuntimeError('Variable "leadForm" does not exist.', 143, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
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
        return "public/landing/template_reassurance.html.twig";
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
        return array (  314 => 143,  310 => 142,  306 => 141,  302 => 140,  298 => 139,  294 => 138,  290 => 137,  286 => 136,  281 => 134,  277 => 132,  271 => 131,  267 => 129,  263 => 127,  254 => 125,  250 => 124,  247 => 123,  245 => 122,  242 => 121,  236 => 119,  234 => 118,  231 => 117,  225 => 115,  223 => 114,  220 => 113,  214 => 111,  212 => 110,  207 => 108,  204 => 107,  201 => 106,  197 => 105,  194 => 104,  185 => 102,  181 => 101,  176 => 98,  170 => 96,  167 => 95,  158 => 89,  154 => 88,  149 => 85,  147 => 84,  143 => 83,  121 => 64,  87 => 33,  66 => 15,  51 => 5,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>{{ landingPage.name }} - {{ landingPage.name }}</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #ffffff;
            color: #0f172a;
        }

        .hero {
            background: {{ landingPage.primaryColor ?: '#1D4ED8' }};
            color: white;
            padding: 70px 20px;
            text-align: center;
        }

        .hero h1 {
            margin: 0 0 14px 0;
            font-size: 42px;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 30px 20px;
        }

        .block {
            background: {{ landingPage.secondaryColor ?: '#f8fafc' }};
            border-radius: 16px;
            padding: 24px;
            margin-bottom: 24px;
        }

        .form-box {
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.06);
        }

        h2 {
            margin-top: 0;
        }

        form div {
            margin-bottom: 14px;
        }

        input, textarea, select {
            width: 100%;
            padding: 12px;
            border: 1px solid #cbd5e1;
            border-radius: 10px;
            margin-top: 6px;
        }

        button {
            background: {{ landingPage.buttonColor ?: '#2563EB' }};
            color: white;
            border: none;
            padding: 14px 18px;
            border-radius: 10px;
            cursor: pointer;
        }

        .flash-success {
            background: #dcfce7;
            color: #166534;
            padding: 12px 14px;
            border-radius: 10px;
            margin-bottom: 18px;
        }
    </style>
</head>
<body>
    <section class=\"hero\">
        <h1>{{ landingPage.title }}</h1>
{% if landingPage.heroImage %}
    <div class=\"container\" style=\"margin-top: -30px;\">
        <div class=\"block\" style=\"padding: 12px;\">
            <img
                src=\"{{ landingPage.heroImage }}\"
                alt=\"{{ landingPage.title }}\"
                style=\"width: 100%; max-height: 420px; object-fit: cover; border-radius: 14px;\"
            >
        </div>
    </div>
{% endif %}
        {% if landingPage.subtitle %}
            <p>{{ landingPage.subtitle }}</p>
        {% endif %}
    </section>

    <div class=\"container\">
        {% for message in app.flashes('success') %}
            <div class=\"flash-success\">{{ message }}</div>
        {% endfor %}

        {% for section in landingPage.sections %}
            {% if section.isEnabled %}
                <div class=\"block\">
                    <h2>{{ section.sectionKey|capitalize }}</h2>

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

        <div class=\"form-box\">
            <h2>{{ landingPage.formTitle ?: 'Demandez votre devis' }}</h2>

            {{ form_start(leadForm) }}
                {{ form_row(leadForm.fullName) }}
                {{ form_row(leadForm.email) }}
                {{ form_row(leadForm.phone) }}
                {{ form_row(leadForm.company) }}
                {{ form_row(leadForm.message) }}
                {{ form_row(leadForm.submit) }}
            {{ form_end(leadForm) }}
        </div>
    </div>
</body>
</html>", "public/landing/template_reassurance.html.twig", "C:\\Users\\mhame\\OneDrive\\Desktop\\owl labs\\test technique\\Mini Cms\\mini-cms-acquisition\\templates\\public\\landing\\template_reassurance.html.twig");
    }
}
