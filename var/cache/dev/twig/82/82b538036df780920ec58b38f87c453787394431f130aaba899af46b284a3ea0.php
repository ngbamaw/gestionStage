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

/* content/index_prof.html.twig */
class __TwigTemplate_08baf0493d6aca21ce0eb43fca4ac09b3856a7554208d724e143c8215090348c extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'menu_prof' => [$this, 'block_menu_prof'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/index_prof.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/index_prof.html.twig"));

        $this->parent = $this->loadTemplate("container/index.html.twig", "content/index_prof.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_menu_prof($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu_prof"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu_prof"));

        // line 3
        echo "<li>
\t<a href=\"/professeur/convention\">
\t\t<span class=\"uk-icon uk-margin-small-right\" uk-icon=\"icon: file-edit\"></span>
\t\tConventions
\t</a>
</li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_search($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 12
        echo "<form action=\"#\" >
<div class=\"uk-margin\">
\t<label class=\"uk-form-label\" for=\"form-label-name\"> Promotions:
\t</label>
\t<select id=\"form-label-name\" name=\"promo\" class=\"uk-select\">
\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 18
            echo "\t\t<option>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "year", [], "any", false, false, false, 18), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["promotion"], "year", [], "any", false, false, false, 18) + 2), "html", null, true);
            echo "</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t</select>
</div>
<div class=\"uk-margin\">
\t<button id=\"btn_search\" class=\"uk-button uk-button-default\"
\t\ttype=\"submit\">Rechercher</button>
</div>
</form>
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
        echo "<legend class=\"uk-legend\">
\t<span class=\"uk-margin-small-right\" uk-icon=\"icon: grid\"></span>
\tListe des élèves
</legend>
<div class=\"uk-margin\">
";
        // line 36
        echo "\t<ul class=\"uk-subnav uk-subnav-pill\" uk-switcher>
\t\t<li>
\t\t\t<a href=\"#\">SLAM</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"#\">SISR</a>
\t\t</li>
\t</ul>
\t";
        // line 45
        echo "\t<ul class=\"uk-switcher uk-margin\">
\t\t<div class=\"uk-margin\">
\t\t\t<ul class=\"uk-list uk-list-divider\">
\t\t\t\t";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) || array_key_exists("students", $context) ? $context["students"] : (function () { throw new RuntimeError('Variable "students" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 49
            echo "\t\t\t\t    ";
            if ((twig_get_attribute($this->env, $this->source, $context["student"], "getIdOption", [], "method", false, false, false, 49) == "1")) {
                // line 50
                echo "        \t\t\t\t<li>
        \t\t\t\t\t<a href=\"#\" class=\"uk-link-muted\">
        \t\t\t\t\t\t<span class=\"uk-text-success\">■</span>
        \t\t\t\t\t\t";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "lastname", [], "any", false, false, false, 53), "html", null, true);
                echo "
        \t\t\t\t\t\t";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "firstname", [], "any", false, false, false, 54), "html", null, true);
                echo "
        \t\t\t\t\t</a>

                                ";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["internships"]) || array_key_exists("internships", $context) ? $context["internships"] : (function () { throw new RuntimeError('Variable "internships" does not exist.', 57, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["internship"]) {
                    // line 58
                    echo "            \t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 58) == twig_get_attribute($this->env, $this->source, $context["internship"], "id_student", [], "any", false, false, false, 58))) {
                        // line 59
                        echo "            \t\t\t\t\t\t    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["internship"], "date_fin", [], "any", false, false, false, 59) < (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 59, $this->source); })()))) {
                            // line 60
                            echo "            \t\t\t\t\t\t    Pas de stage
            \t\t\t\t\t\t    ";
                        } else {
                            // line 62
                            echo "            \t\t\t\t\t\t    \t<a href=\"professeur/info_stage_conv?id=";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["internship"], "id", [], "any", false, false, false, 62), "html", null, true);
                            echo "\" class=\"uk-link-muted\">   
                \t\t\t\t\t\t    ";
                            // line 63
                            if ((twig_get_attribute($this->env, $this->source, $context["internship"], "convention", [], "any", false, false, false, 63) != "1")) {
                                // line 64
                                echo "                \t\t\t\t\t\t    \tConvention à faire
                \t\t\t\t\t\t    ";
                            } else {
                                // line 66
                                echo "                \t\t\t\t\t\t    \tConvention faite\t
                \t\t\t\t\t\t    ";
                            }
                            // line 68
                            echo "                \t\t\t\t\t\t    </a>
                \t\t\t\t\t\t";
                        }
                        // line 69
                        echo "    
            \t\t\t\t\t\t";
                    }
                    // line 71
                    echo "        \t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['internship'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " \t\t
        \t\t\t\t\t
        \t\t\t\t</li>
    \t\t\t\t";
            }
            // line 75
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t\t\t</ul>
\t\t</div>
\t\t<div class=\"uk-margin\">
\t\t\t<ul class=\"uk-list uk-list-divider\">
\t\t\t\t";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) || array_key_exists("students", $context) ? $context["students"] : (function () { throw new RuntimeError('Variable "students" does not exist.', 80, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 81
            echo "\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["student"], "getIdOption", [], "method", false, false, false, 81) == "2")) {
                // line 82
                echo "\t\t\t\t<li>
        \t\t\t\t\t<a href=\"#\" class=\"uk-link-muted\">
        \t\t\t\t\t\t<span class=\"uk-text-success\">■</span>
        \t\t\t\t\t\t";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "lastname", [], "any", false, false, false, 85), "html", null, true);
                echo "
        \t\t\t\t\t\t";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "firstname", [], "any", false, false, false, 86), "html", null, true);
                echo "
        \t\t\t\t\t</a>

                                ";
                // line 89
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["internships"]) || array_key_exists("internships", $context) ? $context["internships"] : (function () { throw new RuntimeError('Variable "internships" does not exist.', 89, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["internship"]) {
                    // line 90
                    echo "            \t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 90) == twig_get_attribute($this->env, $this->source, $context["internship"], "id_student", [], "any", false, false, false, 90))) {
                        // line 91
                        echo "            \t\t\t\t\t\t    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["internship"], "date_fin", [], "any", false, false, false, 91) < (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 91, $this->source); })()))) {
                            // line 92
                            echo "            \t\t\t\t\t\t    Pas de stage
            \t\t\t\t\t\t    ";
                        } else {
                            // line 94
                            echo "            \t\t\t\t\t\t    \t<a href=\"professeur/info_stage_conv?id=";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 94), "html", null, true);
                            echo "\" class=\"uk-link-muted\">   
                \t\t\t\t\t\t    ";
                            // line 95
                            if ((twig_get_attribute($this->env, $this->source, $context["internship"], "convention", [], "any", false, false, false, 95) == "0")) {
                                // line 96
                                echo "                \t\t\t\t\t\t    \tConvention à faire
                \t\t\t\t\t\t    ";
                            } else {
                                // line 98
                                echo "                \t\t\t\t\t\t    \tConvention faite\t
                \t\t\t\t\t\t    ";
                            }
                            // line 100
                            echo "                \t\t\t\t\t\t    </a>
                \t\t\t\t\t\t";
                        }
                        // line 101
                        echo "    
            \t\t\t\t\t\t";
                    }
                    // line 103
                    echo "        \t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['internship'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " \t\t
        \t\t\t\t\t
        \t\t\t\t</li>
\t\t\t\t";
            }
            // line 107
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "\t\t\t</ul>
\t\t</div>
\t</ul>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "content/index_prof.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 108,  314 => 107,  303 => 103,  299 => 101,  295 => 100,  291 => 98,  287 => 96,  285 => 95,  280 => 94,  276 => 92,  273 => 91,  270 => 90,  266 => 89,  260 => 86,  256 => 85,  251 => 82,  248 => 81,  244 => 80,  238 => 76,  232 => 75,  221 => 71,  217 => 69,  213 => 68,  209 => 66,  205 => 64,  203 => 63,  198 => 62,  194 => 60,  191 => 59,  188 => 58,  184 => 57,  178 => 54,  174 => 53,  169 => 50,  166 => 49,  162 => 48,  157 => 45,  147 => 36,  140 => 30,  131 => 29,  114 => 20,  103 => 18,  99 => 17,  92 => 12,  83 => 10,  67 => 3,  58 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'container/index.html.twig' %}
{% block menu_prof %}
<li>
\t<a href=\"/professeur/convention\">
\t\t<span class=\"uk-icon uk-margin-small-right\" uk-icon=\"icon: file-edit\"></span>
\t\tConventions
\t</a>
</li>
{% endblock %}
{% block search %}
{#affichage des promotion pour les recherches#}
<form action=\"#\" >
<div class=\"uk-margin\">
\t<label class=\"uk-form-label\" for=\"form-label-name\"> Promotions:
\t</label>
\t<select id=\"form-label-name\" name=\"promo\" class=\"uk-select\">
\t\t{% for promotion in promotions %}
\t\t<option>{{ promotion.year }}-{{ promotion.year+2 }}</option>
\t\t{% endfor %}
\t</select>
</div>
<div class=\"uk-margin\">
\t<button id=\"btn_search\" class=\"uk-button uk-button-default\"
\t\ttype=\"submit\">Rechercher</button>
</div>
</form>
{% endblock %}

{% block content %}
<legend class=\"uk-legend\">
\t<span class=\"uk-margin-small-right\" uk-icon=\"icon: grid\"></span>
\tListe des élèves
</legend>
<div class=\"uk-margin\">
{# Onglets choix spécialité pour une promo #}
\t<ul class=\"uk-subnav uk-subnav-pill\" uk-switcher>
\t\t<li>
\t\t\t<a href=\"#\">SLAM</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"#\">SISR</a>
\t\t</li>
\t</ul>
\t{#Gestion de l'affichages des élèves#}
\t<ul class=\"uk-switcher uk-margin\">
\t\t<div class=\"uk-margin\">
\t\t\t<ul class=\"uk-list uk-list-divider\">
\t\t\t\t{% for student in students %}
\t\t\t\t    {% if student.getIdOption() == '1' %}
        \t\t\t\t<li>
        \t\t\t\t\t<a href=\"#\" class=\"uk-link-muted\">
        \t\t\t\t\t\t<span class=\"uk-text-success\">■</span>
        \t\t\t\t\t\t{{ student.lastname }}
        \t\t\t\t\t\t{{ student.firstname }}
        \t\t\t\t\t</a>

                                {% for internship in internships %}
            \t\t\t\t\t\t{% if student.id == internship.id_student %}
            \t\t\t\t\t\t    {% if internship.date_fin < date %}
            \t\t\t\t\t\t    Pas de stage
            \t\t\t\t\t\t    {% else %}
            \t\t\t\t\t\t    \t<a href=\"professeur/info_stage_conv?id={{internship.id}}\" class=\"uk-link-muted\">   
                \t\t\t\t\t\t    {% if internship.convention !='1' %}
                \t\t\t\t\t\t    \tConvention à faire
                \t\t\t\t\t\t    {% else %}
                \t\t\t\t\t\t    \tConvention faite\t
                \t\t\t\t\t\t    {% endif %}
                \t\t\t\t\t\t    </a>
                \t\t\t\t\t\t{% endif %}    
            \t\t\t\t\t\t{% endif %}
        \t\t\t\t\t\t{% endfor %} \t\t
        \t\t\t\t\t
        \t\t\t\t</li>
    \t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"uk-margin\">
\t\t\t<ul class=\"uk-list uk-list-divider\">
\t\t\t\t{% for student in students %}
\t\t\t\t{% if student.getIdOption() == '2' %}
\t\t\t\t<li>
        \t\t\t\t\t<a href=\"#\" class=\"uk-link-muted\">
        \t\t\t\t\t\t<span class=\"uk-text-success\">■</span>
        \t\t\t\t\t\t{{ student.lastname }}
        \t\t\t\t\t\t{{ student.firstname }}
        \t\t\t\t\t</a>

                                {% for internship in internships %}
            \t\t\t\t\t\t{% if student.id == internship.id_student %}
            \t\t\t\t\t\t    {% if internship.date_fin < date %}
            \t\t\t\t\t\t    Pas de stage
            \t\t\t\t\t\t    {% else %}
            \t\t\t\t\t\t    \t<a href=\"professeur/info_stage_conv?id={{student.id}}\" class=\"uk-link-muted\">   
                \t\t\t\t\t\t    {% if internship.convention =='0' %}
                \t\t\t\t\t\t    \tConvention à faire
                \t\t\t\t\t\t    {% else %}
                \t\t\t\t\t\t    \tConvention faite\t
                \t\t\t\t\t\t    {% endif %}
                \t\t\t\t\t\t    </a>
                \t\t\t\t\t\t{% endif %}    
            \t\t\t\t\t\t{% endif %}
        \t\t\t\t\t\t{% endfor %} \t\t
        \t\t\t\t\t
        \t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</div>
\t</ul>
</div>
{% endblock %}
", "content/index_prof.html.twig", "/var/www/gestionStage/app/Resources/views/content/index_prof.html.twig");
    }
}
