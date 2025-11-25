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

/* module-page.twig */
class __TwigTemplate_0bf55f7fe9791562223f49f20025f80c extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "module-page.twig", 9)->unwrap();
        // line 8
        $this->parent = $this->loadTemplate("authed.twig", "module-page.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("Modules"), "html", null, true);
        echo " | ";
    }

    // line 13
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <div class=\"widget-action-menu pull-right\">
        <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
        // line 15
        echo __("Refresh the Table");
        echo "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
    </div>
";
    }

    // line 19
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 21
        echo __("Modules");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 27
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 28
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_input", ["name", ($context["title"] ?? null)], 28, $context, $this->getSourceContext());
        echo "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"modules\" class=\"table table-striped\" data-state-preference-name=\"moduleGrid\">
                        <thead>
                            <tr>
                                <th>";
        // line 36
        echo __("Name");
        echo "</th>
                                <th>";
        // line 37
        echo __("Description");
        echo "</th>
                                <th>";
        // line 38
        echo __("Library Media");
        echo "</th>
                                <th>";
        // line 39
        echo __("Default Duration");
        echo "</th>
                                <th>";
        // line 40
        echo __("Preview Enabled");
        echo "</th>
                                <th title=\"";
        // line 41
        echo __("Can this module be assigned to a Layout?");
        echo "\">";
        echo __("Assignable");
        echo "</th>
                                <th>";
        // line 42
        echo __("Enabled");
        echo "</th>
                                <th>";
        // line 43
        echo __("Errors");
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
";
    }

    // line 57
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "    <script type=\"text/javascript\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">
        var table = \$('#modules').DataTable({
            language: dataTablesLanguage,
            dom: dataTablesTemplate,
            serverSide: false,
            stateSave: true,
            stateDuration: 0,
            responsive: true,
            stateLoadCallback: dataTableStateLoadCallback,
            stateSaveCallback: dataTableStateSaveCallback,
            filter: false,
            searchDelay: 3000,
            order: [[ 0, 'asc']],
            ajax: {
              url: '";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.search"), "html", null, true);
        echo "',
              data: function (d) {
                \$.extend(d, \$('#modules').closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
              }
            },
            columns: [
                { \"data\": \"name\" , responsivePriority: 2},
                { \"data\": \"description\" },
                { \"data\": \"regionSpecific\", \"render\": dataTableTickCrossInverseColumn },
                { \"data\": \"defaultDuration\" },
                { \"data\": \"previewEnabled\", \"render\": dataTableTickCrossColumn },
                { \"data\": \"assignable\", \"render\": dataTableTickCrossColumn },
                { \"data\": \"enabled\", \"render\": dataTableTickCrossColumn },
                { \"data\": \"errors\", \"render\": dataTableTickCrossColumn },
                {
                    \"orderable\": false,
                    responsivePriority: 1,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#modules_wrapper').find('.dataTables_buttons'));

        \$(\"#refreshGrid\").click(function () {
            table.ajax.reload();
        });

        function moduleEditFormOpen(dialog) {
            var moduleSettings = \$(dialog).data('extra')['settings'];
            var \$targetContainer = \$(dialog).find('.form-module-configure-fields')

            forms.createFields(moduleSettings, \$targetContainer);
        }
    </script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "module-page.twig";
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
        return array (  178 => 72,  160 => 58,  156 => 57,  139 => 43,  135 => 42,  129 => 41,  125 => 40,  121 => 39,  117 => 38,  113 => 37,  109 => 36,  97 => 28,  93 => 27,  86 => 23,  81 => 21,  78 => 20,  74 => 19,  67 => 15,  64 => 14,  60 => 13,  52 => 11,  47 => 8,  45 => 9,  38 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "module-page.twig", "/var/www/html/cms_ubi/views/module-page.twig");
    }
}
