<?php

/* :shop:addShop.html.twig */
class __TwigTemplate_619d6913e85bf5701312af35105efb73a4751f1de7d7e1a32fcf1a8ce5d16faf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":shop:addShop.html.twig", 1);
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
        $__internal_d5a9623398d06a689c9c63937de8800b6a466e5e75a3ba0a0a3b3047616b128e = $this->env->getExtension("native_profiler");
        $__internal_d5a9623398d06a689c9c63937de8800b6a466e5e75a3ba0a0a3b3047616b128e->enter($__internal_d5a9623398d06a689c9c63937de8800b6a466e5e75a3ba0a0a3b3047616b128e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":shop:addShop.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5a9623398d06a689c9c63937de8800b6a466e5e75a3ba0a0a3b3047616b128e->leave($__internal_d5a9623398d06a689c9c63937de8800b6a466e5e75a3ba0a0a3b3047616b128e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f9543d25cb44ab3e3f670d098c03d3b77a67200aebeae30cf934ec764b50375 = $this->env->getExtension("native_profiler");
        $__internal_0f9543d25cb44ab3e3f670d098c03d3b77a67200aebeae30cf934ec764b50375->enter($__internal_0f9543d25cb44ab3e3f670d098c03d3b77a67200aebeae30cf934ec764b50375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "


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
    <link type=\"text/css\" rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500\">
    <style>
      #locationField, #controls {
        position: relative;
        width: 480px;
      }
      #autocomplete {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 99%;
      }
      .label {
        text-align: right;
        font-weight: bold;
        width: 100px;
        color: #303030;
      }
      #address {
        border: 1px solid #000090;
        background-color: #f0f0ff;
        width: 480px;
        padding-right: 2px;
      }
      #address td {
        font-size: 10pt;
      }
      .field {
        width: 99%;
      }
      .slimField {
        width: 80px;
      }
      .wideField {
        width: 200px;
      }
      #locationField {
        height: 20px;
        margin-bottom: 2px;
      }
    </style>

";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
<table><tr><td>Nom</td><td>";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "</td></tr>
<tr><td>Telephone</td><td>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget');
        echo "</td></tr>
<tr><td>Adresse</td><td> 
<div id=\"locationField\">
";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("id" => "autocomplete", "placeholder" => "Enter your address", "onFocus" => "geolocate()"));
        echo "
  </div></td></tr>
  
<tr><td>";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longitude", array()), 'widget', array("id" => "longitude", "type" => "hidden"));
        echo "</td></tr>
<tr><td>";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lattitude", array()), 'widget', array("id" => "lattitude", "type" => "hidden"));
        echo "</td></tr>
<tr><td>Utilisateur</td><td>";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'widget');
        echo "</td></tr>
<tr><td></td><td><Button type=\"submit\">Ok</Button></td>
</tr></table>






    <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places\">

      var placeSearch, autocomplete;
      var componentForm = {
      
        lattitude: 'long_name',
        longitude: 'long_name',
        
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
       for (var i = 0; i < place.address_components.length; i++) {
         
           document.getElementById('lattitude').value = place.geometry.location.lat();
  document.getElementById('longitude').value = place.geometry.location.lng();

        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
           
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBEFl-FVdVYmF-LdHbTZRPBczTx-3oXeQM&libraries=places&callback=initAutocomplete\"
        async defer></script>
";
        // line 148
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_0f9543d25cb44ab3e3f670d098c03d3b77a67200aebeae30cf934ec764b50375->leave($__internal_0f9543d25cb44ab3e3f670d098c03d3b77a67200aebeae30cf934ec764b50375_prof);

    }

    public function getTemplateName()
    {
        return ":shop:addShop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 148,  128 => 71,  124 => 70,  120 => 69,  114 => 66,  108 => 63,  104 => 62,  100 => 61,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* */
/* */
/* */
/* <style>*/
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
/*     <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">*/
/*     <style>*/
/*       #locationField, #controls {*/
/*         position: relative;*/
/*         width: 480px;*/
/*       }*/
/*       #autocomplete {*/
/*         position: absolute;*/
/*         top: 0px;*/
/*         left: 0px;*/
/*         width: 99%;*/
/*       }*/
/*       .label {*/
/*         text-align: right;*/
/*         font-weight: bold;*/
/*         width: 100px;*/
/*         color: #303030;*/
/*       }*/
/*       #address {*/
/*         border: 1px solid #000090;*/
/*         background-color: #f0f0ff;*/
/*         width: 480px;*/
/*         padding-right: 2px;*/
/*       }*/
/*       #address td {*/
/*         font-size: 10pt;*/
/*       }*/
/*       .field {*/
/*         width: 99%;*/
/*       }*/
/*       .slimField {*/
/*         width: 80px;*/
/*       }*/
/*       .wideField {*/
/*         width: 200px;*/
/*       }*/
/*       #locationField {*/
/*         height: 20px;*/
/*         margin-bottom: 2px;*/
/*       }*/
/*     </style>*/
/* */
/* {{form_start(form, {'attr':{'novalidate':'novalidate'}})}}*/
/* <table><tr><td>Nom</td><td>{{form_widget(form.name)}}</td></tr>*/
/* <tr><td>Telephone</td><td>{{form_widget(form.telephone)}}</td></tr>*/
/* <tr><td>Adresse</td><td> */
/* <div id="locationField">*/
/* {{form_widget(form.adresse, { 'id': 'autocomplete','placeholder':'Enter your address' ,'onFocus':'geolocate()'})}}*/
/*   </div></td></tr>*/
/*   */
/* <tr><td>{{form_widget(form.longitude,{'id':'longitude','type':'hidden'})}}</td></tr>*/
/* <tr><td>{{form_widget(form.lattitude,{'id':'lattitude','type':'hidden'})}}</td></tr>*/
/* <tr><td>Utilisateur</td><td>{{form_widget(form.user)}}</td></tr>*/
/* <tr><td></td><td><Button type="submit">Ok</Button></td>*/
/* </tr></table>*/
/* */
/* */
/* */
/* */
/* */
/* */
/*     <script>*/
/*       // This example displays an address form, using the autocomplete feature*/
/*       // of the Google Places API to help users fill in the information.*/
/* */
/*       // This example requires the Places library. Include the libraries=places*/
/*       // parameter when you first load the API. For example:*/
/*       // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">*/
/* */
/*       var placeSearch, autocomplete;*/
/*       var componentForm = {*/
/*       */
/*         lattitude: 'long_name',*/
/*         longitude: 'long_name',*/
/*         */
/*       };*/
/* */
/*       function initAutocomplete() {*/
/*         // Create the autocomplete object, restricting the search to geographical*/
/*         // location types.*/
/*         autocomplete = new google.maps.places.Autocomplete(*/
/*             /** @type {!HTMLInputElement} *//* (document.getElementById('autocomplete')),*/
/*             {types: ['geocode']});*/
/* */
/*         // When the user selects an address from the dropdown, populate the address*/
/*         // fields in the form.*/
/*         autocomplete.addListener('place_changed', fillInAddress);*/
/*       }*/
/* */
/*       function fillInAddress() {*/
/*         // Get the place details from the autocomplete object.*/
/*         var place = autocomplete.getPlace();*/
/* */
/*         for (var component in componentForm) {*/
/*           document.getElementById(component).value = '';*/
/*           document.getElementById(component).disabled = false;*/
/*         }*/
/* */
/*         // Get each component of the address from the place details*/
/*         // and fill the corresponding field on the form.*/
/*        for (var i = 0; i < place.address_components.length; i++) {*/
/*          */
/*            document.getElementById('lattitude').value = place.geometry.location.lat();*/
/*   document.getElementById('longitude').value = place.geometry.location.lng();*/
/* */
/*         }*/
/*       }*/
/* */
/*       // Bias the autocomplete object to the user's geographical location,*/
/*       // as supplied by the browser's 'navigator.geolocation' object.*/
/*       function geolocate() {*/
/*         if (navigator.geolocation) {*/
/*           navigator.geolocation.getCurrentPosition(function(position) {*/
/*             var geolocation = {*/
/*               lat: position.coords.latitude,*/
/*               lng: position.coords.longitude*/
/*             };*/
/*            */
/*             var circle = new google.maps.Circle({*/
/*               center: geolocation,*/
/*               radius: position.coords.accuracy*/
/*             });*/
/*             autocomplete.setBounds(circle.getBounds());*/
/*           });*/
/*         }*/
/*       }*/
/*     </script>*/
/*     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEFl-FVdVYmF-LdHbTZRPBczTx-3oXeQM&libraries=places&callback=initAutocomplete"*/
/*         async defer></script>*/
/* {{form_end(form)}}*/
/* {% endblock %}*/
