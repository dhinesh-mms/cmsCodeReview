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

/* report-selector.twig */
class __TwigTemplate_1705b516d80e55d37399c9c1cefb1c0a extends Template
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
        echo "<div class=\"widget-navigation-menu\">
    <ul class=\"nav nav-pills\">
        <li role=\"presentation\" class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("report.view"), "html", null, true);
        echo "\">";
        echo __("All Reports");
        echo "</a></li>
        <li role=\"presentation\" class=\"nav-item dropdown\">
            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> Reports <span class=\"caret\"></span> </a>
            <div class=\"dropdown-menu\">
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["availableReports"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["reports"]) {
            // line 8
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["reports"]);
            foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
                // line 9
                echo "                        ";
                if (((twig_get_attribute($this->env, $this->source, $context["report"], "hidden", [], "any", false, false, false, 9) != 1) && (twig_get_attribute($this->env, $this->source, $context["report"], "category", [], "any", false, false, false, 9) == ($context["reportCategory"] ?? null)))) {
                    // line 10
                    echo "                            <a class=\"dropdown-item\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("report.form", ["name" => twig_get_attribute($this->env, $this->source, $context["report"], "name", [], "any", false, false, false, 10)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "description", [], "any", false, false, false, 10), "html", null, true);
                    echo "</a>
                        ";
                }
                // line 12
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reports'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </div>
        </li>
    </ul>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "report-selector.twig";
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
        return array (  82 => 14,  76 => 13,  70 => 12,  62 => 10,  59 => 9,  54 => 8,  50 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "report-selector.twig", "/var/www/html/cms_ubi/views/report-selector.twig");
    }
}
