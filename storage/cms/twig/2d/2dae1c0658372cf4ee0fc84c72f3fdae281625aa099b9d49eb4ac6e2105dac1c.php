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

/* /home/mpm-rent/public_html/plugins/deptech/mpmrent/components/map/default.htm */
class __TwigTemplate_3337c7ae4ac6b436e4bd9fd1deb163c184761b3ec5cd10d85c6b6998dd4a2975 extends \Twig\Template
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
        $context["map"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "map", [], "any", false, false, true, 1);
        // line 2
        echo "<div id=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), "mapfieldId", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "\" style=\"height: ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), "height", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "\"></div>

";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 5
        echo "    <style type=\"text/css\">
        .leaflet-tile-pane {
            display: none;
        }
        .leaflet-container {
            background-color: #f26f21;
        }
    </style>
    <script>

         var ";
        // line 15
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), "mapfieldId", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo " = L.map('";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), "mapfieldId", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "', {
            zoomControl: false,
            attributionControl: false
         }).setView([";
        // line 18
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), "latitude", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), "longitude", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "], ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), "zoom", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo ");;

        // ";
        // line 20
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), "mapfieldId", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo ".fitBounds([";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), "latitude", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), "longitude", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "]);
        var LeafIcon  = L.Icon.extend({

            iconSize:    [25, 25],
            shadowSize:  [25, 25],
            iconAnchor:  [12, 25],
            popupAnchor: [1, 1],
            tooltipAnchor: [16, -28]
        });

        var headOfficeIcon = new LeafIcon({
            iconUrl: \"";
        // line 31
        echo url("/plugins/deptech/mpmrent/assets/leaflet/images/head_office.png");
        echo "\",
            iconSize:    [25, 25],
            shadowSize:  [25, 25],
            iconAnchor:  [12, 25],
            popupAnchor: [1, -7],
            tooltipAnchor: [16, -28]
        }),
        branchIcon = new LeafIcon({
            iconUrl: \"";
        // line 39
        echo url("/plugins/deptech/mpmrent/assets/leaflet/images/branch.png");
        echo "\",
            iconSize:    [20, 20],
            shadowSize:  [25, 25],
            iconAnchor:  [1, 20],
            popupAnchor: [7, -7],
            tooltipAnchor: [16, -30]
        }),
        serviceIcon = new LeafIcon({
            iconUrl: \"";
        // line 47
        echo url("/plugins/deptech/mpmrent/assets/leaflet/images/service.png");
        echo "\",
            iconSize:    [20, 20],
            shadowSize:  [25, 25],
            iconAnchor:  [1, 20],
            popupAnchor: [7, -7],
            tooltipAnchor: [16, -28]
        });

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'MPM Rent',
            id: 'mapbox/light-v9',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(";
        // line 61
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), "mapfieldId", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo ");
        function style(feature) {
            return {
                weight: 3,
                opacity: 1,
                color: '#FFFFFF',
                fillOpacity: 1,
                fillColor: '#FFFFFF'
            };
        }
        ";
        // line 71
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), "mapfieldId", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
        echo ".dragging.disable();
        ";
        // line 72
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), "mapfieldId", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
        echo ".touchZoom.disable();
        ";
        // line 73
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), "mapfieldId", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        echo ".doubleClickZoom.disable();
        ";
        // line 74
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), "mapfieldId", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo ".scrollWheelZoom.disable();
        \$.getJSON(\"";
        // line 75
        echo url("/plugins/deptech/mpmrent/assets/world.geo.json/IDN.geo.json");
        echo "\").then(function(geoJSON) {
            var osm = new L.TileLayer.BoundaryCanvas(\"https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png\", {
                boundary: geoJSON,
            });
            ";
        // line 79
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), "mapfieldId", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
        echo ".addLayer(osm);
            var indoLayer = L.geoJSON(geoJSON, {
                style: style
            }).addTo(";
        // line 82
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), "mapfieldId", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
        echo ");;
            ";
        // line 83
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), "mapfieldId", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
        echo ".fitBounds(indoLayer.getBounds());
        });

        var paramters = {};
        ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), "objectsToDisplay", [], "any", false, false, true, 87));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 88
            echo "            parameters = {};

            ";
            // line 90
            if ((twig_get_attribute($this->env, $this->source, $context["object"], "type", [], "any", false, false, true, 90) == "1")) {
                // line 91
                echo "                parameters['icon'] = headOfficeIcon;
            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 92
$context["object"], "type", [], "any", false, false, true, 92) == "2")) {
                // line 93
                echo "                parameters['icon'] = branchIcon;
            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 94
$context["object"], "type", [], "any", false, false, true, 94) == "3")) {
                // line 95
                echo "                parameters['icon'] = serviceIcon;
            ";
            } else {
                // line 97
                echo "                    parameters['icon'] = defaultIcon;
            ";
            }
            // line 99
            echo "
            parameters['draggable'] = false;
            var asdasd";
            // line 101
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo " = ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "type", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo ";
            var mapObject";
            // line 102
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
            echo " = L.marker([";
            echo twig_escape_filter($this->env, twig_trim_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "position", [], "any", false, false, true, 102), 102, $this->source)), "html", null, true);
            echo "], parameters).addTo(";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), "mapfieldId", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
            echo ");
            ";
            // line 103
            if (twig_get_attribute($this->env, $this->source, $context["object"], "name", [], "any", false, false, true, 103)) {
                // line 104
                echo "                mapObject";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
                echo ".bindPopup(`";
                echo twig_trim_filter(twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "popup", [], "any", false, false, true, 104), 104, $this->source), ["
" => "", "" => ""]));
                echo "`);
            ";
            }
            // line 106
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "    </script>
";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/mpm-rent/public_html/plugins/deptech/mpmrent/components/map/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 4,  274 => 107,  260 => 106,  251 => 104,  249 => 103,  241 => 102,  235 => 101,  231 => 99,  227 => 97,  223 => 95,  221 => 94,  218 => 93,  216 => 92,  213 => 91,  211 => 90,  207 => 88,  190 => 87,  183 => 83,  179 => 82,  173 => 79,  166 => 75,  162 => 74,  158 => 73,  154 => 72,  150 => 71,  137 => 61,  120 => 47,  109 => 39,  98 => 31,  80 => 20,  71 => 18,  63 => 15,  51 => 5,  49 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/mpm-rent/public_html/plugins/deptech/mpmrent/components/map/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "put" => 4, "for" => 87, "if" => 90);
        static $filters = array("escape" => 2, "trim" => 102, "raw" => 104, "replace" => 104);
        static $functions = array("url" => 31);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'put', 'for', 'if'],
                ['escape', 'trim', 'raw', 'replace'],
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
