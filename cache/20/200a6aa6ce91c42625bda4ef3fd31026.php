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

/* user-form-home-folder.twig */
class __TwigTemplate_582b8d7b072ffaaafbce5ab5a9ffbb82 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'formTitle' => [$this, 'block_formTitle'],
            'formButtons' => [$this, 'block_formButtons'],
            'callBack' => [$this, 'block_callBack'],
            'formHtml' => [$this, 'block_formHtml'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 9
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "user-form-home-folder.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "user-form-home-folder.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        echo __("Set home folder");
    }

    // line 16
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    ";
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 18
        echo __("Save");
        echo ", \$(\"#userHomeFolderForm\").submit()
";
    }

    // line 21
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "userHomeFolderFormOpen";
    }

    // line 23
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"userHomeFolderForm\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.homeFolder", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userId", [], "any", false, false, false, 26)]), "html", null, true);
        echo "\">
                <div class=\"tab-pane\" id=\"home-folder\">
                    <p>";
        // line 28
        echo twig_escape_filter($this->env, __("Set a home folder to use as the default folder for new content."), "html", null, true);
        echo "</p>
                    ";
        // line 29
        echo twig_call_macro($macros["forms"], "macro_hidden", ["homeFolderId", twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "homeFolderId", [], "any", false, false, false, 29)], 29, $context, $this->getSourceContext());
        echo "
                    <div id=\"container-form-folder-tree\" class=\"card card-body bg-light\"></div>
                </div>
            </form>
        </div>
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user-form-home-folder.twig";
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
        return array (  100 => 29,  96 => 28,  91 => 26,  87 => 24,  83 => 23,  76 => 21,  70 => 18,  65 => 17,  61 => 16,  56 => 13,  52 => 12,  47 => 9,  45 => 10,  38 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "user-form-home-folder.twig", "/var/www/html/cms_ubi/views/user-form-home-folder.twig");
    }
}
