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

/* /home/mpm-rent/public_html/plugins/deptech/mpmrent/components/slider/default.htm */
class __TwigTemplate_805d1ea15a251362b0e2b64a4e4db2c4b6e94c82fb7a6cad5bd5eeb195426de6 extends \Twig\Template
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
    <div class=\"owl-carousel owl-theme\" id=\"owl-index\">
        ";
        // line 3
        $context["index_slider_item"] = 0;
        // line 4
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sliders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["slider_item"]) {
            // line 5
            echo "            <div class=\"item\">
                <div class=\"desc-carousel\">
                    <div class=\"container\">
                            <p class='slide-title'>";
            // line 8
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider_item"], "title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "</p>
                            <a href=\"";
            // line 9
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("about-us");
            echo "\" class=\"btn btn-orange\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["learn.more"]);
            echo "</a>
                    </div>
                </div>
                <img src=\"";
            // line 12
            echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider_item"], "images", [], "any", false, false, true, 12), 12, $this->source));
            echo "\">
            </div>
        ";
            // line 14
            $context["index_slider_item"] = (($context["index_slider_item"] ?? null) + 1);
            // line 15
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/mpm-rent/public_html/plugins/deptech/mpmrent/components/slider/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 16,  74 => 15,  72 => 14,  67 => 12,  59 => 9,  55 => 8,  50 => 5,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/mpm-rent/public_html/plugins/deptech/mpmrent/components/slider/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "for" => 4);
        static $filters = array("escape" => 8, "page" => 9, "_" => 9, "media" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape', 'page', '_', 'media'],
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
