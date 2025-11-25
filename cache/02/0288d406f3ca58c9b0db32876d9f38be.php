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

/* report-schedule-buttons.twig */
class __TwigTemplate_1545b2d33c658f3fa5d8e9b96d9a50a5 extends Template
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
        echo "<div class=\"widget-action-menu pull-right\">
    <button class=\"btn btn-success XiboFormButton\" title=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["reportAddBtnTitle"] ?? null), "html", null, true);
        echo "\" id=\"reportAddBtn\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("reportschedule.add.form"), "html", null, true);
        echo "?reportName=";
        echo twig_escape_filter($this->env, ($context["reportName"] ?? null), "html", null, true);
        echo "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
        echo __("Schedule");
        echo "</button>
    <button class=\"btn btn-info XiboRedirectButton\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("savedreport.view"), "html", null, true);
        echo "?reportName=";
        echo twig_escape_filter($this->env, ($context["reportName"] ?? null), "html", null, true);
        echo "\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
        echo __("Saved Reports");
        echo "</button>
    <button class=\"btn btn-primary XiboRedirectButton\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("reportschedule.view"), "html", null, true);
        echo "?reportName=";
        echo twig_escape_filter($this->env, ($context["reportName"] ?? null), "html", null, true);
        echo "\"><i class=\"fa fa-th-list\" aria-hidden=\"true\"></i> ";
        echo __("Report Schedules");
        echo "</button>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "report-schedule-buttons.twig";
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
        return array (  58 => 4,  50 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "report-schedule-buttons.twig", "/var/www/html/cms_ubi/views/report-schedule-buttons.twig");
    }
}
