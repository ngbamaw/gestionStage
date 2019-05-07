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

/* content/liste_utilisateur.html.twig */
class __TwigTemplate_03759ccb7aeb4203c59d8d06fa9ddea2fde125315d1bab375edd9334953ad9dc extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'style_html' => [$this, 'block_style_html'],
            'title' => [$this, 'block_title'],
            'container' => [$this, 'block_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "container/menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/liste_utilisateur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/liste_utilisateur.html.twig"));

        $this->parent = $this->loadTemplate("container/menu.html.twig", "content/liste_utilisateur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_style_html($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style_html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style_html"));

        // line 3
        echo "background-color: #606060
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "Acceuil | Gestion Stages
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_container($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 9
        echo "<main class=\"uk-container\">
<div class=\"uk-grid-item-match uk-child-width-expand@s\" uk-grid>
\t<fieldset class=\"uk-width-3-3 uk-padding uk-background-secondary uk-light\">
\t\t\t<!-- --------ELEVES EN ATTENTE DE VALIDATION---------- -->
\t\t<fieldset class=\"uk-fieldset\">
\t\t\t<legend class=\"uk-legend\">
\t\t\t\t<span class=\"uk-margin-small-right\" uk-icon=\"icon: user\"></span>&Eacute;l&egrave;ves à valider
\t\t\t</legend>
\t\t\t<ul class=\"uk-tab-left\">
\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eleves_a_valider"]) || array_key_exists("eleves_a_valider", $context) ? $context["eleves_a_valider"] : (function () { throw new RuntimeError('Variable "eleves_a_valider" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 19
            echo "\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validation-etudiant", ["id" => twig_get_attribute($this->env, $this->source, $context["eleve"], "id", [], "any", false, false, false, 19), "user_type" => "etudiant"]), "html", null, true);
            echo "\" target=\"_blank\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eleve"], "lastname", [], "any", false, false, false, 19), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eleve"], "firstname", [], "any", false, false, false, 19), "html", null, true);
            echo "</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t\t</ul>
\t\t</fieldset>
\t\t<!-- --------PROFS ---------- -->
\t\t<fieldset class=\"uk-fieldset\">
\t\t\t<legend class=\"uk-legend\">
\t\t\t\t<span class=\"uk-margin-small-right\" uk-icon=\"icon: user\"></span>Professeurs
\t\t\t</legend>
\t\t\t<ul class=\"uk-tab-left\">
\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profs"]) || array_key_exists("profs", $context) ? $context["profs"] : (function () { throw new RuntimeError('Variable "profs" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prof"]) {
            // line 30
            echo "\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modification-professeur", ["id" => twig_get_attribute($this->env, $this->source, $context["prof"], "id", [], "any", false, false, false, 30), "user_type" => "professeur"]), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prof"], "lastname", [], "any", false, false, false, 30), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prof"], "firstname", [], "any", false, false, false, 30), "html", null, true);
            echo "</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prof'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t</ul>
\t\t</fieldset>
\t\t<!-- --------ELEVES ---------- -->
\t\t<fieldset class=\"uk-fieldset\">
\t\t\t<legend class=\"uk-legend\">
\t\t\t\t<span class=\"uk-margin-small-right\" uk-icon=\"icon: user\"></span>&Eacute;l&egrave;ves
\t\t\t</legend>
\t\t\t<ul class=\"uk-tab-left\">
\t\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eleves"]) || array_key_exists("eleves", $context) ? $context["eleves"] : (function () { throw new RuntimeError('Variable "eleves" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 41
            echo "\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modification-etudiant", ["id" => twig_get_attribute($this->env, $this->source, $context["eleve"], "id", [], "any", false, false, false, 41), "user_type" => "etudiant"]), "html", null, true);
            echo "\" target=\"_blank\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eleve"], "lastname", [], "any", false, false, false, 41), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eleve"], "firstname", [], "any", false, false, false, 41), "html", null, true);
            echo "</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t</ul>
\t\t</fieldset>
\t\t
\t</fieldset>
</div>
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "content/liste_utilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 43,  176 => 41,  172 => 40,  162 => 32,  149 => 30,  145 => 29,  135 => 21,  122 => 19,  118 => 18,  107 => 9,  98 => 8,  87 => 6,  78 => 5,  67 => 3,  58 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'container/menu.html.twig' %}
{% block style_html %}
background-color: #606060
{% endblock %}
{% block title %}
Acceuil | Gestion Stages
{% endblock %}
{% block container %}
<main class=\"uk-container\">
<div class=\"uk-grid-item-match uk-child-width-expand@s\" uk-grid>
\t<fieldset class=\"uk-width-3-3 uk-padding uk-background-secondary uk-light\">
\t\t\t<!-- --------ELEVES EN ATTENTE DE VALIDATION---------- -->
\t\t<fieldset class=\"uk-fieldset\">
\t\t\t<legend class=\"uk-legend\">
\t\t\t\t<span class=\"uk-margin-small-right\" uk-icon=\"icon: user\"></span>&Eacute;l&egrave;ves à valider
\t\t\t</legend>
\t\t\t<ul class=\"uk-tab-left\">
\t\t\t\t{% for eleve in eleves_a_valider %}
\t\t\t\t\t<li><a href=\"{{ path('validation-etudiant', {'id': eleve.id, 'user_type': 'etudiant' }) }}\" target=\"_blank\"> {{ eleve.lastname }} {{ eleve.firstname }}</a>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</fieldset>
\t\t<!-- --------PROFS ---------- -->
\t\t<fieldset class=\"uk-fieldset\">
\t\t\t<legend class=\"uk-legend\">
\t\t\t\t<span class=\"uk-margin-small-right\" uk-icon=\"icon: user\"></span>Professeurs
\t\t\t</legend>
\t\t\t<ul class=\"uk-tab-left\">
\t\t\t\t{% for prof in profs %}
\t\t\t\t\t<li><a href=\"{{ path('modification-professeur', {'id': prof.id, 'user_type': 'professeur' }) }}\" target=\"_blank\">{{ prof.lastname }} {{ prof.firstname }}</a>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</fieldset>
\t\t<!-- --------ELEVES ---------- -->
\t\t<fieldset class=\"uk-fieldset\">
\t\t\t<legend class=\"uk-legend\">
\t\t\t\t<span class=\"uk-margin-small-right\" uk-icon=\"icon: user\"></span>&Eacute;l&egrave;ves
\t\t\t</legend>
\t\t\t<ul class=\"uk-tab-left\">
\t\t\t\t{% for eleve in eleves %}
\t\t\t\t\t<li><a href=\"{{ path('modification-etudiant', {'id': eleve.id, 'user_type': 'etudiant' }) }}\" target=\"_blank\"> {{ eleve.lastname }} {{ eleve.firstname }}</a>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</fieldset>
\t\t
\t</fieldset>
</div>
</main>
{% endblock %}
", "content/liste_utilisateur.html.twig", "/var/www/gestionStage/app/Resources/views/content/liste_utilisateur.html.twig");
    }
}
