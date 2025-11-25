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

/* schedule-form-edit.twig */
class __TwigTemplate_68cbd070ad352be1c6cfb593882431cf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'formTitle' => [$this, 'block_formTitle'],
            'callBack' => [$this, 'block_callBack'],
            'formButtons' => [$this, 'block_formButtons'],
            'formHtml' => [$this, 'block_formHtml'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "schedule-form-edit.twig", 9)->unwrap();
        // line 8
        $this->parent = $this->loadTemplate("form-base.twig", "schedule-form-edit.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        echo __("Edit Event");
    }

    // line 15
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "setupScheduleForm";
    }

    // line 17
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    ";
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 19
        echo __("Delete");
        echo ", XiboSwapDialog(\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.delete.form", ["id" => twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "eventId", [], "any", false, false, false, 19)]), "html", null, true);
        echo "\")
    ";
        // line 20
        echo __("Save");
        echo ", beforeSubmitScheduleForm(\$(\"#scheduleEditForm\"))
";
    }

    // line 23
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 27
        echo __("General");
        echo "</span></a></li>
                <li class=\"nav-item repeats\"><a class=\"nav-link\" href=\"#repeats\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 28
        echo __("Repeats");
        echo "</span></a></li>
                <!-- <li class=\"nav-item reminders\"><a class=\"nav-link\" href=\"#reminders\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 29
        echo __("Reminder");
        echo "</span></a></li>
                <li class=\"nav-item geoSchedule\"><a class=\"nav-link\" href=\"#geoSchedule\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 30
        echo __("Geo Location");
        echo "</span></a></li>
                <li class=\"nav-item criteria\"><a class=\"nav-link\" href=\"#tab-criteria\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 31
        echo __("Criteria");
        echo "</span></a></li> -->
            </ul>
            ";
        // line 33
        ob_start(function () { return ''; });
        echo __("Select the start time for this event");
        $context["dayPartMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 34
        echo "            <form id=\"scheduleEditForm\" autocomplete=\"off\" class=\"form-horizontal\" method=\"put\" data-event-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "eventId", [], "any", false, false, false, 34), "html", null, true);
        echo "\" data-event-start=\"";
        echo twig_escape_filter($this->env, ($context["eventStart"] ?? null), "html", null, true);
        echo "\" data-event-end=\"";
        echo twig_escape_filter($this->env, ($context["eventEnd"] ?? null), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "eventId", [], "any", false, false, false, 34)]), "html", null, true);
        echo "\"
                  data-daypart-message=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["dayPartMessage"] ?? null), "html", null, true);
        echo "\"
                  data-not-daypart-message=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["notDayPartMessage"] ?? null), "html", null, true);
        echo "\"
                  data-add-url=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.add"), "html", null, true);
        echo "\"
                  data-duplicated-message=\"";
        // line 38
        echo __("Duplicate form loaded, make adjustments and press save.");
        echo "\"
                  data-default-lat=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["defaultLat"] ?? null), "html", null, true);
        echo "\"
                  data-default-long=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["defaultLong"] ?? null), "html", null, true);
        echo "\"
                  data-library-get-url=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search"), "html", null, true);
        echo "?fullScreenScheduleCheck=true&types[]=image&types[]=video\"
                  data-playlist-get-url=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.search"), "html", null, true);
        echo "?fullScreenScheduleCheck=true\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 45
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Optional Name for this Event (1-50 characters)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "name", [], "any", false, false, false, 47), ($context["helpText"] ?? null)], 47, $context, $this->getSourceContext());
        echo "

                        ";
        // line 49
        ob_start(function () { return ''; });
        echo __("Event Type");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Select the type of event to schedule");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["eventTypeId", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "eventTypeId", [], "any", false, false, false, 51), ($context["eventTypes"] ?? null), "eventTypeId", "eventTypeName", ($context["helpText"] ?? null)], 51, $context, $this->getSourceContext());
        echo "

                        ";
        // line 53
        ob_start(function () { return ''; });
        echo __("Display");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Please select one or more displays / groups for this event to be shown on.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        echo "                        ";
        $context["attributes"] = [["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.search")], ["name" => "data-trans-groups", "value" => __("Groups")], ["name" => "data-trans-display", "value" => __("Display")]];
        // line 60
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["displayGroupIds[]", "dropdownmulti", ($context["title"] ?? null), ($context["displayGroupIds"] ?? null), ($context["displayGroups"] ?? null), "displayGroupId", "displayGroup", ($context["helpText"] ?? null), "", "", "", "", ($context["attributes"] ?? null)], 60, $context, $this->getSourceContext());
        echo "

                        ";
        // line 62
        ob_start(function () { return ''; });
        echo __("Dayparting");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Select the dayparting information for this event. To set your own times select custom and to have the event run constantly select Always.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        echo "                        <div class=\"form-group row day-part-control\">
                            <label class=\"col-sm-2 control-label\" for=\"dayPartId\">";
        // line 65
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select class=\"form-control\" name=\"dayPartId\" id=\"dayPartId\">
                                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dayParts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dayPart"]) {
            // line 69
            echo "                                        <option ";
            if ((twig_get_attribute($this->env, $this->source, $context["dayPart"], "dayPartId", [], "any", false, false, false, 69) == twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "dayPartId", [], "any", false, false, false, 69))) {
                echo "selected";
            }
            // line 70
            echo "                                                value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dayPart"], "dayPartId", [], "any", false, false, false, 70), "html", null, true);
            echo "\"
                                                data-is-always=\"";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dayPart"], "isAlways", [], "any", false, false, false, 71), "html", null, true);
            echo "\"
                                                data-is-custom=\"";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dayPart"], "isCustom", [], "any", false, false, false, 72), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dayPart"], "name", [], "any", false, false, false, 72), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dayPart'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                                </select>
                                <small class=\"form-text text-muted\">";
        // line 75
        echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
        echo "</small>
                            </div>
                        </div>

                        ";
        // line 79
        ob_start(function () { return ''; });
        echo __("Use Relative time?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Switch between relative time inputs and Date pickers for start and end time.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 81
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["relativeTime", ($context["title"] ?? null), ($context["relativeTime"] ?? null), ($context["helpText"] ?? null), "relative-time-checkbox"], 81, $context, $this->getSourceContext());
        echo "

                        ";
        // line 83
        ob_start(function () { return ''; });
        echo __("Hours");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Hours this event should be scheduled for");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 85
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["hours", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "duration-part relative-time-control"], 85, $context, $this->getSourceContext());
        echo "

                        ";
        // line 87
        ob_start(function () { return ''; });
        echo __("Minutes");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 88
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Minutes this event should be scheduled for");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 89
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["minutes", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "duration-part relative-time-control"], 89, $context, $this->getSourceContext());
        echo "

                        ";
        // line 91
        ob_start(function () { return ''; });
        echo __("Seconds");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Seconds this event should be scheduled for");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 93
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["seconds", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "schedule-now-seconds-field duration-part relative-time-control"], 93, $context, $this->getSourceContext());
        echo "

                        ";
        // line 95
        ob_start(function () { return ''; });
        echo __("Your event will be scheduled from [fromDt] to [toDt] in each of your selected Displays respective timezones");
        $context["messageNoSyncTimezone"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 96
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Your event will be scheduled from [fromDt] to [toDt] in the CMS timezone, please check this covers each of your Displays in their respective timezones.");
        $context["messageSyncTimezone"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 97
        echo "                        <div class=\"alert alert-info scheduleNowMessage d-none relative-time-control\" data-template-sync=\"";
        echo twig_escape_filter($this->env, ($context["messageSyncTimezone"] ?? null), "html", null, true);
        echo "\" data-template-no-sync=\"";
        echo twig_escape_filter($this->env, ($context["messageNoSyncTimezone"] ?? null), "html", null, true);
        echo "\"></div>

                        ";
        // line 99
        ob_start(function () { return ''; });
        echo __("Start Time");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 100
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Select the start time for this event");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 101
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dateTime", ["fromDt", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "fromDt", [], "any", false, false, false, 101), ($context["helpText"] ?? null), "starttime-control", "required", ""], 101, $context, $this->getSourceContext());
        echo "

                        ";
        // line 103
        ob_start(function () { return ''; });
        echo __("End Time");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 104
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Select the end time for this event");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 105
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dateTime", ["toDt", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "toDt", [], "any", false, false, false, 105), ($context["helpText"] ?? null), "endtime-control", "required", ""], 105, $context, $this->getSourceContext());
        echo "

                        ";
        // line 108
        echo "                        ";
        $context["attributes"] = [["name" => "data-search-url", "value" => ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.search") . "?type=list")], ["name" => "data-search-is-layout-specific", "value" =>  -1], ["name" => "data-trans-layout", "value" => __("Layout")], ["name" => "data-trans-layout-help-text", "value" => __("Please select a Layout for this Event to show")], ["name" => "data-trans-campaign", "value" => __("Campaign")], ["name" => "data-trans-campaign-help-text", "value" => __("Please select a Campaign for this Event to show")]];
        // line 116
        echo "
                        ";
        // line 117
        ob_start(function () { return ''; });
        echo __("Layout");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 118
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Please select a Layout for this Event to show");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 119
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["campaignId", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "campaignId", [], "any", false, false, false, 119), [($context["campaign"] ?? null)], "campaignId", "campaign", ($context["helpText"] ?? null), "layout-control", "", "", "", ($context["attributes"] ?? null)], 119, $context, $this->getSourceContext());
        echo "

                        ";
        // line 121
        ob_start(function () { return ''; });
        echo __("Media");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 122
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Select a Media file from the Library to use. The selected file will be shown full screen for this event.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 123
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_inputFullScreenSchedule", ["media", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "media-control full-screen-control", twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getUnmatchedProperty", ["mediaId"], "method", false, false, false, 123)], 123, $context, $this->getSourceContext());
        echo "

                        ";
        // line 125
        ob_start(function () { return ''; });
        echo __("Playlist");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 126
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Select a Playlist to use. The selected playlist will be shown full screen for this event.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 127
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_inputFullScreenSchedule", ["playlist", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "playlist-control full-screen-control", twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getUnmatchedProperty", ["playlistId"], "method", false, false, false, 127)], 127, $context, $this->getSourceContext());
        echo "

                        ";
        // line 129
        echo twig_call_macro($macros["forms"], "macro_hidden", ["fullScreenCampaignId", twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getUnmatchedProperty", ["fullScreenCampaignId"], "method", false, false, false, 129)], 129, $context, $this->getSourceContext());
        echo "

                        <div style=\"";
        // line 131
        if ( !(twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["campaign.view"], "method", false, false, false, 131) || twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["layout.view"], "method", false, false, false, 131))) {
            echo "display: none;";
        }
        echo "\">
                            <div class=\"form-group row preview-button-container\">
                                <div class=\"offset-md-2 col-md-10\">
                                    <a id=\"previewButton\" class=\"btn btn-success\" target=\"_blank\" data-url=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.preview", ["id" => ":id"]), "html", null, true);
        echo "\">";
        echo __("Preview");
        echo " <span class=\"fa fa-tablet\"></span></a>
                                    <small class=\"form-text text-muted\">";
        // line 135
        echo __("Preview your selection in a new tab");
        echo "</small>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group row interrupt-control\">
                            <label class=\"col-sm-2 control-label\" for=\"shareOfVoice\" accesskey=\"\">";
        // line 141
        echo __("Share of Voice");
        echo "</label>
                            <div class=\"col-sm-5\">
                                <input class=\"form-control\" name=\"shareOfVoice\" type=\"number\" id=\"shareOfVoice\" value=\"";
        // line 143
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "shareOfVoice", [], "any", false, false, false, 143), "html", null, true);
        echo "\" min=\"0\" max=\"3600\" step=\"1\">
                                <small class=\"form-text text-muted\">";
        // line 144
        echo __("The amount of time this Layout should be shown, in seconds per hour.");
        echo "</small>
                            </div>

                            <div class=\"col-sm-5\">
                                <input class=\"form-control\" name=\"shareOfVoicePercentage\" type=\"number\" id=\"shareOfVoicePercentage\" value=\"\">
                                <small class=\"form-text text-muted\">";
        // line 149
        echo __("As a percentage");
        echo "</small>
                            </div>
                        </div>

                        ";
        // line 153
        ob_start(function () { return ''; });
        echo __("Action Type");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 154
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Please select action Type");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 155
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Navigate to Layout");
        $context["navLayout"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 156
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Command");
        $context["command"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 157
        echo "                        ";
        $context["options"] = [["typeid" => "navLayout", "type" =>         // line 158
($context["navLayout"] ?? null)], ["typeid" => "command", "type" =>         // line 159
($context["command"] ?? null)]];
        // line 161
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["actionType", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "actionType", [], "any", false, false, false, 161), ($context["options"] ?? null), "typeid", "type", ($context["helpText"] ?? null), "action-control"], 161, $context, $this->getSourceContext());
        echo "

                        ";
        // line 163
        ob_start(function () { return ''; });
        echo __("Trigger Code");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 164
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Web hook trigger code for this Action");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 165
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["actionTriggerCode", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "actionTriggerCode", [], "any", false, false, false, 165), ($context["helpText"] ?? null), "action-control"], 165, $context, $this->getSourceContext());
        echo "

                        ";
        // line 167
        ob_start(function () { return ''; });
        echo __("Layout Code");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 168
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Please select the Code identifier for the Layout that Player should navigate to when this Action is triggered.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 169
        echo "
                        ";
        // line 170
        $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.code.search")], ["name" => "data-search-term", "value" => "code"], ["name" => "data-id-property", "value" => "code"], ["name" => "data-text-property", "value" => "code"], ["name" => "data-initial-key", "value" => "code"], ["name" => "data-initial-value", "value" => twig_get_attribute($this->env, $this->source,         // line 177
($context["event"] ?? null), "actionLayoutCode", [], "any", false, false, false, 177)]];
        // line 179
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["actionLayoutCode", "single", ($context["title"] ?? null), "", null, "code", "code", ($context["helpText"] ?? null), "pagedSelect action-control layout-code-control", "", "", "", ($context["attributes"] ?? null)], 179, $context, $this->getSourceContext());
        echo "

                        ";
        // line 181
        ob_start(function () { return ''; });
        echo __("Command");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 182
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Please select a command for this Event.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 183
        echo "                        ";
        $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("command.search")], ["name" => "data-search-term", "value" => "command"], ["name" => "data-id-property", "value" => "commandId"], ["name" => "data-text-property", "value" => "command"], ["name" => "data-initial-key", "value" => "commandId"], ["name" => "data-initial-value", "value" => twig_get_attribute($this->env, $this->source,         // line 190
($context["event"] ?? null), "commandId", [], "any", false, false, false, 190)]];
        // line 192
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["commandId", "single", ($context["title"] ?? null), "", null, "commandId", "command", ($context["helpText"] ?? null), "pagedSelect command-control", "", "", "", ($context["attributes"] ?? null)], 192, $context, $this->getSourceContext());
        echo "

                        ";
        // line 194
        ob_start(function () { return ''; });
        echo __("DataSet");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 195
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Please select the real time DataSet related to this Data Connector event");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 196
        echo "
                        ";
        // line 197
        $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.search") . "?isRealTime=1")], ["name" => "data-search-term", "value" => "dataSet"], ["name" => "data-id-property", "value" => "dataSetId"], ["name" => "data-text-property", "value" => "dataSet"], ["name" => "data-initial-key", "value" => "dataSetId"], ["name" => "data-initial-value", "value" => twig_get_attribute($this->env, $this->source,         // line 204
($context["event"] ?? null), "dataSetId", [], "any", false, false, false, 204)]];
        // line 206
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["dataSetId", "single", ($context["title"] ?? null), "", twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "dataSetId", [], "any", false, false, false, 206), "dataSetId", "dataSet", ($context["helpText"] ?? null), "pagedSelect data-connector-control", "", "", "", ($context["attributes"] ?? null)], 206, $context, $this->getSourceContext());
        echo "

                        ";
        // line 208
        ob_start(function () { return ''; });
        echo __("Data Connector Parameters");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 209
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Optionally provide any parameters to be used by the Data Connector.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 210
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["dataSetParams", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "dataSetParams", [], "any", false, false, false, 210), ($context["helpText"] ?? null), "data-connector-control"], 210, $context, $this->getSourceContext());
        echo "

                        ";
        // line 212
        ob_start(function () { return ''; });
        echo __("Display Order");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 213
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Please select the order this event should appear in relation to others when there is more than one event scheduled");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 214
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["displayOrder", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "displayOrder", [], "any", false, false, false, 214), ($context["helpText"] ?? null), "displayOrder-control"], 214, $context, $this->getSourceContext());
        echo "

                        ";
        // line 216
        ob_start(function () { return ''; });
        echo __("Priority");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 217
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Sets the event priority - events with the highest priority play in preference to lower priority events.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 218
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["isPriority", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "isPriority", [], "any", false, false, false, 218), ($context["helpText"] ?? null), "priority-control"], 218, $context, $this->getSourceContext());
        echo "

                        <!-- ";
        // line 220
        ob_start(function () { return ''; });
        echo __("Maximum plays per hour");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 221
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Limit the number of times this event will play per hour on each display. For unlimited plays set to 0.");
        echo twig_call_macro($macros["forms"], "macro_playerCompat", ["R308", "", "", "", "R306", ""], 221, $context, $this->getSourceContext());
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 222
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["maxPlaysPerHour", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "maxPlaysPerHour", [], "any", false, false, false, 222), ($context["helpText"] ?? null), "max-plays-control"], 222, $context, $this->getSourceContext());
        echo " -->

                        ";
        // line 224
        ob_start(function () { return ''; });
        echo __("Run at CMS Time?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 225
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("When selected, your event will run according to the timezone set on the CMS, otherwise the event will run at Display local time");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 226
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["syncTimezone", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "syncTimezone", [], "any", false, false, false, 226), ($context["helpText"] ?? null)], 226, $context, $this->getSourceContext());
        echo "

                        ";
        // line 228
        if (($context["recurringEvent"] ?? null)) {
            // line 229
            echo "                            <div class=\"card p-3 mb-3 bg-light text-primary text-center form-error\">
                                <p>This is an instance of a scheduled recurring event:
                                    <span class=\"fa fa-info-circle\"
                                          data-toggle=\"popover\"
                                          data-trigger=\"hover\"
                                          data-placement=\"bottom\"
                                          data-content=\"";
            // line 235
            echo __("Editing the Start and or End date/time will create a new Recurring Event across the Schedule. Any previously deleted instances of this event will be recreated with edits made here.");
            echo "\"></span></p>
                                <p>
                                    Starting from <span class=\"text-warning\"><b id=\"instanceStartDate\">-</b></span> to <span class=\"text-warning\"><b id=\"instanceEndDate\">-</b></span>
                                </p>
                                <div id=\"recurringInfo\"></div>
                            </div>
                        ";
        }
        // line 242
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"repeats\">
                        ";
        // line 246
        ob_start(function () { return ''; });
        echo __("Repeats");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 247
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Select the type of Repeat required for this Event.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 248
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("None");
        $context["noneOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 249
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Per Minute");
        $context["minute"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 250
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Hourly");
        $context["hourly"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 251
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Daily");
        $context["daily"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 252
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Weekly");
        $context["weekly"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 253
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Monthly");
        $context["monthly"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 254
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Yearly");
        $context["yearly"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 255
        echo "                        ";
        $context["options"] = [["id" => "", "name" =>         // line 256
($context["noneOption"] ?? null)], ["id" => "Minute", "name" =>         // line 257
($context["minute"] ?? null)], ["id" => "Hour", "name" =>         // line 258
($context["hourly"] ?? null)], ["id" => "Day", "name" =>         // line 259
($context["daily"] ?? null)], ["id" => "Week", "name" =>         // line 260
($context["weekly"] ?? null)], ["id" => "Month", "name" =>         // line 261
($context["monthly"] ?? null)], ["id" => "Year", "name" =>         // line 262
($context["yearly"] ?? null)]];
        // line 264
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["recurrenceType", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "recurrenceType", [], "any", false, false, false, 264), ($context["options"] ?? null), "id", "name", ($context["helpText"] ?? null)], 264, $context, $this->getSourceContext());
        echo "

                        ";
        // line 266
        ob_start(function () { return ''; });
        echo __("Use the drop-down to select which days of the week this Event should be repeated");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 267
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Monday");
        $context["monday"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 268
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Tuesday");
        $context["tuesday"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 269
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Wednesday");
        $context["wednesday"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 270
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Thursday");
        $context["thursday"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 271
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Friday");
        $context["friday"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 272
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Saturday");
        $context["saturday"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 273
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Sunday");
        $context["sunday"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 274
        echo "                        ";
        $context["options"] = [["id" => 1, "name" =>         // line 275
($context["monday"] ?? null)], ["id" => 2, "name" =>         // line 276
($context["tuesday"] ?? null)], ["id" => 3, "name" =>         // line 277
($context["wednesday"] ?? null)], ["id" => 4, "name" =>         // line 278
($context["thursday"] ?? null)], ["id" => 5, "name" =>         // line 279
($context["friday"] ?? null)], ["id" => 6, "name" =>         // line 280
($context["saturday"] ?? null)], ["id" => 7, "name" =>         // line 281
($context["sunday"] ?? null)]];
        // line 283
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["recurrenceRepeatsOn[]", "dropdownmulti", "", twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "recurrenceRepeatsOn", [], "any", false, false, false, 283), ($context["options"] ?? null), "id", "name", ($context["helpText"] ?? null), "repeat-weekly-control-group"], 283, $context, $this->getSourceContext());
        echo "

                        ";
        // line 285
        ob_start(function () { return ''; });
        echo __("Should this Event Repeat by Day of the month (eg. Monthly on Day 21) or by a Weekday in the month (eg. Monthly on the third Thursday)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 286
        echo "                        ";
        $context["attributes"] = [["name" => "data-value", "value" => twig_get_attribute($this->env, $this->source,         // line 287
($context["event"] ?? null), "recurrenceMonthlyRepeatsOn", [], "any", false, false, false, 287)], ["name" => "data-trans-day", "value" => __("on the [DAY] day")], ["name" => "data-trans-weekday", "value" => __("on the [POSITION] [WEEKDAY]")]];
        // line 291
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["recurrenceMonthlyRepeatsOn", "single", "", twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "recurrenceMonthlyRepeatsOn", [], "any", false, false, false, 291), [["id" => twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "recurrenceMonthlyRepeatsOn", [], "any", false, false, false, 291), "name" => ""]], "id", "name", ($context["helpText"] ?? null), "repeat-monthly-control-group", "", "", "", ($context["attributes"] ?? null)], 291, $context, $this->getSourceContext());
        echo "

                        ";
        // line 293
        ob_start(function () { return ''; });
        echo __("Every");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 294
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Include a number to determine the Repeat frequency required for this Event.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 295
        echo "                        <div class=\"form-group row repeat-control-group\">
                            <label class=\"col-sm-2 control-label\" for=\"recurrenceDetail\">";
        // line 296
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <div class=\"input-group\">
                                    <input class=\"form-control\" name=\"recurrenceDetail\" type=\"number\" id=\"recurrenceDetail\" value=\"";
        // line 299
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "recurrenceDetail", [], "any", false, false, false, 299), "html", null, true);
        echo "\" />
                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text input-group-addon\"></span>
                                    </div>
                                </div>
                                <span class=\"form-text text-muted\">";
        // line 304
        echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
        echo "</span>
                            </div>
                        </div>

                        ";
        // line 308
        ob_start(function () { return ''; });
        echo __("Until");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 309
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Provide a date and time to end the Repeat for this Event. Leave empty to Repeat indefinitely.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 310
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dateTime", ["recurrenceRange", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "recurrenceRange", [], "any", false, false, false, 310), ($context["helpText"] ?? null), "repeat-control-group", "", ""], 310, $context, $this->getSourceContext());
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"reminders\">
                        ";
        // line 314
        ob_start(function () { return ''; });
        echo __("Use the form fields below to create a set of reminders for this event. New fields can be added by clicking on the + icon at the end of the row. Use the tick box to receive a notification by email alternatively reminders will be shown in the message center.");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 315
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null)], 315, $context, $this->getSourceContext());
        echo "
                        <div id=\"reminderFields\" data-reminders=\"";
        // line 316
        echo twig_escape_filter($this->env, json_encode(($context["reminders"] ?? null)), "html", null, true);
        echo "\"></div>
                    </div>

                    <div class=\"tab-pane\" id=\"geoSchedule\">
                        ";
        // line 320
        ob_start(function () { return ''; });
        echo __("Geo Schedule?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 321
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Should this event be location aware? Enable this checkbox and select an area by drawing a polygon or rectangle layer on the map below.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 322
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["isGeoAware", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "isGeoAware", [], "any", false, false, false, 322), ($context["helpText"] ?? null), ""], 322, $context, $this->getSourceContext());
        echo "

                        <div id=\"geoScheduleMap\" style=\"height: 500px; width: 100%\" class=\"d-none\"></div>

                        ";
        // line 326
        echo twig_call_macro($macros["forms"], "macro_hidden", ["geoLocation", twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "geoLocation", [], "any", false, false, false, 326)], 326, $context, $this->getSourceContext());
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"tab-criteria\">
                        ";
        // line 330
        ob_start(function () { return ''; });
        echo __("Set criteria to determine when this event is active. All conditions must be true for an event to be included in the schedule loop. Events without criteria are always active.");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 331
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null)], 331, $context, $this->getSourceContext());
        echo "

                        <div class=\"form-criteria-field-headings\">
                            <div class=\"form-group row\">
                                <div class=\"col-form-label col-sm-2\">";
        // line 335
        echo twig_escape_filter($this->env, __("Type"), "html", null, true);
        echo "</div>
                                <div class=\"col-form-label col-sm-2\">";
        // line 336
        echo twig_escape_filter($this->env, __("Metric"), "html", null, true);
        echo "</div>
                                <div class=\"col-form-label col-sm-3\">";
        // line 337
        echo twig_escape_filter($this->env, __("Condition"), "html", null, true);
        echo "</div>
                                <div class=\"col-form-label col-sm-2\">";
        // line 338
        echo twig_escape_filter($this->env, __("Value"), "html", null, true);
        echo "</div>
                            </div>
                        </div>

                        <div id=\"scheduleCriteriaFields\" data-criteria=\"";
        // line 342
        echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "criteria", [], "any", false, false, false, 342)), "html", null, true);
        echo "\" data-schedule-criteria=\"";
        echo twig_escape_filter($this->env, json_encode(($context["scheduleCriteria"] ?? null)), "html_attr");
        echo "\"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "schedule-form-edit.twig";
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
        return array (  940 => 342,  933 => 338,  929 => 337,  925 => 336,  921 => 335,  913 => 331,  909 => 330,  902 => 326,  894 => 322,  889 => 321,  885 => 320,  878 => 316,  873 => 315,  869 => 314,  861 => 310,  856 => 309,  852 => 308,  845 => 304,  837 => 299,  831 => 296,  828 => 295,  823 => 294,  819 => 293,  813 => 291,  811 => 287,  809 => 286,  805 => 285,  799 => 283,  797 => 281,  796 => 280,  795 => 279,  794 => 278,  793 => 277,  792 => 276,  791 => 275,  789 => 274,  784 => 273,  779 => 272,  774 => 271,  769 => 270,  764 => 269,  759 => 268,  754 => 267,  750 => 266,  744 => 264,  742 => 262,  741 => 261,  740 => 260,  739 => 259,  738 => 258,  737 => 257,  736 => 256,  734 => 255,  729 => 254,  724 => 253,  719 => 252,  714 => 251,  709 => 250,  704 => 249,  699 => 248,  694 => 247,  690 => 246,  684 => 242,  674 => 235,  666 => 229,  664 => 228,  658 => 226,  653 => 225,  649 => 224,  643 => 222,  637 => 221,  633 => 220,  627 => 218,  622 => 217,  618 => 216,  612 => 214,  607 => 213,  603 => 212,  597 => 210,  592 => 209,  588 => 208,  582 => 206,  580 => 204,  579 => 197,  576 => 196,  571 => 195,  567 => 194,  561 => 192,  559 => 190,  557 => 183,  552 => 182,  548 => 181,  542 => 179,  540 => 177,  539 => 170,  536 => 169,  531 => 168,  527 => 167,  521 => 165,  516 => 164,  512 => 163,  506 => 161,  504 => 159,  503 => 158,  501 => 157,  496 => 156,  491 => 155,  486 => 154,  482 => 153,  475 => 149,  467 => 144,  463 => 143,  458 => 141,  449 => 135,  443 => 134,  435 => 131,  430 => 129,  424 => 127,  419 => 126,  415 => 125,  409 => 123,  404 => 122,  400 => 121,  394 => 119,  389 => 118,  385 => 117,  382 => 116,  379 => 108,  373 => 105,  368 => 104,  364 => 103,  358 => 101,  353 => 100,  349 => 99,  341 => 97,  336 => 96,  332 => 95,  326 => 93,  321 => 92,  317 => 91,  311 => 89,  306 => 88,  302 => 87,  296 => 85,  291 => 84,  287 => 83,  281 => 81,  276 => 80,  272 => 79,  265 => 75,  262 => 74,  252 => 72,  248 => 71,  243 => 70,  238 => 69,  234 => 68,  228 => 65,  225 => 64,  220 => 63,  216 => 62,  210 => 60,  207 => 55,  202 => 54,  198 => 53,  192 => 51,  187 => 50,  183 => 49,  177 => 47,  172 => 46,  168 => 45,  162 => 42,  158 => 41,  154 => 40,  150 => 39,  146 => 38,  142 => 37,  138 => 36,  134 => 35,  123 => 34,  119 => 33,  114 => 31,  110 => 30,  106 => 29,  102 => 28,  98 => 27,  93 => 24,  89 => 23,  83 => 20,  77 => 19,  72 => 18,  68 => 17,  61 => 15,  56 => 12,  52 => 11,  47 => 8,  45 => 9,  38 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "schedule-form-edit.twig", "/var/www/html/cms_ubi/views/schedule-form-edit.twig");
    }
}
