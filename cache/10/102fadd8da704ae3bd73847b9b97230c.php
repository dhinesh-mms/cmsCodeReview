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

/* inline.twig */
class __TwigTemplate_feef2af4a0d488a0f5a1847c792eeabf extends Template
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
        // line 8
        echo "
";
        // line 12
        echo "
";
        // line 18
        echo "
";
        // line 24
        echo "
";
        // line 30
        echo "
";
        // line 40
        echo "
";
        // line 47
        echo "
";
        // line 69
        echo "
";
        // line 76
        echo "
";
        // line 83
        echo "
";
        // line 90
        echo "
";
        // line 99
        echo "
";
        // line 108
        echo "
";
        // line 159
        echo "
";
        // line 178
        echo "
";
        // line 189
        echo "
";
        // line 200
        echo "
";
        // line 211
        echo "
";
        // line 222
        echo "
";
        // line 238
        echo "
";
        // line 245
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
            echo "    <div class=\"form-group mr-1 mb-1 ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"control-label mr-1\" title=\"";
            // line 4
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <input readonly class=\"form-control\" value=\"";
            // line 5
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"></input>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 9
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
            // line 10
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

    // line 13
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
            // line 14
            echo "    <div class=\"";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 15
            echo ($context["text"] ?? null);
            echo "
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 19
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
            // line 20
            echo "    <div class=\"";
            if (($context["messageStyleClass"] ?? null)) {
                echo twig_escape_filter($this->env, ($context["messageStyleClass"] ?? null), "html", null, true);
            }
            echo " mr-1 ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <span>";
            // line 21
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</span>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 25
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
            // line 26
            echo "    <div class=\"row\">
        <div class=\"mr-3 alert alert-";
            // line 27
            if (($context["alertType"] ?? null)) {
                echo twig_escape_filter($this->env, ($context["alertType"] ?? null), "html", null, true);
            } else {
                echo "primary";
            }
            echo " ";
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

    // line 31
    public function macro_button($__title__ = null, $__type__ = null, $__link__ = null, $__groupClass__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "type" => $__type__,
            "link" => $__link__,
            "groupClass" => $__groupClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 32
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 33
            if ((($context["type"] ?? null) == "link")) {
                // line 34
                echo "            <a class=\"btn btn-white xibo-inline-btn mr-1 ml-0\" href=\"";
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 36
                echo "            <button class=\"btn btn-white xibo-inline-btn mr-1 ml-0\" type=\"";
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "</button>
        ";
            }
            // line 38
            echo "    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 41
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
            // line 42
            echo "    <div class=\"form-group mr-1 mb-1 ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"control-label mr-1\" title=\"";
            // line 43
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <input class=\"form-control\" name=\"";
            // line 44
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " />
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 48
    public function macro_inputWithTags($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__exactTag__ = null, $__exactTagTitle__ = null, $__logicalOperatorTitle__ = null, $__autoCompleteEnabled__ = 1, ...$__varargs__)
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
            "autoCompleteEnabled" => $__autoCompleteEnabled__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 49
            echo "    <div class=\"form-group mr-1 mb-1 ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"control-label mr-1\" title=\"";
            // line 50
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        ";
            // line 51
            if (($context["exactTag"] ?? null)) {
                // line 52
                echo "            <div class=\"input-group input-group-tags-exact\">
                <input class=\"form-control\" name=\"";
                // line 53
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" type=\"text\" id=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "\" data-role=\"tagsInputInline\" ";
                if ((($context["autoCompleteEnabled"] ?? null) == 1)) {
                    echo " data-auto-complete-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.search"), "html", null, true);
                    echo "?allTags=1\" ";
                }
                echo "  ";
                echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
                echo " />
                <div class=\"input-group-append input-group-addon\">
                    <div class=\"input-group-text\">
                        <input title=\"";
                // line 56
                echo twig_escape_filter($this->env, ($context["exactTagTitle"] ?? null), "html", null, true);
                echo "\" type=\"checkbox\" id=\"";
                echo twig_escape_filter($this->env, ($context["exactTag"] ?? null), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, ($context["exactTag"] ?? null), "html", null, true);
                echo "\">
                    </div>
                    <select class=\"custom-select\" id=\"logicalOperator\" name=\"logicalOperator\" title=\"";
                // line 58
                echo twig_escape_filter($this->env, ($context["logicalOperatorTitle"] ?? null), "html", null, true);
                echo "\" style=\"min-width:auto!important\">
                        <option value=\"OR\" selected>OR</option>
                        <option value=\"AND\">AND</option>
                    </select>
                </div>
            </div>
        ";
            } else {
                // line 65
                echo "            <input class=\"form-control\" name=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" type=\"text\" id=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "\" data-role=\"tagsInputInline\" ";
                if ((($context["autoCompleteEnabled"] ?? null) == 1)) {
                    echo " data-auto-complete-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.search"), "html", null, true);
                    echo "?allTags=1\" ";
                }
                echo "  ";
                echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
                echo " />
        ";
            }
            // line 67
            echo "    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 70
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
            // line 71
            echo "    <div class=\"form-group mr-1 mb-1 ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"control-label mr-1\" title=\"";
            // line 72
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <input class=\"form-control\" name=\"";
            // line 73
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
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 77
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
            // line 78
            echo "    <div class=\"form-group mr-1 mb-1 ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"control-label mr-1\" title=\"";
            // line 79
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <input class=\"form-control\" name=\"";
            // line 80
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"email\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " />
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 84
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
            // line 85
            echo "    <div class=\"form-group mr-1 mb-1 ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"control-label mr-1\" for=\"";
            // line 86
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <input class=\"form-control\" name=\"";
            // line 87
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"password\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " />
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 91
    public function macro_checkbox($__name__ = null, $__title__ = null, $__value__ = null, $__groupClass__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "groupClass" => $__groupClass__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 92
            echo "    <div class=\"form-group mt-2 mr-2 mb-1 ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <div class=\"form-check\">
            <input title=\"";
            // line 94
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" class=\"form-check-input\" type=\"checkbox\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" ";
            if ((($context["value"] ?? null) == 1)) {
                echo "checked";
            }
            echo ">
            <label class=\"form-check-label\" for=\"";
            // line 95
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 100
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
            // line 101
            echo "    <div class=\"form-group mt-2 mr-2 mb-1 ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" id=\"";
            // line 103
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
            // line 104
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 109
    public function macro_dropdown($__name__ = null, $__type__ = null, $__title__ = null, $__value__ = null, $__options__ = null, $__optionId__ = null, $__optionValue__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__callBack__ = null, $__dataAttributes__ = null, $__optionGroups__ = null, ...$__varargs__)
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
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 110
            echo "    <div class=\"form-group mr-1 mb-1 ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"control-label mr-1\" for=\"";
            // line 111
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <select class=\"form-control\" ";
            // line 112
            if ((($context["type"] ?? null) == "dropdownmulti")) {
                echo "multiple";
            }
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["callBack"] ?? null), "html", null, true);
            echo "
        ";
            // line 113
            if ((($context["type"] ?? null) == "dropdownmulti")) {
                // line 114
                echo "            data-allow-clear=\"true\"
            data-placeholder--id=null
            data-placeholder--value=\"\"
        ";
            }
            // line 118
            echo "        ";
            if ((twig_length_filter($this->env, ($context["dataAttributes"] ?? null)) > 0)) {
                // line 119
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["dataAttributes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 120
                    echo "            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 120), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "value", [], "any", false, false, false, 120), "html", null, true);
                    echo "\"
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 122
                echo "        ";
            }
            echo ">

        ";
            // line 124
            $context["hasGroups"] = (twig_length_filter($this->env, ($context["optionGroups"] ?? null)) > 0);
            // line 125
            echo "        ";
            if ( !($context["hasGroups"] ?? null)) {
                // line 126
                echo "            ";
                $context["optionGroups"] = ["label" => "General"];
                // line 127
                echo "        ";
            }
            // line 128
            echo "
        ";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["optionGroups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 130
                echo "            ";
                if (($context["hasGroups"] ?? null)) {
                    // line 131
                    echo "                <optgroup label=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "label", [], "any", false, false, false, 131), "html", null, true);
                    echo "\">
                ";
                    // line 132
                    $context["tempOptions"] = twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 132), [], "any", false, false, false, 132);
                    // line 133
                    echo "            ";
                } else {
                    // line 134
                    echo "                ";
                    $context["tempOptions"] = ($context["options"] ?? null);
                    // line 135
                    echo "            ";
                }
                // line 136
                echo "
            ";
                // line 137
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["tempOptions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 138
                    echo "
                ";
                    // line 139
                    $context["itemOptionId"] = twig_get_attribute($this->env, $this->source, $context["option"], ($context["optionId"] ?? null), [], "any", false, false, false, 139);
                    // line 140
                    echo "                ";
                    $context["itemOptionValue"] = twig_get_attribute($this->env, $this->source, $context["option"], ($context["optionValue"] ?? null), [], "any", false, false, false, 140);
                    // line 141
                    echo "
                ";
                    // line 142
                    if ((($context["type"] ?? null) == "dropdownmulti")) {
                        // line 143
                        echo "                    ";
                        $context["selected"] = twig_in_filter(($context["itemOptionId"] ?? null), ($context["value"] ?? null));
                        // line 144
                        echo "                ";
                    } else {
                        // line 145
                        echo "                    ";
                        $context["selected"] = (($context["itemOptionId"] ?? null) == ($context["value"] ?? null));
                        // line 146
                        echo "                ";
                    }
                    // line 147
                    echo "
                <option value=\"";
                    // line 148
                    echo twig_escape_filter($this->env, ($context["itemOptionId"] ?? null), "html", null, true);
                    echo "\" ";
                    if (($context["selected"] ?? null)) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, ($context["itemOptionValue"] ?? null), "html", null, true);
                    echo "</option>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                echo "
            ";
                // line 151
                if (($context["hasGroups"] ?? null)) {
                    // line 152
                    echo "                </optgroup>
            ";
                }
                // line 154
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "
        </select>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 160
    public function macro_permissions($__name__ = null, $__options__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 161
            echo "    <table class=\"table table-bordered\">
        <tr>
            <th>";
            // line 163
            echo __("Group");
            echo "</th>
            <th>";
            // line 164
            echo __("View");
            echo "</th>
            <th>";
            // line 165
            echo __("Edit");
            echo "</th>
            <th>";
            // line 166
            echo __("Delete");
            echo "</th>
        </tr>
        ";
            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 169
                echo "            <tr>
                <td>";
                // line 170
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "</td>
                <td><input type=\"checkbox\" name=\"";
                // line 171
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, ($context["value_view"] ?? null), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, ($context["value_view_checked"] ?? null), "html", null, true);
                echo "></td>
                <td><input type=\"checkbox\" name=\"";
                // line 172
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, ($context["value_edit"] ?? null), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, ($context["value_edit_checked"] ?? null), "html", null, true);
                echo "></td>
                <td><input type=\"checkbox\" name=\"";
                // line 173
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, ($context["value_del"] ?? null), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, ($context["value_del_checked"] ?? null), "html", null, true);
                echo "></td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "    </table>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 179
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
            // line 180
            echo "    <div class=\"form-group mr-1 mb-1 ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"control-label mr-1\" title=\"";
            // line 181
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"input-group\">
            <div class=\"input-group-prepend input-group-text date-open-button\" role=\"button\"><i class=\"fa fa-calendar\"></i></div>
            <input class=\"form-control dateControl date\" type=\"text\" ";
            // line 184
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
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 190
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
            // line 191
            echo "    <div class=\"form-group mr-1 mb-1 ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"control-label mr-1\" title=\"";
            // line 192
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"input-group\">
            <span class=\"input-group-prepend input-group-text date-open-button\" role=\"button\"><i class=\"fa fa-calendar\"></i></span>
            <input class=\"form-control dateControl month\" type=\"text\" ";
            // line 195
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
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 201
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
            // line 202
            echo "    <div class=\"form-group mr-1 mb-1 ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"control-label mr-1\" title=\"";
            // line 203
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, ($context["linkedName"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"input-group\">
            <span class=\"input-group-prepend input-group-text date-open-button\" role=\"button\"><i class=\"fa fa-calendar\"></i></span>
            <input class=\"form-control dateControl dateTime\" type=\"text\" ";
            // line 206
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
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 212
    public function macro_time($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
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
            // line 213
            echo "    <div class=\"form-group mr-1 mb-1 ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"control-label mr-1 ";
            // line 214
            if ((($context["title"] ?? null) == "")) {
                echo "d-none";
            }
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"input-group\">
            <span class=\"input-group-prepend input-group-text date-open-button\" role=\"button\"><i class=\"fa fa-calendar\"></i></span>
            <input class=\"form-control dateControl time\" type=\"text\" ";
            // line 217
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
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 223
    public function macro_switch($__name__ = null, $__title__ = null, $__value__ = null, $__labelWidth__ = null, $__switchSize__ = null, $__onText__ = null, $__offText__ = null, $__groupClass__ = null, $__accessKey__ = null, $__disabled__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
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
            // line 224
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <div class=\"checkbox\">
            <input type=\"checkbox\" class=\"bootstrap-switch-target\" id=\"";
            // line 226
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\"
                    ";
            // line 227
            if ((($context["value"] ?? null) == 1)) {
                echo "checked";
            }
            // line 228
            echo "                    ";
            if ((($context["disabled"] ?? null) == 1)) {
                echo "disabled";
            }
            // line 229
            echo "                    data-label-text=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\"
                    ";
            // line 230
            if (!twig_in_filter(($context["onText"] ?? null), [null, ($context["undefined"] ?? null), ""])) {
                echo " data-on-text=\"";
                echo twig_escape_filter($this->env, ($context["onText"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 231
            echo "                    ";
            if (!twig_in_filter(($context["offText"] ?? null), [null, ($context["undefined"] ?? null), ""])) {
                echo " data-off-text=\"";
                echo twig_escape_filter($this->env, ($context["offText"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 232
            echo "                    ";
            if (!twig_in_filter(($context["switchSize"] ?? null), [null, ($context["undefined"] ?? null), ""])) {
                echo "data-size=\"";
                echo twig_escape_filter($this->env, ($context["switchSize"] ?? null), "html", null, true);
                echo "\"";
            } else {
                echo "data-size=\"small\"";
            }
            // line 233
            echo "                    ";
            if (!twig_in_filter(($context["labelWidth"] ?? null), [null, ($context["undefined"] ?? null), ""])) {
                echo " data-label-width=\"";
                echo twig_escape_filter($this->env, ($context["labelWidth"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 234
            echo "            >
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 239
    public function macro_color($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
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
            // line 240
            echo "    <div class=\"form-group mr-1 mb-1 ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"control-label mr-1\" title=\"";
            // line 241
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <input class=\"form-control XiboColorPicker\" name=\"";
            // line 242
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " />
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 246
    public function macro_inputNameGrid($__name__ = null, $__title__ = null, $__groupClass__ = null, $__useRegexName__ = null, $__logicalOperatorName__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "groupClass" => $__groupClass__,
            "useRegexName" => $__useRegexName__,
            "logicalOperatorName" => $__logicalOperatorName__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 247
            echo "    <div class=\"form-group mr-1 mb-1 ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"control-label mr-1\" title=\"\" for=\"";
            // line 248
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div>
            <div class=\"input-group\">
                <input class=\"form-control\" name=\"";
            // line 251
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"\">
                <div class=\"input-group-append input-group-addon\">
                    <div class=\"input-group-text\">
                        <input title=\"";
            // line 254
            echo __("Use Regex?");
            echo "\" type=\"checkbox\" ";
            if (($context["useRegexName"] ?? null)) {
                echo " id=\"";
                echo twig_escape_filter($this->env, ($context["useRegexName"] ?? null), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, ($context["useRegexName"] ?? null), "html", null, true);
                echo "\" ";
            } else {
                echo " id=\"useRegexForName\" name=\"useRegexForName\"";
            }
            echo ">
                    </div>
                    <select class=\"custom-select\" ";
            // line 256
            if (($context["logicalOperatorName"] ?? null)) {
                echo " id=\"";
                echo twig_escape_filter($this->env, ($context["logicalOperatorName"] ?? null), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, ($context["logicalOperatorName"] ?? null), "html", null, true);
                echo "\" ";
            } else {
                echo " id=\"logicalOperatorName\" name=\"logicalOperatorName\"";
            }
            // line 257
            echo "                            title=\"";
            echo __("When filtering by multiple names, which logical operator should be used?");
            echo "\" style=\"min-width:auto!important\">
                        <option value=\"OR\" selected>OR</option>
                        <option value=\"AND\">AND</option>
                    </select>
                </div>
            </div>
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
        return "inline.twig";
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
        return array (  1479 => 257,  1469 => 256,  1454 => 254,  1446 => 251,  1438 => 248,  1433 => 247,  1416 => 246,  1398 => 242,  1388 => 241,  1383 => 240,  1364 => 239,  1352 => 234,  1345 => 233,  1336 => 232,  1329 => 231,  1323 => 230,  1318 => 229,  1313 => 228,  1309 => 227,  1301 => 226,  1295 => 224,  1273 => 223,  1253 => 217,  1237 => 214,  1232 => 213,  1213 => 212,  1193 => 206,  1181 => 203,  1176 => 202,  1157 => 201,  1137 => 195,  1125 => 192,  1120 => 191,  1101 => 190,  1081 => 184,  1069 => 181,  1064 => 180,  1045 => 179,  1035 => 176,  1022 => 173,  1014 => 172,  1006 => 171,  1002 => 170,  999 => 169,  995 => 168,  990 => 166,  986 => 165,  982 => 164,  978 => 163,  974 => 161,  960 => 160,  948 => 155,  942 => 154,  938 => 152,  936 => 151,  933 => 150,  919 => 148,  916 => 147,  913 => 146,  910 => 145,  907 => 144,  904 => 143,  902 => 142,  899 => 141,  896 => 140,  894 => 139,  891 => 138,  887 => 137,  884 => 136,  881 => 135,  878 => 134,  875 => 133,  873 => 132,  868 => 131,  865 => 130,  861 => 129,  858 => 128,  855 => 127,  852 => 126,  849 => 125,  847 => 124,  841 => 122,  830 => 120,  825 => 119,  822 => 118,  816 => 114,  814 => 113,  802 => 112,  792 => 111,  787 => 110,  761 => 109,  742 => 104,  730 => 103,  724 => 101,  704 => 100,  687 => 95,  675 => 94,  669 => 92,  652 => 91,  634 => 87,  624 => 86,  619 => 85,  600 => 84,  582 => 80,  572 => 79,  567 => 78,  548 => 77,  524 => 73,  514 => 72,  509 => 71,  489 => 70,  479 => 67,  461 => 65,  451 => 58,  442 => 56,  424 => 53,  421 => 52,  419 => 51,  409 => 50,  404 => 49,  381 => 48,  363 => 44,  353 => 43,  348 => 42,  329 => 41,  319 => 38,  311 => 36,  303 => 34,  301 => 33,  296 => 32,  280 => 31,  260 => 27,  257 => 26,  242 => 25,  230 => 21,  221 => 20,  206 => 19,  194 => 15,  189 => 14,  175 => 13,  159 => 10,  145 => 9,  133 => 5,  127 => 4,  122 => 3,  105 => 2,  100 => 245,  97 => 238,  94 => 222,  91 => 211,  88 => 200,  85 => 189,  82 => 178,  79 => 159,  76 => 108,  73 => 99,  70 => 90,  67 => 83,  64 => 76,  61 => 69,  58 => 47,  55 => 40,  52 => 30,  49 => 24,  46 => 18,  43 => 12,  40 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "inline.twig", "/var/www/html/cms_ubi/views/inline.twig");
    }
}
