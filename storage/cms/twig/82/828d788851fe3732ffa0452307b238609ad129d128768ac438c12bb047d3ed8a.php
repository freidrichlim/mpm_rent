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

/* /home/mpm-rent/public_html/themes/mpm-rent/pages/our-networks.htm */
class __TwigTemplate_ac16030ccdfead02c3ba394e8f2f15ba1f3ed9d09d93852a73a73024b5fa07fe extends \Twig\Template
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
        $context["myAssets"] = $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/");
        // line 2
        $context['__cms_content_params'] = [];
        $context['__cms_content_params']['assetsPath'] =         twig_escape_filter($this->env, ($context["myAssets"] ?? null)        )        ;
        $context['__cms_content_params']['activeLocale'] =         twig_escape_filter($this->env, ($context["activeLocale"] ?? null)        )        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("our-networks/our-networks.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 3
        echo "<div class=\"container-fluid cf-white\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 pb-5\">
                <div class=\"page-title m-0\">
                    <h1>";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["our.networks"]);
        echo "</h1>
                </div>
                <div class=\"card-flex card-flex--two\">
                    ";
        // line 11
        $context["index_headoffice"] = 0;
        // line 12
        echo "                \t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 13
            echo "                    <div class=\"card-flex-item ";
            echo (((($context["index_headoffice"] ?? null) == 0)) ? ("is-head-office") : (""));
            echo "\">
                    \t<b>";
            // line 14
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["address"], "name", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "</b> <br>
                        ";
            // line 15
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["address"], "address", [], "any", false, false, true, 15), 15, $this->source);
            echo " 
                    </div>
                    ";
            // line 17
            $context["index_headoffice"] = (($context["index_headoffice"] ?? null) + 1);
            // line 18
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"container-fluid cf-orange-back-dark\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 pb-5\">
                <div class=\"title-section text-left\">
                    <h2>";
        // line 29
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["we.are.available.here"]);
        echo "</h2>
                </div>
                <p>";
        // line 31
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_city"] ?? null), 31, $this->source), "html", null, true);
        echo ".</p>
                <div class=\"img-content\">
                    <!-- <img src=\"assets/images/maps.jpg\"> -->
                ";
        // line 34
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("map"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 35
        echo "                    <div id='map-point-name'>
                        <ul class=\"flag-container\">
                            <li class=\"flag-item\">
                                <img src=\"";
        // line 38
        echo url("/plugins/deptech/mpmrent/assets/leaflet/images/head_office.png");
        echo "\"> ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["head.office"]);
        echo "
                            </li>
                            <li class=\"flag-item\">
                                <img src=\"";
        // line 41
        echo url("/plugins/deptech/mpmrent/assets/leaflet/images/branch.png");
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["count_branches"] ?? null), 41, $this->source), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["branch"]);
        echo "
                            </li>
                            <li class=\"flag-item\">
                                <img src=\"";
        // line 44
        echo url("/plugins/deptech/mpmrent/assets/leaflet/images/service.png");
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["count_services"] ?? null), 44, $this->source), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["service.representative"]);
        echo "
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/mpm-rent/public_html/themes/mpm-rent/pages/our-networks.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 44,  129 => 41,  121 => 38,  116 => 35,  112 => 34,  106 => 31,  101 => 29,  89 => 19,  83 => 18,  81 => 17,  76 => 15,  72 => 14,  67 => 13,  62 => 12,  60 => 11,  54 => 8,  47 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/mpm-rent/public_html/themes/mpm-rent/pages/our-networks.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "content" => 2, "for" => 12, "component" => 34);
        static $filters = array("theme" => 1, "_" => 8, "escape" => 14, "raw" => 15);
        static $functions = array("url" => 38);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'content', 'for', 'component'],
                ['theme', '_', 'escape', 'raw'],
                ['url']
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
