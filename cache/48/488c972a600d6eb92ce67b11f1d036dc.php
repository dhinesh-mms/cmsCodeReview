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

/* authed-sidebar.twig */
class __TwigTemplate_527c4e4fc29992f062d5fc3d9597116c extends Template
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
        echo "<div id=\"sidebar-wrapper\">
    <ul class=\"sidebar\">
        <li class=\"sidebar-main\"><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("home"), "html", null, true);
        echo "\"><img class=\"logo\" src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/xibologo.png"], "method", false, false, false, 3), "html", null, true);
        echo "\" width=\"130\"></a></li>
        <li class=\"sidebar-list\"><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("home"), "html", null, true);
        echo "\"> <i class=\"fa fa-dashboard\"></i> ";
        echo __("Dashboard");
        echo "</a></li>
         ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["schedule.view"], "method", false, false, false, 5)) {
            // line 6
            echo "            <li class=\"sidebar-title\"><a>";
            echo __("Calendar");
            echo "</a></li>       
            <li class=\"sidebar-list\"><a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.view"), "html", null, true);
            echo "\"><i class=\"fa fa-calendar\"></i> ";
            echo __("Schedule");
            echo "</a></li>
        ";
        }
        // line 9
        echo "
        ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["daypart.view"], "method", false, false, false, 10)) {
            // line 11
            echo "            <li class=\"sidebar-list\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("daypart.view"), "html", null, true);
            echo "\"><i class=\"fa fa-calendar-check-o\"></i> ";
            echo __("Dayparting");
            echo "</a></li>
        ";
        }
        // line 13
        echo "
        ";
        // line 14
        $context["countViewable"] = twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["campaign.view", "layout.view", "template.view", "resolution.view"]], "method", false, false, false, 14);
        // line 15
        echo "        ";
        if ((($context["countViewable"] ?? null) > 0)) {
            // line 16
            echo "            <li class=\"sidebar-title\"><a>";
            echo __("Design");
            echo "</a></li>
            ";
            // line 17
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["campaign.view"], "method", false, false, false, 17)) {
                // line 18
                echo "                <!-- <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.view"), "html", null, true);
                echo "\"><i class=\"fa fa-archive\"></i> ";
                echo __("Campaigns");
                echo "</a></li> -->
            ";
            }
            // line 20
            echo "
            ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["layout.view"], "method", false, false, false, 21)) {
                // line 22
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.view"), "html", null, true);
                echo "\"><i class=\"fa fa-newspaper-o\"></i> ";
                echo __("Layouts");
                echo "</a></li>
            ";
            }
            // line 24
            echo "
            ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["template.view"], "method", false, false, false, 25)) {
                // line 26
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("template.view"), "html", null, true);
                echo "\"><i class=\"fa fa-clone\"></i> ";
                echo __("Templates");
                echo "</a></li>
            ";
            }
            // line 28
            echo "
            ";
            // line 29
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["resolution.view"], "method", false, false, false, 29)) {
                // line 30
                echo "                <!-- <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("resolution.view"), "html", null, true);
                echo "\"><i class=\"fa fa-desktop\"></i> ";
                echo __("Resolutions");
                echo "</a></li> -->
            ";
            }
            // line 32
            echo "        ";
        }
        // line 33
        echo "
        ";
        // line 34
        $context["countViewable"] = twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["library.view", "playlist.view", "dataset.view", "menuBoard.view"]], "method", false, false, false, 34);
        // line 35
        echo "        ";
        if ((($context["countViewable"] ?? null) > 0)) {
            // line 36
            echo "            <li class=\"sidebar-title\"><a>";
            echo __("Library");
            echo "</a></li>
            ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["playlist.view"], "method", false, false, false, 37)) {
                // line 38
                echo "                <!-- <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.view"), "html", null, true);
                echo "\">";
                echo __("Playlists");
                echo "</a></li> -->
            ";
            }
            // line 40
            echo "
            ";
            // line 41
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["library.view"], "method", false, false, false, 41)) {
                // line 42
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.view"), "html", null, true);
                echo "\"><i class=\"fa fa-picture-o\"></i> ";
                echo __("Media");
                echo "</a></li>
            ";
            }
            // line 44
            echo "
            ";
            // line 45
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["dataset.view"], "method", false, false, false, 45)) {
                // line 46
                echo "                <!-- <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataset.view"), "html", null, true);
                echo "\"><i class=\"fa fa-folder-open-o\"></i> ";
                echo __("DataSets");
                echo "</a></li> -->
            ";
            }
            // line 48
            echo "
            ";
            // line 49
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["menuBoard.view"], "method", false, false, false, 49)) {
                // line 50
                echo "                <!-- <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("menuBoard.view"), "html", null, true);
                echo "\"><i class=\"fa fa-folder-open-o\"></i> ";
                echo __("Menu Boards");
                echo "</a></li> -->
            ";
            }
            // line 52
            echo "        ";
        }
        // line 53
        echo "
        ";
        // line 54
        $context["countViewable"] = twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["displays.view", "displaygroup.view", "displayprofile.view", "playersoftware.view", "command.view"]], "method", false, false, false, 54);
        // line 55
        echo "        ";
        if ((($context["countViewable"] ?? null) > 0)) {
            // line 56
            echo "            <li class=\"sidebar-title\"><a>";
            echo __("Displays");
            echo "</a></li>
            ";
            // line 57
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displays.view"], "method", false, false, false, 57)) {
                // line 58
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.view"), "html", null, true);
                echo "\"><i class=\"fa fa-tv\"></i> ";
                echo __("Displays");
                echo "</a></li>
            ";
            }
            // line 60
            echo "
            ";
            // line 61
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displaygroup.view"], "method", false, false, false, 61)) {
                // line 62
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displaygroup.view"), "html", null, true);
                echo "\">
                <i class=\"fa fa-laptop\"></i> ";
                // line 63
                echo __("Display Groups");
                echo "</a></li>
            ";
            }
            // line 65
            echo "
            ";
            // line 66
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["display.syncView"], "method", false, false, false, 66)) {
                // line 67
                echo "                <!-- <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("syncgroup.view"), "html", null, true);
                echo "\"><i class=\"fa fa-laptop\"></i> ";
                echo __("Sync Groups");
                echo "</a></li> -->
            ";
            }
            // line 69
            echo "
            ";
            // line 70
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displayprofile.view"], "method", false, false, false, 70)) {
                // line 71
                echo "               <!--  <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayprofile.view"), "html", null, true);
                echo "\"><i class=\"fa fa-sticky-note-o\"></i> ";
                echo __("Display Settings");
                echo "</a></li> -->
            ";
            }
            // line 73
            echo "
            ";
            // line 74
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["playersoftware.view"], "method", false, false, false, 74)) {
                // line 75
                echo "               <!--  <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playersoftware.view"), "html", null, true);
                echo "\"><i class=\"fa fa-sticky-note-o\"></i> ";
                echo __("Player Versions");
                echo "</a></li> -->
            ";
            }
            // line 77
            echo "
            ";
            // line 78
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["command.view"], "method", false, false, false, 78)) {
                // line 79
                echo "               <!--  <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("command.view"), "html", null, true);
                echo "\"><i class=\"fa fa-terminal\"></i> ";
                echo __("Commands");
                echo "</a></li> -->
            ";
            }
            // line 81
            echo "        ";
        }
        // line 82
        echo "
        ";
        // line 83
        if ((twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["users.view"], "method", false, false, false, 83) && (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "isGroupAdmin", [], "method", false, false, false, 83) || twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 83)))) {
            // line 84
            echo "            ";
            $context["userMenuViewable"] = true;
            // line 85
            echo "        ";
        } else {
            // line 86
            echo "            ";
            $context["userMenuViewable"] = false;
            // line 87
            echo "        ";
        }
        // line 88
        echo "
        ";
        // line 89
        $context["countViewable"] = twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["usergroup.view", "module.view", "transition.view", "task.view"]], "method", false, false, false, 89);
        // line 90
        echo "        ";
        if (((($context["countViewable"] ?? null) > 0) || ($context["userMenuViewable"] ?? null))) {
            // line 91
            echo "            <li class=\"sidebar-title\"><a>";
            echo __("Administration");
            echo "</a></li>

            ";
            // line 93
            if (($context["userMenuViewable"] ?? null)) {
                // line 94
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.view"), "html", null, true);
                echo "\"><i class=\"fa fa-user\"></i> ";
                echo __("Users");
                echo "</a></li>
            ";
            }
            // line 96
            echo "
            ";
            // line 97
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["usergroup.view"], "method", false, false, false, 97)) {
                // line 98
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("group.view"), "html", null, true);
                echo "\"><i class=\"fa fa-users\"></i> ";
                echo __("User Groups");
                echo "</a></li>
            ";
            }
            // line 100
            echo "
            ";
            // line 101
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 101)) {
                // line 102
                echo "               <!--  <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("admin.view"), "html", null, true);
                echo "\"><i class=\"fa fa-gear\"></i> ";
                echo __("Settings");
                echo "</a></li> -->
            ";
            }
            // line 104
            echo "
            ";
            // line 105
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 105)) {
                // line 106
                echo "               <!--  <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("application.view"), "html", null, true);
                echo "\"><i class=\"fa fa-gear\"></i> ";
                echo __("Applications");
                echo "</a></li> -->
            ";
            }
            // line 108
            echo "
            ";
            // line 109
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["module.view"], "method", false, false, false, 109)) {
                // line 110
                echo "              <!--   <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.view"), "html", null, true);
                echo "\"><i class=\"fa fa-briefcase\"></i> ";
                echo __("Modules");
                echo "</a></li> -->
            ";
            }
            // line 112
            echo "
            ";
            // line 113
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["transition.view"], "method", false, false, false, 113)) {
                // line 114
                echo "               <!--  <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("transition.view"), "html", null, true);
                echo "\"><i class=\"fa fa-keyboard-o\"></i> ";
                echo __("Transitions");
                echo "</a></li> -->
            ";
            }
            // line 116
            echo "
            ";
            // line 117
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["task.view"], "method", false, false, false, 117)) {
                // line 118
                echo "               <!--  <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("task.view"), "html", null, true);
                echo "\"><i class=\"fa fa-cogs\"></i> ";
                echo __("Tasks");
                echo "</a></li> -->
            ";
            }
            // line 120
            echo "
            ";
            // line 121
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.view"], "method", false, false, false, 121)) {
                // line 122
                echo "               <!--  <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.view"), "html", null, true);
                echo "\"><i class=\"fa fa-cogs\"></i> ";
                echo __("Tags");
                echo "</a></li> -->
            ";
            }
            // line 124
            echo "
            ";
            // line 125
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 125)) {
                // line 126
                echo "               <!--  <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("folders.view"), "html", null, true);
                echo "\"><i class=\"fa fa-cogs\"></i> ";
                echo __("Folders");
                echo "</a></li> -->
            ";
            }
            // line 128
            echo "
            ";
            // line 129
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["font.view"], "method", false, false, false, 129)) {
                // line 130
                echo "               <!--  <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("font.view"), "html", null, true);
                echo "\"><i class=\"fa fa-cogs\"></i> ";
                echo __("Fonts");
                echo "</a></li> -->
            ";
            }
            // line 132
            echo "        ";
        }
        // line 133
        echo "

        ";
        // line 135
        $context["countViewable"] = twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["report.view", "report.scheduling", "report.saving"]], "method", false, false, false, 135);
        // line 136
        echo "        ";
        if ((($context["countViewable"] ?? null) > 0)) {
            // line 137
            echo "            <li class=\"sidebar-title\"><a>";
            echo __("Reporting");
            echo "</a></li>

            ";
            // line 139
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["report.view"], "method", false, false, false, 139)) {
                // line 140
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("report.view"), "html", null, true);
                echo "\"><i class=\"fa fa-bar-chart\"></i> ";
                echo __("All Reports");
                echo "</a></li>
            ";
            }
            // line 142
            echo "
            ";
            // line 143
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["report.scheduling"], "method", false, false, false, 143)) {
                // line 144
                echo "                 <!--  <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("reportschedule.view"), "html", null, true);
                echo "\"><i class=\"fa fa-building-o\"></i> ";
                echo __("Report Schedules");
                echo "</a></li> -->
            ";
            }
            // line 146
            echo "
            ";
            // line 147
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["report.saving"], "method", false, false, false, 147)) {
                // line 148
                echo "                <!--   <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("savedreport.view"), "html", null, true);
                echo "\"><i class=\"fa fa-database\"></i> ";
                echo __("Saved Reports");
                echo "</a></li> -->
            ";
            }
            // line 150
            echo "
        ";
        }
        // line 152
        echo "
        ";
        // line 153
        $context["countViewable"] = twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["log.view", "sessions.view", "auditlog.view", "fault.view"]], "method", false, false, false, 153);
        // line 154
        echo "        ";
        if ((($context["countViewable"] ?? null) > 0)) {
            // line 155
            echo "            <li class=\"sidebar-title\"><a>";
            echo __("Advanced");
            echo "</a></li>

            ";
            // line 157
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["log.view"], "method", false, false, false, 157)) {
                // line 158
                echo "               <!--   <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("log.view"), "html", null, true);
                echo "\"><i class=\"fa fa-edit\"></i> ";
                echo __("Log");
                echo "</a></li> -->
            ";
            }
            // line 160
            echo "
            ";
            // line 161
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["sessions.view"], "method", false, false, false, 161)) {
                // line 162
                echo "                <!--  <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("sessions.view"), "html", null, true);
                echo "\"><i class=\"fa fa-eye\"></i> ";
                echo __("Sessions");
                echo "</a></li> -->
            ";
            }
            // line 164
            echo "
            ";
            // line 165
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["auditlog.view"], "method", false, false, false, 165)) {
                // line 166
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("auditlog.view"), "html", null, true);
                echo "\"><i class=\"fa fa-exclamation-triangle\"></i> ";
                echo __("Audit Trail");
                echo "</a></li>
            ";
            }
            // line 168
            echo "
            ";
            // line 169
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["fault.view"], "method", false, false, false, 169)) {
                // line 170
                echo "               <!--   <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("fault.view"), "html", null, true);
                echo "\"><i class=\"fa fa-exclamation-triangle\"></i> ";
                echo __("Report Fault");
                echo "</a></li> -->
            ";
            }
            // line 172
            echo "        ";
        }
        // line 173
        echo "
        ";
        // line 174
        $context["countViewable"] = twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["developer.edit"]], "method", false, false, false, 174);
        // line 175
        echo "        ";
        if ((($context["countViewable"] ?? null) > 0)) {
            // line 176
            echo "             <!-- <li class=\"sidebar-title\"><a>";
            echo __("Developer");
            echo "</a></li> -->

            ";
            // line 178
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["developer.edit"], "method", false, false, false, 178)) {
                // line 179
                echo "            <!--   <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("developer.templates.view"), "html", null, true);
                echo "\"><i class=\"fa fa-exclamation-triangle\"></i> ";
                echo __("Module Templates");
                echo "</a></li> -->
            ";
            }
            // line 181
            echo "        ";
        }
        // line 182
        echo "    </ul>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "authed-sidebar.twig";
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
        return array (  612 => 182,  609 => 181,  601 => 179,  599 => 178,  593 => 176,  590 => 175,  588 => 174,  585 => 173,  582 => 172,  574 => 170,  572 => 169,  569 => 168,  561 => 166,  559 => 165,  556 => 164,  548 => 162,  546 => 161,  543 => 160,  535 => 158,  533 => 157,  527 => 155,  524 => 154,  522 => 153,  519 => 152,  515 => 150,  507 => 148,  505 => 147,  502 => 146,  494 => 144,  492 => 143,  489 => 142,  481 => 140,  479 => 139,  473 => 137,  470 => 136,  468 => 135,  464 => 133,  461 => 132,  453 => 130,  451 => 129,  448 => 128,  440 => 126,  438 => 125,  435 => 124,  427 => 122,  425 => 121,  422 => 120,  414 => 118,  412 => 117,  409 => 116,  401 => 114,  399 => 113,  396 => 112,  388 => 110,  386 => 109,  383 => 108,  375 => 106,  373 => 105,  370 => 104,  362 => 102,  360 => 101,  357 => 100,  349 => 98,  347 => 97,  344 => 96,  336 => 94,  334 => 93,  328 => 91,  325 => 90,  323 => 89,  320 => 88,  317 => 87,  314 => 86,  311 => 85,  308 => 84,  306 => 83,  303 => 82,  300 => 81,  292 => 79,  290 => 78,  287 => 77,  279 => 75,  277 => 74,  274 => 73,  266 => 71,  264 => 70,  261 => 69,  253 => 67,  251 => 66,  248 => 65,  243 => 63,  238 => 62,  236 => 61,  233 => 60,  225 => 58,  223 => 57,  218 => 56,  215 => 55,  213 => 54,  210 => 53,  207 => 52,  199 => 50,  197 => 49,  194 => 48,  186 => 46,  184 => 45,  181 => 44,  173 => 42,  171 => 41,  168 => 40,  160 => 38,  158 => 37,  153 => 36,  150 => 35,  148 => 34,  145 => 33,  142 => 32,  134 => 30,  132 => 29,  129 => 28,  121 => 26,  119 => 25,  116 => 24,  108 => 22,  106 => 21,  103 => 20,  95 => 18,  93 => 17,  88 => 16,  85 => 15,  83 => 14,  80 => 13,  72 => 11,  70 => 10,  67 => 9,  60 => 7,  55 => 6,  53 => 5,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "authed-sidebar.twig", "/var/www/html/cms_ubi/views/authed-sidebar.twig");
    }
}
