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

/* user-form-add.twig */
class __TwigTemplate_9466f7a26dc0f625c177a1dfaf49bb68 extends Template
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
            'formHtml' => [$this, 'block_formHtml'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 9
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "user-form-add.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "user-form-add.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        echo __("Add User");
    }

    // line 16
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    ";
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 18
        echo __("Save");
        echo ", \$(\"#userAddForm\").submit()
";
    }

    // line 21
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "userFormOpen";
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
        echo __("Details");
        echo "</span></a></li>
                ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.userHome"], "method", false, false, false, 28)) {
            // line 29
            echo "                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#home-folder\" role=\"tab\" data-toggle=\"tab\"><span>";
            echo __("Home Folder");
            echo "</span></a></li>
                ";
        }
        // line 31
        echo "                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#reference\" role=\"tab\" data-toggle=\"tab\"><span>";
        echo __("Reference");
        echo "</span></a></li>
                ";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "userTypeId", [], "any", false, false, false, 32) == 1)) {
            // line 33
            echo "                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#notifications\" role=\"tab\" data-toggle=\"tab\"><span>";
            echo __("Notifications");
            echo "</span></a></li>
                ";
        }
        // line 35
        echo "                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#optionsTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        echo __("Options");
        echo "</span></a></li>
            </ul>
            <form id=\"userAddForm\" class=\"UserForm form-horizontal\" method=\"post\" action=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.add"), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 40
        ob_start(function () { return ''; });
        echo __("Username");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The Username of the user.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["userName", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "required maxlength='50'"], 42, $context, $this->getSourceContext());
        echo "

                        ";
        // line 44
        ob_start(function () { return ''; });
        echo __("Password");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The Password for this user.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_password", ["password", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "required"], 46, $context, $this->getSourceContext());
        echo "

                        ";
        // line 48
        ob_start(function () { return ''; });
        echo __("Email");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The Email Address for this user.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_email", ["email", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 50, $context, $this->getSourceContext());
        echo "

                        ";
        // line 52
        ob_start(function () { return ''; });
        echo __("User Type");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("What is this users type?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["userTypeId", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "defaultUserType", [], "any", false, false, false, 54), twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "userTypes", [], "any", false, false, false, 54), "userTypeId", "userType", ($context["helpText"] ?? null)], 54, $context, $this->getSourceContext());
        echo "

                        ";
        // line 56
        ob_start(function () { return ''; });
        echo __("Library Quota");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The quota that should be applied. Enter 0 for no quota.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        echo "                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\" for=\"libraryQuota\">";
        // line 59
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</label>
                            <div class=\"col-sm-6\">
                                <input class=\"form-control\" name=\"libraryQuota\" type=\"number\" id=\"libraryQuota\" min=\"0\" />
                                <span class=\"help-block\">";
        // line 62
        echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
        echo "</span>
                            </div>
                            <div class=\"col-sm-4\">
                                <select name=\"libraryQuotaUnits\" class=\"form-control\">
                                    <option value=\"kb\">KiB</option>
                                    <option value=\"mb\">MiB</option>
                                    <option value=\"gb\">GiB</option>
                                </select>
                            </div>
                        </div>

                        ";
        // line 73
        $context["attributes"] = [["name" => "data-live-search", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("group.search")], ["name" => "data-search-term", "value" => "group"], ["name" => "data-id-property", "value" => "groupId"], ["name" => "data-text-property", "value" => "group"], ["name" => "data-initial-key", "value" => "userGroupId"], ["name" => "data-initial-value", "value" => twig_get_attribute($this->env, $this->source,         // line 82
($context["options"] ?? null), "defaultGroupId", [], "any", false, false, false, 82)], ["name" => "data-selected-text-format", "value" => "count > 4"]];
        // line 85
        echo "
                        ";
        // line 86
        ob_start(function () { return ''; });
        echo __("Initial User Group");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 87
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Select a User Group for this User so that they get access to the parts of the application they need.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 88
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["groupId", "single", ($context["title"] ?? null), null, [], "groupId", "group", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 88, $context, $this->getSourceContext());
        echo "

                        ";
        // line 90
        echo twig_call_macro($macros["forms"], "macro_message", [__("User Groups are an easy way to configure a set of features and sharing which can be applied to multiple users. After adding a User they can be assigned to multiple Groups or have individual sharing assigned to them directly."), "card p-3 mb-3 bg-light"], 90, $context, $this->getSourceContext());
        echo "

                        ";
        // line 92
        ob_start(function () { return ''; });
        echo __("Homepage");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 93
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Homepage for this user. This is the page they will be taken to when they login.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 94
        echo "                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\" for=\"homePageId\">";
        // line 95
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"homePageId\" class=\"form-control homepage-select\" required data-search-url=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.homepages.search"), "html", null, true);
        echo "\">
                                </select>
                                <span class=\"help-block\">";
        // line 99
        echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
        echo "</span>
                            </div>
                        </div>
                    </div>
                    ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.userHome"], "method", false, false, false, 103)) {
            // line 104
            echo "                        <div class=\"tab-pane\" id=\"home-folder\">
                            <p>";
            // line 105
            echo twig_escape_filter($this->env, __("Set a home folder to use as the default folder for new content."), "html", null, true);
            echo "</p>
                            ";
            // line 106
            echo twig_call_macro($macros["forms"], "macro_hidden", ["homeFolderId", 1], 106, $context, $this->getSourceContext());
            echo "
                            <div id=\"container-form-folder-tree\" class=\"card card-body bg-light\"></div>
                        </div>
                    ";
        }
        // line 110
        echo "                    <div class=\"tab-pane\" id=\"reference\">
                        ";
        // line 111
        ob_start(function () { return ''; });
        echo __("First Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 112
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The User's First Name.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 113
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["firstName", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "maxlength='254'"], 113, $context, $this->getSourceContext());
        echo "

                        ";
        // line 115
        ob_start(function () { return ''; });
        echo __("Last Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 116
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The User's Last Name.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 117
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["lastName", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "maxlength='254'"], 117, $context, $this->getSourceContext());
        echo "

                        ";
        // line 119
        ob_start(function () { return ''; });
        echo __("Phone Number");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 120
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The User's Phone Number.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 121
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["phone", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "maxlength='254'"], 121, $context, $this->getSourceContext());
        echo "

                        ";
        // line 123
        ob_start(function () { return ''; });
        echo __("Reference 1");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 124
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("A reference field for custom user data");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 125
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["ref1", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "maxlength='254'"], 125, $context, $this->getSourceContext());
        echo "

                        ";
        // line 127
        ob_start(function () { return ''; });
        echo __("Reference 2");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 128
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("A reference field for custom user data");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 129
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["ref2", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "maxlength='254'"], 129, $context, $this->getSourceContext());
        echo "

                        ";
        // line 131
        ob_start(function () { return ''; });
        echo __("Reference 3");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 132
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("A reference field for custom user data");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 133
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["ref3", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "maxlength='254'"], 133, $context, $this->getSourceContext());
        echo "

                        ";
        // line 135
        ob_start(function () { return ''; });
        echo __("Reference 4");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 136
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("A reference field for custom user data");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 137
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["ref4", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "maxlength='254'"], 137, $context, $this->getSourceContext());
        echo "

                        ";
        // line 139
        ob_start(function () { return ''; });
        echo __("Reference 5");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 140
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("A reference field for custom user data");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 141
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["ref5", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "maxlength='254'"], 141, $context, $this->getSourceContext());
        echo "
                    </div>
                    ";
        // line 143
        if ((twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "userTypeId", [], "any", false, false, false, 143) == 1)) {
            // line 144
            echo "                    <div class=\"tab-pane\" id=\"notifications\">
                        ";
            // line 145
            ob_start(function () { return ''; });
            echo __("Receive System Notifications?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 146
            echo "                        ";
            ob_start(function () { return ''; });
            echo __("Should this User receive system notifications?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 147
            echo "                        ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["isSystemNotification", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 147, $context, $this->getSourceContext());
            echo "

                        ";
            // line 149
            ob_start(function () { return ''; });
            echo __("Receive Display Notifications?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 150
            echo "                        ";
            ob_start(function () { return ''; });
            echo __("Should this User receive Display notifications for Displays they have permission to see?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 151
            echo "                        ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["isDisplayNotification", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 151, $context, $this->getSourceContext());
            echo "

                        ";
            // line 153
            ob_start(function () { return ''; });
            echo __("Receive DataSet Notifications?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 154
            echo "                        ";
            ob_start(function () { return ''; });
            echo __("Should this User receive DataSet notification emails?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 155
            echo "                        ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["isDataSetNotification", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 155, $context, $this->getSourceContext());
            echo "

                        ";
            // line 157
            ob_start(function () { return ''; });
            echo __("Receive Layout Notifications?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 158
            echo "                        ";
            ob_start(function () { return ''; });
            echo __("Should this User receive Layout notification emails?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 159
            echo "                        ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["isLayoutNotification", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 159, $context, $this->getSourceContext());
            echo "

                        ";
            // line 161
            ob_start(function () { return ''; });
            echo __("Receive Library Notifications?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 162
            echo "                        ";
            ob_start(function () { return ''; });
            echo __("Should this User receive Library notification emails?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 163
            echo "                        ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["isLibraryNotification", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 163, $context, $this->getSourceContext());
            echo "

                        ";
            // line 165
            ob_start(function () { return ''; });
            echo __("Receive Report Notifications?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 166
            echo "                        ";
            ob_start(function () { return ''; });
            echo __("Should this User receive Report notification emails?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 167
            echo "                        ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["isReportNotification", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 167, $context, $this->getSourceContext());
            echo "

                        ";
            // line 169
            ob_start(function () { return ''; });
            echo __("Receive Schedule Notifications?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 170
            echo "                        ";
            ob_start(function () { return ''; });
            echo __("Should this User receive Schedule notification emails?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 171
            echo "                        ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["isScheduleNotification", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 171, $context, $this->getSourceContext());
            echo "

                        ";
            // line 173
            ob_start(function () { return ''; });
            echo __("Receive Custom Notifications?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 174
            echo "                        ";
            ob_start(function () { return ''; });
            echo __("Should this User receive notifications emails for Notifications manually created in CMS?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 175
            echo "                        ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["isCustomNotification", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 175, $context, $this->getSourceContext());
            echo "
                    </div>
                    ";
        }
        // line 178
        echo "                    <div class=\"tab-pane\" id=\"optionsTab\">
                        ";
        // line 179
        ob_start(function () { return ''; });
        echo __("Hide navigation?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 180
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Should the navigation side bar be hidden for this User?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 181
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["hideNavigation", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 181, $context, $this->getSourceContext());
        echo "

                        ";
        // line 183
        ob_start(function () { return ''; });
        echo __("Hide User Guide?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 184
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Should this User see the new user guide when they log in?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 185
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["newUserWizard", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 185, $context, $this->getSourceContext());
        echo "

                        ";
        // line 187
        ob_start(function () { return ''; });
        echo __("Force Password Change");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 188
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Should this User be forced to change password next time they log in?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 189
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["isPasswordChangeRequired", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 189, $context, $this->getSourceContext());
        echo "
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
        return "user-form-add.twig";
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
        return array (  583 => 189,  578 => 188,  574 => 187,  568 => 185,  563 => 184,  559 => 183,  553 => 181,  548 => 180,  544 => 179,  541 => 178,  534 => 175,  529 => 174,  525 => 173,  519 => 171,  514 => 170,  510 => 169,  504 => 167,  499 => 166,  495 => 165,  489 => 163,  484 => 162,  480 => 161,  474 => 159,  469 => 158,  465 => 157,  459 => 155,  454 => 154,  450 => 153,  444 => 151,  439 => 150,  435 => 149,  429 => 147,  424 => 146,  420 => 145,  417 => 144,  415 => 143,  409 => 141,  404 => 140,  400 => 139,  394 => 137,  389 => 136,  385 => 135,  379 => 133,  374 => 132,  370 => 131,  364 => 129,  359 => 128,  355 => 127,  349 => 125,  344 => 124,  340 => 123,  334 => 121,  329 => 120,  325 => 119,  319 => 117,  314 => 116,  310 => 115,  304 => 113,  299 => 112,  295 => 111,  292 => 110,  285 => 106,  281 => 105,  278 => 104,  276 => 103,  269 => 99,  264 => 97,  259 => 95,  256 => 94,  251 => 93,  247 => 92,  242 => 90,  236 => 88,  231 => 87,  227 => 86,  224 => 85,  222 => 82,  221 => 73,  207 => 62,  201 => 59,  198 => 58,  193 => 57,  189 => 56,  183 => 54,  178 => 53,  174 => 52,  168 => 50,  163 => 49,  159 => 48,  153 => 46,  148 => 45,  144 => 44,  138 => 42,  133 => 41,  129 => 40,  123 => 37,  117 => 35,  111 => 33,  109 => 32,  104 => 31,  98 => 29,  96 => 28,  92 => 27,  87 => 24,  83 => 23,  76 => 21,  70 => 18,  65 => 17,  61 => 16,  56 => 13,  52 => 12,  47 => 9,  45 => 10,  38 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "user-form-add.twig", "/var/www/html/cms_ubi/views/user-form-add.twig");
    }
}
