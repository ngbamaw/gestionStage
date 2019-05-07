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

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_5f8fa02967a442993f1b901d1a8a5dd988117b443e2f388e08ec5f7cce20adef extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row' => [$this, 'block_form_row'],
                'submit_row' => [$this, 'block_submit_row'],
                'reset_row' => [$this, 'block_reset_row'],
                'form_group_class' => [$this, 'block_form_group_class'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
    }

    // line 3
    public function block_form_start($context, array $blocks = [])
    {
        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 4), "")) : ("")) . " form-horizontal"))]);
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
    }

    // line 10
    public function block_form_label($context, array $blocks = [])
    {
        // line 11
        if ((($context["label"] ?? null) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 14), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))]);
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
    }

    // line 19
    public function block_form_label_class($context, array $blocks = [])
    {
        // line 20
        echo "col-sm-2";
    }

    // line 25
    public function block_form_row($context, array $blocks = [])
    {
        // line 26
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
    }

    // line 35
    public function block_submit_row($context, array $blocks = [])
    {
        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
    }

    // line 44
    public function block_reset_row($context, array $blocks = [])
    {
        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
    }

    // line 53
    public function block_form_group_class($context, array $blocks = [])
    {
        // line 54
        echo "col-sm-10";
    }

    // line 57
    public function block_checkbox_row($context, array $blocks = [])
    {
        // line 58
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  234 => 64,  232 => 63,  230 => 62,  228 => 61,  224 => 60,  220 => 59,  214 => 58,  211 => 57,  207 => 54,  204 => 53,  200 => 50,  198 => 49,  196 => 48,  192 => 47,  188 => 46,  186 => 45,  183 => 44,  179 => 41,  177 => 40,  175 => 39,  171 => 38,  167 => 37,  165 => 36,  162 => 35,  158 => 32,  155 => 31,  153 => 30,  151 => 29,  147 => 28,  145 => 27,  139 => 26,  136 => 25,  132 => 20,  129 => 19,  124 => 15,  122 => 14,  117 => 12,  115 => 11,  112 => 10,  108 => 5,  106 => 4,  103 => 3,  99 => 57,  96 => 56,  94 => 53,  91 => 52,  89 => 44,  86 => 43,  84 => 35,  81 => 34,  79 => 25,  76 => 24,  73 => 22,  71 => 19,  68 => 18,  66 => 10,  63 => 9,  60 => 7,  58 => 3,  55 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_3_horizontal_layout.html.twig", "/home/ngbamaw/trunk/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
