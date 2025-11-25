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

/* display-page.twig */
class __TwigTemplate_49da0283f7e558eb0a47eb85364e92a0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'actionMenu' => [$this, 'block_actionMenu'],
            'pageContent' => [$this, 'block_pageContent'],
            'javaScript' => [$this, 'block_javaScript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "display-page.twig", 9)->unwrap();
        // line 8
        $this->parent = $this->loadTemplate("authed.twig", "display-page.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("Displays"), "html", null, true);
        echo " | ";
    }

    // line 13
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <div class=\"widget-action-menu pull-right\">
        ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displays.add"], "method", false, false, false, 15)) {
            // line 16
            echo "            <!-- <button class=\"btn btn-success XiboFormButton\" title=\"";
            echo __("Add a Display via user_code displayed on the Player screen");
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.addViaCode.form"), "html", null, true);
            echo "\"> <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
            echo __("Add Display (Code)");
            echo "</button> -->
        ";
        }
        // line 18
        echo "        <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
        echo __("Refresh the Table");
        echo "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
    </div>
";
    }

    // line 22
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 24
        echo __("Displays");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"displayView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#filter-general\" role=\"tab\" data-toggle=\"tab\">";
        // line 30
        echo __("General");
        echo "</a></li>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#filter-advanced\" role=\"tab\" data-toggle=\"tab\">";
        // line 31
        echo __("Advanced");
        echo "</a></li>
                        </ul>
                        <form class=\"form-inline\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"filter-general\">
                                    ";
        // line 36
        ob_start(function () { return ''; });
        echo __("ID");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 37
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_number", ["displayId", ($context["title"] ?? null)], 37, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 39
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 40
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_inputNameGrid", ["display", ($context["title"] ?? null)], 40, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 42
        ob_start(function () { return ''; });
        echo __("Status");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("Up to date");
        $context["check"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("Downloading");
        $context["cross"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("Out of date");
        $context["cloud"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        echo "                                    ";
        $context["options"] = [["optionid" => "", "option" => ""], ["optionid" => "1", "option" =>         // line 48
($context["check"] ?? null)], ["optionid" => "2", "option" =>         // line 49
($context["cross"] ?? null)], ["optionid" => "3", "option" =>         // line 50
($context["cloud"] ?? null)]];
        // line 52
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["mediaInventoryStatus", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option"], 52, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 54
        ob_start(function () { return ''; });
        echo __("Logged In?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("Yes");
        $context["yesOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("No");
        $context["noOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        echo "                                    ";
        $context["options"] = [["optionid" => "", "option" => ""], ["optionid" => "1", "option" =>         // line 59
($context["yesOption"] ?? null)], ["optionid" => "0", "option" =>         // line 60
($context["noOption"] ?? null)]];
        // line 62
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["loggedIn", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option"], 62, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 64
        ob_start(function () { return ''; });
        echo __("Authorised?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("Yes");
        $context["yesOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 66
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("No");
        $context["noOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        echo "                                    ";
        $context["options"] = [["optionid" => "", "option" => ""], ["optionid" => "1", "option" =>         // line 69
($context["yesOption"] ?? null)], ["optionid" => "0", "option" =>         // line 70
($context["noOption"] ?? null)]];
        // line 72
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["authorised", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option"], 72, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 74
        ob_start(function () { return ''; });
        echo __("XMR Registered?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("Yes");
        $context["yesOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("No");
        $context["noOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 77
        echo "                                    ";
        $context["options"] = [["optionid" => "", "option" => ""], ["optionid" => 1, "option" =>         // line 79
($context["yesOption"] ?? null)], ["optionid" => 0, "option" =>         // line 80
($context["noOption"] ?? null)]];
        // line 82
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["xmrRegistered", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option"], 82, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 84
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 84)) {
            // line 85
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("Tags");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 86
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("Exact match?");
            $context["exactTagTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 87
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("When filtering by multiple Tags, which logical operator should be used?");
            $context["logicalOperatorTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 88
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("A comma separated list of tags to filter by. Enter a tag|tag value to filter tags with values. Enter --no-tag to filter all items without tags. Enter - before a tag or tag value to exclude from results.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 89
            echo "                                        ";
            echo twig_call_macro($macros["inline"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), null, ($context["helpText"] ?? null), null, null, null, "exactTags", ($context["exactTagTitle"] ?? null), ($context["logicalOperatorTitle"] ?? null)], 89, $context, $this->getSourceContext());
            echo "
                                    ";
        }
        // line 91
        echo "
                                    ";
        // line 92
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displaygroup.view"], "method", false, false, false, 92)) {
            // line 93
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("Display Group");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 94
            echo "                                        ";
            $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.search")], ["name" => "data-filter-options", "value" => "{\"isDisplaySpecific\":0}"], ["name" => "data-search-term", "value" => "displayGroup"], ["name" => "data-id-property", "value" => "displayGroupId"], ["name" => "data-text-property", "value" => "displayGroup"], ["name" => "data-initial-key", "value" => "displayGroupId"]];
            // line 106
            echo "                                        ";
            echo twig_call_macro($macros["inline"], "macro_dropdown", ["displayGroupId", "single", ($context["title"] ?? null), "", null, "displayGroupId", "displayGroup", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 106, $context, $this->getSourceContext());
            echo "
                                    ";
        }
        // line 108
        echo "
                                   <!-- ";
        // line 109
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displayprofile.view"], "method", false, false, false, 109)) {
            // line 110
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("Display Profile");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 111
            echo "                                        ";
            echo twig_call_macro($macros["inline"], "macro_dropdown", ["displayProfileId", "single", ($context["title"] ?? null), "", twig_array_merge([["displayProfileId" => null, "name" => ""]], ($context["displayProfiles"] ?? null)), "displayProfileId", "name"], 111, $context, $this->getSourceContext());
            echo "
                                    ";
        }
        // line 112
        echo " -->

                                    ";
        // line 114
        echo twig_call_macro($macros["inline"], "macro_hidden", ["folderId"], 114, $context, $this->getSourceContext());
        echo "
                                </div>

                                <div class=\"tab-pane\" id=\"filter-advanced\">
                                    ";
        // line 118
        ob_start(function () { return ''; });
        echo __("Last Accessed");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 119
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_date", ["lastAccessed", ($context["title"] ?? null)], 119, $context, $this->getSourceContext());
        echo "

                                  <!--  ";
        // line 121
        ob_start(function () { return ''; });
        echo __("Player Type");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 122
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("Android");
        $context["android"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 123
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("Windows");
        $context["windows"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 124
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("webOS");
        $context["webos"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 125
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("Tizen");
        $context["sssp"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 126
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("Linux");
        $context["linux"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 127
        echo "                                    ";
        $context["options"] = [["optionid" => "", "option" => ""], ["optionid" => "android", "option" =>         // line 129
($context["android"] ?? null)], ["optionid" => "windows", "option" =>         // line 130
($context["windows"] ?? null)], ["optionid" => "lg", "option" =>         // line 131
($context["webos"] ?? null)], ["optionid" => "sssp", "option" =>         // line 132
($context["sssp"] ?? null)], ["optionid" => "linux", "option" =>         // line 133
($context["linux"] ?? null)]];
        // line 135
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["clientType", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option"], 135, $context, $this->getSourceContext());
        echo " 

                                    ";
        // line 137
        ob_start(function () { return ''; });
        echo __("Player Code");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 138
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_input", ["clientCode", ($context["title"] ?? null)], 138, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 140
        ob_start(function () { return ''; });
        echo __("Custom ID");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 141
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_input", ["customId", ($context["title"] ?? null)], 141, $context, $this->getSourceContext());
        echo "  -->

                                    ";
        // line 143
        ob_start(function () { return ''; });
        echo __("Mac Address");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 144
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_input", ["macAddress", ($context["title"] ?? null)], 144, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 146
        ob_start(function () { return ''; });
        echo __("IP Address");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 147
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_input", ["clientAddress", ($context["title"] ?? null)], 147, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 149
        ob_start(function () { return ''; });
        echo __("Orientation");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 150
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("Landscape");
        $context["landscape"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 151
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("Portrait");
        $context["portrait"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 152
        echo "                                    ";
        $context["options"] = [["optionid" => "", "option" => ""], ["optionid" => "landscape", "option" =>         // line 154
($context["landscape"] ?? null)], ["optionid" => "portrait", "option" =>         // line 155
($context["portrait"] ?? null)]];
        // line 157
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["orientation", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option"], 157, $context, $this->getSourceContext());
        echo "

                                   <!-- ";
        // line 159
        ob_start(function () { return ''; });
        echo __("Commercial Licence");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 160
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("Licensed fully");
        $context["licensed"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 161
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("Trial");
        $context["trial"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 162
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("Not licenced");
        $context["notLinceced"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 163
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("Not applicable");
        $context["notApplicable"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 164
        echo "                                    ";
        $context["options"] = [["optionid" => "", "option" => ""], ["optionid" => "1", "option" =>         // line 166
($context["licensed"] ?? null)], ["optionid" => "2", "option" =>         // line 167
($context["trial"] ?? null)], ["optionid" => "0", "option" =>         // line 168
($context["notLinceced"] ?? null)], ["optionid" => "3", "option" =>         // line 169
($context["notApplicable"] ?? null)]];
        // line 171
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["commercialLicence", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option"], 171, $context, $this->getSourceContext());
        echo " 

                                    ";
        // line 173
        ob_start(function () { return ''; });
        echo __("Player supported?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 174
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("Yes");
        $context["yesOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 175
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("No");
        $context["noOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 176
        echo "                                    ";
        $context["options"] = [["optionid" => "", "option" => ""], ["optionid" => 1, "option" =>         // line 178
($context["yesOption"] ?? null)], ["optionid" => 0, "option" =>         // line 179
($context["noOption"] ?? null)]];
        // line 181
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["isPlayerSupported", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option"], 181, $context, $this->getSourceContext());
        echo " -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"grid-with-folders-container\">
                    <div class=\"grid-folder-tree-container p-3\" id=\"grid-folder-filter\">
                        <input id=\"jstree-search\" class=\"form-control\" type=\"text\" placeholder=\"";
        // line 189
        echo __("Search");
        echo "\">
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"folder-tree-clear-selection-button\">
                            <label class=\"form-check-label\" for=\"folder-tree-clear-selection-button\" title=\"";
        // line 192
        echo __("Search in all folders");
        echo "\">";
        echo __("All Folders");
        echo "</label>
                        </div>
                        <div class=\"folder-search-no-results d-none\">
                            <p>";
        // line 195
        echo __("No Folders matching the search term");
        echo "</p>
                        </div>
                        <div id=\"container-folder-tree\"></div>
                    </div>
                    <div class=\"folder-controller d-none\">
                        <button type=\"button\" id=\"folder-tree-select-folder-button\" class=\"btn btn-outline-secondary\" title=\"";
        // line 200
        echo twig_escape_filter($this->env, __("Open / Close Folder Search options"), "html", null, true);
        echo "\"><i class=\"fas fa-folder fa-1x\"></i></button>
                        <div id=\"breadcrumbs\" class=\"mt-2 pl-2\"></div>
                    </div>
                    <div class=\"map-controller d-none pl-1\">
                        <button type=\"button\" id=\"map_button\" class=\"btn btn-primary\" title=\"";
        // line 204
        echo twig_escape_filter($this->env, __("Map"), "html", null, true);
        echo "\"><i class=\"fa fa-map\"></i></button>
                    </div>
                    <div class=\"list-controller d-none pl-1\">
                        <button type=\"button\" id=\"list_button\" class=\"btn btn-primary\" title=\"";
        // line 207
        echo twig_escape_filter($this->env, __("List"), "html", null, true);
        echo "\"><i class=\"fa fa-list\"></i></button>
                    </div>

                    <div id=\"datatable-container\">
                        <div class=\"XiboData card py-3\">
                            <table id=\"displays\" class=\"table table-striped\" data-content-type=\"display\" data-content-id-name=\"displayId\" data-state-preference-name=\"displayGrid\" style=\"width: 100%;\">
                                <thead>
                                    <tr>
                                        <th>";
        // line 215
        echo __("ID");
        echo "</th>
                                        <th>";
        // line 216
        echo __("Display");
        echo "</th>
                                        <th>";
        // line 217
        echo __("Display Type");
        echo "</th>
                                        <th>";
        // line 218
        echo __("Address");
        echo "</th>
                                        <th>";
        // line 219
        echo __("Status");
        echo "</th>
                                        <th>";
        // line 220
        echo __("Authorised?");
        echo "</th>
                                        <th>";
        // line 221
        echo __("Current Layout");
        echo "</th>
                                        <th>";
        // line 222
        echo __("Storage Available");
        echo "</th>
                                        <th>";
        // line 223
        echo __("Storage Total");
        echo "</th>
                                        <th>";
        // line 224
        echo __("Storage Free %");
        echo "</th>
                                        <th>";
        // line 225
        echo __("Description");
        echo "</th>
                                        <th>";
        // line 226
        echo __("Orientation");
        echo "</th>
                                        <th>";
        // line 227
        echo __("Resolution");
        echo "</th>
                                        ";
        // line 228
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 228)) {
            echo "<th>";
            echo __("Tags");
            echo "</th>";
        }
        // line 229
        echo "                                        <th>";
        echo __("Default Layout");
        echo "</th>
                                        <th>";
        // line 230
        echo __("Interleave Default");
        echo "</th>
                                        <th>";
        // line 231
        echo __("Email Alert");
        echo "</th>
                                        <th>";
        // line 232
        echo __("Logged In");
        echo "</th>
                                        <th>";
        // line 233
        echo __("Last Accessed");
        echo "</th>
                                        <th>";
        // line 234
        echo __("Display Profile");
        echo "</th>
                                        <th>";
        // line 235
        echo __("Version");
        echo "</th>
                                        <th>";
        // line 236
        echo __("Supported?");
        echo "</th>
                                        <th>";
        // line 237
        echo __("Device Name");
        echo "</th>
                                        <th>";
        // line 238
        echo __("IP Address");
        echo "</th>
                                        <th>";
        // line 239
        echo __("Mac Address");
        echo "</th>
                                        <th>";
        // line 240
        echo __("Timezone");
        echo "</th>
                                        <th>";
        // line 241
        echo __("Languages");
        echo "</th>
                                        <th>";
        // line 242
        echo __("Latitude");
        echo "</th>
                                        <th>";
        // line 243
        echo __("Longitude");
        echo "</th>
                                        <th>";
        // line 244
        echo __("Screen shot?");
        echo "</th>
                                        <th>";
        // line 245
        echo __("Thumbnail");
        echo "</th>
                                        <th>";
        // line 246
        echo __("CMS Transfer?");
        echo "</th>
                                        <th>";
        // line 247
        echo __("Bandwidth Limit");
        echo "</th>
                                        <th>";
        // line 248
        echo __("Last Command");
        echo "</th>
                                        <th>";
        // line 249
        echo __("XMR Registered");
        echo "</th>
                                        <th>";
        // line 250
        echo __("Commercial Licence");
        echo "</th>
                                        <th>";
        // line 251
        echo __("Remote");
        echo "</th>
                                        <th>";
        // line 252
        echo __("Sharing");
        echo "</th>
                                        <th>";
        // line 253
        echo __("Screen Size");
        echo "</th>
                                        <th>";
        // line 254
        echo __("Is Mobile?");
        echo "</th>
                                        <th>";
        // line 255
        echo __("Outdoor?");
        echo "</th>
                                        <th>";
        // line 256
        echo __("Reference 1");
        echo "</th>
                                        <th>";
        // line 257
        echo __("Reference 2");
        echo "</th>
                                        <th>";
        // line 258
        echo __("Reference 3");
        echo "</th>
                                        <th>";
        // line 259
        echo __("Reference 4");
        echo "</th>
                                        <th>";
        // line 260
        echo __("Reference 5");
        echo "</th>
                                        <th>";
        // line 261
        echo __("Custom ID");
        echo "</th>
                                        <th>";
        // line 262
        echo __("Cost Per Play");
        echo "</th>
                                        <th>";
        // line 263
        echo __("Impressions Per Play");
        echo "</th>
                                        <th>";
        // line 264
        echo __("Created Date");
        echo "</th>
                                        <th>";
        // line 265
        echo __("Modified Date");
        echo "</th>
                                        <th>";
        // line 266
        echo __("Faults?");
        echo "</th>
                                        <th>";
        // line 267
        echo __("OS Version");
        echo "</th>
                                        <th>";
        // line 268
        echo __("OS SDK");
        echo "</th>
                                        <th>";
        // line 269
        echo __("Manufacturer");
        echo "</th>
                                        <th>";
        // line 270
        echo __("Brand");
        echo "</th>
                                        <th>";
        // line 271
        echo __("Model");
        echo "</th>
                                        <th class=\"rowMenu\"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>

                            <!-- Map -->
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"map-legend\" style=\"display:none; position: absolute; z-index: 500; right: 20px; top: 10px;\">
                                        <div class=\"display-map-legend\" style=\"font-size: 12px;\">
                                            <div>Logged in</div>
                                            <div><img style=\"width: 15%\" src='";
        // line 286
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 286), "html", null, true);
        echo "dist/assets/map-marker-green-check.png'/> - Up to date</div>
                                            <div><img style=\"width: 15%\" src='";
        // line 287
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 287), "html", null, true);
        echo "dist/assets/map-marker-yellow-check.png'/> - Out of date</div>
                                            <div><img style=\"width: 15%\" src='";
        // line 288
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 288), "html", null, true);
        echo "dist/assets/map-marker-red-check.png'/> - Downloading/Unknown</div>
                                            </br>
                                            <div>Logged out</div>
                                            <div><img style=\"width: 15%\" src='";
        // line 291
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 291), "html", null, true);
        echo "dist/assets/map-marker-green-cross.png'/> - Up to date</div>
                                            <div><img style=\"width: 15%\" src='";
        // line 292
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 292), "html", null, true);
        echo "dist/assets/map-marker-yellow-cross.png'/> - Out of date</div>
                                            <div><img style=\"width: 15%\" src='";
        // line 293
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 293), "html", null, true);
        echo "dist/assets/map-marker-red-cross.png'/> - Downloading/Unknown</div>
                                        </div>
                                    </div>
                                    <div id=\"display-map\" data-displays-url=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.map"), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 308
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 309
        echo "    <script type=\"text/javascript\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">
        var mapConfig = ";
        // line 310
        echo json_encode(($context["mapConfig"] ?? null));
        echo ";

        ";
        // line 312
        if ( !twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 312)) {
            // line 313
            echo "        disableFolders();
        ";
        }
        // line 315
        echo "
        \$(document).ready(function() {

            //<editor-fold desc=\"Display Grid>

            const table = \$(\"#displays\").DataTable({
                language: dataTablesLanguage,
                dom: dataTablesTemplate,
                serverSide: true,
                stateSave: true,
                stateDuration: 0,
                responsive: true,
                stateLoadCallback: dataTableStateLoadCallback,
                stateSaveCallback: dataTableStateSaveCallback,
                filter: false,
                searchDelay: 3000,
                order: [[1, 'asc']],
                ajax: {
                    url: '";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.search"), "html", null, true);
        echo "',
                    data: function (dataToSend) {
                        //make a new object so as not to destroy the input.
                        var data = {};
                        data.draw = dataToSend.draw;
                        data.length = dataToSend.length;
                        data.start = dataToSend.start;
                        data.order = dataToSend.order;
                        data.columns = [];

                        \$.each(dataToSend.columns, function (index, e) {
                            var col = {};
                            col.data = e.data;
                            if (e.name != null && e.name != '')
                                col.name = e.name;
                            data.columns.push(col);
                        });

                        \$.extend(data, \$(\"#displays\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());

                        return data;
                    }
                },
                createdRow: function (row, data, index) {
                    if (data.mediaInventoryStatus === 1) {
                        \$(row).addClass('table-success');
                    } else if (data.mediaInventoryStatus === 2) {
                        \$(row).addClass('table-danger');
                    } else {
                        \$(row).addClass('table-warning');
                    }
                },
                \"columns\": [
                    {\"data\": \"displayId\", responsivePriority: 2},
                    {\"data\": \"display\", responsivePriority: 2},
                    {\"data\": \"displayType\", responsivePriority: 2},
                    {\"data\": \"address\", \"visible\": false, responsivePriority: 5},
                    {
                        \"data\": \"mediaInventoryStatus\",
                        responsivePriority: 2,
                        \"render\": function (data, type, row) {
                            if (type != \"display\")
                                return data;

                            var icon = \"\";
                            if (data == 1)
                                icon = \"fa-check\";
                            else if (data == 2)
                                icon = \"fa-times\";
                            else
                                icon = \"fa-cloud-download\";

                            return '<span class=\"fa ' + icon + '\" title=\"' + (row.statusDescription) + '\"></span>';
                        }
                    },
                    {\"data\": \"licensed\", \"render\": dataTableTickCrossColumn, responsivePriority: 3},
                    {\"data\": \"currentLayout\", \"visible\": false, \"sortable\": false, responsivePriority: 5},
                    {
                        \"data\": \"storageAvailableSpace\",
                        responsivePriority: 5,
                        \"visible\": false,
                        \"render\": function (data, type, row) {
                            if (type != \"display\" && type != \"export\") {
                                return data;
                            }

                            return row.storageAvailableSpaceFormatted;
                        }
                    },
                    {
                        \"data\": \"storageTotalSpace\",
                        responsivePriority: 5,
                        \"visible\": false,
                        \"render\": function (data, type, row) {
                            if (type != \"display\" && type != \"export\") {
                                return data;
                            }

                            return row.storageTotalSpaceFormatted;
                        }
                    },
                    {\"data\": \"storagePercentage\", \"visible\": false, \"sortable\": false, responsivePriority: 5},
                    {\"data\": \"description\", \"visible\": false, responsivePriority: 4},
                    {\"data\": \"orientation\", \"visible\": false, responsivePriority: 6},
                    {\"data\": \"resolution\", \"visible\": false, responsivePriority: 6},
                    ";
        // line 418
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 418)) {
            // line 419
            echo "                    {
                        \"name\": \"tags\",
                        responsivePriority: 3,
                        \"sortable\": false,
                        \"visible\": false,
                        \"data\": dataTableCreateTags
                    },
                    ";
        }
        // line 427
        echo "                    {\"data\": \"defaultLayout\", \"visible\": false, responsivePriority: 4},
                    {\"data\": \"incSchedule\", \"render\": dataTableTickCrossColumn, \"visible\": false, responsivePriority: 5},
                    {\"data\": \"emailAlert\", \"render\": dataTableTickCrossColumn, \"visible\": false, responsivePriority: 5},
                    {\"data\": \"loggedIn\", \"render\": dataTableTickCrossColumn, responsivePriority: 3},
                    {\"data\": \"lastAccessed\", \"render\": dataTableDateFromUnix, responsivePriority: 4},
                    {
                        \"name\": \"displayProfileId\",
                        responsivePriority: 5,
                        \"data\": function (data, type) {
                            return data.displayProfile;
                        },
                        \"visible\": false
                    },
                    {
                        \"name\": \"clientSort\",
                        responsivePriority: 4,
                        \"data\": function (data) {
                            if (data.clientType === 'lg') {
                                data.clientType = 'webOS'
                            }

                            return data.clientType + ' ' + data.clientVersion + '-' + data.clientCode;
                        },
                        \"visible\": false
                    },
                    {
                      data: 'clientCode',
                      responsivePriority: 3,
                      render: function (data, type) {
                        const playerVersionSupport = ";
        // line 456
        echo twig_escape_filter($this->env, ($context["playerVersion"] ?? null), "html", null, true);
        echo ";
                        if (type !== 'display') {
                          return data < playerVersionSupport ? '";
        // line 458
        echo twig_escape_filter($this->env, __("No"), "html", null, true);
        echo "' : '";
        echo twig_escape_filter($this->env, __("Yes"), "html", null, true);
        echo "';
                        }
                        return \"<span class='fa \" + (data < playerVersionSupport ? 'fa-times' : 'fa-check') + \"'></span>\";
                      },
                      visible: false
                    },
                    {\"data\": \"deviceName\", \"visible\": false, responsivePriority: 5},
                    {\"data\": \"clientAddress\", \"visible\": false, responsivePriority: 6},
                    {\"data\": \"macAddress\", responsivePriority: 5},
                    {\"data\": \"timeZone\", \"visible\": false, responsivePriority: 5},
                    {
                        \"data\": \"languages\",
                        \"visible\": false,
                        \"responsivePriority\": 5,
                        \"render\": function(data, type) {
                            if (type !== \"display\")
                                return data;

                            let returnData = '';
                            if (typeof data !== undefined && data != null) {
                                let arrayOfTags = data.split(',');
                                returnData += '<div class=\"permissionsDiv\">';
                                for (let i = 0; i < arrayOfTags.length; i++) {
                                    let name = arrayOfTags[i];
                                    if (name !== '') {
                                        returnData += '<li class=\"badge\">'
                                            + name + '</span></li>'
                                    }
                                }
                                returnData += '</div>';
                            }
                            return returnData;
                        }
                    },
                    {\"data\": \"latitude\", \"visible\": false, responsivePriority: 6},
                    {\"data\": \"longitude\", \"visible\": false, responsivePriority: 6},
                    {\"data\": \"screenShotRequested\", \"render\": dataTableTickCrossColumn, \"visible\": false, \"name\": \"screenShotRequested\", responsivePriority: 7},
                    {
                        \"name\": \"thumbnail\",
                        responsivePriority: 4,
                        \"orderable\": false,
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.thumbnail;

                            if (data.thumbnail != \"\") {
                                return '<a class=\"display-screenshot-container\" data-toggle=\"lightbox\" data-type=\"image\" href=\"' + data.thumbnail + '\"><img class=\"display-screenshot\" src=\"' + data.thumbnail + '\" data-display-id=\"'+ data.displayId +'\" data-type=\"'+ data.clientType +'\" data-client-code=\"'+ data.clientCode +'\" /></a>';
                            }
                            else {
                                return \"\";
                            }
                        },
                        \"visible\": false
                    },
                    {
                        \"data\": \"isCmsTransferInProgress\",
                        \"render\": dataTableTickCrossColumn,
                        \"visible\": false,
                        \"name\": \"isCmsTransferInProgress\"
                    },
                    {
                        \"name\": \"bandwidthLimit\",
                        responsivePriority: 5,
                        \"data\": null,
                        \"render\": {\"_\": \"bandwidthLimit\", \"display\": \"bandwidthLimitFormatted\", \"sort\": \"bandwidthLimit\"},
                        \"visible\": false
                    },
                    {
                        \"data\": \"lastCommandSuccess\",
                        responsivePriority: 6,
                        \"render\": function (data, type, row) {
                            if (type != \"display\")
                                return data;

                            var icon = \"\";
                            if (data == 1)
                                icon = \"fa-check\";
                            else if (data == 0)
                                icon = \"fa-times\";
                            else
                                icon = \"fa-question\";

                            return \"<span class='fa \" + icon + \"'></span>\";
                        },
                        \"visible\": false
                    },
                    {
                        \"data\": \"xmrChannel\",
                        responsivePriority: 6,
                        \"render\": function (data, type, row) {
                            if (type === \"export\") {
                                return (data !== null && data !== \"\") ? 1 : 0;
                            }

                            if (type != \"display\")
                                return data;

                            var icon = \"\";
                            if (data != null && data != \"\")
                                icon = \"fa-check\";
                            else
                                icon = \"fa-times\";

                            return \"<span class='fa \" + icon + \"'></span>\";
                        },
                        \"visible\": false
                    },
                    {
                        \"data\": \"commercialLicence\",
                        \"name\": \"commercialLicence\",
                        responsivePriority: 5,
                        \"render\": function (data, type, row) {
                            if (type != \"display\")
                                return data;

                            var icon = \"\";
                            if (data == 3) {
                                return \"N/A\";
                            } else {
                                if (data == 1) {
                                    icon = \"fa-check\";
                                } else if (data == 0) {
                                    icon = \"fa-times\";
                                } else if (data == 2) {
                                    icon = \"fa-clock-o\";
                                }

                                return '<span class=\"fa ' + icon + '\" title=\"' + (row.commercialLicenceDescription) + '\"></span>';
                            }
                        },
                        \"visible\": false
                    },
                    {
                        \"name\": \"remote\",
                        \"data\": null,
                        responsivePriority: 4,
                        \"render\": function (data, type, row) {
                            if (type === \"display\") {
                                var html = \"<div class='remote-icons'>\";
                                if (\"";
        // line 597
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "SHOW_DISPLAY_AS_VNCLINK", [], "any", false, false, false, 597), "html", null, true);
        echo "\" !== \"\" && row.clientAddress != null && row.clientAddress !== \"\") {
                                    var link = \"";
        // line 598
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "SHOW_DISPLAY_AS_VNCLINK", [], "any", false, false, false, 598), "html", null, true);
        echo "\".replace('%s', row.clientAddress);
                                    html += '<a href=\"' + link + '\" title=\"";
        // line 599
        echo twig_escape_filter($this->env, __("VNC to this Display"), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "SHOW_DISPLAY_AS_VNC_TGT", [], "any", false, false, false, 599), "html", null, true);
        echo "\">'
                                        + '<i class=\"fa fa-eye\"></i></a>';
                                }

                                if (row.teamViewerLink !== \"\") {
                                    html += '<a href=\"' + row.teamViewerLink + '\" title=\"";
        // line 604
        echo twig_escape_filter($this->env, __("TeamViewer to this Display"), "html", null, true);
        echo "\" target=\"_blank\">'
                                        + '<img src=\"";
        // line 605
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 605), "html", null, true);
        echo "theme/default/img/remote_icons/teamviewer.png\" alt=\"TeamViewer Icon\"></a>';
                                }

                                if (row.webkeyLink !== \"\") {
                                    html += '<a href=\"' + row.webkeyLink + '\" title=\"";
        // line 609
        echo twig_escape_filter($this->env, __("Webkey to this Display"), "html", null, true);
        echo "\" target=\"_blank\">'
                                        + '<img src=\"";
        // line 610
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 610), "html", null, true);
        echo "theme/default/img/remote_icons/webkey.png\" alt=\"Webkey Icon\"></a>';
                                }

                                return html + \"</div>\";

                            } else if (type === \"export\") {
                                if (row.teamViewerLink !== \"\") {
                                    return \"TeamViewer: \" + row.teamViewerLink;
                                }
                                if (row.webkeyLink !== \"\") {
                                    return \"Webkey: \" + row.webkeyLink;
                                }
                                if (row.teamViewerLink === \"\" && row.webkeyLink === \"\") {
                                    return \"\";
                                }
                            } else {
                                return \"\";
                            }
                        },
                        \"visible\": true,
                        \"orderable\": false
                    },
                    {
                        \"data\": \"groupsWithPermissions\",
                        visible: false,
                        responsivePriority: 10,
                        \"render\": dataTableCreatePermissions
                    },
                    {\"data\": \"screenSize\", \"visible\": false, responsivePriority: 6},
                    {
                        \"data\": \"isMobile\",
                        \"render\": dataTableTickCrossColumn,
                        \"visible\": false,
                        \"name\": \"isMobile\"
                    },
                    {
                        \"data\": \"isOutdoor\",
                        \"render\": dataTableTickCrossColumn,
                        \"visible\": false,
                        \"name\": \"isOutdoor\"
                    },
                    {\"data\": \"ref1\", \"visible\": false, responsivePriority: 6},
                    {\"data\": \"ref2\", \"visible\": false, responsivePriority: 6},
                    {\"data\": \"ref3\", \"visible\": false, responsivePriority: 6},
                    {\"data\": \"ref4\", \"visible\": false, responsivePriority: 6},
                    {\"data\": \"ref5\", \"visible\": false, responsivePriority: 6},
                    {\"data\": \"customId\", \"visible\": false, responsivePriority: 6},
                    {\"data\": \"costPerPlay\", \"visible\": false, responsivePriority: 6},
                    {\"data\": \"impressionsPerPlay\", \"visible\": false, responsivePriority: 6},
                    {\"data\": \"createdDt\", \"visible\": false, responsivePriority: 6},
                    {\"data\": \"modifiedDt\", \"visible\": false, responsivePriority: 6},
                    {
                        \"data\": \"countFaults\",
                        \"name\": \"countFaults\",
                        responsivePriority: 3,
                        \"render\": function (data, type, row) {
                            if (row.clientCode < 300) {
                              return '';
                            }

                            if (type !== \"display\") {
                                return data;
                            }

                            if (data > 0) {
                                return '<span class=\"badge\" style=\"background-color: red; color: white\">'+(row.countFaults)+'</span>';
                            } else {
                                return '';
                            }
                        }
                    },
                    {\"data\": \"osVersion\", \"visible\": false, responsivePriority: 6},
                    {\"data\": \"osSdk\", \"visible\": false, responsivePriority: 6},
                    {\"data\": \"manufacturer\", \"visible\": false, responsivePriority: 6},
                    {\"data\": \"brand\", \"visible\": false, responsivePriority: 6},
                    {\"data\": \"model\", \"visible\": false, responsivePriority: 6},
                    {
                        \"orderable\": false,
                        responsivePriority: 1,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', function(e, settings) {

                dataTableDraw(e, settings, function() {

                    var target = \$(\"#\" + e.target.id);
                    var \$mapController = target.closest(\".XiboGrid\").find('.map-controller');
                    var \$listController = target.closest(\".XiboGrid\").find('.list-controller');

                    // Move and show map button inside of the table container
                    if (\$mapController.length > 0 && target.closest(\".dataTables_wrapper\").find('.dataTables_folder .map-controller').length == 0) {
                        \$mapController.appendTo('.dataTables_folder');
                        \$mapController.removeClass('d-none').addClass('d-inline-flex');
                    }
                    // Move and show list button inside of the table container
                    if (\$listController.length > 0 && target.closest(\".dataTables_wrapper\").find('.dataTables_folder .list-controller').length == 0) {
                        \$listController.appendTo('.dataTables_folder');
                        \$listController.removeClass('d-none').addClass('d-inline-flex');
                    }
                })
            });
            table.on('draw', { form: \$(\"#displays\").closest(\".XiboGrid\").find(\".FilterDiv form\") }, dataTableCreateTagEvents);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#displays_wrapper').find('.dataTables_buttons'));

            \$(\"#refreshGrid\").click(function () {
                table.ajax.reload();
            });

            // </editor-fold>

            //<editor-fold desc=\"The button click event displaying the map or grid>

            // Detect the dimensions of our container and set to match.
            let map;
            let displayIdCache = [];
            let markerClusterGroup;
            const \$displayMap = \$('#display-map');
            const \$mapBtn = \$('#map_button');
            const \$listBtn =  \$('#list_button');
            const \$mapParent = \$displayMap.parent();
            const \$dataTablesFolder = \$('.dataTables_folder');

            \$listBtn.hide();

            \$mapBtn.click(function () {
              if (!map) {
                initializeMap();
              } else {
                setTimeout(function () {
                  addMarkersToMap(map.getBounds().toBBoxString());
                }, 500);
              }
                \$('.map-legend').show()
                \$displayMap.show();
                \$mapBtn.hide();
                \$listBtn.show();
                \$dataTablesFolder.siblings().hide();
                \$dataTablesFolder.parent().siblings().hide();
            });

            \$listBtn.click(function () {
                \$('.map-legend').hide();
                \$displayMap.hide();
                \$listBtn.hide();
                \$mapBtn.show();
                \$dataTablesFolder.siblings().show();
                \$dataTablesFolder.parent().siblings().show();
            });

            // </editor-fold>


            // <editor-fold desc=\"Leaflet Map>

            // Map resizing when folder is toggled
            window.refreshDisplayMap = function () {
                if (map) {
                    // is display map visible??
                    if (\$displayMap.is(':visible')) {
                        map.invalidateSize();
                    } else {
                        map.setView(map.getCenter(), map.getZoom());
                    }
                }
            }

            // Initialise and build map
            function initializeMap() {

                \$displayMap.width(\$mapParent.width() - 10);
                \$displayMap.height(\$(window).height() - 100);

                // Create the map
                map = L.map('display-map', {
                    center: [mapConfig.setArea.lat, mapConfig.setArea.long],
                    zoom: mapConfig.setArea.zoom,
                    fullscreenControl: true,
                    fullscreenControlOptions: {
                        position: 'topleft'
                    }
                });

                // Tile layer
                let tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a>'
                }).addTo(map);

                // Print button
                L.easyPrint({
                    tileLayer: tiles,
                    sizeModes: ['Current', 'A4Landscape', 'A4Portrait'],
                    filename: 'Displays on Map',
                    hideControlContainer: true
                }).addTo(map);

                // Create the marker cluster group
                markerClusterGroup = L.markerClusterGroup({
                    maxClusterRadius: function (mapZoom) {
                        return mapZoom > 9 ? 20 : 80;
                    },

                    // This defines the icon appearance of the cluster markers
                    iconCreateFunction: function (cluster) {
                        let upToDate = 0;
                        let outOfDate = 0;
                        let downloading = 0;

                        const children = cluster.getAllChildMarkers();
                        for (const marker of children) {
                            switch (marker.mediaInventoryStatus) {
                                case 1:
                                    upToDate++;
                                    break;
                                case 3:
                                    outOfDate++;
                                    break;
                                default:
                                    downloading++;
                                    break;
                            }
                        }

                        // Create a div showing number of displays by status in the cluster group
                        let pieHtml = createPieChart(
                            [upToDate, outOfDate, downloading],
                            ['rgba(181, 226, 140, 0.9)', 'rgba(243, 194, 18, 0.9)', 'rgba(219, 70, 79, 0.9)']
                        );

                        // Create custom icons for the cluster markers
                        return L.divIcon({
                            html:  pieHtml,
                            className: '',
                            iconSize: L.point(40, 40)
                        });
                    }
                });

                let bounds = map.getBounds().toBBoxString();

                map.on(\"moveend\", _.debounce(function() {
                    bounds = map.getBounds().toBBoxString();
                    // is display map visible??
                    const isDisplayMapVisible = \$displayMap.is(\":visible\");
                    addMarkersToMap(bounds, !isDisplayMapVisible);
                }, 500));

                map.on(\"resize\", function() {
                    map.invalidateSize();
                });

                // Get display points and add to the map
                // Do not clear layers
                addMarkersToMap(bounds, false);

                // Bind the filter form
                \$('.XiboGrid').find('.XiboFilter form input').on('keyup',  function() { addMarkersToMap(bounds); });
                \$('.XiboGrid').find('.XiboFilter form select').on('change', function() { addMarkersToMap(bounds); });

                // Hide map/ Show Display List
                \$displayMap.hide();
            }

          // Add display markers to the cluster group
          function addMarkersToMap(bounds, clear = true) {

            if (clear) {
              markerClusterGroup.clearLayers();
              displayIdCache = [];
            }

            if (!\$displayMap.is(':visible')) {
              return;
            }

            // Make an ajax request for the displays feature
            // Load GeoJSON data and add it to the marker cluster group
            \$.ajax(\$displayMap.data('displaysUrl'), {
              method: 'GET',
              data: \$('.XiboGrid').find(\".XiboFilter form\").serialize() + '&bounds=' + bounds,
              success: function(response) {
                // displays
                if (response.features.length > 0) {

                  // Define icons for display
                  let uptoDateLoggedInIcon = L.icon({
                    iconUrl: '";
        // line 899
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 899), "html", null, true);
        echo "dist/assets/map-marker-green-check.png',
                    iconRetinaUrl: '";
        // line 900
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 900), "html", null, true);
        echo "dist/assets/map-marker-green-check-2x.png',
                    iconSize: [24, 40],
                    iconAnchor: [12, 40]
                  });
                  let uptoDateLoggedOutIcon = L.icon({
                    iconUrl: '";
        // line 905
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 905), "html", null, true);
        echo "dist/assets/map-marker-green-cross.png',
                    iconRetinaUrl: '";
        // line 906
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 906), "html", null, true);
        echo "dist/assets/map-marker-green-cross-2x.png',
                    iconSize: [24, 40],
                    iconAnchor: [12, 40]
                  });
                  let outOfDateLoggedInIcon = L.icon({
                    iconUrl: '";
        // line 911
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 911), "html", null, true);
        echo "dist/assets/map-marker-yellow-check.png',
                    iconRetinaUrl: '";
        // line 912
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 912), "html", null, true);
        echo "dist/assets/map-marker-yellow-check-2x.png',
                    iconSize: [24, 40],
                    iconAnchor: [12, 40]
                  });
                  let outOfDateLoggedOutIcon = L.icon({
                    iconUrl: '";
        // line 917
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 917), "html", null, true);
        echo "dist/assets/map-marker-yellow-cross.png',
                    iconRetinaUrl: '";
        // line 918
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 918), "html", null, true);
        echo "dist/assets/map-marker-yellow-cross-2x.png',
                    iconSize: [24, 40],
                    iconAnchor: [12, 40]
                  });
                  let downloadingLoggedInIcon = L.icon({
                    iconUrl: '";
        // line 923
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 923), "html", null, true);
        echo "dist/assets/map-marker-red-check.png',
                    iconRetinaUrl: '";
        // line 924
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 924), "html", null, true);
        echo "dist/assets/map-marker-red-check-2x.png',
                    iconSize: [24, 40],
                    iconAnchor: [12, 40]
                  });
                  let downloadingLoggedOutIcon = L.icon({
                    iconUrl: '";
        // line 929
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 929), "html", null, true);
        echo "dist/assets/map-marker-red-cross.png',
                    iconRetinaUrl: '";
        // line 930
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 930), "html", null, true);
        echo "dist/assets/map-marker-red-cross-2x.png',
                    iconSize: [24, 40],
                    iconAnchor: [12, 40]
                  });

                  // Loop through features (GeoJSON data) and add each marker to the cluster
                  let feature = L.geoJSON(response, {
                    pointToLayer: function (feature, latlng) {
                      let icon;

                      const icons = {
                        1: {
                          true: uptoDateLoggedInIcon,
                          false: uptoDateLoggedOutIcon
                        },
                        3: {
                          true: outOfDateLoggedInIcon,
                          false: outOfDateLoggedOutIcon
                        },
                        default: {
                          true: downloadingLoggedInIcon,
                          false: downloadingLoggedOutIcon
                        }
                      };

                      // The value of \"mediaInventoryStatus\" and \"loggedIn\" determines the \"icon\"
                      const loggedIn = feature.properties.loggedIn ? true: false;
                      const iconType = icons[feature.properties.mediaInventoryStatus] || icons.default;
                      icon = iconType[loggedIn];

                      let options = {
                        icon: icon
                      };

                      let popup = '<strong>' + feature.properties.display + '</strong>';
                      if (feature.properties.orientation) {
                        popup += '<br/><div style=\"width: 180px;\"><span>Orientation: ' + feature.properties.orientation + '</span></div>';
                      }
                      if (feature.properties.status) {
                        popup += '<div style=\"width: 180px;\"><span>Status: ' + feature.properties.status + '</span>';
                        if (feature.properties.loggedIn) {
                          popup += '<span> (Logged in) </span></div>';
                        } else {
                          popup += '<span> (Not logged in) </span></div>';
                        }
                      }
                      if (feature.properties.displayProfile) {
                        popup += '<div style=\"width: 180px;\"><span>Display profile: ' + feature.properties.displayProfile + '</span></div>';
                      }
                      if (feature.properties.resolution) {
                        popup += '<div style=\"width: 180px;\"><span>Resolution: ' + feature.properties.resolution + '</span></div>';
                      }
                      if (feature.properties.lastAccessed) {
                        let lastAccessed = moment(feature.properties.lastAccessed, \"X\").tz ?
                          moment(feature.properties.lastAccessed, \"X\").tz(timezone).format(jsDateFormat) :
                          moment(feature.properties.lastAccessed, \"X\").format(jsDateFormat);

                        popup += '<div style=\"width: 180px;\"><span>Last accessed: ' + lastAccessed + '</span></div>';
                      }
                      if (feature.properties.thumbnail) {
                        popup += '<div style=\"width: 180px;\"><img class=\"display-screenshot\" src=\"' + feature.properties.thumbnail + '\" /></div>';
                      }

                      if (!displayIdCache.includes(feature.properties.displayId)) {

                        // Cache displayId
                        displayIdCache.push(feature.properties.displayId);

                        var marker = L.marker(latlng, options);

                        // Add the inventory status to each marker so that we can count
                        // the status based displays in iconCreateFunction
                        marker.mediaInventoryStatus = feature.properties.mediaInventoryStatus;

                        // Add a marker
                        return marker.bindPopup(popup)
                          .openPopup()
                          .addTo(markerClusterGroup);
                      }
                    },
                  });
                }
              }
            });

            // Add the cluster group to the map
            markerClusterGroup.addTo(map);

            markerClusterGroup.on('clustermouseover', function(event) {
              var clusterMarkers = event.layer.getAllChildMarkers();

              let upToDate = 0;
              let outOfDate = 0;
              let downloading = 0;

              clusterMarkers.forEach(function(marker) {
                switch (marker.mediaInventoryStatus) {
                  case 1:
                    upToDate++;
                    break;
                  case 3:
                    outOfDate++;
                    break;
                  default:
                    downloading++;
                    break;
                }
              });

              let popContent = '<div><strong>Total number of displays</strong>';
              const statuses = [
                { count: upToDate, text: 'Up to date' },
                { count: outOfDate, text: 'Out of date' },
                { count: downloading, text: 'Downloading' }
              ];
              for (const { count, text } of statuses) {
                if (count > 0) {
                  popContent += `<div>\${text}: \${count}</div>`;
                }
              }
              popContent += '</div>';

              var popup = L.popup()
                .setLatLng(event.latlng)
                .setContent(popContent)
                .openOn(map);
            }).on('clustermouseout',function(event){
              map.closePopup();
            }).on('clusterclick',function(event){
              map.closePopup();
            });
          }

            // Creating a pie chart for cluster childrens using HTML, CSS
            const createPieChart = function(data, colors) {
                // Get the total of all the data
                let total = data.reduce(function(a, b) {
                    return a + b;
                });

                // Get the percentage of each data point
                let percentages = data.map(function(d) {
                    return d / total;
                });

                // Create the pie chart
                let pie = \$('<div></div>');
                pie.css('width', '30px');
                pie.css('height', '30px');
                pie.css('border-radius', '50%');
                pie.css('display', 'flex');
                pie.css('align-items', 'center');
                pie.css('justify-content', 'center');

                // Create conic-gradient for each data point
                let gradient = 'conic-gradient(';
                let percentageSum = 0;
                percentages.forEach(function(percentages, i) {
                    let color = colors[i];
                    let percentStart = percentageSum * 100;
                    let percentEnd = percentStart + percentages * 100;
                    percentageSum += percentages;
                    gradient += color + ' ' + percentStart + '%, ' + color + ' ' + percentEnd + '%, ';
                });
                gradient += 'white 0%)';

                // Set the pie chart's background to the conic-gradient
                pie.css('background', gradient);
                pie.css('box-shadow', '5px 5px 10px rgba(0, 0, 0, 0.3)');
                pie.append('<div style=\"color: black; font-weight: bold;\">'+ total + '</div>');
                return  \$(\"<div />\").append(pie.clone()).html();
            };

            // </editor-fold>
        });

        ";
        // line 1106
        $context["showThumbnailColumn"] = twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "getOptionValue", ["showThumbnailColumn", 1], "method", false, false, false, 1106);
        // line 1107
        echo "
        function displayRequestScreenshotFormSubmit() {
            \$(\"#displayRequestScreenshotForm\").submit();
            XiboDialogClose();

            ";
        // line 1112
        if ((($context["showThumbnailColumn"] ?? null) == 1)) {
            // line 1113
            echo "                var table = \$('#displays').DataTable();
                if (!table.column([\"thumbnail:name\"]).visible()) {
                    table.columns([\"screenShotRequested:name\", \"thumbnail:name\"]).visible(true);
                }
            ";
        }
        // line 1118
        echo "        }


        function setDefaultMultiSelectFormOpen(dialog) {
            console.debug('Multi-select form opened for default layout');

            // Inject a list of layouts into the form, in a drop down.
            var \$select = \$('<select name=\"layoutId\" class=\"form-control\" data-search-url=\"";
        // line 1125
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.search"), "html", null, true);
        echo "\" data-search-term=\"layout\" data-search-term-tags=\"tags\" data-id-property=\"layoutId\" data-text-property=\"layout\">');
            \$select.on('change', function() {
                console.debug('Setting commit data to ' + \$(this).val());
                dialog.data().commitData = {layoutId: \$(this).val()};
            });

            // Add the list to the body.
            \$(dialog).find('.modal-body').append(\$select);

            makePagedSelect(\$select, dialog);
        }

        function displayFormLicenceCheckSubmit(form) {
            // Display commercial licence table column
            \$('table#displays').DataTable().column('commercialLicence:name').visible(true);

            // Submit form
            form.submit();
        }

        function setMoveCmsMultiSelectFormOpen(dialog) {
            console.debug('Multi-select form opened for move CMS');

            var \$message = \$(
                '<div class=\"col-sm-12 alert alert-info\">' +
                    \"<p>";
        // line 1150
        echo twig_escape_filter($this->env, __("Please note: Once the CMS Address and Key are authenticated in this form the Display will attempt to register with the CMS Instance details entered. Once transferred the Display will stop communicating with this CMS Instance."), "html", null, true);
        echo "</p>\" +
                '</div>'
            );

            \$(dialog).find('.modal-body').append(\$message);

            var \$cmsAddress =   \$(
                '<div class=\"form-group row\">' +
                    '<label class=\"col-sm-2 control-label\" for=\"newCmsAddress\" accesskey=\"\">New CMS Address</label>' +
                    '<div class=\"col-sm-10\">' +
                        '<input class=\"form-control\" name=\"newCmsAddress\" type=\"text\" id=\"newCmsAddress\" value=\"\">' +
                        '<span class=\"help-block\">";
        // line 1161
        echo twig_escape_filter($this->env, __("Full URL to the new CMS, including https:// "), "html", null, true);
        echo "</span>' +
                    '</div>' +
                '</div>'
            );

            var \$cmsKey = \$(
                '<div class=\"form-group row\">' +
                    '<label class=\"col-sm-2 control-label\" for=\"newCmsKey\" accesskey=\"\">New CMS Key</label>' +
                    '<div class=\"col-sm-10\">' +
                        '<input class=\"form-control\" name=\"newCmsKey\" type=\"text\" id=\"newCmsKey\" value=\"\">' +
                        '<span class=\"help-block\">";
        // line 1171
        echo twig_escape_filter($this->env, __("CMS Secret Key associated with the provided new CMS Address"), "html", null, true);
        echo "</span>' +
                    '</div>' +
                '</div>'
            );

            var \$authenticationCode =   \$(
                '<div class=\"form-group row\">' +
                    '<label class=\"col-sm-2 control-label\" for=\"twoFactorCode\" accesskey=\"\">Two Factor Code</label>' +
                    '<div class=\"col-sm-10\">' +
                        '<input class=\"form-control\" name=\"twoFactorCode\" type=\"text\" id=\"twoFactorCode\" value=\"\">' +
                        '<span class=\"help-block\">";
        // line 1181
        echo twig_escape_filter($this->env, __("Please enter your Two Factor authentication code"), "html", null, true);
        echo "</span>' +
                    '</div>' +
                '</div>'
            );

            \$(dialog).find('.modal-body').append(\$cmsAddress, \$cmsKey, \$authenticationCode);

            \$('#twoFactorCode, #newCmsAddress, #newCmsKey').on('change', function() {

                dialog.data().commitData = {
                        newCmsAddress: \$('#newCmsAddress').val(),
                        newCmsKey: \$('#newCmsKey').val(),
                        twoFactorCode: \$('#twoFactorCode').val()
                    };
            });
        }

        function makeVenueSelect(\$element) {
          // Get the openOOH venue types
          \$element.append(new Option('', '0', false, false));
          \$.ajax({
            method: 'GET',
            url: \$element.data('searchUrl'),
            dataType: 'json',
            success: function(response) {
              \$.each(response.data, function(key, el) {
                const selected = el.venueId === \$element.data('venueId');
                \$element.append(new Option(el.venueName, el.venueId, selected, selected));
              });

              \$element.select2();
            },
            error: function(xhr) {
              SystemMessage(xhr.message || '";
        // line 1214
        echo twig_escape_filter($this->env, __("Unknown error"), "html", null, true);
        echo "', false);
            }
          });
        }

        function displayEditFormOpen(dialog) {

            // Setup display profile form
            displayProfileFormOpen();
            XiboInitialise('#settings-from-display-profile');

            var \$settings = \$(dialog).find('#settings-from-display-profile').find('.form-group');
            var \$table = \$(dialog).find('#settings-from-profile tbody').empty();
            var override = \$(dialog).data('extra');
            var \$venueIdSelect2 = \$(dialog).find(\".venue-select select.form-control\");
            if (\$venueIdSelect2.data('initialValue')) {
              \$venueIdSelect2.data('initialised', true);
              makeVenueSelect(\$venueIdSelect2);
            } else {
              dialog.find('a[data-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
                const activeTab = \$(e.target).attr('href')
                if (activeTab === '#location' && !\$venueIdSelect2.data('initialised')) {
                  \$venueIdSelect2.data('initialised', true);
                  makeVenueSelect(\$venueIdSelect2);
                }
              });
            }

            // Parse special fields
            override.forEach(function(field, index) {
                if(['lockOptions','pictureOptions', 'timers'].includes(field.name)) {
                    var parsedValues = JSON.parse(field.value);

                    // Add values to the override array
                    \$.each(parsedValues, function(name, value){

                        if(name == 'keylock') {
                            \$.each(value, function(keylockName, keylockValue){
                                if(keylockName == 'local') {
                                    keylockName = 'keylockLocal';
                                }

                                if(keylockName == 'remote') {
                                    keylockName = 'keylockRemote';
                                }

                                override.push({name: keylockName, value: keylockValue})
                            });
                        }
                        // Convert boolean and numbers to string
                        value = (['boolean','number'].includes(typeof value)) ? value.toString() : value;

                        override.push({name: name, value: value})
                    });
                }

                // format the date field for elevating log level.
                // set to null if the date is in the past.
                if(field.name === 'elevateLogsUntil') {
                  let value = null;
                  if (moment(field.value, 'X').isAfter(moment())) {
                    value = moment(field.value, 'X').format(systemDateFormat)
                  }

                  override[index] = {name: field.name, value: value}
                }
            });

            // Method to create a new input field based on the hidden form
            var createInputField = function(target, inputName, newValue = null) {
                var select2FixFlag = false;
                var timepickerFixFlag = false;
                var timepickerOptionsFixFlag = false;
                var sliderFixFlag = false;
                var sliderFixOptions = {};

                // Grab input field from hidden table
                var \$inputFields = \$settings.find('#' + inputName);

                // If no input field is capture by ID, get special fields
                if(\$inputFields.length == 0) {
                    if( \$settings.find('.multiSelect').length > 0) {
                        // Copy special fields ( timers, pictureOptions ) by selected option
                        \$inputFields = \$settings.find('.multiSelect option:selected[value=\"' + inputName + '\"]').parents('.form-group:first').find('.multiSelect, .multiSelectInputs');

                        \$inputFields.each(function(key, el) {
                            if(\$(el).find('.timePickerDisplayEditForm').length > 0) {
                                timepickerOptionsFixFlag = true;

                                \$(el).find('.input-group.timerInit').removeClass('timerInit');

                                destroyDatePicker(\$(el).find('.timePickerDisplayEditForm:not(.datePickerHelper)'));
                            } else if(\$(el).find('.pictureControlsSlider').length > 0) {
                                sliderFixFlag = true;
                                sliderFixOptions = \$(el).find('.pictureControlsSlider').bootstrapSlider('getAttribute');
                                \$(el).find('.pictureControlsSlider').bootstrapSlider('destroy');
                            }
                        });
                    }
                } else if(\$inputFields.length == 1 && \$inputFields.hasClass('dateControl')) {
                    timepickerFixFlag  = true;

                    destroyDatePicker(\$inputFields);

                    // Time inputs
                    \$inputFields = \$inputFields.parent();
                } else if(\$inputFields.length == 1 && \$inputFields.hasClass('select2-hidden-accessible')) {
                    select2FixFlag = true;
                    // Destroy select2 before copying
                    \$inputFields.select2('destroy');
                }

                // Save old field before cloning
                \$inputFieldsOld = \$inputFields;

                // Clone input fields ( to be able to reuse the originals )
                \$inputFields = \$inputFields.clone(true);

                if(select2FixFlag) {
                    // Mark old field as select2 with the select2 class
                    // so it can be reinitialised if needed
                    \$inputFieldsOld.addClass('select2-hidden-accessible');
                }
                // Add input field to the target
                \$(target).html(\$inputFields);

                if(timepickerFixFlag) {
                    forms.initFields(\$inputFieldsOld.parents('form'), \$inputFieldsOld.find('.dateControl'));
                    forms.initFields(\$(target).parents('form'), \$(target).find('.dateControl'));
                }

                if(timepickerOptionsFixFlag) {
                    timersFormInit(\$inputFieldsOld);
                    timersFormInit(\$(target));

                    // Parent container
                    var \$inputParent = \$inputFields.parent()
                    \$inputParent.addClass('timerOverride');
                    \$inputParent.find('.date-clear-button').remove();
                    \$inputParent.append('<div class=\"text-muted\">";
        // line 1353
        echo twig_escape_filter($this->env, __("Adjust the times of this timer. To add or remove a day, use the Display Profile."), "html", null, true);
        echo "</div>');
                }

                if(sliderFixFlag) {
                    \$inputFieldsOld.find('.pictureControlsSlider').bootstrapSlider(sliderFixOptions);
                    \$inputFields.find('.pictureControlsSlider').bootstrapSlider(sliderFixOptions);
                }

                // Set value if defined
                if(newValue != null) {
                    if(\$(target).find('.multiSelectInputs .pictureControlsSlider').length > 0) {
                        // SLIDER
                        if(!\$.isNumeric(newValue)) { // If value is a label, get index
                            \$(target).find('.multiSelectInputs .slider-tick-label').each(function(idx, el) {
                                if(\$(el).html() == newValue) {
                                    newValue = idx;
                                    return false;
                                }
                            });
                        }

                        // Set value
                        \$(target).find('.pictureControlsSlider').bootstrapSlider('setValue', newValue);
                    } else if(\$inputFields.attr('type') == 'checkbox') {
                        // CHECKBOX
                        \$(\$inputFields).prop('checked', newValue);
                    } else if(timepickerFixFlag) {
                        \$(\$inputFields).find('input').val(newValue);
                    } else if(timepickerOptionsFixFlag) {
                        \$.each(newValue, function(name, value){
                            if(name == 'on') {
                                \$(\$inputFields).find('input.timersOn').val(value);
                            } else if(name == 'off') {
                                \$(\$inputFields).find('input.timersOff').val(value);
                            }
                        })
                    } else {
                        \$(\$inputFields).val(newValue);
                    }
                }

                // Reload select 2 with new value
                if(select2FixFlag) {
                    // Restore select2 after value set
                    makePagedSelect(\$inputFields);
                }

                // Android dimensions init
                if(inputName == 'screenDimensions') {
                    setAndroidDimensions(\$(target));

                    // CSS fix
                    \$(target).find('.androidDimensionInput').removeClass('col-3').addClass('col-6');
                }

                // If there's a multiselect, set the value of the dropdown ( it's not kept on cloning ) and hide it
                \$(target).find('.multiSelect').val(inputName).hide();

                // Style multi selects
                if(\$(target).find('.multiSelectInputs').length > 0) {
                    // Calculate column size for bootstrap
                    var colSize = Math.round(12/\$(target).find('.multiSelectInputs').length);

                    //Remove all style classes and add the new size class
                    \$(target).find('.multiSelectInputs').attr('class', 'multiSelectInputs col-sm-' + colSize)
                }

                // Set data propeties
                \$(target).attr('data-editing', 'true');
                \$(target).attr('data-input-name', inputName);

                // Remove click to edit event
                \$(target).unbind('click');

                // Fixes for slider
                \$(target).find('.slider').addClass('scaled-slider');
                \$(target).find('.pictureControlsSlider').bootstrapSlider('refresh', { useCurrentValue: true });

                // Add help text if exists on label
                let inputHelpText = \$(target).parent('tr').find('td:first strong').attr('title');
                if(inputHelpText) {
                    \$(target).append('<div class=\"text-muted\">' + inputHelpText + '</div>');
                }

                var \$newButton = \$('<button class=\"btn btn-outline-danger btn-sm pull-right button-close-override\" type=\"button\"><i class=\"fa fa-times\"></i></button>').click(function (e) {
                    e.stopPropagation();
                    restoreInputField(target, inputName);
                 });
                \$(target).append(\$newButton);
            };


            // Method to restore the input field to the edit button
            var restoreInputField = function(target, inputName) {

                \$(target).html('<button class=\"btn btn-block btn-outline-secondary\" type=\"button\"><i class=\"fa fa-edit\"></i></button>');

                // Handlers for field edit
                \$(target).off().click(function() {
                    if(!\$(this).data('editing')) {
                        createInputField(\$(this), inputName);
                    }
                });

                \$(target).attr('data-editing', 'false');
            };

            // Build table
            \$.each(\$settings, function(index, element) {
                var \$label = \$(element).find('label');
                var \$input = \$(element).find('input,select');
                var \$help = \$(element).find('small.form-text.text-muted');
                var over = \$label.prop(\"for\");
                var value = '';
                var text = '';
                var help = \$help.length > 0 ? \$help.text() : '';

                // Skip for some fields
                if(['name', 'isDefault'].includes(over)) {
                    return true;
                }

                if(\$(element).hasClass('form-group-timers')) {
                    // Get text and override name
                    over = \$(element).find('.multiSelect').val();
                    text = \$(element).find('.multiSelect option:selected').text();

                    // Get value
                    value = \$(element).find('.timersOn').val() + ' - ' + \$(element).find('.timersOff').val();
                } else if(\$(element).hasClass('form-group-picture-options')) {
                    // Get text and override name
                    over = \$(element).find('.multiSelect').val();
                    text = \$(element).find('.multiSelect option:selected').text();

                    // Get labels
                    var labels = [];
                    \$(element).find('.multiSelectInputs .slider-tick-label').each(function(idx, el) {
                        labels.push(\$(el).html());
                    });

                    // Get value
                    value = \$(element).find('.multiSelectInputs .pictureControlsSlider').bootstrapSlider('getValue');

                    // If specific value has a label, use it as value
                    if(labels[value] != undefined) {
                        value = labels[value];
                    }
                } else if(\$input.attr('type') == 'checkbox'){
                    // Get text and value
                    text = \$label.text();
                    value = \$input.is(\":checked\");

                } else if(\$input.is('select')){
                    // Get text and value
                    text = \$label.text();
                    value = \$input.find('option:selected').text();
                } else if(over === 'screenDimensions'){
                    // Get text and value
                    text = \$label.text();
                    value = \$(element).find('#screenDimensions').val();
                } else {
                    // Get text and value
                    text = \$label.text();
                    value = \$input.val();
                }

                // Skip empty fields
                if(over == '' || over == undefined || over == null) {
                    return true;
                }

                // Append new row to the table
                var \$tableNewRow = \$('<tr><td style=\"width: 40%;\"><strong title=\"' + help + '\">' + text + '</strong></td><td style=\"width: 25%; overflow-x: auto; max-width: 250px;\"><div>' + value + '</div></td><td class=\"override-input text-center\" style=\"width: 35%;\" data-editing=\"false\" data-input-name=\"' + over + '\"><button class=\"btn btn-block btn-outline-secondary\" type=\"button\"><i class=\"fa fa-edit\"></i></button></td></tr>').appendTo(\$table);

                // Get override element
                var overrideEl = override.find(function(x) { return x.name === over; });
                if(overrideEl != undefined) { //If element was found, create an input

                    // Create input with override value
                    createInputField(\$tableNewRow.find('.override-input'), over, overrideEl.value);
                }
            });

            // Handlers for field edit
            \$(dialog).find('.override-input[data-editing=\"false\"]').click(function() {
                var inputName = \$(this).data('inputName');
                createInputField(\$(this), inputName);
            });

            // Refresh on tab switch to fix broken labels
            \$('a[data-toggle=\"tab\"]').on('shown.bs.tab', function() {
                \$('.pictureControlsSlider').bootstrapSlider('refresh', { useCurrentValue: true });
            });

            // Call XiboInitialise on table
            XiboInitialise('#settings-from-profile');
        }

        // Custom submit for display form
        function displayEditFormSubmit() {
            var \$form = \$('#displayEditForm');
            // Grab and alter the value in the bandwidth limit field
            var bandwidthLimitField = \$form.find(\"input[name=bandwidthLimit]\");
            var bandwidthLimitUnitsField = \$form.find(\"select[name=bandwidthLimitUnits]\");
            var bandwidthLimit = bandwidthLimitField.val();

            if (bandwidthLimitUnitsField.val() == 'mb') {
                bandwidthLimit = bandwidthLimit * 1024;
            } else if (bandwidthLimitUnitsField.val() == 'gb') {
                bandwidthLimit = bandwidthLimit * 1024 * 1024;
            }

            // Set the field
            bandwidthLimitField.prop('value', bandwidthLimit);

            // Remove temp fields and enable checkbox after submit
            \$form.submit(function(event) {
                event.preventDefault();
                // Re-enable checkboxes
                \$form.find('input[type=\"checkbox\"]').each(function () {
                    // Enable checkbox
                    \$(this).attr('disabled', false);
                });

                // Remove temp input fields
                \$form.find('input.temp-input').each(function () {
                    \$(this).remove();
                });
            });

            // Replace all checkboxes with hidden input fields
            \$form.find('input[type=\"checkbox\"]').each(function () {
                // Get checkbox values
                var value = \$(this).is(':checked') ? 'on' : 'off';
                var id = \$(this).attr('id');

                // Create hidden input
                \$('<input type=\"hidden\" class=\"temp-input\">')
                    .attr('id', id)
                    .attr('name', id)
                    .val(value)
                    .appendTo(\$(this).parent());

                // Disable checkbox so it won't be submitted
                \$(this).attr('disabled', true);
            });

            // Submit form
            \$form.submit();
        }

        \$('body').on('click', '.display-screenshot', function(el) {
            var displayId = el.target.dataset.displayId;
            var displayType = el.target.dataset.type;
            var clientCode = el.target.dataset.clientCode;

            var statusWindowData = {};

            \$.ajax({
                url: \"/display/status/\" + displayId,
                method: \"GET\",
                dataType: \"json\",
                success: function (data) {
                    if (data != null) {
                        // do some processing on data received from webOS and Tizen Players.
                        if (clientCode < 400 && (displayType === 'webOS' || displayType === 'sssp')) {
                            data.logMessagesArray = JSON.stringify(data.logMessagesArray);
                            data.allLayouts = JSON.stringify(data.allLayouts);
                            data.scheduledLayouts = JSON.stringify(data.scheduledLayouts);
                            data.validLayouts = JSON.stringify(data.validLayouts);
                            data.invalidLayouts = JSON.stringify(data.invalidLayouts);
                            data.blacklistArray = JSON.stringify(data.blacklistArray);
                            data.spaceTotal = formatBytes(data.spaceTotal, 2);
                            data.spaceFree = formatBytes(data.spaceFree, 2);
                            data.spaceUsed = formatBytes(data.spaceUsed, 2);
                        }

                        statusWindowData['data'] = data;
                        statusWindowData['type'] = displayType;
                        var statusWindowTemplate = Handlebars.compile(\$('#display-status-window-template').html());
                        \$('.modal-body').append(statusWindowTemplate(statusWindowData));
                    }
                }
            });
        });
    </script>

    <style>
        #settings-from-profile tr.row-fluid {
            height: 50px;
        }
    </style>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "display-page.twig";
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
        return array (  1999 => 1353,  1857 => 1214,  1821 => 1181,  1808 => 1171,  1795 => 1161,  1781 => 1150,  1753 => 1125,  1744 => 1118,  1737 => 1113,  1735 => 1112,  1728 => 1107,  1726 => 1106,  1547 => 930,  1543 => 929,  1535 => 924,  1531 => 923,  1523 => 918,  1519 => 917,  1511 => 912,  1507 => 911,  1499 => 906,  1495 => 905,  1487 => 900,  1483 => 899,  1191 => 610,  1187 => 609,  1180 => 605,  1176 => 604,  1166 => 599,  1162 => 598,  1158 => 597,  1014 => 458,  1009 => 456,  978 => 427,  968 => 419,  966 => 418,  878 => 333,  858 => 315,  854 => 313,  852 => 312,  847 => 310,  842 => 309,  838 => 308,  823 => 296,  817 => 293,  813 => 292,  809 => 291,  803 => 288,  799 => 287,  795 => 286,  777 => 271,  773 => 270,  769 => 269,  765 => 268,  761 => 267,  757 => 266,  753 => 265,  749 => 264,  745 => 263,  741 => 262,  737 => 261,  733 => 260,  729 => 259,  725 => 258,  721 => 257,  717 => 256,  713 => 255,  709 => 254,  705 => 253,  701 => 252,  697 => 251,  693 => 250,  689 => 249,  685 => 248,  681 => 247,  677 => 246,  673 => 245,  669 => 244,  665 => 243,  661 => 242,  657 => 241,  653 => 240,  649 => 239,  645 => 238,  641 => 237,  637 => 236,  633 => 235,  629 => 234,  625 => 233,  621 => 232,  617 => 231,  613 => 230,  608 => 229,  602 => 228,  598 => 227,  594 => 226,  590 => 225,  586 => 224,  582 => 223,  578 => 222,  574 => 221,  570 => 220,  566 => 219,  562 => 218,  558 => 217,  554 => 216,  550 => 215,  539 => 207,  533 => 204,  526 => 200,  518 => 195,  510 => 192,  504 => 189,  492 => 181,  490 => 179,  489 => 178,  487 => 176,  482 => 175,  477 => 174,  473 => 173,  467 => 171,  465 => 169,  464 => 168,  463 => 167,  462 => 166,  460 => 164,  455 => 163,  450 => 162,  445 => 161,  440 => 160,  436 => 159,  430 => 157,  428 => 155,  427 => 154,  425 => 152,  420 => 151,  415 => 150,  411 => 149,  405 => 147,  401 => 146,  395 => 144,  391 => 143,  385 => 141,  381 => 140,  375 => 138,  371 => 137,  365 => 135,  363 => 133,  362 => 132,  361 => 131,  360 => 130,  359 => 129,  357 => 127,  352 => 126,  347 => 125,  342 => 124,  337 => 123,  332 => 122,  328 => 121,  322 => 119,  318 => 118,  311 => 114,  307 => 112,  301 => 111,  296 => 110,  294 => 109,  291 => 108,  285 => 106,  282 => 94,  277 => 93,  275 => 92,  272 => 91,  266 => 89,  261 => 88,  256 => 87,  251 => 86,  246 => 85,  244 => 84,  238 => 82,  236 => 80,  235 => 79,  233 => 77,  228 => 76,  223 => 75,  219 => 74,  213 => 72,  211 => 70,  210 => 69,  208 => 67,  203 => 66,  198 => 65,  194 => 64,  188 => 62,  186 => 60,  185 => 59,  183 => 57,  178 => 56,  173 => 55,  169 => 54,  163 => 52,  161 => 50,  160 => 49,  159 => 48,  157 => 46,  152 => 45,  147 => 44,  142 => 43,  138 => 42,  132 => 40,  128 => 39,  122 => 37,  118 => 36,  110 => 31,  106 => 30,  99 => 26,  94 => 24,  91 => 23,  87 => 22,  79 => 18,  69 => 16,  67 => 15,  64 => 14,  60 => 13,  52 => 11,  47 => 8,  45 => 9,  38 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "display-page.twig", "/var/www/html/cms_ubi/views/display-page.twig");
    }
}
