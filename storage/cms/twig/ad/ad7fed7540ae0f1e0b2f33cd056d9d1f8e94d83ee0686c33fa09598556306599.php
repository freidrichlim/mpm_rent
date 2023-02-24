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

/* /home/mpm-rent/public_html/themes/mpm-rent/pages/career.htm */
class __TwigTemplate_c10419aa8f52e416df9e0df1ed5191e8ec7eff2bced07317a2ae9a9acae74095 extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("career/career.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 3
        echo "<div class=\"container-fluid cf-orange-back-dark\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("profile"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/mpm-rent/public_html/themes/mpm-rent/pages/career.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 7,  47 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/mpm-rent/public_html/themes/mpm-rent/pages/career.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "content" => 2, "component" => 7);
        static $filters = array("theme" => 1);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'content', 'component'],
                ['theme'],
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
