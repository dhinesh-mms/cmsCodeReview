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

/* forms.twig */
class __TwigTemplate_ad3f8cb66e07fca210bb281f74186233 extends Template
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
        echo "
";
        // line 11
        echo "
";
        // line 15
        echo "
";
        // line 23
        echo "
";
        // line 31
        echo "
";
        // line 37
        echo "
";
        // line 49
        echo "
";
        // line 59
        echo "
";
        // line 74
        echo "
";
        // line 92
        echo "
";
        // line 120
        echo "
";
        // line 130
        echo "
";
        // line 140
        echo "
";
        // line 150
        echo "
";
        // line 169
        echo "
";
        // line 181
        echo "
";
        // line 193
        echo "
";
        // line 273
        echo "
";
        // line 287
        echo "
";
        // line 301
        echo "
";
        // line 315
        echo "
";
        // line 329
        echo "
";
        // line 348
        echo "
";
        // line 360
        echo "
";
        // line 376
        echo "
";
    }

    // line 2
    public function macro_disabled($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 3
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\">";
            // line 4
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <p class=\"form-control-static\">";
            // line 6
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "</p>
            <small class=\"form-text text-muted\">";
            // line 7
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 12
    public function macro_hidden($__name__ = null, $__value__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 13
            echo "    <input name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"hidden\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" />
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 16
    public function macro_raw($__text__ = null, $__groupClass__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "groupClass" => $__groupClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 17
            echo "    <div class=\"row\">
        <div class=\"col-sm-12 ";
            // line 18
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
            ";
            // line 19
            echo ($context["text"] ?? null);
            echo "
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 24
    public function macro_message($__message__ = null, $__groupClass__ = null, $__messageStyleClass__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "message" => $__message__,
            "groupClass" => $__groupClass__,
            "messageStyleClass" => $__messageStyleClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 25
            echo "    <div class=\"row\">
        <div class=\"";
            // line 26
            if (($context["messageStyleClass"] ?? null)) {
                echo twig_escape_filter($this->env, ($context["messageStyleClass"] ?? null), "html", null, true);
            }
            echo " col-sm-12 ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
            <p>";
            // line 27
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</p>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 32
    public function macro_alert($__message__ = null, $__alertType__ = null, $__groupClass__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "message" => $__message__,
            "alertType" => $__alertType__,
            "groupClass" => $__groupClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 33
            echo "    <div class=\"row\">
        <div class=\"alert alert-";
            // line 34
            if (($context["alertType"] ?? null)) {
                echo twig_escape_filter($this->env, ($context["alertType"] ?? null), "html", null, true);
            } else {
                echo "primary";
            }
            echo " col-sm-12 ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\" role=\"alert\">";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 38
    public function macro_button($__title__ = null, $__type__ = null, $__link__ = null, $__groupClass__ = null, $__id__ = null, $__buttonClass__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "type" => $__type__,
            "link" => $__link__,
            "groupClass" => $__groupClass__,
            "id" => $__id__,
            "buttonClass" => $__buttonClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 39
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <div class=\"offset-sm-2 col-sm-10\">
            ";
            // line 41
            if ((($context["type"] ?? null) == "link")) {
                // line 42
                echo "            <a class=\"btn ";
                if (($context["buttonClass"] ?? null)) {
                    echo twig_escape_filter($this->env, ($context["buttonClass"] ?? null), "html", null, true);
                } else {
                    echo "btn-white";
                }
                echo "\" href=\"";
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "</a>
            ";
            } else {
                // line 44
                echo "            <button id=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" class=\"btn ";
                if (($context["buttonClass"] ?? null)) {
                    echo twig_escape_filter($this->env, ($context["buttonClass"] ?? null), "html", null, true);
                } else {
                    echo "btn-white";
                }
                echo " ml-0\" type=\"";
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "</button>
            ";
            }
            // line 46
            echo "        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 50
    public function macro_input($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 51
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 52
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 54
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " />
            <small class=\"form-text text-muted\">";
            // line 55
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 60
    public function macro_colorPicker($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 61
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 62
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10 colorpicker-input\">
            <div class=\"input-group\">
                <div class=\"input-group-prepend\">
                    <i class=\"input-group-text input-group-addon\" id=\"";
            // line 66
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "_label\"></i>
                </div>
                <input class=\"form-control\" name=\"";
            // line 68
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" aria-describedby=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "_label\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " />
            </div>
            <small class=\"form-text text-muted\">";
            // line 70
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 75
    public function macro_inputWithButton($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__buttonId__ = null, $__buttonTitle__ = null, $__buttonType__ = null, $__buttonLink__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "buttonId" => $__buttonId__,
            "buttonTitle" => $__buttonTitle__,
            "buttonType" => $__buttonType__,
            "buttonLink" => $__buttonLink__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 76
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 77
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"input-group col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 79
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " aria-describedby=\"";
            echo twig_escape_filter($this->env, ($context["buttonId"] ?? null), "html", null, true);
            echo "\" />

            <div class=\"input-group-append\">
                ";
            // line 82
            if ((($context["buttonType"] ?? null) == "link")) {
                // line 83
                echo "                    <a class=\"btn btn-white\" href=\"";
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["buttonTitle"] ?? null), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 85
                echo "                    <button id=\"";
                echo twig_escape_filter($this->env, ($context["buttonId"] ?? null), "html", null, true);
                echo "\" class=\"btn btn-white\" type=\"";
                echo twig_escape_filter($this->env, ($context["buttonType"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["buttonTitle"] ?? null), "html", null, true);
                echo "</button>
                ";
            }
            // line 87
            echo "            </div>
        </div>
        <small class=\"form-text offset-2 px-4 text-muted\">";
            // line 89
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 93
    public function macro_inputWithTags($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__exactTag__ = null, $__exactTagTitle__ = null, $__logicalOperatorTitle__ = null, $__exactTagValue__ = null, $__logicalOperatorValue__ = null, $__autoCompleteEnabled__ = 1, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "exactTag" => $__exactTag__,
            "exactTagTitle" => $__exactTagTitle__,
            "logicalOperatorTitle" => $__logicalOperatorTitle__,
            "exactTagValue" => $__exactTagValue__,
            "logicalOperatorValue" => $__logicalOperatorValue__,
            "autoCompleteEnabled" => $__autoCompleteEnabled__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 94
            echo "        ";
            if (($context["exactTag"] ?? null)) {
                // line 95
                echo "            <div class=\"form-group tags-input-addons-wide row ";
                echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"";
                // line 96
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" accesskey=\"";
                echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "</label>
            <div class=\"input-group input-group-tags-exact col-sm-10\">
                <input class=\"form-control\" name=\"";
                // line 98
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" type=\"text\" id=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "\" data-role=\"tagsInputForm\" ";
                if ((($context["autoCompleteEnabled"] ?? null) == 1)) {
                    echo " data-auto-complete-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.search"), "html", null, true);
                    echo "?allTags=1\" ";
                }
                echo " ";
                echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
                echo " />
                <div class=\"input-group-append input-group-addon\">
                    <div class=\"input-group-text\">
                        <input title=\"";
                // line 101
                echo twig_escape_filter($this->env, ($context["exactTagTitle"] ?? null), "html", null, true);
                echo "\" type=\"checkbox\" id=\"";
                echo twig_escape_filter($this->env, ($context["exactTag"] ?? null), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, ($context["exactTag"] ?? null), "html", null, true);
                echo "\" ";
                if (($context["exactTagValue"] ?? null)) {
                    echo "checked";
                }
                echo ">
                    </div>
                    <select class=\"custom-select\" id=\"logicalOperator\" name=\"logicalOperator\" title=\"";
                // line 103
                echo twig_escape_filter($this->env, ($context["logicalOperatorTitle"] ?? null), "html", null, true);
                echo "\" >
                        <option value=\"OR\" ";
                // line 104
                if ((($context["logicalOperatorValue"] ?? null) != "AND")) {
                    echo "selected";
                }
                echo ">OR</option>
                        <option value=\"AND\" ";
                // line 105
                if ((($context["logicalOperatorValue"] ?? null) == "AND")) {
                    echo "selected";
                }
                echo ">AND</option>
                    </select>
                </div>
                <small class=\"form-text text-muted\">";
                // line 108
                echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
                echo "</small>
            </div>
        ";
            } else {
                // line 111
                echo "            <div class=\"form-group tags-input-wide row ";
                echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"";
                // line 112
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" accesskey=\"";
                echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "</label>
            <div class=\"col-sm-10\">
                <input class=\"form-control\" name=\"";
                // line 114
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" type=\"text\" id=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "\" data-role=\"tagsInputForm\" ";
                if ((($context["autoCompleteEnabled"] ?? null) == 1)) {
                    echo " data-auto-complete-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.search"), "html", null, true);
                    echo "?allTags=1\" ";
                }
                echo "  ";
                echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
                echo " />
                <small class=\"form-text text-muted\">";
                // line 115
                echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
                echo "</small>
            </div>
        ";
            }
            // line 118
            echo "    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 121
    public function macro_number($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__maxNumber__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "maxNumber" => $__maxNumber__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 122
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 123
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 125
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" ";
            if (($context["maxNumber"] ?? null)) {
                echo "max=\"";
                echo twig_escape_filter($this->env, ($context["maxNumber"] ?? null), "html", null, true);
                echo "\" ";
            }
            echo "type=\"number\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " />
            <small class=\"form-text text-muted\">";
            // line 126
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 131
    public function macro_email($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 132
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 133
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 135
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"email\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " />
            <small class=\"form-text text-muted\">";
            // line 136
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 141
    public function macro_password($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 142
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 143
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 145
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"password\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " />
            <small class=\"form-text text-muted\">";
            // line 146
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 151
    public function macro_textarea($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__rows__ = null, $__inline__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "rows" => $__rows__,
            "inline" => $__inline__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 152
            echo "    ";
            if ((($context["inline"] ?? null) == true)) {
                // line 153
                echo "        <div class=\"form-group row ";
                echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"";
                // line 154
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "</label>
            <div class=\"col-sm-10\">
                <textarea class=\"form-control\" name=\"";
                // line 156
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" rows=\"";
                echo twig_escape_filter($this->env, ($context["rows"] ?? null), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "</textarea>
                <small class=\"form-text text-muted\">";
                // line 157
                echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
                echo "</small>
            </div>
        </div>
    ";
            } else {
                // line 161
                echo "        <div class=\"form-group row ";
                echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
                echo "\">
            <div class=\"col-sm-12\">
                <small class=\"form-text text-muted\">";
                // line 163
                echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
                echo "</small>
                <textarea class=\"form-control\" name=\"";
                // line 164
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" rows=\"";
                echo twig_escape_filter($this->env, ($context["rows"] ?? null), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "</textarea>
            </div>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 170
    public function macro_checkbox($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__accessKey__ = null, $__disabled__ = null, $__id__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "accessKey" => $__accessKey__,
            "disabled" => $__disabled__,
            "id" => $__id__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 171
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <div class=\"offset-sm-2 col-sm-10\">
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"checkbox\" ";
            // line 174
            if (($context["id"] ?? null)) {
                echo " id=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" ";
            } else {
                echo " id=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" ";
            }
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" ";
            if ((($context["value"] ?? null) == 1)) {
                echo "checked";
            }
            echo " ";
            if ((($context["disabled"] ?? null) == 1)) {
                echo "disabled";
            }
            echo ">
                <label class=\"form-check-label\" ";
            // line 175
            if (($context["id"] ?? null)) {
                echo " for=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" ";
            } else {
                echo " for=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" ";
            }
            echo " accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
            </div>
            <small class=\"form-text text-muted\">";
            // line 177
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 182
    public function macro_radio($__name__ = null, $__id__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__accessKey__ = null, $__setValue__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "id" => $__id__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "accessKey" => $__accessKey__,
            "setValue" => $__setValue__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 183
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <div class=\"offset-sm-2 col-sm-10\">
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" id=\"";
            // line 186
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["setValue"] ?? null), "html", null, true);
            echo "\" ";
            if ((($context["value"] ?? null) == ($context["setValue"] ?? null))) {
                echo "checked";
            }
            echo ">
                <label class=\"form-check-label\" for=\"";
            // line 187
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
            </div>
            <small class=\"form-text text-muted\">";
            // line 189
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 194
    public function macro_dropdown($__name__ = null, $__type__ = null, $__title__ = null, $__value__ = null, $__options__ = null, $__optionId__ = null, $__optionValue__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__callBack__ = null, $__dataAttributes__ = null, $__optionGroups__ = null, $__optionImageValue__ = null, $__optionFilter__ = null, $__readonly__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "type" => $__type__,
            "title" => $__title__,
            "value" => $__value__,
            "options" => $__options__,
            "optionId" => $__optionId__,
            "optionValue" => $__optionValue__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "callBack" => $__callBack__,
            "dataAttributes" => $__dataAttributes__,
            "optionGroups" => $__optionGroups__,
            "optionImageValue" => $__optionImageValue__,
            "optionFilter" => $__optionFilter__,
            "readonly" => $__readonly__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 195
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 196
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <select class=\"form-control\" ";
            // line 198
            if ((($context["type"] ?? null) == "dropdownmulti")) {
                echo "multiple";
            }
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["callBack"] ?? null), "html", null, true);
            echo " ";
            if (($context["readonly"] ?? null)) {
                echo "readonly";
            }
            // line 199
            echo "                ";
            if ((($context["type"] ?? null) == "dropdownmulti")) {
                // line 200
                echo "                    data-allow-clear=\"true\"
                    data-placeholder--id=null
                    data-placeholder--value=\"\"
                ";
            }
            // line 204
            echo "                ";
            if ((twig_length_filter($this->env, ($context["dataAttributes"] ?? null)) > 0)) {
                // line 205
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["dataAttributes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 206
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 206), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "value", [], "any", false, false, false, 206), "html", null, true);
                    echo "\"
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 208
                echo "                ";
            }
            // line 209
            echo "            ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo ">

            ";
            // line 211
            $context["hasGroups"] = (twig_length_filter($this->env, ($context["optionGroups"] ?? null)) > 0);
            // line 212
            echo "            ";
            if ( !($context["hasGroups"] ?? null)) {
                // line 213
                echo "                ";
                $context["optionGroups"] = ["label" => "General"];
                // line 214
                echo "            ";
            }
            // line 215
            echo "
            ";
            // line 216
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["optionGroups"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 217
                echo "                ";
                if (($context["hasGroups"] ?? null)) {
                    // line 218
                    echo "                    <optgroup label=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "label", [], "any", false, false, false, 218), "html", null, true);
                    echo "\">
                    ";
                    // line 219
                    $context["tempOptions"] = twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 219), [], "any", false, false, false, 219);
                    // line 220
                    echo "                ";
                } else {
                    // line 221
                    echo "                    ";
                    $context["tempOptions"] = ($context["options"] ?? null);
                    // line 222
                    echo "                ";
                }
                // line 223
                echo "
                ";
                // line 224
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["tempOptions"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 225
                    echo "
                    ";
                    // line 226
                    if ((($context["optionId"] ?? null) == "")) {
                        // line 227
                        echo "                        ";
                        $context["itemOptionId"] = $context["option"];
                        // line 228
                        echo "                        ";
                        $context["itemOptionValue"] = $context["option"];
                        // line 229
                        echo "                        ";
                        if (($context["optionImageValue"] ?? null)) {
                            // line 230
                            echo "                            ";
                            $context["itemOptionImageValue"] = $context["option"];
                            // line 231
                            echo "                        ";
                        }
                        // line 232
                        echo "                    ";
                    } else {
                        // line 233
                        echo "                        ";
                        $context["itemOptionId"] = twig_get_attribute($this->env, $this->source, $context["option"], ($context["optionId"] ?? null), [], "any", false, false, false, 233);
                        // line 234
                        echo "                        ";
                        $context["itemOptionValue"] = twig_get_attribute($this->env, $this->source, $context["option"], ($context["optionValue"] ?? null), [], "any", false, false, false, 234);
                        // line 235
                        echo "                        ";
                        if (($context["optionImageValue"] ?? null)) {
                            // line 236
                            echo "                            ";
                            $context["itemOptionImageValue"] = twig_get_attribute($this->env, $this->source, $context["option"], ($context["optionImageValue"] ?? null), [], "any", false, false, false, 236);
                            // line 237
                            echo "                        ";
                        }
                        // line 238
                        echo "                    ";
                    }
                    // line 239
                    echo "
                    ";
                    // line 240
                    if ((($context["type"] ?? null) == "dropdownmulti")) {
                        // line 241
                        echo "                        ";
                        $context["selected"] = twig_in_filter(($context["itemOptionId"] ?? null), ($context["value"] ?? null));
                        // line 242
                        echo "                    ";
                    } else {
                        // line 243
                        echo "                        ";
                        $context["selected"] = (($context["itemOptionId"] ?? null) == ($context["value"] ?? null));
                        // line 244
                        echo "                    ";
                    }
                    // line 245
                    echo "
                    <option value=\"";
                    // line 246
                    echo twig_escape_filter($this->env, ($context["itemOptionId"] ?? null), "html", null, true);
                    echo "\" ";
                    if (($context["selected"] ?? null)) {
                        echo "selected";
                    }
                    // line 247
                    echo "                            ";
                    if (($context["itemOptionImageValue"] ?? null)) {
                        // line 248
                        echo "                                data-content=\"<span class='media'><span class='media-left mr-2'><img style='max-width: 100px; max-height: 80px;' src='";
                        echo twig_escape_filter($this->env, ($context["itemOptionImageValue"] ?? null), "html", null, true);
                        echo "' /></span> <span class='media-body'>";
                        echo twig_escape_filter($this->env, ($context["itemOptionValue"] ?? null), "html", null, true);
                        echo "</span></span>\"
                            ";
                    }
                    // line 250
                    echo "
                            ";
                    // line 251
                    if (($context["optionFilter"] ?? null)) {
                        // line 252
                        echo "                                ";
                        if ( !twig_get_attribute($this->env, $this->source, ($context["optionFilter"] ?? null), 0, [], "array", true, true, false, 252)) {
                            // line 253
                            echo "                                    data-filter-class=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], ($context["optionFilter"] ?? null), [], "any", false, false, false, 253), "html", null, true);
                            echo "\"
                                ";
                        } else {
                            // line 255
                            echo "                                    ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(($context["optionFilter"] ?? null));
                            $context['loop'] = [
                              'parent' => $context['_parent'],
                              'index0' => 0,
                              'index'  => 1,
                              'first'  => true,
                            ];
                            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                                $length = count($context['_seq']);
                                $context['loop']['revindex0'] = $length - 1;
                                $context['loop']['revindex'] = $length;
                                $context['loop']['length'] = $length;
                                $context['loop']['last'] = 1 === $length;
                            }
                            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                                // line 256
                                echo "                                        data-filter";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 256), "html", null, true);
                                echo "-class=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], $context["filter"], [], "any", false, false, false, 256), "html", null, true);
                                echo "\"
                                    ";
                                ++$context['loop']['index0'];
                                ++$context['loop']['index'];
                                $context['loop']['first'] = false;
                                if (isset($context['loop']['length'])) {
                                    --$context['loop']['revindex0'];
                                    --$context['loop']['revindex'];
                                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                                }
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 258
                            echo "                                ";
                        }
                        // line 259
                        echo "                            ";
                    }
                    // line 260
                    echo "                    >";
                    echo twig_escape_filter($this->env, ($context["itemOptionValue"] ?? null), "html", null, true);
                    echo "</option>
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 262
                echo "
                ";
                // line 263
                if (($context["hasGroups"] ?? null)) {
                    // line 264
                    echo "                    </optgroup>
                ";
                }
                // line 266
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 267
            echo "
            </select>
            <small class=\"form-text text-muted\">";
            // line 269
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 274
    public function macro_date($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 275
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 276
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-prepend input-group-text date-open-button\" role=\"button\"><i class=\"fa fa-calendar\"></i></span>
                <input class=\"form-control dateControl date\" type=\"text\" ";
            // line 280
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" />
                <span class=\"input-group-append input-group-addon input-group-text date-clear-button d-none\" role=\"button\"><i class=\"fa fa-times\"></i></span>
            </div>
            <small class=\"form-text text-muted\">";
            // line 283
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 288
    public function macro_dateTime($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 289
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 290
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-prepend input-group-text date-open-button\" role=\"button\"><i class=\"fa fa-calendar\"></i></span>
                <input class=\"form-control dateControl dateTime\" type=\"text\" ";
            // line 294
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" />
                <span class=\"input-group-append input-group-addon input-group-text date-clear-button d-none\" role=\"button\"><i class=\"fa fa-times\"></i></span>
            </div>
            <small class=\"form-text text-muted\">";
            // line 297
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 302
    public function macro_dateMonth($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 303
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" title=\"";
            // line 304
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-prepend input-group-text date-open-button\" role=\"button\"><i class=\"fa fa-calendar\"></i></span>
                <input class=\"form-control dateControl month\" type=\"text\" ";
            // line 308
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" />
                <span class=\"input-group-append input-group-addon input-group-text date-clear-button d-none\" role=\"button\"><i class=\"fa fa-times\"></i></span>
            </div>
            <small class=\"form-text text-muted\">";
            // line 311
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 316
    public function macro_time($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__customFormat__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "customFormat" => $__customFormat__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 317
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 318
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-prepend input-group-text date-open-button\" role=\"button\"><i class=\"fa fa-calendar\"></i></span>
                <input class=\"form-control dateControl time\" type=\"text\" ";
            // line 322
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            if (($context["customFormat"] ?? null)) {
                echo "data-custom-format=\"";
                echo twig_escape_filter($this->env, ($context["customFormat"] ?? null), "html", null, true);
                echo "\"";
            }
            echo " />
                <span class=\"input-group-append input-group-addon input-group-text date-clear-button d-none\" role=\"button\"><i class=\"fa fa-times\"></i></span>
            </div>
            <small class=\"form-text text-muted\">";
            // line 325
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 330
    public function macro_switch($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__labelWidth__ = null, $__switchSize__ = null, $__onText__ = null, $__offText__ = null, $__groupClass__ = null, $__accessKey__ = null, $__disabled__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "labelWidth" => $__labelWidth__,
            "switchSize" => $__switchSize__,
            "onText" => $__onText__,
            "offText" => $__offText__,
            "groupClass" => $__groupClass__,
            "accessKey" => $__accessKey__,
            "disabled" => $__disabled__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 331
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <div class=\"offset-sm-2 col-sm-10\">
            <div class=\"checkbox\" title=\"";
            // line 333
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\">
                <input type=\"checkbox\" class=\"bootstrap-switch-target\" id=\"";
            // line 334
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\"
                    ";
            // line 335
            if ((($context["value"] ?? null) == 1)) {
                echo "checked";
            }
            // line 336
            echo "                    ";
            if ((($context["disabled"] ?? null) == 1)) {
                echo "disabled";
            }
            // line 337
            echo "                    data-label-text=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\"
                    ";
            // line 338
            if (!twig_in_filter(($context["onText"] ?? null), [null, ($context["undefined"] ?? null), ""])) {
                echo " data-on-text=\"";
                echo twig_escape_filter($this->env, ($context["onText"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 339
            echo "                    ";
            if (!twig_in_filter(($context["offText"] ?? null), [null, ($context["undefined"] ?? null), ""])) {
                echo " data-off-text=\"";
                echo twig_escape_filter($this->env, ($context["offText"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 340
            echo "                    ";
            if (!twig_in_filter(($context["switchSize"] ?? null), [null, ($context["undefined"] ?? null), ""])) {
                echo "data-size=\"";
                echo twig_escape_filter($this->env, ($context["switchSize"] ?? null), "html", null, true);
                echo "\"";
            } else {
                echo "data-size=\"small\"";
            }
            // line 341
            echo "                    ";
            if (!twig_in_filter(($context["labelWidth"] ?? null), [null, ($context["undefined"] ?? null), ""])) {
                echo " data-label-width=\"";
                echo twig_escape_filter($this->env, ($context["labelWidth"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 342
            echo "                    >
            </div>
            <small class=\"form-text text-muted\">";
            // line 344
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 349
    public function macro_playerCompat($__android__ = null, $__linux__ = null, $__tizen__ = null, $__webos__ = null, $__windows__ = null, $__message__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "android" => $__android__,
            "linux" => $__linux__,
            "tizen" => $__tizen__,
            "webos" => $__webos__,
            "windows" => $__windows__,
            "message" => $__message__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 350
            echo "    <span class=\"fa fa-info-circle\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"bottom\" data-html=\"true\"
          data-content='";
            // line 351
            if (($context["message"] ?? null)) {
                echo "<p>";
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "</p>";
            }
            echo "<ul class=\"player-compatibility\">
                ";
            // line 352
            if (($context["android"] ?? null)) {
                echo "<li><span class=\"fa fa-android\"></span> ";
                echo twig_escape_filter($this->env, ($context["android"] ?? null), "html", null, true);
                echo "</li>";
            }
            // line 353
            echo "                ";
            if (($context["linux"] ?? null)) {
                echo "<li><span class=\"fa fa-linux\"></span> ";
                echo twig_escape_filter($this->env, ($context["linux"] ?? null), "html", null, true);
                echo "</li>";
            }
            // line 354
            echo "                ";
            if (($context["tizen"] ?? null)) {
                echo "<li>Tizen: ";
                echo twig_escape_filter($this->env, ($context["tizen"] ?? null), "html", null, true);
                echo "</li>";
            }
            // line 355
            echo "                ";
            if (($context["webos"] ?? null)) {
                echo "<li>webOS: ";
                echo twig_escape_filter($this->env, ($context["webos"] ?? null), "html", null, true);
                echo "</li>";
            }
            // line 356
            echo "                ";
            if (($context["windows"] ?? null)) {
                echo "<li><span class=\"fa fa-windows\"></span> ";
                echo twig_escape_filter($this->env, ($context["windows"] ?? null), "html", null, true);
                echo "</li>";
            }
            // line 357
            echo "            </ul>'>
    </span>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 361
    public function macro_inputWithLogicalOperator($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__logicalOperatorValue__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "logicalOperatorValue" => $__logicalOperatorValue__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 362
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 363
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"input-group col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 365
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " />
            <div class=\"input-group-append input-group-addon\">
                <select class=\"custom-select\" id=\"logicalOperatorName\" name=\"logicalOperatorName\" title=\"";
            // line 367
            echo __("When filtering by multiple names, which logical operator should be used?");
            echo "\">
                        <option value=\"OR\" ";
            // line 368
            if ((($context["logicalOperatorValue"] ?? null) != "AND")) {
                echo "selected";
            }
            echo ">OR</option>
                        <option value=\"AND\" ";
            // line 369
            if ((($context["logicalOperatorValue"] ?? null) == "AND")) {
                echo "selected";
            }
            echo ">AND</option>
                </select>
            </div>
            <small class=\"form-text text-muted\">";
            // line 372
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 377
    public function macro_inputFullScreenSchedule($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__idValue__ = null, $__validation__ = null, $__accessKey__ = null, $__readonly__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "idValue" => $__idValue__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "readonly" => $__readonly__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 378
            echo "    <div class=\"form-group row input-full-screen-layout ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 379
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <div class=\"input-group\">
                <input class=\"form-control\" type=\"text\" id=\"fullScreen-";
            // line 382
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " readonly />
                <input type=\"hidden\" id=\"fullScreen-";
            // line 383
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "Id\" value=\"";
            echo twig_escape_filter($this->env, ($context["idValue"] ?? null), "html", null, true);
            echo "\"/>
                <div class=\"input-group-append input-group-addon\">
                    <button class=\"btn btn-outline-secondary full-screen-layout-form\" type=\"button\"
                        id=\"fullScreenControl_";
            // line 386
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
                        data-no-layout=\"";
            // line 387
            echo __("Choose");
            echo "\" data-has-layout=\"";
            echo __("Change");
            echo "\" data-readonly=\"";
            echo twig_escape_filter($this->env, ($context["readonly"] ?? null), "html", null, true);
            echo "\">
                        ";
            // line 388
            if (($context["idValue"] ?? null)) {
                echo __("Change");
            } else {
                echo __("Choose");
            }
            // line 389
            echo "                    </button>
                </div>
            </div>
            <small class=\"form-text text-muted\">";
            // line 392
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "forms.twig";
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
        return array (  2050 => 392,  2045 => 389,  2039 => 388,  2031 => 387,  2027 => 386,  2019 => 383,  2011 => 382,  2001 => 379,  1996 => 378,  1975 => 377,  1962 => 372,  1954 => 369,  1948 => 368,  1944 => 367,  1933 => 365,  1924 => 363,  1919 => 362,  1899 => 361,  1888 => 357,  1881 => 356,  1874 => 355,  1867 => 354,  1860 => 353,  1854 => 352,  1846 => 351,  1843 => 350,  1825 => 349,  1812 => 344,  1808 => 342,  1801 => 341,  1792 => 340,  1785 => 339,  1779 => 338,  1774 => 337,  1769 => 336,  1765 => 335,  1757 => 334,  1753 => 333,  1747 => 331,  1724 => 330,  1711 => 325,  1693 => 322,  1682 => 318,  1677 => 317,  1657 => 316,  1644 => 311,  1632 => 308,  1619 => 304,  1614 => 303,  1595 => 302,  1582 => 297,  1570 => 294,  1559 => 290,  1554 => 289,  1535 => 288,  1522 => 283,  1510 => 280,  1499 => 276,  1494 => 275,  1475 => 274,  1462 => 269,  1458 => 267,  1444 => 266,  1440 => 264,  1438 => 263,  1435 => 262,  1418 => 260,  1415 => 259,  1412 => 258,  1393 => 256,  1375 => 255,  1369 => 253,  1366 => 252,  1364 => 251,  1361 => 250,  1353 => 248,  1350 => 247,  1344 => 246,  1341 => 245,  1338 => 244,  1335 => 243,  1332 => 242,  1329 => 241,  1327 => 240,  1324 => 239,  1321 => 238,  1318 => 237,  1315 => 236,  1312 => 235,  1309 => 234,  1306 => 233,  1303 => 232,  1300 => 231,  1297 => 230,  1294 => 229,  1291 => 228,  1288 => 227,  1286 => 226,  1283 => 225,  1266 => 224,  1263 => 223,  1260 => 222,  1257 => 221,  1254 => 220,  1252 => 219,  1247 => 218,  1244 => 217,  1227 => 216,  1224 => 215,  1221 => 214,  1218 => 213,  1215 => 212,  1213 => 211,  1207 => 209,  1204 => 208,  1193 => 206,  1188 => 205,  1185 => 204,  1179 => 200,  1176 => 199,  1162 => 198,  1153 => 196,  1148 => 195,  1119 => 194,  1106 => 189,  1097 => 187,  1085 => 186,  1078 => 183,  1058 => 182,  1045 => 177,  1028 => 175,  1006 => 174,  999 => 171,  979 => 170,  957 => 164,  953 => 163,  947 => 161,  940 => 157,  928 => 156,  921 => 154,  916 => 153,  913 => 152,  893 => 151,  880 => 146,  870 => 145,  861 => 143,  856 => 142,  837 => 141,  824 => 136,  814 => 135,  805 => 133,  800 => 132,  781 => 131,  768 => 126,  752 => 125,  743 => 123,  738 => 122,  718 => 121,  708 => 118,  702 => 115,  686 => 114,  677 => 112,  672 => 111,  666 => 108,  658 => 105,  652 => 104,  648 => 103,  635 => 101,  617 => 98,  608 => 96,  603 => 95,  600 => 94,  575 => 93,  563 => 89,  559 => 87,  549 => 85,  541 => 83,  539 => 82,  525 => 79,  516 => 77,  511 => 76,  488 => 75,  475 => 70,  462 => 68,  457 => 66,  446 => 62,  441 => 61,  422 => 60,  409 => 55,  399 => 54,  390 => 52,  385 => 51,  366 => 50,  355 => 46,  339 => 44,  325 => 42,  323 => 41,  317 => 39,  299 => 38,  279 => 34,  276 => 33,  261 => 32,  248 => 27,  240 => 26,  237 => 25,  222 => 24,  209 => 19,  205 => 18,  202 => 17,  188 => 16,  172 => 13,  158 => 12,  145 => 7,  141 => 6,  136 => 4,  131 => 3,  114 => 2,  109 => 376,  106 => 360,  103 => 348,  100 => 329,  97 => 315,  94 => 301,  91 => 287,  88 => 273,  85 => 193,  82 => 181,  79 => 169,  76 => 150,  73 => 140,  70 => 130,  67 => 120,  64 => 92,  61 => 74,  58 => 59,  55 => 49,  52 => 37,  49 => 31,  46 => 23,  43 => 15,  40 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "forms.twig", "/var/www/html/cms_ubi/views/forms.twig");
    }
}
