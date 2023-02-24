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

/* /home/mpm-rent/public_html/themes/mpm-rent/pages/thank-you.htm */
class __TwigTemplate_6910b986b8c4d01b373a854d80cf7f5c68d344e8d960dc8bc00b8b67aa8cc069 extends \Twig\Template
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
        $context["videoAssets"] = $this->extensions['Cms\Twig\Extension']->themeFilter("assets/videos/");
        // line 3
        $context["baseUrl"] = url("/");
        // line 4
        $context['__cms_content_params'] = [];
        $context['__cms_content_params']['assetsPath'] =         twig_escape_filter($this->env, ($context["myAssets"] ?? null)        )        ;
        $context['__cms_content_params']['activeLocale'] =         twig_escape_filter($this->env, ($context["activeLocale"] ?? null)        )        ;
        $context['__cms_content_params']['videoAssets'] =         twig_escape_filter($this->env, ($context["videoAssets"] ?? null)        )        ;
        $context['__cms_content_params']['baseUrl'] =         twig_escape_filter($this->env, ($context["baseUrl"] ?? null)        )        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("thank-you/thank-you.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
    }

    public function getTemplateName()
    {
        return "/home/mpm-rent/public_html/themes/mpm-rent/pages/thank-you.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/mpm-rent/public_html/themes/mpm-rent/pages/thank-you.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "content" => 4);
        static $filters = array("theme" => 1);
        static $functions = array("url" => 3);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'content'],
                ['theme'],
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
