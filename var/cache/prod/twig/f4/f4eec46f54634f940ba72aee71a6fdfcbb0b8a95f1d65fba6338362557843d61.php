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
class __TwigTemplate_9c11bdba916d5ba242870719187ad1a9cf2ca55ca46ae00c24415ca70e07ec1b extends \Twig\Template
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
        $this->parent = $this->loadTemplate("template_loader.html.twig", "index/inscription.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        // line 3
        echo "        Inscription | Gestion Stages
    ";
    }

    // line 5
    public function block_script_head($context, array $blocks = [])
    {
        // line 6
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/inscription.css"), "html", null, true);
        echo "\"/>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    ";
    }

    // line 9
    public function block_body_class($context, array $blocks = [])
    {
        // line 10
        echo "        uk-margin-large
    ";
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
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
        echo twig_escape_filter($this->env, ($context["errorCaptcha"] ?? null), "html", null, true);
        echo "
        </div>
    </div>


    <nav></nav>
    <main class=\"uk-height-1-1\">
        <div class=\"uk-margin-medium-top uk-align-center\"
             style=\"width: 250px;\">

            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "uk-text-center uk-padding-small"]]);
        echo "
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "idOption", [], "any", false, false, false, 33), 'widget');
        echo "
            <div class=\"uk-margin\">
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "idPromotion", [], "any", false, false, false, 35), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", false, false, false, 43), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", false, false, false, 53), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mail", [], "any", false, false, false, 62), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 72), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postalCode", [], "any", false, false, false, 81), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "town", [], "any", false, false, false, 90), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birthdate", [], "any", false, false, false, 99), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phoneNumber", [], "any", false, false, false, 108), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 117), "first", [], "any", false, false, false, 117), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 126), "second", [], "any", false, false, false, 126), 'widget');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        </div>
    </main>
    ";
    }

    // line 149
    public function block_javascript($context, array $blocks = [])
    {
        // line 150
        echo "    <script src =";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/submit_register.js"), "html", null, true);
        echo "></script>
    ";
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
        return array (  265 => 150,  262 => 149,  254 => 145,  232 => 126,  220 => 117,  208 => 108,  196 => 99,  184 => 90,  172 => 81,  160 => 72,  147 => 62,  135 => 53,  122 => 43,  111 => 35,  106 => 33,  102 => 32,  89 => 22,  78 => 13,  75 => 12,  70 => 10,  67 => 9,  59 => 6,  56 => 5,  51 => 3,  48 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index/inscription.html.twig", "/home/ngbamaw/trunk/app/Resources/views/index/inscription.html.twig");
    }
}
