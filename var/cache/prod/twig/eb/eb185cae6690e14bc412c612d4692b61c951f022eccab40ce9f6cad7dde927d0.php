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
class __TwigTemplate_c1271085ccc0038865b9f2e516859a06741d67448cac2b78c9e4063f310ea061 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("container/menu.html.twig", "content/liste_utilisateur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_style_html($context, array $blocks = [])
    {
        // line 3
        echo "background-color: #606060
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        // line 6
        echo "Acceuil | Gestion Stages
";
    }

    // line 8
    public function block_container($context, array $blocks = [])
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["eleves_a_valider"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["profs"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["eleves"] ?? null));
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
        return array (  147 => 43,  134 => 41,  130 => 40,  120 => 32,  107 => 30,  103 => 29,  93 => 21,  80 => 19,  76 => 18,  65 => 9,  62 => 8,  57 => 6,  54 => 5,  49 => 3,  46 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "content/liste_utilisateur.html.twig", "/home/ngbamaw/trunk/app/Resources/views/content/liste_utilisateur.html.twig");
    }
}
