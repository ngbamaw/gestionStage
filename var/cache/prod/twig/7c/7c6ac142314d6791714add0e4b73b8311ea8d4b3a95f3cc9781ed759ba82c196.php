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

/* info_stage_conv.html.twig */
class __TwigTemplate_6c209996db8f27774148d50e0caaac3deb868d6dafab86e850cb50503a86c6de extends \Twig\Template
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
                    <li>
                        <a href=\"#\">
                            <span class=\"uk-icon uk-margin-small-right\" uk-icon=\"icon: file-edit\"></span>
                            Conventions
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
            <form class=\"uk-width-3-3 uk-padding uk-background-muted\" method='post' action='";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("traite_convention");
        echo "'>
                <fieldset class=\"uk-fieldset\">
                    <legend class=\"uk-legend\"><p style=\"float:right\"> Fiche Information Stage </p></legend>
                    <div class=\"uk-margin uk-overflow-auto\">
                     <ul class=\"uk-list uk-list-striped\">
                      \t<li><h4>Informations Personnelles</h4></h1></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: user\"></span><label>Nom</label><input type='text' name='etu_lastname' value='";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["etu"] ?? null), "lastname", [], "any", false, false, false, 56), "html", null, true);
        echo "'></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: user\"></span><label>Prenom</label><input type='text' name='etu_firstname' value='";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["etu"] ?? null), "firstname", [], "any", false, false, false, 57), "html", null, true);
        echo "'></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: location\"></span><label>Adresse</label><input type='text' name='etu_adress' value='";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["etu"] ?? null), "address", [], "any", false, false, false, 58), "html", null, true);
        echo "'></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: location\"></span><label>Ville</label><input type='text' name='etu_town' value='";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["etu"] ?? null), "town", [], "any", false, false, false, 59), "html", null, true);
        echo "'> - <input type='text' name='etu_postal' value='";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["etu"] ?? null), "postalCode", [], "any", false, false, false, 59), "html", null, true);
        echo "'> </li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: receiver\"></span><label>Téléphone</label><input type='text' name='etu_phone' value='";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["etu"] ?? null), "phoneNumber", [], "any", false, false, false, 60), "html", null, true);
        echo "'></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: mail\"></span><label>Mail</label><input type='text' name='etu_mail' value='";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["etu"] ?? null), "mail", [], "any", false, false, false, 61), "html", null, true);
        echo "'></li>
                      </ul>
                       <ul class=\"uk-list uk-list-striped\">
                      \t<li><h4>Entreprise</h4></h1></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: tag\"></span> Nom - <input type='text' name='ent_name' value='";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "name", [], "any", false, false, false, 65), "html", null, true);
        echo "'></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: location\"></span> Adresse - <input type='text' name='ent_adress' value='";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "address", [], "any", false, false, false, 66), "html", null, true);
        echo "'></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: location\"></span> Ville - <input type='text' name='ent_town' value='";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "town", [], "any", false, false, false, 67), "html", null, true);
        echo "'> - <input type='text' name='ent_postal' value='";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "postal_code", [], "any", false, false, false, 67), "html", null, true);
        echo "'> </li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: receiver\"></span> Contact - <input type='text' name='ent_phone' value='";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "phone_number", [], "any", false, false, false, 68), "html", null, true);
        echo "'></li>
                      </ul>
                      <ul class=\"uk-list uk-list-striped\">
                      \t<li><h4>Tuteur</h4></h1></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: user\"></span> Nom - <input type='text' name='tut_lastname' value='";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tuteur"] ?? null), "firstname", [], "any", false, false, false, 72), "html", null, true);
        echo "'></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: user\"></span> Prenom - <input type='text' name='tut_firstname' value='";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tuteur"] ?? null), "lastname", [], "any", false, false, false, 73), "html", null, true);
        echo "'></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: receiver\"></span> Telephone - <input type='text' name='tut_phone' value='";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tuteur"] ?? null), "phone_number", [], "any", false, false, false, 74), "html", null, true);
        echo "'></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: mail\"></span> Adresse mail - <input type='text' name='tut_mail' value='";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tuteur"] ?? null), "mail", [], "any", false, false, false, 75), "html", null, true);
        echo "'></a></li>
                      </ul>
                      <hr>
                      <div class=\"uk-margin\" style=\"float:right\">
                      \t<input class=\"uk-button uk-button-primary\" type='submit' value='Télécharger la convention'>
                      </div>
                    </div>
                </fieldset>
            </form>
          </div>
        </main>
        <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/uikit.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/uikit-icons.min.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "info_stage_conv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 88,  178 => 87,  174 => 86,  160 => 75,  156 => 74,  152 => 73,  148 => 72,  141 => 68,  135 => 67,  131 => 66,  127 => 65,  120 => 61,  116 => 60,  110 => 59,  106 => 58,  102 => 57,  98 => 56,  89 => 50,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "info_stage_conv.html.twig", "/home/ngbamaw/trunk/app/Resources/views/info_stage_conv.html.twig");
    }
}
