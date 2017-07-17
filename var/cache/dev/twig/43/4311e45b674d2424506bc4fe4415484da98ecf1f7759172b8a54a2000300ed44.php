<?php

/* :user:listUser.html.twig */
class __TwigTemplate_a19195999042e5435c2861ddf7cb1837fd6919dca1bd2979e077a4b1e82b4c92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:listUser.html.twig", 1);
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
        $__internal_ce8e1ebb1340f76f5a21820d371e0c93bcdb9106cb493ebadb0ff71a57943ced = $this->env->getExtension("native_profiler");
        $__internal_ce8e1ebb1340f76f5a21820d371e0c93bcdb9106cb493ebadb0ff71a57943ced->enter($__internal_ce8e1ebb1340f76f5a21820d371e0c93bcdb9106cb493ebadb0ff71a57943ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:listUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce8e1ebb1340f76f5a21820d371e0c93bcdb9106cb493ebadb0ff71a57943ced->leave($__internal_ce8e1ebb1340f76f5a21820d371e0c93bcdb9106cb493ebadb0ff71a57943ced_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d69a2002ba7f8744dcc5a0a031f1ca632b7dfb12340f6ad6eef8a8d45abf339 = $this->env->getExtension("native_profiler");
        $__internal_7d69a2002ba7f8744dcc5a0a031f1ca632b7dfb12340f6ad6eef8a8d45abf339->enter($__internal_7d69a2002ba7f8744dcc5a0a031f1ca632b7dfb12340f6ad6eef8a8d45abf339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
 <th>Avatar</th>
   <th>Action</th> </tr>
    
    </thead> <tbody>
     ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 15
            echo "     <tr>
<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", array()), "html", null, true);
            echo "</td>
<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", array()), "html", null, true);
            echo "</td>
<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "role", array()), "name", array()), "html", null, true);
            echo "</td>
<td>
\t

<img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/avatar/" . $this->getAttribute($context["user"], "avatar", array()))), "html", null, true);
            echo "\" width=\"50\" height=\"50\" />
</td>

      <td><a class=\"btn btn-success\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifUser", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo " \" role=\"button\">edit</a>
      <a class=\"btn btn-danger\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suppUser", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo " \" role=\"button\">delete</a></td> </tr>  </tbody>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
";
        
        $__internal_7d69a2002ba7f8744dcc5a0a031f1ca632b7dfb12340f6ad6eef8a8d45abf339->leave($__internal_7d69a2002ba7f8744dcc5a0a031f1ca632b7dfb12340f6ad6eef8a8d45abf339_prof);

    }

    public function getTemplateName()
    {
        return ":user:listUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 30,  91 => 27,  87 => 26,  81 => 23,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  59 => 15,  55 => 14,  40 => 3,  34 => 2,  11 => 1,);
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
/*  <th>Avatar</th>*/
/*    <th>Action</th> </tr>*/
/*     */
/*     </thead> <tbody>*/
/*      {% for user in users %}*/
/*      <tr>*/
/* <td>{{user.firstname}}</td>*/
/* <td>{{user.lastname}}</td>*/
/* <td>{{user.email}}</td>*/
/* <td>{{user.role.name}}</td>*/
/* <td>*/
/* 	*/
/* */
/* <img src="{{ asset('uploads/avatar/'~ user.avatar)}}" width="50" height="50" />*/
/* </td>*/
/* */
/*       <td><a class="btn btn-success" href="{{path('modifUser', {'id': user.id})}} " role="button">edit</a>*/
/*       <a class="btn btn-danger" href="{{path('suppUser', {'id': user.id})}} " role="button">delete</a></td> </tr>  </tbody>*/
/* */
/* {% endfor %}*/
/* */
/* {% endblock %}*/
