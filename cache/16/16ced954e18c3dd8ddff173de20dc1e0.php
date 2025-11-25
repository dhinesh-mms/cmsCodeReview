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

/* display-form-defaultlayout.twig */
class __TwigTemplate_f26e2e7abb6d8e17c1ce492607f0f432 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "display-form-defaultlayout.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "display-form-defaultlayout.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        echo __("Set Default Layout");
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
        echo __("Save");
        echo ", \$(\"#displayDefaultLayoutForm\").submit()
";
    }

    // line 21
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"displayDefaultLayoutForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.defaultlayout", ["id" => twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "displayId", [], "any", false, false, false, 24)]), "html", null, true);
        echo "\">
                ";
        // line 25
        $context["attributes"] = [["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.search")], ["name" => "data-search-term", "value" => "layout"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "layoutId"], ["name" => "data-text-property", "value" => "layout"], ["name" => "data-filter-options", "value" => "{\"retired\":\"0\"}"]];
        // line 33
        echo "
                ";
        // line 34
        ob_start(function () { return ''; });
        echo __("Default Layout");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 35
        echo "                ";
        ob_start(function () { return ''; });
        echo __("The Default Layout to Display where there is no other content.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 36
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["layoutId", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "defaultLayoutId", [], "any", false, false, false, 36), ($context["layouts"] ?? null), "layoutId", "layout", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 36, $context, $this->getSourceContext());
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
        return "display-form-defaultlayout.twig";
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
        return array (  101 => 36,  96 => 35,  92 => 34,  89 => 33,  87 => 25,  83 => 24,  79 => 22,  75 => 21,  69 => 18,  64 => 17,  60 => 16,  55 => 13,  51 => 12,  46 => 9,  44 => 10,  37 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "display-form-defaultlayout.twig", "/var/www/html/cms_ubi/views/display-form-defaultlayout.twig");
    }
}
