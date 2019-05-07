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

/* container/menu/_menu_etudiant.html.twig */
class __TwigTemplate_bbf11e58f9bed0c2ebf6f202ce535d2a7ba30e701c691ac2130009cdaeafe14b extends \Twig\Template
{
    private $source;

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "container/menu/_menu_etudiant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "container/menu/_menu_etudiant.html.twig"));

        // line 1
        echo "<nav class=\"uk-navbar-container uk-margin\"
     uk-navbar>
    <div class=\"uk-navbar-left\">
        <!--                <img class=\"uk-width-expand\" src=\"assets/pictures/logo.jpg\">-->
        <a class=\"uk-navbar-item uk-logo\"
           href=\"#\">Logo
        </a>
        <ul class=\"uk-navbar-nav\">
            <li class=\"";
        // line 9
        if (((isset($context["page"]) || array_key_exists("page", $context)) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 9, $this->source); })()) == "home"))) {
            echo "uk-active";
        }
        echo "\">
                <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage_eleve");
        echo "\">
                    <span class=\"uk-icon uk-margin-small-right\"
                          uk-icon=\"icon: home\"></span>
                    Accueil
                </a>
            </li>
            <li class=\"";
        // line 16
        if (((isset($context["page"]) || array_key_exists("page", $context)) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 16, $this->source); })()) == "liste_entreprise_page"))) {
            echo "uk-active";
        }
        echo "\">
                <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_entreprise_page");
        echo "\">
                    <span class=\"uk-icon uk-margin-small-right\"
                          uk-icon=\"icon: search\"></span>
                    Entreprises
                </a>
            </li>
            <li class=\"";
        // line 23
        if (((isset($context["page"]) || array_key_exists("page", $context)) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 23, $this->source); })()) == "stages"))) {
            echo "uk-active";
        }
        echo "\">
                <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creation_stage");
        echo "\">
                    <span class=\"uk-icon uk-margin-small-right\"
                          uk-icon=\"icon: search\"></span>
                    Stages
                </a>
            </li>
            <li class=\"";
        // line 30
        if (((isset($context["page"]) || array_key_exists("page", $context)) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 30, $this->source); })()) == "contact"))) {
            echo "uk-active";
        }
        echo "\">
                <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_eleve");
        echo "\">
                    <span class=\"uk-icon uk-margin-small-right\"
                          uk-icon=\"icon: mail\"></span>
                    Contact
                </a>
            </li>
        </ul>
    </div>
    <div class=\"uk-navbar-right\">
        <ul class=\"uk-navbar-nav\">
            <li>
                <a href=\"#\"
                   class=\"uk-padding\">
                    <span uk-icon=\"icon: user\"></span>
                    <span class=\"uk-padding-small\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "session", [], "any", false, false, false, 45), "get", [0 => "first_name"], "method", false, false, false, 45), "html", null, true);
        echo "</span>
                </a>
                <div class=\"uk-navbar-dropdown\">
                    <ul class=\"uk-nav uk-navbar-dropdown-nav\">
                        <li>
                            <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modification-etudiant", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50)]), "html", null, true);
        echo "\">
                                <span uk-icon=\"icon: cog\"
                                      class=\"uk-padding-small\"></span>
                                Parametres
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                                <span uk-icon=\"icon: sign-out\"
                                      class=\"uk-padding-small\"></span>
                                Déconnexion
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "container/menu/_menu_etudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 57,  127 => 50,  119 => 45,  102 => 31,  96 => 30,  87 => 24,  81 => 23,  72 => 17,  66 => 16,  57 => 10,  51 => 9,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"uk-navbar-container uk-margin\"
     uk-navbar>
    <div class=\"uk-navbar-left\">
        <!--                <img class=\"uk-width-expand\" src=\"assets/pictures/logo.jpg\">-->
        <a class=\"uk-navbar-item uk-logo\"
           href=\"#\">Logo
        </a>
        <ul class=\"uk-navbar-nav\">
            <li class=\"{% if page is defined and page == 'home' %}uk-active{% endif %}\">
                <a href=\"{{ path('homepage_eleve') }}\">
                    <span class=\"uk-icon uk-margin-small-right\"
                          uk-icon=\"icon: home\"></span>
                    Accueil
                </a>
            </li>
            <li class=\"{% if page is defined and page == 'liste_entreprise_page' %}uk-active{% endif %}\">
                <a href=\"{{ path('liste_entreprise_page') }}\">
                    <span class=\"uk-icon uk-margin-small-right\"
                          uk-icon=\"icon: search\"></span>
                    Entreprises
                </a>
            </li>
            <li class=\"{% if page is defined and page == 'stages' %}uk-active{% endif %}\">
                <a href=\"{{ path('creation_stage') }}\">
                    <span class=\"uk-icon uk-margin-small-right\"
                          uk-icon=\"icon: search\"></span>
                    Stages
                </a>
            </li>
            <li class=\"{% if page is defined and page == 'contact' %}uk-active{% endif %}\">
                <a href=\"{{ path('contact_eleve') }}\">
                    <span class=\"uk-icon uk-margin-small-right\"
                          uk-icon=\"icon: mail\"></span>
                    Contact
                </a>
            </li>
        </ul>
    </div>
    <div class=\"uk-navbar-right\">
        <ul class=\"uk-navbar-nav\">
            <li>
                <a href=\"#\"
                   class=\"uk-padding\">
                    <span uk-icon=\"icon: user\"></span>
                    <span class=\"uk-padding-small\">{{ app.session.get(\"first_name\") }}</span>
                </a>
                <div class=\"uk-navbar-dropdown\">
                    <ul class=\"uk-nav uk-navbar-dropdown-nav\">
                        <li>
                            <a href=\"{{ path('modification-etudiant', {'id': app.user.id}) }}\">
                                <span uk-icon=\"icon: cog\"
                                      class=\"uk-padding-small\"></span>
                                Parametres
                            </a>
                        </li>
                        <li>
                            <a href=\"{{ path('app_logout') }}\">
                                <span uk-icon=\"icon: sign-out\"
                                      class=\"uk-padding-small\"></span>
                                Déconnexion
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
", "container/menu/_menu_etudiant.html.twig", "/var/www/gestionStage/app/Resources/views/container/menu/_menu_etudiant.html.twig");
    }
}
