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

/* info_entreprise.html.twig */
class __TwigTemplate_4cbc0d7fc47ad38c8ccdb73b1099966f843ec3401c1d9a606338d892270bcb49 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("container/menu.html.twig", "info_entreprise.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_style_html($context, array $blocks = [])
    {
        // line 3
        echo "    background-color: #606060
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        // line 6
        echo "    Acceuil | Gestion Stages
";
    }

    // line 8
    public function block_container($context, array $blocks = [])
    {
        // line 9
        echo "    <main class=\"uk-container\">
        <div class=\"uk-grid-item-match uk-child-width-expand@s\"
             uk-grid>
            <form class=\"uk-width-3-3 uk-padding uk-background-muted\">
                <fieldset class=\"uk-fieldset\">
                    <legend class=\"uk-legend\"><p style=\"float:right\"> Fiche Information Entreprise </p></legend>
                    <div class=\"uk-margin uk-overflow-auto\">
                        <ul class=\"uk-list uk-list-striped\">
                            <li><h4>Entreprise</h4></li>
                            ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "category", [], "any", false, false, false, 18) == "1")) {
            // line 19
            echo "                                <li>
                                    <span class=\"uk-margin-small-right\"
                                          uk-icon=\"icon: info\">
                                    </span>
                                    Spécialité - SLAM
                                </li>
                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 25
($context["enterprise"] ?? null), "category", [], "any", false, false, false, 25) == "2")) {
            // line 26
            echo "                                <li>
                                    <span class=\"uk-margin-small-right\"
                                          uk-icon=\"icon: info\">
                                    </span>
                                    Spécialité - SISR
                                </li>
                            ";
        }
        // line 33
        echo "                            <li>
                                <span class=\"uk-margin-small-right\"
                                      uk-icon=\"icon: tag\"></span>
                                Nom - ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "name", [], "any", false, false, false, 36), "html", null, true);
        echo "</li>
                            <li>
                                <span class=\"uk-margin-small-right\"
                                      uk-icon=\"icon: location\"></span>
                                Adresse - ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "address", [], "any", false, false, false, 40), "html", null, true);
        echo "</li>
                            <li>
                                <span class=\"uk-margin-small-right\"
                                      uk-icon=\"icon: location\"></span>
                                Ville - ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "town", [], "any", false, false, false, 44), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "postal_code", [], "any", false, false, false, 44), "html", null, true);
        echo " </li>
                            <li>
                                <span class=\"uk-margin-small-right\"
                                      uk-icon=\"icon: receiver\"></span>
                                Contact - ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enterprise"] ?? null), "phone_number", [], "any", false, false, false, 48), "html", null, true);
        echo "</li>
                        </ul>
                        <h4>Tuteurs</h4>
                        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tuteur"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tut"]) {
            // line 52
            echo "                            <ul class=\"uk-list uk-list-striped\">
                                <li>
                                    <span class=\"uk-margin-small-right\"
                                          uk-icon=\"icon: user\"></span>
                                    Prenom - ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tut"], "firstname", [], "any", false, false, false, 56), "html", null, true);
            echo "</li>
                                <li>
                                    <span class=\"uk-margin-small-right\"
                                          uk-icon=\"icon: user\"></span>
                                    Nom - ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tut"], "lastname", [], "any", false, false, false, 60), "html", null, true);
            echo "</li>
                                <li>
                                    <span class=\"uk-margin-small-right\"
                                          uk-icon=\"icon: receiver\"></span>
                                    Numero de Telephone - ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tut"], "phone_number", [], "any", false, false, false, 64), "html", null, true);
            echo "</li>
                                <li>
                                    <span class=\"uk-margin-small-right\"
                                          uk-icon=\"icon: mail\"></span>
                                    Adresse mail -
                                    <a href=\"mailto:";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tut"], "mail", [], "any", false, false, false, 69), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tut"], "mail", [], "any", false, false, false, 69), "html", null, true);
            echo "</a>
                                </li>
                            </ul>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tut'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                        <hr>
                    </div>
                </fieldset>
            </form>
        </div>
    </main>
";
    }

    public function getTemplateName()
    {
        return "info_entreprise.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 73,  163 => 69,  155 => 64,  148 => 60,  141 => 56,  135 => 52,  131 => 51,  125 => 48,  116 => 44,  109 => 40,  102 => 36,  97 => 33,  88 => 26,  86 => 25,  78 => 19,  76 => 18,  65 => 9,  62 => 8,  57 => 6,  54 => 5,  49 => 3,  46 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "info_entreprise.html.twig", "/home/ngbamaw/trunk/app/Resources/views/info_entreprise.html.twig");
    }
}
