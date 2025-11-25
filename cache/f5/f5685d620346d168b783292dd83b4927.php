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

/* schedule-form-templates.twig */
class __TwigTemplate_910b49c8c400f5943af5df80ce7642f5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "schedule-form-templates.twig", 1)->unwrap();
        // line 15
        echo "
<script type=\"text/x-handlebars-template\" id=\"reminderEventTemplate\">
            <div class=\"form-group row\">
                <input class=\"form-control\" name=\"reminder_scheduleReminderId[]\" type=\"hidden\" value=\"{{ scheduleReminderId }}\" />

                <div class=\"col-sm-2\">
                    <label for=\"reminder_value[]\">
                        <input class=\"form-control\" name=\"reminder_value[]\" type=\"number\" value=\"{{ value }}\" />
                    </label>
                </div>
                <div class=\"col-sm-2\">
                    <label for=\"reminder_type[]\">
                        <select class=\"form-control\" name=\"reminder_type[]\">
                            <option value=\"1\" {{#eq type 1}}selected{{/eq}}>";
        echo __("Minute");
        // line 16
        echo "</option>
                            <option value=\"2\" {{#eq type 2}}selected{{/eq}}>";
        echo __("Hour");
        // line 17
        echo "</option>
                            <option value=\"3\" {{#eq type 3}}selected{{/eq}}>";
        echo __("Day");
        // line 18
        echo "</option>
                            <option value=\"4\" {{#eq type 4}}selected{{/eq}}>";
        echo __("Week");
        // line 19
        echo "</option>
                            <option value=\"5\" {{#eq type 5}}selected{{/eq}}>";
        echo __("Month");
        // line 26
        echo "</option>
                        </select>
                    </label>
                </div>
                <div class=\"col-sm-3\">
                    <label for=\"reminder_option[]\">
                        <select class=\"form-control\" name=\"reminder_option[]\">
                            <option value=\"1\" {{#eq option 1}}selected{{/eq}}>";
        echo __("Before schedule starts");
        // line 27
        echo "</option>
                            <option value=\"2\" {{#eq option 2}}selected{{/eq}}>";
        echo __("After schedule starts");
        // line 28
        echo "</option>
                            <option value=\"3\" {{#eq option 3}}selected{{/eq}}>";
        echo __("Before schedule ends");
        // line 29
        echo "</option>
                            <option value=\"4\" {{#eq option 4}}selected{{/eq}}>";
        echo __("After schedule ends");
        // line 36
        echo "</option>
                        </select>
                    </label>
                </div>
                <div class=\"col-sm-3\">
                    <label for=\"reminder_isEmail[]\">
                        <input type=\"checkbox\" name=\"reminder_isEmail[]\" {{#eq isEmail 1}}checked{{/eq}}/>
                        ";
        echo __("Notify by email?");
        // line 46
        echo "
                        <input type=\"hidden\" name=\"reminder_isEmailHidden[]\" />
                    </label>
                </div>
                <div class=\"col-sm-2\">
                    <button class=\"btn btn-white\"><i class=\"fa {{ buttonGlyph }}\"></i></button>
                </div>
            </div>
</script>

";
        echo "
<script type=\"text/x-handlebars-template\" id=\"full-screen-schedule-template\">
            <!-- Modal -->
            <div id=\"full-screen-schedule-modal\" class=\"modal fade inner-modal\" role=\"dialog\">
                <div class=\"modal-dialog modal-md modal-dialog-centered\">
                    <!-- Modal content-->
                    <div class=\"modal-content\">
                        <div class=\"modal-header bg-light\">
                            <h4 class=\"modal-title\">";
        // line 54
        echo "{{#eq type \"Media\"}}";
        echo __("Select Media");
        echo "{{/eq}}{{#eq type \"Playlist\"}}";
        echo "
                             ";
        // line 55
        echo __("Select Playlist");
        echo "{{/eq}}";
        echo "</h4>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        </div>
                        <div class=\"modal-body\">
                            <form id=\"scheduleFullScreenForm\" autocomplete=\"off\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.add.full.screen.schedule"), "html", null, true);
        echo "\"
                             data-full-screen-url=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.add.full.screen.schedule"), "html", null, true);
        echo "\">
                            ";
        // line 64
        echo "
                                <input type=\"hidden\" id=\"eventTypeId\" value=\"{{ eventTypeId }}\">
                            {{#eq type \"Media\"}}
                            ";
        echo "
                                ";
        // line 65
        ob_start(function () { return ''; });
        echo __("Media");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 66
        echo "                                ";
        ob_start(function () { return ''; });
        echo __("Select a Media file from the Library to use. The selected file will be shown full screen for this event.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        echo "                                ";
        $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search") . "?fullScreenScheduleCheck=true&types[]=image&types[]=video")], ["name" => "data-search-term", "value" => "media"], ["name" => "data-id-property", "value" => "mediaId"], ["name" => "data-text-property", "value" => "name"], ["name" => "data-additional-property", "value" => "hasFullScreenLayout"], ["name" => "data-initial-key", "value" => "mediaId"], ["name" => "data-initial-value", "value" =>         // line 75
($context["mediaId"] ?? null)]];
        // line 77
        echo "                                ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["mediaId", "single", ($context["title"] ?? null), "", null, "mediaId", "name", ($context["helpText"] ?? null), "pagedSelect media-control", "", "", "", ($context["attributes"] ?? null), "", "", "", ($context["readonlySelect"] ?? null)], 77, $context, $this->getSourceContext());
        echo "

                                ";
        // line 82
        echo "
                                 {{/eq}}
                                 {{#eq type \"Playlist\"}}
                                 ";
        echo "
                                ";
        // line 83
        ob_start(function () { return ''; });
        echo __("Playlist");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        echo "                                ";
        ob_start(function () { return ''; });
        echo __("Select a Playlist to use. The selected playlist will be shown full screen for this event.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 85
        echo "                                ";
        $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.search") . "?fullScreenScheduleCheck=true")], ["name" => "data-search-term", "value" => "name"], ["name" => "data-id-property", "value" => "playlistId"], ["name" => "data-text-property", "value" => "name"], ["name" => "data-additional-property", "value" => "hasFullScreenLayout"], ["name" => "data-initial-key", "value" => "playlistId"], ["name" => "data-initial-value", "value" =>         // line 93
($context["playlistId"] ?? null)]];
        // line 95
        echo "                                ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["playlistId", "single", ($context["title"] ?? null), "", null, "playlistId", "name", ($context["helpText"] ?? null), "pagedSelect playlist-control", "", "", "", ($context["attributes"] ?? null), "", "", "", ($context["readonlySelect"] ?? null)], 95, $context, $this->getSourceContext());
        echo "
                                ";
        // line 98
        echo "
                                {{/eq}}
                                ";
        echo "

                                ";
        // line 100
        ob_start(function () { return ''; });
        echo __("Duration in loop");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 101
        echo "                                ";
        ob_start(function () { return ''; });
        echo __("Set how long this item should be shown each time it appears in the schedule. Leave blank to use the Media Duration set in the Library");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 102
        echo "                                ";
        echo twig_call_macro($macros["forms"], "macro_number", ["layoutDuration", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "media-control no-full-screen-layout"], 102, $context, $this->getSourceContext());
        echo "

                                ";
        // line 104
        ob_start(function () { return ''; });
        echo __("Resolution");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 105
        echo "                                ";
        ob_start(function () { return ''; });
        echo __("Optionally select a Resolution to use for the selected Media. Leave blank to match with an existing Resolution closest in size to the selected media.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 106
        echo "                                ";
        $context["attributes"] = [["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("resolution.search")], ["name" => "data-search-term", "value" => "resolution"], ["name" => "data-id-property", "value" => "resolutionId"], ["name" => "data-text-property", "value" => "resolution"], ["name" => "data-trans-media-help-text", "value" => __("Optionally select a Resolution to use for the selected Media. Leave blank to match with an existing Resolution closest in size to the selected media.")], ["name" => "data-trans-playlist-help-text", "value" => __("Optionally select a Resolution to use for the selected Playlist. Leave blank to default to a 1080p Resolution")]];
        // line 114
        echo "                                ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["resolutionId", "single", ($context["title"] ?? null), "", null, "resolutionId", "resolution", ($context["helpText"] ?? null), "pagedSelect media-playlist-control resolution-control no-full-screen-layout", "", "", "", ($context["attributes"] ?? null)], 114, $context, $this->getSourceContext());
        echo "

                                ";
        // line 116
        ob_start(function () { return ''; });
        echo __("Background Colour");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 117
        echo "                                ";
        ob_start(function () { return ''; });
        echo __("Optionally set a colour to use as a background for if the item selected does not fill the entire screen");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 118
        echo "                                ";
        echo twig_call_macro($macros["forms"], "macro_colorPicker", ["backgroundColor", ($context["title"] ?? null), "#000", ($context["helpText"] ?? null), "media-playlist-control no-full-screen-layout"], 118, $context, $this->getSourceContext());
        echo "
                            </form>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"btnFullScreenLayoutConfirm\">";
        // line 122
        echo __("Save");
        echo "</button>
                        </div>
                    </div>
                </div>
            </div>

</script>

";
        // line 138
        echo "
<script type=\"text/x-handlebars-template\" id=\"templateScheduleCriteriaFields\">
    <div class=\"form-group row\">
        <input class=\"form-control\" name=\"criteria_id[]\" type=\"hidden\" value=\"{{ id }}\" />
        <div class=\"col-sm-2\">
            <label for=\"criteria_type[]\">
                <select class=\"form-control\" name=\"criteria_type[]\">
                    <option value=\"custom\" {{#eq type \"custom\"}}selected{{/eq}}>";
        echo __("Custom");
        // line 150
        echo "</option>
                </select>
            </label>
        </div>
        <div class=\"col-sm-2\">
            <label for=\"criteria_metric[]\">
                <input class=\"form-control\" name=\"criteria_metric[]\" type=\"text\" value=\"{{ metric }}\" />
            </label>
        </div>
        <div class=\"col-sm-3\">
            <label for=\"criteria_condition[]\">
                <select class=\"form-control\" name=\"criteria_condition[]\">
                    <option value=\"set\" {{#eq condition \"set\"}}selected{{/eq}}>";
        echo __("Is set");
        // line 151
        echo "</option>
                    <option value=\"lt\" {{#eq condition \"lt\"}}selected{{/eq}}>";
        echo __("Less than");
        // line 152
        echo "</option>
                    <option value=\"lte\" {{#eq condition \"lte\"}}selected{{/eq}}>";
        echo __("Less than or equal to");
        // line 153
        echo "</option>
                    <option value=\"eq\" {{#eq condition \"eq\"}}selected{{/eq}}>";
        echo __("Equal to");
        // line 154
        echo "</option>
                    <option value=\"neq\" {{#eq condition \"neq\"}}selected{{/eq}}>";
        echo __("Not equal to");
        // line 155
        echo "</option>
                    <option value=\"gte\" {{#eq condition \"gte\"}}selected{{/eq}}>";
        echo __("Greater than or equal to");
        // line 156
        echo "</option>
                    <option value=\"gt\" {{#eq condition \"gt\"}}selected{{/eq}}>";
        echo __("Greater than");
        // line 157
        echo "</option>
                    <option value=\"contains\" {{#eq condition \"contains\"}}selected{{/eq}}>";
        echo __("Contains");
        // line 158
        echo "</option>
                    <option value=\"ncontains\" {{#eq condition \"ncontains\"}}selected{{/eq}}>";
        echo __("Not contains");
        // line 172
        echo "</option>
                </select>
            </label>
        </div>
        <div class=\"col-sm-2\">
            <label for=\"criteria_value[]\">
                <input class=\"form-control\" name=\"criteria_value[]\" type=\"text\" value=\"{{ value }}\" />
            </label>
        </div>
        <div class=\"col-sm-2\">
            <button class=\"btn btn-white\" data-is-add=\"{{isAdd}}\"><i class=\"fa {{#if isAdd}}fa-plus{{else}}fa-minus{{/if}}\"></i></button>
        </div>
    </div>
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "schedule-form-templates.twig";
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
        return array (  322 => 172,  318 => 158,  314 => 157,  310 => 156,  306 => 155,  302 => 154,  298 => 153,  294 => 152,  290 => 151,  275 => 150,  265 => 138,  254 => 122,  246 => 118,  241 => 117,  237 => 116,  231 => 114,  228 => 106,  223 => 105,  219 => 104,  213 => 102,  208 => 101,  204 => 100,  197 => 98,  192 => 95,  190 => 93,  188 => 85,  183 => 84,  179 => 83,  172 => 82,  166 => 77,  164 => 75,  162 => 67,  157 => 66,  153 => 65,  146 => 64,  142 => 60,  138 => 59,  130 => 55,  124 => 54,  103 => 46,  93 => 36,  89 => 29,  85 => 28,  81 => 27,  71 => 26,  67 => 19,  63 => 18,  59 => 17,  55 => 16,  39 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "schedule-form-templates.twig", "/var/www/html/cms_ubi/views/schedule-form-templates.twig");
    }
}
