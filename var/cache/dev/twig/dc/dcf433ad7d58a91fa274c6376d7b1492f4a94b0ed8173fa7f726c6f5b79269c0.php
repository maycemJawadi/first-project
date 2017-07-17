<?php

/* dress/addDress.html.twig */
class __TwigTemplate_e802d38316fad980008203cd3dcdcee8222522c7550404f8845903109a8a7c5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "dress/addDress.html.twig", 1);
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
        $__internal_1990317f45c14829ed1f5f7dfc6af33ca72aa0f130e8c9729800ee382b2a31f6 = $this->env->getExtension("native_profiler");
        $__internal_1990317f45c14829ed1f5f7dfc6af33ca72aa0f130e8c9729800ee382b2a31f6->enter($__internal_1990317f45c14829ed1f5f7dfc6af33ca72aa0f130e8c9729800ee382b2a31f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dress/addDress.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1990317f45c14829ed1f5f7dfc6af33ca72aa0f130e8c9729800ee382b2a31f6->leave($__internal_1990317f45c14829ed1f5f7dfc6af33ca72aa0f130e8c9729800ee382b2a31f6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e624ba567f4ed7cb6e189dc88d716f7da233ba6cd50136886868dbc19d6e5b4 = $this->env->getExtension("native_profiler");
        $__internal_9e624ba567f4ed7cb6e189dc88d716f7da233ba6cd50136886868dbc19d6e5b4->enter($__internal_9e624ba567f4ed7cb6e189dc88d716f7da233ba6cd50136886868dbc19d6e5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
<table>
<tr><td>Réference</td><td>";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ref", array()), 'widget');
        echo "</td></tr>
<tr><td>Nom</td><td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "</td></tr>

<tr><td>Image</td><td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'widget');
        echo "</td></tr>
<tr><td>Shop</td><td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shop", array()), 'widget');
        echo "</td></tr>
<tr><td>Categorie</td><td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'widget');
        echo "</td></tr>
<tr><td></td><td><Button type=\"submit\">Ok</Button></td>
</tr></table>

";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_9e624ba567f4ed7cb6e189dc88d716f7da233ba6cd50136886868dbc19d6e5b4->leave($__internal_9e624ba567f4ed7cb6e189dc88d716f7da233ba6cd50136886868dbc19d6e5b4_prof);

    }

    public function getTemplateName()
    {
        return "dress/addDress.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  62 => 10,  58 => 9,  54 => 8,  49 => 6,  45 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* {{form_start(form, {'attr':{'novalidate':'novalidate'}})}}*/
/* <table>*/
/* <tr><td>Réference</td><td>{{form_widget(form.ref)}}</td></tr>*/
/* <tr><td>Nom</td><td>{{form_widget(form.name)}}</td></tr>*/
/* */
/* <tr><td>Image</td><td>{{form_widget(form.image)}}</td></tr>*/
/* <tr><td>Shop</td><td>{{form_widget(form.shop)}}</td></tr>*/
/* <tr><td>Categorie</td><td>{{form_widget(form.categorie)}}</td></tr>*/
/* <tr><td></td><td><Button type="submit">Ok</Button></td>*/
/* </tr></table>*/
/* */
/* {{form_end(form)}}*/
/* {% endblock %}*/
