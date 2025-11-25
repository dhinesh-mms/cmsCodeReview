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

/* auditlog-page.twig */
class __TwigTemplate_67870f25a3fd16ecbb36f3a78869bdf0 extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "auditlog-page.twig", 9)->unwrap();
        // line 8
        $this->parent = $this->loadTemplate("authed.twig", "auditlog-page.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("Audit Log"), "html", null, true);
        echo " | ";
    }

    // line 13
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <div class=\"widget-action-menu pull-right\">
        <button class=\"btn btn-success XiboFormButton\" title=\"";
        // line 15
        echo __("Export raw data to CSV");
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("auditLog.export.form"), "html", null, true);
        echo "\"><i class=\"fa fa-cloud-upload\" aria-hidden=\"true\"></i> ";
        echo __("Export");
        echo "</button>
        <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
        // line 16
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
        echo __("Audit Log");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"auditView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">

                            ";
        // line 29
        ob_start(function () { return ''; });
        echo __("From Date");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 30
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_date", ["fromDt", ($context["title"] ?? null)], 30, $context, $this->getSourceContext());
        echo "

                            ";
        // line 32
        ob_start(function () { return ''; });
        echo __("To Date");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_date", ["toDt", ($context["title"] ?? null)], 33, $context, $this->getSourceContext());
        echo "

                            ";
        // line 35
        ob_start(function () { return ''; });
        echo __("User");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 36
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_input", ["user", ($context["title"] ?? null)], 36, $context, $this->getSourceContext());
        echo "

                            ";
        // line 38
        ob_start(function () { return ''; });
        echo __("Entity");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 39
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_input", ["entity", ($context["title"] ?? null)], 39, $context, $this->getSourceContext());
        echo "

                            ";
        // line 41
        ob_start(function () { return ''; });
        echo __("Entity ID");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_input", ["entityId", ($context["title"] ?? null)], 42, $context, $this->getSourceContext());
        echo "

                            ";
        // line 44
        ob_start(function () { return ''; });
        echo __("IP Address");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_input", ["ipAddress", ($context["title"] ?? null)], 45, $context, $this->getSourceContext());
        echo "

                            ";
        // line 47
        ob_start(function () { return ''; });
        echo __("Message");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_input", ["message", ($context["title"] ?? null)], 48, $context, $this->getSourceContext());
        echo "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"logs\" class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>";
        // line 56
        echo __("ID");
        echo "</th>
                                <th>";
        // line 57
        echo __("Date");
        echo "</th>
                                <th>";
        // line 58
        echo __("User");
        echo "</th>
                                <th>";
        // line 59
        echo __("Entity");
        echo "</th>
                                <th>";
        // line 60
        echo __("Entity ID");
        echo "</th>
                                <th>";
        // line 61
        echo __("IP Address");
        echo "</th>
                                <th>";
        // line 62
        echo __("Message");
        echo "</th>
                                <th>";
        // line 63
        echo __("Object");
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

    // line 76
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        echo "    ";
        // line 97
        echo "
    <script type=\"text/x-handlebars-template\" id=\"table-array-viewer\">
        <a class=\"arrayViewerToggle\" href=\"#\"><span class=\"fa fa-search\"></span></a>
        <table class=\"arrayViewer table table-bordered\" data-state-preference-name=\"auditlogGrid\">
            <thead>
                <tr>
                    <th>{{ col1 }}</th>
                    <th>{{ col2 }}</th>
                </tr>
            </thead>
            <tbody>
                {{#each items}}
                <tr>
                    <td>{{ @key }}</td>
                    <td>{{ this }}</td>
                </tr>
                {{/each}}
            </tbody>
        </table>
    </script>
    ";
        echo "
    <script type=\"text/javascript\" nonce=\"";
        // line 98
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">

        \$(document).ready(function() {
            var arrayViewer = Handlebars.compile(\$(\"#table-array-viewer\").html());

            var table = \$(\"#logs\").DataTable({
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
                \"order\": [[0, \"desc\"]],
                ajax: {
                    url: \"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("auditLog.search"), "html", null, true);
        echo "\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#logs\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"logId\", responsivePriority: 2},
                    {\"data\": \"logDate\", \"render\": dataTableDateFromUnix, responsivePriority: 2},
                    {\"data\": \"userName\", responsivePriority: 2},
                    {\"data\": \"entity\", responsivePriority: 2},
                    {
                        \"name\": \"entityId\",
                        responsivePriority: 2,
                        \"data\" : function (data) {
                            if (data.entityId === 0) {
                                return ''
                            }

                            return data.entityId;
                        }
                    },
                    {\"data\": \"ipAddress\", responsivePriority: 2},
                    {\"data\": \"message\", responsivePriority: 1},
                    {
                        \"data\": function (data, type, row, meta) {
                            if (type != \"display\")
                                return \"\";

                            return arrayViewer({\"col1\": \"";
        // line 144
        echo __("Property");
        echo "\", \"col2\": \"";
        echo __("Value");
        echo "\", \"items\": data.objectAfter});
                        },
                        \"sortable\": false,
                         responsivePriority: 1
                    }
                ]
            });

            table.on('draw', function (e, settings) {
                dataTableDraw(e, settings);

                \$(\".arrayViewerToggle\").click(function () {
                    \$(this).parent().find(\".arrayViewer\").toggle();
                });
            });
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#logs_wrapper').find('.dataTables_buttons'));

            \$(\"#refreshGrid\").click(function () {
                table.ajax.reload();
            });
        });

        function auditLogExportFormSubmit() {
            \$(\"#auditLogExportForm\").submit();
            XiboDialogClose();
        }

    </script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "auditlog-page.twig";
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
        return array (  304 => 144,  273 => 116,  252 => 98,  228 => 97,  226 => 77,  222 => 76,  206 => 63,  202 => 62,  198 => 61,  194 => 60,  190 => 59,  186 => 58,  182 => 57,  178 => 56,  166 => 48,  162 => 47,  156 => 45,  152 => 44,  146 => 42,  142 => 41,  136 => 39,  132 => 38,  126 => 36,  122 => 35,  116 => 33,  112 => 32,  106 => 30,  102 => 29,  94 => 24,  89 => 22,  86 => 21,  82 => 20,  75 => 16,  67 => 15,  64 => 14,  60 => 13,  52 => 11,  47 => 8,  45 => 9,  38 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "auditlog-page.twig", "/var/www/html/cms_ubi/views/auditlog-page.twig");
    }
}
