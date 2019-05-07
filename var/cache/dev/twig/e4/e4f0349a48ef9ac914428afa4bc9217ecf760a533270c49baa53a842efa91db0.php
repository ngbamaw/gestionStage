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
class __TwigTemplate_774faa13fee298ecc7fa9d85bab7753ce9170404f53e75da937d9707ec5b4c5d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "info_stage_conv.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "info_stage_conv.html.twig"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etu"]) || array_key_exists("etu", $context) ? $context["etu"] : (function () { throw new RuntimeError('Variable "etu" does not exist.', 56, $this->source); })()), "lastname", [], "any", false, false, false, 56), "html", null, true);
        echo "'></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: user\"></span><label>Prenom</label><input type='text' name='etu_firstname' value='";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etu"]) || array_key_exists("etu", $context) ? $context["etu"] : (function () { throw new RuntimeError('Variable "etu" does not exist.', 57, $this->source); })()), "firstname", [], "any", false, false, false, 57), "html", null, true);
        echo "'></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: location\"></span><label>Adresse</label><input type='text' name='etu_adress' value='";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etu"]) || array_key_exists("etu", $context) ? $context["etu"] : (function () { throw new RuntimeError('Variable "etu" does not exist.', 58, $this->source); })()), "address", [], "any", false, false, false, 58), "html", null, true);
        echo "'></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: location\"></span><label>Ville</label><input type='text' name='etu_town' value='";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etu"]) || array_key_exists("etu", $context) ? $context["etu"] : (function () { throw new RuntimeError('Variable "etu" does not exist.', 59, $this->source); })()), "town", [], "any", false, false, false, 59), "html", null, true);
        echo "'> - <input type='text' name='etu_postal' value='";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etu"]) || array_key_exists("etu", $context) ? $context["etu"] : (function () { throw new RuntimeError('Variable "etu" does not exist.', 59, $this->source); })()), "postalCode", [], "any", false, false, false, 59), "html", null, true);
        echo "'> </li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: receiver\"></span><label>Téléphone</label><input type='text' name='etu_phone' value='";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etu"]) || array_key_exists("etu", $context) ? $context["etu"] : (function () { throw new RuntimeError('Variable "etu" does not exist.', 60, $this->source); })()), "phoneNumber", [], "any", false, false, false, 60), "html", null, true);
        echo "'></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: mail\"></span><label>Mail</label><input type='text' name='etu_mail' value='";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["etu"]) || array_key_exists("etu", $context) ? $context["etu"] : (function () { throw new RuntimeError('Variable "etu" does not exist.', 61, $this->source); })()), "mail", [], "any", false, false, false, 61), "html", null, true);
        echo "'></li>
                      </ul>
                       <ul class=\"uk-list uk-list-striped\">
                      \t<li><h4>Entreprise</h4></h1></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: tag\"></span> Nom - <input type='text' name='ent_name' value='";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 65, $this->source); })()), "name", [], "any", false, false, false, 65), "html", null, true);
        echo "'></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: location\"></span> Adresse - <input type='text' name='ent_adress' value='";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 66, $this->source); })()), "address", [], "any", false, false, false, 66), "html", null, true);
        echo "'></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: location\"></span> Ville - <input type='text' name='ent_town' value='";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 67, $this->source); })()), "town", [], "any", false, false, false, 67), "html", null, true);
        echo "'> - <input type='text' name='ent_postal' value='";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 67, $this->source); })()), "postal_code", [], "any", false, false, false, 67), "html", null, true);
        echo "'> </li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: receiver\"></span> Contact - <input type='text' name='ent_phone' value='";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enterprise"]) || array_key_exists("enterprise", $context) ? $context["enterprise"] : (function () { throw new RuntimeError('Variable "enterprise" does not exist.', 68, $this->source); })()), "phone_number", [], "any", false, false, false, 68), "html", null, true);
        echo "'></li>
                      </ul>
                      <ul class=\"uk-list uk-list-striped\">
                      \t<li><h4>Tuteur</h4></h1></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: user\"></span> Nom - <input type='text' name='tut_lastname' value='";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tuteur"]) || array_key_exists("tuteur", $context) ? $context["tuteur"] : (function () { throw new RuntimeError('Variable "tuteur" does not exist.', 72, $this->source); })()), "lastname", [], "any", false, false, false, 72), "html", null, true);
        echo "'></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: user\"></span> Prenom - <input type='text' name='tut_firstname' value='";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tuteur"]) || array_key_exists("tuteur", $context) ? $context["tuteur"] : (function () { throw new RuntimeError('Variable "tuteur" does not exist.', 73, $this->source); })()), "firstname", [], "any", false, false, false, 73), "html", null, true);
        echo "'></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: receiver\"></span> Telephone - <input type='text' name='tut_phone' value='";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tuteur"]) || array_key_exists("tuteur", $context) ? $context["tuteur"] : (function () { throw new RuntimeError('Variable "tuteur" does not exist.', 74, $this->source); })()), "phone_number", [], "any", false, false, false, 74), "html", null, true);
        echo "'></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: mail\"></span> Adresse mail - <input type='text' name='tut_mail' value='";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tuteur"]) || array_key_exists("tuteur", $context) ? $context["tuteur"] : (function () { throw new RuntimeError('Variable "tuteur" does not exist.', 75, $this->source); })()), "mail", [], "any", false, false, false, 75), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  188 => 88,  184 => 87,  180 => 86,  166 => 75,  162 => 74,  158 => 73,  154 => 72,  147 => 68,  141 => 67,  137 => 66,  133 => 65,  126 => 61,  122 => 60,  116 => 59,  112 => 58,  108 => 57,  104 => 56,  95 => 50,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\"  style=\"background-color: #606060;\">
    <head>
        <meta charset=\"UTF-8\">
        <title>Acceuil | Gestion Stages</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset ('css/uikit.min.css')}}\" />
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
            <form class=\"uk-width-3-3 uk-padding uk-background-muted\" method='post' action='{{ path('traite_convention') }}'>
                <fieldset class=\"uk-fieldset\">
                    <legend class=\"uk-legend\"><p style=\"float:right\"> Fiche Information Stage </p></legend>
                    <div class=\"uk-margin uk-overflow-auto\">
                     <ul class=\"uk-list uk-list-striped\">
                      \t<li><h4>Informations Personnelles</h4></h1></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: user\"></span><label>Nom</label><input type='text' name='etu_lastname' value='{{ etu.lastname }}'></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: user\"></span><label>Prenom</label><input type='text' name='etu_firstname' value='{{ etu.firstname }}'></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: location\"></span><label>Adresse</label><input type='text' name='etu_adress' value='{{ etu.address }}'></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: location\"></span><label>Ville</label><input type='text' name='etu_town' value='{{ etu.town}}'> - <input type='text' name='etu_postal' value='{{ etu.postalCode }}'> </li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: receiver\"></span><label>Téléphone</label><input type='text' name='etu_phone' value='{{ etu.phoneNumber }}'></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: mail\"></span><label>Mail</label><input type='text' name='etu_mail' value='{{ etu.mail }}'></li>
                      </ul>
                       <ul class=\"uk-list uk-list-striped\">
                      \t<li><h4>Entreprise</h4></h1></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: tag\"></span> Nom - <input type='text' name='ent_name' value='{{ enterprise.name }}'></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: location\"></span> Adresse - <input type='text' name='ent_adress' value='{{ enterprise.address }}'></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: location\"></span> Ville - <input type='text' name='ent_town' value='{{ enterprise.town}}'> - <input type='text' name='ent_postal' value='{{ enterprise.postal_code }}'> </li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: receiver\"></span> Contact - <input type='text' name='ent_phone' value='{{ enterprise.phone_number }}'></li>
                      </ul>
                      <ul class=\"uk-list uk-list-striped\">
                      \t<li><h4>Tuteur</h4></h1></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: user\"></span> Nom - <input type='text' name='tut_lastname' value='{{ tuteur.lastname }}'></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: user\"></span> Prenom - <input type='text' name='tut_firstname' value='{{ tuteur.firstname }}'></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: receiver\"></span> Telephone - <input type='text' name='tut_phone' value='{{ tuteur.phone_number }}'></li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: mail\"></span> Adresse mail - <input type='text' name='tut_mail' value='{{ tuteur.mail }}'></a></li>
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
        <script src=\"{{asset ('js/jquery-3.1.0.min.js')}}\"></script>
        <script src=\"{{asset ('js/uikit.min.js')}}\"></script>
        <script src=\"{{asset ('js/uikit-icons.min.js')}}\"></script>
    </body>
</html>
", "info_stage_conv.html.twig", "/var/www/gestionStage/app/Resources/views/info_stage_conv.html.twig");
    }
}
