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
        $__internal_07ba5599a7213458854a1c2ef3dfbac8470e714ea37ca2eb1ea7fd5c65416dd3 = $this->env->getExtension("native_profiler");
        $__internal_07ba5599a7213458854a1c2ef3dfbac8470e714ea37ca2eb1ea7fd5c65416dd3->enter($__internal_07ba5599a7213458854a1c2ef3dfbac8470e714ea37ca2eb1ea7fd5c65416dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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

        <a class=\"navbar-brand\" href= \"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("listDress");
        echo " \">Dress</a>
        
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
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "   </div></div>
     

    </div><!-- /.container -->
     ";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "

  

</body>
</html>";
        
        $__internal_07ba5599a7213458854a1c2ef3dfbac8470e714ea37ca2eb1ea7fd5c65416dd3->leave($__internal_07ba5599a7213458854a1c2ef3dfbac8470e714ea37ca2eb1ea7fd5c65416dd3_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_3466b81a4474c5117587cf5cc6c71bfb05c78395d6095c72985353923c2e9b59 = $this->env->getExtension("native_profiler");
        $__internal_3466b81a4474c5117587cf5cc6c71bfb05c78395d6095c72985353923c2e9b59->enter($__internal_3466b81a4474c5117587cf5cc6c71bfb05c78395d6095c72985353923c2e9b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3466b81a4474c5117587cf5cc6c71bfb05c78395d6095c72985353923c2e9b59->leave($__internal_3466b81a4474c5117587cf5cc6c71bfb05c78395d6095c72985353923c2e9b59_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_403b74936f6c5a9b3454ac7280dd0a752c98b72a154c7bf0ba97fb42423075a4 = $this->env->getExtension("native_profiler");
        $__internal_403b74936f6c5a9b3454ac7280dd0a752c98b72a154c7bf0ba97fb42423075a4->enter($__internal_403b74936f6c5a9b3454ac7280dd0a752c98b72a154c7bf0ba97fb42423075a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_403b74936f6c5a9b3454ac7280dd0a752c98b72a154c7bf0ba97fb42423075a4->leave($__internal_403b74936f6c5a9b3454ac7280dd0a752c98b72a154c7bf0ba97fb42423075a4_prof);

    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        $__internal_aed30f1f07c7ac23b0c52b9901d665f7fd5d32d0d0df4676f0b33a52bdcb6c9d = $this->env->getExtension("native_profiler");
        $__internal_aed30f1f07c7ac23b0c52b9901d665f7fd5d32d0d0df4676f0b33a52bdcb6c9d->enter($__internal_aed30f1f07c7ac23b0c52b9901d665f7fd5d32d0d0df4676f0b33a52bdcb6c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aed30f1f07c7ac23b0c52b9901d665f7fd5d32d0d0df4676f0b33a52bdcb6c9d->leave($__internal_aed30f1f07c7ac23b0c52b9901d665f7fd5d32d0d0df4676f0b33a52bdcb6c9d_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dbc65583d9c6a4da44b544b31133f60c28a96a80774cfcbf0137a35edba609c3 = $this->env->getExtension("native_profiler");
        $__internal_dbc65583d9c6a4da44b544b31133f60c28a96a80774cfcbf0137a35edba609c3->enter($__internal_dbc65583d9c6a4da44b544b31133f60c28a96a80774cfcbf0137a35edba609c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dbc65583d9c6a4da44b544b31133f60c28a96a80774cfcbf0137a35edba609c3->leave($__internal_dbc65583d9c6a4da44b544b31133f60c28a96a80774cfcbf0137a35edba609c3_prof);

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
        return array (  167 => 63,  156 => 58,  145 => 17,  133 => 12,  121 => 64,  119 => 63,  113 => 59,  111 => 58,  90 => 40,  85 => 38,  81 => 37,  77 => 36,  73 => 35,  69 => 34,  49 => 18,  47 => 17,  39 => 12,  26 => 1,);
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
/* */
/*         <a class="navbar-brand" href= "{{ path('listDress') }} ">Dress</a>*/
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
