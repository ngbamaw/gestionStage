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
class __TwigTemplate_506384d4c25286bc7dbe86be2b54a6d746457e9f24e7e21c8ada2a78addff118 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/index_eleve.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/index_eleve.html.twig"));

        $this->parent = $this->loadTemplate("container/index.html.twig", "content/index_eleve.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_search($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new RuntimeError('Variable "villes" does not exist.', 11, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 19, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 30
        echo "    <legend class=\"uk-legend\"><span class=\"uk-margin-small-right\" uk-icon=\"icon: grid\"></span>Liste des entreprises</legend>
    <div class=\"uk-margin uk-overflow-auto\">
      <ul class=\"uk-list uk-list-divider\">
     
      ";
        // line 34
        if ( !(null === (isset($context["companies"]) || array_key_exists("companies", $context) ? $context["companies"] : (function () { throw new RuntimeError('Variable "companies" does not exist.', 34, $this->source); })()))) {
            // line 35
            echo "      
\t  \t";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) || array_key_exists("companies", $context) ? $context["companies"] : (function () { throw new RuntimeError('Variable "companies" does not exist.', 36, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  175 => 44,  172 => 43,  165 => 41,  157 => 40,  153 => 38,  150 => 37,  146 => 36,  143 => 35,  141 => 34,  135 => 30,  126 => 29,  109 => 21,  100 => 20,  96 => 19,  89 => 14,  80 => 12,  76 => 11,  66 => 3,  57 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'container/index.html.twig' %}
{% block search %}
\t<form method=\"get\" action=\"/eleve\">
\t\t<div class=\"uk-margin\">
        <input class=\"uk-input\" type=\"text\" name=\"search\" placeholder=\"Entrez votre recherche.\">
    </div>
    <hr>
    <div class=\"uk-margin\">
        <label class=\"uk-form-label\" for=\"form-label-name\">Rechercher par ville: </label>
        <select id=\"form-label-name\" name=\"ville\" class=\"uk-select\">
\t\t\t\t\t{% for ville in villes %}
\t\t\t\t\t\t<option>{{ville}}</option>
\t\t\t\t\t{% endfor %}
        </select>
    </div>
    <div class=\"uk-margin\">
        <label class=\"uk-form-label\" for=\"form-label-name\">Rechercher par catégorie: </label>
\t\t\t\t  <select id=\"form-label-name\" name=\"option\" class=\"uk-select\">
\t\t\t\t\t\t{% for opt in options %}
\t\t\t\t\t\t\t<option>{{opt.wording}}</option>
\t\t\t\t\t\t{% endfor %}>
        </select>
    </div>
    <div class=\"uk-margin\">
      <button class=\"uk-button uk-button-default\" type=\"submit\">Rechercher</button>
    </div>
\t</form>
{% endblock %}
{% block content %}
    <legend class=\"uk-legend\"><span class=\"uk-margin-small-right\" uk-icon=\"icon: grid\"></span>Liste des entreprises</legend>
    <div class=\"uk-margin uk-overflow-auto\">
      <ul class=\"uk-list uk-list-divider\">
     
      {% if companies is not null %}
      
\t  \t{% for company in companies%}
\t  \t     {% if company is not defined or company is null %}
      \t\t\t<br> Aucune entreprise trouv�e </br>
            {% else %}
\t\t\t\t<li><a href=\"/eleve/info_entreprise?id={{company.id}}\">{{company.name}}</a></li>
\t\t\t {% endif %}\t
\t\t {% endfor %}
      {% endif %}
\t\t\t\t

      </ul>
    </div>
{% endblock %}
", "content/index_eleve.html.twig", "/var/www/gestionStage/app/Resources/views/content/index_eleve.html.twig");
    }
}
