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

/* layout-form-edit.twig */
class __TwigTemplate_114d98dfbafe71dc8586b887940f3330 extends Template
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
        // line 8
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "layout-form-edit.twig", 9)->unwrap();
        // line 8
        $this->parent = $this->loadTemplate("form-base.twig", "layout-form-edit.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        echo __("Edit Layout");
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
        echo ", \$(\"#layoutEditForm\").submit()
";
    }

    // line 20
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 24
        echo __("General");
        echo "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#description\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 25
        echo __("Description");
        echo "</span></a></li>
            </ul>
            <form id=\"layoutEditForm\"
                  class=\"XiboForm form-horizontal\"
                  method=\"put\"
                  action=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 30)]), "html", null, true);
        echo "\"
                  data-gettag=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.getByName"), "html", null, true);
        echo "\"
                  data-submit-call-back=\"layoutEditFormSaved\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 35)) {
            // line 36
            echo "                        <!-- <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\">";
            // line 37
            echo __("Current Folder");
            echo "</label>
                            <div class=\"col-sm-10\" style=\"padding-top: 7px\">
                                <span id=\"originalFormFolder\"></span>
                            </div>
                        </div>

                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\">";
            // line 44
            echo __("Move to Selected Folder:");
            echo "</label>
                            <div class=\"col-sm-10\">
                                <button type=\"button\" class=\"btn btn-info\" id=\"select-folder-button\" data-toggle=\"modal\" data-target=\"#folder-tree-form-modal\">";
            // line 46
            echo __("Select Folder");
            echo "</button>
                                <span id=\"selectedFormFolder\"></span>
                            </div>
                        </div> -->
                        ";
            // line 50
            echo twig_call_macro($macros["forms"], "macro_hidden", ["folderId", twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "folderId", [], "any", false, false, false, 50)], 50, $context, $this->getSourceContext());
            echo "
                        ";
        }
        // line 52
        echo "
                        ";
        // line 53
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The Name of the Layout - (1 - 50 characters)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layout", [], "any", false, false, false, 55), ($context["helpText"] ?? null)], 55, $context, $this->getSourceContext());
        echo "

                        ";
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 57)) {
            // line 58
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Tags");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 59
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Tags for this Layout - Comma separated string of Tags or Tag|Value format. If you choose a Tag that has associated values, they will be shown for selection below.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 60
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), ($context["tagString"] ?? null), ($context["helpText"] ?? null), "tags-with-value"], 60, $context, $this->getSourceContext());
            echo "

                            <p id=\"loadingValues\" style=\"margin-left: 17%\"></p>

                            ";
            // line 64
            ob_start(function () { return ''; });
            echo __("Tag value");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 65
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_dropdown", ["tagValue", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "key", "value"], 65, $context, $this->getSourceContext());
            echo "

                            <div id=\"tagValueContainer\">
                                ";
            // line 68
            ob_start(function () { return ''; });
            echo __("Tag value");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 69
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("Please provide the value for this Tag and confirm by pressing enter on your keyboard.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 70
            echo "                                ";
            echo twig_call_macro($macros["forms"], "macro_input", ["tagValueInput", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 70, $context, $this->getSourceContext());
            echo "
                            </div>

                            <div id=\"tagValueRequired\" class=\"alert alert-info\">
                                <p>";
            // line 74
            echo __("This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field.");
            echo "</p>
                            </div>
                        ";
        }
        // line 77
        echo "
                        ";
        // line 78
        ob_start(function () { return ''; });
        echo __("Code Identifier");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 79
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Enter a string to be used as the Code to identify this Layout when used with Interactive Actions.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["code", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "code", [], "any", false, false, false, 80), ($context["helpText"] ?? null)], 80, $context, $this->getSourceContext());
        echo "

                        ";
        // line 82
        ob_start(function () { return ''; });
        echo __("Retired");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Retire this layout or not? It will no longer be visible in lists");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["retired", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "retired", [], "any", false, false, false, 84), ($context["helpText"] ?? null), "", "", "", "retired-form"], 84, $context, $this->getSourceContext());
        echo "

                        ";
        // line 86
        ob_start(function () { return ''; });
        echo __("Enable Stats Collection?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 87
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Enable the collection of Proof of Play statistics for this Layout. Ensure that ‘Enable Stats Collection’ is set to ‘On’ in the Display Settings.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 88
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["enableStat", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "enableStat", [], "any", false, false, false, 88), ($context["helpText"] ?? null)], 88, $context, $this->getSourceContext());
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"description\">
                        ";
        // line 91
        ob_start(function () { return ''; });
        echo __("Description");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("An optional description of the Layout. (1 - 250 characters)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 93
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_textarea", ["description", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "description", [], "any", false, false, false, 93), ($context["helpText"] ?? null)], 93, $context, $this->getSourceContext());
        echo "
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
        return "layout-form-edit.twig";
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
        return array (  269 => 93,  264 => 92,  260 => 91,  253 => 88,  248 => 87,  244 => 86,  238 => 84,  233 => 83,  229 => 82,  223 => 80,  218 => 79,  214 => 78,  211 => 77,  205 => 74,  197 => 70,  192 => 69,  188 => 68,  181 => 65,  177 => 64,  169 => 60,  164 => 59,  159 => 58,  157 => 57,  151 => 55,  146 => 54,  142 => 53,  139 => 52,  134 => 50,  127 => 46,  122 => 44,  112 => 37,  109 => 36,  107 => 35,  100 => 31,  96 => 30,  88 => 25,  84 => 24,  79 => 21,  75 => 20,  69 => 17,  64 => 16,  60 => 15,  55 => 12,  51 => 11,  46 => 8,  44 => 9,  37 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-form-edit.twig", "/var/www/html/cms_ubi/views/layout-form-edit.twig");
    }
}
