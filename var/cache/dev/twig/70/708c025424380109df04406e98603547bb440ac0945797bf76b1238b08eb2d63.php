<?php

/* :shop:test.html.twig */
class __TwigTemplate_4d1270324a8672b9bc65b01fd7606f3e316bbd26fab7443a601a3e8cc78beacd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f815db8cc59bba602cababe82d7cb5f360bb7c769eba99fb62ad32be7d7f198c = $this->env->getExtension("native_profiler");
        $__internal_f815db8cc59bba602cababe82d7cb5f360bb7c769eba99fb62ad32be7d7f198c->enter($__internal_f815db8cc59bba602cababe82d7cb5f360bb7c769eba99fb62ad32be7d7f198c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":shop:test.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta name=\"viewport\" content=\"initial-scale=1.0, user-scalable=no\">
    <meta charset=\"utf-8\">
    <title>Marker Clustering</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id=\"map\"></div>
    <script>
var tab;
      ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["shops"]) ? $context["shops"] : $this->getContext($context, "shops")));
        foreach ($context['_seq'] as $context["_key"] => $context["shop"]) {
            // line 26
            echo "tab= new array({lat:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shop"], "lattitude", array()), "html", null, true);
            echo ",);
tab= new array(lng:";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["shop"], "longitude", array()), "html", null, true);
            echo "});
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "      document.write(tab);
      alert(tab);
   </script>
  </body>
</html>";
        
        $__internal_f815db8cc59bba602cababe82d7cb5f360bb7c769eba99fb62ad32be7d7f198c->leave($__internal_f815db8cc59bba602cababe82d7cb5f360bb7c769eba99fb62ad32be7d7f198c_prof);

    }

    public function getTemplateName()
    {
        return ":shop:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 29,  57 => 27,  52 => 26,  48 => 25,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <meta name="viewport" content="initial-scale=1.0, user-scalable=no">*/
/*     <meta charset="utf-8">*/
/*     <title>Marker Clustering</title>*/
/*     <style>*/
/*       /* Always set the map height explicitly to define the size of the div*/
/*        * element that contains the map. *//* */
/*       #map {*/
/*         height: 100%;*/
/*       }*/
/*       /* Optional: Makes the sample page fill the window. *//* */
/*       html, body {*/
/*         height: 100%;*/
/*         margin: 0;*/
/*         padding: 0;*/
/*       }*/
/*     </style>*/
/*   </head>*/
/*   <body>*/
/*     <div id="map"></div>*/
/*     <script>*/
/* var tab;*/
/*       {% for shop in shops %}*/
/* tab= new array({lat:{{shop.lattitude}},);*/
/* tab= new array(lng:{{shop.longitude}}});*/
/*       {% endfor %}*/
/*       document.write(tab);*/
/*       alert(tab);*/
/*    </script>*/
/*   </body>*/
/* </html>*/
