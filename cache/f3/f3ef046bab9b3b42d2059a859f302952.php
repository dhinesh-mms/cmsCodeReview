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

/* display-form-membership.twig */
class __TwigTemplate_0ec40e58afc22bee74de09c63e0947e4 extends Template
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
        // line 11
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        $context["randomId"] = twig_random($this->env);
        // line 12
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "display-form-membership.twig", 12)->unwrap();
        // line 13
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "display-form-membership.twig", 13)->unwrap();
        // line 11
        $this->parent = $this->loadTemplate("form-base.twig", "display-form-membership.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    ";
        $context["displayName"] = twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "display", [], "any", false, false, false, 16);
        // line 17
        echo "    ";
        /* xgettext:no-php-format */        echo strtr(__("Manage Membership for %displayName%"), array("%displayName%" => ($context["displayName"] ?? null), ));
    }

    // line 20
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    ";
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 22
        echo __("Save");
        echo ", membersFormSubmit(\"";
        echo twig_escape_filter($this->env, ($context["randomId"] ?? null), "html", null, true);
        echo "\")
";
    }

    // line 25
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "membersFormOpen";
    }

    // line 27
    public function block_extra($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo json_encode(($context["extra"] ?? null));
    }

    // line 29
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div id=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["randomId"] ?? null), "html", null, true);
        echo "\" class=\"div-horizontal controlDiv\"
                 data-display-groups=\"true\"
                 data-display-groups-get-url=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.search"), "html", null, true);
        echo "\"
                 data-display-groups-param=\"displayGroupId\"
                 data-display-groups-param-unassign=\"unassignDisplayGroupId\"
                 data-display-groups-url=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.assign.displayGroup", ["id" => twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "displayId", [], "any", false, false, false, 37)]), "html", null, true);
        echo "\"
            >
                ";
        // line 39
        ob_start(function () { return ''; });
        echo __("Check or un-check the options against each display group to control whether they are a member or not.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 40
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["helpText"] ?? null)], 40, $context, $this->getSourceContext());
        echo "
                <div class=\"XiboGrid\" id=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\">
                    <div class=\"XiboFilter card mb-3 bg-light\">
                        <div class=\"FilterDiv card-body\" id=\"Filter\">
                            <form class=\"form-inline\" id=\"displayGroupMembersFilter\">
                                ";
        // line 45
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        echo "                                ";
        echo twig_call_macro($macros["inline"], "macro_input", ["displayGroup", ($context["title"] ?? null)], 46, $context, $this->getSourceContext());
        echo "

                                ";
        // line 48
        echo twig_call_macro($macros["forms"], "macro_hidden", ["isDynamic", 0], 48, $context, $this->getSourceContext());
        echo "
                                ";
        // line 49
        echo twig_call_macro($macros["inline"], "macro_hidden", ["displayIdMember", twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "displayId", [], "any", false, false, false, 49)], 49, $context, $this->getSourceContext());
        echo "
                            </form>
                        </div>
                    </div>
                    <table id=\"displaysGroupsMembersTable\" class=\"table table-bordered membersTable\" style=\"width: 100%\">
                        <thead>
                        <tr>
                            <th>";
        // line 56
        echo __("ID");
        echo "</th>
                            <th>";
        // line 57
        echo __("Display Group");
        echo "</th>
                            <th>";
        // line 58
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
        return "display-form-membership.twig";
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
        return array (  172 => 58,  168 => 57,  164 => 56,  154 => 49,  150 => 48,  144 => 46,  140 => 45,  133 => 41,  128 => 40,  124 => 39,  119 => 37,  113 => 34,  108 => 32,  104 => 30,  100 => 29,  93 => 27,  86 => 25,  78 => 22,  73 => 21,  69 => 20,  64 => 17,  61 => 16,  57 => 15,  52 => 11,  50 => 13,  48 => 12,  46 => 9,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "display-form-membership.twig", "/var/www/html/cms_ubi/views/display-form-membership.twig");
    }
}
