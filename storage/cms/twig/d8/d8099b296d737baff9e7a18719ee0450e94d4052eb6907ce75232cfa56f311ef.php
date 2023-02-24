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

/* /home/mpm-rent/public_html/themes/mpm-rent/pages/comapany-profile-form.htm */
class __TwigTemplate_e21e819a5820291c403b8822dd67253a6abefb685a6813f3505a176b4506f494 extends \Twig\Template
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
                    <!-- <h3 class=\"sub-title-banner\">";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["we.want.to.be.part.of.your.business"]);
        echo " </h3> -->
                    <h2 class=\"news-banner\">";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["cp_form_title"]);
        echo "</h2>
                </div>
            </div>
            <img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mpm-rent-building-bluesky.webp");
        echo "\">
        </div>
    </div>
</div>
<div class=\"container-fluid pt-5 pb-3\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 mb-5\">
                <div class=\"title-section text-left\">
                    <h1>";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["cp_form_title_download"]);
        echo "</h1>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-5\">
                        <p>";
        // line 23
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["cp_form_title_download_desc"]);
        echo "</p>
                    </div>
                    <div class=\"col-md-7\">
                        ";
        // line 26
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("company_profile"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 27
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/mpm-rent/public_html/themes/mpm-rent/pages/comapany-profile-form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 27,  81 => 26,  75 => 23,  68 => 19,  56 => 10,  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/mpm-rent/public_html/themes/mpm-rent/pages/comapany-profile-form.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 26);
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
