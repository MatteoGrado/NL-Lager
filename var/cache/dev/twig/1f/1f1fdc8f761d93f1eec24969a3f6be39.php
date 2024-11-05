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
    <button class=\"logout-btn\" onclick=\"logout()\">🚪 Ausloggen</button>
</div>
<div class=\"main-content\">
    <nav class=\"navbar\">
        <button class=\"toggle-btn\" onclick=\"toggleSidebar()\">☰</button>
        <input type=\"text\" placeholder=\"Suche...\" class=\"search-bar\">
    </nav>
    <div class=\"content\">
        <h1>Benutzerliste</h1>
        <div class=\"button-container\">
            <button class=\"add-user-btn\">Nutzer Hinzufügen</button>
            <button class=\"mark-all-btn\">Alle Markieren</button>
        </div>
        <table class=\"user-table\">
            <thead>
            <tr>
                <th>ID</th>
                <th>Benutzername</th>
                <th>Email</th>
                <th>Position</th>
                <th>Aktionen</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>max_mustermann</td>
                <td>max@beispiel.de</td>
                <td>Mitarbeiter</td>
                <td>
                    <button class=\"edit-btn\">Bearbeiten</button>
                    <button class=\"delete-btn\">Löschen</button>
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
    function logout() {
        alert(\"Ausgeloggt!\");
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
        return array (  64 => 12,  56 => 7,  48 => 1,);
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
    <button class=\"logout-btn\" onclick=\"logout()\">🚪 Ausloggen</button>
</div>
<div class=\"main-content\">
    <nav class=\"navbar\">
        <button class=\"toggle-btn\" onclick=\"toggleSidebar()\">☰</button>
        <input type=\"text\" placeholder=\"Suche...\" class=\"search-bar\">
    </nav>
    <div class=\"content\">
        <h1>Benutzerliste</h1>
        <div class=\"button-container\">
            <button class=\"add-user-btn\">Nutzer Hinzufügen</button>
            <button class=\"mark-all-btn\">Alle Markieren</button>
        </div>
        <table class=\"user-table\">
            <thead>
            <tr>
                <th>ID</th>
                <th>Benutzername</th>
                <th>Email</th>
                <th>Position</th>
                <th>Aktionen</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>max_mustermann</td>
                <td>max@beispiel.de</td>
                <td>Mitarbeiter</td>
                <td>
                    <button class=\"edit-btn\">Bearbeiten</button>
                    <button class=\"delete-btn\">Löschen</button>
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
    function logout() {
        alert(\"Ausgeloggt!\");
    }
</script>
</body>
</html>", "admin_dashboard/admin_dashboard.html.twig", "C:\\Users\\Matteo.Grado\\Development\\NL-Lager\\templates\\admin_dashboard\\admin_dashboard.html.twig");
    }
}
