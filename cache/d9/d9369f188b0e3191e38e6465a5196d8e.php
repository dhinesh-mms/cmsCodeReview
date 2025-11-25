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

/* authed-notification-drawer.twig */
class __TwigTemplate_acc6a9678c84685a0b549f855a9bf5e0 extends Template
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
    <a id=\"navbarNotificationMenuLink\" href=\"#\" class=\"nav-link notification-drawer-icon\" data-toggle=\"dropdown\">
        <i class=\"fa fa-bell\"></i> ";
        // line 3
        if ((($context["notificationCount"] ?? null) > 0)) {
            echo "<span class=\"badge red\">";
            echo twig_escape_filter($this->env, ($context["notificationCount"] ?? null), "html", null, true);
            echo "</span>";
        }
        // line 4
        echo "    </a>
    <div class=\"dropdown-menu dropdown-menu-right notification-drawer\">
        <h6 class=\"dropdown-header\">";
        // line 6
        echo __("Notifications");
        echo "</h6>
        ";
        // line 7
        if ((twig_length_filter($this->env, ($context["notifications"] ?? null)) > 0)) {
            // line 8
            echo "            <div class=\"dropdown-divider\"></div>
        ";
        }
        // line 10
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notifications"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 11
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["notification"], "notificationId", [], "any", false, false, false, 11)) {
                // line 12
                echo "                <a class=\"XiboFormButton notification dropdown-item\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("notification.show", ["id" => twig_get_attribute($this->env, $this->source, $context["notification"], "notificationId", [], "any", false, false, false, 12)]), "html", null, true);
                echo "\"><span class=\"";
                if (twig_get_attribute($this->env, $this->source, $context["notification"], "read", [], "any", false, false, false, 12)) {
                    echo "notification-unread";
                } else {
                    echo "notification-read";
                }
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notification"], "subject", [], "any", false, false, false, 12), "html", null, true);
                echo " - <span class=\"notification-date\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notification"], "releaseDt", [], "any", false, false, false, 12), "html", null, true);
                echo "</span></span></a>
            ";
            } else {
                // line 14
                echo "                <a href=\"#\" class=\"notification dropdown-item\"><span class=\"fa fa-exclamation-circle\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notification"], "subject", [], "any", false, false, false, 14), "html", null, true);
                echo " - <span class=\"notification-date\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notification"], "releaseDt", [], "any", false, false, false, 14), "html", null, true);
                echo "</span></a>
            ";
            }
            // line 16
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
        ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["notification.centre"], "method", false, false, false, 18)) {
            // line 19
            echo "            <div class=\"dropdown-divider\"></div>
            <a class=\"dropdown-item\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("notification.view"), "html", null, true);
            echo "\">";
            echo __("Notification Centre");
            echo "</a>
        ";
        }
        // line 22
        echo "    </div>
</li>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "authed-notification-drawer.twig";
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
        return array (  114 => 22,  107 => 20,  104 => 19,  102 => 18,  99 => 17,  93 => 16,  85 => 14,  69 => 12,  66 => 11,  61 => 10,  57 => 8,  55 => 7,  51 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "authed-notification-drawer.twig", "/var/www/html/cms_ubi/views/authed-notification-drawer.twig");
    }
}
