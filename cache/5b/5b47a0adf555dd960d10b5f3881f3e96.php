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

/* form-base.twig */
class __TwigTemplate_b8f9aec3e87fb7e1105fac38b30659a3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'formTitle' => [$this, 'block_formTitle'],
            'formHtml' => [$this, 'block_formHtml'],
            'formButtons' => [$this, 'block_formButtons'],
            'formFieldActions' => [$this, 'block_formFieldActions'],
            'callBack' => [$this, 'block_callBack'],
            'extra' => [$this, 'block_extra'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "{
    \"title\": ";
        // line 2
        ob_start(function () { return ''; });
        $this->displayBlock('formTitle', $context, $blocks);
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo json_encode($___internal_parse_0_);
        echo ",
    \"html\": ";
        // line 3
        ob_start(function () { return ''; });
        $this->displayBlock('formHtml', $context, $blocks);
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo json_encode($___internal_parse_1_);
        echo ",
    \"buttons\": ";
        // line 4
        ob_start(function () { return ''; });
        $this->displayBlock('formButtons', $context, $blocks);
        $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo json_encode($___internal_parse_2_);
        echo ",
    \"fieldActions\": ";
        // line 5
        ob_start(function () { return ''; });
        $this->displayBlock('formFieldActions', $context, $blocks);
        $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo json_encode($___internal_parse_3_);
        echo ",
    \"callBack\": ";
        // line 6
        ob_start(function () { return ''; });
        $this->displayBlock('callBack', $context, $blocks);
        $___internal_parse_4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo json_encode($___internal_parse_4_);
        echo ",
    \"extra\": ";
        // line 7
        $this->displayBlock('extra', $context, $blocks);
        // line 8
        echo "}";
    }

    // line 2
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 3
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 4
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_formFieldActions($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 6
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 7
    public function block_extra($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "[]";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "form-base.twig";
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
        return array (  117 => 7,  111 => 6,  105 => 5,  99 => 4,  93 => 3,  87 => 2,  83 => 8,  81 => 7,  74 => 6,  67 => 5,  60 => 4,  53 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "form-base.twig", "/var/www/html/cms_ubi/views/form-base.twig");
    }
}
