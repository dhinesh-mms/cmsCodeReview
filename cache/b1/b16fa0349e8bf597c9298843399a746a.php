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

/* schedule-page.twig */
class __TwigTemplate_8f840ca19d9a744eee9df3376d4191e2 extends Template
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
            'javaScriptTemplates' => [$this, 'block_javaScriptTemplates'],
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "schedule-page.twig", 9)->unwrap();
        // line 10
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "schedule-page.twig", 10)->unwrap();
        // line 8
        $this->parent = $this->loadTemplate("authed.twig", "schedule-page.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("Schedule"), "html", null, true);
        echo " | ";
    }

    // line 14
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    <div class=\"widget-action-menu pull-right\">
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["schedule.add"], "method", false, false, false, 16)) {
            // line 17
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["schedule.sync"], "method", false, false, false, 17)) {
                // line 18
                echo "                <!-- <button class=\"btn btn-white XiboFormButton btns\" title=\"";
                echo __("Add a new Sync event");
                echo "\"
                        href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.add.sync.form"), "html", null, true);
                echo "\"><span
                            class=\"fa fa-plus\"></span> ";
                // line 20
                echo __("Add Synchronised Event");
                echo "</button> -->
            ";
            }
            // line 22
            echo "            <button class=\"btn btn-success XiboFormButton btns\" title=\"";
            echo __("Add a new Scheduled event");
            echo "\"
                    href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.add.form"), "html", null, true);
            echo "\"><span class=\"fa fa-plus\"></span> ";
            echo __("Add Event");
            // line 24
            echo "            </button>
        ";
        }
        // line 26
        echo "        <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
        echo __("Refresh the Table");
        echo "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
    </div>
";
    }

    // line 30
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 32
        echo __("Schedule");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"scheduleGridView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"schedule-filter\">
                        <form class=\"form-inline\">
                            ";
        // line 38
        ob_start(function () { return ''; });
        echo __("Range");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 39
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Select a range");
        $context["range"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 40
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Today");
        $context["day"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("This Week");
        $context["week"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("This Month");
        $context["month"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("This Year");
        $context["year"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Yesterday");
        $context["yesterday"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Last Week");
        $context["lastweek"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Last Month");
        $context["lastmonth"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Last Year");
        $context["lastyear"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Agenda");
        $context["agenda"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        echo "                            ";
        $context["options"] = [["name" => "custom", "range" =>         // line 50
($context["range"] ?? null)], ["name" => "day", "range" =>         // line 51
($context["day"] ?? null)], ["name" => "week", "range" =>         // line 52
($context["week"] ?? null)], ["name" => "month", "range" =>         // line 53
($context["month"] ?? null)], ["name" => "year", "range" =>         // line 54
($context["year"] ?? null)], ["name" => "lastday", "range" =>         // line 55
($context["yesterday"] ?? null)], ["name" => "lastweek", "range" =>         // line 56
($context["lastweek"] ?? null)], ["name" => "lastmonth", "range" =>         // line 57
($context["lastmonth"] ?? null)], ["name" => "lastyear", "range" =>         // line 58
($context["lastyear"] ?? null)], ["name" => "agenda", "range" =>         // line 59
($context["agenda"] ?? null)]];
        // line 61
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["range", "single", ($context["title"] ?? null), "month", ($context["options"] ?? null), "name", "range", "", "date-range-input"], 61, $context, $this->getSourceContext());
        echo "

                            ";
        // line 63
        ob_start(function () { return ''; });
        echo __("From Date");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dateTime", ["fromDt", ($context["title"] ?? null), "", "", "custom-date-range", "", ""], 64, $context, $this->getSourceContext());
        echo "

                            ";
        // line 66
        ob_start(function () { return ''; });
        echo __("To Date");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dateTime", ["toDt", ($context["title"] ?? null), "", "", "custom-date-range", "", ""], 67, $context, $this->getSourceContext());
        echo "

                            ";
        // line 69
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 70
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_inputNameGrid", ["name", ($context["title"] ?? null), "non-agenda-filter"], 70, $context, $this->getSourceContext());
        echo "

                            ";
        // line 72
        ob_start(function () { return ''; });
        echo __("Event Type");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["eventTypeId", "single", ($context["title"] ?? null), "", twig_array_merge([["eventTypeId" => null, "eventTypeName" => "All"]], ($context["eventTypes"] ?? null)), "eventTypeId", "eventTypeName", "", "non-agenda-filter"], 73, $context, $this->getSourceContext());
        echo "

                            ";
        // line 75
        ob_start(function () { return ''; });
        echo __("Layout / Campaign");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Please select a Layout or Campaign for this Event to show");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 77
        echo "
                            <div class=\"form-group mr-1 mb-1 non-agenda-filter\">
                                <label class=\"control-label mr-1\" for=\"campaignId\" title=\"\"
                                       accesskey=\"\">";
        // line 80
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</label>
                                <select name=\"campaignId\" id=\"campaignIdFilter\" class=\"form-control\"
                                        data-search-url=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.search"), "html", null, true);
        echo "\"
                                        data-trans-campaigns=\"";
        // line 83
        echo __("Campaigns");
        echo "\"
                                        data-trans-layouts=\"";
        // line 84
        echo __("Layouts");
        echo "\"
                                        data-allow-clear=\"true\"
                                        data-width=\"100%\"
                                        title=\"";
        // line 87
        echo __("Layout / Campaign");
        echo "\"
                                        data-placeholder=\"";
        // line 88
        echo __("Layout / Campaign");
        echo "\"
                                        data-dropdownAutoWidth
                                >
                                </select>
                            </div>

                            ";
        // line 94
        ob_start(function () { return ''; });
        echo __("Displays");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 95
        echo "                            <div class=\"form-group mr-1 mb-1 pagedSelect\" style=\"min-width: 200px\">
                                <label class=\"control-label mr-1\" for=\"DisplayList\" title=\"\"
                                       accesskey=\"\">";
        // line 97
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</label>
                                <select id=\"DisplayList\" class=\"form-control\" name=\"displaySpecificGroupIds[]\"
                                        data-width=\"100%\"
                                        data-placeholder=\"";
        // line 100
        echo __("Displays");
        echo "\"
                                        data-search-url=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.search"), "html", null, true);
        echo "\"
                                        data-search-term=\"display\"
                                        data-id-property=\"displayGroupId\"
                                        data-text-property=\"display\"
                                        data-additional-property=\"displayGroupId\"
                                        data-allow-clear=\"true\"
                                        data-initial-key=\"displayGroupIds[]\"
                                        multiple>
                                </select>
                            </div>

                            ";
        // line 112
        ob_start(function () { return ''; });
        echo __("Display Groups");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 113
        echo "                            <div class=\"form-group mr-2 mb-1 pagedSelect\" style=\"min-width: 200px\">
                                <label class=\"control-label mr-1\" for=\"DisplayGroupList\" title=\"\"
                                       accesskey=\"\">";
        // line 115
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</label>
                                <select id=\"DisplayGroupList\" class=\"form-control\" name=\"displayGroupIds[]\"
                                        data-width=\"100%\"
                                        data-placeholder=\"";
        // line 118
        echo __("Display Groups");
        echo "\"
                                        data-search-url=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.search"), "html", null, true);
        echo "\"
                                        data-search-term=\"displayGroup\"
                                        data-id-property=\"displayGroupId\"
                                        data-text-property=\"displayGroup\"
                                        data-allow-clear=\"true\"
                                        data-initial-key=\"displayGroupIds[]\"
                                        multiple>
                                </select>
                            </div>

                           <!-- ";
        // line 129
        ob_start(function () { return ''; });
        echo __("Direct Schedule?");
        $context["label"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 130
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Show only events scheduled directly on selected Displays/Groups");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 131
        echo "                            <div class=\"form-group mr-1 mb-1\">
                                <label class=\"control-label mr-1\" title=\"";
        // line 132
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\" for=\"directSchedule\" accesskey=\"\">";
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "</label>
                                <div>
                                    <div class=\"input-group\" style=\"height: 34px\">
                                        <div class=\"input-group-text h-100\">
                                            <input title=\"";
        // line 136
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\" type=\"checkbox\" id=\"directSchedule\" name=\"directSchedule\">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            ";
        // line 142
        ob_start(function () { return ''; });
        echo __("Only show schedules which appear on all filtered displays/groups?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 143
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Shared Schedule?");
        $context["label"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 144
        echo "                            <div class=\"form-group mr-1 mb-1\">
                                <label class=\"control-label mr-1\" title=\"";
        // line 145
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\" for=\"sharedSchedule\" accesskey=\"\">";
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "</label>
                                <div>
                                    <div class=\"input-group\" style=\"height: 34px\">
                                        <div class=\"input-group-text h-100\">
                                            <input title=\"";
        // line 149
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\" type=\"checkbox\" id=\"sharedSchedule\" name=\"sharedSchedule\">
                                        </div>
                                    </div>
                                </div>
                            </div> 

                            ";
        // line 155
        ob_start(function () { return ''; });
        echo __("Geo Aware?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 156
        echo "                            ";
        $context["options"] = [["id" => null, "name" => __("Both")], ["id" => 0, "name" => __("No")], ["id" => 1, "name" => __("Yes")]];
        // line 161
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["geoAware", "single", ($context["title"] ?? null), "both", ($context["options"] ?? null), "id", "name", "", "non-agenda-filter"], 161, $context, $this->getSourceContext());
        echo "

                            ";
        // line 163
        ob_start(function () { return ''; });
        echo __("Recurring?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 164
        echo "                            ";
        $context["options"] = [["id" => null, "name" => "Both"], ["id" => 0, "name" => __("No")], ["id" => 1, "name" => __("Yes")]];
        // line 169
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["recurring", "single", ($context["title"] ?? null), "both", ($context["options"] ?? null), "id", "name", "", "non-agenda-filter"], 169, $context, $this->getSourceContext());
        echo " -->
                        </form>
                    </div>
                </div>

                <div class=\"card-header\">
                    <ul class=\"nav nav-tabs card-header-tabs\">
                        <li class=\"nav-item\">
                            <a class=\"schedule-nav nav-link active\" id=\"grid-tab\" href=\"#grid-view\" role=\"tab\"
                               data-toggle=\"tab\"><span>";
        // line 178
        echo __("Grid");
        echo "</span></a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"schedule-nav nav-link\" id=\"calendar-tab\" href=\"#calendar-view\"
                               data-calendar-view=\"month\" role=\"tab\"
                               data-toggle=\"tab\"><span>";
        // line 183
        echo __("Calendar");
        echo "</span></a>
                        </li>
                    </ul>
                </div>

                <div class=\"card-body\">
                    <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"grid-view\">
                        <div class=\"XiboData pt-3\">
                            <table id=\"schedule-grid\" class=\"table table-striped w-100\"
                                   data-state-preference-name=\"scheduleGrid\">
                                <thead>
                                <tr>
                                    <th>";
        // line 196
        echo __("ID");
        echo "</th>
                                    <th></th>
                                    <th>";
        // line 198
        echo __("Event Type");
        echo "</th>
                                    <th>";
        // line 199
        echo __("Name");
        echo "</th>
                                    <th>";
        // line 200
        echo __("Start");
        echo "</th>
                                    <th>";
        // line 201
        echo __("End");
        echo "</th>
                                    <th>";
        // line 202
        echo __("Event");
        echo "</th>
                                    <th>";
        // line 203
        echo __("Campaign ID");
        echo "</th>
                                    <th>";
        // line 204
        echo __("Display Groups");
        echo "</th>
                                   <!--  <th>";
        // line 205
        echo __("SoV");
        echo "</th>
                                    <th>";
        // line 206
        echo __("Max Plays per Hour");
        echo "</th>
                                    <th>";
        // line 207
        echo __("Geo Aware?");
        echo "</th>
                                   <th>";
        // line 208
        echo __("Recurring?");
        echo "</th>
                                    <th>";
        // line 209
        echo __("Recurrence Description");
        echo "</th> -->
                                    <th>";
        // line 210
        echo __("Recurrence Type");
        echo "</th>
                                    <th>";
        // line 211
        echo __("Recurrence Interval");
        echo "</th>
                                    <th>";
        // line 212
        echo __("Recurrence Repeats On");
        echo "</th>
                                    <th>";
        // line 213
        echo __("Recurrence End");
        echo "</th>
                                    <th>";
        // line 214
        echo __("Priority?");
        echo "</th>
                                    <!-- <th>";
        // line 215
        echo __("Criteria?");
        echo "</th> -->
                                    <th>";
        // line 216
        echo __("Created On");
        echo "</th>
                                    <th>";
        // line 217
        echo __("Updated On");
        echo "</th>
                                    <th>";
        // line 218
        echo __("Modified By");
        echo "</th>
                                    <th class=\"rowMenu\"></th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"calendar-view\">
                        <div class=\"row\">
                            <div class=\"text-center text-danger col-lg-12\" id=\"calendar-error-message\">
                                <span>";
        // line 231
        echo __("Please select a Display, Display Group or Layout / Campaign to view the calendar");
        echo "</span>
                            </div>
                            <div class=\"xibo-calendar-controls-container align-content-start justify-content-end col-xl-12 pl-0 form-inline text-right\">
                                <div class=\"btn-group xibo-calendar-controls xibo-agenda-calendar-controls\">
                                    <button type=\"button\" class=\"btn btn-primary\" data-calendar-nav=\"prev\"><span
                                                class=\"fa fa-backward\"></span> ";
        // line 236
        echo __("Prev");
        echo "</button>
                                    <button type=\"button\" class=\"btn btn-white\"
                                            data-calendar-nav=\"today\">";
        // line 238
        echo __("Today");
        echo "</button>
                                    <button type=\"button\" class=\"btn btn-primary\"
                                            data-calendar-nav=\"next\">";
        // line 240
        echo __("Next");
        echo " <span
                                                class=\"fa fa-forward\"></span></button>
                                </div>
                                <div class=\"xibo-calendar-controls xibo-agenda-calendar-controls\">
                                    <div class=\"inputgroup date calendar-date-picker-input\" id=\"dateInput\">
                                        <span class=\"btn btn-outline-dark date-open-button\" role=\"button\">
                                            <i class=\"fa fa-calendar\"></i>
                                        </span>
                                        <input type=\"text\" class=\"form-control\" id=\"dateInputLink\" data-input/>
                                    </div>
                                </div>
                                <div class=\"btn-group xibo-calendar-controls\">
                                    ";
        // line 252
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["schedule.agenda"], "method", false, false, false, 252)) {
            // line 253
            echo "                                        <button type=\"button\" id=\"btn-agenda-view\" class=\"btn btn-outline-info\" data-calendar-view=\"agenda\">";
            echo __("Agenda");
            echo "</button>
                                    ";
        }
        // line 255
        echo "                                    <button type=\"button\" id=\"btn-month-view\" class=\"btn btn-outline-info\" data-calendar-view=\"month\">";
        echo __("Back");
        echo "</button>
                                </div>
                            </div>
                            <div class=\"text-center col-xl-12\">
                                <h1 class=\"page-header\"></h1>
                                <div class=\"calendar-loading\">
                                    <span id=\"calendar-progress\" class=\"fa fa-spin fa-cog\"></span>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-12 cal-event-agenda-filter\">
                                <!-- Time Slider -->
                                <div class=\"cal-event-time-bar\">
                                    <div class=\"btn slider-step-btn time-picker-step-btn\" data-step=\"-1\">
                                        <span class=\"fa fa-step-backward\"></span>
                                    </div>
                                    <input id=\"timePicker\" type=\"text\"
                                           data-slider-id='timePickerSlider'
                                           data-slider-min=\"0\"
                                           data-slider-max=\"1439\"
                                           data-slider-step=\"1\"
                                           data-slider-value=\"0\"
                                           data-slider-handle=\"square\"
                                    />
                                    <div class=\"btn slider-step-btn time-picker-step-btn\" data-step=\"1\">
                                        <span class=\"fa fa-step-forward\"></span>
                                    </div>
                                </div>

                                <!-- Geo location -->
                                <form class=\"form-inline cal-event-location\">
                                    <button id=\"toggleMap\" type=\"button\" class=\"btn btn-primary pull-right\"
                                            title=\"";
        // line 288
        echo __("Map");
        echo "\"><i class=\"fa fa-map\"></i></button>
                                    <button id=\"getLocation\" type=\"button\" class=\"btn btn-white pull-right\"
                                            title=\"";
        // line 290
        echo __("Get browser location!");
        echo "\"><i class=\"fa fa-map-marker\"></i>
                                    </button>
                                    <button id=\"clearLocation\" type=\"button\" class=\"btn btn-white pull-right\"
                                            title=\"";
        // line 293
        echo __("Clear coordinates!");
        echo "\"><i class=\"fa fa-times\"></i>
                                    </button>
                                    <div class=\"form-group pull-right\">
                                        <input type=\"email\" class=\"form-control\" id=\"geoLongitude\"
                                               placeholder=\"Longitude\">
                                    </div>
                                    <div class=\"form-group pull-right\">
                                        <input type=\"text\" class=\"form-control\" id=\"geoLatitude\" placeholder=\"Latitude\">
                                    </div>
                                </form>

                                <!-- Geo location map -->
                                <div class=\"cal-event-location-map\" data-default-lat=\"";
        // line 305
        echo twig_escape_filter($this->env, ($context["defaultLat"] ?? null), "html", null, true);
        echo "\"
                                     data-default-long=\"";
        // line 306
        echo twig_escape_filter($this->env, ($context["defaultLong"] ?? null), "html", null, true);
        echo "\">
                                    <div id=\"geoFilterAgendaMap\" style=\"height: 400px; width: 100%\"
                                         class=\"d-none\"></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div id=\"CalendarContainer\" data-event-source=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.calendar.data"), "html", null, true);
        echo "\"
                                 data-agenda-link=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.events", ["id" => ":id"]), "html", null, true);
        echo "\"
                                 data-calendar-type=\"";
        // line 315
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "CALENDAR_TYPE", [], "any", false, false, false, 315), "html", null, true);
        echo "\" class=\"col-sm-12\">
                                <div class=\"calendar-view\" id=\"Calendar\"></div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"cal-legend\">
                                    <ul>
                                        <li class=\"event-always\"><span
                                                    class=\"fa fa-retweet\"></span> ";
        // line 324
        echo __("Always showing");
        echo "</li>
                                        <li class=\"event-info\"><span
                                                    class=\"fa fa-desktop\"></span> ";
        // line 326
        echo __("Single Display");
        echo "</li>
                                        <li class=\"event-success\"><span
                                                    class=\"fa fa-desktop\"></span> ";
        // line 328
        echo __("Multi Display");
        echo "</li>
                                        <li class=\"event-important\"><span
                                                    class=\"fa fa-bullseye\"></span> ";
        // line 330
        echo __("Priority");
        echo "</li>
                                        <li class=\"event-special\"><span
                                                    class=\"fa fa-repeat\"></span> ";
        // line 332
        echo __("Recurring");
        echo "</li>
                                       <!-- <li class=\"event-inverse\"><span
                                                    class=\"fa fa-lock\"></span> ";
        // line 334
        echo __("View Only");
        echo "</li>
                                        <li class=\"event-command\"><span
                                                    class=\"fa fa-wrench\"></span> ";
        // line 336
        echo __("Command");
        echo "</li>
                                        <li class=\"event-interrupt\"><span
                                                    class=\"fa fa-hand-paper\"></span> ";
        // line 338
        echo __("Interrupt");
        echo "</li>
                                        <li class=\"event-geo-location\"><span
                                                    class=\"fa fa-map-marker\"></span> ";
        // line 340
        echo __("Geo Location");
        echo "</li>
                                        <li class=\"event-action\"><span
                                                    class=\"fa fa-paper-plane \"></span> ";
        // line 342
        echo __("Interactive Action");
        // line 343
        echo "                                        </li>
                                        <li class=\"event-sync\"><span
                                                    class=\"fa fa-refresh\"></span> ";
        // line 345
        echo __("Synchronised");
        echo "</li> -->
                                    </ul>
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

    // line 359
    public function block_javaScriptTemplates($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 360
        echo "    ";
        $this->displayParentBlock("javaScriptTemplates", $context, $blocks);
        echo "

    ";
        // line 559
        echo "
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-day\">
            <div id=\"cal-day-box\">
                <div class=\"row-fluid clearfix cal-row-head\">
                    <div class=\"span1 col-1 cal-cell\"><%= cal.locale.time %></div>
                    <div class=\"span11 col-11 cal-cell\"><%= cal.locale.events %></div>
                </div>
                <% if(all_day.length) {%>
                <div class=\"row-fluid clearfix cal-day-hour\">
                    <div class=\"span1 col-1\"><b><%= cal.locale.all_day %></b></div>
                    <div class=\"span11 col-11\">
                        <% _.each(all_day, function(event){ %>
                        <%
                        var eventTitle = (event.event.isAlways == 1) ? event.title : \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsDateFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsDateFormat) + \"] \" + event.title;
                        %>
                        <div class=\"day-highlight dh-<%= event['class'] %>\">
                            <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                               data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                               class=\"event-item\">
                                <%= eventTitle %></a>
                        </div>
                        <% }); %>
                    </div>
                </div>
                <% }; %>
                <% if(before_time.length) {%>
                <div class=\"row-fluid clearfix cal-day-hour\">
                    <div class=\"span1 col-3\"><b><%= cal.locale.before_time %></b></div>
                    <div class=\"span5 col-5\">
                        <% _.each(before_time, function(event){ %>
                        <div class=\"day-highlight dh-<%= event['class'] %>\">
                            <span class=\"cal-hours pull-right\"><%= event.end_hour %></span>
                            <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                               data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                               class=\"event-item\">
                                <%= event.title %></a>
                        </div>
                        <% }); %>
                    </div>
                </div>
                <% }; %>
                <div id=\"cal-day-panel\" class=\"clearfix\">
                    <div id=\"cal-day-panel-hour\">
                        <% for(i = 0; i < hours; i++){ %>
                        <div class=\"cal-day-hour\">
                            <% for(l = 0; l < cal._hour_min(i); l++){ %>
                            <div class=\"row-fluid cal-day-hour-part\">
                                <div class=\"span1 col-1\"><b><%= cal._hour(i, l) %></b></div>
                                <div class=\"span11 col-11\"></div>
                            </div>
                            <% }; %>
                        </div>
                        <% }; %>
                    </div>

                    <% _.each(by_hour, function(event){ %>
                    <div class=\"pull-left day-event <% if (event.lines < 1) { %>day-event-small<% } %> day-highlight dh-<%= event['class'] %>\" style=\"margin-top: <%= (event.top * 30) %>px; height: <%= (event.lines * 30) %>px\"
                    <% if (event.lines < 2) { %>data-toggle=\"popover\" data-html=\"true\" data-content=\"<a href='<%= event.url ? event.url : \"javascript:void(0)\" %>'><%= event.title %></a>\" title=\"<%= event.start_hour %> - <%= event.end_hour %>\"<% } %>
                    >
                    <span class=\"cal-hours\"><%= event.start_hour %> - <%= event.end_hour %></span>
                    <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                       data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                       data-event-class=\"<%= event['class'] %>\" class=\"event-item\">
                        <%= event.title %></a>
                    </div>
                    <% }); %>
                </div>
            <% if(after_time.length) {%>
            <div class=\"row-fluid clearfix cal-day-hour\">
                <div class=\"span1 col-3\"><b><%= cal.locale.after_time %></b></div>
                <div class=\"span11 col-9\">
                    <% _.each(after_time, function(event){ %>
                    <div class=\"day-highlight dh-<%= event['class'] %>\">
                        <span class=\"cal-hours\"><%= event.start_hour %></span>
                        <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                           data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                           data-event-class=\"<%= event['class'] %>\" class=\"event-item\">
                            <%= event.title %></a>
                    </div>
                    <% }); %>
                </div>
            </div>
            <% }; %>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-events-list\">
            <span id=\"cal-slide-tick\" style=\"display: none\"></span>
            <div id=\"cal-slide-content\" class=\"cal-event-list\">
                <ul class=\"unstyled list-unstyled\">
                    <% _.each(events, function(event) { %>
                    <%
                    var title = event.title;
                    var eventIcon = \"fa-desktop\";
                    var eventClass = \"event-warning\";
                    var eventPriority = \"\";

                    if (event.event.isAlways != 1) {
                    if (event.event.eventTypeId == 2) {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
                    } else if (event.sameDay) {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
                    } else {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsDateFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsDateFormat) + \"] \" + event.title;
                    }
                    }

                    if (event.event.displayOrder > 0)
                    title = title + \" (\" + event.event.displayOrder + \")\";

                    if (event.event.displayGroups.length <= 1) {
                    eventClass = \"event-info\";
                    }
                    else {
                    eventClass = \"event-success\";
                    }

                    if (event.event.isAlways == 1) {
                    eventIcon = \"fa-retweet\";
                    }

                    if (event.event.recurrenceType != null && event.event.recurrenceType != \"\") {
                    eventClass = \"event-special\";
                    eventIcon = \"fa-repeat\";
                    }

                    if (event.event.isPriority >= 1) {
                        eventClass = \"event-important\";
                        eventIcon = \"fa-bullseye\";
                        eventPriority = event.event.isPriority;
                    }

                    if (event.event.eventTypeId == 2) {
                        eventIcon = \"fa-wrench\";
                    }

                    if (event.event.eventTypeId == 4) {
                        eventIcon = \"fa-hand-paper\";
                    }

                    if (event.event.isGeoAware === 1) {
                        eventIcon = \"fa-map-marker\";
                    }

                    if (event.event.eventTypeId == 6) {
                        eventIcon = \"fa-paper-plane\";
                    }

                    if (event.event.eventTypeId == 9) {
                        eventIcon = \"fa-refresh\";
                    }

                    if (!event.editable) {
                    event.url = null;
                    eventIcon = \"fa-lock\";
                    eventClass = \"event-inverse\";
                    }
                    %>
                    <li>
                        <span class=\"pull-left event <%= event['class'] %>\"></span>&nbsp;
                        <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                           data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                           data-event-class=\"<%= eventClass %>\" class=\"event-item\">
                            <span class=\"fa <%= eventIcon %>\"><span class=\"event-priority\"><%= eventPriority %></span></span> <%= title %></a>
                    </li>
                    <% }) %>
                </ul>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-month\">
            <div class=\"cal-row-fluid cal-row-head\">
                <% _.each(days_name, function(name){ %>
                <div class=\"cal-cell1\"><%= name %></div>
                <% }) %>
            </div>
            <div class=\"cal-month-box\">
                <% for(i = 0; i < 6; i++) { %>
                <% if(cal.stop_cycling == true) break; %>
                <div class=\"cal-row-fluid cal-before-eventlist\">
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day1\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day2\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day3\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day4\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day5\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day6\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day7\"><%= cal._day(i, day++) %></div>
                </div>
                <% } %>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-month-day\">
            <div class=\"cal-month-day <%= cls %>\">
                <span class=\"pull-right\" data-cal-date=\"<%= data_day %>\" data-cal-view=\"agenda\" data-toggle=\"tooltip\" title=\"<%= tooltip %>\"><%= day %></span>

                <% if (events.length > 0) { %>
                    <span class=\"cal-month-day-number-events label label-info\" data-toggle=\"tooltip\" title=\"";
        echo __("Number of events");
        // line 817
        echo "\"><%= events.length %></span>
                <% } %>

                <% if (events.length > 0) { %>
                <div class=\"events-list\" data-cal-start=\"<%= start %>\" data-cal-end=\"<%= end %>\">
                    <% _.each(events, function(event) { %>
                    <%
                    var title = event.title;
                    var eventIcon = \"fa-desktop\";
                    var eventClass = \"event-warning\";
                    var eventPriority = \"\";

                    if (event.event.isAlways != 1) {
                    if (event.event.eventTypeId == 2) {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
                    } else if (event.sameDay) {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
                    } else {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsDateFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsDateFormat) + \"] \" + event.title;
                    }
                    }

                    if (event.event.displayOrder > 0)
                    title = title + \" (\" + event.event.displayOrder + \")\";

                    if (event.event.displayGroups.length <= 1) {
                    eventClass = \"event-info\";
                    }
                    else {
                    eventClass = \"event-success\";
                    }

                    if (event.event.isAlways == 1) {
                    eventIcon = \"fa-retweet\";
                    }

                    if (event.event.recurrenceType != null && event.event.recurrenceType != \"\") {
                    eventClass = \"event-special\";
                    eventIcon = \"fa-repeat\";
                    }

                    if (event.event.isPriority >= 1) {
                        eventClass = \"event-important\";
                        eventIcon = \"fa-bullseye\";
                        eventPriority = event.event.isPriority;
                    }

                    if (event.event.eventTypeId == 2) {
                        eventIcon = \"fa-wrench\";
                    }

                    if (event.event.eventTypeId == 4) {
                        eventIcon = \"fa-hand-paper\";
                    }

                    if (event.event.isGeoAware === 1) {
                        eventIcon = \"fa-map-marker\";
                    }

                    if (event.event.eventTypeId == 6) {
                        eventIcon = \"fa-paper-plane\";
                    }

                    if (event.event.eventTypeId == 9) {
                        eventIcon = \"fa-refresh\";
                    }

                    if (!event.editable) {
                    event.url = null;
                    eventIcon = \"fa-lock\";
                    eventClass = \"event-inverse\";
                    }
                    %>
                    <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                       data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                       data-event-class=\"<%= eventClass %>\"
                       class=\"pull-left event <%= eventClass %>\" data-toggle=\"tooltip\"
                       title=\"<%= event.title %>\"><span class=\"fa <%= eventIcon %>\"><span class=\"event-priority\"><%= eventPriority %></span></span></a>
                    <% }); %>
                </div>
                <% } %>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-week\">
            <div class=\"cal-week-box\">
                <div class=\"cal-offset1 cal-column\"></div>
                <div class=\"cal-offset2 cal-column\"></div>
                <div class=\"cal-offset3 cal-column\"></div>
                <div class=\"cal-offset4 cal-column\"></div>
                <div class=\"cal-offset5 cal-column\"></div>
                <div class=\"cal-offset6 cal-column\"></div>
                <div class=\"cal-row-fluid cal-row-head\">
                    <% _.each(days_name, function(name) { %>
                    <div class=\"cal-cell1 <%= cal._getDayClass('week', start) %>\" data-toggle=\"tooltip\" title=\"<%= cal._getHolidayName(start) %>\"><%= name %><br>
                        <small><span data-cal-date=\"<%= start.getFullYear() %>-<%= start.getMonthFormatted() %>-<%= start.getDateFormatted() %>\" data-cal-view=\"day\"><%= cal.options.type !== 'Jalali' ? start.getDate() : start.getJalaliDate() %> <%= cal.options.type !== 'Jalali' ? cal.locale['ms' + start.getMonth()] : cal.locale['jms' + (start.getJalaliMonth() - 1)] %></span></small>
                    </div>
                    <% start.setDate(start.getDate() + 1); %>
                    <% }) %>
                </div>
                <hr>
                <%= cal._week() %>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-week-days\">
            <% _.each(events, function(event){ %>
            <%
            var title = event.title;
            var eventIcon = \"fa-desktop\";
            var eventClass = \"event-warning\";
            var eventPriority = \"\";

            if (event.event.isAlways != 1) {
            if (event.event.eventTypeId == 2) {
            title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
            } else if (event.sameDay) {
            title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
            } else {
            title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsDateFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsDateFormat) + \"] \" + event.title;
            }
            }

            if (event.event.displayOrder > 0)
            title = title + \" (\" + event.event.displayOrder + \")\";

            if (event.event.displayGroups.length <= 1) {
            eventClass = \"event-info\";
            }
            else {
            eventClass = \"event-success\";
            }

            if (event.event.isAlways == 1) {
            eventIcon = \"fa-retweet\";
            }

            if (event.event.recurrenceType != null && event.event.recurrenceType != \"\") {
            eventClass = \"event-special\";
            eventIcon = \"fa-repeat\";
            }

            if (event.event.isPriority >= 1) {
                eventClass = \"event-important\";
                eventIcon = \"fa-bullseye\";
                eventPriority = event.event.isPriority;
            }

            if (event.event.eventTypeId == 4) {
                eventIcon = \"fa-hand-paper\";
            }

            if (event.event.isGeoAware === 1) {
                eventIcon = \"fa-map-marker\";
            }

            if (event.event.eventTypeId == 6) {
                eventIcon = \"fa-paper-plane\";
            }

            if (event.event.eventTypeId == 9) {
                eventIcon = \"fa-refresh\";
            }

            if (!event.editable) {
            event.url = null;
            eventIcon = \"fa-wrench\";
            eventClass = \"event-inverse\";
            }
            %>
            <div class=\"cal-row-fluid\">
                <div class=\"cal-cell<%= event.days%> cal-offset<%= event.start_day %> day-highlight dh-<%= event['class'] %>\">
                    <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                       data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                       data-event-class=\"<%= eventClass %>\"
                       class=\"cal-event-week event<%= event.id %>\"><span class=\"fa <%= eventIcon %>\"><span class=\"event-priority\"><%= eventPriority %></span></span> <%= title %></a>
                </div>
            </div>
            <% }); %>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-year\">
            <div class=\"cal-year-box\">
                <div class=\"row row-fluid cal-before-eventlist\">
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month1\"><%= cal._month(0) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month2\"><%= cal._month(1) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month3\"><%= cal._month(2) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month4\"><%= cal._month(3) %></div>
                </div>
                <div class=\"row row-fluid cal-before-eventlist\">
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month1\"><%= cal._month(4) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month2\"><%= cal._month(5) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month3\"><%= cal._month(6) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month4\"><%= cal._month(7) %></div>
                </div>
                <div class=\"row row-fluid cal-before-eventlist\">
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month1\"><%= cal._month(8) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month2\"><%= cal._month(9) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month3\"><%= cal._month(10) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month4\"><%= cal._month(11) %></div>
                </div>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-year-month\">
            <span class=\"pull-right\" data-cal-date=\"<%= data_day %>\" data-cal-view=\"month\"><%= month_name %></span>
            <% if (events.length > 0) { %>
            <small class=\"cal-events-num badge badge-important pull-left\"><%= events.length %></small>
            <div class=\"hide events-list\" data-cal-start=\"<%= start %>\" data-cal-end=\"<%= end %>\">
                <% _.each(events, function(event) { %>
                <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                   data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                   data-event-class=\"<%= event['class'] %>\"
                   class=\"pull-left event <%= event['class'] %> event<%= event.id %>\" data-toggle=\"tooltip\"
                   title=\"<%= event.title %>\"></a>
                <% }); %>
            </div>
            <% } %>
        </script>
        
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-agenda\">
            
            <div class=\"container-fluid\">
                
                <!-- Content panel with tabs -->
                <div class=\"card with-nav-tabs bg-white agenda-panel\">
                
                    <!-- Tab Panel -->
                    <% if (typeof agenda.displayGroupList != 'undefined' && agenda.displayGroupList.length > 1) { %>
                        <div class=\"card-heading\">
                                <ul class=\"nav nav-tabs\">
                                    <% _.each(agenda.displayGroupList, function(displayGroup){ %>
                                        <% if (displayGroup['id'] == agenda.selectedDisplayGroup) { %>
                                            <li class=\"nav-item active\">
                                        <% } else { %>
                                            <li class=\"nav-item\">
                                        <% }; %>
                                        
                                            <%
                                                // If it is a simple display show an 
                                                var displayGroupIcon = \"\";
                                                if (displayGroup['isDisplaySpecific'] == 0)
                                                    displayGroupIcon = \"<span class='fa fa-television'></span> \";
                                            %>
                                        
                                            <a class=\"nav-link\" data-toggle=\"tab\" data-id=\"<%= displayGroup['id'] %>\" href=\"#tab_<%= displayGroup['id'] %>\">
                                                <%= (displayGroupIcon + displayGroup['name']) %>
                                            </a>
                                        </li>
                                    <% }); %>
                                </ul> 
                        </div>
                    <% } %>
                
                    <!-- Tab Content -->
                    <div class=\"card-body p-1\">
                    
                    <% if (agenda.errorMessage != '') { %>
                       ";
        echo "
    <!-- Request failed - Show Error Message -->
    <div class=\"text-danger text-center\">
        <% if (agenda.errorMessage == 'display_not_selected') { %>
        <p>";
        // line 821
        echo __("Display not selected!");
        echo "</p>
        <% } else if (agenda.errorMessage == 'all_displays_selected') { %>
        <p>";
        // line 823
        echo __("Show All option does not work for this filter, one or more specific Display/Display Group need to be selected!");
        echo "</p>
        <% } else if (agenda.errorMessage == 'no_events') { %>
        <p>";
        // line 825
        echo __("No events for the chosen Display/Display Group on the selected date!");
        echo "</p>
        <% } else if (agenda.errorMessage == 'request_failed') { %>
        <p>";
        // line 827
        echo __("Data request failed!");
        echo "</p>
        <% } %>
    </div>
    ";
        // line 891
        echo "
                   <% } else if(!jQuery.isEmptyObject(agenda.results)) { %>
                        <!-- Request successful - Show Data -->
                            
                        <!-- Breadcrumb trail -->
                        <div class=\"cal-event-breadcrumb-trail col-12\">
                            <div id=\"content\"></div>
                        </div>     
                        
                        <!-- Agenda Data Content -->
                        <div class=\"tab-content\">
                            <% _.each(agenda.displayGroupList, function(displayGroup){ %>
                                <% if (typeof agenda.results[(displayGroup['id'])] != 'undefined') { %>
                                    <% 
                                        var resultItem = agenda.results[displayGroup['id']]; 
                                        var isActive = (displayGroup['id'] == agenda.selectedDisplayGroup) ? 'active' : '';
                                    %>
                                    <div id=\"tab_<%= displayGroup['id'] %>\" class=\"tab-pane <%= isActive %> container-fluid\">
                                        <div class=\"row\">
                                            <% if(typeof resultItem.events != 'undefined') { %>
                                                <div class=\"col-lg-9 agenda-col\">
                                                    <%= cal._layouts(resultItem.events, resultItem.layouts, 1) %>
                                                    <%= cal._layouts(resultItem.events, resultItem.layouts, 3) %>
                                                    <%= cal._layouts(resultItem.events, resultItem.layouts, 4) %>
                                                    <%= cal._layouts(resultItem.events, resultItem.layouts, 5) %>
                                                    <%= cal._layouts(resultItem.events, resultItem.layouts, 7) %>
                                                    <%= cal._layouts(resultItem.events, resultItem.layouts, 8) %>
                                                    <%= cal._layouts(resultItem.events, resultItem.layouts, 9) %>
                                                </div>
                                                <div class=\"col-lg-3 agenda-col\">
                                                    <div class=\"row\">
                                                        <div class=\"col-6 col-lg-12 agenda-col\">
                                                            <%= cal._displaygroups(resultItem.events, resultItem.displayGroups) %>
                                                        </div> 
                                                        <div class=\"col-6 col-lg-12 agenda-col\">
                                                            <%= cal._campaigns(resultItem.events, resultItem.campaigns) %>
                                                        </div>
                                                    </div>
                                                </div>
                                            <% } %>
                                        </div>
                                    </div>
                                <% } %>
                            <% }); %>
                        </div>
                    <% } %>   
                    </div>
                </div>
            </div>
        </script>
        
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-agenda-layouts\">
            <table class=\"table agenda-table agenda-table-layouts\" data-type=\"layouts\" style=\"width: 100%;\">
                <thead>
                    <tr class=\"table-title\">
                     <% if (layouts.type == 4) { %>
                        <th colspan=\"11\" class=\"pr-2\">
                     <% } else { %>
                        <th colspan=\"10\" class=\"pr-2\">
                     <% } %>
                            <% if (layouts.type == 1) { %>
                                ";
        echo __("Layouts");
        // line 893
        echo "</span>
                            <% } else if (layouts.type == 3) { %>
                                ";
        echo __("Overlay Layouts");
        // line 895
        echo "
                            <% } else if (layouts.type == 4) { %>
                                ";
        echo __("Interrupt Layouts");
        // line 897
        echo "
                            <% } else if (layouts.type == 5) { %>
                                ";
        echo __("Campaign Layouts");
        // line 899
        echo "
                            <% } else if (layouts.type == 7) { %>
                                ";
        echo __("Full Screen Video/Image");
        // line 901
        echo "</span>
                            <% } else if (layouts.type == 8) { %>
                                ";
        echo __("Full Screen Playlist");
        // line 903
        echo "</span>
                            <% } else if (layouts.type == 9) { %>
                                ";
        echo __("Synchronised");
        // line 906
        echo "</span>
                            <% } %>
                            
                            <span class=\"pull-right badge badge-light\" title=\"";
        echo __("Number of Layouts");
        // line 911
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\">
                                <%= layouts.length %>
                            </span>
                        </th>
                    </tr>
                    ";
        echo "
    <tr>
        <th></th>
        <th>";
        // line 914
        echo __("ID");
        echo "</th>
        <th>";
        // line 915
        echo __("Layout Name");
        echo "</th>
        <th>";
        // line 916
        echo __("Status");
        echo "</th>
        <th>";
        // line 917
        echo __("From Date");
        echo "</th>
        <th>";
        // line 918
        echo __("To Date");
        echo "</th>
        <th>";
        // line 919
        echo __("Layout Duration");
        echo "</th>
        ";
        // line 920
        echo "<% if (layouts.type == 4) { %>";
        echo "
        <th>";
        // line 921
        echo __("Share of Voice");
        echo "</th>
        ";
        // line 922
        echo "<% } %>";
        echo "
        <th>";
        // line 923
        echo __("Display Order");
        echo "</th>
        <th>";
        // line 924
        echo __("Priority");
        echo "</th>
        <th>";
        // line 925
        echo __("Visible");
        echo "</th>
    </tr>
    ";
        // line 937
        echo "
                </thead>
                <tbody>
                    <% _.each(layouts, function(layout){ %>
                        <tr 
                            class=\"<%= layout.itemClass %>\"
                            data-elem-id=\"<%= layout.layoutId %>\" 
                            data-event-id=\"<%= layout.eventId %>\" 
                            data-toggle=\"tooltip\"
                            <% if (layout.itemClass == 'low-priority') { %>
                                title=\"";
        echo __("This layout will not be shown as there are higher priority layouts scheduled at this time");
        // line 956
        echo "\"
                            <% } %> 
                        >
                            <td><span class=\"fa <%= layout.itemIcon %>\"></span></td>
                            <td><%= layout.layoutId %></td>
                            <td><%= layout.layoutName %></td>
                            <%
                                var icon = \"\";
                                if (layout.layoutStatus == 1)
                                    icon = \"fa-check\";
                                else if (layout.layoutStatus == 0)
                                    icon = \"fa-times\";
                                else if (layout.layoutStatus == 3)
                                    icon = \"fa-cogs\";
                                else
                                    icon = \"fa-exclamation\";
                            %>
                            <td><span class=\"fa <%= icon %>\"></span></td>
                            <% if (layout.isAlways == 1) { %>
                                <td>";
        echo __("Always");
        // line 985
        echo "</td>
                                <td><span class=\"fa fa-retweet\"></span></td>
                            <% } else { %> 
                                <td><%= layout.eventFromDt %></td>
                                <td><%= layout.eventToDt %></td>
                            <% } %> 
                            
                            <td><%= layout.layoutDuration %></td>
                            <% if (layouts.type == 4) { %>
                            <td><%= layout.shareOfVoice %></td>
                            <% } %>
                            <td><%= layout.layoutDisplayOrder %></td>
                            <td><%= layout.eventPriority %></td>
                            <%
                                var icon = \"\";
                                if (layout.itemClass == 'low-priority')
                                    icon = \"fa-times\";
                                else
                                    icon = \"fa-check\";
                            %>
                            <td><span class=\"fa <%= icon %>\"></span></td>
                        </tr>
                    <% }); %>
                </tbody>
            </table>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-agenda-displaygroups\">
            <table id=\"displaygroups\" class=\"table agenda-table\" data-type=\"displaygroups\"  width=\"100%\">
                ";
        echo "
    <thead>
    <tr class=\"table-title\">
        <th colspan=\"3\">";
        // line 988
        echo __("Display Groups");
        echo "</th>
    </tr>
    <tr>
        <th></th>
        <th>";
        // line 992
        echo __("ID");
        echo "</th>
        <th>";
        // line 993
        echo __("Name");
        echo "</th>
    </tr>
    </thead>
    ";
        // line 1016
        echo "
                <tbody>
                    <% _.each(displaygroups, function(displaygroup){ %>
                        <tr data-elem-id=\"<%= displaygroup.displayGroupId %>\">
                            <%
                                var icon = \"\";
                                if (displaygroup.isDisplaySpecific == 1)
                                    icon = \"fa-television\";
                            %>
                            <td><span class=\"fa <%= icon %>\"></span></td>
                            <td><%= displaygroup.displayGroupId %></td>
                            <td><%= displaygroup.displayGroup %></td>
                        </tr>
                    <% }); %>
                </tbody>
            </table>
        </script>
        
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-agenda-campaigns\">
            <table id=\"campaigns\" class=\"table agenda-table\" data-type=\"campaigns\"  width=\"100%\">
                ";
        echo "
    <thead>
    <tr class=\"table-title\">
        <th colspan=\"4\">";
        // line 1019
        echo __("Campaigns");
        echo "</th>
    </tr>
    <tr>
        <th></th>
        <th>";
        // line 1023
        echo __("ID");
        echo "</th>
        <th>";
        // line 1024
        echo __("Name");
        echo "</th>
        <th>";
        // line 1025
        echo __("Cycle Playback?");
        echo "</th>
    </tr>
    </thead>
    ";
        // line 1076
        echo "
                <tbody>
                    <% _.each(campaigns, function(campaign){ %>
                        <tr data-elem-id=\"<%= campaign.campaignId %>\">
                            <td></td>
                            <td><%= campaign.campaignId %></td>
                            <td><%= campaign.campaign %></td>
                            <%
                                var icon = \"\";
                                if (campaign.cyclePlaybackEnabled == 0)
                                    icon = \"fa-times\";
                                else
                                    icon = \"fa-check\";
                            %>
                            <td><span class=\"fa <%= icon %>\"></span></td>
                        </tr>
                    <% }); %>
                </tbody>
            </table>
        </script>
        
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-breadcrumb-trail\">
            <!-- Layout -->
            <span>
                    <% if (layout.link != '') { %>
                      <a href=\"<%= layout.link %>\"><%= layout.name %></a>
                    <% } else { %>
                      <%= layout.name %>
                    <% } %>
            </span>
            
            <span>&nbsp;<i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i>&nbsp;</span>
            
            <!-- Campaign -->
            <% if (typeof campaign != 'undefined') { %>
                <span>
                    <% if (campaign.link != '') { %>
                      <a href=\"<%= campaign.link %>\"><%= campaign.name %></a>
                    <% } else { %>   
                      <%= campaign.name %>
                    <% } %> 
                </span>
                <span>&nbsp;<i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i>&nbsp;</span>
            <% } %> 
            
            <!-- Schedule -->
            <span>
                <a href=\"<%= schedule.link %>\" class=\"XiboFormButton\" data-event-start=\"<%= schedule.fromDt %>\" data-event-end=\"<%= schedule.toDt %>\">
                    ";
        echo "
    ";
        // line 1077
        echo __("Schedule");
        // line 1078
        echo "    ";
        // line 1099
        echo "
                </a>
            </span>
            
            <!-- Display Groups -->
            <% _.each(displayGroups, function(displayGroup){ %>
                <span>&nbsp;<i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i>&nbsp;</span>
                <span>
                  <% if (displayGroup.link != '') { %>
                    <a href=\"<%= displayGroup.link %>\"><%= displayGroup.name %></a>
                  <% } else { %>   
                    <%= displayGroup.name %>
                  <% } %> 
                </span>
            <% }); %>
            
        </script>

        <script type=\"text/x-handlebars-template\" id=\"syncEventContentSelector\">
        {{#each displays}}
            <tr>
                <td>{{displayId}} {{#eq displayId leadDisplayId}}";
        echo "(";
        echo __("Lead");
        echo ")";
        // line 1103
        echo "{{/eq}}</td>
                <td>{{display}}</td>
                <td>
                   <div class=\"form-group pagedSelect\">
                       <select class=\"form-control syncContentSelect single-select\" name=\"layoutId_{{displayId}}\" id=\"layoutId_{{displayId}}\"";
        echo " data-search-url=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.search"), "html", null, true);
        echo "\"";
        // line 1111
        echo "
                       data-search-term=\"layout\" data-width=\"100%\" data-id-property=\"layoutId\" data-text-property=\"layout\" data-anchor-element=\"#contentSelectorTable\"
                       data-initial-key=\"layoutId\" data-initial-value=\"{{layoutId}}\" data-display-id=\"{{displayId}}\" data-lead-display-id=\"{{leadDisplayId}}\">
                       <option></option>
                       </select>
                   </div>
                {{#eq displayId leadDisplayId}}
                <button data-display-id=\"{{displayId}}\" id=\"setMirrorContent\" type=\"button\" class=\"btn btn-success d-none\"
                 title=\"";
        echo __("Set The same Layout on all displays?");
        // line 1112
        echo "\">
                    ";
        echo __("Mirror");
        // line 1120
        echo "
                </button>
                {{/eq}}
                <input name=\"displayGroupIds[]\" type=\"hidden\" id=\"displayGroupIds[]\" value=\"{{displayGroupId}}\">
                </td>
            </tr>
        {{/each}}
        </script>
        ";
        echo "
";
    }

    // line 1123
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1124
        echo "    <script type=\"text/javascript\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">
      // We are using this variable in xibo-calendar.js
      var scheduleRecurrenceDeleteUrl = \"";
        // line 1126
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.recurrence.delete.form", ["id" => ":id"]), "html", null, true);
        echo "\";
      var layoutPreviewUrl = \"";
        // line 1127
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.preview", ["id" => ":id"]), "html", null, true);
        echo "\";

      \$('.custom-date-range').addClass('d-none')

      // Equals helper for the templates below
      Handlebars.registerHelper('eq', function (v1, v2, opts) {
        if (v1 === v2) {
          return opts.fn(this);
        } else {
          return opts.inverse(this);
        }
      });

      // Init campaign select2
      \$(function () {
        // Select lists
        var dialog = 'body';

        var \$campaignSelect = \$('#schedule-filter #campaignIdFilter');
        \$campaignSelect.select2({
          dropdownParent: \$(dialog),
          ajax: {
            url: \$campaignSelect.data(\"searchUrl\"),
            dataType: \"json\",
            delay: 250,
            placeholder: 'This is my placeholder',
            allowClear: true,
            data: function (params) {

              var query = {
                isLayoutSpecific: -1,
                retired: 0,
                totalDuration: 0,
                name: params.term,
                start: 0,
                length: 10,
                columns: [
                  {
                    data: 'isLayoutSpecific'
                  },
                  {
                    data: 'campaign'
                  }
                ],
                order: [
                  {
                    column: 0,
                    dir: 'asc'
                  },
                  {
                    column: 1,
                    dir: 'asc'
                  }
                ]
              };

              // Set the start parameter based on the page number
              if (params.page != null) {
                query.start = (params.page - 1) * 10;
              }

              return query;
            },
            processResults: function (data, params) {

              var results = [];
              var campaigns = [];
              var layouts = [];

              \$.each(data.data, function (index, element) {
                if (element.isLayoutSpecific === 1) {
                  layouts.push({
                    id: element.campaignId,
                    text: element.campaign
                  });
                } else {
                  campaigns.push({
                    id: element.campaignId,
                    text: element.campaign
                  });
                }
              });

              if (campaigns.length > 0) {
                results.push({
                  text: \$campaignSelect.data('transCampaigns'),
                  children: campaigns
                })
              }

              if (layouts.length > 0) {
                results.push({
                  text: \$campaignSelect.data('transLayouts'),
                  children: layouts
                })
              }

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
          .on('change', function (e) {
            // Refresh the calendar view
            setTimeout(calendar.view(), 1000);
          })
          .on('select2:open', function(event) {
            setTimeout(function() {
              \$(event.target).data('select2').dropdown.\$search.get(0).focus();
            }, 10);
          })

        // Set up our show all selector control
        \$('#showAll, #eventTypeId, #recurring, #geoAware,' +
          ' #DisplayList, #DisplayGroupList,' +
          ' #name, #useRegexForName, #logicalOperatorName', dialog)
          .on('change', function () {
            setTimeout(calendar.view(), 1000);
          });
      });

      const table = \$('#schedule-grid').DataTable({
        language: dataTablesLanguage,
        dom: dataTablesTemplate,
        serverSide: true,
        stateSave: true,
        responsive: true,
        stateDuration: 0,
        stateLoadCallback: dataTableStateLoadCallback,
        stateSaveCallback: dataTableStateSaveCallback,
        filter: false,
        searchDelay: 3000,
        order: [],
        ajax: {
          url: '";
        // line 1268
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.search"), "html", null, true);
        echo "',
          data: function (d) {
            \$.extend(d, \$('#schedule-grid').closest('.XiboGrid').find('.FilterDiv form').serializeObject());
          }
        },
        columns: [
          {
            data: 'eventId',
            responsivePriority: 5,
            className: 'none',
          },
          {
            name: 'icon',
            className: 'align-middle',
            responsivePriority: 2,
            data: function (data) {
              var eventIcon = 'fa-desktop';
              var eventClass = 'event-warning';

              if (data.displayGroups.length <= 1) {
                eventClass = 'event-info';
              } else {
                eventClass = 'event-success';
              }

              if (data.isAlways == 1) {
                eventIcon = 'fa-retweet';
              }

              if (data.recurrenceType != null && data.recurrenceType != '') {
                eventClass = 'event-special';
                eventIcon = 'fa-repeat';
              }

              if (data.isPriority >= 1) {
                eventClass = 'event-important';
                eventIcon = 'fa-bullseye';
              }

              if (data.eventTypeId == 2) {
                eventIcon = 'fa-wrench';
              }

              if (data.eventTypeId == 4) {
                eventIcon = 'fa-hand-paper';
              }

              if (data.isGeoAware === 1) {
                eventIcon = 'fa-map-marker';
              }

              if (data.eventTypeId == 6) {
                eventIcon = 'fa-paper-plane';
              }

              if (data.eventTypeId == 9) {
                eventIcon = 'fa-refresh';
              }

              if (!data.isEditable) {
                eventIcon = 'fa-lock';
                eventClass = 'event-inverse';
              }

              return '<span class=\"fa ' + eventIcon + ' ' + eventClass + ' \"></span>';
            }
          },
          {
            name: 'eventTypeId',
            className: 'align-middle',
            responsivePriority: 2,
            data: function (data) {
              return data.eventTypeName
            }
          },
          {
            data: 'name',
            className: 'align-middle',
            responsivePriority: 3,
          },
          {
            name: 'fromDt',
            className: 'align-middle',
            responsivePriority: 2,
            data: function (data) {
              if (data.isAlways === 1) {
                return '";
        // line 1354
        echo twig_escape_filter($this->env, __("Always"), "html", null, true);
        echo "'
              } else {
                return moment(data.displayFromDt, systemDateFormat).format(jsDateFormat)
              }
            }
          },
          {
            name: 'toDt',
            className: 'align-middle',
            responsivePriority: 2,
            data: function (data) {
              if (data.isAlways === 1) {
                return '";
        // line 1366
        echo twig_escape_filter($this->env, __("Always"), "html", null, true);
        echo "'
              } else {
                return moment(data.displayToDt, systemDateFormat).format(jsDateFormat)
              }
            }
          },
          {
            name: 'campaign',
            className: 'align-middle',
            responsivePriority: 2,
            data: function (data) {
              if (data.eventTypeId === 9) {
                return data.syncType;
              } else if (data.eventTypeId === 2) {
                return data.command;
              } else {
                return data.campaign;
              }
            }
          },
          {
            data: 'campaignId',
            responsivePriority: 5,
            className: 'none',
          },
          {
            name: 'displayGroups',
            className: 'align-middle',
            responsivePriority: 2,
            sortable: false,
            data: function (data) {
              if (data.displayGroups.length > 1 && data.eventTypeId !== 9) {
                return '<span class=\"badge\" style=\"background-color: green; color: white\" ' +
                  'data-toggle=\"popover\" data-trigger=\"click\" data-placement=\"top\" ' +
                  'data-content=\"' + data.displayGroupList + '\">' + (data.displayGroups.length) +
                  '</span>';
              } else {
                return data.displayGroupList
              }
            }
          },
          /*{
            data: 'shareOfVoice',
            className: 'align-middle',
            responsivePriority: 4,
          },
          {
            name: 'maxPlaysPerHour',
            className: 'align-middle',
            responsivePriority: 4,
            data: function (data) {
              if (data.maxPlaysPerHour === 0) {
                return translations.unlimited;
              } else {
                return data.maxPlaysPerHour;
              }
            }
          },
          {
            data: 'isGeoAware',
            className: 'align-middle',
            responsivePriority: 4,
            \"render\": dataTableTickCrossColumn,
          },*/
          /*{
            data: 'recurringEvent',
            className: 'align-middle',
            responsivePriority: 4,
            \"render\": dataTableTickCrossColumn,
          },
          {
            data: 'recurringEventDescription',
            className: 'align-middle',
            responsivePriority: 4,
            sortable: false,
          }, */
          {
            data: 'recurrenceType',
            className: 'align-middle',
            visible: false,
            responsivePriority: 4,
          },
          {
            data: 'recurrenceDetail',
            className: 'align-middle',
            visible: false,
            responsivePriority: 4,
          },
          {
            name: 'recurrenceRepeatsOn',
            className: 'align-middle',
            visible: false,
            responsivePriority: 4,
            data: function (data) {
              if (data.recurringEvent) {
                if (data.recurrenceType === 'Week' && data.recurrenceRepeatsOn) {
                  const daysOfTheWeek = [
                    '";
        // line 1463
        echo __("Monday");
        echo "',
                    '";
        // line 1464
        echo __("Tuesday");
        echo "',
                    '";
        // line 1465
        echo __("Wednesday");
        echo "',
                    '";
        // line 1466
        echo __("Thursday");
        echo "',
                    '";
        // line 1467
        echo __("Friday");
        echo "',
                    '";
        // line 1468
        echo __("Saturday");
        echo "',
                    '";
        // line 1469
        echo __("Sunday");
        echo "'
                  ];

                  let recurrenceArray = data.recurrenceRepeatsOn.split(',');

                  if (recurrenceArray.length >= 1) {
                    let stringToReturn = '';
                    // go through each selected day, get the corresponding day name
                    recurrenceArray.forEach((dayNumber, index) => {
                      stringToReturn += daysOfTheWeek[dayNumber - 1];
                      if (index < recurrenceArray.length - 1) {
                        stringToReturn += ' ';
                      }
                    })

                    return stringToReturn;
                  } else {
                    return '';
                  }
                } else if (data.recurrenceType === 'Month') {
                  return data.recurrenceMonthlyRepeatsOn
                } else {
                  return '';
                }
              } else {
                return '';
              }
            }
          },
          {
            name: 'recurrenceRange',
            className: 'align-middle',
            visible: false,
            responsivePriority: 4,
            data: function (data) {
              if (data.recurringEvent && data.recurrenceRange !== null) {
                return moment(data.recurrenceRange, 'X').format(jsDateFormat)
              } else {
                return ''
              }
            }
          },
          {
            data: 'isPriority',
            className: 'align-middle',
            responsivePriority: 2,
          },
          /*{
            name: 'criteria',
            className: 'align-middle',
            responsivePriority: 2,
            data: function (data, type, row) {
              return (data.criteria && data.criteria.length > 0) ? dataTableTickCrossColumn(1, type, row) : ''
            }
          }, */
          {
            data: 'createdOn',
            className: 'align-middle',
            responsivePriority: 4,
          },
          {
            data: 'updatedOn',
            className: 'align-middle',
            responsivePriority: 4,
          },
          {
            data: 'modifiedByName',
            className: 'align-middle',
            responsivePriority: 4,
          },
          {
            orderable: false,
            className: 'align-middle',
            responsivePriority: 1,
            data: dataTableButtonsColumn
          },
        ]
      });

      table.on('draw', function (e, settings) {
        dataTableDraw(e, settings);
        \$('[data-toggle=\"popover\"]').popover();
      });
      table.on('processing.dt', dataTableProcessing);
      dataTableAddButtons(table, \$('#schedule-grid_wrapper').find('.dataTables_buttons'), true, true);

      \$(\"#refreshGrid\").click(function () {
          table.ajax.reload();
      });
    </script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "schedule-page.twig";
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
        return array (  2071 => 1469,  2067 => 1468,  2063 => 1467,  2059 => 1466,  2055 => 1465,  2051 => 1464,  2047 => 1463,  1947 => 1366,  1932 => 1354,  1843 => 1268,  1699 => 1127,  1695 => 1126,  1689 => 1124,  1685 => 1123,  1671 => 1120,  1667 => 1112,  1656 => 1111,  1647 => 1103,  1621 => 1099,  1619 => 1078,  1617 => 1077,  1565 => 1076,  1559 => 1025,  1555 => 1024,  1551 => 1023,  1544 => 1019,  1518 => 1016,  1512 => 993,  1508 => 992,  1501 => 988,  1466 => 985,  1444 => 956,  1431 => 937,  1426 => 925,  1422 => 924,  1418 => 923,  1414 => 922,  1410 => 921,  1406 => 920,  1402 => 919,  1398 => 918,  1394 => 917,  1390 => 916,  1386 => 915,  1382 => 914,  1371 => 911,  1365 => 906,  1360 => 903,  1355 => 901,  1350 => 899,  1345 => 897,  1340 => 895,  1335 => 893,  1271 => 891,  1265 => 827,  1260 => 825,  1255 => 823,  1250 => 821,  985 => 817,  785 => 559,  779 => 360,  775 => 359,  758 => 345,  754 => 343,  752 => 342,  747 => 340,  742 => 338,  737 => 336,  732 => 334,  727 => 332,  722 => 330,  717 => 328,  712 => 326,  707 => 324,  695 => 315,  691 => 314,  687 => 313,  677 => 306,  673 => 305,  658 => 293,  652 => 290,  647 => 288,  610 => 255,  604 => 253,  602 => 252,  587 => 240,  582 => 238,  577 => 236,  569 => 231,  553 => 218,  549 => 217,  545 => 216,  541 => 215,  537 => 214,  533 => 213,  529 => 212,  525 => 211,  521 => 210,  517 => 209,  513 => 208,  509 => 207,  505 => 206,  501 => 205,  497 => 204,  493 => 203,  489 => 202,  485 => 201,  481 => 200,  477 => 199,  473 => 198,  468 => 196,  452 => 183,  444 => 178,  431 => 169,  428 => 164,  424 => 163,  418 => 161,  415 => 156,  411 => 155,  402 => 149,  393 => 145,  390 => 144,  385 => 143,  381 => 142,  372 => 136,  363 => 132,  360 => 131,  355 => 130,  351 => 129,  338 => 119,  334 => 118,  328 => 115,  324 => 113,  320 => 112,  306 => 101,  302 => 100,  296 => 97,  292 => 95,  288 => 94,  279 => 88,  275 => 87,  269 => 84,  265 => 83,  261 => 82,  256 => 80,  251 => 77,  246 => 76,  242 => 75,  236 => 73,  232 => 72,  226 => 70,  222 => 69,  216 => 67,  212 => 66,  206 => 64,  202 => 63,  196 => 61,  194 => 59,  193 => 58,  192 => 57,  191 => 56,  190 => 55,  189 => 54,  188 => 53,  187 => 52,  186 => 51,  185 => 50,  183 => 49,  178 => 48,  173 => 47,  168 => 46,  163 => 45,  158 => 44,  153 => 43,  148 => 42,  143 => 41,  138 => 40,  133 => 39,  129 => 38,  122 => 34,  117 => 32,  114 => 31,  110 => 30,  102 => 26,  98 => 24,  94 => 23,  89 => 22,  84 => 20,  80 => 19,  75 => 18,  72 => 17,  70 => 16,  67 => 15,  63 => 14,  55 => 12,  50 => 8,  48 => 10,  46 => 9,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "schedule-page.twig", "/var/www/html/cms_ubi/views/schedule-page.twig");
    }
}
