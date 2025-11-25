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

/* base.twig */
class __TwigTemplate_642409fe1763f9cc7cf9b8e997144409 extends Template
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
            'headContent' => [$this, 'block_headContent'],
            'content' => [$this, 'block_content'],
            'javaScriptTemplates' => [$this, 'block_javaScriptTemplates'],
            'javaScript' => [$this, 'block_javaScript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "jsShortLocale", [], "any", false, false, false, 2), "html", null, true);
        echo "\">
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
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
        
        ";
        // line 13
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 13), "html", null, true);
        echo "dist/style.bundle.min.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\"></script>

        ";
        // line 16
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["css/dashboard.css"], "method", false, false, false, 16), "html", null, true);
        echo "?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["css/timeline.css"], "method", false, false, false, 17), "html", null, true);
        echo "?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["css/xibo.css"], "method", false, false, false, 18), "html", null, true);
        echo "?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["css/calendar.css"], "method", false, false, false, 19), "html", null, true);
        echo "?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["css/override.css"], "method", false, false, false, 20), "html", null, true);
        echo "?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["css/print.css"], "method", false, false, false, 21), "html", null, true);
        echo "?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.font.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
       
        <!-- Please be sure you read this before removing the Source/About links from your theme: http://bit.ly/agplv3 -->
        ";
        // line 25
        $this->displayBlock('headContent', $context, $blocks);
        // line 26
        echo "    </head>
    <body>
        ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "        <script type=\"text/javascript\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">
            var CALENDAR_TYPE = \"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "CALENDAR_TYPE", [], "any", false, false, false, 30), "html", null, true);
        echo "\";
            var jsLocale = \"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "jsLocale", [], "any", false, false, false, 31), "html", null, true);
        echo "\";
            var jsShortLocale = \"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "jsShortLocale", [], "any", false, false, false, 32), "html", null, true);
        echo "\";
        </script>

        ";
        // line 36
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 36), "html", null, true);
        echo "dist/vendor.bundle.min.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\"></script>

        ";
        // line 39
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 39), "html", null, true);
        echo "dist/systemTools.bundle.min.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\"></script>
        
        ";
        // line 42
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 42), "html", null, true);
        echo "dist/templates.bundle.min.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\"></script>

        ";
        // line 45
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 45), "html", null, true);
        echo "dist/vendor/ckeditor/build/ckeditor.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\"></script>
        ";
        // line 47
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 47), "html", null, true);
        echo "dist/xibo.bundle.min.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 48), "html", null, true);
        echo "dist/core/xibo-cms.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 49), "html", null, true);
        echo "dist/core/xibo-forms.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 50), "html", null, true);
        echo "dist/core/xibo-calendar.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 51), "html", null, true);
        echo "dist/core/xibo-datasets.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\"></script>

        ";
        // line 54
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "CALENDAR_TYPE", [], "any", false, false, false, 54) == "Jalali")) {
            // line 55
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 55), "html", null, true);
            echo "dist/vendor/calendar/js/calendar-jalali.js?v=";
            echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
            echo "&rev=";
            echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
            echo "\" nonce=\"";
            echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
            echo "\"></script>
            <script type=\"text/javascript\" nonce=\"";
            // line 56
            echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
            echo "\">
                moment.loadPersian();
            </script>
        ";
        } else {
            // line 60
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 60), "html", null, true);
            echo "dist/vendor/calendar/js/calendar.js?v=";
            echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
            echo "&rev=";
            echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
            echo "\" nonce=\"";
            echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
            echo "\"></script>
        ";
        }
        // line 62
        echo "
        ";
        // line 64
        echo "        ";
        ob_start(function () { return ''; });
        echo "dist/vendor/calendar/js/language/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "jsShortLocale", [], "any", false, false, false, 64), "html", null, true);
        echo ".js";
        $context["calendarTranslation"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "fileExists", [($context["calendarTranslation"] ?? null)], "method", false, false, false, 65)) {
            // line 66
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 66), "html", null, true);
            echo twig_escape_filter($this->env, ($context["calendarTranslation"] ?? null), "html", null, true);
            echo "\" nonce=\"";
            echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
            echo "\"></script>
        ";
        }
        // line 68
        echo "
        <script type=\"text/javascript\" nonce=\"";
        // line 69
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">

            var translations = ";
        // line 71
        echo ($context["translations"] ?? null);
        echo ";
            // Translations we want always available
            ";
        // line 74
        echo "            translations.withselected = \"";
        echo twig_escape_filter($this->env, __("With Selected"), "js", null, true);
        echo "\";
            translations.selectAll = \"";
        // line 75
        echo twig_escape_filter($this->env, __("Select All"), "js", null, true);
        echo "\";
            translations.multiselect = \"";
        // line 76
        echo twig_escape_filter($this->env, __("Multiple Items Selected"), "js", null, true);
        echo "\";
            translations.indeterminate = \"";
        // line 77
        echo twig_escape_filter($this->env, __("Indeterminate State"), "js", null, true);
        echo "\";
            translations.multiselectNoItemsMessage = \"";
        // line 78
        echo twig_escape_filter($this->env, __("Sorry, no items have been selected."), "js", null, true);
        echo "\";
            translations.multiselectMessage = \"";
        // line 79
        echo twig_escape_filter($this->env, __("Caution, you have selected %1 items. Clicking save will run the %2 transaction on all these items."), "js", null, true);
        echo "\";
            translations.validExtensions = \"";
        // line 80
        echo twig_escape_filter($this->env, __("Valid extensions are %s"), "js", null, true);
        echo "\";
            translations.save = \"";
        // line 81
        echo twig_escape_filter($this->env, __("Save"), "js", null, true);
        echo "\";
            translations.cancel = \"";
        // line 82
        echo twig_escape_filter($this->env, __("Cancel"), "js", null, true);
        echo "\";
            translations.close = \"";
        // line 83
        echo twig_escape_filter($this->env, __("Close"), "js", null, true);
        echo "\";
            translations.success = \"";
        // line 84
        echo twig_escape_filter($this->env, __("Success"), "js", null, true);
        echo "\";
            translations.failure = \"";
        // line 85
        echo twig_escape_filter($this->env, __("Failure"), "js", null, true);
        echo "\";
            translations.enterText = \"";
        // line 86
        echo twig_escape_filter($this->env, __("Enter text..."), "js", null, true);
        echo "\";
            translations.noDataMessage = \"";
        // line 87
        echo twig_escape_filter($this->env, __("No Data returned from the source"), "js", null, true);
        echo "\";
            translations.statusPending = \"";
        // line 88
        echo twig_escape_filter($this->env, __("Status Pending"), "js", null, true);
        echo "\";
            translations.duplicate = \"";
        // line 89
        echo twig_escape_filter($this->env, __("Duplicate"), "js", null, true);
        echo "\";
            translations.deleteRecurring = \"";
        // line 90
        echo twig_escape_filter($this->env, __("Delete from Schedule"), "js", null, true);
        echo "\";
            translations.spacesWarning = \"";
        // line 91
        echo twig_escape_filter($this->env, __("Warning - starts with or ends with a space, or contains double spaces"), "js", null, true);
        echo "\";
            translations.done = \"";
        // line 92
        echo twig_escape_filter($this->env, __("Done"), "js", null, true);
        echo "\";
            translations.freeTextCommand = \"";
        // line 93
        echo twig_escape_filter($this->env, __("Free Text"), "js", null, true);
        echo "\";
            translations.editTags = \"";
        // line 94
        echo twig_escape_filter($this->env, __("Edit Tags"), "js", null, true);
        echo "\";
            translations.tagInputValueHelpText = \"";
        // line 95
        echo twig_escape_filter($this->env, __("Provide an optional Value for this Tag. If no Value is required, this field can be left blank"), "js", null, true);
        echo "\";
            translations.tagInputValueRequiredHelpText = \"";
        // line 96
        echo twig_escape_filter($this->env, __("Please provide the value for this Tag and confirm by pressing enter on your keyboard."), "js", null, true);
        echo "\";
            translations.videoImageCoverHelpText = \"";
        // line 97
        echo twig_escape_filter($this->env, __("Before Uploading, scroll through the progress bar or play and pause to select a still to be used as the video file thumbnail."), "js", null, true);
        echo "\";
            translations.folderTreeCreate = \"";
        // line 98
        echo twig_escape_filter($this->env, __("Create"), "js", null, true);
        echo "\";
            translations.folderTreeEdit = \"";
        // line 99
        echo twig_escape_filter($this->env, __("Rename"), "js", null, true);
        echo "\";
            translations.folderTreeDelete = \"";
        // line 100
        echo twig_escape_filter($this->env, __("Remove"), "js", null, true);
        echo "\";
            translations.folderTreeShare = \"";
        // line 101
        echo twig_escape_filter($this->env, __("Share"), "js", null, true);
        echo "\";
            translations.folderTreeSetAsHome = \"";
        // line 102
        echo twig_escape_filter($this->env, __("Set as Home"), "js", null, true);
        echo "\";
            translations.folderTreeError = \"";
        // line 103
        echo twig_escape_filter($this->env, __("Cannot modify root folder."), "js", null, true);
        echo "\";
            translations.folderWithContent = \"";
        // line 104
        echo twig_escape_filter($this->env, __("Cannot remove Folder with content"), "js", null, true);
        echo "\";
            translations.folderNew = \"";
        // line 105
        echo twig_escape_filter($this->env, __("New Folder"), "js", null, true);
        echo "\";
            translations.folderTreeMove = \"";
        // line 106
        echo twig_escape_filter($this->env, __("Move Folder"), "js", null, true);
        echo "\";
            translations.folderRootTitle = \"";
        // line 107
        echo twig_escape_filter($this->env, __("Right click a Folder for further Options"), "js", null, true);
        echo "\";
            translations.dayPartExceptionErrorMessage = \"";
        // line 108
        echo twig_escape_filter($this->env, __("You already set an exception for this day."), "js", null, true);
        echo "\";
            translations.online = \"";
        // line 109
        echo twig_escape_filter($this->env, __("Online"), "js", null, true);
        echo "\";
            translations.offline = \"";
        // line 110
        echo twig_escape_filter($this->env, __("Offline"), "js", null, true);
        echo "\";
            translations.upToDate = \"";
        // line 111
        echo twig_escape_filter($this->env, __("Up to date"), "js", null, true);
        echo "\";
            translations.notUpToDate = \"";
        // line 112
        echo twig_escape_filter($this->env, __("Not up to date"), "js", null, true);
        echo "\";
            translations.publishedStatusFuture = \"";
        // line 113
        echo twig_escape_filter($this->env, __("Publishing"), "js", null, true);
        echo "\";
            translations.publishedStatusFailed = \"";
        // line 114
        echo twig_escape_filter($this->env, __("Publish failed."), "js", null, true);
        echo "\";
            translations.defaultSorting = \"";
        // line 115
        echo twig_escape_filter($this->env, __("Default Sorting"), "js", null, true);
        echo "\";
            translations.unlimited = \"";
        // line 116
        echo twig_escape_filter($this->env, __("Unlimited"), "js", null, true);
        echo "\";
            translations.imagePixelSizeTooLarge = \"";
        // line 117
        echo twig_escape_filter($this->env, __("Warning : Image is too large and will not be displayed on the Players. Please check the allowed Resize Limit in Administration -> Settings"), "js", null, true);
        echo "\"
            ";
        // line 119
        echo "
            var calendarType = \"";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "CALENDAR_TYPE", [], "any", false, false, false, 120), "html", null, true);
        echo "\";
            var language = \"";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "jsLocale", [], "any", false, false, false, 121), "html", null, true);
        echo "\";
            var timezone = \"";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "defaultTimezone", [], "any", false, false, false, 122), "html", null, true);
        echo "\";
            var dateFormat = \"";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "DATE_FORMAT", [], "any", false, false, false, 123), "html", null, true);
        echo "\";
            var jsDateFormat = (CALENDAR_TYPE == \"Jalali\") ? \"";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "DATE_FORMAT_JALALI_JS", [], "any", false, false, false, 124), "html", null, true);
        echo "\" : \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "DATE_FORMAT_JS", [], "any", false, false, false, 124), "html", null, true);
        echo "\";
            var timeFormat = \"";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "TIME_FORMAT", [], "any", false, false, false, 125), "html", null, true);
        echo "\";
            var jsTimeFormat = \"";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "TIME_FORMAT_JS", [], "any", false, false, false, 126), "html", null, true);
        echo "\";
            var dateOnlyFormat = \"";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "DATE_ONLY_FORMAT", [], "any", false, false, false, 127), "html", null, true);
        echo "\";
            var jsDateOnlyFormat = (CALENDAR_TYPE == \"Jalali\") ? \"";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "DATE_ONLY_FORMAT_JALALI_JS", [], "any", false, false, false, 128), "html", null, true);
        echo "\" : \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "DATE_ONLY_FORMAT_JS", [], "any", false, false, false, 128), "html", null, true);
        echo "\";
            var systemDateFormat = \"";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "systemDateFormat", [], "any", false, false, false, 129), "html", null, true);
        echo "\";
            var systemTimeFormat = \"";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "systemTimeFormat", [], "any", false, false, false, 130), "html", null, true);
        echo "\";
            var clockUrl = \"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("clock"), "html", null, true);
        echo "\";
            var calendarLanguage = \"";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "jsShortLocale", [], "any", false, false, false, 132), "html", null, true);
        echo "\";
            var pingUrl = \"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("ping"), "html", null, true);
        echo "\";
            var foldersUrl = \"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("folders.search"), "html", null, true);
        echo "\";
            var permissionsUrl = \"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.set.permissions.multi", ["entity" => ":entity"]), "html", null, true);
        echo "\";
            var addMediaThumbnailUrl = \"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.thumbnail.add"), "html", null, true);
        echo "\";
            var revokeApplicationAccess = \"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("application.revoke", ["id" => ":id", "userId" => ":userId"]), "html", null, true);
        echo "\";
            var getFontsUrl = \"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("font.search"), "html", null, true);
        echo "\";
            var libraryFontCSS = \"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.font.css"), "html", null, true);
        echo "\";
            var imageDownloadUrl = \"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.download", ["id" => ":id"]), "html", null, true);
        echo "?preview=1\";
            var CKEDITOR_DEFAULT_CONFIG = {
                contentsCss: ['styles.css', libraryFontCSS],
                imageDownloadUrl: imageDownloadUrl,
                fontFamily: {
                    options: ['default'],
                },
                fontSize: {
                    options: [
                    'default',
                    8, 9, 10, 11, 12, 16, 18, 20,
                    22, 24, 26, 28, 36, 48, 72, 80,
                    88, 96, 128, 144, 168, 186, 200,
                    244, 288, 300,
                    ],
                },
            };

            ";
        // line 159
        echo "            var dataTablesLanguage = {
                \"decimal\":        \"\",
                \"emptyTable\":     \"";
        // line 161
        echo twig_escape_filter($this->env, __("No data available in table"), "js", null, true);
        echo "\",
                \"info\":           \"";
        // line 162
        echo twig_escape_filter($this->env, __("Showing _START_ to _END_ of _TOTAL_ entries"), "js", null, true);
        echo "\",
                \"infoEmpty\":      \"";
        // line 163
        echo twig_escape_filter($this->env, __("Showing 0 to 0 of 0 entries"), "js", null, true);
        echo "\",
                \"infoFiltered\":   \"";
        // line 164
        echo twig_escape_filter($this->env, __("(filtered from _MAX_ total entries)"), "js", null, true);
        echo "\",
                \"infoPostFix\":    \"\",
                \"thousands\":      \",\",
                \"lengthMenu\":     \"";
        // line 167
        echo twig_escape_filter($this->env, __("Show _MENU_ entries"), "js", null, true);
        echo "\",
                \"loadingRecords\": \"";
        // line 168
        echo twig_escape_filter($this->env, __("Loading..."), "js", null, true);
        echo "\",
                \"processing\":     \"";
        // line 169
        echo twig_escape_filter($this->env, __("Processing..."), "js", null, true);
        echo "\",
                \"search\":         \"";
        // line 170
        echo twig_escape_filter($this->env, __("Search:"), "js", null, true);
        echo "\",
                \"zeroRecords\":    \"";
        // line 171
        echo twig_escape_filter($this->env, __("No matching records found"), "js", null, true);
        echo "\",
                \"paginate\": {
                    \"first\":      \"";
        // line 173
        echo twig_escape_filter($this->env, __("First"), "js", null, true);
        echo "\",
                    \"last\":       \"";
        // line 174
        echo twig_escape_filter($this->env, __("Last"), "js", null, true);
        echo "\",
                    \"next\":       \"";
        // line 175
        echo twig_escape_filter($this->env, __("Next"), "js", null, true);
        echo "\",
                    \"previous\":   \"";
        // line 176
        echo twig_escape_filter($this->env, __("Previous"), "js", null, true);
        echo "\"
                },
                \"aria\": {
                    \"sortAscending\":  \"";
        // line 179
        echo twig_escape_filter($this->env, __(": activate to sort column ascending"), "js", null, true);
        echo "\",
                    \"sortDescending\": \"";
        // line 180
        echo twig_escape_filter($this->env, __(": activate to sort column descending"), "js", null, true);
        echo "\"
                },
                \"buttons\": {
                    \"colvis\":  \"";
        // line 183
        echo twig_escape_filter($this->env, __("Column visibility"), "js", null, true);
        echo "\",
                    \"print\": \"";
        // line 184
        echo twig_escape_filter($this->env, __("Print"), "js", null, true);
        echo "\"
                }
            };
            var dataTablesTemplate = \"<'row'<'dataTables_folder col-sm-12 col-lg-5'><'col-sm-12 col-lg-7 text-right'<'d-inline-block mr-2'l><'dataTables_buttons d-inline-block'>>>\" +
                \"<'row'<'col-sm-12'tr>>\" +
                \"<'row'<'col-sm-12 col-lg-5'i><'col-lg-7 col-sm-12'p>>\";
            ";
        // line 191
        echo "
            moment.locale(\"";
        // line 192
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "jsLocale", [], "any", false, false, false, 192), "html", null, true);
        echo "\");

            \$(function() {
                var csrf_token = \$('meta[name=\"token\"]').attr('content');
                \$.ajaxSetup({
                    headers: {
                        'X-XSRF-TOKEN': csrf_token
                    }
                });
            });

            toastr.options.positionClass = \"toast-bottom-center\";

            // User preference regarding Folder tree state
            var rememberFolderTreeStateGlobally = ";
        // line 206
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "getOptionValue", ["rememberFolderTreeStateGlobally", "1"], "method", false, false, false, 206), "html", null, true);
        echo "
        </script>

        ";
        // line 209
        $this->displayBlock('javaScriptTemplates', $context, $blocks);
        // line 210
        echo "        ";
        $this->displayBlock('javaScript', $context, $blocks);
        // line 211
        echo "
        ";
        // line 212
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate("theme-javascript.twig", "base.twig", 212);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display($context);
        }
        // line 213
        echo "
    </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 25
    public function block_headContent($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 209
    public function block_javaScriptTemplates($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 210
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.twig";
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
        return array (  776 => 210,  770 => 209,  764 => 28,  758 => 25,  752 => 4,  745 => 213,  735 => 212,  732 => 211,  729 => 210,  727 => 209,  721 => 206,  704 => 192,  701 => 191,  692 => 184,  688 => 183,  682 => 180,  678 => 179,  672 => 176,  668 => 175,  664 => 174,  660 => 173,  655 => 171,  651 => 170,  647 => 169,  643 => 168,  639 => 167,  633 => 164,  629 => 163,  625 => 162,  621 => 161,  617 => 159,  596 => 140,  592 => 139,  588 => 138,  584 => 137,  580 => 136,  576 => 135,  572 => 134,  568 => 133,  564 => 132,  560 => 131,  556 => 130,  552 => 129,  546 => 128,  542 => 127,  538 => 126,  534 => 125,  528 => 124,  524 => 123,  520 => 122,  516 => 121,  512 => 120,  509 => 119,  505 => 117,  501 => 116,  497 => 115,  493 => 114,  489 => 113,  485 => 112,  481 => 111,  477 => 110,  473 => 109,  469 => 108,  465 => 107,  461 => 106,  457 => 105,  453 => 104,  449 => 103,  445 => 102,  441 => 101,  437 => 100,  433 => 99,  429 => 98,  425 => 97,  421 => 96,  417 => 95,  413 => 94,  409 => 93,  405 => 92,  401 => 91,  397 => 90,  393 => 89,  389 => 88,  385 => 87,  381 => 86,  377 => 85,  373 => 84,  369 => 83,  365 => 82,  361 => 81,  357 => 80,  353 => 79,  349 => 78,  345 => 77,  341 => 76,  337 => 75,  332 => 74,  327 => 71,  322 => 69,  319 => 68,  310 => 66,  307 => 65,  300 => 64,  297 => 62,  285 => 60,  278 => 56,  267 => 55,  264 => 54,  253 => 51,  243 => 50,  233 => 49,  223 => 48,  212 => 47,  201 => 45,  189 => 42,  177 => 39,  165 => 36,  159 => 32,  155 => 31,  151 => 30,  146 => 29,  144 => 28,  140 => 26,  138 => 25,  132 => 22,  124 => 21,  116 => 20,  108 => 19,  100 => 18,  92 => 17,  83 => 16,  71 => 13,  66 => 10,  62 => 9,  58 => 8,  50 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.twig", "/var/www/html/cms_ubi/views/base.twig");
    }
}
