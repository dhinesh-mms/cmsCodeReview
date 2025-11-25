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

/* library-form-edit.twig */
class __TwigTemplate_80027e8a8eada52655cd9ff557e2e1ff extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "library-form-edit.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "library-form-edit.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        echo __("Edit Media");
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
        echo ", \$(\"#mediaEditForm\").submit()
";
    }

    // line 21
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "mediaEditFormOpen";
    }

    // line 23
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"mediaEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "mediaId", [], "any", false, false, false, 26)]), "html", null, true);
        echo "\" data-media-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "mediaId", [], "any", false, false, false, 26), "html", null, true);
        echo "\" data-valid-extensions=\"";
        echo twig_escape_filter($this->env, ($context["validExtensions"] ?? null), "html", null, true);
        echo "\" data-gettag=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.getByName"), "html", null, true);
        echo "\" data-folder-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "folderId", [], "any", false, false, false, 26), "html", null, true);
        echo "\">
                ";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "mediaType", [], "any", false, false, false, 27) != "font")) {
            // line 28
            echo "
                    <div class=\"form-group row\">
                        <label class=\"col-sm-2 control-label\">";
            // line 30
            echo __("Current Folder");
            echo "</label>
                        <div class=\"col-sm-10\" style=\"padding-top: 7px\">
                            <span id=\"originalFormFolder\"></span>
                        </div>
                    </div>

                    <div class=\"form-group row\">
                        <label class=\"col-sm-2 control-label\">";
            // line 37
            echo __("Move to Selected Folder:");
            echo "</label>
                        <div class=\"col-sm-10\">
                            <button type=\"button\" class=\"btn btn-info\" id=\"select-folder-button\" data-toggle=\"modal\" data-target=\"#folder-tree-form-modal\">";
            // line 39
            echo __("Select Folder");
            echo "</button>
                            <span id=\"selectedFormFolder\"></span>
                        </div>
                    </div>

                    ";
            // line 44
            ob_start(function () { return ''; });
            echo __("Name");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 45
            echo "                    ";
            ob_start(function () { return ''; });
            echo __("The Name of this item - Leave blank to use the file name");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 46
            echo "                    ";
            echo twig_call_macro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "name", [], "any", false, false, false, 46), ($context["helpText"] ?? null)], 46, $context, $this->getSourceContext());
            echo "

                    ";
            // line 48
            ob_start(function () { return ''; });
            echo __("Duration");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 49
            echo "                    ";
            ob_start(function () { return ''; });
            echo __("The duration in seconds this item should be displayed");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 50
            echo "                    ";
            echo twig_call_macro($macros["forms"], "macro_number", ["duration", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "duration", [], "any", false, false, false, 50), ($context["helpText"] ?? null)], 50, $context, $this->getSourceContext());
            echo "

                    ";
            // line 52
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 52)) {
                // line 53
                echo "                        ";
                ob_start(function () { return ''; });
                echo __("Tags");
                $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 54
                echo "                        ";
                ob_start(function () { return ''; });
                echo __("Tags for this Media - Comma separated string of Tags or Tag|Value format. If you choose a Tag that has associated values, they will be shown for selection below.");
                $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 55
                echo "                        ";
                echo twig_call_macro($macros["forms"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "getTagString", [], "method", false, false, false, 55), ($context["helpText"] ?? null), "tags-with-value"], 55, $context, $this->getSourceContext());
                echo "

                        <p id=\"loadingValues\" style=\"margin-left: 17%\"></p>

                        ";
                // line 59
                ob_start(function () { return ''; });
                echo __("Tag value");
                $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 60
                echo "                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["tagValue", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "key", "value"], 60, $context, $this->getSourceContext());
                echo "

                        <div id=\"tagValueContainer\">
                            ";
                // line 63
                ob_start(function () { return ''; });
                echo __("Tag value");
                $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 64
                echo "                            ";
                ob_start(function () { return ''; });
                echo __("Please provide the value for this Tag and confirm by pressing enter on your keyboard.");
                $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 65
                echo "                            ";
                echo twig_call_macro($macros["forms"], "macro_input", ["tagValueInput", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 65, $context, $this->getSourceContext());
                echo "
                        </div>

                        <div id=\"tagValueRequired\" class=\"alert alert-info\">
                            <p>";
                // line 69
                echo __("This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field.");
                echo "</p>
                        </div>
                    ";
            }
            // line 72
            echo "
                    ";
            // line 73
            ob_start(function () { return ''; });
            echo __("Expiry date");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 74
            echo "                    ";
            ob_start(function () { return ''; });
            echo __("Select the date and time after which this media should be removed from the CMS - it will be removed from any existing widgets as well");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 75
            echo "                    ";
            echo twig_call_macro($macros["forms"], "macro_dateTime", ["expires", ($context["title"] ?? null), ($context["expiryDate"] ?? null), ($context["helpText"] ?? null)], 75, $context, $this->getSourceContext());
            echo "

                    ";
            // line 77
            ob_start(function () { return ''; });
            echo __("Retire this media?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 78
            echo "                    ";
            ob_start(function () { return ''; });
            echo __("Retired media remains on existing Layouts but is not available to assign to new Layouts.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 79
            echo "                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["retired", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "retired", [], "any", false, false, false, 79), ($context["helpText"] ?? null)], 79, $context, $this->getSourceContext());
            echo "

                    ";
            // line 81
            ob_start(function () { return ''; });
            echo __("Enable Media Stats Collection?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 82
            echo "                    ";
            ob_start(function () { return ''; });
            echo __("Enable the collection of Proof of Play statistics for this Media Item. Ensure that ‘Enable Stats Collection’ is set to ‘On’ in the Display Settings.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 83
            echo "
                    ";
            // line 84
            ob_start(function () { return ''; });
            echo __("Off");
            $context["offOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 85
            echo "                    ";
            ob_start(function () { return ''; });
            echo __("On");
            $context["onOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 86
            echo "                    ";
            ob_start(function () { return ''; });
            echo __("Inherit");
            $context["inheritOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 87
            echo "                    ";
            $context["options"] = [["id" => "Off", "value" =>             // line 88
($context["offOption"] ?? null)], ["id" => "On", "value" =>             // line 89
($context["onOption"] ?? null)], ["id" => "Inherit", "value" =>             // line 90
($context["inheritOption"] ?? null)]];
            // line 92
            echo "                    ";
            echo twig_call_macro($macros["forms"], "macro_dropdown", ["enableStat", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "enableStat", [], "any", false, false, false, 92), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 92, $context, $this->getSourceContext());
            echo "

                    ";
            // line 94
            ob_start(function () { return ''; });
            echo __("Orientation");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 95
            echo "                    ";
            ob_start(function () { return ''; });
            echo __("Set intended orientation for this Media, this is for filtering purpose only.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 96
            echo "                    ";
            $context["option1"] = __("Landscape");
            // line 97
            echo "                    ";
            $context["option2"] = __("Portrait");
            // line 98
            echo "                    ";
            $context["values"] = [["id" => "landscape", "value" => ($context["option1"] ?? null)], ["id" => "portrait", "value" => ($context["option2"] ?? null)]];
            // line 99
            echo "                    ";
            echo twig_call_macro($macros["forms"], "macro_dropdown", ["orientation", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "orientation", [], "any", false, false, false, 99), ($context["values"] ?? null), "id", "value", ($context["helpText"] ?? null)], 99, $context, $this->getSourceContext());
            echo "

                    ";
            // line 101
            ob_start(function () { return ''; });
            echo __("Update this media in all layouts it is assigned to?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 102
            echo "                    ";
            ob_start(function () { return ''; });
            echo __("Note: It will only be updated in layouts you have permission to edit.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 103
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "LIBRARY_MEDIA_UPDATEINALL_CHECKB", [], "any", false, false, false, 103) == 1)) {
                // line 104
                echo "                        ";
                $context["checked"] = 1;
                // line 105
                echo "                    ";
            }
            // line 106
            echo "                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["updateInLayouts", ($context["title"] ?? null), ($context["checked"] ?? null), ($context["helpText"] ?? null)], 106, $context, $this->getSourceContext());
            echo "

                    ";
            // line 108
            echo twig_call_macro($macros["forms"], "macro_hidden", ["folderId", twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "folderId", [], "any", false, false, false, 108)], 108, $context, $this->getSourceContext());
            echo "
                ";
        } else {
            // line 110
            echo "                    ";
            ob_start(function () { return ''; });
            echo __("Sorry, Fonts do not have any editable properties.");
            $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 111
            echo "                    ";
            echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null)], 111, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 113
        echo "            </form>
        </div>
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "library-form-edit.twig";
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
        return array (  351 => 113,  345 => 111,  340 => 110,  335 => 108,  329 => 106,  326 => 105,  323 => 104,  320 => 103,  315 => 102,  311 => 101,  305 => 99,  302 => 98,  299 => 97,  296 => 96,  291 => 95,  287 => 94,  281 => 92,  279 => 90,  278 => 89,  277 => 88,  275 => 87,  270 => 86,  265 => 85,  261 => 84,  258 => 83,  253 => 82,  249 => 81,  243 => 79,  238 => 78,  234 => 77,  228 => 75,  223 => 74,  219 => 73,  216 => 72,  210 => 69,  202 => 65,  197 => 64,  193 => 63,  186 => 60,  182 => 59,  174 => 55,  169 => 54,  164 => 53,  162 => 52,  156 => 50,  151 => 49,  147 => 48,  141 => 46,  136 => 45,  132 => 44,  124 => 39,  119 => 37,  109 => 30,  105 => 28,  103 => 27,  91 => 26,  87 => 24,  83 => 23,  76 => 21,  70 => 18,  65 => 17,  61 => 16,  56 => 13,  52 => 12,  47 => 9,  45 => 10,  38 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "library-form-edit.twig", "/var/www/html/cms_ubi/views/library-form-edit.twig");
    }
}
