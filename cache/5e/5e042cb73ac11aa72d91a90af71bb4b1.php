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

/* welcome-page.twig */
class __TwigTemplate_5af56daa9ef297e87f1af62c683d2155 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "welcome-page.twig", 9)->unwrap();
        // line 11
        $context["isXiboThemed"] = (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["app_name"], "method", false, false, false, 11) == "Xibo");
        // line 8
        $this->parent = $this->loadTemplate("authed.twig", "welcome-page.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("Welcome"), "html", null, true);
        echo " | ";
    }

    // line 15
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <div class=\"container-fluid\">
        <div class=\"widget\">
            <div class=\"widget-body\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-12 text-center\">
                            ";
        // line 22
        $context["productName"] = twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["theme_title"], "method", false, false, false, 22);
        // line 23
        echo "                            <h2>";
        /* xgettext:no-php-format */        echo strtr(__("Welcome to the %productName% CMS"), array("%productName%" => ($context["productName"] ?? null), ));
        echo "</h2>
                            <p>";
        // line 24
        echo __("This is the content management system, or CMS for short, where you upload your images/videos, create and schedule your layouts, and manage your display network.");
        echo "</p>
                        </div>
                    </div>
                </div>
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displays.view"], "method", false, false, false, 30)) {
            // line 31
            echo "                        <div class=\"col-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">";
            // line 34
            echo twig_escape_filter($this->env, __("Overview"), "html", null, true);
            echo " <i class=\"fas fa-list-alt float-right\"></i></h5>
                                    <p class=\"card-text\">";
            // line 35
            echo twig_escape_filter($this->env, __("The Content Management System (CMS) is where content is created/uploaded and scheduled to Displays. A Player application downloads new content and schedules from the CMS to display on screens."), "html", null, true);
            echo "</p>
                                </div>
                                <ul class=\"list-group list-group-flush\">
                                    <li class=\"list-group-item\">";
            // line 38
            echo twig_escape_filter($this->env, __("The player application needs to run on a device attached a screen and a network so that is can connector to the CMS to download new content at regular defined intervals."), "html", null, true);
            echo "</li>
                                    <li class=\"list-group-item\">";
            // line 39
            echo twig_escape_filter($this->env, __("Downloaded content from the CMS is cached to the Player so if there is a problem connecting to the CMS, it can continue to show the stored content until the connection between the CMS and Player is re-established."), "html", null, true);
            echo "</li>
                                    <li class=\"list-group-item\">";
            // line 40
            echo twig_escape_filter($this->env, __("Once downloaded, the player checks the schedule it has been sent and will show the appropriate content based on the local date and time."), "html", null, true);
            echo "</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">";
            // line 47
            echo twig_escape_filter($this->env, __("Install / Upgrade"), "html", null, true);
            echo " <i class=\"fas fa-download float-right\"></i></h5>
                                    ";
            // line 48
            if (($context["isXiboThemed"] ?? null)) {
                // line 49
                echo "                                        <p class=\"card-text\">";
                echo twig_escape_filter($this->env, __("We have player software available for Android, LG webOS, Samsung Tizen, and Windows."), "html", null, true);
                echo "</p>
                                        <p class=\"card-text\">";
                // line 50
                echo twig_escape_filter($this->env, __("There are installation and upgrade guides for all these options in our documentation."), "html", null, true);
                echo "</p>
                                        <p class=\"card-text\">";
                // line 51
                echo twig_escape_filter($this->env, __("If you are undecided which device to use, our installation documentation is a good place to see what options are available."), "html", null, true);
                echo "</p>
                                        <a href=\"https://xibosignage.com/install-upgrade#install\" target=\"_blank\"  class=\"card-link\">Install</a>
                                        <a href=\"https://xibosignage.com/install-upgrade#upgrade\" target=\"_blank\"  class=\"card-link\">Upgrade</a>
                                    ";
            } else {
                // line 55
                echo "                                        <p class=\"card-text\">";
                echo twig_escape_filter($this->env, __("Your service provider can help you with installation and upgrade."), "html", null, true);
                echo "</p>
                                    ";
            }
            // line 57
            echo "                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 61
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["library.view"], "method", false, false, false, 61) || twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["layout.view"], "method", false, false, false, 61))) {
            // line 62
            echo "                        <div class=\"col-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">";
            // line 65
            echo twig_escape_filter($this->env, __("Content"), "html", null, true);
            echo " <i class=\"fas fa-icons float-right\"></i></h5>
                                    <p class=\"card-text\">";
            // line 66
            echo twig_escape_filter($this->env, __("A Layout is the complete content design to be shown on Displays. With a powerful Layout Editor Users can easily create eye catching content without having to leave the Xibo CMS."), "html", null, true);
            echo "</p>
                                    <p class=\"card-text\">";
            // line 67
            echo twig_escape_filter($this->env, __("Media is the content we want to show on Displays, such as images and videos."), "html", null, true);
            echo "</p>
                                    ";
            // line 68
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["layout.view"], "method", false, false, false, 68)) {
                // line 69
                echo "                                    <a class=\"card-link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.view"), "html", null, true);
                echo "\">";
                echo __("Layouts");
                echo "</a>
                                    ";
            }
            // line 71
            echo "
                                    ";
            // line 72
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["library.view"], "method", false, false, false, 72)) {
                // line 73
                echo "                                    <a class=\"card-link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.view"), "html", null, true);
                echo "\">";
                echo __("Media");
                echo "</a>
                                    ";
            }
            // line 75
            echo "                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 79
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["schedule.view"], "method", false, false, false, 79)) {
            // line 80
            echo "                        <div class=\"col-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">";
            // line 83
            echo twig_escape_filter($this->env, __("Schedule"), "html", null, true);
            echo " <i class=\"fas fa-calendar-alt float-right\"></i></h5>
                                    <p class=\"card-text\">";
            // line 84
            echo twig_escape_filter($this->env, __("Scheduling is highly flexible and supports scheduling to single Displays as well as to Display Groups. Displays check for new scheduled content periodically and will download new items in advance of playback."), "html", null, true);
            echo "</p>
                                    <a class=\"card-link\" href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.view"), "html", null, true);
            echo "\">";
            echo __("Schedule");
            echo "</a>
                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 90
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displays.view"], "method", false, false, false, 90)) {
            // line 91
            echo "                        <div class=\"col-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">";
            // line 94
            echo twig_escape_filter($this->env, __("Displays"), "html", null, true);
            echo " <i class=\"fa fa-tv float-right\"></i></h5>
                                    <p class=\"card-text\">";
            // line 95
            echo twig_escape_filter($this->env, __("A Display is the connection from the Player to the CMS which groups together content and schedule information. Each Display is uniquely identified in the CMS so that each Display can have its own Media content, Layout designs and Schedules available each with uniquely identified Reporting statistics."), "html", null, true);
            echo "</p>
                                    <a class=\"card-link\" href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.view"), "html", null, true);
            echo "\">";
            echo __("Displays");
            echo "</a>
                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 101
        echo "                    </div>
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <hr>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">";
        // line 111
        echo twig_escape_filter($this->env, __("Documentation"), "html", null, true);
        echo " <i class=\"fas fa-book-open float-right\"></i></h5>
                                    <p class=\"card-text\">";
        // line 112
        echo __("Documentation for administrators, developers and users.");
        echo "</p>
                                    <p class=\"card-text\">";
        // line 113
        echo __("All of our documentation is regularly updated to reflect changes and additions to the platform, and so a valuable reference tool for all users!");
        echo "</p>
                                    <a class=\"card-link\" href=\"";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helpService"] ?? null), "getLandingPage", [], "method", false, false, false, 114), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, __("User Manual"), "html", null, true);
        echo "</a>
                                    ";
        // line 115
        if ((($context["isXiboThemed"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 115))) {
            // line 116
            echo "                                        <a class=\"card-link\" href=\"https://xibosignage.com/docs/setup\" target=\"_blank\">";
            echo twig_escape_filter($this->env, __("Admin"), "html", null, true);
            echo "</a>
                                        <a class=\"card-link\" href=\"https://xibosignage.com/docs/developer\" target=\"_blank\">";
            // line 117
            echo twig_escape_filter($this->env, __("Developer"), "html", null, true);
            echo "</a>
                                    ";
        }
        // line 119
        echo "                                </div>
                            </div>
                        </div>
                        ";
        // line 122
        if (($context["isXiboThemed"] ?? null)) {
            // line 123
            echo "                        <div class=\"col-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">";
            // line 126
            echo twig_escape_filter($this->env, __("Training"), "html", null, true);
            echo " <i class=\"fas fa-user-alt float-right\"></i></h5>
                                    <p class=\"card-text\">";
            // line 127
            echo __("Self-paced online training videos designed to get you up and running with Xibo in no time.");
            echo "</p>
                                    <a class=\"card-link\" href=\"https://xibosignage.com/training\" target=\"_blank\">";
            // line 128
            echo twig_escape_filter($this->env, __("New User Training"), "html", null, true);
            echo "</a>
                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 133
        echo "                        <div class=\"col-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">";
        // line 136
        echo twig_escape_filter($this->env, __("Help"), "html", null, true);
        echo " <i class=\"fa fa-question-circle float-right\"></i></h5>
                                    <p class=\"card-text\">";
        // line 137
        echo __("We are here to help! All the support you’re looking for, at your fingertips.");
        echo "</p>
                                    ";
        // line 138
        if (($context["isXiboThemed"] ?? null)) {
            // line 139
            echo "                                        <a href=\"https://xibosignage.com/install-upgrade#install\" target=\"_blank\"  class=\"card-link\">";
            echo twig_escape_filter($this->env, __("Help Center"), "html", null, true);
            echo "</a>
                                        <a href=\"https://community.xibo.org.uk\" target=\"_blank\"  class=\"card-link\">Community</a>
                                    ";
        } else {
            // line 142
            echo "                                        <p class=\"card-text\">";
            echo twig_escape_filter($this->env, __("Contact your service provider for assistance."), "html", null, true);
            echo "</p>
                                    ";
        }
        // line 144
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "welcome-page.twig";
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
        return array (  356 => 144,  350 => 142,  343 => 139,  341 => 138,  337 => 137,  333 => 136,  328 => 133,  320 => 128,  316 => 127,  312 => 126,  307 => 123,  305 => 122,  300 => 119,  295 => 117,  290 => 116,  288 => 115,  282 => 114,  278 => 113,  274 => 112,  270 => 111,  258 => 101,  248 => 96,  244 => 95,  240 => 94,  235 => 91,  232 => 90,  222 => 85,  218 => 84,  214 => 83,  209 => 80,  206 => 79,  200 => 75,  192 => 73,  190 => 72,  187 => 71,  179 => 69,  177 => 68,  173 => 67,  169 => 66,  165 => 65,  160 => 62,  157 => 61,  151 => 57,  145 => 55,  138 => 51,  134 => 50,  129 => 49,  127 => 48,  123 => 47,  113 => 40,  109 => 39,  105 => 38,  99 => 35,  95 => 34,  90 => 31,  88 => 30,  79 => 24,  74 => 23,  72 => 22,  64 => 16,  60 => 15,  52 => 13,  47 => 8,  45 => 11,  43 => 9,  36 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "welcome-page.twig", "/var/www/html/cms_ubi/views/welcome-page.twig");
    }
}
