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

/* not-found.twig */
class __TwigTemplate_58cab616ff1a3b8c6905ebc806700483 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("non-authed.twig", "not-found.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
    <p>";
        // line 12
        echo __("Sorry we could not find that page.");
        echo "</p>
    <p>";
        // line 13
        echo __("Please press the button below to go to your homepage or press back in your browser");
        echo "</p>
    <a class=\"btn btn-info\" href=\"";
        // line 14
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
        return "not-found.twig";
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
        return array (  61 => 14,  57 => 13,  53 => 12,  50 => 11,  46 => 10,  35 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "not-found.twig", "/var/www/html/cms_ubi/views/not-found.twig");
    }
}
