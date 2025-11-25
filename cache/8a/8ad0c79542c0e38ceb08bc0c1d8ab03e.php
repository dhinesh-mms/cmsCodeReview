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

/* __string_template__a91f0fb29a92c5537edb1f8f2eed1e99 */
class __TwigTemplate_11475f66a384308b4bd9aa8d76df1856 extends Template
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
<script type=\"text/javascript\">
    ";
        // line 3
        echo ($context["javaScript"] ?? null);
        echo "
</script>
        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__a91f0fb29a92c5537edb1f8f2eed1e99";
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
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a91f0fb29a92c5537edb1f8f2eed1e99", "");
    }
}
