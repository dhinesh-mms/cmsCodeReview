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

/* library-form-delete.twig */
class __TwigTemplate_d43cbdcbafb48247367454b8dd73b8cd extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "library-form-delete.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "library-form-delete.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        echo __("Delete Media");
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
        echo __("Yes");
        echo ", \$(\"#libraryDeleteForm\").submit()
";
    }

    // line 21
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"libraryDeleteForm\" class=\"XiboForm form-horizontal\" method=\"delete\" action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "mediaId", [], "any", false, false, false, 24)]), "html", null, true);
        echo "\">
                ";
        // line 25
        ob_start(function () { return ''; });
        echo __("Are you sure you want to delete this file?");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 26
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null)], 26, $context, $this->getSourceContext());
        echo "

                ";
        // line 28
        ob_start(function () { return ''; });
        echo __("Deleting a file cannot be reversed.");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 29
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null)], 29, $context, $this->getSourceContext());
        echo "

                ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "isUsed", [], "method", false, false, false, 31)) {
            // line 32
            echo "
                    ";
            // line 33
            ob_start(function () { return ''; });
            echo __("Force delete from any existing layouts, assignments, etc");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 34
            echo "                    ";
            ob_start(function () { return ''; });
            echo __("This library item has been used somewhere in the system. You will only be allowed to delete it if you check this.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 35
            echo "                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["forceDelete", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 35, $context, $this->getSourceContext());
            echo "

                    ";
            // line 37
            ob_start(function () { return ''; });
            echo __("Please note that removing a media item from the Library will also delete it from the Published version of this Layout and you won't be able to undo that action by discarding your changes. Displays will also be immediately effected.");
            $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 38
            echo "                    ";
            echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null), "alert alert-info"], 38, $context, $this->getSourceContext());
            echo "

                ";
        }
        // line 41
        echo "
                ";
        // line 42
        ob_start(function () { return ''; });
        echo __("Add to Purge list?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        echo "                ";
        ob_start(function () { return ''; });
        echo __("When set, each Display that has this Media in its local storage, will be notified to remove it.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["purge", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 44, $context, $this->getSourceContext());
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
        return "library-form-delete.twig";
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
        return array (  150 => 44,  145 => 43,  141 => 42,  138 => 41,  131 => 38,  127 => 37,  121 => 35,  116 => 34,  112 => 33,  109 => 32,  107 => 31,  101 => 29,  97 => 28,  91 => 26,  87 => 25,  83 => 24,  79 => 22,  75 => 21,  69 => 18,  64 => 17,  60 => 16,  55 => 13,  51 => 12,  46 => 9,  44 => 10,  37 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "library-form-delete.twig", "/var/www/html/cms_ubi/views/library-form-delete.twig");
    }
}
