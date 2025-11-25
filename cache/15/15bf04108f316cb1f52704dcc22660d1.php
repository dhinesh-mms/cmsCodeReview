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

/* common.twig */
class __TwigTemplate_4e7099d11fd05ed93f062b351b3cf7b5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javaScript' => [$this, 'block_javaScript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $this->displayBlock('javaScript', $context, $blocks);
    }

    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <script type=\"text/javascript\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">

        // COMMON VARIABLES
        var serverMode = \"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "SERVER_MODE", [], "any", false, false, false, 9), "html", null, true);
        echo "\";
        var playlistRegionColouring =  \"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "REGION_OPTIONS_COLOURING", [], "any", false, false, false, 10), "html", null, true);
        echo "\";
        var libraryUpload = ";
        // line 11
        echo json_encode(($context["libraryUpload"] ?? null));
        echo ";
        var librarySearchUrl = \"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search.all"), "html", null, true);
        echo "\";
        var libraryAddUrl = \"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.add"), "html", null, true);
        echo "\";
        var templateSearchUrl = \"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("template.search.all"), "html", null, true);
        echo "\";
        var defaultThumbnailUrl = '";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 15), "html", null, true);
        echo "theme/default/img/thumbs/placeholder.png';
        var uploadFormUpdateAllDefault = ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "LIBRARY_MEDIA_UPDATEINALL_CHECKB", [], "any", false, false, false, 16) == 1)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";
        var uploadFormDeleteOldDefault = ";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "LIBRARY_MEDIA_DELETEOLDVER_CHECKB", [], "any", false, false, false, 17) == 1)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";
        var assetDownloadUrl = \"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.asset.download", ["assetId" => ":assetId"]), "html", null, true);
        echo "\";
        var tooltipDelay = {'show': 250, 'hide': 0};
        var playlistEditorUrl = \"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.timeline.form", ["id" => ":id"]), "html", null, true);
        echo "\";
        var timezones = ";
        // line 21
        echo json_encode(($context["timeZones"] ?? null));
        echo ";

        // Save navbar position
        var navbarPosition = 'vertical';
        ";
        // line 25
        $context["horizontalNav"] = (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "getOptionValue", ["navigationMenuPosition", twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["NAVIGATION_MENU_POSITION", "vertical"], "method", false, false, false, 25)], "method", false, false, false, 25) == "horizontal");
        // line 26
        echo "        ";
        if (($context["horizontalNav"] ?? null)) {
            // line 27
            echo "            navbarPosition = 'horizontal';
        ";
        }
        // line 29
        echo "
        // MODULES LIST
        var modulesList = [];
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 33
            echo "            modulesList.push(";
            echo json_encode($context["module"]);
            echo ");
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
        // Structure with API URLs
        var urlsForApi = {
            layout: {
                designer: {
                    url: \"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.designer", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                get: {
                    url: \"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.search"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                add: {
                    url: \"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.add"), "html", null, true);
        echo "\",
                    type: 'POST'
                },
                getForm: {
                    url: \"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.background.form", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                editForm: {
                    url: \"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.edit.form", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                saveForm: {
                    url: \"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.edit.background", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                downloadBackground: {
                    url: \"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.download.background", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                preview: {
                    url: \"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.preview", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                checkout: {
                    url: \"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.checkout", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                publish: {
                    url: \"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.publish", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                discard: {
                    url: \"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.discard", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                delete: {
                    url: \"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.delete", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'DELETE'
                },
                unlock: {
                    url: \"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.lock.release", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                applyTemplate: {
                    url: \"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.apply.template", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                list: {
                    url: \"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.view"), "html", null, true);
        echo "\"
                },
                status: {
                    url: \"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.status", ["id" => ":id"]), "html", null, true);
        echo "\"
                },
                designer: {
                    url: \"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.designer", ["id" => ":id"]), "html", null, true);
        echo "\"
                },
                schedule: {
                    url: \"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.add.form", ["from" => "Layout", "id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                saveTemplate: {
                    url: \"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("template.from.layout.form", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                publishForm: {
                    url: \"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.publish.form", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                discardForm: {
                    url: \"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.discard.form", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                deleteForm: {
                    url: \"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.delete.form", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                addDrawer: {
                    url: \"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.add.drawer", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'POST'
                },
                saveDrawer: {
                    url: \"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.save.drawer", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                addThumbnail: {
                  url: '";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.thumbnail.add", ["id" => ":id"]), "html", null, true);
        echo "',
                  type: 'POST'
                },
                codeSearch: {
                    url: \"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.code.search"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
            },
            template: {
                list: {
                    url: \"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("template.view"), "html", null, true);
        echo "\"
                },
                getProviders: {
                    url: \"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("template.search.providers"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
            },
            region: {
                transform: {
                    url: \"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.position.all", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'PUT',
                    useMainObjectId: true
                },
                getForm: {
                    url: \"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.edit.form", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                saveForm: {
                    url: \"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.edit", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                create: {
                    url: \"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.add", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'POST',
                    useMainObjectId: true
                },
                delete: {
                    url: \"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.delete", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'DELETE'
                },
                preview: {
                    url: \"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.preview", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                getPermissions:  {
                    url: \"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.permissions.form", ["entity" => "Region", "id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                }
            },
            widget: {
                getForm: {
                    url: \"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.edit.form", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                saveForm: {
                    url: \"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.edit", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                preview: {
                    url: \"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.preview", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                delete: {
                    url: \"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.delete", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'DELETE'
                },
                getAudio: {
                    url: \"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.audio.form", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                saveAudio:  {
                    url: \"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.audio", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                getExpiry: {
                    url: \"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.expiry.form", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                saveExpiry:  {
                    url: \"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.expiry", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                getTransition: {
                    url: \"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.transition.edit.form", ["id" => ":id", "type" => ":type"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                saveTransition:  {
                    url: \"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.transition.edit", ["id" => ":id", "type" => ":type"]), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                getPermissions:  {
                    url: \"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.permissions.form", ["entity" => "Widget", "id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                setRegion: {
                    url: \"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.set.region", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                getDataType: {
                    url: \"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.dataType", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                saveElements: {
                    url: \"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.elements", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                data: {
                    get: {
                        url: \"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.data.get", ["id" => ":id"]), "html", null, true);
        echo "\",
                        type: 'GET'
                    },
                    add: {
                        url: \"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.data.add", ["id" => ":id"]), "html", null, true);
        echo "\",
                        type: 'POST'
                    },
                    edit: {
                        url: \"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.data.edit", ["id" => ":id", "dataId" => ":dataId"]), "html", null, true);
        echo "\",
                        type: 'PUT'
                    },
                    delete: {
                        url: \"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.data.delete", ["id" => ":id", "dataId" => ":dataId"]), "html", null, true);
        echo "\",
                        type: 'DELETE'
                    },
                    setOrder: {
                        url: \"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.data.set.order", ["id" => ":id"]), "html", null, true);
        echo "\",
                        type: 'POST'
                    },
                },
            },
            library: {
                get: {
                    url: \"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                connectorImport: {
                    url: \"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.connector.import"), "html", null, true);
        echo "\",
                    type: 'POST'
                },
                download: {
                    url: \"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.download", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
            },
            playlist: {
                get: {
                    url: \"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.search"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                getForm: {
                    url: \"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.edit.form", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                addMedia: {
                    url: \"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.library.assign", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'POST'
                },
                addWidget: {
                    url: \"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.add", ["type" => ":type", "id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'POST'
                },
                preview: {
                    url: \"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.preview", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                order: {
                    url: \"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.order", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'POST'
                },
                convert: {
                    url: \"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.convert", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'POST'
                },
            },
            user: {
                get: {
                    url: \"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.search"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                getPref: {
                    url: \"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.pref"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                savePref: {
                    url: \"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.pref"), "html", null, true);
        echo "\",
                    type: 'POST'
                },
                permissions: {
                    url: \"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.permissions.form", ["entity" => ":entity", "id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                }
            },
            media: {
                isUsed: {
                    url: \"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.isused", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                getProviders: {
                    url: \"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search.providers"), "html", null, true);
        echo "\",
                    type: 'GET'
                }
            },
            module: {
                getTemplates: {
                    url: \"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.template.search", ["dataType" => ":dataType"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                getData: {
                    url: \"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.getData", ["regionId" => ":regionId", "id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                assetDownload: {
                    url: \"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.asset.download", ["assetId" => ":assetId"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
            },
            actions: {
                get: {
                    url: \"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("action.search"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                delete: {
                    url: \"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("action.delete", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'DELETE'
                },
                add: {
                    url: \"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("action.add", ["source" => ":source", "id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'POST'
                },
                edit: {
                    url: \"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("action.edit", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
            },
            dataset: {
                search: {
                    url: \"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.search"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
            },
            menuBoard: {
                search: {
                    url: \"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("menuBoard.search"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                categorySearch: {
                    url: \"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("menuBoard.category.search", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
            },
            command: {
                search: {
                    url: \"";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("command.search"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
            },
            connectorProperties: {
                search: {
                    url: \"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("widget.edit.options", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                }
            },
            layoutTemplates: {
                search: {
                    url: \"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("template.search"), "html", null, true);
        echo "\",
                    type: 'GET',
                }
            },
            folders: {
                get: {
                    url: \"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("folders.search"), "html", null, true);
        echo "\",
                    type: 'GET',
                }
            }
        };

        ";
        // line 409
        echo "            // TRANSLATIONS
            var editorsTrans = {
                deleteTitle: \"";
        // line 411
        echo twig_escape_filter($this->env, __("Delete %obj%"), "js", null, true);
        echo "\",
                onbeforeunload: \"";
        // line 412
        echo twig_escape_filter($this->env, __("Changes that you have made may not be saved!"), "js", null, true);
        echo "\",
                minDimensionsMessageHeader: \"";
        // line 413
        echo twig_escape_filter($this->env, __("Content editing works best with a higher resolution"), "js", null, true);
        echo "\",
                minDimensionsMessageBody: \"";
        // line 414
        echo twig_escape_filter($this->env, __("Please resize your window to at least 1200 pixels by 600 pixels, or reduce your zoom level, for the best experience"), "js", null, true);
        echo "\",
                minDimensionsMessageHide: \"";
        // line 415
        echo twig_escape_filter($this->env, __("Hide message and go back to editing"), "js", null, true);
        echo "\",
                yes: \"";
        // line 416
        echo twig_escape_filter($this->env, __("Yes"), "js", null, true);
        echo "\",
                no: \"";
        // line 417
        echo twig_escape_filter($this->env, __("No"), "js", null, true);
        echo "\",
                selectAll: \"";
        // line 418
        echo twig_escape_filter($this->env, __("Select All"), "js", null, true);
        echo "\",
                back: \"";
        // line 419
        echo twig_escape_filter($this->env, __("Back"), "js", null, true);
        echo "\",
                delete: \"";
        // line 420
        echo twig_escape_filter($this->env, __("Delete"), "js", null, true);
        echo "\",
                loadPropertyForObject: \"";
        // line 421
        echo twig_escape_filter($this->env, __("Load %prop% for %obj%"), "js", null, true);
        echo "\",
                loading: \"";
        // line 422
        echo twig_escape_filter($this->env, __("Loading"), "js", null, true);
        echo "\",
                retire: \"";
        // line 423
        echo twig_escape_filter($this->env, __("Retire"), "js", null, true);
        echo "\",
                publish: \"";
        // line 424
        echo twig_escape_filter($this->env, __("Publish"), "js", null, true);
        echo "\",
                discard: \"";
        // line 425
        echo twig_escape_filter($this->env, __("Discard"), "js", null, true);
        echo "\",
                copyToClipboard: \"";
        // line 426
        echo twig_escape_filter($this->env, __("Copy to Clipboard"), "js", null, true);
        echo "\",
                viewSource: \"";
        // line 427
        echo twig_escape_filter($this->env, __("View Source Code"), "js", null, true);
        echo "\",
                detachEditor: \"";
        // line 428
        echo twig_escape_filter($this->env, __("Detach Editor"), "js", null, true);
        echo "\",
                attachEditor: \"";
        // line 429
        echo twig_escape_filter($this->env, __("Attach Editor"), "js", null, true);
        echo "\",
                scaleToContainer: \"";
        // line 430
        echo twig_escape_filter($this->env, __("Scale to view"), "js", null, true);
        echo "\",
                scaleToWidth: \"";
        // line 431
        echo twig_escape_filter($this->env, __("Scale to width"), "js", null, true);
        echo "\",
                scaleToHeight: \"";
        // line 432
        echo twig_escape_filter($this->env, __("Scale to height"), "js", null, true);
        echo "\",
                zoomInEditor: \"";
        // line 433
        echo twig_escape_filter($this->env, __("Zoom in"), "js", null, true);
        echo "\",
                zoomOutEditor: \"";
        // line 434
        echo twig_escape_filter($this->env, __("Zoom out"), "js", null, true);
        echo "\",
                couldNotCopy: \"";
        // line 435
        echo twig_escape_filter($this->env, __("Could not copy"), "js", null, true);
        echo "\",
                copied: \"";
        // line 436
        echo twig_escape_filter($this->env, __("Copied!"), "js", null, true);
        echo "\",
                invalidModule:  \"";
        // line 437
        echo twig_escape_filter($this->env, __("This widget isn't enabled and can't be configured, please contact your administrator for help."), "js", null, true);
        echo "\",
                timeline: \"";
        // line 438
        echo twig_escape_filter($this->env, __("Timeline"), "js", null, true);
        echo "\",
                actions: {
                    layouts:  \"";
        // line 440
        echo twig_escape_filter($this->env, __("Layouts"), "js", null, true);
        echo "\",
                    regions: \"";
        // line 441
        echo twig_escape_filter($this->env, __("Zones"), "js", null, true);
        echo "\",
                    widgets: \"";
        // line 442
        echo twig_escape_filter($this->env, __("Widgets"), "js", null, true);
        echo "\",
                    playlists: \"";
        // line 443
        echo twig_escape_filter($this->env, __("Playlists"), "js", null, true);
        echo "\",
                    deleteWidget: \"";
        // line 444
        echo twig_escape_filter($this->env, __("Delete"), "js", null, true);
        echo "\",
                    deleteModal: {
                        title: \"";
        // line 446
        echo twig_escape_filter($this->env, __("Delete Action"), "js", null, true);
        echo "\",
                        message: \"";
        // line 447
        echo twig_escape_filter($this->env, __("Are you sure you want to delete this action?"), "js", null, true);
        echo "\",
                        buttons: {
                            cancel: \"";
        // line 449
        echo twig_escape_filter($this->env, __("Cancel"), "js", null, true);
        echo "\",
                            delete: \"";
        // line 450
        echo twig_escape_filter($this->env, __("Delete"), "js", null, true);
        echo "\"
                        },
                    },
                },
                layoutTemplateReplace: {
                    title: \"";
        // line 455
        echo twig_escape_filter($this->env, __("Replace Layout"), "js", null, true);
        echo "\",
                    message: \"";
        // line 456
        echo twig_escape_filter($this->env, __("Are you sure you want to replace your Layout with a template?"), "js", null, true);
        echo "\",
                    buttons: {
                        cancel: \"";
        // line 458
        echo twig_escape_filter($this->env, __("Cancel"), "js", null, true);
        echo "\",
                        delete: \"";
        // line 459
        echo twig_escape_filter($this->env, __("Replace"), "js", null, true);
        echo "\"
                    },
                },
                selectWidgetFromCanvasModal: {
                    title: \"";
        // line 463
        echo twig_escape_filter($this->env, __("Select widget or create a new one"), "js", null, true);
        echo "\",
                    createNew: \"";
        // line 464
        echo twig_escape_filter($this->env, __("Create new"), "js", null, true);
        echo "\",
                    name: \"";
        // line 465
        echo twig_escape_filter($this->env, __("Name"), "js", null, true);
        echo "\",
                    type: \"";
        // line 466
        echo twig_escape_filter($this->env, __("Type"), "js", null, true);
        echo "\",
                    numEl: \"";
        // line 467
        echo twig_escape_filter($this->env, __("# of elements"), "js", null, true);
        echo "\",
                    numElGr: \"";
        // line 468
        echo twig_escape_filter($this->env, __("# of element groups"), "js", null, true);
        echo "\",
                },
                exit: \"";
        // line 470
        echo twig_escape_filter($this->env, __("Exit"), "js", null, true);
        echo "\",
                convertPlaylistSuccess: \"";
        // line 471
        echo twig_escape_filter($this->env, __("Playlist converted to global!"), "js", null, true);
        echo "\",
            };

            var uploadTrans = {
                uploadMessage: \"";
        // line 475
        echo twig_escape_filter($this->env, __("Upload media"), "js", null, true);
        echo "\",
                addFiles: \"";
        // line 476
        echo twig_escape_filter($this->env, __("Add files"), "js", null, true);
        echo "\",
                startUpload: \"";
        // line 477
        echo twig_escape_filter($this->env, __("Start upload"), "js", null, true);
        echo "\",
                cancelUpload: \"";
        // line 478
        echo twig_escape_filter($this->env, __("Cancel upload"), "js", null, true);
        echo "\",
                processing: \"";
        // line 479
        echo twig_escape_filter($this->env, __("Processing..."), "js", null, true);
        echo "\",
                widgetFromDt: \"";
        // line 480
        echo twig_escape_filter($this->env, __("Start time"), "js", null, true);
        echo "\",
                widgetToDt: \"";
        // line 481
        echo twig_escape_filter($this->env, __("End time"), "js", null, true);
        echo "\",
                widgetExpiryDates: \"";
        // line 482
        echo twig_escape_filter($this->env, __("Set Expiry Dates"), "js", null, true);
        echo "\",
                widgetExpiryDatesMessage: \"";
        // line 483
        echo twig_escape_filter($this->env, __("Use the check box to set Start and End dates/times for media files and use the Start Upload button to apply to all files or the row upload button to upload individually."), "js", null, true);
        echo "\",
                widgetFromDtMessage: \"";
        // line 484
        echo twig_escape_filter($this->env, __("Select the start time for this widget"), "js", null, true);
        echo "\",
                widgetToDtMessage: \"";
        // line 485
        echo twig_escape_filter($this->env, __("Select the end time for this widget"), "js", null, true);
        echo "\",
                deleteOnExpiry: \"";
        // line 486
        echo twig_escape_filter($this->env, __("Delete on Expiry"), "js", null, true);
        echo "\",
                deleteOnExpiryMessage: \"";
        // line 487
        echo twig_escape_filter($this->env, __("When the End Time for this Widget passes should the Widget be removed from the Playlist?"), "js", null, true);
        echo "\",
                applyToMedia: \"";
        // line 488
        echo twig_escape_filter($this->env, __("Delete from Library"), "js", null, true);
        echo "\",
                applyToMediaMessage: \"";
        // line 489
        echo twig_escape_filter($this->env, __("Remove file from the Media Library"), "js", null, true);
        echo "\",
                selectFolder: \"";
        // line 490
        echo twig_escape_filter($this->env, __("Select Folder"), "js", null, true);
        echo "\",
                selectFolderTitle: \"";
        // line 491
        echo twig_escape_filter($this->env, __("Change Current Folder location"), "js", null, true);
        echo "\",
                selectedFolder: \"";
        // line 492
        echo twig_escape_filter($this->env, __("Current Folder"), "js", null, true);
        echo ":\",
                selectedFolderTitle: \"";
        // line 493
        echo twig_escape_filter($this->env, __("Upload files to this Folder"), "js", null, true);
        echo ":\"
            };

            var contextMenuTrans = {
                editAudio: \"";
        // line 497
        echo twig_escape_filter($this->env, __("Edit Attached Audio"), "js", null, true);
        echo "\",
                editExpiry: \"";
        // line 498
        echo twig_escape_filter($this->env, __("Edit Expiry Dates"), "js", null, true);
        echo "\",
                editTransIn: \"";
        // line 499
        echo twig_escape_filter($this->env, __("Edit Transition In"), "js", null, true);
        echo "\",
                editTransOut: \"";
        // line 500
        echo twig_escape_filter($this->env, __("Edit Transition Out"), "js", null, true);
        echo "\",
                editPermissions: \"";
        // line 501
        echo twig_escape_filter($this->env, __("Edit Sharing"), "js", null, true);
        echo "\",
                editRegionPermissions: \"";
        // line 502
        echo twig_escape_filter($this->env, __("Edit Region Sharing"), "js", null, true);
        echo "\",
                editWidgetPermissions: \"";
        // line 503
        echo twig_escape_filter($this->env, __("Edit Widget Sharing"), "js", null, true);
        echo "\",
                editPlaylist: \"";
        // line 504
        echo twig_escape_filter($this->env, __("Edit Playlist"), "js", null, true);
        echo "\",
                convertPlaylist: \"";
        // line 505
        echo twig_escape_filter($this->env, __("Convert Playlist"), "js", null, true);
        echo "\",
                convertPlaylistHelpText: \"";
        // line 506
        echo twig_escape_filter($this->env, __("Convert Layout playlist into a Global playlist."), "js", null, true);
        echo "\",
                options: \"";
        // line 507
        echo __("Options");
        echo "\",
                moveLeft: \"";
        // line 508
        echo twig_escape_filter($this->env, __("Move one step left"), "js", null, true);
        echo "\",
                moveRight: \"";
        // line 509
        echo twig_escape_filter($this->env, __("Move one step right"), "js", null, true);
        echo "\",
                moveTopLeft: \"";
        // line 510
        echo twig_escape_filter($this->env, __("Move to the top left"), "js", null, true);
        echo "\",
                moveTopRight: \"";
        // line 511
        echo twig_escape_filter($this->env, __("Move to the top right"), "js", null, true);
        echo "\",
                bringToFront: \"";
        // line 512
        echo twig_escape_filter($this->env, __("Bring to front"), "js", null, true);
        echo "\",
                bringForward: \"";
        // line 513
        echo twig_escape_filter($this->env, __("Bring forward"), "js", null, true);
        echo "\",
                sendBackwards: \"";
        // line 514
        echo twig_escape_filter($this->env, __("Send backwards"), "js", null, true);
        echo "\",
                sendToBack: \"";
        // line 515
        echo twig_escape_filter($this->env, __("Send to back"), "js", null, true);
        echo "\",
                delete: \"";
        // line 516
        echo twig_escape_filter($this->env, __("Delete"), "js", null, true);
        echo "\",
                copy: \"";
        // line 517
        echo twig_escape_filter($this->env, __("Duplicate"), "js", null, true);
        echo "\",
                newConfig: \"";
        // line 518
        echo twig_escape_filter($this->env, __("New Configuration"), "js", null, true);
        echo "\",
                editText: \"";
        // line 519
        echo twig_escape_filter($this->env, __("Edit Text"), "js", null, true);
        echo "\",
                groupElements: \"";
        // line 520
        echo twig_escape_filter($this->env, __("Group elements"), "js", null, true);
        echo "\",
                ungroupElements: \"";
        // line 521
        echo twig_escape_filter($this->env, __("Ungroup elements"), "js", null, true);
        echo "\",
                addElementsToGroup: \"";
        // line 522
        echo twig_escape_filter($this->env, __("Add elements to group"), "js", null, true);
        echo "\",
                deleteGroupElements: \"";
        // line 523
        echo twig_escape_filter($this->env, __("Delete all"), "js", null, true);
        echo "\",
            };

            var propertiesPanelTrans = {
                playlist: \"";
        // line 527
        echo twig_escape_filter($this->env, __("Playlist"), "js", null, true);
        echo "\",
                zone: \"";
        // line 528
        echo twig_escape_filter($this->env, __("Zone"), "js", null, true);
        echo "\",
                widget: \"";
        // line 529
        echo twig_escape_filter($this->env, __("Widget"), "js", null, true);
        echo "\",
                playlist: \"";
        // line 530
        echo twig_escape_filter($this->env, __("Playlist"), "js", null, true);
        echo "\",
                configure: \"";
        // line 531
        echo twig_escape_filter($this->env, __("Configure"), "js", null, true);
        echo "\",
                appearance: \"";
        // line 532
        echo twig_escape_filter($this->env, __("Appearance"), "js", null, true);
        echo "\",
                fallback: \"";
        // line 533
        echo twig_escape_filter($this->env, __("Fallback Data"), "js", null, true);
        echo "\",
                advanced: \"";
        // line 534
        echo twig_escape_filter($this->env, __("Advanced"), "js", null, true);
        echo "\",
                general: \"";
        // line 535
        echo twig_escape_filter($this->env, __("General"), "js", null, true);
        echo "\",
                positioning: \"";
        // line 536
        echo twig_escape_filter($this->env, __("Positioning"), "js", null, true);
        echo "\",
                transition: \"";
        // line 537
        echo twig_escape_filter($this->env, __("Transition"), "js", null, true);
        echo "\",
                width: \"";
        // line 538
        echo twig_escape_filter($this->env, __("Width"), "js", null, true);
        echo "\",
                height: \"";
        // line 539
        echo twig_escape_filter($this->env, __("Height"), "js", null, true);
        echo "\",
                widgetDimensions: \"";
        // line 540
        echo twig_escape_filter($this->env, __("Widget Dimensions"), "js", null, true);
        echo "\",
                top: \"";
        // line 541
        echo twig_escape_filter($this->env, __("Top"), "js", null, true);
        echo "\",
                left: \"";
        // line 542
        echo twig_escape_filter($this->env, __("Left"), "js", null, true);
        echo "\",
                scale: \"";
        // line 543
        echo twig_escape_filter($this->env, __("Scale"), "js", null, true);
        echo "\",
                layer: \"";
        // line 544
        echo twig_escape_filter($this->env, __("Layer"), "js", null, true);
        echo "\",
                invalidWidget:  \"";
        // line 545
        echo twig_escape_filter($this->env, __("This widget needs to be configured before it will be shown."), "js", null, true);
        echo "\",
                requiredElementsMessage: \"";
        // line 546
        echo twig_escape_filter($this->env, __("This widget needs to have at least one of the following elements: %elements%."), "js", null, true);
        echo "\",
                dataSlot: \"";
        // line 547
        echo twig_escape_filter($this->env, __("Data Slot"), "js", null, true);
        echo "\",
                dataSlotHelpText: \"";
        // line 548
        echo twig_escape_filter($this->env, __("When there are more than one of the same element for a widget you can set the slot for each element. For example with two of the same element you'd have data slot 1 and data slot 2. If 10 items were returned slot 1 would receive items 1,3,5,7,9 and slot 2 would receive items 2,4,6,8,10."), "js", null, true);
        echo "\",
                pinSlot: \"";
        // line 549
        echo twig_escape_filter($this->env, __("Pin this slot?"), "js", null, true);
        echo "\",
                pinSlotHelpText: \"";
        // line 550
        echo twig_escape_filter($this->env, __("The first item that appears in a slot will be pinned and will not cycle with the rest of the items."), "js", null, true);
        echo "\",
                groupScale: \"";
        // line 551
        echo twig_escape_filter($this->env, __("Scale with group"), "js", null, true);
        echo "\",
                groupScaleHelpText: \"";
        // line 552
        echo twig_escape_filter($this->env, __("Scale element when scaling containing group."), "js", null, true);
        echo "\",
                groupScaleType: \"";
        // line 553
        echo twig_escape_filter($this->env, __("Align"), "js", null, true);
        echo "\",
                groupScaleTypeHelpText: \"";
        // line 554
        echo twig_escape_filter($this->env, __("Alignment when scaling the containing group."), "js", null, true);
        echo "\",
                groupScaleTypeOptions: {
                    topLeft: \"";
        // line 556
        echo twig_escape_filter($this->env, __("Top/Left"), "js", null, true);
        echo "\",
                    topRight: \"";
        // line 557
        echo twig_escape_filter($this->env, __("Top/Right"), "js", null, true);
        echo "\",
                    bottomLeft: \"";
        // line 558
        echo twig_escape_filter($this->env, __("Bottom/Left"), "js", null, true);
        echo "\",
                    bottomRight: \"";
        // line 559
        echo twig_escape_filter($this->env, __("Bottom/Right"), "js", null, true);
        echo "\",
                },
                somethingWentWrong: \"";
        // line 561
        echo twig_escape_filter($this->env, __("Something went wrong!"), "js", null, true);
        echo "\",
                somethingWentWrongEditPermissions: \"";
        // line 562
        echo twig_escape_filter($this->env, __("Selected item is not shared with you with edit permission!"), "js", null, true);
        echo "\",
                actions: {
                    noActionsToShow: \"";
        // line 564
        echo twig_escape_filter($this->env, __("No actions to show"), "js", null, true);
        echo "\",
                    otherActions: \"";
        // line 565
        echo twig_escape_filter($this->env, __("Other Actions"), "js", null, true);
        echo "\",
                    notDefined: \"";
        // line 566
        echo twig_escape_filter($this->env, __("* Not Defined"), "js", null, true);
        echo "\",
                    itemActions: {
                        layout: \"";
        // line 568
        echo twig_escape_filter($this->env, __("Layout Actions"), "js", null, true);
        echo "\",
                        region: \"";
        // line 569
        echo twig_escape_filter($this->env, __("Zone Actions"), "js", null, true);
        echo "\",
                        widget: \"";
        // line 570
        echo twig_escape_filter($this->env, __("Widget Actions"), "js", null, true);
        echo "\",
                    },
                    targetsAndSources: {
                        layout: \"";
        // line 573
        echo twig_escape_filter($this->env, __("Layout"), "js", null, true);
        echo "\",
                        region: \"";
        // line 574
        echo twig_escape_filter($this->env, __("Zone"), "js", null, true);
        echo "\",
                        widget: \"";
        // line 575
        echo twig_escape_filter($this->env, __("Widget"), "js", null, true);
        echo "\",
                        screen: \"";
        // line 576
        echo twig_escape_filter($this->env, __("Layout"), "js", null, true);
        echo "\",
                        playlist: \"";
        // line 577
        echo twig_escape_filter($this->env, __("Playlist"), "js", null, true);
        echo "\",
                    },
                    trigger: \"";
        // line 579
        echo twig_escape_filter($this->env, __("Trigger"), "js", null, true);
        echo "\",
                    target: \"";
        // line 580
        echo twig_escape_filter($this->env, __("Target"), "js", null, true);
        echo "\",
                    targetHelpText: \"";
        // line 581
        echo twig_escape_filter($this->env, __("If your Widget is a Shell Command you can select to target 'Screen' to run the command without affecting any Zones. For all other Widgets select 'Zone' as target."), "js", null, true);
        echo "\",
                    touch: \"";
        // line 582
        echo twig_escape_filter($this->env, __("Touch/Click"), "js", null, true);
        echo "\",
                    webhook: \"";
        // line 583
        echo twig_escape_filter($this->env, __("Web hook"), "js", null, true);
        echo "\",
                    save: \"";
        // line 584
        echo twig_escape_filter($this->env, __("Save"), "js", null, true);
        echo "\",
                    cancel: \"";
        // line 585
        echo twig_escape_filter($this->env, __("Cancel"), "js", null, true);
        echo "\",
                    editAction: \"";
        // line 586
        echo twig_escape_filter($this->env, __("Edit Action"), "js", null, true);
        echo "\",
                    deleteAction: \"";
        // line 587
        echo twig_escape_filter($this->env, __("Delete Action"), "js", null, true);
        echo "\",
                    nextLayout: \"";
        // line 588
        echo twig_escape_filter($this->env, __("Next Layout"), "js", null, true);
        echo "\",
                    previousLayout: \"";
        // line 589
        echo twig_escape_filter($this->env, __("Previous Layout"), "js", null, true);
        echo "\",
                    nextWidget: \"";
        // line 590
        echo twig_escape_filter($this->env, __("Next Widget"), "js", null, true);
        echo "\",
                    previousWidget: \"";
        // line 591
        echo twig_escape_filter($this->env, __("Previous Widget"), "js", null, true);
        echo "\",
                    navLayout: \"";
        // line 592
        echo twig_escape_filter($this->env, __("Navigate to Layout"), "js", null, true);
        echo "\",
                    navWidget: \"";
        // line 593
        echo twig_escape_filter($this->env, __("Navigate to Widget"), "js", null, true);
        echo "\",
                    widgetToLoad: \"";
        // line 594
        echo twig_escape_filter($this->env, __("Widget to Load"), "js", null, true);
        echo "\",
                    widgetToLoadHelpText: \"";
        // line 595
        echo twig_escape_filter($this->env, __("Select or create a Widget to be loaded"), "js", null, true);
        echo "\",
                    triggerType: \"";
        // line 596
        echo twig_escape_filter($this->env, __("Trigger Type"), "js", null, true);
        echo "\",
                    triggerTypeHelpText: \"";
        // line 597
        echo twig_escape_filter($this->env, __("How should the Player listen for this Action to be triggered?"), "js", null, true);
        echo "\",
                    triggerCode: \"";
        // line 598
        echo twig_escape_filter($this->env, __("Trigger Code"), "js", null, true);
        echo "\",
                    triggerCodeHelpText: \"";
        // line 599
        echo twig_escape_filter($this->env, __("If this Action is triggered by a Web Hook then this Trigger Code must be present in the URL `trigger=` parameter."), "js", null, true);
        echo "\",
                    triggerTarget: \"";
        // line 600
        echo twig_escape_filter($this->env, __("Trigger"), "js", null, true);
        echo "\",
                    triggerTargetHelpText: \"";
        // line 601
        echo twig_escape_filter($this->env, __("Select the target for the Trigger"), "js", null, true);
        echo "\",
                    layoutCode: \"";
        // line 602
        echo twig_escape_filter($this->env, __("Layout Code"), "js", null, true);
        echo "\",
                    layoutCodeHelpText: \"";
        // line 603
        echo twig_escape_filter($this->env, __("Please enter the Code identifier for the Layout as assigned in the Add / Edit Layout form."), "js", null, true);
        echo "\",
                    createNewDrawerWidget: \"";
        // line 604
        echo twig_escape_filter($this->env, __("-- Create New --"), "js", null, true);
        echo "\",
                },
                positionTab: {
                    layer: \"";
        // line 607
        echo twig_escape_filter($this->env, __("Layer"), "js", null, true);
        echo "\",
                    layerHelp: \"";
        // line 608
        echo twig_escape_filter($this->env, __("Layer related to all layout objects"), "js", null, true);
        echo "\",
                    elementLayer: \"";
        // line 609
        echo twig_escape_filter($this->env, __("Element Layer"), "js", null, true);
        echo "\",
                    elementLayerHelp: \"";
        // line 610
        echo twig_escape_filter($this->env, __("Layer for the element related to other elements"), "js", null, true);
        echo "\",
                    elementGroupLayer: \"";
        // line 611
        echo twig_escape_filter($this->env, __("Element Group Layer"), "js", null, true);
        echo "\",
                    elementGroupLayerHelp: \"";
        // line 612
        echo twig_escape_filter($this->env, __("Layer for the element group related to other groups or elements without group"), "js", null, true);
        echo "\",
                    canvasLayer: \"";
        // line 613
        echo twig_escape_filter($this->env, __("Canvas Layer"), "js", null, true);
        echo "\",
                    canvasLayerHelp: \"";
        // line 614
        echo twig_escape_filter($this->env, __("Layer for the canvas containing all elements"), "js", null, true);
        echo "\",
                    top: \"";
        // line 615
        echo twig_escape_filter($this->env, __("Top"), "js", null, true);
        echo "\",
                    left: \"";
        // line 616
        echo twig_escape_filter($this->env, __("Left"), "js", null, true);
        echo "\",
                    width: \"";
        // line 617
        echo twig_escape_filter($this->env, __("Width"), "js", null, true);
        echo "\",
                    height: \"";
        // line 618
        echo twig_escape_filter($this->env, __("Height"), "js", null, true);
        echo "\",
                    rotation: \"";
        // line 619
        echo twig_escape_filter($this->env, __("Rotation"), "js", null, true);
        echo "\",
                    setFullscreen: \"";
        // line 620
        echo twig_escape_filter($this->env, __("Make this full screen, dimensions will be set to %layout.width% by %layout.height%."), "js", null, true);
        echo "\",
                    bringToView: \"";
        // line 621
        echo twig_escape_filter($this->env, __("Bring selected object back to the Layout view."), "js", null, true);
        echo "\",
                },
                layout: {
                    backgroundColor: \"";
        // line 624
        echo twig_escape_filter($this->env, __("Background Colour"), "js", null, true);
        echo "\",
                    backgroundColorHelpText: \"";
        // line 625
        echo twig_escape_filter($this->env, __("Use the colour picker to select the background colour"), "js", null, true);
        echo "\",
                    backgroundImage: \"";
        // line 626
        echo twig_escape_filter($this->env, __("Background Image"), "js", null, true);
        echo "\",
                    noImageSet: \"";
        // line 627
        echo twig_escape_filter($this->env, __("No Image set, add from Toolbox or Upload!"), "js", null, true);
        echo "\",
                    addBackgroundImage: \"";
        // line 628
        echo twig_escape_filter($this->env, __("Add background image"), "js", null, true);
        echo "\",
                    upload: \"";
        // line 629
        echo twig_escape_filter($this->env, __("Upload"), "js", null, true);
        echo "\",
                    remove: \"";
        // line 630
        echo twig_escape_filter($this->env, __("Remove"), "js", null, true);
        echo "\",
                    resolution: \"";
        // line 631
        echo twig_escape_filter($this->env, __("Resolution"), "js", null, true);
        echo "\",
                    resolutionHelpText: \"";
        // line 632
        echo twig_escape_filter($this->env, __("Change the resolution"), "js", null, true);
        echo "\",
                    layer: \"";
        // line 633
        echo twig_escape_filter($this->env, __("Layer"), "js", null, true);
        echo "\",
                    layerHelpText: \"";
        // line 634
        echo twig_escape_filter($this->env, __("The layering order of the background image (z-index). Advanced use only."), "js", null, true);
        echo "\",
                    autoApplyTransitions: \"";
        // line 635
        echo twig_escape_filter($this->env, __("Automatically apply Transitions?"), "js", null, true);
        echo "\",
                    autoApplyTransitionsHelpText: \"";
        // line 636
        echo twig_escape_filter($this->env, __("When enabled, the default Transition type and duration will be applied to all widgets on this Layout."), "js", null, true);
        echo "\",
                },
                region: {
                    name: \"";
        // line 639
        echo twig_escape_filter($this->env, __("Name"), "js", null, true);
        echo "\",
                    nameHelpText: \"";
        // line 640
        echo twig_escape_filter($this->env, __("An optional name for this widget"), "js", null, true);
        echo "\",
                    syncKey: \"";
        // line 641
        echo twig_escape_filter($this->env, __("Content Synchronisation Key"), "js", null, true);
        echo "\",
                    syncKeyHelpText: \"";
        // line 642
        echo twig_escape_filter($this->env, __("If this layout is scheduled using a synchronised event, this key will be used to match with other layouts in the same event."), "js", null, true);
        echo "\",
                    loop: \"";
        // line 643
        echo twig_escape_filter($this->env, __("Loop?"), "js", null, true);
        echo "\",
                    loopHelpText: \"";
        // line 644
        echo twig_escape_filter($this->env, __("Enable Widget loop?"), "js", null, true);
        echo "\",
                    loopMessage1: \"";
        // line 645
        echo twig_escape_filter($this->env, __("When should the Widget Loop be enabled?"), "js", null, true);
        echo "\",
                    loopMessage2: \"";
        // line 646
        echo twig_escape_filter($this->env, __("* If the Widget is a 'fixed' item (eg Text), Loop should not be enabled."), "js", null, true);
        echo "\",
                    loopMessage3: \"";
        // line 647
        echo twig_escape_filter($this->env, __("* If the Widget needs to update periodically (eg RSS Ticker Widget), Loop can be enabled ONLY if the Widget needs to update MORE frequently than the duration of the overall Layout."), "js", null, true);
        echo "\",
                    exitTransitionTitle: \"";
        // line 648
        echo twig_escape_filter($this->env, __("Exit Transition?"), "js", null, true);
        echo "\",
                    exitTransitionHelpText: \"";
        // line 649
        echo twig_escape_filter($this->env, __("What transition should be applied when this region is finished?"), "js", null, true);
        echo "\",
                    layer: \"";
        // line 650
        echo twig_escape_filter($this->env, __("Layer"), "js", null, true);
        echo "\",
                    layerHelpText: \"";
        // line 651
        echo twig_escape_filter($this->env, __("The layering order of this %regionType% (z-index). Advanced use only."), "js", null, true);
        echo "\",
                    top: \"";
        // line 652
        echo twig_escape_filter($this->env, __("Top"), "js", null, true);
        echo "\",
                    topHelpText: \"";
        // line 653
        echo twig_escape_filter($this->env, __("The top position of the %regionType%"), "js", null, true);
        echo "\",
                    left: \"";
        // line 654
        echo twig_escape_filter($this->env, __("Left"), "js", null, true);
        echo "\",
                    leftHelpText: \"";
        // line 655
        echo twig_escape_filter($this->env, __("The left position of the %regionType%"), "js", null, true);
        echo "\",
                    width: \"";
        // line 656
        echo twig_escape_filter($this->env, __("Width"), "js", null, true);
        echo "\",
                    widthHelpText: \"";
        // line 657
        echo twig_escape_filter($this->env, __("The width of the %regionType%"), "js", null, true);
        echo "\",
                    height: \"";
        // line 658
        echo twig_escape_filter($this->env, __("Height"), "js", null, true);
        echo "\",
                    heightHelpText: \"";
        // line 659
        echo twig_escape_filter($this->env, __("The height of the %regionType%"), "js", null, true);
        echo "\",
                    makeRegionFullScreen: \"";
        // line 660
        echo twig_escape_filter($this->env, __("Make this %regionType% full screen, dimensions will be set to %layout.width% by %layout.height%."), "js", null, true);
        echo "\",
                    bringRegionToView: \"";
        // line 661
        echo twig_escape_filter($this->env, __("Bring selected %regionType% back to the Layout view."), "js", null, true);
        echo "\"
                },
                widget: {
                    name: \"";
        // line 664
        echo twig_escape_filter($this->env, __("Configuration Name"), "js", null, true);
        echo "\",
                    nameHelpText: \"";
        // line 665
        echo twig_escape_filter($this->env, __("An optional name for this widget"), "js", null, true);
        echo "\",
                    useDuration: \"";
        // line 666
        echo twig_escape_filter($this->env, __("Set a duration?"), "js", null, true);
        echo "\",
                    useDurationHelpText: \"";
        // line 667
        echo twig_escape_filter($this->env, __("Select to provide a specific duration for this Widget"), "js", null, true);
        echo "\",
                    duration: \"";
        // line 668
        echo twig_escape_filter($this->env, __("Duration"), "js", null, true);
        echo "\",
                    durationHelpText: \"";
        // line 669
        echo twig_escape_filter($this->env, __("The duration of the widget in seconds"), "js", null, true);
        echo "\",
                    enableStat: \"";
        // line 670
        echo twig_escape_filter($this->env, __("Enable Stats Collection?"), "js", null, true);
        echo "\",
                    enableStatHelpText: \"";
        // line 671
        echo twig_escape_filter($this->env, __("Enable the collection of Proof of Play statistics for this Widget. Ensure that ‘Enable Stats Collection’ is set to ‘On’ in the Display Settings."), "js", null, true);
        echo "\",
                    enableStatOff: \"";
        // line 672
        echo twig_escape_filter($this->env, __("Off"), "js", null, true);
        echo "\",
                    enableStatOn: \"";
        // line 673
        echo twig_escape_filter($this->env, __("On"), "js", null, true);
        echo "\",
                    enableStatInherit: \"";
        // line 674
        echo twig_escape_filter($this->env, __("Inherit"), "js", null, true);
        echo "\",
                    isRepeatData: \"";
        // line 675
        echo twig_escape_filter($this->env, __("Repeat items to fill all data slots?"), "js", null, true);
        echo "\",
                    isRepeatDataHelpText: \"";
        // line 676
        echo twig_escape_filter($this->env, __("Once all items have been placed in a slot, any empty slots will be filled with items from the start."), "js", null, true);
        echo "\",
                },
                effect: \"Effect\",
                effectHelpText: \"Please select the effect that will be used to transition between items.\",
                canvasWidgetControl: {
                    canvasWidgets: \"";
        // line 681
        echo twig_escape_filter($this->env, __("Widget"), "js", null, true);
        echo "\",
                    canvasWidgetsHelp: \"";
        // line 682
        echo twig_escape_filter($this->env, __("Widgets of the same type, change to transfer the source to a different widget."), "js", null, true);
        echo "\",
                    transferWidget: \"";
        // line 683
        echo twig_escape_filter($this->env, __("Transfer"), "js", null, true);
        echo "\",
                    transferWidgetHelp: \"";
        // line 684
        echo twig_escape_filter($this->env, __("Transfer the currently selected elements into a new widget!"), "js", null, true);
        echo "\",
                },
                widgetInfo: {
                    widgetName: \"";
        // line 687
        echo twig_escape_filter($this->env, __("Widget Name"), "js", null, true);
        echo "\",
                },
                widgetType: \"";
        // line 689
        echo twig_escape_filter($this->env, __("Widget"), "js", null, true);
        echo "\",
                elementName: \"";
        // line 690
        echo twig_escape_filter($this->env, __("Element Name"), "js", null, true);
        echo "\",
                elementNameHelpText: \"";
        // line 691
        echo twig_escape_filter($this->env, __("An optional name for this element"), "js", null, true);
        echo "\",
                elementGroupName: \"";
        // line 692
        echo twig_escape_filter($this->env, __("Element Group Name"), "js", null, true);
        echo "\",
                elementGroupNameHelpText: \"";
        // line 693
        echo twig_escape_filter($this->env, __("An optional name for this group of elements"), "js", null, true);
        echo "\",
                colorGradient: {
                    gradientColor1: \"";
        // line 695
        echo twig_escape_filter($this->env, __("Color 1"), "js", null, true);
        echo "\",
                    gradientColor2: \"";
        // line 696
        echo twig_escape_filter($this->env, __("Color 2"), "js", null, true);
        echo "\",
                    gradientType: \"";
        // line 697
        echo twig_escape_filter($this->env, __("Type"), "js", null, true);
        echo "\",
                    gradientTypeRadial: \"";
        // line 698
        echo twig_escape_filter($this->env, __("Radial"), "js", null, true);
        echo "\",
                    gradientTypeLinear: \"";
        // line 699
        echo twig_escape_filter($this->env, __("Linear"), "js", null, true);
        echo "\",
                    gradientAngle: \"";
        // line 700
        echo twig_escape_filter($this->env, __("Angle"), "js", null, true);
        echo "\",
                }
            };

            var toolbarTrans = {
                deleteObject: \"";
        // line 705
        echo twig_escape_filter($this->env, __("Delete selected %object%"), "js", null, true);
        echo "\",
                deleteMultipleObjects: \"";
        // line 706
        echo twig_escape_filter($this->env, __("Delete selected objects"), "js", null, true);
        echo "\",
                changeLayout: \"";
        // line 707
        echo twig_escape_filter($this->env, __("Change Layout"), "js", null, true);
        echo "\",
                options: \"";
        // line 708
        echo twig_escape_filter($this->env, __("Options"), "js", null, true);
        echo "\",
                displayTooltipsName: \"";
        // line 709
        echo twig_escape_filter($this->env, __("Tooltips?"), "js", null, true);
        echo "\",
                displayTooltipsTitle: \"";
        // line 710
        echo twig_escape_filter($this->env, __("Show/Hide tooltips which provide help; informational tooltips will remain."), "js", null, true);
        echo "\",
                deleteConfirmationName: \"";
        // line 711
        echo twig_escape_filter($this->env, __("Delete confirmation?"), "js", null, true);
        echo "\",
                deleteConfirmationTitle: \"";
        // line 712
        echo twig_escape_filter($this->env, __("Do we want to show confirmation modals when deleting critical Layout content?"), "js", null, true);
        echo "\",
                search: \"";
        // line 713
        echo twig_escape_filter($this->env, __("Search"), "js", null, true);
        echo "\",
                select: \"";
        // line 714
        echo twig_escape_filter($this->env, __("Select"), "js", null, true);
        echo "\",
                deselect: \"";
        // line 715
        echo twig_escape_filter($this->env, __("Deselect"), "js", null, true);
        echo "\",
                duration: \"";
        // line 716
        echo twig_escape_filter($this->env, __("Duration"), "js", null, true);
        echo "\",
                dynamicPlaylist: \"";
        // line 717
        echo twig_escape_filter($this->env, __("Dynamic Playlist"), "js", null, true);
        echo "\",
                preview: \"";
        // line 718
        echo twig_escape_filter($this->env, __("Preview media"), "js", null, true);
        echo "\",
                open: \"";
        // line 719
        echo twig_escape_filter($this->env, __("Open"), "js", null, true);
        echo "\",
                addAsFavourite: \"";
        // line 720
        echo twig_escape_filter($this->env, __("Mark as favourite"), "js", null, true);
        echo "\",
                upload: \"";
        // line 721
        echo twig_escape_filter($this->env, __("Upload new"), "js", null, true);
        echo "\",
                uploadType: \"";
        // line 722
        echo twig_escape_filter($this->env, __("Upload %obj%"), "js", null, true);
        echo "\",
                newPlaylist: \"";
        // line 723
        echo twig_escape_filter($this->env, __("New Playlist"), "js", null, true);
        echo "\",
                searchFilters: {
                    search: \"";
        // line 725
        echo twig_escape_filter($this->env, __("Search"), "js", null, true);
        echo "\",
                    name: \"";
        // line 726
        echo twig_escape_filter($this->env, __("Name"), "js", null, true);
        echo "\",
                    tag: \"";
        // line 727
        echo twig_escape_filter($this->env, __("Tag"), "js", null, true);
        echo "\",
                    type: \"";
        // line 728
        echo twig_escape_filter($this->env, __("Type"), "js", null, true);
        echo "\",
                    owner: \"";
        // line 729
        echo twig_escape_filter($this->env, __("Owner"), "js", null, true);
        echo "\",
                    user: \"";
        // line 730
        echo twig_escape_filter($this->env, __("Owner"), "js", null, true);
        echo "\",
                    orientation: \"";
        // line 731
        echo twig_escape_filter($this->env, __("Orientation"), "js", null, true);
        echo "\",
                    provider: \"";
        // line 732
        echo twig_escape_filter($this->env, __("Provider"), "js", null, true);
        echo "\",
                    folder: \"";
        // line 733
        echo twig_escape_filter($this->env, __("Folder"), "js", null, true);
        echo "\",
                },
                searchSortBy: \"";
        // line 735
        echo twig_escape_filter($this->env, __("Sort by"), "js", null, true);
        echo "\",
                searchSort: {
                    mediaId: \"";
        // line 737
        echo twig_escape_filter($this->env, __("Media Id"), "js", null, true);
        echo "\",
                    name: \"";
        // line 738
        echo twig_escape_filter($this->env, __("Name"), "js", null, true);
        echo "\",
                    orientation: \"";
        // line 739
        echo twig_escape_filter($this->env, __("Orientation"), "js", null, true);
        echo "\",
                    width: \"";
        // line 740
        echo twig_escape_filter($this->env, __("Width"), "js", null, true);
        echo "\",
                    height: \"";
        // line 741
        echo twig_escape_filter($this->env, __("Height"), "js", null, true);
        echo "\",
                    duration: \"";
        // line 742
        echo twig_escape_filter($this->env, __("Duration"), "js", null, true);
        echo "\",
                    fileSize: \"";
        // line 743
        echo twig_escape_filter($this->env, __("File Size"), "js", null, true);
        echo "\",
                    createdDt: \"";
        // line 744
        echo twig_escape_filter($this->env, __("Created Date"), "js", null, true);
        echo "\",
                    modifiedDt: \"";
        // line 745
        echo twig_escape_filter($this->env, __("Modified Date"), "js", null, true);
        echo "\",
                },
                orientationValues: {
                  all: \"";
        // line 748
        echo twig_escape_filter($this->env, __("All"), "js", null, true);
        echo "\",
                  landscape: \"";
        // line 749
        echo twig_escape_filter($this->env, __("Landscape"), "js", null, true);
        echo "\",
                  portrait: \"";
        // line 750
        echo twig_escape_filter($this->env, __("Portrait"), "js", null, true);
        echo "\"
                },
                providerValues: {
                  both: \"";
        // line 753
        echo twig_escape_filter($this->env, __("All"), "js", null, true);
        echo "\",
                  local: \"";
        // line 754
        echo twig_escape_filter($this->env, __("Local"), "js", null, true);
        echo "\",
                  remote: \"";
        // line 755
        echo twig_escape_filter($this->env, __("Remote"), "js", null, true);
        echo "\"
                },
                menuItems: {
                    widgetsName: \"";
        // line 758
        echo twig_escape_filter($this->env, __("Widgets"), "js", null, true);
        echo "\",
                    widgetsTitle: \"";
        // line 759
        echo twig_escape_filter($this->env, __("Add widgets"), "js", null, true);
        echo "\",
                    globalElementsName: \"";
        // line 760
        echo twig_escape_filter($this->env, __("Global"), "js", null, true);
        echo "\",
                    globalElementsTitle: \"";
        // line 761
        echo twig_escape_filter($this->env, __("Global Elements"), "js", null, true);
        echo "\",
                    imageName: \"";
        // line 762
        echo twig_escape_filter($this->env, __("Image"), "js", null, true);
        echo "\",
                    imageTitle: \"";
        // line 763
        echo twig_escape_filter($this->env, __("Library image search"), "js", null, true);
        echo "\",
                    audioName: \"";
        // line 764
        echo twig_escape_filter($this->env, __("Audio"), "js", null, true);
        echo "\",
                    audioTitle: \"";
        // line 765
        echo twig_escape_filter($this->env, __("Library audio search"), "js", null, true);
        echo "\",
                    videoName: \"";
        // line 766
        echo twig_escape_filter($this->env, __("Video"), "js", null, true);
        echo "\",
                    videoTitle: \"";
        // line 767
        echo twig_escape_filter($this->env, __("Library video search"), "js", null, true);
        echo "\",
                    libraryName: \"";
        // line 768
        echo twig_escape_filter($this->env, __("Other"), "js", null, true);
        echo "\",
                    libraryTitle: \"";
        // line 769
        echo twig_escape_filter($this->env, __("Library other media search"), "js", null, true);
        echo "\",
                    actionsName: \"";
        // line 770
        echo twig_escape_filter($this->env, __("Actions"), "js", null, true);
        echo "\",
                    actionsTitle: \"";
        // line 771
        echo twig_escape_filter($this->env, __("Interactive actions"), "js", null, true);
        echo "\",
                    layoutTemplateName: \"";
        // line 772
        echo twig_escape_filter($this->env, __("Layout Templates"), "js", null, true);
        echo "\",
                    layoutTemplateTitle: \"";
        // line 773
        echo twig_escape_filter($this->env, __("Search for Layout Templates"), "js", null, true);
        echo "\",
                    layoutExchangeTitle: \"";
        // line 774
        echo twig_escape_filter($this->env, __("Search for templates available from the %obj%."), "js", null, true);
        echo "\",
                    playlistsName: \"";
        // line 775
        echo twig_escape_filter($this->env, __("Playlists"), "js", null, true);
        echo "\",
                    playlistsTitle: \"";
        // line 776
        echo twig_escape_filter($this->env, __("Add Playlists"), "js", null, true);
        echo "\",
                    providerTitle: \"";
        // line 777
        echo twig_escape_filter($this->env, __("Provider: %obj%"), "js", null, true);
        echo "\",
                },
                window: {
                    drag: \"";
        // line 780
        echo twig_escape_filter($this->env, __("Move Window"), "js", null, true);
        echo "\",
                    close: \"";
        // line 781
        echo twig_escape_filter($this->env, __("Close Window"), "js", null, true);
        echo "\",
                    minimise: \"";
        // line 782
        echo twig_escape_filter($this->env, __("Minimise Window"), "js", null, true);
        echo "\",
                    newTab: \"";
        // line 783
        echo twig_escape_filter($this->env, __("New Tab"), "js", null, true);
        echo "\"
                },
                interactive: {
                    actions: {
                        nextLayout: \"";
        // line 787
        echo twig_escape_filter($this->env, __("Next Layout"), "js", null, true);
        echo "\",
                        previousLayout: \"";
        // line 788
        echo twig_escape_filter($this->env, __("Previous Layout"), "js", null, true);
        echo "\",
                        nextWidget: \"";
        // line 789
        echo twig_escape_filter($this->env, __("Next Widget"), "js", null, true);
        echo "\",
                        previousWidget: \"";
        // line 790
        echo twig_escape_filter($this->env, __("Previous Widget"), "js", null, true);
        echo "\",
                        navLayout: \"";
        // line 791
        echo twig_escape_filter($this->env, __("Navigate to Layout"), "js", null, true);
        echo "\",
                        navWidget: \"";
        // line 792
        echo twig_escape_filter($this->env, __("Navigate to Widget"), "js", null, true);
        echo "\",
                    },
                },
                widgets: \"";
        // line 795
        echo twig_escape_filter($this->env, __("Widgets"), "js", null, true);
        echo "\",
                dataWidgets: \"";
        // line 796
        echo twig_escape_filter($this->env, __("Data Widgets"), "js", null, true);
        echo "\",
                actions: \"";
        // line 797
        echo twig_escape_filter($this->env, __("Actions"), "js", null, true);
        echo "\",
                favourites: \"";
        // line 798
        echo twig_escape_filter($this->env, __("Favourites"), "js", null, true);
        echo "\",
                elements: \"";
        // line 799
        echo twig_escape_filter($this->env, __("Elements"), "js", null, true);
        echo "\",
                stencils: \"";
        // line 800
        echo twig_escape_filter($this->env, __("Stencils"), "js", null, true);
        echo "\",
                templates: \"";
        // line 801
        echo twig_escape_filter($this->env, __("Static Templates"), "js", null, true);
        echo "\",
                closeTab: \"";
        // line 802
        echo twig_escape_filter($this->env, __("Close content"), "js", null, true);
        echo "\",
                noWidgetsToShow: \"";
        // line 803
        echo twig_escape_filter($this->env, __("No widgets to display"), "js", null, true);
        echo "\",
                noActionsToShow: \"";
        // line 804
        echo twig_escape_filter($this->env, __("No actions to display"), "js", null, true);
        echo "\",
                noTemplatesToShow: \"";
        // line 805
        echo twig_escape_filter($this->env, __("No templates to display"), "js", null, true);
        echo "\",
                noMediaToShow: \"";
        // line 806
        echo twig_escape_filter($this->env, __("No media to display!"), "js", null, true);
        echo "\",
                noPlaylistsToShow: \"";
        // line 807
        echo twig_escape_filter($this->env, __("No playlists to display!"), "js", null, true);
        echo "\",
                showMore: \"";
        // line 808
        echo twig_escape_filter($this->env, __("Show more"), "js", null, true);
        echo "\",
                noShowMore: \"";
        // line 809
        echo twig_escape_filter($this->env, __("No more results for this filter!"), "js", null, true);
        echo "\",
                mediaPreview: {
                    close: \"";
        // line 811
        echo twig_escape_filter($this->env, __("Close Preview"), "js", null, true);
        echo "\",
                    change: \"";
        // line 812
        echo twig_escape_filter($this->env, __("Change window size"), "js", null, true);
        echo "\",
                    select: \"";
        // line 813
        echo twig_escape_filter($this->env, __("Select media to add"), "js", null, true);
        echo "\",
                    dimensions: \"";
        // line 814
        echo twig_escape_filter($this->env, __("Dimensions"), "js", null, true);
        echo "\",
                    size: \"";
        // line 815
        echo twig_escape_filter($this->env, __("Size"), "js", null, true);
        echo "\",
                },
                playlist: \"";
        // line 817
        echo twig_escape_filter($this->env, __("Playlist"), "js", null, true);
        echo "\",
                zone: \"";
        // line 818
        echo twig_escape_filter($this->env, __("Zone"), "js", null, true);
        echo "\",
                element: \"";
        // line 819
        echo twig_escape_filter($this->env, __("Element"), "js", null, true);
        echo "\",
                elementGroup: \"";
        // line 820
        echo twig_escape_filter($this->env, __("Element Group"), "js", null, true);
        echo "\",
                layout: \"";
        // line 821
        echo twig_escape_filter($this->env, __("Layout"), "js", null, true);
        echo "\",
                region: \"";
        // line 822
        echo twig_escape_filter($this->env, __("Zone"), "js", null, true);
        echo "\",
                layoutTemplatesMessage: \"";
        // line 823
        echo twig_escape_filter($this->env, __("Replace your Layout with a template?"), "js", null, true);
        echo "\",
                layoutExchangeTemplatesMessage: \"";
        // line 824
        echo twig_escape_filter($this->env, __("Replace your Layout with a %obj% template?"), "js", null, true);
        echo "\",
                isRequired: \"";
        // line 825
        echo twig_escape_filter($this->env, __("Required"), "js", null, true);
        echo "\",
                libraryTypes: {
                    image: \"";
        // line 827
        echo twig_escape_filter($this->env, __("Image"), "js", null, true);
        echo "\",
                    video: \"";
        // line 828
        echo twig_escape_filter($this->env, __("Video"), "js", null, true);
        echo "\",
                    audio: \"";
        // line 829
        echo twig_escape_filter($this->env, __("Audio"), "js", null, true);
        echo "\",
                    flash: \"";
        // line 830
        echo twig_escape_filter($this->env, __("Flash"), "js", null, true);
        echo "\",
                    htmlpackage: \"";
        // line 831
        echo twig_escape_filter($this->env, __("HTML Package"), "js", null, true);
        echo "\",
                    pdf: \"";
        // line 832
        echo twig_escape_filter($this->env, __("PDF"), "js", null, true);
        echo "\",
                    powerpoint: \"";
        // line 833
        echo twig_escape_filter($this->env, __("PowerPoint"), "js", null, true);
        echo "\",
                },
                mediaTable: {
                    mediaId: \"";
        // line 836
        echo twig_escape_filter($this->env, __("ID"), "js", null, true);
        echo "\",
                    mediaName: \"";
        // line 837
        echo twig_escape_filter($this->env, __("Name"), "js", null, true);
        echo "\",
                    mediaType: \"";
        // line 838
        echo twig_escape_filter($this->env, __("Type"), "js", null, true);
        echo "\",
                    mediaTags: \"";
        // line 839
        echo twig_escape_filter($this->env, __("Tags"), "js", null, true);
        echo "\",
                    mediaThumb: \"";
        // line 840
        echo twig_escape_filter($this->env, __("Thumbnail"), "js", null, true);
        echo "\",
                },
                placeholder: {
                    image: {
                        title: \"";
        // line 844
        echo twig_escape_filter($this->env, __("Placeholder"), "js", null, true);
        echo "\",
                        description: \"";
        // line 845
        echo twig_escape_filter($this->env, __("Use this item to be used as a placeholder to add images."), "js", null, true);
        echo "\",
                    }
                }
            };

            var topbarTrans = {
                name: \"";
        // line 851
        echo twig_escape_filter($this->env, __("Name"), "js", null, true);
        echo "\",
                nameDetail: \"";
        // line 852
        echo twig_escape_filter($this->env, __("Layout name"), "js", null, true);
        echo "\",
                duration: \"";
        // line 853
        echo twig_escape_filter($this->env, __("Duration"), "js", null, true);
        echo "\",
                durationDetail: \"";
        // line 854
        echo twig_escape_filter($this->env, __("Layout duration"), "js", null, true);
        echo "\",
                dimensions: \"";
        // line 855
        echo twig_escape_filter($this->env, __("Dimensions"), "js", null, true);
        echo "\",
                dimensionsDetail: \"";
        // line 856
        echo twig_escape_filter($this->env, __("Layout dimensions"), "js", null, true);
        echo "\",
                layoutActions: \"";
        // line 857
        echo twig_escape_filter($this->env, __("Layout Actions:"), "js", null, true);
        echo "\",
                onlyMyLayouts: \"";
        // line 858
        echo twig_escape_filter($this->env, __("My Layouts?"), "js", null, true);
        echo "\"
            };

            var historyManagerTrans = {
                revert: {
                    saveForm: \"";
        // line 863
        echo twig_escape_filter($this->env, __("Revert %target% save"), "js", null, true);
        echo "\",
                    order: \"";
        // line 864
        echo twig_escape_filter($this->env, __("Revert %target% order"), "js", null, true);
        echo "\",
                    transform: \"";
        // line 865
        echo twig_escape_filter($this->env, __("Revert %target% transformation"), "js", null, true);
        echo "\",
                    addWidget: \"";
        // line 866
        echo twig_escape_filter($this->env, __("Revert %target% creation"), "js", null, true);
        echo "\",
                    addMedia: \"";
        // line 867
        echo twig_escape_filter($this->env, __("Revert %target% assignment"), "js", null, true);
        echo "\",
                    create: \"";
        // line 868
        echo twig_escape_filter($this->env, __("Revert %target% creation"), "js", null, true);
        echo "\",
                    saveElements: \"";
        // line 869
        echo twig_escape_filter($this->env, __("Revert %target% elements change"), "js", null, true);
        echo "\"
                },
                target: {
                    widget: \"";
        // line 872
        echo twig_escape_filter($this->env, __("Widget"), "js", null, true);
        echo "\",
                    region: \"";
        // line 873
        echo twig_escape_filter($this->env, __("Region"), "js", null, true);
        echo "\",
                    canvas: \"";
        // line 874
        echo twig_escape_filter($this->env, __("Canvas"), "js", null, true);
        echo "\",
                    frame: \"";
        // line 875
        echo twig_escape_filter($this->env, __("Frame"), "js", null, true);
        echo "\",
                    zone: \"";
        // line 876
        echo twig_escape_filter($this->env, __("Zone"), "js", null, true);
        echo "\",
                    playlist: \"";
        // line 877
        echo twig_escape_filter($this->env, __("Playlist"), "js", null, true);
        echo "\",
                }
            };

            var layerManagerTrans = {
                title: \"";
        // line 882
        echo twig_escape_filter($this->env, __("Layers"), "js", null, true);
        echo "\",
                layer: \"";
        // line 883
        echo twig_escape_filter($this->env, __("Layer"), "js", null, true);
        echo "\",
                canvas: \"";
        // line 884
        echo twig_escape_filter($this->env, __("Canvas"), "js", null, true);
        echo "\",
                group: \"";
        // line 885
        echo twig_escape_filter($this->env, __("Group"), "js", null, true);
        echo "\",
                inGroup: \"";
        // line 886
        echo twig_escape_filter($this->env, __("In %groupId%"), "js", null, true);
        echo "\",
                name: \"";
        // line 887
        echo twig_escape_filter($this->env, __("Name"), "js", null, true);
        echo "\",
                template: \"";
        // line 888
        echo twig_escape_filter($this->env, __("Template"), "js", null, true);
        echo "\",
                duration: \"";
        // line 889
        echo twig_escape_filter($this->env, __("Duration"), "js", null, true);
        echo "\",
                emptyLayout: \"";
        // line 890
        echo twig_escape_filter($this->env, __("Empty layout"), "js", null, true);
        echo "\",
                expand: \"";
        // line 891
        echo twig_escape_filter($this->env, __("Expand"), "js", null, true);
        echo "\",
                shrink: \"";
        // line 892
        echo twig_escape_filter($this->env, __("Shrink"), "js", null, true);
        echo "\",
                playlist: \"";
        // line 893
        echo twig_escape_filter($this->env, __("Playlist"), "js", null, true);
        echo "\",
                zone: \"";
        // line 894
        echo twig_escape_filter($this->env, __("Zone"), "js", null, true);
        echo "\",
                layoutBackground: \"";
        // line 895
        echo twig_escape_filter($this->env, __("Layout Background"), "js", null, true);
        echo "\",
                invalidRegion: \"";
        // line 896
        echo twig_escape_filter($this->env, __("Invalid Region"), "js", null, true);
        echo "\",
                invalidRegionHelp: \"";
        // line 897
        echo twig_escape_filter($this->env, __("Region is invalid: Please delete it to validate the Layout!"), "js", null, true);
        echo "\",
            };

            var playlistAddFilesTrans = {
                uploadMessage: \"";
        // line 901
        echo twig_escape_filter($this->env, __("Replace"), "js", null, true);
        echo "\",
                addFiles: \"";
        // line 902
        echo twig_escape_filter($this->env, __("Add Replacement"), "js", null, true);
        echo "\",
                startUpload: \"";
        // line 903
        echo twig_escape_filter($this->env, __("Start Replace"), "js", null, true);
        echo "\",
                cancelUpload: \"";
        // line 904
        echo twig_escape_filter($this->env, __("Cancel Replace"), "js", null, true);
        echo "\",
                selectFolder: \"";
        // line 905
        echo twig_escape_filter($this->env, __("Select Folder"), "js", null, true);
        echo "\",
                selectFolderTitle: \"";
        // line 906
        echo twig_escape_filter($this->env, __("Change Current Folder location"), "js", null, true);
        echo "\",
                processing: \"";
        // line 907
        echo twig_escape_filter($this->env, __("Processing..."), "js", null, true);
        echo "\",
                updateInLayouts: {
                    title: \"";
        // line 909
        echo twig_escape_filter($this->env, __("Update this media in all layouts it is assigned to?"), "js", null, true);
        echo "\",
                    helpText: \"";
        // line 910
        echo twig_escape_filter($this->env, __("Note: It will only be updated in layouts you have permission to edit."), "js", null, true);
        echo "\"
                },
                deleteOldRevisions: {
                    title: \"";
        // line 913
        echo twig_escape_filter($this->env, __("Delete the old version?"), "js", null, true);
        echo "\",
                    helpText: \"";
        // line 914
        echo twig_escape_filter($this->env, __("Completely remove the old version of this media item if a new file is being uploaded."), "js", null, true);
        echo "\"
                },
                widgetExpiryDates: \"";
        // line 916
        echo twig_escape_filter($this->env, __("Set Expiry Dates"), "js", null, true);
        echo "\",
                widgetExpiryDatesMessage: \"";
        // line 917
        echo twig_escape_filter($this->env, __("Use the check box to set Start and End dates/times for media files and use the Start Upload button to apply to all files or the row upload button to upload individually."), "js", null, true);
        echo "\",
                widgetFromDtMessage: \"";
        // line 918
        echo twig_escape_filter($this->env, __("Select the start time for this widget"), "js", null, true);
        echo "\",
                widgetToDtMessage: \"";
        // line 919
        echo twig_escape_filter($this->env, __("Select the end time for this widget"), "js", null, true);
        echo "\",
                deleteOnExpiry: \"";
        // line 920
        echo twig_escape_filter($this->env, __("Delete on Expiry"), "js", null, true);
        echo "\",
                deleteOnExpiryMessage: \"";
        // line 921
        echo twig_escape_filter($this->env, __("When the End Time for this Widget passes should the Widget be removed from the Playlist?"), "js", null, true);
        echo "\",

            };

            var errorMessagesTrans = {
                error: \"";
        // line 926
        echo twig_escape_filter($this->env, __("ERROR"), "js", null, true);
        echo "\",
                loadingLayout: \"";
        // line 927
        echo twig_escape_filter($this->env, __("There was a problem loading the Layout!"), "js", null, true);
        echo "\",
                loadingPlaylist: \"";
        // line 928
        echo twig_escape_filter($this->env, __("There was a problem loading the Playlist!"), "js", null, true);
        echo "\",
                userSavePreferencesFailed: \"";
        // line 929
        echo twig_escape_filter($this->env, __("User save preferences failed!"), "js", null, true);
        echo "\",
                userLoadPreferencesFailed: \"";
        // line 930
        echo twig_escape_filter($this->env, __("User load preferences failed!"), "js", null, true);
        echo "\",
                libraryLoadFailed: \"";
        // line 931
        echo twig_escape_filter($this->env, __("Library load failed!"), "js", null, true);
        echo "\",
                formLoadFailed: \"";
        // line 932
        echo twig_escape_filter($this->env, __("Form load failed!"), "js", null, true);
        echo "\",
                convertPlaylistFailed: \"";
        // line 933
        echo twig_escape_filter($this->env, __("Convert playlist failed!"), "js", null, true);
        echo "\",
                convertPlaylistNoName: \"";
        // line 934
        echo twig_escape_filter($this->env, __("Playlist needs a name to be converted!"), "js", null, true);
        echo "\",
                revertFailed: \"";
        // line 935
        echo twig_escape_filter($this->env, __("Revert failed: %error%"), "js", null, true);
        echo "\",
                saveOrderFailed: \"";
        // line 936
        echo twig_escape_filter($this->env, __("Save order failed: %error%"), "js", null, true);
        echo "\",
                deleteFailed: \"";
        // line 937
        echo twig_escape_filter($this->env, __("Delete failed: %error%"), "js", null, true);
        echo "\",
                saveAllChangesFailed: \"";
        // line 938
        echo twig_escape_filter($this->env, __("Save all changes failed!"), "js", null, true);
        echo "\",
                removeAllChangesFailed: \"";
        // line 939
        echo twig_escape_filter($this->env, __("Remove all changes failed!!"), "js", null, true);
        echo "\",
                importingMediaFailed: \"";
        // line 940
        echo twig_escape_filter($this->env, __("Importing media failed!!"), "js", null, true);
        echo "\",
                addMediaFailed: \"";
        // line 941
        echo twig_escape_filter($this->env, __("Add media failed: %error%"), "js", null, true);
        echo "\",
                addModuleFailed: \"";
        // line 942
        echo twig_escape_filter($this->env, __("Add module failed: %error%"), "js", null, true);
        echo "\",
                createRegionFailed: \"";
        // line 943
        echo twig_escape_filter($this->env, __("Create region failed: %error%"), "js", null, true);
        echo "\",
                listOrderNotChanged: \"";
        // line 944
        echo twig_escape_filter($this->env, __("List order not Changed!"), "js", null, true);
        echo "\",
                playlistOrderSave: \"";
        // line 945
        echo twig_escape_filter($this->env, __("Playlist save order failed!"), "js", null, true);
        echo "\",
                getFormFailed: \"";
        // line 946
        echo twig_escape_filter($this->env, __("Get form failed!"), "js", null, true);
        echo "\",
                transformRegionFailed: \"";
        // line 947
        echo twig_escape_filter($this->env, __("Transform zone failed!"), "js", null, true);
        echo "\",
                previewFailed: \"";
        // line 948
        echo twig_escape_filter($this->env, __("Preview failed!"), "js", null, true);
        echo "\",
                noWidgetsNeedSaving: \"";
        // line 949
        echo twig_escape_filter($this->env, __("No widgets need saving!"), "js", null, true);
        echo "\",
                requiredField: \"";
        // line 950
        echo twig_escape_filter($this->env, __("Missing required property %property%"), "js", null, true);
        echo "\",
                unknown: \"";
        // line 951
        echo twig_escape_filter($this->env, __("Unknown Error"), "js", null, true);
        echo "\",
                invalidRegion: \"";
        // line 952
        echo twig_escape_filter($this->env, __("Region is invalid: Please delete it to validate the Layout!"), "js", null, true);
        echo "\",
                failedToImportMedia: \"";
        // line 953
        echo twig_escape_filter($this->env, __("Failed to import media!"), "js", null, true);
        echo "\",
                canvasWidgetNotShared: \"";
        // line 954
        echo twig_escape_filter($this->env, __("This Canvas is not shared with you with edit permission!"), "js", null, true);
        echo "\",
                getProvidersFailed: \"";
        // line 955
        echo twig_escape_filter($this->env, __("Failed to load media providers!"), "js", null, true);
        echo "\",
            };

            var widgetStatusTrans = {
                setToStart: \"";
        // line 959
        echo twig_escape_filter($this->env, __("Set to start"), "js", null, true);
        echo "\",
                setToExpire: \"";
        // line 960
        echo twig_escape_filter($this->env, __("Set to expire"), "js", null, true);
        echo "\",
                expired: \"";
        // line 961
        echo twig_escape_filter($this->env, __("Expired"), "js", null, true);
        echo "\",
                startTime: \"";
        // line 962
        echo twig_escape_filter($this->env, __("Start Time"), "js", null, true);
        echo "\",
                endTime: \"";
        // line 963
        echo twig_escape_filter($this->env, __("End Time"), "js", null, true);
        echo "\"
            };

            var datasetQueryBuilderTranslations = {
                ascTitle: \"";
        // line 967
        echo twig_escape_filter($this->env, __("Ascending"), "js", null, true);
        echo "\",
                descTitle: \"";
        // line 968
        echo twig_escape_filter($this->env, __("Descending"), "js", null, true);
        echo "\",
                filterOptions: [
                    {
                        id: \"starts-with\",
                        value: \"";
        // line 972
        echo twig_escape_filter($this->env, __("starts with"), "js", null, true);
        echo "\"
                    }, {
                        id: \"ends-with\",
                        value: \"";
        // line 975
        echo twig_escape_filter($this->env, __("ends with"), "js", null, true);
        echo "\"
                    }, {
                        id: \"contains\",
                        value: \"";
        // line 978
        echo twig_escape_filter($this->env, __("contains"), "js", null, true);
        echo "\"
                    }, {
                        id: \"equals\",
                        value: \"";
        // line 981
        echo twig_escape_filter($this->env, __("equals"), "js", null, true);
        echo "\"
                    }, {
                        id: \"not-starts-with\",
                        value: \"";
        // line 984
        echo twig_escape_filter($this->env, __("does not start with"), "js", null, true);
        echo "\"
                    }, {
                        id: \"not-ends-with\",
                        value: \"";
        // line 987
        echo twig_escape_filter($this->env, __("does not end with"), "js", null, true);
        echo "\"
                    }, {
                        id: \"not-contains\",
                        value: \"";
        // line 990
        echo twig_escape_filter($this->env, __("does not contain"), "js", null, true);
        echo "\"
                    }, {
                        id: \"not-equals\",
                        value: \"";
        // line 993
        echo twig_escape_filter($this->env, __("does not equal"), "js", null, true);
        echo "\"
                    }, {
                        id: \"greater-than\",
                        value: \"";
        // line 996
        echo twig_escape_filter($this->env, __("greater than"), "js", null, true);
        echo "\"
                    }, {
                        id: \"less-than\",
                        value: \"";
        // line 999
        echo twig_escape_filter($this->env, __("less than"), "js", null, true);
        echo "\"
                    }
                ],
                filterOperatorOptions: [
                    {
                        id: \"OR\",
                        value: \"";
        // line 1005
        echo twig_escape_filter($this->env, __("Or"), "js", null, true);
        echo "\"
                    }, {
                        id: \"AND\",
                        value: \"";
        // line 1008
        echo twig_escape_filter($this->env, __("And"), "js", null, true);
        echo "\"
                    }
                ]
            };

            var playlistMixerTranslations = {
                fillTitle: \"";
        // line 1014
        echo __("Fill");
        echo "\",
                fillHelpText: \"";
        // line 1015
        echo __("Fill - use the first Playlist to fill any remaining Spots");
        echo "\",
                padTitle: \"";
        // line 1016
        echo __("Pad");
        echo "\",
                padHelpText: \"";
        // line 1017
        echo __("Pad - use the first Playlist to pad any remaining Spots");
        echo "\",
                repeatTitle: \"";
        // line 1018
        echo __("Repeat");
        echo "\",
                repeatHelpText: \"";
        // line 1019
        echo __("Repeat - repeat the Widgets in this Playlist until the number of Spots have been filled");
        echo "\",
                playlists: \"";
        // line 1020
        echo __("Playlists");
        echo "\",
                spotsHelp: \"";
        // line 1021
        echo __("How many spots would you like on this Sub-Playlist? This is used before ordering to expand or shrink the list to the specified size. Leave empty to use the count of Widgets.");
        echo "\",
                spots: \"";
        // line 1022
        echo __("Spots");
        echo "\",
                spotsLengthHelp: \"";
        // line 1023
        echo __("Set the duration of all Widgets in the Playlist to a specific value in seconds. Leave empty to use each Widget duration.");
        echo "\",
                spotsLength: \"";
        // line 1024
        echo __("Spot Length");
        echo "\",
                spotsFillHelp: \"";
        // line 1025
        echo __("If there are not enough Widgets fill all spots, how should the remaining spots be filled?");
        echo "\",
                spotsFill: \"";
        // line 1026
        echo __("Spot Fill");
        echo "\",
                noPermission: \"";
        // line 1027
        echo __("You do not have access to this playlist");
        echo "\",
                playlistId: \"";
        // line 1028
        echo __("Playlist Id");
        echo "\",
            };

            var datasetColumnSelectorTranslations = {
                colAvailable: \"";
        // line 1032
        echo twig_escape_filter($this->env, __("Columns Available"), "js", null, true);
        echo "\",
                colSelected: \"";
        // line 1033
        echo twig_escape_filter($this->env, __("Columns Selected"), "js", null, true);
        echo "\",
            };

            var tickerTagSelectorTranslations = {
                tagsTitle: \"";
        // line 1037
        echo twig_escape_filter($this->env, __("Tags"), "js", null, true);
        echo "\",
                tagsHelp: \"";
        // line 1038
        echo twig_escape_filter($this->env, __("Drag tags to the right column so thy can be displayed on the marquee."), "js", null, true);
        echo "\",
                tagAvailable: \"";
        // line 1039
        echo twig_escape_filter($this->env, __("Available"), "js", null, true);
        echo "\",
                tagSelected: \"";
        // line 1040
        echo twig_escape_filter($this->env, __("Selected"), "js", null, true);
        echo "\",
                title: \"";
        // line 1041
        echo twig_escape_filter($this->env, __("Title"), "js", null, true);
        echo "\",
                summary: \"";
        // line 1042
        echo twig_escape_filter($this->env, __("Summary"), "js", null, true);
        echo "\",
                content: \"";
        // line 1043
        echo twig_escape_filter($this->env, __("Content"), "js", null, true);
        echo "\",
                author: \"";
        // line 1044
        echo twig_escape_filter($this->env, __("Author"), "js", null, true);
        echo "\",
                permalink: \"";
        // line 1045
        echo twig_escape_filter($this->env, __("Permalink"), "js", null, true);
        echo "\",
                link: \"";
        // line 1046
        echo twig_escape_filter($this->env, __("Link"), "js", null, true);
        echo "\",
                date: \"";
        // line 1047
        echo twig_escape_filter($this->env, __("Date"), "js", null, true);
        echo "\",
                publishedDate: \"";
        // line 1048
        echo twig_escape_filter($this->env, __("Published Date"), "js", null, true);
        echo "\",
                image: \"";
        // line 1049
        echo twig_escape_filter($this->env, __("Image"), "js", null, true);
        echo "\",
                form: {
                    fontFamily: \"";
        // line 1051
        echo twig_escape_filter($this->env, __("Font Family"), "js", null, true);
        echo "\",
                    fontColor: \"";
        // line 1052
        echo twig_escape_filter($this->env, __("Font Colour"), "js", null, true);
        echo "\",
                    fontSize: \"";
        // line 1053
        echo twig_escape_filter($this->env, __("Font Size"), "js", null, true);
        echo "\",
                    bold: \"";
        // line 1054
        echo twig_escape_filter($this->env, __("Bold"), "js", null, true);
        echo "\",
                    italics: \"";
        // line 1055
        echo twig_escape_filter($this->env, __("Italics"), "js", null, true);
        echo "\",
                    underline: \"";
        // line 1056
        echo twig_escape_filter($this->env, __("Underline"), "js", null, true);
        echo "\",
                    dateFormat: \"";
        // line 1057
        echo twig_escape_filter($this->env, __("Date Format"), "js", null, true);
        echo "\",
                    opacity: \"";
        // line 1058
        echo twig_escape_filter($this->env, __("Opacity"), "js", null, true);
        echo "\",
                    width: \"";
        // line 1059
        echo twig_escape_filter($this->env, __("Width"), "js", null, true);
        echo "\",
                    height: \"";
        // line 1060
        echo twig_escape_filter($this->env, __("Height"), "js", null, true);
        echo "\",
                }
            };

            var fallbackDataTrans = {
                message:  \"";
        // line 1065
        echo twig_escape_filter($this->env, __("Fallback data for this Data Widget can be provided below and included according to the property \"Show fallback data\". Fallback data will be shown with the same appearance as data returned from the source, and can be edited using the form below."), "js", null, true);
        echo "\",
                addNewRecord: \"";
        // line 1066
        echo twig_escape_filter($this->env, __("Add New"), "js", null, true);
        echo "\",
                saveRecord: \"";
        // line 1067
        echo twig_escape_filter($this->env, __("Save"), "js", null, true);
        echo "\",
                editRecord: \"";
        // line 1068
        echo twig_escape_filter($this->env, __("Edit"), "js", null, true);
        echo "\",
                deleteRecord: \"";
        // line 1069
        echo twig_escape_filter($this->env, __("Delete"), "js", null, true);
        echo "\",
                fallbackTypeTitle: \"";
        // line 1070
        echo twig_escape_filter($this->env, __("Show fallback data"), "js", null, true);
        echo "\",
                fallbackTypeHelpText: \"";
        // line 1071
        echo twig_escape_filter($this->env, __("If provided, when should we show fallback data for this Widget?"), "js", null, true);
        echo "\",
                never: \"";
        // line 1072
        echo twig_escape_filter($this->env, __("Never"), "js", null, true);
        echo "\",
                always: \"";
        // line 1073
        echo twig_escape_filter($this->env, __("Always"), "js", null, true);
        echo "\",
                empty: \"";
        // line 1074
        echo twig_escape_filter($this->env, __("When no data is returned"), "js", null, true);
        echo "\",
                error: \"";
        // line 1075
        echo twig_escape_filter($this->env, __("When there is an error"), "js", null, true);
        echo "\",
                noData: \"";
        // line 1076
        echo twig_escape_filter($this->env, __("Undefined"), "js", null, true);
        echo "\",
                invalidRecordEmpty: \"";
        // line 1077
        echo twig_escape_filter($this->env, __("Please fill out all least one field!"), "js", null, true);
        echo "\",
                invalidRecordRequired: \"";
        // line 1078
        echo twig_escape_filter($this->env, __("Please fill out all the required fields!"), "js", null, true);
        echo "\",
                requiredField: \"";
        // line 1079
        echo twig_escape_filter($this->env, __("Required Field!"), "js", null, true);
        echo "\",
            };

            var datasetColStyleSelectorTranslations = {
                colAvailable: \"";
        // line 1083
        echo twig_escape_filter($this->env, __("Columns Available"), "js", null, true);
        echo "\",
                colSelected: \"";
        // line 1084
        echo twig_escape_filter($this->env, __("Columns Selected"), "js", null, true);
        echo "\",
                title: \"";
        // line 1085
        echo twig_escape_filter($this->env, __("Title"), "js", null, true);
        echo "\",
                summary: \"";
        // line 1086
        echo twig_escape_filter($this->env, __("Summary"), "js", null, true);
        echo "\",
                content: \"";
        // line 1087
        echo twig_escape_filter($this->env, __("Content"), "js", null, true);
        echo "\",
                author: \"";
        // line 1088
        echo twig_escape_filter($this->env, __("Author"), "js", null, true);
        echo "\",
                permalink: \"";
        // line 1089
        echo twig_escape_filter($this->env, __("Permalink"), "js", null, true);
        echo "\",
                link: \"";
        // line 1090
        echo twig_escape_filter($this->env, __("Link"), "js", null, true);
        echo "\",
                date: \"";
        // line 1091
        echo twig_escape_filter($this->env, __("Date"), "js", null, true);
        echo "\",
                publishedDate: \"";
        // line 1092
        echo twig_escape_filter($this->env, __("Published Date"), "js", null, true);
        echo "\",
                image: \"";
        // line 1093
        echo twig_escape_filter($this->env, __("Image"), "js", null, true);
        echo "\",
                form: {
                    fontFamily: \"";
        // line 1095
        echo twig_escape_filter($this->env, __("Font Family"), "js", null, true);
        echo "\",
                    fontColor: \"";
        // line 1096
        echo twig_escape_filter($this->env, __("Font Colour"), "js", null, true);
        echo "\",
                    fontSize: \"";
        // line 1097
        echo twig_escape_filter($this->env, __("Font Size"), "js", null, true);
        echo "\",
                    bold: \"";
        // line 1098
        echo twig_escape_filter($this->env, __("Bold"), "js", null, true);
        echo "\",
                    italics: \"";
        // line 1099
        echo twig_escape_filter($this->env, __("Italics"), "js", null, true);
        echo "\",
                    underline: \"";
        // line 1100
        echo twig_escape_filter($this->env, __("Underline"), "js", null, true);
        echo "\",
                    dateFormat: \"";
        // line 1101
        echo twig_escape_filter($this->env, __("Date Format"), "js", null, true);
        echo "\",
                    opacity: \"";
        // line 1102
        echo twig_escape_filter($this->env, __("Opacity"), "js", null, true);
        echo "\",
                    width: \"";
        // line 1103
        echo twig_escape_filter($this->env, __("Width"), "js", null, true);
        echo "\",
                    height: \"";
        // line 1104
        echo twig_escape_filter($this->env, __("Height"), "js", null, true);
        echo "\",
                }
            };

            var actionsTranslations = {
                tableHeaders: {
                    name: \"";
        // line 1110
        echo twig_escape_filter($this->env, __("Actions"), "js", null, true);
        echo "\",
                    id: \"";
        // line 1111
        echo twig_escape_filter($this->env, __("Id"), "js", null, true);
        echo "\",
                    ownerId: \"";
        // line 1112
        echo twig_escape_filter($this->env, __("Owner Id"), "js", null, true);
        echo "\",
                    triggerType: \"";
        // line 1113
        echo twig_escape_filter($this->env, __("Trigger Type"), "js", null, true);
        echo "\",
                    triggerCode: \"";
        // line 1114
        echo twig_escape_filter($this->env, __("Trigger Code"), "js", null, true);
        echo "\",
                    actionType: \"";
        // line 1115
        echo twig_escape_filter($this->env, __("Action Type"), "js", null, true);
        echo "\",
                    target: \"";
        // line 1116
        echo twig_escape_filter($this->env, __("Target Type"), "js", null, true);
        echo "\",
                    targetId: \"";
        // line 1117
        echo twig_escape_filter($this->env, __("Target"), "js", null, true);
        echo "\",
                    widgetId: \"";
        // line 1118
        echo twig_escape_filter($this->env, __("Widget"), "js", null, true);
        echo "\",
                    layoutCode: \"";
        // line 1119
        echo twig_escape_filter($this->env, __("Layout Code"), "js", null, true);
        echo "\",
                },
                button: {
                    name: \"";
        // line 1122
        echo twig_escape_filter($this->env, __("Add Action"), "js", null, true);
        echo "\",
                    description: \"";
        // line 1123
        echo twig_escape_filter($this->env, __("Click to Add a new Action"), "js", null, true);
        echo "\"
                }
            };

            var menuBoardTranslations = {
                maxNumElementsPerZone: \"";
        // line 1128
        echo twig_escape_filter($this->env, __("There can only be one category per zone!"), "js", null, true);
        echo "\",
            };

            var effectsTranslations = {
                all: \"";
        // line 1132
        echo twig_escape_filter($this->env, __("All"), "js", null, true);
        echo "\",
                showAll: \"";
        // line 1133
        echo twig_escape_filter($this->env, __("Show All"), "js", null, true);
        echo "\",
                showPaged: \"";
        // line 1134
        echo twig_escape_filter($this->env, __("Show Paged"), "js", null, true);
        echo "\",
                none: \"";
        // line 1135
        echo twig_escape_filter($this->env, __("None"), "js", null, true);
        echo "\",
                noTransition: \"";
        // line 1136
        echo twig_escape_filter($this->env, __("No Transition"), "js", null, true);
        echo "\",
                marqueeLeft: \"";
        // line 1137
        echo twig_escape_filter($this->env, __("Marquee Left"), "js", null, true);
        echo "\",
                marqueeRight: \"";
        // line 1138
        echo twig_escape_filter($this->env, __("Marquee Right"), "js", null, true);
        echo "\",
                marqueeUp: \"";
        // line 1139
        echo twig_escape_filter($this->env, __("Marquee Up"), "js", null, true);
        echo "\",
                marqueeDown: \"";
        // line 1140
        echo twig_escape_filter($this->env, __("Marquee Down"), "js", null, true);
        echo "\",
                fade: \"";
        // line 1141
        echo twig_escape_filter($this->env, __("Fade"), "js", null, true);
        echo "\",
                fadeout: \"";
        // line 1142
        echo twig_escape_filter($this->env, __("Fade Out"), "js", null, true);
        echo "\",
                scrollHorz: \"";
        // line 1143
        echo twig_escape_filter($this->env, __("Scroll Horizontal"), "js", null, true);
        echo "\",
                scrollVert: \"";
        // line 1144
        echo twig_escape_filter($this->env, __("Scroll Vertical"), "js", null, true);
        echo "\",
                flipHorz: \"";
        // line 1145
        echo twig_escape_filter($this->env, __("Flip Horizontal"), "js", null, true);
        echo "\",
                flipVert: \"";
        // line 1146
        echo twig_escape_filter($this->env, __("Flip Vertical"), "js", null, true);
        echo "\",
                shuffle: \"";
        // line 1147
        echo twig_escape_filter($this->env, __("Shuffle"), "js", null, true);
        echo "\",
                tileSlide: \"";
        // line 1148
        echo twig_escape_filter($this->env, __("Tile Slide"), "js", null, true);
        echo "\",
                tileBlind: \"";
        // line 1149
        echo twig_escape_filter($this->env, __("Tile Blind"), "js", null, true);
        echo "\",
            };

            var playlistEditorTrans = {
                duration: toolbarTrans.duration,
                editPlaylistTitle: \"";
        // line 1154
        echo twig_escape_filter($this->env, __("Edit Playlist - %playlistName% - "), "js", null, true);
        echo "\",
                widgetsCount: \"";
        // line 1155
        echo twig_escape_filter($this->env, __("Widgets count"), "js", null, true);
        echo "\",
                editingSourcePlaylist: \"";
        // line 1156
        echo twig_escape_filter($this->env, __("Editing source playlist %playlistName% "), "js", null, true);
        echo "\",
                zoomControls: {
                    in: \"";
        // line 1158
        echo twig_escape_filter($this->env, __("Zoom In"), "js", null, true);
        echo "\",
                    out: \"";
        // line 1159
        echo twig_escape_filter($this->env, __("Zoom Out"), "js", null, true);
        echo "\",
                    default: \"";
        // line 1160
        echo twig_escape_filter($this->env, __("Default zoom"), "js", null, true);
        echo "\",
                    scaleMode: \"";
        // line 1161
        echo twig_escape_filter($this->env, __("Change scale mode"), "js", null, true);
        echo "\",
                },
                externalPlaylistMessage: \"";
        // line 1163
        echo twig_escape_filter($this->env, __("Your changes will apply anywhere this Playlist is used."), "js", null, true);
        echo "\",
            };

            var deleteModalTrans = {
                playlist: {
                    title: \"";
        // line 1168
        echo twig_escape_filter($this->env, __("Delete Playlist"), "js", null, true);
        echo "\",
                    message: \"";
        // line 1169
        echo twig_escape_filter($this->env, __("Are you sure you want to delete a non-empty Playlist?"), "js", null, true);
        echo "\",
                },
                region: {
                    title: \"";
        // line 1172
        echo twig_escape_filter($this->env, __("Delete Region"), "js", null, true);
        echo "\",
                    message: \"";
        // line 1173
        echo twig_escape_filter($this->env, __("Are you sure you want to delete this region?"), "js", null, true);
        echo "\",
                },
                widget: {
                    title: \"";
        // line 1176
        echo twig_escape_filter($this->env, __("Delete Widget"), "js", null, true);
        echo "\",
                    message: \"";
        // line 1177
        echo twig_escape_filter($this->env, __("Are you sure you want to delete this widget?"), "js", null, true);
        echo "\",
                },
                element: {
                    title: \"";
        // line 1180
        echo twig_escape_filter($this->env, __("Delete Element"), "js", null, true);
        echo "\",
                    message: \"";
        // line 1181
        echo twig_escape_filter($this->env, __("Are you sure you want to delete this element? Widget will also be deleted and configuration will be lost."), "js", null, true);
        echo "\",
                },
                elementGroup: {
                    title: \"";
        // line 1184
        echo twig_escape_filter($this->env, __("Delete Element Group"), "js", null, true);
        echo "\",
                    message: \"";
        // line 1185
        echo twig_escape_filter($this->env, __("Are you sure you want to delete this element group? Widget will also be deleted and configuration will be lost."), "js", null, true);
        echo "\",
                },
                multiple: {
                    title: \"";
        // line 1188
        echo twig_escape_filter($this->env, __("Delete all selected objects?"), "js", null, true);
        echo "\",
                    message: \"";
        // line 1189
        echo twig_escape_filter($this->env, __("Are you sure you want to delete all selected objects? Widgets might also be deleted and configuration will be lost."), "js", null, true);
        echo "\",
                },
            };

            var momentLocalesTrans = {
                \"af\": \"";
        // line 1194
        echo twig_escape_filter($this->env, __("Afrikaans"), "js", null, true);
        echo "\",
                \"ar-dz\": \"";
        // line 1195
        echo twig_escape_filter($this->env, __("Arabic (Algeria)"), "js", null, true);
        echo "\",
                \"ar-kw\": \"";
        // line 1196
        echo twig_escape_filter($this->env, __("Arabic (Kuwait)"), "js", null, true);
        echo "\",
                \"ar-ly\": \"";
        // line 1197
        echo twig_escape_filter($this->env, __("Arabic (Libya)"), "js", null, true);
        echo "\",
                \"ar-ma\": \"";
        // line 1198
        echo twig_escape_filter($this->env, __("Arabic (Morocco)"), "js", null, true);
        echo "\",
                \"ar-sa\": \"";
        // line 1199
        echo twig_escape_filter($this->env, __("Arabic (Saudi Arabia)"), "js", null, true);
        echo "\",
                \"ar-tn\": \"";
        // line 1200
        echo twig_escape_filter($this->env, __("Arabic (Tunisia)"), "js", null, true);
        echo "\",
                \"ar\": \"";
        // line 1201
        echo twig_escape_filter($this->env, __("Arabic"), "js", null, true);
        echo "\",
                \"az\": \"";
        // line 1202
        echo twig_escape_filter($this->env, __("Azerbaijani"), "js", null, true);
        echo "\",  
                \"be\": \"";
        // line 1203
        echo twig_escape_filter($this->env, __("Belarusian"), "js", null, true);
        echo "\",
                \"bg\": \"";
        // line 1204
        echo twig_escape_filter($this->env, __("Bulgarian"), "js", null, true);
        echo "\",
                \"bm\": \"";
        // line 1205
        echo twig_escape_filter($this->env, __("Bambara"), "js", null, true);
        echo "\",
                \"bn-bd\": \"";
        // line 1206
        echo twig_escape_filter($this->env, __("Bengali (Bangladesh)"), "js", null, true);
        echo "\",
                \"bn\": \"";
        // line 1207
        echo twig_escape_filter($this->env, __("Bengali"), "js", null, true);
        echo "\",
                \"bo\": \"";
        // line 1208
        echo twig_escape_filter($this->env, __("Tibetan"), "js", null, true);
        echo "\",
                \"br\": \"";
        // line 1209
        echo twig_escape_filter($this->env, __("Breton"), "js", null, true);
        echo "\",
                \"bs\": \"";
        // line 1210
        echo twig_escape_filter($this->env, __("Bosnian"), "js", null, true);
        echo "\",    
                \"ca\": \"";
        // line 1211
        echo twig_escape_filter($this->env, __("Catalan"), "js", null, true);
        echo "\",
                \"cs\": \"";
        // line 1212
        echo twig_escape_filter($this->env, __("Czech"), "js", null, true);
        echo "\",
                \"cv\": \"";
        // line 1213
        echo twig_escape_filter($this->env, __("Chuvash"), "js", null, true);
        echo "\",
                \"cy\": \"";
        // line 1214
        echo twig_escape_filter($this->env, __("Welsh"), "js", null, true);
        echo "\",   
                \"da\": \"";
        // line 1215
        echo twig_escape_filter($this->env, __("Danish"), "js", null, true);
        echo "\",
                \"de-at\": \"";
        // line 1216
        echo twig_escape_filter($this->env, __("German (Austria)"), "js", null, true);
        echo "\",  
                \"de-ch\": \"";
        // line 1217
        echo twig_escape_filter($this->env, __("German (Switzerland)"), "js", null, true);
        echo "\",
                \"de\": \"";
        // line 1218
        echo twig_escape_filter($this->env, __("German"), "js", null, true);
        echo "\",
                \"dv\": \"";
        // line 1219
        echo twig_escape_filter($this->env, __("Divehi"), "js", null, true);
        echo "\", 
                \"el\": \"";
        // line 1220
        echo twig_escape_filter($this->env, __("Greek"), "js", null, true);
        echo "\",
                \"en\": \"";
        // line 1221
        echo twig_escape_filter($this->env, __("English"), "js", null, true);
        echo "\",
                \"en-au\": \"";
        // line 1222
        echo twig_escape_filter($this->env, __("English (Australia)"), "js", null, true);
        echo "\",
                \"en-ca\": \"";
        // line 1223
        echo twig_escape_filter($this->env, __("English (Canada)"), "js", null, true);
        echo "\",
                \"en-gb\": \"";
        // line 1224
        echo twig_escape_filter($this->env, __("English (United Kingdom)"), "js", null, true);
        echo "\",
                \"en-GB\": \"";
        // line 1225
        echo twig_escape_filter($this->env, __("English (United Kingdom)"), "js", null, true);
        echo "\",
                \"en-ie\": \"";
        // line 1226
        echo twig_escape_filter($this->env, __("English (Ireland)"), "js", null, true);
        echo "\",
                \"en-il\": \"";
        // line 1227
        echo twig_escape_filter($this->env, __("English (Israel)"), "js", null, true);
        echo "\",
                \"en-in\": \"";
        // line 1228
        echo twig_escape_filter($this->env, __("English (India)"), "js", null, true);
        echo "\",
                \"en-nz\": \"";
        // line 1229
        echo twig_escape_filter($this->env, __("English (New Zealand)"), "js", null, true);
        echo "\",  
                \"en-sg\": \"";
        // line 1230
        echo twig_escape_filter($this->env, __("English (Singapore)"), "js", null, true);
        echo "\",  
                \"eo\": \"";
        // line 1231
        echo twig_escape_filter($this->env, __("Esperanto"), "js", null, true);
        echo "\",
                \"es-do\": \"";
        // line 1232
        echo twig_escape_filter($this->env, __("Spanish (Dominican Republic)"), "js", null, true);
        echo "\",
                \"es-mx\": \"";
        // line 1233
        echo twig_escape_filter($this->env, __("Spanish (Mexico)"), "js", null, true);
        echo "\", 
                \"es-us\": \"";
        // line 1234
        echo twig_escape_filter($this->env, __("Spanish (United States)"), "js", null, true);
        echo "\",
                \"es\": \"";
        // line 1235
        echo twig_escape_filter($this->env, __("Spanish"), "js", null, true);
        echo "\",
                \"et\": \"";
        // line 1236
        echo twig_escape_filter($this->env, __("Estonian"), "js", null, true);
        echo "\",
                \"eu\": \"";
        // line 1237
        echo twig_escape_filter($this->env, __("Basque"), "js", null, true);
        echo "\",    
                \"fa\": \"";
        // line 1238
        echo twig_escape_filter($this->env, __("Persian"), "js", null, true);
        echo "\",
                \"fi\": \"";
        // line 1239
        echo twig_escape_filter($this->env, __("Finnish"), "js", null, true);
        echo "\",
                \"fil\": \"";
        // line 1240
        echo twig_escape_filter($this->env, __("Filipino"), "js", null, true);
        echo "\",
                \"fo\": \"";
        // line 1241
        echo twig_escape_filter($this->env, __("Faroese"), "js", null, true);
        echo "\",
                \"fr-ca\": \"";
        // line 1242
        echo twig_escape_filter($this->env, __("French (Canada)"), "js", null, true);
        echo "\",
                \"fr-ch\": \"";
        // line 1243
        echo twig_escape_filter($this->env, __("French (Switzerland)"), "js", null, true);
        echo "\",
                \"fr\": \"";
        // line 1244
        echo twig_escape_filter($this->env, __("French"), "js", null, true);
        echo "\",
                \"fy\": \"";
        // line 1245
        echo twig_escape_filter($this->env, __("Western Frisian"), "js", null, true);
        echo "\",
                \"gd\": \"";
        // line 1246
        echo twig_escape_filter($this->env, __("Scottish Gaelic"), "js", null, true);
        echo "\",
                \"gl\": \"";
        // line 1247
        echo twig_escape_filter($this->env, __("Galician"), "js", null, true);
        echo "\",
                \"gom-latn\": \"";
        // line 1248
        echo twig_escape_filter($this->env, __("gom (Latin)"), "js", null, true);
        echo "\",
                \"gu\": \"";
        // line 1249
        echo twig_escape_filter($this->env, __("Gujarati"), "js", null, true);
        echo "\", 
                \"he\": \"";
        // line 1250
        echo twig_escape_filter($this->env, __("Hebrew"), "js", null, true);
        echo "\",
                \"hi\": \"";
        // line 1251
        echo twig_escape_filter($this->env, __("Hindi"), "js", null, true);
        echo "\",
                \"hr\": \"";
        // line 1252
        echo twig_escape_filter($this->env, __("Croatian"), "js", null, true);
        echo "\",
                \"hu\": \"";
        // line 1253
        echo twig_escape_filter($this->env, __("Hungarian"), "js", null, true);
        echo "\",
                \"hy-am\": \"";
        // line 1254
        echo twig_escape_filter($this->env, __("Armenian (Armenia)"), "js", null, true);
        echo "\", 
                \"id\": \"";
        // line 1255
        echo twig_escape_filter($this->env, __("Indonesian"), "js", null, true);
        echo "\",
                \"is\": \"";
        // line 1256
        echo twig_escape_filter($this->env, __("Icelandic"), "js", null, true);
        echo "\",
                \"it-ch\": \"";
        // line 1257
        echo twig_escape_filter($this->env, __("Italian (Switzerland)"), "js", null, true);
        echo "\",
                \"it\": \"";
        // line 1258
        echo twig_escape_filter($this->env, __("Italian"), "js", null, true);
        echo "\", 
                \"ja\": \"";
        // line 1259
        echo twig_escape_filter($this->env, __("Japanese"), "js", null, true);
        echo "\",
                \"jv\": \"";
        // line 1260
        echo twig_escape_filter($this->env, __("Javanese"), "js", null, true);
        echo "\", 
                \"ka\": \"";
        // line 1261
        echo twig_escape_filter($this->env, __("Georgian"), "js", null, true);
        echo "\",
                \"kk\": \"";
        // line 1262
        echo twig_escape_filter($this->env, __("Kazakh"), "js", null, true);
        echo "\",
                \"km\": \"";
        // line 1263
        echo twig_escape_filter($this->env, __("Khmer"), "js", null, true);
        echo "\",
                \"kn\": \"";
        // line 1264
        echo twig_escape_filter($this->env, __("Kannada"), "js", null, true);
        echo "\",
                \"ko\": \"";
        // line 1265
        echo twig_escape_filter($this->env, __("Korean"), "js", null, true);
        echo "\",
                \"ku\": \"";
        // line 1266
        echo twig_escape_filter($this->env, __("Kurdish"), "js", null, true);
        echo "\",
                \"ky\": \"";
        // line 1267
        echo twig_escape_filter($this->env, __("Kirghiz"), "js", null, true);
        echo "\", 
                \"lb\": \"";
        // line 1268
        echo twig_escape_filter($this->env, __("Luxembourgish"), "js", null, true);
        echo "\",
                \"lo\": \"";
        // line 1269
        echo twig_escape_filter($this->env, __("Lao"), "js", null, true);
        echo "\",
                \"lt\": \"";
        // line 1270
        echo twig_escape_filter($this->env, __("Lithuanian"), "js", null, true);
        echo "\",
                \"lv\": \"";
        // line 1271
        echo twig_escape_filter($this->env, __("Latvian"), "js", null, true);
        echo "\",
                \"me\": \"";
        // line 1272
        echo twig_escape_filter($this->env, __("Montenegrin"), "js", null, true);
        echo "\",
                \"mi\": \"";
        // line 1273
        echo twig_escape_filter($this->env, __("Maori"), "js", null, true);
        echo "\",
                \"mk\": \"";
        // line 1274
        echo twig_escape_filter($this->env, __("Macedonian"), "js", null, true);
        echo "\",
                \"ml\": \"";
        // line 1275
        echo twig_escape_filter($this->env, __("Malayalam"), "js", null, true);
        echo "\",
                \"mn\": \"";
        // line 1276
        echo twig_escape_filter($this->env, __("Mongolian"), "js", null, true);
        echo "\",
                \"mr\": \"";
        // line 1277
        echo twig_escape_filter($this->env, __("Marathi"), "js", null, true);
        echo "\", 
                \"ms-my\": \"";
        // line 1278
        echo twig_escape_filter($this->env, __("Malay (Malaysia)"), "js", null, true);
        echo "\",
                \"ms\": \"";
        // line 1279
        echo twig_escape_filter($this->env, __("Malay"), "js", null, true);
        echo "\",
                \"mt\": \"";
        // line 1280
        echo twig_escape_filter($this->env, __("Maltese"), "js", null, true);
        echo "\",
                \"my\": \"";
        // line 1281
        echo twig_escape_filter($this->env, __("Burmese"), "js", null, true);
        echo "\",
                \"nb\": \"";
        // line 1282
        echo twig_escape_filter($this->env, __("Norwegian Bokmål"), "js", null, true);
        echo "\",
                \"ne\": \"";
        // line 1283
        echo twig_escape_filter($this->env, __("Nepali"), "js", null, true);
        echo "\", 
                \"nl-be\": \"";
        // line 1284
        echo twig_escape_filter($this->env, __("Dutch (Belgium)"), "js", null, true);
        echo "\",
                \"nl\": \"";
        // line 1285
        echo twig_escape_filter($this->env, __("Dutch"), "js", null, true);
        echo "\",
                \"nn\": \"";
        // line 1286
        echo twig_escape_filter($this->env, __("Norwegian Nynorsk"), "js", null, true);
        echo "\", 
                \"pa-in\": \"";
        // line 1287
        echo twig_escape_filter($this->env, __("Punjabi (India)"), "js", null, true);
        echo "\", 
                \"pl\": \"";
        // line 1288
        echo twig_escape_filter($this->env, __("Polish"), "js", null, true);
        echo "\",
                \"pt-br\": \"";
        // line 1289
        echo twig_escape_filter($this->env, __("Portuguese (Brazil)"), "js", null, true);
        echo "\", 
                \"pt\": \"";
        // line 1290
        echo twig_escape_filter($this->env, __("Portuguese"), "js", null, true);
        echo "\", 
                \"ro\": \"";
        // line 1291
        echo twig_escape_filter($this->env, __("Romanian"), "js", null, true);
        echo "\",
                \"ru\": \"";
        // line 1292
        echo twig_escape_filter($this->env, __("Russian"), "js", null, true);
        echo "\",  
                \"sd\": \"";
        // line 1293
        echo twig_escape_filter($this->env, __("Sindhi"), "js", null, true);
        echo "\",
                \"se\": \"";
        // line 1294
        echo twig_escape_filter($this->env, __("Northern Sami"), "js", null, true);
        echo "\",
                \"si\": \"";
        // line 1295
        echo twig_escape_filter($this->env, __("Sinhala"), "js", null, true);
        echo "\",
                \"sk\": \"";
        // line 1296
        echo twig_escape_filter($this->env, __("Slovak"), "js", null, true);
        echo "\",
                \"sl\": \"";
        // line 1297
        echo twig_escape_filter($this->env, __("Slovenian"), "js", null, true);
        echo "\",  
                \"sq\": \"";
        // line 1298
        echo twig_escape_filter($this->env, __("Albanian"), "js", null, true);
        echo "\",
                \"sr-cyrl\": \"";
        // line 1299
        echo twig_escape_filter($this->env, __("Serbian (Cyrillic)"), "js", null, true);
        echo "\",
                \"sr\": \"";
        // line 1300
        echo twig_escape_filter($this->env, __("Serbian"), "js", null, true);
        echo "\",
                \"ss\": \"";
        // line 1301
        echo twig_escape_filter($this->env, __("Swati"), "js", null, true);
        echo "\",
                \"sv\": \"";
        // line 1302
        echo twig_escape_filter($this->env, __("Swedish"), "js", null, true);
        echo "\",
                \"sw\": \"";
        // line 1303
        echo twig_escape_filter($this->env, __("Swahili"), "js", null, true);
        echo "\",  
                \"ta\": \"";
        // line 1304
        echo twig_escape_filter($this->env, __("Tamil"), "js", null, true);
        echo "\",
                \"te\": \"";
        // line 1305
        echo twig_escape_filter($this->env, __("Telugu"), "js", null, true);
        echo "\",
                \"tet\": \"";
        // line 1306
        echo twig_escape_filter($this->env, __("Tetum"), "js", null, true);
        echo "\",
                \"tg\": \"";
        // line 1307
        echo twig_escape_filter($this->env, __("Tajik"), "js", null, true);
        echo "\",
                \"th\": \"";
        // line 1308
        echo twig_escape_filter($this->env, __("Thai"), "js", null, true);
        echo "\", 
                \"tk\": \"";
        // line 1309
        echo twig_escape_filter($this->env, __("Turkmen"), "js", null, true);
        echo "\", 
                \"tl-ph\": \"";
        // line 1310
        echo twig_escape_filter($this->env, __("Tagalog (Philippines)"), "js", null, true);
        echo "\",
                \"tlh\": \"";
        // line 1311
        echo twig_escape_filter($this->env, __("Klingon"), "js", null, true);
        echo "\",
                \"tr\": \"";
        // line 1312
        echo twig_escape_filter($this->env, __("Turkish"), "js", null, true);
        echo "\", 
                \"tzl\": \"";
        // line 1313
        echo twig_escape_filter($this->env, __("Talossan"), "js", null, true);
        echo "\", 
                \"tzm-latn\": \"";
        // line 1314
        echo twig_escape_filter($this->env, __("Central Atlas Tamazight (Latin)"), "js", null, true);
        echo "\",
                \"tzm\": \"";
        // line 1315
        echo twig_escape_filter($this->env, __("Central Atlas Tamazight"), "js", null, true);
        echo "\",   
                \"ug-cn\": \"";
        // line 1316
        echo twig_escape_filter($this->env, __("Uyghur (China)"), "js", null, true);
        echo "\", 
                \"uk\": \"";
        // line 1317
        echo twig_escape_filter($this->env, __("Ukrainian"), "js", null, true);
        echo "\", 
                \"ur\": \"";
        // line 1318
        echo twig_escape_filter($this->env, __("Urdu"), "js", null, true);
        echo "\",
                \"uz-latn\": \"";
        // line 1319
        echo twig_escape_filter($this->env, __("Uzbek (Latin)"), "js", null, true);
        echo "\",
                \"uz\": \"";
        // line 1320
        echo twig_escape_filter($this->env, __("Uzbek"), "js", null, true);
        echo "\",  
                \"vi\": \"";
        // line 1321
        echo twig_escape_filter($this->env, __("Vietnamese"), "js", null, true);
        echo "\",  
                \"x-pseudo\": \"";
        // line 1322
        echo twig_escape_filter($this->env, __("Pseudo"), "js", null, true);
        echo "\",  
                \"yo\": \"";
        // line 1323
        echo twig_escape_filter($this->env, __("Yoruba (Nigeria)"), "js", null, true);
        echo "\",  
                \"zh-cn\": \"";
        // line 1324
        echo twig_escape_filter($this->env, __("Chinese (China)"), "js", null, true);
        echo "\",
                \"zh-hk\": \"";
        // line 1325
        echo twig_escape_filter($this->env, __("Chinese (Hong Kong)"), "js", null, true);
        echo "\",  
                \"zh-mo\": \"";
        // line 1326
        echo twig_escape_filter($this->env, __("Chinese (Macau)"), "js", null, true);
        echo "\",
                \"zh-tw\": \"";
        // line 1327
        echo twig_escape_filter($this->env, __("Chinese (Taiwan)"), "js", null, true);
        echo "\",
            };
        ";
        // line 1330
        echo "    </script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "common.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  3869 => 1330,  3864 => 1327,  3860 => 1326,  3856 => 1325,  3852 => 1324,  3848 => 1323,  3844 => 1322,  3840 => 1321,  3836 => 1320,  3832 => 1319,  3828 => 1318,  3824 => 1317,  3820 => 1316,  3816 => 1315,  3812 => 1314,  3808 => 1313,  3804 => 1312,  3800 => 1311,  3796 => 1310,  3792 => 1309,  3788 => 1308,  3784 => 1307,  3780 => 1306,  3776 => 1305,  3772 => 1304,  3768 => 1303,  3764 => 1302,  3760 => 1301,  3756 => 1300,  3752 => 1299,  3748 => 1298,  3744 => 1297,  3740 => 1296,  3736 => 1295,  3732 => 1294,  3728 => 1293,  3724 => 1292,  3720 => 1291,  3716 => 1290,  3712 => 1289,  3708 => 1288,  3704 => 1287,  3700 => 1286,  3696 => 1285,  3692 => 1284,  3688 => 1283,  3684 => 1282,  3680 => 1281,  3676 => 1280,  3672 => 1279,  3668 => 1278,  3664 => 1277,  3660 => 1276,  3656 => 1275,  3652 => 1274,  3648 => 1273,  3644 => 1272,  3640 => 1271,  3636 => 1270,  3632 => 1269,  3628 => 1268,  3624 => 1267,  3620 => 1266,  3616 => 1265,  3612 => 1264,  3608 => 1263,  3604 => 1262,  3600 => 1261,  3596 => 1260,  3592 => 1259,  3588 => 1258,  3584 => 1257,  3580 => 1256,  3576 => 1255,  3572 => 1254,  3568 => 1253,  3564 => 1252,  3560 => 1251,  3556 => 1250,  3552 => 1249,  3548 => 1248,  3544 => 1247,  3540 => 1246,  3536 => 1245,  3532 => 1244,  3528 => 1243,  3524 => 1242,  3520 => 1241,  3516 => 1240,  3512 => 1239,  3508 => 1238,  3504 => 1237,  3500 => 1236,  3496 => 1235,  3492 => 1234,  3488 => 1233,  3484 => 1232,  3480 => 1231,  3476 => 1230,  3472 => 1229,  3468 => 1228,  3464 => 1227,  3460 => 1226,  3456 => 1225,  3452 => 1224,  3448 => 1223,  3444 => 1222,  3440 => 1221,  3436 => 1220,  3432 => 1219,  3428 => 1218,  3424 => 1217,  3420 => 1216,  3416 => 1215,  3412 => 1214,  3408 => 1213,  3404 => 1212,  3400 => 1211,  3396 => 1210,  3392 => 1209,  3388 => 1208,  3384 => 1207,  3380 => 1206,  3376 => 1205,  3372 => 1204,  3368 => 1203,  3364 => 1202,  3360 => 1201,  3356 => 1200,  3352 => 1199,  3348 => 1198,  3344 => 1197,  3340 => 1196,  3336 => 1195,  3332 => 1194,  3324 => 1189,  3320 => 1188,  3314 => 1185,  3310 => 1184,  3304 => 1181,  3300 => 1180,  3294 => 1177,  3290 => 1176,  3284 => 1173,  3280 => 1172,  3274 => 1169,  3270 => 1168,  3262 => 1163,  3257 => 1161,  3253 => 1160,  3249 => 1159,  3245 => 1158,  3240 => 1156,  3236 => 1155,  3232 => 1154,  3224 => 1149,  3220 => 1148,  3216 => 1147,  3212 => 1146,  3208 => 1145,  3204 => 1144,  3200 => 1143,  3196 => 1142,  3192 => 1141,  3188 => 1140,  3184 => 1139,  3180 => 1138,  3176 => 1137,  3172 => 1136,  3168 => 1135,  3164 => 1134,  3160 => 1133,  3156 => 1132,  3149 => 1128,  3141 => 1123,  3137 => 1122,  3131 => 1119,  3127 => 1118,  3123 => 1117,  3119 => 1116,  3115 => 1115,  3111 => 1114,  3107 => 1113,  3103 => 1112,  3099 => 1111,  3095 => 1110,  3086 => 1104,  3082 => 1103,  3078 => 1102,  3074 => 1101,  3070 => 1100,  3066 => 1099,  3062 => 1098,  3058 => 1097,  3054 => 1096,  3050 => 1095,  3045 => 1093,  3041 => 1092,  3037 => 1091,  3033 => 1090,  3029 => 1089,  3025 => 1088,  3021 => 1087,  3017 => 1086,  3013 => 1085,  3009 => 1084,  3005 => 1083,  2998 => 1079,  2994 => 1078,  2990 => 1077,  2986 => 1076,  2982 => 1075,  2978 => 1074,  2974 => 1073,  2970 => 1072,  2966 => 1071,  2962 => 1070,  2958 => 1069,  2954 => 1068,  2950 => 1067,  2946 => 1066,  2942 => 1065,  2934 => 1060,  2930 => 1059,  2926 => 1058,  2922 => 1057,  2918 => 1056,  2914 => 1055,  2910 => 1054,  2906 => 1053,  2902 => 1052,  2898 => 1051,  2893 => 1049,  2889 => 1048,  2885 => 1047,  2881 => 1046,  2877 => 1045,  2873 => 1044,  2869 => 1043,  2865 => 1042,  2861 => 1041,  2857 => 1040,  2853 => 1039,  2849 => 1038,  2845 => 1037,  2838 => 1033,  2834 => 1032,  2827 => 1028,  2823 => 1027,  2819 => 1026,  2815 => 1025,  2811 => 1024,  2807 => 1023,  2803 => 1022,  2799 => 1021,  2795 => 1020,  2791 => 1019,  2787 => 1018,  2783 => 1017,  2779 => 1016,  2775 => 1015,  2771 => 1014,  2762 => 1008,  2756 => 1005,  2747 => 999,  2741 => 996,  2735 => 993,  2729 => 990,  2723 => 987,  2717 => 984,  2711 => 981,  2705 => 978,  2699 => 975,  2693 => 972,  2686 => 968,  2682 => 967,  2675 => 963,  2671 => 962,  2667 => 961,  2663 => 960,  2659 => 959,  2652 => 955,  2648 => 954,  2644 => 953,  2640 => 952,  2636 => 951,  2632 => 950,  2628 => 949,  2624 => 948,  2620 => 947,  2616 => 946,  2612 => 945,  2608 => 944,  2604 => 943,  2600 => 942,  2596 => 941,  2592 => 940,  2588 => 939,  2584 => 938,  2580 => 937,  2576 => 936,  2572 => 935,  2568 => 934,  2564 => 933,  2560 => 932,  2556 => 931,  2552 => 930,  2548 => 929,  2544 => 928,  2540 => 927,  2536 => 926,  2528 => 921,  2524 => 920,  2520 => 919,  2516 => 918,  2512 => 917,  2508 => 916,  2503 => 914,  2499 => 913,  2493 => 910,  2489 => 909,  2484 => 907,  2480 => 906,  2476 => 905,  2472 => 904,  2468 => 903,  2464 => 902,  2460 => 901,  2453 => 897,  2449 => 896,  2445 => 895,  2441 => 894,  2437 => 893,  2433 => 892,  2429 => 891,  2425 => 890,  2421 => 889,  2417 => 888,  2413 => 887,  2409 => 886,  2405 => 885,  2401 => 884,  2397 => 883,  2393 => 882,  2385 => 877,  2381 => 876,  2377 => 875,  2373 => 874,  2369 => 873,  2365 => 872,  2359 => 869,  2355 => 868,  2351 => 867,  2347 => 866,  2343 => 865,  2339 => 864,  2335 => 863,  2327 => 858,  2323 => 857,  2319 => 856,  2315 => 855,  2311 => 854,  2307 => 853,  2303 => 852,  2299 => 851,  2290 => 845,  2286 => 844,  2279 => 840,  2275 => 839,  2271 => 838,  2267 => 837,  2263 => 836,  2257 => 833,  2253 => 832,  2249 => 831,  2245 => 830,  2241 => 829,  2237 => 828,  2233 => 827,  2228 => 825,  2224 => 824,  2220 => 823,  2216 => 822,  2212 => 821,  2208 => 820,  2204 => 819,  2200 => 818,  2196 => 817,  2191 => 815,  2187 => 814,  2183 => 813,  2179 => 812,  2175 => 811,  2170 => 809,  2166 => 808,  2162 => 807,  2158 => 806,  2154 => 805,  2150 => 804,  2146 => 803,  2142 => 802,  2138 => 801,  2134 => 800,  2130 => 799,  2126 => 798,  2122 => 797,  2118 => 796,  2114 => 795,  2108 => 792,  2104 => 791,  2100 => 790,  2096 => 789,  2092 => 788,  2088 => 787,  2081 => 783,  2077 => 782,  2073 => 781,  2069 => 780,  2063 => 777,  2059 => 776,  2055 => 775,  2051 => 774,  2047 => 773,  2043 => 772,  2039 => 771,  2035 => 770,  2031 => 769,  2027 => 768,  2023 => 767,  2019 => 766,  2015 => 765,  2011 => 764,  2007 => 763,  2003 => 762,  1999 => 761,  1995 => 760,  1991 => 759,  1987 => 758,  1981 => 755,  1977 => 754,  1973 => 753,  1967 => 750,  1963 => 749,  1959 => 748,  1953 => 745,  1949 => 744,  1945 => 743,  1941 => 742,  1937 => 741,  1933 => 740,  1929 => 739,  1925 => 738,  1921 => 737,  1916 => 735,  1911 => 733,  1907 => 732,  1903 => 731,  1899 => 730,  1895 => 729,  1891 => 728,  1887 => 727,  1883 => 726,  1879 => 725,  1874 => 723,  1870 => 722,  1866 => 721,  1862 => 720,  1858 => 719,  1854 => 718,  1850 => 717,  1846 => 716,  1842 => 715,  1838 => 714,  1834 => 713,  1830 => 712,  1826 => 711,  1822 => 710,  1818 => 709,  1814 => 708,  1810 => 707,  1806 => 706,  1802 => 705,  1794 => 700,  1790 => 699,  1786 => 698,  1782 => 697,  1778 => 696,  1774 => 695,  1769 => 693,  1765 => 692,  1761 => 691,  1757 => 690,  1753 => 689,  1748 => 687,  1742 => 684,  1738 => 683,  1734 => 682,  1730 => 681,  1722 => 676,  1718 => 675,  1714 => 674,  1710 => 673,  1706 => 672,  1702 => 671,  1698 => 670,  1694 => 669,  1690 => 668,  1686 => 667,  1682 => 666,  1678 => 665,  1674 => 664,  1668 => 661,  1664 => 660,  1660 => 659,  1656 => 658,  1652 => 657,  1648 => 656,  1644 => 655,  1640 => 654,  1636 => 653,  1632 => 652,  1628 => 651,  1624 => 650,  1620 => 649,  1616 => 648,  1612 => 647,  1608 => 646,  1604 => 645,  1600 => 644,  1596 => 643,  1592 => 642,  1588 => 641,  1584 => 640,  1580 => 639,  1574 => 636,  1570 => 635,  1566 => 634,  1562 => 633,  1558 => 632,  1554 => 631,  1550 => 630,  1546 => 629,  1542 => 628,  1538 => 627,  1534 => 626,  1530 => 625,  1526 => 624,  1520 => 621,  1516 => 620,  1512 => 619,  1508 => 618,  1504 => 617,  1500 => 616,  1496 => 615,  1492 => 614,  1488 => 613,  1484 => 612,  1480 => 611,  1476 => 610,  1472 => 609,  1468 => 608,  1464 => 607,  1458 => 604,  1454 => 603,  1450 => 602,  1446 => 601,  1442 => 600,  1438 => 599,  1434 => 598,  1430 => 597,  1426 => 596,  1422 => 595,  1418 => 594,  1414 => 593,  1410 => 592,  1406 => 591,  1402 => 590,  1398 => 589,  1394 => 588,  1390 => 587,  1386 => 586,  1382 => 585,  1378 => 584,  1374 => 583,  1370 => 582,  1366 => 581,  1362 => 580,  1358 => 579,  1353 => 577,  1349 => 576,  1345 => 575,  1341 => 574,  1337 => 573,  1331 => 570,  1327 => 569,  1323 => 568,  1318 => 566,  1314 => 565,  1310 => 564,  1305 => 562,  1301 => 561,  1296 => 559,  1292 => 558,  1288 => 557,  1284 => 556,  1279 => 554,  1275 => 553,  1271 => 552,  1267 => 551,  1263 => 550,  1259 => 549,  1255 => 548,  1251 => 547,  1247 => 546,  1243 => 545,  1239 => 544,  1235 => 543,  1231 => 542,  1227 => 541,  1223 => 540,  1219 => 539,  1215 => 538,  1211 => 537,  1207 => 536,  1203 => 535,  1199 => 534,  1195 => 533,  1191 => 532,  1187 => 531,  1183 => 530,  1179 => 529,  1175 => 528,  1171 => 527,  1164 => 523,  1160 => 522,  1156 => 521,  1152 => 520,  1148 => 519,  1144 => 518,  1140 => 517,  1136 => 516,  1132 => 515,  1128 => 514,  1124 => 513,  1120 => 512,  1116 => 511,  1112 => 510,  1108 => 509,  1104 => 508,  1100 => 507,  1096 => 506,  1092 => 505,  1088 => 504,  1084 => 503,  1080 => 502,  1076 => 501,  1072 => 500,  1068 => 499,  1064 => 498,  1060 => 497,  1053 => 493,  1049 => 492,  1045 => 491,  1041 => 490,  1037 => 489,  1033 => 488,  1029 => 487,  1025 => 486,  1021 => 485,  1017 => 484,  1013 => 483,  1009 => 482,  1005 => 481,  1001 => 480,  997 => 479,  993 => 478,  989 => 477,  985 => 476,  981 => 475,  974 => 471,  970 => 470,  965 => 468,  961 => 467,  957 => 466,  953 => 465,  949 => 464,  945 => 463,  938 => 459,  934 => 458,  929 => 456,  925 => 455,  917 => 450,  913 => 449,  908 => 447,  904 => 446,  899 => 444,  895 => 443,  891 => 442,  887 => 441,  883 => 440,  878 => 438,  874 => 437,  870 => 436,  866 => 435,  862 => 434,  858 => 433,  854 => 432,  850 => 431,  846 => 430,  842 => 429,  838 => 428,  834 => 427,  830 => 426,  826 => 425,  822 => 424,  818 => 423,  814 => 422,  810 => 421,  806 => 420,  802 => 419,  798 => 418,  794 => 417,  790 => 416,  786 => 415,  782 => 414,  778 => 413,  774 => 412,  770 => 411,  766 => 409,  757 => 402,  748 => 396,  739 => 390,  730 => 384,  721 => 378,  714 => 374,  705 => 368,  696 => 362,  689 => 358,  682 => 354,  675 => 350,  666 => 344,  659 => 340,  652 => 336,  643 => 330,  636 => 326,  627 => 320,  620 => 316,  613 => 312,  606 => 308,  597 => 302,  590 => 298,  583 => 294,  576 => 290,  569 => 286,  562 => 282,  555 => 278,  546 => 272,  539 => 268,  532 => 264,  522 => 257,  515 => 253,  508 => 249,  501 => 245,  494 => 241,  486 => 236,  479 => 232,  472 => 228,  465 => 224,  458 => 220,  451 => 216,  444 => 212,  437 => 208,  430 => 204,  423 => 200,  416 => 196,  409 => 192,  402 => 188,  395 => 184,  386 => 178,  379 => 174,  372 => 170,  364 => 165,  357 => 161,  350 => 157,  342 => 152,  333 => 146,  327 => 143,  318 => 137,  311 => 133,  304 => 129,  297 => 125,  290 => 121,  283 => 117,  276 => 113,  269 => 109,  262 => 105,  256 => 102,  250 => 99,  244 => 96,  237 => 92,  230 => 88,  223 => 84,  216 => 80,  209 => 76,  202 => 72,  195 => 68,  188 => 64,  181 => 60,  174 => 56,  167 => 52,  160 => 48,  153 => 44,  146 => 40,  139 => 35,  130 => 33,  126 => 32,  121 => 29,  117 => 27,  114 => 26,  112 => 25,  105 => 21,  101 => 20,  96 => 18,  88 => 17,  80 => 16,  76 => 15,  72 => 14,  68 => 13,  64 => 12,  60 => 11,  56 => 10,  52 => 9,  45 => 6,  38 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "common.twig", "/var/www/html/cms_ubi/views/common.twig");
    }
}
