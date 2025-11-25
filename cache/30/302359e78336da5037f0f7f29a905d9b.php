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

/* usergroup-form-acl.twig */
class __TwigTemplate_a3d8beaa75a2b98bec0a980fafe740c2 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "usergroup-form-acl.twig", 10)->unwrap();
        // line 11
        $macros["flow"] = $this->macros["flow"] = $this;
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "usergroup-form-acl.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    ";
        /* xgettext:no-php-format */        echo strtr(__("Turn Features on/off for %group%"), array("%group%" => ($context["group"] ?? null), ));
    }

    // line 17
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    ";
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 19
        echo __("Save");
        echo ", \$(\"#AclForm\").submit()
";
    }

    // line 22
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "featureAclFormOpen";
    }

    // line 61
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">

            ";
        // line 66
        ob_start(function () { return ''; });
        echo __("Check or un-check the options against each item to control whether access to a Feature is allowed or not.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        echo "            ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["helpText"] ?? null)], 67, $context, $this->getSourceContext());
        echo "

            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#mediaTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 70
        echo __("Content");
        echo "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#displaysTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 71
        echo __("Displays");
        echo "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#homepagesTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 72
        echo __("Reports");
        echo "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#usersTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 73
        echo __("Users");
        echo "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#systemTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 74
        echo __("System");
        echo "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#customTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 75
        echo __("Custom");
        echo "</span></a></li>
            </ul>
            <form id=\"AclForm\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("group.acl", ["id" => ($context["groupId"] ?? null)]), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane\" id=\"homepagesTab\">
                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    <th>";
        // line 83
        echo twig_escape_filter($this->env, __("Feature"), "html", null, true);
        echo "</th>
                                    <th>
                                        ";
        // line 85
        echo __("Enabled?");
        // line 86
        echo "                                        <i class=\"fa fa-info-circle\" title=\"";
        echo "Check this box to give this User access to this Feature.";
        echo "\"></i>
                                    </th>
                                    ";
        // line 88
        if ((($context["isUserSpecific"] ?? null) == 1)) {
            // line 89
            echo "                                        <th>
                                            ";
            // line 90
            echo __("Inherited?");
            // line 91
            echo "                                            <i class=\"fa fa-info-circle\" title=\"";
            echo "If checked this User already has access to this Feature due to the User Groups they belong to.";
            echo "\"></i>
                                        </th>
                                    ";
        }
        // line 94
        echo "                                </tr>
                            </thead>

                            <tbody class=\"feature-group\">
                                ";
        // line 98
        echo twig_call_macro($macros["flow"], "macro_featureTitleRow", [__("Reporting"), __("Run reporting on a variety of different KPI's and metrics applicable to the Features enabled."), ($context["isUserSpecific"] ?? null)], 98, $context, $this->getSourceContext());
        echo "
                                ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["reporting"], "method", false, false, false, 99));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 100
            echo "                                    ";
            echo twig_call_macro($macros["flow"], "macro_featureRow", [twig_get_attribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 100), twig_get_attribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 100), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 100, $context, $this->getSourceContext());
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                            </tbody>
                        </table>
                    </div>
                    <div class=\"tab-pane active\" id=\"mediaTab\">
                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    <th>";
        // line 109
        echo twig_escape_filter($this->env, __("Feature"), "html", null, true);
        echo "</th>
                                    <th>
                                        ";
        // line 111
        echo __("Enabled?");
        // line 112
        echo "                                        <i class=\"fa fa-info-circle\" title=\"";
        echo "Check this box to give this User access to this Feature.";
        echo "\"></i>
                                    </th>
                                    ";
        // line 114
        if ((($context["isUserSpecific"] ?? null) == 1)) {
            // line 115
            echo "                                        <th>
                                            ";
            // line 116
            echo __("Inherited?");
            // line 117
            echo "                                            <i class=\"fa fa-info-circle\" title=\"";
            echo "If checked this User already has access to this Feature due to the User Groups they belong to.";
            echo "\"></i>
                                        </th>
                                    ";
        }
        // line 120
        echo "                                </tr>
                            </thead>

                            <tbody class=\"feature-group\">
                                ";
        // line 124
        echo twig_call_macro($macros["flow"], "macro_featureTitleRow", [__("Folders"), __("Organise content sharing with Folders"), ($context["isUserSpecific"] ?? null)], 124, $context, $this->getSourceContext());
        echo "
                                ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["folders"], "method", false, false, false, 125));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 126
            echo "                                    ";
            echo twig_call_macro($macros["flow"], "macro_featureRow", [twig_get_attribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 126), twig_get_attribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 126), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 126, $context, $this->getSourceContext());
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                            </tbody>

                            <tbody class=\"feature-group\">
                                ";
        // line 131
        echo twig_call_macro($macros["flow"], "macro_featureTitleRow", [__("Library"), __("Media Library that stores file based content for use in Layouts, DataSets, Playlists and Menu Boards"), ($context["isUserSpecific"] ?? null)], 131, $context, $this->getSourceContext());
        echo "
                                ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["library"], "method", false, false, false, 132));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 133
            echo "                                    ";
            echo twig_call_macro($macros["flow"], "macro_featureRow", [twig_get_attribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 133), twig_get_attribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 133), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 133, $context, $this->getSourceContext());
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["playlist-design"], "method", false, false, false, 135));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 136
            echo "                                    ";
            echo twig_call_macro($macros["flow"], "macro_featureRow", [twig_get_attribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 136), twig_get_attribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 136), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 136, $context, $this->getSourceContext());
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["menuboard-design"], "method", false, false, false, 138));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 139
            echo "                                    ";
            echo twig_call_macro($macros["flow"], "macro_featureRow", [twig_get_attribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 139), twig_get_attribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 139), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 139, $context, $this->getSourceContext());
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                            </tbody>

                            <tbody class=\"feature-group\">
                                ";
        // line 144
        echo twig_call_macro($macros["flow"], "macro_featureTitleRow", [__("Layout Design"), __("Allow content creators to create Layouts - which hold the content you want to show on your Displays"), ($context["isUserSpecific"] ?? null)], 144, $context, $this->getSourceContext());
        echo "
                                ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["layout-design"], "method", false, false, false, 145));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 146
            echo "                                    ";
            echo twig_call_macro($macros["flow"], "macro_featureRow", [twig_get_attribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 146), twig_get_attribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 146), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 146, $context, $this->getSourceContext());
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "                            </tbody>

                            <tbody class=\"feature-group\">
                                ";
        // line 151
        echo twig_call_macro($macros["flow"], "macro_featureTitleRow", [__("Campaigns"), __("Ensure ordering by grouping Layouts into Campaigns"), ($context["isUserSpecific"] ?? null)], 151, $context, $this->getSourceContext());
        echo "
                                ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["campaigns"], "method", false, false, false, 152));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 153
            echo "                                    ";
            echo twig_call_macro($macros["flow"], "macro_featureRow", [twig_get_attribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 153), twig_get_attribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 153), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 153, $context, $this->getSourceContext());
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                            </tbody>

                            <tbody class=\"feature-group\">
                                ";
        // line 158
        echo twig_call_macro($macros["flow"], "macro_featureTitleRow", [__("Tagging"), __("Organise and filter items by using Tags"), ($context["isUserSpecific"] ?? null)], 158, $context, $this->getSourceContext());
        echo "
                                ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["tagging"], "method", false, false, false, 159));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 160
            echo "                                    ";
            echo twig_call_macro($macros["flow"], "macro_featureRow", [twig_get_attribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 160), twig_get_attribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 160), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 160, $context, $this->getSourceContext());
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "                            </tbody>

                            <tbody class=\"feature-group\">
                                ";
        // line 165
        echo twig_call_macro($macros["flow"], "macro_featureTitleRow", [__("Fonts"), __("Administrative access to Fonts"), ($context["isUserSpecific"] ?? null)], 165, $context, $this->getSourceContext());
        echo "
                                ";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["fonts"], "method", false, false, false, 166));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 167
            echo "                                    ";
            echo twig_call_macro($macros["flow"], "macro_featureRow", [twig_get_attribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 167), twig_get_attribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 167), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 167, $context, $this->getSourceContext());
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "                            </tbody>
                        </table>
                    </div>
                    <div class=\"tab-pane\" id=\"displaysTab\">
                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    <th>";
        // line 176
        echo twig_escape_filter($this->env, __("Feature"), "html", null, true);
        echo "</th>
                                    <th>
                                        ";
        // line 178
        echo __("Enabled?");
        // line 179
        echo "                                        <i class=\"fa fa-info-circle\" title=\"";
        echo "Check this box to give this User access to this Feature.";
        echo "\"></i>
                                    </th>
                                    ";
        // line 181
        if ((($context["isUserSpecific"] ?? null) == 1)) {
            // line 182
            echo "                                        <th>
                                            ";
            // line 183
            echo __("Inherited?");
            // line 184
            echo "                                            <i class=\"fa fa-info-circle\" title=\"";
            echo "If checked this User already has access to this Feature due to the User Groups they belong to.";
            echo "\"></i>
                                        </th>
                                    ";
        }
        // line 187
        echo "                                </tr>
                            </thead>

                            <tbody class=\"feature-group\">
                                ";
        // line 191
        echo twig_call_macro($macros["flow"], "macro_featureTitleRow", [__("Scheduling"), __("Create and manage Scheduled Events for Displays and Display Groups"), ($context["isUserSpecific"] ?? null)], 191, $context, $this->getSourceContext());
        echo "
                                ";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["scheduling"], "method", false, false, false, 192));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 193
            echo "                                    ";
            echo twig_call_macro($macros["flow"], "macro_featureRow", [twig_get_attribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 193), twig_get_attribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 193), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 193, $context, $this->getSourceContext());
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "                            </tbody>

                            <tbody class=\"feature-group\">
                                ";
        // line 198
        echo twig_call_macro($macros["flow"], "macro_featureTitleRow", [__("Display Management"), __("Connect and manage Displays."), ($context["isUserSpecific"] ?? null)], 198, $context, $this->getSourceContext());
        echo "
                                ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["displays"], "method", false, false, false, 199));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 200
            echo "                                    ";
            echo twig_call_macro($macros["flow"], "macro_featureRow", [twig_get_attribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 200), twig_get_attribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 200), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 200, $context, $this->getSourceContext());
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        echo "                            </tbody>

                        </table>
                    </div>
                    <div class=\"tab-pane\" id=\"usersTab\">
                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    <th>";
        // line 210
        echo twig_escape_filter($this->env, __("Feature"), "html", null, true);
        echo "</th>
                                    <th>
                                        ";
        // line 212
        echo __("Enabled?");
        // line 213
        echo "                                        <i class=\"fa fa-info-circle\" title=\"";
        echo "Check this box to give this User access to this Feature.";
        echo "\"></i>
                                    </th>
                                    ";
        // line 215
        if ((($context["isUserSpecific"] ?? null) == 1)) {
            // line 216
            echo "                                        <th>
                                            ";
            // line 217
            echo __("Inherited?");
            // line 218
            echo "                                            <i class=\"fa fa-info-circle\" title=\"";
            echo "If checked this User already has access to this Feature due to the User Groups they belong to.";
            echo "\"></i>
                                        </th>
                                    ";
        }
        // line 221
        echo "                                </tr>
                            </thead>

                            <tbody class=\"feature-group\">
                                ";
        // line 225
        echo twig_call_macro($macros["flow"], "macro_featureTitleRow", [__("User functions"), __("User profile preferences for the logged in User"), ($context["isUserSpecific"] ?? null)], 225, $context, $this->getSourceContext());
        echo "
                                ";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["users"], "method", false, false, false, 226));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 227
            echo "                                    ";
            echo twig_call_macro($macros["flow"], "macro_featureRow", [twig_get_attribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 227), twig_get_attribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 227), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 227, $context, $this->getSourceContext());
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
        echo "                            </tbody>

                            <tbody class=\"feature-group\">
                                ";
        // line 232
        echo twig_call_macro($macros["flow"], "macro_featureTitleRow", [__("Notifications"), __("Notification Centre allows for users to to create/edit Notifications sent to other Users or used in Layouts"), ($context["isUserSpecific"] ?? null)], 232, $context, $this->getSourceContext());
        echo "
                                ";
        // line 233
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["notifications"], "method", false, false, false, 233));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 234
            echo "                                    ";
            echo twig_call_macro($macros["flow"], "macro_featureRow", [twig_get_attribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 234), twig_get_attribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 234), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 234, $context, $this->getSourceContext());
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "                            </tbody>

                            <tbody class=\"feature-group\">
                                ";
        // line 239
        echo twig_call_macro($macros["flow"], "macro_featureTitleRow", [__("User Management"), __("Manage Users that can authenticate with the CMS. Create and organise them into User Groups to enable 'Group Features'"), ($context["isUserSpecific"] ?? null)], 239, $context, $this->getSourceContext());
        echo "
                                ";
        // line 240
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["users-management"], "method", false, false, false, 240));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 241
            echo "                                    ";
            echo twig_call_macro($macros["flow"], "macro_featureRow", [twig_get_attribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 241), twig_get_attribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 241), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 241, $context, $this->getSourceContext());
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        echo "                            </tbody>

                            <tbody class=\"feature-group\">
                                ";
        // line 246
        echo twig_call_macro($macros["flow"], "macro_featureTitleRow", [__("Dashboards"), __("Dashboards bring together key features for Users"), ($context["isUserSpecific"] ?? null)], 246, $context, $this->getSourceContext());
        echo "
                                ";
        // line 247
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["dashboards"], "method", false, false, false, 247));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 248
            echo "                                    ";
            echo twig_call_macro($macros["flow"], "macro_featureRow", [twig_get_attribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 248), twig_get_attribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 248), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 248, $context, $this->getSourceContext());
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 250
        echo "                            </tbody>

                        </table>
                    </div>
                    <div class=\"tab-pane\" id=\"systemTab\">
                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    <th>";
        // line 258
        echo twig_escape_filter($this->env, __("Feature"), "html", null, true);
        echo "</th>
                                    <th>
                                        ";
        // line 260
        echo __("Enabled?");
        // line 261
        echo "                                        <i class=\"fa fa-info-circle\" title=\"";
        echo "Check this box to give this User access to this Feature.";
        echo "\"></i>
                                    </th>
                                    ";
        // line 263
        if ((($context["isUserSpecific"] ?? null) == 1)) {
            // line 264
            echo "                                        <th>
                                            ";
            // line 265
            echo __("Inherited?");
            // line 266
            echo "                                            <i class=\"fa fa-info-circle\" title=\"";
            echo "If checked this User already has access to this Feature due to the User Groups they belong to.";
            echo "\"></i>
                                        </th>
                                    ";
        }
        // line 269
        echo "                                </tr>
                            </thead>

                            <tbody class=\"feature-group\">
                                ";
        // line 273
        echo twig_call_macro($macros["flow"], "macro_featureTitleRow", [__("Configuration"), __("Restricted high level access advised - potentially damaging system settings"), ($context["isUserSpecific"] ?? null)], 273, $context, $this->getSourceContext());
        echo "
                                ";
        // line 274
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["system"], "method", false, false, false, 274));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 275
            echo "                                    ";
            echo twig_call_macro($macros["flow"], "macro_featureRow", [twig_get_attribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 275), twig_get_attribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 275), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 275, $context, $this->getSourceContext());
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        echo "                            </tbody>

                            <tbody class=\"feature-group\">
                                ";
        // line 280
        echo twig_call_macro($macros["flow"], "macro_featureTitleRow", [__("Troubleshooting"), __("Tools to diagnose problems when seeking help"), ($context["isUserSpecific"] ?? null)], 280, $context, $this->getSourceContext());
        echo "
                                ";
        // line 281
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["troubleshooting"], "method", false, false, false, 281));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 282
            echo "                                    ";
            echo twig_call_macro($macros["flow"], "macro_featureRow", [twig_get_attribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 282), twig_get_attribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 282), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 282, $context, $this->getSourceContext());
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        echo "                            </tbody>

                        </table>
                    </div>
                    <div class=\"tab-pane\" id=\"customTab\">
                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    <th>";
        // line 292
        echo twig_escape_filter($this->env, __("Feature"), "html", null, true);
        echo "</th>
                                    <th>
                                        ";
        // line 294
        echo __("Enabled?");
        // line 295
        echo "                                        <i class=\"fa fa-info-circle\" title=\"";
        echo "Check this box to give this User access to this Feature.";
        echo "\"></i>
                                    </th>
                                    ";
        // line 297
        if ((($context["isUserSpecific"] ?? null) == 1)) {
            // line 298
            echo "                                        <th>
                                            ";
            // line 299
            echo __("Inherited?");
            // line 300
            echo "                                            <i class=\"fa fa-info-circle\" title=\"";
            echo "If checked this User already has access to this Feature due to the User Groups they belong to.";
            echo "\"></i>
                                        </th>
                                    ";
        }
        // line 303
        echo "                                </tr>
                            </thead>

                            <tbody class=\"feature-group\">
                                ";
        // line 307
        echo twig_call_macro($macros["flow"], "macro_featureTitleRow", [__("Custom"), __("Third party extensions to the platform."), ($context["isUserSpecific"] ?? null)], 307, $context, $this->getSourceContext());
        echo "
                                ";
        // line 308
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["userGroupFactory"] ?? null), "getFeaturesByGroup", ["custom"], "method", false, false, false, 308));
        foreach ($context['_seq'] as $context["_key"] => $context["customFeature"]) {
            // line 309
            echo "                                    ";
            echo twig_call_macro($macros["flow"], "macro_featureRow", [twig_get_attribute($this->env, $this->source, $context["customFeature"], "feature", [], "any", false, false, false, 309), twig_get_attribute($this->env, $this->source, $context["customFeature"], "title", [], "any", false, false, false, 309), ($context["features"] ?? null), ($context["inheritedFeatures"] ?? null), ($context["isUserSpecific"] ?? null)], 309, $context, $this->getSourceContext());
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 311
        echo "                            </tbody>

                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
";
    }

    // line 24
    public function macro_hasFeature($__features__ = null, $__feature__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "features" => $__features__,
            "feature" => $__feature__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 25
            echo "    ";
            if (twig_in_filter(($context["feature"] ?? null), ($context["features"] ?? null))) {
                // line 26
                echo "        checked
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 30
    public function macro_featureTitleRow($__title__ = null, $__description__ = null, $__isUserSpecific__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "description" => $__description__,
            "isUserSpecific" => $__isUserSpecific__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 31
            echo "    <tr class=\"feature-group-row\">
        <td class=\"feature-group-header-cell closed\">
            <strong>";
            // line 33
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</strong> <i class=\"fa fa-arrow-circle-down\"></i>
            <p class=\"feature-group-description\">
                ";
            // line 35
            echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
            echo "
            </p>
        </td>
        <td><input class=\"feature-select-all\" type=\"checkbox\" /></td>
        ";
            // line 39
            if ((($context["isUserSpecific"] ?? null) == 1)) {
                // line 40
                echo "            <td>
                <input type=\"checkbox\" class=\"inherit-group-all\" disabled>
            </td>
        ";
            }
            // line 44
            echo "    </tr>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 47
    public function macro_featureRow($__feature__ = null, $__title__ = null, $__features__ = null, $__inheritedFeatures__ = null, $__isUserSpecific__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "feature" => $__feature__,
            "title" => $__title__,
            "features" => $__features__,
            "inheritedFeatures" => $__inheritedFeatures__,
            "isUserSpecific" => $__isUserSpecific__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 48
            echo "    <tr class=\"feature-row\">
        <td>";
            // line 49
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</td>
        <td>
            <input type=\"checkbox\" name=\"features[]\" value=\"";
            // line 51
            echo twig_escape_filter($this->env, ($context["feature"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_call_macro($macros["flow"], "macro_hasFeature", [($context["features"] ?? null), ($context["feature"] ?? null)], 51, $context, $this->getSourceContext());
            echo ">
        </td>
        ";
            // line 53
            if ((($context["isUserSpecific"] ?? null) == 1)) {
                // line 54
                echo "            <td>
                <input type=\"checkbox\" class=\"inherit-group\" disabled ";
                // line 55
                echo twig_call_macro($macros["flow"], "macro_hasFeature", [($context["inheritedFeatures"] ?? null), ($context["feature"] ?? null)], 55, $context, $this->getSourceContext());
                echo ">
            </td>
        ";
            }
            // line 58
            echo "    </tr>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "usergroup-form-acl.twig";
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
        return array (  868 => 58,  862 => 55,  859 => 54,  857 => 53,  850 => 51,  845 => 49,  842 => 48,  825 => 47,  815 => 44,  809 => 40,  807 => 39,  800 => 35,  795 => 33,  791 => 31,  776 => 30,  765 => 26,  762 => 25,  748 => 24,  736 => 311,  727 => 309,  723 => 308,  719 => 307,  713 => 303,  706 => 300,  704 => 299,  701 => 298,  699 => 297,  693 => 295,  691 => 294,  686 => 292,  676 => 284,  667 => 282,  663 => 281,  659 => 280,  654 => 277,  645 => 275,  641 => 274,  637 => 273,  631 => 269,  624 => 266,  622 => 265,  619 => 264,  617 => 263,  611 => 261,  609 => 260,  604 => 258,  594 => 250,  585 => 248,  581 => 247,  577 => 246,  572 => 243,  563 => 241,  559 => 240,  555 => 239,  550 => 236,  541 => 234,  537 => 233,  533 => 232,  528 => 229,  519 => 227,  515 => 226,  511 => 225,  505 => 221,  498 => 218,  496 => 217,  493 => 216,  491 => 215,  485 => 213,  483 => 212,  478 => 210,  468 => 202,  459 => 200,  455 => 199,  451 => 198,  446 => 195,  437 => 193,  433 => 192,  429 => 191,  423 => 187,  416 => 184,  414 => 183,  411 => 182,  409 => 181,  403 => 179,  401 => 178,  396 => 176,  387 => 169,  378 => 167,  374 => 166,  370 => 165,  365 => 162,  356 => 160,  352 => 159,  348 => 158,  343 => 155,  334 => 153,  330 => 152,  326 => 151,  321 => 148,  312 => 146,  308 => 145,  304 => 144,  299 => 141,  290 => 139,  285 => 138,  276 => 136,  271 => 135,  262 => 133,  258 => 132,  254 => 131,  249 => 128,  240 => 126,  236 => 125,  232 => 124,  226 => 120,  219 => 117,  217 => 116,  214 => 115,  212 => 114,  206 => 112,  204 => 111,  199 => 109,  190 => 102,  181 => 100,  177 => 99,  173 => 98,  167 => 94,  160 => 91,  158 => 90,  155 => 89,  153 => 88,  147 => 86,  145 => 85,  140 => 83,  131 => 77,  126 => 75,  122 => 74,  118 => 73,  114 => 72,  110 => 71,  106 => 70,  99 => 67,  95 => 66,  89 => 62,  85 => 61,  78 => 22,  72 => 19,  67 => 18,  63 => 17,  58 => 14,  54 => 13,  49 => 9,  47 => 11,  45 => 10,  38 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "usergroup-form-acl.twig", "/var/www/html/cms_ubi/views/usergroup-form-acl.twig");
    }
}
