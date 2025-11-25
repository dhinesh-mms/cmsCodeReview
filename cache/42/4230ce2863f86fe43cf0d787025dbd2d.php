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

/* user-form-edit.twig */
class __TwigTemplate_235853631521103ccc2f1fe56ab9274d extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "user-form-edit.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "user-form-edit.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        echo __("Edit User");
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
        echo ", \$(\"#userEditForm\").submit()
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
            <form id=\"userEditForm\" class=\"UserForm form-horizontal\" data-user-id=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userId", [], "any", false, false, false, 37), "html", null, true);
        echo "\" method=\"put\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userId", [], "any", false, false, false, 37)]), "html", null, true);
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
        echo twig_call_macro($macros["forms"], "macro_input", ["userName", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userName", [], "any", false, false, false, 42), ($context["helpText"] ?? null), "", "required maxlength='50'"], 42, $context, $this->getSourceContext());
        echo "

                        ";
        // line 44
        ob_start(function () { return ''; });
        echo __("Email");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The Email Address for this user.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_email", ["email", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 46), ($context["helpText"] ?? null)], 46, $context, $this->getSourceContext());
        echo "

                        ";
        // line 48
        if ((twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "userTypeId", [], "any", false, false, false, 48) == 1)) {
            // line 49
            echo "                            ";
            // line 50
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("New Password");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 51
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("The new Password for this user.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 52
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_password", ["newPassword", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 52, $context, $this->getSourceContext());
            echo "

                            ";
            // line 54
            ob_start(function () { return ''; });
            echo __("Retype New Password");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 55
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Repeat the new Password for this user.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 56
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_password", ["retypeNewPassword", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 56, $context, $this->getSourceContext());
            echo "

                            ";
            // line 58
            ob_start(function () { return ''; });
            echo __("Reset Two Factor Authentication");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 59
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Once ticked the two factor authentication will be set to ‘Off’ for this User Profile with any stored secret codes cleared. The User can now set up two factor authentication from the User Profile as before.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 60
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["disableTwoFactor", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 60, $context, $this->getSourceContext());
            echo "
                        ";
        }
        // line 62
        echo "
                        ";
        // line 63
        ob_start(function () { return ''; });
        echo __("Homepage");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Homepage for this user. This is the page they will be taken to when they login.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        echo "                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\" for=\"homePageId\">";
        // line 66
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"homePageId\" class=\"form-control homepage-select\" required data-search-url=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.homepages.search"), "html", null, true);
        echo "\">
                                    <option value=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "homepage", [], "any", false, false, false, 69), "homepage", [], "any", false, false, false, 69), "html", null, true);
        echo "\" selected>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "homepage", [], "any", false, false, false, 69), "title", [], "any", false, false, false, 69), "html", null, true);
        echo "</option>
                                </select>
                                <span class=\"help-block\">";
        // line 71
        echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
        echo "</span>
                            </div>
                        </div>

                        ";
        // line 75
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 75)) {
            // line 76
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("User Type");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 77
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("What is this users type?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 78
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_dropdown", ["userTypeId", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userTypeId", [], "any", false, false, false, 78), twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "userTypes", [], "any", false, false, false, 78), "userTypeId", "userType", ($context["helpText"] ?? null)], 78, $context, $this->getSourceContext());
            echo "
                        ";
        }
        // line 80
        echo "
                        ";
        // line 81
        ob_start(function () { return ''; });
        echo __("Library Quota");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 82
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The quota that should be applied. Enter 0 for no quota.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        echo "                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\" for=\"libraryQuota\">";
        // line 84
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</label>
                            <div class=\"col-sm-6\">
                                <input class=\"form-control\" name=\"libraryQuota\" type=\"number\" id=\"libraryQuota\" min=\"0\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "libraryQuota", [], "any", false, false, false, 86), "html", null, true);
        echo "\" />
                                <span class=\"help-block\">";
        // line 87
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
        // line 98
        ob_start(function () { return ''; });
        echo __("Retired?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 99
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Is this user retired?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 100
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["retired", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "retired", [], "any", false, false, false, 100), ($context["helpText"] ?? null)], 100, $context, $this->getSourceContext());
        echo "
                    </div>
                    ";
        // line 102
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.userHome"], "method", false, false, false, 102)) {
            // line 103
            echo "                        <div class=\"tab-pane\" id=\"home-folder\">
                        <p>";
            // line 104
            echo twig_escape_filter($this->env, __("Set a home folder to use as the default folder for new content."), "html", null, true);
            echo "</p>
                            ";
            // line 105
            echo twig_call_macro($macros["forms"], "macro_hidden", ["homeFolderId", twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "homeFolderId", [], "any", false, false, false, 105)], 105, $context, $this->getSourceContext());
            echo "
                            <div id=\"container-form-folder-tree\" class=\"card card-body bg-light\"></div>
                        </div>
                    ";
        }
        // line 109
        echo "                    <div class=\"tab-pane\" id=\"reference\">
                        ";
        // line 110
        ob_start(function () { return ''; });
        echo __("First Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 111
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The User's First Name.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 112
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["firstName", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstName", [], "any", false, false, false, 112), ($context["helpText"] ?? null), "", "maxlength='254'"], 112, $context, $this->getSourceContext());
        echo "

                        ";
        // line 114
        ob_start(function () { return ''; });
        echo __("Last Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 115
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The User's Last Name.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 116
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["lastName", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastName", [], "any", false, false, false, 116), ($context["helpText"] ?? null), "", "maxlength='254'"], 116, $context, $this->getSourceContext());
        echo "

                        ";
        // line 118
        ob_start(function () { return ''; });
        echo __("Phone Number");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 119
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The User's Phone Number.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 120
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["phone", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, false, 120), ($context["helpText"] ?? null), "", "maxlength='254'"], 120, $context, $this->getSourceContext());
        echo "

                        ";
        // line 122
        ob_start(function () { return ''; });
        echo __("Reference 1");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 123
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("A reference field for custom user data");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 124
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["ref1", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ref1", [], "any", false, false, false, 124), ($context["helpText"] ?? null), "", "maxlength='254'"], 124, $context, $this->getSourceContext());
        echo "

                        ";
        // line 126
        ob_start(function () { return ''; });
        echo __("Reference 2");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 127
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("A reference field for custom user data");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 128
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["ref2", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ref2", [], "any", false, false, false, 128), ($context["helpText"] ?? null), "", "maxlength='254'"], 128, $context, $this->getSourceContext());
        echo "

                        ";
        // line 130
        ob_start(function () { return ''; });
        echo __("Reference 3");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 131
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("A reference field for custom user data");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 132
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["ref3", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ref3", [], "any", false, false, false, 132), ($context["helpText"] ?? null), "", "maxlength='254'"], 132, $context, $this->getSourceContext());
        echo "

                        ";
        // line 134
        ob_start(function () { return ''; });
        echo __("Reference 4");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 135
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("A reference field for custom user data");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 136
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["ref4", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ref4", [], "any", false, false, false, 136), ($context["helpText"] ?? null), "", "maxlength='254'"], 136, $context, $this->getSourceContext());
        echo "

                        ";
        // line 138
        ob_start(function () { return ''; });
        echo __("Reference 5");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 139
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("A reference field for custom user data");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 140
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["ref5", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ref5", [], "any", false, false, false, 140), ($context["helpText"] ?? null), "", "maxlength='254'"], 140, $context, $this->getSourceContext());
        echo "
                    </div>
                    ";
        // line 142
        if ((twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "userTypeId", [], "any", false, false, false, 142) == 1)) {
            // line 143
            echo "                        <div class=\"tab-pane\" id=\"notifications\">
                            ";
            // line 144
            ob_start(function () { return ''; });
            echo __("Receive System Notifications?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 145
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Should this User receive system notifications?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 146
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["isSystemNotification", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "isSystemNotification", [], "any", false, false, false, 146), ($context["helpText"] ?? null)], 146, $context, $this->getSourceContext());
            echo "

                            ";
            // line 148
            ob_start(function () { return ''; });
            echo __("Receive Display Notifications?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 149
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Should this User receive Display notifications for Displays they have permission to see?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 150
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["isDisplayNotification", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "isDisplayNotification", [], "any", false, false, false, 150), ($context["helpText"] ?? null)], 150, $context, $this->getSourceContext());
            echo "

                            ";
            // line 152
            ob_start(function () { return ''; });
            echo __("Receive DataSet Notifications?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 153
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Should this User receive DataSet notification emails?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 154
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["isDataSetNotification", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "isDataSetNotification", [], "any", false, false, false, 154), ($context["helpText"] ?? null)], 154, $context, $this->getSourceContext());
            echo "

                            ";
            // line 156
            ob_start(function () { return ''; });
            echo __("Receive Layout Notifications?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 157
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Should this User receive Layout notification emails?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 158
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["isLayoutNotification", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "isLayoutNotification", [], "any", false, false, false, 158), ($context["helpText"] ?? null)], 158, $context, $this->getSourceContext());
            echo "

                            ";
            // line 160
            ob_start(function () { return ''; });
            echo __("Receive Library Notifications?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 161
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Should this User receive Library notification emails?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 162
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["isLibraryNotification", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "isLibraryNotification", [], "any", false, false, false, 162), ($context["helpText"] ?? null)], 162, $context, $this->getSourceContext());
            echo "

                            ";
            // line 164
            ob_start(function () { return ''; });
            echo __("Receive Report Notifications?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 165
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Should this User receive Report notification emails?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 166
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["isReportNotification", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "isReportNotification", [], "any", false, false, false, 166), ($context["helpText"] ?? null)], 166, $context, $this->getSourceContext());
            echo "

                            ";
            // line 168
            ob_start(function () { return ''; });
            echo __("Receive Schedule Notifications?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 169
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Should this User receive Schedule notification emails?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 170
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["isScheduleNotification", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "isScheduleNotification", [], "any", false, false, false, 170), ($context["helpText"] ?? null)], 170, $context, $this->getSourceContext());
            echo "

                            ";
            // line 172
            ob_start(function () { return ''; });
            echo __("Receive Custom Notifications?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 173
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Should this User receive notifications emails for Notifications manually created in CMS?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 174
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["isCustomNotification", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "isCustomNotification", [], "any", false, false, false, 174), ($context["helpText"] ?? null)], 174, $context, $this->getSourceContext());
            echo "
                        </div>
                    ";
        }
        // line 177
        echo "
                    <div class=\"tab-pane\" id=\"optionsTab\">
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
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["hideNavigation", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getOptionValue", ["hideNavigation", "0"], "method", false, false, false, 181), ($context["helpText"] ?? null)], 181, $context, $this->getSourceContext());
        echo "

                        ";
        // line 183
        ob_start(function () { return ''; });
        echo __("Hide User Guide?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 184
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Should this User see the new user guide when they log in? This will be set to hidden if the User has dismissed the guide themselves.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 185
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["newUserWizard", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "newUserWizard", [], "any", false, false, false, 185), ($context["helpText"] ?? null)], 185, $context, $this->getSourceContext());
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
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["isPasswordChangeRequired", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "isPasswordChangeRequired", [], "any", false, false, false, 189), ($context["helpText"] ?? null)], 189, $context, $this->getSourceContext());
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
        return "user-form-edit.twig";
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
        return array (  628 => 189,  623 => 188,  619 => 187,  613 => 185,  608 => 184,  604 => 183,  598 => 181,  593 => 180,  589 => 179,  585 => 177,  578 => 174,  573 => 173,  569 => 172,  563 => 170,  558 => 169,  554 => 168,  548 => 166,  543 => 165,  539 => 164,  533 => 162,  528 => 161,  524 => 160,  518 => 158,  513 => 157,  509 => 156,  503 => 154,  498 => 153,  494 => 152,  488 => 150,  483 => 149,  479 => 148,  473 => 146,  468 => 145,  464 => 144,  461 => 143,  459 => 142,  453 => 140,  448 => 139,  444 => 138,  438 => 136,  433 => 135,  429 => 134,  423 => 132,  418 => 131,  414 => 130,  408 => 128,  403 => 127,  399 => 126,  393 => 124,  388 => 123,  384 => 122,  378 => 120,  373 => 119,  369 => 118,  363 => 116,  358 => 115,  354 => 114,  348 => 112,  343 => 111,  339 => 110,  336 => 109,  329 => 105,  325 => 104,  322 => 103,  320 => 102,  314 => 100,  309 => 99,  305 => 98,  291 => 87,  287 => 86,  282 => 84,  279 => 83,  274 => 82,  270 => 81,  267 => 80,  261 => 78,  256 => 77,  251 => 76,  249 => 75,  242 => 71,  235 => 69,  231 => 68,  226 => 66,  223 => 65,  218 => 64,  214 => 63,  211 => 62,  205 => 60,  200 => 59,  196 => 58,  190 => 56,  185 => 55,  181 => 54,  175 => 52,  170 => 51,  165 => 50,  163 => 49,  161 => 48,  155 => 46,  150 => 45,  146 => 44,  140 => 42,  135 => 41,  131 => 40,  123 => 37,  117 => 35,  111 => 33,  109 => 32,  104 => 31,  98 => 29,  96 => 28,  92 => 27,  87 => 24,  83 => 23,  76 => 21,  70 => 18,  65 => 17,  61 => 16,  56 => 13,  52 => 12,  47 => 9,  45 => 10,  38 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "user-form-edit.twig", "/var/www/html/cms_ubi/views/user-form-edit.twig");
    }
}
