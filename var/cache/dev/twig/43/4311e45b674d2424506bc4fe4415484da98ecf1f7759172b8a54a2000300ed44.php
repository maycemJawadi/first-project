<?php

/* user/listUser.html.twig */
class __TwigTemplate_a19195999042e5435c2861ddf7cb1837fd6919dca1bd2979e077a4b1e82b4c92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/listUser.html.twig", 1);
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
        $__internal_fa66f03a1ca0ce7f2a480f747703c2d34cd977bf6c6d63d85b34ec1057bddbc5 = $this->env->getExtension("native_profiler");
        $__internal_fa66f03a1ca0ce7f2a480f747703c2d34cd977bf6c6d63d85b34ec1057bddbc5->enter($__internal_fa66f03a1ca0ce7f2a480f747703c2d34cd977bf6c6d63d85b34ec1057bddbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/listUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa66f03a1ca0ce7f2a480f747703c2d34cd977bf6c6d63d85b34ec1057bddbc5->leave($__internal_fa66f03a1ca0ce7f2a480f747703c2d34cd977bf6c6d63d85b34ec1057bddbc5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_41594563d2b619742b2a23276697328e492dcd2db3796d5c02a37d76325dadbd = $this->env->getExtension("native_profiler");
        $__internal_41594563d2b619742b2a23276697328e492dcd2db3796d5c02a37d76325dadbd->enter($__internal_41594563d2b619742b2a23276697328e492dcd2db3796d5c02a37d76325dadbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<a class=\"navbar-brand\"  href=\"";
        echo $this->env->getExtension('routing')->getPath("addUser");
        echo "\">Ajout</a>
<table class=\"table\">
<thead> <tr> 
 <th>Nom</th>
 <th>Prenom</th>
<th>Email</th>
<th>Role</th>
   <th>Action</th> </tr>
    
    </thead> <tbody>
     ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 14
            echo "     <tr>
<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", array()), "html", null, true);
            echo "</td>
<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", array()), "html", null, true);
            echo "</td>
<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "role", array()), "name", array()), "html", null, true);
            echo "</td>

      <td><a class=\"btn btn-success\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifUser", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo " \" role=\"button\">edit</a>
      <a class=\"btn btn-danger\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suppUser", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo " \" role=\"button\">delete</a></td> </tr>  </tbody>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
";
        
        $__internal_41594563d2b619742b2a23276697328e492dcd2db3796d5c02a37d76325dadbd->leave($__internal_41594563d2b619742b2a23276697328e492dcd2db3796d5c02a37d76325dadbd_prof);

    }

    public function getTemplateName()
    {
        return "user/listUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 24,  82 => 21,  78 => 20,  73 => 18,  69 => 17,  65 => 16,  61 => 15,  58 => 14,  54 => 13,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <a class="navbar-brand"  href="{{ path('addUser') }}">Ajout</a>*/
/* <table class="table">*/
/* <thead> <tr> */
/*  <th>Nom</th>*/
/*  <th>Prenom</th>*/
/* <th>Email</th>*/
/* <th>Role</th>*/
/*    <th>Action</th> </tr>*/
/*     */
/*     </thead> <tbody>*/
/*      {% for user in users %}*/
/*      <tr>*/
/* <td>{{user.firstname}}</td>*/
/* <td>{{user.lastname}}</td>*/
/* <td>{{user.email}}</td>*/
/* <td>{{user.role.name}}</td>*/
/* */
/*       <td><a class="btn btn-success" href="{{path('modifUser', {'id': user.id})}} " role="button">edit</a>*/
/*       <a class="btn btn-danger" href="{{path('suppUser', {'id': user.id})}} " role="button">delete</a></td> </tr>  </tbody>*/
/* */
/* {% endfor %}*/
/* */
/* {% endblock %}*/
