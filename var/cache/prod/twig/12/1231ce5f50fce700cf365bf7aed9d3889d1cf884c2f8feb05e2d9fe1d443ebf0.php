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

/* fiche_contact.html.twig */
class __TwigTemplate_e956386290129f37ced60ee3b3dc26bd24fb9bc26ee631beb17e7cb71ec33f0c extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'style_html' => [$this, 'block_style_html'],
            'title' => [$this, 'block_title'],
            'menu_prof' => [$this, 'block_menu_prof'],
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
        $this->parent = $this->loadTemplate("container/menu.html.twig", "fiche_contact.html.twig", 1);
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
    public function block_menu_prof($context, array $blocks = [])
    {
        // line 9
        echo "    <li>
        <a href=\"#\">
            <span class=\"uk-icon uk-margin-small-right\" uk-icon=\"icon: file-edit\"></span>
            Conventions
        </a>
    </li>
    <li>
        <a href=\"#\">
            <span class=\"uk-icon uk-margin-small-right\" uk-icon=\"icon: users\"></span>
            Eleves
        </a>
    </li>
    ";
    }

    // line 22
    public function block_container($context, array $blocks = [])
    {
        // line 23
        echo "        <main class=\"uk-container\">
          <div class=\"uk-grid-item-match uk-child-width-expand@s\" uk-grid>
            <form class=\"uk-width-3-3 uk-padding uk-background-muted\">
                <fieldset class=\"uk-fieldset\">
                    <legend class=\"uk-legend\"><p style=\"float:right\"> ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "lastname", [], "any", false, false, false, 27), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "firstname", [], "any", false, false, false, 27), "html", null, true);
        echo " </p></legend>
                    <div class=\"uk-margin uk-overflow-auto\">
                      <ul class=\"uk-list uk-list-divider\">
                    ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "adresse", [], "any", true, true, false, 30)) {
            // line 31
            echo "                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: location\"></span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "adresse", [], "any", false, false, false, 31), "html", null, true);
            echo "</li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: location\"></span>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "codePost", [], "any", false, false, false, 32), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "town", [], "any", false, false, false, 32), "html", null, true);
            echo "</li>
                    ";
        }
        // line 34
        echo "                        
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: receiver\"></span>Contact - ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "phoneNumber", [], "any", false, false, false, 35), "html", null, true);
        echo "</li>
                        <li><span  class=\"uk-margin-small-right\" uk-icon=\"icon: user\"></span><a href=\"#\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "mail", [], "any", false, false, false, 36), "html", null, true);
        echo "</a>
                      </ul>
                      <hr>
                     </div>
                </fieldset>
            </form>
          </div>
        </main>
      ";
    }

    public function getTemplateName()
    {
        return "fiche_contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 36,  116 => 35,  113 => 34,  106 => 32,  101 => 31,  99 => 30,  91 => 27,  85 => 23,  82 => 22,  66 => 9,  63 => 8,  58 => 6,  55 => 5,  50 => 3,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fiche_contact.html.twig", "/home/ngbamaw/trunk/app/Resources/views/fiche_contact.html.twig");
    }
}
