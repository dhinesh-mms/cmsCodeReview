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

/* layout-renderer.twig */
class __TwigTemplate_37f77bd04b64b94717cb2a2e3c204e79 extends Template
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
        // line 8
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 11
        echo __("Preview for Layout");
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 11), "html", null, true);
        echo "</title>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"public-path\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 16), "html", null, true);
        echo "\"/>
        
        <link rel=\"shortcut icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/favicon.ico"], "method", false, false, false, 18), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 22
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 22), "html", null, true);
        echo "dist/preview.bundle.min.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" nonce=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">

            var previewTranslations = {};
            // Translations we want always available
            ";
        // line 28
        echo "                previewTranslations.actionControllerTitle = \"";
        echo twig_escape_filter($this->env, __("Webhook Controller"), "js", null, true);
        echo "\";
                previewTranslations.navigateToLayout = \"";
        // line 29
        echo twig_escape_filter($this->env, __("Navigate to layout with code [layoutTag]?"), "js", null, true);
        echo "\";
                previewTranslations.emptyRegionMessage = \"";
        // line 30
        echo twig_escape_filter($this->env, __("Empty region!"), "js", null, true);
        echo "\";
                previewTranslations.next = \"";
        // line 31
        echo twig_escape_filter($this->env, __("Next Item"), "js", null, true);
        echo "\";
                previewTranslations.previous = \"";
        // line 32
        echo twig_escape_filter($this->env, __("Previous Item"), "js", null, true);
        echo "\";
                previewTranslations.navWidget = \"";
        // line 33
        echo twig_escape_filter($this->env, __("Navigate to Widget"), "js", null, true);
        echo "\";
                previewTranslations.navLayout = \"";
        // line 34
        echo twig_escape_filter($this->env, __("Navigate to Layout"), "js", null, true);
        echo "\";
                previewTranslations.widgetId = \"";
        // line 35
        echo twig_escape_filter($this->env, __("Widget ID"), "js", null, true);
        echo "\";
                previewTranslations.layoutCode = \"";
        // line 36
        echo twig_escape_filter($this->env, __("Layout Code"), "js", null, true);
        echo "\";
                previewTranslations.target = \"";
        // line 37
        echo twig_escape_filter($this->env, __("Target"), "js", null, true);
        echo "\";
            ";
        // line 39
        echo "
            ";
        // line 40
        $context["layoutObj"] = [["layoutId" => twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 40)]];
        // line 41
        echo "            ";
        $context["xlrOptions"] = twig_array_merge(($context["previewOptions"] ?? null), ["inPreview" => true]);
        // line 42
        echo "            (function(\$){
                \$(document).ready(function(){
                    var xiboLayoutRenderer = new XiboLayoutRenderer(";
        // line 44
        echo json_encode(($context["layoutObj"] ?? null));
        echo ", ";
        echo json_encode(($context["xlrOptions"] ?? null));
        echo ");
    
                    xiboLayoutRenderer.init().then(function(xlr) {
                      xlr.playSchedules(xlr);
                    });
                });
            }(window.jQuery));
        </script>
    </body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout-renderer.twig";
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
        return array (  134 => 44,  130 => 42,  127 => 41,  125 => 40,  122 => 39,  118 => 37,  114 => 36,  110 => 35,  106 => 34,  102 => 33,  98 => 32,  94 => 31,  90 => 30,  86 => 29,  81 => 28,  74 => 23,  63 => 22,  57 => 18,  52 => 16,  42 => 11,  37 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-renderer.twig", "/var/www/html/cms_ubi/modules/layout-renderer.twig");
    }
}
