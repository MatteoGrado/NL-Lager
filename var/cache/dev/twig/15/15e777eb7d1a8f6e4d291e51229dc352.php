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

/* barcode_generator/generator.html.twig */
class __TwigTemplate_079e8b2133a0e10873e577dbddbbc828 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "barcode_generator/generator.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "barcode_generator/generator.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<link rel=\"stylesheet\" href=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/generator/generator.css"), "html", null, true);
        yield "\">
";
        // line 3
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <div class=\"container\">
        <h1 id=\"header\">Barcode Erstellen</h1>
            ";
        // line 6
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'form_start');
        yield "
                <label class=\"product_name_label\">Produkt Name:</label>
                <p class=\"product_name\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["product_name"]) || array_key_exists("product_name", $context) ? $context["product_name"] : (function () { throw new RuntimeError('Variable "product_name" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "</p>
            ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_end');
        yield "
        <div class=\"divider\"></div>
        <div class=\"barcode-preview\">
            <div class=\"barcode-box\">
                ";
        // line 13
        if ((isset($context["product_name"]) || array_key_exists("product_name", $context) ? $context["product_name"] : (function () { throw new RuntimeError('Variable "product_name" does not exist.', 13, $this->source); })())) {
            // line 14
            yield "                    <img class=\"img-loader\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("../../public/barcodes/" . (isset($context["barcode_url"]) || array_key_exists("barcode_url", $context) ? $context["barcode_url"] : (function () { throw new RuntimeError('Variable "barcode_url" does not exist.', 14, $this->source); })()))), "html", null, true);
            yield " }}\" alt=\"Generierter Barcode\">
                ";
        }
        // line 16
        yield "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "barcode_generator/generator.html.twig";
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
        return array (  107 => 16,  101 => 14,  99 => 13,  92 => 9,  88 => 8,  83 => 6,  79 => 4,  56 => 3,  52 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<link rel=\"stylesheet\" href=\"{{ asset('styles/generator/generator.css') }}\">
{% block body %}
    <div class=\"container\">
        <h1 id=\"header\">Barcode Erstellen</h1>
            {{ form_start(form) }}
                <label class=\"product_name_label\">Produkt Name:</label>
                <p class=\"product_name\">{{ product_name }}</p>
            {{ form_end(form) }}
        <div class=\"divider\"></div>
        <div class=\"barcode-preview\">
            <div class=\"barcode-box\">
                {% if product_name %}
                    <img class=\"img-loader\" src=\"{{ asset('../../public/barcodes/' ~ barcode_url) }} }}\" alt=\"Generierter Barcode\">
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}", "barcode_generator/generator.html.twig", "C:\\Users\\Matteo.Grado\\Development\\NL-Lager\\templates\\barcode_generator\\generator.html.twig");
    }
}
