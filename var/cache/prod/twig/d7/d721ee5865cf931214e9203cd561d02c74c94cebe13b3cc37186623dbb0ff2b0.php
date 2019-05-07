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

/* container/index.html.twig */
class __TwigTemplate_d2c31d2c6873e3fa2c5a37e6fda1d300f5f6c516aabbf4fd6a411201fc9b1ddb extends \Twig\Template
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
            'search' => [$this, 'block_search'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "container/menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("container/menu.html.twig", "container/index.html.twig", 1);
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
\t<form class=\"uk-width-1-3 uk-padding uk-background-secondary uk-light\">

\t\t<fieldset class=\"uk-fieldset\">
\t\t\t<legend class=\"uk-legend\">
\t\t\t\t<span class=\"uk-margin-small-right\" uk-icon=\"icon: search\"></span>Rechercher
\t\t\t</legend>
\t\t\t";
        // line 17
        $this->displayBlock('search', $context, $blocks);
        // line 19
        echo "\t\t</fieldset>
\t</form>
\t<form class=\"uk-width-2-3 uk-padding uk-background-muted\">
\t\t<fieldset class=\"uk-fieldset\">
\t\t\t";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "\t\t</fieldset>
\t</form>
</div>
</main>
";
    }

    // line 17
    public function block_search($context, array $blocks = [])
    {
        // line 18
        echo "\t\t\t";
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        // line 24
        echo "\t\t\t";
    }

    public function getTemplateName()
    {
        return "container/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 24,  102 => 23,  98 => 18,  95 => 17,  87 => 25,  85 => 23,  79 => 19,  77 => 17,  67 => 9,  64 => 8,  59 => 6,  56 => 5,  51 => 3,  48 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "container/index.html.twig", "/home/ngbamaw/trunk/app/Resources/views/container/index.html.twig");
    }
}
