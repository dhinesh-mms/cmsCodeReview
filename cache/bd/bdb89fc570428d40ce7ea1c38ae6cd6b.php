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

/* __string_template__c0768d3f4931939b2c00937b948f1a96 */
class __TwigTemplate_30b07b6f3e687eac574850f735d541ca extends Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "scaleTypeId", [], "any", false, false, false, 2) == "stretch")) {
            // line 3
            echo "    ";
            $context["proportional"] = 0;
        } else {
            // line 5
            echo "    ";
            $context["proportional"] = 1;
        }
        // line 7
        echo "<div class=\"img-container\" style=\"display:table; width:100%; height: ";
        echo twig_escape_filter($this->env, ($context["height"] ?? null), "html", null, true);
        echo "px\">
    <i class=\"module-preview-icon fa fa-file-video-o\" style=\"position:absolute; color:#ececec;text-shadow: 0 0 2px black;z-index: 1;left:50%;top:50%;transform:translate(-50%,-50%);font-size: 3rem;\"></i>
    <div style=\"display: table-cell;vertical-align: middle;text-align: center;\">
        <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["downloadUrl"] ?? null), "html", null, true);
        echo "&width=";
        echo twig_escape_filter($this->env, ($context["width"] ?? null), "html", null, true);
        echo "&height=";
        echo twig_escape_filter($this->env, ($context["height"] ?? null), "html", null, true);
        echo "&proportional=";
        echo twig_escape_filter($this->env, ($context["proportional"] ?? null), "html", null, true);
        echo "&fit=0\"/>
    </div>
</div>
\t\t";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__c0768d3f4931939b2c00937b948f1a96";
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
        return array (  57 => 10,  50 => 7,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c0768d3f4931939b2c00937b948f1a96", "");
    }
}
