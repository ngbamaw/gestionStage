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

/* base.html.twig */
class __TwigTemplate_090260a4196b22a612a555ad83cf7a75eb60a493bc0ee6279b81307885533112 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<meta charset=\"UTF-8\" />
<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
\t";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        // line 12
        echo "\t";
    }

    // line 13
    public function block_javascripts($context, array $blocks = [])
    {
        // line 14
        echo "\t";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 14,  87 => 13,  83 => 12,  80 => 11,  75 => 6,  69 => 5,  63 => 15,  60 => 13,  58 => 11,  51 => 8,  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/home/ngbamaw/trunk/app/Resources/views/base.html.twig");
    }
}
