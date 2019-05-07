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
class __TwigTemplate_21fba4dc32eba4e23b64544a257f5463ae7d06973289136483104e2150e9cea6 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("container/index.html.twig", "content/creation_de_stage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_style_html($context, array $blocks = [])
    {
        // line 3
        echo "\tbackground-color: #606060
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        // line 6
        echo "\tAcceuil | Gestion Stages
";
    }

    // line 8
    public function block_container($context, array $blocks = [])
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["companies"] ?? null));
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
    }

    // line 76
    public function block_javascript($context, array $blocks = [])
    {
        // line 77
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/getTuteurs.js"), "html", null, true);
        echo "\"></script>
\t
";
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
        return array (  160 => 77,  157 => 76,  119 => 42,  105 => 31,  101 => 29,  92 => 27,  88 => 26,  72 => 13,  66 => 9,  63 => 8,  58 => 6,  55 => 5,  50 => 3,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "content/creation_de_stage.html.twig", "/home/ngbamaw/trunk/app/Resources/views/content/creation_de_stage.html.twig");
    }
}
