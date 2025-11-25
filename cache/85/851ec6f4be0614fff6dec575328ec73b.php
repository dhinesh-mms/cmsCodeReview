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

/* template-page.twig */
class __TwigTemplate_25e923525b7cfe737e9ead623c38874d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'actionMenu' => [$this, 'block_actionMenu'],
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "template-page.twig", 9)->unwrap();
        // line 8
        $this->parent = $this->loadTemplate("authed.twig", "template-page.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("Templates"), "html", null, true);
        echo " | ";
    }

    // line 13
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <div class=\"widget-action-menu pull-right\">
        ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["template.add"], "method", false, false, false, 15)) {
            // line 16
            echo "            <button class=\"btn btn-success XiboFormButton btns\" title=\"";
            echo __("Add a new Template and jump to the layout editor.");
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("template.add.form"), "html", null, true);
            echo "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
            echo __("Add Template");
            echo "</button>
        ";
        }
        // line 18
        echo "        <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
        echo __("Refresh the Table");
        echo "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
    </div>
";
    }

    // line 22
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 24
        echo __("Templates");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"templateView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 30
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 31
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_inputNameGrid", ["template", ($context["title"] ?? null)], 31, $context, $this->getSourceContext());
        echo "

                            ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 33)) {
            // line 34
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("Tags");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 35
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("Exact match?");
            $context["exactTagTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 36
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("When filtering by multiple Tags, which logical operator should be used?");
            $context["logicalOperatorTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 37
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("A comma separated list of tags to filter by. Enter a tag|tag value to filter tags with values. Enter --no-tag to filter all items without tags. Enter - before a tag or tag value to exclude from results.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 38
            echo "                                ";
            echo twig_call_macro($macros["inline"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), null, ($context["helpText"] ?? null), null, null, null, "exactTags", ($context["exactTagTitle"] ?? null), ($context["logicalOperatorTitle"] ?? null)], 38, $context, $this->getSourceContext());
            echo "
                            ";
        }
        // line 40
        echo "
                            ";
        // line 41
        echo twig_call_macro($macros["inline"], "macro_hidden", ["folderId"], 41, $context, $this->getSourceContext());
        echo "
                        </form>
                    </div>
                </div>
                <div class=\"grid-with-folders-container\">
                    <div class=\"grid-folder-tree-container p-3\" id=\"grid-folder-filter\">
                        <input id=\"jstree-search\" class=\"form-control\" type=\"text\" placeholder=\"";
        // line 47
        echo __("Search");
        echo "\">
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"folder-tree-clear-selection-button\">
                            <label class=\"form-check-label\" for=\"folder-tree-clear-selection-button\" title=\"";
        // line 50
        echo __("Search in all folders");
        echo "\">";
        echo __("All Folders");
        echo "</label>
                        </div>
                        <div class=\"folder-search-no-results d-none\">
                            <p>";
        // line 53
        echo __("No Folders matching the search term");
        echo "</p>
                        </div>
                        <div id=\"container-folder-tree\"></div>
                    </div>
                    <div class=\"folder-controller d-none\">
                        <button type=\"button\" id=\"folder-tree-select-folder-button\" class=\"btn btn-outline-secondary\" title=\"";
        // line 58
        echo __("Open / Close Folder Search options");
        echo "\"><i class=\"fas fa-folder fa-1x\"></i></button>
                        <div id=\"breadcrumbs\" class=\"mt-2 pl-2\"></div>
                    </div>
                    <div id=\"datatable-container\">
                        <div class=\"XiboData card py-3\">
                            <table id=\"templates\" class=\"table table-striped\" data-content-type=\"layout\" data-content-id-name=\"layoutId\" data-state-preference-name=\"templateGrid\" style=\"width: 100%;\">
                                <thead>
                                    <tr>
                                        <th>";
        // line 66
        echo __("Name");
        echo "</th>
                                        <th>";
        // line 67
        echo __("Status");
        echo "</th>
                                        <th>";
        // line 68
        echo __("Owner");
        echo "</th>
                                        <th>";
        // line 69
        echo __("Description");
        echo "</th>
                                        ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 70)) {
            echo "<th>";
            echo __("Tags");
            echo "</th>";
        }
        // line 71
        echo "                                        <th>";
        echo __("Orientation");
        echo "</th>
                                        <th>";
        // line 72
        echo __("Thumbnail");
        echo "</th>
                                        <th>";
        // line 73
        echo __("Sharing");
        echo "</th>
                                        <th class=\"rowMenu\"></th>
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
";
    }

    // line 89
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        echo "    <script type=\"text/javascript\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 91
        if ( !twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 91)) {
            // line 92
            echo "            disableFolders();
        ";
        }
        // line 94
        echo "        var table = \$(\"#templates\").DataTable({
            \"language\": dataTablesLanguage,
            dom: dataTablesTemplate,
            serverSide: true,
            stateSave: true,
            stateDuration: 0,
            responsive: true,
            stateLoadCallback: dataTableStateLoadCallback,
            stateSaveCallback: dataTableStateSaveCallback,
            filter: false,
            searchDelay: 3000,
            \"order\": [[ 1, \"asc\"]],
            ajax: {
                \"url\": \"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("template.search"), "html", null, true);
        echo "\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#templates\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"layout\", responsivePriority: 2},
                {
                    \"name\": \"publishedStatus\",
                    responsivePriority: 2,
                    \"data\": function (data, type) {
                        if (data.publishedDate != null) {
                            var now = moment();
                            var published = moment(data.publishedDate);
                            var differenceMinutes = published.diff(now, 'minutes');
                            var momentDifference = moment(now).to(published);

                            if (differenceMinutes < -5) {
                                return data.publishedStatus.concat(\" - \", translations.publishedStatusFailed);
                            } else {
                                return data.publishedStatus.concat(\" - \", translations.publishedStatusFuture + \" \" + momentDifference);
                            }
                        } else {
                            return data.publishedStatus;
                        }

                    }
                },
                { \"data\": \"owner\", responsivePriority: 3},
                {
                    \"name\": \"description\",
                    \"data\": null,
                    responsivePriority: 3,
                    \"render\": {\"_\": \"description\", \"display\": \"descriptionWithMarkup\", \"sort\": \"description\"}
                },
                ";
        // line 142
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 142)) {
            echo "{
                    \"sortable\": false,
                    \"visible\": false,
                    \"data\": dataTableCreateTags,
                    responsivePriority: 3
                },";
        }
        // line 148
        echo "                { data: 'orientation', responsivePriority: 10, visible: false},
                {
                    responsivePriority: 3,
                    data: 'thumbnail',
                    render: function (data, type, row) {
                        if (type !== 'display') {
                            return row.layoutId;
                        }
                        if (data) {
                            return '<a class=\"img-replace\" data-toggle=\"lightbox\" data-type=\"image\" href=\"' + data + '\">' +
                                '<img class=\"img-fluid\" src=\"' + data + '\" alt=\"";
        // line 158
        echo twig_escape_filter($this->env, __("Thumbnail"), "html", null, true);
        echo "\" />' +
                                '</a>';
                        } else {
                          var addUrl = '";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.thumbnail.add", ["id" => ":id"]), "html", null, true);
        echo "'.replace(':id', row.layoutId);
                          return '<a class=\"img-replace generate-layout-thumbnail\" href=\"' + addUrl + '\">' +
                              '<img class=\"img-fluid\" src=\"";
        // line 163
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", ["img/thumbs/placeholder.png"], "method", false, false, false, 163), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, __("Add Thumbnail"), "html", null, true);
        echo "\" />' +
                              '</a>';
                        }
                        return '';
                    },
                    sortable: false
                },
                {
                    \"data\": \"groupsWithPermissions\",
                    responsivePriority: 4,
                    \"render\": dataTableCreatePermissions
                },
                {
                    \"orderable\": false,
                    responsivePriority: 1,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('draw', { form: \$(\"#templates\").closest(\".XiboGrid\").find(\".FilterDiv form\") } ,dataTableCreateTagEvents);
        table.on('draw', function(e, settings) {
          \$('#' + e.target.id + ' .generate-layout-thumbnail').on('click', function(e) {
            e.preventDefault();
            var \$anchor = \$(this);
            \$.ajax({
              url: \$anchor.attr('href'),
              method: 'POST',
              success: function() {
                \$anchor.find('img').attr('src', \$anchor.attr('href'));
                \$anchor.removeClass('generate-layout-thumbnail').attr('data-toggle', 'lightbox');
              }
            });
          });
        });
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#templates_wrapper').find('.dataTables_buttons'));

        \$(\"#refreshGrid\").click(function () {
            table.ajax.reload();
        });

        function templateFormOpen() {
            if (\$('#folder-tree-form-modal').length === 0) {
                // compile tree folder modal and append it to Form
                var folderTreeModal = Handlebars.compile(\$('#folder-tree-template').html());
                var treeConfig = {\"container\": \"container-folder-form-tree\", \"modal\": \"folder-tree-form-modal\"};
                \$(\"body\").append(folderTreeModal(treeConfig));

                \$(\"#folder-tree-form-modal\").on('hidden.bs.modal', function () {
                    // Fix for 2nd/overlay modal
                    \$('.modal:visible').length && \$(document.body).addClass('modal-open');
                    
                    \$(this).data('bs.modal', null);
                });
            }

            // select current working folder if one is selected in the grid
            if (\$('#container-folder-tree').jstree(\"get_selected\", true)[0] !== undefined) {
                \$('#templateAddForm' + ' #folderId').val(\$('#container-folder-tree').jstree(\"get_selected\", true)[0].id);
            }

            initJsTreeAjax(\$('#folder-tree-form-modal').find('#container-folder-form-tree'), 'templateAddForm', true, 600);

            \$(\"#templateAddForm\").submit(function(e) {
                e.preventDefault();
                var form = \$(this);

                var url = \$(this).data().redirect;

                \$.ajax({
                    type: \$(this).attr(\"method\"),
                    url: \$(this).attr(\"action\"),
                    data: \$(this).serialize(),
                    cache: false,
                    dataType:\"json\",
                    success: function(xhr, textStatus, error) {

                        XiboSubmitResponse(xhr, form);

                        if (xhr.success) {
                            // Reload the designer
                            XiboRedirect(url.replace(\":id\", xhr.id));
                        }
                    }
                });
            });
        }
    </script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "template-page.twig";
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
        return array (  339 => 163,  334 => 161,  328 => 158,  316 => 148,  307 => 142,  269 => 107,  254 => 94,  250 => 92,  248 => 91,  243 => 90,  239 => 89,  220 => 73,  216 => 72,  211 => 71,  205 => 70,  201 => 69,  197 => 68,  193 => 67,  189 => 66,  178 => 58,  170 => 53,  162 => 50,  156 => 47,  147 => 41,  144 => 40,  138 => 38,  133 => 37,  128 => 36,  123 => 35,  118 => 34,  116 => 33,  110 => 31,  106 => 30,  99 => 26,  94 => 24,  91 => 23,  87 => 22,  79 => 18,  69 => 16,  67 => 15,  64 => 14,  60 => 13,  52 => 11,  47 => 8,  45 => 9,  38 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "template-page.twig", "/var/www/html/cms_ubi/views/template-page.twig");
    }
}
