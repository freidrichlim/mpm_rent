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

/* /home/mpm-rent/public_html/themes/mpm-rent/partials/homepage/rent_type.htm */
class __TwigTemplate_f36797d94c1f7103958d41090942dfca1e253d4b5ab8453ce8ccc09b5cab7456 extends \Twig\Template
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
        echo "<div class=\"container-fluid cf-white\">
    <div class=\"container\">
        <div class='page-title text-center w-100'>
            <h1>";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["home_page_title"]);
        echo "</h1>    
        </div>
        <div class=\"title-section\">
            <h2>";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Rental Fleet"]);
        echo "</h2>
        </div>
        <div class=\"subtitle-section\">
            <h5>";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["an.array.of.exciting.car.for.rent.deals.are.waiting.just.for.you!.we.have.a.complete.range.of.vehicles.to.accommodate.all.your.needs,.whether.for.corporate.purpose.or.personal.pleasure"]);
        echo "</h5>
        </div>
        <div class=\"row mb-4 tab-list-rent\">
            <div class=\"col-md-12 col-owl-type pt-3\">
                <div class=\"owl-carousel owl-theme\" id=\"owl-type\">
                    <div class=\"item\">
                        <div class=\"f-type\">
                            <a class='tab-link-rent' data-item='luxury' id='event-hp-luxury'>
                                <div class=\"thumbnail\"><img src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/img-luxury-alphard2x.jpg");
        echo "\"></div>
                                <div class=\"desc-type\">
                                    <h2>";
        // line 20
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["luxury"]);
        echo "</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"f-type\">
                            <a class='tab-link-rent' data-item='passenger' id='event-hp-passenger'>
                                <div class=\"thumbnail\"><img src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/img-passenger-innova2x.jpg");
        echo "\"></div>
                                <div class=\"desc-type\">
                                    <h2>";
        // line 30
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["passenger"]);
        echo "</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"f-type\">
                            <a class='tab-link-rent' data-item='logistic' id='event-hp-logistic'>
                                <div class=\"thumbnail\"><img src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/img-logistic-blindvan2x.jpg");
        echo "\"></div>
                                <div class=\"desc-type\">
                                    <h2>";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["logistic"]);
        echo "</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"f-type\">
                            <a class='tab-link-rent' data-item='heavyduty' id='event-hp-heavy-duty'>
                                <div class=\"thumbnail\"><img src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/img-heavyduty-triton2x.jpg");
        echo "\"></div>
                                <div class=\"desc-type\">
                                    <h2>";
        // line 50
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["heavy.duty"]);
        echo "</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row tab-item-rent hidden\" id=\"detail-passenger\">
            <div class=\"col-md-2 col-owl-type pt-3 desc-type-detail\">
                <h2 class='back-to-list-rent'>";
        // line 60
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["passenger"]);
        echo "</h2>
                <div class='btn-back-desc'><i class=\"fa fa-chevron-circle-left\"></i></div>
            </div>
            <div class=\"col-md-10 col-owl-type pt-3\">
                <div class=\"owl-carousel owl-theme\" id=\"owl-type-detail-passenger\">
                    <div class=\"item\">
                        <div class=\"f-type\">
                            <a href=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\" id=\"event-hp-passenger-big-mpv\">
                                <div class=\"thumbnail\"><img src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Camry2x.jpg");
        echo "\"></div>
                                <div class=\"desc-type\">
                                    <h2>";
        // line 70
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["big.mpv"]);
        echo "</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"f-type\">
                            <a href=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\" id=\"event-hp-passenger-medium-mpv\">
                                <div class=\"thumbnail\"><img src=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Avanza12x.jpg");
        echo "\"></div>
                                <div class=\"desc-type\">
                                    <h2>";
        // line 80
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["medium.mpv"]);
        echo "</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"f-type\">
                            <a href=\"";
        // line 87
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\" id=\"event-hp-passenger-small-mpv\">
                                <div class=\"thumbnail\"><img src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Avanza2x.jpg");
        echo "\"></div>
                                <div class=\"desc-type\">
                                    <h2>";
        // line 90
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["small.mpv"]);
        echo "</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"f-type\">
                            <a href=\"";
        // line 97
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\" id=\"event-hp-passenger-suv\">
                                <div class=\"thumbnail\"><img src=\"";
        // line 98
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/toyota-fortuner-png-32x.jpg");
        echo "\"></div>
                                <div class=\"desc-type\">
                                    <h2>";
        // line 100
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["suv"]);
        echo "</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"f-type\">
                            <a href=\"";
        // line 107
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\" id=\"event-hp-passenger-medium-suv\">
                                <div class=\"thumbnail\"><img src=\"";
        // line 108
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Avanza32x.jpg");
        echo "\"></div>
                                <div class=\"desc-type\">
                                    <h2>";
        // line 110
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["medium.suv"]);
        echo "</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row tab-item-rent hidden\" id=\"detail-luxury\">
            <div class=\"col-md-2 col-owl-type pt-3 desc-type-detail\">
                <h2 class='back-to-list-rent'>";
        // line 120
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["luxury"]);
        echo "</h2>
                <div class='btn-back-desc'><i class=\"fa fa-chevron-circle-left\"></i></div>
            </div>
            <div class=\"col-md-10 col-owl-type pt-3\">
                <div class=\"owl-carousel owl-theme\" id=\"owl-type-detail-luxury\">
                    <div class=\"item\">
                        <div class=\"f-type\">
                            <a href=\"";
        // line 127
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\" class='tab-link-rent' data-item='luxury' id=\"event-hp-luxury-mpv\">
                                <div class=\"thumbnail\"><img src=\"";
        // line 128
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/img-luxury-alphard2x.jpg");
        echo "\"></div>
                                <div class=\"desc-type\">
                                    <h2>";
        // line 130
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["mpv"]);
        echo "</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"f-type\">
                            <a href=\"";
        // line 137
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\" class='tab-link-rent' data-item='luxury' id=\"event-hp-luxury-sedan\">
                                <div class=\"thumbnail\"><img src=\"";
        // line 138
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Camry22x.jpg");
        echo "\"></div>
                                <div class=\"desc-type\">
                                    <h2>";
        // line 140
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["sedan"]);
        echo "</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row tab-item-rent hidden\" id=\"detail-logistic\">
            <div class=\"col-md-2 col-owl-type pt-3 desc-type-detail\">
                <h2 class='back-to-list-rent'>";
        // line 150
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["logistic"]);
        echo "</h2>
                <div class='btn-back-desc'><i class=\"fa fa-chevron-circle-left\"></i></div>
            </div>
            <div class=\"col-md-10 col-owl-type pt-3\">
                <div class=\"owl-carousel owl-theme\" id=\"owl-type-detail-luxury\">
                    <div class=\"item\">
                        <div class=\"f-type\">
                            <a href=\"";
        // line 157
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\" class='tab-link-rent' data-item='logistic' id=\"event-hp-logistic-blind-van\">
                                <div class=\"thumbnail\"><img src=\"";
        // line 158
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/BlindBox2x.jpg");
        echo "\"></div>
                                <div class=\"desc-type\">
                                    <h2>";
        // line 160
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["blind.van"]);
        echo "</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"f-type\">
                            <a href=\"";
        // line 167
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\" class='tab-link-rent' data-item='logistic' id=\"event-hp-logistic-fe-74\">
                                <div class=\"thumbnail\"><img src=\"";
        // line 168
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Avanza-12x.jpg");
        echo "\"></div>
                                <div class=\"desc-type\">
                                    <h2>";
        // line 170
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["fe.74"]);
        echo "</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row tab-item-rent hidden\" id=\"detail-heavyduty\">
            <div class=\"col-md-2 col-owl-type pt-3 desc-type-detail\">
                <h2 class='back-to-list-rent'>";
        // line 180
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["heavy.duty"]);
        echo "</h2>
                <div class='btn-back-desc'><i class=\"fa fa-chevron-circle-left\"></i></div>
            </div>
            <div class=\"col-md-10 col-owl-type pt-3\">
                <div class=\"owl-carousel owl-theme\" id=\"owl-type-detail-luxury\">
                    <div class=\"item\">
                        <div class=\"f-type\">
                            <a href=\"";
        // line 187
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\" class='tab-link-rent' data-item='heavyduty' id=\"event-hp-heavy-duty-single-cabin\">
                                <div class=\"thumbnail\"><img src=\"";
        // line 188
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/triton-cab-png-52x.jpg");
        echo "\"></div>
                                <div class=\"desc-type\">
                                    <h2>";
        // line 190
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["single.cabin"]);
        echo "</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"f-type\">
                            <a href=\"";
        // line 197
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\" class='tab-link-rent' data-item='heavyduty' id=\"event-hp-heavy-duty-double-cabin\">
                                <div class=\"thumbnail\"><img src=\"";
        // line 198
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Triton2x.jpg");
        echo "\"></div>
                                <div class=\"desc-type\">
                                    <h2>";
        // line 200
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["double.cabin"]);
        echo "</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 text-center mt-5\">
                <a href=\"";
        // line 210
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\" class=\"btn btn-orange\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["learn.more"]);
        echo "</a>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/mpm-rent/public_html/themes/mpm-rent/partials/homepage/rent_type.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 210,  381 => 200,  376 => 198,  372 => 197,  362 => 190,  357 => 188,  353 => 187,  343 => 180,  330 => 170,  325 => 168,  321 => 167,  311 => 160,  306 => 158,  302 => 157,  292 => 150,  279 => 140,  274 => 138,  270 => 137,  260 => 130,  255 => 128,  251 => 127,  241 => 120,  228 => 110,  223 => 108,  219 => 107,  209 => 100,  204 => 98,  200 => 97,  190 => 90,  185 => 88,  181 => 87,  171 => 80,  166 => 78,  162 => 77,  152 => 70,  147 => 68,  143 => 67,  133 => 60,  120 => 50,  115 => 48,  104 => 40,  99 => 38,  88 => 30,  83 => 28,  72 => 20,  67 => 18,  56 => 10,  50 => 7,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/mpm-rent/public_html/themes/mpm-rent/partials/homepage/rent_type.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("_" => 4, "theme" => 18, "page" => 67);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['_', 'theme', 'page'],
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
