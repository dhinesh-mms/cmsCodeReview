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

/* layout-form-delete.twig */
class __TwigTemplate_fd31de02cb6d129945a28a1ed23e1c51 extends Template
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
        // line 2
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "layout-form-delete.twig", 3)->unwrap();
        // line 2
        $this->parent = $this->loadTemplate("form-base.twig", "layout-form-delete.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $context["layout"] = twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layout", [], "any", false, false, false, 6);
        // line 7
        echo "    ";
        /* xgettext:no-php-format */        echo strtr(__("Delete %layout%"), array("%layout%" => ($context["layout"] ?? null), ));
    }

    // line 10
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    ";
        echo __("Retire");
        echo ", XiboSwapDialog(\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.retire.form", ["id" => twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\")
    ";
        // line 12
        echo __("No");
        echo ", XiboDialogClose()
    ";
        // line 13
        echo __("Yes");
        echo ", \$(\"#layoutDeleteForm\").submit()
";
    }

    // line 16
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"layoutDeleteForm\" class=\"XiboForm form-horizontal\" method=\"delete\" action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 19)]), "html", null, true);
        echo "\">
                ";
        // line 20
        ob_start(function () { return ''; });
        echo __("Are you sure you want to delete this item?");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 21
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null)], 21, $context, $this->getSourceContext());
        echo "
                
                ";
        // line 23
        ob_start(function () { return ''; });
        echo __("All media will be unassigned and any widgets such as text/rss will be lost, unless they are on playlists. The item will be removed from all Schedules.");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 24
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null)], 24, $context, $this->getSourceContext());
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
        return "layout-form-delete.twig";
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
        return array (  110 => 24,  106 => 23,  100 => 21,  96 => 20,  92 => 19,  88 => 17,  84 => 16,  78 => 13,  74 => 12,  67 => 11,  63 => 10,  58 => 7,  55 => 6,  51 => 5,  46 => 2,  44 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-form-delete.twig", "/var/www/html/cms_ubi/views/layout-form-delete.twig");
    }
}
