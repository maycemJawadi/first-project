<?php

/* role/listRole.html.twig */
class __TwigTemplate_430fa822981ba2e844320e9575f262ab7d6fcccda45e0c34a36cf3a404467fdc extends Twig_Template
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
        $__internal_1dd3f1ea953660005dbb637475d29f5bd3a2ecfb46fbbe148c86a43128f93780 = $this->env->getExtension("native_profiler");
        $__internal_1dd3f1ea953660005dbb637475d29f5bd3a2ecfb46fbbe148c86a43128f93780->enter($__internal_1dd3f1ea953660005dbb637475d29f5bd3a2ecfb46fbbe148c86a43128f93780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "role/listRole.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dd3f1ea953660005dbb637475d29f5bd3a2ecfb46fbbe148c86a43128f93780->leave($__internal_1dd3f1ea953660005dbb637475d29f5bd3a2ecfb46fbbe148c86a43128f93780_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d276569eb72a72b749dd4d50b7d1c7eb86cff45210ed2d525fad4e39e3cc2a60 = $this->env->getExtension("native_profiler");
        $__internal_d276569eb72a72b749dd4d50b7d1c7eb86cff45210ed2d525fad4e39e3cc2a60->enter($__internal_d276569eb72a72b749dd4d50b7d1c7eb86cff45210ed2d525fad4e39e3cc2a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d276569eb72a72b749dd4d50b7d1c7eb86cff45210ed2d525fad4e39e3cc2a60->leave($__internal_d276569eb72a72b749dd4d50b7d1c7eb86cff45210ed2d525fad4e39e3cc2a60_prof);

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
