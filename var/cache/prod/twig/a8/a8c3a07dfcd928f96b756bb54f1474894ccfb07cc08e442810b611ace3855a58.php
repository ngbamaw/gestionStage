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

/* content/index_prof.html.twig */
class __TwigTemplate_b899efe96a62b1d9fcf39d10aeb23947f237913fcd7e51625bb14673c29948e5 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'menu_prof' => [$this, 'block_menu_prof'],
            'search' => [$this, 'block_search'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "container/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("container/index.html.twig", "content/index_prof.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_menu_prof($context, array $blocks = [])
    {
        // line 3
        echo "<li>
\t<a href=\"/professeur/convention\">
\t\t<span class=\"uk-icon uk-margin-small-right\" uk-icon=\"icon: file-edit\"></span>
\t\tConventions
\t</a>
</li>
";
    }

    // line 10
    public function block_search($context, array $blocks = [])
    {
        // line 12
        echo "<form action=\"#\" >
<div class=\"uk-margin\">
\t<label class=\"uk-form-label\" for=\"form-label-name\"> Promotions:
\t</label>
\t<select id=\"form-label-name\" name=\"promo\" class=\"uk-select\">
\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["promotions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 18
            echo "\t\t<option>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "year", [], "any", false, false, false, 18), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["promotion"], "year", [], "any", false, false, false, 18) + 2), "html", null, true);
            echo "</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t</select>
</div>
<div class=\"uk-margin\">
\t<button id=\"btn_search\" class=\"uk-button uk-button-default\"
\t\ttype=\"submit\">Rechercher</button>
</div>
</form>
";
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        // line 30
        echo "<legend class=\"uk-legend\">
\t<span class=\"uk-margin-small-right\" uk-icon=\"icon: grid\"></span>
\tListe des élèves
</legend>
<div class=\"uk-margin\">
";
        // line 36
        echo "\t<ul class=\"uk-subnav uk-subnav-pill\" uk-switcher>
\t\t<li>
\t\t\t<a href=\"#\">SLAM</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"#\">SISR</a>
\t\t</li>
\t</ul>
\t";
        // line 45
        echo "\t<ul class=\"uk-switcher uk-margin\">
\t\t<div class=\"uk-margin\">
\t\t\t<ul class=\"uk-list uk-list-divider\">
\t\t\t\t";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["students"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 49
            echo "\t\t\t\t    ";
            if ((twig_get_attribute($this->env, $this->source, $context["student"], "getIdOption", [], "method", false, false, false, 49) == "1")) {
                // line 50
                echo "        \t\t\t\t<li>
        \t\t\t\t\t<a href=\"#\" class=\"uk-link-muted\">
        \t\t\t\t\t\t<span class=\"uk-text-success\">■</span>
        \t\t\t\t\t\t";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "lastname", [], "any", false, false, false, 53), "html", null, true);
                echo "
        \t\t\t\t\t\t";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "firstname", [], "any", false, false, false, 54), "html", null, true);
                echo "
        \t\t\t\t\t</a>

                                ";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["internships"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["internship"]) {
                    // line 58
                    echo "            \t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 58) == twig_get_attribute($this->env, $this->source, $context["internship"], "id_student", [], "any", false, false, false, 58))) {
                        // line 59
                        echo "            \t\t\t\t\t\t    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["internship"], "date_fin", [], "any", false, false, false, 59) < ($context["date"] ?? null))) {
                            // line 60
                            echo "            \t\t\t\t\t\t    Pas de stage
            \t\t\t\t\t\t    ";
                        } else {
                            // line 62
                            echo "            \t\t\t\t\t\t    \t<a href=\"professeur/info_stage_conv?id=";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 62), "html", null, true);
                            echo "\" class=\"uk-link-muted\">   
                \t\t\t\t\t\t    ";
                            // line 63
                            if ((twig_get_attribute($this->env, $this->source, $context["internship"], "convention", [], "any", false, false, false, 63) == "0")) {
                                // line 64
                                echo "                \t\t\t\t\t\t    \tConvention à faire
                \t\t\t\t\t\t    ";
                            } else {
                                // line 66
                                echo "                \t\t\t\t\t\t    \tConvention faite\t
                \t\t\t\t\t\t    ";
                            }
                            // line 68
                            echo "                \t\t\t\t\t\t    </a>
                \t\t\t\t\t\t";
                        }
                        // line 69
                        echo "    
            \t\t\t\t\t\t";
                    }
                    // line 71
                    echo "        \t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['internship'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " \t\t
        \t\t\t\t\t
        \t\t\t\t</li>
    \t\t\t\t";
            }
            // line 75
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t\t\t</ul>
\t\t</div>
\t\t<div class=\"uk-margin\">
\t\t\t<ul class=\"uk-list uk-list-divider\">
\t\t\t\t";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["students"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 81
            echo "\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["student"], "getIdOption", [], "method", false, false, false, 81) == "2")) {
                // line 82
                echo "\t\t\t\t<li>
        \t\t\t\t\t<a href=\"#\" class=\"uk-link-muted\">
        \t\t\t\t\t\t<span class=\"uk-text-success\">■</span>
        \t\t\t\t\t\t";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "lastname", [], "any", false, false, false, 85), "html", null, true);
                echo "
        \t\t\t\t\t\t";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "firstname", [], "any", false, false, false, 86), "html", null, true);
                echo "
        \t\t\t\t\t</a>

                                ";
                // line 89
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["internships"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["internship"]) {
                    // line 90
                    echo "            \t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 90) == twig_get_attribute($this->env, $this->source, $context["internship"], "id_student", [], "any", false, false, false, 90))) {
                        // line 91
                        echo "            \t\t\t\t\t\t    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["internship"], "date_fin", [], "any", false, false, false, 91) < ($context["date"] ?? null))) {
                            // line 92
                            echo "            \t\t\t\t\t\t    Pas de stage
            \t\t\t\t\t\t    ";
                        } else {
                            // line 94
                            echo "            \t\t\t\t\t\t    \t<a href=\"professeur/info_stage_conv?id=";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 94), "html", null, true);
                            echo "\" class=\"uk-link-muted\">   
                \t\t\t\t\t\t    ";
                            // line 95
                            if ((twig_get_attribute($this->env, $this->source, $context["internship"], "convention", [], "any", false, false, false, 95) == "0")) {
                                // line 96
                                echo "                \t\t\t\t\t\t    \tConvention à faire
                \t\t\t\t\t\t    ";
                            } else {
                                // line 98
                                echo "                \t\t\t\t\t\t    \tConvention faite\t
                \t\t\t\t\t\t    ";
                            }
                            // line 100
                            echo "                \t\t\t\t\t\t    </a>
                \t\t\t\t\t\t";
                        }
                        // line 101
                        echo "    
            \t\t\t\t\t\t";
                    }
                    // line 103
                    echo "        \t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['internship'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " \t\t
        \t\t\t\t\t
        \t\t\t\t</li>
\t\t\t\t";
            }
            // line 107
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "\t\t\t</ul>
\t\t</div>
\t</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "content/index_prof.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 108,  272 => 107,  261 => 103,  257 => 101,  253 => 100,  249 => 98,  245 => 96,  243 => 95,  238 => 94,  234 => 92,  231 => 91,  228 => 90,  224 => 89,  218 => 86,  214 => 85,  209 => 82,  206 => 81,  202 => 80,  196 => 76,  190 => 75,  179 => 71,  175 => 69,  171 => 68,  167 => 66,  163 => 64,  161 => 63,  156 => 62,  152 => 60,  149 => 59,  146 => 58,  142 => 57,  136 => 54,  132 => 53,  127 => 50,  124 => 49,  120 => 48,  115 => 45,  105 => 36,  98 => 30,  95 => 29,  84 => 20,  73 => 18,  69 => 17,  62 => 12,  59 => 10,  49 => 3,  46 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "content/index_prof.html.twig", "/home/ngbamaw/trunk/app/Resources/views/content/index_prof.html.twig");
    }
}
