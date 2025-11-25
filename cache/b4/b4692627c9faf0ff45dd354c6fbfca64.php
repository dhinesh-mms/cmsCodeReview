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

/* authed.twig */
class __TwigTemplate_2f38ea034a0e4a4b45f8f74d5b405d5d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'actionMenu' => [$this, 'block_actionMenu'],
            'pageContent' => [$this, 'block_pageContent'],
            'pageFooter' => [$this, 'block_pageFooter'],
            'javaScriptTemplates' => [$this, 'block_javaScriptTemplates'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.twig", "authed.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    ";
        $context["horizontalNav"] = (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "getOptionValue", ["navigationMenuPosition", twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["NAVIGATION_MENU_POSITION", "vertical"], "method", false, false, false, 11)], "method", false, false, false, 11) == "horizontal");
        // line 12
        echo "
    ";
        // line 13
        if ( !($context["hideNavigation"] ?? null)) {
            // line 14
            echo "        ";
            $context["hideNavigation"] = twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "getOptionValue", ["hideNavigation", "0"], "method", false, false, false, 14);
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    <div ";
        // line 17
        if ((((($context["hideNavigation"] ?? null) == "0") &&  !($context["horizontalNav"] ?? null)) &&  !($context["forceHide"] ?? null))) {
            echo "id=\"page-wrapper\"";
        }
        echo " class=\"active\">

        ";
        // line 19
        if (((($context["hideNavigation"] ?? null) == "0") &&  !($context["forceHide"] ?? null))) {
            // line 20
            echo "            ";
            if (($context["horizontalNav"] ?? null)) {
                // line 21
                echo "                <nav class=\"navbar navbar-default navbar-expand-lg\">
                    <a class=\"navbar-brand xibo-logo-container\" href=\"#\">
                        <img class=\"xibo-logo\" src=\"";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/xibologo.png"], "method", false, false, false, 23), "html", null, true);
                echo "\">
                    </a>

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\" aria-controls=\"navbarNav\" aria-expanded=\"false\">
                        <span class=\"fa fa-bars\"></span>
                    </button>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"navbar-collapse collapse justify-content-between\" id=\"navbar-collapse-1\">
                        ";
                // line 33
                $this->loadTemplate("authed-topbar.twig", "authed.twig", 33)->display($context);
                // line 34
                echo "
                        <ul class=\"nav navbar-nav navbar-right\">
                            ";
                // line 36
                $__internal_compile_0 = null;
                try {
                    $__internal_compile_0 =                     $this->loadTemplate("authed-theme-topbar.twig", "authed.twig", 36);
                } catch (LoaderError $e) {
                    // ignore missing template
                }
                if ($__internal_compile_0) {
                    $__internal_compile_0->display($context);
                }
                // line 37
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["drawer"], "method", false, false, false, 37)) {
                    // line 38
                    echo "                                ";
                    $this->loadTemplate("authed-notification-drawer.twig", "authed.twig", 38)->display($context);
                    // line 39
                    echo "                            ";
                }
                // line 40
                echo "                            ";
                $this->loadTemplate("authed-user-menu.twig", "authed.twig", 40)->display($context);
                // line 41
                echo "                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            ";
            } else {
                // line 45
                echo "                <div class=\"navbar-collapse navbar-collapse-side collapse\" id=\"navbar-collapse-1\">
                    ";
                // line 46
                $this->loadTemplate("authed-sidebar.twig", "authed.twig", 46)->display($context);
                // line 47
                echo "                </div>
            ";
            }
            // line 49
            echo "        ";
        }
        // line 50
        echo "

        <div id=\"content-wrapper\">
            <div class=\"page-content\">
                ";
        // line 54
        if ((( !($context["horizontalNav"] ?? null) || (($context["hideNavigation"] ?? null) == "1")) || ($context["forceHide"] ?? null))) {
            // line 55
            echo "                <div class=\"row header header-side\">
                    <div class=\"col-sm-12\">
                        <div class=\"meta pull-left xibo-logo-container\">
                            <div class=\"page\"><img class=\"xibo-logo\" src=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/xibologo.png"], "method", false, false, false, 58), "html", null, true);
            echo "\"></div>
                        </div>
                        ";
            // line 60
            if ( !($context["forceHide"] ?? null)) {
                // line 61
                echo "                            ";
                if (( !($context["hideNavigation"] ?? null) == "1")) {
                    // line 62
                    echo "                                <button type=\"button\" class=\"pull-right navbar-toggler navbar-toggler-side\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\" aria-controls=\"navbarNav\" aria-expanded=\"false\">
                                    <span class=\"fa fa-bars\"></span>
                                </button>
                            ";
                }
                // line 66
                echo "                            <div class=\"user pull-right\">
                                ";
                // line 67
                $this->loadTemplate("authed-user-menu.twig", "authed.twig", 67)->display($context);
                // line 68
                echo "                            </div>
                            ";
                // line 69
                if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["drawer"], "method", false, false, false, 69)) {
                    // line 70
                    echo "                            <!-- <div class=\"user user-notif pull-right\">
                                ";
                    // line 71
                    $this->loadTemplate("authed-notification-drawer.twig", "authed.twig", 71)->display($context);
                    // line 72
                    echo "                            </div> -->
                            ";
                }
                // line 74
                echo "                            ";
                $__internal_compile_1 = null;
                try {
                    $__internal_compile_1 =                     $this->loadTemplate("authed-theme-topbar.twig", "authed.twig", 74);
                } catch (LoaderError $e) {
                    // ignore missing template
                }
                if ($__internal_compile_1) {
                    $__internal_compile_1->display($context);
                }
                // line 75
                echo "                        ";
            }
            // line 76
            echo "                    </div>
                </div>
                ";
        }
        // line 79
        echo "                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        ";
        // line 81
        $this->displayBlock('actionMenu', $context, $blocks);
        // line 82
        echo "                        ";
        $this->displayBlock('pageContent', $context, $blocks);
        // line 83
        echo "                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        ";
        // line 87
        $this->displayBlock('pageFooter', $context, $blocks);
        // line 88
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 94
        $context["helpLinks"] = twig_get_attribute($this->env, $this->source, ($context["helpService"] ?? null), "getLinksForPage", [($context["route"] ?? null)], "method", false, false, false, 94);
        // line 95
        echo "    ";
        $context["isXiboThemed"] = (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["app_name"], "method", false, false, false, 95) == "Xibo");
        // line 96
        echo "    ";
        if ((twig_length_filter($this->env, ($context["helpLinks"] ?? null)) > 0)) {
            // line 97
            echo "        ";
            // line 98
            echo "        <div id=\"help-pane\" class=\"d-none d-md-block help-pane\">
            <div class=\"card help-pane-card border-dark\">
                <div class=\"card-header\">";
            // line 100
            echo twig_escape_filter($this->env, __("Help"), "html", null, true);
            echo " <i class=\"close-icon fa fa-times\"></i></div>
                <ul class=\"list-group list-group-flush\">
                    ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["helpLinks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 103
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["link"], "isAllowWhiteLabel", [], "any", false, false, false, 103) || ($context["isXiboThemed"] ?? null))) {
                    // line 104
                    echo "                            <li class=\"list-group-item\">
                                <a href=\"";
                    // line 105
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 105), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "title", [], "any", false, false, false, 105), "html", null, true);
                    echo "</a>
                                ";
                    // line 106
                    if (twig_get_attribute($this->env, $this->source, $context["link"], "summary", [], "any", false, false, false, 106)) {
                        // line 107
                        echo "                                    <br/>
                                    ";
                        // line 108
                        echo twig_get_attribute($this->env, $this->source, $context["link"], "summary", [], "any", false, false, false, 108);
                        echo "
                                ";
                    }
                    // line 110
                    echo "                            </li>
                        ";
                }
                // line 112
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "                </ul>
                <div class=\"card-footer\">
                    <a href=\"";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helpService"] ?? null), "getLandingPage", [], "method", false, false, false, 115), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, __("Visit the user manual"), "html", null, true);
            echo "</a>
                </div>
            </div>
            <div class=\"help-pane-icon\">
                <i class=\"fa fa-question-circle\"></i>
            </div>
        </div>
    ";
        }
    }

    // line 81
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 82
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 87
    public function block_pageFooter($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 125
    public function block_javaScriptTemplates($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 126
        echo "    ";
        $this->loadTemplate("schedule-form-templates.twig", "authed.twig", 126)->display($context);
        // line 127
        echo "
    <script type=\"text/javascript\" nonce=\"";
        // line 128
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">
        var userPreferencesUrl = \"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.pref"), "html", null, true);
        echo "\";

        // TODO: Change this to a call to all route permissions ( something like currentUser.getRoutePermissions() )
        var userRoutePermissions = {
            tags: \"";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 133), "html", null, true);
        echo "\"
        };

        // Equals helper for the templates below
        Handlebars.registerHelper('eq', function(v1, v2, opts) {
            if (v1 === v2) {
                return opts.fn(this);
            } else {
                return opts.inverse(this);
            }
        });

        Handlebars.registerHelper('neq', function(v1, v2, opts) {
            if (v1 !== v2) {
                return opts.fn(this);
            } else {
                return opts.inverse(this);
            }
        });

        \$(document).on('click', '#dropdown-menu-right-container a.dropdown-item', function(e) {
            let eventType = \$(this).attr('data-custom-handler');
            let eventParam = \$(this).attr('data-custom-handler-url');

            if (eventType === 'createMiniLayoutPreview') {
                \$(this).click(createMiniLayoutPreview(eventParam));
            }
        })
    </script>

    ";
        // line 165
        echo "
    <script type=\"text/x-handlebars-template\" id=\"buttons-template\">
        <div class=\"btn-group pull-right dropdown-menu-container\" title=\"";
        echo __("Row Menu");
        // line 220
        echo "\">
            <button class=\"btn btn-white dropdown-toggle\" data-toggle=\"dropdown\"></button>
            <div class=\"dropdown-menu dropdown-menu-right\" id=\"dropdown-menu-right-container\">
                {{#each buttons}}
                    {{#if divider}}
                        <div class=\"dropdown-divider\"></div>
                    {{else multiSelectOnly}}
                        <a {{#each dataAttributes}}
                            data-{{ name }}=\"{{ value }}\"
                            {{/each}}
                            class=\"dropdown-item multi-select-button {{#if class}}{{ class }}{{else}}XiboMultiHiddenButton{{/if}} {{ id }}\" style=\"display: none;\" tabindex=\"-1\" href=\"#\">
                            {{ text }}
                        </a>
                    {{else}}
                        {{#if external}}
                            <a class=\"dropdown-item {{ id }}\" id=\"{{ id }}\" tabindex=\"-1\" data-custom-handler=\"{{ onclick }}\" data-custom-handler-url=\"{{ onclickParam }}\" target=\"{{ linkType }}\" href=\"{{ url }}\"{{#if title}} title=\"{{title}}\"{{/if}}>{{ text }}</a>
                        {{/if}}

                        {{#unless external}}
                            <a {{#each dataAttributes}}
                                data-{{ name }}=\"{{ value }}\"
                                {{/each}}
                                class=\"dropdown-item {{#if multi-select}}multi-select-button{{/if}} {{#if class}}{{ class }}{{else}}XiboFormButton{{/if}} {{ id }}\" href=\"{{ url }}\"{{#if title}} title=\"{{title}}\"{{/if}} tabindex=\"-1\" href=\"#\">
                                {{ text }}
                            </a>
                        {{/unless}}
                    {{/if}}
                {{/each}}
            </div>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"multiselect-button-template\">
        <div class=\"btn-group dropup mr-2\">
            <button class=\"btn btn-primary select-all\" data-toggle=\"selectAll\">
                {{ selectAll }}
            </button>
            <button class=\"btn btn-white dropdown-toggle\" data-toggle=\"dropdown\">
                {{ withSelected }}
            </button>
            <div class=\"dropdown-menu\">
                {{#each buttons}}
                    {{#if divider}}
                        <div class=\"dropdown-divider\"></div>
                    {{else}}
                        <a class=\"dropdown-item XiboMultiSelectFormButton\" data-custom-handler=\"{{ customHandler }}\" data-custom-handler-url=\"{{ customHandlerUrl }}\" data-button-id=\"{{ id }}\" data-grid-id=\"{{ gridId }}\" data-content-type=\"{{ contentType }}\" data-content-id-name=\"{{ contentIdName }}\" tabindex=\"-1\" href=\"#\">{{ text }}</a>
                    {{/if}}
                {{/each}}
            </div>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"command-input-main-template\">

        <div class=\"form-check pull-right\">
            <input type=\"checkbox\" class=\"show-command-preview form-check-input\" id=\"showCommandPreview{{ unique }}\" name=\"showCommandPreview{{ unique }}\" title=\"";
        echo __("Show command preview!");
        // line 221
        echo "\">
            <label for=\"showCommandPreview{{ unique }}\" class=\"show-command-preview-label form-check-label\">";
        echo __("Show command preview!");
        // line 231
        echo "</label>
        </div>

        <select class=\"command-type form-control form-control-inline\">
            {{#each types}}
                <option value=\"{{ @key }}\" {{#eq @key ../type}}selected=\"selected\"{{/eq}}>{{ this }}</option>
            {{/each}}
        </select>
        <div class=\"command-inputs panel panel-default\"></div>

        <div disabled=\"disabled\" class=\"command-preview bg-primary p-2 w-100\" data-invalid-message=\"";
        echo __("Invalid command!");
        // line 242
        echo "\">
          <code class=\"text-white\"></code>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"command-input-freetext-template\">
        <input class=\"free-text form-control form-control-inline\" value=\"{{ initVal }}\">
    </script>

    <script type=\"text/x-handlebars-template\" id=\"command-input-tpv_led-template\">
        <select name=\"tpv_ledCommand{{ unique }}\" id=\"tpv_ledCommand{{ unique }}\" class=\"tpv-led-command form-control form-control-inline\" style=\"width:100%\">
            <option value=\"off\" {{#eq value \"off\"}}selected=\"selected\"{{/eq}}>";
        echo __("Off");
        // line 243
        echo "</option>
            <option value=\"red\" {{#eq value \"red\"}}selected=\"selected\"{{/eq}}>";
        echo __("Red");
        // line 244
        echo "</option>
            <option value=\"green\" {{#eq value \"green\"}}selected=\"selected\"{{/eq}}>";
        echo __("Green");
        // line 245
        echo "</option>
            <option value=\"blue\" {{#eq value \"blue\"}}selected=\"selected\"{{/eq}}>";
        echo __("Blue");
        // line 246
        echo "</option>
            <option value=\"white\" {{#eq value \"white\"}}selected=\"selected\"{{/eq}}>";
        echo __("White");
        // line 252
        echo "</option>
        </select>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"command-input-rs232-template\">
        <div class=\"form-group-command form-group-device form-group-rs232\">
            <input class=\"form-control form-control-inline validated-element rs232-text-input rs232-device-name\" placeholder=\"";
        echo __("Device Name/COM");
        // line 253
        echo "\" value=\"{{ value.cs.deviceName }}\">
            <input class=\"form-control form-control-inline validated-element rs232-text-input rs232-baud-rate\" placeholder=\"";
        echo __("Baud Rate");
        // line 254
        echo "\" value=\"{{ value.cs.baudRate }}\">
            <input class=\"form-control form-control-inline validated-element rs232-text-input rs232-data-bits\" placeholder=\"";
        echo __("Data Bits");
        // line 258
        echo "\" value=\"{{ value.cs.dataBits }}\">
        </div>
        <div class=\"form-group-command form-group-rs232\">
            <div class=\"col-12 col-sm-6\">
                <label for=\"rs232Parity{{ unique }}\">";
        echo __("Parity:");
        // line 269
        echo "</label>
                <select name=\"rs232Parity{{ unique }}\" id=\"rs232Parity{{ unique }}\" class=\"rs232-parity form-control\">
                    <option value=\"None\" {{#eq value.cs.parity \"None\"}}selected=\"selected\"{{/eq}}>None</option>
                    <option value=\"Odd\" {{#eq value.cs.parity \"Odd\"}}selected=\"selected\"{{/eq}}>Odd</option>
                    <option value=\"Even\" {{#eq value.cs.parity \"Even\"}}selected=\"selected\"{{/eq}}>Even</option>
                    <option value=\"Mark\" {{#eq value.cs.parity \"Mark\"}}selected=\"selected\"{{/eq}}>Mark</option>
                    <option value=\"Space\" {{#eq value.cs.parity \"Space\"}}selected=\"selected\"{{/eq}}>Space</option>
                </select>
            </div>

            <div class=\"col-12 col-sm-6\">
                <label for=\"rs232StopBits{{ unique }}\">";
        echo __("Stop Bits:");
        // line 279
        echo "</label>
                <select name=\"rs232StopBits{{ unique }}\" id=\"rs232StopBits{{ unique }}\" class=\"rs232-stop-bits form-control\">
                    <option value=\"None\" {{#eq value.cs.stopBits \"None\"}}selected=\"selected\"{{/eq}}>None</option>
                    <option value=\"One\" {{#eq value.cs.stopBits \"One\"}}selected=\"selected\"{{/eq}}>One</option>
                    <option value=\"Two\" {{#eq value.cs.stopBits \"Two\"}}selected=\"selected\"{{/eq}}>Two</option>
                    <option value=\"OnePointFive\" {{#eq value.cs.stopBits \"OnePointFive\"}}selected=\"selected\"{{/eq}}>OnePointFive</option>
                </select>
            </div>

            <div class=\"col-12 col-sm-6\">
                <label for=\"rs232Handshake{{ unique }}\">";
        echo __("Handshake:");
        // line 289
        echo "</label>
                <select name=\"rs232Handshake{{ unique }}\" id=\"rs232Handshake{{ unique }}\" class=\"rs232-handshake form-control\">
                    <option value=\"None\" {{#eq value.cs.handshake \"None\"}}selected=\"selected\"{{/eq}}>None</option>
                    <option value=\"XOnXOff\" {{#eq value.cs.handshake \"XOnXOff\"}}selected=\"selected\"{{/eq}}>XOnXOff</option>
                    <option value=\"RequestToSend\" {{#eq value.cs.handshake \"RequestToSend\"}}selected=\"selected\"{{/eq}}>RequestToSend</option>
                    <option value=\"RequestToSendXOnXOff\" {{#eq value.cs.handshake \"RequestToSendXOnXOff\"}}selected=\"selected\"{{/eq}}>RequestToSendXOnXOff</option>
                </select>
            </div>
            
            <div class=\"col-12 col-sm-6\">
                <label for=\"rs232HexSupport{{ unique }}\">";
        echo __("HexSupport:");
        // line 298
        echo "</label>
                <select name=\"rs232HexSupport{{ unique }}\" id=\"rs232HexSupport{{ unique }}\" class=\"rs232-hex-support form-control\">
                    <option value=\"0\" {{#eq value.cs.hexSupport \"0\"}}selected=\"selected\"{{/eq}}>0</option>
                    <option value=\"1\" {{#eq value.cs.hexSupport \"1\"}}selected=\"selected\"{{/eq}}>1</option>
                    <option value=\"default 0\" {{#eq value.cs.hexSupport \"default 0\"}}selected=\"selected\"{{/eq}}>default 0</option>
                </select>
            </div>
        </div>
        <div class=\"form-group-command form-group-rs232 command-group\">
            <input class=\"form-control rs232-command\" placeholder=\"";
        echo __("Command");
        // line 304
        echo "\" value=\"{{ value.command }}\">
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"command-input-intent-template\">
        <div class=\"form-group-command intent-type-container\">
            <label for=\"intentType{{ unique }}\" class=\"intent-type-label\">";
        echo __("Type:");
        // line 312
        echo "</label>
            <select name=\"intentType{{ unique }}\" id=\"intentType{{ unique }}\" class=\"intent-type form-control form-control-inline\">
                <option value=\"activity\" {{#eq value.type \"activity\"}}selected=\"selected\"{{/eq}}>activity</option>
                <option value=\"service\" {{#eq value.type \"service\"}}selected=\"selected\"{{/eq}}>service</option>
                <option value=\"broadcast\" {{#eq value.type \"broadcast\"}}selected=\"selected\"{{/eq}}>broadcast</option>
            </select>
        </div>

        <input name=\"intentName{{ unique }}\" id=\"intentName{{ unique }}\" class=\"intent-name form-control validated-element form-control-inline\" placeholder=\"";
        echo __("Intent");
        // line 315
        echo "\" value=\"{{ value.name }}\">

        <div class=\"form-group-command\">
            <label for=\"intentExtraContainer{{ unique }}\" class=\"intent-extra-container-label\">";
        echo __("Extra:");
        // line 326
        echo "</label>
            <button class=\"intent-add-extra btn btn-info btn-sm pull-right\" type=\"button\">
                <i class=\"fa fa-plus\"></i>
            </button>

            <div id=\"intentExtraContainer{{ unique }}\" class=\"intent-extra-container\"></div>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"command-input-intent-extra-template\">
        <div class=\"intent-extra-element\">
            <input class=\"form-control form-control-inline validated-element extra-name\" placeholder=\"";
        echo __("Name");
        // line 333
        echo "\" value=\"{{ name }}\">
            <select class=\"form-control form-control-inline extra-type\">
                <option value=\"string\" {{#eq type \"string\"}}selected=\"selected\"{{/eq}}>string</option>
                <option value=\"int\" {{#eq type \"int\"}}selected=\"selected\"{{/eq}}>int</option>
                <option value=\"bool\" {{#eq type \"bool\"}}selected=\"selected\"{{/eq}}>bool</option>
                <option value=\"intArray\" {{#eq type \"intArray\"}}selected=\"selected\"{{/eq}}>intArray</option
            </select>
            <input class=\"form-control form-control-inline validated-element extra-value\" placeholder=\"";
        echo __("Value");
        // line 340
        echo "\" value=\"{{ value }}\">
            <button type=\"button\" class=\"btn btn-sm btn-warning pull-right intent-remove-extra\"><i class=\"fa fa-minus\"></i></button>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"command-input-http-template\">
        {{! URL }}
        <label for=\"httpURL{{ unique }}\" class=\"http-url-label form-check-label\">";
        echo __("URL");
        // line 341
        echo "</label>
        <input name=\"httpURL{{ unique }}\" id=\"httpURL{{ unique }}\" class=\"http-url w-100 validated-element form-control form-control-inline\" placeholder=\"";
        echo __("URL");
        // line 346
        echo "\" value=\"{{ value.url }}\">

        {{! Query params }}
        <div class=\"request-params request-section mt-2\">
            <div class=\"form-check w-100\">
                <input type=\"checkbox\" data-toggle-element=\".query-builder-container\"  data-toggle-class=\"d-inline-block\" class=\"show-query-builder ignore-change form-check-input\" id=\"queryParamsBuilder{{ unique }}\" name=\"queryParamsBuilder{{ unique }}\" title=\"";
        echo __("Query params builder");
        // line 347
        echo "\" checked>
                <label for=\"queryParamsBuilder{{ unique }}\" class=\"show-query-builder-label form-check-label\">";
        echo __("Query builder");
        // line 350
        echo "</label>
            </div>
            <div class=\"form-group-command query-builder-container w-100 bg-white p-2 d-none d-inline-block\">
                <label for=\"queryBuilderContainer{{ unique }}\" class=\"http-key-value-container-label\">";
        echo __("Query params:");
        // line 361
        echo "</label>
                <button class=\"http-key-value-add btn btn-info btn-sm pull-right\" type=\"button\">
                    <i class=\"fa fa-plus\"></i>
                </button>

                <div id=\"queryBuilderContainer{{ unique }}\" class=\"http-key-value-container\"></div>
            </div>
        </div>

        {{! Method }}
        <div class=\"form-group-command mt-2\">
            <label for=\"httpMethod{{ unique }}\">";
        echo __("Request method:");
        // line 378
        echo "</label>
            <select name=\"httpMethod{{ unique }}\" id=\"httpMethod{{ unique }}\" class=\"http-method pl-1 form-control form-control-inline\">
                <option value=\"GET\" {{#eq value.requestOptions.method \"GET\"}}selected=\"selected\"{{/eq}}>GET</option>
                <option value=\"POST\" {{#eq value.requestOptions.method \"POST\"}}selected=\"selected\"{{/eq}}>POST</option>
                <option value=\"PUT\" {{#eq value.requestOptions.method \"PUT\"}}selected=\"selected\"{{/eq}}>PUT</option>
                <option value=\"DELETE\" {{#eq value.requestOptions.method \"DELETE\"}}selected=\"selected\"{{/eq}}>DELETE</option>
                <option value=\"CONNECT\" {{#eq value.requestOptions.method \"CONNECT\"}}selected=\"selected\"{{/eq}}>CONNECT</option>
                <option value=\"HEAD\" {{#eq value.requestOptions.method \"HEAD\"}}selected=\"selected\"{{/eq}}>HEAD</option>
                <option value=\"OPTIONS\" {{#eq value.requestOptions.method \"OPTIONS\"}}selected=\"selected\"{{/eq}}>OPTIONS</option>
                <option value=\"PATCH\" {{#eq value.requestOptions.method \"PATCH\"}}selected=\"selected\"{{/eq}}>PATCH</option>
                <option value=\"TRACE\" {{#eq value.requestOptions.method \"TRACE\"}}selected=\"selected\"{{/eq}}>TRACE</option>
            </select>
        </div>

        {{! Headers }}
        <div class=\"request-headers request-section mt-2\">
          <div class=\"form-check w-100\">
              <input type=\"checkbox\" data-toggle-element=\".http-headers\" data-toggle-element-reverse=\".http-headers-container\" data-toggle-class=\"d-inline-block\" class=\"show-raw-headers ignore-change form-check-input\" id=\"showRawHeaders{{ unique }}\" name=\"showRawHeaders{{ unique }}\" title=\"";
        echo __("Show raw headers");
        // line 379
        echo "\">
              <label for=\"showRawHeaders{{ unique }}\" class=\"show-raw-headers-label form-check-label\">";
        echo __("Show raw headers");
        // line 381
        echo "</label>
          </div>
          <textarea name=\"httpHeaders{{ unique }}\" id=\"httpHeaders{{ unique }}\" class=\"http-headers w-100 d-none form-control validated-element form-control-inline\" placeholder=\"";
        echo __("Headers");
        // line 383
        echo "\"></textarea>
          <div class=\"form-group-command http-headers-container w-100 bg-white p-2 d-none d-inline-block\">
              <label for=\"httpHeadersContainer{{ unique }}\" class=\"http-key-value-container-label\">";
        echo __("Headers");
        // line 396
        echo "</label>
              <button class=\"http-key-value-add btn btn-info btn-sm pull-right\" type=\"button\">
                  <i class=\"fa fa-plus\"></i>
              </button>

              <div id=\"httpHeadersContainer{{ unique }}\" class=\"http-key-value-container\"></div>
          </div>
        </div>

        {{! Body }}
        <div class=\"request-body request-section mt-2\">
            {{! Content type }}
            <div class=\"form-group-command\">
                <label for=\"httpContentType{{ unique }}\" class=\"pl-1\">";
        echo __("Content Type:");
        // line 406
        echo "</label>
                <select name=\"httpContentType{{ unique }}\" id=\"httpContentType{{ unique }}\" class=\"http-contenttype form-control form-control-inline\">
                    <option value=\"application/x-www-form-urlencoded\" {{#eq value.contenttype \"application/x-www-form-urlencoded\"}}selected=\"selected\"{{/eq}}>urlencoded</option>
                    <option value=\"application/json\" {{#eq value.contenttype \"application/json\"}}selected=\"selected\"{{/eq}}>json</option>
                    <option value=\"text/plain\" {{#eq value.contenttype \"text/plain\"}}selected=\"selected\"{{/eq}}>textplain</option>
                </select>
            </div>

            {{! Body data }}
            <div class=\"form-check w-100 mt-2\">
                <input type=\"checkbox\" data-toggle-element=\".http-data\" data-toggle-element-reverse=\".http-data-container\" data-toggle-class=\"d-inline-block\" class=\"show-raw-data ignore-change form-check-input\" id=\"showRawData{{ unique }}\" name=\"showRawData{{ unique }}\" title=\"";
        echo __("Show raw body data");
        // line 407
        echo "\">
                <label for=\"showRawData{{ unique }}\" class=\"show-raw-data-label form-check-label\">";
        echo __("Show raw data");
        // line 409
        echo "</label>
            </div>
            <textarea name=\"httpData{{ unique }}\" id=\"httpData{{ unique }}\" class=\"http-data w-100 validated-element d-none form-control form-control-inline\" placeholder=\"";
        echo __("Body data");
        // line 411
        echo "\"></textarea>
            <div class=\"form-group-command http-data-container w-100 bg-white p-2 d-none d-inline-block\">
                <label for=\"httpDataContainer{{ unique }}\" class=\"http-key-value-container-label\">";
        echo __("Body data");
        // line 423
        echo "</label>
                <button class=\"http-key-value-add btn btn-info btn-sm pull-right\" type=\"button\">
                    <i class=\"fa fa-plus\"></i>
                </button>

                <div id=\"httpDataContainer{{ unique }}\" class=\"http-key-value-container\"></div>
            </div>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"command-input-http-key-value-template\">
        <div class=\"http-key-value-element mt-1\">
            <input class=\"form-control validated-element form-control-inline http-key\" placeholder=\"";
        echo __("Key");
        // line 424
        echo "\" value=\"{{ key }}\">
            <input class=\"form-control validated-element form-control-inline http-value\" placeholder=\"";
        echo __("Value");
        // line 428
        echo "\" value=\"{{ value }}\">
            <button type=\"button\" class=\"btn btn-sm btn-warning pull-right http-key-value-remove\"><i class=\"fa fa-minus\"></i></button>
        </div>
    </script>
    ";
        echo "

    <script type=\"text/x-handlebars-template\" id=\"multiselect-tag-edit-form-template\">
        <form id=\"multiselectTagEditForm\" data-gettag=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.getByName"), "html", null, true);
        echo "\">
            <input type=\"hidden\" id=\"requestURL\" name=\"requestURL\" value=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.editMultiple", ["type" => "[type]"]), "html", null, true);
        echo "\">
            <div class=\"form-group tags-with-value tags-input-wide row\">
                <label class=\"col-sm-2 control-label\" for=\"tagsToAdd\">";
        // line 434
        echo __("New tags");
        echo "</label>
                <div class=\"col-sm-10\">
                    <input class=\"form-control\" name=\"tagsToAdd\" type=\"email\" id=\"tagsToAdd\" data-role=\"tagsInputForm\" data-auto-complete-url=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.search"), "html", null, true);
        echo "\" />
                    <span class=\"help-block\">";
        // line 437
        echo __("A comma separated list of tags to add to the selected elements.");
        echo "</span>
                </div>
            </div>

            <p id=\"loadingValues\" style=\"margin-left: 17%\"></p>

            <div class=\"form-group row\">
                <label class=\"col-sm-2 control-label\" for=\"tagValue\" title=\"\" accesskey=\"\">";
        // line 444
        echo __("Tag value");
        echo "</label>
                <div class=\"col-sm-10\">
                    <select class=\"form-control\" name=\"tagValue\" id=\"tagValue\"></select>
                </div>
            </div>

            <div id=\"tagValueContainer\" style=\"display: none;\">
                <div class=\"form-group row\">
                    <label class=\"col-sm-2 control-label\" for=\"tagValueInput\" accesskey=\"\">";
        // line 452
        echo __("Tag value");
        echo "</label>
                    <div class=\"col-sm-10\">
                        <input class=\"form-control\" name=\"tagValueInput\" type=\"text\" id=\"tagValueInput\" value=\"\">
                        <span class=\"help-block\">";
        // line 455
        echo __("Provide an optional Value for this Tag. If no Value is required, this field can be left blank.");
        echo "</span>
                    </div>
                </div>
            </div>

            <div id=\"tagValueRequired\" class=\"alert alert-info d-none\">
                <p>";
        // line 461
        echo __("This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field.");
        echo "</p>
            </div>

            <div id=\"tagsToRemoveContainer\" class=\"form-group tags-with-value tags-input-wide row\">
                <label class=\"col-sm-2 control-label\" for=\"tagsToRemove\">";
        // line 465
        echo __("Existing tags");
        echo "</label>
                <div class=\"col-sm-10\">
                    <input class=\"form-control\" name=\"tagsToRemove\" type=\"email\" id=\"tagsToRemove\" data-role=\"tagsInputForm\" data-auto-complete-url=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.search"), "html", null, true);
        echo "\" />
                    <span class=\"help-block\">";
        // line 468
        echo __("Remove tags from the list to remove them from elements that contain them.");
        echo "</span>
                </div>
            </div>
        </form>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"display-status-window-template\">
        <div style=\"margin-top:5px; max-height: 400px; overflow-y: auto;\">
            ";
        // line 478
        echo "
            {{#if data}}
            ";
        echo "
            ";
        // line 479
        echo __("Player Status Window");
        echo ":
            ";
        // line 496
        echo "
                {{#eq type \"android\"}}
                    <div class=\"card p-3 mb-3 bg-light\">
                          <span>{{{data}}}</span>
                    </div>
                {{/eq}}
                {{#neq type \"android\"}}
                    <div class=\"card p-3 mb-3 bg-light\">
                        <ul>
                            {{#each data as |value key|}}
                            <li>{{key}}: {{value}}</li>
                            {{/each}}
                        </ul>
                    </div>
                {{/neq}}
            {{/if}}
            ";
        echo "
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"auto-submit-field-template\">
        <div class=\"checkbox\">
            <label for=\"autoSubmit\" accesskey=\"a\" title=\"";
        // line 502
        echo __("When enabled, this form will automatically submit in future. Reset this in your User Profile.");
        echo "\">
                <input type=\"checkbox\" id=\"autoSubmit\" name=\"autoSubmit\">
                ";
        // line 504
        echo __("Automatically submit this form?");
        // line 505
        echo "            </label>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"folder-tree-template\">
        <!-- Modal -->
        ";
        // line 513
        echo "
        <div id=\"{{ modal }}\" class=\"modal fade inner-modal\" role=\"dialog\">
         ";
        echo "
            <div class=\"modal-dialog modal-sm\" style=\"width:450px;\">

                <!-- Modal content-->
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title\">";
        // line 519
        echo __("Select Folder");
        echo "</h4>
                        <button type=\"button\" class=\"close btnCloseInnerModal\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-group card p-3 mb-3 bg-light\">
                        <input id=\"jstree-search-form\" class=\"form-control\" type=\"text\" placeholder=\"";
        // line 524
        echo __("Search");
        echo "\">
                        <div class=\"folder-search-no-results d-none\">
                            <p>";
        // line 526
        echo __("No Folders matching the search term");
        echo "</p>
                        </div>
                            ";
        // line 530
        echo "
                                <div id=\"{{ container }}\"></div>
                            ";
        echo "
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-white btnCloseInnerModal\">";
        // line 534
        echo __("Done");
        echo "</button>
                    </div>
                </div>

            </div>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"mini-player-template\">
        <div id=\"miniLayoutPreview\" class=\"mini-layout-preview\">
            <div id=\"playBtn\" class=\"fa fa-play preview-button\" title=\"";
        // line 544
        echo __("Play Preview");
        echo "\"></div>
            <div id=\"closeBtn\" class=\"fa fa-close preview-button\" title=\"";
        // line 545
        echo __("Close Preview");
        echo "\"></div>
            <div id=\"sizeBtn\" class=\"fa fa-plus-square preview-button\" title=\"";
        // line 546
        echo __("Change window size");
        echo "\"></div>
            <div id=\"newTabBtn\" class=\"fa fa-external-link-square preview-button\" title=\"";
        // line 547
        echo __("Preview in new window");
        echo "\"></div>
            <div id=\"content\"></div>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"xibo-filter-clear-button\">
        <div class=\"clear-filter-btn-container\" style=\"margin-left: auto;\">
            <a class=\"clear-filter-btn nav-link\" role=\"button\">
                <i class=\"fa fa-eraser\" aria-hidden=\"true\"></i>
                <span>";
        // line 556
        echo __("Clear Filters");
        echo "</span>
            </a>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"php-date-format-table\">
        <div class=\"popover-content-container\">
            <div class=\"scrollable-popover-table\">
                <table>
                    <thead>
                    <tr>
                        <th>Format character</th>
                        <th>Description</th>
                        <th>Example returned values</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Day</td>
                        <td>—</td>
                        <td>—</td>
                    </tr>
                    <tr>
                        <td>d</td>
                        <td>Day of the month, 2 digits with leading zeros</td>
                        <td>01 to 31</td>
                    </tr>
                    <tr>
                        <td>D</td>
                        <td>A textual representation of a day, three letters</td>
                        <td>Mon through Sun</td>
                    </tr>
                    <tr>
                        <td>j</td>
                        <td>Day of the month without leading zeros</td>
                        <td>1 to 31</td>
                    </tr>
                    <tr>
                        <td>l</td>
                        <td>(lowercase ‘L’) A full textual representation of the day of the week</td>
                        <td>Sunday through Saturday</td>
                    </tr>
                    <tr>
                        <td>N</td>
                        <td>ISO-8601 numeric representation of the day of the week (added in PHP 5.1.0)</td>
                        <td>1 (for Monday) through 7 (for Sunday)</td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td>English ordinal suffix for the day of the month, 2 characters</td>
                        <td>st, nd, rd or th. Works well with j</td>
                    </tr>
                    <tr>
                        <td>w</td>
                        <td>Numeric representation of the day of the week</td>
                        <td>0 (for Sunday) through 6 (for Saturday)</td>
                    </tr>
                    <tr>
                        <td>z</td>
                        <td>The day of the year (starting from 0)</td>
                        <td>0 through 365</td>
                    </tr>
                    <tr>
                        <td>Week</td>
                        <td>—</td>
                        <td>—</td>
                    </tr>
                    <tr>
                        <td>W</td>
                        <td>ISO-8601 week number of year, weeks starting on Monday (added in PHP 4.1.0)</td>
                        <td>42 (the 42nd week in the year)</td>
                    </tr>
                    <tr>
                        <td>Month</td>
                        <td>—</td>
                        <td>—</td>
                    </tr>
                    <tr>
                        <td>F</td>
                        <td>A full textual representation of a month, such as January or March</td>
                        <td>January through December</td>
                    </tr>
                    <tr>
                        <td>m</td>
                        <td>Numeric representation of a month, with leading zeros</td>
                        <td>01 through 12</td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td>A short textual representation of a month, three letters</td>
                        <td>Jan through Dec</td>
                    </tr>
                    <tr>
                        <td>n</td>
                        <td>Numeric representation of a month, without leading zeros</td>
                        <td>1 through 12</td>
                    </tr>
                    <tr>
                        <td>t</td>
                        <td>Number of days in the given month</td>
                        <td>28 through 31</td>
                    </tr>
                    <tr>
                        <td>Year</td>
                        <td>—</td>
                        <td>—</td>
                    </tr>
                    <tr>
                        <td>L</td>
                        <td>Whether it’s a leap year</td>
                        <td>1 if it is a leap year, 0 otherwise.</td>
                    </tr>
                    <tr>
                        <td>o</td>
                        <td>ISO-8601 year number. This has the same value as Y, except that if the ISO week number (W) belongs to the previous or next year, that year is used instead. (added in PHP 5.1.0)</td>
                        <td>1999 or 2003</td>
                    </tr>
                    <tr>
                        <td>Y</td>
                        <td>A full numeric representation of a year, 4 digits</td>
                        <td>1999 or 2003</td>
                    </tr>
                    <tr>
                        <td>y</td>
                        <td>A two digit representation of a year</td>
                        <td>99 or 03</td>
                    </tr>
                    <tr>
                        <td>Time</td>
                        <td>—</td>
                        <td>—</td>
                    </tr>
                    <tr>
                        <td>a</td>
                        <td>Lowercase Ante meridiem and Post meridiem</td>
                        <td>am or pm</td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>Uppercase Ante meridiem and Post meridiem</td>
                        <td>AM or PM</td>
                    </tr>
                    <tr>
                        <td>B</td>
                        <td>Swatch Internet time</td>
                        <td>000 through 999</td>
                    </tr>
                    <tr>
                        <td>g</td>
                        <td>12-hour format of an hour without leading zeros</td>
                        <td>1 through 12</td>
                    </tr>
                    <tr>
                        <td>G</td>
                        <td>24-hour format of an hour without leading zeros</td>
                        <td>0 through 23</td>
                    </tr>
                    <tr>
                        <td>h</td>
                        <td>12-hour format of an hour with leading zeros</td>
                        <td>01 through 12</td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td>24-hour format of an hour with leading zeros</td>
                        <td>00 through 23</td>
                    </tr>
                    <tr>
                        <td>i</td>
                        <td>Minutes with leading zeros</td>
                        <td>00 to 59</td>
                    </tr>
                    <tr>
                        <td>s</td>
                        <td>Seconds, with leading zeros</td>
                        <td>00 through 59</td>
                    </tr>
                    <tr>
                        <td>u</td>
                        <td>Microseconds (added in PHP 5.2.2). Note that date() will always generate 000000 since it takes an integer parameter, whereas DateTime::format() does support microseconds if DateTime was created with microseconds.</td>
                        <td>654321</td>
                    </tr>
                    <tr>
                        <td>Timezone</td>
                        <td>—</td>
                        <td>—</td>
                    </tr>
                    <tr>
                        <td>e</td>
                        <td>Timezone identifier (added in PHP 5.1.0)</td>
                        <td>UTC, GMT, Atlantic/Azores</td>
                    </tr>
                    <tr>
                        <td>I</td>
                        <td>(capital i) Whether or not the date is in daylight saving time</td>
                        <td>1 if Daylight Saving Time, 0 otherwise.</td>
                    </tr>
                    <tr>
                        <td>O</td>
                        <td>Difference to Greenwich time (GMT) in hours</td>
                        <td>+0200</td>
                    </tr>
                    <tr>
                        <td>P</td>
                        <td>Difference to Greenwich time (GMT) with colon between hours and minutes (added in PHP 5.1.3)</td>
                        <td>+02:00</td>
                    </tr>
                    <tr>
                        <td>T</td>
                        <td>Timezone abbreviation</td>
                        <td>EST, MDT …</td>
                    </tr>
                    <tr>
                        <td>Z</td>
                        <td>Timezone offset in seconds. The offset for timezones west of UTC is always negative, and for those east of UTC is always positive.</td>
                        <td>-43200 through 50400</td>
                    </tr>
                    <tr>
                        <td>Full Date/Time</td>
                        <td>—</td>
                        <td>—</td>
                    </tr>
                    <tr>
                        <td>c</td>
                        <td>ISO 8601 date (added in PHP 5)</td>
                        <td>2004-02-12T15:19:21+00:00</td>
                    </tr>
                    <tr>
                        <td>r</td>
                        <td>» RFC 2822 formatted date</td>
                        <td>Thu, 21 Dec 2000 16:01:07 +0200</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </script>

    <script type=\"text/javascript\" nonce=\"";
        // line 794
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">
        function moveFolderMultiSelectFormOpen(dialog) {
            // make bootstrap happy.
            if (\$('#folder-tree-form-modal').length != 0) {
                \$('#folder-tree-form-modal').remove();
            }

            var folderContainer = '<div class=\"card p-3 mb-3 bg-light\" id=\"container-folder-form-tree\"></div>';
            var \$hiddenInput = \$('<input name=\"folderId\" type=\"hidden\" id=\"formFolderId\">');

            \$hiddenInput.on('change', function() {
                dialog.data().commitData = {folderId: \$(this).val()};
            });

            \$(dialog).find('.modal-body').append(folderContainer);
            \$(dialog).find('.modal-body').append(\$hiddenInput);
            initJsTreeAjax('#container-folder-form-tree', \"multi-select-folder\", true, 600000);
        }

        function triggerWebhookMultiSelectFormOpen(dialog) {
            var \$triggerCode =   \$(
                '<div class=\"form-group row\">' +
                '<label class=\"col-sm-2 control-label\" for=\"triggerCode\" accesskey=\"\">";
        // line 816
        echo __("Trigger Code");
        echo "</label>' +
                '<div class=\"col-sm-10\">' +
                '<input class=\"form-control\" name=\"triggerCode\" type=\"text\" id=\"triggerCode\" value=\"\">' +
                '<span class=\"help-block\">";
        // line 819
        echo __("Enter the code associated with the web hook you wish to trigger. Please note that for this action to work, the webhook trigger code has to be added to Interactive Actions in scheduled content for this Player.");
        echo "</span>' +
                '</div>' +
                '</div>'
            );

            \$(dialog).find('.modal-body').append(\$triggerCode);

            \$('#triggerCode').on('change', function() {

                dialog.data().commitData = {
                    triggerCode: \$('#triggerCode').val()
                };
            });
        }

        function sendCommandMultiSelectFormOpen(dialog) {
          // Inject a list of commands into the form, in a drop down.
          const \$commandSelect = \$(
            '<div class=\"form-group form-horizontal row mt-4\">' +
            '<label class=\"col-sm-2 control-label\" for=\"commandId\" accesskey=\"\">";
        // line 838
        echo __("Command");
        echo "</label>' +
            '<div class=\"col-sm-10\">' +
            '<select name=\"commandId\" class=\"form-control\" data-search-url=\"";
        // line 840
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("command.search"), "html", null, true);
        echo "\" data-search-term=\"command\" data-id-property=\"commandId\" data-text-property=\"command\">' +
            '<span class=\"help-block\">";
        // line 841
        echo __("Pick a command to send to the Player. If the CMS has XMR enabled this will be sent immediately, otherwise it will show an error.");
        echo "</span>' +
            '</div>' +
            '</div>'
          );

          // Add the list to the body.
          \$(dialog).find('.modal-body').append(\$commandSelect);

          makePagedSelect(dialog.find('select[name=\"commandId\"]'), dialog);

          dialog.find('select[name=\"commandId\"]').on('select2:select', function() {
            dialog.data().commitData = {commandId: \$(this).select2('data')[0].id};
          });
        }
    </script>

    ";
        // line 858
        echo "    ";
        $this->loadTemplate("include-file-upload.twig", "authed.twig", 858)->display($context);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "authed.twig";
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
        return array (  1300 => 858,  1281 => 841,  1277 => 840,  1272 => 838,  1250 => 819,  1244 => 816,  1219 => 794,  978 => 556,  966 => 547,  962 => 546,  958 => 545,  954 => 544,  941 => 534,  932 => 530,  927 => 526,  922 => 524,  914 => 519,  903 => 513,  895 => 505,  893 => 504,  888 => 502,  863 => 496,  859 => 479,  853 => 478,  842 => 468,  838 => 467,  833 => 465,  826 => 461,  817 => 455,  811 => 452,  800 => 444,  790 => 437,  786 => 436,  781 => 434,  776 => 432,  772 => 431,  762 => 428,  758 => 424,  743 => 423,  738 => 411,  733 => 409,  729 => 407,  716 => 406,  700 => 396,  695 => 383,  690 => 381,  686 => 379,  666 => 378,  652 => 361,  646 => 350,  642 => 347,  634 => 346,  630 => 341,  620 => 340,  610 => 333,  596 => 326,  590 => 315,  579 => 312,  570 => 304,  558 => 298,  545 => 289,  532 => 279,  518 => 269,  511 => 258,  507 => 254,  503 => 253,  494 => 252,  490 => 246,  486 => 245,  482 => 244,  478 => 243,  464 => 242,  451 => 231,  447 => 221,  389 => 220,  384 => 165,  351 => 133,  344 => 129,  340 => 128,  337 => 127,  334 => 126,  330 => 125,  324 => 87,  318 => 82,  312 => 81,  297 => 115,  293 => 113,  287 => 112,  283 => 110,  278 => 108,  275 => 107,  273 => 106,  267 => 105,  264 => 104,  261 => 103,  257 => 102,  252 => 100,  248 => 98,  246 => 97,  243 => 96,  240 => 95,  238 => 94,  230 => 88,  228 => 87,  222 => 83,  219 => 82,  217 => 81,  213 => 79,  208 => 76,  205 => 75,  194 => 74,  190 => 72,  188 => 71,  185 => 70,  183 => 69,  180 => 68,  178 => 67,  175 => 66,  169 => 62,  166 => 61,  164 => 60,  159 => 58,  154 => 55,  152 => 54,  146 => 50,  143 => 49,  139 => 47,  137 => 46,  134 => 45,  128 => 41,  125 => 40,  122 => 39,  119 => 38,  116 => 37,  106 => 36,  102 => 34,  100 => 33,  87 => 23,  83 => 21,  80 => 20,  78 => 19,  71 => 17,  68 => 16,  65 => 15,  62 => 14,  60 => 13,  57 => 12,  54 => 11,  50 => 10,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "authed.twig", "/var/www/html/cms_ubi/views/authed.twig");
    }
}
