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

/* daypart-form-add.twig */
class __TwigTemplate_2f719a29f8926301b40b12784be10c24 extends Template
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
            'extra' => [$this, 'block_extra'],
            'callBack' => [$this, 'block_callBack'],
            'formHtml' => [$this, 'block_formHtml'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "daypart-form-add.twig", 9)->unwrap();
        // line 8
        $this->parent = $this->loadTemplate("form-base.twig", "daypart-form-add.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        echo __("Add Daypart");
    }

    // line 15
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    ";
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 17
        echo __("Save");
        echo ", \$(\"#dayPartAddForm\").submit()
";
    }

    // line 20
    public function block_extra($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo json_encode(($context["extra"] ?? null));
    }

    // line 22
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "dayPartFormOpen";
    }

    // line 24
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 28
        echo __("General");
        echo "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#description\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 29
        echo __("Description");
        echo "</span></a></li>
                <!-- <li class=\"nav-item\"><a class=\"nav-link\" href=\"#exceptions\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 30
        echo __("Exceptions");
        echo "</span></a></li> -->
            </ul>
            <form id=\"dayPartAddForm\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("daypart.add"), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 35
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 36
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The Name for this Daypart");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 37
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "required"], 37, $context, $this->getSourceContext());
        echo "

                        ";
        // line 39
        ob_start(function () { return ''; });
        echo __("Retired");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 40
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Retire? It will no longer be visible when scheduling");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["retired", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["dayPart"] ?? null), "isRetired", [], "any", false, false, false, 41), ($context["helpText"] ?? null)], 41, $context, $this->getSourceContext());
        echo "

                        ";
        // line 43
        ob_start(function () { return ''; });
        echo __("Start Time");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Enter the start time for this daypart");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_time", ["startTime", ($context["title"] ?? null), "00:00", ($context["helpText"] ?? null)], 45, $context, $this->getSourceContext());
        echo "

                        ";
        // line 47
        ob_start(function () { return ''; });
        echo __("End Time");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Enter the end time for this daypart. If the end time is before the start time, then the daypart will cross midnight.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_time", ["endTime", ($context["title"] ?? null), "00:00", ($context["helpText"] ?? null)], 49, $context, $this->getSourceContext());
        echo "

                    </div>
                    <div class=\"tab-pane\" id=\"description\">
                        ";
        // line 53
        ob_start(function () { return ''; });
        echo __("Description");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("A Description of Daypart");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_textarea", ["description", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 55, $context, $this->getSourceContext());
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"exceptions\">
                        ";
        // line 58
        ob_start(function () { return ''; });
        echo __("If there are any exceptions enter them below by selecting the Day from the list and entering a start/end time.");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["title"] ?? null)], 59, $context, $this->getSourceContext());
        echo "
                        <div id=\"dayPartExceptions\">

                        </div>
                    </div>
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
        return "daypart-form-add.twig";
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
        return array (  201 => 59,  197 => 58,  190 => 55,  185 => 54,  181 => 53,  173 => 49,  168 => 48,  164 => 47,  158 => 45,  153 => 44,  149 => 43,  143 => 41,  138 => 40,  134 => 39,  128 => 37,  123 => 36,  119 => 35,  113 => 32,  108 => 30,  104 => 29,  100 => 28,  95 => 25,  91 => 24,  84 => 22,  77 => 20,  71 => 17,  66 => 16,  62 => 15,  57 => 12,  53 => 11,  48 => 8,  46 => 9,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "daypart-form-add.twig", "/var/www/html/cms_ubi/views/daypart-form-add.twig");
    }
}
