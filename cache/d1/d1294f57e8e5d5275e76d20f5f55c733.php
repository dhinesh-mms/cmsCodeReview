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

/* display-form-edit.twig */
class __TwigTemplate_aba93a651623fc3f8fd6890bc14ee064 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'formTitle' => [$this, 'block_formTitle'],
            'formButtons' => [$this, 'block_formButtons'],
            'callBack' => [$this, 'block_callBack'],
            'extra' => [$this, 'block_extra'],
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "display-form-edit.twig", 9)->unwrap();
        // line 8
        $this->parent = $this->loadTemplate("form-base.twig", "display-form-edit.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        echo __("Edit Display");
    }

    // line 15
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    ";
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 17
        echo __("Save");
        echo ", displayEditFormSubmit()
";
    }

    // line 20
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "displayEditFormOpen";
    }

    // line 22
    public function block_extra($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "overrideConfig", [], "any", false, false, false, 22));
    }

    // line 24
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 28
        echo __("General");
        echo "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#location\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 29
        echo __("Details");
        echo "</span></a></li>
                <!-- <li class=\"nav-item\"><a class=\"nav-link\" href=\"#reference\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 30
        echo __("Reference");
        echo "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#maintenance\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 31
        echo __("Maintenance");
        echo "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#wol\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 32
        echo __("Wake on LAN");
        echo "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#settings\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 33
        echo __("Settings");
        echo "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#remote\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 34
        echo __("Remote");
        echo "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#advanced\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 35
        echo __("Advanced");
        echo "</span></a></li> -->
            </ul>
            <form id=\"displayEditForm\" class=\"DisplayForm XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "displayId", [], "any", false, false, false, 37)]), "html", null, true);
        echo "\" data-gettag=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.getByName"), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 40)) {
            // line 41
            echo "                       <!-- <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\">";
            // line 42
            echo __("Current Folder");
            echo "</label>
                            <div class=\"col-sm-10\" style=\"padding-top: 7px\">
                                <span id=\"originalFormFolder\"></span>
                            </div>
                        </div>

                         <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\">";
            // line 49
            echo __("Move to Selected Folder:");
            echo "</label>
                            <div class=\"col-sm-10\">
                                <button type=\"button\" class=\"btn btn-info\" id=\"select-folder-button\" data-toggle=\"modal\" data-target=\"#folder-tree-form-modal\">";
            // line 51
            echo __("Select Folder");
            echo "</button>
                                <span id=\"selectedFormFolder\"></span>
                            </div>
                        </div> -->

                        ";
            // line 56
            echo twig_call_macro($macros["forms"], "macro_hidden", ["folderId", twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "folderId", [], "any", false, false, false, 56)], 56, $context, $this->getSourceContext());
            echo "
                        ";
        }
        // line 58
        echo "
                        ";
        // line 59
        ob_start(function () { return ''; });
        echo __("Display");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        echo "                        ";
        if (($context["displayLockName"] ?? null)) {
            // line 61
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("The Name of the Display - your administrator has locked this to the device name");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 62
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_disabled", ["display", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "display", [], "any", false, false, false, 62), ($context["helpText"] ?? null), "", "required"], 62, $context, $this->getSourceContext());
            echo "
                        ";
        } else {
            // line 64
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("The Name of the Display - (1 - 50 characters).");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 65
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_input", ["display", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "display", [], "any", false, false, false, 65), ($context["helpText"] ?? null), "", "required"], 65, $context, $this->getSourceContext());
            echo "
                        ";
        }
        // line 67
        echo "
                        ";
        // line 68
        ob_start(function () { return ''; });
        echo __("Display's Hardware Key");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 69
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("A unique identifier for this display.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 70
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["license", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "license", [], "any", false, false, false, 70), ($context["helpText"] ?? null), "", "required", "", false], 70, $context, $this->getSourceContext());
        echo "

                        ";
        // line 72
        ob_start(function () { return ''; });
        echo __("Description");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("A description - (1 - 254 characters).");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 74
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["description", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "description", [], "any", false, false, false, 74), ($context["helpText"] ?? null)], 74, $context, $this->getSourceContext());
        echo "

                        ";
        // line 76
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 76)) {
            // line 77
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Tags");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 78
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Tags for this Display - Comma separated string of Tags or Tag|Value format. If you choose a Tag that has associated values, they will be shown for selection below.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 79
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "getTagString", [], "method", false, false, false, 79), ($context["helpText"] ?? null), "tags-with-value"], 79, $context, $this->getSourceContext());
            echo "

                            <p id=\"loadingValues\" style=\"margin-left: 17%\"></p>

                            ";
            // line 83
            ob_start(function () { return ''; });
            echo __("Tag value");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 84
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_dropdown", ["tagValue", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "key", "value"], 84, $context, $this->getSourceContext());
            echo "

                            <div id=\"tagValueContainer\">
                                ";
            // line 87
            ob_start(function () { return ''; });
            echo __("Tag value");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 88
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("Please provide the value for this Tag and confirm by pressing enter on your keyboard.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 89
            echo "                                ";
            echo twig_call_macro($macros["forms"], "macro_input", ["tagValueInput", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 89, $context, $this->getSourceContext());
            echo "
                            </div>

                            <div id=\"tagValueRequired\" class=\"alert alert-info\">
                                <p>";
            // line 93
            echo __("This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field.");
            echo "</p>
                            </div>
                        ";
        }
        // line 96
        echo "
                        ";
        // line 97
        ob_start(function () { return ''; });
        echo __("Authorise display?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Use one of the available slots for this display?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 99
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Yes");
        $context["yes"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 100
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("No");
        $context["no"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 101
        echo "                        ";
        $context["options"] = [["licensedid" => 1, "licensed" =>         // line 102
($context["yes"] ?? null)], ["licensedid" => 0, "licensed" =>         // line 103
($context["no"] ?? null)]];
        // line 105
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["licensed", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "licensed", [], "any", false, false, false, 105), ($context["options"] ?? null), "licensedid", "licensed", ($context["helpText"] ?? null)], 105, $context, $this->getSourceContext());
        echo "

                        ";
        // line 107
        ob_start(function () { return ''; });
        echo __("Default Layout");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 108
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Set the Default Layout to use when no other content is scheduled to this Display. This will override the global Default Layout as set in CMS Administrator Settings. If left blank a global Default Layout will be automatically set for this Display.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 109
        echo "                        ";
        $context["attributes"] = [["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.search")], ["name" => "data-search-term", "value" => "layout"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "layoutId"], ["name" => "data-text-property", "value" => "layout"], ["name" => "data-filter-options", "value" => "{\"retired\":\"0\"}"]];
        // line 117
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["defaultLayoutId", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "defaultLayoutId", [], "any", false, false, false, 117), ($context["layouts"] ?? null), "layoutId", "layout", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 117, $context, $this->getSourceContext());
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"location\">
                        ";
        // line 120
        ob_start(function () { return ''; });
        echo __("Latitude");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 121
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The Latitude of this display");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 122
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["latitude", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "latitude", [], "any", false, false, false, 122), ($context["helpText"] ?? null)], 122, $context, $this->getSourceContext());
        echo "

                        ";
        // line 124
        ob_start(function () { return ''; });
        echo __("Longitude");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 125
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The Longitude of this Display");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 126
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["longitude", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "longitude", [], "any", false, false, false, 126), ($context["helpText"] ?? null)], 126, $context, $this->getSourceContext());
        echo "

                        ";
        // line 128
        $context["attributes"] = [["name" => "data-width", "value" => "100%"]];
        // line 131
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Timezone");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 132
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The timezone for this display, or empty to use the CMS timezone");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 133
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["timeZone", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "timeZone", [], "any", false, false, false, 133), twig_array_merge([["id" => "", "value" => ""]], ($context["timeZones"] ?? null)), "id", "value", ($context["helpText"] ?? null), "selectPicker", "", "", "", ($context["attributes"] ?? null)], 133, $context, $this->getSourceContext());
        echo "

                       <!-- ";
        // line 135
        ob_start(function () { return ''; });
        echo __("Languages");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 136
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The Languages supported in this display location");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 137
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["languages[]", "dropdownmulti", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "getLanguages", [], "method", false, false, false, 137), ($context["languages"] ?? null), "id", "value", ($context["helpText"] ?? null), "selectPicker"], 137, $context, $this->getSourceContext());
        echo "

                        ";
        // line 139
        ob_start(function () { return ''; });
        echo __("Display Type");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 140
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The Type of this Display");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 141
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["displayTypeId", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "displayTypeId", [], "any", false, false, false, 141), twig_array_merge([["displayTypeId" => null, "displayType" => ""]], ($context["displayTypes"] ?? null)), "displayTypeId", "displayType", ($context["helpText"] ?? null)], 141, $context, $this->getSourceContext());
        echo "

                        ";
        // line 143
        ob_start(function () { return ''; });
        echo __("Venue");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 144
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The Location/Venue of this display");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 145
        echo "                        ";
        $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.venue.search")], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-venue-id", "value" => twig_get_attribute($this->env, $this->source,         // line 151
($context["display"] ?? null), "venueId", [], "any", false, false, false, 151)]];
        // line 153
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["venueId", "single", ($context["title"] ?? null), "", null, "venueId", "venueName", ($context["helpText"] ?? null), "venue-select", "", "", "", ($context["attributes"] ?? null)], 153, $context, $this->getSourceContext());
        echo " -->

                        ";
        // line 155
        ob_start(function () { return ''; });
        echo __("Address");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 156
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The Address of this Display");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 157
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["address", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "address", [], "any", false, false, false, 157), ($context["helpText"] ?? null)], 157, $context, $this->getSourceContext());
        echo "

                        <!-- ";
        // line 159
        ob_start(function () { return ''; });
        echo __("Screen size");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 160
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The Screen size of this Display");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 161
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["screenSize", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "screenSize", [], "any", false, false, false, 161), ($context["helpText"] ?? null)], 161, $context, $this->getSourceContext());
        echo "

                        ";
        // line 163
        ob_start(function () { return ''; });
        echo __("Is mobile?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 164
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Is this display mobile?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 165
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["isMobile", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "isMobile", [], "any", false, false, false, 165), ($context["helpText"] ?? null)], 165, $context, $this->getSourceContext());
        echo "

                        ";
        // line 167
        ob_start(function () { return ''; });
        echo __("Is outdoor?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 168
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Is your display located outdoors?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 169
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["isOutdoor", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "isOutdoor", [], "any", false, false, false, 169), ($context["helpText"] ?? null)], 169, $context, $this->getSourceContext());
        echo "

                        ";
        // line 171
        ob_start(function () { return ''; });
        echo __("Cost per play");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 172
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The cost per play");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 173
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["costPerPlay", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "costPerPlay", [], "any", false, false, false, 173), ($context["helpText"] ?? null)], 173, $context, $this->getSourceContext());
        echo "

                        ";
        // line 175
        ob_start(function () { return ''; });
        echo __("Impressions per play");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 176
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The impressions per play");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 177
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["impressionsPerPlay", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "impressionsPerPlay", [], "any", false, false, false, 177), ($context["helpText"] ?? null)], 177, $context, $this->getSourceContext());
        echo " -->
                    </div>
                    <div class=\"tab-pane\" id=\"reference\">
                        ";
        // line 180
        echo twig_call_macro($macros["forms"], "macro_message", [__("Add reference fields if needed")], 180, $context, $this->getSourceContext());
        echo "

                        ";
        // line 182
        ob_start(function () { return ''; });
        echo __("Reference 1");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 183
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["ref1", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "ref1", [], "any", false, false, false, 183)], 183, $context, $this->getSourceContext());
        echo "

                        ";
        // line 185
        ob_start(function () { return ''; });
        echo __("Reference 2");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 186
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["ref2", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "ref2", [], "any", false, false, false, 186)], 186, $context, $this->getSourceContext());
        echo "

                        ";
        // line 188
        ob_start(function () { return ''; });
        echo __("Reference 3");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 189
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["ref3", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "ref3", [], "any", false, false, false, 189)], 189, $context, $this->getSourceContext());
        echo "

                        ";
        // line 191
        ob_start(function () { return ''; });
        echo __("Reference 4");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 192
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["ref4", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "ref4", [], "any", false, false, false, 192)], 192, $context, $this->getSourceContext());
        echo "

                        ";
        // line 194
        ob_start(function () { return ''; });
        echo __("Reference 5");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 195
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["ref5", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "ref5", [], "any", false, false, false, 195)], 195, $context, $this->getSourceContext());
        echo "

                        ";
        // line 197
        ob_start(function () { return ''; });
        echo __("Custom ID");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 198
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["customId", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "customId", [], "any", false, false, false, 198)], 198, $context, $this->getSourceContext());
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"maintenance\">

                        ";
        // line 202
        ob_start(function () { return ''; });
        echo __("Email Alerts");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 203
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Do you want to be notified by email if there is a problem with this display?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 204
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Yes");
        $context["yes"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 205
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("No");
        $context["no"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 206
        echo "                        ";
        $context["options"] = [["id" => 0, "value" =>         // line 207
($context["no"] ?? null)], ["id" => 1, "value" =>         // line 208
($context["yes"] ?? null)]];
        // line 210
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["emailAlert", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "emailAlert", [], "any", false, false, false, 210), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 210, $context, $this->getSourceContext());
        echo "

                        ";
        // line 212
        ob_start(function () { return ''; });
        echo __("Use the Global Timeout?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 213
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Should this display be tested against the global time out or the Player collection interval?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 214
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["alertTimeout", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "alertTimeout", [], "any", false, false, false, 214), ($context["helpText"] ?? null)], 214, $context, $this->getSourceContext());
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"wol\">

                        ";
        // line 218
        ob_start(function () { return ''; });
        echo __("Enable Wake on LAN");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 219
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Wake on Lan requires the correct network configuration to route the magic packet to the display PC");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 220
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["wakeOnLanEnabled", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "wakeOnLanEnabled", [], "any", false, false, false, 220), ($context["helpText"] ?? null)], 220, $context, $this->getSourceContext());
        echo "

                        ";
        // line 222
        ob_start(function () { return ''; });
        echo __("BroadCast Address");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 223
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The IP address of the remote host's broadcast address (or gateway)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 224
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["broadCastAddress", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "broadCastAddress", [], "any", false, false, false, 224), ($context["helpText"] ?? null)], 224, $context, $this->getSourceContext());
        echo "

                        ";
        // line 226
        ob_start(function () { return ''; });
        echo __("Wake on LAN SecureOn");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 227
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Enter a hexadecimal password of a SecureOn enabled Network Interface Card (NIC) of the remote host. Enter a value in this pattern: 'xx-xx-xx-xx-xx-xx'. Leave the following field empty, if SecureOn is not used (for example, because the NIC of the remote host does not support SecureOn).");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 228
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["secureOn", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "secureOn", [], "any", false, false, false, 228), ($context["helpText"] ?? null)], 228, $context, $this->getSourceContext());
        echo "

                        ";
        // line 230
        ob_start(function () { return ''; });
        echo __("Wake on LAN Time");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 231
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The time this display should receive the WOL command, using the 24hr clock - e.g. 19:00. Maintenance must be enabled.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 232
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["wakeOnLanTime", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "wakeOnLanTime", [], "any", false, false, false, 232), ($context["helpText"] ?? null)], 232, $context, $this->getSourceContext());
        echo "


                        ";
        // line 235
        ob_start(function () { return ''; });
        echo __("Wake on LAN CIDR");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 236
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Enter a number within the range of 0 to 32 in the following field. Leave the following field empty, if no subnet mask should be used (CIDR = 0). If the remote host's broadcast address is unknown: Enter the host name or IP address of the remote host in Broad Cast Address and enter the CIDR subnet mask of the remote host in this field.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 237
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["cidr", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "cidr", [], "any", false, false, false, 237), ($context["helpText"] ?? null)], 237, $context, $this->getSourceContext());
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"settings\">
                        ";
        // line 240
        ob_start(function () { return ''; });
        echo __("Settings Profile?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 241
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("What display profile should this display use? To use the default profile leave this empty.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 242
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["displayProfileId", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "displayProfileId", [], "any", false, false, false, 242), twig_array_merge([["displayProfileId" => null, "name" => ""]], ($context["profiles"] ?? null)), "displayProfileId", "name", ($context["helpText"] ?? null)], 242, $context, $this->getSourceContext());
        echo "

                        ";
        // line 244
        ob_start(function () { return ''; });
        echo __("The settings for this display are shown below. They are taken from the active Display Profile for this Display, which can be changed in Display Settings. If you have altered the Settings Profile above, you will need to save and re-show the form.");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 245
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null)], 245, $context, $this->getSourceContext());
        echo "

                        <table id=\"settings-from-profile\" class=\"table table-striped\">
                            <thead>
                                <th>";
        // line 249
        echo twig_escape_filter($this->env, __("Setting"), "html", null, true);
        echo "</th>
                                <th>";
        // line 250
        echo twig_escape_filter($this->env, __("Profile"), "html", null, true);
        echo "</th>
                                <th>";
        // line 251
        echo twig_escape_filter($this->env, __("Override"), "html", null, true);
        echo "</th>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class=\"tab-pane\" id=\"advanced\">
                        ";
        // line 258
        ob_start(function () { return ''; });
        echo __("Interleave Default");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 259
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Whether to always put the default layout into the cycle.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 260
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Yes");
        $context["yes"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 261
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("No");
        $context["no"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 262
        echo "                        ";
        $context["options"] = [["id" => 0, "value" =>         // line 263
($context["no"] ?? null)], ["id" => 1, "value" =>         // line 264
($context["yes"] ?? null)]];
        // line 266
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["incSchedule", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "incSchedule", [], "any", false, false, false, 266), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 266, $context, $this->getSourceContext());
        echo "

                        ";
        // line 268
        ob_start(function () { return ''; });
        echo __("Auditing until");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 269
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Collect auditing from this Player. Should only be used if there is a problem with the display.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 270
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "isAuditing", [], "method", false, false, false, 270)) {
            // line 271
            echo "                            ";
            $context["auditing"] = twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "getUnmatchedProperty", ["auditingUntilIso"], "method", false, false, false, 271);
            // line 272
            echo "                        ";
        } else {
            // line 273
            echo "                            ";
            $context["auditing"] = "";
            // line 274
            echo "                        ";
        }
        // line 275
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dateTime", ["auditingUntil", ($context["title"] ?? null), ($context["auditing"] ?? null), ($context["helpText"] ?? null)], 275, $context, $this->getSourceContext());
        echo "

                        ";
        // line 277
        ob_start(function () { return ''; });
        echo __("Bandwidth limit");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 278
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The bandwidth limit that should be applied. Enter 0 for no limit.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 279
        echo "                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\" for=\"bandwidthLimit\">";
        // line 280
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</label>
                            <div class=\"col-sm-6\">
                                <input class=\"form-control\" name=\"bandwidthLimit\" type=\"number\" id=\"bandwidthLimit\" min=\"0\" value=\"";
        // line 282
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "bandwidthLimit", [], "any", false, false, false, 282), "html", null, true);
        echo "\"/>
                                <span class=\"help-block\">";
        // line 283
        echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
        echo "</span>
                            </div>
                            <div class=\"col-sm-4\">
                                <select name=\"bandwidthLimitUnits\" class=\"form-control\">
                                    <option value=\"kb\">KiB</option>
                                    <option value=\"mb\">MiB</option>
                                    <option value=\"gb\">GiB</option>
                                </select>
                            </div>
                        </div>

                        ";
        // line 294
        ob_start(function () { return ''; });
        echo __("Clear Cached Data");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 295
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Remove any cached data for this display.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 296
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["clearCachedData", ($context["title"] ?? null), 1, ($context["helpText"] ?? null)], 296, $context, $this->getSourceContext());
        echo "

                        ";
        // line 298
        ob_start(function () { return ''; });
        echo __("Reconfigure XMR");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 299
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Remove the XMR configuration for this Player and send a rekey action.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 300
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["rekeyXmr", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 300, $context, $this->getSourceContext());
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"remote\">
                        ";
        // line 304
        ob_start(function () { return ''; });
        echo __("TeamViewer Serial");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 305
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("If TeamViewer is installed on the device, enter the serial number here.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 306
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["teamViewerSerial", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "teamViewerSerial", [], "any", false, false, false, 306), ($context["helpText"] ?? null)], 306, $context, $this->getSourceContext());
        echo "

                        ";
        // line 308
        ob_start(function () { return ''; });
        echo __("Webkey Serial");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 309
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("If Webkey is installed on the device, enter the serial number here.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 310
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["webkeySerial", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "webkeySerial", [], "any", false, false, false, 310), ($context["helpText"] ?? null)], 310, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
            </form>


            <div id=\"settings-from-display-profile\" style=\"display:none\">
                ";
        // line 318
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getClientType", [], "method", false, false, false, 318) == "android")) {
            // line 319
            echo "                    ";
            $this->loadTemplate("displayprofile-form-edit-android.twig", "display-form-edit.twig", 319)->display($context);
            // line 320
            echo "                ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getClientType", [], "method", false, false, false, 320) == "windows")) {
            // line 321
            echo "                    ";
            $this->loadTemplate("displayprofile-form-edit-windows.twig", "display-form-edit.twig", 321)->display($context);
            // line 322
            echo "                ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getClientType", [], "method", false, false, false, 322) == "linux")) {
            // line 323
            echo "                    ";
            $this->loadTemplate("displayprofile-form-edit-linux.twig", "display-form-edit.twig", 323)->display($context);
            // line 324
            echo "                ";
        } elseif (((twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getClientType", [], "method", false, false, false, 324) == "lg") || (twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getClientType", [], "method", false, false, false, 324) == "sssp"))) {
            // line 325
            echo "                    ";
            $this->loadTemplate("displayprofile-form-edit-soc.twig", "display-form-edit.twig", 325)->display($context);
            // line 326
            echo "                ";
        } elseif (twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "isCustom", [], "method", false, false, false, 326)) {
            // line 327
            echo "                    ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getCustomEditTemplate", [], "method", false, false, false, 327));
            echo "
                ";
        }
        // line 329
        echo "
                ";
        // line 330
        $this->loadTemplate("displayprofile-form-edit-javascript.twig", "display-form-edit.twig", 330)->display($context);
        // line 331
        echo "            </div>
        </div>
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "display-form-edit.twig";
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
        return array (  969 => 331,  967 => 330,  964 => 329,  958 => 327,  955 => 326,  952 => 325,  949 => 324,  946 => 323,  943 => 322,  940 => 321,  937 => 320,  934 => 319,  931 => 318,  920 => 310,  915 => 309,  911 => 308,  905 => 306,  900 => 305,  896 => 304,  888 => 300,  883 => 299,  879 => 298,  873 => 296,  868 => 295,  864 => 294,  850 => 283,  846 => 282,  841 => 280,  838 => 279,  833 => 278,  829 => 277,  823 => 275,  820 => 274,  817 => 273,  814 => 272,  811 => 271,  808 => 270,  803 => 269,  799 => 268,  793 => 266,  791 => 264,  790 => 263,  788 => 262,  783 => 261,  778 => 260,  773 => 259,  769 => 258,  759 => 251,  755 => 250,  751 => 249,  743 => 245,  739 => 244,  733 => 242,  728 => 241,  724 => 240,  717 => 237,  712 => 236,  708 => 235,  701 => 232,  696 => 231,  692 => 230,  686 => 228,  681 => 227,  677 => 226,  671 => 224,  666 => 223,  662 => 222,  656 => 220,  651 => 219,  647 => 218,  639 => 214,  634 => 213,  630 => 212,  624 => 210,  622 => 208,  621 => 207,  619 => 206,  614 => 205,  609 => 204,  604 => 203,  600 => 202,  592 => 198,  588 => 197,  582 => 195,  578 => 194,  572 => 192,  568 => 191,  562 => 189,  558 => 188,  552 => 186,  548 => 185,  542 => 183,  538 => 182,  533 => 180,  526 => 177,  521 => 176,  517 => 175,  511 => 173,  506 => 172,  502 => 171,  496 => 169,  491 => 168,  487 => 167,  481 => 165,  476 => 164,  472 => 163,  466 => 161,  461 => 160,  457 => 159,  451 => 157,  446 => 156,  442 => 155,  436 => 153,  434 => 151,  432 => 145,  427 => 144,  423 => 143,  417 => 141,  412 => 140,  408 => 139,  402 => 137,  397 => 136,  393 => 135,  387 => 133,  382 => 132,  377 => 131,  375 => 128,  369 => 126,  364 => 125,  360 => 124,  354 => 122,  349 => 121,  345 => 120,  338 => 117,  335 => 109,  330 => 108,  326 => 107,  320 => 105,  318 => 103,  317 => 102,  315 => 101,  310 => 100,  305 => 99,  300 => 98,  296 => 97,  293 => 96,  287 => 93,  279 => 89,  274 => 88,  270 => 87,  263 => 84,  259 => 83,  251 => 79,  246 => 78,  241 => 77,  239 => 76,  233 => 74,  228 => 73,  224 => 72,  218 => 70,  213 => 69,  209 => 68,  206 => 67,  200 => 65,  195 => 64,  189 => 62,  184 => 61,  181 => 60,  177 => 59,  174 => 58,  169 => 56,  161 => 51,  156 => 49,  146 => 42,  143 => 41,  141 => 40,  133 => 37,  128 => 35,  124 => 34,  120 => 33,  116 => 32,  112 => 31,  108 => 30,  104 => 29,  100 => 28,  95 => 25,  91 => 24,  84 => 22,  77 => 20,  71 => 17,  66 => 16,  62 => 15,  57 => 12,  53 => 11,  48 => 8,  46 => 9,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "display-form-edit.twig", "/var/www/html/cms_ubi/views/display-form-edit.twig");
    }
}
