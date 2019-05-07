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

/* content/modif_professeur.html.twig */
class __TwigTemplate_25d4a97881dbcb9c8a2773464feaa83b51ce1088247a3e27e929fa3222492d56 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("template_loader.html.twig", "content/modif_professeur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        // line 4
        echo "    Modifier compte | Gestion Stages
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

            <div class=\"uk-margin\">
                <div class=\"uk-inline\">
                <span
                        class=\"uk-form-icon\"
                        uk-icon=\"icon: user\">
                </span>
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", false, false, false, 33), 'widget');
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
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", false, false, false, 42), 'widget');
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
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mail", [], "any", false, false, false, 51), 'widget');
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
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phoneNumber", [], "any", false, false, false, 60), 'widget');
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
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 69), "first", [], "any", false, false, false, 69), 'widget');
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
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 78), "second", [], "any", false, false, false, 78), 'widget');
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
        // line 102
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        </div>
    </main>
";
    }

    public function getTemplateName()
    {
        return "content/modif_professeur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 102,  166 => 78,  154 => 69,  142 => 60,  130 => 51,  118 => 42,  106 => 33,  95 => 25,  90 => 24,  81 => 21,  78 => 20,  74 => 19,  65 => 12,  62 => 11,  57 => 8,  54 => 7,  49 => 4,  46 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "content/modif_professeur.html.twig", "/home/ngbamaw/trunk/app/Resources/views/content/modif_professeur.html.twig");
    }
}
