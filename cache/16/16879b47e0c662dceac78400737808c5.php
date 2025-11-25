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

/* licence.twig */
class __TwigTemplate_7866fe05574a1d3a37a235b9552d76f5 extends Template
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
        echo "<h2>Xibo <small> - Simple. Intuitive. Impactful. Secure.</small></h2>
<p>Xibo Digital Signage - <a target=\"_blank\"  href=\"https://xibosignage.com\" title=\"Xibo Website\">xibosignage.com</a>.<br/>

    Copyright &copy 2006-";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Xibo Signage Ltd and the
    <a target=\"_blank\" href=\"https://github.com/orgs/xibosignage/people\" title=\"Xibo Developers\">Xibo Developers</a>.</p>

<p>
    Version ";
        // line 8
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "<br/><span class=\"badge badge-info\">SHA:";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "</span>
</p>

<h2>Licence</h2>
<p>Xibo is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    any later version. </p>

<p>Xibo is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.</p>

<p>You should have received a copy of the GNU Affero General Public License
    along with Xibo. If not, see <a target=\"_blank\" href=\"http://opensource.org/licenses/AGPL-3.0\">opensource.org/licenses/AGPL-3.0</a>. </p>

<p>Further guideance is available <a href=\"https://xibosignage.com/eula\">here</a>. If in doubt, please seek professional legal advice.</p>

<h2>Source Code</h2>
<p>As an end user of the Xibo software you are entitled to download and view the source code. You may do
    so from <a target=\"_blank\"  id=\"source-link\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["sourceUrl"] ?? null), "html", null, true);
        echo "\">GitHub</a>.
    As a service provider you <strong>MUST</strong> provide your end users notification of and access to the source code.</p>

<h2>Third Party Licenses</h2>
<p>Xibo uses some third party libraries and tools - these are provided with the software under licences compatible with the AGPLv3. All licences for
    third party libraries are included with that library and attributed in the code.</p>

<h3>Fonts</h3>
<p>Xibo includes fonts licensed under the <a href=\"http://scripts.sil.org/OFL_web\">OFL</a> and <a href=\"http://creativecommons.org/publicdomain/zero/1.0/\">CC-0</a>.</p>

<p>
<ul>
    <li><strong>Aileron Regular (CC-0)</strong>: <a href=\"https://fontlibrary.org/en/font/aileron#Aileron-Regular\">https://fontlibrary.org/en/font/aileron#Aileron-Regular</a>.</li>
    <li><strong>Aileron Heavy (CC-0)</strong>: <a href=\"https://fontlibrary.org/en/font/aileron#Aileron-Heavy\">https://fontlibrary.org/en/font/aileron#Aileron-Heavy</a>.</li>
    <li><strong>Dancing Script Regular (OFL)</strong>: <a href=\"https://fontlibrary.org/en/font/dancing\">https://fontlibrary.org/en/font/dancing</a>.</li>
    <li><strong>Linear Regular (OFL)</strong>: <a href=\"https://fontlibrary.org/en/font/linear-regular#Linear-Regular\">https://fontlibrary.org/en/font/linear-regular#Linear-Regular</a>.</li>
    <li><strong>Open Sans (OFL)</strong>: <a href=\"https://fonts.google.com/specimen/Open+Sans?query=open+sans\">https://fonts.google.com/specimen/Open+Sans?query=open+sans</a>.</li>
    <li><strong>Poppins (OFL)</strong>: <a href=\"https://fonts.google.com/specimen/Poppins\">https://fonts.google.com/specimen/Poppins</a>.</li>
    <li><strong>Railway Regular (OFL)</strong>: <a href=\"https://fontlibrary.org/en/font/railway-sans#Railway-Regular\">https://fontlibrary.org/en/font/railway-sans#Railway-Regular</a>.</li>
</ul>
</p>

<h2>Weather</h2>
<p>Weather data provided by <a href=\"https://openweathermap.org/\">OpenWeather</a> is provided under <a href=\"http://creativecommons.org/licenses/by-sa/4.0/\">CC-BY-SA 4.0</a>
    and <a href=\"http://opendatacommons.org/licenses/odbl/\">oDbl</a>.</p>

<h2>Commercial</h2>
<p>Xibo is supported and maintained by <a target=\"_blank\"  href=\"https://xibosignage.com\" title=\"Xibo Commercial Sponsor\">Xibo Signage Ltd</a>.</p>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "licence.twig";
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
        return array (  75 => 29,  49 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "licence.twig", "/var/www/html/cms_ubi/views/licence.twig");
    }
}
