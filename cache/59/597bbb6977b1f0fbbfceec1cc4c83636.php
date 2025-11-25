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

/* user-form-onboarding.twig */
class __TwigTemplate_7b9652cefcce9a2839c4c062ab0bd0c4 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "user-form-onboarding.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "user-form-onboarding.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        echo __("Add New User");
    }

    // line 16
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "onboardingFormOpen";
    }

    // line 18
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"stepwizard\" data-active=\"onboarding-step-1\">
                <div class=\"stepwizard-row setup-panel\">
                    <div class=\"stepwizard-step col-xs-3\">
                        <a href=\"#onboarding-step-1\" type=\"button\" class=\"btn btn-success btn-circle\">1</a>
                        <p><small>";
        // line 25
        echo twig_escape_filter($this->env, __("Create"), "html", null, true);
        echo "</small></p>
                    </div>
                    <div class=\"stepwizard-step col-xs-3\">
                        <a href=\"#onboarding-step-2\" type=\"button\" class=\"btn btn-default btn-circle\" disabled=\"disabled\">2</a>
                        <p><small>";
        // line 29
        echo twig_escape_filter($this->env, __("Credentials"), "html", null, true);
        echo "</small></p>
                    </div>
                    ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 31)) {
            // line 32
            echo "                    <div class=\"stepwizard-step col-xs-3\">
                        <a href=\"#onboarding-step-3\" type=\"button\" class=\"btn btn-default btn-circle\" disabled=\"disabled\">3</a>
                        <p><small>";
            // line 34
            echo twig_escape_filter($this->env, __("Sharing"), "html", null, true);
            echo "</small></p>
                    </div>
                    ";
        }
        // line 37
        echo "                </div>
            </div>
            <form id=\"userOnboardingForm\" class=\"stepwizard-form form-horizontal\" role=\"form\" method=\"post\" action=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.add"), "html", null, true);
        echo "\">
                <div class=\"panel panel-default setup-content\" id=\"onboarding-step-1\" data-next=\"onboarding-step-2\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">";
        // line 42
        echo twig_escape_filter($this->env, __("Create"), "html", null, true);
        echo "</h3>
                    </div>
                    <div class=\"panel-body\">
                        <p>
                            ";
        // line 46
        echo twig_escape_filter($this->env, __("Select the role which most closely matches what you want this User to do, or select manual."), "html", null, true);
        echo "
                            &nbsp;<span class=\"fa fa-info-circle\"
                                        title=\"";
        // line 48
        echo twig_escape_filter($this->env, __("What does this mean?"), "html", null, true);
        echo "\"
                                        data-toggle=\"popover\"
                                        data-placement=\"right\"
                                        data-html=\"true\"
                                        data-content=\"";
        // line 52
        echo twig_escape_filter($this->env, __("The User account you are using has full access to the CMS and all of its features and configuration. If you are not adding an administrator type User, then it is likely you'll want to restrict and simplify what this new User can do. <br><br>You may even want to create a simplified User for your own usage to administer the system in a way tailored to your needs."), "html", null, true);
        echo "\"
                            ></span>
                        </p>
                        <div class=\"card card-body bg-light\">
                            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 57
            echo "                                <div class=\"radio\">
                                    <label>
                                        <input type=\"radio\"
                                               data-default-homepage-id=\"";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "defaultHomepageId", [], "any", false, false, false, 60), "html", null, true);
            echo "\"
                                               name=\"groupId\"
                                               value=\"";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "groupId", [], "any", false, false, false, 62), "html", null, true);
            echo "\">
                                        ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "group", [], "any", false, false, false, 63), "html", null, true);
            echo "<br>
                                        ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "description", [], "any", false, false, false, 64), "html", null, true);
            echo "
                                    </label>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                            <div class=\"radio\">
                                <label>
                                    <input type=\"radio\" name=\"groupId\" value=\"manual\">
                                    ";
        // line 71
        echo twig_escape_filter($this->env, __("Manually create a user"), "html", null, true);
        echo "<br>
                                    ";
        // line 72
        echo twig_escape_filter($this->env, __("Selecting this option will direct you to the Add User form where you can manually
                                    create user."), "html", null, true);
        // line 73
        echo "
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"panel panel-default setup-content\" style=\"display:none;\" id=\"onboarding-step-2\" ";
        // line 80
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 80)) {
            echo "data-next=\"onboarding-step-3\"";
        } else {
            echo "data-next=\"finished\"";
        }
        echo ">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">";
        // line 82
        echo twig_escape_filter($this->env, __("Credentials"), "html", null, true);
        echo "</h3>
                    </div>
                    <div class=\"panel-body\">
                        ";
        // line 85
        echo twig_call_macro($macros["forms"], "macro_hidden", ["userTypeId", "3"], 85, $context, $this->getSourceContext());
        echo "
                        ";
        // line 86
        echo twig_call_macro($macros["forms"], "macro_hidden", ["libraryQuota", "0"], 86, $context, $this->getSourceContext());
        echo "
                        ";
        // line 87
        echo twig_call_macro($macros["forms"], "macro_hidden", ["homePageId", ""], 87, $context, $this->getSourceContext());
        echo "

                        ";
        // line 89
        ob_start(function () { return ''; });
        echo __("User Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 90
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The Login Name of the user.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 91
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["userName", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "required maxlength='50'"], 91, $context, $this->getSourceContext());
        echo "

                        ";
        // line 93
        ob_start(function () { return ''; });
        echo __("Password");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 94
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The Password for this user.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 95
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_password", ["password", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "required"], 95, $context, $this->getSourceContext());
        echo "

                        ";
        // line 97
        ob_start(function () { return ''; });
        echo __("Email");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The Email Address for this user.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 99
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_email", ["email", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 99, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>

                <div class=\"panel panel-default setup-content\" style=\"display:none;\" id=\"onboarding-step-3\" data-next=\"finished\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">";
        // line 105
        echo twig_escape_filter($this->env, __("Content"), "html", null, true);
        echo "</h3>
                    </div>
                    <div class=\"panel-body\">
                        ";
        // line 108
        echo twig_call_macro($macros["forms"], "macro_hidden", ["homeFolderId", 1], 108, $context, $this->getSourceContext());
        echo "

                        ";
        // line 110
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 110)) {
            // line 111
            echo "                            <p>";
            echo twig_escape_filter($this->env, __("Select any folders the new user should have shared with them for viewing and editing."), "html", null, true);
            echo "</p>
                            <div class=\"folder-tree-buttons\">
                                <button type=\"button\" id=\"selectAllBtn\" class=\"btn btn-sm btn-outline-primary\">";
            // line 113
            echo __("Select All");
            echo "</button>
                                <button type=\"button\" id=\"selectNoneBtn\" class=\"btn btn-sm btn-outline-secondary\">";
            // line 114
            echo __("Clear Selection");
            echo "</button>
                            </div>
                            <div id=\"container-form-folder-tree\" class=\"card card-body bg-light\"></div>
                        ";
        }
        // line 118
        echo "                    </div>
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
        return "user-form-onboarding.twig";
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
        return array (  299 => 118,  292 => 114,  288 => 113,  282 => 111,  280 => 110,  275 => 108,  269 => 105,  259 => 99,  254 => 98,  250 => 97,  244 => 95,  239 => 94,  235 => 93,  229 => 91,  224 => 90,  220 => 89,  215 => 87,  211 => 86,  207 => 85,  201 => 82,  192 => 80,  183 => 73,  180 => 72,  176 => 71,  171 => 68,  161 => 64,  157 => 63,  153 => 62,  148 => 60,  143 => 57,  139 => 56,  132 => 52,  125 => 48,  120 => 46,  113 => 42,  107 => 39,  103 => 37,  97 => 34,  93 => 32,  91 => 31,  86 => 29,  79 => 25,  71 => 19,  67 => 18,  60 => 16,  55 => 13,  51 => 12,  46 => 9,  44 => 10,  37 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "user-form-onboarding.twig", "/var/www/html/cms_ubi/views/user-form-onboarding.twig");
    }
}
