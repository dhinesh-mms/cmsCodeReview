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

/* displayprofile-form-edit-common-fields.twig */
class __TwigTemplate_a02d38cc0b029fe6d8b2758a847fe446 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'formHtml' => [$this, 'block_formHtml'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "displayprofile-form-edit-common-fields.twig", 8)->unwrap();
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('formHtml', $context, $blocks);
    }

    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        ob_start(function () { return ''; });
        echo __("The Name of the Profile - (1 - 50 characters)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        echo twig_call_macro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "name", [], "any", false, false, false, 13), ($context["helpText"] ?? null)], 13, $context, $this->getSourceContext());
        echo "

";
        // line 15
        ob_start(function () { return ''; });
        echo __("Default Profile?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        ob_start(function () { return ''; });
        echo __("Is this the default profile for all Displays of this type? Only 1 profile can be the default.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 17
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["isDefault", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "isDefault", [], "any", false, false, false, 17), ($context["helpText"] ?? null)], 17, $context, $this->getSourceContext());
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "displayprofile-form-edit-common-fields.twig";
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
        return array (  71 => 17,  67 => 16,  63 => 15,  58 => 13,  54 => 12,  50 => 11,  43 => 10,  40 => 9,  38 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "displayprofile-form-edit-common-fields.twig", "/var/www/html/cms_ubi/views/displayprofile-form-edit-common-fields.twig");
    }
}
