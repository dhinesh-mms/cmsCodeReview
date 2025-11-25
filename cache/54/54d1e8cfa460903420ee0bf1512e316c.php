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

/* __string_template__4cecb7762fb0e239a18fad9324fa321f */
class __TwigTemplate_9fc2f9a137fda65c2aa4c01ebedc8043 extends Template
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
        echo "
";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "scaleType", [], "any", false, false, false, 2) == "stretch")) {
            // line 3
            echo "    ";
            $context["proportional"] = 0;
        } else {
            // line 5
            echo "    ";
            $context["proportional"] = 1;
        }
        // line 7
        if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "scaleType", [], "any", false, false, false, 7) == "fit")) {
            // line 8
            echo "    ";
            $context["fit"] = 1;
        } else {
            // line 10
            echo "    ";
            $context["fit"] = 0;
        }
        // line 12
        echo "<div class=\"img-container\" style=\"display:table; width:100%; height: ";
        echo twig_escape_filter($this->env, ($context["height"] ?? null), "html", null, true);
        echo "px\">
    <div class=\"img-sub-container\" style=\"text-align:";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "alignId", [], "any", false, false, false, 13), "html", null, true);
        echo "; display: table-cell; vertical-align: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "valignId", [], "any", false, false, false, 13), "html", null, true);
        echo ";\">
        <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["downloadUrl"] ?? null), "html", null, true);
        echo "&width=";
        echo twig_escape_filter($this->env, ($context["width"] ?? null), "html", null, true);
        echo "&height=";
        echo twig_escape_filter($this->env, ($context["height"] ?? null), "html", null, true);
        echo "&proportional=";
        echo twig_escape_filter($this->env, ($context["proportional"] ?? null), "html", null, true);
        echo "&fit=";
        echo twig_escape_filter($this->env, ($context["fit"] ?? null), "html", null, true);
        echo "\" />
    </div>
</div>
\t\t";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__4cecb7762fb0e239a18fad9324fa321f";
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
        return array (  71 => 14,  65 => 13,  60 => 12,  56 => 10,  52 => 8,  50 => 7,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4cecb7762fb0e239a18fad9324fa321f", "");
    }
}
