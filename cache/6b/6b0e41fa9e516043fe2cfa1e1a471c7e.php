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

/* dashboard-status-page.twig */
class __TwigTemplate_762ac6e03a3637abe0816609698a11b8 extends Template
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
        // line 8
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "dashboard-status-page.twig", 9)->unwrap();
        // line 8
        $this->parent = $this->loadTemplate("authed.twig", "dashboard-status-page.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate("theme-dashboard-message.twig", "dashboard-status-page.twig", 12);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display($context);
        }
        // line 13
        echo "    <div class=\"row\">
        <div class=\"col-xl-3 col-md-6 col-12\">
            <div class=\"widget\">
                <div class=\"widget-body p-3 p-xl-2\">
                    <div class=\"widget-icon orange pull-left\">
                        <i class=\"fa fa-desktop\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        <div class=\"title displays-count\">0</div>
                        <div class=\"comment displays-comment\" data-title=\"";
        // line 22
        echo __("Display");
        echo "\" data-title-plural=\"";
        echo __("Displays");
        echo "\"></div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
         <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"widget\">
                <div class=\"widget-body\">
                    <div class=\"widget-icon green pull-left\">
                        <i class=\"fa fa-desktop\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        ";
        // line 35
        if ((($context["embeddedWidget"] ?? null) != "")) {
            // line 36
            echo "                            ";
            echo ($context["embeddedWidget"] ?? null);
            echo "
                        ";
        } else {
            // line 38
            echo "                            <div class=\"title\">";
            echo twig_escape_filter($this->env, ($context["deviceonline"] ?? null), "html", null, true);
            echo "</div>
                            <div class=\"comment\">";
            // line 39
            echo __("Total Online Displays");
            echo "</div>
                        ";
        }
        // line 41
        echo "                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"widget\">
                <div class=\"widget-body\">
                   <div class=\"widget-icon red pull-left\">
                        <i class=\"fa fa-desktop\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        ";
        // line 53
        if ((($context["embeddedWidget"] ?? null) != "")) {
            // line 54
            echo "                            ";
            echo ($context["embeddedWidget"] ?? null);
            echo "
                        ";
        } else {
            // line 56
            echo "                            <div class=\"title\">";
            echo twig_escape_filter($this->env, ($context["deviceoffline"] ?? null), "html", null, true);
            echo "</div>
                            <div class=\"comment\">";
            // line 57
            echo __("Total Offline Displays");
            echo "</div>
                        ";
        }
        // line 59
        echo "                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"widget\">
                <div class=\"widget-body\">
                    <div class=\"widget-icon blue pull-left\">
                        <i class=\"fa fa-desktop\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        <div class=\"title\">";
        // line 71
        echo twig_escape_filter($this->env, ($context["connectedToday"] ?? null), "html", null, true);
        echo "</div>
                        <div class=\"comment\">";
        // line 72
        echo __("Connected Today");
        echo "</div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>

        <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"widget\">
                <div class=\"widget-body\">
                    <div class=\"widget-icon green pull-left\">
                        <i class=\"fa fa-desktop\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        <div class=\"title\">";
        // line 86
        echo twig_escape_filter($this->env, ($context["authDisplays"] ?? null), "html", null, true);
        echo "</div>
                        <div class=\"comment\">";
        // line 87
        echo __("Authorized Displays");
        echo "</div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        
        <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"widget\">
                <div class=\"widget-body\">
                    <div class=\"widget-icon red pull-left\">
                        <i class=\"fa fa-desktop\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        <div class=\"title\">";
        // line 101
        echo twig_escape_filter($this->env, ($context["unauthDisplays"] ?? null), "html", null, true);
        echo "</div>
                        <div class=\"comment\">";
        // line 102
        echo __("Unauthorized Displays");
        echo "</div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        
        <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"widget\">
                <div class=\"widget-body\">
                    <div class=\"widget-icon green pull-left\">
                        <i class=\"fa fa-desktop\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        <div class=\"title\">";
        // line 116
        echo twig_escape_filter($this->env, ($context["activeDisplay"] ?? null), "html", null, true);
        echo "</div>
                        <div class=\"comment\">";
        // line 117
        echo __("Displays up to date");
        echo "</div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        
        <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"widget\">
                <div class=\"widget-body\">
                    <div class=\"widget-icon orange pull-left\">
                        <i class=\"fa fa-desktop\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        <div class=\"title\">";
        // line 131
        echo twig_escape_filter($this->env, ($context["downloadDisplay"] ?? null), "html", null, true);
        echo "</div>
                        <div class=\"comment\">";
        // line 132
        echo __("Download In Progress");
        echo "</div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        
        <div class=\"col-lg-3 col-md-6 col-xs-12\">
            <div class=\"widget\">
                <div class=\"widget-body\">
                    <div class=\"widget-icon red pull-left\">
                        <i class=\"fa fa-desktop\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        <div class=\"title\">";
        // line 146
        echo twig_escape_filter($this->env, ($context["inactiveDisplay"] ?? null), "html", null, true);
        echo "</div>
                        <div class=\"comment\">";
        // line 147
        echo __("Inactive Displays");
        echo "</div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        <!-- <div class=\"col-xl-3 col-md-6 col-12\">
            <div class=\"widget\">
                <div class=\"widget-body p-3 p-xl-2\">
                    <div class=\"widget-icon red pull-left\">
                        <i class=\"fa fa-tasks\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        <div class=\"title\">";
        // line 160
        echo twig_escape_filter($this->env, ($context["librarySize"] ?? null), "html", null, true);
        echo "</div>
                        <div class=\"comment\">";
        // line 161
        echo __("Library Size");
        echo "</div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-xl-3 col-md-6 col-12\">
            <div class=\"widget\">
                <div class=\"widget-body p-3 p-xl-2\">
                    <div class=\"widget-icon green pull-left\">
                        <i class=\"fa fa-users\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        <div class=\"title\">";
        // line 174
        echo twig_escape_filter($this->env, ($context["countUsers"] ?? null), "html", null, true);
        echo "</div>
                        <div class=\"comment\">";
        // line 175
        if ((($context["countUsers"] ?? null) == 1)) {
            echo __("User");
        } else {
            echo __("Users");
        }
        echo "</div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-xl-3 col-md-6 col-12\">
            <div class=\"widget\">
                <div class=\"widget-body p-3 p-xl-2\">
                    <div class=\"widget-icon blue pull-left\">
                        <i class=\"fa fa-cogs\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        ";
        // line 188
        if ((($context["embeddedWidget"] ?? null) != "")) {
            // line 189
            echo "                            ";
            echo ($context["embeddedWidget"] ?? null);
            echo "
                        ";
        } else {
            // line 191
            echo "                            <div class=\"title\">";
            echo twig_escape_filter($this->env, ($context["nowShowing"] ?? null), "html", null, true);
            echo "</div>
                            <div class=\"comment\">";
            // line 192
            echo __("Now Showing");
            echo "</div>
                        ";
        }
        // line 194
        echo "                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div> -->
    </div>
    <div class=\"row\">
        <!-- <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-cloud-download\"></i>
                    ";
        // line 205
        if ((($context["xmdsLimit"] ?? null) != "")) {
            // line 206
            echo "                        ";
            /* xgettext:no-php-format */            echo strtr(__("Bandwidth Usage. Limit %xmdsLimit%"), array("%xmdsLimit%" => ($context["xmdsLimit"] ?? null), ));
            // line 207
            echo "                    ";
        } else {
            // line 208
            echo "                        ";
            /* xgettext:no-php-format */            echo strtr(__("Bandwidth Usage (%bandwidthSuffix%)"), array("%bandwidthSuffix%" => ($context["bandwidthSuffix"] ?? null), ));
            // line 209
            echo "                    ";
        }
        // line 210
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displays.reporting"], "method", false, false, false, 210)) {
            // line 211
            echo "                    <a class=\"pull-right\" href=\"/report/form/bandwidth\">";
            echo __("More Statistics");
            echo "</a>
                    ";
        }
        // line 213
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <canvas id=\"bandwidthChart\" style=\"clear:both;\" height=\"230\"></canvas>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-tasks\"></i>
                    ";
        // line 224
        if ((($context["libraryLimitSet"] ?? null) != "")) {
            // line 225
            echo "                        ";
            /* xgettext:no-php-format */            echo strtr(__("Library Usage. Limit %libraryLimit%"), array("%libraryLimit%" => ($context["libraryLimit"] ?? null), ));
            // line 226
            echo "                    ";
        } else {
            // line 227
            echo "                        ";
            echo __("Library Usage");
            // line 228
            echo "                    ";
        }
        // line 229
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <canvas id=\"libraryChart\" style=\"clear:both;\" width=\"350\" height=\"220\"></canvas>
                </div>
            </div>
        </div> -->
    </div>
     <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-desktop\"></i>
                    ";
        // line 242
        echo __("Display Status");
        // line 243
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\" style=\"overflow: hidden;\">
                    <div style=\"text-align: center; height: 10px; margin-bottom: 5px\"><span>";
        // line 246
        echo __("Click on the chart for a breakdown");
        echo "</span></div>
                    <div style=\"position: relative; height: 235px\">
                        <canvas id=\"displayStatusChart\" style=\"clear:both;\"></canvas>
                    </div>
                </div>
            </div>
        </div>
         <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-cloud-download\"></i>
                    ";
        // line 257
        echo __("Display Content Status");
        // line 258
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\" style=\"overflow: hidden;\">
                    <div style=\"text-align: center; height: 10px; margin-bottom: 5px\"><span>";
        // line 261
        echo __("Click on the chart for a breakdown");
        echo "</span></div>
                    <div style=\"position: relative; height: 235px\">
                        <canvas id=\"displayContentChart\" style=\"clear:both;\"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-desktop\"></i>
                    ";
        // line 274
        echo __("Display Activity");
        // line 275
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <div class=\"table-responsive\">
                        <table id=\"displays\" class=\"table\">
                            <thead>
                            <tr>
                                <th>";
        // line 282
        echo __("Display");
        echo "</th>
                                <th>";
        // line 283
        echo __("Logged In");
        echo "</th>
                                <th>";
        // line 284
        echo __("Authorised");
        echo "</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class=\"col-lg-6\">
            <div class=\"widget news-widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-book\"></i>
                    ";
        // line 299
        echo __("Latest News");
        // line 300
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium\">
                    ";
        // line 303
        if ((twig_length_filter($this->env, ($context["latestNews"] ?? null)) > 0)) {
            // line 304
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["latestNews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
                // line 305
                echo "                            <div class=\"article\">
                                <h4 class=\"article_title\">";
                // line 306
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "title", [], "any", false, false, false, 306), "html", null, true);
                echo " <small class=\"article_date\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "date", [], "any", false, false, false, 306), "html", null, true);
                echo "</small></h4>
                                <p>";
                // line 307
                echo twig_get_attribute($this->env, $this->source, $context["news"], "description", [], "any", false, false, false, 307);
                echo " ";
                if (twig_get_attribute($this->env, $this->source, $context["news"], "link", [], "any", false, false, false, 307)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "link", [], "any", false, false, false, 307), "html", null, true);
                    echo "\" title=\"Read\" target=\"_blank\">";
                    echo __("Full Article");
                    echo "</a>.";
                }
                echo "</p>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 310
            echo "                    ";
        }
        // line 311
        echo "                </div>
            </div>
        </div> -->

        ";
        // line 315
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 315)) {
            // line 316
            echo "
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-tasks\"></i>
                    ";
            // line 321
            echo __("Display Groups");
            // line 322
            echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <div class=\"table-responsive\">
                        <table id=\"displays\" class=\"table\">
                            <thead>
                            <tr>
                                <th>";
            // line 329
            echo __("Display Group");
            echo "</th>
                                <th>";
            // line 330
            echo __("Total No. ");
            echo "</th>
                                <th>";
            // line 331
            echo __("Connected Today ");
            echo "</th>
                            </tr>
                            </thead>
                            <tbody>
                                                                
                                ";
            // line 336
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["displayGroups"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["dg"]) {
                // line 337
                echo "                                  <tr>
                                       <td>
                                           ";
                // line 339
                echo twig_escape_filter($this->env, (($__internal_compile_1 = $context["dg"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["DisplayGroupID"] ?? null) : null), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, (($__internal_compile_2 = $context["dg"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["DisplayGroup"] ?? null) : null), "html", null, true);
                echo "
                                       </td>
                                       <td>
                                          ";
                // line 342
                echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["dgTotalCount"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 342)] ?? null) : null), "html", null, true);
                echo "
                                       </td>
                                       <td>
                                          ";
                // line 345
                echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["tc"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 345)] ?? null) : null), "html", null, true);
                echo "
                                       </td>
                                  </tr>
                                  
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 350
            echo "                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        // line 358
        echo "       
    </div>

   

    <div class=\"row d-none\" id=\"displayGroupStatusChartRow\">

        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-desktop\"></i>
                    <span id=\"dGStatusTitle\">";
        // line 369
        echo __("Display Groups Status");
        echo "</span>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\" style=\"overflow: hidden;\">
                    <div style=\"text-align: center; height: 10px; margin-bottom: 5px\"><span>";
        // line 373
        echo __("Click on the chart to view Display information");
        echo "</span></div>
                    <div style=\"position: relative; height: 235px;\">
                        <canvas id=\"displayGroupStatusChart\" style=\"clear:both;\"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-desktop\"></i>
                    <span id=\"dGContentTitle\"> ";
        // line 385
        echo __("Display Groups Content Status");
        echo "</span>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\" style=\"overflow: hidden;\">
                    <div style=\"text-align: center; height: 10px; margin-bottom: 5px\"><span>";
        // line 389
        echo __("Click on the chart to view Display information");
        echo "</span></div>
                    <div style=\"position: relative; height: 235px\">
                        <canvas id=\"displayGroupContentStatusChart\" style=\"clear:both;\"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"widget d-none\" id=\"displaysGridTable\">
        <div class=\"widget-title\">";
        // line 399
        echo __("Displays");
        // line 400
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displays.view"], "method", false, false, false, 400)) {
            // line 401
            echo "                <a class=\"pull-right\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.view"), "html", null, true);
            echo "\">";
            echo __("Displays Page");
            echo "</a>
            ";
        }
        // line 403
        echo "        </div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 405
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"displayGridView\">
                <div class=\"XiboFilter card mb-3 bg-light d-none\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline d-block\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"filter-general\">
                                    ";
        // line 411
        echo twig_call_macro($macros["inline"], "macro_hidden", ["displayGroupId"], 411, $context, $this->getSourceContext());
        echo "
                                    ";
        // line 412
        echo twig_call_macro($macros["inline"], "macro_hidden", ["mediaInventoryStatus"], 412, $context, $this->getSourceContext());
        echo "
                                    ";
        // line 413
        echo twig_call_macro($macros["inline"], "macro_hidden", ["loggedIn"], 413, $context, $this->getSourceContext());
        echo "
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"displaysGrid\" class=\"table table-striped\" data-state-preference-name=\"statusDashboardDisplays\" style=\"width: 100%;\">
                        <thead>
                        <tr>
                            <th>";
        // line 423
        echo __("ID");
        echo "</th>
                            <th>";
        // line 424
        echo __("Display");
        echo "</th>
                            <th>";
        // line 425
        echo __("Status");
        echo "</th>
                            <th>";
        // line 426
        echo __("Authorised?");
        echo "</th>
                            <th>";
        // line 427
        echo __("Current Layout");
        echo "</th>
                            <th>";
        // line 428
        echo __("Storage Available");
        echo "</th>
                            <th>";
        // line 429
        echo __("Storage Total");
        echo "</th>
                            <th>";
        // line 430
        echo __("Storage Free %");
        echo "</th>
                            <th>";
        // line 431
        echo __("Description");
        echo "</th><th>";
        echo __("Orientation");
        echo "</th>
                            <th>";
        // line 432
        echo __("Resolution");
        echo "</th>
                            ";
        // line 433
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 433)) {
            echo "<th>";
            echo __("Tags");
            echo "</th>";
        }
        // line 434
        echo "                            <th>";
        echo __("Default Layout");
        echo "</th>
                            <th>";
        // line 435
        echo __("Interleave Default");
        echo "</th>
                            <th>";
        // line 436
        echo __("Email Alert");
        echo "</th>
                            <th>";
        // line 437
        echo __("Logged In");
        echo "</th>
                            <th>";
        // line 438
        echo __("Last Accessed");
        echo "</th>
                            <th>";
        // line 439
        echo __("Display Profile");
        echo "</th>
                            <th>";
        // line 440
        echo __("Version");
        echo "</th>
                            <th>";
        // line 441
        echo __("Device Name");
        echo "</th>
                            <th>";
        // line 442
        echo __("IP Address");
        echo "</th>
                            <th>";
        // line 443
        echo __("Mac Address");
        echo "</th>
                            <th>";
        // line 444
        echo __("Timezone");
        echo "</th>
                            <th>";
        // line 445
        echo __("Latitude");
        echo "</th>
                            <th>";
        // line 446
        echo __("Longitude");
        echo "</th>
                            <th>";
        // line 447
        echo __("Screen shot?");
        echo "</th>
                            <th>";
        // line 448
        echo __("Thumbnail");
        echo "</th>
                            <th>";
        // line 449
        echo __("CMS Transfer?");
        echo "</th>
                            <th>";
        // line 450
        echo __("Bandwidth Limit");
        echo "</th>
                            <th>";
        // line 451
        echo __("Last Command");
        echo "</th>
                            <th>";
        // line 452
        echo __("XMR Registered");
        echo "</th>
                            <th>";
        // line 453
        echo __("Commercial Licence");
        echo "</th>
                            <th>";
        // line 454
        echo __("Remote");
        echo "</th>
                            <th>";
        // line 455
        echo __("Created Date");
        echo "</th>
                            <th>";
        // line 456
        echo __("Modified Date");
        echo "</th>
                            <th>";
        // line 457
        echo __("Faults?");
        echo "</th>
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

    // line 470
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 471
        echo "    <script type=\"text/javascript\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">
      const stringToColour = function(str) {
        let hash = 0;
        str.split('').forEach(char => {
          hash = char.charCodeAt(0) + ((hash << 5) - hash);
        });
        let colour = '#';
        for (let i = 0; i < 3; i++) {
          const value = (hash >> (i * 8)) & 0xff
          colour += value.toString(16).padStart(2, '0');
        }
        return colour;
      }

        var displayGroupStatusChart = null;
        var displayGroupContentStatusChart = null;

        var displayGroupId = null;
        var loggedInStatus = null;
        var mediaInventoryStatus = null;

        var displayGroupIdsContent = [];
        var displayGroupIdsStatus = [];
        var displayGridTable = null

        // Create our chart
        var bandwidthChart = new Chart(\$(\"#bandwidthChart\"), {
            type: \"bar\",
            data: ";
        // line 499
        echo ($context["bandwidthWidget"] ?? null);
        echo ",
            options: {
                scales: {
                    xAxes: [{
                        stacked: ";
        // line 503
        if (($context["xmdsLimit"] ?? null)) {
            echo "true";
        } else {
            echo "false";
        }
        // line 504
        echo "                    }],
                    yAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: \"";
        // line 508
        echo twig_escape_filter($this->env, ($context["bandwidthSuffix"] ?? null), "html", null, true);
        echo "\",
                        },
                        stacked: ";
        // line 510
        if (($context["xmdsLimit"] ?? null)) {
            echo "true";
        } else {
            echo "false";
        }
        // line 511
        echo "                    }]
                },
                legend: {
                    display: false
                },
                maintainAspectRatio: false,
            }
        });

        var libraryData = ";
        // line 520
        echo ($context["libraryWidgetData"] ?? null);
        echo ";
        const libraryLabels = ";
        // line 521
        echo ($context["libraryWidgetLabels"] ?? null);
        echo ";
        var colours = new Array();
        for (var i = 0; i < libraryData.length; i++) {
          colours.push(stringToColour(libraryLabels[i]));
        }
        var libraryChart = new Chart(\$(\"#libraryChart\"), {
            type: 'pie',
            data: {
                datasets: [{
                    data: libraryData,
                    backgroundColor: colours
                }],
                labels: ";
        // line 533
        echo ($context["libraryWidgetLabels"] ?? null);
        echo "
            },
            options: {
                maintainAspectRatio: false
            }
        });

        \$('.article_date').each(function(index, element) {
          // Replace the ISO date with a nice formatted date \"for humans\"
          const date = \$(element).html();
          if (date) {
            \$(element).html(moment(date, systemDateFormat).fromNow());
          }
        });

        var table = \$(\"#displays\").DataTable({
            \"language\": dataTablesLanguage,
            serverSide: true,
            stateSave: true,
            responsive: true,
            stateDuration: 0,
            stateLoadCallback: dataTableStateLoadCallback,
            stateSaveCallback: dataTableStateSaveCallback,
            filter: false,
            searchDelay: 3000,
            order: [[0, \"asc\"]],
            ajax: {
                \"url\": \"";
        // line 560
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("statusdashboard.displays"), "html", null, true);
        echo "\",
                \"data\": function (dataToSend) {
                    //make a new object so as not to destroy the input.
                    var data = {};
                    data.draw = dataToSend.draw;
                    data.length = dataToSend.length;
                    data.start = dataToSend.start;
                    data.order = dataToSend.order;
                    data.columns = [];

                    \$.each(dataToSend.columns, function (index, e) {
                        var col = {};
                        col.data = e.data;
                        if (e.name != null && e.name !== \"\")
                            col.name = e.name;
                        data.columns.push(col);
                    });

                    \$.extend(data, \$(\"#displays\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());

                    return data;
                }
            },
            createdRow: function (row, data, index) {
                if (data.mediaInventoryStatus === 1) {
                    \$(row).addClass('table-success');
                } else if (data.mediaInventoryStatus === 1) {
                    \$(row).addClass('table-danger');
                } else {
                    \$(row).addClass('table-warning');
                }
            },
            lengthChange: false,
            \"columns\": [
                {\"data\": \"display\"},
                {\"data\": \"loggedIn\", \"render\": dataTableTickCrossColumn},
                {\"data\": \"licensed\", \"render\": dataTableTickCrossColumn}
            ]
        });

        table.on('processing.dt', dataTableProcessing);
        table.on('draw', function(e, settings) {
            var \$displaysComment = \$(\".displays-comment\");
            var total = table.page.info().recordsTotal;
            \$(\".displays-count\").html(total);
            \$displaysComment.html((total > 0) ? \$displaysComment.data().titlePlural : \$displaysComment.data().title)
        });

        var displayData ";
        // line 608
        if (($context["displayStatus"] ?? null)) {
            echo "= ";
            echo ($context["displayStatus"] ?? null);
        }
        echo ";
        var displayStatusChart = new Chart(\$(\"#displayStatusChart\"), {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: displayData,
                    backgroundColor: [\"rgb(0,255,0)\", \"rgb(255,0,0)\"]
                }],
                labels: [translations.online, translations.offline]
            },
            options: {
                maintainAspectRatio: false
            }
        });

        var displayMediaStatusData ";
        // line 623
        if (($context["displayMediaStatus"] ?? null)) {
            echo "= ";
            echo ($context["displayMediaStatus"] ?? null);
        }
        echo ";

        var displayContentChart = new Chart(\$(\"#displayContentChart\"), {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: displayMediaStatusData,
                    backgroundColor: [\"rgb(0,255,0)\", \"rgb(255,0,0)\"]
                }],
                labels: [translations.upToDate, translations.notUpToDate]
            },
            options: {
                maintainAspectRatio: false
            }
        });

        \$(\"#displayStatusChart\").click(function(evt){
                var activePoints = displayStatusChart.getElementsAtEvent(evt);

                if (activePoints[0]) {
                    var chartData = activePoints[0]['_chart'].config.data;
                    var index = activePoints[0]['_index'];

                    var label = chartData.labels[index];

                    if (label == translations.online) {
                        loggedInStatus = 1;
                        \$('#dGStatusTitle').css('color', 'rgb(0,255,0)')
                    } else {
                        loggedInStatus = 0;
                        \$('#dGStatusTitle').css('color', 'rgb(255,0,0)')
                    }

                    if (displayGroupStatusChart !== undefined && displayGroupStatusChart !== null) {
                        displayGroupStatusChart.destroy();
                    }

                    \$.ajax({
                        type: \"get\",
                        url: \"";
        // line 662
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("statusdashboard.displayGroups"), "html", null, true);
        echo "\",
                        data: {
                            status: label
                        },
                        success: function (result) {
                            if (result.success === true) {

                                var displayGroupNames = JSON.parse(result.data.displayGroupNames);
                                var displaysAssigned = JSON.parse(result.data.displayGroupMembers);
                                displayGroupIdsStatus = JSON.parse(result.data.displayGroupIds);

                                var coloursDG = [];

                                for(var i = 0; i < displayGroupNames.length; i++) {
                                    coloursDG.push(\$c.rand());
                                }

                                displayGroupStatusChart = new Chart(\$(\"#displayGroupStatusChart\"), {
                                    type: 'doughnut',
                                    data: {
                                        datasets: [{
                                            data: displaysAssigned,
                                            backgroundColor: coloursDG
                                        }],
                                        labels: displayGroupNames
                                    },
                                    options: {
                                        maintainAspectRatio: false,
                                    }
                                });

                                \$(\"#displayGroupStatusChartRow\").removeClass('d-none');
                            }
                        }
                    });
                }
            }
        );

        \$(\"#displayContentChart\").click(function(evt){
                var activePoints = displayContentChart.getElementsAtEvent(evt);

                if (activePoints[0]) {
                    var chartData = activePoints[0]['_chart'].config.data;
                    var index = activePoints[0]['_index'];

                    var label = chartData.labels[index];

                    if (label == translations.upToDate) {
                        mediaInventoryStatus = 1;
                        \$('#dGContentTitle').css('color', 'rgb(0,255,0)')
                    } else {
                        mediaInventoryStatus = -1;
                        \$('#dGContentTitle').css('color', 'rgb(255,0,0)')
                    }

                    if (displayGroupContentStatusChart !== undefined && displayGroupContentStatusChart !== null) {
                        displayGroupContentStatusChart.destroy();
                    }

                    \$.ajax({
                        type: \"get\",
                        url: \"";
        // line 724
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("statusdashboard.displayGroups"), "html", null, true);
        echo "\",
                        data: {
                            inventoryStatus: label
                        },
                        success: function (result) {
                            if (result.success === true) {

                                var displayGroupNames = JSON.parse(result.data.displayGroupNames);
                                var displaysAssigned = JSON.parse(result.data.displayGroupMembers);
                                displayGroupIdsContent = JSON.parse(result.data.displayGroupIds);

                                var coloursDG = [];

                                for(var i = 0; i < displayGroupNames.length; i++) {
                                    coloursDG.push(\$c.rand());
                                }

                                displayGroupContentStatusChart = new Chart(\$(\"#displayGroupContentStatusChart\"), {
                                    type: 'doughnut',
                                    data: {
                                        datasets: [{
                                            data: displaysAssigned,
                                            backgroundColor: coloursDG
                                        }],
                                        labels: displayGroupNames
                                    },
                                    options: {
                                        maintainAspectRatio: false
                                    }
                                });

                                \$(\"#displayGroupStatusChartRow\").removeClass('d-none');
                            }
                        }
                    });
                }
            }
        );

        \$(\"#displayGroupStatusChart\").click(function(evt) {
                var activePoints = displayGroupStatusChart.getElementsAtEvent(evt);

                \$('#displayGroupId').val(\"\");
                \$('#mediaInventoryStatus').val(\"\");
                \$('#loggedIn').val(\"\");
                if (activePoints[0]) {
                    var chartData = activePoints[0]['_chart'].config.data;
                    var index = activePoints[0]['_index'];

                    displayGroupId = displayGroupIdsStatus[index];

                    \$('#displayGroupId').val(displayGroupId);
                    \$('#loggedIn').val(loggedInStatus);
                    handleDisplaysGrid();

                    \$(\"#displaysGridTable\").removeClass('d-none');
                }
            }
        );

        \$(\"#displayGroupContentStatusChart\").click(function(evt){
                var activePoints = displayGroupContentStatusChart.getElementsAtEvent(evt);

                if (activePoints[0]) {
                    \$('#displayGroupId').val(\"\");
                    \$('#mediaInventoryStatus').val(\"\");
                    \$('#loggedIn').val(\"\");

                    var chartData = activePoints[0]['_chart'].config.data;
                    var index = activePoints[0]['_index'];

                    displayGroupId = displayGroupIdsContent[index];

                    \$('#displayGroupId').val(displayGroupId);
                    \$('#mediaInventoryStatus').val(mediaInventoryStatus);
                    handleDisplaysGrid();

                    \$(\"#displaysGridTable\").removeClass('d-none');
                }
            }
        );

        function handleDisplaysGrid() {
            if (displayGridTable != null) {
                displayGridTable.ajax.reload();
            } else {
                displayGridTable = \$(\"#displaysGrid\").DataTable({
                    \"language\": dataTablesLanguage,
                    dom: dataTablesTemplate,
                    serverSide: true,
                    stateSave: true,
                    stateDuration: 0,
                    stateLoadCallback: dataTableStateLoadCallback,
                    stateSaveCallback: dataTableStateSaveCallback,
                    filter: false,
                    searchDelay: 3000,
                    responsive: true,
                    order: [[1, \"asc\"]],
                    ajax: {
                        \"url\": \"";
        // line 823
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.search"), "html", null, true);
        echo "\",
                        \"data\": function (dataToSend) {
                            //make a new object so as not to destroy the input.
                            var data = {};
                            data.draw = dataToSend.draw;
                            data.length = dataToSend.length;
                            data.start = dataToSend.start;
                            data.order = dataToSend.order;
                            data.columns = [];

                            \$.each(dataToSend.columns, function (index, e) {
                                var col = {};
                                col.data = e.data;
                                if (e.name != null && e.name != \"\")
                                    col.name = e.name;
                                data.columns.push(col);
                            });

                            \$.extend(data, \$(\"#displaysGrid\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                            return data;
                        }
                    },
                    createdRow: function (row, data, index) {
                        if (data.mediaInventoryStatus === 1) {
                            \$(row).addClass('table-success');
                        } else if (data.mediaInventoryStatus === 1) {
                            \$(row).addClass('table-danger');
                        } else {
                            \$(row).addClass('table-warning');
                        }
                    },
                    \"columns\": [
                        {\"data\": \"displayId\", responsivePriority: 2},
                        {\"data\": \"display\", responsivePriority: 2},
                        {
                            \"data\": \"mediaInventoryStatus\",
                            responsivePriority: 2,
                            \"render\": function (data, type, row) {
                                if (type != \"display\")
                                    return data;

                                var icon = \"\";
                                if (data == 1)
                                    icon = \"fa-check\";
                                else if (data == 2)
                                    icon = \"fa-times\";
                                else
                                    icon = \"fa-cloud-download\";

                                return '<span class=\"fa ' + icon + '\" title=\"' + (row.statusDescription) + '\"></span>';
                            }
                        },
                        {\"data\": \"licensed\", \"render\": dataTableTickCrossColumn, responsivePriority: 3},
                        {\"data\": \"currentLayout\", \"visible\": false, \"sortable\": false, responsivePriority: 5},
                        {
                            \"data\": \"storageAvailableSpace\",
                            responsivePriority: 5,
                            \"visible\": false,
                            \"render\": function (data, type, row) {
                                if (type != \"display\")
                                    return data;

                                return row.storageAvailableSpaceFormatted;
                            }
                        },
                        {
                            \"data\": \"storageTotalSpace\",
                            responsivePriority: 5,
                            \"visible\": false,
                            \"render\": function (data, type, row) {
                                if (type != \"display\")
                                    return data;

                                return row.storageTotalSpaceFormatted;
                            }
                        },
                        {\"data\": \"storagePercentage\", \"visible\": false, \"sortable\": false, responsivePriority: 5},
                        {\"data\": \"description\", \"visible\": false, responsivePriority: 4},
                        {\"data\": \"orientation\", \"visible\": false, responsivePriority: 6},
                        {\"data\": \"resolution\", \"visible\": false, responsivePriority: 6},
                        ";
        // line 903
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 903)) {
            // line 904
            echo "                        {
                            \"name\": \"tags\",
                            responsivePriority: 3,
                            \"sortable\": false,
                            \"visible\": false,
                            \"data\": dataTableCreateTags
                        },
                        ";
        }
        // line 912
        echo "                        {\"data\": \"defaultLayout\", \"visible\": false, responsivePriority: 4},
                        {\"data\": \"incSchedule\", \"render\": dataTableTickCrossColumn, \"visible\": false, responsivePriority: 5},
                        {\"data\": \"emailAlert\", \"render\": dataTableTickCrossColumn, \"visible\": false, responsivePriority: 5},
                        {\"data\": \"loggedIn\", \"render\": dataTableTickCrossColumn, responsivePriority: 3},
                        {\"data\": \"lastAccessed\", \"render\": dataTableDateFromUnix, responsivePriority: 4},
                        {
                            \"name\": \"displayProfileId\",
                            responsivePriority: 5,
                            \"data\": function (data, type) {
                                return data.displayProfile;
                            },
                            \"visible\": false
                        },
                        {
                            \"name\": \"clientSort\",
                            responsivePriority: 4,
                            \"data\": function (data) {
                                if (data.clientType === 'lg') {
                                    data.clientType = 'webOS'
                                }

                                return data.clientType + ' ' + data.clientVersion + '-' + data.clientCode;
                            },
                            \"visible\": false
                        },
                        {\"data\": \"deviceName\", \"visible\": false, responsivePriority: 5},
                        {\"data\": \"clientAddress\", \"visible\": false, responsivePriority: 6},
                        {\"data\": \"macAddress\", responsivePriority: 5},
                        {\"data\": \"timeZone\", \"visible\": false, responsivePriority: 5},
                        {\"data\": \"latitude\", \"visible\": false, responsivePriority: 6},
                        {\"data\": \"longitude\", \"visible\": false, responsivePriority: 6},
                        {\"data\": \"screenShotRequested\", \"render\": dataTableTickCrossColumn, \"visible\": false, \"name\": \"screenShotRequested\", responsivePriority: 7},
                        {
                            \"name\": \"thumbnail\",
                            responsivePriority: 4,
                            \"orderable\": false,
                            \"data\": function (data, type) {
                                if (type != \"display\")
                                    return data.thumbnail;

                                if (data.thumbnail != \"\") {
                                    return '<a class=\"display-screenshot-container\" data-toggle=\"lightbox\" data-type=\"image\" href=\"' + data.thumbnail + '\"><img class=\"display-screenshot\" src=\"' + data.thumbnail + '\" data-display-id=\"'+ data.displayId +'\" data-type=\"'+ data.clientType +'\" /></a>';
                                }
                                else {
                                    return \"\";
                                }
                            },
                            \"visible\": false
                        },
                        {
                            \"data\": \"isCmsTransferInProgress\",
                            \"render\": dataTableTickCrossColumn,
                            \"visible\": false,
                            \"name\": \"isCmsTransferInProgress\"
                        },
                        {
                            \"name\": \"bandwidthLimit\",
                            responsivePriority: 5,
                            \"data\": null,
                            \"render\": {\"_\": \"bandwidthLimit\", \"display\": \"bandwidthLimitFormatted\", \"sort\": \"bandwidthLimit\"},
                            \"visible\": false
                        },
                        {
                            \"data\": \"lastCommandSuccess\",
                            responsivePriority: 6,
                            \"render\": function (data, type, row) {
                                if (type != \"display\")
                                    return data;

                                var icon = \"\";
                                if (data == 1)
                                    icon = \"fa-check\";
                                else if (data == 0)
                                    icon = \"fa-times\";
                                else
                                    icon = \"fa-question\";

                                return \"<span class='fa \" + icon + \"'></span>\";
                            },
                            \"visible\": false
                        },
                        {
                            \"data\": \"xmrChannel\",
                            responsivePriority: 6,
                            \"render\": function (data, type, row) {
                                if (type === \"export\") {
                                    return (data !== null && data !== \"\") ? 1 : 0;
                                }

                                if (type != \"display\")
                                    return data;

                                var icon = \"\";
                                if (data != null && data != \"\")
                                    icon = \"fa-check\";
                                else
                                    icon = \"fa-times\";

                                return \"<span class='fa \" + icon + \"'></span>\";
                            },
                            \"visible\": false
                        },
                        {
                            \"data\": \"commercialLicence\",
                            \"name\": \"commercialLicence\",
                            responsivePriority: 5,
                            \"render\": function (data, type, row) {
                                if (type != \"display\")
                                    return data;

                                var icon = \"\";
                                if (data == 3) {
                                    return \"N/A\";
                                } else {
                                    if (data == 1) {
                                        icon = \"fa-check\";
                                    } else if (data == 0) {
                                        icon = \"fa-times\";
                                    } else if (data == 2) {
                                        icon = \"fa-clock-o\";
                                    }

                                    return '<span class=\"fa ' + icon + '\" title=\"' + (row.commercialLicenceDescription) + '\"></span>';
                                }
                            },
                            \"visible\": false
                        },
                        {
                            \"name\": \"remote\",
                            \"data\": null,
                            responsivePriority: 4,
                            \"render\": function (data, type, row) {
                                if (type === \"display\") {
                                    var html = \"<div class='remote-icons'>\";
                                    if (\"";
        // line 1046
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "SHOW_DISPLAY_AS_VNCLINK", [], "any", false, false, false, 1046), "html", null, true);
        echo "\" !== \"\" && row.clientAddress != null && row.clientAddress !== \"\") {
                                        var link = \"";
        // line 1047
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "SHOW_DISPLAY_AS_VNCLINK", [], "any", false, false, false, 1047), "html", null, true);
        echo "\".replace('%s', row.clientAddress);
                                        html += '<a href=\"' + link + '\" title=\"";
        // line 1048
        echo twig_escape_filter($this->env, __("VNC to this Display"), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "SHOW_DISPLAY_AS_VNC_TGT", [], "any", false, false, false, 1048), "html", null, true);
        echo "\">'
                                            + '<i class=\"fa fa-eye\"></i></a>';
                                    }

                                    if (row.teamViewerLink !== \"\") {
                                        html += '<a href=\"' + row.teamViewerLink + '\" title=\"";
        // line 1053
        echo twig_escape_filter($this->env, __("TeamViewer to this Display"), "html", null, true);
        echo "\" target=\"_blank\">'
                                            + '<img src=\"";
        // line 1054
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 1054), "html", null, true);
        echo "theme/default/img/remote_icons/teamviewer.png\" alt=\"TeamViewer Icon\"></a>';
                                    }

                                    if (row.webkeyLink !== \"\") {
                                        html += '<a href=\"' + row.webkeyLink + '\" title=\"";
        // line 1058
        echo twig_escape_filter($this->env, __("Webkey to this Display"), "html", null, true);
        echo "\" target=\"_blank\">'
                                            + '<img src=\"";
        // line 1059
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 1059), "html", null, true);
        echo "theme/default/img/remote_icons/webkey.png\" alt=\"Webkey Icon\"></a>';
                                    }

                                    return html + \"</div>\";

                                } else if (type === \"export\") {
                                    if (row.teamViewerLink !== \"\") {
                                        return \"TeamViewer: \" + row.teamViewerLink;
                                    }
                                    if (row.webkeyLink !== \"\") {
                                        return \"Webkey: \" + row.webkeyLink;
                                    }
                                    if (row.teamViewerLink === \"\" && row.webkeyLink === \"\") {
                                        return \"\";
                                    }
                                } else {
                                    return \"\";
                                }
                            },
                            \"visible\": true,
                            \"orderable\": false
                        },
                        {\"data\": \"createdDt\", \"visible\": false, responsivePriority: 6},
                        {\"data\": \"modifiedDt\", \"visible\": false, responsivePriority: 6},
                        {
                            \"data\": \"countFaults\",
                            \"name\": \"countFaults\",
                            responsivePriority: 3,
                            \"render\": function (data, type, row) {
                                if (type != \"display\") {
                                    return data;
                                }

                                if (data > 0) {
                                    return '<span class=\"badge\" style=\"background-color: red; color: white\">'+(row.countFaults)+'</span>';
                                } else {
                                    return '';
                                }
                            }
                        },
                    ]
                });

                displayGridTable.on('draw', dataTableDraw);
                displayGridTable.on('draw', { form: \$(\"#displaysGrid\").closest(\".XiboGrid\").find(\".FilterDiv form\") }, dataTableCreateTagEvents);
                displayGridTable.on('processing.dt', dataTableProcessing);
                dataTableAddButtons(displayGridTable, \$('#displaysGrid_wrapper').find('.dataTables_buttons'))}
        }
    </script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "dashboard-status-page.twig";
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
        return array (  1586 => 1059,  1582 => 1058,  1575 => 1054,  1571 => 1053,  1561 => 1048,  1557 => 1047,  1553 => 1046,  1417 => 912,  1407 => 904,  1405 => 903,  1322 => 823,  1220 => 724,  1155 => 662,  1110 => 623,  1089 => 608,  1038 => 560,  1008 => 533,  993 => 521,  989 => 520,  978 => 511,  972 => 510,  967 => 508,  961 => 504,  955 => 503,  948 => 499,  916 => 471,  912 => 470,  896 => 457,  892 => 456,  888 => 455,  884 => 454,  880 => 453,  876 => 452,  872 => 451,  868 => 450,  864 => 449,  860 => 448,  856 => 447,  852 => 446,  848 => 445,  844 => 444,  840 => 443,  836 => 442,  832 => 441,  828 => 440,  824 => 439,  820 => 438,  816 => 437,  812 => 436,  808 => 435,  803 => 434,  797 => 433,  793 => 432,  787 => 431,  783 => 430,  779 => 429,  775 => 428,  771 => 427,  767 => 426,  763 => 425,  759 => 424,  755 => 423,  742 => 413,  738 => 412,  734 => 411,  725 => 405,  721 => 403,  713 => 401,  710 => 400,  708 => 399,  695 => 389,  688 => 385,  673 => 373,  666 => 369,  653 => 358,  643 => 350,  624 => 345,  618 => 342,  610 => 339,  606 => 337,  589 => 336,  581 => 331,  577 => 330,  573 => 329,  564 => 322,  562 => 321,  555 => 316,  553 => 315,  547 => 311,  544 => 310,  527 => 307,  521 => 306,  518 => 305,  513 => 304,  511 => 303,  506 => 300,  504 => 299,  486 => 284,  482 => 283,  478 => 282,  469 => 275,  467 => 274,  451 => 261,  446 => 258,  444 => 257,  430 => 246,  425 => 243,  423 => 242,  408 => 229,  405 => 228,  402 => 227,  399 => 226,  396 => 225,  394 => 224,  381 => 213,  375 => 211,  372 => 210,  369 => 209,  366 => 208,  363 => 207,  360 => 206,  358 => 205,  345 => 194,  340 => 192,  335 => 191,  329 => 189,  327 => 188,  307 => 175,  303 => 174,  287 => 161,  283 => 160,  267 => 147,  263 => 146,  246 => 132,  242 => 131,  225 => 117,  221 => 116,  204 => 102,  200 => 101,  183 => 87,  179 => 86,  162 => 72,  158 => 71,  144 => 59,  139 => 57,  134 => 56,  128 => 54,  126 => 53,  112 => 41,  107 => 39,  102 => 38,  96 => 36,  94 => 35,  76 => 22,  65 => 13,  54 => 12,  50 => 11,  45 => 8,  43 => 9,  36 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard-status-page.twig", "/var/www/html/cms_ubi/views/dashboard-status-page.twig");
    }
}
