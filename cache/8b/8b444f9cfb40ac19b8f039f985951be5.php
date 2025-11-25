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

/* schedule-form-add.twig */
class __TwigTemplate_1f56d2d876829f0861f748274805ad27 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "schedule-form-add.twig", 9)->unwrap();
        // line 8
        $this->parent = $this->loadTemplate("form-base.twig", "schedule-form-add.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        echo __("Schedule Event");
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
        if ( !($context["isScheduleNow"] ?? null)) {
            // line 20
            echo "        ";
            echo __("Next");
            echo ", XiboDialogApply(\"#scheduleAddForm\")
    ";
        }
        // line 22
        echo "    ";
        echo __("Save");
        echo ", beforeSubmitScheduleForm(\$(\"#scheduleAddForm\"))
";
    }

    // line 25
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 29
        echo __("General");
        echo "</span></a></li>
                <li class=\"nav-item repeats\"><a class=\"nav-link\" href=\"#repeats\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 30
        echo __("Repeats");
        echo "</span></a></li>
               <!-- <li class=\"nav-item reminders\"><a class=\"nav-link\" href=\"#reminders\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 31
        echo __("Reminder");
        echo "</span></a></li>
                <li class=\"nav-item geoSchedule\"><a class=\"nav-link\" href=\"#geoSchedule\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 32
        echo __("Geo Location");
        echo "</span></a></li>
                <li class=\"nav-item criteria\"><a class=\"nav-link\" href=\"#tab-criteria\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 33
        echo __("Criteria");
        echo "</span></a></li> -->
            </ul>
            ";
        // line 35
        ob_start(function () { return ''; });
        echo __("Select the start time for this event");
        $context["dayPartMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 36
        echo "            ";
        ob_start(function () { return ''; });
        echo __("Start and end time will be defined by the daypart's configuration for this day of the week. Use a repeating schedule to apply this event over multiple days");
        $context["notDayPartMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 37
        echo "            <form id=\"scheduleAddForm\" autocomplete=\"off\" class=\"form-horizontal\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.add"), "html", null, true);
        echo "\"
                  data-daypart-message=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["dayPartMessage"] ?? null), "html", null, true);
        echo "\"
                  data-not-daypart-message=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["notDayPartMessage"] ?? null), "html", null, true);
        echo "\"
                  data-default-lat=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["defaultLat"] ?? null), "html", null, true);
        echo "\"
                  data-default-long = \"";
        // line 41
        echo twig_escape_filter($this->env, ($context["defaultLong"] ?? null), "html", null, true);
        echo "\"
                  data-library-get-url=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search"), "html", null, true);
        echo "?fullScreenScheduleCheck=true&types[]=image&types[]=video\"
                  data-playlist-get-url=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.search"), "html", null, true);
        echo "?fullScreenScheduleCheck=true\"
                  data-set-displays-from-grid-filters=\"";
        // line 44
        echo twig_escape_filter($this->env, ($context["setDisplaysFromFilter"] ?? null), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 47
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Optional Name for this Event (1-50 characters)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 49, $context, $this->getSourceContext());
        echo "
                        
                        ";
        // line 51
        if (($context["isScheduleNow"] ?? null)) {
            // line 52
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_hidden", ["eventTypeId", ($context["eventTypeId"] ?? null)], 52, $context, $this->getSourceContext());
            echo "
                        ";
        } else {
            // line 54
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Event Type");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 55
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Select the type of event to schedule");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 56
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_dropdown", ["eventTypeId", "single", ($context["title"] ?? null), "", ($context["eventTypes"] ?? null), "eventTypeId", "eventTypeName", ($context["helpText"] ?? null)], 56, $context, $this->getSourceContext());
            echo "
                        ";
        }
        // line 58
        echo "

                        ";
        // line 60
        ob_start(function () { return ''; });
        echo __("Display");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Please select one or more displays / groups for this event to be shown on.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        echo "                        ";
        $context["attributes"] = [["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.search")], ["name" => "data-trans-groups", "value" => __("Groups")], ["name" => "data-trans-display", "value" => __("Display")], ["name" => "data-initial-key", "value" => "displayGroupIds[]"], ["name" => "data-id-property", "value" => "displayGroupId"], ["name" => "data-text-property", "value" => "displayGroup"]];
        // line 70
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["displayGroupIds[]", "dropdownmulti", ($context["title"] ?? null), ($context["displayGroupIds"] ?? null), ($context["displayGroups"] ?? null), "displayGroupId", "displayGroup", ($context["helpText"] ?? null), "", "", "", "", ($context["attributes"] ?? null)], 70, $context, $this->getSourceContext());
        echo "

                        ";
        // line 72
        ob_start(function () { return ''; });
        echo __("Dayparting");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Select the dayparting information for this event. To set your own times select custom and to have the event run constantly select Always.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 74
        echo "                        <div class=\"form-group row day-part-control\">
                            <label class=\"col-sm-2 control-label\" for=\"dayPartId\">";
        // line 75
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select class=\"form-control\" name=\"dayPartId\" id=\"dayPartId\">
                                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dayParts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dayPart"]) {
            // line 79
            echo "                                        <option ";
            if ((twig_get_attribute($this->env, $this->source, $context["dayPart"], "isCustom", [], "any", false, false, false, 79) == 1)) {
                echo "selected";
            }
            // line 80
            echo "                                                value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dayPart"], "dayPartId", [], "any", false, false, false, 80), "html", null, true);
            echo "\"
                                                data-is-always=\"";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dayPart"], "isAlways", [], "any", false, false, false, 81), "html", null, true);
            echo "\"
                                                data-is-custom=\"";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dayPart"], "isCustom", [], "any", false, false, false, 82), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dayPart"], "name", [], "any", false, false, false, 82), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dayPart'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                                </select>
                                <small class=\"form-text text-muted\">";
        // line 85
        echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
        echo "</small>
                            </div>
                        </div>

                        ";
        // line 89
        ob_start(function () { return ''; });
        echo __("Use Relative time?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 90
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Switch between relative time inputs and Date pickers for start and end time.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 91
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["relativeTime", ($context["title"] ?? null), ($context["relativeTime"] ?? null), ($context["helpText"] ?? null), "relative-time-checkbox"], 91, $context, $this->getSourceContext());
        echo "

                        ";
        // line 93
        ob_start(function () { return ''; });
        echo __("Hours");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 94
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Hours this event should be scheduled for");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 95
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["hours", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "duration-part relative-time-control"], 95, $context, $this->getSourceContext());
        echo "

                        ";
        // line 97
        ob_start(function () { return ''; });
        echo __("Minutes");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Minutes this event should be scheduled for");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 99
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["minutes", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "duration-part relative-time-control"], 99, $context, $this->getSourceContext());
        echo "

                        ";
        // line 101
        ob_start(function () { return ''; });
        echo __("Seconds");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 102
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Seconds this event should be scheduled for");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 103
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["seconds", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "schedule-now-seconds-field duration-part relative-time-control"], 103, $context, $this->getSourceContext());
        echo "

                        ";
        // line 105
        ob_start(function () { return ''; });
        echo __("Your event will be scheduled from [fromDt] to [toDt] in each of your selected Displays respective timezones");
        $context["messageNoSyncTimezone"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 106
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Your event will be scheduled from [fromDt] to [toDt] in the CMS timezone, please check this covers each of your Displays in their respective timezones.");
        $context["messageSyncTimezone"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 107
        echo "                        <div class=\"alert alert-info scheduleNowMessage d-none relative-time-control\" data-template-sync=\"";
        echo twig_escape_filter($this->env, ($context["messageSyncTimezone"] ?? null), "html", null, true);
        echo "\" data-template-no-sync=\"";
        echo twig_escape_filter($this->env, ($context["messageNoSyncTimezone"] ?? null), "html", null, true);
        echo "\"></div>

                        ";
        // line 109
        ob_start(function () { return ''; });
        echo __("Start Time");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 110
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Select the start time for this event");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 111
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dateTime", ["fromDt", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "starttime-control", "required"], 111, $context, $this->getSourceContext());
        echo "

                        ";
        // line 113
        ob_start(function () { return ''; });
        echo __("End Time");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 114
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Select the end time for this event");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 115
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dateTime", ["toDt", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "endtime-control", "required"], 115, $context, $this->getSourceContext());
        echo "

                        ";
        // line 118
        echo "                        ";
        $context["attributes"] = [["name" => "data-search-url", "value" => ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.search") . "?type=list")], ["name" => "data-search-is-layout-specific", "value" =>  -1], ["name" => "data-trans-layout", "value" => __("Layout")], ["name" => "data-trans-layout-help-text", "value" => __("Please select a Layout for this Event to show")], ["name" => "data-trans-campaign", "value" => __("Campaign")], ["name" => "data-trans-campaign-help-text", "value" => __("Please select a Campaign for this Event to show")]];
        // line 126
        echo "
                        ";
        // line 127
        ob_start(function () { return ''; });
        echo __("Layout");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 128
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Please select a Layout for this Event to show");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 129
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["campaignId", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["campaign"] ?? null), "campaignId", [], "any", false, false, false, 129), [($context["campaign"] ?? null)], "campaignId", "campaign", ($context["helpText"] ?? null), "layout-control", "", "", "", ($context["attributes"] ?? null), "", "", "", ($context["readonlySelect"] ?? null)], 129, $context, $this->getSourceContext());
        echo "

                        ";
        // line 131
        ob_start(function () { return ''; });
        echo __("Media");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 132
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Select a Media file from the Library to use. The selected file will be shown full screen for this event.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 133
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_inputFullScreenSchedule", ["media", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "media-control full-screen-control", ($context["mediaId"] ?? null), "", "", ($context["readonlySelect"] ?? null)], 133, $context, $this->getSourceContext());
        echo "

                        ";
        // line 135
        ob_start(function () { return ''; });
        echo __("Playlist");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 136
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Select a Playlist to use. The selected playlist will be shown full screen for this event.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 137
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_inputFullScreenSchedule", ["playlist", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "playlist-control full-screen-control", ($context["playlistId"] ?? null), "", "", ($context["readonlySelect"] ?? null)], 137, $context, $this->getSourceContext());
        echo "
                        ";
        // line 138
        echo twig_call_macro($macros["forms"], "macro_hidden", ["fullScreenCampaignId"], 138, $context, $this->getSourceContext());
        echo "

                        <div style=\"";
        // line 140
        if ( !(twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["campaign.view"], "method", false, false, false, 140) || twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["layout.view"], "method", false, false, false, 140))) {
            echo "display: none;";
        }
        echo "\">
                            <div class=\"form-group row preview-button-container\">
                                <div class=\"offset-md-2 col-md-10\">
                                    <a id=\"previewButton\" class=\"btn btn-success\" target=\"_blank\" data-url=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.preview", ["id" => ":id"]), "html", null, true);
        echo "\">";
        echo __("Preview");
        echo " <span class=\"fa fa-tablet\"></span></a>
                                    <small class=\"form-text text-muted\">";
        // line 144
        echo __("Preview your selection in a new tab");
        echo "</small>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group row interrupt-control\" style=\"display: flex;\">
                            <label class=\"col-sm-2 control-label\" for=\"shareOfVoice\" accesskey=\"\">";
        // line 150
        echo __("Share of Voice");
        echo "</label>
                            <div class=\"col-sm-5\">
                                <input class=\"form-control\" name=\"shareOfVoice\" type=\"number\" id=\"shareOfVoice\" value=\"0\" min=\"0\" max=\"3600\" step=\"1\">
                                <small class=\"form-text text-muted\">";
        // line 153
        echo __("The amount of time this Layout should be shown, in seconds per hour.");
        echo "</small>
                            </div>

                            <div class=\"col-sm-5\">
                                <input class=\"form-control\" name=\"shareOfVoicePercentage\" type=\"number\" id=\"shareOfVoicePercentage\" value=\"\">
                                <small class=\"form-text text-muted\">";
        // line 158
        echo __("As a percentage");
        echo "</small>
                            </div>
                        </div>

                        ";
        // line 162
        ob_start(function () { return ''; });
        echo __("Action Type");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 163
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Please select action Type");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 164
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Navigate to Layout");
        $context["navLayout"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 165
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Command");
        $context["command"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 166
        echo "                        ";
        $context["options"] = [["typeid" => "navLayout", "type" =>         // line 167
($context["navLayout"] ?? null)], ["typeid" => "command", "type" =>         // line 168
($context["command"] ?? null)]];
        // line 170
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["actionType", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "typeid", "type", ($context["helpText"] ?? null), "action-control"], 170, $context, $this->getSourceContext());
        echo "

                        ";
        // line 172
        ob_start(function () { return ''; });
        echo __("Trigger Code");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 173
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Web hook trigger code for this Action");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 174
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["actionTriggerCode", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "action-control"], 174, $context, $this->getSourceContext());
        echo "

                        ";
        // line 176
        ob_start(function () { return ''; });
        echo __("Layout Code");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 177
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Please select the Code identifier for the Layout that Player should navigate to when this Action is triggered.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 178
        echo "
                        ";
        // line 179
        $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.code.search")], ["name" => "data-search-term", "value" => "code"], ["name" => "data-id-property", "value" => "code"], ["name" => "data-text-property", "value" => "code"]];
        // line 186
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["actionLayoutCode", "single", ($context["title"] ?? null), "", null, "code", "code", ($context["helpText"] ?? null), "pagedSelect action-control layout-code-control", "", "", "", ($context["attributes"] ?? null)], 186, $context, $this->getSourceContext());
        echo "

                        ";
        // line 188
        ob_start(function () { return ''; });
        echo __("Command");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 189
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Please select a command for this Event.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 190
        echo "                        ";
        $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("command.search")], ["name" => "data-search-term", "value" => "command"], ["name" => "data-id-property", "value" => "commandId"], ["name" => "data-text-property", "value" => "command"]];
        // line 197
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["commandId", "single", ($context["title"] ?? null), "", null, "commandId", "command", ($context["helpText"] ?? null), "pagedSelect command-control", "", "", "", ($context["attributes"] ?? null)], 197, $context, $this->getSourceContext());
        echo "

                        ";
        // line 199
        ob_start(function () { return ''; });
        echo __("DataSet");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 200
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Please select the real time DataSet related to this Data Connector event");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 201
        echo "
                        ";
        // line 202
        $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.search") . "?isRealTime=1")], ["name" => "data-search-term", "value" => "dataSet"], ["name" => "data-id-property", "value" => "dataSetId"], ["name" => "data-text-property", "value" => "dataSet"]];
        // line 209
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["dataSetId", "single", ($context["title"] ?? null), "", null, "dataSetId", "dataSet", ($context["helpText"] ?? null), "pagedSelect data-connector-control", "", "", "", ($context["attributes"] ?? null)], 209, $context, $this->getSourceContext());
        echo "

                        ";
        // line 211
        ob_start(function () { return ''; });
        echo __("Data Connector Parameters");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 212
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Optionally provide any parameters to be used by the Data Connector.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 213
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["dataSetParams", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "data-connector-control"], 213, $context, $this->getSourceContext());
        echo "

                        ";
        // line 215
        ob_start(function () { return ''; });
        echo __("Display Order");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 216
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Please select the order this event should appear in relation to others when there is more than one event scheduled");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 217
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["displayOrder", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "displayOrder-control"], 217, $context, $this->getSourceContext());
        echo "

                        ";
        // line 219
        ob_start(function () { return ''; });
        echo __("Priority");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 220
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Sets the event priority - events with the highest priority play in preference to lower priority events.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 221
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["isPriority", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "priority-control"], 221, $context, $this->getSourceContext());
        echo "

                       <!-- ";
        // line 223
        ob_start(function () { return ''; });
        echo __("Maximum plays per hour");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 224
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Limit the number of times this event will play per hour on each display. For unlimited plays set to 0.");
        echo twig_call_macro($macros["forms"], "macro_playerCompat", ["R308", "", "", "", "R306", ""], 224, $context, $this->getSourceContext());
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 225
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["maxPlaysPerHour", ($context["title"] ?? null), 0, ($context["helpText"] ?? null), "max-plays-control"], 225, $context, $this->getSourceContext());
        echo " -->

                        ";
        // line 227
        ob_start(function () { return ''; });
        echo __("Run at CMS Time?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 228
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("When selected, your event will run according to the timezone set on the CMS, otherwise the event will run at Display local time");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 229
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["syncTimezone", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 229, $context, $this->getSourceContext());
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"repeats\">
                        ";
        // line 233
        ob_start(function () { return ''; });
        echo __("Repeats");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 234
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Select the type of Repeat required for this Event.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 235
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("None");
        $context["noneOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 236
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Per Minute");
        $context["minute"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 237
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Hourly");
        $context["hourly"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 238
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Daily");
        $context["daily"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 239
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Weekly");
        $context["weekly"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 240
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Monthly");
        $context["monthly"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 241
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Yearly");
        $context["yearly"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 242
        echo "                        ";
        $context["options"] = [["id" => "", "name" =>         // line 243
($context["noneOption"] ?? null)], ["id" => "Minute", "name" =>         // line 244
($context["minute"] ?? null)], ["id" => "Hour", "name" =>         // line 245
($context["hourly"] ?? null)], ["id" => "Day", "name" =>         // line 246
($context["daily"] ?? null)], ["id" => "Week", "name" =>         // line 247
($context["weekly"] ?? null)], ["id" => "Month", "name" =>         // line 248
($context["monthly"] ?? null)], ["id" => "Year", "name" =>         // line 249
($context["yearly"] ?? null)]];
        // line 251
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["recurrenceType", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "id", "name", ($context["helpText"] ?? null)], 251, $context, $this->getSourceContext());
        echo "

                        ";
        // line 253
        ob_start(function () { return ''; });
        echo __("Use the drop-down to select which days of the week this Event should be repeated.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 254
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Monday");
        $context["monday"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 255
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Tuesday");
        $context["tuesday"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 256
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Wednesday");
        $context["wednesday"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 257
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Thursday");
        $context["thursday"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 258
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Friday");
        $context["friday"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 259
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Saturday");
        $context["saturday"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 260
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Sunday");
        $context["sunday"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 261
        echo "                        ";
        $context["options"] = [["id" => 1, "name" =>         // line 262
($context["monday"] ?? null)], ["id" => 2, "name" =>         // line 263
($context["tuesday"] ?? null)], ["id" => 3, "name" =>         // line 264
($context["wednesday"] ?? null)], ["id" => 4, "name" =>         // line 265
($context["thursday"] ?? null)], ["id" => 5, "name" =>         // line 266
($context["friday"] ?? null)], ["id" => 6, "name" =>         // line 267
($context["saturday"] ?? null)], ["id" => 7, "name" =>         // line 268
($context["sunday"] ?? null)]];
        // line 270
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["recurrenceRepeatsOn[]", "dropdownmulti", "", "", ($context["options"] ?? null), "id", "name", ($context["helpText"] ?? null), "repeat-weekly-control-group"], 270, $context, $this->getSourceContext());
        echo "

                        ";
        // line 272
        ob_start(function () { return ''; });
        echo __("Should this Event Repeat by Day of the month (eg. Monthly on Day 21) or by a Weekday in the month (eg. Monthly on the third Thursday).");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 273
        echo "                        ";
        $context["attributes"] = [["name" => "data-trans-day", "value" => __("on the [DAY] day")], ["name" => "data-trans-weekday", "value" => __("on the [POSITION] [WEEKDAY]")]];
        // line 277
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["recurrenceMonthlyRepeatsOn", "single", "", 0, [], "id", "name", ($context["helpText"] ?? null), "repeat-monthly-control-group", "", "", "", ($context["attributes"] ?? null)], 277, $context, $this->getSourceContext());
        echo "

                        ";
        // line 279
        ob_start(function () { return ''; });
        echo __("Every");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 280
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Include a number to determine the Repeat frequency required for this Event.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 281
        echo "                        <div class=\"form-group row repeat-control-group\">
                            <label class=\"col-sm-2 control-label\" for=\"recurrenceDetail\">";
        // line 282
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <div class=\"input-group\">
                                    <input class=\"form-control\" name=\"recurrenceDetail\" type=\"number\" id=\"recurrenceDetail\" value=\"";
        // line 285
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "recurrenceDetail", [], "any", false, false, false, 285), "html", null, true);
        echo "\" />
                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text input-group-addon\"></span>
                                    </div>
                                </div>
                                <span class=\"form-text text-muted\">";
        // line 290
        echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
        echo "</span>
                            </div>
                        </div>

                        ";
        // line 294
        ob_start(function () { return ''; });
        echo __("Until");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 295
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Provide a date and time to end the Repeat for this Event. Leave empty to Repeat indefinitely.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 296
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dateTime", ["recurrenceRange", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "repeat-control-group", "", ""], 296, $context, $this->getSourceContext());
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"reminders\">
                        ";
        // line 300
        ob_start(function () { return ''; });
        echo __("Use the form fields below to create a set of reminders for this event. New fields can be added by clicking on the + icon at the end of the row. Use the tick box to receive a notification by email alternatively reminders will be shown in the message center.");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 301
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null)], 301, $context, $this->getSourceContext());
        echo "
                        <div id=\"reminderFields\" data-reminders=\"";
        // line 302
        echo twig_escape_filter($this->env, json_encode(($context["reminders"] ?? null)), "html", null, true);
        echo "\"></div>
                    </div>

                    <div class=\"tab-pane\" id=\"geoSchedule\">
                        ";
        // line 306
        ob_start(function () { return ''; });
        echo __("Geo Schedule?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 307
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Should this event be location aware? Enable this checkbox and select an area by drawing a polygon or rectangle layer on the map below.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 308
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["isGeoAware", ($context["title"] ?? null), 0, ($context["helpText"] ?? null), ""], 308, $context, $this->getSourceContext());
        echo "

                        <div id=\"geoScheduleMap\" style=\"height: 500px; width: 100%\" class=\"d-none\"></div>

                        ";
        // line 312
        echo twig_call_macro($macros["forms"], "macro_hidden", ["geoLocation", ""], 312, $context, $this->getSourceContext());
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"tab-criteria\">
                        ";
        // line 316
        ob_start(function () { return ''; });
        echo __("Set criteria to determine when this event is active. All conditions must be true for an event to be included in the schedule loop. Events without criteria are always active.");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 317
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null)], 317, $context, $this->getSourceContext());
        echo "

                        <div class=\"form-criteria-field-headings\">
                            <div class=\"form-group row\">
                                <div class=\"col-form-label col-sm-2\">";
        // line 321
        echo twig_escape_filter($this->env, __("Type"), "html", null, true);
        echo "</div>
                                <div class=\"col-form-label col-sm-2\">";
        // line 322
        echo twig_escape_filter($this->env, __("Metric"), "html", null, true);
        echo "</div>
                                <div class=\"col-form-label col-sm-3\">";
        // line 323
        echo twig_escape_filter($this->env, __("Condition"), "html", null, true);
        echo "</div>
                                <div class=\"col-form-label col-sm-2\">";
        // line 324
        echo twig_escape_filter($this->env, __("Value"), "html", null, true);
        echo "</div>
                            </div>
                        </div>

                        <div id=\"scheduleCriteriaFields\" data-criteria=\"\" data-schedule-criteria=\"";
        // line 328
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
        return "schedule-form-add.twig";
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
        return array (  919 => 328,  912 => 324,  908 => 323,  904 => 322,  900 => 321,  892 => 317,  888 => 316,  881 => 312,  873 => 308,  868 => 307,  864 => 306,  857 => 302,  852 => 301,  848 => 300,  840 => 296,  835 => 295,  831 => 294,  824 => 290,  816 => 285,  810 => 282,  807 => 281,  802 => 280,  798 => 279,  792 => 277,  789 => 273,  785 => 272,  779 => 270,  777 => 268,  776 => 267,  775 => 266,  774 => 265,  773 => 264,  772 => 263,  771 => 262,  769 => 261,  764 => 260,  759 => 259,  754 => 258,  749 => 257,  744 => 256,  739 => 255,  734 => 254,  730 => 253,  724 => 251,  722 => 249,  721 => 248,  720 => 247,  719 => 246,  718 => 245,  717 => 244,  716 => 243,  714 => 242,  709 => 241,  704 => 240,  699 => 239,  694 => 238,  689 => 237,  684 => 236,  679 => 235,  674 => 234,  670 => 233,  662 => 229,  657 => 228,  653 => 227,  647 => 225,  641 => 224,  637 => 223,  631 => 221,  626 => 220,  622 => 219,  616 => 217,  611 => 216,  607 => 215,  601 => 213,  596 => 212,  592 => 211,  586 => 209,  584 => 202,  581 => 201,  576 => 200,  572 => 199,  566 => 197,  563 => 190,  558 => 189,  554 => 188,  548 => 186,  546 => 179,  543 => 178,  538 => 177,  534 => 176,  528 => 174,  523 => 173,  519 => 172,  513 => 170,  511 => 168,  510 => 167,  508 => 166,  503 => 165,  498 => 164,  493 => 163,  489 => 162,  482 => 158,  474 => 153,  468 => 150,  459 => 144,  453 => 143,  445 => 140,  440 => 138,  435 => 137,  430 => 136,  426 => 135,  420 => 133,  415 => 132,  411 => 131,  405 => 129,  400 => 128,  396 => 127,  393 => 126,  390 => 118,  384 => 115,  379 => 114,  375 => 113,  369 => 111,  364 => 110,  360 => 109,  352 => 107,  347 => 106,  343 => 105,  337 => 103,  332 => 102,  328 => 101,  322 => 99,  317 => 98,  313 => 97,  307 => 95,  302 => 94,  298 => 93,  292 => 91,  287 => 90,  283 => 89,  276 => 85,  273 => 84,  263 => 82,  259 => 81,  254 => 80,  249 => 79,  245 => 78,  239 => 75,  236 => 74,  231 => 73,  227 => 72,  221 => 70,  218 => 62,  213 => 61,  209 => 60,  205 => 58,  199 => 56,  194 => 55,  189 => 54,  183 => 52,  181 => 51,  175 => 49,  170 => 48,  166 => 47,  160 => 44,  156 => 43,  152 => 42,  148 => 41,  144 => 40,  140 => 39,  136 => 38,  131 => 37,  126 => 36,  122 => 35,  117 => 33,  113 => 32,  109 => 31,  105 => 30,  101 => 29,  96 => 26,  92 => 25,  85 => 22,  79 => 20,  77 => 19,  72 => 18,  68 => 17,  61 => 15,  56 => 12,  52 => 11,  47 => 8,  45 => 9,  38 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "schedule-form-add.twig", "/var/www/html/cms_ubi/views/schedule-form-add.twig");
    }
}
