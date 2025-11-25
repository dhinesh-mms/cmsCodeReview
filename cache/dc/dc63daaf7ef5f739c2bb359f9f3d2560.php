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

/* login.twig */
class __TwigTemplate_65e04203993eb514b5dfbcb9274c83d3 extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["theme_title"], "method", false, false, false, 4), "html", null, true);
        echo "</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"token\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["csrfToken"] ?? null), "html", null, true);
        echo "\"/>
    <meta name=\"public-path\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 9), "html", null, true);
        echo "\"/>
    <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/favicon.ico"], "method", false, false, false, 10), "html", null, true);
        echo "\" />
    <!-- Import CSS bundle from dist -->
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 12), "html", null, true);
        echo "dist/style.bundle.min.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\"></script>
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["css/captcha.css"], "method", false, false, false, 13), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["libraries/cryptojs-aes.min.js"], "method", false, false, false, 14), "html", null, true);
        echo "\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["libraries/cryptojs-aes-format.js"], "method", false, false, false, 15), "html", null, true);
        echo "\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\"></script>


    <style type=\"text/css\">
        html {
            font-size: 14px;
        }

        body {
            padding-top: 40px !important;
            padding-bottom: 40px !important;
            background-color: #f5f5f5;
            font-size: 1rem;
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
        .form-signin input[type=\"text\"],
        .form-signin input[type=\"password\"] {
            font-size: 1.15rem;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
        }
        .login-logo {
            width: 200px;
        }

    </style>
    <!-- Import user made CSS from theme -->
    <link href=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["css/override.css"], "method", false, false, false, 60), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
</head>
<body>
    <div class=\"container\">
        ";
        // line 64
        if (($context["authCASEnabled"] ?? null)) {
            // line 65
            echo "        <form id=\"cas-login-form\" class=\"form-signin text-center\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("cas.login"), "html", null, true);
            echo "\" method=\"post\">
            ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Xibo\Twig\TwigMessages']->getMessages("priorRoute"));
            foreach ($context['_seq'] as $context["_key"] => $context["priorRoute"]) {
                // line 67
                echo "                <input name=\"priorRoute\" type=\"hidden\" value=\"";
                echo twig_escape_filter($this->env, $context["priorRoute"], "html", null, true);
                echo "\" />
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priorRoute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "            <p><img alt=\"Logo\" class=\"login-logo\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/xibologo.png"], "method", false, false, false, 69), "html", null, true);
            echo "\"></p>

            <p>";
            // line 71
            echo __("Connect with the Central Authentication Server");
            echo "</p>

            ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Xibo\Twig\TwigMessages']->getMessages("cas_login_message"));
            foreach ($context['_seq'] as $context["_key"] => $context["loginMessage"]) {
                // line 74
                echo "                <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $context["loginMessage"], "html", null, true);
                echo "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loginMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "
            <p><button class=\"btn btn-primary\" type=\"submit\" name=\"logincas\">";
            // line 77
            echo __("CAS Login");
            echo "</button></p>
        </form>
        ";
        } else {
            // line 80
            echo "        <form id=\"login-form\" class=\"form-signin text-center\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("login"), "html", null, true);
            echo "\" method=\"post\">
            ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Xibo\Twig\TwigMessages']->getMessages("priorRoute"));
            foreach ($context['_seq'] as $context["_key"] => $context["priorRoute"]) {
                // line 82
                echo "                <input name=\"priorRoute\" type=\"hidden\" value=\"";
                echo twig_escape_filter($this->env, $context["priorRoute"], "html", null, true);
                echo "\" />
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priorRoute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "            <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, ($context["csrfKey"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrfToken"] ?? null), "html", null, true);
            echo "\" />
            <p><a href=\"";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["theme_url"], "method", false, false, false, 85), "html", null, true);
            echo "\"><img class=\"login-logo\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/xibologo.png"], "method", false, false, false, 85), "html", null, true);
            echo "\"></a></p>

            <p>";
            // line 87
            echo __("Please provide your credentials");
            echo "</p>

            <input id=\"username\" class=\"form-control input-block-level\" name=\"username\" type=\"text\" placeholder=\"";
            // line 89
            echo __("User");
            echo "\" autofocus autocomplete=\"username\">
            <input id=\"password\" class=\"form-control input-block-level\" name=\"password\" type=\"password\" placeholder=\"";
            // line 90
            echo __("Password");
            echo "\" autocomplete=\"current-password\">

           
            ";
            // line 93
            if (($context["captcha_code"] ?? null)) {
                // line 94
                echo "               <p>Type the characters you see in the picture below.</p>
           
                 <div class=\"captcha-code\">";
                // line 96
                echo twig_escape_filter($this->env, ($context["captcha_code"] ?? null), "html", null, true);
                echo "</div>
              
                <input id=\"captcha\" class=\"form-control input-block-level\" name=\"captcha\" type=\"text\" placeholder=\"\" autocomplete=\"off\" maxlength=\"5\">
             ";
            }
            // line 100
            echo "

            ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Xibo\Twig\TwigMessages']->getMessages("login_message"));
            foreach ($context['_seq'] as $context["_key"] => $context["loginMessage"]) {
                // line 103
                echo "                <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $context["loginMessage"], "html", null, true);
                echo "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loginMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "
            <p><button class=\"btn btn-primary\" type=\"button\" id=\"login_submit\">";
            // line 106
            echo __("Login");
            echo "</button></p>

            ";
            // line 108
            if (($context["passwordReminderEnabled"] ?? null)) {
                echo "<p><a href=\"#\" id=\"reminder-form-toggle\">";
                echo __("Forgotten your password?");
                echo "</a></p>";
            }
            // line 109
            echo "        </form>
        ";
        }
        // line 111
        echo "
        ";
        // line 112
        if (($context["passwordReminderEnabled"] ?? null)) {
            // line 113
            echo "        <form id=\"reminder-form\" class=\"form-signin text-center d-none\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("login.forgotten"), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"hidden\" name=\"";
            // line 114
            echo twig_escape_filter($this->env, ($context["csrfKey"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrfToken"] ?? null), "html", null, true);
            echo "\" />
            <p><a href=\"";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["theme_url"], "method", false, false, false, 115), "html", null, true);
            echo "\"><img class=\"login-logo\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/xibologo.png"], "method", false, false, false, 115), "html", null, true);
            echo "\"></a></p>

            <p>";
            // line 117
            echo __("Please provide your user name");
            echo "</p>
            <input id=\"username\" class=\"form-control input-block-level\" name=\"username\" type=\"text\" placeholder=\"";
            // line 118
            echo __("User");
            echo "\">

            ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Xibo\Twig\TwigMessages']->getMessages("login_message"));
            foreach ($context['_seq'] as $context["_key"] => $context["loginMessage"]) {
                // line 121
                echo "                <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $context["loginMessage"], "html", null, true);
                echo "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loginMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "
            <p><button class=\"btn btn-primary\" type=\"submit\">";
            // line 124
            echo __("Send Reset");
            echo "</button></p>

            <p><a href=\"#\" id=\"login-form-toggle\">";
            // line 126
            echo __("Login instead?");
            echo "</a></p>
        </form>
        ";
        }
        // line 129
        echo "
        <p class=\"text-center\">";
        // line 130
        /* xgettext:no-php-format */        echo strtr(__("CMS Version %version%"), array("%version%" => ($context["version"] ?? null), ));
        // line 131
        echo "            <!-- | <a id=\"source-link\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["cms_source_url"], "method", false, false, false, 131), "html", null, true);
        echo "\">";
        echo __("Source");
        echo "</a>
            | <a id=\"about-link\" class=\"XiboFormButton\" href=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("about"), "html", null, true);
        echo "\" title=\"";
        echo __("About");
        echo "\">";
        echo __("About");
        echo "</a> -->
        </p>
    </div> <!-- /container -->
    <!-- Import JS bundle from dist -->
    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 136), "html", null, true);
        echo "dist/vendor.bundle.min.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" nonce=\"";
        // line 137
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">
        \$(function() {
            \$( \".captcha-code\" ).click( function(event) {
                event.stopPropagation();
                //your code
            });
            \$(document).on(\"cut copy paste\",\"#captcha\",function(e) {
                    e.preventDefault();
            });
            
            \$(document).on(\"cut copy paste\",\"#username\",function(e) {
                    e.preventDefault();
            });
            
            \$(document).on(\"cut copy paste\",\"#password\",function(e) {
                    e.preventDefault();
            });

            \$(\"#reminder-form-toggle\").on(\"click\", function (e) {
                e.preventDefault();

                \$(\"#login-form\").addClass(\"d-none\");
                \$(\"#reminder-form\").removeClass(\"d-none\");
            });

            \$(\"#login-form-toggle\").on(\"click\", function (e) {
                e.preventDefault();

                \$(\"#login-form\").removeClass(\"d-none\");
                \$(\"#reminder-form\").addClass(\"d-none\");
            });

            \$(\"#login_submit\").on(\"click\", function () {
                var valueToEncrypt = document.getElementById('password').value;
                var pd = 'ubie1mh5l416h';
                let encodedString = CryptoJSAesJson.encrypt(valueToEncrypt, pd);
                document.getElementById(\"password\").value = encodedString;
                \$(\"#login-form\").submit();
            });

           \$('input[type=text]').on('keyup', function(e) {
            if (e.which == 13) {
               var valueToEncrypt = document.getElementById('password').value;
               var pd = 'ubie1mh5l416h';
               let encodedString = CryptoJSAesJson.encrypt(valueToEncrypt, pd);
               document.getElementById(\"password\").value = encodedString;
               \$(\"#login-form\").submit();
            }
          });
            
        });
        

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
        return "login.twig";
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
        return array (  381 => 137,  371 => 136,  360 => 132,  353 => 131,  351 => 130,  348 => 129,  342 => 126,  337 => 124,  334 => 123,  325 => 121,  321 => 120,  316 => 118,  312 => 117,  305 => 115,  299 => 114,  294 => 113,  292 => 112,  289 => 111,  285 => 109,  279 => 108,  274 => 106,  271 => 105,  262 => 103,  258 => 102,  254 => 100,  247 => 96,  243 => 94,  241 => 93,  235 => 90,  231 => 89,  226 => 87,  219 => 85,  212 => 84,  203 => 82,  199 => 81,  194 => 80,  188 => 77,  185 => 76,  176 => 74,  172 => 73,  167 => 71,  161 => 69,  152 => 67,  148 => 66,  143 => 65,  141 => 64,  132 => 60,  82 => 15,  76 => 14,  72 => 13,  62 => 12,  57 => 10,  53 => 9,  49 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login.twig", "/var/www/html/cms_ubi/views/login.twig");
    }
}
