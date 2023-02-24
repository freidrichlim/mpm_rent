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

/* /home/mpm-rent/public_html/plugins/deptech/mpmrent/components/news/default.htm */
class __TwigTemplate_57d4802ea0642ea111e0845971e1e543fbb935374b4ea262ea293351ffcf1e3f extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 2
            echo "<div class=\"media-services m-news\">
    <div class=\"media-left\">
    \t";
            // line 4
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "images", [], "any", false, false, true, 4), "path", [], "any", false, false, true, 4)) {
                // line 5
                echo "        <div class=\"thumbnail\"><img src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "images", [], "any", false, false, true, 5), "path", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
                echo "\" alt='";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "images", [], "any", false, false, true, 5), "title", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
                echo "'></div>
        ";
            } else {
                // line 7
                echo "        <div class=\"thumbnail\"><img src=\"";
                echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/no-image.png");
                echo "\" alt='No Image'></div>
    \t";
            }
            // line 9
            echo "    </div>
    <div class=\"media-body\">
        <div class='d-flex'>
            <div class='news-title '>
                <a class='text-decoration-none' href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "\"><h4>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "</h4></a>
            </div>
            <div class=\"socmed-detail order-2 ml-auto\">
                <a href=\"#\" data-url=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "\" class='share-linkedin'><img src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/linkedin-dark.png");
            echo "\"></a>
                <a href=\"#\" data-url=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "\" class='share-facebook'><img src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/facebook-dark.png");
            echo "\"></a>
                <!-- <a href=\"#\" data-url=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "\" class='share-twitter'><img src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/twitter-dark.png");
            echo "\"></a> --->
            </div>
        </div>
        <p>";
            // line 21
            echo twig_slice($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, true, 21), 21, $this->source), 0, 400);
            echo "</p>
        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "\" class=\"link-list-news\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["read.more"]);
            echo "</a>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 27) > 1)) {
            // line 28
            echo "\t<div class=\"text-center\">
\t    <ul class=\"pagination-news\">
\t    \t";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 30)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 31
                echo "\t            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 31) == $context["page"])) ? ("active") : (null));
                echo "\"><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 31), "baseFileName", [], "any", false, false, true, 31), 31, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageParam", [], "any", false, false, true, 31) => $context["page"]]);
                echo "\"><span></span></a></li>
\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t    </ul>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/mpm-rent/public_html/plugins/deptech/mpmrent/components/news/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  126 => 31,  122 => 30,  118 => 28,  116 => 27,  113 => 26,  101 => 22,  97 => 21,  89 => 18,  83 => 17,  77 => 16,  69 => 13,  63 => 9,  57 => 7,  49 => 5,  47 => 4,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/mpm-rent/public_html/plugins/deptech/mpmrent/components/news/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 1, "if" => 4);
        static $filters = array("escape" => 5, "theme" => 7, "raw" => 21, "slice" => 21, "_" => 22, "page" => 31);
        static $functions = array("range" => 30);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'theme', 'raw', 'slice', '_', 'page'],
                ['range']
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
