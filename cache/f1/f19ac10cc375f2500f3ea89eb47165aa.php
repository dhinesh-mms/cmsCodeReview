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

/* __string_template__ac1ccddca38f28ec956f96226f9aa6c9 */
class __TwigTemplate_e8dcd850f020b40534c0282fb7661dc2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (($context["backgroundColor"] ?? null)) {
            echo "body { background-color: ";
            echo twig_escape_filter($this->env, ($context["backgroundColor"] ?? null), "html", null, true);
            echo " !important; }";
        }
        // line 2
        echo ($context["styleSheet"] ?? null);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__ac1ccddca38f28ec956f96226f9aa6c9";
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
        return array (  43 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ac1ccddca38f28ec956f96226f9aa6c9", "");
    }
}
