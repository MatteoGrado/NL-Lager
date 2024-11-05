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

/* dashboard/dashboard.html.twig */
class __TwigTemplate_b99f19bcbf45bb63e56d0a7bb74ca22d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/dashboard.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>IMS - Dashboard</title>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/dashboard/dashboard.css"), "html", null, true);
        yield "\">
</head>
<body>
<div class=\"header\">
    <div class=\"left-header\">
        <button class=\"sidebar-toggle\" onclick=\"toggleSidebar()\">
            ☰
        </button>
        <h1>Dashboard</h1>
    </div>
    <input type=\"text\" class=\"search-bar\" placeholder=\"Suche...\">
</div>
    <div class=\"dashboard-form-container\">
        ";
        // line 20
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start');
        yield "
        <div class=\"form-row\">
            <div class=\"form-group\">
                ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "Jahre", [], "array", false, false, false, 23), 'label');
        yield "
                ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "Jahre", [], "array", false, false, false, 24), 'widget');
        yield "
            </div>
            <div class=\"form-group\">
                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "Preis", [], "array", false, false, false, 27), 'label');
        yield "
                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "Preis", [], "array", false, false, false, 28), 'widget');
        yield "
            </div>
            <div class=\"form-group\">
                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "Menge", [], "array", false, false, false, 31), 'label');
        yield "
                ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "Menge", [], "array", false, false, false, 32), 'widget');
        yield "
            </div>
        </div>
        ";
        // line 35
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
        yield "
    </div>

<div class=\"container\">
    <div class=\"sidebar\" id=\"sidebar\">
        <ul>
            <li><a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        yield "\">Admin</a></li>
            <li><a href=\"#\">Archive</a></li>
            <li><a href=\"#\">Logs</a></li>
        </ul>
    </div>
    <div class=\"content\">
        <table class=\"data-table\">
            <thead>
            <tr>
                <th>ID</th>
                <th>Produkt Name</th>
                <th>Lagerbestand</th>
                <th>Preis ( € )</th>
                <th>Lieferant</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script>
    function toggleSidebar() {
        var sidebar = document.getElementById(\"sidebar\");
        sidebar.classList.toggle(\"active\");
    }
</script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard/dashboard.html.twig";
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
        return array (  117 => 41,  108 => 35,  102 => 32,  98 => 31,  92 => 28,  88 => 27,  82 => 24,  78 => 23,  72 => 20,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>IMS - Dashboard</title>
    <link rel=\"stylesheet\" href=\"{{ asset('styles/dashboard/dashboard.css') }}\">
</head>
<body>
<div class=\"header\">
    <div class=\"left-header\">
        <button class=\"sidebar-toggle\" onclick=\"toggleSidebar()\">
            ☰
        </button>
        <h1>Dashboard</h1>
    </div>
    <input type=\"text\" class=\"search-bar\" placeholder=\"Suche...\">
</div>
    <div class=\"dashboard-form-container\">
        {{ form_start(form) }}
        <div class=\"form-row\">
            <div class=\"form-group\">
                {{ form_label(form['Jahre']) }}
                {{ form_widget(form['Jahre']) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(form['Preis']) }}
                {{ form_widget(form['Preis']) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(form['Menge']) }}
                {{ form_widget(form['Menge']) }}
            </div>
        </div>
        {{ form_end(form) }}
    </div>

<div class=\"container\">
    <div class=\"sidebar\" id=\"sidebar\">
        <ul>
            <li><a href=\"{{ path('login') }}\">Admin</a></li>
            <li><a href=\"#\">Archive</a></li>
            <li><a href=\"#\">Logs</a></li>
        </ul>
    </div>
    <div class=\"content\">
        <table class=\"data-table\">
            <thead>
            <tr>
                <th>ID</th>
                <th>Produkt Name</th>
                <th>Lagerbestand</th>
                <th>Preis ( € )</th>
                <th>Lieferant</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script>
    function toggleSidebar() {
        var sidebar = document.getElementById(\"sidebar\");
        sidebar.classList.toggle(\"active\");
    }
</script>
</body>
</html>", "dashboard/dashboard.html.twig", "C:\\Users\\Matteo.Grado\\Development\\NL-Lager\\templates\\dashboard\\dashboard.html.twig");
    }
}
