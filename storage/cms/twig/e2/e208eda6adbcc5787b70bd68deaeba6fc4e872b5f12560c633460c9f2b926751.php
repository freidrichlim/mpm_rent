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

/* /home/mpm-rent/public_html/plugins/deptech/mpmrent/components/contact_us/default.htm */
class __TwigTemplate_0eebbdf2035ffdc4526f202e8fa4230b9a7515b4cc9994a249177c45e85702ed extends \Twig\Template
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
        echo "<form data-request=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 1, $this->source), "html", null, true);
        echo "::onSubmitContact\" class=\"form-contact\" data-request-flash  data-request-validate>
    <div class=\"mb-3\">
        <input type=\"text\" name=\"name\" placeholder=\"";
        // line 3
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["name"]);
        echo "\" class=\"form-control\">
    </div>
    <div class=\"mb-3\">
        <input type=\"email\" name=\"email\" placeholder=\"Email\" class=\"form-control\">
    </div>
    <div class=\"mb-3\">
        <input type=\"text\" name=\"phone_number\" placeholder=\"";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["phone.number"]);
        echo "\" class=\"form-control\">
    </div>
    <div class=\"mb-3\">
        <input type=\"text\" name=\"company_name\" placeholder=\"";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["company.name"]);
        echo "\" class=\"form-control\">
    </div>
    <div class=\"mb-3\">
        <select class=\"form-control\" name='subject'>

            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["category"]) {
            // line 18
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["category"], "subject", [], "any", true, true, true, 18)) {
                // line 19
                echo "                    <optgroup label=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                echo "\">
                    ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "subject", [], "any", false, false, true, 20));
                foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
                    // line 21
                    echo "                        <option value=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["subject"], "name", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["subject"], "name", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                    echo "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "                    </optgroup>
                ";
            }
            // line 25
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </select>
    </div>
    <div class=\"mb-3\">
        <input type=\"text\" name=\"message\" placeholder=\"";
        // line 29
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["message"]);
        echo "\" class=\"form-control\">
    </div>
    <div class=\"text-right\">
        <button class=\"btn btn-orange px-5\">";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["SEND"]);
        echo "</button>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "/home/mpm-rent/public_html/plugins/deptech/mpmrent/components/contact_us/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 32,  110 => 29,  105 => 26,  99 => 25,  95 => 23,  84 => 21,  80 => 20,  75 => 19,  72 => 18,  68 => 17,  60 => 12,  54 => 9,  45 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/mpm-rent/public_html/plugins/deptech/mpmrent/components/contact_us/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 17, "if" => 18);
        static $filters = array("escape" => 1, "_" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', '_'],
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
