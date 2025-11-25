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

/* log-page.twig */
class __TwigTemplate_737fd1ae9403e60cb024f5c8f98e9dff extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "log-page.twig", 9)->unwrap();
        // line 8
        $this->parent = $this->loadTemplate("authed.twig", "log-page.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("Logs"), "html", null, true);
        echo " | ";
    }

    // line 13
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <div class=\"widget-action-menu pull-right\">
        <button class=\"btn btn-warning XiboFormButton\" title=\"";
        // line 15
        echo __("Truncate the Log");
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("log.truncate.form"), "html", null, true);
        echo "\" data-auto-submit=\"true\" data-commit-url=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("log.truncate"), "html", null, true);
        echo "\" data-commit-method=\"DELETE\"><i class=\"fa fa-scissors\" aria-hidden=\"true\"></i> ";
        echo __("Truncate");
        echo "</button>
        <button class=\"btn btn-primary\" id=\"refreshLog\" title=\"";
        // line 16
        echo __("Refresh the Log");
        echo "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i> ";
        echo __("Refresh");
        echo "</button>
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
        echo __("Logs");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"logView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\">";
        // line 28
        echo __("General");
        echo "</a></li>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#advanced\" role=\"tab\" data-toggle=\"tab\">";
        // line 29
        echo __("Advanced");
        echo "</a></li>
                        </ul>
                        <form class=\"form-inline\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"general\">
                                    ";
        // line 34
        ob_start(function () { return ''; });
        echo __("Level");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 35
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_input", ["level", ($context["title"] ?? null)], 35, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 37
        ob_start(function () { return ''; });
        echo __("Interval");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 38
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("Seconds");
        $context["secondsTrans"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 39
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("Minutes");
        $context["minutesTrans"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 40
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("Hours");
        $context["hoursTrans"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        echo "                                    ";
        $context["intervalTypeOptions"] = [["id" => 1, "value" =>         // line 42
($context["secondsTrans"] ?? null)], ["id" => 60, "value" =>         // line 43
($context["minutesTrans"] ?? null)], ["id" => 3600, "value" =>         // line 44
($context["hoursTrans"] ?? null)]];
        // line 46
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["intervalType", "single", ($context["title"] ?? null), 1, ($context["intervalTypeOptions"] ?? null), "id", "value"], 46, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 48
        ob_start(function () { return ''; });
        echo __("Duration back");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_number", ["seconds", ($context["title"] ?? null), 120], 49, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 51
        ob_start(function () { return ''; });
        echo __("Run");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_input", ["runNo", ($context["title"] ?? null)], 52, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 54
        ob_start(function () { return ''; });
        echo __("User");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        echo "                                    ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.search")], ["name" => "data-search-term", "value" => "userName"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "userId"], ["name" => "data-text-property", "value" => "userName"], ["name" => "data-initial-key", "value" => "userId"]];
        // line 67
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["userId", "single", ($context["title"] ?? null), "", null, "userId", "userName", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 67, $context, $this->getSourceContext());
        echo "
                                </div>
                                <div class=\"tab-pane\" id=\"advanced\">
                                    ";
        // line 70
        ob_start(function () { return ''; });
        echo __("From Date");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 71
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_date", ["fromDt", ($context["title"] ?? null)], 71, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 73
        ob_start(function () { return ''; });
        echo __("Channel");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 74
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_input", ["channel", ($context["title"] ?? null)], 74, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 76
        ob_start(function () { return ''; });
        echo __("Page");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 77
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_input", ["page", ($context["title"] ?? null)], 77, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 79
        ob_start(function () { return ''; });
        echo __("Function");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("GET");
        $context["getTrans"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 81
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("POST");
        $context["postTrans"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 82
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("PUT");
        $context["putTrans"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("DELETE");
        $context["deleteTrans"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("HEAD");
        $context["headTrans"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 85
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("PATCH");
        $context["patchTrans"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 86
        echo "                                    ";
        $context["functionOptions"] = [["id" => "", "value" => ""], ["id" => "GET", "value" =>         // line 88
($context["getTrans"] ?? null)], ["id" => "POST", "value" =>         // line 89
($context["postTrans"] ?? null)], ["id" => "PUT", "value" =>         // line 90
($context["putTrans"] ?? null)], ["id" => "DELETE", "value" =>         // line 91
($context["deleteTrans"] ?? null)], ["id" => "HEAD", "value" =>         // line 92
($context["headTrans"] ?? null)], ["id" => "PATCH", "value" =>         // line 93
($context["patchTrans"] ?? null)]];
        // line 95
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["function", "single", ($context["title"] ?? null), "", ($context["functionOptions"] ?? null), "id", "value"], 95, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 97
        ob_start(function () { return ''; });
        echo __("Display");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        echo "                                    ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.search")], ["name" => "data-search-term", "value" => "display"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "displayId"], ["name" => "data-text-property", "value" => "display"]];
        // line 109
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["displayId", "single", ($context["title"] ?? null), "", null, "displayId", "display", "", "pagedSelect", "", "d", "", ($context["attributes"] ?? null)], 109, $context, $this->getSourceContext());
        echo "

                                    <div class=\"form-group mr-1 mb-1\">
                                        <label class=\"control-label mr-1\" title=\"\" for=\"display\" accesskey=\"\">";
        // line 112
        echo __("Display Name");
        echo "</label>
                                        <div>
                                            <div class=\"input-group\">
                                                <input class=\"form-control\" name=\"display\" type=\"text\" id=\"display\" value=\"\">
                                                <div class=\"input-group-append input-group-addon\">
                                                    <div class=\"input-group-text\">
                                                        <input title=\"";
        // line 118
        echo __("Use Regex?");
        echo "\" type=\"checkbox\" id=\"useRegexForName\" name=\"useRegexForName\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    ";
        // line 125
        ob_start(function () { return ''; });
        echo __("Display Group");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 126
        echo "                                    ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.search")], ["name" => "data-search-term", "value" => "displayGroup"], ["name" => "data-id-property", "value" => "displayGroupId"], ["name" => "data-text-property", "value" => "displayGroup"]];
        // line 136
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["displayGroupId", "single", ($context["title"] ?? null), "", null, "displayGroupId", "displayGroup", "", "pagedSelect", "", "d", "", ($context["attributes"] ?? null)], 136, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 138
        ob_start(function () { return ''; });
        echo __("Message");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 139
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_input", ["message", ($context["title"] ?? null)], 139, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 141
        ob_start(function () { return ''; });
        echo __("Exclude logs common to each request?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 142
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_checkbox", ["excludeLog", ($context["title"] ?? null), 1], 142, $context, $this->getSourceContext());
        echo "
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"logs\" class=\"table table-striped\" data-state-preference-name=\"logGrid\">
                        <thead>
                            <tr>
                                <th>";
        // line 152
        echo __("ID");
        echo "</th>
                                <th>";
        // line 153
        echo __("Run");
        echo "</th>
                                <th>";
        // line 154
        echo __("Date");
        echo "</th>
                                <th>";
        // line 155
        echo __("Channel");
        echo "</th>
                                <th>";
        // line 156
        echo __("Function");
        echo "</th>
                                <th>";
        // line 157
        echo __("Level");
        echo "</th>
                                <th>";
        // line 158
        echo __("Display");
        echo "</th>
                                <th>";
        // line 159
        echo __("Page");
        echo "</th>
                                <th style=\"width: 50%\">";
        // line 160
        echo __("Message");
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

    // line 173
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 174
        echo "    <script type=\"text/javascript\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">
        \$(document).ready(function() {
            var table = \$(\"#logs\").DataTable({
                \"language\": dataTablesLanguage,
                dom: dataTablesTemplate,
                serverSide: true,
                stateSave: true,
                stateDuration: 0,
                stateLoadCallback: dataTableStateLoadCallback,
                stateSaveCallback: dataTableStateSaveCallback,
                filter: false,
                searchDelay: 3000,
                \"order\": [[0, \"desc\"]],
                ajax: {
                    url: \"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("log.search"), "html", null, true);
        echo "\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#logs\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"logId\"},
                    {\"data\": \"runNo\"},
                    {\"data\": \"logDate\", \"render\": dataTableDateFromIso},
                    {\"data\": \"channel\"},
                    {\"data\": \"function\"},
                    {\"data\": \"type\"},
                    {\"data\": \"display\"},
                    {\"data\": \"page\"},
                    {\"data\": \"message\"}
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#logs_wrapper').find('.dataTables_buttons'));

            \$(\"#refreshLog\").click(function() {
                table.ajax.reload();
            });
        });
    </script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "log-page.twig";
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
        return array (  415 => 188,  397 => 174,  393 => 173,  377 => 160,  373 => 159,  369 => 158,  365 => 157,  361 => 156,  357 => 155,  353 => 154,  349 => 153,  345 => 152,  331 => 142,  327 => 141,  321 => 139,  317 => 138,  311 => 136,  308 => 126,  304 => 125,  294 => 118,  285 => 112,  278 => 109,  275 => 98,  271 => 97,  265 => 95,  263 => 93,  262 => 92,  261 => 91,  260 => 90,  259 => 89,  258 => 88,  256 => 86,  251 => 85,  246 => 84,  241 => 83,  236 => 82,  231 => 81,  226 => 80,  222 => 79,  216 => 77,  212 => 76,  206 => 74,  202 => 73,  196 => 71,  192 => 70,  185 => 67,  182 => 55,  178 => 54,  172 => 52,  168 => 51,  162 => 49,  158 => 48,  152 => 46,  150 => 44,  149 => 43,  148 => 42,  146 => 41,  141 => 40,  136 => 39,  131 => 38,  127 => 37,  121 => 35,  117 => 34,  109 => 29,  105 => 28,  98 => 24,  93 => 22,  90 => 21,  86 => 20,  77 => 16,  67 => 15,  64 => 14,  60 => 13,  52 => 11,  47 => 8,  45 => 9,  38 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "log-page.twig", "/var/www/html/cms_ubi/views/log-page.twig");
    }
}
