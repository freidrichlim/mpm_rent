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

/* /home/mpm-rent/public_html/plugins/deptech/seoextension/components/seopage/default.htm */
class __TwigTemplate_17b38a8934b900c008d05d9f5c9d6d7746ab8ac76fdf496ce61a0c88a677f820 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, true, 1), "responsive", [], "any", false, false, true, 1)) {
            // line 2
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, true, 2), "size", [], "any", false, false, true, 2) == "custom")) {
                // line 3
                echo "<meta name=\"viewport\" content=\"width=";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, true, 3), "width", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
                echo ", height=";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, true, 3), "height", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
                echo ", initial-scale=";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, true, 3), "rev_scale", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
                echo ", maximum-scale=";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, true, 3), "max_scale", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
                echo ", user-scalable=";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, true, 3), "user_scaleable", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
                echo "\">
";
            } else {
                // line 5
                echo "<meta name=\"viewport\" content=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, true, 5), "size", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
                echo ", initial-scale=";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, true, 5), "rev_scale", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
                echo ", maximum-scale=";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, true, 5), "max_scale", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
                echo ", user-scalable=";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, true, 5), "user_scaleable", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
                echo "\">
";
            }
        }
        // line 8
        echo "
";
        // line 9
        $context['__placeholder_meta_default_contents'] = null;        ob_start();        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "redirect_url", [], "any", false, false, true, 10)) {
            // line 11
            echo "<meta http-equiv=\"refresh\" content=\"0; url=";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "redirect_url", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\" />
";
        }
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_title", [], "any", false, false, true, 13)) {
            // line 14
            echo "<title>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_title", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "</title>
<meta name=\"title\" content=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_title", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\">
";
        }
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_description", [], "any", false, false, true, 17)) {
            // line 18
            echo "<meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_description", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "\">
";
        }
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_keywords", [], "any", false, false, true, 20)) {
            // line 21
            echo "<meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_keywords", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "\">
";
        }
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "canonical_url", [], "any", false, false, true, 23)) {
            // line 24
            echo "<link rel=\"canonical\" href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "canonical_url", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "\" />
";
        } else {
            // line 26
            echo call_user_func_array($this->env->getFilter('generateCanonicalUrl')->getCallable(), [""]);
            echo "
";
        }
        // line 28
        echo "<meta name=\"robots\" content=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "robot_index", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "robot_follow", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "\">

";
        // line 30
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, true, 30), "enable_og_tags", [], "any", false, false, true, 30)) {
            // line 31
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogTitle", [], "any", false, false, true, 31)) {
                // line 32
                echo "<meta property=\"og:title\" content=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogTitle", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                echo "\" />
";
            }
            // line 34
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogUrl", [], "any", false, false, true, 34)) {
                // line 35
                echo "<meta property=\"og:url\" content=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogUrl", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "\" />
";
            }
            // line 37
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogSiteName", [], "any", false, false, true, 37)) {
                // line 38
                echo "<meta property=\"og:site_name\" content=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogSiteName", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                echo "\" />
";
            }
            // line 40
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogDescription", [], "any", false, false, true, 40)) {
                // line 41
                echo "<meta property=\"og:description\" content=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogDescription", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo "\" />
";
            }
            // line 43
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogImage", [], "any", false, false, true, 43)) {
                // line 44
                echo "<meta property=\"og:image\" itemprop=\"image\" content=\"";
                echo $this->extensions['System\Twig\Extension']->appFilter($this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogImage", [], "any", false, false, true, 44), 44, $this->source)));
                echo "\" />
";
            }
            // line 46
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogFbAppId", [], "any", false, false, true, 46)) {
                // line 47
                echo "<meta property=\"fb:app_id\" content=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogFbAppId", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                echo "\" />
";
            }
        }
        // line 50
        echo "
";
        // line 51
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, true, 51), "enable_twitter_tags", [], "any", false, false, true, 51)) {
            // line 52
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "twitterCard", [], "any", false, false, true, 52)) {
                // line 53
                echo "<meta property=\"twitter:card\" content=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "twitterCard", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                echo "\" />
";
            }
            // line 55
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "twitterTitle", [], "any", false, false, true, 55)) {
                // line 56
                echo "<meta property=\"twitter:title\" content=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "twitterTitle", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                echo "\" />
";
            }
            // line 58
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "twitterUrl", [], "any", false, false, true, 58)) {
                // line 59
                echo "<meta property=\"twitter:url\" content=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "twitterUrl", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                echo "\" />
";
            }
            // line 61
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "twitterDescription", [], "any", false, false, true, 61)) {
                // line 62
                echo "<meta property=\"twitter:description\" content=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "twitterDescription", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                echo "\" />
";
            }
            // line 64
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "twitterImage", [], "any", false, false, true, 64)) {
                // line 65
                echo "<meta property=\"twitter:image\" itemprop=\"image\" content=\"";
                echo $this->extensions['System\Twig\Extension']->appFilter($this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "twitterImage", [], "any", false, false, true, 65), 65, $this->source)));
                echo "\" />
";
            }
        }
        // line 68
        echo "
";
        $context['__placeholder_meta_default_contents'] = ob_get_clean();        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('meta', $context['__placeholder_meta_default_contents']);
        unset($context['__placeholder_meta_default_contents']);        // line 70
        echo "
";
        // line 71
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, true, 71), "favicon", [], "any", false, false, true, 71)) {
            // line 72
            echo "<link rel=\"icon\" type=\"image/png\" href=\"";
            echo $this->extensions['System\Twig\Extension']->appFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, true, 72), "favicon", [], "any", false, false, true, 72), "getThumb", [0 => 32, 1 => 32, 2 => "crop"], "method", false, false, true, 72), 72, $this->source));
            echo "\" />
<link rel=\"shortcut icon\" type=\"image/x-icon\"href=\"";
            // line 73
            echo $this->extensions['System\Twig\Extension']->appFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, true, 73), "favicon", [], "any", false, false, true, 73), "getThumb", [0 => 32, 1 => 32, 2 => "crop"], "method", false, false, true, 73), 73, $this->source));
            echo "\"/>
";
        }
        // line 75
        echo "
";
        // line 76
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, true, 76), "appicon", [], "any", false, false, true, 76)) {
            // line 77
            echo "<link href=\"";
            echo $this->extensions['System\Twig\Extension']->appFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, true, 77), "appicon", [], "any", false, false, true, 77), "getThumb", [0 => 200, 1 => 200, 2 => "crop"], "method", false, false, true, 77), 77, $this->source));
            echo "\" rel=\"apple-touch-icon\" />
<link href=\"";
            // line 78
            echo $this->extensions['System\Twig\Extension']->appFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, true, 78), "appicon", [], "any", false, false, true, 78), "getThumb", [0 => 76, 1 => 76, 2 => "crop"], "method", false, false, true, 78), 78, $this->source));
            echo "\" rel=\"apple-touch-icon\" sizes=\"76x76\" />
<link href=\"";
            // line 79
            echo $this->extensions['System\Twig\Extension']->appFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, true, 79), "appicon", [], "any", false, false, true, 79), "getThumb", [0 => 120, 1 => 120, 2 => "crop"], "method", false, false, true, 79), 79, $this->source));
            echo "\" rel=\"apple-touch-icon\" sizes=\"120x120\" />
<link href=\"";
            // line 80
            echo $this->extensions['System\Twig\Extension']->appFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, true, 80), "appicon", [], "any", false, false, true, 80), "getThumb", [0 => 152, 1 => 152, 2 => "crop"], "method", false, false, true, 80), 80, $this->source));
            echo "\" rel=\"apple-touch-icon\" sizes=\"152x152\" />
<link href=\"";
            // line 81
            echo $this->extensions['System\Twig\Extension']->appFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, true, 81), "appicon", [], "any", false, false, true, 81), "getThumb", [0 => 180, 1 => 180, 2 => "crop"], "method", false, false, true, 81), 81, $this->source));
            echo "\" rel=\"apple-touch-icon\" sizes=\"180x180\" />
<link href=\"";
            // line 82
            echo $this->extensions['System\Twig\Extension']->appFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, true, 82), "appicon", [], "any", false, false, true, 82), "getThumb", [0 => 192, 1 => 192, 2 => "crop"], "method", false, false, true, 82), 82, $this->source));
            echo "\" rel=\"icon\" sizes=\"192x192\" />
<link href=\"";
            // line 83
            echo $this->extensions['System\Twig\Extension']->appFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, true, 83), "appicon", [], "any", false, false, true, 83), "getThumb", [0 => 128, 1 => 128, 2 => "crop"], "method", false, false, true, 83), 83, $this->source));
            echo "\" rel=\"icon\" sizes=\"128x128\" />
";
        }
        // line 85
        echo "
";
        // line 86
        echo call_user_func_array($this->env->getFilter('otherMetaTags')->getCallable(), [""]);
        echo "

";
    }

    public function getTemplateName()
    {
        return "/home/mpm-rent/public_html/plugins/deptech/seoextension/components/seopage/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 86,  283 => 85,  278 => 83,  274 => 82,  270 => 81,  266 => 80,  262 => 79,  258 => 78,  253 => 77,  251 => 76,  248 => 75,  243 => 73,  238 => 72,  236 => 71,  233 => 70,  231 => 9,  228 => 68,  221 => 65,  219 => 64,  213 => 62,  211 => 61,  205 => 59,  203 => 58,  197 => 56,  195 => 55,  189 => 53,  187 => 52,  185 => 51,  182 => 50,  175 => 47,  173 => 46,  167 => 44,  165 => 43,  159 => 41,  157 => 40,  151 => 38,  149 => 37,  143 => 35,  141 => 34,  135 => 32,  133 => 31,  131 => 30,  123 => 28,  118 => 26,  112 => 24,  110 => 23,  104 => 21,  102 => 20,  96 => 18,  94 => 17,  89 => 15,  84 => 14,  82 => 13,  76 => 11,  74 => 10,  73 => 9,  70 => 8,  57 => 5,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/mpm-rent/public_html/plugins/deptech/seoextension/components/seopage/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "placeholder" => 9);
        static $filters = array("escape" => 3, "generateCanonicalUrl" => 26, "app" => 44, "media" => 44, "raw" => 86, "otherMetaTags" => 86);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'placeholder'],
                ['escape', 'generateCanonicalUrl', 'app', 'media', 'raw', 'otherMetaTags'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
