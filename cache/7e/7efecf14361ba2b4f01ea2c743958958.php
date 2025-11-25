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

/* displaygroup-form-members.twig */
class __TwigTemplate_4e47c4caaedc3b4dfe8260e039d8c4ce extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "displaygroup-form-members.twig", 12)->unwrap();
        // line 13
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "displaygroup-form-members.twig", 13)->unwrap();
        // line 11
        $this->parent = $this->loadTemplate("form-base.twig", "displaygroup-form-members.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    ";
        $context["displayGroupName"] = twig_get_attribute($this->env, $this->source, ($context["displayGroup"] ?? null), "displayGroup", [], "any", false, false, false, 16);
        // line 17
        echo "    ";
        /* xgettext:no-php-format */        echo strtr(__("Manage Membership for %displayGroupName%"), array("%displayGroupName%" => ($context["displayGroupName"] ?? null), ));
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
                 data-display=\"true\"
                 data-display-get-url=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.search"), "html", null, true);
        echo "\"
                 data-display-param=\"displayId\"
                 data-display-param-unassign=\"unassignDisplayId\"
                 data-display-url=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.assign.display", ["id" => twig_get_attribute($this->env, $this->source, ($context["displayGroup"] ?? null), "displayGroupId", [], "any", false, false, false, 37)]), "html", null, true);
        echo "\"
                 data-display-groups=\"true\"
                 data-display-groups-get-url=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.search"), "html", null, true);
        echo "\"
                 data-display-groups-param=\"displayGroupId\"
                 data-display-groups-param-unassign=\"unassignDisplayGroupId\"
                 data-display-groups-url=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.assign.displayGroup", ["id" => twig_get_attribute($this->env, $this->source, ($context["displayGroup"] ?? null), "displayGroupId", [], "any", false, false, false, 42)]), "html", null, true);
        echo "\"
            >
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#displayTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 45
        echo __("Displays");
        echo "</span></a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#displayGroupTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 46
        echo __("Display Groups");
        echo "</span></a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#treeTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 47
        echo __("Relationship Tree");
        echo "</span></a></li>
                </ul>
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"displayTab\">
                        ";
        // line 51
        ob_start(function () { return ''; });
        echo __("Check or un-check the options against each display to control whether they are a member or not.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["helpText"] ?? null)], 52, $context, $this->getSourceContext());
        echo "
                        <div class=\"XiboGrid\" id=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\">
                            <div class=\"XiboFilter card mb-3 bg-light\">
                                <div class=\"FilterDiv card-body\" id=\"Filter\">
                                    <form class=\"form-inline\" id=\"displayForm\">
                                        ";
        // line 57
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        echo "                                        ";
        echo twig_call_macro($macros["inline"], "macro_input", ["display", ($context["title"] ?? null)], 58, $context, $this->getSourceContext());
        echo "
                                        
                                        ";
        // line 60
        ob_start(function () { return ''; });
        echo __("Authorised");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        echo "                                        ";
        $context["values"] = [["id" =>  -1, "value" => ""], ["id" => 1, "value" => "Yes"], ["id" => 0, "value" => "No"]];
        // line 62
        echo "                                        ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["authorised", "single", ($context["title"] ?? null),  -1, ($context["values"] ?? null), "id", "value"], 62, $context, $this->getSourceContext());
        echo "

                                        ";
        // line 64
        echo twig_call_macro($macros["inline"], "macro_hidden", ["displayGroupIdMembers", twig_get_attribute($this->env, $this->source, ($context["displayGroup"] ?? null), "displayGroupId", [], "any", false, false, false, 64)], 64, $context, $this->getSourceContext());
        echo "
                                    </form>
                                </div>
                            </div>
                            <table id=\"displaysMembersTable\" class=\"table table-bordered membersTable\">
                                <thead>
                                    <tr>
                                        <th>";
        // line 71
        echo __("ID");
        echo "</th>
                                        <th>";
        // line 72
        echo __("Display");
        echo "</th>
                                        <th>";
        // line 73
        echo __("Status");
        echo "</th>
                                        <th>";
        // line 74
        echo __("Logged In");
        echo "</th>
                                        <th>";
        // line 75
        echo __("Version");
        echo "</th>
                                        <th>";
        // line 76
        echo __("Member");
        echo "</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"displayGroupTab\">
                        ";
        // line 85
        ob_start(function () { return ''; });
        echo __("Check or un-check the options against each display group to control whether they are a member or not.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 86
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["helpText"] ?? null)], 86, $context, $this->getSourceContext());
        echo "
                        <div class=\"XiboGrid\" id=\"";
        // line 87
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\">
                            <div class=\"XiboFilter card mb-3 bg-light\">
                                <div class=\"FilterDiv card-body\" id=\"Filter\">
                                    <form class=\"form-inline\" id=\"displayGroupForm\">
                                        ";
        // line 91
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        echo "                                        ";
        echo twig_call_macro($macros["inline"], "macro_input", ["displayGroup", ($context["title"] ?? null)], 92, $context, $this->getSourceContext());
        echo "

                                        ";
        // line 94
        echo twig_call_macro($macros["inline"], "macro_hidden", ["displayGroupIdMembers", twig_get_attribute($this->env, $this->source, ($context["displayGroup"] ?? null), "displayGroupId", [], "any", false, false, false, 94)], 94, $context, $this->getSourceContext());
        echo "
                                        ";
        // line 95
        echo twig_call_macro($macros["forms"], "macro_hidden", ["isDynamic", 0], 95, $context, $this->getSourceContext());
        echo "
                                    </form>
                                </div>
                            </div>
                            <table id=\"displaysGroupsMembersTable\" class=\"table table-bordered membersTable\" style=\"width: 100%\">
                                <thead>
                                    <tr>
                                        <th>";
        // line 102
        echo __("ID");
        echo "</th>
                                        <th>";
        // line 103
        echo __("Display Group");
        echo "</th>
                                        <th>";
        // line 104
        echo __("Member");
        echo "</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"treeTab\">
                        ";
        // line 113
        ob_start(function () { return ''; });
        echo __("Below is the family tree for this Display Group.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 114
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["helpText"] ?? null)], 114, $context, $this->getSourceContext());
        echo "

                        ";
        // line 116
        ob_start(function () { return ''; });
        echo __("The Display Group being edited is in bold. The list is ordered so that items above the current Display Group are its ancestors and items below are its descendants.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 117
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["helpText"] ?? null)], 117, $context, $this->getSourceContext());
        echo "
                        <ul>
                            ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tree"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 120
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["group"], "displayGroup", [], "any", false, false, false, 120) == twig_get_attribute($this->env, $this->source, ($context["displayGroup"] ?? null), "displayGroup", [], "any", false, false, false, 120))) {
                // line 121
                echo "                                    <li><strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "displayGroup", [], "any", false, false, false, 121), "html", null, true);
                echo "</strong></li>
                                ";
            } else {
                // line 123
                echo "                                    <li><a class=\"XiboFormButton\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.members.form", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "displayGroupId", [], "any", false, false, false, 123)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "displayGroup", [], "any", false, false, false, 123), "html", null, true);
                echo "</a></li>
                                ";
            }
            // line 125
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                        </ul>
                    </div>
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
        return "displaygroup-form-members.twig";
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
        return array (  339 => 126,  333 => 125,  325 => 123,  319 => 121,  316 => 120,  312 => 119,  306 => 117,  302 => 116,  296 => 114,  292 => 113,  280 => 104,  276 => 103,  272 => 102,  262 => 95,  258 => 94,  252 => 92,  248 => 91,  241 => 87,  236 => 86,  232 => 85,  220 => 76,  216 => 75,  212 => 74,  208 => 73,  204 => 72,  200 => 71,  190 => 64,  184 => 62,  181 => 61,  177 => 60,  171 => 58,  167 => 57,  160 => 53,  155 => 52,  151 => 51,  144 => 47,  140 => 46,  136 => 45,  130 => 42,  124 => 39,  119 => 37,  113 => 34,  108 => 32,  104 => 30,  100 => 29,  93 => 27,  86 => 25,  78 => 22,  73 => 21,  69 => 20,  64 => 17,  61 => 16,  57 => 15,  52 => 11,  50 => 13,  48 => 12,  46 => 9,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "displaygroup-form-members.twig", "/var/www/html/cms_ubi/views/displaygroup-form-members.twig");
    }
}
