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

/* report-page.twig */
class __TwigTemplate_a9a9709cd13b548e70b52cc0d54f2bbe extends Template
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
        // line 9
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "report-page.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "report-page.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["defaults"] ?? null), "availableReports", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["key"] => $context["reports"]) {
            // line 14
            echo "
    ";
            // line 15
            if (($context["key"] == "Proof of Play")) {
                // line 16
                echo "        <div class=\"row reports-available\">
            <div class=\"reports-available-title col-12\">
            
                <span>";
                // line 19
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</span>
             
            </div>
            ";
                // line 22
                if ((($context["key"] == "Proof of Play") && twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["proof-of-play"], "method", false, false, false, 22))) {
                    // line 23
                    echo "                <div class=\"col-lg-3 col-md-6 col-12\">
                    <div class=\"widget content\" style=\"min-height: 210px\">
                        <div class=\"widget-body\">
                            <div class=\"widget-icon green\">
                                <a class=\"XiboFormButton btns\" href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("stats.export.form"), "html", null, true);
                    echo "\"> <i class=\"fa fa-external-link\"></i></a>
                            </div>
                            <div class=\"widget-content\">
                                <div class=\"report-title\">";
                    // line 30
                    echo __("Proof of Play");
                    echo "</div>
                                <div class=\"comment\"><a class=\"XiboFormButton btns\" href=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("stats.export.form"), "html", null, true);
                    echo "\">";
                    echo __("Export");
                    echo "</a></div>
                            </div>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            ";
                }
                // line 38
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["reports"]);
                foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
                    // line 39
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["report"], "hidden", [], "any", false, false, false, 39) == 0)) {
                        // line 40
                        echo "                    <div class=\"report-box col-lg-3 col-md-6 col-12\">
                        <div class=\"widget content\" style=\"min-height: 210px\">
                            <div class=\"widget-body\">
                                <div class=\"widget-icon ";
                        // line 43
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "color", [], "any", false, false, false, 43), "html", null, true);
                        echo " \">
                                    <i class=\"fa ";
                        // line 44
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "fa_icon", [], "any", false, false, false, 44), "html", null, true);
                        echo "\"></i>
                                </div>
                                <div class=\"widget-content\">
                                    <div class=\"report-title\">  ";
                        // line 47
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "description", [], "any", false, false, false, 47), "html", null, true);
                        echo "  </div>
                                    <div class=\"comment\"><a href=\"";
                        // line 48
                        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("report.form", ["name" => twig_get_attribute($this->env, $this->source, $context["report"], "name", [], "any", false, false, false, 48)]), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "type", [], "any", false, false, false, 48), "html", null, true);
                        echo "</a></div>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                    </div>
                ";
                    }
                    // line 55
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "        </div>
       ";
            }
            // line 57
            echo "   
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['reports'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 62
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "    <script type=\"text/javascript\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">
        function statsExportFormSelect(dialog) {
            var fromDtLink;
            var toDtLink;
            var displayId;

            \$(dialog).find(\"input, select\").on(\"change\", function() {

                fromDtLink =  \$(dialog).find(\"#fromDt\").val();
                toDtLink =  \$(dialog).find(\"#toDt\").val();
                displayId =  \$(dialog).find(\"#displayId\").val();

                if (!(
                    fromDtLink === null ||  toDtLink === null  ||
                    fromDtLink === '' ||  toDtLink === ''  ||
                    fromDtLink === undefined || toDtLink === undefined
                )) {

                    \$(dialog).find(\".total-stat\").remove();
                    \$(dialog).find('.save-button').prop('disabled', true);
                    \$(dialog).find(\".loading-overlay\").show();

                    \$.ajax({
                        type: \"get\",
                        url: \"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("stats.getExportStatsCount"), "html", null, true);
        echo "\",
                        cache: false,
                        dataType: \"json\",
                        data: {
                            fromDt: fromDtLink,
                            toDt: toDtLink,
                            displayId: displayId
                        },

                        success: function(response) {

                            \$(dialog).find(\".loading-overlay\").hide();

                            if (response.success === false) {
                                \$(dialog).find(\"#totalStat\").append('<div class=\"total-stat alert alert-danger\">' + response.message + '</strong></div>');
                                return;
                            } else {
                                var total = response.data.total;
                                \$(dialog).find(\"#totalStat\").append('<div class=\"total-stat alert alert-success\">";
        // line 105
        echo twig_escape_filter($this->env, __("Total number of records to be exported "), "html", null, true);
        echo "' + '<strong>' + total + '</strong></div>');
                            }

                            \$(dialog).find('.save-button').prop('disabled', false);
                        }
                    });
                }
            });
        }

        function statsExportFormSubmit() {
            var form = \$(\"#statisticsExportForm\");
            var valid = true;

            var validateForm = function(element) {
                if (element.val() == null || element.val() == '') {
                    valid = false;
                    element.closest('.form-group').removeClass('has-success').addClass('has-error');
                } else {
                    element.closest('.form-group').addClass('has-success').removeClass('has-error');
                }
            };

            validateForm(form.find(\"#fromDt\"));
            validateForm(form.find(\"#toDt\"));

            if (valid) {
                form.submit();
                form.find(\".form-error\").remove();

                XiboDialogClose();

            } else {
                // Remove the spinner
                form.closest(\".modal-dialog\").find(\".saving\").remove();
                // https://github.com/xibosignage/xibo/issues/1589
                form.closest(\".modal-dialog\").find(\".save-button\").removeClass(\"disabled\");

                if (!form.find(\".form-error\").length) {
                    form.append('<div class=\"alert alert-danger form-error\">";
        // line 144
        echo twig_escape_filter($this->env, __("Form field is required."), "html", null, true);
        echo "</div>');
                }
            }
        }

        // Or use this to Open link in same window (similar to target=_blank)
        \$(\".report-box\").click(function(){
            window.location = \$(this).find(\"a:first\").attr(\"href\");
            return false;
        });

    </script>

    <style>
        .row-flex {
            display: flex;
            flex-wrap: wrap;
        }

        .content {
            height: 100%;
            padding: 20px;
            border-radius: 5px;
        }

        .reports-available {
            background-color: #d2e0db;
            border: 1px solid #d2e0db;
            border-radius: 5px;
            margin: 0 1rem 1rem 1rem !important;
        }

        .reports-available-title {
            width: 100%;
            margin-top: 1rem;
            color: #273759;
            font-size: 1.4rem;
        }

        div.report-box {
            position: relative;
        }

        div.report-box:hover {
            cursor: pointer;
            opacity: .9;
        }

        .widget .widget-content .report-title {
            font-size: 1.15rem;
            padding: 10px 0 0;
            display: block;
        }

        .widget .widget-content .comment {
            font-size: 1rem;
        }
    </style>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "report-page.twig";
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
        return array (  258 => 144,  216 => 105,  195 => 87,  167 => 63,  163 => 62,  154 => 57,  150 => 56,  144 => 55,  132 => 48,  128 => 47,  122 => 44,  118 => 43,  113 => 40,  110 => 39,  105 => 38,  93 => 31,  89 => 30,  83 => 27,  77 => 23,  75 => 22,  69 => 19,  64 => 16,  62 => 15,  59 => 14,  54 => 13,  50 => 12,  45 => 9,  43 => 10,  36 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "report-page.twig", "/var/www/html/cms_ubi/views/report-page.twig");
    }
}
