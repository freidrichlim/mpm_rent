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

/* /home/mpm-rent/public_html/themes/mpm-rent/partials/site/chat.htm */
class __TwigTemplate_4f1e74ec7d8d8c7620ebea2b89f35fc487b5f5ee6508de81cd583a0ab5a58d9a extends \Twig\Template
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
        echo "<a href=\"https://wa.me/";
        echo twig_escape_filter($this->env, twig_replace_filter(call_user_func_array($this->env->getFilter('getSettings')->getCallable(), ["whatsapp"]), [" " => ""]), "html", null, true);
        echo "?text=";
        echo call_user_func_array($this->env->getFilter('getSettings')->getCallable(), ["whatsapp_text"]);
        echo "\" target=\"_blank\" class=\"btn btn-wa\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/whatsapp.png");
        echo "\"> <span>WhatsApp Business</span></a>
<!--<a href=\"https://wa.me/6281381500068\" class=\"btn btn-wa\"><img src=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/whatsapp.png");
        echo "\"> <span>WhatsApp Business</span></a>-->
<!-- <a href=\"#\" class=\"btn btn-live-chat\"><img src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/speech-bubble.png");
        echo "\"> <span>Send Message</span></a> -->
<!-- <a href=\"#\" class=\"btn btn-live-chat\" style=\"opacity: 0\"><img src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/speech-bubble.png");
        echo "\"> <span>Live Chat</span></a> -->";
    }

    public function getTemplateName()
    {
        return "/home/mpm-rent/public_html/themes/mpm-rent/partials/site/chat.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 4,  52 => 3,  48 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/mpm-rent/public_html/themes/mpm-rent/partials/site/chat.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1, "replace" => 1, "getSettings" => 1, "theme" => 1);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'replace', 'getSettings', 'theme'],
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
