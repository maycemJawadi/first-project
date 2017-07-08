<?php

/* categorie/listCategorie.html.twig */
class __TwigTemplate_e415c54711a7d637fe7b27fce392608f44b2280fd44c003571ff5794211efe29 extends Twig_Template
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
        $__internal_503d47432d07bd2840a2e2694730e3498af3a093ad1156f05b1bad1905bd9538 = $this->env->getExtension("native_profiler");
        $__internal_503d47432d07bd2840a2e2694730e3498af3a093ad1156f05b1bad1905bd9538->enter($__internal_503d47432d07bd2840a2e2694730e3498af3a093ad1156f05b1bad1905bd9538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/listCategorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_503d47432d07bd2840a2e2694730e3498af3a093ad1156f05b1bad1905bd9538->leave($__internal_503d47432d07bd2840a2e2694730e3498af3a093ad1156f05b1bad1905bd9538_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7930c0da74a6454a80ce4dcece4fc6f880cef0960f3f53f6fe49cb49cd63179 = $this->env->getExtension("native_profiler");
        $__internal_e7930c0da74a6454a80ce4dcece4fc6f880cef0960f3f53f6fe49cb49cd63179->enter($__internal_e7930c0da74a6454a80ce4dcece4fc6f880cef0960f3f53f6fe49cb49cd63179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e7930c0da74a6454a80ce4dcece4fc6f880cef0960f3f53f6fe49cb49cd63179->leave($__internal_e7930c0da74a6454a80ce4dcece4fc6f880cef0960f3f53f6fe49cb49cd63179_prof);

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
