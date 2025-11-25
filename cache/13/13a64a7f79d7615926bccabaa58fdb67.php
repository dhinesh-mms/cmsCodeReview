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

/* layout-form-checkout.twig */
class __TwigTemplate_f2f0bc19fbb73aa5890eaf49955e6f13 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "layout-form-checkout.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "layout-form-checkout.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        $context["layout"] = twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layout", [], "any", false, false, false, 13);
        // line 14
        echo "    ";
        /* xgettext:no-php-format */        echo strtr(__("Checkout %layout%"), array("%layout%" => ($context["layout"] ?? null), ));
    }

    // line 17
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    ";
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 19
        echo __("Checkout");
        echo ", \$(\"#layoutCheckoutForm\").submit()
";
    }

    // line 22
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"layoutCheckoutForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.checkout", ["id" => twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 25)]), "html", null, true);
        echo "\">
                ";
        // line 26
        ob_start(function () { return ''; });
        echo __("Are you sure you want to checkout this Layout? It will be put in a Draft state so you can make edits.");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        echo "\t\t\t\t";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null)], 27, $context, $this->getSourceContext());
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
        return "layout-form-checkout.twig";
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
        return array (  94 => 27,  90 => 26,  86 => 25,  82 => 23,  78 => 22,  72 => 19,  67 => 18,  63 => 17,  58 => 14,  55 => 13,  51 => 12,  46 => 9,  44 => 10,  37 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-form-checkout.twig", "/var/www/html/cms_ubi/views/layout-form-checkout.twig");
    }
}
