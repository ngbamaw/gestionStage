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

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_15f178b0bac383632b84df59826fb70c9b54c980eca77ca9448ebef4facb1e6e extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row' => [$this, 'block_form_row'],
                'fieldset_form_row' => [$this, 'block_fieldset_form_row'],
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
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('submit_row', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('reset_row', $context, $blocks);
        // line 64
        echo "
";
        // line 65
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 68
        echo "
";
        // line 69
        $this->displayBlock('checkbox_row', $context, $blocks);
    }

    // line 5
    public function block_form_label($context, array $blocks = [])
    {
        // line 6
        if ((($context["label"] ?? null) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !(isset($context["expanded"]) || array_key_exists("expanded", $context)) ||  !($context["expanded"] ?? null))) {
                // line 10
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 10), "")) : ("")) . " col-form-label"))]);
            }
            // line 12
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 12), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))]);
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
    }

    // line 17
    public function block_form_label_class($context, array $blocks = [])
    {
        // line 18
        echo "col-sm-2";
    }

    // line 23
    public function block_form_row($context, array $blocks = [])
    {
        // line 24
        if (((isset($context["expanded"]) || array_key_exists("expanded", $context)) && ($context["expanded"] ?? null))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            // line 31
            echo "</div>
    ";
            // line 32
            echo "</div>";
        }
    }

    // line 36
    public function block_fieldset_form_row($context, array $blocks = [])
    {
        // line 37
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 38
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 40
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 42
        echo "</div>
        </div>
";
        // line 44
        echo "</fieldset>";
    }

    // line 47
    public function block_submit_row($context, array $blocks = [])
    {
        // line 48
        echo "<div class=\"form-group row\">";
        // line 49
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 50
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 52
        echo "</div>";
        // line 53
        echo "</div>";
    }

    // line 56
    public function block_reset_row($context, array $blocks = [])
    {
        // line 57
        echo "<div class=\"form-group row\">";
        // line 58
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 61
        echo "</div>";
        // line 62
        echo "</div>";
    }

    // line 65
    public function block_form_group_class($context, array $blocks = [])
    {
        // line 66
        echo "col-sm-10";
    }

    // line 69
    public function block_checkbox_row($context, array $blocks = [])
    {
        // line 70
        echo "<div class=\"form-group row\">";
        // line 71
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 72
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 75
        echo "</div>";
        // line 76
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  257 => 76,  255 => 75,  253 => 74,  251 => 73,  247 => 72,  243 => 71,  241 => 70,  238 => 69,  234 => 66,  231 => 65,  227 => 62,  225 => 61,  223 => 60,  219 => 59,  215 => 58,  213 => 57,  210 => 56,  206 => 53,  204 => 52,  202 => 51,  198 => 50,  194 => 49,  192 => 48,  189 => 47,  185 => 44,  181 => 42,  179 => 41,  175 => 40,  173 => 39,  168 => 38,  165 => 37,  162 => 36,  157 => 32,  154 => 31,  152 => 30,  148 => 29,  146 => 28,  140 => 27,  137 => 25,  135 => 24,  132 => 23,  128 => 18,  125 => 17,  120 => 13,  118 => 12,  115 => 10,  113 => 9,  108 => 7,  106 => 6,  103 => 5,  99 => 69,  96 => 68,  94 => 65,  91 => 64,  89 => 56,  86 => 55,  84 => 47,  81 => 46,  79 => 36,  76 => 35,  74 => 23,  71 => 22,  68 => 20,  66 => 17,  63 => 16,  61 => 5,  58 => 4,  55 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_4_horizontal_layout.html.twig", "/home/ngbamaw/trunk/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
