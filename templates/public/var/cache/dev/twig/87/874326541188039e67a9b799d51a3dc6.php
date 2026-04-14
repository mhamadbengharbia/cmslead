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

/* partner/base.html.twig */
class __TwigTemplate_0a07bb2764fcfa5a86e66466cf5e4d3d extends Template
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
            'title' => [$this, 'block_title'],
            'page_title' => [$this, 'block_page_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partner/base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f8fafc;
            color: #0f172a;
        }

        .layout {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 260px;
            background: #0f172a;
            color: white;
            padding: 24px 18px;
        }

        .sidebar h2 {
            margin-top: 0;
            margin-bottom: 30px;
            font-size: 22px;
        }

        .sidebar .partner-name {
            font-size: 14px;
            color: #cbd5e1;
            margin-bottom: 25px;
        }

        .sidebar a {
            display: block;
            color: #e2e8f0;
            text-decoration: none;
            padding: 10px 12px;
            border-radius: 8px;
            margin-bottom: 8px;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: #1e293b;
        }

        .main {
            flex: 1;
            padding: 28px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .page-title {
            margin: 0;
            font-size: 28px;
        }

        .logout-btn {
            display: inline-block;
            padding: 10px 14px;
            background: #dc2626;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
            margin-bottom: 24px;
        }

        .card {
            background: white;
            border-radius: 14px;
            padding: 20px;
            box-shadow: 0 4px 16px rgba(15, 23, 42, 0.08);
        }

        .card h3,
        .card h2 {
            margin-top: 0;
        }

        .flash-success {
            background: #dcfce7;
            color: #166534;
            padding: 12px 14px;
            border-radius: 10px;
            margin-bottom: 18px;
        }

        .flash-error {
            background: #fee2e2;
            color: #991b1b;
            padding: 12px 14px;
            border-radius: 10px;
            margin-bottom: 18px;
        }

        .table-wrapper {
            background: white;
            border-radius: 14px;
            padding: 18px;
            box-shadow: 0 4px 16px rgba(15, 23, 42, 0.08);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            text-align: left;
            padding: 12px 10px;
            border-bottom: 1px solid #e2e8f0;
        }

        th {
            font-size: 14px;
            color: #475569;
        }

        .btn {
            display: inline-block;
            padding: 10px 14px;
            border-radius: 8px;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background: #2563eb;
            color: white;
        }

        .btn-secondary {
            background: #e2e8f0;
            color: #0f172a;
        }

        .status-active {
            color: #15803d;
            font-weight: bold;
        }

        .status-inactive {
            color: #b91c1c;
            font-weight: bold;
        }

        .form-card {
            background: white;
            border-radius: 14px;
            padding: 24px;
            box-shadow: 0 4px 16px rgba(15, 23, 42, 0.08);
            max-width: 860px;
        }

        form > div {
            margin-bottom: 16px;
        }

        input, textarea, select {
            width: 100%;
            padding: 11px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            margin-top: 6px;
        }

        label {
            font-weight: 600;
        }

        .page-actions {
            margin-bottom: 20px;
        }

        .page-actions a {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class=\"layout\">
        <aside class=\"sidebar\">
            <h2>Partner Panel</h2>

            ";
        // line 208
        if (array_key_exists("partner", $context)) {
            // line 209
            yield "                <div class=\"partner-name\">
                    ";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 210, $this->source); })()), "name", [], "any", false, false, false, 210), "html", null, true);
            yield "<br>
                    <small>";
            // line 211
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partner"]) || array_key_exists("partner", $context) ? $context["partner"] : (function () { throw new RuntimeError('Variable "partner" does not exist.', 211, $this->source); })()), "slug", [], "any", false, false, false, 211), "html", null, true);
            yield "</small>
                </div>
            ";
        }
        // line 214
        yield "
            <a href=\"";
        // line 215
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partner_dashboard");
        yield "\">Dashboard</a>
            <a href=\"";
        // line 216
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partner_landing_page_index");
        yield "\">Mes landing pages</a>
            <a href=\"";
        // line 217
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Logout</a>
        </aside>

        <main class=\"main\">
            <div class=\"topbar\">
                <h1 class=\"page-title\">";
        // line 222
        yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
        yield "</h1>
                <a class=\"logout-btn\" href=\"";
        // line 223
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Logout</a>
            </div>

            ";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 226, $this->source); })()), "flashes", ["success"], "method", false, false, false, 226));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 227
            yield "                <div class=\"flash-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
        yield "
            ";
        // line 230
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 230, $this->source); })()), "flashes", ["error"], "method", false, false, false, 230));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 231
            yield "                <div class=\"flash-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
        yield "
            ";
        // line 234
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 235
        yield "        </main>
    </div>
</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Espace Partner";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 222
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "Espace Partner";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 234
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partner/base.html.twig";
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
        return array (  383 => 234,  366 => 222,  349 => 5,  338 => 235,  336 => 234,  333 => 233,  324 => 231,  320 => 230,  317 => 229,  308 => 227,  304 => 226,  298 => 223,  294 => 222,  286 => 217,  282 => 216,  278 => 215,  275 => 214,  269 => 211,  265 => 210,  262 => 209,  260 => 208,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Espace Partner{% endblock %}</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f8fafc;
            color: #0f172a;
        }

        .layout {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 260px;
            background: #0f172a;
            color: white;
            padding: 24px 18px;
        }

        .sidebar h2 {
            margin-top: 0;
            margin-bottom: 30px;
            font-size: 22px;
        }

        .sidebar .partner-name {
            font-size: 14px;
            color: #cbd5e1;
            margin-bottom: 25px;
        }

        .sidebar a {
            display: block;
            color: #e2e8f0;
            text-decoration: none;
            padding: 10px 12px;
            border-radius: 8px;
            margin-bottom: 8px;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: #1e293b;
        }

        .main {
            flex: 1;
            padding: 28px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .page-title {
            margin: 0;
            font-size: 28px;
        }

        .logout-btn {
            display: inline-block;
            padding: 10px 14px;
            background: #dc2626;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
            margin-bottom: 24px;
        }

        .card {
            background: white;
            border-radius: 14px;
            padding: 20px;
            box-shadow: 0 4px 16px rgba(15, 23, 42, 0.08);
        }

        .card h3,
        .card h2 {
            margin-top: 0;
        }

        .flash-success {
            background: #dcfce7;
            color: #166534;
            padding: 12px 14px;
            border-radius: 10px;
            margin-bottom: 18px;
        }

        .flash-error {
            background: #fee2e2;
            color: #991b1b;
            padding: 12px 14px;
            border-radius: 10px;
            margin-bottom: 18px;
        }

        .table-wrapper {
            background: white;
            border-radius: 14px;
            padding: 18px;
            box-shadow: 0 4px 16px rgba(15, 23, 42, 0.08);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            text-align: left;
            padding: 12px 10px;
            border-bottom: 1px solid #e2e8f0;
        }

        th {
            font-size: 14px;
            color: #475569;
        }

        .btn {
            display: inline-block;
            padding: 10px 14px;
            border-radius: 8px;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background: #2563eb;
            color: white;
        }

        .btn-secondary {
            background: #e2e8f0;
            color: #0f172a;
        }

        .status-active {
            color: #15803d;
            font-weight: bold;
        }

        .status-inactive {
            color: #b91c1c;
            font-weight: bold;
        }

        .form-card {
            background: white;
            border-radius: 14px;
            padding: 24px;
            box-shadow: 0 4px 16px rgba(15, 23, 42, 0.08);
            max-width: 860px;
        }

        form > div {
            margin-bottom: 16px;
        }

        input, textarea, select {
            width: 100%;
            padding: 11px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            margin-top: 6px;
        }

        label {
            font-weight: 600;
        }

        .page-actions {
            margin-bottom: 20px;
        }

        .page-actions a {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class=\"layout\">
        <aside class=\"sidebar\">
            <h2>Partner Panel</h2>

            {% if partner is defined %}
                <div class=\"partner-name\">
                    {{ partner.name }}<br>
                    <small>{{ partner.slug }}</small>
                </div>
            {% endif %}

            <a href=\"{{ path('partner_dashboard') }}\">Dashboard</a>
            <a href=\"{{ path('partner_landing_page_index') }}\">Mes landing pages</a>
            <a href=\"{{ path('app_logout') }}\">Logout</a>
        </aside>

        <main class=\"main\">
            <div class=\"topbar\">
                <h1 class=\"page-title\">{% block page_title %}Espace Partner{% endblock %}</h1>
                <a class=\"logout-btn\" href=\"{{ path('app_logout') }}\">Logout</a>
            </div>

            {% for message in app.flashes('success') %}
                <div class=\"flash-success\">{{ message }}</div>
            {% endfor %}

            {% for message in app.flashes('error') %}
                <div class=\"flash-error\">{{ message }}</div>
            {% endfor %}

            {% block body %}{% endblock %}
        </main>
    </div>
</body>
</html>", "partner/base.html.twig", "C:\\Users\\mhame\\OneDrive\\Desktop\\owl labs\\test technique\\Mini Cms\\mini-cms-acquisition\\templates\\partner\\base.html.twig");
    }
}
