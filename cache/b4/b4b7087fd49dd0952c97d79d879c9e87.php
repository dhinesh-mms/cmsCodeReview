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

/* library-page.twig */
class __TwigTemplate_66987003ed8c1b3a7bed848db5430dc9 extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "library-page.twig", 9)->unwrap();
        // line 8
        $this->parent = $this->loadTemplate("authed.twig", "library-page.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("Library"), "html", null, true);
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
        if (((twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["library.add", "library.modify"]], "method", false, false, false, 15) > 0) || (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "SETTING_LIBRARY_TIDY_ENABLED", [], "any", false, false, false, 15) == 1))) {
            // line 16
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["library.add"], "method", false, false, false, 16)) {
                // line 17
                echo "                <button class=\"btn btn-success\" href=\"#\" id=\"libraryUploadForm\" title=\"";
                echo __("Add a new media item to the library");
                echo "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo __("Add Media");
                echo "</button>
                <button class=\"btn btn-success XiboFormButton\" title=\"";
                // line 18
                echo __("Add a new media item to the library via external URL");
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.uploadUrl.form"), "html", null, true);
                echo "\"> <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo __("Add media (URL)");
                echo "</button>
            ";
            }
            // line 20
            echo "            ";
            if (((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "SETTING_LIBRARY_TIDY_ENABLED", [], "any", false, false, false, 20) == 1) && twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["library.modify"], "method", false, false, false, 20))) {
                // line 21
                echo "                <button class=\"btn btn-danger XiboFormButton\" title=\"";
                echo __("Run through the library and remove unused and unnecessary files");
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.tidy.form"), "html", null, true);
                echo "\"> <i class=\"fa fa-trash\" aria-hidden=\"true\"></i> ";
                echo __("Tidy Library");
                echo "</button>
            ";
            }
            // line 23
            echo "        ";
        }
        // line 24
        echo "        <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
        echo __("Refresh the Table");
        echo "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
    </div>
";
    }

    // line 29
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 31
        echo __("Library");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"libraryView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 37
        ob_start(function () { return ''; });
        echo __("ID");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 38
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_number", ["mediaId", ($context["title"] ?? null)], 38, $context, $this->getSourceContext());
        echo "

                            ";
        // line 40
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_inputNameGrid", ["media", ($context["title"] ?? null)], 41, $context, $this->getSourceContext());
        echo "

                            ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 43)) {
            // line 44
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("Tags");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 45
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("Exact match?");
            $context["exactTagTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 46
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("When filtering by multiple Tags, which logical operator should be used?");
            $context["logicalOperatorTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 47
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("A comma separated list of tags to filter by. Enter a tag|tag value to filter tags with values. Enter --no-tag to filter all items without tags. Enter - before a tag or tag value to exclude from results.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 48
            echo "                                ";
            echo twig_call_macro($macros["inline"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), null, ($context["helpText"] ?? null), null, null, null, "exactTags", ($context["exactTagTitle"] ?? null), ($context["logicalOperatorTitle"] ?? null)], 48, $context, $this->getSourceContext());
            echo "
                            ";
        }
        // line 50
        echo "
                            ";
        // line 51
        $context["attributes"] = [["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""]];
        // line 56
        echo "
                            ";
        // line 57
        ob_start(function () { return ''; });
        echo __("Owner");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Show items owned by the selected User.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        echo "                            ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.search")], ["name" => "data-search-term", "value" => "userName"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "userId"], ["name" => "data-text-property", "value" => "userName"], ["name" => "data-initial-key", "value" => "userId"]];
        // line 71
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["ownerId", "single", ($context["title"] ?? null), "", null, "userId", "userName", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 71, $context, $this->getSourceContext());
        echo "

                            ";
        // line 73
        ob_start(function () { return ''; });
        echo __("Owner User Group");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 74
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Show items owned by users in the selected User Group.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        echo "                            ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("group.search")], ["name" => "data-search-term", "value" => "group"], ["name" => "data-id-property", "value" => "groupId"], ["name" => "data-text-property", "value" => "group"], ["name" => "data-initial-key", "value" => "userGroupId"]];
        // line 86
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["ownerUserGroupId", "single", ($context["title"] ?? null), "", null, "groupId", "group", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 86, $context, $this->getSourceContext());
        echo "

                            ";
        // line 88
        ob_start(function () { return ''; });
        echo __("Type");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 89
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["type", "single", ($context["title"] ?? null), "", twig_array_merge([["type" => null, "name" => ""]], ($context["modules"] ?? null)), "type", "name"], 89, $context, $this->getSourceContext());
        echo "

                            ";
        // line 91
        ob_start(function () { return ''; });
        echo __("Retired");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        echo "                            ";
        $context["values"] = [["id" => 1, "value" => "Yes"], ["id" => 0, "value" => "No"]];
        // line 93
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["retired", "single", ($context["title"] ?? null), 0, ($context["values"] ?? null), "id", "value"], 93, $context, $this->getSourceContext());
        echo "

                            ";
        // line 95
        echo twig_call_macro($macros["inline"], "macro_hidden", ["folderId"], 95, $context, $this->getSourceContext());
        echo "

                            ";
        // line 97
        ob_start(function () { return ''; });
        echo __("Layout ID");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_number", ["layoutId", ($context["title"] ?? null), ($context["layoutId"] ?? null)], 98, $context, $this->getSourceContext());
        echo "

                            ";
        // line 100
        ob_start(function () { return ''; });
        echo __("Orientation");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 101
        echo "                            ";
        $context["option1"] = __("All");
        // line 102
        echo "                            ";
        $context["option2"] = __("Landscape");
        // line 103
        echo "                            ";
        $context["option3"] = __("Portrait");
        // line 104
        echo "                            ";
        $context["values"] = [["id" => "", "value" => ($context["option1"] ?? null)], ["id" => "landscape", "value" => ($context["option2"] ?? null)], ["id" => "portrait", "value" => ($context["option3"] ?? null)]];
        // line 105
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["orientation", "single", ($context["title"] ?? null), "", ($context["values"] ?? null), "id", "value"], 105, $context, $this->getSourceContext());
        echo "
                        </form>
                    </div>
                </div>
                <div class=\"grid-with-folders-container\">
                    <div class=\"grid-folder-tree-container p-3\" id=\"grid-folder-filter\">
                        <input id=\"jstree-search\" class=\"form-control\" type=\"text\" placeholder=\"";
        // line 111
        echo __("Search");
        echo "\">
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"folder-tree-clear-selection-button\">
                            <label class=\"form-check-label\" for=\"folder-tree-clear-selection-button\" title=\"";
        // line 114
        echo __("Search in all folders");
        echo "\">";
        echo __("All Folders");
        echo "</label>
                        </div>
                        <div class=\"folder-search-no-results d-none\">
                            <p>";
        // line 117
        echo __("No Folders matching the search term");
        echo "</p>
                        </div>
                        <div id=\"container-folder-tree\"></div>
                    </div>
                    <div class=\"folder-controller d-none\">
                        <button type=\"button\" id=\"folder-tree-select-folder-button\" class=\"btn btn-outline-secondary\" title=\"";
        // line 122
        echo __("Open / Close Folder Search options");
        echo "\"><i class=\"fas fa-folder fa-1x\"></i></button>
                        <div id=\"breadcrumbs\" class=\"mt-2 pl-2\"></div>
                    </div>
                    <div id=\"datatable-container\">
                        <div class=\"XiboData card py-3\">
                            <table id=\"libraryItems\" class=\"table table-striped responsive nowrap\" data-content-type=\"media\" data-content-id-name=\"mediaId\" data-state-preference-name=\"libraryGrid\" style=\"width: 100%;\">
                                <thead>
                                <tr>
                                    <th>";
        // line 130
        echo __("ID");
        echo "</th>
                                    <th>";
        // line 131
        echo __("Name");
        echo "</th>
                                    <th>";
        // line 132
        echo __("Type");
        echo "</th>
                                    ";
        // line 133
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 133)) {
            echo "<th>";
            echo __("Tag");
            echo "</th>";
        }
        // line 134
        echo "                                    <th>";
        echo __("Thumbnail");
        echo "</th>
                                    <th>";
        // line 135
        echo __("Duration");
        echo "</th>
                                    <th>";
        // line 136
        echo __("Duration (seconds)");
        echo "</th>
                                    <th>";
        // line 137
        echo __("Size");
        echo "</th>
                                    <th>";
        // line 138
        echo __("Size (bytes)");
        echo "</th>
                                    <th>";
        // line 139
        echo __("Resolution");
        echo "</th>
                                    <th>";
        // line 140
        echo __("Owner");
        echo "</th>
                                    <th>";
        // line 141
        echo __("Sharing");
        echo "</th>
                                    <th>";
        // line 142
        echo __("Revised");
        echo "</th>
                                    <th>";
        // line 143
        echo __("Released");
        echo "</th>
                                    <th>";
        // line 144
        echo __("File Name");
        echo "</th>
                                    <th>";
        // line 145
        echo __("Stats?");
        echo "</th>
                                    <th>";
        // line 146
        echo __("Created");
        echo "</th>
                                    <th>";
        // line 147
        echo __("Modified");
        echo "</th>
                                    <th>";
        // line 148
        echo __("Expires");
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

    // line 164
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 165
        echo "    <script type=\"text/javascript\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">
        var table;
        \$(document).ready(function() {

            ";
        // line 169
        if ( !twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 169)) {
            // line 170
            echo "            disableFolders();
            ";
        }
        // line 172
        echo "
            table = \$(\"#libraryItems\").DataTable({
                \"language\": dataTablesLanguage,
                dom: dataTablesTemplate,
                serverSide: true,
                stateSave: true,
                responsive: true,
                stateDuration: 0,
                stateLoadCallback: dataTableStateLoadCallback,
                stateSaveCallback: dataTableStateSaveCallback,
                filter: false,
                searchDelay: 3000,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    \"url\": \"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search"), "html", null, true);
        echo "\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#libraryItems\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"mediaId\", responsivePriority: 2},
                    {\"data\": \"name\", \"render\": dataTableSpacingPreformatted, responsivePriority: 3 },
                    {\"data\": \"mediaType\", responsivePriority: 2},
                    ";
        // line 195
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 195)) {
            echo "{
                        \"sortable\": false,
                        responsivePriority: 2,
                        \"visible\": false,
                        \"data\": dataTableCreateTags
                    },";
        }
        // line 201
        echo "                    {
                        responsivePriority: 5,
                        data: 'thumbnail',
                        render: function(data, type, row) {
                            if (type !== 'display') {
                                return row.mediaId;
                            }
                            if (data) {
                                return '<a class=\"img-replace\" data-toggle=\"lightbox\" data-type=\"image\" href=\"' + data + '\">' +
                                    '<img class=\"img-fluid\" src=\"' + data.replace('download', 'thumbnail') + '\" alt=\"";
        // line 210
        echo twig_escape_filter($this->env, __("Thumbnail"), "html", null, true);
        echo "\" />' +
                                    '</a>';
                            }
                            return '';
                        },
                        sortable: false
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
                    {\"data\": \"duration\", \"visible\": false, responsivePriority: 10},
                    {
                        \"name\": \"fileSize\",
                        responsivePriority: 3,
                        \"data\": null,
                        \"render\": {\"_\": \"fileSize\", \"display\": \"fileSizeFormatted\", \"sort\": \"fileSize\"}
                    },
                    {\"data\": \"fileSize\", \"visible\": false, responsivePriority: 10},
                    {
                        name: 'width',
                        data: function(data, type, row, meta) {
                            if (type !== 'display' || data.width === 0 || data.height === 0) {
                                return '';
                            }

                            return data.width + 'x' + data.height;
                        },
                        visible: false,
                        responsivePriority: 10
                    },
                    {\"data\": \"owner\", responsivePriority: 5},
                    {
                        \"data\": \"groupsWithPermissions\",
                        responsivePriority: 5,
                        \"render\": dataTableCreatePermissions
                    },
                    {\"data\": \"revised\", \"render\": dataTableTickCrossColumn, \"visible\": false, responsivePriority: 6},
                    {
                        \"name\": \"released\",
                        responsivePriority: 6,
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.released;

                            var icon = \"\";
                            if (data.released == 1)
                                icon = \"fa-check\";
                            else if (data.released == 0)
                                icon = \"fa-cogs\";
                            else if (data.released == 2)
                                icon = \"fa-times\";


                            return '<span class=\"fa ' + icon + '\" title=\"' + (data.releasedDescription) + '\"></span>';
                        },
                        \"visible\": false
                    },
                    {\"data\": \"fileName\", responsivePriority: 500},
                    {
                        \"name\": \"enableStat\",
                        responsivePriority: 6,
                        \"data\": function (data) {

                            var icon = \"\";
                            if (data.enableStat == 'On')
                                icon = \"fa-check\";
                            else if (data.enableStat == 'Off')
                                icon = \"fa-times\";
                            else
                                icon = \"fa-level-down\";

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
                        \"data\": \"modifiedDt\",
                        responsivePriority: 6,
                        \"render\": dataTableDateFromIso,
                        \"visible\": false
                    },
                    {
                        \"name\": \"expires\",
                        responsivePriority: 6,
                        \"data\": function (data, type) {
                            if (data.expires != null && data.expires != 0) {
                                var now = moment();
                                var expiresIn = moment.unix(data.expires);
                                var differenceMinutes = expiresIn.diff(now, 'minutes');
                                var momentDifference = moment(now).to(expiresIn);

                                if (differenceMinutes < -10 ) {
                                    return data.mediaExpiryFailed;
                                } else {
                                    return data.mediaExpiresIn.replace('%s', momentDifference);
                                }
                            } else {
                                return data.mediaNoExpiryDate;
                            }

                        }
                    },
                    {
                        \"orderable\": false,
                        responsivePriority: 1,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('draw', { form: \$(\"#libraryItems\").closest(\".XiboGrid\").find(\".FilterDiv form\") } ,dataTableCreateTagEvents);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#libraryItems_wrapper').find('.dataTables_buttons'));

            \$(\"#refreshGrid\").click(function () {
                table.ajax.reload();
            });
        });

        \$(\"#libraryUploadForm\").click(function(e) {
            e.preventDefault();
            var currentWorkingFolderId = \$('#folderId').val();

            openUploadForm({
                url: \"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.add"), "html", null, true);
        echo "\",
                title: \"";
        // line 348
        echo __("Add Media");
        echo "\",
                initialisedBy: \"library-upload\",
                buttons: {
                    main: {
                        label: \"";
        // line 352
        echo __("Done");
        echo "\",
                        className: \"btn-primary btn-bb-main\",
                        callback: function () {
                            table.ajax.reload();
                            XiboDialogClose();
                        }
                    }
                },
                templateOptions: {
                    trans: {
                        addFiles: \"";
        // line 362
        echo __("Add files");
        echo "\",
                        startUpload: \"";
        // line 363
        echo __("Start upload");
        echo "\",
                        cancelUpload: \"";
        // line 364
        echo __("Cancel upload");
        echo "\",
                        selectFolder: \"";
        // line 365
        echo __("Select Folder");
        echo "\",
                        selectFolderTitle: \"";
        // line 366
        echo __("Change Current Folder location");
        echo "\",
                        selectedFolder: \"";
        // line 367
        echo __("Current Folder");
        echo ":\",
                        selectedFolderTitle: \"";
        // line 368
        echo __("Upload files to this Folder");
        echo "\",
                    },
                    upload: {
                        maxSize: ";
        // line 371
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSize", [], "any", false, false, false, 371), "html", null, true);
        echo ",
                        maxSizeMessage: \"";
        // line 372
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSizeMessage", [], "any", false, false, false, 372), "html", null, true);
        echo "\",
                        validExt: \"";
        // line 373
        echo twig_escape_filter($this->env, ($context["validExt"] ?? null), "html", null, true);
        echo "\"
                    },
                    updateInAllChecked: ";
        // line 375
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "LIBRARY_MEDIA_UPDATEINALL_CHECKB", [], "any", false, false, false, 375) == 1)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    deleteOldRevisionsChecked: ";
        // line 376
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "LIBRARY_MEDIA_DELETEOLDVER_CHECKB", [], "any", false, false, false, 376) == 1)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    currentWorkingFolderId: currentWorkingFolderId,
                    folderSelector: true
                }
            });
        });

        /**
         * Media Edit form
         */
        function mediaEditFormOpen(dialog) {
            // Create a new button
            var footer = dialog.find(\".modal-footer\");
            var mediaId = dialog.find(\"#mediaEditForm\").data().mediaId;
            var validExtensions = dialog.find(\"#mediaEditForm\").data().validExtensions;
            var folderId = dialog.find(\"#mediaEditForm\").data().folderId;

            // Append
            var replaceButton = \$('<button class=\"btn btn-warning\">";
        // line 394
        echo __("Replace");
        echo "</button>');
            replaceButton.click(function(e) {
                e.preventDefault();

                // Open the upload dialog with our options.
                openUploadForm({
                    url: \"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.add"), "html", null, true);
        echo "\",
                    title: \"";
        // line 401
        echo __("Upload media");
        echo "\",
                    buttons: {
                        main: {
                            label: \"";
        // line 404
        echo __("Done");
        echo "\",
                            className: \"btn-primary btn-bb-main\",
                            callback: function () {
                                table.ajax.reload();
                                XiboDialogClose();
                            }
                        }
                    },
                    templateOptions: {
                        multi: false,
                        oldMediaId: mediaId,
                        oldFolderId: folderId,
                        updateInAllChecked: ";
        // line 416
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "LIBRARY_MEDIA_UPDATEINALL_CHECKB", [], "any", false, false, false, 416) == 1)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        deleteOldRevisionsChecked: ";
        // line 417
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "LIBRARY_MEDIA_DELETEOLDVER_CHECKB", [], "any", false, false, false, 417) == 1)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        trans: {
                            addFiles: \"";
        // line 419
        echo __("Add Replacement");
        echo "\",
                            startUpload: \"";
        // line 420
        echo __("Start Replace");
        echo "\",
                            cancelUpload: \"";
        // line 421
        echo __("Cancel Replace");
        echo "\",
                            updateInLayouts: {
                                title: \"";
        // line 423
        echo __("Update this media in all layouts it is assigned to?");
        echo "\",
                                helpText: \"";
        // line 424
        echo __("Note: It will only be updated in layouts you have permission to edit.");
        echo "\"
                            },
                            deleteOldRevisions: {
                                title: \"";
        // line 427
        echo __("Delete the old version?");
        echo "\",
                                helpText: \"";
        // line 428
        echo __("Completely remove the old version of this media item if a new file is being uploaded.");
        echo "\"
                            }
                        },
                        upload: {
                            maxSize: ";
        // line 432
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSize", [], "any", false, false, false, 432), "html", null, true);
        echo ",
                            maxSizeMessage: \"";
        // line 433
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSizeMessage", [], "any", false, false, false, 433), "html", null, true);
        echo "\",
                            validExt: validExtensions,
                            validExtensionsMessage: \"";
        // line 435
        echo "Valid extensions are %s";
        echo "\".replace(\"%s\", validExtensions).replace(/\\|/g, \", \")
                        }
                    },
                    uploadDoneEvent: function () {
                        XiboDialogClose();
                        table.ajax.reload();
                    }
                });
            });

            footer.find(\".btn-primary\").before(replaceButton);
        }

        ///
        /// Library Usage Form
        ///
        function usageFormOpen(dialog) {
            // Displays tab
            var usageTable = \$(\"#usageReportTable\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true,
                stateSave: true, stateDuration: 0,
                filter: false,
                searchDelay: 3000,
                responsive: true,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    \"url\": \"";
        // line 462
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.usage", ["id" => ":id"]), "html", null, true);
        echo "\".replace(\":id\", \$(\"#usageReportTable\").data().mediaId),
                    \"data\": function(dataDisplay) {
                        \$.extend(dataDisplay, \$(dialog).find(\"#usageReportForm\").serializeObject());
                        return dataDisplay;
                    }
                },
                \"columns\": [
                    { \"data\": \"displayId\"},
                    { \"data\": \"display\" },
                    { \"data\": \"description\" }
                ]
            });

            usageTable.on('draw', dataTableDraw);
            usageTable.on('processing.dt', dataTableProcessing);

            // Layouts tab
            var usageTableLayouts = \$(\"#usageReportLayoutsTable\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true,
                stateSave: true, stateDuration: 0,
                filter: false,
                searchDelay: 3000,
                responsive: true,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    \"url\": \"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.usage.layouts", ["id" => ":id"]), "html", null, true);
        echo "\".replace(\":id\", \$(\"#usageReportLayoutsTable\").data().mediaId)
                },
                \"columns\": [
                    { \"data\": \"layoutId\"},
                    { \"data\": \"layout\" },
                    { \"data\": \"description\" },
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            usageTableLayouts.on('draw', dataTableDraw);
            usageTableLayouts.on('processing.dt', dataTableProcessing);
        }

        function setDefaultMultiSelectFormOpen(dialog) {
            ";
        // line 506
        $context["message"] = "Force delete from any existing layouts, assignments, etc";
        // line 507
        echo "            ";
        $context["message2"] = "Notify each Display that has this Media in its local storage to remove it immediately?";
        // line 508
        echo "
            var \$input = \$(
                '<div class=\"form-group\">' +
                 '<input type=checkbox id=\"forceDelete\" name=\"forceDelete\"> ";
        // line 511
        echo twig_escape_filter($this->env, __(($context["message"] ?? null)));
        echo " </input>' +
                '</div>'
            );

            var \$input2 = \$(
                '<div class=\"form-group\">' +
                '<input type=checkbox id=\"purge\" name=\"purge\"> ";
        // line 517
        echo twig_escape_filter($this->env, __(($context["message2"] ?? null)));
        echo " </input>' +
                '</div>'
            );

            \$(dialog).find('.modal-body').append(\$input, \$input2);

            \$('#forceDelete, #purge').on('change', function() {
                dialog.data().commitData = {
                    forceDelete: \$('#forceDelete').val(),
                    purge: \$('#purge').val()
                };
            });
        }

        function setEnableStatMultiSelectFormOpen(dialog) {

            var \$select = \$('<select id=\"enableStat\" name=\"enableStat\" class=\"form-control\">' +
                '<option value=\"Off\">";
        // line 534
        echo __("Off");
        echo "</option>' +
                '<option value=\"On\">";
        // line 535
        echo __("On");
        echo "</option>' +
                '<option value=\"Inherit\">";
        // line 536
        echo __("Inherit");
        echo "</option>' +
                '</select>');

            \$select.on('change', function() {
                dialog.data().commitData = {enableStat: \$(this).val()};
            }).trigger('change');

            \$(dialog).find('.modal-body').append(\$select);
        }

    </script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "library-page.twig";
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
        return array (  941 => 536,  937 => 535,  933 => 534,  913 => 517,  904 => 511,  899 => 508,  896 => 507,  894 => 506,  873 => 488,  844 => 462,  814 => 435,  809 => 433,  805 => 432,  798 => 428,  794 => 427,  788 => 424,  784 => 423,  779 => 421,  775 => 420,  771 => 419,  762 => 417,  754 => 416,  739 => 404,  733 => 401,  729 => 400,  720 => 394,  695 => 376,  687 => 375,  682 => 373,  678 => 372,  674 => 371,  668 => 368,  664 => 367,  660 => 366,  656 => 365,  652 => 364,  648 => 363,  644 => 362,  631 => 352,  624 => 348,  620 => 347,  480 => 210,  469 => 201,  460 => 195,  448 => 186,  432 => 172,  428 => 170,  426 => 169,  418 => 165,  414 => 164,  395 => 148,  391 => 147,  387 => 146,  383 => 145,  379 => 144,  375 => 143,  371 => 142,  367 => 141,  363 => 140,  359 => 139,  355 => 138,  351 => 137,  347 => 136,  343 => 135,  338 => 134,  332 => 133,  328 => 132,  324 => 131,  320 => 130,  309 => 122,  301 => 117,  293 => 114,  287 => 111,  277 => 105,  274 => 104,  271 => 103,  268 => 102,  265 => 101,  261 => 100,  255 => 98,  251 => 97,  246 => 95,  240 => 93,  237 => 92,  233 => 91,  227 => 89,  223 => 88,  217 => 86,  214 => 75,  209 => 74,  205 => 73,  199 => 71,  196 => 59,  191 => 58,  187 => 57,  184 => 56,  182 => 51,  179 => 50,  173 => 48,  168 => 47,  163 => 46,  158 => 45,  153 => 44,  151 => 43,  145 => 41,  141 => 40,  135 => 38,  131 => 37,  124 => 33,  119 => 31,  116 => 30,  112 => 29,  104 => 24,  101 => 23,  91 => 21,  88 => 20,  79 => 18,  72 => 17,  69 => 16,  67 => 15,  64 => 14,  60 => 13,  52 => 11,  47 => 8,  45 => 9,  38 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "library-page.twig", "/var/www/html/cms_ubi/views/library-page.twig");
    }
}
