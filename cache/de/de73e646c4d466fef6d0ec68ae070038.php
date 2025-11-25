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

/* displayprofile-form-edit-android.twig */
class __TwigTemplate_7303b9f8d14fc5108a5f01b28228c5ed extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'formHtml' => [$this, 'block_formHtml'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "displayprofile-form-edit-android.twig", 8)->unwrap();
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('formHtml', $context, $blocks);
    }

    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\">";
        // line 14
        echo __("General");
        echo "</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#network\" role=\"tab\" data-toggle=\"tab\">";
        // line 15
        echo __("Network");
        echo "</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#location\" role=\"tab\" data-toggle=\"tab\">";
        // line 16
        echo __("Location");
        echo "</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#troubleshooting\" role=\"tab\" data-toggle=\"tab\">";
        // line 17
        echo __("Troubleshooting");
        echo "</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#advanced\" role=\"tab\" data-toggle=\"tab\">";
        // line 18
        echo __("Advanced");
        echo "</a></li>
            ";
        // line 19
        if ((twig_length_filter($this->env, ($context["commands"] ?? null)) > 0)) {
            // line 20
            echo "                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#commands\" role=\"tab\" data-toggle=\"tab\">";
            echo __("Commands");
            echo "</a></li>
            ";
        }
        // line 22
        echo "        </ul>
        <form id=\"displayProfileForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayProfile.edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "displayProfileId", [], "any", false, false, false, 23)]), "html", null, true);
        echo "\">
            <div class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"general\">
                    ";
        // line 26
        echo twig_include($this->env, $context, "displayprofile-form-edit-common-fields.twig");
        echo "

                    ";
        // line 28
        $context["title"] = __("Licence Code");
        // line 29
        echo "                    ";
        $context["helpText"] = __("Provide the Licence Code (formerly Licence email address) to license Players using this Display Profile.");
        // line 30
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_email", ["emailAddress", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["emailAddress"], "method", false, false, false, 30), ($context["helpText"] ?? null)], 30, $context, $this->getSourceContext());
        echo "

                    ";
        // line 32
        $context["title"] = __("Password Protect Settings");
        // line 33
        echo "                    ";
        $context["helpText"] = __("Provide a Password which will be required to access settings");
        // line 34
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_input", ["settingsPassword", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["settingsPassword"], "method", false, false, false, 34), ($context["helpText"] ?? null)], 34, $context, $this->getSourceContext());
        echo "

                    ";
        // line 36
        $context["title"] = __("Collect interval");
        // line 37
        echo "                    ";
        $context["helpText"] = __("How often should the Player check for new content.");
        // line 38
        echo "                    ";
        $context["options"] = [["id" => 60, "value" => __("1 minute")], ["id" => 300, "value" => __("5 minutes")], ["id" => 600, "value" => __("10 minutes")], ["id" => 1800, "value" => __("30 minutes")], ["id" => 3600, "value" => __("1 hour")], ["id" => 5400, "value" => __("1 hour 30 minutes")], ["id" => 7200, "value" => __("2 hours")], ["id" => 9000, "value" => __("2 hours 30 minutes")], ["id" => 10800, "value" => __("3 hours")], ["id" => 12600, "value" => __("3 hours 30 minutes")], ["id" => 14400, "value" => __("4 hours")], ["id" => 18000, "value" => __("5 hours")], ["id" => 21600, "value" => __("6 hours")], ["id" => 25200, "value" => __("7 hours")], ["id" => 28800, "value" => __("8 hours")], ["id" => 32400, "value" => __("9 hours")], ["id" => 36000, "value" => __("10 hours")], ["id" => 39600, "value" => __("11 hours")], ["id" => 43200, "value" => __("12 hours")], ["id" => 86400, "value" => __("24 hours")]];
        // line 60
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["collectInterval", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["collectInterval"], "method", false, false, false, 60), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 60, $context, $this->getSourceContext());
        echo "

                    ";
        // line 62
        $context["title"] = __("XMR Public Address");
        // line 63
        echo "                    ";
        $context["helpText"] = __("Please enter the public address for XMR.");
        // line 64
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_input", ["xmrNetworkAddress", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["xmrNetworkAddress"], "method", false, false, false, 64), ($context["helpText"] ?? null)], 64, $context, $this->getSourceContext());
        echo "

                    ";
        // line 66
        $context["title"] = __("Enable stats reporting?");
        // line 67
        echo "                    ";
        $context["helpText"] = __("Should the application send proof of play stats to the CMS.");
        // line 68
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["statsEnabled", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["statsEnabled"], "method", false, false, false, 68), ($context["helpText"] ?? null)], 68, $context, $this->getSourceContext());
        echo "

                    ";
        // line 70
        $context["title"] = __("Aggregation level");
        // line 71
        echo "                    ";
        $context["helpText"] = __("Set the level of collection for Proof of Play Statistics to be applied to selected Layouts / Media and Widget items.");
        // line 72
        echo "                    ";
        $context["options"] = [["id" => "Individual", "value" => __("Individual")], ["id" => "Hourly", "value" => __("Hourly")], ["id" => "Daily", "value" => __("Daily")]];
        // line 77
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["aggregationLevel", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["aggregationLevel"], "method", false, false, false, 77), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null), "aggregation-level"], 77, $context, $this->getSourceContext());
        echo "

                    ";
        // line 79
        $context["title"] = __("Record geolocation on each Proof of Play?");
        // line 80
        echo "                    ";
        $context["helpText"] = __("If the geolocation of the Display is known, enable to record that location against each proof of play record.");
        // line 81
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["isRecordGeoLocationOnProofOfPlay", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["isRecordGeoLocationOnProofOfPlay"], "method", false, false, false, 81), ($context["helpText"] ?? null)], 81, $context, $this->getSourceContext());
        echo "

                    ";
        // line 83
        $context["title"] = __("Player Version");
        // line 84
        echo "                    ";
        $context["helpText"] = __("Set the Player Version to install, making sure that the selected version is suitable for your device");
        // line 85
        echo "                    ";
        $context["attributes"] = [["name" => "data-width", "value" => "300px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playersoftware.search")], ["name" => "data-search-term", "value" => "playerShowVersion"], ["name" => "data-id-property", "value" => "versionId"], ["name" => "data-text-property", "value" => "playerShowVersion"], ["name" => "data-filter-options", "value" => "{\"playerType\":\"android\"}"]];
        // line 96
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["versionMediaId", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["versionMediaId"], "method", false, false, false, 96), twig_array_merge([["versionId" => null, "playerShowVersion" => ""]], ($context["versions"] ?? null)), "versionId", "playerShowVersion", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 96, $context, $this->getSourceContext());
        echo "
                </div>

                <div class=\"tab-pane\" id=\"network\">

                    ";
        // line 101
        $context["title"] = __("Download Window Start Time");
        // line 102
        echo "                    ";
        $context["helpText"] = __("The start of the time window to connect to the CMS and download updates.");
        // line 103
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_time", ["downloadStartWindow", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["downloadStartWindow"], "method", false, false, false, 103), ($context["helpText"] ?? null), "", "", "", "HH:mm"], 103, $context, $this->getSourceContext());
        echo "

                    ";
        // line 105
        $context["title"] = __("Download Window End Time");
        // line 106
        echo "                    ";
        $context["helpText"] = __("The end of the time window to connect to the CMS and download updates.");
        // line 107
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_time", ["downloadEndWindow", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["downloadEndWindow"], "method", false, false, false, 107), ($context["helpText"] ?? null), "", "", "", "HH:mm"], 107, $context, $this->getSourceContext());
        echo "

                    ";
        // line 109
        $context["title"] = __("Update Window Start Time");
        // line 110
        echo "                    ";
        $context["helpText"] = __("The start of the time window to install application updates.");
        // line 111
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_time", ["updateStartWindow", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["updateStartWindow"], "method", false, false, false, 111), ($context["helpText"] ?? null), "", "", "", "HH:mm"], 111, $context, $this->getSourceContext());
        echo "

                    ";
        // line 113
        $context["title"] = __("Update Window End Time");
        // line 114
        echo "                    ";
        $context["helpText"] = __("The end of the time window to install application updates.");
        // line 115
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_time", ["updateEndWindow", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["updateEndWindow"], "method", false, false, false, 115), ($context["helpText"] ?? null), "", "", "", "HH:mm"], 115, $context, $this->getSourceContext());
        echo "

                    ";
        // line 117
        $context["title"] = __("Force HTTPS?");
        // line 118
        echo "                    ";
        $context["helpText"] = __("Should Displays be forced to use HTTPS connection to the CMS?");
        // line 119
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["forceHttps", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["forceHttps"], "method", false, false, false, 119), ($context["helpText"] ?? null)], 119, $context, $this->getSourceContext());
        echo "

                    ";
        // line 121
        $context["title"] = __("Operating Hours");
        // line 122
        echo "                    ";
        $context["helpText"] = __("Select a day part that should act as operating hours for this display -  email alerts will not be sent outside of operating hours");
        // line 123
        echo "                    ";
        $context["attributes"] = [["name" => "data-width", "value" => "300px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("daypart.search")], ["name" => "data-search-term", "value" => "name"], ["name" => "data-id-property", "value" => "dayPartId"], ["name" => "data-text-property", "value" => "name"], ["name" => "data-filter-options", "value" => "{\"isAlways\":\"0\", \"isCustom\":\"0\"}"]];
        // line 134
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["dayPartId", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["dayPartId"], "method", false, false, false, 134), twig_array_merge([["dayPartId" => null, "name" => ""]], ($context["dayParts"] ?? null)), "dayPartId", "name", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 134, $context, $this->getSourceContext());
        echo "

                    ";
        // line 136
        $context["title"] = __("Restart Wifi on connection failure?");
        // line 137
        echo "                    ";
        $context["helpText"] = __("If an attempted connection to the CMS fails 10 times in a row, restart the Wifi adaptor.");
        // line 138
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["restartWifiOnConnectionFailure", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["restartWifiOnConnectionFailure"], "method", false, false, false, 138), ($context["helpText"] ?? null)], 138, $context, $this->getSourceContext());
        echo "
                </div>

                <div class=\"tab-pane\" id=\"location\">

                    ";
        // line 143
        $context["title"] = __("Orientation");
        // line 144
        echo "                    ";
        $context["helpText"] = __("Set the orientation of the device (portrait mode will only work if supported by the hardware) Application Restart Required.");
        // line 145
        echo "                    ";
        $context["options"] = [["id" =>  -1, "value" => __("Device Default")], ["id" => 0, "value" => __("Landscape")], ["id" => 1, "value" => __("Portrait")], ["id" => 8, "value" => __("Reverse Landscape")], ["id" => 9, "value" => __("Reverse Portrait")]];
        // line 152
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["orientation", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["orientation"], "method", false, false, false, 152), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 152, $context, $this->getSourceContext());
        echo "

                    ";
        // line 154
        $context["title"] = __("Screen Dimensions");
        // line 155
        echo "                    ";
        $context["helpText"] = __("Set dimensions to be used for the Player window ensuring that they do not exceed the actual screen size. Enter the following values representing the pixel sizings for; Top,Left,Width,Height. This requires a Player Restart to action.");
        // line 156
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_input", ["screenDimensions", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["screenDimensions"], "method", false, false, false, 156), ($context["helpText"] ?? null)], 156, $context, $this->getSourceContext());
        echo "

                </div>

                <div class=\"tab-pane\" id=\"troubleshooting\">

                    ";
        // line 162
        $context["title"] = __("Blacklist Videos?");
        // line 163
        echo "                    ";
        $context["helpText"] = __("Should Videos we fail to play be blacklisted and no longer attempted?");
        // line 164
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["blacklistVideo", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["blacklistVideo"], "method", false, false, false, 164), ($context["helpText"] ?? null)], 164, $context, $this->getSourceContext());
        echo "

                    ";
        // line 166
        $context["title"] = __("Store HTML resources on the Internal Storage?");
        // line 167
        echo "                    ";
        $context["helpText"] = __("Store all HTML resources on the Internal Storage? Should be selected if the device cannot display text, ticker, dataset media.");
        // line 168
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["storeHtmlOnInternal", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["storeHtmlOnInternal"], "method", false, false, false, 168), ($context["helpText"] ?? null)], 168, $context, $this->getSourceContext());
        echo "

                    ";
        // line 170
        $context["title"] = __("Use a SurfaceView for Video Rendering?");
        // line 171
        echo "                    ";
        $context["helpText"] = __("If the device is having trouble playing video, it may be useful to switch to a Surface View for Video Rendering.");
        // line 172
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["useSurfaceVideoView", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["useSurfaceVideoView"], "method", false, false, false, 172), ($context["helpText"] ?? null)], 172, $context, $this->getSourceContext());
        echo "

                    ";
        // line 174
        $context["title"] = __("Log Level");
        // line 175
        echo "                    ";
        $context["helpText"] = __("The resting logging level that should be recorded by the Player.");
        // line 176
        echo "                    ";
        $context["options"] = [["id" => "emergency", "value" => __("Emergency")], ["id" => "alert", "value" => __("Alert")], ["id" => "critical", "value" => __("Critical")], ["id" => "error", "value" => __("Error")], ["id" => "off", "value" => __("Off")]];
        // line 183
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["logLevel", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["logLevel"], "method", false, false, false, 183), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 183, $context, $this->getSourceContext());
        echo "

                    ";
        // line 185
        ob_start(function () { return ''; });
        echo __("Elevate Logging until");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 186
        echo "                    ";
        ob_start(function () { return ''; });
        echo __("Elevate log level for the specified time. Should only be used if there is a problem with the display.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 187
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "isElevatedLogging", [], "method", false, false, false, 187)) {
            // line 188
            echo "                        ";
            $context["elevatedLogs"] = twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getUnmatchedProperty", ["elevateLogsUntilIso"], "method", false, false, false, 188);
            // line 189
            echo "                    ";
        } else {
            // line 190
            echo "                        ";
            $context["elevatedLogs"] = "";
            // line 191
            echo "                    ";
        }
        // line 192
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_dateTime", ["elevateLogsUntil", ($context["title"] ?? null), ($context["elevatedLogs"] ?? null), ($context["helpText"] ?? null)], 192, $context, $this->getSourceContext());
        echo "

                </div>

                <div class=\"tab-pane\" id=\"advanced\">

                    ";
        // line 198
        $context["title"] = __("Start during device start up?");
        // line 199
        echo "                    ";
        $context["helpText"] = __("When the device starts and Android finishes loading, should the Player start up and come to the foreground?");
        // line 200
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["startOnBoot", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["startOnBoot"], "method", false, false, false, 200), ($context["helpText"] ?? null)], 200, $context, $this->getSourceContext());
        echo "

                    ";
        // line 202
        $context["title"] = __("Action Bar Mode");
        // line 203
        echo "                    ";
        $context["helpText"] = __("How should the action bar behave?");
        // line 204
        echo "                    ";
        $context["options"] = [["id" => 0, "value" => __("Hide")], ["id" => 1, "value" => __("Timed")], ["id" => 2, "value" => __("Run Intent")]];
        // line 209
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["actionBarMode", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["actionBarMode"], "method", false, false, false, 209), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 209, $context, $this->getSourceContext());
        echo "

                    ";
        // line 211
        $context["title"] = __("Action Bar Display Duration");
        // line 212
        echo "                    ";
        $context["helpText"] = __("How long should the Action Bar be shown for, in seconds?");
        // line 213
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_number", ["actionBarDisplayDuration", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["actionBarDisplayDuration"], "method", false, false, false, 213), ($context["helpText"] ?? null)], 213, $context, $this->getSourceContext());
        echo "

                    ";
        // line 215
        $context["title"] = __("Action Bar Intent");
        // line 216
        echo "                    ";
        $context["helpText"] = __("When set to Run Intent, which intent should be run. Format is: Action|ExtraKey,ExtraMsg");
        // line 217
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_input", ["actionBarIntent", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["actionBarIntent"], "method", false, false, false, 217), ($context["helpText"] ?? null)], 217, $context, $this->getSourceContext());
        echo "

                    ";
        // line 219
        $context["title"] = __("Automatic Restart");
        // line 220
        echo "                    ";
        $context["helpText"] = __("Automatically Restart the application if we detect it is not visible.");
        // line 221
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["autoRestart", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["autoRestart"], "method", false, false, false, 221), ($context["helpText"] ?? null)], 221, $context, $this->getSourceContext());
        echo "

                    ";
        // line 223
        $context["title"] = __("Start delay for device start up");
        // line 224
        echo "                    ";
        $context["helpText"] = __("The number of seconds to wait before starting the application after the device has started. Minimum 10.");
        // line 225
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_number", ["startOnBootDelay", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["startOnBootDelay"], "method", false, false, false, 225), ($context["helpText"] ?? null)], 225, $context, $this->getSourceContext());
        echo "

                    ";
        // line 227
        if ((twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED", 0], "method", false, false, false, 227) == 1)) {
            // line 228
            echo "                        ";
            $context["title"] = __("Notify current layout");
            // line 229
            echo "                        ";
            $context["helpText"] = __("When enabled the Player will send the current layout to the CMS each time it changes. Warning: This is bandwidth intensive and should be disabled unless on a LAN.");
            // line 230
            echo "                        ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["sendCurrentLayoutAsStatusUpdate", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["sendCurrentLayoutAsStatusUpdate"], "method", false, false, false, 230), ($context["helpText"] ?? null)], 230, $context, $this->getSourceContext());
            echo "
                    ";
        }
        // line 232
        echo "
                    ";
        // line 233
        $context["title"] = __("Expire Modified Layouts?");
        // line 234
        echo "                    ";
        $context["helpText"] = __("Expire Modified Layouts immediately on change. This means a layout can be cut during playback if it receives an update from the CMS");
        // line 235
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["expireModifiedLayouts", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["expireModifiedLayouts"], "method", false, false, false, 235), ($context["helpText"] ?? null)], 235, $context, $this->getSourceContext());
        echo "

                    ";
        // line 237
        if ((twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED", 0], "method", false, false, false, 237) == 1)) {
            // line 238
            echo "                        ";
            $context["title"] = __("Screen shot interval");
            // line 239
            echo "                        ";
            $context["helpText"] = __("The duration between status screen shots in minutes. 0 to disable. Warning: This is bandwidth intensive.");
            // line 240
            echo "                        ";
            echo twig_call_macro($macros["forms"], "macro_number", ["screenShotRequestInterval", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["screenShotRequestInterval"], "method", false, false, false, 240), ($context["helpText"] ?? null)], 240, $context, $this->getSourceContext());
            echo "
                    ";
        }
        // line 242
        echo "
                    ";
        // line 243
        $context["title"] = __("Action for Screen Shot Intent");
        // line 244
        echo "                    ";
        $context["helpText"] = __("The Intent Action to use for requesting a screen shot. Leave empty to natively create an image from the player screen content.");
        // line 245
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_input", ["screenShotIntent", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["screenShotIntent"], "method", false, false, false, 245), ($context["helpText"] ?? null)], 245, $context, $this->getSourceContext());
        echo "

                    ";
        // line 247
        $context["title"] = __("Screen Shot Size");
        // line 248
        echo "                    ";
        $context["helpText"] = __("The size of the largest dimension. Empty or 0 means the screen size.");
        // line 249
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_input", ["screenShotSize", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["screenShotSize"], "method", false, false, false, 249), ($context["helpText"] ?? null)], 249, $context, $this->getSourceContext());
        echo "

                    ";
        // line 251
        $context["title"] = __("WebView Plugin State");
        // line 252
        echo "                    ";
        $context["helpText"] = __("What plugin state should be used when starting a web view.");
        // line 253
        echo "                    ";
        $context["options"] = [["id" => "OFF", "value" => __("Off")], ["id" => "DEMAND", "value" => __("On Demand")], ["id" => "ON", "value" => __("On")]];
        // line 258
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["webViewPluginState", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["webViewPluginState"], "method", false, false, false, 258), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 258, $context, $this->getSourceContext());
        echo "

                    ";
        // line 260
        $context["title"] = __("Hardware Accelerate Web Content");
        // line 261
        echo "                    ";
        $context["helpText"] = __("Mode for hardware acceleration of web based content.");
        // line 262
        echo "                    ";
        $context["options"] = [["id" => "0", "value" => __("Off")], ["id" => "2", "value" => __("Off when transparent")], ["id" => "1", "value" => __("On")]];
        // line 267
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["hardwareAccelerateWebViewMode", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["hardwareAccelerateWebViewMode"], "method", false, false, false, 267), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 267, $context, $this->getSourceContext());
        echo "

                    ";
        // line 269
        $context["title"] = __("Use CMS time?");
        // line 270
        echo "                    ";
        $context["helpText"] = __("Set the device time using the CMS. Only available on rooted devices or system signed players.");
        // line 271
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["timeSyncFromCms", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["timeSyncFromCms"], "method", false, false, false, 271), ($context["helpText"] ?? null)], 271, $context, $this->getSourceContext());
        echo "

                    ";
        // line 273
        $context["title"] = __("Enable caching of Web Resources?");
        // line 274
        echo "                    ";
        $context["helpText"] = __("The standard browser cache will be used - we recommend this is switched off unless specifically required. Effects Web Page and Embedded.");
        // line 275
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["webCacheEnabled", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["webCacheEnabled"], "method", false, false, false, 275), ($context["helpText"] ?? null)], 275, $context, $this->getSourceContext());
        echo "

                    ";
        // line 277
        $context["title"] = __("Embedded Web Server Port");
        // line 278
        echo "                    ";
        $context["helpText"] = __("The port number to use for the embedded web server on the Player. Only change this if there is a port conflict reported on the status screen.");
        // line 279
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_number", ["serverPort", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["serverPort"], "method", false, false, false, 279), ($context["helpText"] ?? null)], 279, $context, $this->getSourceContext());
        echo "

                    ";
        // line 281
        $context["title"] = __("Embedded Web Server allow WAN?");
        // line 282
        echo "                    ";
        $context["helpText"] = __("Should we allow access to the Player Embedded Web Server from WAN? You may need to adjust the device firewall to allow external traffic");
        // line 283
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["embeddedServerAllowWan", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["embeddedServerAllowWan"], "method", false, false, false, 283), ($context["helpText"] ?? null)], 283, $context, $this->getSourceContext());
        echo "

                    ";
        // line 285
        $context["title"] = __("Load Link Libraries for APK Update");
        // line 286
        echo "                    ";
        $context["helpText"] = __("Should the update command include dynamic link libraries? Only change this if your updates are failing.");
        // line 287
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["installWithLoadedLinkLibraries", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["installWithLoadedLinkLibraries"], "method", false, false, false, 287), ($context["helpText"] ?? null)], 287, $context, $this->getSourceContext());
        echo "

                    ";
        // line 289
        $context["title"] = __("Use Multiple Video Decoders");
        // line 290
        echo "                    ";
        $context["helpText"] = __("Should the Player try to use Multiple Video Decoders when preparing and showing Video content.");
        // line 291
        echo "                    ";
        $context["options"] = [["id" => "default", "value" => __("Device Default")], ["id" => "on", "value" => __("On")], ["id" => "off", "value" => __("Off")]];
        // line 296
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["isUseMultipleVideoDecoders", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["isUseMultipleVideoDecoders"], "method", false, false, false, 296), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 296, $context, $this->getSourceContext());
        echo "

                    ";
        // line 298
        $context["title"] = __("Maximum Region Count");
        // line 299
        echo "                    ";
        $context["helpText"] = __("This setting is a memory limit protection setting which will stop rendering regions beyond the limit set. Leave at 0 for no limit.");
        // line 300
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_number", ["maxRegionCount", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["maxRegionCount"], "method", false, false, false, 300), ($context["helpText"] ?? null)], 300, $context, $this->getSourceContext());
        echo "

                    ";
        // line 302
        $context["title"] = __("Video Engine");
        // line 303
        echo "                    ";
        $context["helpText"] = __("Select which video engine should be used to playback video. ExoPlayer is usually better, but if you experience issues you can revert back to Android Media Player. HLS always uses ExoPlayer. Available from v3 R300.");
        // line 304
        echo "                    ";
        $context["options"] = [["id" => "default", "value" => __("Device Default")], ["id" => "exoplayer", "value" => __("ExoPlayer")], ["id" => "mediaplayer", "value" => __("Android Media Player")]];
        // line 309
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["videoEngine", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["videoEngine"], "method", false, false, false, 309), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 309, $context, $this->getSourceContext());
        echo "

                    ";
        // line 311
        $context["title"] = __("Enable touch capabilities on the device?");
        // line 312
        echo "                    ";
        $context["helpText"] = __("If this device will be used as a touch screen check this option. Checking this option will cause a message to appear on the player which needs to be manually dismissed once. If this option is disabled, touching the screen will show the action bar according to the Action Bar Mode option. Available from v3 R300.");
        // line 313
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["isTouchEnabled", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", ["isTouchEnabled"], "method", false, false, false, 313), ($context["helpText"] ?? null)], 313, $context, $this->getSourceContext());
        echo "
                </div>

                ";
        // line 316
        if ((twig_length_filter($this->env, ($context["commands"] ?? null)) > 0)) {
            // line 317
            echo "                <div class=\"tab-pane\" id=\"commands\">
                    ";
            // line 318
            $this->loadTemplate("displayprofile-form-edit-command-fields.twig", "displayprofile-form-edit-android.twig", 318)->display($context);
            // line 319
            echo "                </div>
                ";
        }
        // line 321
        echo "            </div>
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
        return "displayprofile-form-edit-android.twig";
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
        return array (  671 => 321,  667 => 319,  665 => 318,  662 => 317,  660 => 316,  653 => 313,  650 => 312,  648 => 311,  642 => 309,  639 => 304,  636 => 303,  634 => 302,  628 => 300,  625 => 299,  623 => 298,  617 => 296,  614 => 291,  611 => 290,  609 => 289,  603 => 287,  600 => 286,  598 => 285,  592 => 283,  589 => 282,  587 => 281,  581 => 279,  578 => 278,  576 => 277,  570 => 275,  567 => 274,  565 => 273,  559 => 271,  556 => 270,  554 => 269,  548 => 267,  545 => 262,  542 => 261,  540 => 260,  534 => 258,  531 => 253,  528 => 252,  526 => 251,  520 => 249,  517 => 248,  515 => 247,  509 => 245,  506 => 244,  504 => 243,  501 => 242,  495 => 240,  492 => 239,  489 => 238,  487 => 237,  481 => 235,  478 => 234,  476 => 233,  473 => 232,  467 => 230,  464 => 229,  461 => 228,  459 => 227,  453 => 225,  450 => 224,  448 => 223,  442 => 221,  439 => 220,  437 => 219,  431 => 217,  428 => 216,  426 => 215,  420 => 213,  417 => 212,  415 => 211,  409 => 209,  406 => 204,  403 => 203,  401 => 202,  395 => 200,  392 => 199,  390 => 198,  380 => 192,  377 => 191,  374 => 190,  371 => 189,  368 => 188,  365 => 187,  360 => 186,  356 => 185,  350 => 183,  347 => 176,  344 => 175,  342 => 174,  336 => 172,  333 => 171,  331 => 170,  325 => 168,  322 => 167,  320 => 166,  314 => 164,  311 => 163,  309 => 162,  299 => 156,  296 => 155,  294 => 154,  288 => 152,  285 => 145,  282 => 144,  280 => 143,  271 => 138,  268 => 137,  266 => 136,  260 => 134,  257 => 123,  254 => 122,  252 => 121,  246 => 119,  243 => 118,  241 => 117,  235 => 115,  232 => 114,  230 => 113,  224 => 111,  221 => 110,  219 => 109,  213 => 107,  210 => 106,  208 => 105,  202 => 103,  199 => 102,  197 => 101,  188 => 96,  185 => 85,  182 => 84,  180 => 83,  174 => 81,  171 => 80,  169 => 79,  163 => 77,  160 => 72,  157 => 71,  155 => 70,  149 => 68,  146 => 67,  144 => 66,  138 => 64,  135 => 63,  133 => 62,  127 => 60,  124 => 38,  121 => 37,  119 => 36,  113 => 34,  110 => 33,  108 => 32,  102 => 30,  99 => 29,  97 => 28,  92 => 26,  86 => 23,  83 => 22,  77 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  50 => 11,  43 => 10,  40 => 9,  38 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "displayprofile-form-edit-android.twig", "/var/www/html/cms_ubi/views/displayprofile-form-edit-android.twig");
    }
}
