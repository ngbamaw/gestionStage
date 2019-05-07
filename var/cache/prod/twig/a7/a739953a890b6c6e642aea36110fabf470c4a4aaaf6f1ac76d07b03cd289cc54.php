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

/* info_entreprise_prof.html.twig */
class __TwigTemplate_5bc8c56b31e3cd37a024c6613a95133033878b14909eed592b61bc11b08db881 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"fr\"  style=\"background-color: #606060;\">
    <head>
        <meta charset=\"UTF-8\">
        <title>Acceuil | Gestion Stages</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/uikit.min.css"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <nav class=\"uk-navbar-container uk-margin\" uk-navbar>
            <div class=\"uk-navbar-left\">
<!--                <img class=\"uk-width-expand\" src=\"assets/pictures/logo.jpg\">-->
                <a class=\"uk-navbar-item uk-logo\" href=\"#\">Logo</a>
                <ul class=\"uk-navbar-nav\">
                    <li>
                        <a href=\"#\">
                            <span class=\"uk-icon uk-margin-small-right\" uk-icon=\"icon: home\"></span>
                            Accueil
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <span class=\"uk-icon uk-margin-small-right\" uk-icon=\"icon: mail\"></span>
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
            <div class=\"uk-navbar-right\">
                <ul class=\"uk-navbar-nav\">
                    <li>
                        <a href=\"#\" class=\"uk-padding\"><span uk-icon=\"icon: user\"></span><span class=\"uk-padding-small\">Albert</span></a>
                        <div class=\"uk-navbar-dropdown\">
                            <ul class=\"uk-nav uk-navbar-dropdown-nav\">
                                <li><a href=\"#\"><span uk-icon=\"icon: cog\" class=\"uk-padding-small\"></span>Paramètres</a></li>
                                <li><a href=\"#\"><span uk-icon=\"icon: sign-out\" class=\"uk-padding-small\"></span>Déconnexion</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <main class=\"uk-container\">
          <div class=\"uk-grid-item-match uk-child-width-expand@s\" uk-grid>
            <form class=\"uk-width-3-3 uk-padding uk-background-muted\">
                <fieldset class=\"uk-fieldset\">
                    <legend class=\"uk-legend\"><p style=\"float:right\"> Fiche Information Entreprise </p></legend>
                    <div class=\"uk-margin uk-overflow-auto\">
                    <ul class=\"uk-list uk-list-striped\">
                      \t<li><h4>Entreprise</h4></h1></li>
                      \t";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "category", [], "any", false, false, false, 50) == "1")) {
            // line 51
            echo "\t                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: info\"></span> Spécialité - SLAM</li>
    \t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 52
($context["enterprise"] ?? null), "category", [], "any", false, false, false, 52) == "2")) {
            // line 53
            echo "\t\t\t\t\t\t\t<li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: info\"></span> Spécialité - SISR</li>    \t\t\t\t\t
    \t\t\t\t\t";
        }
        // line 55
        echo "                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: tag\"></span>Nom - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "name", [], "any", false, false, false, 55), "html", null, true);
        echo "</li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: location\"></span> Adresse - ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "address", [], "any", false, false, false, 56), "html", null, true);
        echo "</li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: location\"></span> Ville - ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "town", [], "any", false, false, false, 57), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "postal_code", [], "any", false, false, false, 57), "html", null, true);
        echo " </li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: receiver\"></span> Contact - ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "phone_number", [], "any", false, false, false, 58), "html", null, true);
        echo "</li>
                      </ul>
                      <ul class=\"uk-list uk-list-striped\">
                      \t<li><h4>Tuteur</h4></h1></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: user\"></span> Nom - ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tuteur"] ?? null), "firstname", [], "any", false, false, false, 62), "html", null, true);
        echo "</li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: user\"></span> Prenom - ";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tuteur"] ?? null), "lastname", [], "any", false, false, false, 63), "html", null, true);
        echo "</li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: receiver\"></span> Numero de Telephone - ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tuteur"] ?? null), "phone_number", [], "any", false, false, false, 64), "html", null, true);
        echo "</li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: mail\"></span> Adresse mail - <a href=\"mailto:";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tuteur"] ?? null), "mail", [], "any", false, false, false, 65), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tuteur"] ?? null), "mail", [], "any", false, false, false, 65), "html", null, true);
        echo "</a></li>
                      </ul>
                      <hr>
                      <div class=\"uk-margin\" style=\"float:right\">
                        <a href=\"/professeur/supprim_entreprise?id=";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "id", [], "any", false, false, false, 69), "html", null, true);
        echo "\" class=\"uk-button uk-button-danger\" ><span  class=\"uk-margin-small-right\" uk-icon=\"icon:  trash\"></span> Supprimer l'entreprise</a>
                      </div>
                    </div>
                </fieldset>
            </form>
          </div>
        </main>
        <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/uikit.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/uikit-icons.min.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "info_entreprise_prof.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 78,  157 => 77,  153 => 76,  143 => 69,  134 => 65,  130 => 64,  126 => 63,  122 => 62,  115 => 58,  109 => 57,  105 => 56,  100 => 55,  96 => 53,  94 => 52,  91 => 51,  89 => 50,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "info_entreprise_prof.html.twig", "/home/ngbamaw/trunk/app/Resources/views/info_entreprise_prof.html.twig");
    }
}
