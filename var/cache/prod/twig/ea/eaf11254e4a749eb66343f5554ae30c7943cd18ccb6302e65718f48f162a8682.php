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

/* content/index_eleve.html.twig */
class __TwigTemplate_4fe59a79e9ebdfbaa76539f3fdc79b4a500aa4418954dce0a6e31b72e7923b17 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'search' => [$this, 'block_search'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "container/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("container/index.html.twig", "content/index_eleve.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_search($context, array $blocks = [])
    {
        // line 3
        echo "\t<form method=\"get\" action=\"/eleve\">
\t\t<div class=\"uk-margin\">
        <input class=\"uk-input\" type=\"text\" name=\"search\" placeholder=\"Entrez votre recherche.\">
    </div>
    <hr>
    <div class=\"uk-margin\">
        <label class=\"uk-form-label\" for=\"form-label-name\">Rechercher par ville: </label>
        <select id=\"form-label-name\" name=\"ville\" class=\"uk-select\">
\t\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["villes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 12
            echo "\t\t\t\t\t\t<option>";
            echo twig_escape_filter($this->env, $context["ville"], "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </select>
    </div>
    <div class=\"uk-margin\">
        <label class=\"uk-form-label\" for=\"form-label-name\">Rechercher par catégorie: </label>
\t\t\t\t  <select id=\"form-label-name\" name=\"option\" class=\"uk-select\">
\t\t\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
            // line 20
            echo "\t\t\t\t\t\t\t<option>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opt"], "wording", [], "any", false, false, false, 20), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo ">
        </select>
    </div>
    <div class=\"uk-margin\">
      <button class=\"uk-button uk-button-default\" type=\"submit\">Rechercher</button>
    </div>
\t</form>
";
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        // line 30
        echo "    <legend class=\"uk-legend\"><span class=\"uk-margin-small-right\" uk-icon=\"icon: grid\"></span>Liste des entreprises</legend>
    <div class=\"uk-margin uk-overflow-auto\">
      <ul class=\"uk-list uk-list-divider\">
     
      ";
        // line 34
        if ( !(null === ($context["companies"] ?? null))) {
            // line 35
            echo "      
\t  \t";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["companies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
                // line 37
                echo "\t  \t     ";
                if (( !(isset($context["company"]) || array_key_exists("company", $context)) || (null === $context["company"]))) {
                    // line 38
                    echo "      \t\t\t<br> Aucune entreprise trouv�e </br>
            ";
                } else {
                    // line 40
                    echo "\t\t\t\t<li><a href=\"/eleve/info_entreprise?id=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 40), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "name", [], "any", false, false, false, 40), "html", null, true);
                    echo "</a></li>
\t\t\t ";
                }
                // line 41
                echo "\t
\t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "      ";
        }
        // line 44
        echo "\t\t\t\t

      </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "content/index_eleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 44,  142 => 43,  135 => 41,  127 => 40,  123 => 38,  120 => 37,  116 => 36,  113 => 35,  111 => 34,  105 => 30,  102 => 29,  91 => 21,  82 => 20,  78 => 19,  71 => 14,  62 => 12,  58 => 11,  48 => 3,  45 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "content/index_eleve.html.twig", "/home/ngbamaw/trunk/app/Resources/views/content/index_eleve.html.twig");
    }
}
