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

/* contact_prof.html.twig */
class __TwigTemplate_01dd2b10614cbbd1d1d9f6bb3ac39da81a8c540cc833595c8ba67ff9c497c7eb extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'menu_prof' => [$this, 'block_menu_prof'],
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
        $this->parent = $this->loadTemplate("container/index.html.twig", "contact_prof.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        // line 3
        echo "Acceuil | Gestion Stages
";
    }

    // line 5
    public function block_menu_prof($context, array $blocks = [])
    {
        // line 6
        echo "    <li>
        <a href=\"/professeur/convention\">
            <span class=\"uk-icon uk-margin-small-right\" uk-icon=\"icon: file-edit\"></span>
            Conventions
        </a>
    </li>
";
    }

    // line 13
    public function block_container($context, array $blocks = [])
    {
        // line 14
        echo "        <main class=\"uk-container\">
          <div class=\"uk-grid-item-match uk-child-width-expand@s\" uk-grid>
            <form class=\"uk-width-1-3 uk-padding uk-background-secondary uk-light\">
                <fieldset class=\"uk-fieldset\">
                    <legend class=\"uk-legend\"><span class=\"uk-margin-small-right\" uk-icon=\"icon: search\"></span>Contacts</legend>
                    ";
        // line 19
        $this->displayBlock('search', $context, $blocks);
        // line 26
        echo "                </fieldset>
            </form>

            <form id=\"component-tab-left\" class=\"uk-width-2-3 uk-padding uk-background-muted uk-switcher\">
               \t
                <fieldset class=\"uk-fieldset\">
                ";
        // line 32
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "           \t\t</fieldset>
            </form>
          </div>
        </main>
        ";
    }

    // line 19
    public function block_search($context, array $blocks = [])
    {
        // line 20
        echo "                    <ul class=\"uk-tab-left\" uk-tab=\"connect: #component-tab-left; animation: uk-animation-fade\">
                        <li><a href=\"#\">Professeurs</a></li>
                        <li><a href=\"#\">Tuteurs</a></li>
                        <li><a href=\"#\">Elèves</a></li>
                    </ul>
  \t\t\t\t\t";
    }

    // line 32
    public function block_content($context, array $blocks = [])
    {
        // line 33
        echo "                    <legend class=\"uk-legend\"><span class=\"uk-margin-small-right\" uk-icon=\"icon: grid\"></span>Liste des contacts</legend>
       \t\t\t\t\t<ul>
       \t\t\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["profs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 36
            echo "                            <a href=\"contact/Professor/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "\"><li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "nom", [], "any", false, false, false, 36), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "prenom", [], "any", false, false, false, 36), "html", null, true);
            echo "</a></li>
       \t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "       \t\t\t\t\t</ul>
                </fieldset>
                
                 <fieldset class=\"uk-fieldset\">
                    <legend class=\"uk-legend\"><span class=\"uk-margin-small-right\" uk-icon=\"icon: grid\"></span>Liste des contacts</legend>
                \t\t<ul>
       \t\t\t\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tuteurs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 45
            echo "        \t                <a href=\"contact/Internship_Tutor/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "\"> <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "lastname", [], "any", false, false, false, 45), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "firstname", [], "any", false, false, false, 45), "html", null, true);
            echo "</a></li>
       \t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "       \t\t\t\t\t</ul>
\t\t\t     </fieldset>
\t\t\t     <fieldset class=\"uk-fieldset\">
                    <legend class=\"uk-legend\"><span class=\"uk-margin-small-right\" uk-icon=\"icon: grid\"></span>Liste des contacts</legend>
       \t\t\t\t\t<ul>
       \t\t\t\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["eleves"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 53
            echo " \t\t                    <a href=\"contact/Student/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "\"> <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "lastname", [], "any", false, false, false, 53), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "firstname", [], "any", false, false, false, 53), "html", null, true);
            echo "</a></li>
       \t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "       \t\t\t\t\t</ul>
       \t\t\t";
    }

    public function getTemplateName()
    {
        return "contact_prof.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 55,  171 => 53,  167 => 52,  160 => 47,  147 => 45,  143 => 44,  135 => 38,  122 => 36,  118 => 35,  114 => 33,  111 => 32,  102 => 20,  99 => 19,  91 => 57,  89 => 32,  81 => 26,  79 => 19,  72 => 14,  69 => 13,  59 => 6,  56 => 5,  51 => 3,  48 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact_prof.html.twig", "/home/ngbamaw/trunk/app/Resources/views/contact_prof.html.twig");
    }
}
