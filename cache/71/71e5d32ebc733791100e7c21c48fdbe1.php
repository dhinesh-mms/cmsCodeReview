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

/* usergroup-form-edit.twig */
class __TwigTemplate_b67e664259998ce46bf1f475ee6fae59 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "usergroup-form-edit.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "usergroup-form-edit.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        echo __("Edit User Group");
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
        echo ", \$(\"#userGroupEditForm\").submit()
";
    }

    // line 21
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "userGroupFormOpen";
    }

    // line 23
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general-tab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 27
        echo __("General");
        echo "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#description-tab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 28
        echo __("Description");
        echo "</span></a></li>
                ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "userTypeId", [], "any", false, false, false, 29) == 1)) {
            // line 30
            echo "                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#notifications-tab\" role=\"tab\" data-toggle=\"tab\"><span>";
            echo __("Notifications");
            echo "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#onboarding-tab\" role=\"tab\" data-toggle=\"tab\"><span>";
            // line 31
            echo __("Onboarding Settings");
            echo "</span></a></li>
                ";
        }
        // line 33
        echo "            </ul>
            <form id=\"userGroupEditForm\" class=\"UserGroupForm form-horizontal\" method=\"put\" action=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("group.edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "groupId", [], "any", false, false, false, 34)]), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general-tab\">

                        ";
        // line 38
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 39
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The Name for this User Group");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 40
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["group", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "group", [], "any", false, false, false, 40), ($context["helpText"] ?? null), "", "required maxlength='50'"], 40, $context, $this->getSourceContext());
        echo "

                        ";
        // line 42
        ob_start(function () { return ''; });
        echo __("Library Quota");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The quota that should be applied. Enter 0 for no quota.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        echo "                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\" for=\"libraryQuota\">";
        // line 45
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</label>
                            <div class=\"col-sm-6\">
                                <input class=\"form-control\" name=\"libraryQuota\" type=\"number\" id=\"libraryQuota\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "libraryQuota", [], "any", false, false, false, 47), "html", null, true);
        echo "\" />
                                <span class=\"help-block\">";
        // line 48
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
                    </div>

                    ";
        // line 60
        if ((twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "userTypeId", [], "any", false, false, false, 60) == 1)) {
            // line 61
            echo "                        <div class=\"tab-pane\" id=\"notifications-tab\">
                            ";
            // line 62
            ob_start(function () { return ''; });
            echo __("Receive System Notifications?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 63
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Should members of this Group receive system notifications?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 64
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["isSystemNotification", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "isSystemNotification", [], "any", false, false, false, 64), ($context["helpText"] ?? null)], 64, $context, $this->getSourceContext());
            echo "

                            ";
            // line 66
            ob_start(function () { return ''; });
            echo __("Receive Display Notifications?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 67
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Should members of this Group receive Display notifications for Displays they have permission to see?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 68
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["isDisplayNotification", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "isDisplayNotification", [], "any", false, false, false, 68), ($context["helpText"] ?? null)], 68, $context, $this->getSourceContext());
            echo "

                            ";
            // line 70
            ob_start(function () { return ''; });
            echo __("Receive DataSet Notifications?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 71
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Should members of this Group receive DataSet emails?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 72
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["isDataSetNotification", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "isDataSetNotification", [], "any", false, false, false, 72), ($context["helpText"] ?? null)], 72, $context, $this->getSourceContext());
            echo "

                            ";
            // line 74
            ob_start(function () { return ''; });
            echo __("Receive Layout Notifications?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 75
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Should members of this Group receive Layout emails?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 76
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["isLayoutNotification", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "isLayoutNotification", [], "any", false, false, false, 76), ($context["helpText"] ?? null)], 76, $context, $this->getSourceContext());
            echo "

                            ";
            // line 78
            ob_start(function () { return ''; });
            echo __("Receive Library Notifications?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 79
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Should members of this Group receive Library notification emails?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 80
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["isLibraryNotification", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "isLibraryNotification", [], "any", false, false, false, 80), ($context["helpText"] ?? null)], 80, $context, $this->getSourceContext());
            echo "

                            ";
            // line 82
            ob_start(function () { return ''; });
            echo __("Receive Report Notifications?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 83
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Should members of this Group receive Report emails?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 84
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["isReportNotification", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "isReportNotification", [], "any", false, false, false, 84), ($context["helpText"] ?? null)], 84, $context, $this->getSourceContext());
            echo "

                            ";
            // line 86
            ob_start(function () { return ''; });
            echo __("Receive Schedule Notifications?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 87
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Should members of this Group receive Schedule emails?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 88
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["isScheduleNotification", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "isScheduleNotification", [], "any", false, false, false, 88), ($context["helpText"] ?? null)], 88, $context, $this->getSourceContext());
            echo "

                            ";
            // line 90
            ob_start(function () { return ''; });
            echo __("Receive Custom Notifications?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 91
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Should members of this Group receive notifications emails for Notifications manually created in CMS?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 92
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["isCustomNotification", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "isCustomNotification", [], "any", false, false, false, 92), ($context["helpText"] ?? null)], 92, $context, $this->getSourceContext());
            echo "
                        </div>
                    ";
        }
        // line 95
        echo "
                    <div class=\"tab-pane\" id=\"description-tab\">
                        ";
        // line 97
        ob_start(function () { return ''; });
        echo __("Description");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("An optional description of the user group. (1 - 500 characters)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 99
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_textarea", ["description", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "description", [], "any", false, false, false, 99), ($context["helpText"] ?? null), "", "", 15], 99, $context, $this->getSourceContext());
        echo "
                    </div>

                    ";
        // line 102
        if ((twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "userTypeId", [], "any", false, false, false, 102) == 1)) {
            // line 103
            echo "                    <div class=\"tab-pane\" id=\"onboarding-tab\">
                       <!-- ";
            // line 104
            ob_start(function () { return ''; });
            echo __("Show when onboarding a new user?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 105
            echo "                        ";
            ob_start(function () { return ''; });
            echo __("Should this User Group be available for selection when creating a New User via the onboarding form?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 106
            echo "                        ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["isShownForAddUser", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "isShownForAddUser", [], "any", false, false, false, 106), ($context["helpText"] ?? null)], 106, $context, $this->getSourceContext());
            echo " -->

                        ";
            // line 108
            ob_start(function () { return ''; });
            echo __("Default Homepage");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 109
            echo "                        ";
            ob_start(function () { return ''; });
            echo __("Default Homepage for users created with this group.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 110
            echo "                        ";
            ob_start(function () { return ''; });
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.homepages.search"), "html", null, true);
            echo "?userTypeId=1";
            $context["homepagesUrl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 111
            echo "                        ";
            $context["attributes"] = [["name" => "data-live-search", "value" => "true"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" =>             // line 116
($context["homepagesUrl"] ?? null)], ["name" => "data-search-term", "value" => "homepage"], ["name" => "data-id-property", "value" => "homepage"], ["name" => "data-text-property", "value" => "title"], ["name" => "data-initial-key", "value" => "homepage"], ["name" => "data-initial-value", "value" => twig_get_attribute($this->env, $this->source,             // line 121
($context["group"] ?? null), "defaultHomepageId", [], "any", false, false, false, 121)]];
            // line 123
            echo "                        ";
            echo twig_call_macro($macros["forms"], "macro_dropdown", ["defaultHomepageId", "single", ($context["title"] ?? null), "", null, "homepage", "title", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 123, $context, $this->getSourceContext());
            echo "
                    </div>
                    ";
        }
        // line 126
        echo "                </div>
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
        return "usergroup-form-edit.twig";
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
        return array (  366 => 126,  359 => 123,  357 => 121,  356 => 116,  354 => 111,  348 => 110,  343 => 109,  339 => 108,  333 => 106,  328 => 105,  324 => 104,  321 => 103,  319 => 102,  312 => 99,  307 => 98,  303 => 97,  299 => 95,  292 => 92,  287 => 91,  283 => 90,  277 => 88,  272 => 87,  268 => 86,  262 => 84,  257 => 83,  253 => 82,  247 => 80,  242 => 79,  238 => 78,  232 => 76,  227 => 75,  223 => 74,  217 => 72,  212 => 71,  208 => 70,  202 => 68,  197 => 67,  193 => 66,  187 => 64,  182 => 63,  178 => 62,  175 => 61,  173 => 60,  158 => 48,  154 => 47,  149 => 45,  146 => 44,  141 => 43,  137 => 42,  131 => 40,  126 => 39,  122 => 38,  115 => 34,  112 => 33,  107 => 31,  102 => 30,  100 => 29,  96 => 28,  92 => 27,  87 => 24,  83 => 23,  76 => 21,  70 => 18,  65 => 17,  61 => 16,  56 => 13,  52 => 12,  47 => 9,  45 => 10,  38 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "usergroup-form-edit.twig", "/var/www/html/cms_ubi/views/usergroup-form-edit.twig");
    }
}
