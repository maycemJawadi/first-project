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
        $__internal_ce1bd4862cff09addc867884cd23a9d61ac4aacc85494b0ecb82f97b806ef14d = $this->env->getExtension("native_profiler");
        $__internal_ce1bd4862cff09addc867884cd23a9d61ac4aacc85494b0ecb82f97b806ef14d->enter($__internal_ce1bd4862cff09addc867884cd23a9d61ac4aacc85494b0ecb82f97b806ef14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "   </div></div>
     

    </div><!-- /.container -->
     ";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 59
        echo "

  

</body>
</html>";
        
        $__internal_ce1bd4862cff09addc867884cd23a9d61ac4aacc85494b0ecb82f97b806ef14d->leave($__internal_ce1bd4862cff09addc867884cd23a9d61ac4aacc85494b0ecb82f97b806ef14d_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_336d72835264e3ea83ca0559d2bcf3ceb3048a4b0ec50200f617af5753926cb9 = $this->env->getExtension("native_profiler");
        $__internal_336d72835264e3ea83ca0559d2bcf3ceb3048a4b0ec50200f617af5753926cb9->enter($__internal_336d72835264e3ea83ca0559d2bcf3ceb3048a4b0ec50200f617af5753926cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_336d72835264e3ea83ca0559d2bcf3ceb3048a4b0ec50200f617af5753926cb9->leave($__internal_336d72835264e3ea83ca0559d2bcf3ceb3048a4b0ec50200f617af5753926cb9_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_afa77c6d54be6ac1974d53dcf4e8fc819be1a06b10f27a37ef81446960da15ec = $this->env->getExtension("native_profiler");
        $__internal_afa77c6d54be6ac1974d53dcf4e8fc819be1a06b10f27a37ef81446960da15ec->enter($__internal_afa77c6d54be6ac1974d53dcf4e8fc819be1a06b10f27a37ef81446960da15ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_afa77c6d54be6ac1974d53dcf4e8fc819be1a06b10f27a37ef81446960da15ec->leave($__internal_afa77c6d54be6ac1974d53dcf4e8fc819be1a06b10f27a37ef81446960da15ec_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a507b7bc598f51f75ba5bf4691fb51f2d60db5b1afc0843f10975f1cdc45475 = $this->env->getExtension("native_profiler");
        $__internal_9a507b7bc598f51f75ba5bf4691fb51f2d60db5b1afc0843f10975f1cdc45475->enter($__internal_9a507b7bc598f51f75ba5bf4691fb51f2d60db5b1afc0843f10975f1cdc45475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9a507b7bc598f51f75ba5bf4691fb51f2d60db5b1afc0843f10975f1cdc45475->leave($__internal_9a507b7bc598f51f75ba5bf4691fb51f2d60db5b1afc0843f10975f1cdc45475_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fdffd2dfd77902b419c2a6f9330462d6b1d1f4b7ba0d7882d292f20a963df0da = $this->env->getExtension("native_profiler");
        $__internal_fdffd2dfd77902b419c2a6f9330462d6b1d1f4b7ba0d7882d292f20a963df0da->enter($__internal_fdffd2dfd77902b419c2a6f9330462d6b1d1f4b7ba0d7882d292f20a963df0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fdffd2dfd77902b419c2a6f9330462d6b1d1f4b7ba0d7882d292f20a963df0da->leave($__internal_fdffd2dfd77902b419c2a6f9330462d6b1d1f4b7ba0d7882d292f20a963df0da_prof);

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
        return array (  150 => 58,  139 => 53,  128 => 17,  116 => 12,  104 => 59,  102 => 58,  96 => 54,  94 => 53,  73 => 35,  69 => 34,  49 => 18,  47 => 17,  39 => 12,  26 => 1,);
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
