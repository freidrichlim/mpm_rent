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

/* /home/mpm-rent/public_html/themes/mpm-rent/pages/order.htm */
class __TwigTemplate_30babd21ba34b5e4dd57173b8909d44024bb2d4cf6d54152b24dc6f332c08919 extends \Twig\Template
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
                    <h2 class=\"news-banner\">";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["order_title"]);
        echo "</h2>
                </div>
            </div>
            <img src=\"";
        // line 9
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
                    <!-- <h2>Order Services Form</h2> -->
                    <h1>";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["order_title"]);
        echo "</h1>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-5\">
                        <!-- <p>Fill in the form to order.</p> -->
                        <p>";
        // line 24
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["order_description"]);
        echo "</p>
                    </div>
                    <div class=\"col-md-7\">
                        ";
        // line 27
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("order_form"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 28
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/mpm-rent/public_html/themes/mpm-rent/pages/order.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 28,  79 => 27,  73 => 24,  65 => 19,  52 => 9,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/mpm-rent/public_html/themes/mpm-rent/pages/order.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 27);
        static $filters = array("_" => 6, "theme" => 9);
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
