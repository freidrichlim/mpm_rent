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

/* /home/mpm-rent/public_html/themes/mpm-rent/partials/site/header.htm */
class __TwigTemplate_68be738ef0122aacd7225c02f143ae5c1820f42b52cb1502ad0ffb3ba7d79ab8 extends \Twig\Template
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
        echo "<nav id=\"layout-nav\" class=\"navbar navbar-expand-lg fixed-top shadow navbar-light\" role=\"navigation\">
\t<div class=\"nav-dark-top ";
        // line 2
        if ((($context["activeLocale"] ?? null) == "jp")) {
            echo " jcbu-header ";
        }
        echo "\">
\t    <div class=\"container\">
\t        <div class=\"top-contact\">
\t            <span class=\"f-cc\">
\t            \t";
        // line 6
        if (((($context["activeLocale"] ?? null) == "en") || (($context["activeLocale"] ?? null) == "id"))) {
            // line 7
            echo "\t\t            \t<a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("order");
            echo "\" class=\"btn btn-orange rent-btn mr-3\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["rent.now"]);
            echo "</a>
\t            \t";
        }
        // line 9
        echo "                \t";
        if (((($context["activeLocale"] ?? null) == "en") || (($context["activeLocale"] ?? null) == "id"))) {
            // line 10
            echo "\t\t                <span class=\"contact-center\">
\t\t                    \t<span>";
            // line 11
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["contact.center"]);
            echo "</span> <img src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/MPMR_24-7_icon@2x.png");
            echo "\">
\t\t                </span>
\t\t                <span class=\"no-contact\"><a href='tel:1500068'>1500068</a></span>
                    ";
        } else {
            // line 15
            echo "\t                    <span class=\"contact-center-jp\">
\t                    \t<p style=\"color: #F68C1F;\">【日本人スタッフ対応窓口】　（日本語） <br><a href='tel:622153160077' class='phone-link'>+62-21-5316-0077</a> （営業時間 8:30～17:30）<br> <a href='tel:6281-122-499' class='phone-link'>+62-811-1225-499</a> （営業時間外）</p>
\t\t                </span>
                \t";
        }
        // line 19
        echo "\t            </span>
\t            <span class=\"flag mb-2 mt-2\">
\t            \t";
        // line 21
        if (((($context["activeLocale"] ?? null) == "en") || (($context["activeLocale"] ?? null) == "id"))) {
            // line 22
            echo "\t\t                <a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'id'\" class=\"";
            if ((($context["activeLocale"] ?? null) == "id")) {
                echo " active ";
            }
            echo "\"><img src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Flag_ID.png");
            echo "\" alt=\"Bahasa Indonesia\"></a>
\t\t                <!-- <a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'jp'\" class=\"";
            // line 23
            echo " active ";
            echo "\"><img src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Flag_JPN.png");
            echo "\" alt=\"Japan\"></a> -->
\t\t                <a href=\"";
            // line 24
            echo url("jp/jcbu");
            echo "\"><img src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Flag_JPN.png");
            echo "\" alt=\"Japan\"></a>
\t\t                <a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\" class=\"";
            // line 25
            if ((($context["activeLocale"] ?? null) == "en")) {
                echo " active ";
            }
            echo "\"><img src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Flag-Eng.png");
            echo "\" alt=\"English\"></a>
\t\t            ";
        } else {
            // line 27
            echo "\t\t            \t<a href=\"";
            echo url("id");
            echo "\"><img src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Flag_ID.png");
            echo "\" alt=\"Bahasa Indonesia\"></a>
\t\t                <a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'jp'\" class=\"";
            // line 28
            if ((($context["activeLocale"] ?? null) == "jp")) {
                echo " active ";
            }
            echo "\"><img src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Flag_JPN.png");
            echo "\" alt=\"Japan\"></a>
\t\t                <a href=\"";
            // line 29
            echo url("en");
            echo "\"><img src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Flag-Eng.png");
            echo "\" alt=\"English\"></a>
\t                ";
        }
        // line 31
        echo "\t            </span>
\t        </div>
\t    </div>
\t</div>
\t<div class=\"container ";
        // line 35
        if ((($context["activeLocale"] ?? null) == "jp")) {
            echo " py-3 ";
        }
        echo "\">
\t\t<div class=\"d-flex align-items-center\">
\t\t\t<a href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\" class=\"navbar-brand py-0\">
\t\t\t\t<img src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"Directory logo\" class=\"logo\">
\t\t\t</a>
\t\t</div>
\t  \t";
        // line 41
        if (((($context["activeLocale"] ?? null) == "en") || (($context["activeLocale"] ?? null) == "id"))) {
            // line 42
            echo "\t  \t<button type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\" class=\"navbar-toggler navbar-toggler-right collapsed\"><i class=\"fa fa-bars\"></i></button>
\t  <!-- Navbar Collapse -->
\t\t  \t<div id=\"navbarCollapse\" class=\"navbar-collapse collapse\" style=\"\">
\t\t    \t<ul class=\"navbar-nav ml-auto\">
\t\t      \t\t<li class=\"nav-item ";
            // line 46
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 46), "id", [], "any", false, false, true, 46) == "about-us")) {
                echo "active";
            }
            echo "\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"";
            // line 47
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("about-us");
            echo "\" id=\"navbarDropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["about.us"]);
            echo "</a>
\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 49
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("about-us");
            echo "\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["profile"]);
            echo "</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item tab_link\" data-tab-id='#tab_management' href=\"";
            // line 50
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("about-us");
            echo "#tab_management\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["management"]);
            echo "</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item tab_link\" data-tab-id='#tab_milestone' href=\"";
            // line 51
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("about-us");
            echo "#tab_milestone\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["milestone"]);
            echo "</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item tab_link\" data-tab-id='#tab_certivications_awards' href=\"";
            // line 52
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("about-us");
            echo "#tab_certivications_awards\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["certification.awards"]);
            echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t      \t\t<li class=\"nav-item ";
            // line 55
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 55), "id", [], "any", false, false, true, 55) == "services")) {
                echo "active";
            }
            echo "\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"";
            // line 56
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
            echo "\" id=\"navbarDropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["services"]);
            echo "</a>
\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 58
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
            echo "#long_term_rental\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["long.term.rental"]);
            echo "</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 59
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
            echo "#short_term_rental\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["short.term.rental"]);
            echo "</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 60
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
            echo "#fleet_management_system\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["fleet.management.system"]);
            echo "</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 61
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
            echo "#driver_services\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["driver.services"]);
            echo "</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" id=\"auction_menu\" href=\"";
            // line 62
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
            echo "#auction_and_pre-owned_car\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["auction.and.pre-owned.car"]);
            echo "</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 63
            echo url("jp/jcbu");
            echo "\">Japanese Client Business Unit (JCBU)</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t      \t\t<li class=\"nav-item ";
            // line 66
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 66), "id", [], "any", false, false, true, 66) == "our-networks")) {
                echo "active";
            }
            echo "\">
\t\t        \t\t<a href=\"";
            // line 67
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("our-networks");
            echo "\" class=\"nav-link\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["our.networks"]);
            echo "</a>
\t\t      \t\t</li>
\t\t      \t\t<li class=\"nav-item ";
            // line 69
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 69), "id", [], "any", false, false, true, 69) == "news")) {
                echo "active";
            }
            echo "\">
\t\t        \t\t<a href=\"";
            // line 70
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("news");
            echo "\" class=\"nav-link\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["news"]);
            echo "</a>
\t\t      \t\t</li>
\t\t      \t\t<li class=\"nav-item ";
            // line 72
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 72), "id", [], "any", false, false, true, 72) == "career")) {
                echo "active";
            }
            echo "\">
\t\t        \t\t<a href=\"";
            // line 73
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("career");
            echo "\" class=\"nav-link\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["career"]);
            echo "</a>
\t\t      \t\t</li>
\t\t      \t\t<!-- <li class=\"nav-item ";
            // line 75
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 75), "id", [], "any", false, false, true, 75) == "comapany-profile-form")) {
                echo "active";
            }
            echo "\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"";
            // line 76
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("comapany-profile-form");
            echo "\" id=\"navbarDropdownDownload\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Download</a>
\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownDownload\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 78
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("comapany-profile-form");
            echo "\">Company Profile</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li> -->
\t\t      \t\t<li class=\"nav-item pr-lg-0 ";
            // line 81
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 81), "id", [], "any", false, false, true, 81) == "contact")) {
                echo "active";
            }
            echo "\">
\t\t        \t\t<a href=\"";
            // line 82
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
            echo "\" class=\"nav-link\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["contact"]);
            echo "</a>
\t\t      \t\t</li>
\t\t      \t\t";
            // line 84
            if (((($context["activeLocale"] ?? null) == "en") || (($context["activeLocale"] ?? null) == "id"))) {
                // line 85
                echo "\t\t      \t\t<li class=\"nav-item d-lg-none m-rent-btn ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 85), "id", [], "any", false, false, true, 85) == "order")) {
                    echo "active";
                }
                echo "\">
\t\t        \t\t<a href=\"";
                // line 86
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("order");
                echo "\" class=\"nav-link\">";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["rent.now"]);
                echo "</a>
\t\t      \t\t</li>
\t\t      \t\t";
            }
            // line 89
            echo "\t\t    \t</ul>
\t\t  \t</div>
\t\t";
        }
        // line 92
        echo "\t</div>
</nav>

";
        // line 95
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 96
        echo "\t<script type=\"text/javascript\">
\t\t\$(document).on('click', '#auction_menu', function() {
\t\t\twindow.open(
\t\t\t  'https://www.auksi.co.id/',
\t\t\t  '_blank' // <- This is what makes it open in a new window.
\t\t\t);
\t\t});
\t</script>
";
        // line 95
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/mpm-rent/public_html/themes/mpm-rent/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 95,  357 => 96,  355 => 95,  350 => 92,  345 => 89,  337 => 86,  330 => 85,  328 => 84,  321 => 82,  315 => 81,  309 => 78,  304 => 76,  298 => 75,  291 => 73,  285 => 72,  278 => 70,  272 => 69,  265 => 67,  259 => 66,  253 => 63,  247 => 62,  241 => 61,  235 => 60,  229 => 59,  223 => 58,  216 => 56,  210 => 55,  202 => 52,  196 => 51,  190 => 50,  184 => 49,  177 => 47,  171 => 46,  165 => 42,  163 => 41,  157 => 38,  153 => 37,  146 => 35,  140 => 31,  133 => 29,  125 => 28,  118 => 27,  109 => 25,  103 => 24,  97 => 23,  88 => 22,  86 => 21,  82 => 19,  76 => 15,  67 => 11,  64 => 10,  61 => 9,  53 => 7,  51 => 6,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/mpm-rent/public_html/themes/mpm-rent/partials/site/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "put" => 95);
        static $filters = array("page" => 7, "_" => 7, "theme" => 11);
        static $functions = array("url" => 24);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'put'],
                ['page', '_', 'theme'],
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
