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

/* content/validation_etudiant.html.twig */
class __TwigTemplate_9771a8989498bd538304d65ac3948cf96c132b48d29905908f5c96313eacd1f8 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("template_loader.html.twig", "content/validation_etudiant.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        // line 4
        echo "    Valider compte | Gestion Stages
";
    }

    // line 7
    public function block_body_class($context, array $blocks = [])
    {
        // line 8
        echo "    uk-margin-large
";
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "error"], "method", false, false, false, 19));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "uk-text-center uk-padding-small"]]);
        echo "
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "idOption", [], "any", false, false, false, 26), 'widget');
        echo "
            <div class=\"uk-margin\">
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "idPromotion", [], "any", false, false, false, 28), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", false, false, false, 36), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", false, false, false, 46), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 55), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postalCode", [], "any", false, false, false, 64), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "town", [], "any", false, false, false, 73), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birthdate", [], "any", false, false, false, 82), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phoneNumber", [], "any", false, false, false, 91), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mail", [], "any", false, false, false, 100), 'widget');
        echo "
                </div>
            </div>
          
            <div class=\"uk-margin\">
                <button type=\"submit\"
                        class=\"uk-width-1-1 uk-button uk-button-primary uk-button-large\">MODIFIER
                </button>
            </div>
            ";
        // line 109
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        </div>
    </main>
";
    }

    public function getTemplateName()
    {
        return "content/validation_etudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 109,  200 => 100,  188 => 91,  176 => 82,  164 => 73,  152 => 64,  140 => 55,  128 => 46,  115 => 36,  104 => 28,  99 => 26,  95 => 25,  90 => 24,  81 => 21,  78 => 20,  74 => 19,  65 => 12,  62 => 11,  57 => 8,  54 => 7,  49 => 4,  46 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "content/validation_etudiant.html.twig", "/home/ngbamaw/trunk/app/Resources/views/content/validation_etudiant.html.twig");
    }
}
