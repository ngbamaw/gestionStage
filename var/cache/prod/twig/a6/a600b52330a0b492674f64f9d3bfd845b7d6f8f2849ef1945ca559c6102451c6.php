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

/* recherche_etp.html.twig */
class __TwigTemplate_554c6376ce769b8d878bd251dcdff8c27861f8ee5a81f0a7ab1748ab67c62e33 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("container/index.html.twig", "recherche_etp.html.twig", 1);
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
        $context['_seq'] = twig_ensure_traversable(($context["companies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 12
            echo "\t\t\t\t\t\t<option>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "town", [], "any", false, false, false, 12), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
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
\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["companies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 34
            echo "\t\t\t\t\t<li><a href=\"info_entreprise?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "name", [], "any", false, false, false, 34), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
      </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "recherche_etp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 36,  114 => 34,  110 => 33,  105 => 30,  102 => 29,  91 => 21,  82 => 20,  78 => 19,  71 => 14,  62 => 12,  58 => 11,  48 => 3,  45 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "recherche_etp.html.twig", "/home/ngbamaw/trunk/app/Resources/views/recherche_etp.html.twig");
    }
}
