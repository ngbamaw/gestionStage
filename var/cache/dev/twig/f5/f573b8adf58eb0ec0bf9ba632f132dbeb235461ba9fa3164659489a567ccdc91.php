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

/* content/creation_de_stage.html.twig */
class __TwigTemplate_140b3ccc45f1769d421e84d35dcb64494dcc426f57ad30f70b8699d73b460422 extends \Twig\Template
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
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/creation_de_stage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/creation_de_stage.html.twig"));

        $this->parent = $this->loadTemplate("container/index.html.twig", "content/creation_de_stage.html.twig", 1);
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
        echo "\tbackground-color: #606060
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
        echo "\tAcceuil | Gestion Stages
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
\t<div
\t\t\tclass=\"uk-grid-item-match uk-child-width-expand@s\"
\t\t\tuk-grid>
\t\t<form class=\"uk-width-2-3 uk-padding uk-background-muted\" method=\"post\" action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creation_stage_traitement");
        echo "\">
\t\t\t<fieldset class=\"uk-fieldset\">
\t\t\t\t<legend class=\"uk-legend\">
\t\t\t\t\t<span
\t\t\t\t\t\t\tclass=\"uk-margin-small-right\"
\t\t\t\t\t\t\tuk-icon=\"icon: grid\">
\t\t\t\t\t</span>
\t\t\t\t\tCréation de Stage
\t\t\t\t</legend>
\t\t\t\t<label class=\"uk-form-label\" for=\"form-label-name\"style=\"color: #333\">Entreprise :</label>
\t\t\t\t<hr>

\t\t\t\t<select id=\"form-label-name\" id=\"companies' name=\"company\" class=\"uk-select\">
                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) || array_key_exists("companies", $context) ? $context["companies"] : (function () { throw new RuntimeError('Variable "companies" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 27
            echo "                            <option>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["name"], "name", [], "any", false, false, false, 27), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t\t</select>
\t\t\t\t<div class=\"uk-margin\">
\t\t\t\t\t<a class=\"uk-button uk-button-default\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creation_entreprise");
        echo "\">
\t\t\t\t\t\tAjouter une entreprise
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<label class=\"uk-form-label\" for=\"form-label-name\"style=\"color: #333\">Tuteur :</label>
\t\t\t\t<hr>

\t\t\t\t<select id=\"tuteurs\" name=\"tuteur\" class=\"uk-select\">
\t\t\t\t\t
\t\t\t\t</select>
\t\t\t\t<div class=\"uk-margin\">
\t\t\t\t\t<a class=\"uk-button uk-button-default\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creation_tuteur");
        echo "\">
\t\t\t\t\t\tAjouter un tuteur
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<label class=\"uk-form-label\" for=\"form-label-name\"style=\"color: #333\">Date de début :</label>
\t\t\t\t<input
\t\t\t\t\t\tid=\"debut_date\"
\t\t\t\t\t\tclass=\"uk-input uk-width-1-3\"
\t\t\t\t\t\ttype=\"date\"
\t\t\t\t\t\tname=\"date_debut\"
\t\t\t\t\t\trequired>

\t\t\t\t<label class=\"uk-form-label\" for=\"form-label-name\"style=\"color: #333\">Date de fin :</label>
\t\t\t\t<input
\t\t\t\t\t\tid=\"fin_date\"
\t\t\t\t\t\tclass=\"uk-input uk-width-1-3\"
\t\t\t\t\t\ttype=\"date\"
\t\t\t\t\t\tname=\"date_fin\"
\t\t\t\t\t\trequired>
\t\t\t\t<div class=\"uk-margin\">
\t\t\t\t\t<button
\t\t\t\t\t\t\tclass=\"uk-button uk-button-default\"
\t\t\t\t\t\t\ttype=\"submit\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\tCréer le stage
\t\t\t\t\t</button>
\t\t\t\t</div>

\t\t\t</fieldset>
\t\t</form>
\t</div>
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_javascript($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 77
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/getTuteurs.js"), "html", null, true);
        echo "\"></script>
\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "content/creation_de_stage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 77,  205 => 76,  161 => 42,  147 => 31,  143 => 29,  134 => 27,  130 => 26,  114 => 13,  108 => 9,  99 => 8,  88 => 6,  79 => 5,  68 => 3,  59 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends  'container/index.html.twig' %}
{% block style_html %}
\tbackground-color: #606060
{% endblock %}
{% block title %}
\tAcceuil | Gestion Stages
{% endblock %}
{% block container %}
<main class=\"uk-container\">
\t<div
\t\t\tclass=\"uk-grid-item-match uk-child-width-expand@s\"
\t\t\tuk-grid>
\t\t<form class=\"uk-width-2-3 uk-padding uk-background-muted\" method=\"post\" action=\"{{ path('creation_stage_traitement') }}\">
\t\t\t<fieldset class=\"uk-fieldset\">
\t\t\t\t<legend class=\"uk-legend\">
\t\t\t\t\t<span
\t\t\t\t\t\t\tclass=\"uk-margin-small-right\"
\t\t\t\t\t\t\tuk-icon=\"icon: grid\">
\t\t\t\t\t</span>
\t\t\t\t\tCréation de Stage
\t\t\t\t</legend>
\t\t\t\t<label class=\"uk-form-label\" for=\"form-label-name\"style=\"color: #333\">Entreprise :</label>
\t\t\t\t<hr>

\t\t\t\t<select id=\"form-label-name\" id=\"companies' name=\"company\" class=\"uk-select\">
                        {% for name in companies %}
                            <option>{{name.name}}</option>
                        {% endfor %}
\t\t\t\t</select>
\t\t\t\t<div class=\"uk-margin\">
\t\t\t\t\t<a class=\"uk-button uk-button-default\" href=\"{{ path('creation_entreprise') }}\">
\t\t\t\t\t\tAjouter une entreprise
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<label class=\"uk-form-label\" for=\"form-label-name\"style=\"color: #333\">Tuteur :</label>
\t\t\t\t<hr>

\t\t\t\t<select id=\"tuteurs\" name=\"tuteur\" class=\"uk-select\">
\t\t\t\t\t
\t\t\t\t</select>
\t\t\t\t<div class=\"uk-margin\">
\t\t\t\t\t<a class=\"uk-button uk-button-default\" href=\"{{ path('creation_tuteur') }}\">
\t\t\t\t\t\tAjouter un tuteur
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<label class=\"uk-form-label\" for=\"form-label-name\"style=\"color: #333\">Date de début :</label>
\t\t\t\t<input
\t\t\t\t\t\tid=\"debut_date\"
\t\t\t\t\t\tclass=\"uk-input uk-width-1-3\"
\t\t\t\t\t\ttype=\"date\"
\t\t\t\t\t\tname=\"date_debut\"
\t\t\t\t\t\trequired>

\t\t\t\t<label class=\"uk-form-label\" for=\"form-label-name\"style=\"color: #333\">Date de fin :</label>
\t\t\t\t<input
\t\t\t\t\t\tid=\"fin_date\"
\t\t\t\t\t\tclass=\"uk-input uk-width-1-3\"
\t\t\t\t\t\ttype=\"date\"
\t\t\t\t\t\tname=\"date_fin\"
\t\t\t\t\t\trequired>
\t\t\t\t<div class=\"uk-margin\">
\t\t\t\t\t<button
\t\t\t\t\t\t\tclass=\"uk-button uk-button-default\"
\t\t\t\t\t\t\ttype=\"submit\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\tCréer le stage
\t\t\t\t\t</button>
\t\t\t\t</div>

\t\t\t</fieldset>
\t\t</form>
\t</div>
</main>
{% endblock %}
{% block javascript %}
\t<script src=\"{{ asset(\"js/getTuteurs.js\") }}\"></script>
\t
{% endblock %}", "content/creation_de_stage.html.twig", "/var/www/gestionStage/app/Resources/views/content/creation_de_stage.html.twig");
    }
}
