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

/* display-page-manage.twig */
class __TwigTemplate_0abcbf2b4a01022232fa9eacf5c00188 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "display-page-manage.twig", 9)->unwrap();
        // line 10
        $context["displayName"] = twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "display", [], "any", false, false, false, 10);
        // line 8
        $this->parent = $this->loadTemplate("authed.twig", "display-page-manage.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        /* xgettext:no-php-format */        echo strtr(__("Manage %displayName%"), array("%displayName%" => ($context["displayName"] ?? null), ));
        echo " | ";
    }

    // line 14
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    ";
        $context["displayLastAccessed"] = twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "lastAccessed", [], "any", false, false, false, 15);
        // line 16
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "loggedIn", [], "any", false, false, false, 16) == 1)) {
            // line 17
            echo "        ";
            ob_start(function () { return ''; });
            /* xgettext:no-php-format */            echo strtr(__("Display %displayName% is currently logged-in, seen %timeAgo%."), array("%displayName%" => ($context["displayName"] ?? null), "%timeAgo%" => ($context["timeAgo"] ?? null), ));
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "        ";
            ob_start(function () { return ''; });
            /* xgettext:no-php-format */            echo strtr(__("Display %displayName% is not logged in at the moment and last accessed at <span class=\"unixDate\">%displayLastAccessed%</span>"), array("%displayName%" => ($context["displayName"] ?? null), "%displayLastAccessed%" => ($context["displayLastAccessed"] ?? null), ));
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <h1 class=\"text-center\">";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
    ";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "mediaInventoryStatus", [], "any", false, false, false, 22) == 3)) {
            // line 23
            echo "    <p class=\"text-center\">";
            echo __("This Display hasn't connected since updates have been made in the CMS. The below information will be updated when it has.");
            echo "</p>
    ";
        }
        // line 25
        echo "    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">";
        // line 28
        echo __("File Status - Count of Files");
        echo "</div>
                <div class=\"widget-body\">
                    <canvas id=\"downloadedCountPie\" style=\"clear:both; margin-top:25px;\" width=\"230\"></canvas>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">";
        // line 36
        echo __("File Status - Size of Files");
        echo "</div>
                <div class=\"widget-body\">
                    <canvas id=\"downloadedSizePie\" style=\"clear:both; margin-top:25px;\" width=\"230\"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                ";
        // line 46
        if ((twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "clientCode", [], "any", false, false, false, 46) < 300)) {
            // line 47
            echo "                    <div class=\"widget-body medium\">
                        <p class=\"alert alert-info\">
                            ";
            // line 49
            echo twig_escape_filter($this->env, __("This player is too old to show faults. Please upgrade it to v3 or later."), "html", null, true);
            echo "
                        </p>
                    </div>
                ";
        } else {
            // line 53
            echo "                <div class=\"widget-title\">
                    <button id=\"refreshLog\" class=\"btn btn-sm pull-right\"><span class=\"fa fa-refresh\"></span></button>
                    ";
            // line 55
            echo __("Reported Player Faults");
            // line 56
            echo "                </div>
                <div class=\"widget-body medium no-padding\">
                    <table id=\"playerFaults\" class=\"table table-striped\" data-url=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.faults.search", ["displayId" => twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "displayId", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\">
                        <thead>
                        <tr>
                            <th>";
            // line 61
            echo __("Code");
            echo "</th>
                            <th>";
            // line 62
            echo __("Reason");
            echo "</th>
                            <th>";
            // line 63
            echo __("Date");
            echo "</th>
                            <th>";
            // line 64
            echo __("Expires");
            echo "</th>
                            <th>";
            // line 65
            echo __("Schedule ID");
            echo "</th>
                            <th>";
            // line 66
            echo __("Layout ID");
            echo "</th>
                            <th>";
            // line 67
            echo __("Region ID");
            echo "</th>
                            <th>";
            // line 68
            echo __("Widget ID");
            echo "</th>
                            <th>";
            // line 69
            echo __("Media ID");
            echo "</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                ";
        }
        // line 78
        echo "            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">";
        // line 82
        echo __("Dependencies");
        echo "</div>
                <div class=\"widget-body medium no-padding\">
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>";
        // line 87
        echo __("Name");
        echo "</th>
                            <th>";
        // line 88
        echo __("Type");
        echo "</th>
                            <th>";
        // line 89
        echo __("Complete");
        echo "</th>
                            <th>";
        // line 90
        echo __("Downloaded");
        echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                            ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["inventory"] ?? null), "dependencies", [], "any", false, false, false, 94));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 95
            echo "                                <tr>
                                    <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "path", [], "any", false, false, false, 96), "html", null, true);
            echo "</td>
                                    <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "fileType", [], "any", false, false, false, 97), "html", null, true);
            echo "</td>
                                    <td>
                                        <span class=\"fa ";
            // line 99
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "complete", [], "any", false, false, false, 99) == 1)) {
                echo "fa-check";
            } else {
                echo "fa-download";
            }
            echo "\"></span>
                                    </td>
                                    <td>";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Xibo\Twig\ByteFormatterTwigExtension']->byteFormat(twig_get_attribute($this->env, $this->source, $context["item"], "bytesRequested", [], "any", false, false, false, 101)), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">";
        // line 113
        echo __("Layouts");
        echo "</div>
                <div class=\"widget-body medium no-padding\">
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>";
        // line 118
        echo __("ID");
        echo "</th>
                            <th>";
        // line 119
        echo __("Name");
        echo "</th>
                            <th>";
        // line 120
        echo __("Size");
        echo "</th>
                            <th>";
        // line 121
        echo __("Complete");
        echo "</th>
                            <th>";
        // line 122
        echo __("Downloaded");
        echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["inventory"] ?? null), "layouts", [], "any", false, false, false, 126));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 127
            echo "                            <tr>
                                <td>";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "itemId", [], "any", false, false, false, 128), "html", null, true);
            echo "</td>
                                <td>";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "layout", [], "any", false, false, false, 129), "html", null, true);
            echo "</td>
                                <td>";
            // line 130
            echo twig_escape_filter($this->env, $this->extensions['Xibo\Twig\ByteFormatterTwigExtension']->byteFormat(twig_get_attribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 130)), "html", null, true);
            echo "</td>
                                <td>
                                    <span class=\"fa ";
            // line 132
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "complete", [], "any", false, false, false, 132) == 1)) {
                echo "fa-check";
            } else {
                echo "fa-download";
            }
            echo "\"></span>
                                </td>
                                <td>";
            // line 134
            echo twig_escape_filter($this->env, $this->extensions['Xibo\Twig\ByteFormatterTwigExtension']->byteFormat(twig_get_attribute($this->env, $this->source, $context["item"], "bytesRequested", [], "any", false, false, false, 134)), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    ";
        // line 145
        echo __("Media");
        // line 146
        echo "                </div>
                <div class=\"widget-body medium no-padding\">
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>";
        // line 151
        echo __("ID");
        echo "</th>
                            <th>";
        // line 152
        echo __("Name");
        echo "</th>
                            <th>";
        // line 153
        echo __("Type");
        echo "</th>
                            <th>";
        // line 154
        echo __("File Name");
        echo "</th>
                            <th>";
        // line 155
        echo __("Size");
        echo "</th>
                            <th>";
        // line 156
        echo __("Complete");
        echo "</th>
                            <th>";
        // line 157
        echo __("Downloaded");
        echo "</th>
                            <th>";
        // line 158
        echo __("Released");
        echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                            ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["inventory"] ?? null), "media", [], "any", false, false, false, 162));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 163
            echo "                                <tr>
                                    <td>";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "itemId", [], "any", false, false, false, 164), "html", null, true);
            echo "</td>
                                    <td>";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 165), "html", null, true);
            echo "</td>
                                    <td>";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 166), "html", null, true);
            echo "</td>
                                    <td>";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "storedAs", [], "any", false, false, false, 167), "html", null, true);
            echo "</td>
                                    <td>";
            // line 168
            echo twig_escape_filter($this->env, $this->extensions['Xibo\Twig\ByteFormatterTwigExtension']->byteFormat(twig_get_attribute($this->env, $this->source, $context["item"], "size", [], "any", false, false, false, 168)), "html", null, true);
            echo "</td>
                                    <td title=\"";
            // line 169
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "lastUsed", [], "any", false, false, false, 169) == 0)) {
                echo twig_escape_filter($this->env, ($context["nonceNotUsed"] ?? null), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, ($context["nonceUsed"] ?? null), "html", null, true);
            }
            echo "\">
                                        <span class=\"fa ";
            // line 170
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "complete", [], "any", false, false, false, 170) == 1)) {
                echo "fa-check";
            } else {
                echo "fa-download";
            }
            echo "\"></span>
                                    </td>
                                    <td>";
            // line 172
            echo twig_escape_filter($this->env, $this->extensions['Xibo\Twig\ByteFormatterTwigExtension']->byteFormat(twig_get_attribute($this->env, $this->source, $context["item"], "bytesRequested", [], "any", false, false, false, 172)), "html", null, true);
            echo "</td>
                                    <td>
                                        <span class=\"fa ";
            // line 174
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "released", [], "any", false, false, false, 174) == 1)) {
                echo "fa-check";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["item"], "released", [], "any", false, false, false, 174) == 0)) {
                echo "fa-cogs";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["item"], "released", [], "any", false, false, false, 174) == 2)) {
                echo "fa-times";
            }
            echo "\"></span>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">";
        // line 187
        echo __("Widgets");
        echo "</div>
                <div class=\"widget-body medium no-padding\">
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>";
        // line 192
        echo __("ID");
        echo "</th>
                            <th>";
        // line 193
        echo __("Name");
        echo "</th>
                            <th>";
        // line 194
        echo __("Complete");
        echo "</th>
                            <th>";
        // line 195
        echo __("Downloaded");
        echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["inventory"] ?? null), "widgets", [], "any", false, false, false, 199));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 200
            echo "                            <tr>
                                <td>";
            // line 201
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "itemId", [], "any", false, false, false, 201), "html", null, true);
            echo "</td>
                                <td>";
            // line 202
            if (twig_get_attribute($this->env, $this->source, $context["item"], "widgetName", [], "any", false, false, false, 202)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "widgetName", [], "any", false, false, false, 202), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "widgetType", [], "any", false, false, false, 202), "html", null, true);
            }
            echo "</td>
                                <td title=\"";
            // line 203
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "lastUsed", [], "any", false, false, false, 203) == 0)) {
                echo twig_escape_filter($this->env, ($context["nonceNotUsed"] ?? null), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, ($context["nonceUsed"] ?? null), "html", null, true);
            }
            echo "\">
                                    <span class=\"fa ";
            // line 204
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "complete", [], "any", false, false, false, 204) == 1)) {
                echo "fa-check";
            } else {
                echo "fa-download";
            }
            echo "\"></span>
                                </td>
                                <td>";
            // line 206
            echo twig_escape_filter($this->env, $this->extensions['Xibo\Twig\ByteFormatterTwigExtension']->byteFormat(twig_get_attribute($this->env, $this->source, $context["item"], "bytesRequested", [], "any", false, false, false, 206)), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">";
        // line 216
        echo __("Widget Data");
        echo "</div>
                <div class=\"widget-body medium no-padding\">
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>";
        // line 221
        echo __("ID");
        echo "</th>
                            <th>";
        // line 222
        echo __("Name");
        echo "</th>
                            <th>";
        // line 223
        echo __("Downloaded");
        echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["inventory"] ?? null), "widgetData", [], "any", false, false, false, 227));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 228
            echo "                            <tr>
                                <td>";
            // line 229
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "widgetId", [], "any", false, false, false, 229), "html", null, true);
            echo "</td>
                                <td>";
            // line 230
            if (twig_get_attribute($this->env, $this->source, $context["item"], "widgetName", [], "any", false, false, false, 230)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "widgetName", [], "any", false, false, false, 230), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "widgetType", [], "any", false, false, false, 230), "html", null, true);
            }
            echo "</td>
                                <td>";
            // line 231
            echo twig_escape_filter($this->env, $this->extensions['Xibo\Twig\ByteFormatterTwigExtension']->byteFormat(twig_get_attribute($this->env, $this->source, $context["item"], "bytesRequested", [], "any", false, false, false, 231)), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 240
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displays.reporting"], "method", false, false, false, 240)) {
            // line 241
            echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"widget\">
                <div class=\"widget-title\">";
            // line 244
            echo __("Bandwidth");
            echo "</div>
                <div class=\"widget-body\">
                    <div class=\"XiboGrid\" id=\"";
            // line 246
            echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
            echo "\">
                        <div class=\"XiboFilter\">
                            <div class=\"FilterDiv card-body\" id=\"bandwidthFilter\">
                                <form class=\"form-inline\">
                                    ";
            // line 250
            echo twig_call_macro($macros["inline"], "macro_dateMonth", ["fromDt", "From Date", twig_get_attribute($this->env, $this->source, ($context["defaults"] ?? null), "fromDate", [], "any", false, false, false, 250), "", "", "", ""], 250, $context, $this->getSourceContext());
            echo "
                                    ";
            // line 251
            echo twig_call_macro($macros["inline"], "macro_dateMonth", ["toDt", "To Date", twig_get_attribute($this->env, $this->source, ($context["defaults"] ?? null), "toDate", [], "any", false, false, false, 251), "", "", "", ""], 251, $context, $this->getSourceContext());
            echo "
                                    ";
            // line 252
            echo twig_call_macro($macros["inline"], "macro_hidden", ["displayId", twig_get_attribute($this->env, $this->source, ($context["display"] ?? null), "displayId", [], "any", false, false, false, 252)], 252, $context, $this->getSourceContext());
            echo "
                                </form>
                            </div>
                        </div>
                        <div class=\"XiboData\">
                            <canvas id=\"bandwidthChart\" style=\"clear:both; margin-top:25px;\" height=\"330\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        }
    }

    // line 267
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 268
        echo "    <script type=\"text/javascript\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">

        \$(document).ready(function() {
            const \$playerFaults = \$('#playerFaults');
            if (\$playerFaults.length < 0) {
              return;
            }
            var table = \$playerFaults.DataTable({
                language: dataTablesLanguage,
                dom: dataTablesTemplate,
                serverSide: true, stateSave: true, stateDuration: 0,
                stateLoadCallback: dataTableStateLoadCallback,
                stateSaveCallback: dataTableStateSaveCallback,
                filter: false,
                responsive: true,
                searchDelay: 3000,
                order: [[2, \"desc\"]],
                ajax: {
                    url: \$playerFaults.data().url,
                },
                \"columns\": [
                    {\"data\": \"code\", responsivePriority: 1, className: 'all'},
                    {\"data\": \"reason\", responsivePriority: 1, className: 'all'},
                    {\"data\": \"incidentDt\", responsivePriority: 1, className: 'all'},
                    {\"data\": \"expires\", responsivePriority: 1, className: 'all'},
                    {\"data\": \"scheduleId\", responsivePriority: 99, className: 'none'},
                    {\"data\": \"layoutId\", responsivePriority: 99, className: 'none'},
                    {\"data\": \"regionId\", responsivePriority: 99, className: 'none'},
                    {\"data\": \"widgetId\", responsivePriority: 99, className: 'none'},
                    {\"data\": \"mediaId\", responsivePriority: 99, className: 'none'}
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);

            \$(\"#refreshLog\").click(function () {
                table.ajax.reload();
            });
        });

        var bandwidthChart = null;

        function setBandwidthChart() {
            \$.ajax({
                type: \"get\",
                url: \"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("stats.bandwidth.data"), "html", null, true);
        echo "\",
                cache: false,
                dataType: \"json\",
                data: \$(\"#bandwidthFilter\").find(\"form\").serialize(),
                success: function(response) {
                    if (bandwidthChart !== undefined && bandwidthChart !== null) {
                        bandwidthChart.destroy();
                    }

                    if (response.extra.data.length <= 0) {
                        return;
                    }

                    // Create our chart
                    bandwidthChart = new Chart(\$(\"#bandwidthChart\"), {
                        type: \"bar\",
                        data: {
                            labels: response.extra.labels,
                            datasets: [{
                                label: \"";
        // line 333
        echo __("Bandwidth");
        echo "\",
                                backgroundColor: \"rgb(11, 98, 164)\",
                                data: response.extra.data
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    scaleLabel: {
                                        display: true,
                                        labelString: response.extra.postUnits,
                                    }
                                }]
                            },
                            legend: {
                                display: false
                            },
                            maintainAspectRatio: false,
                        }
                    });
                }
            });
        }

        \$(document).ready(function() {

            ";
        // line 359
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displays.reporting"], "method", false, false, false, 359)) {
            // line 360
            echo "            setBandwidthChart();

            // Bind to form change
            \$(\"#bandwidthFilter input, #bandwidthFilter select\").change(function() {
                setBandwidthChart();
            });
            ";
        }
        // line 367
        echo "
            // Find all Unix Dates and sort them out
            \$(\"span.unixDate\").each(function() {
                \$(this).html(moment(\$(this).html(), \"X\").format(jsDateFormat));
            });

            // Find all ISO Dates and sort them out
            \$(\"span.isoDate\").each(function() {
                \$(this).html(moment(\$(this).html()).format(jsDateFormat));
            });

            // Handle the Pie chart for download status
            var downloadedCountPie = new Chart(\$(\"#downloadedCountPie\"), {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [";
        // line 383
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "countComplete", [], "any", false, false, false, 383), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "countRemaining", [], "any", false, false, false, 383), "html", null, true);
        echo "],
                        backgroundColor: [\"#00CC00\", \"#FF0000\"]
                    }],
                    labels: [
                        \"";
        // line 387
        echo __("Downloaded");
        echo "\", \"";
        echo __("Pending");
        echo "\"
                    ]
                }
            });

            var downloadedSizePie = new Chart(\$(\"#downloadedSizePie\"), {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [";
        // line 396
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "sizeComplete", [], "any", false, false, false, 396), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "sizeRemaining", [], "any", false, false, false, 396), "html", null, true);
        echo "],
                        backgroundColor: [\"#00CC00\", \"#FF0000\"]
                    }],
                    labels: [
                        \"";
        // line 400
        echo __("Downloaded");
        echo "\" + \" ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "units", [], "any", false, false, false, 400), "html", null, true);
        echo "\", \"";
        echo __("Pending");
        echo "\" + \" ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "units", [], "any", false, false, false, 400), "html", null, true);
        echo "\"
                    ]
                },
            });
        });
    </script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "display-page-manage.twig";
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
        return array (  830 => 400,  821 => 396,  807 => 387,  798 => 383,  780 => 367,  771 => 360,  769 => 359,  740 => 333,  718 => 314,  668 => 268,  664 => 267,  646 => 252,  642 => 251,  638 => 250,  631 => 246,  626 => 244,  621 => 241,  619 => 240,  611 => 234,  602 => 231,  594 => 230,  590 => 229,  587 => 228,  583 => 227,  576 => 223,  572 => 222,  568 => 221,  560 => 216,  551 => 209,  542 => 206,  533 => 204,  525 => 203,  517 => 202,  513 => 201,  510 => 200,  506 => 199,  499 => 195,  495 => 194,  491 => 193,  487 => 192,  479 => 187,  468 => 178,  452 => 174,  447 => 172,  438 => 170,  430 => 169,  426 => 168,  422 => 167,  418 => 166,  414 => 165,  410 => 164,  407 => 163,  403 => 162,  396 => 158,  392 => 157,  388 => 156,  384 => 155,  380 => 154,  376 => 153,  372 => 152,  368 => 151,  361 => 146,  359 => 145,  349 => 137,  340 => 134,  331 => 132,  326 => 130,  322 => 129,  318 => 128,  315 => 127,  311 => 126,  304 => 122,  300 => 121,  296 => 120,  292 => 119,  288 => 118,  280 => 113,  269 => 104,  260 => 101,  251 => 99,  246 => 97,  242 => 96,  239 => 95,  235 => 94,  228 => 90,  224 => 89,  220 => 88,  216 => 87,  208 => 82,  202 => 78,  190 => 69,  186 => 68,  182 => 67,  178 => 66,  174 => 65,  170 => 64,  166 => 63,  162 => 62,  158 => 61,  152 => 58,  148 => 56,  146 => 55,  142 => 53,  135 => 49,  131 => 47,  129 => 46,  116 => 36,  105 => 28,  100 => 25,  94 => 23,  92 => 22,  87 => 21,  84 => 20,  79 => 19,  76 => 18,  71 => 17,  68 => 16,  65 => 15,  61 => 14,  53 => 12,  48 => 8,  46 => 10,  44 => 9,  37 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "display-page-manage.twig", "/var/www/html/cms_ubi/views/display-page-manage.twig");
    }
}
