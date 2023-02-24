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

/* /home/mpm-rent/public_html/themes/mpm-rent/pages/jcbu.htm */
class __TwigTemplate_0098568288dbc90df61ccb175f2d420cc868d8dc7aa069a98de2833e6d2ea9af extends \Twig\Template
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
                </div>
            </div>
          
            <img src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mpm-rent-building-bluesky.webp");
        echo "\">
        </div>
    </div>
</div>
<div class=\"container-fluid cf-white pt-5 pb-3\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 pb-5\" id=\"long_term_rental\">
                <div class=\"jcbu\">
\t\t\t\t\t<h2 class='jcbu-title mb-5'>日系企業様、日本人のお客様へのサービスのご紹介</h2>
                    <div class=\"media-body\">
                        <p>弊社はレンタカーのリーディングカンパニーとして20年以上の実績があり、多くの日系企業様にサービスをご提供させて頂いております。12,000台以上の車両をご提供しており、350の拠点よりインドネシア全土で提携修理工場、ネットワークサービスをご提供させて頂いております。
                        </p>
                        <p>運転手サービスにおいても長い実績があり、自社で運転手サービスの会社(PT.DSS）を運営しており、教育された経験豊富な運転手が2,000人以上在籍しております。
                        </p>
\t\t\t\t\t\t<p>強みは、上場会社であるMPMTbk のグループ会社として、ガバナンスと透明性に優れていること、運転手サービスのクオリティ、車両のメインテナンス、故障時の代車提供にも即対応させていただくカスタマーサービスにございます。また、ビジネスパートナーとして競争力のあるレンタルコストを提供させていただいており、当地で活躍する日系企業様のビジネスのお役に立てるよう、日々邁進しております。
                        </p>
                        <p>これらのカスタマーサービスは常時日本人スタッフが、電話、メールで対応させていただいております。また、長期レンタル契約、運転手サービス、短期のレンタル契約においても、是非お問い合わせください。
                        </p>
                    </div>
                    <div class=\"media-right\">
                        <div class=\"thumbnail mb-5\"><img src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Japan_desk.jpeg");
        echo "\"></div>
                        <div class=\"thumbnail\"><img src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Driver_jp.jpeg");
        echo "\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"container-fluid\">
    <div class=\"container\">
        <div class=\"row bg-orange-full\">
            <div class=\"col-md-12 pt-5\">
                <div class=\"jcbu\">
                    <div class=\"media-left\">
                        <div class=\"thumbnail\"><img src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/contact us banner jcbu.png");
        echo "\"></div>
                    </div>
                    <div class=\"media-body\">
                        <h2 class=\"jcbu-title white mb-5\">お問い合わせ先：</h2>
                        <p>電話： +62-21-5316-0077 （営業時間 8:30～17:30）</p>
                        <p>携帯電話：+62-811-1225-499（営業時間外）</p>
                        <p>メールアドレス：<a class='mail-white' href=\"mailto:jcbu@mpm-rent.com\">jcbu@mpm-rent.com</a></p>
                        <p>日本人スタッフがお問い合わせをお待ちしております。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"container-fluid cf-white pt-5 pb-3\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 pb-5\" id=\"long_term_rental\">
                <div class=\"jcbu\">
\t\t\t\t\t<h2 class='jcbu-title mb-5'>【新サービス・業界初導入】Time Sheet Mobile （TSM）</h2>
                    <div class=\"media-body\">
                        <p>専用のスマートフォンのアプリケーションにて運転手の勤務時間を管理できます。   このアプリをご利用いただく事により、下記の様なメリットがございます。</p>
                        <ul>
                        \t<li>紙での記入ミスや、記入後の改ざんを防止</li>
                        \t<li>走行距離記録をもとに燃費計算が可能</li>
                        \t<li>スマートフォンにて承認や修正が可能</li>
                        \t<li>別途WEB画面でも履歴の閲覧が可能</li>
                        \t<li>アドミ担当者の方をWEB画面から確認が出来、コスト管理やアドミに利用可能</li>
                        </ul>
                    </div>
                    <div class=\"media-right\">
                        <div class=\"thumbnail\"><img src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/tsm-2.png");
        echo "\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>";
    }

    public function getTemplateName()
    {
        return "/home/mpm-rent/public_html/themes/mpm-rent/pages/jcbu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 75,  93 => 44,  77 => 31,  73 => 30,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/mpm-rent/public_html/themes/mpm-rent/pages/jcbu.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
