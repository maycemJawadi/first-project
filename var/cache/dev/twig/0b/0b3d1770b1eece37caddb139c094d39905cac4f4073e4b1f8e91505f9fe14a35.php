<?php

/* :user:addUser.html.twig */
class __TwigTemplate_4f98ee4f998dfc0dbc3881e413b600ee4d9b3d5d5aeb1c5bc26cf2d8822cd264 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:addUser.html.twig", 1);
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
        $__internal_5df9842eff17d6445b4534e50f157f5edbed7269d99d36c329890e6eef6815f9 = $this->env->getExtension("native_profiler");
        $__internal_5df9842eff17d6445b4534e50f157f5edbed7269d99d36c329890e6eef6815f9->enter($__internal_5df9842eff17d6445b4534e50f157f5edbed7269d99d36c329890e6eef6815f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:addUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5df9842eff17d6445b4534e50f157f5edbed7269d99d36c329890e6eef6815f9->leave($__internal_5df9842eff17d6445b4534e50f157f5edbed7269d99d36c329890e6eef6815f9_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e706713710dca2bd2b205ed06daf675a6b22c0055dc3844b91c4c606a8a604c = $this->env->getExtension("native_profiler");
        $__internal_5e706713710dca2bd2b205ed06daf675a6b22c0055dc3844b91c4c606a8a604c->enter($__internal_5e706713710dca2bd2b205ed06daf675a6b22c0055dc3844b91c4c606a8a604c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
<table><tr><td>Nom</td><td>";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget');
        echo "</td></tr>
<tr><td>Prenom</td><td>";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'widget');
        echo "</td></tr>
<tr><td>Email</td><td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</td></tr>
<tr><td>Mot de passe</td><td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget');
        echo "</td></tr>
<tr><td>Avatar</td><td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "avatar", array()), 'widget');
        echo "</td></tr>
<tr><td>Role</td><td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'widget');
        echo "</td></tr>
<tr><td></td><td><Button type=\"submit\">Ok</Button></td>
</tr></table>

";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_5e706713710dca2bd2b205ed06daf675a6b22c0055dc3844b91c4c606a8a604c->leave($__internal_5e706713710dca2bd2b205ed06daf675a6b22c0055dc3844b91c4c606a8a604c_prof);

    }

    public function getTemplateName()
    {
        return ":user:addUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 13,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  44 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* {{form_start(form, {'attr':{'novalidate':'novalidate'}})}}*/
/* <table><tr><td>Nom</td><td>{{form_widget(form.firstname)}}</td></tr>*/
/* <tr><td>Prenom</td><td>{{form_widget(form.lastname)}}</td></tr>*/
/* <tr><td>Email</td><td>{{form_widget(form.email)}}</td></tr>*/
/* <tr><td>Mot de passe</td><td>{{form_widget(form.password)}}</td></tr>*/
/* <tr><td>Avatar</td><td>{{form_widget(form.avatar)}}</td></tr>*/
/* <tr><td>Role</td><td>{{form_widget(form.role)}}</td></tr>*/
/* <tr><td></td><td><Button type="submit">Ok</Button></td>*/
/* </tr></table>*/
/* */
/* {{form_end(form)}}*/
/* {% endblock %}*/
