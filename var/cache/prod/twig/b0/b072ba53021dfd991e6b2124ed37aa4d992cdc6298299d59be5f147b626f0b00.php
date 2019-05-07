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

/* gestion_stages.html.twig */
class __TwigTemplate_09a1c64684efc731c16619f66cf7295004770f763314334a0915480858b89980 extends \Twig\Template
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
<html lang=\"fr\" style=\"background-color: #606060;\">
<head>
<meta charset=\"UTF-8\">
<title>Acceuil | Gestion Stages</title>
<link rel=\"stylesheet\" type=\"text/css\"
\thref=\"";
        // line 7
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
\t\t\t\t<li><a href=\"#\"> <span
\t\t\t\t\t\tclass=\"uk-icon uk-margin-small-right\" uk-icon=\"icon: users\"></span>
\t\t\t\t\t\tEleves
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
\t\t<form class=\"uk-width-1-3 uk-padding uk-background-secondary uk-light\">
\t\t\t<fieldset class=\"uk-fieldset\">
\t\t\t\t<legend class=\"uk-legend\">
\t\t\t\t\t<span class=\"uk-margin-small-right\" uk-icon=\"icon: search\"></span>Rechercher
\t\t\t\t</legend>
\t\t\t\t<div class=\"uk-margin\">
\t\t\t\t\t<label class=\"uk-form-label\" for=\"form-label-name\">Promotions:
\t\t\t\t\t</label> <select id=\"form-label-name\" class=\"uk-select\">
\t\t\t\t\t\t<option>2015-2017</option>
\t\t\t\t\t\t<option>2016-2018</option>
\t\t\t\t\t\t<option>2017-2019</option>
\t\t\t\t\t\t<option>2018-2020</option>
\t\t\t\t\t\t<option>2019-2021</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<hr>
\t\t\t\t<div class=\"uk-margin\">
\t\t\t\t\t<label class=\"uk-form-label\" for=\"form-label-name\">Stages
\t\t\t\t\t\tpar option: </label> <select id=\"form-label-name\" class=\"uk-select\">
\t\t\t\t\t\t<option>Tout</option>
\t\t\t\t\t\t<option>sans-stage</option>
\t\t\t\t\t\t<option>en attente</option>
\t\t\t\t\t\t<option>Accepté</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"uk-margin\">
\t\t\t\t\t<button class=\"uk-button uk-button-default\" type=\"button\"
\t\t\t\t\t\tname=\"button\">Rechercher</button>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t</form>
\t\t<form class=\"uk-width-2-3 uk-padding uk-background-muted\">
\t\t\t<fieldset class=\"uk-fieldset\">
\t\t\t\t<legend class=\"uk-legend\">
\t\t\t\t\t<span class=\"uk-margin-small-right\" uk-icon=\"icon: grid\"></span>Liste
\t\t\t\t\tdes stages
\t\t\t\t</legend>
\t\t\t\t<div class=\"uk-margin\">
\t\t\t\t\t<ul class=\"uk-subnav uk-subnav-pill\" uk-switcher>
\t\t\t\t\t\t<li><a href=\"#\">SLAM</a></li>
\t\t\t\t\t\t<li><a href=\"#\">SISR</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"uk-switcher uk-margin\">
\t\t\t\t\t\t<div class=\"uk-margin\">
\t\t\t\t\t\t\t<ul class=\"uk-list uk-list-divider\">
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"uk-link-muted\"><span
\t\t\t\t\t\t\t\t\t\tclass=\"uk-text-success\">■</span> Développeur web à Croustiland
\t\t\t\t\t\t\t\t\t\t- SLAM - 1ere année</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"uk-link-muted\"><span
\t\t\t\t\t\t\t\t\t\tclass=\"uk-text-warning\">■</span> Touriste au Futuroscope -
\t\t\t\t\t\t\t\t\t\tSLAM - 2eme année</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"uk-link-muted\"><span
\t\t\t\t\t\t\t\t\t\tclass=\"uk-text-warning\">■</span> Développeur JAVA EE à
\t\t\t\t\t\t\t\t\t\tMonréal-enterprise - SLAM - 1ere année</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"uk-margin\">
\t\t\t\t\t\t\t<ul class=\"uk-list uk-list-divider\">
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"uk-link-muted\"><span
\t\t\t\t\t\t\t\t\t\tclass=\"uk-text-success\">■</span> Développeur PHP / Symfony à
\t\t\t\t\t\t\t\t\t\tMcDo - SISR - 2eme année</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"uk-link-muted\"><span
\t\t\t\t\t\t\t\t\t\tclass=\"uk-text-warning\">■</span> Visiteur au parc Disney -
\t\t\t\t\t\t\t\t\t\tSISR - 1ere année</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t</form>
\t</div>
\t</main>
\t<script src=\"assets/js/jquery-3.1.0.min.js\"></script>
\t<script src=\"assets/js/uikit.min.js\"></script>
\t<script src=\"assets/js/uikit-icons.min.js\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "gestion_stages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "gestion_stages.html.twig", "/home/ngbamaw/trunk/app/Resources/views/gestion_stages.html.twig");
    }
}
