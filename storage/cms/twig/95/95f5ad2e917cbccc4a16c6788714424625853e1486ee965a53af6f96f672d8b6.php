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

/* /home/mpm-rent/public_html/themes/mpm-rent/pages/homepage.htm */
class __TwigTemplate_66f4a89f4d0fd28099a60bdfe55d3f826cfeaf34d2a89cd626cfb7b521e70dc3 extends \Twig\Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("slider"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("homepage/rent_type"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "<div class=\"container-fluid cf-service-index\">
    <div class=\"container\">
        <div class=\"title-section c-white\">
            <h2 class=\"color-white\">";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["our.services"]);
        echo "</h2>
        </div>
        <div class=\"subtitle-section\">
            <h5 class=\"color-white\">";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["home_service.subtitle_section"]);
        echo "</h5>
        </div>
        <div class=\"row mb-4\">
            <div class=\"col-md-12 pt-3\">
                <div class=\"card-flex card-flex--three\">
                    <div class=\"card-flex-item cfi-services\">
                        <a href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "#long_term_rental\" id=\"event-hp-long-term\">
                            <div class=\"thumbnail\"><img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/longterm2x.webp");
        echo "\"></div>
                            <h4 class=\"title-list-services\">";
        // line 17
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["long.term.rental"]);
        echo "</h4>
                        </a>
                    </div>
                    <div class=\"card-flex-item cfi-services\">
                        <a href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "#short_term_rental\" id=\"event-hp-short-term\">
                            <div class=\"thumbnail\"><img src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/IMG_2387@2x.webp");
        echo "\"></div>
                            <h4 class=\"title-list-services\">";
        // line 23
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["short.term.rental"]);
        echo "</h4>
                        </a>
                    </div>
                    <div class=\"card-flex-item cfi-services\">
                        <a href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "#fleet_management_system\" id=\"event-hp-fms\">
                            <div class=\"thumbnail\"><img src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apps2x.webp");
        echo "\"></div>
                            <h4 class=\"title-list-services\">";
        // line 29
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["fleet.management.system"]);
        echo "</h4>
                        </a>
                    </div>
                    <div class=\"card-flex-item cfi-services\">
                        <a href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "#driver_services\" id=\"event-hp-driver-services\">
                            <div class=\"thumbnail\"><img src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/driver services@2x.webp");
        echo "\"></div>
                            <h4 class=\"title-list-services\">";
        // line 35
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["driver.services"]);
        echo "</h4>
                        </a>
                    </div>
                    <div class=\"card-flex-item cfi-services\">
                        <a href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "#auction_and_pre-owned_car\" id=\"event-hp-auction\">
                            <div class=\"thumbnail\"><img src=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/auction2x.webp");
        echo "\"></div>
                            <h4 class=\"title-list-services\">";
        // line 41
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["auction.and.pre-owned.car"]);
        echo "</h4>
                        </a>
                    </div>
                    <div class=\"card-flex-item cfi-services\">
                        <div class=\"col-md-12 text-center service-more\">
                            <a href=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\" class=\"btn btn-white\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["learn.more"]);
        echo "</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<div class=\"container-fluid cf-white\">
    <div class=\"container\">
        ";
        // line 58
        echo "        ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("testimonial"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 59
        echo "    </div>
</div>
<div class=\"container-fluid cf-service-index\">
    <div class=\"container\">
        ";
        // line 63
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["home.description"]);
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/mpm-rent/public_html/themes/mpm-rent/pages/homepage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 63,  164 => 59,  159 => 58,  143 => 46,  135 => 41,  131 => 40,  127 => 39,  120 => 35,  116 => 34,  112 => 33,  105 => 29,  101 => 28,  97 => 27,  90 => 23,  86 => 22,  82 => 21,  75 => 17,  71 => 16,  67 => 15,  58 => 9,  52 => 6,  47 => 3,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/mpm-rent/public_html/themes/mpm-rent/pages/homepage.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 1, "partial" => 2);
        static $filters = array("_" => 6, "page" => 15, "theme" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component', 'partial'],
                ['_', 'page', 'theme'],
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
