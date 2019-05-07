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

/* template_loader.html.twig */
class __TwigTemplate_5565a11a1dd00c61da3766a2f0fa36426ce15bf062ee6f1840b90286ff3b24f5 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'style_html' => [$this, 'block_style_html'],
            'title' => [$this, 'block_title'],
            'script_head' => [$this, 'block_script_head'],
            'body_class' => [$this, 'block_body_class'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\" style=\"";
        // line 2
        $this->displayBlock('style_html', $context, $blocks);
        echo ";\">
<head>
<meta charset=\"UTF-8\">
<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<link rel=\"stylesheet\" href=";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo " />
<link rel=\"stylesheet\" href=";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/uikit.min.css"), "html", null, true);
        echo " />
";
        // line 8
        $this->displayBlock('script_head', $context, $blocks);
        // line 10
        echo "</head>
<body class=\"";
        // line 11
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">
\t";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "\t\t<script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.1.0.min.js"), "html", null, true);
        echo "></script>
\t\t<script src=";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "></script>
\t\t<script src=";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/uikit.min.js"), "html", null, true);
        echo "></script>
\t\t<script src=";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/uikit-icons.min.js"), "html", null, true);
        echo "></script>
\t\t<script src=";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "></script>
\t";
        // line 19
        $this->displayBlock('javascript', $context, $blocks);
        // line 21
        echo "</body>
</html>


";
    }

    // line 2
    public function block_style_html($context, array $blocks = [])
    {
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        echo "Test Application";
    }

    // line 8
    public function block_script_head($context, array $blocks = [])
    {
    }

    // line 11
    public function block_body_class($context, array $blocks = [])
    {
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        // line 13
        echo "\t";
    }

    // line 19
    public function block_javascript($context, array $blocks = [])
    {
        // line 20
        echo "\t";
    }

    public function getTemplateName()
    {
        return "template_loader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 20,  132 => 19,  128 => 13,  125 => 12,  120 => 11,  115 => 8,  109 => 5,  104 => 2,  96 => 21,  94 => 19,  90 => 18,  86 => 17,  82 => 16,  78 => 15,  73 => 14,  71 => 12,  67 => 11,  64 => 10,  62 => 8,  58 => 7,  54 => 6,  50 => 5,  44 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "template_loader.html.twig", "/home/ngbamaw/trunk/app/Resources/views/template_loader.html.twig");
    }
}
