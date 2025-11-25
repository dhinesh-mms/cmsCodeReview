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

/* schedule-form-delete.twig */
class __TwigTemplate_bf15a251f3123285575b96516b62cd9d extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "schedule-form-delete.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "schedule-form-delete.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        echo __("Delete Event");
    }

    // line 16
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "setupScheduleForm";
    }

    // line 18
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 20
        echo __("Yes");
        echo ", \$(\"#scheduleDeleteForm\").submit()
";
    }

    // line 23
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"scheduleDeleteForm\" class=\"form-horizontal\" method=\"delete\" action=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "eventId", [], "any", false, false, false, 26)]), "html", null, true);
        echo "\">
                ";
        // line 27
        ob_start(function () { return ''; });
        echo __("Are you sure you want to delete this event from <b>all</b> displays? If you only want to delete this item from certain displays, please deselect the displays in the edit dialogue and click Save.");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 28
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null)], 28, $context, $this->getSourceContext());
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
        return "schedule-form-delete.twig";
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
        return array (  99 => 28,  95 => 27,  91 => 26,  87 => 24,  83 => 23,  77 => 20,  72 => 19,  68 => 18,  61 => 16,  56 => 13,  52 => 12,  47 => 9,  45 => 10,  38 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "schedule-form-delete.twig", "/var/www/html/cms_ubi/views/schedule-form-delete.twig");
    }
}
