<?php

/* base.html.twig */
class __TwigTemplate_43ab4066899f9f5ffb40582d0fd30b0baa3039d0fdad3eefa9a20bc66d036702 extends Twig_Template
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
        $__internal_a8ef460d86f9619e99518b771c53c83caf79639268833949a7be2b605513111a = $this->env->getExtension("native_profiler");
        $__internal_a8ef460d86f9619e99518b771c53c83caf79639268833949a7be2b605513111a->enter($__internal_a8ef460d86f9619e99518b771c53c83caf79639268833949a7be2b605513111a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "   </div></div>
     

    </div><!-- /.container -->
     ";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "

  

</body>
</html>";
        
        $__internal_a8ef460d86f9619e99518b771c53c83caf79639268833949a7be2b605513111a->leave($__internal_a8ef460d86f9619e99518b771c53c83caf79639268833949a7be2b605513111a_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_974030d32c61805a33d5029d29f41c72549c12821a386ee42cccde67d5837f54 = $this->env->getExtension("native_profiler");
        $__internal_974030d32c61805a33d5029d29f41c72549c12821a386ee42cccde67d5837f54->enter($__internal_974030d32c61805a33d5029d29f41c72549c12821a386ee42cccde67d5837f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_974030d32c61805a33d5029d29f41c72549c12821a386ee42cccde67d5837f54->leave($__internal_974030d32c61805a33d5029d29f41c72549c12821a386ee42cccde67d5837f54_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b2bb36015a1c50f509495b6a10548a72796e31be448fbecb45ed5d5ad0ea9add = $this->env->getExtension("native_profiler");
        $__internal_b2bb36015a1c50f509495b6a10548a72796e31be448fbecb45ed5d5ad0ea9add->enter($__internal_b2bb36015a1c50f509495b6a10548a72796e31be448fbecb45ed5d5ad0ea9add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b2bb36015a1c50f509495b6a10548a72796e31be448fbecb45ed5d5ad0ea9add->leave($__internal_b2bb36015a1c50f509495b6a10548a72796e31be448fbecb45ed5d5ad0ea9add_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fa6384a5354c35d76fcad116c05e135dc8fc86cbf966bc646b84c385c76f406 = $this->env->getExtension("native_profiler");
        $__internal_4fa6384a5354c35d76fcad116c05e135dc8fc86cbf966bc646b84c385c76f406->enter($__internal_4fa6384a5354c35d76fcad116c05e135dc8fc86cbf966bc646b84c385c76f406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4fa6384a5354c35d76fcad116c05e135dc8fc86cbf966bc646b84c385c76f406->leave($__internal_4fa6384a5354c35d76fcad116c05e135dc8fc86cbf966bc646b84c385c76f406_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4facf72317ef50830b8a74daec5ec298a85549fab9bcd312592dd82a794cdd5f = $this->env->getExtension("native_profiler");
        $__internal_4facf72317ef50830b8a74daec5ec298a85549fab9bcd312592dd82a794cdd5f->enter($__internal_4facf72317ef50830b8a74daec5ec298a85549fab9bcd312592dd82a794cdd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4facf72317ef50830b8a74daec5ec298a85549fab9bcd312592dd82a794cdd5f->leave($__internal_4facf72317ef50830b8a74daec5ec298a85549fab9bcd312592dd82a794cdd5f_prof);

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
        return array (  149 => 57,  138 => 52,  127 => 17,  115 => 12,  103 => 58,  101 => 57,  95 => 53,  93 => 52,  73 => 35,  69 => 34,  49 => 18,  47 => 17,  39 => 12,  26 => 1,);
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
/*             <a class="navbar-brand" href= "{{ path('listCategorie') }} ">Categorie</a>*/
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
