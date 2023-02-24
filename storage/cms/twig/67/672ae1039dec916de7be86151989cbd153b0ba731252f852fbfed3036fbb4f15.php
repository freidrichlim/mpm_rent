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

/* /home/mpm-rent/public_html/themes/mpm-rent/layouts/default.htm */
class __TwigTemplate_84d8d263202863cd19776fd4181d7d3d4c7e07b511fd8348af2d00ae9a3a3360 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        if ((($context["activeLocale"] ?? null) == "jp")) {
            echo "ja";
        } else {
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["activeLocale"] ?? null), 2, $this->source), "html", null, true);
        }
        echo "\">

    <head>
        <!--
        <meta http-equiv=\"Content-Security-Policy\"
        content=\"default-src 'self';
        script-src-elem https://www.googletagmanager.com/gtag/js?id=UA-67696066-3;
        \"
        > -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KQK39PZ');</script>
<!-- End Google Tag Manager -->

         <!--Global site tag (gtag.js) - Google Analytics -->
<!--
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-67696066-3\"></script> 
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
  
    gtag('config', 'UA-67696066-3');
  </script> -->
<!-- Global site tag (gtag.js) - Google Analytics 
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-180954985-1\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-180954985-1');
</script>
-->


        <meta charset=\"utf-8\">
       ";
        // line 42
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("SeoPage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 43
        echo "        <!-- <title>MPM Rent | Rental Mobil Terbesar Perusahaan Di Indonesia 2021</title> -->

        <!-- <meta name=\"author\" content=\"MPM Rent\">

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">

        <meta name=\"generator\" content=\"MPM Rent\">

        <meta name=\"format-detection\" content=\"telephone=no\">
        
        <meta name=\"google-site-verification\" content=\"jDPGFUuIVLHUmeCkj6A3Lb1JDJd3M8-ZuOrkq0XwPLY\" />
        
        <meta name=\"description\" content=\"MPM Rent sebagai jasa rental mobil terbesar di Indonesia, melayani juga untuk sewa mobil bulanan perusahaan, sewa mobil Jakarta pelayanan yang profesional\" >
        
        <meta name=\"keywords\" content=\"Rental mobil terbesar di indonesia, Rental mobil untuk perusahaan, Sewa mobil perusahaan, jasa Sewa mobil bulanan Jakarta\" > -->



        <!-- Primary Meta Tags -->

        <!-- <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/MPMRent_FavIcon_16x16.png");
        echo "\"> -->
        <link rel=\"alternate\" href=\"";
        // line 64
        echo url("/");
        echo twig_escape_filter($this->env, twig_replace_filter(twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 64), "url", [], "any", false, false, true, 64), 64, $this->source), [":slug" => ""]), [":page?" => ""]), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, true, 64), "slug", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        echo "\" hreflang=\"x-default\" />
        <link rel=\"alternate\" href=\"";
        // line 65
        echo url("/");
        echo "/en";
        echo twig_escape_filter($this->env, twig_replace_filter(twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 65), "url", [], "any", false, false, true, 65), 65, $this->source), [":slug" => ""]), [":page?" => ""]), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, true, 65), "slug", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "\" hreflang=\"en\" />
        <link rel=\"alternate\" href=\"";
        // line 66
        echo url("/");
        echo "/id";
        echo twig_escape_filter($this->env, twig_replace_filter(twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 66), "url", [], "any", false, false, true, 66), 66, $this->source), [":slug" => ""]), [":page?" => ""]), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, true, 66), "slug", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        echo "\" hreflang=\"id\" />
        <link rel=\"alternate\" href=\"";
        // line 67
        echo url("/");
        echo "/jp";
        echo twig_escape_filter($this->env, twig_replace_filter(twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 67), "url", [], "any", false, false, true, 67), 67, $this->source), [":slug" => ""]), [":page?" => ""]), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, true, 67), "slug", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "\" hreflang=\"ja\" />

        <link href=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.carousel.min.css");
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.theme.default.min.css");
        echo "\">

        <link href=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/normalize.css");
        echo "\" rel=\"stylesheet\">

        <link href=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.min.css");
        echo "\" rel=\"stylesheet\">

        <link href=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/responsive.min.css");
        echo "\" rel=\"stylesheet\">

        ";
        // line 81
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 82
        echo "
    </head>

    <body>



    \t<!-- Header -->

        <header id=\"layout-header\">

            ";
        // line 93
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 94
        echo "
        </header>



        <!-- Content -->
        <section id=\"layout-content\">

            ";
        // line 102
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 103
        echo "
        </section>



        <!-- Footer -->

        <footer id=\"layout-footer\">

            ";
        // line 112
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 113
        echo "
        </footer>



\t\t<div class=\"f-chat\">

            ";
        // line 120
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/chat"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 121
        echo "
        </div>



\t    <!-- Scripts -->

        <script src=\"";
        // line 128
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.min.js");
        echo "\"></script>

\t    <!-- <script src=\"";
        // line 130
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery-3.3.1.slim.min.js");
        echo "\"></script> -->

\t    <script src=\"";
        // line 132
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/wow.js");
        echo "\"></script>

\t    <script src=\"";
        // line 134
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/smoothscroll.js");
        echo "\"></script>

\t    <script src=\"";
        // line 136
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/js/bootstrap.min.js");
        echo "\"></script>

\t    <script src=\"";
        // line 138
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/owl.carousel.min.js");
        echo "\"></script>

\t    <script src=\"";
        // line 140
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>

        ";
        // line 142
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 143
        echo "
        ";
        // line 144
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 145
        echo "
        <script type=\"text/javascript\">
            var customText = \"";
        // line 147
        echo call_user_func_array($this->env->getFilter('getSettings')->getCallable(), ["social_custom_text"]);
        echo "\";
            var customSubject = \"";
        // line 148
        echo call_user_func_array($this->env->getFilter('getSettings')->getCallable(), ["social_custom_subject"]);
        echo "\";
        </script>

<script type=\"application/ld+json\">
{
  \"@context\": \"https://schema.org\",
  \"@type\": \"Corporation\",
  \"name\": \"PT Mitra Pinasthika Mustika Rent\",
  \"alternateName\": \"MPM Rent\",
  \"url\": \"https://www.mpm-rent.com/\",
  \"logo\": \"https://www.mpm-rent.com/themes/mpm-rent/assets/images/logo.png\",
  \"contactPoint\": {
    \"@type\": \"ContactPoint\",
    \"telephone\": \"+62 21 5315 7668\",
    \"contactType\": \"customer service\",
    \"areaServed\": \"ID\",
    \"availableLanguage\": [\"Indonesian\",\"en\",\"Japanese\"]
  },
  \"sameAs\": [
    \"https://www.facebook.com/MPM-Rent-148287218633589/\",
    \"https://www.instagram.com/mpm.rent/\",
    \"https://www.linkedin.com/company/pt-mitra-pinasthika-mustika-rent-mpm-rent-/\"
  ]
}
</script>

    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "/home/mpm-rent/public_html/themes/mpm-rent/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 148,  302 => 147,  298 => 145,  295 => 144,  292 => 143,  281 => 142,  276 => 140,  271 => 138,  266 => 136,  261 => 134,  256 => 132,  251 => 130,  246 => 128,  237 => 121,  233 => 120,  224 => 113,  220 => 112,  209 => 103,  207 => 102,  197 => 94,  193 => 93,  180 => 82,  177 => 81,  172 => 79,  167 => 77,  162 => 75,  157 => 73,  152 => 71,  147 => 69,  139 => 67,  132 => 66,  125 => 65,  119 => 64,  115 => 63,  93 => 43,  89 => 42,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/mpm-rent/public_html/themes/mpm-rent/layouts/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "component" => 42, "styles" => 81, "partial" => 93, "page" => 102, "framework" => 142, "scripts" => 144);
        static $filters = array("escape" => 2, "theme" => 63, "replace" => 64, "getSettings" => 147);
        static $functions = array("url" => 64);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'component', 'styles', 'partial', 'page', 'framework', 'scripts'],
                ['escape', 'theme', 'replace', 'getSettings'],
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
