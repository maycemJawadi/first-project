<?php

/* shop/nosBoutique.html.twig */
class __TwigTemplate_9fea58d2a553056c63adc3f2dc8021a98a4432fda9161d18218953cda20d489e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "shop/nosBoutique.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3976b1db1d5c86b942381c8f25501d61b3d7806d6e9211dd5fd2d25882b4749a = $this->env->getExtension("native_profiler");
        $__internal_3976b1db1d5c86b942381c8f25501d61b3d7806d6e9211dd5fd2d25882b4749a->enter($__internal_3976b1db1d5c86b942381c8f25501d61b3d7806d6e9211dd5fd2d25882b4749a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "shop/nosBoutique.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3976b1db1d5c86b942381c8f25501d61b3d7806d6e9211dd5fd2d25882b4749a->leave($__internal_3976b1db1d5c86b942381c8f25501d61b3d7806d6e9211dd5fd2d25882b4749a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c747019d6eaa830122d10c08cc8d45019f74b04ad4f8325ecaa24f1a85fb0fe0 = $this->env->getExtension("native_profiler");
        $__internal_c747019d6eaa830122d10c08cc8d45019f74b04ad4f8325ecaa24f1a85fb0fe0->enter($__internal_c747019d6eaa830122d10c08cc8d45019f74b04ad4f8325ecaa24f1a85fb0fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

 <script type=\"text/javascript\">

      function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 6,
          center: {lat: 36.8189700, lng:  10.1657900}
        });

     

        // Create an array of alphabetical characters used to label the marker

        // Add some markers to the map.
        // Note: The code uses the JavaScript Array.prototype.map() method to
        // create an array of markers based on a given \"locations\" array.
        // The map() method here has nothing to do with the Google Maps API.
        var markers = locations.map(function(location) {
           return marker= new google.maps.Marker({
            position:location
           
           
          });
          
        });

        // Add a marker clusterer to manage the markers.
        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      
       // locations.forEach(function(e) {
   //var marker = new google.maps.Marker({
     //  position: e,
      // map: map });})
      }

  
var  locations=[]
var i = 0;
";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["shops"]) ? $context["shops"] : $this->getContext($context, "shops")));
        foreach ($context['_seq'] as $context["_key"] => $context["shop"]) {
            // line 47
            echo "locations[i]={lat:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shop"], "lat", array()), "html", null, true);
            echo ",lng:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shop"], "lng", array()), "html", null, true);
            echo "}
i++;
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "console.log(locations)



    </script>
    <script src=\"https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js\">
    </script>
   <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBHE0hQqRcgMyLXnDFBI_RtMAaH58E3YQY&callback=initMap&language=fr\"
   async defer></script>

   <div id=\"map\" style=\"height:550px;\" ></div>

";
        
        $__internal_c747019d6eaa830122d10c08cc8d45019f74b04ad4f8325ecaa24f1a85fb0fe0->leave($__internal_c747019d6eaa830122d10c08cc8d45019f74b04ad4f8325ecaa24f1a85fb0fe0_prof);

    }

    public function getTemplateName()
    {
        return "shop/nosBoutique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 50,  87 => 47,  83 => 46,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/*   */
/* {% block body %}*/
/* */
/* */
/*  <script type="text/javascript">*/
/* */
/*       function initMap() {*/
/* */
/*         var map = new google.maps.Map(document.getElementById('map'), {*/
/*           zoom: 6,*/
/*           center: {lat: 36.8189700, lng:  10.1657900}*/
/*         });*/
/* */
/*      */
/* */
/*         // Create an array of alphabetical characters used to label the marker*/
/* */
/*         // Add some markers to the map.*/
/*         // Note: The code uses the JavaScript Array.prototype.map() method to*/
/*         // create an array of markers based on a given "locations" array.*/
/*         // The map() method here has nothing to do with the Google Maps API.*/
/*         var markers = locations.map(function(location) {*/
/*            return marker= new google.maps.Marker({*/
/*             position:location*/
/*            */
/*            */
/*           });*/
/*           */
/*         });*/
/* */
/*         // Add a marker clusterer to manage the markers.*/
/*         var markerCluster = new MarkerClusterer(map, markers,*/
/*             {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});*/
/*       */
/*        // locations.forEach(function(e) {*/
/*    //var marker = new google.maps.Marker({*/
/*      //  position: e,*/
/*       // map: map });})*/
/*       }*/
/* */
/*   */
/* var  locations=[]*/
/* var i = 0;*/
/* {% for shop in shops %}*/
/* locations[i]={lat:{{shop.lat}},lng:{{shop.lng}}}*/
/* i++;*/
/* {% endfor %}*/
/* console.log(locations)*/
/* */
/* */
/* */
/*     </script>*/
/*     <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">*/
/*     </script>*/
/*    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHE0hQqRcgMyLXnDFBI_RtMAaH58E3YQY&callback=initMap&language=fr"*/
/*    async defer></script>*/
/* */
/*    <div id="map" style="height:550px;" ></div>*/
/* */
/* {% endblock %}*/
