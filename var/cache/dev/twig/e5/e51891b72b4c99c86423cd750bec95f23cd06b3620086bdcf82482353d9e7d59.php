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

/* content/modif_etudiant.html.twig */
class __TwigTemplate_4c69494e58cf84391ca0b80be384be12e56e69cc9332521cd2f14cf5c1803f7f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/modif_etudiant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "content/modif_etudiant.html.twig"));

        $this->parent = $this->loadTemplate("template_loader.html.twig", "content/modif_etudiant.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Modifier compte | Gestion Stages
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body_class($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        // line 8
        echo "    uk-margin-large
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <header class=\"uk-container uk-margin-large-top uk-text-center\">
        <h1>Modifier compte</h1>
    </header>
    <nav></nav>
    <main class=\"uk-height-1-1\">
        <div class=\"uk-margin-medium-top uk-align-center\"
             style=\"width: 250px;\">
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "                <div class=\"flash-error\">
                    ";
            // line 21
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'errors');
        echo "
            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["class" => "uk-text-center uk-padding-small"]]);
        echo "
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "idOption", [], "any", false, false, false, 26), 'widget');
        echo "
            <div class=\"uk-margin\">
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "idPromotion", [], "any", false, false, false, 28), 'widget');
        echo "
            </div>
            <div class=\"uk-margin\">
                <div class=\"uk-inline\">
                    <span
                            class=\"uk-form-icon\"
                            uk-icon=\"icon: user\">
                    </span>
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "lastname", [], "any", false, false, false, 36), 'widget');
        echo "
                </div>

            </div>
            <div class=\"uk-margin\">
                <div class=\"uk-inline\">
                                    <span
                                            class=\"uk-form-icon\"
                                            uk-icon=\"icon: user\">
                                    </span>
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "firstname", [], "any", false, false, false, 46), 'widget');
        echo "
                </div>
            </div>
            <div class=\"uk-margin\">
                <div class=\"uk-inline\">
                                    <span
                                            class=\"uk-form-icon\"
                                            uk-icon=\"icon: home\">
                                    </span>
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "address", [], "any", false, false, false, 55), 'widget');
        echo "
                </div>
            </div>
            <div class=\"uk-margin\">
                <div class=\"uk-inline\">
                                    <span
                                            class=\"uk-form-icon\"
                                            uk-icon=\"icon: home\">
                                    </span>
                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "postalCode", [], "any", false, false, false, 64), 'widget');
        echo "
                </div>
            </div>
            <div class=\"uk-margin\">
                <div class=\"uk-inline\">
                                    <span
                                            class=\"uk-form-icon\"
                                            uk-icon=\"icon: lock\">
                                    </span>
                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "town", [], "any", false, false, false, 73), 'widget');
        echo "
                </div>
            </div>
            <div class=\"uk-margin\">
                <div class=\"uk-inline\">
                                    <span
                                            class=\"uk-form-icon\"
                                            uk-icon=\"icon: unlock\">
                                    </span>
                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "birthdate", [], "any", false, false, false, 82), 'widget');
        echo "
                </div>
            </div>
            <div class=\"uk-margin\">
                <div class=\"uk-inline\">
                                    <span
                                            class=\"uk-form-icon\"
                                            uk-icon=\"icon: phone\">
                                    </span>
                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "phoneNumber", [], "any", false, false, false, 91), 'widget');
        echo "
                </div>
            </div>
            <div class=\"uk-margin\">
                <div class=\"uk-inline\">
                                    <span
                                            class=\"uk-form-icon\"
                                            uk-icon=\"icon: mail\">
                                    </span>
                    ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "mail", [], "any", false, false, false, 100), 'widget');
        echo "
                </div>
            </div>
            <div class=\"uk-margin\">
                <div class=\"uk-inline\">
                    <span
                            class=\"uk-form-icon\"
                            uk-icon=\"icon: user\">
                    </span>
                    ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "plainPassword", [], "any", false, false, false, 109), "first", [], "any", false, false, false, 109), 'widget');
        echo "
                </div>
            </div>
            <div class=\"uk-margin\">
                <div class=\"uk-inline\">
                    <span
                            class=\"uk-form-icon\"
                            uk-icon=\"icon: user\">
                    </span>
                    ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "plainPassword", [], "any", false, false, false, 118), "second", [], "any", false, false, false, 118), 'widget');
        echo "
                </div>
            </div>
            <div class=\"uk-margin\">
                <div class=\"uk-inline\">
                <span
                        class=\"uk-form-icon\"
                        uk-icon=\"icon: user\">
                </span>
                    <input class=\"uk-input\"
                           placeholder=\"Mot de passe Admin\"
                           type=\"password\"
                           name=\"password-admin\"
                           value=\"\"
                           required=\"\">
                </div>
            </div>


            <div class=\"uk-margin\">
                <button type=\"submit\"
                        class=\"uk-width-1-1 uk-button uk-button-primary uk-button-large\">MODIFIER
                </button>
            </div>
            ";
        // line 142
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), 'form_end');
        echo "
        </div>
    </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "content/modif_etudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 142,  266 => 118,  254 => 109,  242 => 100,  230 => 91,  218 => 82,  206 => 73,  194 => 64,  182 => 55,  170 => 46,  157 => 36,  146 => 28,  141 => 26,  137 => 25,  132 => 24,  123 => 21,  120 => 20,  116 => 19,  107 => 12,  98 => 11,  87 => 8,  78 => 7,  67 => 4,  58 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template_loader.html.twig' %}

{% block title %}
    Modifier compte | Gestion Stages
{% endblock %}

{% block body_class %}
    uk-margin-large
{% endblock %}

{% block body %}
    <header class=\"uk-container uk-margin-large-top uk-text-center\">
        <h1>Modifier compte</h1>
    </header>
    <nav></nav>
    <main class=\"uk-height-1-1\">
        <div class=\"uk-margin-medium-top uk-align-center\"
             style=\"width: 250px;\">
            {% for message in app.flashes('error') %}
                <div class=\"flash-error\">
                    {{ message }}
                </div>
            {% endfor %}
            {{ form_errors(form) }}
            {{ form_start(form, {'attr': {'class' : 'uk-text-center uk-padding-small'}}) }}
            {{ form_widget(form.idOption) }}
            <div class=\"uk-margin\">
                {{ form_widget(form.idPromotion) }}
            </div>
            <div class=\"uk-margin\">
                <div class=\"uk-inline\">
                    <span
                            class=\"uk-form-icon\"
                            uk-icon=\"icon: user\">
                    </span>
                    {{ form_widget(form.lastname) }}
                </div>

            </div>
            <div class=\"uk-margin\">
                <div class=\"uk-inline\">
                                    <span
                                            class=\"uk-form-icon\"
                                            uk-icon=\"icon: user\">
                                    </span>
                    {{ form_widget(form.firstname) }}
                </div>
            </div>
            <div class=\"uk-margin\">
                <div class=\"uk-inline\">
                                    <span
                                            class=\"uk-form-icon\"
                                            uk-icon=\"icon: home\">
                                    </span>
                    {{ form_widget(form.address) }}
                </div>
            </div>
            <div class=\"uk-margin\">
                <div class=\"uk-inline\">
                                    <span
                                            class=\"uk-form-icon\"
                                            uk-icon=\"icon: home\">
                                    </span>
                    {{ form_widget(form.postalCode) }}
                </div>
            </div>
            <div class=\"uk-margin\">
                <div class=\"uk-inline\">
                                    <span
                                            class=\"uk-form-icon\"
                                            uk-icon=\"icon: lock\">
                                    </span>
                    {{ form_widget(form.town) }}
                </div>
            </div>
            <div class=\"uk-margin\">
                <div class=\"uk-inline\">
                                    <span
                                            class=\"uk-form-icon\"
                                            uk-icon=\"icon: unlock\">
                                    </span>
                    {{ form_widget(form.birthdate) }}
                </div>
            </div>
            <div class=\"uk-margin\">
                <div class=\"uk-inline\">
                                    <span
                                            class=\"uk-form-icon\"
                                            uk-icon=\"icon: phone\">
                                    </span>
                    {{ form_widget(form.phoneNumber) }}
                </div>
            </div>
            <div class=\"uk-margin\">
                <div class=\"uk-inline\">
                                    <span
                                            class=\"uk-form-icon\"
                                            uk-icon=\"icon: mail\">
                                    </span>
                    {{ form_widget(form.mail) }}
                </div>
            </div>
            <div class=\"uk-margin\">
                <div class=\"uk-inline\">
                    <span
                            class=\"uk-form-icon\"
                            uk-icon=\"icon: user\">
                    </span>
                    {{ form_widget(form.plainPassword.first) }}
                </div>
            </div>
            <div class=\"uk-margin\">
                <div class=\"uk-inline\">
                    <span
                            class=\"uk-form-icon\"
                            uk-icon=\"icon: user\">
                    </span>
                    {{ form_widget(form.plainPassword.second) }}
                </div>
            </div>
            <div class=\"uk-margin\">
                <div class=\"uk-inline\">
                <span
                        class=\"uk-form-icon\"
                        uk-icon=\"icon: user\">
                </span>
                    <input class=\"uk-input\"
                           placeholder=\"Mot de passe Admin\"
                           type=\"password\"
                           name=\"password-admin\"
                           value=\"\"
                           required=\"\">
                </div>
            </div>


            <div class=\"uk-margin\">
                <button type=\"submit\"
                        class=\"uk-width-1-1 uk-button uk-button-primary uk-button-large\">MODIFIER
                </button>
            </div>
            {{ form_end(form) }}
        </div>
    </main>
{% endblock %}
", "content/modif_etudiant.html.twig", "/var/www/gestionStage/app/Resources/views/content/modif_etudiant.html.twig");
    }
}
