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

/* display-form-authorise.twig */
class __TwigTemplate_4213935af467207c2c0a29636a542181 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'formTitle' => [$this, 'block_formTitle'],
            'formButtons' => [$this, 'block_formButtons'],
            'formHtml' => [$this, 'block_formHtml'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 9
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "display-form-authorise.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "display-form-authorise.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        echo __("Toggle Authorise");
    }

    // line 16
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    ";
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 18
        echo __("Yes");
        echo ", \$(\"#displayAuthoriseForm\").submit()
";
    }

    // line 21
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"displayAuthoriseForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.authorise", ["id" => twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "displayId", [], "any", false, false, false, 24)]), "html", null, true);
        echo "\">
                ";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "licensed", [], "any", false, false, false, 25) == 1)) {
            // line 26
            echo "                    ";
            ob_start(function () { return ''; });
            echo __("Are you sure you want to de-authorise this Display?");
            $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 27
            echo "                ";
        } else {
            // line 28
            echo "                    ";
            ob_start(function () { return ''; });
            echo __("Are you sure you want to authorise this Display?");
            $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 29
            echo "                ";
        }
        // line 30
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null)], 30, $context, $this->getSourceContext());
        echo "
            </form>
        </div>
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "display-form-authorise.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  105 => 30,  102 => 29,  97 => 28,  94 => 27,  89 => 26,  87 => 25,  83 => 24,  79 => 22,  75 => 21,  69 => 18,  64 => 17,  60 => 16,  55 => 13,  51 => 12,  46 => 9,  44 => 10,  37 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "display-form-authorise.twig", "/var/www/html/cms_ubi/views/display-form-authorise.twig");
    }
}
