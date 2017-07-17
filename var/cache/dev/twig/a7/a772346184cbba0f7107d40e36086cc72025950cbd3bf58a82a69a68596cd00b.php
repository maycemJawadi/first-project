<?php

/* shop/detailShop.html.twig */
class __TwigTemplate_a1cbaa9243db0f37cdb10673c4a2dd5e1f808e286e0d42c859aa1688a52a6fd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "shop/detailShop.html.twig", 1);
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
        $__internal_e7b6c6f31119a349f52521079e9f1405850147e48e7b69c09b1afb6eaa9c6637 = $this->env->getExtension("native_profiler");
        $__internal_e7b6c6f31119a349f52521079e9f1405850147e48e7b69c09b1afb6eaa9c6637->enter($__internal_e7b6c6f31119a349f52521079e9f1405850147e48e7b69c09b1afb6eaa9c6637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "shop/detailShop.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7b6c6f31119a349f52521079e9f1405850147e48e7b69c09b1afb6eaa9c6637->leave($__internal_e7b6c6f31119a349f52521079e9f1405850147e48e7b69c09b1afb6eaa9c6637_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_95292e00cb577b7737fa89f7331289095aa470bcf1ba8083979767f773c5a47e = $this->env->getExtension("native_profiler");
        $__internal_95292e00cb577b7737fa89f7331289095aa470bcf1ba8083979767f773c5a47e->enter($__internal_95292e00cb577b7737fa89f7331289095aa470bcf1ba8083979767f773c5a47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBHE0hQqRcgMyLXnDFBI_RtMAaH58E3YQY&callback=initMap&language=fr\"
   async defer>
   </script>


   <script>
        var map;
      function initialize() {
        var mapOptions = {
          zoom: 7,
          center: {lat:";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unshop"]) ? $context["unshop"] : $this->getContext($context, "unshop")), "lattitude", array()), "html", null, true);
        echo ",lng:";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unshop"]) ? $context["unshop"] : $this->getContext($context, "unshop")), "longitude", array()), "html", null, true);
        echo "}
        };
        map = new google.maps.Map(document.getElementById('map'),
            mapOptions);

        var marker = new google.maps.Marker({
          // The below line is equivalent to writing:
          // position: new google.maps.LatLng(-34.397, 150.644)
          position: { lat:";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unshop"]) ? $context["unshop"] : $this->getContext($context, "unshop")), "lattitude", array()), "html", null, true);
        echo ",lng:";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unshop"]) ? $context["unshop"] : $this->getContext($context, "unshop")), "longitude", array()), "html", null, true);
        echo " },
         
          map: map
        });

        // You can use a LatLng literal in place of a google.maps.LatLng object when
        // creating the Marker object. Once the Marker object is instantiated, its
        // position will be available as a google.maps.LatLng object. In this case,
        // we retrieve the marker's position using the
        // google.maps.LatLng.getPosition() method.
        var infowindow = new google.maps.InfoWindow({
          content: '<p>Marker Location:' + marker.getPosition() + '</p>'
        });

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.open(map, marker);
        });
      }

      google.maps.event.addDomListener(window, 'load', initialize);

   </script>


<table class=\"table\">
 <tr><td>map : </td> <td><div id=\"map\" style=\"height:350px;\" ></div></td></tr>
 <tr><td>Nom : </td> <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unshop"]) ? $context["unshop"] : $this->getContext($context, "unshop")), "name", array()), "html", null, true);
        echo "</td></tr>
 <tr><td>Téléphone : </td><td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unshop"]) ? $context["unshop"] : $this->getContext($context, "unshop")), "telephone", array()), "html", null, true);
        echo "</td></tr>
<tr><td>adresse : </td><td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unshop"]) ? $context["unshop"] : $this->getContext($context, "unshop")), "adresse", array()), "html", null, true);
        echo "</td></tr>
<tr><td>Utilisateur : </td><td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["unshop"]) ? $context["unshop"] : $this->getContext($context, "unshop")), "user", array()), "firstname", array()), "html", null, true);
        echo "</td></tr>
 <tr><td></td>
<td><a class=\"btn btn-default\" href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("listShop");
        echo " \" role=\"button\">retour</a></td></tr>
<!-- lat: 35.8253900, lng:10.6369900!-->
</table>
  

 
";
        
        $__internal_95292e00cb577b7737fa89f7331289095aa470bcf1ba8083979767f773c5a47e->leave($__internal_95292e00cb577b7737fa89f7331289095aa470bcf1ba8083979767f773c5a47e_prof);

    }

    public function getTemplateName()
    {
        return "shop/detailShop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 54,  108 => 52,  104 => 51,  100 => 50,  96 => 49,  65 => 23,  52 => 15,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/* <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHE0hQqRcgMyLXnDFBI_RtMAaH58E3YQY&callback=initMap&language=fr"*/
/*    async defer>*/
/*    </script>*/
/* */
/* */
/*    <script>*/
/*         var map;*/
/*       function initialize() {*/
/*         var mapOptions = {*/
/*           zoom: 7,*/
/*           center: {lat:{{unshop.lattitude}},lng:{{unshop.longitude}}}*/
/*         };*/
/*         map = new google.maps.Map(document.getElementById('map'),*/
/*             mapOptions);*/
/* */
/*         var marker = new google.maps.Marker({*/
/*           // The below line is equivalent to writing:*/
/*           // position: new google.maps.LatLng(-34.397, 150.644)*/
/*           position: { lat:{{unshop.lattitude}},lng:{{unshop.longitude}} },*/
/*          */
/*           map: map*/
/*         });*/
/* */
/*         // You can use a LatLng literal in place of a google.maps.LatLng object when*/
/*         // creating the Marker object. Once the Marker object is instantiated, its*/
/*         // position will be available as a google.maps.LatLng object. In this case,*/
/*         // we retrieve the marker's position using the*/
/*         // google.maps.LatLng.getPosition() method.*/
/*         var infowindow = new google.maps.InfoWindow({*/
/*           content: '<p>Marker Location:' + marker.getPosition() + '</p>'*/
/*         });*/
/* */
/*         google.maps.event.addListener(marker, 'click', function() {*/
/*           infowindow.open(map, marker);*/
/*         });*/
/*       }*/
/* */
/*       google.maps.event.addDomListener(window, 'load', initialize);*/
/* */
/*    </script>*/
/* */
/* */
/* <table class="table">*/
/*  <tr><td>map : </td> <td><div id="map" style="height:350px;" ></div></td></tr>*/
/*  <tr><td>Nom : </td> <td>{{unshop.name}}</td></tr>*/
/*  <tr><td>Téléphone : </td><td>{{unshop.telephone}}</td></tr>*/
/* <tr><td>adresse : </td><td>{{unshop.adresse}}</td></tr>*/
/* <tr><td>Utilisateur : </td><td>{{unshop.user.firstname}}</td></tr>*/
/*  <tr><td></td>*/
/* <td><a class="btn btn-default" href="{{path('listShop')}} " role="button">retour</a></td></tr>*/
/* <!-- lat: 35.8253900, lng:10.6369900!-->*/
/* </table>*/
/*   */
/* */
/*  */
/* {% endblock %}*/
