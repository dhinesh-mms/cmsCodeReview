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

/* media-manager-page.twig */
class __TwigTemplate_024a5c315a88ec6fef8f3b2e20cf6ec3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageContent' => [$this, 'block_pageContent'],
            'javaScript' => [$this, 'block_javaScript'],
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "media-manager-page.twig", 9)->unwrap();
        // line 8
        $this->parent = $this->loadTemplate("authed.twig", "media-manager-page.twig", 8);
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
            $__internal_compile_0 =             $this->loadTemplate("theme-dashboard-message.twig", "media-manager-page.twig", 12);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display($context);
        }
        // line 13
        echo "    <div class=\"row\">
        <div class=\"col-md-6 col-12\">
            <div class=\"row\">
                <div class=\"col-6\">
                    <div class=\"widget\">
                        <div class=\"widget-body p-3 p-xl-2\">
                            <div class=\"widget-icon green pull-left\">
                                <i class=\"fa fa-users\"></i>
                            </div>
                            <div class=\"widget-content pull-left\">
                                <div class=\"title\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["library"] ?? null), "countOf", [], "any", false, false, false, 23), "html", null, true);
        echo "</div>
                                <div class=\"comment\">";
        // line 24
        echo __("Library Count");
        echo "</div>
                            </div>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-6\">
                    <div class=\"widget\">
                        <div class=\"widget-body p-3 p-xl-2\">
                            <div class=\"widget-icon red pull-left\">
                                <i class=\"fa fa-tasks\"></i>
                            </div>
                            <div class=\"widget-content pull-left\">
                                <div class=\"title\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["library"] ?? null), "size", [], "any", false, false, false, 37), "html", null, true);
        echo "</div>
                                <div class=\"comment\">";
        // line 38
        echo __("Library Size");
        echo "</div>
                            </div>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"widget\">
                        <div class=\"widget-title\">
                            <i class=\"fa fa-tasks\"></i>
                            ";
        // line 50
        echo __("Number of media items");
        // line 51
        echo "                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"widget-body medium no-padding\">
                            <canvas id=\"libraryCountChart\" style=\"clear:both;\" width=\"350\" height=\"220\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"widget\">
                        <div class=\"widget-title\">
                            <i class=\"fa fa-tasks\"></i>
                            ";
        // line 64
        echo __("Size of media items");
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["library"] ?? null), "typesSuffix", [], "any", false, false, false, 64), "html", null, true);
        echo "
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"widget-body medium no-padding\">
                            <canvas id=\"librarySizeChart\" style=\"clear:both;\" width=\"350\" height=\"220\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-6 col-12\">
            ";
        // line 75
        if (((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "SETTING_LIBRARY_TIDY_ENABLED", [], "any", false, false, false, 75) == 1) && twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["library.modify"], "method", false, false, false, 75))) {
            // line 76
            echo "                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"widget\">
                            <div class=\"widget-body p-3 p-xl-2 widget-button XiboFormButton\" href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.tidy.form"), "html", null, true);
            echo "\">
                                <div class=\"widget-icon red pull-left\">
                                    <i class=\"fa fa-trash\"></i>
                                </div>
                                <div class=\"widget-content pull-left\">
                                    <div class=\"title\">
                                        ";
            // line 85
            echo __("Tidy library");
            // line 86
            echo "                                    </div>
                                    <div class=\"comment\">";
            // line 87
            echo __("Run through the library and remove unused and unnecessary files");
            echo "</div>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 95
        echo "            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"widget\">
                        <div class=\"widget-title\">
                            <i class=\"fa fa-video\"></i>
                            ";
        // line 100
        echo __("Unused media");
        // line 101
        echo "                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"widget-body medium no-padding\">
                            <div class=\"table\">
                                <table id=\"datatable-unused-media\" class=\"table\">
                                    <thead>
                                    <tr>
                                        <th>";
        // line 108
        echo __("ID");
        echo "</th>
                                        <th>";
        // line 109
        echo __("Name");
        echo "</th>
                                        <th>";
        // line 110
        echo __("Type");
        echo "</th>
                                        <th>";
        // line 111
        echo __("Size");
        echo "</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"widget\">
                        <div class=\"widget-title\">
                            <i class=\"fa fa-video\"></i>
                            ";
        // line 128
        echo __("Unreleased media");
        // line 129
        echo "                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"widget-body medium no-padding\">
                            <div class=\"table\">
                                <table id=\"datatable-unreleased-media\" class=\"table\">
                                    <thead>
                                    <tr>
                                        <th>";
        // line 136
        echo __("ID");
        echo "</th>
                                        <th>";
        // line 137
        echo __("Name");
        echo "</th>
                                        <th>";
        // line 138
        echo __("Filename");
        echo "</th>
                                        <th>";
        // line 139
        echo __("Reason");
        echo "</th>
                                        <th>";
        // line 140
        echo __("Widget cache?");
        echo "</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 156
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 157
        echo "    <script type=\"text/javascript\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">
      const stringToColour = function(str) {
        let hash = 0;
        str.split('').forEach(char => {
          hash = char.charCodeAt(0) + ((hash << 5) - hash);
        });
        let colour = '#';
        for (let i = 0; i < 3; i++) {
          const value = (hash >> (i * 8)) & 0xff
          colour += value.toString(16).padStart(2, '0');
        }
        return colour;
      }

      \$(document).ready(function() {
        // Library chart
        // -------------
        const libraryData = ";
        // line 174
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["library"] ?? null), "types", [], "any", false, false, false, 174));
        echo ";
        let dataCount = new Array();
        let dataSize = new Array();
        let colours = new Array();
        let labels = new Array();
        \$.each(libraryData, function (i, e) {
          dataSize.push(Math.round(e.size / Math.pow(1024, ";
        // line 180
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["library"] ?? null), "typesBase", [], "any", false, false, false, 180), "html", null, true);
        echo "), 2));
          dataCount.push(e.count);
          labels.push(e.title);
          colours.push(stringToColour(e.title));
        });
        const librarySizeChart = new Chart(\$(\"#librarySizeChart\"), {
          type: 'pie',
          data: {
            datasets: [{
              data: dataSize,
              backgroundColor: colours
            }],
            labels: labels
          },
          options: {
            maintainAspectRatio: false
          }
        });
        const libraryCountChart = new Chart(\$(\"#libraryCountChart\"), {
          type: 'pie',
          data: {
            datasets: [{
              data: dataCount,
              backgroundColor: colours
            }],
            labels: labels
          },
          options: {
            maintainAspectRatio: false
          }
        });

        // Tables
        let language = dataTablesLanguage;

        // Unused media
        // ----------------
        language.emptyTable = '";
        // line 217
        echo twig_escape_filter($this->env, __("No unused media in the Library"), "html", null, true);
        echo "';
        const dataTableUnusedMedia = \$('#datatable-unused-media').DataTable({
          language: language,
          serverSide: true,
          stateSave: true,
          responsive: true,
          stateDuration: 0,
          stateLoadCallback: dataTableStateLoadCallback,
          stateSaveCallback: dataTableStateSaveCallback,
          filter: false,
          searchDelay: 3000,
          order: [[3, 'desc']],
          ajax: {
            url: '";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search"), "html", null, true);
        echo "',
            data: function (dataToSend) {
              dataToSend.unusedOnly = 1;
              return dataToSend;
            },
          },
          lengthChange: false,
          columns: [
            {data: 'mediaId'},
            {data: 'name'},
            {data: 'mediaType'},
            {
              data: 'fileSize',
              render: function (data, type, row) {
                if (type !== 'display') {
                  return data;
                }

                return row.fileSizeFormatted;
              }
            },
          ]
        });
        dataTableUnusedMedia.on('processing.dt', dataTableProcessing);

        // Unreleased media
        // ----------------
        language.emptyTable = '";
        // line 257
        echo twig_escape_filter($this->env, __("No unreleased media in the Library"), "html", null, true);
        echo "';
        const dataTableUnreleasedMedia = \$('#datatable-unreleased-media').DataTable({
          language: language,
          serverSide: true,
          stateSave: true,
          responsive: true,
          stateDuration: 0,
          stateLoadCallback: dataTableStateLoadCallback,
          stateSaveCallback: dataTableStateSaveCallback,
          filter: false,
          searchDelay: 3000,
          order: [[1, 'asc']],
          ajax: {
            url: '";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search"), "html", null, true);
        echo "',
            data: function (dataToSend) {
              dataToSend.unreleasedOnly = 1;
              return dataToSend;
            },
          },
          lengthChange: false,
          columns: [
            {data: 'mediaId'},
            {data: 'name'},
            {data: 'fileName'},
            {data: 'releasedDescription'},
            {
              data: 'mediaType',
              data: function(data, type) {
                const icon = data === 'module' ? 'tick' : 'times';
                return '<span class=\"fa ' + icon + '\"></span>';
              },
            },
          ]
        });
        dataTableUnreleasedMedia.on('processing.dt', dataTableProcessing);
      });
    </script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "media-manager-page.twig";
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
        return array (  413 => 270,  397 => 257,  367 => 230,  351 => 217,  311 => 180,  302 => 174,  281 => 157,  277 => 156,  258 => 140,  254 => 139,  250 => 138,  246 => 137,  242 => 136,  233 => 129,  231 => 128,  211 => 111,  207 => 110,  203 => 109,  199 => 108,  190 => 101,  188 => 100,  181 => 95,  170 => 87,  167 => 86,  165 => 85,  156 => 79,  151 => 76,  149 => 75,  133 => 64,  118 => 51,  116 => 50,  101 => 38,  97 => 37,  81 => 24,  77 => 23,  65 => 13,  54 => 12,  50 => 11,  45 => 8,  43 => 9,  36 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "media-manager-page.twig", "/var/www/html/cms_ubi/views/media-manager-page.twig");
    }
}
