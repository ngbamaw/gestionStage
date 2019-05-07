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
class __TwigTemplate_50a6b5430f8bac576e29ad38b9e5ed99d60a25494f8098bc3a1607986a438128 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("container/index.html.twig", "contact_eleve.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        // line 3
        echo "Acceuil | Gestion Stages
";
    }

    // line 6
    public function block_container($context, array $blocks = [])
    {
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
    }

    // line 13
    public function block_search($context, array $blocks = [])
    {
        // line 14
        echo "                    <ul class=\"uk-tab-left\" uk-tab=\"connect: #component-tab-left; animation: uk-animation-fade\">
                        <li><a href=\"#\">Professeurs</a></li>
                        <li><a href=\"#\">Tuteurs</a></li>
                    </ul>
  \t\t\t\t";
    }

    // line 26
    public function block_content($context, array $blocks = [])
    {
        // line 27
        echo "                    <legend class=\"uk-legend\"><span class=\"uk-margin-small-right\" uk-icon=\"icon: grid\"></span>Liste des contacts</legend>
       \t\t\t\t\t<ul>
       \t\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["profs"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["tuteurs"] ?? null));
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
        return array (  147 => 41,  134 => 39,  130 => 38,  122 => 32,  109 => 30,  105 => 29,  101 => 27,  98 => 26,  90 => 14,  87 => 13,  79 => 44,  77 => 26,  68 => 19,  66 => 13,  58 => 7,  55 => 6,  50 => 3,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact_eleve.html.twig", "/home/ngbamaw/trunk/app/Resources/views/contact_eleve.html.twig");
    }
}
