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

/* non-authed.twig */
class __TwigTemplate_dd6ab957357cec04ebd0c4a3e3569bf0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'style' => [$this, 'block_style'],
            'contentClass' => [$this, 'block_contentClass'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["theme_title"], "method", false, false, false, 11), "html", null, true);
        echo "</title>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"public-path\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 15), "html", null, true);
        echo "\"/>
        <link rel=\"shortcut icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/favicon.ico"], "method", false, false, false, 16), "html", null, true);
        echo "\" />

        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 18), "html", null, true);
        echo "dist/style.bundle.min.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\"></script>

       
        <style type=\"text/css\">
            body {
                padding-top: 40px !important;
                padding-bottom: 40px !important;
                background-color: #f5f5f5;
            }

            .form-signin {
                max-width: 300px;
                padding: 19px 29px 29px;
                margin: 0 auto 20px;
                background-color: #fff;
                border: 1px solid #e5e5e5;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
                margin-bottom: 10px;
            }
            .login-logo {
                width: 200px;
            }

        </style>
        ";
        // line 50
        $this->displayBlock('style', $context, $blocks);
        // line 51
        echo "    </head>
    <body>
        <div class=\"container\">
            <div class=\"";
        // line 54
        $this->displayBlock('contentClass', $context, $blocks);
        echo "\">
                ";
        // line 55
        $this->displayBlock('header', $context, $blocks);
        // line 56
        echo "
                ";
        // line 57
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "            </div>

            <p class=\"text-center\">";
        // line 60
        /* xgettext:no-php-format */        echo strtr(__("Version %version%"), array("%version%" => ($context["version"] ?? null), ));
        echo "</p>
        </div> <!-- /container -->
        <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 62), "html", null, true);
        echo "dist/vendor.bundle.min.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 50
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 54
    public function block_contentClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "form-signin text-center";
    }

    // line 55
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<p><a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["theme_url"], "method", false, false, false, 55), "html", null, true);
        echo "\"><img class=\"login-logo\" src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/xibologo.png"], "method", false, false, false, 55), "html", null, true);
        echo "\" alt=\"Logo\"></a></p>";
    }

    // line 57
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "non-authed.twig";
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
        return array (  176 => 57,  165 => 55,  158 => 54,  152 => 50,  146 => 11,  132 => 62,  127 => 60,  123 => 58,  121 => 57,  118 => 56,  116 => 55,  112 => 54,  107 => 51,  105 => 50,  64 => 18,  59 => 16,  55 => 15,  47 => 11,  42 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "non-authed.twig", "/var/www/html/cms_ubi/views/non-authed.twig");
    }
}
