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

/* region-form-edit.twig */
class __TwigTemplate_928b0f07eca58b106c72cce7f5604b06 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'formTitle' => [$this, 'block_formTitle'],
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "region-form-edit.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "region-form-edit.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        echo __("Region Options");
    }

    // line 16
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    <div class=\"row\">

        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#generalTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 20
        echo __("General");
        echo "</span></a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#positionTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 21
        echo __("Positioning");
        echo "</span></a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#transitionTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 22
        echo __("Transition");
        echo "</span></a></li>
        </ul>

        <div class=\"col-md-12\">
            <form id=\"regionEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["region"] ?? null), "regionId", [], "any", false, false, false, 26)]), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"generalTab\">
                        ";
        // line 29
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 30
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Name of the Region");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 31
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["region"] ?? null), "name", [], "any", false, false, false, 31), ($context["helpText"] ?? null)], 31, $context, $this->getSourceContext());
        echo "

                        ";
        // line 33
        ob_start(function () { return ''; });
        echo __("Loop?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 34
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("If there is only one item in this region should it loop?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 35
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["loop", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["region"] ?? null), "getOptionValue", ["loop", 0], "method", false, false, false, 35), ($context["helpText"] ?? null)], 35, $context, $this->getSourceContext());
        echo "

                        ";
        // line 37
        $context["message"] = __("When should the Region Loop be enabled?");
        // line 38
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null), "alert-info"], 38, $context, $this->getSourceContext());
        echo "
                        ";
        // line 39
        $context["message2"] = __("* If your Region contains more than one Widget, Loop should not be enabled.");
        // line 40
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message2"] ?? null), "alert-info"], 40, $context, $this->getSourceContext());
        echo "
                        ";
        // line 41
        $context["message3"] = __("* If your Region contains one Widget, and that Widget is a 'fixed' item (eg Text), Loop should not be enabled.");
        // line 42
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message3"] ?? null), "alert-info"], 42, $context, $this->getSourceContext());
        echo "
                        ";
        // line 43
        $context["message4"] = __("* If your Region contains one Widget, and that Widget needs to update periodically (eg RSS Ticker Widget), Loop can be enabled ONLY if the Widget needs to update MORE frequently than the duration of the overall Layout.");
        // line 44
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message4"] ?? null), "alert-info"], 44, $context, $this->getSourceContext());
        echo "

                    </div>

                    <div class=\"tab-pane\" id=\"positionTab\">
                        ";
        // line 49
        ob_start(function () { return ''; });
        echo __("Top");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Offset from the Top Corner");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["top", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["region"] ?? null), "top", [], "any", false, false, false, 51), ($context["helpText"] ?? null)], 51, $context, $this->getSourceContext());
        echo "

                        ";
        // line 53
        ob_start(function () { return ''; });
        echo __("Left");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Offset from the Left Corner");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["left", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["region"] ?? null), "left", [], "any", false, false, false, 55), ($context["helpText"] ?? null)], 55, $context, $this->getSourceContext());
        echo "

                        ";
        // line 57
        ob_start(function () { return ''; });
        echo __("Width");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Width of the Region");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["width", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["region"] ?? null), "width", [], "any", false, false, false, 59), ($context["helpText"] ?? null)], 59, $context, $this->getSourceContext());
        echo "

                        ";
        // line 61
        ob_start(function () { return ''; });
        echo __("Height");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Height of the Region");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["height", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["region"] ?? null), "height", [], "any", false, false, false, 63), ($context["helpText"] ?? null)], 63, $context, $this->getSourceContext());
        echo "

                        ";
        // line 65
        ob_start(function () { return ''; });
        echo __("Layer");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 66
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The layering order of this region (z-index). Advanced use only.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["zIndex", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["region"] ?? null), "zIndex", [], "any", false, false, false, 67), ($context["helpText"] ?? null)], 67, $context, $this->getSourceContext());
        echo "

                        ";
        // line 69
        ob_start(function () { return ''; });
        echo __("Make this Region full screen, dimensions will be set to [width] by [height].");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 70
        echo "                        <div>
                            <button type=\"button\" id=\"setFullScreenButton\" class=\"btn btn-block btn-outline-primary\">";
        // line 71
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</button>
                        </div>
                    </div>

                    <div class=\"tab-pane\" id=\"transitionTab\">
                        ";
        // line 76
        ob_start(function () { return ''; });
        echo __("Exit Transition");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 77
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("What transition should be applied when this region is finished?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 78
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["transitionType", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["region"] ?? null), "getOptionValue", ["transitionType"], "method", false, false, false, 78), twig_array_merge([["code" => null, "transition" => ""]], twig_get_attribute($this->env, $this->source, ($context["transitions"] ?? null), "out", [], "any", false, false, false, 78)), "code", "transition", ($context["helpText"] ?? null)], 78, $context, $this->getSourceContext());
        echo "

                        ";
        // line 80
        echo twig_call_macro($macros["forms"], "macro_number", ["transitionDuration", "Duration", twig_get_attribute($this->env, $this->source, ($context["region"] ?? null), "getOptionValue", ["transitionDuration"], "method", false, false, false, 80), "The duration for this transition, in milliseconds.", "transition-group"], 80, $context, $this->getSourceContext());
        echo "

                        ";
        // line 82
        ob_start(function () { return ''; });
        echo __("Direction");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The direction for this transition. Only appropriate for transitions that move, such as Fly.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["transitionDirection", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["region"] ?? null), "getOptionValue", ["transitionDirection"], "method", false, false, false, 84), twig_get_attribute($this->env, $this->source, ($context["transitions"] ?? null), "compassPoints", [], "any", false, false, false, 84), "id", "name", ($context["helpText"] ?? null), "transition-group transition-direction"], 84, $context, $this->getSourceContext());
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
        return "region-form-edit.twig";
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
        return array (  270 => 84,  265 => 83,  261 => 82,  256 => 80,  250 => 78,  245 => 77,  241 => 76,  233 => 71,  230 => 70,  226 => 69,  220 => 67,  215 => 66,  211 => 65,  205 => 63,  200 => 62,  196 => 61,  190 => 59,  185 => 58,  181 => 57,  175 => 55,  170 => 54,  166 => 53,  160 => 51,  155 => 50,  151 => 49,  142 => 44,  140 => 43,  135 => 42,  133 => 41,  128 => 40,  126 => 39,  121 => 38,  119 => 37,  113 => 35,  108 => 34,  104 => 33,  98 => 31,  93 => 30,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  63 => 17,  59 => 16,  54 => 13,  50 => 12,  45 => 9,  43 => 10,  36 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "region-form-edit.twig", "/var/www/html/cms_ubi/views/region-form-edit.twig");
    }
}
