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

/* usergroup-page.twig */
class __TwigTemplate_80cb5aa5bc909d2bf270781ee6b65a3d extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "usergroup-page.twig", 9)->unwrap();
        // line 8
        $this->parent = $this->loadTemplate("authed.twig", "usergroup-page.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("User Groups"), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 15)) {
            // line 16
            echo "            <button class=\"btn btn-success XiboFormButton\" title=\"";
            echo __("Add a new User Group");
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("group.add.form"), "html", null, true);
            echo "\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
            echo __("Add User Group");
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

    // line 23
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 25
        echo __("User Groups");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"userGroupView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">

                            ";
        // line 32
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_inputNameGrid", ["userGroup", ($context["title"] ?? null)], 33, $context, $this->getSourceContext());
        echo "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"userGroups\" class=\"table table-striped\" data-state-preference-name=\"userGroupGrid\">
                        <thead>
                            <tr>
                                <th>";
        // line 41
        echo __("User Group");
        echo "</th>
                                <th>";
        // line 42
        echo __("Description");
        echo "</th>
                                <th>";
        // line 43
        echo __("Library Quota");
        echo "</th>
                                <th>";
        // line 44
        echo __("Receive System Notifications?");
        echo "</th>
                                <th>";
        // line 45
        echo __("Receive Display Notifications?");
        echo "</th>
                                <th>";
        // line 46
        echo __("Receive Custom Notifications?");
        echo "</th>
                                <th>";
        // line 47
        echo __("Receive DataSet Notifications?");
        echo "</th>
                                <th>";
        // line 48
        echo __("Receive Layout Notifications?");
        echo "</th>
                                <th>";
        // line 49
        echo __("Receive Library Notifications?");
        echo "</th>
                                <th>";
        // line 50
        echo __("Receive Report Notifications?");
        echo "</th>
                                <th>";
        // line 51
        echo __("Receive Schedule Notifications?");
        echo "</th>
                                <th>";
        // line 52
        echo __("Is shown for Add User?");
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
";
    }

    // line 66
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "    <script type=\"text/javascript\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">
        \$(document).ready(function() {
            var table = \$(\"#userGroups\").DataTable({
                \"language\": dataTablesLanguage,
                dom: dataTablesTemplate,
                serverSide: true,
                stateSave: true,
                stateDuration: 0,
                responsive: true,
                stateLoadCallback: dataTableStateLoadCallback,
                stateSaveCallback: dataTableStateSaveCallback,
                searchDelay: 3000,
                filter: false,
                order: [[0, 'asc']],
                ajax: {
                    url: \"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("group.search"), "html", null, true);
        echo "\",
                    data: function (d) {
                        \$.extend(d, \$('#userGroups').closest('.XiboGrid').find('.FilterDiv form').serializeObject());
                    }
                },
                \"columns\": [
                    {data: 'group', render: dataTableSpacingPreformatted, responsivePriority: 2 },
                    {data: 'description', visible: false },
                    {
                        name: 'libraryQuota',
                        data: null,
                        render: {'_': 'libraryQuota', 'display': 'libraryQuotaFormatted', 'sort': 'libraryQuota'}
                    },
                    {
                        data: 'isSystemNotification',
                        render: dataTableTickCrossColumn
                    },
                    {
                        data: 'isDisplayNotification',
                        render: dataTableTickCrossColumn
                    },
                    {
                        data: 'isDataSetNotification',
                        render: dataTableTickCrossColumn,
                        visible: false
                    },
                    {
                        data: 'isLayoutNotification',
                        render: dataTableTickCrossColumn,
                        visible: false
                    },
                    {
                        data: 'isLibraryNotification',
                        render: dataTableTickCrossColumn,
                        visible: false
                    },
                    {
                        data: 'isReportNotification',
                        render: dataTableTickCrossColumn,
                        visible: false
                    },
                    {
                        data: 'isScheduleNotification',
                        render: dataTableTickCrossColumn,
                        visible: false
                    },
                    {
                        data: 'isCustomNotification',
                        render: dataTableTickCrossColumn,
                        visible: false
                    },
                    {
                        data: \"isShownForAddUser\",
                        render: dataTableTickCrossColumn
                    },
                    {
                        \"orderable\": false,
                        responsivePriority: 1,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#userGroups_wrapper').find('.dataTables_buttons'));

            \$(\"#refreshGrid\").click(function () {
                table.ajax.reload();
            });
        });

        function handleLibraryQuotaField(libraryQuotaField, libraryQuotaUnitsField) {
            var libraryQuota = libraryQuotaField.val();

            if (libraryQuotaUnitsField.val() === 'mb') {
                libraryQuota = libraryQuota * 1024;
            } else if (libraryQuotaUnitsField.val() === 'gb') {
                libraryQuota = libraryQuota * 1024 * 1024;
            }

            // Set the field
            libraryQuotaField.prop('value', libraryQuota);
        }

        function userGroupFormOpen() {
            // Bind to the add form submit
            \$(\".UserGroupForm\").validate({
                submitHandler: function (form) {
                    // Grab and alter the value in the library quota field
                    handleLibraryQuotaField(
                        \$(form).find(\"input[name=libraryQuota]\"),
                        \$(form).find(\"select[name=libraryQuotaUnits]\")
                    );

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
    </script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "usergroup-page.twig";
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
        return array (  207 => 82,  188 => 67,  184 => 66,  167 => 52,  163 => 51,  159 => 50,  155 => 49,  151 => 48,  147 => 47,  143 => 46,  139 => 45,  135 => 44,  131 => 43,  127 => 42,  123 => 41,  111 => 33,  107 => 32,  99 => 27,  94 => 25,  91 => 24,  87 => 23,  79 => 18,  69 => 16,  67 => 15,  64 => 14,  60 => 13,  52 => 11,  47 => 8,  45 => 9,  38 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "usergroup-page.twig", "/var/www/html/cms_ubi/views/usergroup-page.twig");
    }
}
