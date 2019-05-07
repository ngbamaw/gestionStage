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
class __TwigTemplate_f90af22683898e187afaf6909bb5d10485de7753688b2bb870af03134ca8f4e5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/login.html.twig"));

        $this->parent = $this->loadTemplate("template_loader.html.twig", "index/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Connexion | Gestion Stages
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body_class($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        // line 6
        echo "    uk-margin-large
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <header class=\"uk-container uk-margin-large-top uk-text-center\">
        <h1>Authentification</h1>
    </header>
    <nav></nav>
    <main class=\"uk-height-1-1\">
        ";
        // line 14
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })()), "messageKey", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })()), "messageData", [], "any", false, false, false, 15), "security"), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "query", [], "any", false, false, false, 21), "get", [0 => "error"], "method", false, false, false, 21) == 1)) {
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 32, $this->source); })()), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  166 => 48,  147 => 32,  137 => 24,  133 => 22,  131 => 21,  125 => 18,  122 => 17,  116 => 15,  114 => 14,  107 => 9,  98 => 8,  87 => 6,  78 => 5,  67 => 3,  58 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template_loader.html.twig' %}
{% block title %}
    Connexion | Gestion Stages
{% endblock %}
{% block body_class %}
    uk-margin-large
{% endblock %}
{% block body %}
    <header class=\"uk-container uk-margin-large-top uk-text-center\">
        <h1>Authentification</h1>
    </header>
    <nav></nav>
    <main class=\"uk-height-1-1\">
        {% if error %}
            <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}
        <div class=\"uk-margin-medium-top uk-align-center\" style=\"width: 250px;\">
            <form id=\"foljt-login-form\" method=\"post\" action=\"{{ path('connexion') }}\"
                  enctype=\"application/x-www-form-urlencoded\"
                  class=\"uk-text-center uk-padding-small\">
                {% if app.request.query.get(\"error\") == 1  %}
                    <div class=\"uk-alert-danger\" uk-alert>L'email ou le mot de passe est incorrect</div>
                {% endif %}
                <div class=\"uk-margin\">
                    <div class=\"uk-inline\">
                        <span class=\"uk-form-icon\"
                              uk-icon=\"icon: user\"></span>
                        <input
                                class=\"uk-input\"
                                placeholder=\"Adresse mail\"
                                type=\"text\"
                                value=\"{{ last_username }}\"
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
                <input type=\"hidden\" name=\"_target_path\" value=\"{{ path('homepage') }}\"/>
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
{% endblock %}
", "index/login.html.twig", "/var/www/gestionStage/app/Resources/views/index/login.html.twig");
    }
}
