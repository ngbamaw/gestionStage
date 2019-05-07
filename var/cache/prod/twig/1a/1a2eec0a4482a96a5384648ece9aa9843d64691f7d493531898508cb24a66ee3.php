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

/* @Twig/Exception/traces.html.twig */
class __TwigTemplate_66592fffaed4ac43896c6771e941275ce048e81e4774eff6147b5f16b261a7fe extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"trace trace-as-html\">
    <div class=\"trace-details\">
        <div class=\"trace-head\">
            <span class=\"sf-toggle\" data-toggle-selector=\"#trace-html-";
        // line 4
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "\" data-toggle-initial=\"";
        echo ((($context["expand"] ?? null)) ? ("display") : (""));
        echo "\">
                <h3 class=\"trace-class\">
                    <span class=\"trace-namespace\">
                        ";
        // line 7
        echo twig_escape_filter($this->env, twig_join_filter(twig_slice($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "class", [], "any", false, false, false, 7), "\\"), 0,  -1), "\\"), "html", null, true);
        // line 8
        echo (((twig_length_filter($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "class", [], "any", false, false, false, 8), "\\")) > 1)) ? ("\\") : (""));
        echo "
                    </span>
                    ";
        // line 10
        echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "class", [], "any", false, false, false, 10), "\\")), "html", null, true);
        echo "

                    <span class=\"icon icon-close\">";
        // line 12
        echo twig_include($this->env, $context, "@Twig/images/icon-minus-square-o.svg");
        echo "</span>
                    <span class=\"icon icon-open\">";
        // line 13
        echo twig_include($this->env, $context, "@Twig/images/icon-plus-square-o.svg");
        echo "</span>
                </h3>

                ";
        // line 16
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "message", [], "any", false, false, false, 16)) && (($context["index"] ?? null) > 1))) {
            // line 17
            echo "                    <p class=\"break-long-words trace-message\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "message", [], "any", false, false, false, 17), "html", null, true);
            echo "</p>
                ";
        }
        // line 19
        echo "            </span>
        </div>

        <div id=\"trace-html-";
        // line 22
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "\" class=\"sf-toggle-content\">
        ";
        // line 23
        $context["_is_first_user_code"] = true;
        // line 24
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "trace", [], "any", false, false, false, 24));
        foreach ($context['_seq'] as $context["i"] => $context["trace"]) {
            // line 25
            echo "            ";
            $context["_display_code_snippet"] = (((($context["_is_first_user_code"] ?? null) && !twig_in_filter("/vendor/", twig_get_attribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 25))) && !twig_in_filter("/var/cache/", twig_get_attribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 25))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 25)));
            // line 26
            echo "            ";
            if (($context["_display_code_snippet"] ?? null)) {
                $context["_is_first_user_code"] = false;
            }
            // line 27
            echo "            <div class=\"trace-line\">
                ";
            // line 28
            echo twig_include($this->env, $context, "@Twig/Exception/trace.html.twig", ["prefix" => ($context["index"] ?? null), "i" => $context["i"], "trace" => $context["trace"], "_display_code_snippet" => ($context["_display_code_snippet"] ?? null)], false);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 31,  105 => 28,  102 => 27,  97 => 26,  94 => 25,  89 => 24,  87 => 23,  83 => 22,  78 => 19,  72 => 17,  70 => 16,  64 => 13,  60 => 12,  55 => 10,  50 => 8,  48 => 7,  40 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/Exception/traces.html.twig", "/home/ngbamaw/trunk/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.html.twig");
    }
}
