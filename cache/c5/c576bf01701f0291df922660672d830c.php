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

/* layout-page.twig */
class __TwigTemplate_cc1939299238c9d1b78324ebb82b709b extends Template
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
        // line 1
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "layout-page.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("authed.twig", "layout-page.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("Layouts"), "html", null, true);
        echo " | ";
    }

    // line 6
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <div class=\"widget-action-menu pull-right\">
        ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["layout.add"], "method", false, false, false, 8)) {
            // line 9
            echo "            <button class=\"btn btn-success layout-add-button\"
                    title=\"";
            // line 10
            echo __("Add a new Layout and jump to the layout editor.");
            echo "\"
                    href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.add"), "html", null, true);
            echo "\">
                <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
            // line 12
            echo __("Add Layout");
            // line 13
            echo "            </button>
            <button class=\"btn btn-info\" id=\"layoutUploadForm\" title=\"";
            // line 14
            echo __("Import a Layout from a ZIP file.");
            echo "\" href=\"#\"> <i class=\"fa fa-cloud-download\" aria-hidden=\"true\"></i> ";
            echo __("Import");
            echo "</button>
        ";
        }
        // line 16
        echo "        <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
        echo __("Refresh the Table");
        echo "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
    </div>
";
    }

    // line 20
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 22
        echo __("Layouts");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-type=\"layout\" data-grid-name=\"layoutView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general-filter\" role=\"tab\" data-toggle=\"tab\" aria-selected=\"true\"><span>";
        // line 28
        echo __("General");
        echo "</span></a></li>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#advanced-filter\" role=\"tab\" data-toggle=\"tab\" aria-selected=\"false\"><span>";
        // line 29
        echo __("Advanced");
        echo "</span></a></li>
                        </ul>
                        <form class=\"form-inline d-block\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"general-filter\" role=\"tabpanel\">
                                    ";
        // line 34
        ob_start(function () { return ''; });
        echo __("ID");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 35
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_number", ["campaignId", ($context["title"] ?? null)], 35, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 37
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 38
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_inputNameGrid", ["layout", ($context["title"] ?? null)], 38, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 40)) {
            // line 41
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("Tags");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 42
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("Exact match?");
            $context["exactTagTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 43
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("When filtering by multiple Tags, which logical operator should be used?");
            $context["logicalOperatorTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 44
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("A comma separated list of tags to filter by. Enter a tag|tag value to filter tags with values. Enter --no-tag to filter all items without tags. Enter - before a tag or tag value to exclude from results.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 45
            echo "                                        ";
            echo twig_call_macro($macros["inline"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), null, ($context["helpText"] ?? null), null, null, null, "exactTags", ($context["exactTagTitle"] ?? null), ($context["logicalOperatorTitle"] ?? null)], 45, $context, $this->getSourceContext());
            echo "
                                    ";
        }
        // line 47
        echo "
                                    ";
        // line 48
        ob_start(function () { return ''; });
        echo __("Code");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_input", ["codeLike", ($context["title"] ?? null)], 49, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 51
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displaygroup.view"], "method", false, false, false, 51)) {
            // line 52
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("Display Group");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 53
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("Show Layouts active on the selected Display / Display Group");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 54
            echo "                                        ";
            $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.search")], ["name" => "data-filter-options", "value" => "{\"isDisplaySpecific\":-1}"], ["name" => "data-search-term", "value" => "displayGroup"], ["name" => "data-id-property", "value" => "displayGroupId"], ["name" => "data-text-property", "value" => "displayGroup"], ["name" => "data-initial-key", "value" => "displayGroupId"]];
            // line 66
            echo "                                        ";
            echo twig_call_macro($macros["inline"], "macro_dropdown", ["activeDisplayGroupId", "single", ($context["title"] ?? null), "", null, "displayGroupId", "displayGroup", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 66, $context, $this->getSourceContext());
            echo "
                                    ";
        }
        // line 68
        echo "
                                    ";
        // line 69
        ob_start(function () { return ''; });
        echo __("Owner");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 70
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("Show items owned by the selected User.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 71
        echo "                                    ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.search")], ["name" => "data-search-term", "value" => "userName"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "userId"], ["name" => "data-text-property", "value" => "userName"], ["name" => "data-initial-key", "value" => "userId"]];
        // line 83
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["userId", "single", ($context["title"] ?? null), "", null, "userId", "userName", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 83, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 85
        ob_start(function () { return ''; });
        echo __("Owner User Group");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 86
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("Show items owned by users in the selected User Group.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 87
        echo "                                    ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("group.search")], ["name" => "data-search-term", "value" => "group"], ["name" => "data-id-property", "value" => "groupId"], ["name" => "data-text-property", "value" => "group"], ["name" => "data-initial-key", "value" => "userGroupId"]];
        // line 98
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["ownerUserGroupId", "single", ($context["title"] ?? null), "", null, "groupId", "group", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 98, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 100
        ob_start(function () { return ''; });
        echo __("Orientation");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 101
        echo "                                    ";
        $context["option1"] = __("All");
        // line 102
        echo "                                    ";
        $context["option2"] = __("Landscape");
        // line 103
        echo "                                    ";
        $context["option3"] = __("Portrait");
        // line 104
        echo "                                    ";
        $context["values"] = [["id" => "", "value" => ($context["option1"] ?? null)], ["id" => "landscape", "value" => ($context["option2"] ?? null)], ["id" => "portrait", "value" => ($context["option3"] ?? null)]];
        // line 105
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["orientation", "single", ($context["title"] ?? null), "", ($context["values"] ?? null), "id", "value"], 105, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 107
        echo twig_call_macro($macros["inline"], "macro_hidden", ["folderId"], 107, $context, $this->getSourceContext());
        echo "
                                </div>
                                <div class=\"tab-pane\" id=\"advanced-filter\" role=\"tabpanel\">

                                    ";
        // line 111
        ob_start(function () { return ''; });
        echo __("Retired");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 112
        echo "                                    ";
        $context["option1"] = __("Yes");
        // line 113
        echo "                                    ";
        $context["option2"] = __("No");
        // line 114
        echo "                                    ";
        $context["values"] = [["id" => 1, "value" => ($context["option1"] ?? null)], ["id" => 0, "value" => ($context["option2"] ?? null)]];
        // line 115
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["retired", "single", ($context["title"] ?? null), 0, ($context["values"] ?? null), "id", "value"], 115, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 117
        ob_start(function () { return ''; });
        echo __("Show");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 118
        echo "                                    ";
        $context["option1"] = __("All");
        // line 119
        echo "                                    ";
        $context["option2"] = __("Only Used");
        // line 120
        echo "                                    ";
        $context["option3"] = __("Only Unused");
        // line 121
        echo "                                    ";
        $context["values"] = [["id" => 1, "value" => ($context["option1"] ?? null)], ["id" => 2, "value" => ($context["option2"] ?? null)], ["id" => 3, "value" => ($context["option3"] ?? null)]];
        // line 122
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["layoutStatusId", "single", ($context["title"] ?? null), 1, ($context["values"] ?? null), "id", "value"], 122, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 124
        ob_start(function () { return ''; });
        echo __("Description");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 125
        echo "                                    ";
        $context["option1"] = __("All");
        // line 126
        echo "                                    ";
        $context["option2"] = __("1st line");
        // line 127
        echo "                                    ";
        $context["option3"] = __("Widget List");
        // line 128
        echo "                                    ";
        $context["values"] = [["id" => 1, "value" => ($context["option1"] ?? null)], ["id" => 2, "value" => ($context["option2"] ?? null)], ["id" => 3, "value" => ($context["option3"] ?? null)]];
        // line 129
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["showDescriptionId", "single", ($context["title"] ?? null), 2, ($context["values"] ?? null), "id", "value"], 129, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 131
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["library.view"], "method", false, false, false, 131)) {
            // line 132
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("Media");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 133
            echo "                                        ";
            echo twig_call_macro($macros["inline"], "macro_input", ["mediaLike", ($context["title"] ?? null)], 133, $context, $this->getSourceContext());
            echo "
                                    ";
        }
        // line 135
        echo "
                                    ";
        // line 136
        ob_start(function () { return ''; });
        echo __("Layout ID");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 137
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_number", ["layoutId", ($context["title"] ?? null)], 137, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 139
        ob_start(function () { return ''; });
        echo __("Modified Since");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 140
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_date", ["modifiedSinceDt", ($context["title"] ?? null)], 140, $context, $this->getSourceContext());
        echo "
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class=\"grid-with-folders-container\">
                    <div class=\"grid-folder-tree-container p-3\" id=\"grid-folder-filter\">
                        <input id=\"jstree-search\" class=\"form-control\" type=\"text\" placeholder=\"";
        // line 149
        echo __("Search");
        echo "\">
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"folder-tree-clear-selection-button\">
                            <label class=\"form-check-label\" for=\"folder-tree-clear-selection-button\" title=\"";
        // line 152
        echo __("Search in all folders");
        echo "\">";
        echo __("All Folders");
        echo "</label>
                        </div>
                        <div class=\"folder-search-no-results d-none\">
                            <p>";
        // line 155
        echo __("No Folders matching the search term");
        echo "</p>
                        </div>
                        <div id=\"container-folder-tree\"></div>
                    </div>

                    <div class=\"folder-controller d-none\">
                        <button type=\"button\" id=\"folder-tree-select-folder-button\" class=\"btn btn-outline-secondary\" title=\"";
        // line 161
        echo __("Open / Close Folder Search options");
        echo "\"><i class=\"fas fa-folder fa-1x\"></i></button>
                        <div id=\"breadcrumbs\" class=\"mt-2 pl-2\"></div>
                    </div>

                    <div id=\"datatable-container\">
                        <div class=\"XiboData card py-3\">
                            <table id=\"layouts\" class=\"table table-striped responsive nowrap\" data-content-type=\"layout\" data-content-id-name=\"layoutId\" data-state-preference-name=\"layoutGrid\" style=\"width: 100%;\">
                                <thead>
                                    <tr>
                                        <th>";
        // line 170
        echo __("ID");
        echo "</th>
                                        <th>";
        // line 171
        echo __("Name");
        echo "</th>
                                        <th>";
        // line 172
        echo __("Status");
        echo "</th>
                                        <th>";
        // line 173
        echo __("Description");
        echo "</th>
                                        <th>";
        // line 174
        echo __("Duration");
        echo "</th>
                                        ";
        // line 175
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 175)) {
            echo "<th>";
            echo __("Tags");
            echo "</th>";
        }
        // line 176
        echo "                                        <th>";
        echo __("Orientation");
        echo "</th>
                                        <th>";
        // line 177
        echo __("Thumbnail");
        echo "</th>
                                        <th>";
        // line 178
        echo __("Owner");
        echo "</th>
                                        <th>";
        // line 179
        echo __("Sharing");
        echo "</th>
                                        <th>";
        // line 180
        echo __("Valid?");
        echo "</th>
                                        <th>";
        // line 181
        echo __("Stats?");
        echo "</th>
                                        <th>";
        // line 182
        echo __("Created");
        echo "</th>
                                        <th>";
        // line 183
        echo __("Modified");
        echo "</th>
                                        <th>";
        // line 184
        echo __("Layout ID");
        echo "</th>
                                        <th>";
        // line 185
        echo __("Code");
        echo "</th>
                                        <th class=\"rowMenu\"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 201
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 202
        echo "    <script type=\"text/javascript\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">
        var table;
        \$(document).ready(function() {
            ";
        // line 205
        if ( !twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 205)) {
            // line 206
            echo "            disableFolders();
            ";
        }
        // line 208
        echo "
            table = \$(\"#layouts\").DataTable({
                language: dataTablesLanguage,
                lengthMenu: [10, 25, 50, 100, 250, 500],
                dom: dataTablesTemplate,
                serverSide: true,
                stateSave: true,
                stateDuration: 0,
                responsive: true,
                stateLoadCallback: dataTableStateLoadCallback,
                stateSaveCallback: dataTableStateSaveCallback,
                filter: false,
                searchDelay: 3000,
                dataType: 'json',
                order: [[1, \"asc\"]],
                ajax: {
                    url: \"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.search"), "html", null, true);
        echo "\",
                    data: function (d) {
                        \$.extend(d, \$(\"#layouts\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                columns: [
                    {\"data\": \"campaignId\", responsivePriority: 1},
                    {
                        \"data\": \"layout\",
                        responsivePriority: 2,
                        \"render\": dataTableSpacingPreformatted
                    },
                    {
                        \"name\": \"publishedStatus\",
                        responsivePriority: 2,
                        \"data\": function (data, type) {
                            if (data.publishedDate != null) {
                                var now = moment();
                                var published = moment(data.publishedDate);
                                var differenceMinutes = published.diff(now, 'minutes');
                                var momentDifference = moment(now).to(published);

                                if (differenceMinutes < -5) {
                                    return data.publishedStatus.concat(\" - \", translations.publishedStatusFailed);
                                } else {
                                    return data.publishedStatus.concat(\" - \", translations.publishedStatusFuture + \" \" + momentDifference);
                                }
                            } else {
                                return data.publishedStatus;
                            }

                        }
                    },
                    {
                        \"name\": \"description\",
                        \"data\": null,
                        responsivePriority: 10,
                        \"render\": {\"_\": \"description\", \"display\": \"descriptionFormatted\", \"sort\": \"description\"}
                    },
                    {
                        \"name\": \"duration\",
                        responsivePriority: 3,
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.duration;

                            return dataTableTimeFromSeconds(data.duration, type);
                        }
                    },
                    ";
        // line 273
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 273)) {
            echo "{
                        \"sortable\": false,
                        \"visible\": false,
                        responsivePriority: 3,
                        \"data\": dataTableCreateTags
                    },";
        }
        // line 279
        echo "                    { data: 'orientation', responsivePriority: 10, visible: false},
                    {
                        responsivePriority: 5,
                        data: 'thumbnail',
                        render: function(data, type, row) {
                          if (type !== 'display') {
                            return row.layoutId;
                          }
                          if (data) {
                            return '<a class=\"img-replace\" data-toggle=\"lightbox\" data-type=\"image\" href=\"' + data + '\">' +
                                '<img class=\"img-fluid\" src=\"' + data + '\" alt=\"";
        // line 289
        echo twig_escape_filter($this->env, __("Thumbnail"), "html", null, true);
        echo "\" />' +
                                '</a>';
                          } else {
                            var addUrl = '";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.thumbnail.add", ["id" => ":id"]), "html", null, true);
        echo "'.replace(':id', row.layoutId);
                            return '<a class=\"img-replace generate-layout-thumbnail\" data-type=\"image\" href=\"' + addUrl + '\">' +
                                '<img class=\"img-fluid\" src=\"";
        // line 294
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/thumbs/placeholder.png"], "method", false, false, false, 294), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, __("Add Thumbnail"), "html", null, true);
        echo "\" />' +
                                '</a>';
                          }
                          return '';
                        },
                        sortable: false
                    },
                    {\"data\": \"owner\", responsivePriority: 4},
                    {
                        \"data\": \"groupsWithPermissions\",
                        responsivePriority: 4,
                        \"render\": dataTableCreatePermissions
                    },
                    {
                        \"name\": \"status\",
                        responsivePriority: 3,
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.status;

                            var icon = \"\";
                            if (data.status == 1)
                                icon = \"fa-check\";
                            else if (data.status == 2)
                                icon = \"fa-exclamation\";
                            else if (data.status == 3)
                                icon = \"fa-cogs\";
                            else
                                icon = \"fa-times\";

                            return '<span class=\"fa ' + icon + '\" title=\"' + (data.statusDescription) + ((data.statusMessage == null) ? \"\" : \" - \" + (data.statusMessage)) + '\"></span>';
                        }
                    },
                    {
                        \"name\": \"enableStat\",
                        responsivePriority: 4,
                        \"data\": function (data) {

                            var icon = \"\";
                            if (data.enableStat == 1)
                                icon = \"fa-check\";
                            else
                                icon = \"fa-times\";

                            return '<span class=\"fa ' + icon + '\" title=\"' + (data.enableStatDescription) + '\"></span>';
                        }
                    },
                    {
                        \"data\": \"createdDt\",
                        responsivePriority: 6,
                        \"render\": dataTableDateFromIso,
                        \"visible\": false
                    },
                    {
                        data: \"modifiedDt\",
                        responsivePriority: 6,
                        render: dataTableDateFromIso,
                        visible: true
                    },
                    {
                      data: \"layoutId\",
                      visible: false,
                      responsivePriority: 4
                    },
                    {\"data\": \"code\", \"visible\":false, responsivePriority: 4},
                    {
                        \"orderable\": false,
                        responsivePriority: 1,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('draw', { form: \$(\"#layouts\").closest(\".XiboGrid\").find(\".FilterDiv form\") }, dataTableCreateTagEvents);
            table.on('draw', function(e, settings) {
              \$('#' + e.target.id + ' .generate-layout-thumbnail').on('click', function(e) {
                e.preventDefault();
                var \$anchor = \$(this);
                \$.ajax({
                  url: \$anchor.attr('href'),
                  method: 'POST',
                  success: function() {
                    \$anchor.find('img').attr('src', \$anchor.attr('href'));
                    \$anchor.removeClass('generate-layout-thumbnail').attr('data-toggle', 'lightbox');
                  }
                });
              });
            });
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#layouts_wrapper').find('.dataTables_buttons'));

            \$(\"#refreshGrid\").click(function() {
                table.ajax.reload();
            });

            // Bind to the layout add button
            \$('button.layout-add-button').on('click', function() {
              let currentWorkingFolderId =
                \$(\"#layouts\")
                  .closest(\".XiboGrid\")
                  .find(\".FilterDiv form\")
                  .find('#folderId').val()
                // Submit the URL provided as a POST request.
                \$.ajax({
                    type: 'POST',
                    url: \$(this).attr('href'),
                    cache: false,
                    data : {folderId : currentWorkingFolderId},
                    dataType: 'json',
                    success: function(response, textStatus, error) {
                        if (response.success && response.id) {
                            XiboRedirect('";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.designer", ["id" => ":id"]), "html", null, true);
        echo "'.replace(':id', response.id));
                        } else {
                            if (response.login) {
                                LoginBox(response.message);
                            } else {
                                SystemMessage(response.message ?? '";
        // line 411
        echo twig_escape_filter($this->env, __("Unknown Error"), "html", null, true);
        echo "', false);
                            }
                        }
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        SystemMessage(xhr.responseText, false);
                    },
                });
            });
        });

        \$(\"#layoutUploadForm\").click(function(e) {
            e.preventDefault();
            var currentWorkingFolderId = \$('#folderId').val();

            // Open the upload dialog with our options.
            openUploadForm({
                url: \"";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.import"), "html", null, true);
        echo "\",
                title: \"";
        // line 429
        echo twig_escape_filter($this->env, __("Upload Layout"), "html", null, true);
        echo "\",
                videoImageCovers: false,
                buttons: {
                    main: {
                        label: \"";
        // line 433
        echo twig_escape_filter($this->env, __("Done"), "html", null, true);
        echo "\",
                        className: \"btn-primary btn-bb-main\",
                        callback: function () {
                            table.ajax.reload();
                            XiboDialogClose();
                        }
                    }
                },
                templateOptions: {
                    layoutImport: true,
                    updateInAllChecked: ";
        // line 443
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "LIBRARY_MEDIA_UPDATEINALL_CHECKB", [], "any", false, false, false, 443) == 1)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    deleteOldRevisionsChecked: ";
        // line 444
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "LIBRARY_MEDIA_DELETEOLDVER_CHECKB", [], "any", false, false, false, 444) == 1)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    trans: {
                        addFiles: \"";
        // line 446
        echo twig_escape_filter($this->env, __("Add Layout Export ZIP Files"), "html", null, true);
        echo "\",
                        startUpload: \"";
        // line 447
        echo twig_escape_filter($this->env, __("Start Import"), "html", null, true);
        echo "\",
                        cancelUpload: \"";
        // line 448
        echo twig_escape_filter($this->env, __("Cancel Import"), "html", null, true);
        echo "\",
                        replaceExistingMediaMessage: \"";
        // line 449
        echo twig_escape_filter($this->env, __("Replace Existing Media?"), "html", null, true);
        echo "\",
                        importTagsMessage: \"";
        // line 450
        echo twig_escape_filter($this->env, __("Import Tags?"), "html", null, true);
        echo "\",
                        useExistingDataSetsMessage: \"";
        // line 451
        echo twig_escape_filter($this->env, __("Use existing DataSets matched by name?"), "html", null, true);
        echo "\",
                        dataSetDataMessage: \"";
        // line 452
        echo twig_escape_filter($this->env, __("Import DataSet Data?"), "html", null, true);
        echo "\",
                        fallbackMessage: \"";
        // line 453
        echo twig_escape_filter($this->env, __("Import Widget Fallback Data?"), "html", null, true);
        echo "\",
                        selectFolder: \"";
        // line 454
        echo twig_escape_filter($this->env, __("Select Folder"), "html", null, true);
        echo "\",
                        selectFolderTitle: \"";
        // line 455
        echo twig_escape_filter($this->env, __("Change Current Folder location"), "html", null, true);
        echo "\",
                        selectedFolder: \"";
        // line 456
        echo twig_escape_filter($this->env, __("Current Folder"), "html", null, true);
        echo ":\",
                        selectedFolderTitle: \"";
        // line 457
        echo twig_escape_filter($this->env, __("Upload files to this Folder"), "html", null, true);
        echo "\"
                    },
                    upload: {
                        maxSize: ";
        // line 460
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSize", [], "any", false, false, false, 460), "html", null, true);
        echo ",
                        maxSizeMessage: \"";
        // line 461
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSizeMessage", [], "any", false, false, false, 461), "html", null, true);
        echo "\",
                        validExt: \"zip\"
                    },
                    currentWorkingFolderId: currentWorkingFolderId,
                    folderSelector: true
                },
                formOpenedEvent: function () {
                    // Configure the active behaviour of the checkboxes
                    \$(\"#useExistingDataSets\").on(\"click\", function () {
                        \$(\"#importDataSetData\").prop(\"disabled\", (\$(this).is(\":checked\")));
                    });
                },
                uploadDoneEvent: function (data) {
                    XiboDialogClose();
                    table.ajax.reload();
                }
            });
        });

        function layoutExportFormSubmit() {
            var \$form = \$(\"#layoutExportForm\");
            window.location = \$form.attr(\"action\") + \"?\" + \$form.serialize();

            setTimeout(function() {
                XiboDialogClose();
            }, 1000);
        }

        function assignLayoutToCampaignFormSubmit() {
            var form = \$(\"#layoutAssignCampaignForm\");

            var url = form.prop(\"action\").replace(\":id\", form.find(\"#campaignId\").val());

            \$.ajax({
                type: form.attr(\"method\"),
                url: url,
                data: {layoutId: form.data().layoutId},
                cache: false,
                dataType:\"json\",
                success: XiboSubmitResponse
            });
        }

        function setEnableStatMultiSelectFormOpen(dialog) {
            var \$input = \$('<input type=checkbox id=\"enableStat\" name=\"enableStat\"> ";
        // line 505
        echo twig_escape_filter($this->env, __("Enable Stats Collection?"), "html", null, true);
        echo " </input>');
            var \$helpText = \$('<span class=\"help-block\">";
        // line 506
        echo twig_escape_filter($this->env, __("Check to enable the collection of Proof of Play statistics for the selected items."), "html", null, true);
        echo "</span>');

            \$input.on('change', function() {
                dialog.data().commitData = {enableStat: \$(this).val()};
            });

            \$(dialog).find('.modal-body').append(\$input);
            \$(dialog).find('.modal-body').append(\$helpText);
        }

        function layoutPublishFormOpen() {
          // Nothing to do here, but we use the same form on the layout designer and have a callback registered there
        }

        function layoutEditFormSaved() {
          // Nothing to do here.
        }
    </script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout-page.twig";
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
        return array (  914 => 506,  910 => 505,  863 => 461,  859 => 460,  853 => 457,  849 => 456,  845 => 455,  841 => 454,  837 => 453,  833 => 452,  829 => 451,  825 => 450,  821 => 449,  817 => 448,  813 => 447,  809 => 446,  800 => 444,  792 => 443,  779 => 433,  772 => 429,  768 => 428,  748 => 411,  740 => 406,  623 => 294,  618 => 292,  612 => 289,  600 => 279,  591 => 273,  539 => 224,  521 => 208,  517 => 206,  515 => 205,  508 => 202,  504 => 201,  485 => 185,  481 => 184,  477 => 183,  473 => 182,  469 => 181,  465 => 180,  461 => 179,  457 => 178,  453 => 177,  448 => 176,  442 => 175,  438 => 174,  434 => 173,  430 => 172,  426 => 171,  422 => 170,  410 => 161,  401 => 155,  393 => 152,  387 => 149,  374 => 140,  370 => 139,  364 => 137,  360 => 136,  357 => 135,  351 => 133,  346 => 132,  344 => 131,  338 => 129,  335 => 128,  332 => 127,  329 => 126,  326 => 125,  322 => 124,  316 => 122,  313 => 121,  310 => 120,  307 => 119,  304 => 118,  300 => 117,  294 => 115,  291 => 114,  288 => 113,  285 => 112,  281 => 111,  274 => 107,  268 => 105,  265 => 104,  262 => 103,  259 => 102,  256 => 101,  252 => 100,  246 => 98,  243 => 87,  238 => 86,  234 => 85,  228 => 83,  225 => 71,  220 => 70,  216 => 69,  213 => 68,  207 => 66,  204 => 54,  199 => 53,  194 => 52,  192 => 51,  186 => 49,  182 => 48,  179 => 47,  173 => 45,  168 => 44,  163 => 43,  158 => 42,  153 => 41,  151 => 40,  145 => 38,  141 => 37,  135 => 35,  131 => 34,  123 => 29,  119 => 28,  112 => 24,  107 => 22,  104 => 21,  100 => 20,  92 => 16,  85 => 14,  82 => 13,  80 => 12,  76 => 11,  72 => 10,  69 => 9,  67 => 8,  64 => 7,  60 => 6,  52 => 4,  47 => 1,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-page.twig", "/var/www/html/cms_ubi/views/layout-page.twig");
    }
}
