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

/* /home/mpm-rent/public_html/plugins/deptech/mpmrent/components/testimonial/default.htm */
class __TwigTemplate_041a19ff8cfdd2685327ad1691b44a6a90d5e50f2311d8faf85b640bcf8f8ec7 extends \Twig\Template
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
        echo "<div class=\"title-section\">
    <h2>";
        // line 2
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Our Customer Testimonials"]);
        echo "</h2>
</div>
<div class=\"row mb-5\">
    <div class=\"col-md-12\">
        <div class=\"owl-carousel owl-theme\" id=\"owl-testi\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["testimonials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
            // line 8
            echo "            <div class=\"item\">
                <div class=\"fl-testi h-100\">
                    <div class=\"text-center\">
                        <div class=\"thumbnail mx-auto\">
                            ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, $context["testimonial"], "images", [], "any", false, false, true, 12)) {
                // line 13
                echo "                                <img src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["testimonial"], "images", [], "any", false, false, true, 13), 13, $this->source));
                echo "\">
                            ";
            } else {
                // line 15
                echo "                                <img src=\"";
                echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/default-avatar.jpg");
                echo "\">
                            ";
            }
            // line 17
            echo "                        </div>
                        <div class=\"media-body desc-testi mt-3\">
                            <h3>";
            // line 19
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["testimonial"], "name", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "</h3>
                            <h5 class='mb-1'>";
            // line 20
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["testimonial"], "position", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "</h5>
                            <h5>";
            // line 21
            if (twig_get_attribute($this->env, $this->source, $context["testimonial"], "company", [], "any", false, false, true, 21)) {
                echo " (";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["testimonial"], "company", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo ") ";
            }
            echo "</h5>
                            <p>\"";
            // line 22
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["testimonial"], "message", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "\"</p>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </div>  
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/mpm-rent/public_html/plugins/deptech/mpmrent/components/testimonial/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 28,  94 => 22,  86 => 21,  82 => 20,  78 => 19,  74 => 17,  68 => 15,  62 => 13,  60 => 12,  54 => 8,  50 => 7,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/mpm-rent/public_html/plugins/deptech/mpmrent/components/testimonial/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 7, "if" => 12);
        static $filters = array("_" => 2, "media" => 13, "theme" => 15, "escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['_', 'media', 'theme', 'escape'],
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
