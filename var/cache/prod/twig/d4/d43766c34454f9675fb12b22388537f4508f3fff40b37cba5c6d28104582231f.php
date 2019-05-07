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

/* content/contact.html.twig */
class __TwigTemplate_03a9978bef2cc17d0996660c6a79f5672d4664a6962a40dc0990fa12622e5938 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("container/menu.html.twig", "content/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        // line 3
        echo "Contact | Gestion Stages
";
    }

    // line 5
    public function block_container($context, array $blocks = [])
    {
        // line 6
        echo "<main class=\"uk-container\">
<div class=\"uk-grid-item-match uk-child-width-expand@s\" uk-grid>
\t<form class=\"uk-width-1-3 uk-padding uk-background-secondary uk-light\">
\t\t<fieldset class=\"uk-fieldset\">
\t\t\t<legend class=\"uk-legend\">
\t\t\t\t<span class=\"uk-margin-small-right\" uk-icon=\"icon: search\"></span>Contacts
\t\t\t</legend>
\t\t\t<ul class=\"uk-tab-left\"
\t\t\t\tuk-tab=\"connect: #component-tab-left; animation: uk-animation-fade\">
\t\t\t\t<li><a href=\"#\">Professeurs</a></li>
\t\t\t\t<li><a href=\"#\">Chef de Travaux</a></li>
\t\t\t\t<li><a href=\"#\">Tuteurs</a></li>
\t\t\t</ul>
\t\t\t<!-- <div class=\"uk-width-expand@m\">
        <ul id=\"component-tab-left\" class=\"uk-switcher\">
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
            <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</li>
        </ul>
    </div> -->
\t\t</fieldset>
\t</form>
\t<form id=\"component-tab-left\"
\t\tclass=\"uk-width-2-3 uk-padding uk-background-muted uk-switcher\">
\t\t<fieldset class=\"uk-fieldset\">
\t\t\t<legend class=\"uk-legend\">
\t\t\t\t<span class=\"uk-margin-small-right\" uk-icon=\"icon: grid\"></span>Liste
\t\t\t\tdes contacts
\t\t\t</legend>
\t\t\t<div id=\"component-tab-left\" class=\"uk-switcher\">
\t\t\t\t<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
\t\t\t\t\tsed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
\t\t\t\t<li>Ut enim ad minim veniam, quis nostrud exercitation ullamco
\t\t\t\t\tlaboris nisi ut aliquip ex ea commodo consequat.</li>
\t\t\t\t<li>Duis aute irure dolor in reprehenderit in voluptate velit
\t\t\t\t\tesse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</li>
\t\t\t\t<li>Duis aute irure dolor in reprehenderit in voluptate velit
\t\t\t\t\tesse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</li>
\t\t\t</div>
\t\t</fieldset>
\t</form>
</div>
</main>
";
    }

    public function getTemplateName()
    {
        return "content/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 6,  53 => 5,  48 => 3,  45 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "content/contact.html.twig", "/home/ngbamaw/trunk/app/Resources/views/content/contact.html.twig");
    }
}
