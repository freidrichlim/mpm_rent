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

/* /home/mpm-rent/public_html/themes/mpm-rent/partials/site/footer.htm */
class __TwigTemplate_fef1d07025c2780904bf48a6155a8aa34d74e53984361e5ad6664968b9d53a18 extends \Twig\Template
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
        echo "<div id=\"footer\">
\t<div class=\"container\">
\t    <div class=\"row\">
\t        <div class=\"col-md-7\">
\t            <div class=\"media\">
\t                <div class=\"footer-logo\">
\t                    <img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo-footer.png");
        echo "\" class=\"logo\">
\t                    <span class=\"copyright\">2020 PT Mitra Pinasthika Mustika Rent. All Rights Reserved</span>
\t                </div>
\t                <div class=\"media-body\">
\t                \t";
        // line 11
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("site/footer/footer.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 12
        echo "\t                </div>
\t            </div>
\t        </div>
\t        <div class=\"col-md-5 col-f-btm\">
\t            <div class=\"row\">
\t                <div class=\"col-md-6 col-sm-6\">
\t                    <div class=\"nav-footer\">
\t                        <a href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about-us");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["about.us"]);
        echo "</a>
\t                        <a href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["car.rentals"]);
        echo "</a>
\t                        <a href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("faq");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["faq"]);
        echo "</a>
\t                        <a href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["contact.us2"]);
        echo "</a>
\t                        <a href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("privacy-policy");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["privacy.policy"]);
        echo "</a>
\t                    </div>
\t                </div>
\t                <div class=\"col-md-6 col-sm-6\">
\t                    <div class=\"socmed-footer\">
\t                        <span>";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["follow.us"]);
        echo "</span>
\t\t                    <a href=\"https://www.linkedin.com/company/pt-mitra-pinasthika-mustika-rent-mpm-rent-/\"><img src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/linkedin-2.png");
        echo "\"></a>
\t\t                    <a href=\"https://www.facebook.com/MPM-Rent-148287218633589/\"><img src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/facebook-2.png");
        echo "\"></a>
\t\t                    <a href=\"https://www.instagram.com/mpm.rent/\"><img src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/instagram-2.png");
        echo "\"></a>
\t                    </div>
\t                    <div class=\"contact-footer\">
\t                        <span>";
        // line 34
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["contact.center"]);
        echo "</span>
\t                        ";
        // line 35
        $context["myAssets"] = $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/");
        // line 36
        echo "\t                        ";
        $context['__cms_content_params'] = [];
        $context['__cms_content_params']['assetsPath'] =         twig_escape_filter($this->env, ($context["myAssets"] ?? null)        )        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("site/footer/footer-contact.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 37
        echo "\t                    </div>
\t                </div>
\t            </div>
\t        </div>
\t    </div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/mpm-rent/public_html/themes/mpm-rent/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 37,  125 => 36,  123 => 35,  119 => 34,  113 => 31,  109 => 30,  105 => 29,  101 => 28,  91 => 23,  85 => 22,  79 => 21,  73 => 20,  67 => 19,  58 => 12,  54 => 11,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/mpm-rent/public_html/themes/mpm-rent/partials/site/footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("content" => 11, "set" => 35);
        static $filters = array("theme" => 7, "page" => 19, "_" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['content', 'set'],
                ['theme', 'page', '_'],
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
