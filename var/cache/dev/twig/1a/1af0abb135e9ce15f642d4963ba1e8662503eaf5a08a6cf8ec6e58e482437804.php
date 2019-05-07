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

/* index/inscription.html.twig */
class __TwigTemplate_b5cf8e4f3521abed824c15028571cdfa680e89677d1b416816c54e045ba9f066 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/inscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/inscription.html.twig"));

        $this->parent = $this->loadTemplate("template_loader.html.twig", "index/inscription.html.twig", 1);
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
        echo "        Inscription | Gestion Stages
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_script_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script_head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script_head"));

        // line 6
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/inscription.css"), "html", null, true);
        echo "\"/>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body_class($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        // line 10
        echo "        uk-margin-large
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "<div>
    <header class=\"uk-container uk-margin-large-top uk-text-center\">
        <h1>Inscription</h1>
    </header>

    <div class=\"\">
        <div id=\"verif\"
             class=\"alert alert-danger\"
             role=\"alert\">
            ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["errorCaptcha"]) || array_key_exists("errorCaptcha", $context) ? $context["errorCaptcha"] : (function () { throw new RuntimeError('Variable "errorCaptcha" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "
        </div>
    </div>


    <nav></nav>
    <main class=\"uk-height-1-1\">
        <div class=\"uk-margin-medium-top uk-align-center\"
             style=\"width: 250px;\">

            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_start', ["attr" => ["class" => "uk-text-center uk-padding-small"]]);
        echo "
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "idOption", [], "any", false, false, false, 33), 'widget');
        echo "
            <div class=\"uk-margin\">
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "idPromotion", [], "any", false, false, false, 35), 'widget');
        echo "
            </div>
            <div class=\"uk-margin\">
                <div class=\"uk-inline\">
                                    <span
                                            class=\"uk-form-icon\"
                                            uk-icon=\"icon: user\">
                                    </span>
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "lastname", [], "any", false, false, false, 43), 'widget');
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
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "firstname", [], "any", false, false, false, 53), 'widget');
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
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "mail", [], "any", false, false, false, 62), 'widget');
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
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "address", [], "any", false, false, false, 72), 'widget');
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
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "postalCode", [], "any", false, false, false, 81), 'widget');
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
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "town", [], "any", false, false, false, 90), 'widget');
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
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "birthdate", [], "any", false, false, false, 99), 'widget');
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
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "phoneNumber", [], "any", false, false, false, 108), 'widget');
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
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "plainPassword", [], "any", false, false, false, 117), "first", [], "any", false, false, false, 117), 'widget');
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
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "plainPassword", [], "any", false, false, false, 126), "second", [], "any", false, false, false, 126), 'widget');
        echo "
                </div>
            </div>

            <div class=\"g-recaptcha\"
                 data-sitekey=\"6LeL0poUAAAAAEMkl0PbqxPFzx4fhKxkuXd3KVs9\"></div>

            <div class=\"uk-margin\">
                <button type=\"submit\"
                        class=\"uk-width-1-1 uk-button uk-button-primary uk-button-large\">Inscription
                </button>
            </div>
            <div class=\"uk-text-small\">
                <a id=\"forgot-password\"
                   class=\"uk-float-right uk-link uk-link-muted\"
                   href=\"/\">Se connecter
                </a>
            </div>
            
            ";
        // line 145
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), 'form_end');
        echo "
        </div>
    </main>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 149
    public function block_javascript($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 150
        echo "    <script src =";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/submit_register.js"), "html", null, true);
        echo "></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 150,  322 => 149,  308 => 145,  286 => 126,  274 => 117,  262 => 108,  250 => 99,  238 => 90,  226 => 81,  214 => 72,  201 => 62,  189 => 53,  176 => 43,  165 => 35,  160 => 33,  156 => 32,  143 => 22,  132 => 13,  123 => 12,  112 => 10,  103 => 9,  89 => 6,  80 => 5,  69 => 3,  60 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template_loader.html.twig' %}
\t{% block title %}
        Inscription | Gestion Stages
    {% endblock %}
\t{% block script_head %}
        <link href=\"{{ asset('css/inscription.css') }}\"/>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    {% endblock %}
\t{% block body_class %}
        uk-margin-large
    {% endblock %}
\t{% block body %}
<div>
    <header class=\"uk-container uk-margin-large-top uk-text-center\">
        <h1>Inscription</h1>
    </header>

    <div class=\"\">
        <div id=\"verif\"
             class=\"alert alert-danger\"
             role=\"alert\">
            {{ errorCaptcha }}
        </div>
    </div>


    <nav></nav>
    <main class=\"uk-height-1-1\">
        <div class=\"uk-margin-medium-top uk-align-center\"
             style=\"width: 250px;\">

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
                                            uk-icon=\"icon: user\">
                                    </span>
                    {{ form_widget(form.mail) }}
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

            <div class=\"g-recaptcha\"
                 data-sitekey=\"6LeL0poUAAAAAEMkl0PbqxPFzx4fhKxkuXd3KVs9\"></div>

            <div class=\"uk-margin\">
                <button type=\"submit\"
                        class=\"uk-width-1-1 uk-button uk-button-primary uk-button-large\">Inscription
                </button>
            </div>
            <div class=\"uk-text-small\">
                <a id=\"forgot-password\"
                   class=\"uk-float-right uk-link uk-link-muted\"
                   href=\"/\">Se connecter
                </a>
            </div>
            
            {{ form_end(form) }}
        </div>
    </main>
    {% endblock %}
    {% block javascript %}
    <script src ={{ asset('js/submit_register.js') }}></script>
    {% endblock %}
", "index/inscription.html.twig", "/var/www/gestionStage/app/Resources/views/index/inscription.html.twig");
    }
}
