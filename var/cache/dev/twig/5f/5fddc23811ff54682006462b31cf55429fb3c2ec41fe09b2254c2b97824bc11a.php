<?php

/* base.html.twig */
class __TwigTemplate_2fbf191cff323d00b10758d6b188e2ad55c0769e94a2743d82fe0c784bae7a09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a28d794f2b8253515051e8add23ff2617287e3623e5b0ac76ed9f57910687bb = $this->env->getExtension("native_profiler");
        $__internal_4a28d794f2b8253515051e8add23ff2617287e3623e5b0ac76ed9f57910687bb->enter($__internal_4a28d794f2b8253515051e8add23ff2617287e3623e5b0ac76ed9f57910687bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

  <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">

   ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
   

  </head>

  <body>
       
    <nav class=\"navbar navbar-inverse \">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href= \"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("listRole");
        echo " \">Role</a>
         <a class=\"navbar-brand\" href= \"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("listCategorie");
        echo " \">Categorie</a>
         <a class=\"navbar-brand\" href= \"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("listUser");
        echo " \">User</a>
         <a class=\"navbar-brand\" href= \"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("listShop");
        echo " \">Shop</a>
      <a class=\"navbar-brand\" href= \"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("nosBoutique");
        echo " \">Nos Boutiques</a>
        
    <!--   ->
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li><a class=\"navbar-brand\" href=\"\">Produit</a></li>
          <!--  <li><a href=\"#about\">About</a></li>
            <li><a href=\"#contact\">Contact</a></li>
           -->
           </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container\">
    <div class=\"row\">
    <div calss=\"col-md-12\">
     ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "   </div></div>
     

    </div><!-- /.container -->
     ";
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "

  

</body>
</html>";
        
        $__internal_4a28d794f2b8253515051e8add23ff2617287e3623e5b0ac76ed9f57910687bb->leave($__internal_4a28d794f2b8253515051e8add23ff2617287e3623e5b0ac76ed9f57910687bb_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_12d2568dd888341f2dac4518894c1bd52107c9a7115722f45ae05617722f9b4a = $this->env->getExtension("native_profiler");
        $__internal_12d2568dd888341f2dac4518894c1bd52107c9a7115722f45ae05617722f9b4a->enter($__internal_12d2568dd888341f2dac4518894c1bd52107c9a7115722f45ae05617722f9b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_12d2568dd888341f2dac4518894c1bd52107c9a7115722f45ae05617722f9b4a->leave($__internal_12d2568dd888341f2dac4518894c1bd52107c9a7115722f45ae05617722f9b4a_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e0690c731817d7ddf495aebba6051e8d74477957e62e02f4afbf8a0e54fa0561 = $this->env->getExtension("native_profiler");
        $__internal_e0690c731817d7ddf495aebba6051e8d74477957e62e02f4afbf8a0e54fa0561->enter($__internal_e0690c731817d7ddf495aebba6051e8d74477957e62e02f4afbf8a0e54fa0561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e0690c731817d7ddf495aebba6051e8d74477957e62e02f4afbf8a0e54fa0561->leave($__internal_e0690c731817d7ddf495aebba6051e8d74477957e62e02f4afbf8a0e54fa0561_prof);

    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e387c58948fd788ab77b0b06895f9ceb3deeb29dc29816b2ae00c5264e5a789 = $this->env->getExtension("native_profiler");
        $__internal_7e387c58948fd788ab77b0b06895f9ceb3deeb29dc29816b2ae00c5264e5a789->enter($__internal_7e387c58948fd788ab77b0b06895f9ceb3deeb29dc29816b2ae00c5264e5a789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7e387c58948fd788ab77b0b06895f9ceb3deeb29dc29816b2ae00c5264e5a789->leave($__internal_7e387c58948fd788ab77b0b06895f9ceb3deeb29dc29816b2ae00c5264e5a789_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_89324f6770c62ec945f393d22bcde8995e1959eef73579144429bbdd58e502e6 = $this->env->getExtension("native_profiler");
        $__internal_89324f6770c62ec945f393d22bcde8995e1959eef73579144429bbdd58e502e6->enter($__internal_89324f6770c62ec945f393d22bcde8995e1959eef73579144429bbdd58e502e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_89324f6770c62ec945f393d22bcde8995e1959eef73579144429bbdd58e502e6->leave($__internal_89324f6770c62ec945f393d22bcde8995e1959eef73579144429bbdd58e502e6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 61,  151 => 56,  140 => 17,  128 => 12,  116 => 62,  114 => 61,  108 => 57,  106 => 56,  85 => 38,  81 => 37,  77 => 36,  73 => 35,  69 => 34,  49 => 18,  47 => 17,  39 => 12,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <link rel="icon" href="../../favicon.ico">*/
/* */
/*   <title>{% block title %}Welcome!{% endblock %}</title>*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">*/
/* */
/*    {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*    */
/* */
/*   </head>*/
/* */
/*   <body>*/
/*        */
/*     <nav class="navbar navbar-inverse ">*/
/*       <div class="container">*/
/*         <div class="navbar-header">*/
/*           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*           </button>*/
/*           <a class="navbar-brand" href= "{{ path('listRole') }} ">Role</a>*/
/*          <a class="navbar-brand" href= "{{ path('listCategorie') }} ">Categorie</a>*/
/*          <a class="navbar-brand" href= "{{ path('listUser') }} ">User</a>*/
/*          <a class="navbar-brand" href= "{{ path('listShop') }} ">Shop</a>*/
/*       <a class="navbar-brand" href= "{{ path('nosBoutique') }} ">Nos Boutiques</a>*/
/*         */
/*     <!--   ->*/
/*         </div>*/
/*         <div id="navbar" class="collapse navbar-collapse">*/
/*           <ul class="nav navbar-nav">*/
/*             <li><a class="navbar-brand" href="">Produit</a></li>*/
/*           <!--  <li><a href="#about">About</a></li>*/
/*             <li><a href="#contact">Contact</a></li>*/
/*            -->*/
/*            </ul>*/
/*         </div><!--/.nav-collapse -->*/
/*       </div>*/
/*     </nav>*/
/* */
/*     <div class="container">*/
/*     <div class="row">*/
/*     <div calss="col-md-12">*/
/*      {% block body %}{% endblock %}*/
/*    </div></div>*/
/*      */
/* */
/*     </div><!-- /.container -->*/
/*      {% block javascripts %}{% endblock %}*/
/* */
/* */
/*   */
/* */
/* </body>*/
/* </html>*/
