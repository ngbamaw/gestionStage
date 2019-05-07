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

/* container/menu.html.twig */
class __TwigTemplate_892a35943c615e8820897cb29d6f8db7898614fae2bc231cc06e9e2bf619b3fe extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->loadTemplate("template_loader.html.twig", "container/menu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        // line 3
        echo "    ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 3), "roles", [], "any", false, false, false, 3), [0 => "ROLE_ADMIN"])) {
            // line 4
            echo "        ";
            $this->loadTemplate("container/menu/_menu_professeur.html.twig", "container/menu.html.twig", 4)->display($context);
            // line 5
            echo "    ";
        } else {
            // line 6
            echo "        ";
            $this->loadTemplate("container/menu/_menu_etudiant.html.twig", "container/menu.html.twig", 6)->display($context);
            // line 7
            echo "    ";
        }
        // line 8
        echo "    ";
        $this->displayBlock('container', $context, $blocks);
    }

    public function block_container($context, array $blocks = [])
    {
        // line 9
        echo "    ";
    }

    public function getTemplateName()
    {
        return "container/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 9,  63 => 8,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "container/menu.html.twig", "/home/ngbamaw/trunk/app/Resources/views/container/menu.html.twig");
    }
}
