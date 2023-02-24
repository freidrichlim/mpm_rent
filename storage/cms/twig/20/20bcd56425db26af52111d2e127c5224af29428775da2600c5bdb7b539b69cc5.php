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

/* /home/mpm-rent/public_html/plugins/deptech/mpmrent/components/orderform/default.htm */
class __TwigTemplate_1e9541c89b71be0590dc7ca124b8d7c8c74101af29635774a258b4f4884bf088 extends \Twig\Template
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
        echo "::onSubmit\" class=\"form-contact\" data-request-flash  data-request-validate>
    <div class=\"mb-3\">
        <input type=\"text\" name=\"name\" placeholder=\"";
        // line 3
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["order_name"]);
        echo "\" class=\"form-control\">
    </div>
    <div class=\"mb-3\">
        <input type=\"email\" name=\"email\" placeholder=\"Email\" class=\"form-control\">
    </div>
    <div class=\"mb-3\">
        <input type=\"text\" name=\"phone\" placeholder=\"";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["order_phone_number"]);
        echo "\" class=\"form-control\">
    </div>
    <div class=\"mb-3\">
        <select class=\"form-control\" name='ref_service_id'>
            <option disabled selected>";
        // line 13
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["order_choose_service"]);
        echo "</option>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 15
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </select>
    </div>
    <div class=\"mb-3\">
        <input type=\"text\" name=\"company_name\" placeholder=\"";
        // line 20
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["order_company_name"]);
        echo "\" class=\"form-control\">
    </div>
    <div class=\"mb-3\">
        <input type=\"text\" name=\"company_phone\" placeholder=\"";
        // line 23
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["order_company_phone"]);
        echo "\" class=\"form-control\">
    </div>
    <div class=\"mb-3\">
        <input type=\"text\" name=\"position\" placeholder=\"";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["order_position"]);
        echo "\" class=\"form-control\">
    </div>
    <div class=\"mb-3\">
        <select class=\"form-control\" name='region'>
            <option disabled selected>";
        // line 30
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["order_region"]);
        echo "</option>
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["regions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 32
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["region"], "id", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["region"], "name", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </select>
    </div>
    <div class=\"mb-3\">
        <select class=\"form-control\" name='eligible_to_contact'>
            <option disabled selected>";
        // line 38
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["order_eligible_to_contact"]);
        echo "</option>
            <!-- <option value=\"Immediately\">";
        // line 39
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["order_immediately"]);
        echo "</option>
            <option value=\"Weekend\">";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["order_weekend"]);
        echo "</option>
            <option value=\"Office Hours\">";
        // line 41
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["order_office_hours"]);
        echo "</option>
            <option value=\"After Office Hours\">";
        // line 42
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["order_after_office_hours"]);
        echo "</option> -->
            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["contact_hour"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hour"]) {
            // line 44
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["hour"], "id", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["hour"], "name", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </select>
    </div>
    <div class=\"mb-3\">
        <select class=\"form-control\" name='service_needed'>
            <option disabled selected>";
        // line 50
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["order_service_needed"]);
        echo "</option>
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["service_needed"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 52
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            <!-- <option value=\"< 3 Month\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["order_morethen_3_months"]);
        echo "</option>
            <option value=\"> 3 Month\">";
        // line 55
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["order_lessthen_3_months"]);
        echo "</option> -->
            <!-- <option value=\"3 Months\">3 Months</option> -->
            <!-- <option value=\"6 Months\">6 Months</option> -->
            <!-- <option value=\"12 Months\">12 Months</option> -->
        </select>
    </div>
    <div class=\"text-right\">
        <button class=\"btn btn-orange px-5\">";
        // line 62
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["SEND"]);
        echo "</button>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "/home/mpm-rent/public_html/plugins/deptech/mpmrent/components/orderform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 62,  194 => 55,  189 => 54,  178 => 52,  174 => 51,  170 => 50,  164 => 46,  153 => 44,  149 => 43,  145 => 42,  141 => 41,  137 => 40,  133 => 39,  129 => 38,  123 => 34,  112 => 32,  108 => 31,  104 => 30,  97 => 26,  91 => 23,  85 => 20,  80 => 17,  69 => 15,  65 => 14,  61 => 13,  54 => 9,  45 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/mpm-rent/public_html/plugins/deptech/mpmrent/components/orderform/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 14);
        static $filters = array("escape" => 1, "_" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
