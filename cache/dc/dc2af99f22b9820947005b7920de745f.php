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

/* display-form-delete.twig */
class __TwigTemplate_1c86fe61bfc7a5069e2755dc08a57e18 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "display-form-delete.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "display-form-delete.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        echo __("Delete this Display?");
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
        echo ", \$(\"#displayDeleteForm\").submit()
";
    }

    // line 21
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"displayDeleteForm\" class=\"XiboForm form-horizontal\" method=\"delete\" action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "displayId", [], "any", false, false, false, 24)]), "html", null, true);
        echo "\">
                ";
        // line 25
        ob_start(function () { return ''; });
        echo __("Are you sure you want to delete this display? This cannot be undone");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 26
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null)], 26, $context, $this->getSourceContext());
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
        return "display-form-delete.twig";
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
        return array (  91 => 26,  87 => 25,  83 => 24,  79 => 22,  75 => 21,  69 => 18,  64 => 17,  60 => 16,  55 => 13,  51 => 12,  46 => 9,  44 => 10,  37 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "display-form-delete.twig", "/var/www/html/cms_ubi/views/display-form-delete.twig");
    }
}
