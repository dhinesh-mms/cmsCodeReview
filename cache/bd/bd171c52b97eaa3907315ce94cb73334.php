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

/* proofofplay-report-form.twig */
class __TwigTemplate_f24d5685c5b6b8a6d2fd8a1ea6330e3f extends Template
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
        // line 24
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "proofofplay-report-form.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("authed.twig", "proofofplay-report-form.twig", 24);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo __("Report: Proof of Play");
        echo " | ";
    }

    // line 29
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    ";
        $this->loadTemplate("report-schedule-buttons.twig", "proofofplay-report-form.twig", 30)->display($context);
    }

    // line 33
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "
    <div class=\"widget\">
        <div class=\"widget-title\">
            <span>";
        // line 37
        echo __("Proof of Play");
        echo "</span>
        </div>

        ";
        // line 40
        $this->loadTemplate("report-selector.twig", "proofofplay-report-form.twig", 40)->display($context);
        // line 41
        echo "
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"proofOfPlayView\" data-refresh-on-form-submit=\"false\">
                <div class=\"XiboFilterCustom card bg-light mb-3\">
                    <div class=\"FilterDiv card-body\" id=\"proofofplayReport\">
                        <!-- Form Filter -->
                        <form class=\"form-inline\">
                            ";
        // line 48
        ob_start(function () { return ''; });
        echo __("Range");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Select a range");
        $context["range"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Today");
        $context["today"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Yesterday");
        $context["yesterday"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("This Week");
        $context["thisweek"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("This Month");
        $context["thismonth"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("This Year");
        $context["thisyear"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Last Week");
        $context["lastweek"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Last Month");
        $context["lastmonth"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Last Year");
        $context["lastyear"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        echo "                            ";
        $context["options"] = [["filterName" => "", "reportFilter" =>         // line 59
($context["range"] ?? null)], ["filterName" => "today", "reportFilter" =>         // line 60
($context["today"] ?? null)], ["filterName" => "yesterday", "reportFilter" =>         // line 61
($context["yesterday"] ?? null)], ["filterName" => "thisweek", "reportFilter" =>         // line 62
($context["thisweek"] ?? null)], ["filterName" => "thismonth", "reportFilter" =>         // line 63
($context["thismonth"] ?? null)], ["filterName" => "thisyear", "reportFilter" =>         // line 64
($context["thisyear"] ?? null)], ["filterName" => "lastweek", "reportFilter" =>         // line 65
($context["lastweek"] ?? null)], ["filterName" => "lastmonth", "reportFilter" =>         // line 66
($context["lastmonth"] ?? null)], ["filterName" => "lastyear", "reportFilter" =>         // line 67
($context["lastyear"] ?? null)]];
        // line 69
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["reportFilter", "single", ($context["title"] ?? null), "today", ($context["options"] ?? null), "filterName", "reportFilter"], 69, $context, $this->getSourceContext());
        echo "

                            ";
        // line 71
        ob_start(function () { return ''; });
        echo __("From Date");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_date", ["statsFromDt", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["defaults"] ?? null), "fromDateOneDay", [], "any", false, false, false, 72), "", "stats-from-dt", "", ""], 72, $context, $this->getSourceContext());
        echo "

                            ";
        // line 74
        ob_start(function () { return ''; });
        echo __("Time");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_time", ["statsFromDtTime", ($context["title"] ?? null), "00:00", "", "stats-from-dt-time"], 75, $context, $this->getSourceContext());
        echo "

                            ";
        // line 77
        ob_start(function () { return ''; });
        echo __("To Date");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 78
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_date", ["statsToDt", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["defaults"] ?? null), "toDate", [], "any", false, false, false, 78), "", "stats-to-dt", "", ""], 78, $context, $this->getSourceContext());
        echo "

                            ";
        // line 80
        ob_start(function () { return ''; });
        echo __("Time");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 81
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_time", ["statsToDtTime", ($context["title"] ?? null), "00:00", "", "stats-to-dt-time"], 81, $context, $this->getSourceContext());
        echo "

                            ";
        // line 83
        ob_start(function () { return ''; });
        echo __("Group By");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        echo "                            ";
        $context["options"] = [["id" => "display", "name" => "Display"], ["id" => "displayGroup", "name" => __("Display Group")], ["id" => "tag", "name" => __("Tag")]];
        // line 89
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["groupBy", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "id", "name", ""], 89, $context, $this->getSourceContext());
        echo "

                            ";
        // line 91
        ob_start(function () { return ''; });
        echo __("Display");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        echo "                            ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.search")], ["name" => "data-search-term", "value" => "display"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "displayId"], ["name" => "data-text-property", "value" => "display"]];
        // line 103
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["displayId", "single", ($context["title"] ?? null), "", null, "displayId", "display", "", "pagedSelect", "", "d", "", ($context["attributes"] ?? null)], 103, $context, $this->getSourceContext());
        echo "

                            ";
        // line 105
        ob_start(function () { return ''; });
        echo __("Display Group");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 106
        echo "                            ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.search")], ["name" => "data-search-term", "value" => "displayGroup"], ["name" => "data-id-property", "value" => "displayGroupId"], ["name" => "data-text-property", "value" => "displayGroup"]];
        // line 116
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["displayGroupId[]", "dropdownmulti", ($context["title"] ?? null), "", null, "displayGroupId", "displayGroup", "", "pagedSelect", "", "d", "", ($context["attributes"] ?? null)], 116, $context, $this->getSourceContext());
        echo "

                            ";
        // line 118
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.search")], ["name" => "data-search-term", "value" => "layout"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "layoutId"], ["name" => "data-text-property", "value" => "layout"]];
        // line 129
        echo "
                            ";
        // line 130
        ob_start(function () { return ''; });
        echo __("Layout");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 131
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["layoutId[]", "dropdownmulti", ($context["title"] ?? null), "", null, "layoutId", "layout", "", "pagedSelect", "", "l", "", ($context["attributes"] ?? null)], 131, $context, $this->getSourceContext());
        echo "

                            ";
        // line 134
        echo "                            ";
        $context["attributes"] = [["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.search")], ["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""]];
        // line 141
        echo "
                            ";
        // line 142
        ob_start(function () { return ''; });
        echo __("Campaign");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 143
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Please select a Campaign");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 144
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["parentCampaignId", "single", ($context["title"] ?? null), "", null, "campaignId", "campaign", "", "", "", "", "", ($context["attributes"] ?? null)], 144, $context, $this->getSourceContext());
        echo "

                            ";
        // line 146
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search")], ["name" => "data-search-term", "value" => "media"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "mediaId"], ["name" => "data-text-property", "value" => "name"]];
        // line 157
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Media");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 158
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["mediaId[]", "dropdownmulti", ($context["title"] ?? null), "", null, "mediaId", "name", "", "pagedSelect", "", "m", "", ($context["attributes"] ?? null)], 158, $context, $this->getSourceContext());
        echo "

                            ";
        // line 160
        ob_start(function () { return ''; });
        echo __("Type");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 161
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Layout");
        $context["layout"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 162
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Media");
        $context["media"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 163
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Widget");
        $context["widget"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 164
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Event");
        $context["event"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 165
        echo "                            ";
        $context["options"] = [["typeid" => "", "type" => null], ["typeid" => "layout", "type" =>         // line 167
($context["layout"] ?? null)], ["typeid" => "media", "type" =>         // line 168
($context["media"] ?? null)], ["typeid" => "widget", "type" =>         // line 169
($context["widget"] ?? null)], ["typeid" => "event", "type" =>         // line 170
($context["event"] ?? null)]];
        // line 172
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["type", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "typeid", "type"], 172, $context, $this->getSourceContext());
        echo "

                            ";
        // line 174
        ob_start(function () { return ''; });
        echo __("Tags from");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 175
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Display");
        $context["dg"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 176
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Layout");
        $context["layout"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 177
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Media");
        $context["media"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 178
        echo "                            ";
        $context["options"] = [["tagsTypeid" => "dg", "tagsType" =>         // line 179
($context["dg"] ?? null)], ["tagsTypeid" => "layout", "tagsType" =>         // line 180
($context["layout"] ?? null)], ["tagsTypeid" => "media", "tagsType" =>         // line 181
($context["media"] ?? null)]];
        // line 183
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["tagsType", "single", ($context["title"] ?? null), "dg", ($context["options"] ?? null), "tagsTypeid", "tagsType"], 183, $context, $this->getSourceContext());
        echo "

                            ";
        // line 185
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 185)) {
            // line 186
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("Tags");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 187
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("Should Tags filter by exact match?");
            $context["exactMatchTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 188
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("When filtering by multiple Tags, which logical operator should be used?");
            $context["logicalOperatorTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 189
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("A comma separated list of tags to filter by. Enter a tag|tag value to filter tags with values. Enter --no-tag to filter all items without tags. Enter - before a tag or tag value to exclude from results.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 190
            echo "                                ";
            echo twig_call_macro($macros["inline"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), null, ($context["helpText"] ?? null), null, null, null, "exactTags", ($context["exactMatchTitle"] ?? null), ($context["logicalOperatorTitle"] ?? null)], 190, $context, $this->getSourceContext());
            echo "
                            ";
        }
        // line 192
        echo "
                            <div class=\"w-100\">
                                <a id=\"applyBtn\" class=\"btn btn-success\">
                                    <span>";
        // line 195
        echo __("Apply");
        echo "</span>
                                </a>
                                <span id=\"imageLoader\" class=\"\"></span>
                                <span id=\"applyWarning\" class=\"text-warning\" style=\"display:none; padding-left: 10px\">";
        // line 198
        echo __("Warning: This may return a lot of data and may take several minutes to process.");
        echo "</span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Card Header -->
                <div class=\"card-header\">
                    <ul class=\"nav nav-tabs card-header-tabs\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" id=\"tabular-tab\" data-toggle=\"tab\" href=\"#tabularTab\" role=\"tab\"
                               aria-controls=\"tabularTab\" aria-selected=\"true\">Tabular</a>
                        </li>
                    </ul>
                </div>

                <!-- Card Body -->
                <div class=\"card-body\">
                    <div class=\"tab-content\">
                        <!-- TABULAR TAB-->
                        <div class=\"tab-pane active\" id=\"tabularTab\" role=\"tabpanel\" aria-labelledby=\"tabular-tab\">
                            <!-- DATATABLE -->
                            <div class=\"table-container\" id=\"table_wrapper\">
                                <table id=\"stats\"
                                       class=\"table xibo-table table-striped table-full-width\"
                                       style=\"width: 100%\"
                                       data-state-preference-name=\"proofOfPlayGrid\"
                                       data-url=\"/report/data/proofofplayReport\">
                                    <thead>
                                    <tr>
                                        <th>";
        // line 227
        echo __("Type");
        echo "</th>
                                        <th>";
        // line 228
        echo __("Display ID");
        echo "</th>
                                        <th>";
        // line 229
        echo __("Display");
        echo "</th>
                                        <th>";
        // line 230
        echo __("Display Group ID");
        echo "</th>
                                        <th>";
        // line 231
        echo __("Display Group");
        echo "</th>
                                        <th>";
        // line 232
        echo __("Tag ID");
        echo "</th>
                                        <th>";
        // line 233
        echo __("Tag Name");
        echo "</th>
                                        <th>";
        // line 234
        echo __("Campaign");
        echo "</th>
                                        <th>";
        // line 235
        echo __("Layout ID");
        echo "</th>
                                        <th>";
        // line 236
        echo __("Layout");
        echo "</th>
                                        <th>";
        // line 237
        echo __("Widget ID");
        echo "</th>
                                        <th>";
        // line 238
        echo __("Media");
        echo "</th>
                                        <th>";
        // line 239
        echo __("Tag");
        echo "</th>
                                        <th>";
        // line 240
        echo __("Number of Plays");
        echo "</th>
                                        <th>";
        // line 241
        echo __("Total Duration");
        echo "</th>
                                        <th>";
        // line 242
        echo __("Total Duration (s)");
        echo "</th>
                                       <!--  <th title=\"";
        // line 243
        echo twig_escape_filter($this->env, __("NB: proof of play records which span your range are returned in this report."), "html", null, true);
        echo "\">";
        echo __("First Period Shown");
        echo "</th>
                                        <th title=\"";
        // line 244
        echo twig_escape_filter($this->env, __("NB: proof of play records which span your range are returned in this report."), "html", null, true);
        echo "\">";
        echo __("Last Period Shown");
        echo "</th> -->
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                       <!--  <th></th>
                                        <th></th> -->
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 282
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 283
        echo "    <script type=\"text/javascript\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">
        \$(document).ready(function() {
            let \$report = \$(\"#proofofplayReport\");
            let \$dataTable = \$('#stats'); // Datatable
            let chart = null; // Chart
            let result; // XHR get data result

            let imageLoader = \$(\"#imageLoader\");
            let \$warning = \$(\"#applyWarning\");
            let \$applyBtn = \$(\"#applyBtn\");

            // Report Filter
            let reportFilter = \$(\"#reportFilter\"); // Report Filter

            // Grid
            let table = \$dataTable.DataTable({
                \"language\": dataTablesLanguage,
                dom: dataTablesTemplate,
                stateSave: true,
                stateDuration: 0,
                stateLoadCallback: dataTableStateLoadCallback,
                stateSaveCallback: dataTableStateSaveCallback,
                drawCallback: function( settings ) {
                    setTimeout(function() {
                        \$(\"#applyBtn\").removeClass('disabled');
                    }, 300);

                    // We hide empty columns and display appropriate columns (ie ID and name)
                    switch (\$('select[name=\"groupBy\"]').val()) {
                        case 'displayGroup':
                            \$(this.api().columns([1, 2, 5, 6]).visible(false));
                            \$(this.api().columns([3, 4]).visible(true));
                            break;
                        case 'tag':
                            \$(this.api().columns([1,2, 3, 4]).visible(false));
                            \$(this.api().columns([5, 6]).visible(true));
                            break;
                        default:
                            \$(this.api().columns([3, 4, 5, 6]).visible(false));
                            \$(this.api().columns([1, 2]).visible(true));
                    }
                },
                filter: false,
                \"order\": [[1, \"asc\"]],
                data:{},
                \"columns\": [
                    {\"data\": \"type\"},
                    {\"data\": \"displayId\"},
                    {\"data\": \"display\"},
                    {\"data\": \"displayGroupId\"},
                    {\"data\": \"displayGroup\"},
                    {\"data\": \"tagId\"},
                    {\"data\": \"tagName\"},
                    {\"data\": \"parentCampaign\"},
                    {\"data\": \"layoutId\"},
                    {\"data\": \"layout\"},
                    {\"data\": \"widgetId\"},
                    {\"data\": \"media\"},
                    {\"data\": \"tag\"},
                    {\"data\": \"numberPlays\"},
                    {
                        \"data\": \"duration\",
                        \"render\": function (data, type, row, meta) {
                            if (type != \"display\")
                                return \"\";

                            var durationData = moment.duration(data, \"seconds\");
                            var dataM = '';

                            var months = durationData.months();
                            if (months > 0) {
                                durationData.subtract(moment.duration(months,'months'));
                                dataM += months + '";
        // line 355
        echo __("month");
        echo " ';
                            }

                            var days = durationData.days();
                            durationData.subtract(moment.duration(days,'days'));
                            dataM += days + '";
        // line 360
        echo __("day");
        echo " ';

                            var hours = durationData.hours();
                            durationData.subtract(moment.duration(hours,'hours'));
                            dataM += hours + '";
        // line 364
        echo __("hr");
        echo " ';

                            var minutes = durationData.minutes();
                            durationData.subtract(moment.duration(minutes,'minutes'));
                            dataM += minutes + '";
        // line 368
        echo __("min");
        echo " ';

                            var seconds = durationData.seconds();
                            dataM += seconds + '";
        // line 371
        echo __("sec");
        echo " ';

                            return  dataM;
                        }
                    },
                    {\"data\": \"duration\"},
                   /* {\"data\": \"minStart\"},
                    {\"data\": \"maxEnd\"} */
                ],
                footerCallback: function (row, data, start, end, display) {
                    let api = this.api();

                    // Total over all pages
                    let totalNumberPlays = api.column(13).data().reduce(function (a, b) {
                        return a + b;
                    }, 0);
                    let totalDuration = api.column(15).data().reduce(function (a, b) {
                        return a + b;
                    }, 0);
                    let totalNumberPlaysPage = api.column(13, { page: 'current'}).data().reduce(function (a, b) {
                        return a + b;
                    }, 0);
                    let totalDurationPage = api.column(15, { page: 'current'}).data().reduce(function (a, b) {
                        return a + b;
                    }, 0);

                    // Update footer
                    \$(api.column(13).footer()).html(totalNumberPlaysPage + ' (' + totalNumberPlays + ' total)');
                    \$(api.column(15).footer()).html(Math.floor(totalDurationPage) + ' (' + Math.floor(totalDuration) + ' total)');
                },
            });

            // table.on('draw', dataTableDraw);
            // table.on('processing.dt', dataTableProcessing);
            // dataTableAddButtons(table, \$('#stats_wrapper').find('.dataTables_buttons'));

            // Get Data
            function getData(url) {

                \$.ajax({
                    url: url,
                    method: 'GET',
                    dataType: 'json',
                    data: \$(\"#stats\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject(),
                    success: function success(data) {
                        result = data;
                        \$applyBtn.removeClass('disabled');
                        imageLoader.removeClass('fa fa-spinner fa-spin loading-icon');

                        // Based on tab load data
                        if (\$('.nav-tabs .nav-item a.active').attr(\"href\") === '#tabularTab') {
                            setTabularData(table, result.table);
                        } else {
                            setChartData(result.chart);
                        }
                    },
                    error: function error(xhr, textStatus, _error) {
                        \$applyBtn.removeClass('disabled');
                        toastr.error(xhr.responseJSON.message);
                    }
                });
            }

            function setTabularData(table, data) {
                table.clear().draw();

                if (Object.keys(data).length > 0) {
                    table.rows.add( data ).draw()
                }
            }

            function setChartData(data) {

                setTimeout(function() {
                    \$applyBtn.removeClass('disabled');
                }, 300);

                if (chart !== undefined && chart !== null) {
                    chart.destroy();
                }

                // Create our chart
                chart = new Chart(\$(\"#canvas\"), data);
            }

            // Tab shown/click load relevant table/chart
            \$('a[data-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
                let activeTab = \$(e.target).attr(\"href\")
                if (result) {
                    if (activeTab === '#tabularTab') {
                        setTabularData(table, result.table);
                    } else {
                        setChartData(result.chart);
                    }
                }
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#stats_wrapper').find('.dataTables_buttons'));

            // Apply
            \$applyBtn.click(function () {
                \$(this).addClass('disabled');
                imageLoader.addClass('fa fa-spinner fa-spin loading-icon');
                getData(\$dataTable.data().url);
            });

            // If we select a displayId, we hide the display group filter
            \$('#displayId').off('change').change( function() {
                let displayId = \$('#displayId').val();

                if (displayId) {
                    \$('select[name=\"displayGroupId[]\"] option').remove();
                    \$('select[name=\"displayGroupId[]\"]').next(\".select2-container\").parent().hide();
                    \$('select[name=\"groupBy[]\"] option').remove();
                    \$('select[name=\"groupBy\"]').parent().hide();
                } else {
                    \$('#displayId option').remove();
                    \$('select[name=\"displayGroupId[]\"]').next(\".select2-container\").parent().show();
                    \$('select[name=\"groupBy\"]').parent().show();
                }
            });

            // If we select a groupBy data, we hide the display filter
            \$(\"select[name='groupBy']\").on('change', function() {
                let optionSelected = \$(this).find(\"option:selected\").val();

                if (optionSelected === 'displayGroup') {
                    \$('select[name=\"groupBy\"]').parent().show();
                    \$('select[name=\"displayGroupId[]\"]').next(\".select2-container\").parent().show();
                } else {
                    \$('select[name=\"displayGroupId[]\"] option').remove();
                    \$('select[name=\"displayGroupId[]\"]').next(\".select2-container\").parent().hide();
                }

                if (optionSelected === 'display') {
                    \$(\"select[name='displayId']\").parent().show();
                } else {
                    \$(\"select[name='displayId']\").parent().hide();
                }
            });

            // Hide / Show FromDt and ToDt
            function checkReportFilter(reportFilter) {
                if (reportFilter.val() === '' || reportFilter.val() === undefined) {
                    \$(\".stats-from-dt\").show();
                    \$(\".stats-to-dt\").show();
                    \$(\".stats-from-dt-time\").show();
                    \$(\".stats-to-dt-time\").show();
                } else {
                    \$(\".stats-from-dt\").hide();
                    \$(\".stats-to-dt\").hide();
                    \$(\".stats-from-dt-time\").hide();
                    \$(\".stats-to-dt-time\").hide();
                }
            }

            // Calculate the difference of number of days of a selected range
            let calculateDaysShowHideWarn = function() {

                let fromDt = moment(\$(\"#statsFromDt\").val());
                let toDt = moment(\$(\"#statsToDt\").val());

                let days = toDt.diff(fromDt, 'days');

                \$warning.hide();
                if ( days >= 30) {
                    \$warning.show();
                }

                return true;
            };

            \$(\"#statsFromDtLink\").change( function() {
                calculateDaysShowHideWarn();
            });

            \$(\"#statsToDtLink\").change( function() {
                calculateDaysShowHideWarn();
            });

            let checkFilterAndApply = function() {

                reportFilter.off('change').change( function() {
                    let value = reportFilter.val();

                    // Hide / Show FromDt and ToDt
                    checkReportFilter(reportFilter);

                    // Hide / Show Warning
                    \$warning.hide();
                    if ( value === '') {
                        calculateDaysShowHideWarn();
                    } else if ( value === 'thismonth' || value === 'lastmonth' || value === 'thisyear' || value === 'lastyear') {
                        \$warning.show();
                    }
                });

                let anchorReportAddBtn = \$(\"button#reportAddBtn\");
                let type = \$(\"#type\").val();
                let tagsType = \$(\"#tagsType\").val();
                let tags = \$(\"#tags\").val();
                let exactTags = \$('#exactTags').is(\":checked\");

                anchorReportAddBtn.attr(\"href\", \"";
        // line 576
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("reportschedule.add.form"), "html", null, true);
        echo "?type=\" + type + \"&tagsType=\" + tagsType + \"&tags=\" + tags + \"&exactTags=\" + exactTags
                    + \"&reportName=proofofplayReport\" );

            };

            checkReportFilter(reportFilter);
            checkFilterAndApply();


            var \$campaignSelect = \$('#parentCampaignId');
            \$campaignSelect.select2({
                ajax: {
                    url: \$campaignSelect.data(\"searchUrl\"),
                    dataType: \"json\",
                    delay: 250,
                    placeholder: 'Campaign',
                    allowClear: true,
                    data: function(params) {

                        var query = {
                            isLayoutSpecific: 0,
                            retired: 0,
                            totalDuration: 0,
                            name: params.term,
                            start: 0,
                            length: 10,
                            columns: [
                                {
                                    \"data\": \"isLayoutSpecific\"
                                },
                                {
                                    \"data\": \"campaign\"
                                }
                            ],
                            order: [
                                {
                                    \"column\": 0,
                                    \"dir\": \"asc\"
                                },
                                {
                                    \"column\": 1,
                                    \"dir\": \"asc\"
                                }
                            ]
                        };

                        // Set the start parameter based on the page number
                        if (params.page != null) {
                            query.start = (params.page - 1) * 10;
                        }

                        return query;
                    },
                    processResults: function(data, params) {

                        var results = [];
                        var campaigns = [];

                        \$.each(data.data, function(index, element) {
                            campaigns.push({
                                \"id\": element.campaignId,
                                \"text\": element.campaign
                            });
                        });

                        results.push({
                            \"text\": \$campaignSelect.data('transCampaigns'),
                            \"children\": campaigns
                        })


                        var page = params.page || 1;
                        page = (page > 1) ? page - 1 : page;

                        return {
                            results: results,
                            pagination: {
                                more: (page * 10 < data.recordsTotal)
                            }
                        }
                    }
                }
            })
        });

        function proofOfPlayScheduleCallback() {

            let \$displayId = \$('#proofofplayReport #displayId');
            let \$layoutId = \$('#proofofplayReport [id=\"layoutId[]\"]');
            let \$mediaId = \$('#proofofplayReport [id=\"mediaId[]\"]');
            let \$newDisplayId = \$('#proofofplayScheduleAddForm #displayId');
            let \$newLayoutId = \$('#proofofplayScheduleAddForm [id=\"layoutId[]\"]');
            let \$newMediaId = \$('#proofofplayScheduleAddForm [id=\"mediaId[]\"]');

            appendOptions(\$newDisplayId, \$displayId.find('option:selected').clone());
            appendOptions(\$newLayoutId, \$layoutId.find('option:selected').clone());
            appendOptions(\$newMediaId, \$mediaId.find('option:selected').clone());
        }

        function appendOptions(element, options) {

            for (let i = 0; i < options.length; i++) {

                let option = options[i];
                element.append(option).trigger('change');
                \$(option).prop('selected', true);
                element.trigger({
                    type: 'select2:select',
                    params: {
                        data: option
                    }
                });
            }
        }
    </script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "proofofplay-report-form.twig";
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
        return array (  861 => 576,  653 => 371,  647 => 368,  640 => 364,  633 => 360,  625 => 355,  549 => 283,  545 => 282,  502 => 244,  496 => 243,  492 => 242,  488 => 241,  484 => 240,  480 => 239,  476 => 238,  472 => 237,  468 => 236,  464 => 235,  460 => 234,  456 => 233,  452 => 232,  448 => 231,  444 => 230,  440 => 229,  436 => 228,  432 => 227,  400 => 198,  394 => 195,  389 => 192,  383 => 190,  378 => 189,  373 => 188,  368 => 187,  363 => 186,  361 => 185,  355 => 183,  353 => 181,  352 => 180,  351 => 179,  349 => 178,  344 => 177,  339 => 176,  334 => 175,  330 => 174,  324 => 172,  322 => 170,  321 => 169,  320 => 168,  319 => 167,  317 => 165,  312 => 164,  307 => 163,  302 => 162,  297 => 161,  293 => 160,  287 => 158,  282 => 157,  280 => 146,  274 => 144,  269 => 143,  265 => 142,  262 => 141,  259 => 134,  253 => 131,  249 => 130,  246 => 129,  244 => 118,  238 => 116,  235 => 106,  231 => 105,  225 => 103,  222 => 92,  218 => 91,  212 => 89,  209 => 84,  205 => 83,  199 => 81,  195 => 80,  189 => 78,  185 => 77,  179 => 75,  175 => 74,  169 => 72,  165 => 71,  159 => 69,  157 => 67,  156 => 66,  155 => 65,  154 => 64,  153 => 63,  152 => 62,  151 => 61,  150 => 60,  149 => 59,  147 => 58,  142 => 57,  137 => 56,  132 => 55,  127 => 54,  122 => 53,  117 => 52,  112 => 51,  107 => 50,  102 => 49,  98 => 48,  90 => 43,  86 => 41,  84 => 40,  78 => 37,  73 => 34,  69 => 33,  64 => 30,  60 => 29,  52 => 27,  47 => 24,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "proofofplay-report-form.twig", "/var/www/html/cms_ubi/reports/proofofplay-report-form.twig");
    }
}
