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

/* module-form-settings.twig */
class __TwigTemplate_60ddb088e51476545683ef26c20990c3 extends Template
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
            'extra' => [$this, 'block_extra'],
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "module-form-settings.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "module-form-settings.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        echo __("Edit Module");
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
        echo ", \$(\"#moduleEditForm\").submit()
";
    }

    // line 21
    public function block_extra($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo json_encode(($context["module"] ?? null));
    }

    // line 23
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "moduleEditFormOpen";
    }

    // line 25
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"moduleEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.settings", ["id" => ($context["moduleId"] ?? null)]), "html", null, true);
        echo "\">

                ";
        // line 30
        ob_start(function () { return ''; });
        echo __("Preview Enabled?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 31
        echo "                ";
        ob_start(function () { return ''; });
        echo __("When Preview is Enabled users will be able to see a preview in the layout editor.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 32
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["previewEnabled", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "previewEnabled", [], "any", false, false, false, 32), ($context["helpText"] ?? null), "", "", (twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "allowPreview", [], "any", false, false, false, 32) == 0)], 32, $context, $this->getSourceContext());
        echo "

                ";
        // line 34
        ob_start(function () { return ''; });
        echo __("Enabled?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 35
        echo "                ";
        ob_start(function () { return ''; });
        echo __("When Enabled users will be able to add media using this module.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 36
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["enabled", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "enabled", [], "any", false, false, false, 36), ($context["helpText"] ?? null)], 36, $context, $this->getSourceContext());
        echo "

                ";
        // line 38
        ob_start(function () { return ''; });
        echo __("Default Duration");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 39
        echo "                ";
        ob_start(function () { return ''; });
        echo __("The default duration for Widgets of this Module when the user has elected to not set a specific duration.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 40
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_input", ["defaultDuration", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "defaultDuration", [], "any", false, false, false, 40), ($context["helpText"] ?? null)], 40, $context, $this->getSourceContext());
        echo "

                <div class=\"form-module-configure-fields\"></div>
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
        return "module-form-settings.twig";
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
        return array (  143 => 40,  138 => 39,  134 => 38,  128 => 36,  123 => 35,  119 => 34,  113 => 32,  108 => 31,  104 => 30,  99 => 28,  95 => 26,  91 => 25,  84 => 23,  77 => 21,  71 => 18,  66 => 17,  62 => 16,  57 => 13,  53 => 12,  48 => 9,  46 => 10,  39 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "module-form-settings.twig", "/var/www/html/cms_ubi/views/module-form-settings.twig");
    }
}
