<?php

/* shop/listShop.html.twig */
class __TwigTemplate_95b78075d3a8aac4bc644f013cdf29d38b95ee17d528c36f534a8743a2d3b574 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "shop/listShop.html.twig", 1);
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
        $__internal_633bae4e09e7cde30b6de45f1aee92ea4fa7bcb551076a2fa3594cbbe4662d49 = $this->env->getExtension("native_profiler");
        $__internal_633bae4e09e7cde30b6de45f1aee92ea4fa7bcb551076a2fa3594cbbe4662d49->enter($__internal_633bae4e09e7cde30b6de45f1aee92ea4fa7bcb551076a2fa3594cbbe4662d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "shop/listShop.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_633bae4e09e7cde30b6de45f1aee92ea4fa7bcb551076a2fa3594cbbe4662d49->leave($__internal_633bae4e09e7cde30b6de45f1aee92ea4fa7bcb551076a2fa3594cbbe4662d49_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6289585a12abe550eb6d81a6e6d1085331f9068f8c935508f7bfb211446ac078 = $this->env->getExtension("native_profiler");
        $__internal_6289585a12abe550eb6d81a6e6d1085331f9068f8c935508f7bfb211446ac078->enter($__internal_6289585a12abe550eb6d81a6e6d1085331f9068f8c935508f7bfb211446ac078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<a class=\"navbar-brand\"  href=\"";
        echo $this->env->getExtension('routing')->getPath("addShop");
        echo "\">Ajout</a>
<table class=\"table\">
<thead> <tr> 
 <th>Nom</th>
 <th>Téléphone</th>
<th>adresse</th>
<th>Utilisateur</th>
   <th>Action</th> </tr>
    
    </thead> <tbody>
     ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["shops"]) ? $context["shops"] : $this->getContext($context, "shops")));
        foreach ($context['_seq'] as $context["_key"] => $context["shop"]) {
            // line 14
            echo "     <tr>
<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["shop"], "name", array()), "html", null, true);
            echo "</td>
<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["shop"], "telephone", array()), "html", null, true);
            echo "</td>
<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["shop"], "adresse", array()), "html", null, true);
            echo "</td>
<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["shop"], "user", array()), "firstname", array()), "html", null, true);
            echo "</td>
<td><a class=\"btn btn-default\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("affichShop", array("id" => $this->getAttribute($context["shop"], "id", array()))), "html", null, true);
            echo " \" role=\"button\">detail</a>
<a class=\"btn btn-success\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifShop", array("id" => $this->getAttribute($context["shop"], "id", array()))), "html", null, true);
            echo " \" role=\"button\">edit</a>
<a class=\"btn btn-danger\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suppShop", array("id" => $this->getAttribute($context["shop"], "id", array()))), "html", null, true);
            echo " \" role=\"button\">delete</a></td> </tr>  </tbody>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
";
        
        $__internal_6289585a12abe550eb6d81a6e6d1085331f9068f8c935508f7bfb211446ac078->leave($__internal_6289585a12abe550eb6d81a6e6d1085331f9068f8c935508f7bfb211446ac078_prof);

    }

    public function getTemplateName()
    {
        return "shop/listShop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 24,  85 => 21,  81 => 20,  77 => 19,  73 => 18,  69 => 17,  65 => 16,  61 => 15,  58 => 14,  54 => 13,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <a class="navbar-brand"  href="{{ path('addShop') }}">Ajout</a>*/
/* <table class="table">*/
/* <thead> <tr> */
/*  <th>Nom</th>*/
/*  <th>Téléphone</th>*/
/* <th>adresse</th>*/
/* <th>Utilisateur</th>*/
/*    <th>Action</th> </tr>*/
/*     */
/*     </thead> <tbody>*/
/*      {% for shop in shops %}*/
/*      <tr>*/
/* <td>{{shop.name}}</td>*/
/* <td>{{shop.telephone}}</td>*/
/* <td>{{shop.adresse}}</td>*/
/* <td>{{shop.user.firstname}}</td>*/
/* <td><a class="btn btn-default" href="{{path('affichShop', {'id': shop.id})}} " role="button">detail</a>*/
/* <a class="btn btn-success" href="{{path('modifShop', {'id': shop.id})}} " role="button">edit</a>*/
/* <a class="btn btn-danger" href="{{path('suppShop', {'id': shop.id})}} " role="button">delete</a></td> </tr>  </tbody>*/
/* */
/* {% endfor %}*/
/* */
/* {% endblock %}*/
