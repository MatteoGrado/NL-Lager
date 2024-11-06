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

/* admin_dashboard/admin_dashboard.html.twig */
class __TwigTemplate_89cb15188b39ce5f8587cded4080d744 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_dashboard/admin_dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_dashboard/admin_dashboard.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"de\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Admin IMS - Admin-Dashboard</title>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/admin-dashboard/admin-dashboard.css"), "html", null, true);
        yield "\">
</head>
<body>
<div class=\"sidebar\" id=\"sidebar\">
    <div class=\"profile\">
        <img src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Profile-Image-GrM.jpg"), "html", null, true);
        yield "\" alt=\"User Image\" class=\"profile-img\">
        <div class=\"profile-info\">
            <p class=\"profile-name\">Admin User</p>
            <p class=\"profile-position\">Administrator</p>
        </div>
    </div>
    <ul class=\"menu\">
        <li><a href=\"#\">Dashboard</a></li>
        <li><a href=\"#\">Einstellungen</a></li>
        <li><a href=\"#\">Hilfe</a></li>
    </ul>
    <div class=\"logout-container\">
        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "logout", [], "any", false, false, false, 24), 'widget');
        yield "
    </div>
</div>
<div class=\"main-content\">
    <nav class=\"navbar\">
        ";
        // line 29
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start');
        yield "
        <div class=\"navbar-content\">
            <button class=\"toggle-btn\" onclick=\"toggleSidebar()\">☰</button>
            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "search", [], "any", false, false, false, 32), 'widget');
        yield "
        </div>
    </nav>
    <div class=\"content\">
        <div class=\"header-container\">
            <h1>Benutzerliste</h1>
            <div class=\"button-container\">
                ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "mark", [], "any", false, false, false, 39), 'widget');
        yield "
                ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "newUser", [], "any", false, false, false, 40), 'widget');
        yield "
            </div>
        </div>
        <table class=\"user-table\">
            <thead>
            <tr>
                <th>ID</th>
                <th>Vorname</th>
                <th>Nachname</th>
                <th>Benutzername</th>
                <th>Email</th>
                <th>Position</th>
                <th>Aktionen</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Matteo</td>
                <td>Grado</td>
                <td>Matteo.Grado</td>
                <td>Matteo.Grado@nikoit.de</td>
                <td>Administrator</td>
                <td>
                    ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "edit", [], "any", false, false, false, 64), 'widget');
        yield "
                    ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "delete", [], "any", false, false, false, 65), 'widget');
        yield "
                ";
        // line 66
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_end');
        yield "
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.querySelector('.main-content');
        sidebar.classList.toggle('collapsed');
        mainContent.classList.toggle('collapsed');
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
        return "admin_dashboard/admin_dashboard.html.twig";
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
        return array (  142 => 66,  138 => 65,  134 => 64,  107 => 40,  103 => 39,  93 => 32,  87 => 29,  79 => 24,  64 => 12,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"de\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Admin IMS - Admin-Dashboard</title>
    <link rel=\"stylesheet\" href=\"{{ asset('styles/admin-dashboard/admin-dashboard.css') }}\">
</head>
<body>
<div class=\"sidebar\" id=\"sidebar\">
    <div class=\"profile\">
        <img src=\"{{ asset('images/Profile-Image-GrM.jpg') }}\" alt=\"User Image\" class=\"profile-img\">
        <div class=\"profile-info\">
            <p class=\"profile-name\">Admin User</p>
            <p class=\"profile-position\">Administrator</p>
        </div>
    </div>
    <ul class=\"menu\">
        <li><a href=\"#\">Dashboard</a></li>
        <li><a href=\"#\">Einstellungen</a></li>
        <li><a href=\"#\">Hilfe</a></li>
    </ul>
    <div class=\"logout-container\">
        {{ form_widget(form.logout) }}
    </div>
</div>
<div class=\"main-content\">
    <nav class=\"navbar\">
        {{ form_start(form) }}
        <div class=\"navbar-content\">
            <button class=\"toggle-btn\" onclick=\"toggleSidebar()\">☰</button>
            {{ form_widget(form.search) }}
        </div>
    </nav>
    <div class=\"content\">
        <div class=\"header-container\">
            <h1>Benutzerliste</h1>
            <div class=\"button-container\">
                {{ form_widget(form.mark) }}
                {{ form_widget(form.newUser) }}
            </div>
        </div>
        <table class=\"user-table\">
            <thead>
            <tr>
                <th>ID</th>
                <th>Vorname</th>
                <th>Nachname</th>
                <th>Benutzername</th>
                <th>Email</th>
                <th>Position</th>
                <th>Aktionen</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Matteo</td>
                <td>Grado</td>
                <td>Matteo.Grado</td>
                <td>Matteo.Grado@nikoit.de</td>
                <td>Administrator</td>
                <td>
                    {{ form_widget(form.edit) }}
                    {{ form_widget(form.delete) }}
                {{ form_end(form) }}
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.querySelector('.main-content');
        sidebar.classList.toggle('collapsed');
        mainContent.classList.toggle('collapsed');
    }
</script>
</body>
</html>", "admin_dashboard/admin_dashboard.html.twig", "C:\\Users\\Matteo.Grado\\Development\\NL-Lager\\templates\\admin_dashboard\\admin_dashboard.html.twig");
    }
}
