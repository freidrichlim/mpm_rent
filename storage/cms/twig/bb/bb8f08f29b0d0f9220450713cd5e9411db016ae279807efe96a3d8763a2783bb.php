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

/* /home/mpm-rent/public_html/plugins/deptech/mpmrent/components/companyprofile/default.htm */
class __TwigTemplate_b62064cad27b6bd4fe1bcfad965bc11b808ed1547bbf64e94cf16ba3d93ae07f extends \Twig\Template
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["cp_form_name"]);
        echo "\" class=\"form-control\">
    </div>
    <div class=\"mb-3\">
        <input type=\"email\" name=\"email\" placeholder=\"Email\" class=\"form-control\">
    </div>
    <div class=\"mb-3\">
        <input type=\"text\" name=\"phone_number\" placeholder=\"";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["cp_form_phone_number"]);
        echo "\" class=\"form-control\">
    </div>
    <div class=\"mb-3\">
        <input type=\"text\" name=\"company_name\" placeholder=\"";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["cp_form_company_name"]);
        echo "\" class=\"form-control\">
    </div>
    <div class=\"text-right\">
        <button class=\"btn btn-orange px-5\">";
        // line 15
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["cp_form_submit"]);
        echo "</button>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "/home/mpm-rent/public_html/plugins/deptech/mpmrent/components/companyprofile/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  60 => 12,  54 => 9,  45 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/mpm-rent/public_html/plugins/deptech/mpmrent/components/companyprofile/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1, "_" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
