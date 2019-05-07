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

/* index/création_stage_old.twig */
class __TwigTemplate_89f3a24d87a564364ac019261df4082fcb3e67d29a96cc33a9555edd7888aeb1 extends \Twig\Template
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
<title>Création de stage | Eleves</title>
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
\t\t\t\t\t<span class=\"uk-margin-small-right\" uk-icon=\"icon: grid\"></span>Création
\t\t\t\t\tde Stage
\t\t\t\t</legend>
\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<label class=\"uk-form-label\" for=\"form-label-name\">Information personnel : </label>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<label class=\"uk-form-label\" for=\"form-label-name\">Nom : </label>
                        \t<input class=\"uk-input\" name=\"textarea_nom\" rows=\"1\" cols=\"10\" style=\"min-width: 35%; max-width: 35% ;line-height: 38px; max-height:40px;min-height:40px\"value=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["liste_eleve"] ?? null), "lastname", [], "any", false, false, false, 55), "html", null, true);
        echo "\" >
                        \t<label class=\"uk-form-label\" for=\"form-label-name\">Prenom : </label>
                        \t<input class=\"uk-input\" name=\"textarea_prenom\" rows=\"1\" cols=\"10\" style=\"min-width: 35%; max-width: 35% ;line-height: 38px; max-height:40px;min-height:40px\"value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["liste_eleve"] ?? null), "firstname", [], "any", false, false, false, 57), "html", null, true);
        echo "\" >
                        </li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t<label></label>
\t\t\t\t\t\t\t<label class=\"uk-form-label\" for=\"form-label-name\">Option : </label>
                        \t<input class=\"uk-input\" name=\"textarea_nom\" rows=\"1\" cols=\"10\" style=\"min-width: 35%; max-width: 35% ;line-height: 38px; max-height:40px;min-height:40px\"value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["liste_eleve"] ?? null), "wording", [], "any", false, false, false, 62), "html", null, true);
        echo "\"; >
                        \t<label class=\"uk-form-label\" for=\"form-label-name\">Promotion : </label>
                        \t<input class=\"uk-input\" name=\"textarea_nom\" rows=\"1\" cols=\"10\" style=\"min-width: 35%; max-width: 35%  ;line-height: 38px; max-height:40px;min-height:40px\"value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["liste_eleve"] ?? null), "year", [], "any", false, false, false, 64), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["liste_eleve"] ?? null), "year", [], "any", false, false, false, 64) + 2), "html", null, true);
        echo "\"; >
                      \t</li>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"uk-margin\">
\t\t\t\t\t\t<button class=\"uk-button uk-button-default\" type=\"button\"
\t\t\t\t\t\t\tname=\"button\">Créer une entreprise</button>
\t\t\t\t\t</div>
                        
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<label class=\"uk-form-label\" for=\"form-label-name\"style=\"color: #333\">Entreprise :</label>
\t\t\t\t\t\t\t\t<select id=\"form-label-name\" name=\"option\" class=\"uk-select\">
                        \t\t\t\t";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["companies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 76
            echo "                        \t\t\t\t\t<option>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["name"], "name", [], "any", false, false, false, 76), "html", null, true);
            echo "</option>
                        \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                        \t\t</select>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<label class=\"uk-form-label\" for=\"form-label-name\">Telephone :</label>
\t\t\t\t\t\t\t\t<input class=\"uk-input\" name=\"textarea_nom\" rows=\"1\" cols=\"10\" style=\"min-width: 25% ;max-width: 25%;line-height: 38px; max-height:40px;min-height:40px\"value=\"\";>
\t\t\t\t\t\t\t\t<label class=\"uk-form-label\" for=\"form-label-name\" style=\"color:#333\">Adresse postal : </label>
                             \t<input class=\"uk-input\" name=\"textarea_nom\" rows=\"1\" cols=\"10\" style=\"min-width: 25% ;max-width: 25%;line-height: 38px; max-height:40px;min-height:40px\"value=\"\";>
                            </li>
\t\t\t\t\t\t\t<li>
                              <label class=\"uk-form-label\" for=\"form-label-name\">Code postal : </label>
                              <input class=\"uk-input\" name=\"textarea_nom\" rows=\"1\" cols=\"10\" style=\"min-width: 25% ;max-width: 25%;line-height: 38px; max-height:40px;min-height:40px\"value=\"\";>
                              <label class=\"uk-form-label\" for=\"form-label-name\">Ville : </label>
                              <input class=\"uk-input\" name=\"textarea_nom\" rows=\"1\" cols=\"10\" style=\"min-width: 25% ;max-width: 25%;line-height: 38px; max-height:40px;min-height:40px\"value=\"\";>
                            </li>
\t\t\t\t\t\t
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"uk-margin\">
\t\t\t\t\t\t<button class=\"uk-button uk-button-default\" type=\"button\"
\t\t\t\t\t\t\tname=\"button\">Créer un tuteur</button>
\t\t\t\t\t</div>
    \t\t\t\t\t<li>
    \t\t\t\t\t\t<label class=\"uk-form-label\" for=\"form-label-name\"style=\"color: #333\">Tuteur :</label>
    \t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<label class=\"uk-form-label\" for=\"form-label-name\">Nom : </label>
                        \t\t<input class=\"uk-input\" name=\"textarea_nom\" rows=\"1\" cols=\"10\" style=\"min-width: 35%; max-width: 35% ;line-height: 38px; max-height:40px;min-height:40px\"value=\"";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["liste_eleve"] ?? null), "lastname", [], "any", false, false, false, 103), "html", null, true);
        echo "\" >
                        \t\t<label class=\"uk-form-label\" for=\"form-label-name\">Prenom : </label>
                        \t\t<input class=\"uk-input\" name=\"textarea_prenom\" rows=\"1\" cols=\"10\" style=\"min-width: 35%; max-width: 35% ;line-height: 38px; max-height:40px;min-height:40px\"value=\"";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["liste_eleve"] ?? null), "firstname", [], "any", false, false, false, 105), "html", null, true);
        echo "\" >
                        \t</li>
                        \t<li>
                        \t\t<label class=\"uk-form-label\" for=\"form-label-name\">Telephone :</label>
\t\t\t\t\t\t\t\t<input class=\"uk-input\" name=\"textarea_nom\" rows=\"1\" cols=\"10\" style=\"min-width: 25% ;max-width: 25%;line-height: 38px; max-height:40px;min-height:40px\"value=\"\";>
\t\t\t\t\t\t\t\t<label class=\"uk-form-label\" for=\"form-label-name\" style=\"color:#333\">Fonction : </label>
                             \t<input class=\"uk-input\" name=\"textarea_nom\" rows=\"1\" cols=\"10\" style=\"min-width: 25% ;max-width: 35%;line-height: 38px; max-height:40px;min-height:40px\"value=\"Developpeur\";>
                            </li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<label class=\"uk-form-label\" for=\"form-label-name\">Adresse mail : </label>
                        \t\t<input class=\"uk-input\" name=\"textarea_prenom\" rows=\"1\" cols=\"10\" style=\"min-width: 35%; max-width: 35% ;line-height: 38px; max-height:40px;min-height:40px\"value=\"jojo@mail.fr\" >
                        \t</li>
\t\t\t\t\t<div class=\"uk-margin\">
\t\t\t\t\t\t<button class=\"uk-button uk-button-default\" type=\"button\"
\t\t\t\t\t\t\tname=\"button\">Créer un stage</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t</form>
\t</div>
\t</main>
\t<script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/uikit.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/uikit-icons.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index/création_stage_old.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 128,  201 => 127,  197 => 126,  173 => 105,  168 => 103,  141 => 78,  132 => 76,  128 => 75,  112 => 64,  107 => 62,  99 => 57,  94 => 55,  44 => 8,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index/création_stage_old.twig", "/home/ngbamaw/trunk/app/Resources/views/index/création_stage_old.twig");
    }
}
