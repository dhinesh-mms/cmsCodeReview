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

/* user-form-membership.twig */
class __TwigTemplate_3b4446b028349b794fe5d9a46a2650bf extends Template
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
        // line 10
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        $context["randomId"] = twig_random($this->env);
        // line 11
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "user-form-membership.twig", 11)->unwrap();
        // line 12
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "user-form-membership.twig", 12)->unwrap();
        // line 10
        $this->parent = $this->loadTemplate("form-base.twig", "user-form-membership.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    ";
        $context["userName"] = twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userName", [], "any", false, false, false, 15);
        // line 16
        echo "    ";
        /* xgettext:no-php-format */        echo strtr(__("Manage Membership for %userName%"), array("%userName%" => ($context["userName"] ?? null), ));
    }

    // line 19
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    ";
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 21
        echo __("Save");
        echo ", membersFormSubmit(\"";
        echo twig_escape_filter($this->env, ($context["randomId"] ?? null), "html", null, true);
        echo "\")
";
    }

    // line 24
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "membersFormOpen";
    }

    // line 26
    public function block_extra($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo json_encode(($context["extra"] ?? null));
    }

    // line 28
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div id=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["randomId"] ?? null), "html", null, true);
        echo "\" class=\"div-horizontal controlDiv\"
                 data-user-groups=\"true\"
                 data-user-groups-get-url=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("group.search"), "html", null, true);
        echo "\"
                 data-user-groups-param=\"userGroupId\"
                 data-user-groups-param-unassign=\"unassignUserGroupId\"
                 data-user-groups-url=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.assign.userGroup", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userId", [], "any", false, false, false, 36)]), "html", null, true);
        echo "\"
            >
                ";
        // line 38
        ob_start(function () { return ''; });
        echo __("Check or un-check the options against each display group to control whether they are a member or not.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 39
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["helpText"] ?? null)], 39, $context, $this->getSourceContext());
        echo "
                <div class=\"XiboGrid\" id=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\">
                    <div class=\"XiboFilter card mb-3 bg-light\">
                        <div class=\"FilterDiv card-body\" id=\"Filter\">
                            <form class=\"form-inline\" id=\"userGroupMembersFilter\">
                                ";
        // line 44
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        echo "                                ";
        echo twig_call_macro($macros["inline"], "macro_input", ["group", ($context["title"] ?? null)], 45, $context, $this->getSourceContext());
        echo "
                                ";
        // line 46
        echo twig_call_macro($macros["inline"], "macro_hidden", ["userIdMember", twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userId", [], "any", false, false, false, 46)], 46, $context, $this->getSourceContext());
        echo "
                            </form>
                        </div>
                    </div>
                    <table id=\"userGroupMembersTable\" class=\"table table-bordered membersTable\" style=\"width: 100%\">
                        <thead>
                        <tr>
                            <th>";
        // line 53
        echo __("ID");
        echo "</th>
                            <th>";
        // line 54
        echo __("User Groups");
        echo "</th>
                            <th>";
        // line 55
        echo __("Member");
        echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user-form-membership.twig";
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
        return array (  167 => 55,  163 => 54,  159 => 53,  149 => 46,  144 => 45,  140 => 44,  133 => 40,  128 => 39,  124 => 38,  119 => 36,  113 => 33,  108 => 31,  104 => 29,  100 => 28,  93 => 26,  86 => 24,  78 => 21,  73 => 20,  69 => 19,  64 => 16,  61 => 15,  57 => 14,  52 => 10,  50 => 12,  48 => 11,  46 => 8,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "user-form-membership.twig", "/var/www/html/cms_ubi/views/user-form-membership.twig");
    }
}
