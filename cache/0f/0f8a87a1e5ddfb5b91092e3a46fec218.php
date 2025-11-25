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

/* layout-form-setenablestat.twig */
class __TwigTemplate_55230e8f0aac35ee53ee2e2f5e6aeb40 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "layout-form-setenablestat.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "layout-form-setenablestat.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        $context["name"] = twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layout", [], "any", false, false, false, 13);
        // line 14
        echo "    ";
        /* xgettext:no-php-format */        echo strtr(__("Layout %name%"), array("%name%" => ($context["name"] ?? null), ));
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
        echo ", \$(\"#layoutSetEnableStatForm\").submit()
";
    }

    // line 22
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"layoutSetEnableStatForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.setenablestat", ["input" => "enableStat", "id" => twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 25)]), "html", null, true);
        echo "\">
                ";
        // line 26
        ob_start(function () { return ''; });
        echo __("Enable Stats Collection?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        echo "                ";
        ob_start(function () { return ''; });
        echo __("Enable the collection of Proof of Play statistics for the selected Layout.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 28
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["enableStat", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "enableStat", [], "any", false, false, false, 28), ($context["helpText"] ?? null)], 28, $context, $this->getSourceContext());
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
        return "layout-form-setenablestat.twig";
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
        return array (  99 => 28,  94 => 27,  90 => 26,  86 => 25,  82 => 23,  78 => 22,  72 => 19,  67 => 18,  63 => 17,  58 => 14,  55 => 13,  51 => 12,  46 => 9,  44 => 10,  37 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-form-setenablestat.twig", "/var/www/html/cms_ubi/views/layout-form-setenablestat.twig");
    }
}
