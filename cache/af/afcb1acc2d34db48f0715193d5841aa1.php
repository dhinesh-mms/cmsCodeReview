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

/* daypart-page.twig */
class __TwigTemplate_f32f397662657624bbfbbb5e0799ba5e extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "daypart-page.twig", 9)->unwrap();
        // line 8
        $this->parent = $this->loadTemplate("authed.twig", "daypart-page.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("Dayparting"), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["daypart.add"], "method", false, false, false, 15)) {
            // line 16
            echo "            <button class=\"btn btn-success XiboFormButton\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("daypart.add.form"), "html", null, true);
            echo "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
            echo __("Add Daypart");
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
        echo __("Dayparting");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\">
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
        echo twig_call_macro($macros["inline"], "macro_inputNameGrid", ["name", ($context["title"] ?? null)], 31, $context, $this->getSourceContext());
        echo "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"dayparts\" class=\"table table-striped\" data-state-preference-name=\"daypartGrid\">
                        <thead>
                            <tr>
                                <th>";
        // line 39
        echo __("Name");
        echo "</th>
                                <th>";
        // line 40
        echo __("Description");
        echo "</th>
                                <th>";
        // line 41
        echo __("Start Time");
        echo "</th>
                                <th>";
        // line 42
        echo __("End Time");
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

    // line 56
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "    <script type=\"text/javascript\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">

        var table = \$(\"#dayparts\").DataTable({
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
        // line 72
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("daypart.search"), "html", null, true);
        echo "\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#dayparts\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"name\", \"render\": dataTableSpacingPreformatted , responsivePriority: 2},
                { \"data\": \"description\" },
                { \"data\": \"startTime\" },
                { \"data\": \"endTime\" },
                {
                    \"orderable\": false,
                    responsivePriority: 1,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#dayparts_wrapper').find('.dataTables_buttons'));

        \$(\"#refreshGrid\").click(function () {
            table.ajax.reload();
        });

        function dayPartFormOpen(dialog) {
            // Render a set of exceptions
            \$exceptions = \$(dialog).find(\"#dayPartExceptions\");

            // Days of the week translations
            var daysOfTheWeek = [
                { day: \"Mon\", title: \"";
        // line 104
        echo __("Monday");
        echo "\" },
                { day: \"Tue\", title: \"";
        // line 105
        echo __("Tuesday");
        echo "\" },
                { day: \"Wed\", title: \"";
        // line 106
        echo __("Wednesday");
        echo "\" },
                { day: \"Thu\", title: \"";
        // line 107
        echo __("Thursday");
        echo "\" },
                { day: \"Fri\", title: \"";
        // line 108
        echo __("Friday");
        echo "\" },
                { day: \"Sat\", title: \"";
        // line 109
        echo __("Saturday");
        echo "\" },
                { day: \"Sun\", title: \"";
        // line 110
        echo __("Sunday");
        echo "\" }
            ];

            // Compile the handlebars template
            var exceptionsTemplate = Handlebars.compile(\$(\"#dayPartExceptionsTemplate\").html());

            if (dialog.data().extra.exceptions.length == 0) {
                // Contexts for template
                var context = {
                    daysOfWeek: daysOfTheWeek,
                    buttonGlyph: \"fa-plus\",
                    exceptionDay: \"\",
                    exceptionStart: \"\",
                    exceptionEnd: \"\",
                    fieldId: 0
                };

                // Append
                \$exceptions.append(exceptionsTemplate(context));
                
                XiboInitialise(\"#\" + \$exceptions.prop(\"id\"));
            } else {
                // For each of the existing exceptions, create form components
                var i = 0;
                \$.each(dialog.data().extra.exceptions, function (index, field) {
                    i++;
                    // call the template
                    var context = {
                        daysOfWeek: daysOfTheWeek,
                        buttonGlyph: ((i == 1) ? \"fa-plus\" : \"fa-minus\"),
                        exceptionDay: field.day,
                        exceptionStart: field.start,
                        exceptionEnd: field.end,
                        fieldId: i
                    };

                    \$exceptions.append(exceptionsTemplate(context));
                    
                    XiboInitialise(\"#\" + \$exceptions.prop(\"id\"));
                });
            }

            // Nabble the resulting buttons
            \$exceptions.on(\"click\", \"button\", function (e) {
                e.preventDefault();

                // find the gylph
                if (\$(this).find(\"i\").hasClass(\"fa-plus\")) {
                    var context = {
                        daysOfWeek: daysOfTheWeek,
                        buttonGlyph: \"fa-minus\",
                        exceptionDay: \"\",
                        exceptionStart: \"\",
                        exceptionEnd: \"\",
                        fieldId: \$exceptions.find('.form-group').length + 1
                    };

                    \$exceptions.append(exceptionsTemplate(context));

                    XiboInitialise(\"#\" + \$exceptions.prop(\"id\"));
                } else {
                    // Remove this row
                    \$(this).closest(\".form-group\").remove();
                }
            });

            // check if we already have this day in exceptions array, if so remove the row with a message.
            \$exceptions.on(\"change\", \"select\", function() {
                var selectedDays = [];
                \$('select').not('#' + \$(this).attr('id')).each(function(i) {
                    selectedDays.push(\$(this).val());
                });

                if (selectedDays.includes(this.value)) {
                    toastr.error(translations.dayPartExceptionErrorMessage);
                    // Remove this row
                    \$(this).closest(\".form-group\").remove();
                }
            })
        }

        // Equals helper for the templates below
        Handlebars.registerHelper('eq', function(v1, v2, opts) {
            if (v1 === v2) {
                return opts.fn(this);
            } else {
                return opts.inverse(this);
            }
        });
    </script>
    ";
        // line 212
        echo "
    <script type=\"text/x-handlebars-template\" id=\"dayPartExceptionsTemplate\">
        <div class=\"form-group row\">
            <div class=\"col-3\">
                <select class=\"form-control\" name=\"exceptionDays[]\" id=\"exceptionDays_{{fieldId}}\">
                    <option value=\"\"></option>
                    {{#each daysOfWeek}}
                    <option value=\"{{ day }}\" {{#eq day ../exceptionDay}}selected{{/eq}}>{{ title }}</option>
                    {{/each}}
                </select>
            </div>
            <div class=\"col-3\">
    ";
        echo "
                ";
        // line 213
        echo twig_call_macro($macros["inline"], "macro_time", ["exceptionStartTimes[]", "", "{{ exceptionStart }}"], 213, $context, $this->getSourceContext());
        echo "
    ";
        // line 217
        echo "
            </div>
            <div class=\"col-3\">
    ";
        echo "
                ";
        // line 218
        echo twig_call_macro($macros["inline"], "macro_time", ["exceptionEndTimes[]", "", "{{ exceptionEnd }}"], 218, $context, $this->getSourceContext());
        echo "
    ";
        // line 226
        echo "
            </div>
            <div class=\"col-1\">
                <button class=\"btn btn-white\"><i class=\"fa {{ buttonGlyph }}\"></i></button>
            </div>
        </div>
    </script>
    ";
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "daypart-page.twig";
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
        return array (  355 => 226,  351 => 218,  344 => 217,  340 => 213,  324 => 212,  231 => 110,  227 => 109,  223 => 108,  219 => 107,  215 => 106,  211 => 105,  207 => 104,  172 => 72,  153 => 57,  149 => 56,  132 => 42,  128 => 41,  124 => 40,  120 => 39,  108 => 31,  104 => 30,  97 => 26,  92 => 24,  89 => 23,  85 => 22,  77 => 18,  69 => 16,  67 => 15,  64 => 14,  60 => 13,  52 => 11,  47 => 8,  45 => 9,  38 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "daypart-page.twig", "/var/www/html/cms_ubi/views/daypart-page.twig");
    }
}
