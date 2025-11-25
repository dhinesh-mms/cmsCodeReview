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

/* campaign-preview.twig */
class __TwigTemplate_ba97ecd66cd8695017505bbd61c8e5ba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageContent' => [$this, 'block_pageContent'],
            'javaScript' => [$this, 'block_javaScript'],
            'headContent' => [$this, 'block_headContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "campaign-preview.twig", 9)->unwrap();
        // line 8
        $this->parent = $this->loadTemplate("authed.twig", "campaign-preview.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">
            ";
        // line 14
        $context["campaignName"] = twig_get_attribute($this->env, $this->source, ($context["campaign"] ?? null), "campaign", [], "any", false, false, false, 14);
        // line 15
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["campaign"] ?? null), "isLayoutSpecific", [], "any", false, false, false, 15)) {
            // line 16
            echo "                ";
            /* xgettext:no-php-format */            echo strtr(__("Layout Preview for %campaignName%"), array("%campaignName%" => ($context["campaignName"] ?? null), ));
            // line 17
            echo "            ";
        } else {
            // line 18
            echo "                ";
            /* xgettext:no-php-format */            echo strtr(__("Campaign Preview for %campaignName%"), array("%campaignName%" => ($context["campaignName"] ?? null), ));
            // line 19
            echo "            ";
        }
        // line 20
        echo "        </div>
        <div class=\"widget-body\">
            <p><b>";
        // line 22
        echo __("total duration");
        echo "</b> ";
        echo twig_escape_filter($this->env, $this->extensions['Xibo\Twig\DateFormatTwigExtension']->dateFormat(($context["duration"] ?? null)), "html", null, true);
        echo " <i>(";
        echo __("hours:min:sec");
        echo ")</i></p>
            <p><b>";
        // line 23
        echo __("number of layouts");
        echo "</b> : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["campaign"] ?? null), "numberLayouts", [], "any", false, false, false, 23), "html", null, true);
        echo " </p>
            <div class=\"row clearfix\">
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extendedLayouts"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["extendedLayout"]) {
            // line 26
            echo "                    <div class=\"col-sm-6 col-md-4 col-lg-3\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"embed-responsive embed-responsive-4by3\">
                                    <div class=\"embed-responsive-item preview-container\"
                                         data-url=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.preview", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extendedLayout"], "layout", [], "any", false, false, false, 31), "layoutId", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">
                                        ";
            // line 32
            $this->loadTemplate("layout-preview-partial.twig", "campaign-preview.twig", 32)->display(twig_array_merge($context, ["layout" => twig_get_attribute($this->env, $this->source, $context["extendedLayout"], "layout", [], "any", false, false, false, 32), "previewOptions" => twig_get_attribute($this->env, $this->source, $context["extendedLayout"], "previewOptions", [], "any", false, false, false, 32)]));
            // line 33
            echo "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-8\">
                                <small>";
            // line 39
            echo __("id");
            echo ":</small> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extendedLayout"], "layout", [], "any", false, false, false, 39), "layoutId", [], "any", false, false, false, 39), "html", null, true);
            echo "<br/>
                                <small>";
            // line 40
            echo __("name");
            echo ":</small> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extendedLayout"], "layout", [], "any", false, false, false, 40), "layout", [], "any", false, false, false, 40), "html", null, true);
            echo "<br/>
                                <small>";
            // line 41
            echo __("duration");
            echo ":</small> ";
            echo twig_escape_filter($this->env, $this->extensions['Xibo\Twig\DateFormatTwigExtension']->dateFormat(twig_get_attribute($this->env, $this->source, $context["extendedLayout"], "duration", [], "any", false, false, false, 41)), "html", null, true);
            echo "<br/>
                            </div>
                            <div class=\"col-sm-4\">
                                <a class=\"btn btn-white\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.preview", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extendedLayout"], "layout", [], "any", false, false, false, 44), "layoutId", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" target=\"_blank\">
                                    ";
            // line 45
            echo __("Open full screen");
            // line 46
            echo "                                    <span class=\"fa fa-tablet\"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extendedLayout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </div>
        </div>
    </div>
";
    }

    // line 57
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 58), "html", null, true);
        echo "dist/vendor/html5preloader/html5Preloader.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 59), "html", null, true);
        echo "dist/preview/html-preview.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" nonce=\"";
        // line 60
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">
        var previewTranslations = {};
        // Translations we want always available
        ";
        // line 64
        echo "            previewTranslations.actionControllerTitle = \"";
        echo twig_escape_filter($this->env, __("Webhook Controller"), "js", null, true);
        echo "\";
            previewTranslations.navigateToLayout = \"";
        // line 65
        echo twig_escape_filter($this->env, __("Navigate to layout with code [layoutTag]?"), "js", null, true);
        echo "\";
            previewTranslations.emptyRegionMessage = \"";
        // line 66
        echo twig_escape_filter($this->env, __("Empty region!"), "js", null, true);
        echo "\";
            previewTranslations.nextItem = \"";
        // line 67
        echo twig_escape_filter($this->env, __("Next Item"), "js", null, true);
        echo "\";
            previewTranslations.previousItem = \"";
        // line 68
        echo twig_escape_filter($this->env, __("Previous Item"), "js", null, true);
        echo "\";
            previewTranslations.navWidget = \"";
        // line 69
        echo twig_escape_filter($this->env, __("Navigate to Widget"), "js", null, true);
        echo "\";
            previewTranslations.navLayout = \"";
        // line 70
        echo twig_escape_filter($this->env, __("Navigate to Layout"), "js", null, true);
        echo "\";
            previewTranslations.widgetId = \"";
        // line 71
        echo twig_escape_filter($this->env, __("Widget ID"), "js", null, true);
        echo "\";
            previewTranslations.layoutCode = \"";
        // line 72
        echo twig_escape_filter($this->env, __("Layout Code"), "js", null, true);
        echo "\";
            previewTranslations.target = \"";
        // line 73
        echo twig_escape_filter($this->env, __("Target"), "js", null, true);
        echo "\";
        ";
        // line 75
        echo "
        (function(\$){
          \$(document).ready(function(){
            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extendedLayouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extendedLayout"]) {
            // line 79
            echo "              dsInit(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extendedLayout"], "layout", [], "any", false, false, false, 79), "layoutId", [], "any", false, false, false, 79), "html", null, true);
            echo ", ";
            echo json_encode(twig_get_attribute($this->env, $this->source, $context["extendedLayout"], "previewOptions", [], "any", false, false, false, 79));
            echo ", false);
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extendedLayout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "          });
        }(jQuery));
    </script>
";
    }

    // line 86
    public function block_headContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 87), "html", null, true);
        echo "dist/preview/html-preview.css\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["css/html-preview.css"], "method", false, false, false, 88), "html", null, true);
        echo "\" />
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "campaign-preview.twig";
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
        return array (  293 => 88,  288 => 87,  284 => 86,  277 => 81,  266 => 79,  262 => 78,  257 => 75,  253 => 73,  249 => 72,  245 => 71,  241 => 70,  237 => 69,  233 => 68,  229 => 67,  225 => 66,  221 => 65,  216 => 64,  210 => 60,  200 => 59,  189 => 58,  185 => 57,  178 => 52,  159 => 46,  157 => 45,  153 => 44,  145 => 41,  139 => 40,  133 => 39,  125 => 33,  123 => 32,  119 => 31,  112 => 26,  95 => 25,  88 => 23,  80 => 22,  76 => 20,  73 => 19,  70 => 18,  67 => 17,  64 => 16,  61 => 15,  59 => 14,  55 => 12,  51 => 11,  46 => 8,  44 => 9,  37 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "campaign-preview.twig", "/var/www/html/cms_ubi/views/campaign-preview.twig");
    }
}
