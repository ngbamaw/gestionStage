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

/* contact_eleve.html.twig */
class __TwigTemplate_4a7730b46c8a5f55031a5b14b09c1445e05a4d0d3bb2dce4be12e51aaabea73f extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'container' => [$this, 'block_container'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact_eleve.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact_eleve.html.twig"));

        $this->parent = $this->loadTemplate("container/index.html.twig", "contact_eleve.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Acceuil | Gestion Stages
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_container($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 7
        echo "        <main class=\"uk-container\">
          <div class=\"uk-grid-item-match uk-child-width-expand@s\" uk-grid>
            <form class=\"uk-width-1-3 uk-padding uk-background-secondary uk-light\">
                <fieldset class=\"uk-fieldset\">
                    <legend class=\"uk-legend\"><span class=\"uk-margin-small-right\" uk-icon=\"icon: search\"></span>Contacts</legend>

\t\t\t\t";
        // line 13
        $this->displayBlock('search', $context, $blocks);
        // line 19
        echo "
               </fieldset>
            </form>

            <form id=\"component-tab-left\" class=\"uk-width-2-3 uk-padding uk-background-muted uk-switcher\">
               \t
                <fieldset class=\"uk-fieldset\">
                ";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "           \t\t</fieldset>
            </form>
          </div>
        </main>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_search($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 14
        echo "                    <ul class=\"uk-tab-left\" uk-tab=\"connect: #component-tab-left; animation: uk-animation-fade\">
                        <li><a href=\"#\">Professeurs</a></li>
                        <li><a href=\"#\">Tuteurs</a></li>
                    </ul>
  \t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 27
        echo "                    <legend class=\"uk-legend\"><span class=\"uk-margin-small-right\" uk-icon=\"icon: grid\"></span>Liste des contacts</legend>
       \t\t\t\t\t<ul>
       \t\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profs"]) || array_key_exists("profs", $context) ? $context["profs"] : (function () { throw new RuntimeError('Variable "profs" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 30
            echo "                            <a href=\"contact/Professor/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\"><li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "nom", [], "any", false, false, false, 30), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "prenom", [], "any", false, false, false, 30), "html", null, true);
            echo "</a></li>
       \t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "       \t\t\t\t\t</ul>
                </fieldset>
                
                 <fieldset class=\"uk-fieldset\">
                    <legend class=\"uk-legend\"><span class=\"uk-margin-small-right\" uk-icon=\"icon: grid\"></span>Liste des contacts</legend>
                \t\t<ul>
       \t\t\t\t\t";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tuteurs"]) || array_key_exists("tuteurs", $context) ? $context["tuteurs"] : (function () { throw new RuntimeError('Variable "tuteurs" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 39
            echo "        \t                <a href=\"contact/Internship_Tutor/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "\"> <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "lastname", [], "any", false, false, false, 39), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "firstname", [], "any", false, false, false, 39), "html", null, true);
            echo "</a></li>
       \t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "       \t\t\t\t\t</ul>
\t\t\t     </fieldset>
       \t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact_eleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 41,  188 => 39,  184 => 38,  176 => 32,  163 => 30,  159 => 29,  155 => 27,  146 => 26,  132 => 14,  123 => 13,  109 => 44,  107 => 26,  98 => 19,  96 => 13,  88 => 7,  79 => 6,  68 => 3,  59 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'container/index.html.twig' %}
{% block title %}
Acceuil | Gestion Stages
{% endblock %}

 {% block container %}
        <main class=\"uk-container\">
          <div class=\"uk-grid-item-match uk-child-width-expand@s\" uk-grid>
            <form class=\"uk-width-1-3 uk-padding uk-background-secondary uk-light\">
                <fieldset class=\"uk-fieldset\">
                    <legend class=\"uk-legend\"><span class=\"uk-margin-small-right\" uk-icon=\"icon: search\"></span>Contacts</legend>

\t\t\t\t{% block search %}
                    <ul class=\"uk-tab-left\" uk-tab=\"connect: #component-tab-left; animation: uk-animation-fade\">
                        <li><a href=\"#\">Professeurs</a></li>
                        <li><a href=\"#\">Tuteurs</a></li>
                    </ul>
  \t\t\t\t{% endblock %}

               </fieldset>
            </form>

            <form id=\"component-tab-left\" class=\"uk-width-2-3 uk-padding uk-background-muted uk-switcher\">
               \t
                <fieldset class=\"uk-fieldset\">
                {% block content %}
                    <legend class=\"uk-legend\"><span class=\"uk-margin-small-right\" uk-icon=\"icon: grid\"></span>Liste des contacts</legend>
       \t\t\t\t\t<ul>
       \t\t\t\t\t{% for contact in profs %}
                            <a href=\"contact/Professor/{{ contact.id }}\"><li>{{ contact.nom }} {{ contact.prenom }}</a></li>
       \t\t\t\t\t{% endfor %}
       \t\t\t\t\t</ul>
                </fieldset>
                
                 <fieldset class=\"uk-fieldset\">
                    <legend class=\"uk-legend\"><span class=\"uk-margin-small-right\" uk-icon=\"icon: grid\"></span>Liste des contacts</legend>
                \t\t<ul>
       \t\t\t\t\t{% for contact in tuteurs %}
        \t                <a href=\"contact/Internship_Tutor/{{ contact.id }}\"> <li>{{ contact.lastname }} {{ contact.firstname }}</a></li>
       \t\t\t\t\t{% endfor %}
       \t\t\t\t\t</ul>
\t\t\t     </fieldset>
       \t\t\t{%  endblock %}
           \t\t</fieldset>
            </form>
          </div>
        </main>
        {% endblock %}

", "contact_eleve.html.twig", "/var/www/gestionStage/app/Resources/views/contact_eleve.html.twig");
    }
}
