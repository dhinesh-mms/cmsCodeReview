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

/* layout-form-publish.twig */
class __TwigTemplate_20570cd1366a19f8858e5eea5fca906d extends Template
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
            'formFieldActions' => [$this, 'block_formFieldActions'],
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "layout-form-publish.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "layout-form-publish.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        $context["layout"] = twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layout", [], "any", false, false, false, 13);
        // line 14
        echo "    ";
        /* xgettext:no-php-format */        echo strtr(__("Publish %layout%"), array("%layout%" => ($context["layout"] ?? null), ));
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
        echo __("Publish");
        echo ", \$(\"#layoutPublishForm\").submit()
";
    }

    // line 22
    public function block_formFieldActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    [{
    \"field\": \"publishNow\",
    \"trigger\": \"init\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".publish-date-control\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"publishNow\",
    \"trigger\": \"change\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".publish-date-control\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"publishNow\",
    \"trigger\": \"init\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".publish-date-control\": { \"display\": \"\" }
    }
    },{
    \"field\": \"publishNow\",
    \"trigger\": \"change\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".publish-date-control\": { \"display\": \"\" }
    }
    }]
";
    }

    // line 58
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "layoutPublishFormOpen";
    }

    // line 60
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"layoutPublishForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.publish", ["id" => twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 63)]), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 64
        echo twig_call_macro($macros["forms"], "macro_message", [__("Are you sure you want to publish this Layout? If it is already in use the update will automatically get pushed.")], 64, $context, $this->getSourceContext());
        echo "

                ";
        // line 66
        ob_start(function () { return ''; });
        echo __("Publish Now?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        echo "                ";
        ob_start(function () { return ''; });
        echo __("When selected, layout will be published immediately, if it should be published at a specific time, uncheck this checkbox and pick a date in the field below");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["publishNow", ($context["title"] ?? null), 1, ($context["helpText"] ?? null)], 68, $context, $this->getSourceContext());
        echo "

                ";
        // line 70
        ob_start(function () { return ''; });
        echo __("Publish Date");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 71
        echo "                ";
        ob_start(function () { return ''; });
        echo __("Select the date and time to publish the layout");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_dateTime", ["publishDate", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "publishedDate", [], "any", false, false, false, 72), ($context["helpText"] ?? null), "publish-date-control", ""], 72, $context, $this->getSourceContext());
        echo "
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
        return "layout-form-publish.twig";
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
        return array (  169 => 72,  164 => 71,  160 => 70,  154 => 68,  149 => 67,  145 => 66,  140 => 64,  136 => 63,  132 => 61,  128 => 60,  121 => 58,  84 => 23,  80 => 22,  74 => 19,  69 => 18,  65 => 17,  60 => 14,  57 => 13,  53 => 12,  48 => 9,  46 => 10,  39 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-form-publish.twig", "/var/www/html/cms_ubi/views/layout-form-publish.twig");
    }
}
