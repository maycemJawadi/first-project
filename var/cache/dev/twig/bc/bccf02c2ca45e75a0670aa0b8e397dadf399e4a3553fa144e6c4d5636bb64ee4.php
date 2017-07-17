<?php

/* default/testM.html */
class __TwigTemplate_aa04960da59ca9b3fb3136ae4ecb8bceea224edebbd04d7ea827d60a45bcf078 extends Twig_Template
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
        $__internal_26f7a69c9789a201f9fda6c6ece3001e5a2e7e6d7c01418cf959f86f5dbe6847 = $this->env->getExtension("native_profiler");
        $__internal_26f7a69c9789a201f9fda6c6ece3001e5a2e7e6d7c01418cf959f86f5dbe6847->enter($__internal_26f7a69c9789a201f9fda6c6ece3001e5a2e7e6d7c01418cf959f86f5dbe6847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/testM.html"));

        // line 1
        echo "map : <div id=\"map\" style=\"height:500px;\" ></div>


   <script>
        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {zoom: 8});
        var geocoder = new google.maps.Geocoder;
        geocoder.geocode({'address': '{lat:40.72, lng: -73.96}'}, function(results, status) {
          if (status === 'OK') {
            map.setCenter(results[0].geometry.location);
            new google.maps.Marker({
              map: map,
              position: results[0].geometry.location
            });
          } else {
            window.alert('Geocode was not successful for the following reason: ' +
                status);
          }
        });
      }

   </script>
  <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBv73WG7XwqWXbIzfmjbyQIP75oFzSSANM&callback=initMap&language=fr\"
   async defer>
   </script> ";
        
        $__internal_26f7a69c9789a201f9fda6c6ece3001e5a2e7e6d7c01418cf959f86f5dbe6847->leave($__internal_26f7a69c9789a201f9fda6c6ece3001e5a2e7e6d7c01418cf959f86f5dbe6847_prof);

    }

    public function getTemplateName()
    {
        return "default/testM.html";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* map : <div id="map" style="height:500px;" ></div>*/
/* */
/* */
/*    <script>*/
/*         function initMap() {*/
/*         var map = new google.maps.Map(document.getElementById('map'), {zoom: 8});*/
/*         var geocoder = new google.maps.Geocoder;*/
/*         geocoder.geocode({'address': '{lat:40.72, lng: -73.96}'}, function(results, status) {*/
/*           if (status === 'OK') {*/
/*             map.setCenter(results[0].geometry.location);*/
/*             new google.maps.Marker({*/
/*               map: map,*/
/*               position: results[0].geometry.location*/
/*             });*/
/*           } else {*/
/*             window.alert('Geocode was not successful for the following reason: ' +*/
/*                 status);*/
/*           }*/
/*         });*/
/*       }*/
/* */
/*    </script>*/
/*   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBv73WG7XwqWXbIzfmjbyQIP75oFzSSANM&callback=initMap&language=fr"*/
/*    async defer>*/
/*    </script> */
