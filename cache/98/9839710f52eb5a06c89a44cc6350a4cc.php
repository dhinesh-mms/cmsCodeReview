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

/* statistics-form-export.twig */
class __TwigTemplate_30853ae707351c68b29eb552dcc71933 extends Template
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
            'callBack' => [$this, 'block_callBack'],
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "statistics-form-export.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "statistics-form-export.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        echo __("Export Statistics");
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
        echo ", statsExportFormSubmit()
";
    }

    // line 21
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "statsExportFormSelect";
    }

    // line 23
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"statisticsExportForm\" class=\"XiboManualForm form-horizontal\" method=\"get\" action=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("stats.export"), "html", null, true);
        echo "\">
                ";
        // line 27
        ob_start(function () { return ''; });
        echo __("From Date");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 28
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_date", ["fromDt", ($context["title"] ?? null)], 28, $context, $this->getSourceContext());
        echo "

                ";
        // line 30
        ob_start(function () { return ''; });
        echo __("To Date");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 31
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_date", ["toDt", ($context["title"] ?? null)], 31, $context, $this->getSourceContext());
        echo "

                ";
        // line 33
        ob_start(function () { return ''; });
        echo __("Display");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 34
        echo "                ";
        $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.search")], ["name" => "data-search-term", "value" => "display"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "displayId"], ["name" => "data-text-property", "value" => "display"]];
        // line 45
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["displayId", "single", ($context["title"] ?? null), "", null, "displayId", "display", "", "pagedSelect", "", "d", "", ($context["attributes"] ?? null)], 45, $context, $this->getSourceContext());
        echo "

                ";
        // line 47
        ob_start(function () { return ''; });
        echo __("Output dates as UTC? Leave unchecked for local CMS time.");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["isOutputUtc", ($context["title"] ?? null), true], 48, $context, $this->getSourceContext());
        echo "

                <div id=\"totalStat\"></div>
                <div class=\"loading-overlay\" style=\"display: none\">
                    <i class=\"fa fa-spinner fa-spin loading-icon\"></i>
                </div>
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
        return "statistics-form-export.twig";
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
        return array (  132 => 48,  128 => 47,  122 => 45,  119 => 34,  115 => 33,  109 => 31,  105 => 30,  99 => 28,  95 => 27,  91 => 26,  87 => 24,  83 => 23,  76 => 21,  70 => 18,  65 => 17,  61 => 16,  56 => 13,  52 => 12,  47 => 9,  45 => 10,  38 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "statistics-form-export.twig", "/var/www/html/cms_ubi/views/statistics-form-export.twig");
    }
}
