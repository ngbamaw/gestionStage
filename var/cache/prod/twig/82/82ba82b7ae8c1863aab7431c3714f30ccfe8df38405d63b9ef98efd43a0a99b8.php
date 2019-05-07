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

/* content/creer_tuteur.html.twig */
class __TwigTemplate_00c7e20be4d9e578257b54220126d19f7a854676b7c5342ede9e4fe38d951d07 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'script_head' => [$this, 'block_script_head'],
            'body_class' => [$this, 'block_body_class'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "template_loader.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("template_loader.html.twig", "content/creer_tuteur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        // line 3
        echo "        Ajout tuteur | Gestion Stages
    ";
    }

    // line 5
    public function block_script_head($context, array $blocks = [])
    {
        // line 6
        echo "        <script src='https://www.google.com/recaptcha/api.js'></script>
    ";
    }

    // line 8
    public function block_body_class($context, array $blocks = [])
    {
        // line 9
        echo "        uk-margin-large
    ";
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        // line 12
        echo "        <header class=\"uk-container uk-margin-large-top uk-text-center\">
            <h1>Ajout tuteur</h1>
        </header>
        <nav></nav>
        <main class=\"uk-height-1-1\">
            <div class=\"uk-margin-medium-top uk-align-center\" style=\"width: 250px;\">
                <form id=\"foljt-login-form\" method=\"post\" action=\"creer_tuteur/traitement\"
                      enctype=\"application/x-www-form-urlencoded\"
                      class=\"uk-text-center uk-padding-small\">
                    ";
        // line 22
        $context["list_proprieties"] = [0 => ["icon" => "user", "placeholder" => "Nom", "type" => "text", "name" => "last-name", "addclass" => ""], 1 => ["icon" => "user", "placeholder" => "Prénom", "type" => "text", "name" => "first-name", "addclass" => ""], 2 => ["icon" => "mail", "placeholder" => "Téléphone", "type" => "tel", "name" => "tel", "addclass" => ""], 3 => ["icon" => "mail", "placeholder" => "Adresse mail", "type" => "text", "name" => "mail", "addclass" => ""], 4 => ["icon" => "user", "placeholder" => "Fonction", "type" => "text", "name" => "function", "addclass" => ""]];
        // line 35
        echo "
                    <select class=\"uk-select\" name=\"company\">
                        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["companies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 38
            echo "                            <option>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["company"], "name", [], "any", false, false, false, 38), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                    </select>


                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_proprieties"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["proprieties"]) {
            // line 44
            echo "                        <div class=\"uk-margin\">
                            <div class=\"uk-inline\">
                                <span class=\"uk-form-icon ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proprieties"], "addclass", [], "any", false, false, false, 46), "html", null, true);
            echo "\" uk-icon=\"icon: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proprieties"], "icon", [], "any", false, false, false, 46), "html", null, true);
            echo "\"></span>
                                <input id=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proprieties"], "name", [], "any", false, false, false, 47), "html", null, true);
            echo "\"
                                       class=\"uk-input\"
                                       placeholder=\"";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proprieties"], "placeholder", [], "any", false, false, false, 49), "html", null, true);
            echo "\"
                                       type=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proprieties"], "type", [], "any", false, false, false, 50), "html", null, true);
            echo "\"
                                       name=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proprieties"], "name", [], "any", false, false, false, 51), "html", null, true);
            echo "\" required>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proprieties'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
                    <div class=\"uk-margin\">
                        <button type=\"submit\"
                                class=\"uk-width-1-1 uk-button uk-button-primary uk-button-large\">
                            AJOUTER
                        </button>
                    </div>
                </form>
            </div>
        </main>
    ";
    }

    // line 66
    public function block_javascript($context, array $blocks = [])
    {
        // line 67
        echo "<script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/submit_register.js"), "html", null, true);
        echo "></script>
";
    }

    public function getTemplateName()
    {
        return "content/creer_tuteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 67,  161 => 66,  147 => 55,  137 => 51,  133 => 50,  129 => 49,  124 => 47,  118 => 46,  114 => 44,  110 => 43,  105 => 40,  96 => 38,  92 => 37,  88 => 35,  86 => 22,  75 => 12,  72 => 11,  67 => 9,  64 => 8,  59 => 6,  56 => 5,  51 => 3,  48 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "content/creer_tuteur.html.twig", "/home/ngbamaw/trunk/app/Resources/views/content/creer_tuteur.html.twig");
    }
}
