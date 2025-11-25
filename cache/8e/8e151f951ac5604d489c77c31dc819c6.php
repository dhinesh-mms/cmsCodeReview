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

/* about-page.twig */
class __TwigTemplate_ded0f47ec4e09fa762bf9a4c61179052 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'style' => [$this, 'block_style'],
            'header' => [$this, 'block_header'],
            'contentClass' => [$this, 'block_contentClass'],
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
        $this->parent = $this->loadTemplate("non-authed.twig", "about-page.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("About"), "html", null, true);
        echo " | ";
    }

    // line 12
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "<style type=\"text/css\">
    .about-container {
        padding: 19px 29px 29px;
        margin: 10px auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
        -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
        box-shadow: 0 1px 2px rgba(0,0,0,.05);
    }
    .login-logo {
        width: 200px;
    }
</style>
";
    }

    // line 32
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 33
    public function block_contentClass($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 35
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "    <p><a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["theme_url"], "method", false, false, false, 36), "html", null, true);
        echo "\"><img class=\"login-logo\" src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/xibologo.png"], "method", false, false, false, 36), "html", null, true);
        echo "\" alt=\"Logo\"></a></p>
    <a class=\"btn btn-info\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("home"), "html", null, true);
        echo "\">";
        echo __("Home");
        echo "</a>
    <div class=\"about-container\">
        ";
        // line 39
        $this->loadTemplate("licence.twig", "about-page.twig", 39)->display($context);
        // line 40
        echo "    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "about-page.twig";
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
        return array (  115 => 40,  113 => 39,  106 => 37,  99 => 36,  95 => 35,  89 => 33,  83 => 32,  62 => 13,  58 => 12,  50 => 10,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "about-page.twig", "/var/www/html/cms_ubi/views/about-page.twig");
    }
}
