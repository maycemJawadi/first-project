<?php

/* categorie/listCategorie.html.twig */
class __TwigTemplate_41d22d2e0587c484d20d38079158533ddc89230295ea20882e8c2583404f82d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "categorie/listCategorie.html.twig", 1);
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
        $__internal_a14733e5b11d6e7f542164e44edb18cc40b3d12a4f04348caf5f6f027ca7b711 = $this->env->getExtension("native_profiler");
        $__internal_a14733e5b11d6e7f542164e44edb18cc40b3d12a4f04348caf5f6f027ca7b711->enter($__internal_a14733e5b11d6e7f542164e44edb18cc40b3d12a4f04348caf5f6f027ca7b711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/listCategorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a14733e5b11d6e7f542164e44edb18cc40b3d12a4f04348caf5f6f027ca7b711->leave($__internal_a14733e5b11d6e7f542164e44edb18cc40b3d12a4f04348caf5f6f027ca7b711_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4ba44ea6d09d1529502347285aa48cec97b6e1388bd57d147a60b33739ab8bb = $this->env->getExtension("native_profiler");
        $__internal_c4ba44ea6d09d1529502347285aa48cec97b6e1388bd57d147a60b33739ab8bb->enter($__internal_c4ba44ea6d09d1529502347285aa48cec97b6e1388bd57d147a60b33739ab8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<a class=\"navbar-brand\"  href=\"";
        echo $this->env->getExtension('routing')->getPath("addCategorie");
        echo "\">Ajout</a>
<table class=\"table\">
<thead> <tr> 
 <th>Name</th>

   <th>Action</th> </tr>
    
    </thead> <tbody>
     ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 12
            echo "     <tr>
<td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "name", array()), "html", null, true);
            echo " </td>


      <td><a class=\"btn btn-success\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifCategorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo " \" role=\"button\">edit</a>
      <a class=\"btn btn-danger\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suppCategorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo " \" role=\"button\">delete</a></td> </tr>  </tbody>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
";
        
        $__internal_c4ba44ea6d09d1529502347285aa48cec97b6e1388bd57d147a60b33739ab8bb->leave($__internal_c4ba44ea6d09d1529502347285aa48cec97b6e1388bd57d147a60b33739ab8bb_prof);

    }

    public function getTemplateName()
    {
        return "categorie/listCategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  69 => 17,  65 => 16,  59 => 13,  56 => 12,  52 => 11,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <a class="navbar-brand"  href="{{ path('addCategorie') }}">Ajout</a>*/
/* <table class="table">*/
/* <thead> <tr> */
/*  <th>Name</th>*/
/* */
/*    <th>Action</th> </tr>*/
/*     */
/*     </thead> <tbody>*/
/*      {% for categorie in categories %}*/
/*      <tr>*/
/* <td>{{categorie.name}} </td>*/
/* */
/* */
/*       <td><a class="btn btn-success" href="{{path('modifCategorie', {'id': categorie.id})}} " role="button">edit</a>*/
/*       <a class="btn btn-danger" href="{{path('suppCategorie', {'id': categorie.id})}} " role="button">delete</a></td> </tr>  </tbody>*/
/* */
/* {% endfor %}*/
/* */
/* {% endblock %}*/
