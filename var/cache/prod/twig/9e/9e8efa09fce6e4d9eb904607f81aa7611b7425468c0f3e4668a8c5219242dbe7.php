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

/* container/index_contact.html.twig */
class __TwigTemplate_64b8af8c0a924137868bd350a20b6483e2a08e0dd5eeb0678153c72d391ae7d7 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'menu_prof' => [$this, 'block_menu_prof'],
            'warning_prof' => [$this, 'block_warning_prof'],
            'container' => [$this, 'block_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "template_loader.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("template_loader.html.twig", "container/index_contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        // line 3
        echo "<nav class=\"uk-navbar-container uk-margin\" uk-navbar>
\t<div class=\"uk-navbar-left\">
\t\t<!--                <img class=\"uk-width-expand\" src=\"assets/pictures/logo.jpg\">-->
\t\t<a class=\"uk-navbar-item uk-logo\" href=\"#\">Logo</a>
\t\t<ul class=\"uk-navbar-nav\">
\t\t\t<li class=\"uk-active\">
\t\t\t\t<a href=\"#\"> <span
\t\t\t\t\tclass=\"uk-icon uk-margin-small-right\" uk-icon=\"icon: home\"></span>
\t\t\t\t\tAccueil
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"> <span class=\"uk-icon uk-margin-small-right\"
\t\t\t\t\tuk-icon=\"icon: mail\"></span> Contact
\t\t\t\t</a>
\t\t\t</li>
\t\t\t";
        // line 19
        $this->displayBlock('menu_prof', $context, $blocks);
        // line 21
        echo "\t\t</ul>
\t</div>
\t<div class=\"uk-navbar-right\">
\t\t";
        // line 24
        $this->displayBlock('warning_prof', $context, $blocks);
        // line 26
        echo "\t\t<ul class=\"uk-navbar-nav\">
\t\t\t<li><a href=\"#\" class=\"uk-padding\"><span
\t\t\t\t\tuk-icon=\"icon: user\"></span><span class=\"uk-padding-small\">Albert</span></a>
\t\t\t\t<div class=\"uk-navbar-dropdown\">
\t\t\t\t\t<ul class=\"uk-nav uk-navbar-dropdown-nav\">
\t\t\t\t\t\t<li><a href=\"#\"><span uk-icon=\"icon: cog\"
\t\t\t\t\t\t\t\tclass=\"uk-padding-small\"></span>Paramètres</a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span uk-icon=\"icon: sign-out\"
\t\t\t\t\t\t\t\tclass=\"uk-padding-small\"></span>Déconnexion</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div></li>
\t\t</ul>
\t</div>
</nav>
";
        // line 40
        $this->displayBlock('container', $context, $blocks);
    }

    // line 19
    public function block_menu_prof($context, array $blocks = [])
    {
        // line 20
        echo "\t\t\t";
    }

    // line 24
    public function block_warning_prof($context, array $blocks = [])
    {
        // line 25
        echo "\t\t";
    }

    // line 40
    public function block_container($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "container/index_contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 40,  107 => 25,  104 => 24,  100 => 20,  97 => 19,  93 => 40,  77 => 26,  75 => 24,  70 => 21,  68 => 19,  50 => 3,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "container/index_contact.html.twig", "/home/ngbamaw/trunk/app/Resources/views/container/index_contact.html.twig");
    }
}
