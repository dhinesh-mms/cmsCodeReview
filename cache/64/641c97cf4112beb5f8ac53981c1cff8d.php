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

/* module-html-preview.twig */
class __TwigTemplate_74b9cbefad8e8aa7ff732dfafbca5c30 extends Template
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
        echo "<iframe scrolling=\"no\" 
        src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.getResource", ["regionId" => ($context["regionId"] ?? null), "id" => ($context["widgetId"] ?? null)]), "html", null, true);
        echo "?preview=1\" 
        width=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["width"] ?? null), "html", null, true);
        echo "px\"
        height=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["height"] ?? null), "html", null, true);
        echo "px\" 
        style=\"border:0;\"
></iframe>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "module-html-preview.twig";
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
        return array (  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "module-html-preview.twig", "/var/www/html/cms_ubi/views/module-html-preview.twig");
    }
}
