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

/* 404.html.twig */
class __TwigTemplate_c5fd3eb6871648cb440b44ef49fb52f987996d9edeb5477cae90e81ac6dc9e3d extends \Twig\Template
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
        // line 14
        echo "\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        echo "Error Page Not Found";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        // line 12
        echo "\t<h1 class=\"uk-heading-hero\">ERROR 404</h1>
\t";
    }

    // line 14
    public function block_javascripts($context, array $blocks = [])
    {
        // line 15
        echo "\t";
    }

    public function getTemplateName()
    {
        return "404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 15,  88 => 14,  83 => 12,  80 => 11,  75 => 6,  69 => 5,  63 => 16,  60 => 14,  58 => 11,  51 => 8,  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "404.html.twig", "/home/ngbamaw/trunk/app/Resources/views/404.html.twig");
    }
}
