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

/* /home/mpm-rent/public_html/themes/mpm-rent/pages/contact.htm */
class __TwigTemplate_b5c6d476bc2968c87c47ab5aa0d568f1a87c483676be1bd5dfdc315ef2ef8ca1 extends \Twig\Template
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["we.want.to.be.part.of.your.business"]);
        echo " </h3>
                    <h1 class=\"news-banner text-left\">";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["contact.us"]);
        echo ".</h1>
                </div>
            </div>
            <img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/contact us banner.png");
        echo "\">
        </div>
    </div>
</div>
<div class=\"container-fluid pt-5 pb-3\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"title-section text-left\">
                    <h2>";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["our.head.office"]);
        echo "</h2>
                </div>
            </div>
            <div class=\"col-md-12 mb-5\">
                <div class=\"media media-flex-contact\">
                    <div class=\"media-body\">
                        <p><b>PT Mitra Pinasthika Mustika Rent</b></p>
                        <p>Sunburst CBD Lot II No. 10, 
                        <br>Jl. Kapten Soebijanto Djojohadikusumo, 
                        <br>BSD City Tangerang 15322, Indonesia</p>
                        <p>Telp : +62 21 5315 7668</p>
                        <p>Fax : +62 21 5315 7669</p>
                        <p>Japanese Client：+62 21 5316 0077</p>
                        <a href=\"https://www.google.com/maps/place/Perusahaan+Rental+Mobil+Terkemuka+di+Indonesia+%7C+MPM+Rent/@-6.2964947,106.6652523,19.65z/data=!4m5!3m4!1s0x2e69fb2fdbd4eb17:0xba7a0794199c9aa0!8m2!3d-6.2964809!4d106.665334\" class=\"btn btn-white-outline mt-4\">";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["FIND US"]);
        echo "</a>
                    </div>
                    <div class=\"media-right\">
                        <iframe class=\"maps-contact\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7509067423803!2d106.66314131463244!3d-6.296429363377359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb2fdbd4eb17%3A0xba7a0794199c9aa0!2sMPM%20Rent%20(Head%20Office)!5e0!3m2!1sid!2sid!4v1592197046971!5m2!1sid!2sid\" width=\"700\" height=\"350\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
                    </div>
                </div>
            </div>
            <div class=\"col-md-12 mb-5\">
                <div class=\"title-section text-left\">
                    <h2>";
        // line 41
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Let's Talk"]);
        echo "</h2>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-5\">
                        <p>";
        // line 45
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["contact.us.directly.or.fill.out.the.form,.and.we.will.get.back.to.you.promptly"]);
        echo ".</p>
                    </div>
                    <div class=\"col-md-7\">
                        ";
        // line 48
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contact_us"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 49
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"container-fluid cf-white\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"banner-contact\">
                    <div class=\"banner\">
                        <div>
                            <span>";
        // line 62
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["24.hours.contact.center.agent"]);
        echo "</span>
                            <span>";
        // line 63
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["will.support.you.for.any.inquiries"]);
        echo "</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/mpm-rent/public_html/themes/mpm-rent/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 63,  128 => 62,  113 => 49,  109 => 48,  103 => 45,  96 => 41,  84 => 32,  68 => 19,  56 => 10,  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/mpm-rent/public_html/themes/mpm-rent/pages/contact.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 48);
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
