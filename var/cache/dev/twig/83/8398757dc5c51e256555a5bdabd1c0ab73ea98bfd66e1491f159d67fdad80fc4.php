<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* navbar.html.twig */
class __TwigTemplate_fe021da86ae8071ee9d3ffd591c99b986cf05162f93883a9afa73df94db83442 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "<!-- navBar -->
<nav id=\"nav-general\" class=\"navbar navbar-expand-lg fixed-top\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand d-lg-none\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
      <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/LOGO_PICTO_ICONES/logoflovia.svg"), "html", null, true);
        echo "\"
        alt=\"logo Flovia 2\" />
    </a>

    <button class=\"navbar-toggler\"
      type=\"button\"
      data-bs-toggle=\"collapse\"
      data-bs-target=\"#navbarNav\"
      aria-controls=\"navbarNav\"
      aria-expanded=\"false\"
      aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse d-lg-flex justify-content-between\"
      id=\"navbarNav\">
      <a class=\"navbar-brand d-none d-lg-block\" href=\"#\">
        <img src=\"#\" alt=\"logo Flovia\" />
      </a>

      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pingo");
        echo "\">Cartes</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_episodes");
        echo "\">Episodes</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actualites");
        echo "\">Actualités</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo "\">A propos</a>
        </li>
      </ul>

      <div>
        <a class=\"nav-link disabled\">
          <img src=\"./LOGO:PICTO:ICONES/profilvide.svg\" alt=\"Picto Profil\" />
        </a>
      </div>
    </div>
  </div>
</nav>

<!-- Fin de navBar -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 36,  86 => 33,  80 => 30,  74 => 27,  49 => 5,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- navBar -->
<nav id=\"nav-general\" class=\"navbar navbar-expand-lg fixed-top\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand d-lg-none\" href=\"{{ path('app_home') }}\">
      <img src=\"{{ asset('asset/img/LOGO_PICTO_ICONES/logoflovia.svg') }}\"
        alt=\"logo Flovia 2\" />
    </a>

    <button class=\"navbar-toggler\"
      type=\"button\"
      data-bs-toggle=\"collapse\"
      data-bs-target=\"#navbarNav\"
      aria-controls=\"navbarNav\"
      aria-expanded=\"false\"
      aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse d-lg-flex justify-content-between\"
      id=\"navbarNav\">
      <a class=\"navbar-brand d-none d-lg-block\" href=\"#\">
        <img src=\"#\" alt=\"logo Flovia\" />
      </a>

      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('app_pingo') }}\">Cartes</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('app_episodes') }}\">Episodes</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('app_actualites') }}\">Actualités</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('app_about') }}\">A propos</a>
        </li>
      </ul>

      <div>
        <a class=\"nav-link disabled\">
          <img src=\"./LOGO:PICTO:ICONES/profilvide.svg\" alt=\"Picto Profil\" />
        </a>
      </div>
    </div>
  </div>
</nav>

<!-- Fin de navBar -->
", "navbar.html.twig", "/Applications/MAMP/htdocs/Github/deviadux_projet/templates/navbar.html.twig");
    }
}
