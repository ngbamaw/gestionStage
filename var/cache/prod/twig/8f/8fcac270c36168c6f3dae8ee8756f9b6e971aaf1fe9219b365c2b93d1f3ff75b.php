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

/* container/menu/_menu_professeur.html.twig */
class __TwigTemplate_e9dfdbfa006b52575b7ef55f97f0ae89da230041d5817f82c8f541e8d343494e extends \Twig\Template
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
        if (((isset($context["page"]) || array_key_exists("page", $context)) && (($context["page"] ?? null) == "home"))) {
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
        if (((isset($context["page"]) || array_key_exists("page", $context)) && (($context["page"] ?? null) == "liste_entreprise_page"))) {
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
        if (((isset($context["page"]) || array_key_exists("page", $context)) && (($context["page"] ?? null) == "stages"))) {
            echo "uk-active";
        }
        echo "\">
                <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("information_stage");
        echo "\">
                    <span class=\"uk-icon uk-margin-small-right\"
                          uk-icon=\"icon: search\"></span>
                    Stages
                </a>
            </li>
            <li class=\"";
        // line 30
        if (((isset($context["page"]) || array_key_exists("page", $context)) && (($context["page"] ?? null) == "contact"))) {
            echo "uk-active";
        }
        echo "\">
                <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_prof");
        echo "\">
                    <span class=\"uk-icon uk-margin-small-right\"
                          uk-icon=\"icon: mail\"></span>
                    Contact
                </a>
            </li>
            <li>
                <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste-utilisateur");
        echo "\">
                        <span class=\"uk-icon uk-margin-small-right\"
                              uk-icon=\"icon: list\"></span>
                    Utilisateurs
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
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 52), "get", [0 => "first_name"], "method", false, false, false, 52), "html", null, true);
        echo "</span>
                </a>
                <div class=\"uk-navbar-dropdown\">
                    <ul class=\"uk-nav uk-navbar-dropdown-nav\">
                        <li>
                            <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modification-professeur", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57)]), "html", null, true);
        echo "\">
                                <span uk-icon=\"icon: cog\"
                                      class=\"uk-padding-small\"></span>
                                Parametres
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 64
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
    }

    public function getTemplateName()
    {
        return "container/menu/_menu_professeur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 64,  131 => 57,  123 => 52,  106 => 38,  96 => 31,  90 => 30,  81 => 24,  75 => 23,  66 => 17,  60 => 16,  51 => 10,  45 => 9,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "container/menu/_menu_professeur.html.twig", "/home/ngbamaw/trunk/app/Resources/views/container/menu/_menu_professeur.html.twig");
    }
}
