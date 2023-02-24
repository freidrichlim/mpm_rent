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

/* /home/mpm-rent/public_html/themes/mpm-rent/pages/news.htm */
class __TwigTemplate_571c69c577b54e4c660c3116a6d5168298ca6fb51ea270d3e8f591a99cf56fbe extends \Twig\Template
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
        echo "<div class=\"f-carousel\">
    <div class=\"owl-carousel owl-theme\" id=\"owl-pages\">
        <div class=\"item\">
            <div class=\"desc-carousel\">
                <div class=\"container\">
                    <h3 class=\"sub-title-banner\">";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["news_page_subtitle"]);
        echo " </h3>
                    <h1 class=\"news-banner text-left\">";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["news_page_title"]);
        echo "</h1>
                </div>
            </div>
            <img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/MPM-IMG-Header-Service-03@2x.png");
        echo "\">
        </div>
    </div>
</div>
<div class=\"container-fluid pt-5 pb-3\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 pb-5\">
\t\t\t\t";
        // line 18
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("news"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 19
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/mpm-rent/public_html/themes/mpm-rent/pages/news.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  67 => 18,  56 => 10,  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/mpm-rent/public_html/themes/mpm-rent/pages/news.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 18);
        static $filters = array("_" => 6, "theme" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
                ['_', 'theme'],
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
