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

/* displaygroup-form-add.twig */
class __TwigTemplate_04dd163f93306cb2cf8ffc4a61f4d27b extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "displaygroup-form-add.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "displaygroup-form-add.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        echo __("Add Display Group");
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
        echo __("Next");
        echo ", displayGroupAddFormNext()
    ";
        // line 19
        echo __("Save");
        echo ", \$(\"#displayGroupAddForm\").submit();
";
    }

    // line 22
    public function block_formFieldActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
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

    // line 58
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "displayGroupFormOpen";
    }

    // line 60
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 64
        echo __("General");
        echo "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#reference\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 65
        echo __("Reference");
        echo "</span></a></li>
            </ul>
            <form id=\"displayGroupAddForm\" class=\"XiboForm form-horizontal displayGroupForm\" method=\"post\" action=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.add"), "html", null, true);
        echo "\" data-gettag=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.getByName"), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 70)) {
            // line 71
            echo "                            <div class=\"form-group row\">
                                <label class=\"col-sm-2 control-label\">";
            // line 72
            echo __("Folder");
            echo "</label>
                                <div class=\"col-sm-10\">
                                    <button type=\"button\" class=\"btn btn-info\" id=\"select-folder-button\" data-toggle=\"modal\" data-target=\"#folder-tree-form-modal\">";
            // line 74
            echo __("Select Folder");
            echo "</button>
                                    <span id=\"selectedFormFolder\"></span>
                                </div>
                            </div>
                            ";
            // line 78
            echo twig_call_macro($macros["forms"], "macro_hidden", ["folderId"], 78, $context, $this->getSourceContext());
            echo "
                        ";
        }
        // line 80
        echo "
                        ";
        // line 81
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 82
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The Name for this Display Group");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["displayGroup", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 83, $context, $this->getSourceContext());
        echo "

                        ";
        // line 85
        ob_start(function () { return ''; });
        echo __("Description");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 86
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("A short description of this Display Group");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 87
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["description", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 87, $context, $this->getSourceContext());
        echo "

                        ";
        // line 89
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 89)) {
            // line 90
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Tags");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 91
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Tags for this Display Group - Comma separated string of Tags or Tag|Value format. If you choose a Tag that has associated values, they will be shown for selection below.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 92
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "tags-with-value"], 92, $context, $this->getSourceContext());
            echo "

                            <p id=\"loadingValues\" style=\"margin-left: 17%\"></p>

                            ";
            // line 96
            ob_start(function () { return ''; });
            echo __("Tag value");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 97
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_dropdown", ["tagValue", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "key", "value"], 97, $context, $this->getSourceContext());
            echo "

                            <div id=\"tagValueContainer\">
                                ";
            // line 100
            ob_start(function () { return ''; });
            echo __("Tag value");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 101
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("Please provide the value for this Tag and confirm by pressing enter on your keyboard.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 102
            echo "                                ";
            echo twig_call_macro($macros["forms"], "macro_input", ["tagValueInput", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 102, $context, $this->getSourceContext());
            echo "
                            </div>

                            <div id=\"tagValueRequired\" class=\"alert alert-info\">
                                <p>";
            // line 106
            echo __("This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field.");
            echo "</p>
                            </div>
                        ";
        }
        // line 109
        echo "
                        ";
        // line 110
        ob_start(function () { return ''; });
        echo __("Dynamic Group?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 111
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Are the members of this group dynamic?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 112
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["isDynamic", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 112, $context, $this->getSourceContext());
        echo "

                        <div class=\"widget dynamic-fields\">
                            <div class=\"widget-title\">";
        // line 115
        echo __("Displays");
        echo "</div>
                            <div class=\"widget-body\">
                                <div class=\"FilterDiv card-body\" id=\"Filter\">
                                    ";
        // line 118
        ob_start(function () { return ''; });
        echo __("Criteria");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 119
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("A comma separated set of regular expressions run against the Display name to determine membership.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 120
        echo "                                    ";
        echo twig_call_macro($macros["forms"], "macro_inputWithLogicalOperator", ["dynamicCriteria", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "dynamic-fields"], 120, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 122
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 122)) {
            // line 123
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("Criteria Tags");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 124
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("Exact match?");
            $context["exactTagTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 125
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("When filtering by multiple Tags, which logical operator should be used?");
            $context["logicalOperatorTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 126
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("A comma separated set of tags run against the Display tag to determine membership.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 127
            echo "                                        ";
            echo twig_call_macro($macros["forms"], "macro_inputWithTags", ["dynamicCriteriaTags", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "dynamic-fields", null, null, "exactTags", ($context["exactTagTitle"] ?? null), ($context["logicalOperatorTitle"] ?? null)], 127, $context, $this->getSourceContext());
            echo "
                                    ";
        }
        // line 129
        echo "                                    ";
        echo twig_call_macro($macros["forms"], "macro_hidden", ["useRegexForName", 1], 129, $context, $this->getSourceContext());
        echo "
                                </div>

                                <div class=\"XiboData card pt-3\">
                                    <table id=\"displayGroupDisplays\" class=\"table table-striped\">
                                        <thead>
                                        <tr>
                                            <th>";
        // line 136
        echo __("ID");
        echo "</th>
                                            <th>";
        // line 137
        echo __("Display");
        echo "</th>
                                            <th>";
        // line 138
        echo __("Tags");
        echo "</th>
                                            <th>";
        // line 139
        echo __("Status");
        echo "</th>
                                            <th>";
        // line 140
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
        // line 153
        echo twig_call_macro($macros["forms"], "macro_message", [__("Add reference fields if needed")], 153, $context, $this->getSourceContext());
        echo "

                        ";
        // line 155
        ob_start(function () { return ''; });
        echo __("Reference 1");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 156
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["ref1", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayGroup"] ?? null), "ref1", [], "any", false, false, false, 156)], 156, $context, $this->getSourceContext());
        echo "

                        ";
        // line 158
        ob_start(function () { return ''; });
        echo __("Reference 2");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 159
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["ref2", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayGroup"] ?? null), "ref2", [], "any", false, false, false, 159)], 159, $context, $this->getSourceContext());
        echo "

                        ";
        // line 161
        ob_start(function () { return ''; });
        echo __("Reference 3");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 162
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["ref3", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayGroup"] ?? null), "ref3", [], "any", false, false, false, 162)], 162, $context, $this->getSourceContext());
        echo "

                        ";
        // line 164
        ob_start(function () { return ''; });
        echo __("Reference 4");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 165
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["ref4", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayGroup"] ?? null), "ref4", [], "any", false, false, false, 165)], 165, $context, $this->getSourceContext());
        echo "

                        ";
        // line 167
        ob_start(function () { return ''; });
        echo __("Reference 5");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 168
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["ref5", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayGroup"] ?? null), "ref5", [], "any", false, false, false, 168)], 168, $context, $this->getSourceContext());
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
        return "displaygroup-form-add.twig";
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
        return array (  424 => 168,  420 => 167,  414 => 165,  410 => 164,  404 => 162,  400 => 161,  394 => 159,  390 => 158,  384 => 156,  380 => 155,  375 => 153,  359 => 140,  355 => 139,  351 => 138,  347 => 137,  343 => 136,  332 => 129,  326 => 127,  321 => 126,  316 => 125,  311 => 124,  306 => 123,  304 => 122,  298 => 120,  293 => 119,  289 => 118,  283 => 115,  276 => 112,  271 => 111,  267 => 110,  264 => 109,  258 => 106,  250 => 102,  245 => 101,  241 => 100,  234 => 97,  230 => 96,  222 => 92,  217 => 91,  212 => 90,  210 => 89,  204 => 87,  199 => 86,  195 => 85,  189 => 83,  184 => 82,  180 => 81,  177 => 80,  172 => 78,  165 => 74,  160 => 72,  157 => 71,  155 => 70,  147 => 67,  142 => 65,  138 => 64,  133 => 61,  129 => 60,  122 => 58,  85 => 23,  81 => 22,  75 => 19,  71 => 18,  66 => 17,  62 => 16,  57 => 13,  53 => 12,  48 => 9,  46 => 10,  39 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "displaygroup-form-add.twig", "/var/www/html/cms_ubi/views/displaygroup-form-add.twig");
    }
}
