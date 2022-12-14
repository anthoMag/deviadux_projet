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

/* home/index.html.twig */
class __TwigTemplate_38d1a3cbc0967a0d77f90e303b6cfed93e71ec4c6dbae07c140e8e0fb2b0a288 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 3, $this->source); })()), "html", null, true);
        echo " - Page d'accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
<header>
    

<!-- heroShot -->
<!-- BGD Vidéo à ajouter sans la son et revoir dimensions du container -->
        <div class=\"container mt-5\" id=\"titreHeroshot\">
            <div class=\"row\">
                <div class=\"col\">
                    <h1>Découvrez les zones les plus impactées par la montée des eaux en France
                    </h1>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col\">
                    <a id=\"btn\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo "\" >Voir la carte</a>
                </div>
            </div>   
        </div>
<!-- Fin heroShot -->
        

<!-- BarCookies à faire lorsqu'on actionne le \"Button\" croix A REMODULER -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col align-items-end\" id=\"cookiesBar\">
                    <div class=\"text-end\">
                        <button><img src=\"#\" alt=\"Picto croix\"></button>
                    </div>
                    <div id=\"cookiesText text-center\">
                        <p>En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de cookies pour réaliser des statistiques de visite. Pour en savoir plus <a id=\"cookiesLien\" href=\"#\">cliquez ici.</a></p>
                    </div>
                </div>
            </div> 
        </div> 
<!-- Fin BarCookies -->
    </header>

    <main>

        <article id=\"articleAlaUne\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h1>Les articles à la une</h1>
                    </div>
                    <!-- CARROUSEL A COMPLETER -->
                    <div class=\"col-12\">
                        <div id=\"carouselExampleCaptions\" class=\"carousel slide\" data-bs-ride=\"false\">
                            <div class=\"carousel-indicators\">
                                <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                                <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                                <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
                            </div>
                            <div class=\"carousel-inner\">
                                <div class=\"carousel-item active\">
                                <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/Home_Carrousel/article2.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"Dune du Pilat\">
                                <div class=\"carousel-caption d-none d-md-block\">
                                    <h5>La montée des eaux sera bien plus elevée et rapide que prévu</h5>
                                    <p>En lire plus</p>
                                </div>
                                </div>
                                <div class=\"carousel-item\">
                                <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/Home_Carrousel/article1.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"Inondation enfant sur dos d'un sauveteur\">
                                <div class=\"carousel-caption d-none d-md-block\">
                                    <h5>Les solutions fondées sur la nature</h5>
                                    <p>En lire plus</p>
                                </div>
                                </div>
                                <div class=\"carousel-item\">
                                <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/Home_Carrousel/article3.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"maison et arbre inondé\">
                                <div class=\"carousel-caption d-none d-md-block\">
                                    <h5>M'informer sur le géorisque d'inondation</h5>
                                    <p>En lire plus</p>
                                </div>
                                </div>
                            </div>
                            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                <span class=\"visually-hidden\">Previous</span>
                            </button>
                            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                <span class=\"visually-hidden\">Next</span>
                            </button>
                        </div>
                    </div>          
                </div>
            </div>      
        </article >

        <section id=\"dataViz\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h1>Données actuelles en France</h1>
                    </div>
                </div>
            </div>

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <article>
                            <h3>L'évolution croissante du <b>nombre d'épisodes</b> vigilance orange et rouge inondations sur le territoire</h3>
                            <h4><b>Source:</b> Bilan annuel VIGICRUE 2021</h4>
                            <div class=\"d-flex\"> 
                                <div>
                                    <img src=\"./LOGO:PICTO:ICONES/IconePartageBlanc.svg\" alt=\"Picto Partager\">
                                    <p class=\"partagerEnregistrerText\">PARTAGER</p>
                                </div>
                                <div>
                                    <img src=\"./LOGO:PICTO:ICONES/IconeEnregistrerBlanc.svg\" alt=\"Picto Enregistrer\">
                                    <p class=\"partagerEnregistrerText\">ENREGISTRER</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class=\"col-lg-8\">
                        <span></span>
                        <!-- Inserer JS de la dataViz Hexagone -->
                    </div>
                </div>
            </div>

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8\">
                        <span></span>
                        <!-- Inserer JS de la dataViz Pluie -->
                    </div>
                    <div class=\"col-lg-4\">
                        <article>
                            <h3>L'évolution de l'intensité des <b>pluies extêmes</b> en région méditerranéenne</h3>
                            <h4><b>Source:</b> Météo France</h4>
                            <div class=\"d-flex\"> 
                                <!-- A revoir si garde d-flex ou row avec col-6 ??  -->
                                <div>
                                    <img src=\"./LOGO:PICTO:ICONES/IconePartageBlanc.svg\" alt=\"Picto Partager\">
                                    <p class=\"partagerEnregistrerText\">PARTAGER</p>
                                </div>
                                <div>
                                    <img src=\"./LOGO:PICTO:ICONES/IconeEnregistrerBlanc.svg\" alt=\"Picto Enregistrer\">
                                    <p class=\"partagerEnregistrerText\">ENREGISTRER</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        
        <section id=\"pictoInfo\">
            <div class=\"container\">
                <div class=\"row text-center\">
                    <div class=\"col-lg-4 col-md-4 col-sm-12\">
                        <img class=\"img-fluid\" class=\"picto\" src=\"./LOGO:PICTO:ICONES/DesignSystem/Vector.svg\" alt=\"Picto Eau\">
                        <p class=\"chiffrePicto\">20K</p>
                        <h3><b>Repères de crues</b><br>installés en France, témoins d'épisodes majeurs</h3> 
                    </div>
                    <div class=\"col-lg-4 col-md-4 col-sm-12\">
                        <img class=\"img-fluid\" class=\"picto\" src=\"./LOGO:PICTO:ICONES/pictomains.svg\" alt=\"Picto Mains\">
                        <p class=\"chiffrePicto\">80</p>
                        <h3><b>Associations</b> d'aides aux personnes touchées par des phénoménes naturels</h3> 
                    </div>
                    <div class=\"col-lg-4 col-md-4 col-sm-12\">
                        <img class=\"img-fluid\" class=\"picto\" src=\"./LOGO:PICTO:ICONES/pictocarte.svg\" alt=\"Picto Carte\">
                        <p class=\"chiffrePicto\">22K</p>
                        <h3><b>Km de cours d'eau</b> surveillés en permanence par Vigicrue.gouv</h3> 
                    </div>
                </div>
            </div>
        </section>

        <section id=\"citation\">
            <div class=\"container\">
                <div class=\"row text-center\">
                    <div class=\"col\">
                        <h2>\"La communauté est une nappe affective souterraine et chacun boit la même eau à cette source\" Michel Henry - Philosophe - 1990</h2>
                    </div>
                </div>
            </div>
        </section>

    </main>




    </main>
    ";
        // line 203
        $this->displayBlock('javascripts', $context, $blocks);
        // line 207
        echo "   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi\" crossorigin=\"anonymous\">
<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/styles.css"), "html", null, true);
        echo "\"> 
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/styles.css"), "html", null, true);
        echo "\"> 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 203
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 204
        echo "<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4\" crossorigin=\"anonymous\"></script>  
<script src=\"./js/navbar.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 204,  319 => 203,  310 => 10,  306 => 9,  303 => 8,  296 => 7,  288 => 207,  286 => 203,  163 => 83,  153 => 76,  143 => 69,  99 => 28,  81 => 12,  79 => 7,  76 => 6,  69 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{controller_name}} - Page d'accueil{% endblock %}

{% block body %}

{% block stylesheets %}
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi\" crossorigin=\"anonymous\">
<link rel=\"stylesheet\" href=\"{{ asset('asset/css/styles.css') }}\"> 
<link rel=\"stylesheet\" href=\"{{ asset('asset/css/styles.css') }}\"> 
{% endblock %}

<header>
    

<!-- heroShot -->
<!-- BGD Vidéo à ajouter sans la son et revoir dimensions du container -->
        <div class=\"container mt-5\" id=\"titreHeroshot\">
            <div class=\"row\">
                <div class=\"col\">
                    <h1>Découvrez les zones les plus impactées par la montée des eaux en France
                    </h1>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col\">
                    <a id=\"btn\" href=\"{{ path('app_about') }}\" >Voir la carte</a>
                </div>
            </div>   
        </div>
<!-- Fin heroShot -->
        

<!-- BarCookies à faire lorsqu'on actionne le \"Button\" croix A REMODULER -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col align-items-end\" id=\"cookiesBar\">
                    <div class=\"text-end\">
                        <button><img src=\"#\" alt=\"Picto croix\"></button>
                    </div>
                    <div id=\"cookiesText text-center\">
                        <p>En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de cookies pour réaliser des statistiques de visite. Pour en savoir plus <a id=\"cookiesLien\" href=\"#\">cliquez ici.</a></p>
                    </div>
                </div>
            </div> 
        </div> 
<!-- Fin BarCookies -->
    </header>

    <main>

        <article id=\"articleAlaUne\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h1>Les articles à la une</h1>
                    </div>
                    <!-- CARROUSEL A COMPLETER -->
                    <div class=\"col-12\">
                        <div id=\"carouselExampleCaptions\" class=\"carousel slide\" data-bs-ride=\"false\">
                            <div class=\"carousel-indicators\">
                                <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                                <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                                <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
                            </div>
                            <div class=\"carousel-inner\">
                                <div class=\"carousel-item active\">
                                <img src=\"{{ asset('asset/img/Home_Carrousel/article2.jpg') }}\" class=\"d-block w-100\" alt=\"Dune du Pilat\">
                                <div class=\"carousel-caption d-none d-md-block\">
                                    <h5>La montée des eaux sera bien plus elevée et rapide que prévu</h5>
                                    <p>En lire plus</p>
                                </div>
                                </div>
                                <div class=\"carousel-item\">
                                <img src=\"{{ asset('asset/img/Home_Carrousel/article1.jpg') }}\" class=\"d-block w-100\" alt=\"Inondation enfant sur dos d'un sauveteur\">
                                <div class=\"carousel-caption d-none d-md-block\">
                                    <h5>Les solutions fondées sur la nature</h5>
                                    <p>En lire plus</p>
                                </div>
                                </div>
                                <div class=\"carousel-item\">
                                <img src=\"{{ asset('asset/img/Home_Carrousel/article3.jpg') }}\" class=\"d-block w-100\" alt=\"maison et arbre inondé\">
                                <div class=\"carousel-caption d-none d-md-block\">
                                    <h5>M'informer sur le géorisque d'inondation</h5>
                                    <p>En lire plus</p>
                                </div>
                                </div>
                            </div>
                            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                <span class=\"visually-hidden\">Previous</span>
                            </button>
                            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                <span class=\"visually-hidden\">Next</span>
                            </button>
                        </div>
                    </div>          
                </div>
            </div>      
        </article >

        <section id=\"dataViz\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h1>Données actuelles en France</h1>
                    </div>
                </div>
            </div>

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <article>
                            <h3>L'évolution croissante du <b>nombre d'épisodes</b> vigilance orange et rouge inondations sur le territoire</h3>
                            <h4><b>Source:</b> Bilan annuel VIGICRUE 2021</h4>
                            <div class=\"d-flex\"> 
                                <div>
                                    <img src=\"./LOGO:PICTO:ICONES/IconePartageBlanc.svg\" alt=\"Picto Partager\">
                                    <p class=\"partagerEnregistrerText\">PARTAGER</p>
                                </div>
                                <div>
                                    <img src=\"./LOGO:PICTO:ICONES/IconeEnregistrerBlanc.svg\" alt=\"Picto Enregistrer\">
                                    <p class=\"partagerEnregistrerText\">ENREGISTRER</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class=\"col-lg-8\">
                        <span></span>
                        <!-- Inserer JS de la dataViz Hexagone -->
                    </div>
                </div>
            </div>

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8\">
                        <span></span>
                        <!-- Inserer JS de la dataViz Pluie -->
                    </div>
                    <div class=\"col-lg-4\">
                        <article>
                            <h3>L'évolution de l'intensité des <b>pluies extêmes</b> en région méditerranéenne</h3>
                            <h4><b>Source:</b> Météo France</h4>
                            <div class=\"d-flex\"> 
                                <!-- A revoir si garde d-flex ou row avec col-6 ??  -->
                                <div>
                                    <img src=\"./LOGO:PICTO:ICONES/IconePartageBlanc.svg\" alt=\"Picto Partager\">
                                    <p class=\"partagerEnregistrerText\">PARTAGER</p>
                                </div>
                                <div>
                                    <img src=\"./LOGO:PICTO:ICONES/IconeEnregistrerBlanc.svg\" alt=\"Picto Enregistrer\">
                                    <p class=\"partagerEnregistrerText\">ENREGISTRER</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        
        <section id=\"pictoInfo\">
            <div class=\"container\">
                <div class=\"row text-center\">
                    <div class=\"col-lg-4 col-md-4 col-sm-12\">
                        <img class=\"img-fluid\" class=\"picto\" src=\"./LOGO:PICTO:ICONES/DesignSystem/Vector.svg\" alt=\"Picto Eau\">
                        <p class=\"chiffrePicto\">20K</p>
                        <h3><b>Repères de crues</b><br>installés en France, témoins d'épisodes majeurs</h3> 
                    </div>
                    <div class=\"col-lg-4 col-md-4 col-sm-12\">
                        <img class=\"img-fluid\" class=\"picto\" src=\"./LOGO:PICTO:ICONES/pictomains.svg\" alt=\"Picto Mains\">
                        <p class=\"chiffrePicto\">80</p>
                        <h3><b>Associations</b> d'aides aux personnes touchées par des phénoménes naturels</h3> 
                    </div>
                    <div class=\"col-lg-4 col-md-4 col-sm-12\">
                        <img class=\"img-fluid\" class=\"picto\" src=\"./LOGO:PICTO:ICONES/pictocarte.svg\" alt=\"Picto Carte\">
                        <p class=\"chiffrePicto\">22K</p>
                        <h3><b>Km de cours d'eau</b> surveillés en permanence par Vigicrue.gouv</h3> 
                    </div>
                </div>
            </div>
        </section>

        <section id=\"citation\">
            <div class=\"container\">
                <div class=\"row text-center\">
                    <div class=\"col\">
                        <h2>\"La communauté est une nappe affective souterraine et chacun boit la même eau à cette source\" Michel Henry - Philosophe - 1990</h2>
                    </div>
                </div>
            </div>
        </section>

    </main>




    </main>
    {% block javascripts %}
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4\" crossorigin=\"anonymous\"></script>  
<script src=\"./js/navbar.js\"></script>
{% endblock %}
   
{% endblock %}
", "home/index.html.twig", "/Applications/MAMP/htdocs/Github/deviadux_projet/templates/home/index.html.twig");
    }
}
