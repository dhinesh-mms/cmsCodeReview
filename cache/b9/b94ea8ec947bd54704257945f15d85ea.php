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

/* settings-page.twig */
class __TwigTemplate_a265469e39b889701deda2845e6e0dec extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "settings-page.twig", 9)->unwrap();
        // line 8
        $this->parent = $this->loadTemplate("authed.twig", "settings-page.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("Settings"), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "SETTING_LIBRARY_TIDY_ENABLED", [], "any", false, false, false, 15)) {
            // line 16
            echo "            <button class=\"btn btn-danger XiboFormButton btns\" title=\"";
            echo __("Run through the library and remove unused and unnecessary files");
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("maintenance.libraryTidy.form"), "html", null, true);
            echo "\"> <i class=\"fa fa-trash\" aria-hidden=\"true\"></i> ";
            echo __("Tidy Library");
            echo "</button>
        ";
        }
        // line 18
        echo "    </div>
";
    }

    // line 21
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 23
        echo __("Settings");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#tab_config\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 28
        echo __("Configuration");
        echo "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_defaults\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 29
        echo __("Defaults");
        echo "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_displays\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 30
        echo __("Displays");
        echo "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 31
        echo __("General");
        echo "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_maint\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 32
        echo __("Maintenance");
        echo "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_network\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 33
        echo __("Network");
        echo "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_permissions\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 34
        echo __("Sharing");
        echo "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_regional\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 35
        echo __("Regional");
        echo "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_troubleshooting\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 36
        echo __("Troubleshooting");
        echo "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_users\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 37
        echo __("Users");
        echo "</span></a></li>
                    </ul>
                    <form id=\"SettingsForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("settings.update"), "html", null, true);
        echo "\">
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"tab_config\">
                                <h3 class=\"section-heading\">";
        // line 42
        echo __("Configuration");
        echo "</h3>

                                ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["LIBRARY_LOCATION"], "method", false, false, false, 44)) {
            // line 45
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Library Location");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 46
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The fully qualified path to the CMS library location.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 47
            echo "
                                    ";
            // line 48
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["LIBRARY_LOCATION"], "method", false, false, false, 48)) {
                // line 49
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["LIBRARY_LOCATION", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LIBRARY_LOCATION"], "method", false, false, false, 49), ($context["helpText"] ?? null), "required"], 49, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 51
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["LIBRARY_LOCATION", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LIBRARY_LOCATION"], "method", false, false, false, 51), ($context["helpText"] ?? null)], 51, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 53
            echo "                                ";
        }
        // line 54
        echo "
                                ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SERVER_KEY"], "method", false, false, false, 55)) {
            // line 56
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("CMS Secret Key");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 57
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("This key must be entered into each Player to authenticate the Player with the CMS.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 58
            echo "
                                    ";
            // line 59
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SERVER_KEY"], "method", false, false, false, 59)) {
                // line 60
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["SERVER_KEY", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SERVER_KEY"], "method", false, false, false, 60), ($context["helpText"] ?? null), "required"], 60, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 62
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["SERVER_KEY", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SERVER_KEY"], "method", false, false, false, 62), ($context["helpText"] ?? null)], 62, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 64
            echo "                                    <div class=\"form-group row\">
                                        <label class=\"col-sm-2 control-label\"></label>
                                        <div class=\"col-sm-10\">
                                            <p><i>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getPhoneticKey", [], "method", false, false, false, 67), "html", null, true);
            echo "</i></p>
                                        </div>
                                    </div>
                                ";
        }
        // line 71
        echo "
                                ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["GLOBAL_THEME_NAME"], "method", false, false, false, 72)) {
            // line 73
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("CMS Theme");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 74
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The Theme to apply to all pages by default");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 75
            echo "
                                    ";
            // line 76
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["GLOBAL_THEME_NAME"], "method", false, false, false, 76)) {
                // line 77
                echo "                                        ";
                if (($context["hideThemes"] ?? null)) {
                    // line 78
                    echo "                                            ";
                    // line 79
                    echo "                                            ";
                    echo twig_call_macro($macros["forms"], "macro_input", ["GLOBAL_THEME_NAME", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["GLOBAL_THEME_NAME"], "method", false, false, false, 79), ($context["helpText"] ?? null)], 79, $context, $this->getSourceContext());
                    echo "
                                        ";
                } else {
                    // line 81
                    echo "                                            ";
                    echo twig_call_macro($macros["forms"], "macro_dropdown", ["GLOBAL_THEME_NAME", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["GLOBAL_THEME_NAME"], "method", false, false, false, 81), ($context["themes"] ?? null), "id", "value", ($context["helpText"] ?? null)], 81, $context, $this->getSourceContext());
                    echo "
                                        ";
                }
                // line 83
                echo "                                    ";
            } else {
                // line 84
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["GLOBAL_THEME_NAME", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["GLOBAL_THEME_NAME"], "method", false, false, false, 84), ($context["helpText"] ?? null)], 84, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 86
            echo "                                ";
        }
        // line 87
        echo "
                                ";
        // line 88
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["NAVIGATION_MENU_POSITION"], "method", false, false, false, 88)) {
            // line 89
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Navigation Menu");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 90
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Select where the Navigation Menu should be positioned by default. Users can set an alternate view in their Preferences under their User Profile.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 91
            echo "
                                    ";
            // line 92
            ob_start(function () { return ''; });
            echo __("Horizontal along the top");
            $context["horizontalOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 93
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Vertically on the left");
            $context["verticalOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 94
            echo "                                    ";
            $context["options"] = [["id" => "horizontal", "value" =>             // line 95
($context["horizontalOption"] ?? null)], ["id" => "vertical", "value" =>             // line 96
($context["verticalOption"] ?? null)]];
            // line 98
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["NAVIGATION_MENU_POSITION"], "method", false, false, false, 98)) {
                // line 99
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["NAVIGATION_MENU_POSITION", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["NAVIGATION_MENU_POSITION", "vertical"], "method", false, false, false, 99), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 99, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 101
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["NAVIGATION_MENU_POSITION", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["NAVIGATION_MENU_POSITION", "vertical"], "method", false, false, false, 101), ($context["helpText"] ?? null)], 101, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 103
            echo "                                ";
        }
        // line 104
        echo "                            </div>
                            <div class=\"tab-pane\" id=\"tab_defaults\">
                                <h3 class=\"section-heading\">";
        // line 106
        echo __("Defaults");
        echo "</h3>

                                ";
        // line 108
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["LIBRARY_MEDIA_UPDATEINALL_CHECKB"], "method", false, false, false, 108)) {
            // line 109
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default update media in all layouts");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 110
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default the checkbox for updating media on all layouts when editing in the library");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 111
            echo "
                                    ";
            // line 112
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["LIBRARY_MEDIA_UPDATEINALL_CHECKB", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LIBRARY_MEDIA_UPDATEINALL_CHECKB"], "method", false, false, false, 112), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["LIBRARY_MEDIA_UPDATEINALL_CHECKB"], "method", false, false, false, 112)], 112, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 114
        echo "
                                ";
        // line 115
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["LAYOUT_COPY_MEDIA_CHECKB"], "method", false, false, false, 115)) {
            // line 116
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default copy media when copying a layout?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 117
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default the checkbox for making duplicates of media when copying layouts");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 118
            echo "
                                    ";
            // line 119
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["LAYOUT_COPY_MEDIA_CHECKB", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LAYOUT_COPY_MEDIA_CHECKB"], "method", false, false, false, 119), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["LIBRARY_MEDIA_UPDATEINALL_CHECKB"], "method", false, false, false, 119)], 119, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 121
        echo "
                                ";
        // line 122
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["LIBRARY_MEDIA_DELETEOLDVER_CHECKB"], "method", false, false, false, 122)) {
            // line 123
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default for \"Delete old version of Media\" checkbox. Shown when Editing Library Media.");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 124
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default the checkbox for Deleting Old Version of media when a new file is being uploaded to the library.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 125
            echo "
                                    ";
            // line 126
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["LIBRARY_MEDIA_DELETEOLDVER_CHECKB", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LIBRARY_MEDIA_DELETEOLDVER_CHECKB"], "method", false, false, false, 126), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["LIBRARY_MEDIA_UPDATEINALL_CHECKB"], "method", false, false, false, 126)], 126, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 128
        echo "
                                ";
        // line 129
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_LAYOUT_AUTO_PUBLISH_CHECKB"], "method", false, false, false, 129)) {
            // line 130
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Should Layouts be automatically Published?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 131
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("When enabled draft Layouts will be automatically published 30 minutes after the last edit");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 132
            echo "
                                    ";
            // line 133
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["DEFAULT_LAYOUT_AUTO_PUBLISH_CHECKB", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_LAYOUT_AUTO_PUBLISH_CHECKB"], "method", false, false, false, 133), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_LAYOUT_AUTO_PUBLISH_CHECKB"], "method", false, false, false, 133)], 133, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 135
        echo "
                                ";
        // line 136
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_TRANSITION_IN"], "method", false, false, false, 136)) {
            // line 137
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default Transition In");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 138
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default Transition In that should be applied to widgets");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 139
            echo "
                                    ";
            // line 140
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_TRANSITION_IN"], "method", false, false, false, 140)) {
                // line 141
                echo "                                        ";
                $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("transition.search")], ["name" => "data-search-term", "value" => "transition"], ["name" => "data-id-property", "value" => "code"], ["name" => "data-text-property", "value" => "transition"], ["name" => "data-filter-options", "value" => "{\"availableAsIn\":\"1\"}"]];
                // line 149
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["DEFAULT_TRANSITION_IN", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_TRANSITION_IN"], "method", false, false, false, 149), [($context["defaultTransitionIn"] ?? null)], "code", "transition", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 149, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 151
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DEFAULT_TRANSITION_IN", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_TRANSITION_IN"], "method", false, false, false, 151), ""], 151, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 153
            echo "                                ";
        }
        // line 154
        echo "
                                ";
        // line 155
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_TRANSITION_OUT"], "method", false, false, false, 155)) {
            // line 156
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default Transition Out");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 157
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default Transition Out that should be applied to widgets");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 158
            echo "
                                    ";
            // line 159
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_TRANSITION_OUT"], "method", false, false, false, 159)) {
                // line 160
                echo "                                        ";
                $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("transition.search")], ["name" => "data-search-term", "value" => "transition"], ["name" => "data-id-property", "value" => "code"], ["name" => "data-text-property", "value" => "transition"], ["name" => "data-filter-options", "value" => "{\"availableAsOut\":\"1\"}"]];
                // line 168
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["DEFAULT_TRANSITION_OUT", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_TRANSITION_OUT"], "method", false, false, false, 168), [($context["defaultTransitionOut"] ?? null)], "code", "transition", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 168, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 170
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DEFAULT_TRANSITION_OUT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_TRANSITION_OUT"], "method", false, false, false, 170), ""], 170, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 172
            echo "                                ";
        }
        // line 173
        echo "
                                ";
        // line 174
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_TRANSITION_DURATION"], "method", false, false, false, 174)) {
            // line 175
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default Transition duration");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 176
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default duration for in and out transitions");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 177
            echo "
                                    ";
            // line 178
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_TRANSITION_DURATION"], "method", false, false, false, 178)) {
                // line 179
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["DEFAULT_TRANSITION_DURATION", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_TRANSITION_DURATION", 0], "method", false, false, false, 179), ($context["helpText"] ?? null)], 179, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 181
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DEFAULT_TRANSITION_DURATION", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_TRANSITION_DURATION", 0], "method", false, false, false, 181), ($context["helpText"] ?? null)], 181, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 183
            echo "                                ";
        }
        // line 184
        echo "
                                ";
        // line 185
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_TRANSITION_AUTO_APPLY"], "method", false, false, false, 185)) {
            // line 186
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default value for \"Automatically apply Transitions?.\" checkbox on Layout add form");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 187
            echo "
                                    ";
            // line 188
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["DEFAULT_TRANSITION_AUTO_APPLY", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_TRANSITION_AUTO_APPLY"], "method", false, false, false, 188), "", "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_TRANSITION_AUTO_APPLY"], "method", false, false, false, 188)], 188, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 190
        echo "
                                ";
        // line 191
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_RESIZE_THRESHOLD"], "method", false, false, false, 191)) {
            // line 192
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Resize Threshold");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 193
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The maximum dimensions to be considered when an image is resized, based on the longest side");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 194
            echo "
                                    ";
            // line 195
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_RESIZE_THRESHOLD"], "method", false, false, false, 195)) {
                // line 196
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["DEFAULT_RESIZE_THRESHOLD", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_RESIZE_THRESHOLD", 0], "method", false, false, false, 196), ($context["helpText"] ?? null)], 196, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 198
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DEFAULT_RESIZE_THRESHOLD", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_RESIZE_THRESHOLD", 0], "method", false, false, false, 198), ($context["helpText"] ?? null)], 198, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 200
            echo "                                ";
        }
        // line 201
        echo "
                                ";
        // line 202
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_RESIZE_LIMIT"], "method", false, false, false, 202)) {
            // line 203
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Resize Limit");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 204
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Images that exceed the resize limit, based on the longest side, will not be processed");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 205
            echo "
                                    ";
            // line 206
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_RESIZE_LIMIT"], "method", false, false, false, 206)) {
                // line 207
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["DEFAULT_RESIZE_LIMIT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_RESIZE_LIMIT", 0], "method", false, false, false, 207), ($context["helpText"] ?? null)], 207, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 209
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DEFAULT_RESIZE_LIMIT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_RESIZE_LIMIT", 0], "method", false, false, false, 209), ($context["helpText"] ?? null)], 209, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 211
            echo "                                ";
        }
        // line 212
        echo "
                                ";
        // line 213
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DATASET_HARD_ROW_LIMIT"], "method", false, false, false, 213)) {
            // line 214
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("DataSet maximum number of Rows");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 215
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The maximum number of rows per DataSet, once the limit is met the limit policy defined per DataSet will dictate further action.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 216
            echo "
                                    ";
            // line 217
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DATASET_HARD_ROW_LIMIT"], "method", false, false, false, 217)) {
                // line 218
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["DATASET_HARD_ROW_LIMIT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DATASET_HARD_ROW_LIMIT", 0], "method", false, false, false, 218), ($context["helpText"] ?? null)], 218, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 220
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DATASET_HARD_ROW_LIMIT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DATASET_HARD_ROW_LIMIT", 0], "method", false, false, false, 220), ($context["helpText"] ?? null)], 220, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 222
            echo "                                ";
        }
        // line 223
        echo "
                                ";
        // line 224
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_PURGE_LIST_TTL"], "method", false, false, false, 224)) {
            // line 225
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default ttl, in days, for records in purge_list table");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 226
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Entries in purge_list table with expiry date older than specified ttl will be removed.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 227
            echo "
                                    ";
            // line 228
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_PURGE_LIST_TTL"], "method", false, false, false, 228)) {
                // line 229
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["DEFAULT_PURGE_LIST_TTL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_PURGE_LIST_TTL", 7], "method", false, false, false, 229), ($context["helpText"] ?? null)], 229, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 231
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DEFAULT_PURGE_LIST_TTL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_PURGE_LIST_TTL", 7], "method", false, false, false, 231), ($context["helpText"] ?? null)], 231, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 233
            echo "                                ";
        }
        // line 234
        echo "
                                ";
        // line 235
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER"], "method", false, false, false, 235)) {
            // line 236
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The default value for max number of items on a new dynamic Playlist");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 237
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("This value can be adjusted on a per dynamic Playlist basis, it cannot exceed value set in the Limit below");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 238
            echo "
                                    ";
            // line 239
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER"], "method", false, false, false, 239)) {
                // line 240
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER", 30], "method", false, false, false, 240), ($context["helpText"] ?? null), "", "", "", twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT", 100], "method", false, false, false, 240)], 240, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 242
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER", 30], "method", false, false, false, 242), ($context["helpText"] ?? null)], 242, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 244
            echo "                                ";
        }
        // line 245
        echo "
                                ";
        // line 246
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT"], "method", false, false, false, 246)) {
            // line 247
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The default upper limit of items that can be assigned to a dynamic Playlist");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 248
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("When matching Media by Tags and name to a dynamic Playlist, this is the maximum number of allowed items that can be assigned to a dynamic Playlist");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 249
            echo "
                                    ";
            // line 250
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT"], "method", false, false, false, 250)) {
                // line 251
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT", 100], "method", false, false, false, 251), ($context["helpText"] ?? null)], 251, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 253
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT", 100], "method", false, false, false, 253), ($context["helpText"] ?? null)], 253, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 255
            echo "                                ";
        }
        // line 256
        echo "                            </div>
                            <div class=\"tab-pane\" id=\"tab_displays\">
                                <h3 class=\"section-heading\">";
        // line 258
        echo __("Displays");
        echo "</h3>

                                ";
        // line 260
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_LAYOUT"], "method", false, false, false, 260)) {
            // line 261
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default Layout");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 262
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The default layout to assign for new displays and displays which have their current default deleted.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 263
            echo "
                                    ";
            // line 264
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_LAYOUT"], "method", false, false, false, 264)) {
                // line 265
                echo "                                        ";
                $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.search")], ["name" => "data-search-term", "value" => "layout"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "layoutId"], ["name" => "data-text-property", "value" => "layout"], ["name" => "data-filter-options", "value" => "{\"retired\":\"0\"}"]];
                // line 274
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["DEFAULT_LAYOUT", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["defaultLayout"] ?? null), "layoutId", [], "any", false, false, false, 274), [($context["defaultLayout"] ?? null)], "layoutId", "layout", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 274, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 276
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DEFAULT_LAYOUT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_LAYOUT"], "method", false, false, false, 276), ($context["helpText"] ?? null)], 276, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 278
            echo "                                ";
        }
        // line 279
        echo "
                                ";
        // line 280
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["XMR_ADDRESS"], "method", false, false, false, 280)) {
            // line 281
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("XMR Private Address");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 282
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Please enter the private address for XMR.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 283
            echo "
                                    ";
            // line 284
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["XMR_ADDRESS"], "method", false, false, false, 284)) {
                // line 285
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["XMR_ADDRESS", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["XMR_ADDRESS", "tcp:://localhost:5555"], "method", false, false, false, 285), ($context["helpText"] ?? null), "required"], 285, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 287
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["XMR_ADDRESS", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["XMR_ADDRESS", "tcp:://localhost:5555"], "method", false, false, false, 287), ($context["helpText"] ?? null)], 287, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 289
            echo "                                ";
        }
        // line 290
        echo "
                                ";
        // line 291
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["XMR_PUB_ADDRESS"], "method", false, false, false, 291)) {
            // line 292
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("XMR Public Address");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 293
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Please enter the public address for XMR.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 294
            echo "
                                    ";
            // line 295
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["XMR_PUB_ADDRESS"], "method", false, false, false, 295)) {
                // line 296
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["XMR_PUB_ADDRESS", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["XMR_PUB_ADDRESS"], "method", false, false, false, 296), ($context["helpText"] ?? null)], 296, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 298
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["XMR_PUB_ADDRESS", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["XMR_PUB_ADDRESS"], "method", false, false, false, 298), ($context["helpText"] ?? null)], 298, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 300
            echo "                                ";
        }
        // line 301
        echo "
                                ";
        // line 302
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_LAT"], "method", false, false, false, 302)) {
            // line 303
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default Latitude");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 304
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The Latitude to apply for any Geo aware Previews");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 305
            echo "
                                    ";
            // line 306
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_LAT"], "method", false, false, false, 306)) {
                // line 307
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["DEFAULT_LAT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_LAT", "51.504"], "method", false, false, false, 307), ($context["helpText"] ?? null), "required"], 307, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 309
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DEFAULT_LAT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_LAT", "51.504"], "method", false, false, false, 309), ($context["helpText"] ?? null)], 309, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 311
            echo "                                ";
        }
        // line 312
        echo "
                                ";
        // line 313
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_LONG"], "method", false, false, false, 313)) {
            // line 314
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default Longitude");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 315
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The longitude to apply for any Geo aware Previews");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 316
            echo "
                                    ";
            // line 317
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_LONG"], "method", false, false, false, 317)) {
                // line 318
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["DEFAULT_LONG", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_LONG", "-0.104"], "method", false, false, false, 318), ($context["helpText"] ?? null), "required"], 318, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 320
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DEFAULT_LONG", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_LONG", "-0.104"], "method", false, false, false, 320), ($context["helpText"] ?? null)], 320, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 322
            echo "                                ";
        }
        // line 323
        echo "
                                ";
        // line 324
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SHOW_DISPLAY_AS_VNCLINK"], "method", false, false, false, 324)) {
            // line 325
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Add a link to the Display name using this format mask?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 326
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Turn the display name in display management into a link using the IP address last collected. The %s is replaced with the IP address. Leave blank to disable.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 327
            echo "
                                    ";
            // line 328
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SHOW_DISPLAY_AS_VNCLINK"], "method", false, false, false, 328)) {
                // line 329
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["SHOW_DISPLAY_AS_VNCLINK", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SHOW_DISPLAY_AS_VNCLINK"], "method", false, false, false, 329), ($context["helpText"] ?? null)], 329, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 331
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["SHOW_DISPLAY_AS_VNCLINK", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SHOW_DISPLAY_AS_VNCLINK"], "method", false, false, false, 331), ($context["helpText"] ?? null)], 331, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 333
            echo "                                ";
        }
        // line 334
        echo "
                                ";
        // line 335
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SHOW_DISPLAY_AS_VNC_TGT"], "method", false, false, false, 335)) {
            // line 336
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The target attribute for the above link");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 337
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("If the display name is shown as a link in display management, what target should the link have? Set _top to open the link in the same window or _blank to open in a new window.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 338
            echo "
                                    ";
            // line 339
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SHOW_DISPLAY_AS_VNC_TGT"], "method", false, false, false, 339)) {
                // line 340
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["SHOW_DISPLAY_AS_VNC_TGT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SHOW_DISPLAY_AS_VNC_TGT", "_top"], "method", false, false, false, 340), ($context["helpText"] ?? null)], 340, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 342
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["SHOW_DISPLAY_AS_VNC_TGT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SHOW_DISPLAY_AS_VNC_TGT", "_top"], "method", false, false, false, 342), ($context["helpText"] ?? null)], 342, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 344
            echo "                                ";
        }
        // line 345
        echo "
                                ";
        // line 346
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["MAX_LICENSED_DISPLAYS"], "method", false, false, false, 346)) {
            // line 347
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Number of display slots");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 348
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The maximum number of licensed Players for this server installation. 0 = unlimited");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 349
            echo "
                                    ";
            // line 350
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["MAX_LICENSED_DISPLAYS"], "method", false, false, false, 350)) {
                // line 351
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["MAX_LICENSED_DISPLAYS", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAX_LICENSED_DISPLAYS", 0], "method", false, false, false, 351), ($context["helpText"] ?? null)], 351, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 353
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["MAX_LICENSED_DISPLAYS", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAX_LICENSED_DISPLAYS", 0], "method", false, false, false, 353), ($context["helpText"] ?? null)], 353, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 355
            echo "                                ";
        }
        // line 356
        echo "
                                ";
        // line 357
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT"], "method", false, false, false, 357)) {
            // line 358
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Aggregation level");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 359
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Set the Default setting to use for the level of collection for Proof of Play Statistics to be applied to Layouts / Media and Widget items.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 360
            echo "
                                    ";
            // line 361
            ob_start(function () { return ''; });
            echo __("Individual");
            $context["individualOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 362
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Hourly");
            $context["hourlyOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 363
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Daily");
            $context["dailyOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 364
            echo "                                    ";
            $context["options"] = [["id" => "Individual", "value" =>             // line 365
($context["individualOption"] ?? null)], ["id" => "Hourly", "value" =>             // line 366
($context["hourlyOption"] ?? null)], ["id" => "Daily", "value" =>             // line 367
($context["dailyOption"] ?? null)]];
            // line 369
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT"], "method", false, false, false, 369)) {
                // line 370
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT"], "method", false, false, false, 370), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 370, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 372
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT"], "method", false, false, false, 372), ($context["helpText"] ?? null)], 372, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 374
            echo "                                ";
        }
        // line 375
        echo "
                                ";
        // line 376
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DISPLAY_PROFILE_STATS_DEFAULT"], "method", false, false, false, 376)) {
            // line 377
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Enable Stats Collection?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 378
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Set the Default Settings for Proof of Play statistics to apply to all Displays. This can be toggled off by using Display Profiles.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 379
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["DISPLAY_PROFILE_STATS_DEFAULT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_STATS_DEFAULT"], "method", false, false, false, 379), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DISPLAY_PROFILE_STATS_DEFAULT"], "method", false, false, false, 379)], 379, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 381
        echo "
                                ";
        // line 382
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["LAYOUT_STATS_ENABLED_DEFAULT"], "method", false, false, false, 382)) {
            // line 383
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Enable Layout Stats Collection?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 384
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Select the Default setting to use for the collection of Proof of Play statistics for all Layout Items.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 385
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["LAYOUT_STATS_ENABLED_DEFAULT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LAYOUT_STATS_ENABLED_DEFAULT"], "method", false, false, false, 385), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["LAYOUT_STATS_ENABLED_DEFAULT"], "method", false, false, false, 385)], 385, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 387
        echo "
                                ";
        // line 388
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["MEDIA_STATS_ENABLED_DEFAULT"], "method", false, false, false, 388)) {
            // line 389
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Enable Media Stats Collection?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 390
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Select the Default setting to use for the collection of Proof of Play statistics for all Media Items.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 391
            echo "
                                    ";
            // line 392
            ob_start(function () { return ''; });
            echo __("Off");
            $context["offOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 393
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("On");
            $context["onOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 394
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Inherit");
            $context["inheritOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 395
            echo "                                    ";
            $context["options"] = [["id" => "Off", "value" =>             // line 396
($context["offOption"] ?? null)], ["id" => "On", "value" =>             // line 397
($context["onOption"] ?? null)], ["id" => "Inherit", "value" =>             // line 398
($context["inheritOption"] ?? null)]];
            // line 400
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["MEDIA_STATS_ENABLED_DEFAULT"], "method", false, false, false, 400)) {
                // line 401
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["MEDIA_STATS_ENABLED_DEFAULT", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MEDIA_STATS_ENABLED_DEFAULT"], "method", false, false, false, 401), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 401, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 403
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["MEDIA_STATS_ENABLED_DEFAULT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MEDIA_STATS_ENABLED_DEFAULT"], "method", false, false, false, 403), ($context["helpText"] ?? null)], 403, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 405
            echo "                                ";
        }
        // line 406
        echo "
                                ";
        // line 407
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["PLAYLIST_STATS_ENABLED_DEFAULT"], "method", false, false, false, 407)) {
            // line 408
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Enable Playlist Stats Collection?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 409
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Select the Default setting to use for the collection of Proof of Play statistics for all Playlists.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 410
            echo "
                                    ";
            // line 411
            ob_start(function () { return ''; });
            echo __("Off");
            $context["offOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 412
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("On");
            $context["onOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 413
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Inherit");
            $context["inheritOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 414
            echo "                                    ";
            $context["options"] = [["id" => "Off", "value" =>             // line 415
($context["offOption"] ?? null)], ["id" => "On", "value" =>             // line 416
($context["onOption"] ?? null)], ["id" => "Inherit", "value" =>             // line 417
($context["inheritOption"] ?? null)]];
            // line 419
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["PLAYLIST_STATS_ENABLED_DEFAULT"], "method", false, false, false, 419)) {
                // line 420
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["PLAYLIST_STATS_ENABLED_DEFAULT", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PLAYLIST_STATS_ENABLED_DEFAULT"], "method", false, false, false, 420), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 420, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 422
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["PLAYLIST_STATS_ENABLED_DEFAULT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PLAYLIST_STATS_ENABLED_DEFAULT"], "method", false, false, false, 422), ($context["helpText"] ?? null)], 422, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 424
            echo "                                ";
        }
        // line 425
        echo "
                                ";
        // line 426
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["WIDGET_STATS_ENABLED_DEFAULT"], "method", false, false, false, 426)) {
            // line 427
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Enable Widget Stats Collection?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 428
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Select the Default setting to use for the collection for Proof of Play statistics for all Widgets.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 429
            echo "
                                    ";
            // line 430
            ob_start(function () { return ''; });
            echo __("Off");
            $context["offOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 431
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("On");
            $context["onOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 432
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Inherit");
            $context["inheritOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 433
            echo "                                    ";
            $context["options"] = [["id" => "Off", "value" =>             // line 434
($context["offOption"] ?? null)], ["id" => "On", "value" =>             // line 435
($context["onOption"] ?? null)], ["id" => "Inherit", "value" =>             // line 436
($context["inheritOption"] ?? null)]];
            // line 438
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["WIDGET_STATS_ENABLED_DEFAULT"], "method", false, false, false, 438)) {
                // line 439
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["WIDGET_STATS_ENABLED_DEFAULT", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["WIDGET_STATS_ENABLED_DEFAULT"], "method", false, false, false, 439), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 439, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 441
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["WIDGET_STATS_ENABLED_DEFAULT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["WIDGET_STATS_ENABLED_DEFAULT"], "method", false, false, false, 441), ($context["helpText"] ?? null)], 441, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 443
            echo "                                ";
        }
        // line 444
        echo "
                                ";
        // line 445
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED"], "method", false, false, false, 445)) {
            // line 446
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Enable the option to report the current layout status?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 447
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED"], "method", false, false, false, 447), "", "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED"], "method", false, false, false, 447)], 447, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 449
        echo "
                                ";
        // line 450
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DISPLAY_LOCK_NAME_TO_DEVICENAME"], "method", false, false, false, 450)) {
            // line 451
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Lock the Display Name to the device name provided by the Player?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 452
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["DISPLAY_LOCK_NAME_TO_DEVICENAME", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_LOCK_NAME_TO_DEVICENAME"], "method", false, false, false, 452), "", "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DISPLAY_LOCK_NAME_TO_DEVICENAME"], "method", false, false, false, 452)], 452, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 454
        echo "
                                ";
        // line 455
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED"], "method", false, false, false, 455)) {
            // line 456
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Enable the option to set the screenshot interval?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 457
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED"], "method", false, false, false, 457), "", "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED"], "method", false, false, false, 457)], 457, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 459
        echo "
                                ";
        // line 460
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT"], "method", false, false, false, 460)) {
            // line 461
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Display Screenshot Default Size");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 462
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The default size in pixels for the Display Screenshots");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 463
            echo "
                                    ";
            // line 464
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT"], "method", false, false, false, 464)) {
                // line 465
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT", 200], "method", false, false, false, 465), ($context["helpText"] ?? null)], 465, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 467
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT", 200], "method", false, false, false, 467), ($context["helpText"] ?? null)], 467, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 469
            echo "                                ";
        }
        // line 470
        echo "
                                ";
        // line 471
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DISPLAY_SCREENSHOT_TTL"], "method", false, false, false, 471)) {
            // line 472
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Display screenshot Time to keep (days)");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 473
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Display screenshots older than the TTL will be automatically removed. Set to 0 to never remove old screenshots.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 474
            echo "
                                    ";
            // line 475
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DISPLAY_SCREENSHOT_TTL"], "method", false, false, false, 475)) {
                // line 476
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["DISPLAY_SCREENSHOT_TTL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_SCREENSHOT_TTL", 0], "method", false, false, false, 476), ($context["helpText"] ?? null)], 476, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 478
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DISPLAY_SCREENSHOT_TTL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_SCREENSHOT_TTL", 0], "method", false, false, false, 478), ($context["helpText"] ?? null)], 478, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 480
            echo "                                ";
        }
        // line 481
        echo "
                                ";
        // line 482
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DISPLAY_AUTO_AUTH"], "method", false, false, false, 482)) {
            // line 483
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Automatically authorise new Displays?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 484
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("If checked all new Displays registering with the CMS using the correct CMS key will automatically be set to authorised and display the Default Layout.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 485
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["DISPLAY_AUTO_AUTH", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_AUTO_AUTH", 0], "method", false, false, false, 485), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DISPLAY_AUTO_AUTH"], "method", false, false, false, 485)], 485, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 487
        echo "
                                ";
        // line 488
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DISPLAY_DEFAULT_FOLDER"], "method", false, false, false, 488)) {
            // line 489
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default Folder for new Displays");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 490
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Set default folder for new Displays, by default the Root folder will be used");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 491
            echo "
                                    ";
            // line 492
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DISPLAY_DEFAULT_FOLDER"], "method", false, false, false, 492)) {
                // line 493
                echo "                                        ";
                $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("folders.search")], ["name" => "data-filter-options", "value" => "{\"gridView\":1}"], ["name" => "data-search-term", "value" => "folderName"], ["name" => "data-id-property", "value" => "folderId"], ["name" => "data-text-property", "value" => "text"], ["name" => "data-initial-key", "value" => "folderId"], ["name" => "data-initial-value", "value" => twig_get_attribute($this->env, $this->source,                 // line 501
($context["theme"] ?? null), "getSetting", ["DISPLAY_DEFAULT_FOLDER", 1], "method", false, false, false, 501)]];
                // line 503
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["DISPLAY_DEFAULT_FOLDER", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_DEFAULT_FOLDER", 1], "method", false, false, false, 503), null, "", "", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 503, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 505
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DISPLAY_DEFAULT_FOLDER", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_DEFAULT_FOLDER"], "method", false, false, false, 505), ($context["helpText"] ?? null)], 505, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 507
            echo "                                ";
        }
        // line 508
        echo "                            </div>
                            <div class=\"tab-pane\" id=\"tab_general\">
                                <h3 class=\"section-heading\">";
        // line 510
        echo __("General");
        echo "</h3>

                                ";
        // line 512
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["HELP_BASE"], "method", false, false, false, 512)) {
            // line 513
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Location of the Manual");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 514
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The address of the user manual, which will be used as a prefix for all help links.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 515
            echo "
                                    ";
            // line 516
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["HELP_BASE"], "method", false, false, false, 516)) {
                // line 517
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["HELP_BASE", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["HELP_BASE", "https://xibosignage.com/manual/"], "method", false, false, false, 517), ($context["helpText"] ?? null), "required"], 517, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 519
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["HELP_BASE", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["HELP_BASE", "https://xibosignage.com/manual/"], "method", false, false, false, 519), ($context["helpText"] ?? null)], 519, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 521
            echo "                                ";
        }
        // line 522
        echo "
                                ";
        // line 523
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["QUICK_CHART_URL"], "method", false, false, false, 523)) {
            // line 524
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Quick Chart URL");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 525
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Enter the URL to a Quick Chart service. This is used to draw charts in emailed reports and for showing a QR code during two factor authentication.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 526
            echo "
                                    ";
            // line 527
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["QUICK_CHART_URL"], "method", false, false, false, 527)) {
                // line 528
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["QUICK_CHART_URL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["QUICK_CHART_URL", "https://quickchart.io"], "method", false, false, false, 528), ($context["helpText"] ?? null), "required"], 528, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 530
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["QUICK_CHART_URL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["QUICK_CHART_URL", "https://quickchart.io"], "method", false, false, false, 530), ($context["helpText"] ?? null)], 530, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 532
            echo "                                ";
        }
        // line 533
        echo "
                                ";
        // line 534
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["PHONE_HOME"], "method", false, false, false, 534)) {
            // line 535
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Allow usage tracking?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 536
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Should the CMS send anonymous statistics to help improve the software?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 537
            echo "
                                    ";
            // line 538
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["PHONE_HOME", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PHONE_HOME"], "method", false, false, false, 538), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["PHONE_HOME"], "method", false, false, false, 538)], 538, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 540
        echo "
                                ";
        // line 541
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["PHONE_HOME_KEY"], "method", false, false, false, 541)) {
            // line 542
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Phone home key");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 543
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Key used to distinguish each CMS instance. This is generated randomly based on the time you first installed the CMS, and is completely untraceable.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 544
            echo "
                                    ";
            // line 545
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["PHONE_HOME_KEY"], "method", false, false, false, 545)) {
                // line 546
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["PHONE_HOME_KEY", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PHONE_HOME_KEY"], "method", false, false, false, 546), ($context["helpText"] ?? null)], 546, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 548
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["PHONE_HOME_KEY", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PHONE_HOME_KEY"], "method", false, false, false, 548), ($context["helpText"] ?? null)], 548, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 550
            echo "                                ";
        }
        // line 551
        echo "
                                ";
        // line 552
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["PHONE_HOME_DATE"], "method", false, false, false, 552)) {
            // line 553
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Phone home time");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 554
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The last time we PHONED_HOME in seconds since the epoch");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 555
            echo "
                                    ";
            // line 556
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["PHONE_HOME_DATE"], "method", false, false, false, 556)) {
                // line 557
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["PHONE_HOME_DATE", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PHONE_HOME_DATE"], "method", false, false, false, 557), ($context["helpText"] ?? null)], 557, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 559
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["PHONE_HOME_DATE", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PHONE_HOME_DATE"], "method", false, false, false, 559), ($context["helpText"] ?? null)], 559, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 561
            echo "                                ";
        }
        // line 562
        echo "
                                ";
        // line 563
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["PHONE_HOME_URL"], "method", false, false, false, 563)) {
            // line 564
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Phone home URL");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 565
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The URL to connect to to PHONE_HOME (if enabled)");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 566
            echo "
                                    ";
            // line 567
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["PHONE_HOME_URL"], "method", false, false, false, 567)) {
                // line 568
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["PHONE_HOME_URL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PHONE_HOME_URL", "https://xibo.org.uk/api/stats/track"], "method", false, false, false, 568), ($context["helpText"] ?? null)], 568, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 570
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["PHONE_HOME_URL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PHONE_HOME_URL", "https://xibo.org.uk/api/stats/track"], "method", false, false, false, 570), ($context["helpText"] ?? null)], 570, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 572
            echo "                                ";
        }
        // line 573
        echo "
                                ";
        // line 574
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SCHEDULE_LOOKAHEAD"], "method", false, false, false, 574)) {
            // line 575
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Send Schedule in advance?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 576
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Should the CMS send future schedule information to Players?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 577
            echo "
                                    ";
            // line 578
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["SCHEDULE_LOOKAHEAD", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SCHEDULE_LOOKAHEAD", 1], "method", false, false, false, 578), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SCHEDULE_LOOKAHEAD"], "method", false, false, false, 578)], 578, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 580
        echo "
                                ";
        // line 581
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["REQUIRED_FILES_LOOKAHEAD"], "method", false, false, false, 581)) {
            // line 582
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Send files in advance?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 583
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("How many seconds in to the future should the calls to RequiredFiles look?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 584
            echo "
                                    ";
            // line 585
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["REQUIRED_FILES_LOOKAHEAD"], "method", false, false, false, 585)) {
                // line 586
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["REQUIRED_FILES_LOOKAHEAD", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["REQUIRED_FILES_LOOKAHEAD", "172800"], "method", false, false, false, 586), ($context["helpText"] ?? null)], 586, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 588
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["REQUIRED_FILES_LOOKAHEAD", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["REQUIRED_FILES_LOOKAHEAD", "172800"], "method", false, false, false, 588), ($context["helpText"] ?? null)], 588, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 590
            echo "                                ";
        }
        // line 591
        echo "
                                ";
        // line 592
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SETTING_IMPORT_ENABLED"], "method", false, false, false, 592)) {
            // line 593
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Allow Import?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 594
            echo "
                                    ";
            // line 595
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["SETTING_IMPORT_ENABLED", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SETTING_IMPORT_ENABLED", 0], "method", false, false, false, 595), "", "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SETTING_IMPORT_ENABLED"], "method", false, false, false, 595)], 595, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 597
        echo "
                                ";
        // line 598
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SETTING_LIBRARY_TIDY_ENABLED"], "method", false, false, false, 598)) {
            // line 599
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Enable Library Tidy?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 600
            echo "
                                    ";
            // line 601
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["SETTING_LIBRARY_TIDY_ENABLED", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SETTING_LIBRARY_TIDY_ENABLED", 1], "method", false, false, false, 601), "", "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SETTING_LIBRARY_TIDY_ENABLED"], "method", false, false, false, 601)], 601, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 603
        echo "
                                ";
        // line 604
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["EMBEDDED_STATUS_WIDGET"], "method", false, false, false, 604)) {
            // line 605
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Status Dashboard Widget");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 606
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("HTML to embed in an iframe on the Status Dashboard");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 607
            echo "
                                    ";
            // line 608
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["EMBEDDED_STATUS_WIDGET"], "method", false, false, false, 608)) {
                // line 609
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["EMBEDDED_STATUS_WIDGET", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["EMBEDDED_STATUS_WIDGET"], "method", false, false, false, 609), ($context["helpText"] ?? null)], 609, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 611
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["EMBEDDED_STATUS_WIDGET", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["EMBEDDED_STATUS_WIDGET"], "method", false, false, false, 611), ($context["helpText"] ?? null)], 611, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 613
            echo "                                ";
        }
        // line 614
        echo "
                                ";
        // line 615
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULTS_IMPORTED"], "method", false, false, false, 615)) {
            // line 616
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Defaults Imported?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 617
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Has the default layout been imported?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 618
            echo "
                                    ";
            // line 619
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["DEFAULTS_IMPORTED", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULTS_IMPORTED", 0], "method", false, false, false, 619), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULTS_IMPORTED"], "method", false, false, false, 619)], 619, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 621
        echo "
                                ";
        // line 622
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DASHBOARD_LATEST_NEWS_ENABLED"], "method", false, false, false, 622)) {
            // line 623
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Enable Latest News?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 624
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Should the Dashboard show latest news? The address is provided by the theme.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 625
            echo "
                                    ";
            // line 626
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["DASHBOARD_LATEST_NEWS_ENABLED", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DASHBOARD_LATEST_NEWS_ENABLED", 1], "method", false, false, false, 626), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DASHBOARD_LATEST_NEWS_ENABLED"], "method", false, false, false, 626)], 626, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 628
        echo "
                                ";
        // line 629
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["INSTANCE_SUSPENDED"], "method", false, false, false, 629)) {
            // line 630
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Instance Suspended");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 631
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Is this instance suspended?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 632
            echo "
                                    ";
            // line 633
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["INSTANCE_SUSPENDED", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["INSTANCE_SUSPENDED", 0], "method", false, false, false, 633), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["INSTANCE_SUSPENDED"], "method", false, false, false, 633)], 633, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 635
        echo "
                                ";
        // line 636
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["LATEST_NEWS_URL"], "method", false, false, false, 636)) {
            // line 637
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Latest News URL");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 638
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("RSS/Atom Feed to be displayed on the Status Dashboard");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 639
            echo "
                                    ";
            // line 640
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["LATEST_NEWS_URL"], "method", false, false, false, 640)) {
                // line 641
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["LATEST_NEWS_URL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LATEST_NEWS_URL"], "method", false, false, false, 641), ($context["helpText"] ?? null)], 641, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 643
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["LATEST_NEWS_URL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LATEST_NEWS_URL"], "method", false, false, false, 643), ($context["helpText"] ?? null)], 643, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 645
            echo "                                ";
        }
        // line 646
        echo "
                                ";
        // line 647
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["REPORTS_EXPORT_SHOW_LOGO"], "method", false, false, false, 647)) {
            // line 648
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Show the Logo on report exports?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 649
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("When exporting a saved report to PDF, should the logo be shown on the PDF?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 650
            echo "
                                    ";
            // line 651
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["REPORTS_EXPORT_SHOW_LOGO", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["REPORTS_EXPORT_SHOW_LOGO", 0], "method", false, false, false, 651), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["REPORTS_EXPORT_SHOW_LOGO"], "method", false, false, false, 651)], 651, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 653
        echo "                            </div>
                            <div class=\"tab-pane\" id=\"tab_maint\">
                                <h3 class=\"section-heading\">";
        // line 655
        echo __("Maintenance");
        echo "</h3>

                                ";
        // line 657
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["MAINTENANCE_ENABLED"], "method", false, false, false, 657)) {
            // line 658
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Enable Maintenance?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 659
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Allow the maintenance script to run if it is called?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 660
            echo "
                                    ";
            // line 661
            ob_start(function () { return ''; });
            echo __("Off");
            $context["offOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 662
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("On");
            $context["onOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 663
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Protected");
            $context["protectedOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 664
            echo "                                    ";
            $context["options"] = [["id" => "Off", "value" =>             // line 665
($context["offOption"] ?? null)], ["id" => "On", "value" =>             // line 666
($context["onOption"] ?? null)], ["id" => "Protected", "value" =>             // line 667
($context["protectedOption"] ?? null)]];
            // line 669
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["MAINTENANCE_ENABLED"], "method", false, false, false, 669)) {
                // line 670
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["MAINTENANCE_ENABLED", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_ENABLED", "Off"], "method", false, false, false, 670), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 670, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 672
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["MAINTENANCE_ENABLED", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_ENABLED", "Off"], "method", false, false, false, 672), ($context["helpText"] ?? null)], 672, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 674
            echo "                                ";
        }
        // line 675
        echo "
                                ";
        // line 676
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["MAINTENANCE_EMAIL_ALERTS"], "method", false, false, false, 676)) {
            // line 677
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Enable Email Alerts?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 678
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Global switch for email alerts to be sent");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 679
            echo "
                                    ";
            // line 680
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["MAINTENANCE_EMAIL_ALERTS", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_EMAIL_ALERTS", 1], "method", false, false, false, 680), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["MAINTENANCE_EMAIL_ALERTS"], "method", false, false, false, 680)], 680, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 682
        echo "
                                ";
        // line 683
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["MAINTENANCE_LOG_MAXAGE"], "method", false, false, false, 683)) {
            // line 684
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Max Log Age");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 685
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Maximum age for log entries in days. Set to 0 to keep logs indefinitely.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 686
            echo "
                                    ";
            // line 687
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["MAINTENANCE_LOG_MAXAGE"], "method", false, false, false, 687)) {
                // line 688
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["MAINTENANCE_LOG_MAXAGE", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_LOG_MAXAGE", 30], "method", false, false, false, 688), ($context["helpText"] ?? null)], 688, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 690
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["MAINTENANCE_LOG_MAXAGE", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_LOG_MAXAGE", 30], "method", false, false, false, 690), ($context["helpText"] ?? null)], 690, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 692
            echo "                                ";
        }
        // line 693
        echo "
                                ";
        // line 694
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["MAINTENANCE_STAT_MAXAGE"], "method", false, false, false, 694)) {
            // line 695
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Max Statistics Age");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 696
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Maximum age for statistics entries in days. Entries older than this will not be processed and existing entries will be removed. Set to 0 to keep statistics indefinitely.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 697
            echo "
                                    ";
            // line 698
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["MAINTENANCE_STAT_MAXAGE"], "method", false, false, false, 698)) {
                // line 699
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["MAINTENANCE_STAT_MAXAGE", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_STAT_MAXAGE", 30], "method", false, false, false, 699), ($context["helpText"] ?? null)], 699, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 701
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["MAINTENANCE_STAT_MAXAGE", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_STAT_MAXAGE", 30], "method", false, false, false, 701), ($context["helpText"] ?? null)], 701, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 703
            echo "                                ";
        }
        // line 704
        echo "
                                ";
        // line 705
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["MAINTENANCE_ALERT_TOUT"], "method", false, false, false, 705)) {
            // line 706
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Max Display Timeout");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 707
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("How long in minutes after the last time a Player connects should we send an alert? Can be overridden on a per Player basis.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 708
            echo "
                                    ";
            // line 709
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["MAINTENANCE_ALERT_TOUT"], "method", false, false, false, 709)) {
                // line 710
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["MAINTENANCE_ALERT_TOUT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_ALERT_TOUT", 12], "method", false, false, false, 710), ($context["helpText"] ?? null)], 710, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 712
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["MAINTENANCE_ALERT_TOUT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_ALERT_TOUT", 12], "method", false, false, false, 712), ($context["helpText"] ?? null)], 712, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 714
            echo "                                ";
        }
        // line 715
        echo "
                                ";
        // line 716
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["MAINTENANCE_ALWAYS_ALERT"], "method", false, false, false, 716)) {
            // line 717
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Send repeat Display Timeouts");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 718
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Should the CMS send an email if a display is in an error state every time maintenance runs?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 719
            echo "
                                    ";
            // line 720
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["MAINTENANCE_ALWAYS_ALERT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_ALWAYS_ALERT", 0], "method", false, false, false, 720), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["MAINTENANCE_ALWAYS_ALERT"], "method", false, false, false, 720)], 720, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 722
        echo "
                            </div>
                            <div class=\"tab-pane\" id=\"tab_network\">
                                <h3 class=\"section-heading\">";
        // line 725
        echo __("Network");
        echo "</h3>

                                ";
        // line 727
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["mail_to"], "method", false, false, false, 727)) {
            // line 728
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Admin email address");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 729
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("This is the overall CMS adminstrator who will receive copies of all email notifications generated by the CMS.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 730
            echo "
                                    ";
            // line 731
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["mail_to"], "method", false, false, false, 731)) {
                // line 732
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["mail_to", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["mail_to"], "method", false, false, false, 732), ($context["helpText"] ?? null)], 732, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 734
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["mail_to", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["mail_to"], "method", false, false, false, 734), ($context["helpText"] ?? null)], 734, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 736
            echo "                                ";
        }
        // line 737
        echo "
                                ";
        // line 738
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["mail_from"], "method", false, false, false, 738)) {
            // line 739
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Sending email address");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 740
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Mail will be sent from this address");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 741
            echo "
                                    ";
            // line 742
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["mail_from"], "method", false, false, false, 742)) {
                // line 743
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["mail_from", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["mail_from"], "method", false, false, false, 743), ($context["helpText"] ?? null)], 743, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 745
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["mail_from", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["mail_from"], "method", false, false, false, 745), ($context["helpText"] ?? null)], 745, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 747
            echo "                                ";
        }
        // line 748
        echo "
                                ";
        // line 749
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["mail_from_name"], "method", false, false, false, 749)) {
            // line 750
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Sending email name");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 751
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Mail will be sent under this name");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 752
            echo "
                                    ";
            // line 753
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["mail_from_name"], "method", false, false, false, 753)) {
                // line 754
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["mail_from_name", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["mail_from_name"], "method", false, false, false, 754), ($context["helpText"] ?? null)], 754, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 756
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["mail_from_name", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["mail_from_name"], "method", false, false, false, 756), ($context["helpText"] ?? null)], 756, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 758
            echo "                                ";
        }
        // line 759
        echo "
                                ";
        // line 760
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SENDFILE_MODE"], "method", false, false, false, 760)) {
            // line 761
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("File download mode");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 762
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Should the CMS use Apache X-Sendfile, Nginx X-Accel, or PHP (Off) to return the files from the library?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 763
            echo "
                                    ";
            // line 764
            ob_start(function () { return ''; });
            echo __("Off");
            $context["offOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 765
            echo "                                    ";
            $context["options"] = [["id" => "Off", "value" =>             // line 766
($context["offOption"] ?? null)], ["id" => "Apache", "value" => "Apache"], ["id" => "Nginx", "value" => "Nginx"]];
            // line 770
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SENDFILE_MODE"], "method", false, false, false, 770)) {
                // line 771
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["SENDFILE_MODE", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SENDFILE_MODE", "Off"], "method", false, false, false, 771), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 771, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 773
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["SENDFILE_MODE", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SENDFILE_MODE", "Off"], "method", false, false, false, 773), ($context["helpText"] ?? null)], 773, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 775
            echo "                                ";
        }
        // line 776
        echo "
                                ";
        // line 777
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["PROXY_HOST"], "method", false, false, false, 777)) {
            // line 778
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Proxy URL");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 779
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The Proxy URL");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 780
            echo "
                                    ";
            // line 781
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["PROXY_HOST"], "method", false, false, false, 781)) {
                // line 782
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["PROXY_HOST", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PROXY_HOST"], "method", false, false, false, 782), ($context["helpText"] ?? null)], 782, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 784
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["PROXY_HOST", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PROXY_HOST"], "method", false, false, false, 784), ($context["helpText"] ?? null)], 784, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 786
            echo "                                ";
        }
        // line 787
        echo "
                                ";
        // line 788
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["PROXY_PORT"], "method", false, false, false, 788)) {
            // line 789
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Proxy Port");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 790
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The Proxy Port");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 791
            echo "
                                    ";
            // line 792
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["PROXY_PORT"], "method", false, false, false, 792)) {
                // line 793
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["PROXY_PORT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PROXY_PORT", 0], "method", false, false, false, 793), ($context["helpText"] ?? null)], 793, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 795
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["PROXY_PORT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PROXY_PORT", 0], "method", false, false, false, 795), ($context["helpText"] ?? null)], 795, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 797
            echo "                                ";
        }
        // line 798
        echo "
                                ";
        // line 799
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["PROXY_AUTH"], "method", false, false, false, 799)) {
            // line 800
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Proxy Credentials");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 801
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The Authentication information for this proxy. username:password");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 802
            echo "
                                    ";
            // line 803
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["PROXY_AUTH"], "method", false, false, false, 803)) {
                // line 804
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["PROXY_AUTH", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PROXY_AUTH"], "method", false, false, false, 804), ($context["helpText"] ?? null)], 804, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 806
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["PROXY_AUTH", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PROXY_AUTH"], "method", false, false, false, 806), ($context["helpText"] ?? null)], 806, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 808
            echo "                                ";
        }
        // line 809
        echo "
                                ";
        // line 810
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["PROXY_EXCEPTIONS"], "method", false, false, false, 810)) {
            // line 811
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Proxy Exceptions");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 812
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Hosts and Keywords that should not be loaded via the Proxy Specified. These should be comma separated.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 813
            echo "
                                    ";
            // line 814
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["PROXY_EXCEPTIONS"], "method", false, false, false, 814)) {
                // line 815
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["PROXY_EXCEPTIONS", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PROXY_EXCEPTIONS"], "method", false, false, false, 815), ($context["helpText"] ?? null)], 815, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 817
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["PROXY_EXCEPTIONS", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PROXY_EXCEPTIONS"], "method", false, false, false, 817), ($context["helpText"] ?? null)], 817, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 819
            echo "                                ";
        }
        // line 820
        echo "
                                ";
        // line 821
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["CDN_URL"], "method", false, false, false, 821)) {
            // line 822
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("CDN Address");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 823
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Content Delivery Network Address for serving file requests to Players");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 824
            echo "
                                    ";
            // line 825
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["CDN_URL"], "method", false, false, false, 825)) {
                // line 826
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["CDN_URL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["CDN_URL"], "method", false, false, false, 826), ($context["helpText"] ?? null)], 826, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 828
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["CDN_URL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["CDN_URL"], "method", false, false, false, 828), ($context["helpText"] ?? null)], 828, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 830
            echo "                                ";
        }
        // line 831
        echo "
                                ";
        // line 832
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["MONTHLY_XMDS_TRANSFER_LIMIT_KB"], "method", false, false, false, 832)) {
            // line 833
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Monthly bandwidth Limit");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 834
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("XMDS Transfer Limit in KB/month");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 835
            echo "
                                    ";
            // line 836
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["MONTHLY_XMDS_TRANSFER_LIMIT_KB"], "method", false, false, false, 836)) {
                // line 837
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["MONTHLY_XMDS_TRANSFER_LIMIT_KB", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MONTHLY_XMDS_TRANSFER_LIMIT_KB"], "method", false, false, false, 837), ($context["helpText"] ?? null)], 837, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 839
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["MONTHLY_XMDS_TRANSFER_LIMIT_KB", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MONTHLY_XMDS_TRANSFER_LIMIT_KB"], "method", false, false, false, 839), ($context["helpText"] ?? null)], 839, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 841
            echo "                                ";
        }
        // line 842
        echo "
                                ";
        // line 843
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["LIBRARY_SIZE_LIMIT_KB"], "method", false, false, false, 843)) {
            // line 844
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Library Size Limit");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 845
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The Limit for the Library Size in KB");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 846
            echo "
                                    ";
            // line 847
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["LIBRARY_SIZE_LIMIT_KB"], "method", false, false, false, 847)) {
                // line 848
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["LIBRARY_SIZE_LIMIT_KB", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LIBRARY_SIZE_LIMIT_KB"], "method", false, false, false, 848), ($context["helpText"] ?? null)], 848, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 850
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["LIBRARY_SIZE_LIMIT_KB", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LIBRARY_SIZE_LIMIT_KB"], "method", false, false, false, 850), ($context["helpText"] ?? null)], 850, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 852
            echo "                                ";
        }
        // line 853
        echo "
                                ";
        // line 854
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["FORCE_HTTPS"], "method", false, false, false, 854)) {
            // line 855
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Force HTTPS?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 856
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Force the portal into HTTPS?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 857
            echo "
                                    ";
            // line 858
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["FORCE_HTTPS", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["FORCE_HTTPS", 0], "method", false, false, false, 858), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["FORCE_HTTPS"], "method", false, false, false, 858)], 858, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 860
        echo "
                                ";
        // line 861
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["ISSUE_STS"], "method", false, false, false, 861)) {
            // line 862
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Enable STS?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 863
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Add STS to the response headers? Make sure you fully understand STS before turning it on as it will prevent access via HTTP after the first successful HTTPS connection.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 864
            echo "
                                    ";
            // line 865
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["ISSUE_STS", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["ISSUE_STS", 0], "method", false, false, false, 865), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["ISSUE_STS"], "method", false, false, false, 865)], 865, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 867
        echo "
                                ";
        // line 868
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["STS_TTL"], "method", false, false, false, 868)) {
            // line 869
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("STS Time out");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 870
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The Time to Live (maxage) of the STS header expressed in seconds.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 871
            echo "
                                    ";
            // line 872
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["STS_TTL"], "method", false, false, false, 872)) {
                // line 873
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["STS_TTL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["STS_TTL", "600"], "method", false, false, false, 873), ($context["helpText"] ?? null), "", "", "", 999999999], 873, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 875
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["STS_TTL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["STS_TTL", "600"], "method", false, false, false, 875), ($context["helpText"] ?? null)], 875, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 877
            echo "                                ";
        }
        // line 878
        echo "
                                ";
        // line 879
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["WHITELIST_LOAD_BALANCERS"], "method", false, false, false, 879)) {
            // line 880
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Whitelist Load Balancers");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 881
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("If the CMS is behind a load balancer, what are the load balancer IP addresses, comma delimited.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 882
            echo "
                                    ";
            // line 883
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["WHITELIST_LOAD_BALANCERS"], "method", false, false, false, 883)) {
                // line 884
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["WHITELIST_LOAD_BALANCERS", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["WHITELIST_LOAD_BALANCERS"], "method", false, false, false, 884), ($context["helpText"] ?? null)], 884, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 886
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["WHITELIST_LOAD_BALANCERS", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["WHITELIST_LOAD_BALANCERS"], "method", false, false, false, 886), ($context["helpText"] ?? null)], 886, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 888
            echo "                                ";
        }
        // line 889
        echo "                            </div>
                            <div class=\"tab-pane\" id=\"tab_permissions\">
                                <h3 class=\"section-heading\">";
        // line 891
        echo __("Sharing");
        echo "</h3>

                                ";
        // line 893
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["REGION_OPTIONS_COLOURING"], "method", false, false, false, 893)) {
            // line 894
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Widget colouring in Playlist editor");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 895
            echo "
                                    ";
            // line 896
            ob_start(function () { return ''; });
            echo __("Media Colouring");
            $context["privateOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 897
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Sharing Colouring");
            $context["groupOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 898
            echo "                                    ";
            $context["options"] = [["id" => "Media Colouring", "value" =>             // line 899
($context["privateOption"] ?? null)], ["id" => "Sharing Colouring", "value" =>             // line 900
($context["groupOption"] ?? null)]];
            // line 902
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["REGION_OPTIONS_COLOURING"], "method", false, false, false, 902)) {
                // line 903
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["REGION_OPTIONS_COLOURING", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["REGION_OPTIONS_COLOURING", "Media Colouring"], "method", false, false, false, 903), ($context["options"] ?? null), "id", "value"], 903, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 905
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["REGION_OPTIONS_COLOURING", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["REGION_OPTIONS_COLOURING", "Media Colouring"], "method", false, false, false, 905), ($context["helpText"] ?? null)], 905, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 907
            echo "                                ";
        }
        // line 908
        echo "
                                ";
        // line 909
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SCHEDULE_WITH_VIEW_PERMISSION"], "method", false, false, false, 909)) {
            // line 910
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Schedule with view sharing?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 911
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Should users with View sharing on displays be allowed to schedule to them?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 912
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["SCHEDULE_WITH_VIEW_PERMISSION", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SCHEDULE_WITH_VIEW_PERMISSION", 0], "method", false, false, false, 912), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SCHEDULE_WITH_VIEW_PERMISSION"], "method", false, false, false, 912)], 912, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 914
        echo "
                                ";
        // line 915
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SCHEDULE_SHOW_LAYOUT_NAME"], "method", false, false, false, 915)) {
            // line 916
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Show event Layout regardless of User permission?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 917
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("If checked then the Schedule will show the Layout for existing events even if the logged in User does not have permission to see that Layout.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 918
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["SCHEDULE_SHOW_LAYOUT_NAME", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SCHEDULE_SHOW_LAYOUT_NAME", 0], "method", false, false, false, 918), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SCHEDULE_SHOW_LAYOUT_NAME"], "method", false, false, false, 918)], 918, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 920
        echo "
                                ";
        // line 921
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["TASK_CONFIG_LOCKED_CHECKB"], "method", false, false, false, 921)) {
            // line 922
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Lock Task Config");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 923
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Is the task config locked? Useful for Service providers.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 924
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["TASK_CONFIG_LOCKED_CHECKB", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["TASK_CONFIG_LOCKED_CHECKB"], "method", false, false, false, 924), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["TASK_CONFIG_LOCKED_CHECKB"], "method", false, false, false, 924)], 924, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 926
        echo "
                                ";
        // line 927
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["TRANSITION_CONFIG_LOCKED_CHECKB"], "method", false, false, false, 927)) {
            // line 928
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Is the Transition config locked?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 929
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Allow modifications to the transition configuration?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 930
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["TRANSITION_CONFIG_LOCKED_CHECKB", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["TRANSITION_CONFIG_LOCKED_CHECKB"], "method", false, false, false, 930), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["TRANSITION_CONFIG_LOCKED_CHECKB"], "method", false, false, false, 930)], 930, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 932
        echo "
                                ";
        // line 933
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["FOLDERS_ALLOW_SAVE_IN_ROOT"], "method", false, false, false, 933)) {
            // line 934
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Allow saving in the root folder?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 935
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Users can use the top level folder to store content. Disable to force the use of folders.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 936
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["FOLDERS_ALLOW_SAVE_IN_ROOT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["FOLDERS_ALLOW_SAVE_IN_ROOT"], "method", false, false, false, 936), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["FOLDERS_ALLOW_SAVE_IN_ROOT"], "method", false, false, false, 936)], 936, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 938
        echo "                            </div>
                            <div class=\"tab-pane\" id=\"tab_regional\">
                                <h3 class=\"section-heading\">";
        // line 940
        echo __("Regional");
        echo "</h3>

                                ";
        // line 942
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_LANGUAGE"], "method", false, false, false, 942)) {
            // line 943
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default Language");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 944
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The default language to use");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 945
            echo "
                                    ";
            // line 946
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_LANGUAGE"], "method", false, false, false, 946)) {
                // line 947
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["DEFAULT_LANGUAGE", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_LANGUAGE", "en_GB"], "method", false, false, false, 947), ($context["languages"] ?? null), "id", "value", ($context["helpText"] ?? null)], 947, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 949
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DEFAULT_LANGUAGE", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_LANGUAGE", "en_GB"], "method", false, false, false, 949), ($context["helpText"] ?? null)], 949, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 951
            echo "                                ";
        }
        // line 952
        echo "
                                ";
        // line 953
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["defaultTimezone"], "method", false, false, false, 953)) {
            // line 954
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Timezone");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 955
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Set the default timezone for the application");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 956
            echo "
                                    ";
            // line 957
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["defaultTimezone"], "method", false, false, false, 957)) {
                // line 958
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["defaultTimezone", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["defaultTimezone", "Europe/London"], "method", false, false, false, 958), ($context["timeZones"] ?? null), "id", "value", ($context["helpText"] ?? null)], 958, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 960
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["defaultTimezone", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["defaultTimezone", "Europe/London"], "method", false, false, false, 960), ($context["helpText"] ?? null)], 960, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 962
            echo "                                ";
        }
        // line 963
        echo "
                                ";
        // line 964
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DATE_FORMAT"], "method", false, false, false, 964)) {
            // line 965
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Date Format");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 966
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The Date Format to use when displaying dates in the CMS.");
            // line 967
            echo "                                        <span id=\"date-format-table\"
                                              class=\"fa fa-info-circle\"
                                              data-toggle=\"popover\"
                                              data-trigger=\"hover\"
                                              data-placement=\"right\">
                                        </span>
                                    ";
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 974
            echo "
                                    ";
            // line 975
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DATE_FORMAT"], "method", false, false, false, 975)) {
                // line 976
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["DATE_FORMAT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DATE_FORMAT", "Y-m-d"], "method", false, false, false, 976), ($context["helpText"] ?? null), "required"], 976, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 978
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DATE_FORMAT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DATE_FORMAT", "Y-m-d"], "method", false, false, false, 978), ($context["helpText"] ?? null)], 978, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 980
            echo "                                ";
        }
        // line 981
        echo "
                                ";
        // line 982
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DETECT_LANGUAGE"], "method", false, false, false, 982)) {
            // line 983
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Detect language?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 984
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Detect the browser language?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 985
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["DETECT_LANGUAGE", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DETECT_LANGUAGE"], "method", false, false, false, 985), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DETECT_LANGUAGE"], "method", false, false, false, 985)], 985, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 987
        echo "
                                ";
        // line 988
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["CALENDAR_TYPE"], "method", false, false, false, 988)) {
            // line 989
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Calendar Type");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 990
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Which Calendar Type should the CMS use?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 991
            echo "
                                    ";
            // line 992
            ob_start(function () { return ''; });
            echo __("Gregorian");
            $context["gregorianOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 993
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Jalali");
            $context["jalaliOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 994
            echo "                                    ";
            $context["options"] = [["id" => "Gregorian", "value" =>             // line 995
($context["gregorianOption"] ?? null)], ["id" => "Jalali", "value" =>             // line 996
($context["jalaliOption"] ?? null)]];
            // line 998
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["CALENDAR_TYPE"], "method", false, false, false, 998)) {
                // line 999
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["CALENDAR_TYPE", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["CALENDAR_TYPE", "Gregorian"], "method", false, false, false, 999), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 999, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 1001
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["CALENDAR_TYPE", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["CALENDAR_TYPE", "Gregorian"], "method", false, false, false, 1001), ($context["helpText"] ?? null)], 1001, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 1003
            echo "                                ";
        }
        // line 1004
        echo "                            </div>
                            <div class=\"tab-pane\" id=\"tab_troubleshooting\">
                                <h3 class=\"section-heading\">";
        // line 1006
        echo __("Troubleshooting");
        echo "</h3>

                                ";
        // line 1008
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["RESTING_LOG_LEVEL"], "method", false, false, false, 1008)) {
            // line 1009
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Resting Log Level");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1010
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Set the level of the resting log level. The CMS will revert to this log level after an elevated period ends. In production systems \"error\" is recommended.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1011
            echo "
                                    ";
            // line 1012
            ob_start(function () { return ''; });
            echo __("Emergency");
            $context["emergencyOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1013
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Alert");
            $context["alertOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1014
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Critical");
            $context["criticalOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1015
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Error");
            $context["errorOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1016
            echo "                                    ";
            $context["options"] = [["id" => "emergency", "value" =>             // line 1017
($context["emergencyOption"] ?? null)], ["id" => "alert", "value" =>             // line 1018
($context["alertOption"] ?? null)], ["id" => "critical", "value" =>             // line 1019
($context["criticalOption"] ?? null)], ["id" => "error", "value" =>             // line 1020
($context["errorOption"] ?? null)]];
            // line 1022
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["RESTING_LOG_LEVEL"], "method", false, false, false, 1022)) {
                // line 1023
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["RESTING_LOG_LEVEL", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["RESTING_LOG_LEVEL", "error"], "method", false, false, false, 1023), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 1023, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 1025
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["RESTING_LOG_LEVEL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["RESTING_LOG_LEVEL", "error"], "method", false, false, false, 1025), ($context["helpText"] ?? null)], 1025, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 1027
            echo "                                ";
        }
        // line 1028
        echo "
                                ";
        // line 1029
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["audit"], "method", false, false, false, 1029)) {
            // line 1030
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Log Level");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1031
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Set the level of logging the CMS should record. In production systems \"error\" is recommended.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1032
            echo "
                                    ";
            // line 1033
            ob_start(function () { return ''; });
            echo __("Emergency");
            $context["emergencyOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1034
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Alert");
            $context["alertOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1035
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Critical");
            $context["criticalOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1036
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Error");
            $context["errorOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1037
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Warning");
            $context["warningOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1038
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Notice");
            $context["noticeOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1039
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Information");
            $context["infoOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1040
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Debug");
            $context["debugOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1041
            echo "                                    ";
            $context["options"] = [["id" => "emergency", "value" =>             // line 1042
($context["emergencyOption"] ?? null)], ["id" => "alert", "value" =>             // line 1043
($context["alertOption"] ?? null)], ["id" => "critical", "value" =>             // line 1044
($context["criticalOption"] ?? null)], ["id" => "error", "value" =>             // line 1045
($context["errorOption"] ?? null)], ["id" => "warning", "value" =>             // line 1046
($context["warningOption"] ?? null)], ["id" => "notice", "value" =>             // line 1047
($context["noticeOption"] ?? null)], ["id" => "info", "value" =>             // line 1048
($context["infoOption"] ?? null)], ["id" => "debug", "value" =>             // line 1049
($context["debugOption"] ?? null)]];
            // line 1051
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["audit"], "method", false, false, false, 1051)) {
                // line 1052
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["audit", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["audit", "error"], "method", false, false, false, 1052), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 1052, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 1054
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["audit", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["audit", "error"], "method", false, false, false, 1054), ($context["helpText"] ?? null)], 1054, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 1056
            echo "                                ";
        }
        // line 1057
        echo "
                                ";
        // line 1058
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["ELEVATE_LOG_UNTIL"], "method", false, false, false, 1058)) {
            // line 1059
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Elevate Log Until");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1060
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Elevate the log level until this date.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1061
            echo "
                                    ";
            // line 1062
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["ELEVATE_LOG_UNTIL"], "method", false, false, false, 1062)) {
                // line 1063
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dateTime", ["ELEVATE_LOG_UNTIL", ($context["title"] ?? null), ($context["elevateLogUntil"] ?? null), ($context["helpText"] ?? null)], 1063, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 1065
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["ELEVATE_LOG_UNTIL", ($context["title"] ?? null), ($context["elevateLogUntil"] ?? null), ($context["helpText"] ?? null)], 1065, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 1067
            echo "                                ";
        }
        // line 1068
        echo "
                                ";
        // line 1069
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SERVER_MODE"], "method", false, false, false, 1069)) {
            // line 1070
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Server Mode");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1071
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("This should only be set if you want to display the maximum allowed error messaging through the user interface. <br /> Useful for capturing critical php errors and environment issues.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1072
            echo "
                                    ";
            // line 1073
            ob_start(function () { return ''; });
            echo __("Production");
            $context["productionOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1074
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Test");
            $context["testOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1075
            echo "                                    ";
            $context["options"] = [["id" => "Production", "value" =>             // line 1076
($context["productionOption"] ?? null)], ["id" => "Test", "value" =>             // line 1077
($context["testOption"] ?? null)]];
            // line 1079
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SERVER_MODE"], "method", false, false, false, 1079)) {
                // line 1080
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["SERVER_MODE", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SERVER_MODE", "Production"], "method", false, false, false, 1080), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 1080, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 1082
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["SERVER_MODE", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SERVER_MODE", "Production"], "method", false, false, false, 1082), ($context["helpText"] ?? null)], 1082, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 1084
            echo "                                ";
        }
        // line 1085
        echo "                            </div>
                            <div class=\"tab-pane\" id=\"tab_users\">
                                <h3 class=\"section-heading\">";
        // line 1087
        echo __("Users");
        echo "</h3>

                                ";
        // line 1089
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SYSTEM_USER"], "method", false, false, false, 1089)) {
            // line 1090
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("System User");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1091
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The system User for this CMS");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1092
            echo "
                                    ";
            // line 1093
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SYSTEM_USER"], "method", false, false, false, 1093)) {
                // line 1094
                echo "                                        ";
                $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.search")], ["name" => "data-search-term", "value" => "userName"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "userId"], ["name" => "data-text-property", "value" => "userName"], ["name" => "data-filter-options", "value" => "{\"userTypeId\":\"1\"}"]];
                // line 1103
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["SYSTEM_USER", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["systemUser"] ?? null), "userId", [], "any", false, false, false, 1103), [($context["systemUser"] ?? null)], "userId", "userName", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 1103, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 1105
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["SYSTEM_USER", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SYSTEM_USER"], "method", false, false, false, 1105), ($context["helpText"] ?? null)], 1105, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 1107
            echo "                                ";
        }
        // line 1108
        echo "
                                ";
        // line 1109
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_USERGROUP"], "method", false, false, false, 1109)) {
            // line 1110
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default User Group");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1111
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The default User Group for new Users");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1112
            echo "
                                    ";
            // line 1113
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_USERGROUP"], "method", false, false, false, 1113)) {
                // line 1114
                echo "                                        ";
                $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("group.search")], ["name" => "data-search-term", "value" => "group"], ["name" => "data-id-property", "value" => "groupId"], ["name" => "data-text-property", "value" => "group"]];
                // line 1121
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["DEFAULT_USERGROUP", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["defaultUserGroup"] ?? null), "groupId", [], "any", false, false, false, 1121), [($context["defaultUserGroup"] ?? null)], "groupId", "group", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 1121, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 1123
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DEFAULT_USERGROUP", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_USERGROUP"], "method", false, false, false, 1123), ($context["helpText"] ?? null)], 1123, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 1125
            echo "                                ";
        }
        // line 1126
        echo "
                                ";
        // line 1127
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["defaultUsertype"], "method", false, false, false, 1127)) {
            // line 1128
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default User Type");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1129
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Sets the default user type selected when creating a user. We recommend that this is set to User");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1130
            echo "
                                    ";
            // line 1131
            ob_start(function () { return ''; });
            echo __("User");
            $context["option1"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1132
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Group Admin");
            $context["option2"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1133
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Super Admin");
            $context["option3"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1134
            echo "                                    ";
            $context["options"] = [["id" => "User", "value" =>             // line 1135
($context["option1"] ?? null)], ["id" => "Group Admin", "value" =>             // line 1136
($context["option2"] ?? null)], ["id" => "Super Admin", "value" =>             // line 1137
($context["option3"] ?? null)]];
            // line 1139
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["defaultUsertype"], "method", false, false, false, 1139)) {
                // line 1140
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["defaultUsertype", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["defaultUsertype", "User"], "method", false, false, false, 1140), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 1140, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 1142
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["defaultUsertype", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["defaultUsertype", "User"], "method", false, false, false, 1142), ($context["helpText"] ?? null)], 1142, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 1144
            echo "                                ";
        }
        // line 1145
        echo "
                                ";
        // line 1146
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["USER_PASSWORD_POLICY"], "method", false, false, false, 1146)) {
            // line 1147
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Password Policy Regular Expression");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1148
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Regular Expression for password complexity, leave blank for no policy.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1149
            echo "
                                    ";
            // line 1150
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["USER_PASSWORD_POLICY"], "method", false, false, false, 1150)) {
                // line 1151
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["USER_PASSWORD_POLICY", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["USER_PASSWORD_POLICY"], "method", false, false, false, 1151), ($context["helpText"] ?? null)], 1151, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 1153
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["USER_PASSWORD_POLICY", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["USER_PASSWORD_POLICY"], "method", false, false, false, 1153), ($context["helpText"] ?? null)], 1153, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 1155
            echo "                                ";
        }
        // line 1156
        echo "
                                ";
        // line 1157
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["USER_PASSWORD_ERROR"], "method", false, false, false, 1157)) {
            // line 1158
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Description of Password Policy");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1159
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("A text description of this password policy will be shown to users if they enter a password that does not meet the policy requirements set above.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1160
            echo "
                                    ";
            // line 1161
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["USER_PASSWORD_ERROR"], "method", false, false, false, 1161)) {
                // line 1162
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["USER_PASSWORD_ERROR", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["USER_PASSWORD_ERROR"], "method", false, false, false, 1162), ($context["helpText"] ?? null)], 1162, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 1164
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["USER_PASSWORD_ERROR", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["USER_PASSWORD_ERROR"], "method", false, false, false, 1164), ($context["helpText"] ?? null)], 1164, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 1166
            echo "                                ";
        }
        // line 1167
        echo "
                                ";
        // line 1168
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["PASSWORD_REMINDER_ENABLED"], "method", false, false, false, 1168)) {
            // line 1169
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Password Reminder");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1170
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Enable password reminder on CMS login page? Valid sending email address is required");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1171
            echo "
                                    ";
            // line 1172
            ob_start(function () { return ''; });
            echo __("Off");
            $context["option1"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1173
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("On except Admin");
            $context["option2"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1174
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("On");
            $context["option3"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1175
            echo "                                    ";
            $context["options"] = [["id" => "Off", "value" =>             // line 1176
($context["option1"] ?? null)], ["id" => "On except Admin", "value" =>             // line 1177
($context["option2"] ?? null)], ["id" => "On", "value" =>             // line 1178
($context["option3"] ?? null)]];
            // line 1180
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["PASSWORD_REMINDER_ENABLED"], "method", false, false, false, 1180)) {
                // line 1181
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["PASSWORD_REMINDER_ENABLED", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PASSWORD_REMINDER_ENABLED", "Off"], "method", false, false, false, 1181), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 1181, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 1183
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["PASSWORD_REMINDER_ENABLED", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PASSWORD_REMINDER_ENABLED", "Off"], "method", false, false, false, 1183), ($context["helpText"] ?? null)], 1183, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 1185
            echo "                                ";
        }
        // line 1186
        echo "
                                ";
        // line 1187
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["TWOFACTOR_ISSUER"], "method", false, false, false, 1187)) {
            // line 1188
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Two Factor Issuer");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1189
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Name that should appear as Issuer when two factor authorisation is enabled");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1190
            echo "
                                    ";
            // line 1191
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["TWOFACTOR_ISSUER"], "method", false, false, false, 1191)) {
                // line 1192
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["TWOFACTOR_ISSUER", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["TWOFACTOR_ISSUER"], "method", false, false, false, 1192), ($context["helpText"] ?? null)], 1192, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 1194
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["TWOFACTOR_ISSUER", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["TWOFACTOR_ISSUER"], "method", false, false, false, 1194), ($context["helpText"] ?? null)], 1194, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 1196
            echo "                                ";
        }
        // line 1197
        echo "                            </div>
                        </div>
                        <button class=\"btn btn-save btn-block btn-success\" href=\"#\"><span>";
        // line 1199
        echo __("Save");
        echo "</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 1207
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1208
        echo "    <script type=\"text/javascript\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">
        \$(function () {
            var phpDateFormatTable = Handlebars.compile(\$('#php-date-format-table').html());
            \$('#date-format-table').popover({
                content: phpDateFormatTable,
                html: true,
                placement: \"right\",
                sanitize: false,
                trigger: \"manual\",
                container: \"form\"
            }).on(\"mouseenter\", function() {
                \$(this).popover(\"show\");
                \$(\".popover\").on(\"mouseleave\", function() {
                    \$(this).popover('hide');
                });
            }).on(\"mouseleave\", function() {
                setTimeout(function() {
                    if (!\$(\".popover:hover\").length) {
                        \$(this).popover(\"hide\");
                    }
                }, 300);
            });
        })
    </script>

    <style>
        .popover{
            max-width: 25%;
        }
    </style>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "settings-page.twig";
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
        return array (  3589 => 1208,  3585 => 1207,  3574 => 1199,  3570 => 1197,  3567 => 1196,  3561 => 1194,  3555 => 1192,  3553 => 1191,  3550 => 1190,  3545 => 1189,  3540 => 1188,  3538 => 1187,  3535 => 1186,  3532 => 1185,  3526 => 1183,  3520 => 1181,  3517 => 1180,  3515 => 1178,  3514 => 1177,  3513 => 1176,  3511 => 1175,  3506 => 1174,  3501 => 1173,  3497 => 1172,  3494 => 1171,  3489 => 1170,  3484 => 1169,  3482 => 1168,  3479 => 1167,  3476 => 1166,  3470 => 1164,  3464 => 1162,  3462 => 1161,  3459 => 1160,  3454 => 1159,  3449 => 1158,  3447 => 1157,  3444 => 1156,  3441 => 1155,  3435 => 1153,  3429 => 1151,  3427 => 1150,  3424 => 1149,  3419 => 1148,  3414 => 1147,  3412 => 1146,  3409 => 1145,  3406 => 1144,  3400 => 1142,  3394 => 1140,  3391 => 1139,  3389 => 1137,  3388 => 1136,  3387 => 1135,  3385 => 1134,  3380 => 1133,  3375 => 1132,  3371 => 1131,  3368 => 1130,  3363 => 1129,  3358 => 1128,  3356 => 1127,  3353 => 1126,  3350 => 1125,  3344 => 1123,  3338 => 1121,  3335 => 1114,  3333 => 1113,  3330 => 1112,  3325 => 1111,  3320 => 1110,  3318 => 1109,  3315 => 1108,  3312 => 1107,  3306 => 1105,  3300 => 1103,  3297 => 1094,  3295 => 1093,  3292 => 1092,  3287 => 1091,  3282 => 1090,  3280 => 1089,  3275 => 1087,  3271 => 1085,  3268 => 1084,  3262 => 1082,  3256 => 1080,  3253 => 1079,  3251 => 1077,  3250 => 1076,  3248 => 1075,  3243 => 1074,  3239 => 1073,  3236 => 1072,  3231 => 1071,  3226 => 1070,  3224 => 1069,  3221 => 1068,  3218 => 1067,  3212 => 1065,  3206 => 1063,  3204 => 1062,  3201 => 1061,  3196 => 1060,  3191 => 1059,  3189 => 1058,  3186 => 1057,  3183 => 1056,  3177 => 1054,  3171 => 1052,  3168 => 1051,  3166 => 1049,  3165 => 1048,  3164 => 1047,  3163 => 1046,  3162 => 1045,  3161 => 1044,  3160 => 1043,  3159 => 1042,  3157 => 1041,  3152 => 1040,  3147 => 1039,  3142 => 1038,  3137 => 1037,  3132 => 1036,  3127 => 1035,  3122 => 1034,  3118 => 1033,  3115 => 1032,  3110 => 1031,  3105 => 1030,  3103 => 1029,  3100 => 1028,  3097 => 1027,  3091 => 1025,  3085 => 1023,  3082 => 1022,  3080 => 1020,  3079 => 1019,  3078 => 1018,  3077 => 1017,  3075 => 1016,  3070 => 1015,  3065 => 1014,  3060 => 1013,  3056 => 1012,  3053 => 1011,  3048 => 1010,  3043 => 1009,  3041 => 1008,  3036 => 1006,  3032 => 1004,  3029 => 1003,  3023 => 1001,  3017 => 999,  3014 => 998,  3012 => 996,  3011 => 995,  3009 => 994,  3004 => 993,  3000 => 992,  2997 => 991,  2992 => 990,  2987 => 989,  2985 => 988,  2982 => 987,  2976 => 985,  2971 => 984,  2966 => 983,  2964 => 982,  2961 => 981,  2958 => 980,  2952 => 978,  2946 => 976,  2944 => 975,  2941 => 974,  2932 => 967,  2928 => 966,  2923 => 965,  2921 => 964,  2918 => 963,  2915 => 962,  2909 => 960,  2903 => 958,  2901 => 957,  2898 => 956,  2893 => 955,  2888 => 954,  2886 => 953,  2883 => 952,  2880 => 951,  2874 => 949,  2868 => 947,  2866 => 946,  2863 => 945,  2858 => 944,  2853 => 943,  2851 => 942,  2846 => 940,  2842 => 938,  2836 => 936,  2831 => 935,  2826 => 934,  2824 => 933,  2821 => 932,  2815 => 930,  2810 => 929,  2805 => 928,  2803 => 927,  2800 => 926,  2794 => 924,  2789 => 923,  2784 => 922,  2782 => 921,  2779 => 920,  2773 => 918,  2768 => 917,  2763 => 916,  2761 => 915,  2758 => 914,  2752 => 912,  2747 => 911,  2742 => 910,  2740 => 909,  2737 => 908,  2734 => 907,  2728 => 905,  2722 => 903,  2719 => 902,  2717 => 900,  2716 => 899,  2714 => 898,  2709 => 897,  2705 => 896,  2702 => 895,  2697 => 894,  2695 => 893,  2690 => 891,  2686 => 889,  2683 => 888,  2677 => 886,  2671 => 884,  2669 => 883,  2666 => 882,  2661 => 881,  2656 => 880,  2654 => 879,  2651 => 878,  2648 => 877,  2642 => 875,  2636 => 873,  2634 => 872,  2631 => 871,  2626 => 870,  2621 => 869,  2619 => 868,  2616 => 867,  2611 => 865,  2608 => 864,  2603 => 863,  2598 => 862,  2596 => 861,  2593 => 860,  2588 => 858,  2585 => 857,  2580 => 856,  2575 => 855,  2573 => 854,  2570 => 853,  2567 => 852,  2561 => 850,  2555 => 848,  2553 => 847,  2550 => 846,  2545 => 845,  2540 => 844,  2538 => 843,  2535 => 842,  2532 => 841,  2526 => 839,  2520 => 837,  2518 => 836,  2515 => 835,  2510 => 834,  2505 => 833,  2503 => 832,  2500 => 831,  2497 => 830,  2491 => 828,  2485 => 826,  2483 => 825,  2480 => 824,  2475 => 823,  2470 => 822,  2468 => 821,  2465 => 820,  2462 => 819,  2456 => 817,  2450 => 815,  2448 => 814,  2445 => 813,  2440 => 812,  2435 => 811,  2433 => 810,  2430 => 809,  2427 => 808,  2421 => 806,  2415 => 804,  2413 => 803,  2410 => 802,  2405 => 801,  2400 => 800,  2398 => 799,  2395 => 798,  2392 => 797,  2386 => 795,  2380 => 793,  2378 => 792,  2375 => 791,  2370 => 790,  2365 => 789,  2363 => 788,  2360 => 787,  2357 => 786,  2351 => 784,  2345 => 782,  2343 => 781,  2340 => 780,  2335 => 779,  2330 => 778,  2328 => 777,  2325 => 776,  2322 => 775,  2316 => 773,  2310 => 771,  2307 => 770,  2305 => 766,  2303 => 765,  2299 => 764,  2296 => 763,  2291 => 762,  2286 => 761,  2284 => 760,  2281 => 759,  2278 => 758,  2272 => 756,  2266 => 754,  2264 => 753,  2261 => 752,  2256 => 751,  2251 => 750,  2249 => 749,  2246 => 748,  2243 => 747,  2237 => 745,  2231 => 743,  2229 => 742,  2226 => 741,  2221 => 740,  2216 => 739,  2214 => 738,  2211 => 737,  2208 => 736,  2202 => 734,  2196 => 732,  2194 => 731,  2191 => 730,  2186 => 729,  2181 => 728,  2179 => 727,  2174 => 725,  2169 => 722,  2164 => 720,  2161 => 719,  2156 => 718,  2151 => 717,  2149 => 716,  2146 => 715,  2143 => 714,  2137 => 712,  2131 => 710,  2129 => 709,  2126 => 708,  2121 => 707,  2116 => 706,  2114 => 705,  2111 => 704,  2108 => 703,  2102 => 701,  2096 => 699,  2094 => 698,  2091 => 697,  2086 => 696,  2081 => 695,  2079 => 694,  2076 => 693,  2073 => 692,  2067 => 690,  2061 => 688,  2059 => 687,  2056 => 686,  2051 => 685,  2046 => 684,  2044 => 683,  2041 => 682,  2036 => 680,  2033 => 679,  2028 => 678,  2023 => 677,  2021 => 676,  2018 => 675,  2015 => 674,  2009 => 672,  2003 => 670,  2000 => 669,  1998 => 667,  1997 => 666,  1996 => 665,  1994 => 664,  1989 => 663,  1984 => 662,  1980 => 661,  1977 => 660,  1972 => 659,  1967 => 658,  1965 => 657,  1960 => 655,  1956 => 653,  1951 => 651,  1948 => 650,  1943 => 649,  1938 => 648,  1936 => 647,  1933 => 646,  1930 => 645,  1924 => 643,  1918 => 641,  1916 => 640,  1913 => 639,  1908 => 638,  1903 => 637,  1901 => 636,  1898 => 635,  1893 => 633,  1890 => 632,  1885 => 631,  1880 => 630,  1878 => 629,  1875 => 628,  1870 => 626,  1867 => 625,  1862 => 624,  1857 => 623,  1855 => 622,  1852 => 621,  1847 => 619,  1844 => 618,  1839 => 617,  1834 => 616,  1832 => 615,  1829 => 614,  1826 => 613,  1820 => 611,  1814 => 609,  1812 => 608,  1809 => 607,  1804 => 606,  1799 => 605,  1797 => 604,  1794 => 603,  1789 => 601,  1786 => 600,  1781 => 599,  1779 => 598,  1776 => 597,  1771 => 595,  1768 => 594,  1763 => 593,  1761 => 592,  1758 => 591,  1755 => 590,  1749 => 588,  1743 => 586,  1741 => 585,  1738 => 584,  1733 => 583,  1728 => 582,  1726 => 581,  1723 => 580,  1718 => 578,  1715 => 577,  1710 => 576,  1705 => 575,  1703 => 574,  1700 => 573,  1697 => 572,  1691 => 570,  1685 => 568,  1683 => 567,  1680 => 566,  1675 => 565,  1670 => 564,  1668 => 563,  1665 => 562,  1662 => 561,  1656 => 559,  1650 => 557,  1648 => 556,  1645 => 555,  1640 => 554,  1635 => 553,  1633 => 552,  1630 => 551,  1627 => 550,  1621 => 548,  1615 => 546,  1613 => 545,  1610 => 544,  1605 => 543,  1600 => 542,  1598 => 541,  1595 => 540,  1590 => 538,  1587 => 537,  1582 => 536,  1577 => 535,  1575 => 534,  1572 => 533,  1569 => 532,  1563 => 530,  1557 => 528,  1555 => 527,  1552 => 526,  1547 => 525,  1542 => 524,  1540 => 523,  1537 => 522,  1534 => 521,  1528 => 519,  1522 => 517,  1520 => 516,  1517 => 515,  1512 => 514,  1507 => 513,  1505 => 512,  1500 => 510,  1496 => 508,  1493 => 507,  1487 => 505,  1481 => 503,  1479 => 501,  1477 => 493,  1475 => 492,  1472 => 491,  1467 => 490,  1462 => 489,  1460 => 488,  1457 => 487,  1451 => 485,  1446 => 484,  1441 => 483,  1439 => 482,  1436 => 481,  1433 => 480,  1427 => 478,  1421 => 476,  1419 => 475,  1416 => 474,  1411 => 473,  1406 => 472,  1404 => 471,  1401 => 470,  1398 => 469,  1392 => 467,  1386 => 465,  1384 => 464,  1381 => 463,  1376 => 462,  1371 => 461,  1369 => 460,  1366 => 459,  1360 => 457,  1355 => 456,  1353 => 455,  1350 => 454,  1344 => 452,  1339 => 451,  1337 => 450,  1334 => 449,  1328 => 447,  1323 => 446,  1321 => 445,  1318 => 444,  1315 => 443,  1309 => 441,  1303 => 439,  1300 => 438,  1298 => 436,  1297 => 435,  1296 => 434,  1294 => 433,  1289 => 432,  1284 => 431,  1280 => 430,  1277 => 429,  1272 => 428,  1267 => 427,  1265 => 426,  1262 => 425,  1259 => 424,  1253 => 422,  1247 => 420,  1244 => 419,  1242 => 417,  1241 => 416,  1240 => 415,  1238 => 414,  1233 => 413,  1228 => 412,  1224 => 411,  1221 => 410,  1216 => 409,  1211 => 408,  1209 => 407,  1206 => 406,  1203 => 405,  1197 => 403,  1191 => 401,  1188 => 400,  1186 => 398,  1185 => 397,  1184 => 396,  1182 => 395,  1177 => 394,  1172 => 393,  1168 => 392,  1165 => 391,  1160 => 390,  1155 => 389,  1153 => 388,  1150 => 387,  1144 => 385,  1139 => 384,  1134 => 383,  1132 => 382,  1129 => 381,  1123 => 379,  1118 => 378,  1113 => 377,  1111 => 376,  1108 => 375,  1105 => 374,  1099 => 372,  1093 => 370,  1090 => 369,  1088 => 367,  1087 => 366,  1086 => 365,  1084 => 364,  1079 => 363,  1074 => 362,  1070 => 361,  1067 => 360,  1062 => 359,  1057 => 358,  1055 => 357,  1052 => 356,  1049 => 355,  1043 => 353,  1037 => 351,  1035 => 350,  1032 => 349,  1027 => 348,  1022 => 347,  1020 => 346,  1017 => 345,  1014 => 344,  1008 => 342,  1002 => 340,  1000 => 339,  997 => 338,  992 => 337,  987 => 336,  985 => 335,  982 => 334,  979 => 333,  973 => 331,  967 => 329,  965 => 328,  962 => 327,  957 => 326,  952 => 325,  950 => 324,  947 => 323,  944 => 322,  938 => 320,  932 => 318,  930 => 317,  927 => 316,  922 => 315,  917 => 314,  915 => 313,  912 => 312,  909 => 311,  903 => 309,  897 => 307,  895 => 306,  892 => 305,  887 => 304,  882 => 303,  880 => 302,  877 => 301,  874 => 300,  868 => 298,  862 => 296,  860 => 295,  857 => 294,  852 => 293,  847 => 292,  845 => 291,  842 => 290,  839 => 289,  833 => 287,  827 => 285,  825 => 284,  822 => 283,  817 => 282,  812 => 281,  810 => 280,  807 => 279,  804 => 278,  798 => 276,  792 => 274,  789 => 265,  787 => 264,  784 => 263,  779 => 262,  774 => 261,  772 => 260,  767 => 258,  763 => 256,  760 => 255,  754 => 253,  748 => 251,  746 => 250,  743 => 249,  738 => 248,  733 => 247,  731 => 246,  728 => 245,  725 => 244,  719 => 242,  713 => 240,  711 => 239,  708 => 238,  703 => 237,  698 => 236,  696 => 235,  693 => 234,  690 => 233,  684 => 231,  678 => 229,  676 => 228,  673 => 227,  668 => 226,  663 => 225,  661 => 224,  658 => 223,  655 => 222,  649 => 220,  643 => 218,  641 => 217,  638 => 216,  633 => 215,  628 => 214,  626 => 213,  623 => 212,  620 => 211,  614 => 209,  608 => 207,  606 => 206,  603 => 205,  598 => 204,  593 => 203,  591 => 202,  588 => 201,  585 => 200,  579 => 198,  573 => 196,  571 => 195,  568 => 194,  563 => 193,  558 => 192,  556 => 191,  553 => 190,  548 => 188,  545 => 187,  540 => 186,  538 => 185,  535 => 184,  532 => 183,  526 => 181,  520 => 179,  518 => 178,  515 => 177,  510 => 176,  505 => 175,  503 => 174,  500 => 173,  497 => 172,  491 => 170,  485 => 168,  482 => 160,  480 => 159,  477 => 158,  472 => 157,  467 => 156,  465 => 155,  462 => 154,  459 => 153,  453 => 151,  447 => 149,  444 => 141,  442 => 140,  439 => 139,  434 => 138,  429 => 137,  427 => 136,  424 => 135,  419 => 133,  416 => 132,  411 => 131,  406 => 130,  404 => 129,  401 => 128,  396 => 126,  393 => 125,  388 => 124,  383 => 123,  381 => 122,  378 => 121,  373 => 119,  370 => 118,  365 => 117,  360 => 116,  358 => 115,  355 => 114,  350 => 112,  347 => 111,  342 => 110,  337 => 109,  335 => 108,  330 => 106,  326 => 104,  323 => 103,  317 => 101,  311 => 99,  308 => 98,  306 => 96,  305 => 95,  303 => 94,  298 => 93,  294 => 92,  291 => 91,  286 => 90,  281 => 89,  279 => 88,  276 => 87,  273 => 86,  267 => 84,  264 => 83,  258 => 81,  252 => 79,  250 => 78,  247 => 77,  245 => 76,  242 => 75,  237 => 74,  232 => 73,  230 => 72,  227 => 71,  220 => 67,  215 => 64,  209 => 62,  203 => 60,  201 => 59,  198 => 58,  193 => 57,  188 => 56,  186 => 55,  183 => 54,  180 => 53,  174 => 51,  168 => 49,  166 => 48,  163 => 47,  158 => 46,  153 => 45,  151 => 44,  146 => 42,  140 => 39,  135 => 37,  131 => 36,  127 => 35,  123 => 34,  119 => 33,  115 => 32,  111 => 31,  107 => 30,  103 => 29,  99 => 28,  91 => 23,  88 => 22,  84 => 21,  79 => 18,  69 => 16,  67 => 15,  64 => 14,  60 => 13,  52 => 11,  47 => 8,  45 => 9,  38 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "settings-page.twig", "/var/www/html/cms_ubi/views/settings-page.twig");
    }
}
