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

/* user-form-edit-profile.twig */
class __TwigTemplate_4118d780c842bf2409b585dab8669808 extends Template
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
        // line 9
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "user-form-edit-profile.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "user-form-edit-profile.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        echo __("Edit User Profile");
    }

    // line 16
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "userProfileEditFormOpen";
    }

    // line 18
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 20
        echo __("Save");
        echo ", \$(\"#userEditProfileForm\").submit()
";
    }

    // line 23
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"userEditProfileForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.edit.profile", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userId", [], "any", false, false, false, 26)]), "html", null, true);
        echo "\" data-setup=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "setup", [], "any", false, false, false, 26), "html", null, true);
        echo "\" data-generate=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "generate", [], "any", false, false, false, 26), "html", null, true);
        echo "\" data-show=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "show", [], "any", false, false, false, 26), "html", null, true);
        echo "\" data-currentuser=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "twoFactorTypeId", [], "any", false, false, false, 26), "html", null, true);
        echo "\">
                ";
        // line 27
        ob_start(function () { return ''; });
        echo __("User Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 28
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_disabled", ["userName", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "userName", [], "any", false, false, false, 28)], 28, $context, $this->getSourceContext());
        echo "

                ";
        // line 30
        ob_start(function () { return ''; });
        echo __("Password");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 31
        echo "                ";
        ob_start(function () { return ''; });
        echo __("If you are changing your password or two factor settings, then please enter your current password");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 32
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_password", ["password", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 32, $context, $this->getSourceContext());
        echo "

                ";
        // line 34
        ob_start(function () { return ''; });
        echo __("New Password");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 35
        echo "                ";
        ob_start(function () { return ''; });
        echo __("Please enter your new password");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 36
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_password", ["newPassword", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 36, $context, $this->getSourceContext());
        echo "

                ";
        // line 38
        ob_start(function () { return ''; });
        echo __("Retype New Password");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 39
        echo "                ";
        ob_start(function () { return ''; });
        echo __("Please repeat the new Password.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 40
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_password", ["retypeNewPassword", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 40, $context, $this->getSourceContext());
        echo "

                ";
        // line 42
        ob_start(function () { return ''; });
        echo __("Email");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        echo "                ";
        ob_start(function () { return ''; });
        echo __("The Email Address for this user.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_email", ["email", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "email", [], "any", false, false, false, 44), ($context["helpText"] ?? null)], 44, $context, $this->getSourceContext());
        echo "

                <!-- ";
        // line 46
        ob_start(function () { return ''; });
        echo __("Two Factor Authentication");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        echo "                ";
        ob_start(function () { return ''; });
        echo __("Enable an option to provide a two factor authentication code to log into the CMS for added security.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " 
                ";
        // line 48
        $context["values"] = [["id" => 0, "value" => "Off"], ["id" => 1, "value" => "Email"], ["id" => 2, "value" => "Google Authenticator"]];
        // line 49
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["twoFactorTypeId", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "twoFactorTypeId", [], "any", false, false, false, 49), ($context["values"] ?? null), "id", "value", ($context["helpText"] ?? null)], 49, $context, $this->getSourceContext());
        echo " 

                ";
        // line 51
        echo twig_call_macro($macros["forms"], "macro_hidden", ["twoFactorRecoveryCodes", twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "twoFactorRecoveryCodes", [], "any", false, false, false, 51)], 51, $context, $this->getSourceContext());
        echo "
                <div id=\"qRCode\" class=\"text-center\">
                    <p>";
        // line 53
        echo __("Please scan the following image with your app:");
        echo "</p>
                    <p id=\"qr\"><img id=\"qrImage\" src=\"\"></p>
                    <div>
                        ";
        // line 56
        ob_start(function () { return ''; });
        echo __("Access Code");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["code", ($context["title"] ?? null)], 57, $context, $this->getSourceContext());
        echo "
                    </div>
                </div> -->

                <div id=\"recoveryButtons\">
                    <p>";
        // line 62
        echo __("Please use the buttons below to generate or show your two factor recovery codes.");
        echo "</p>

                    <ul class=\"nav nav-pills pull-left\" style=\"margin-left: 5px;\">
                        <li class=\"btn btn-success btn-sm recBtn\"><a class=\"btns generateCodes\" id=\"generateCodesBtn\" style=\"padding: 7px 7px;\" title=\"";
        // line 65
        echo __("Generate Recovery codes, this action will invalidate all existing recovery codes.");
        echo "\" > <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
        echo __("Generate");
        echo "</a></li>
                    </ul>

                    <ul class=\"nav nav-pills pull-left\" style=\"margin-left: 5px;\">
                        <li class=\"btn btn-info btn-sm recBtn\"><a class=\"btns showCodes\" id=\"showCodesBtn\" style=\"padding: 7px 7px;\" title=\"";
        // line 69
        echo __("Show existing recovery codes");
        echo "\" > <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
        echo __("Show");
        echo "</a></li>
                    </ul>
                </div>

                <div id=\"recoveryCodes\" style=\"float: left; width: 100%;\">
                    <p>";
        // line 74
        echo __("Here are your recovery codes, please make sure to store them in a safe place, like password manager.");
        echo "</p>
                    <p>";
        // line 75
        echo __("Recovery codes will become active only after this form is successfully saved");
        echo "</p>
                    <p id=\"codesList\" class=\"\"></p>
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
        return "user-form-edit-profile.twig";
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
        return array (  245 => 75,  241 => 74,  231 => 69,  222 => 65,  216 => 62,  207 => 57,  203 => 56,  197 => 53,  192 => 51,  186 => 49,  184 => 48,  177 => 47,  173 => 46,  167 => 44,  162 => 43,  158 => 42,  152 => 40,  147 => 39,  143 => 38,  137 => 36,  132 => 35,  128 => 34,  122 => 32,  117 => 31,  113 => 30,  107 => 28,  103 => 27,  91 => 26,  87 => 24,  83 => 23,  77 => 20,  72 => 19,  68 => 18,  61 => 16,  56 => 13,  52 => 12,  47 => 9,  45 => 10,  38 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "user-form-edit-profile.twig", "/var/www/html/cms_ubi/views/user-form-edit-profile.twig");
    }
}
