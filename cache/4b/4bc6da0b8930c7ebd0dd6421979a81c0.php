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

/* layout-form-background.twig */
class __TwigTemplate_81b4ee7694c96d3ca850627f5b9868d2 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "layout-form-background.twig", 10)->unwrap();
        // line 9
        $this->parent = $this->loadTemplate("form-base.twig", "layout-form-background.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        echo __("Edit Layout");
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
        echo ", \$(\"#layoutEditForm\").submit()
";
    }

    // line 21
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "backGroundFormSetup";
    }

    // line 23
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    <div class=\"row\">
        <ul class=\"nav nav-tabs nav-fill\" role=\"tablist\">
            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 26
        echo __("General");
        echo "</span></a></li>
        </ul>
        <div class=\"col-md-12\">
            <form id=\"layoutEditForm\" class=\"form-horizontal\" method=\"put\" action=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.edit.background", ["id" => twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 29)]), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 32
        ob_start(function () { return ''; });
        echo __("Background Colour");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Use the colour picker to select the background colour");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 34
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_colorPicker", ["backgroundColor", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "backgroundColor", [], "any", false, false, false, 34), ($context["helpText"] ?? null)], 34, $context, $this->getSourceContext());
        echo "

                        <div class=\"form-group row\">

                            <label class=\"col-sm-2 control-label\">
                                ";
        // line 39
        echo __("Background Image");
        // line 40
        echo "                            </label>

                            <div class=\"col-sm-10\">
                                <div class=\"text-center background-image-add editable\">
                                    <div id=\"bg_not_found_icon\">
                                        <i class=\"fa bg_not_found_icon\"></i>
                                        <div>";
        // line 46
        echo __("No Image set, add from Toolbox or Upload!");
        echo "</div>
                                    </div>

                                    <img id=\"bg_image_image\" data-url=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.download", ["id" => ":id"]), "html", null, true);
        echo "?preview=1&width=200&height=100\" alt=\"";
        echo __("Background thumbnail");
        echo "\" />
                                    <div class=\"background-image-drop\">";
        // line 50
        echo __("Add background image");
        echo "</div>
                                </div>

                                <div class=\"background-image-actions text-center\">
                                    <div class=\"btn-group\">
                                        <button id=\"backgroundUploadButton\" class=\"btn btn-outline-secondary\" type=\"button\" data-add-new-background-url=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.add"), "html", null, true);
        echo "\">
                                            <i class=\"fa fa-upload\"></i>
                                            ";
        // line 57
        echo __("Upload");
        // line 58
        echo "                                        </button>

                                        <button id=\"backgroundRemoveButton\" class=\"btn btn-outline-danger\" type=\"button\">
                                            <i class=\"fa fa-remove\"></i>
                                            ";
        // line 62
        echo __("Remove");
        // line 63
        echo "                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 70
        echo twig_call_macro($macros["forms"], "macro_hidden", ["backgroundImageId", ($context["backgroundId"] ?? null)], 70, $context, $this->getSourceContext());
        echo "
                        </div>

                        ";
        // line 73
        ob_start(function () { return ''; });
        echo __("Resolution");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 74
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Change the resolution");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["resolutionId", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["resolution"] ?? null), "resolutionId", [], "any", false, false, false, 75), ($context["resolutions"] ?? null), "resolutionId", "resolution", ($context["helpText"] ?? null), "resolution-group"], 75, $context, $this->getSourceContext());
        echo "

                        ";
        // line 77
        ob_start(function () { return ''; });
        echo __("Layer");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 78
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The layering order of the background image (z-index). Advanced use only.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 79
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["backgroundzIndex", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "backgroundzIndex", [], "any", false, false, false, 79), ($context["helpText"] ?? null)], 79, $context, $this->getSourceContext());
        echo "

                        ";
        // line 81
        ob_start(function () { return ''; });
        echo __("Automatically apply Transitions?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 82
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("When enabled, the default Transition type and duration will be applied to all widgets on this Layout.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["autoApplyTransitions", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "autoApplyTransitions", [], "any", false, false, false, 83), ($context["helpText"] ?? null)], 83, $context, $this->getSourceContext());
        echo "
                    </div>
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
        return "layout-form-background.twig";
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
        return array (  220 => 83,  215 => 82,  211 => 81,  205 => 79,  200 => 78,  196 => 77,  190 => 75,  185 => 74,  181 => 73,  175 => 70,  166 => 63,  164 => 62,  158 => 58,  156 => 57,  151 => 55,  143 => 50,  137 => 49,  131 => 46,  123 => 40,  121 => 39,  112 => 34,  107 => 33,  103 => 32,  97 => 29,  91 => 26,  87 => 24,  83 => 23,  76 => 21,  70 => 18,  65 => 17,  61 => 16,  56 => 13,  52 => 12,  47 => 9,  45 => 10,  38 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-form-background.twig", "/var/www/html/cms_ubi/views/layout-form-background.twig");
    }
}
