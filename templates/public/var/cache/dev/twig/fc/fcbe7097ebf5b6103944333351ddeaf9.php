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

/* public/landing/template_direct.html.twig */
class __TwigTemplate_0604da6a41348f1646d200c492691875 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/landing/template_direct.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 5, $this->source); })()), "slug", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: ";
        // line 14
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 14, $this->source); })()), "secondaryColor", [], "any", false, false, false, 14)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 14, $this->source); })()), "secondaryColor", [], "any", false, false, false, 14), "html", null, true)) : ("#19a974"));
        yield ";
            color:#0f172a;
        }

        .page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 16px;
        }

        .phone {
            width: 100%;
            max-width: 1360px;
            background: #f6f6f6;
            border-radius: 32px;
            overflow: hidden;
            box-shadow: 0 24px 70px rgba(15, 23, 42, 0.28);
            position: relative;
        }

        .hero {
            position: relative;
            min-height: 640px;
         }

        .hero img {
            width: 100%;
            height: 640px;
            object-fit: cover;
            display: block;
            opacity: 0.92;
        }

        .hero-fallback {
            height: 320px;
            display: flex;
            align-items: end;
            padding: 24px;
            color: white;
            background: linear-gradient(180deg, #102334 0%, #18364b 100%);
        }

        .hero-top {
            position: absolute;
            top: 18px;
            left: 18px;
            right: 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 2;
        }

 
        .floating-card {
            position: relative;
            margin: -38px 16px 16px;
            background: #ffffff;
            border-radius: 28px;
            padding: 24px 22px 20px;
            box-shadow: 0 18px 40px rgba(15, 23, 42, 0.14);
        }

 
 

 

        .title {
            margin: 0 0 10px 0;
            font-size: 30px;
            line-height: 1.15;
            color: #111827;
        }

        .subtitle {
            margin: 0 0 18px 0;
            color: #475569;
            line-height: 1.5;
        }

        .section-title {
            margin: 18px 0 10px;
            font-size: 15px;
            font-weight: 700;
            color: #111827;
        }

 

  
        .chips {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            margin-bottom: 20px;
        }

        .chip {
            background: #f8fafc;
            border: 1px solid #dbeafe;
            border-radius: 18px;
            text-align: center;
            padding: 12px 8px;
        }

        .chip-icon {
            width: 38px;
            height: 38px;
            margin: 0 auto 8px;
            border-radius: 999px;
            border: 2px solid ";
        // line 127
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 127, $this->source); })()), "primaryColor", [], "any", false, false, false, 127)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 127, $this->source); })()), "primaryColor", [], "any", false, false, false, 127), "html", null, true)) : ("#0ea5e9"));
        yield ";
            color: ";
        // line 128
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 128, $this->source); })()), "primaryColor", [], "any", false, false, false, 128)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 128, $this->source); })()), "primaryColor", [], "any", false, false, false, 128), "html", null, true)) : ("#0ea5e9"));
        yield ";
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            font-weight: bold;
        }

        .chip-label {
            font-size: 12px;
            color: #334155;
            line-height: 1.25;
        }

        .testimonial-list {
            margin: 0 0 18px 0;
            padding-left: 18px;
            color: #334155;
        }

        .testimonial-list li {
            margin-bottom: 8px;
        }

        .cta-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            margin-top: 10px;
        }

        .cta-text {
            font-size: 14px;
            color: #0f172a;
        }

        .cta-text strong {
            display: block;
            font-size: 20px;
            color: #111827;
            margin-bottom: 2px;
        }

        .cta-button,
        button {
            background: ";
        // line 174
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 174, $this->source); })()), "buttonColor", [], "any", false, false, false, 174)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 174, $this->source); })()), "buttonColor", [], "any", false, false, false, 174), "html", null, true)) : ("#102334"));
        yield ";
            color: #ffffff;
            border: none;
            border-radius: 14px;
            padding: 14px 18px;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .form-wrap {
            margin: 0 16px 18px;
            background: #ffffff;
            border-radius: 24px;
            padding: 22px;
            box-shadow: 0 16px 34px rgba(15, 23, 42, 0.12);
        }

        .form-wrap h2 {
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 24px;
        }

        form div {
            margin-bottom: 12px;
        }

        input, textarea, select {
            width: 100%;
            padding: 12px 13px;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            margin-top: 6px;
            font: inherit;
        }

        textarea {
            min-height: 110px;
            resize: vertical;
        }

        .flash-success {
            margin: 0 16px 16px;
            background: #dcfce7;
            color: #166534;
            padding: 12px 14px;
            border-radius: 14px;
        }

        @media (max-width: 520px) {
            .title {
                font-size: 26px;
            }

            .chips {
                grid-template-columns: repeat(2, 1fr);
            }

            .gallery {
                grid-template-columns: repeat(2, 1fr);
            }

            .cta-footer {
                flex-direction: column;
                align-items: stretch;
            }

            .cta-button,
            button {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
";
        // line 252
        $context["heroSection"] = null;
        // line 253
        $context["benefitsSection"] = null;
        // line 254
        $context["testimonialsSection"] = null;
        // line 255
        yield "
";
        // line 256
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 256, $this->source); })()), "sections", [], "any", false, false, false, 256));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 257
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["section"], "sectionKey", [], "any", false, false, false, 257) == "hero")) {
                // line 258
                yield "        ";
                $context["heroSection"] = $context["section"];
                // line 259
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["section"], "sectionKey", [], "any", false, false, false, 259) == "benefits")) {
                // line 260
                yield "        ";
                $context["benefitsSection"] = $context["section"];
                // line 261
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["section"], "sectionKey", [], "any", false, false, false, 261) == "testimonials")) {
                // line 262
                yield "        ";
                $context["testimonialsSection"] = $context["section"];
                // line 263
                yield "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['section'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
        yield "
<div class=\"page\">
    <div class=\"phone\">
        ";
        // line 268
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 268, $this->source); })()), "flashes", ["success"], "method", false, false, false, 268));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 269
            yield "            <div class=\"flash-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 271
        yield "
        <section class=\"hero\">
            <div class=\"hero-top\">
                <div class=\"name\">";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 274, $this->source); })()), "name", [], "any", false, false, false, 274), "html", null, true);
        yield "</div>
                <div class=\"slug\">";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 275, $this->source); })()), "slug", [], "any", false, false, false, 275), "html", null, true);
        yield "</div>
            </div>

            ";
        // line 278
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 278, $this->source); })()), "heroImage", [], "any", false, false, false, 278)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 279
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 279, $this->source); })()), "heroImage", [], "any", false, false, false, 279), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 279, $this->source); })()), "title", [], "any", false, false, false, 279), "html", null, true);
            yield "\">
            ";
        } else {
            // line 281
            yield "                <div class=\"hero-fallback\">
                    <div>
                        <h1 style=\"margin:0; font-size:28px;\">";
            // line 283
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 283, $this->source); })()), "title", [], "any", false, false, false, 283), "html", null, true);
            yield "</h1>
                        ";
            // line 284
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 284, $this->source); })()), "subtitle", [], "any", false, false, false, 284)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 285
                yield "                            <p style=\"margin:10px 0 0 0; opacity:.9;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 285, $this->source); })()), "subtitle", [], "any", false, false, false, 285), "html", null, true);
                yield "</p>
                        ";
            }
            // line 287
            yield "                    </div>
                </div>
            ";
        }
        // line 290
        yield "        </section>

        <section class=\"floating-card\">
       

            <h1 class=\"title\">";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 295, $this->source); })()), "title", [], "any", false, false, false, 295), "html", null, true);
        yield "</h1>

            ";
        // line 297
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 297, $this->source); })()), "subtitle", [], "any", false, false, false, 297)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 298
            yield "                <p class=\"subtitle\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 298, $this->source); })()), "subtitle", [], "any", false, false, false, 298), "html", null, true);
            yield "</p>
            ";
        }
        // line 300
        yield "
       

            ";
        // line 303
        if ((((isset($context["benefitsSection"]) || array_key_exists("benefitsSection", $context) ? $context["benefitsSection"] : (function () { throw new RuntimeError('Variable "benefitsSection" does not exist.', 303, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["benefitsSection"]) || array_key_exists("benefitsSection", $context) ? $context["benefitsSection"] : (function () { throw new RuntimeError('Variable "benefitsSection" does not exist.', 303, $this->source); })()), "isEnabled", [], "any", false, false, false, 303)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["benefitsSection"] ?? null), "contentJson", [], "any", false, true, false, 303), "items", [], "any", true, true, false, 303))) {
            // line 304
            yield "                <div class=\"section-title\">";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["benefitsSection"] ?? null), "contentJson", [], "any", false, true, false, 304), "title", [], "any", true, true, false, 304) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["benefitsSection"]) || array_key_exists("benefitsSection", $context) ? $context["benefitsSection"] : (function () { throw new RuntimeError('Variable "benefitsSection" does not exist.', 304, $this->source); })()), "contentJson", [], "any", false, false, false, 304), "title", [], "any", false, false, false, 304)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["benefitsSection"]) || array_key_exists("benefitsSection", $context) ? $context["benefitsSection"] : (function () { throw new RuntimeError('Variable "benefitsSection" does not exist.', 304, $this->source); })()), "contentJson", [], "any", false, false, false, 304), "title", [], "any", false, false, false, 304), "html", null, true)) : ("Avantages"));
            yield "</div>
                <div class=\"chips\">
                    ";
            // line 306
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["benefitsSection"]) || array_key_exists("benefitsSection", $context) ? $context["benefitsSection"] : (function () { throw new RuntimeError('Variable "benefitsSection" does not exist.', 306, $this->source); })()), "contentJson", [], "any", false, false, false, 306), "items", [], "any", false, false, false, 306), 0, 4));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 307
                yield "                        <div class=\"chip\">
                            <div class=\"chip-icon\">";
                // line 308
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 308), "html", null, true);
                yield "</div>
                            <div class=\"chip-label\">";
                // line 309
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
                yield "</div>
                        </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 312
            yield "                </div>
            ";
        }
        // line 314
        yield "
            ";
        // line 315
        if ((((isset($context["testimonialsSection"]) || array_key_exists("testimonialsSection", $context) ? $context["testimonialsSection"] : (function () { throw new RuntimeError('Variable "testimonialsSection" does not exist.', 315, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["testimonialsSection"]) || array_key_exists("testimonialsSection", $context) ? $context["testimonialsSection"] : (function () { throw new RuntimeError('Variable "testimonialsSection" does not exist.', 315, $this->source); })()), "isEnabled", [], "any", false, false, false, 315)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["testimonialsSection"] ?? null), "contentJson", [], "any", false, true, false, 315), "items", [], "any", true, true, false, 315))) {
            // line 316
            yield "                <div class=\"section-title\">";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["testimonialsSection"] ?? null), "contentJson", [], "any", false, true, false, 316), "title", [], "any", true, true, false, 316) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["testimonialsSection"]) || array_key_exists("testimonialsSection", $context) ? $context["testimonialsSection"] : (function () { throw new RuntimeError('Variable "testimonialsSection" does not exist.', 316, $this->source); })()), "contentJson", [], "any", false, false, false, 316), "title", [], "any", false, false, false, 316)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["testimonialsSection"]) || array_key_exists("testimonialsSection", $context) ? $context["testimonialsSection"] : (function () { throw new RuntimeError('Variable "testimonialsSection" does not exist.', 316, $this->source); })()), "contentJson", [], "any", false, false, false, 316), "title", [], "any", false, false, false, 316), "html", null, true)) : ("Avis clients"));
            yield "</div>
                <ul class=\"testimonial-list\">
                    ";
            // line 318
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["testimonialsSection"]) || array_key_exists("testimonialsSection", $context) ? $context["testimonialsSection"] : (function () { throw new RuntimeError('Variable "testimonialsSection" does not exist.', 318, $this->source); })()), "contentJson", [], "any", false, false, false, 318), "items", [], "any", false, false, false, 318), 0, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 319
                yield "                        <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
                yield "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 321
            yield "                </ul>
            ";
        }
        // line 323
        yield "
            <div class=\"cta-footer\">
                <div class=\"cta-text\">
                    <strong>";
        // line 326
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 326, $this->source); })()), "formTitle", [], "any", false, false, false, 326)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 326, $this->source); })()), "formTitle", [], "any", false, false, false, 326), "html", null, true)) : ("Demandez votre devis"));
        yield "</strong>
                    Laissez vos coordonnées et obtenez une réponse rapide.
                </div>

                <a href=\"#lead-form\" class=\"cta-button\">";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 330, $this->source); })()), "ctaText", [], "any", false, false, false, 330), "html", null, true);
        yield "</a>
            </div>
        </section>

        <section class=\"form-wrap\" id=\"lead-form\">
            <h2>";
        // line 335
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 335, $this->source); })()), "formTitle", [], "any", false, false, false, 335)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["landingPage"]) || array_key_exists("landingPage", $context) ? $context["landingPage"] : (function () { throw new RuntimeError('Variable "landingPage" does not exist.', 335, $this->source); })()), "formTitle", [], "any", false, false, false, 335), "html", null, true)) : ("Contactez-nous"));
        yield "</h2>

            ";
        // line 337
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["leadForm"]) || array_key_exists("leadForm", $context) ? $context["leadForm"] : (function () { throw new RuntimeError('Variable "leadForm" does not exist.', 337, $this->source); })()), 'form_start');
        yield "
                ";
        // line 338
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["leadForm"]) || array_key_exists("leadForm", $context) ? $context["leadForm"] : (function () { throw new RuntimeError('Variable "leadForm" does not exist.', 338, $this->source); })()), "fullName", [], "any", false, false, false, 338), 'row');
        yield "
                ";
        // line 339
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["leadForm"]) || array_key_exists("leadForm", $context) ? $context["leadForm"] : (function () { throw new RuntimeError('Variable "leadForm" does not exist.', 339, $this->source); })()), "email", [], "any", false, false, false, 339), 'row');
        yield "
                ";
        // line 340
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["leadForm"]) || array_key_exists("leadForm", $context) ? $context["leadForm"] : (function () { throw new RuntimeError('Variable "leadForm" does not exist.', 340, $this->source); })()), "phone", [], "any", false, false, false, 340), 'row');
        yield "
                ";
        // line 341
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["leadForm"]) || array_key_exists("leadForm", $context) ? $context["leadForm"] : (function () { throw new RuntimeError('Variable "leadForm" does not exist.', 341, $this->source); })()), "company", [], "any", false, false, false, 341), 'row');
        yield "
                ";
        // line 342
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["leadForm"]) || array_key_exists("leadForm", $context) ? $context["leadForm"] : (function () { throw new RuntimeError('Variable "leadForm" does not exist.', 342, $this->source); })()), "message", [], "any", false, false, false, 342), 'row');
        yield "
                ";
        // line 343
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["leadForm"]) || array_key_exists("leadForm", $context) ? $context["leadForm"] : (function () { throw new RuntimeError('Variable "leadForm" does not exist.', 343, $this->source); })()), "submit", [], "any", false, false, false, 343), 'row');
        yield "
            ";
        // line 344
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["leadForm"]) || array_key_exists("leadForm", $context) ? $context["leadForm"] : (function () { throw new RuntimeError('Variable "leadForm" does not exist.', 344, $this->source); })()), 'form_end');
        yield "
        </section>
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
        return "public/landing/template_direct.html.twig";
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
        return array (  576 => 344,  572 => 343,  568 => 342,  564 => 341,  560 => 340,  556 => 339,  552 => 338,  548 => 337,  543 => 335,  535 => 330,  528 => 326,  523 => 323,  519 => 321,  510 => 319,  506 => 318,  500 => 316,  498 => 315,  495 => 314,  491 => 312,  474 => 309,  470 => 308,  467 => 307,  450 => 306,  444 => 304,  442 => 303,  437 => 300,  431 => 298,  429 => 297,  424 => 295,  417 => 290,  412 => 287,  406 => 285,  404 => 284,  400 => 283,  396 => 281,  388 => 279,  386 => 278,  380 => 275,  376 => 274,  371 => 271,  362 => 269,  358 => 268,  353 => 265,  346 => 263,  343 => 262,  340 => 261,  337 => 260,  334 => 259,  331 => 258,  328 => 257,  324 => 256,  321 => 255,  319 => 254,  317 => 253,  315 => 252,  234 => 174,  185 => 128,  181 => 127,  65 => 14,  51 => 5,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>{{ landingPage.name }} - {{ landingPage.slug }}</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: {{ landingPage.secondaryColor ?: '#19a974' }};
            color:#0f172a;
        }

        .page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 16px;
        }

        .phone {
            width: 100%;
            max-width: 1360px;
            background: #f6f6f6;
            border-radius: 32px;
            overflow: hidden;
            box-shadow: 0 24px 70px rgba(15, 23, 42, 0.28);
            position: relative;
        }

        .hero {
            position: relative;
            min-height: 640px;
         }

        .hero img {
            width: 100%;
            height: 640px;
            object-fit: cover;
            display: block;
            opacity: 0.92;
        }

        .hero-fallback {
            height: 320px;
            display: flex;
            align-items: end;
            padding: 24px;
            color: white;
            background: linear-gradient(180deg, #102334 0%, #18364b 100%);
        }

        .hero-top {
            position: absolute;
            top: 18px;
            left: 18px;
            right: 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 2;
        }

 
        .floating-card {
            position: relative;
            margin: -38px 16px 16px;
            background: #ffffff;
            border-radius: 28px;
            padding: 24px 22px 20px;
            box-shadow: 0 18px 40px rgba(15, 23, 42, 0.14);
        }

 
 

 

        .title {
            margin: 0 0 10px 0;
            font-size: 30px;
            line-height: 1.15;
            color: #111827;
        }

        .subtitle {
            margin: 0 0 18px 0;
            color: #475569;
            line-height: 1.5;
        }

        .section-title {
            margin: 18px 0 10px;
            font-size: 15px;
            font-weight: 700;
            color: #111827;
        }

 

  
        .chips {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            margin-bottom: 20px;
        }

        .chip {
            background: #f8fafc;
            border: 1px solid #dbeafe;
            border-radius: 18px;
            text-align: center;
            padding: 12px 8px;
        }

        .chip-icon {
            width: 38px;
            height: 38px;
            margin: 0 auto 8px;
            border-radius: 999px;
            border: 2px solid {{ landingPage.primaryColor ?: '#0ea5e9' }};
            color: {{ landingPage.primaryColor ?: '#0ea5e9' }};
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            font-weight: bold;
        }

        .chip-label {
            font-size: 12px;
            color: #334155;
            line-height: 1.25;
        }

        .testimonial-list {
            margin: 0 0 18px 0;
            padding-left: 18px;
            color: #334155;
        }

        .testimonial-list li {
            margin-bottom: 8px;
        }

        .cta-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            margin-top: 10px;
        }

        .cta-text {
            font-size: 14px;
            color: #0f172a;
        }

        .cta-text strong {
            display: block;
            font-size: 20px;
            color: #111827;
            margin-bottom: 2px;
        }

        .cta-button,
        button {
            background: {{ landingPage.buttonColor ?: '#102334' }};
            color: #ffffff;
            border: none;
            border-radius: 14px;
            padding: 14px 18px;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .form-wrap {
            margin: 0 16px 18px;
            background: #ffffff;
            border-radius: 24px;
            padding: 22px;
            box-shadow: 0 16px 34px rgba(15, 23, 42, 0.12);
        }

        .form-wrap h2 {
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 24px;
        }

        form div {
            margin-bottom: 12px;
        }

        input, textarea, select {
            width: 100%;
            padding: 12px 13px;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            margin-top: 6px;
            font: inherit;
        }

        textarea {
            min-height: 110px;
            resize: vertical;
        }

        .flash-success {
            margin: 0 16px 16px;
            background: #dcfce7;
            color: #166534;
            padding: 12px 14px;
            border-radius: 14px;
        }

        @media (max-width: 520px) {
            .title {
                font-size: 26px;
            }

            .chips {
                grid-template-columns: repeat(2, 1fr);
            }

            .gallery {
                grid-template-columns: repeat(2, 1fr);
            }

            .cta-footer {
                flex-direction: column;
                align-items: stretch;
            }

            .cta-button,
            button {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
{% set heroSection = null %}
{% set benefitsSection = null %}
{% set testimonialsSection = null %}

{% for section in landingPage.sections %}
    {% if section.sectionKey == 'hero' %}
        {% set heroSection = section %}
    {% elseif section.sectionKey == 'benefits' %}
        {% set benefitsSection = section %}
    {% elseif section.sectionKey == 'testimonials' %}
        {% set testimonialsSection = section %}
    {% endif %}
{% endfor %}

<div class=\"page\">
    <div class=\"phone\">
        {% for message in app.flashes('success') %}
            <div class=\"flash-success\">{{ message }}</div>
        {% endfor %}

        <section class=\"hero\">
            <div class=\"hero-top\">
                <div class=\"name\">{{ landingPage.name }}</div>
                <div class=\"slug\">{{ landingPage.slug }}</div>
            </div>

            {% if landingPage.heroImage %}
                <img src=\"{{ landingPage.heroImage }}\" alt=\"{{ landingPage.title }}\">
            {% else %}
                <div class=\"hero-fallback\">
                    <div>
                        <h1 style=\"margin:0; font-size:28px;\">{{ landingPage.title }}</h1>
                        {% if landingPage.subtitle %}
                            <p style=\"margin:10px 0 0 0; opacity:.9;\">{{ landingPage.subtitle }}</p>
                        {% endif %}
                    </div>
                </div>
            {% endif %}
        </section>

        <section class=\"floating-card\">
       

            <h1 class=\"title\">{{ landingPage.title }}</h1>

            {% if landingPage.subtitle %}
                <p class=\"subtitle\">{{ landingPage.subtitle }}</p>
            {% endif %}

       

            {% if benefitsSection and benefitsSection.isEnabled and benefitsSection.contentJson.items is defined %}
                <div class=\"section-title\">{{ benefitsSection.contentJson.title ?? 'Avantages' }}</div>
                <div class=\"chips\">
                    {% for item in benefitsSection.contentJson.items|slice(0, 4) %}
                        <div class=\"chip\">
                            <div class=\"chip-icon\">{{ loop.index }}</div>
                            <div class=\"chip-label\">{{ item }}</div>
                        </div>
                    {% endfor %}
                </div>
            {% endif %}

            {% if testimonialsSection and testimonialsSection.isEnabled and testimonialsSection.contentJson.items is defined %}
                <div class=\"section-title\">{{ testimonialsSection.contentJson.title ?? 'Avis clients' }}</div>
                <ul class=\"testimonial-list\">
                    {% for item in testimonialsSection.contentJson.items|slice(0, 3) %}
                        <li>{{ item }}</li>
                    {% endfor %}
                </ul>
            {% endif %}

            <div class=\"cta-footer\">
                <div class=\"cta-text\">
                    <strong>{{ landingPage.formTitle ?: 'Demandez votre devis' }}</strong>
                    Laissez vos coordonnées et obtenez une réponse rapide.
                </div>

                <a href=\"#lead-form\" class=\"cta-button\">{{ landingPage.ctaText }}</a>
            </div>
        </section>

        <section class=\"form-wrap\" id=\"lead-form\">
            <h2>{{ landingPage.formTitle ?: 'Contactez-nous' }}</h2>

            {{ form_start(leadForm) }}
                {{ form_row(leadForm.fullName) }}
                {{ form_row(leadForm.email) }}
                {{ form_row(leadForm.phone) }}
                {{ form_row(leadForm.company) }}
                {{ form_row(leadForm.message) }}
                {{ form_row(leadForm.submit) }}
            {{ form_end(leadForm) }}
        </section>
    </div>
</div>
</body>
</html>", "public/landing/template_direct.html.twig", "C:\\Users\\mhame\\OneDrive\\Desktop\\owl labs\\test technique\\Mini Cms\\mini-cms-acquisition\\templates\\public\\landing\\template_direct.html.twig");
    }
}
