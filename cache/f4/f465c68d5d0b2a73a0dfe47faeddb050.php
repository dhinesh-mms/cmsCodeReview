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

/* library-form-tidy.twig */
class __TwigTemplate_0e2a084a2308422a14b83ed3326c6508 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "library-form-tidy.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "library-form-tidy.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        echo __("Tidy Library");
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
        echo ", \$(\"#libraryTidyForm\").submit()
";
    }

    // line 21
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"libraryTidyForm\" class=\"XiboForm form-horizontal\" method=\"delete\" action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.tidy"), "html", null, true);
        echo "\">
                ";
        // line 25
        ob_start(function () { return ''; });
        echo __("Tidying your Library will delete any media that is not currently in use.");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 26
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null)], 26, $context, $this->getSourceContext());
        echo "              

                ";
        // line 28
        if ((($context["countExcludingGeneric"] ?? null) > 0)) {
            // line 29
            echo "                    ";
            ob_start(function () { return ''; });
            /* xgettext:no-php-format */            echo strtr(__("There is %sumExcludingGeneric% of data stored in %countExcludingGeneric% files . Are you sure you want to proceed?"), array("%sumExcludingGeneric%" => ($context["sumExcludingGeneric"] ?? null), "%countExcludingGeneric%" => ($context["countExcludingGeneric"] ?? null), ));
            $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 30
            echo "                    ";
            echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null)], 30, $context, $this->getSourceContext());
            echo "
                ";
        } else {
            // line 32
            echo "                    ";
            ob_start(function () { return ''; });
            echo __("You do not have any library files that are not in use.");
            $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 33
            echo "                    ";
            echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null)], 33, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 35
        echo "
                ";
        // line 36
        if ((($context["countGeneric"] ?? null) > 0)) {
            // line 37
            echo "                    ";
            ob_start(function () { return ''; });
            echo __("Delete Generic Files?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 38
            echo "                    ";
            ob_start(function () { return ''; });
            /* xgettext:no-php-format */            echo strtr(__("There is %sumGeneric% of data stored in %countGeneric% generic files. To delete these check here"), array("%sumGeneric%" => ($context["sumGeneric"] ?? null), "%countGeneric%" => ($context["countGeneric"] ?? null), ));
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 39
            echo "                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["tidyGenericFiles", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 39, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 41
        echo "            </form>
        </div>
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "library-form-tidy.twig";
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
        return array (  142 => 41,  136 => 39,  131 => 38,  126 => 37,  124 => 36,  121 => 35,  115 => 33,  110 => 32,  104 => 30,  99 => 29,  97 => 28,  91 => 26,  87 => 25,  83 => 24,  79 => 22,  75 => 21,  69 => 18,  64 => 17,  60 => 16,  55 => 13,  51 => 12,  46 => 9,  44 => 10,  37 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "library-form-tidy.twig", "/var/www/html/cms_ubi/views/library-form-tidy.twig");
    }
}
