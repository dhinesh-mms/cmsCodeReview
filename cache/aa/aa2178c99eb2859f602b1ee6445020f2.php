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

/* widget-html-render.twig */
class __TwigTemplate_0563423c5970af94e449ac78bfddbed2 extends Template
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
        // line 23
        echo "<!doctype html>
<html lang=\"en\">
    <head>
        <title>Oasys Digital Signage</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=[[ViewPortWidth]]\" />
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
        <!-- Copyright 2006-";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Xibo Signage Ltd. Part of the Xibo Open Source Digital Signage Solution. Released under the AGPLv3 or later. -->
        <script type=\"text/javascript\" src=\"[[PlayerBundle]]\"></script>
        <link href=\"[[FontBundle]]\" rel=\"stylesheet\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["head"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 34
            echo "            ";
            echo $context["item"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        <style type=\"text/css\">
            body {
                margin: 0;
                overflow: hidden;
                font-family: sans-serif, Arial, Verdana, \"Trebuchet MS\";
            }
            h1, h2, h3, h4, p {
                margin-top: 0;
            }
            #iframe {
                border: 0;
            }
            .cycle-slide p, p.cycle-slide {
                margin-bottom:0;
            }
        </style>
        ";
        // line 52
        if ((twig_length_filter($this->env, ($context["style"] ?? null)) > 0)) {
            // line 53
            echo "        <style type=\"text/css\">
            ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["style"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 55
                echo "            ";
                echo $context["item"];
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "        </style>
        ";
        }
        // line 59
        echo "    </head>
    <body>
        <div id=\"content\"></div>
    ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["twig"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 63
            echo "        ";
            echo $context["item"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["assets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
            // line 66
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["asset"], "isAutoInclude", [], "method", false, false, false, 66) && (twig_get_attribute($this->env, $this->source, $context["asset"], "mimeType", [], "any", false, false, false, 66) == "text/css"))) {
                // line 67
                echo "        <link rel=\"stylesheet\" media=\"screen\" href=\"[[assetId=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["asset"], "id", [], "any", false, false, false, 67), "html", null, true);
                echo "]]\" />
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 68
$context["asset"], "isAutoInclude", [], "method", false, false, false, 68) && (twig_get_attribute($this->env, $this->source, $context["asset"], "mimeType", [], "any", false, false, false, 68) == "text/javascript"))) {
                // line 69
                echo "        <script id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["asset"], "id", [], "any", false, false, false, 69), "html", null, true);
                echo "\" type=\"text/javascript\" src=\"[[assetId=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["asset"], "id", [], "any", false, false, false, 69), "html", null, true);
                echo "]]\"></script>
        ";
            }
            // line 71
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "    </body>
    <script type=\"text/javascript\">
        var xiboICTargetId = ";
        // line 74
        echo twig_escape_filter($this->env, ($context["widgetId"] ?? null), "html", null, true);
        echo ";
        xiboIC.setTargetId(xiboICTargetId);
        window.globalOptions = {
          originalWidth: ";
        // line 77
        echo twig_escape_filter($this->env, ($context["width"] ?? null), "html", null, true);
        echo ",
          originalHeight: ";
        // line 78
        echo twig_escape_filter($this->env, ($context["height"] ?? null), "html", null, true);
        echo ",
          totalDuration: ";
        // line 79
        echo twig_escape_filter($this->env, ($context["duration"] ?? null), "html", null, true);
        echo ",
          cmsDateFormat: '";
        // line 80
        echo twig_escape_filter($this->env, ($context["cmsDateFormat"] ?? null), "html", null, true);
        echo "',
          locale: '";
        // line 81
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "',
        };
        var widgetData = [];
        ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 85
            echo "        widgetData.push(";
            echo json_encode($context["item"]);
            echo ");
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "
        var elements = [];
        ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 90
            echo "        elements.push(";
            echo $context["item"];
            echo ");
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "    </script>
";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hbs"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["item"]) {
            // line 94
            echo "    <script type=\"text/x-handlebars-template\" id=\"hbs-";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\"
            data-width=\"";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "width", [], "any", false, false, false, 95), "html", null, true);
            echo "\"
            data-height=\"";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "height", [], "any", false, false, false, 96), "html", null, true);
            echo "\"
            data-gap=\"";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "gapBetweenHbs", [], "any", false, false, false, 97), "html", null, true);
            echo "\"
            data-extends-override=\"";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "extends", [], "any", false, false, false, 98), "override", [], "any", false, false, false, 98), "html", null, true);
            echo "\"
            data-extends-with=\"";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "extends", [], "any", false, false, false, 99), "with", [], "any", false, false, false, 99), "html", null, true);
            echo "\"
            data-escape-html=\"";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "extends", [], "any", false, false, false, 100), "escapeHtml", [], "any", false, false, false, 100), "html", null, true);
            echo "\"
    >";
            // line 101
            echo twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 101);
            echo "</script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["onInitialize"] ?? null));
        foreach ($context['_seq'] as $context["widgetId"] => $context["parser"]) {
            // line 104
            echo "    <script type=\"text/javascript\" id=\"onInitialize-";
            echo twig_escape_filter($this->env, $context["widgetId"], "html", null, true);
            echo "\">
        function onInitialize_";
            // line 105
            echo twig_escape_filter($this->env, $context["widgetId"], "html", null, true);
            echo "(id, target, properties, meta) {
          ";
            // line 106
            echo $context["parser"];
            echo "
        }
    </script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['widgetId'], $context['parser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["onParseData"] ?? null));
        foreach ($context['_seq'] as $context["widgetId"] => $context["parser"]) {
            // line 111
            echo "    <script type=\"text/javascript\" id=\"onParseData-";
            echo twig_escape_filter($this->env, $context["widgetId"], "html", null, true);
            echo "\">
      function onParseData_";
            // line 112
            echo twig_escape_filter($this->env, $context["widgetId"], "html", null, true);
            echo "(item, properties, meta) {
        ";
            // line 113
            echo $context["parser"];
            echo "
      }
    </script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['widgetId'], $context['parser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["onDataLoad"] ?? null));
        foreach ($context['_seq'] as $context["widgetId"] => $context["parser"]) {
            // line 118
            echo "    <script type=\"text/javascript\" id=\"onDataLoad-";
            echo twig_escape_filter($this->env, $context["widgetId"], "html", null, true);
            echo "\">
      function onDataLoad_";
            // line 119
            echo twig_escape_filter($this->env, $context["widgetId"], "html", null, true);
            echo "(items, meta, properties, isDataReady) {
        ";
            // line 120
            echo $context["parser"];
            echo "
      }
    </script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['widgetId'], $context['parser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["onRender"] ?? null));
        foreach ($context['_seq'] as $context["widgetId"] => $context["parser"]) {
            // line 125
            echo "    <script type=\"text/javascript\" id=\"onRender-";
            echo twig_escape_filter($this->env, $context["widgetId"], "html", null, true);
            echo "\">
        function onRender_";
            // line 126
            echo twig_escape_filter($this->env, $context["widgetId"], "html", null, true);
            echo "(id, target, items, properties, meta) {
          ";
            // line 127
            echo $context["parser"];
            echo "
        }
    </script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['widgetId'], $context['parser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["onVisible"] ?? null));
        foreach ($context['_seq'] as $context["widgetId"] => $context["parser"]) {
            // line 132
            echo "    <script type=\"text/javascript\" id=\"onVisible-";
            echo twig_escape_filter($this->env, $context["widgetId"], "html", null, true);
            echo "\">
        function onVisible_";
            // line 133
            echo twig_escape_filter($this->env, $context["widgetId"], "html", null, true);
            echo "(id, target, items, properties, meta) {
          ";
            // line 134
            echo $context["parser"];
            echo "
        }
    </script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['widgetId'], $context['parser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["onTemplateRender"] ?? null));
        foreach ($context['_seq'] as $context["templateId"] => $context["renderer"]) {
            // line 139
            echo "    <script type=\"text/javascript\" id=\"onTemplateRender-";
            echo twig_escape_filter($this->env, $context["templateId"], "html", null, true);
            echo "\">
        function onTemplateRender_";
            // line 140
            echo twig_escape_filter($this->env, $context["templateId"], "html", null, true);
            echo "(id, target, items, properties, meta) {
            ";
            // line 141
            echo $context["renderer"];
            echo "
        }
    </script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['templateId'], $context['renderer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["onTemplateVisible"] ?? null));
        foreach ($context['_seq'] as $context["templateId"] => $context["renderer"]) {
            // line 146
            echo "    <script type=\"text/javascript\" id=\"onTemplateVisible-";
            echo twig_escape_filter($this->env, $context["templateId"], "html", null, true);
            echo "\">
        function onTemplateVisible_";
            // line 147
            echo twig_escape_filter($this->env, $context["templateId"], "html", null, true);
            echo "(id, target, items, properties, meta) {
            ";
            // line 148
            echo $context["renderer"];
            echo "
        }
    </script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['templateId'], $context['renderer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["onElementParseData"] ?? null));
        foreach ($context['_seq'] as $context["templateId"] => $context["parser"]) {
            // line 153
            echo "    <script type=\"text/javascript\" id=\"onElementParseData-";
            echo twig_escape_filter($this->env, $context["templateId"], "html", null, true);
            echo "\">
      function onElementParseData_";
            // line 154
            echo twig_escape_filter($this->env, $context["templateId"], "html", null, true);
            echo "(value, properties) {
          ";
            // line 155
            echo $context["parser"];
            echo "
      }
    </script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['templateId'], $context['parser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "    <!-- NUMITEMS=";
        echo twig_escape_filter($this->env, ($context["numItems"] ?? null), "html", null, true);
        echo " -->
    <!-- DURATION=";
        // line 160
        echo twig_escape_filter($this->env, ($context["duration"] ?? null), "html", null, true);
        echo " -->
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "widget-html-render.twig";
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
        return array (  447 => 160,  442 => 159,  432 => 155,  428 => 154,  423 => 153,  419 => 152,  409 => 148,  405 => 147,  400 => 146,  396 => 145,  386 => 141,  382 => 140,  377 => 139,  373 => 138,  363 => 134,  359 => 133,  354 => 132,  350 => 131,  340 => 127,  336 => 126,  331 => 125,  327 => 124,  317 => 120,  313 => 119,  308 => 118,  304 => 117,  294 => 113,  290 => 112,  285 => 111,  281 => 110,  271 => 106,  267 => 105,  262 => 104,  258 => 103,  250 => 101,  246 => 100,  242 => 99,  238 => 98,  234 => 97,  230 => 96,  226 => 95,  221 => 94,  217 => 93,  214 => 92,  205 => 90,  201 => 89,  197 => 87,  188 => 85,  184 => 84,  178 => 81,  174 => 80,  170 => 79,  166 => 78,  162 => 77,  156 => 74,  152 => 72,  146 => 71,  138 => 69,  136 => 68,  131 => 67,  128 => 66,  123 => 65,  114 => 63,  110 => 62,  105 => 59,  101 => 57,  92 => 55,  88 => 54,  85 => 53,  83 => 52,  65 => 36,  56 => 34,  52 => 33,  46 => 30,  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "widget-html-render.twig", "/var/www/html/cms_ubi/modules/widget-html-render.twig");
    }
}
