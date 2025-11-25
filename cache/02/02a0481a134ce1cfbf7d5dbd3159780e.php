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

/* authed-user-menu.twig */
class __TwigTemplate_47257ba328ca88724c7b3f43c6e3e1dd extends Template
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
        echo "<li class=\"dropdown nav-item item\">
    <a href=\"#\" class=\"nav-link\" data-toggle=\"dropdown\" id=\"navbarUserMenu\">
        <img class=\"nav-avatar\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/avatar.jpg"], "method", false, false, false, 3), "html", null, true);
        echo "\" />
    </a>
    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarUserMenu\">
        <h6 class=\"dropdown-header\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "userName", [], "any", false, false, false, 6), "html", null, true);
        echo "<br/>
            <div id=\"XiboClock\">";
        // line 7
        echo twig_escape_filter($this->env, ($context["clock"] ?? null), "html", null, true);
        echo "</div>
        </h6>
        <div class=\"dropdown-divider\"></div>
        <!-- <a class=\"dropdown-item XiboFormButton\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.preferences.form"), "html", null, true);
        echo "\" title=\"";
        echo __("Preferences");
        echo "\">";
        echo __("Preferences");
        echo "</a> -->

        ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["user.profile"], "method", false, false, false, 12)) {
            // line 13
            echo "            <a class=\"dropdown-item XiboFormButton\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.edit.profile.form"), "html", null, true);
            echo "\" title=\"";
            echo __("Edit Profile");
            echo "\">";
            echo __("Edit Profile");
            echo "</a>
        ";
        }
        // line 15
        echo "
       <!-- <a class=\"dropdown-item XiboFormButton\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.applications"), "html", null, true);
        echo "\" title=\"";
        echo __("View my authenticated applications");
        echo "\">";
        echo __("My Applications");
        echo "</a> -->

        <div class=\"dropdown-divider\"></div>
       <!--  <a class=\"dropdown-item\" id=\"reshowWelcomeMenuItem\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("welcome.view"), "html", null, true);
        echo "\">";
        echo __("Reshow welcome");
        echo "</a>

        <a class=\"dropdown-item XiboFormButton\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("about"), "html", null, true);
        echo "\" title=\"";
        echo __("About the CMS");
        echo "\">";
        echo __("About");
        echo "</a> -->

        ";
        // line 23
        if ( !($context["hideLogout"] ?? null)) {
            // line 24
            echo "            <div class=\"dropdown-divider\"></div>
            <a class=\"dropdown-item\" title=\"";
            // line 25
            echo __("Logout");
            echo "\" href=\"";
            echo twig_escape_filter($this->env, ($context["logoutUrl"] ?? null), "html", null, true);
            echo "\">";
            echo __("Logout");
            echo "</a>
        ";
        }
        // line 27
        echo "    </div>
</li>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "authed-user-menu.twig";
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
        return array (  121 => 27,  112 => 25,  109 => 24,  107 => 23,  98 => 21,  91 => 19,  81 => 16,  78 => 15,  68 => 13,  66 => 12,  57 => 10,  51 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "authed-user-menu.twig", "/var/www/html/cms_ubi/views/authed-user-menu.twig");
    }
}
