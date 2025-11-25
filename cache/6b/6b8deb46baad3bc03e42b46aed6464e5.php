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

/* displaygroup-page.twig */
class __TwigTemplate_ef1f48ebf96475270b147be20c4ecbac extends Template
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
            'javaScriptTemplates' => [$this, 'block_javaScriptTemplates'],
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "displaygroup-page.twig", 9)->unwrap();
        // line 8
        $this->parent = $this->loadTemplate("authed.twig", "displaygroup-page.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("Display Groups"), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displaygroup.add"], "method", false, false, false, 15)) {
            // line 16
            echo "            <button class=\"btn btn-success XiboFormButton\" title=\"";
            echo __("Add a new Display Group");
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.add.form"), "html", null, true);
            echo "\"> <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> ";
            echo __("Add Display Group");
            echo "</button>
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
        echo __("Display Groups");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"displayGroupGridView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 30
        ob_start(function () { return ''; });
        echo __("ID");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 31
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_input", ["displayGroupId", ($context["title"] ?? null)], 31, $context, $this->getSourceContext());
        echo "

                            ";
        // line 33
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 34
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_inputNameGrid", ["displayGroup", ($context["title"] ?? null)], 34, $context, $this->getSourceContext());
        echo "

                            ";
        // line 36
        ob_start(function () { return ''; });
        echo __("Display");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 37
        echo "                            ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.search")], ["name" => "data-search-term", "value" => "display"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "displayId"], ["name" => "data-text-property", "value" => "display"], ["name" => "data-initial-key", "value" => "displayId"]];
        // line 49
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Return Display Groups that directly contain the selected Display.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["displayId", "single", ($context["title"] ?? null), "", null, "displayId", "display", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 50, $context, $this->getSourceContext());
        echo "

                           <!-- ";
        // line 52
        ob_start(function () { return ''; });
        echo __("Nested Display");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Return Display Groups that contain the selected Display somewhere in the nested Display Group relationship tree.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["nestedDisplayId", "single", ($context["title"] ?? null), "", null, "displayId", "display", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 54, $context, $this->getSourceContext());
        echo "

                            ";
        // line 56
        ob_start(function () { return ''; });
        echo __("Dynamic Criteria");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_input", ["dynamicCriteria", ($context["title"] ?? null)], 57, $context, $this->getSourceContext());
        echo " -->

                            ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 59)) {
            // line 60
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("Tags");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 61
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("Exact match?");
            $context["exactTagTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 62
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("When filtering by multiple Tags, which logical operator should be used?");
            $context["logicalOperatorTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 63
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("A comma separated list of tags to filter by. Enter a tag|tag value to filter tags with values. Enter --no-tag to filter all items without tags. Enter - before a tag or tag value to exclude from results.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 64
            echo "                                ";
            echo twig_call_macro($macros["inline"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), null, ($context["helpText"] ?? null), null, null, null, "exactTags", ($context["exactTagTitle"] ?? null), ($context["logicalOperatorTitle"] ?? null)], 64, $context, $this->getSourceContext());
            echo "
                            ";
        }
        // line 66
        echo "
                            ";
        // line 67
        echo twig_call_macro($macros["inline"], "macro_hidden", ["folderId"], 67, $context, $this->getSourceContext());
        echo "
                        </form>
                    </div>
                </div>
                <div class=\"grid-with-folders-container\">
                    <div class=\"grid-folder-tree-container p-3\" id=\"grid-folder-filter\">
                        <input id=\"jstree-search\" class=\"form-control\" type=\"text\" placeholder=\"";
        // line 73
        echo __("Search");
        echo "\">
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"folder-tree-clear-selection-button\">
                            <label class=\"form-check-label\" for=\"folder-tree-clear-selection-button\" title=\"";
        // line 76
        echo __("Search in all folders");
        echo "\">";
        echo __("All Folders");
        echo "</label>
                        </div>
                        <div class=\"folder-search-no-results d-none\">
                            <p>";
        // line 79
        echo __("No Folders matching the search term");
        echo "</p>
                        </div>
                        <div id=\"container-folder-tree\"></div>
                    </div>
                    <div class=\"folder-controller d-none\">
                        <button type=\"button\" id=\"folder-tree-select-folder-button\" class=\"btn btn-outline-secondary\" title=\"";
        // line 84
        echo __("Open / Close Folder Search options");
        echo "\"><i class=\"fas fa-folder fa-1x\"></i></button>
                        <div id=\"breadcrumbs\" class=\"mt-2 pl-2\"></div>
                    </div>

                    <div id=\"datatable-container\">
                        <div class=\"XiboData card py-3\">
                            <table id=\"displaygroups\" class=\"table table-striped\" data-content-type=\"displayGroup\" data-content-id-name=\"displayGroupId\" data-state-preference-name=\"displayGroupGrid\" style=\"width: 100%;\">
                                <thead>
                                    <tr>
                                        <th>";
        // line 93
        echo __("ID");
        echo "</th>
                                        <th>";
        // line 94
        echo __("Name");
        echo "</th>
                                        <th>";
        // line 95
        echo __("Description");
        echo "</th>
                                        <th>";
        // line 96
        echo __("Is Dynamic?");
        echo "</th>
                                        <th>";
        // line 97
        echo __("Criteria");
        echo "</th>
                                        ";
        // line 98
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 98)) {
            // line 99
            echo "                                            <th>";
            echo __("Criteria Tags");
            echo "</th>
                                            <th>";
            // line 100
            echo __("Tags");
            echo "</th>
                                        ";
        }
        // line 102
        echo "                                        <th>";
        echo __("Sharing");
        echo "</th>
                                        <th>";
        // line 103
        echo __("Reference 1");
        echo "</th>
                                        <th>";
        // line 104
        echo __("Reference 2");
        echo "</th>
                                        <th>";
        // line 105
        echo __("Reference 3");
        echo "</th>
                                        <th>";
        // line 106
        echo __("Reference 4");
        echo "</th>
                                        <th>";
        // line 107
        echo __("Reference 5");
        echo "</th>
                                        <th>";
        // line 108
        echo __("Created Date");
        echo "</th>
                                        <th>";
        // line 109
        echo __("Modified Date");
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

    // line 125
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 126
        echo "    <script type=\"text/javascript\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">
      var displayGroupTable;
      var displayTable;
      var criteria;
      var criteriaTag;
      var useRegexForName;
      var exactTags;
      var logicalOperator;
      var logicalOperatorName;

      \$(document).ready(function() {
        ";
        // line 137
        if ( !twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 137)) {
            // line 138
            echo "        disableFolders();
        ";
        }
        // line 140
        echo "
        displayGroupTable = \$(\"#displaygroups\").DataTable({
            \"language\": dataTablesLanguage,
            dom: dataTablesTemplate,
            serverSide: true,
            stateSave: true,
            stateDuration: 0,
            responsive: true,
            stateLoadCallback: dataTableStateLoadCallback,
            stateSaveCallback: dataTableStateSaveCallback,
            \"filter\": false,
            searchDelay: 3000,
            \"order\": [[ 1, \"asc\"]],
            ajax: {
                \"url\": \"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.search"), "html", null, true);
        echo "\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#displaygroups\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"displayGroupId\", responsivePriority: 2},
                { \"data\": \"displayGroup\", \"render\": dataTableSpacingPreformatted, responsivePriority: 2 },
                { \"data\": \"description\", responsivePriority: 3 },
                { \"data\": \"isDynamic\", \"render\": dataTableTickCrossColumn, responsivePriority: 3 },
                { \"data\": \"dynamicCriteria\", responsivePriority: 4 },
                ";
        // line 165
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 165)) {
            // line 166
            echo "                { \"data\": \"dynamicCriteriaTags\", responsivePriority: 4},
                {
                    \"name\": \"tags\",
                    \"sortable\": false,
                    responsivePriority: 3,
                    \"data\": dataTableCreateTags
                },
                ";
        }
        // line 174
        echo "                {
                    \"data\": \"groupsWithPermissions\",
                    visible: false,
                    responsivePriority: 10,
                    \"render\": dataTableCreatePermissions
                },
                { \"data\": \"ref1\", \"visible\": false, responsivePriority: 5},
                { \"data\": \"ref2\", \"visible\": false, responsivePriority: 5},
                { \"data\": \"ref3\", \"visible\": false, responsivePriority: 5},
                { \"data\": \"ref4\", \"visible\": false, responsivePriority: 5},
                { \"data\": \"ref5\", \"visible\": false, responsivePriority: 5},
                { \"data\": \"createdDt\", \"visible\": false, responsivePriority: 5 },
                { \"data\": \"modifiedDt\", \"visible\": false, responsivePriority: 5 },
                {
                    \"orderable\": false,
                    responsivePriority: 1,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        \$(\"#refreshGrid\").click(function () {
            displayGroupTable.ajax.reload();
        });

        displayGroupTable.on('draw', dataTableDraw);
        displayGroupTable.on('draw', { form: \$(\"#displaygroups\").closest(\".XiboGrid\").find(\".FilterDiv form\") }, dataTableCreateTagEvents);
        displayGroupTable.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(displayGroupTable, \$('#displaygroups_wrapper').find('.dataTables_buttons'));

        \$(\"#refreshGrid\").click(function () {
            displayGroupTable.ajax.reload();
        });
      });

        function setDeleteMultiSelectFormOpen(dialog) {
            \$(dialog).find('.save-button').prop('disabled', false);
            var template = Handlebars.compile(\$('#template-display-group-multi-delete-checkbox').html());
            var \$input = \$(template());
            \$input.find('input').on('change', function() {
                \$(dialog).find('.save-button').prop('disabled', !\$(this).is(':checked'));
            });
            \$(dialog).find('.modal-body').append(\$input);
        }

        function displayGroupAddFormNext() {
            // Get form
            var \$form = \$(\"#displayGroupAddForm\");

            // Set apply and apply reset data
            \$form.data(\"apply\", true);
            \$form.data(\"applyCallback\", 'applyResetCallback');

            // Submit form
            \$form.submit();
        }

        function applyResetCallback(form) {
            // Reset form fields
            \$(form).find('#displayGroup').val(\"\");
        }

        function displayGroupFormOpen(dialog) {
            displayTable = null;

            \$(dialog).find(\"input[name=dynamicCriteria]\").on(\"keyup\", _.debounce(function() {
                displayGroupQueryDynamicMembers(dialog);
            }, 500));

            \$(dialog).find(\"input[name=dynamicCriteriaTags], input[name=exactTags], select[name=logicalOperator], select[name=logicalOperatorName]\").change(function() {
                displayGroupQueryDynamicMembers(dialog);
            });

            var \$form = \$('#displayGroupAddForm');

            // First time in there
            displayGroupQueryDynamicMembers(dialog);
        }

        function displayGroupQueryDynamicMembers(dialog) {

            if (\$(dialog).find(\"input[name=isDynamic]\")[0].checked) {

                criteria = \$(dialog).find(\"input[name=dynamicCriteria]\").val();
                criteriaTag = \$(dialog).find(\"input[name=dynamicCriteriaTags]\").val();
                useRegexForName = \$(dialog).find(\"input[name=useRegexForName]\").val();
                exactTags = \$(dialog).find(\"input[name=exactTags]\").is(':checked');
                logicalOperator = \$(dialog).find(\"select[name=logicalOperator]\").val();
                logicalOperatorName = \$(dialog).find(\"select[name=logicalOperatorName]\").val();

                if (criteria === \"\" && criteriaTag === \"\") {
                    if (displayTable != null) {
                        displayTable.destroy();
                        displayTable = null;
                        \$(\"#displayGroupDisplays tbody\").empty();
                    }

                    return;
                }

                if (displayTable != null) {
                    displayTable.ajax.reload();
                } else {
                    displayTable = \$(\"#displayGroupDisplays\").DataTable({
                        \"language\": dataTablesLanguage,
                        serverSide: true,
                        stateSave: true, stateDuration: 0,
                        filter: false,
                        searchDelay: 3000,
                        \"order\": [[1, \"asc\"]],
                        ajax: {
                            \"url\": \"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.search"), "html", null, true);
        echo "\",
                            \"data\": function (d) {
                                \$.extend(
                                  d,
                                  {
                                    display: criteria,
                                    tags: criteriaTag,
                                    useRegexForName: useRegexForName,
                                    exactTags: exactTags,
                                    logicalOperator: logicalOperator,
                                    logicalOperatorName: logicalOperatorName
                                  }
                                );
                            }
                        },
                        \"columns\": [
                            {\"data\": \"displayId\"},
                            {\"data\": \"display\"},
                            {\"data\": dataTableCreateTags},
                            {
                                \"data\": \"mediaInventoryStatus\",
                                \"render\": function (data, type, row) {
                                    if (type != \"display\")
                                        return data;

                                    var icon = \"\";
                                    if (data == 1)
                                        icon = \"fa-check\";
                                    else if (data == 0)
                                        icon = \"fa-times\";
                                    else
                                        icon = \"fa-cloud-download\";

                                    return \"<span class='fa \" + icon + \"'></span>\";
                                }
                            },
                            {\"data\": \"licensed\", \"render\": dataTableTickCrossColumn}
                        ]
                    });

                    displayTable.on('processing.dt', dataTableProcessing);
                    displayTable.on('draw', { form: \$(\".displayGroupForm\") }, dataTableCreateTagEvents);
                }
            }
        }
    </script>
";
    }

    // line 333
    public function block_javaScriptTemplates($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 334
        echo "    ";
        $this->displayParentBlock("javaScriptTemplates", $context, $blocks);
        echo "

    ";
        // line 343
        echo "
    <script type=\"text/x-handlebars-template\" id=\"template-display-group-multi-delete-checkbox\">
        <div class=\"form-group row\">
            <div class=\"offset-sm-2 col-sm-10 mt-4\">
                <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" id=\"checkbox-confirmDelete\" name=\"confirmDelete\">
                    <label class=\"form-check-label\" for=\"checkbox-confirmDelete\">
                        ";
        echo twig_escape_filter($this->env, __("Are you sure you want to delete?"), "html", null, true);
        // line 346
        echo "
                    </label>
                </div>
                <small class=\"form-text text-muted\">";
        echo twig_escape_filter($this->env, __("Check to confirm deletion of the selected records."), "html", null, true);
        // line 350
        echo "</small>
            </div>
        </div>
    </script>
    ";
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "displaygroup-page.twig";
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
        return array (  581 => 350,  575 => 346,  565 => 343,  559 => 334,  555 => 333,  504 => 285,  391 => 174,  381 => 166,  379 => 165,  365 => 154,  349 => 140,  345 => 138,  343 => 137,  328 => 126,  324 => 125,  305 => 109,  301 => 108,  297 => 107,  293 => 106,  289 => 105,  285 => 104,  281 => 103,  276 => 102,  271 => 100,  266 => 99,  264 => 98,  260 => 97,  256 => 96,  252 => 95,  248 => 94,  244 => 93,  232 => 84,  224 => 79,  216 => 76,  210 => 73,  201 => 67,  198 => 66,  192 => 64,  187 => 63,  182 => 62,  177 => 61,  172 => 60,  170 => 59,  164 => 57,  160 => 56,  154 => 54,  149 => 53,  145 => 52,  139 => 50,  134 => 49,  131 => 37,  127 => 36,  121 => 34,  117 => 33,  111 => 31,  107 => 30,  100 => 26,  95 => 24,  92 => 23,  88 => 22,  80 => 18,  70 => 16,  68 => 15,  65 => 14,  61 => 13,  53 => 11,  48 => 8,  46 => 9,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "displaygroup-page.twig", "/var/www/html/cms_ubi/views/displaygroup-page.twig");
    }
}
