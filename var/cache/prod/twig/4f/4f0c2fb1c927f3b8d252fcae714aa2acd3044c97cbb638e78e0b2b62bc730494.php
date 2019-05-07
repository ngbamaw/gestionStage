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

/* content/creer_entreprise.html.twig */
class __TwigTemplate_475c71272fd00ae3317dcccaf9c11f2edc23a232a6f188cd92a6c4f9a5157415 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("template_loader.html.twig", "content/creer_entreprise.html.twig", 1);
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
            <h1>Ajout Entreprise</h1>
        </header>
        <nav></nav>
        <main class=\"uk-height-1-1\">
            <div class=\"uk-margin-medium-top uk-align-center\" style=\"width: 250px;\">
                <form id=\"foljt-login-form\"
                      method=\"post\"
                      action=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creation_entreprise_traitement");
        echo "\"
                      enctype=\"application/x-www-form-urlencoded\"
                      class=\"uk-text-center uk-padding-small\">
                    ";
        // line 24
        $context["list_proprieties"] = [0 => ["icon" => "user", "placeholder" => "Nom", "type" => "text", "name" => "name", "addclass" => ""], 1 => ["icon" => "mail", "placeholder" => "Téléphone", "type" => "tel", "name" => "tel", "addclass" => ""], 2 => ["icon" => "location", "placeholder" => "Code postal", "type" => "text", "name" => "postal_code", "addclass" => ""], 3 => ["icon" => "home", "placeholder" => "Ville", "type" => "text", "name" => "town", "addclass" => ""], 4 => ["icon" => "location", "placeholder" => "Adresse", "type" => "text", "name" => "address", "addclass" => ""]];
        // line 37
        echo "                    
                    <select class=\"uk-select\" name=\"option\">
                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 40
            echo "                            <option>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "wording", [], "any", false, false, false, 40), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                    </select>
                    
                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_proprieties"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["proprieties"]) {
            // line 45
            echo "                        <div class=\"uk-margin\">
                            <div class=\"uk-inline\">
                                <span class=\"uk-form-icon ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proprieties"], "addclass", [], "any", false, false, false, 47), "html", null, true);
            echo "\" uk-icon=\"icon: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proprieties"], "icon", [], "any", false, false, false, 47), "html", null, true);
            echo "\"></span>
                                <input id=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proprieties"], "name", [], "any", false, false, false, 48), "html", null, true);
            echo "\"
                                       class=\"uk-input\"
                                       placeholder=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proprieties"], "placeholder", [], "any", false, false, false, 50), "html", null, true);
            echo "\"
                                       type=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proprieties"], "type", [], "any", false, false, false, 51), "html", null, true);
            echo "\"
                                       name=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proprieties"], "name", [], "any", false, false, false, 52), "html", null, true);
            echo "\" required>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proprieties'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
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

    // line 67
    public function block_javascript($context, array $blocks = [])
    {
        // line 68
        echo "<script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/submit_register.js"), "html", null, true);
        echo "></script>
";
    }

    public function getTemplateName()
    {
        return "content/creer_entreprise.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 68,  165 => 67,  151 => 56,  141 => 52,  137 => 51,  133 => 50,  128 => 48,  122 => 47,  118 => 45,  114 => 44,  110 => 42,  101 => 40,  97 => 39,  93 => 37,  91 => 24,  85 => 20,  75 => 12,  72 => 11,  67 => 9,  64 => 8,  59 => 6,  56 => 5,  51 => 3,  48 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "content/creer_entreprise.html.twig", "/home/ngbamaw/trunk/app/Resources/views/content/creer_entreprise.html.twig");
    }
}
