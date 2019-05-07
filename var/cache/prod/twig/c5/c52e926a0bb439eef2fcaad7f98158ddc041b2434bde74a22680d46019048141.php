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

/* validation_inscription.html.twig */
class __TwigTemplate_404fc7586b5082bd3cf63ac741ad43d44542cb0b12c9a75557864bc5db69b833 extends \Twig\Template
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
        echo "<!-- Promotion , Option sont modifiable par un professeur ou un admin , le reste est modifiable par eleves, professeur et admin -->
<!DOCTYPE html>
<html lang=\"fr\" style=\"background-color: #606060;\">
<head>
<meta charset=\"UTF-8\">
<title>Paramètres | Eleves</title>
<link rel=\"stylesheet\" type=\"text/css\"
\thref=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/uikit.min.css"), "html", null, true);
        echo "\" />
</head>
<body>
\t<nav class=\"uk-navbar-container uk-margin\" uk-navbar>
\t\t<div class=\"uk-navbar-left\">
\t\t\t<!--                <img class=\"uk-width-expand\" src=\"assets/pictures/logo.jpg\">-->
\t\t\t<a class=\"uk-navbar-item uk-logo\" href=\"#\">Logo</a>
\t\t\t<ul class=\"uk-navbar-nav\">
\t\t\t\t<li class=\"uk-active\"><a href=\"#\"> <span
\t\t\t\t\t\tclass=\"uk-icon uk-margin-small-right\" uk-icon=\"icon: home\"></span>
\t\t\t\t\t\tAccueil
\t\t\t\t</a></li>
\t\t\t\t<li><a href=\"#\"> <span
\t\t\t\t\t\tclass=\"uk-icon uk-margin-small-right\" uk-icon=\"icon: mail\"></span>
\t\t\t\t\t\tContact
\t\t\t\t</a></li>
\t\t\t\t<li><a href=\"#\"> <span
\t\t\t\t\t\tclass=\"uk-icon uk-margin-small-right\" uk-icon=\"icon: file-edit\"></span>
\t\t\t\t\t\tConventions
\t\t\t\t</a></li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"uk-navbar-right\">
\t\t\t<ul class=\"uk-navbar-nav\">
\t\t\t\t<li><a href=\"#\" class=\"uk-padding\"><span
\t\t\t\t\t\tuk-icon=\"icon: user\"></span><span class=\"uk-padding-small\">Albert</span></a>
\t\t\t\t\t<div class=\"uk-navbar-dropdown\">
\t\t\t\t\t\t<ul class=\"uk-nav uk-navbar-dropdown-nav\">
\t\t\t\t\t\t\t<li><a href=\"#\"><span uk-icon=\"icon: cog\"
\t\t\t\t\t\t\t\t\tclass=\"uk-padding-small\"></span>Paramètres</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><span uk-icon=\"icon: sign-out\"
\t\t\t\t\t\t\t\t\tclass=\"uk-padding-small\"></span>Déconnexion</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div></li>
\t\t\t</ul>
\t\t</div>
\t</nav>
\t<main class=\"uk-container\">
\t<div class=\"uk-grid-item-match uk-child-width-expand@s\" uk-grid>
\t\t<form class=\"uk-width-2-3 uk-padding uk-background-muted\">
\t\t\t<fieldset class=\"uk-fieldset\">
\t\t\t\t<legend class=\"uk-legend\">
\t\t\t\t\t<span class=\"uk-margin-small-right\" uk-icon=\"icon: grid\"></span>Informations
\t\t\t\t\ta valider
\t\t\t\t</legend>
\t\t\t\t<div class=\"uk-margin\">
\t\t\t\t\t<div class=\"uk-margin\">
\t\t\t\t\t\t<label class=\"uk-form-label\" for=\"form-label-name\">Nom : </label>
\t\t\t\t\t\t<input class=\"uk-input\" name=\"textarea_nom\" rows=\"1\" cols=\"10\"
\t\t\t\t\t\t\tstyle=\"min-width: 100%; line-height: 38px; max-height: 40px; min-height: 40px\"
\t\t\t\t\t\t\tvalue=\"Camu\" disabled> <label class=\"uk-form-label\"
\t\t\t\t\t\t\tfor=\"form-label-name\">Prenom : </label> <input class=\"uk-input\"
\t\t\t\t\t\t\tname=\"textarea_prenom\" rows=\"1\" cols=\"10\"
\t\t\t\t\t\t\tstyle=\"min-width: 100%; line-height: 38px; max-height: 40px; min-height: 40px\"
\t\t\t\t\t\t\tvalue=\"Albert\" disabled> <label class=\"uk-form-label\"
\t\t\t\t\t\t\tfor=\"form-label-name\">Option : </label> <input class=\"uk-input\"
\t\t\t\t\t\t\tname=\"textarea_nom\" rows=\"1\" cols=\"10\"
\t\t\t\t\t\t\tstyle=\"min-width: 100%; line-height: 38px; max-height: 40px; min-height: 40px\"
\t\t\t\t\t\t\tvalue=\"Slam\" ; disabled> <label class=\"uk-form-label\"
\t\t\t\t\t\t\tfor=\"form-label-name\">Promotion : </label> <input
\t\t\t\t\t\t\tclass=\"uk-input\" name=\"textarea_nom\" rows=\"1\" cols=\"10\"
\t\t\t\t\t\t\tstyle=\"min-width: 100%; line-height: 38px; max-height: 40px; min-height: 40px\"
\t\t\t\t\t\t\tvalue=\"2017-2019\" ; disabled>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"uk-margin\">
\t\t\t\t\t\t<label class=\"uk-form-label\" for=\"form-label-name\">Adresse
\t\t\t\t\t\t\tmail : </label>
\t\t\t\t\t\t<textarea class=\"uk-input\" name=\"textarea_prenom\" rows=\"1\"
\t\t\t\t\t\t\tcols=\"30\"
\t\t\t\t\t\t\tstyle=\"min-width: 100%; max-width: 100%; max-height: 40px; min-height: 40px\">Albert.camu@sio.fr</textarea>

\t\t\t\t\t\t<ul class=\"uk-subnav\">
\t\t\t\t\t\t\t<li><label class=\"uk-form-label\" for=\"form-label-name\"
\t\t\t\t\t\t\t\tstyle=\"color: #333\">Adresse postal : </label> <label
\t\t\t\t\t\t\t\tclass=\"uk-form-label\" for=\"form-label-name\">Rue :</label> <textarea
\t\t\t\t\t\t\t\t\tclass=\"uk-input\" name=\"textarea_prenom\" rows=\"1\" cols=\"30\"
\t\t\t\t\t\t\t\t\tstyle=\"min-width: 25%; max-width: 25%; max-height: 40px; min-height: 40px\">52 rue des flaques</textarea>
\t\t\t\t\t\t\t\t<label class=\"uk-form-label\" for=\"form-label-name\">Code
\t\t\t\t\t\t\t\t\tpostal : </label> <textarea class=\"uk-input\" name=\"textarea_prenom\"
\t\t\t\t\t\t\t\t\trows=\"1\" cols=\"5\"
\t\t\t\t\t\t\t\t\tstyle=\"min-width: 25%; max-width: 25%; max-height: 40px; min-height: 40px\">86000</textarea>
\t\t\t\t\t\t\t\t<label class=\"uk-form-label\" for=\"form-label-name\">Ville
\t\t\t\t\t\t\t\t\t: </label> <textarea class=\"uk-input\" name=\"textarea_prenom\" rows=\"1\"
\t\t\t\t\t\t\t\t\tcols=\"10\"
\t\t\t\t\t\t\t\t\tstyle=\"min-width: 25%; max-width: 25%; max-height: 40px; min-height: 40px\">Poitiers</textarea>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<label class=\"uk-form-label\" for=\"form-label-name\">Telephone
\t\t\t\t\t\t\t:</label>
\t\t\t\t\t\t<textarea class=\"uk-input\" name=\"textarea_prenom\" rows=\"1\"
\t\t\t\t\t\t\tcols=\"30\"
\t\t\t\t\t\t\tstyle=\"min-width: 100%; max-width: 100%; max-height: 40px; min-height: 40px\">07 20 50 60 40</textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"uk-margin\">

\t\t\t\t\t\t<button class=\"uk-button uk-button-default\" type=\"button\"
\t\t\t\t\t\t\tname=\"button\"
\t\t\t\t\t\t\tstyle=\"min-width: 40%; max-width: 40%; max-height: 40px; min-height: 40px\">Modifier</button>
\t\t\t\t\t\t<button class=\"uk-button uk-button-default\" type=\"button\"
\t\t\t\t\t\t\tname=\"button\"
\t\t\t\t\t\t\tstyle=\"min-width: 40%; max-width: 40%; max-height: 40px; min-height: 40px\">Supprimer</button>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t</form>
\t</div>
\t</main>
\t<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/uikit.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/uikit-icons.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "validation_inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 120,  161 => 119,  157 => 118,  44 => 8,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "validation_inscription.html.twig", "/home/ngbamaw/trunk/app/Resources/views/validation_inscription.html.twig");
    }
}
