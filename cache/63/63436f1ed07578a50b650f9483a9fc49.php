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

/* user-page.twig */
class __TwigTemplate_e73de10a458b84dc140c4b82277233bc extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "user-page.twig", 9)->unwrap();
        // line 8
        $this->parent = $this->loadTemplate("authed.twig", "user-page.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("Users"), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 15) || (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "isGroupAdmin", [], "method", false, false, false, 15) && twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["users.add"], "method", false, false, false, 15)))) {
            // line 16
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "getOptionValue", ["isAlwaysUseManualAddUserForm", 0], "method", false, false, false, 16)) {
                // line 17
                echo "                ";
                $context["addUserFormUrl"] = $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.add.form");
                // line 18
                echo "            ";
            } else {
                // line 19
                echo "                ";
                $context["addUserFormUrl"] = $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.onboarding.form");
                // line 20
                echo "            ";
            }
            // line 21
            echo "            <button id=\"user-add-button\" class=\"btn btn-success XiboFormButton\" title=\"";
            echo __("Add a new User");
            echo "\" href=\"";
            echo twig_escape_filter($this->env, ($context["addUserFormUrl"] ?? null), "html", null, true);
            echo "\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i> ";
            echo __("Add User");
            echo "</button>
        ";
        }
        // line 23
        echo "        <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
        echo __("Refresh the Table");
        echo "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
    </div>
";
    }

    // line 27
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 29
        echo __("Users");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"usersView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">

                            ";
        // line 36
        ob_start(function () { return ''; });
        echo __("Username");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 37
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_inputNameGrid", ["userName", ($context["title"] ?? null)], 37, $context, $this->getSourceContext());
        echo "

                            ";
        // line 39
        ob_start(function () { return ''; });
        echo __("User Type");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 40
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["userTypeId", "single", ($context["title"] ?? null), "", twig_array_merge([["userTypeId" => null, "userType" => ""]], ($context["userTypes"] ?? null)), "userTypeId", "userType"], 40, $context, $this->getSourceContext());
        echo "

                            ";
        // line 42
        ob_start(function () { return ''; });
        echo __("Retired");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        echo "                            ";
        $context["values"] = [["id" => 1, "value" => "Yes"], ["id" => 0, "value" => "No"]];
        // line 44
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["retired", "single", ($context["title"] ?? null), 0, ($context["values"] ?? null), "id", "value"], 44, $context, $this->getSourceContext());
        echo "

                            ";
        // line 46
        ob_start(function () { return ''; });
        echo __("First Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_input", ["firstName", ($context["title"] ?? null)], 47, $context, $this->getSourceContext());
        echo "

                            ";
        // line 49
        ob_start(function () { return ''; });
        echo __("Last Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_input", ["lastName", ($context["title"] ?? null)], 50, $context, $this->getSourceContext());
        echo "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"users\" class=\"table table-striped\" data-state-preference-name=\"userGrid\">
                        <thead>
                            <tr>
                                <th>";
        // line 58
        echo __("Username");
        echo "</th>
                                <th>";
        // line 59
        echo __("Homepage");
        echo "</th>
                                <th>";
        // line 60
        echo __("Home folder");
        echo "</th>
                                <th>";
        // line 61
        echo __("Email");
        echo "</th>
                                <th>";
        // line 62
        echo __("Library Quota");
        echo "</th>
                                <th>";
        // line 63
        echo __("Last Login");
        echo "</th>
                                <th>";
        // line 64
        echo __("Logged In?");
        echo "</th>
                                <th>";
        // line 65
        echo __("Retired?");
        echo "</th>
                                <th>";
        // line 66
        echo __("Two Factor");
        echo "</th>
                                <th>";
        // line 67
        echo __("First Name");
        echo "</th>
                                <th>";
        // line 68
        echo __("Last Name");
        echo "</th>
                                <th>";
        // line 69
        echo __("Phone");
        echo "</th>
                                <th>";
        // line 70
        echo __("Ref 1");
        echo "</th>
                                <th>";
        // line 71
        echo __("Ref 2");
        echo "</th>
                                <th>";
        // line 72
        echo __("Ref 3");
        echo "</th>
                                <th>";
        // line 73
        echo __("Ref 4");
        echo "</th>
                                <th>";
        // line 74
        echo __("Ref 5");
        echo "</th>
                                <th class=\"rowMenu\">";
        // line 75
        echo __("Row Menu");
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
";
    }

    // line 88
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        echo "    <script type=\"text/javascript\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">

        \$(document).ready(function() {
            var table = \$(\"#users\").DataTable({
                \"language\": dataTablesLanguage,
                dom: dataTablesTemplate,
                serverSide: true,
                stateSave: true,
                responsive: true,
                stateDuration: 0,
                stateLoadCallback: dataTableStateLoadCallback,
                stateSaveCallback: dataTableStateSaveCallback,
                searchDelay: 3000,
                \"order\": [[0, \"asc\"]],
                \"filter\": false,
                ajax: {
                    url: \"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.search"), "html", null, true);
        echo "\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#users\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"userName\", responsivePriority: 2},
                    {
                        \"data\": \"homePage\",
                        \"sortable\": false,
                        responsivePriority: 3
                    },
                    {
                        data: 'homeFolder',
                        responsivePriority: 4
                    },
                    {\"data\": \"email\", responsivePriority: 3},
                    {
                        \"name\": \"libraryQuota\",
                         responsivePriority: 3,
                        \"data\": null,
                        \"render\": {\"_\": \"libraryQuota\", \"display\": \"libraryQuotaFormatted\", \"sort\": \"libraryQuota\"}
                    },
                    {\"data\": \"lastAccessed\", \"visible\": false, responsivePriority: 4},
                    {
                        \"data\": \"loggedIn\",
                        responsivePriority: 3,
                        \"render\": dataTableTickCrossColumn,
                        \"visible\": false,
                        \"sortable\": false
                    },
                    {
                        \"data\": \"retired\",
                         responsivePriority: 3,
                        \"render\": dataTableTickCrossColumn
                    },
                    {
                        \"data\": \"twoFactorTypeId\",
                         responsivePriority: 5,
                        \"visible\": false,
                        \"render\": function (data, type, row) {
                            if (type != \"display\")
                                return data;

                            var icon = \"\";
                            if (data == 1)
                                icon = \"fa-envelope\";
                            else if (data == 2)
                                icon = \"fa-google\";
                            else
                                icon = \"fa-times\";

                            return '<span class=\"fa ' + icon + '\" title=\"' + (row.twoFactorDescription) + '\"></span>';
                        }
                    },
                    {\"data\": \"firstName\", \"visible\": false, responsivePriority: 5},
                    {\"data\": \"lastName\", \"visible\": false, responsivePriority: 5},
                    {\"data\": \"phone\", \"visible\": false, responsivePriority: 5},
                    {\"data\": \"ref1\", \"visible\": false, responsivePriority: 5},
                    {\"data\": \"ref2\", \"visible\": false, responsivePriority: 5},
                    {\"data\": \"ref3\", \"visible\": false, responsivePriority: 5},
                    {\"data\": \"ref4\", \"visible\": false, responsivePriority: 5},
                    {\"data\": \"ref5\", \"visible\": false, responsivePriority: 5},
                    {
                        \"orderable\": false,
                        responsivePriority: 1,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing)
            dataTableAddButtons(table, \$('#users_wrapper').find('.dataTables_buttons'));

            \$(\"#refreshGrid\").click(function () {
                table.ajax.reload();
            });
        });

        function userFormOpen(dialog) {
            // Make a select2 from the home page select
            var \$userForm = \$(dialog).find(\"form.UserForm\");
            var \$groupId = \$(dialog).find(\"select[name=groupId]\");
            var \$userTypeId = \$(dialog).find(\"select[name=userTypeId]\");
            var \$select = \$(dialog).find(\".homepage-select\");
            \$select.select2({
                minimumResultsForSearch: Infinity,
                ajax: {
                    url: \$select.data(\"searchUrl\"),
                    dataType: \"json\",
                    delay: 250,
                    data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page,
                            userId: \$userForm.data().userId,
                            groupId: \$groupId.val(),
                            userTypeId: \$userTypeId.val(),
                        };
                    },
                    processResults: function (data) {
                        var results = [];
                        \$.each(data.data, function(index, el) {
                            results.push({
                                \"id\": el.homepage,
                                \"text\": el.title,
                                \"content\": el.description
                            });
                        });
                        return {
                            results: results
                        };
                    }
                },
                templateResult: function(state) {
                    if (!state.content)
                        return state.text;

                    return \$(\"<span>\" + state.content + \"</span>\");
                }
            });

            initFolderPanel(dialog, true);

            // Bind to the add form submit
            \$(\".UserForm\").validate({
                submitHandler: function (form) {
                    // Grab and alter the value in the library quota field
                    var libraryQuotaField = \$(form).find(\"input[name=libraryQuota]\");
                    var libraryQuotaUnitsField = \$(form).find(\"select[name=libraryQuotaUnits]\");
                    var libraryQuota = libraryQuotaField.val();

                    if (libraryQuotaUnitsField.val() === 'mb') {
                        libraryQuota = libraryQuota * 1024;
                    } else if (libraryQuotaUnitsField.val() === 'gb') {
                        libraryQuota = libraryQuota * 1024 * 1024;
                    }

                    // Set the field
                    libraryQuotaField.prop('value', libraryQuota);

                    XiboFormSubmit(form);
                },
                errorElement: \"span\",
                highlight: function(element) {
                    \$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                },
                success: function(element) {
                    \$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                },
                invalidHandler: function(event, validator) {
                    // Remove the spinner
                    \$(this).closest(\".modal-dialog\").find(\".saving\").remove();
                    // https://github.com/xibosignage/xibo/issues/1589
                    \$(this).closest(\".modal-dialog\").find(\".save-button\").removeClass(\"disabled\");
                }
            });
        }

        /**
         * Callback when the onboarding form is opened.
         */
        function onboardingFormOpen(dialog) {
            \$(dialog).find('[data-toggle=\"popover\"]').popover();

            // Init the folder panel
            ";
        // line 272
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 272)) {
            // line 273
            echo "            initFolderPanel(dialog, false, true);
            ";
        }
        // line 275
        echo "
            var navListItems = \$(dialog).find('div.setup-panel div a'),
                allWells = \$(dialog).find('.setup-content'),
                stepWizard = \$(dialog).find('.stepwizard');

            navListItems.click(function (e) {
                e.preventDefault();
                var \$target = \$(\$(this).attr('href')),
                    \$item = \$(this);

                if (!\$item.attr('disabled')) {
                    // Set all step links to inactive
                    navListItems
                        .removeClass('btn-success')
                        .addClass('btn-default');

                    // Activate this specific one
                    \$item.addClass('btn-success');

                    // Hide all the panels and show this specific one
                    allWells.hide();
                    \$target.show();
                    \$target.find('input:eq(0)').focus();

                    // Set the active panel on the links
                    stepWizard.data(\"active\", \$target.prop(\"id\"))

                    // Is the next action to finish?
                    if (\$target.data(\"next\") === \"finished\") {
                        \$(dialog).find(\"#onboarding-steper-next-button\").html(\"";
        // line 304
        echo twig_escape_filter($this->env, __("Save"), "html", null, true);
        echo "\");
                    } else {
                        \$(dialog).find(\"#onboarding-steper-next-button\").html(\"";
        // line 306
        echo twig_escape_filter($this->env, __("Next"), "html", null, true);
        echo "\")
                    }
                }
            });

            // Add some buttons.
            \$(dialog).find(\".modal-footer\")
                .append(\$('<a class=\"btn btn-default\">').html(\"";
        // line 313
        echo twig_escape_filter($this->env, __("Close"), "html", null, true);
        echo "\")
                    .click(function(e) {
                        e.preventDefault();
                        XiboDialogClose();
                    }))
                .append(\$('<a id=\"onboarding-steper-next-button\" class=\"btn\">').html(\"";
        // line 318
        echo twig_escape_filter($this->env, __("Next"), "html", null, true);
        echo "\")
                    .addClass(\"btn-primary\")
                    .click(function(e) {
                        e.preventDefault();
                        var steps = \$(dialog).find(\".stepwizard\"),
                            curStep = \$(dialog).find(\"#\" + steps.data(\"active\")),
                            curInputs = curStep.find(\"input[type='text'],input[type='url']\"),
                            isValid = true;

                        // What is the next step?
                        if (curStep.data(\"next\") === \"finished\") {
                            // Keep the form open
                            var \$form = \$(dialog).find(\"#userOnboardingForm\");
                            \$form.data(\"apply\", true);
                            // Submit the form thereby creating the user
                            XiboFormSubmit(\$form, e, function(xhr) {
                                // Callback
                                if (xhr.success && xhr.id) {
                                    ";
        // line 336
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 336)) {
            // line 337
            echo "                                    // Submit the folder ownerships
                                    var selected = \$(dialog).find(\"#container-form-folder-tree\").jstree(\"get_selected\");

                                    // jsTree selects the root folder if all child folders are selected, we need to
                                    // remove that.
                                    var rootIndex = selected.indexOf('1');
                                    if (rootIndex > -1) {
                                        selected.splice(rootIndex, 1);
                                    }

                                    // View/edit for our group
                                    var groupIds = {};
                                    groupIds[xhr.data.groupId] = {
                                        \"view\": 1,
                                        \"edit\": 1
                                    };
                                    \$.ajax(permissionsUrl.replace(\":entity\", \"Folder\"), {
                                        \"method\": \"POST\",
                                        \"data\": {
                                            \"ids\": selected.join(\",\"),
                                            \"groupIds\": groupIds
                                        },
                                        \"error\": function() {
                                            toastr.error(\"";
            // line 360
            echo "Problem saving folder sharing, please check the User created.";
            echo "\");
                                        }
                                    });
                                    ";
        }
        // line 364
        echo "
                                    XiboDialogClose();
                                }
                            });
                        } else if (curStep.data(\"next\") === \"onboarding-step-2\" && \$(\"input[name='groupId']:checked\").val() === \"manual\") {
                            // Load the user add form.
                            XiboDialogClose();
                            XiboFormRender(\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.add.form"), "html", null, true);
        echo "\");
                        } else {
                            var nextStepWizard = steps.find(\"a[href='#\" + curStep.data(\"next\") + \"']\");

                            \$(dialog).find(\".form-group\").removeClass(\"has-error\");
                            for (var i = 0; i < curInputs.length; i++) {
                                if (!curInputs[i].validity.valid) {
                                    isValid = false;
                                    \$(curInputs[i]).closest(\".form-group\").addClass(\"has-error\");
                                }
                            }

                            // Set the defaults.
                            if (curStep.data(\"next\") === \"onboarding-step-2\") {
                                var \$userGroupSelected = \$(\"input[name='groupId']:checked\");
                                \$(dialog).find(\"input[name=homePageId]\").val(\$userGroupSelected.data(\"defaultHomepageId\"));
                            }

                            if (isValid) {
                                nextStepWizard.removeAttr('disabled').trigger('click');
                            }
                        }
                    }));
        }

        function userHomeFolderFormOpen(dialog) {
            initFolderPanel(dialog, true);
        }

        function userHomeFolderMultiselectFormOpen(dialog) {
            var \$input = \$('<div id=\"container-form-folder-tree\" class=\"card card-body bg-light\"></div>');
            var \$helpText = \$('<span class=\"help-block\">";
        // line 402
        echo twig_escape_filter($this->env, __("Set a home folder to use as the default folder for new content."), "html", null, true);
        echo "</span>');

            \$(dialog).find('.modal-body').append(\$input);
            \$(dialog).find('.modal-body').append(\$helpText);

            initFolderPanel(dialog, true);
        }

        function initFolderPanel(dialog, isHomeOnSelect = false, isHomeContext = false) {
            var plugins = [];

            if (!isHomeOnSelect) {
                plugins.push('checkbox');
            }

            initJsTreeAjax(
                '#container-form-folder-tree',
                'user-add_edit-form',
                true,
                600,
                function(tree, \$container) {
                    if (!isHomeOnSelect) {
                        tree.disable_checkbox(1);
                        tree.disable_node(1);
                    }
                    \$container.jstree('open_all');
                },
                function(data) {
                    if (isHomeOnSelect && data.action === 'select_node') {
                        \$(dialog).find('input[name=homeFolderId]').val(data.node.id);

                        // In case we're in a multi-select.
                        dialog.data().commitData = {homeFolderId: data.node.id};
                    }
                },
                function(\$node, items) {
                    if (isHomeContext) {
                        items['home'] = {
                            separator_before: false,
                            separator_after: false,
                            label: translations.folderTreeSetAsHome,
                            action: function () {
                                \$(dialog).find('input[name=homeFolderId]').val(\$node.id);
                            }
                        }
                    }
                    return items;
                },
                plugins,
                \$(dialog).find('input[name=homeFolderId]').val()
            );

            \$('.folder-tree-buttons').on('click', 'button', function(ev) {
                const jsTree = \$(dialog).find('#container-form-folder-tree').jstree(true);
                if (\$(ev.target).attr('id') === 'selectAllBtn') {
                    jsTree.select_all();
                } else if (\$(ev.target).attr('id') === 'selectNoneBtn') {
                    jsTree.deselect_all();
                }
            });
        }
    </script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user-page.twig";
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
        return array (  617 => 402,  583 => 371,  574 => 364,  567 => 360,  542 => 337,  540 => 336,  519 => 318,  511 => 313,  501 => 306,  496 => 304,  465 => 275,  461 => 273,  459 => 272,  289 => 105,  269 => 89,  265 => 88,  249 => 75,  245 => 74,  241 => 73,  237 => 72,  233 => 71,  229 => 70,  225 => 69,  221 => 68,  217 => 67,  213 => 66,  209 => 65,  205 => 64,  201 => 63,  197 => 62,  193 => 61,  189 => 60,  185 => 59,  181 => 58,  169 => 50,  165 => 49,  159 => 47,  155 => 46,  149 => 44,  146 => 43,  142 => 42,  136 => 40,  132 => 39,  126 => 37,  122 => 36,  114 => 31,  109 => 29,  106 => 28,  102 => 27,  94 => 23,  84 => 21,  81 => 20,  78 => 19,  75 => 18,  72 => 17,  69 => 16,  67 => 15,  64 => 14,  60 => 13,  52 => 11,  47 => 8,  45 => 9,  38 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "user-page.twig", "/var/www/html/cms_ubi/views/user-page.twig");
    }
}
