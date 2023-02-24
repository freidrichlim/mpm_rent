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

/* /home/mpm-rent/public_html/themes/mpm-rent/pages/news-detail.htm */
class __TwigTemplate_6bec0c0afa04e4d0925993d486b1d84b11b9ce25432a1341e97bd6953965a96c extends \Twig\Template
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
        echo "<div class=\"container-fluid pt-5 pb-3\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-lg-10 offset-lg-1 pb-5\">
                <a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("news");
        echo "\" class=\"btn btn-back\"><span class=\"fa fa-chevron-left\"></span> ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["back.to.news"]);
        echo "</a>
                <h1 class=\"title-detail\">";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</h1>
                <div class=\"cat-date\">
                    <div class=\"cat-news\"><span>";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["News"]);
        echo "</span>";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "event_date", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</div>
                    <div class=\"socmed-detail\">
                        <span>";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Share"]);
        echo "</span>
                        <a href=\"#\"><img src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/linkedin-dark.png");
        echo "\"></a>
                        <a href=\"#\"><img src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/facebook-dark.png");
        echo "\"></a>
                        <a href=\"#\"><img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/twitter-dark.png");
        echo "\"></a>
                    </div>
                </div>
                ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "image", [], "any", false, false, true, 16)) {
            // line 17
            echo "\t\t        \t<div class=\"img-content\"><img src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "images", [], "any", false, false, true, 17), "path", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "\" alt='";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "images", [], "any", false, false, true, 17), "title", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "'></div>
\t\t        \t";
            // line 18
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "image_source", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "image_url", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "
\t\t        ";
        } else {
            // line 20
            echo "\t\t        \t<div class=\"img-content\"><img src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/no-image.png");
            echo "\"></div>
\t\t    \t";
        }
        // line 22
        echo "                <p>";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "description", [], "any", false, false, true, 22), 22, $this->source);
        echo "</p>
            </div>
        </div>
    </div>
</div>
<div class=\"container-fluid cf-orange-back-dark\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-lg-10 offset-lg-1\">
                <div class=\"title-section text-left\">
                    <h2>";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["other.news"]);
        echo "</h2>
                </div>
                <div class=\"row\">
                \t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lastestNews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lastNews"]) {
            // line 36
            echo "\t                    <div class=\"col-sm-6 col-md-3 col-lg-3\">
\t                        <div class=\"list-other-news\">
\t                            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["lastNews"], "url", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "\">
\t                                ";
            // line 39
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lastNews"], "images", [], "any", false, false, true, 39), "path", [], "any", false, false, true, 39)) {
                // line 40
                echo "\t\t\t\t\t\t\t        \t<div class=\"thumbnail\"><img src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lastNews"], "images", [], "any", false, false, true, 40), "path", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                echo "\" alt='";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lastNews"], "images", [], "any", false, false, true, 40), "title", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                echo "'></div>
\t\t\t\t\t\t\t        ";
            } else {
                // line 42
                echo "\t\t\t\t\t\t\t        \t<div class=\"thumbnail\"><img src=\"";
                echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/no-image.png");
                echo "\" alt='";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "images", [], "any", false, false, true, 42), "title", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "'></div>
\t\t\t\t\t\t\t    \t";
            }
            // line 44
            echo "\t                                <div class=\"desc-ow\">
\t                                    <span class=\"date-news\">";
            // line 45
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["lastNews"], "event_date", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "</span>
\t                                    <h4>";
            // line 46
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["lastNews"], "title", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "</h4>    
\t                                </div>
\t                            </a>
\t                        </div>
\t                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lastNews'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 57
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['data'] = "post"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("seo_news"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/home/mpm-rent/public_html/themes/mpm-rent/pages/news-detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 57,  172 => 52,  160 => 46,  156 => 45,  153 => 44,  145 => 42,  137 => 40,  135 => 39,  131 => 38,  127 => 36,  123 => 35,  117 => 32,  103 => 22,  97 => 20,  90 => 18,  83 => 17,  81 => 16,  75 => 13,  71 => 12,  67 => 11,  63 => 10,  56 => 8,  51 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/mpm-rent/public_html/themes/mpm-rent/pages/news-detail.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 16, "for" => 35, "component" => 57);
        static $filters = array("page" => 5, "_" => 5, "escape" => 6, "theme" => 11, "raw" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'component'],
                ['page', '_', 'escape', 'theme', 'raw'],
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
