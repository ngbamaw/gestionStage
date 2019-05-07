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

/* index/inscription_professeur.html.twig */
class __TwigTemplate_917d5e28529d7209ab77966b7dc20404f9096f93dbc0bc75ccf74ef74db4b142 extends \Twig\Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "template_loader.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("template_loader.html.twig", "index/inscription_professeur.html.twig", 1);
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
        echo "<main class=\"uk-height-1-1\">
    <div class=\"uk-margin-medium-top uk-align-center\" style=\"width: 250px;\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "error"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "            <div class=\"flash-error\">
                ";
            // line 17
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "uk-text-center uk-padding-small"]]);
        echo "

        <div class=\"uk-margin\">
            <div class=\"uk-inline\">
                <span
                        class=\"uk-form-icon\"
                        uk-icon=\"icon: user\">
                </span>
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", false, false, false, 29), 'widget');
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
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", false, false, false, 38), 'widget');
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
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mail", [], "any", false, false, false, 47), 'widget');
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
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phoneNumber", [], "any", false, false, false, 56), 'widget');
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
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 65), "first", [], "any", false, false, false, 65), 'widget');
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
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 74), "second", [], "any", false, false, false, 74), 'widget');
        echo "
            </div>
        </div>
        <div class=\"g-recaptcha\" data-sitekey=\"6LeL0poUAAAAAEMkl0PbqxPFzx4fhKxkuXd3KVs9\"></div>

        <div class=\"uk-margin\">
            <button type=\"submit\"
                    class=\"uk-width-1-1 uk-button uk-button-primary uk-button-large\">Inscription</button>
        </div>
        ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
</main>
    ";
    }

    public function getTemplateName()
    {
        return "index/inscription_professeur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 83,  173 => 74,  161 => 65,  149 => 56,  137 => 47,  125 => 38,  113 => 29,  102 => 21,  97 => 20,  88 => 17,  85 => 16,  81 => 15,  77 => 13,  74 => 12,  69 => 10,  66 => 9,  58 => 6,  55 => 5,  50 => 3,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index/inscription_professeur.html.twig", "/home/ngbamaw/trunk/app/Resources/views/index/inscription_professeur.html.twig");
    }
}
