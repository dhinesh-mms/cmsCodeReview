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

/* displaygroup-form-edit.twig */
class __TwigTemplate_2858f61fa716b181ae0f88cfa4fea058 extends Template
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
            'formFieldActions' => [$this, 'block_formFieldActions'],
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "displaygroup-form-edit.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "displaygroup-form-edit.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        echo __("Edit Display Group");
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
        echo ", \$(\"#displayGroupEditForm\").submit()
";
    }

    // line 21
    public function block_formFieldActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    [{
    \"field\": \"isDynamic\",
    \"trigger\": \"init\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".dynamic-fields\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"isDynamic\",
    \"trigger\": \"change\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".dynamic-fields\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"isDynamic\",
    \"trigger\": \"init\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".dynamic-fields\": { \"display\": \"\" }
    }
    },{
    \"field\": \"isDynamic\",
    \"trigger\": \"change\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".dynamic-fields\": { \"display\": \"\" }
    }
    }]
";
    }

    // line 57
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "displayGroupFormOpen";
    }

    // line 59
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 63
        echo __("General");
        echo "</span></a></li>
                <!-- <li class=\"nav-item\"><a class=\"nav-link\" href=\"#reference\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 64
        echo __("Reference");
        echo "</span></a></li> -->
            </ul>
            <form id=\"displayGroupEditForm\" class=\"XiboForm form-horizontal displayGroupForm\" method=\"put\" action=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["displayGroup"] ?? null), "displayGroupId", [], "any", false, false, false, 66)]), "html", null, true);
        echo "\" data-gettag=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.getByName"), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">

                        ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 70)) {
            // line 71
            echo "                           <!-- <div class=\"form-group row\">
                                <label class=\"col-sm-2 control-label\">";
            // line 72
            echo __("Current Folder");
            echo "</label>
                                <div class=\"col-sm-10\" style=\"padding-top: 7px\">
                                    <span id=\"originalFormFolder\"></span>
                                </div>
                            </div>

                            <div class=\"form-group row\">
                                <label class=\"col-sm-2 control-label\">";
            // line 79
            echo __("Move to Selected Folder:");
            echo "</label>
                                <div class=\"col-sm-10\">
                                    <button type=\"button\" class=\"btn btn-info\" id=\"select-folder-button\" data-toggle=\"modal\" data-target=\"#folder-tree-form-modal\">";
            // line 81
            echo __("Select Folder");
            echo "</button>
                                    <span id=\"selectedFormFolder\"></span>
                                </div>
                            </div> -->
                            ";
            // line 85
            echo twig_call_macro($macros["forms"], "macro_hidden", ["folderId", twig_get_attribute($this->env, $this->source, ($context["displayGroup"] ?? null), "folderId", [], "any", false, false, false, 85)], 85, $context, $this->getSourceContext());
            echo "
                        ";
        }
        // line 87
        echo "
                        ";
        // line 88
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 89
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The Name for this Display Group");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 90
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["displayGroup", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayGroup"] ?? null), "displayGroup", [], "any", false, false, false, 90), ($context["helpText"] ?? null)], 90, $context, $this->getSourceContext());
        echo "

                        ";
        // line 92
        ob_start(function () { return ''; });
        echo __("Description");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 93
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("A short description of this Display Group");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 94
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["description", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayGroup"] ?? null), "description", [], "any", false, false, false, 94), ($context["helpText"] ?? null)], 94, $context, $this->getSourceContext());
        echo "


                        ";
        // line 97
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 97)) {
            // line 98
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Tags");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 99
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Tags for this Display Group - Comma separated string of Tags or Tag|Value format. If you choose a Tag that has associated values, they will be shown for selection below.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 100
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayGroup"] ?? null), "getTagString", [], "method", false, false, false, 100), ($context["helpText"] ?? null), "tags-with-value"], 100, $context, $this->getSourceContext());
            echo "

                            <p id=\"loadingValues\" style=\"margin-left: 17%\"></p>

                            ";
            // line 104
            ob_start(function () { return ''; });
            echo __("Tag value");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 105
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_dropdown", ["tagValue", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "key", "value"], 105, $context, $this->getSourceContext());
            echo "

                            <div id=\"tagValueContainer\">
                                ";
            // line 108
            ob_start(function () { return ''; });
            echo __("Tag value");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 109
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("Please provide the value for this Tag and confirm by pressing enter on your keyboard.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 110
            echo "                                ";
            echo twig_call_macro($macros["forms"], "macro_input", ["tagValueInput", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 110, $context, $this->getSourceContext());
            echo "
                            </div>

                            <div id=\"tagValueRequired\" class=\"alert alert-info\">
                                <p>";
            // line 114
            echo __("This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field.");
            echo "</p>
                            </div>
                        ";
        }
        // line 117
        echo "
                        <!-- ";
        // line 118
        ob_start(function () { return ''; });
        echo __("Dynamic Group?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 119
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Are the members of this group dynamic?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 120
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["isDynamic", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayGroup"] ?? null), "isDynamic", [], "any", false, false, false, 120), ($context["helpText"] ?? null)], 120, $context, $this->getSourceContext());
        echo " -->

                        <div class=\"widget dynamic-fields\">
                            <div class=\"widget-title\">";
        // line 123
        echo __("Displays");
        echo "</div>
                            <div class=\"widget-body\">
                                <div class=\"FilterDiv card-body\" id=\"Filter\">
                                    ";
        // line 126
        ob_start(function () { return ''; });
        echo __("Criteria");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 127
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("A comma separated set of regular expressions run against the Display name to determine membership.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 128
        echo "                                    ";
        echo twig_call_macro($macros["forms"], "macro_inputWithLogicalOperator", ["dynamicCriteria", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayGroup"] ?? null), "dynamicCriteria", [], "any", false, false, false, 128), ($context["helpText"] ?? null), "dynamic-fields", "", "", twig_get_attribute($this->env, $this->source, ($context["displayGroup"] ?? null), "dynamicCriteriaLogicalOperator", [], "any", false, false, false, 128)], 128, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 130
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 130)) {
            // line 131
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("Criteria Tags");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 132
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("Exact match?");
            $context["exactTagTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 133
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("When filtering by multiple Tags, which logical operator should be used?");
            $context["logicalOperatorTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 134
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("A comma separated set of tags run against the Display tag to determine membership.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 135
            echo "                                        ";
            echo twig_call_macro($macros["forms"], "macro_inputWithTags", ["dynamicCriteriaTags", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayGroup"] ?? null), "dynamicCriteriaTags", [], "any", false, false, false, 135), ($context["helpText"] ?? null), "dynamic-fields", null, null, "exactTags", ($context["exactTagTitle"] ?? null), ($context["logicalOperatorTitle"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayGroup"] ?? null), "dynamicCriteriaExactTags", [], "any", false, false, false, 135), twig_get_attribute($this->env, $this->source, ($context["displayGroup"] ?? null), "dynamicCriteriaTagsLogicalOperator", [], "any", false, false, false, 135)], 135, $context, $this->getSourceContext());
            echo "
                                    ";
        }
        // line 137
        echo "                                    ";
        echo twig_call_macro($macros["forms"], "macro_hidden", ["useRegexForName", 1], 137, $context, $this->getSourceContext());
        echo "
                                </div>

                                <div class=\"XiboData card pt-3\">
                                    <table id=\"displayGroupDisplays\" class=\"table table-striped\">
                                        <thead>
                                        <tr>
                                            <th>";
        // line 144
        echo __("ID");
        echo "</th>
                                            <th>";
        // line 145
        echo __("Display");
        echo "</th>
                                            <th>";
        // line 146
        echo __("Tags");
        echo "</th>
                                            <th>";
        // line 147
        echo __("Status");
        echo "</th>
                                            <th>";
        // line 148
        echo __("Licence");
        echo "</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"reference\">
                        ";
        // line 160
        ob_start(function () { return ''; });
        echo __("Reference 1");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 161
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["ref1", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayGroup"] ?? null), "ref1", [], "any", false, false, false, 161)], 161, $context, $this->getSourceContext());
        echo "

                        ";
        // line 163
        ob_start(function () { return ''; });
        echo __("Reference 2");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 164
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["ref2", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayGroup"] ?? null), "ref2", [], "any", false, false, false, 164)], 164, $context, $this->getSourceContext());
        echo "

                        ";
        // line 166
        ob_start(function () { return ''; });
        echo __("Reference 3");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 167
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["ref3", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayGroup"] ?? null), "ref3", [], "any", false, false, false, 167)], 167, $context, $this->getSourceContext());
        echo "

                        ";
        // line 169
        ob_start(function () { return ''; });
        echo __("Reference 4");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 170
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["ref4", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayGroup"] ?? null), "ref4", [], "any", false, false, false, 170)], 170, $context, $this->getSourceContext());
        echo "

                        ";
        // line 172
        ob_start(function () { return ''; });
        echo __("Reference 5");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 173
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["ref5", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayGroup"] ?? null), "ref5", [], "any", false, false, false, 173)], 173, $context, $this->getSourceContext());
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
        return "displaygroup-form-edit.twig";
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
        return array (  426 => 173,  422 => 172,  416 => 170,  412 => 169,  406 => 167,  402 => 166,  396 => 164,  392 => 163,  386 => 161,  382 => 160,  367 => 148,  363 => 147,  359 => 146,  355 => 145,  351 => 144,  340 => 137,  334 => 135,  329 => 134,  324 => 133,  319 => 132,  314 => 131,  312 => 130,  306 => 128,  301 => 127,  297 => 126,  291 => 123,  284 => 120,  279 => 119,  275 => 118,  272 => 117,  266 => 114,  258 => 110,  253 => 109,  249 => 108,  242 => 105,  238 => 104,  230 => 100,  225 => 99,  220 => 98,  218 => 97,  211 => 94,  206 => 93,  202 => 92,  196 => 90,  191 => 89,  187 => 88,  184 => 87,  179 => 85,  172 => 81,  167 => 79,  157 => 72,  154 => 71,  152 => 70,  143 => 66,  138 => 64,  134 => 63,  129 => 60,  125 => 59,  118 => 57,  81 => 22,  77 => 21,  71 => 18,  66 => 17,  62 => 16,  57 => 13,  53 => 12,  48 => 9,  46 => 10,  39 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "displaygroup-form-edit.twig", "/var/www/html/cms_ubi/views/displaygroup-form-edit.twig");
    }
}
