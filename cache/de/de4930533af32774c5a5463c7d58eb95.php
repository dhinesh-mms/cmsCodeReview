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

/* dashboard-icon-page.twig */
class __TwigTemplate_50bf40b9206a581f3fb5bf8432955f47 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageContent' => [$this, 'block_pageContent'],
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "dashboard-icon-page.twig", 9)->unwrap();
        // line 8
        $this->parent = $this->loadTemplate("authed.twig", "dashboard-icon-page.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate("theme-dashboard-message.twig", "dashboard-icon-page.twig", 12);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display($context);
        }
        // line 13
        echo "    <div id=\"dashbuttons\">
        ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["schedule.view"], "method", false, false, false, 14)) {
            // line 15
            echo "            <div class=\"dashicons\">
                <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.view"), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/dashboard/scheduleview.png"], "method", false, false, false, 17), "html", null, true);
            echo "\" class=\"dash_button\" />
                    <span class=\"dash_text\">";
            // line 18
            echo __("Schedule");
            echo "</span>
                </a>
            </div>
        ";
        }
        // line 22
        echo "
        ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["layout.view"], "method", false, false, false, 23)) {
            // line 24
            echo "            <div class=\"dashicons\">
                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.view"), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/dashboard/presentations.png"], "method", false, false, false, 26), "html", null, true);
            echo "\" class=\"dash_button\" />
                    <span class=\"dash_text\">";
            // line 27
            echo __("Layouts");
            echo "</span>
                </a>
            </div>
        ";
        }
        // line 31
        echo "
        ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["library.view"], "method", false, false, false, 32)) {
            // line 33
            echo "            <div class=\"dashicons\">
                <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.view"), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/dashboard/content.png"], "method", false, false, false, 35), "html", null, true);
            echo "\" class=\"dash_button\" />
                    <span class=\"dash_text\">";
            // line 36
            echo __("Library");
            echo "</span>
                </a>
            </div>
        ";
        }
        // line 40
        echo "
        ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["template.view"], "method", false, false, false, 41)) {
            // line 42
            echo "            <div class=\"dashicons\">
                <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("template.view"), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/dashboard/layouts.png"], "method", false, false, false, 44), "html", null, true);
            echo "\" class=\"dash_button\" />
                    <span class=\"dash_text\">";
            // line 45
            echo __("Templates");
            echo "</span>
                </a>
            </div>
        ";
        }
        // line 49
        echo "
        ";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["users.view"], "method", false, false, false, 50) && (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "isGroupAdmin", [], "method", false, false, false, 50) || twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 50)))) {
            // line 51
            echo "            <div class=\"dashicons\">
                <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.view"), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/dashboard/users.png"], "method", false, false, false, 53), "html", null, true);
            echo "\" class=\"dash_button\" />
                    <span class=\"dash_text\">";
            // line 54
            echo __("Users");
            echo "</span>
                </a>
            </div>
        ";
        }
        // line 58
        echo "
        ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperUser", [], "method", false, false, false, 59)) {
            // line 60
            echo "            <div class=\"dashicons\">
                <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("admin.view"), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/dashboard/settings.png"], "method", false, false, false, 62), "html", null, true);
            echo "\" class=\"dash_button\" />
                    <span class=\"dash_text\">";
            // line 63
            echo __("Settings");
            echo "</span>
                </a>
            </div>
        ";
        }
        // line 67
        echo "
        <!-- <div class=\"dashicons\">
            <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("license.view"), "html", null, true);
        echo "\">
                <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/dashboard/license.png"], "method", false, false, false, 70), "html", null, true);
        echo "\" class=\"dash_button\" />
                <span class=\"dash_text\">";
        // line 71
        echo __("About");
        echo "</span>
            </a>
        </div> -->

        ";
        // line 75
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["troubleshooting.fault"], "method", false, false, false, 75)) {
            // line 76
            echo "            <div class=\"dashicons\">
                <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("fault.view"), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/dashboard/help.png"], "method", false, false, false, 78), "html", null, true);
            echo "\" class=\"dash_button\" />
                    <span class=\"dash_text\">";
            // line 79
            echo __("Report Fault");
            echo "</span>
                </a>
            </div>
        ";
        }
        // line 83
        echo "
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "dashboard-icon-page.twig";
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
        return array (  241 => 83,  234 => 79,  230 => 78,  226 => 77,  223 => 76,  221 => 75,  214 => 71,  210 => 70,  206 => 69,  202 => 67,  195 => 63,  191 => 62,  187 => 61,  184 => 60,  182 => 59,  179 => 58,  172 => 54,  168 => 53,  164 => 52,  161 => 51,  159 => 50,  156 => 49,  149 => 45,  145 => 44,  141 => 43,  138 => 42,  136 => 41,  133 => 40,  126 => 36,  122 => 35,  118 => 34,  115 => 33,  113 => 32,  110 => 31,  103 => 27,  99 => 26,  95 => 25,  92 => 24,  90 => 23,  87 => 22,  80 => 18,  76 => 17,  72 => 16,  69 => 15,  67 => 14,  64 => 13,  53 => 12,  49 => 11,  44 => 8,  42 => 9,  35 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard-icon-page.twig", "/var/www/html/cms_ubi/views/dashboard-icon-page.twig");
    }
}
