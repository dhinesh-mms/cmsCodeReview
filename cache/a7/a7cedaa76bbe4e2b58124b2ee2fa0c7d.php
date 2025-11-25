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

/* error.twig */
class __TwigTemplate_152a4709eb7f9fc7635cb60eeb08292a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return "non-authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("non-authed.twig", "error.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("Error"), "html", null, true);
        echo " | ";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    <h3>";
        echo __("Error");
        echo "</h3>
    ";
        // line 14
        if ((($context["message"] ?? null) != "")) {
            // line 15
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</div>
    ";
        } else {
            // line 17
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, __("Sorry there has been an unknown error."), "html", null, true);
            echo "</div>
    ";
        }
        // line 19
        echo "    <p>";
        echo __("Please press the button below to go to your homepage or press back in your browser");
        echo "</p>
    <a class=\"btn btn-info\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["homeUrl"] ?? null), "html", null, true);
        echo "\">";
        echo __("Home");
        echo "</a>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "error.twig";
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
        return array (  83 => 20,  78 => 19,  72 => 17,  66 => 15,  64 => 14,  59 => 13,  55 => 12,  47 => 10,  36 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "error.twig", "/var/www/html/cms_ubi/views/error.twig");
    }
}
