<?php

/* dress/listDress.html.twig */
class __TwigTemplate_b4520d62a466eaca15a66f7301a96724e5c544ef48fd77993d29c00ac71bc6d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "dress/listDress.html.twig", 1);
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
        $__internal_8aaa525a1454881ea601223bebfc45ae9f53474d8700cc143d0e64524d476f34 = $this->env->getExtension("native_profiler");
        $__internal_8aaa525a1454881ea601223bebfc45ae9f53474d8700cc143d0e64524d476f34->enter($__internal_8aaa525a1454881ea601223bebfc45ae9f53474d8700cc143d0e64524d476f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dress/listDress.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8aaa525a1454881ea601223bebfc45ae9f53474d8700cc143d0e64524d476f34->leave($__internal_8aaa525a1454881ea601223bebfc45ae9f53474d8700cc143d0e64524d476f34_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_55dff1e85079289ef587228f06afe8575c5b5dad10a613d5dd88df415ac18483 = $this->env->getExtension("native_profiler");
        $__internal_55dff1e85079289ef587228f06afe8575c5b5dad10a613d5dd88df415ac18483->enter($__internal_55dff1e85079289ef587228f06afe8575c5b5dad10a613d5dd88df415ac18483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<a class=\"navbar-brand\"  href=\"";
        echo $this->env->getExtension('routing')->getPath("addDress");
        echo "\">Ajout</a>
<table class=\"table\">
<thead> <tr> 
 <th>Réference</th>
 <th>Nom</th>
<th>Image</th>
<th>Categorie</th>
<th>Shop</th>
   <th>Action</th> </tr>
    
    </thead> <tbody>
     ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dresses"]) ? $context["dresses"] : $this->getContext($context, "dresses")));
        foreach ($context['_seq'] as $context["_key"] => $context["dress"]) {
            // line 15
            echo "     <tr>
<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["dress"], "ref", array()), "html", null, true);
            echo "</td>
<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["dress"], "name", array()), "html", null, true);
            echo "</td>
<td>  <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/dress/" . $this->getAttribute($context["dress"], "image", array()))), "html", null, true);
            echo "\" width=\"50\" height=\"50\" />
</td>
<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dress"], "categorie", array()), "name", array()), "html", null, true);
            echo "</td>
<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dress"], "shop", array()), "name", array()), "html", null, true);
            echo "</td>
<td><a class=\"btn btn-success\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifDress", array("id" => $this->getAttribute($context["dress"], "id", array()))), "html", null, true);
            echo " \" role=\"button\">edit</a>
<a class=\"btn btn-danger\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suppDress", array("id" => $this->getAttribute($context["dress"], "id", array()))), "html", null, true);
            echo " \" role=\"button\">delete</a></td> </tr>  </tbody>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dress'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
";
        
        $__internal_55dff1e85079289ef587228f06afe8575c5b5dad10a613d5dd88df415ac18483->leave($__internal_55dff1e85079289ef587228f06afe8575c5b5dad10a613d5dd88df415ac18483_prof);

    }

    public function getTemplateName()
    {
        return "dress/listDress.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 26,  87 => 23,  83 => 22,  79 => 21,  75 => 20,  70 => 18,  66 => 17,  62 => 16,  59 => 15,  55 => 14,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <a class="navbar-brand"  href="{{ path('addDress') }}">Ajout</a>*/
/* <table class="table">*/
/* <thead> <tr> */
/*  <th>Réference</th>*/
/*  <th>Nom</th>*/
/* <th>Image</th>*/
/* <th>Categorie</th>*/
/* <th>Shop</th>*/
/*    <th>Action</th> </tr>*/
/*     */
/*     </thead> <tbody>*/
/*      {% for dress in dresses %}*/
/*      <tr>*/
/* <td>{{dress.ref}}</td>*/
/* <td>{{dress.name}}</td>*/
/* <td>  <img src="{{ asset('uploads/dress/'~ dress.image)}}" width="50" height="50" />*/
/* </td>*/
/* <td>{{dress.categorie.name}}</td>*/
/* <td>{{dress.shop.name}}</td>*/
/* <td><a class="btn btn-success" href="{{path('modifDress', {'id': dress.id})}} " role="button">edit</a>*/
/* <a class="btn btn-danger" href="{{path('suppDress', {'id': dress.id})}} " role="button">delete</a></td> </tr>  </tbody>*/
/* */
/* {% endfor %}*/
/* */
/* {% endblock %}*/
