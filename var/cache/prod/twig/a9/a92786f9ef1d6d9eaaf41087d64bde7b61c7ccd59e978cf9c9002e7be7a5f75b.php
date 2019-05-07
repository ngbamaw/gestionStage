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

/* index/login.html.twig */
class __TwigTemplate_62fcee30c2364af0da6f60506a4702be88d00fb80df7f8f4c169ef29a91e1e79 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body_class' => [$this, 'block_body_class'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "template_loader.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("template_loader.html.twig", "index/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        // line 3
        echo "    Connexion | Gestion Stages
";
    }

    // line 5
    public function block_body_class($context, array $blocks = [])
    {
        // line 6
        echo "    uk-margin-large
";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        // line 9
        echo "    <header class=\"uk-container uk-margin-large-top uk-text-center\">
        <h1>Authentification</h1>
    </header>
    <nav></nav>
    <main class=\"uk-height-1-1\">
        ";
        // line 14
        if (($context["error"] ?? null)) {
            // line 15
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 15), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 17
        echo "        <div class=\"uk-margin-medium-top uk-align-center\" style=\"width: 250px;\">
            <form id=\"foljt-login-form\" method=\"post\" action=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
        echo "\"
                  enctype=\"application/x-www-form-urlencoded\"
                  class=\"uk-text-center uk-padding-small\">
                ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 21), "query", [], "any", false, false, false, 21), "get", [0 => "error"], "method", false, false, false, 21) == 1)) {
            // line 22
            echo "                    <div class=\"uk-alert-danger\" uk-alert>L'email ou le mot de passe est incorrect</div>
                ";
        }
        // line 24
        echo "                <div class=\"uk-margin\">
                    <div class=\"uk-inline\">
                        <span class=\"uk-form-icon\"
                              uk-icon=\"icon: user\"></span>
                        <input
                                class=\"uk-input\"
                                placeholder=\"Adresse mail\"
                                type=\"text\"
                                value=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\"
                                name=\"_username\">
                    </div>
                </div>

                <div class=\"uk-margin\">
                    <div class=\"uk-inline\">
                        <span class=\"uk-form-icon uk-form-icon-flip\" uk-icon=\"icon: lock\"></span>
                        <input
                                class=\"uk-input\"
                                placeholder=\"Mot de passe\"
                                type=\"password\"
                                value=\"\"
                                name=\"_password\">
                    </div>
                </div>
                <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\"/>
                <div class=\"uk-margin\">
                    <button type=\"submit\"
                            class=\"uk-width-1-1 uk-button uk-button-primary uk-button-large\">Connexion
                    </button>
                </div>
                <div class=\"uk-text-small\">
                    <a id=\"forgot-password\"
                       class=\"uk-float-right uk-link uk-link-muted\"
                       href=\"#\">Mot de passe oublié ?
                    </a>
                    <br>
                    <a id=\"new-account\"
                       class=\"uk-float-right uk-link uk-link-muted\"
                       href=\"/inscription\">S'inscrire
                    </a>
                </div>
            </form>
        </div>
    </main>
";
    }

    public function getTemplateName()
    {
        return "index/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 48,  105 => 32,  95 => 24,  91 => 22,  89 => 21,  83 => 18,  80 => 17,  74 => 15,  72 => 14,  65 => 9,  62 => 8,  57 => 6,  54 => 5,  49 => 3,  46 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index/login.html.twig", "/home/ngbamaw/trunk/app/Resources/views/index/login.html.twig");
    }
}
