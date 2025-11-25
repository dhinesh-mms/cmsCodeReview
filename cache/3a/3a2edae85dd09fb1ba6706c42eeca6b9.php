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

/* layout-preview-partial.twig */
class __TwigTemplate_5bdb63bbbfbc094aec4f5fff92925a15 extends Template
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
        echo "<div id=\"player_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 1), "html", null, true);
        echo "\" class=\"preview-player\">
    <div id=\"info_";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 2), "html", null, true);
        echo "\" class=\"preview-info\"></div>
    <div id=\"log_";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 3), "html", null, true);
        echo "\" class=\"preview-log\"></div>
    <div id=\"screen_";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 4), "html", null, true);
        echo "\" class=\"preview-screen\">
        <div id=\"splash_";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 5), "html", null, true);
        echo "\" class=\"preview-splash\">
            <div id=\"loader_";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 6), "html", null, true);
        echo "\" class=\"preview-loader\"></div>
            <div id=\"loaderCaption_";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 7), "html", null, true);
        echo "\" class=\"preview-loaderCaption\">
                <p>";
        // line 8
        echo __("Loading Layout...");
        echo "</p>
            </div>
        </div>
        <div id=\"end_";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 11), "html", null, true);
        echo "\" class=\"preview-end\"><a href=\"javascript:history.go(0)\" style=\"text-decoration: none; color: #ffffff\">";
        echo __("Play again?");
        echo "</a></div>
    </div>
</div>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout-preview-partial.twig";
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
        return array (  72 => 11,  66 => 8,  62 => 7,  58 => 6,  54 => 5,  50 => 4,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-preview-partial.twig", "/var/www/html/cms_ubi/views/layout-preview-partial.twig");
    }
}
