<?php

/* role/listRole.html.twig */
class __TwigTemplate_f974c21c9348c32edc9a45058599cd9aa6cae29b262faab0e495682fa58bc736 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "role/listRole.html.twig", 1);
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
        $__internal_53e6bc9465222768e16b10b10a614072fc0302e737db703a09c04c945e3bef23 = $this->env->getExtension("native_profiler");
        $__internal_53e6bc9465222768e16b10b10a614072fc0302e737db703a09c04c945e3bef23->enter($__internal_53e6bc9465222768e16b10b10a614072fc0302e737db703a09c04c945e3bef23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "role/listRole.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53e6bc9465222768e16b10b10a614072fc0302e737db703a09c04c945e3bef23->leave($__internal_53e6bc9465222768e16b10b10a614072fc0302e737db703a09c04c945e3bef23_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_49b7d453149f46448dc4e75ea907b767d5418de1f5fb161c2ff7c0c2bdebf02f = $this->env->getExtension("native_profiler");
        $__internal_49b7d453149f46448dc4e75ea907b767d5418de1f5fb161c2ff7c0c2bdebf02f->enter($__internal_49b7d453149f46448dc4e75ea907b767d5418de1f5fb161c2ff7c0c2bdebf02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<a class=\"navbar-brand\"  href=\"";
        echo $this->env->getExtension('routing')->getPath("addRole");
        echo "\">Ajout</a>
<table class=\"table\">
<thead> <tr> 
 <th>Name</th>

   <th>Action</th> </tr>
    
    </thead> <tbody>
     ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 12
            echo "     <tr>
<td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "name", array()), "html", null, true);
            echo " </td>


      <td><a class=\"btn btn-success\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifRole", array("id" => $this->getAttribute($context["role"], "id", array()))), "html", null, true);
            echo " \" role=\"button\">edit</a>
      <a class=\"btn btn-danger\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suppRole", array("id" => $this->getAttribute($context["role"], "id", array()))), "html", null, true);
            echo " \" role=\"button\">delete</a></td> </tr>  </tbody>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
";
        
        $__internal_49b7d453149f46448dc4e75ea907b767d5418de1f5fb161c2ff7c0c2bdebf02f->leave($__internal_49b7d453149f46448dc4e75ea907b767d5418de1f5fb161c2ff7c0c2bdebf02f_prof);

    }

    public function getTemplateName()
    {
        return "role/listRole.html.twig";
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
/* <a class="navbar-brand"  href="{{ path('addRole') }}">Ajout</a>*/
/* <table class="table">*/
/* <thead> <tr> */
/*  <th>Name</th>*/
/* */
/*    <th>Action</th> </tr>*/
/*     */
/*     </thead> <tbody>*/
/*      {% for role in roles %}*/
/*      <tr>*/
/* <td>{{role.name}} </td>*/
/* */
/* */
/*       <td><a class="btn btn-success" href="{{path('modifRole', {'id': role.id})}} " role="button">edit</a>*/
/*       <a class="btn btn-danger" href="{{path('suppRole', {'id': role.id})}} " role="button">delete</a></td> </tr>  </tbody>*/
/* */
/* {% endfor %}*/
/* */
/* {% endblock %}*/