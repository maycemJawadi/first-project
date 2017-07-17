<?php

/* :role:addRole.html.twig */
class __TwigTemplate_221c68e63a74117d82abbf5c703e933dbb943041aaee2b48a6e16db061b80c4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":role:addRole.html.twig", 1);
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
        $__internal_9c10ca3b082e99b4114c25183a8670040dea1d1994005e5b142248bd83e23b73 = $this->env->getExtension("native_profiler");
        $__internal_9c10ca3b082e99b4114c25183a8670040dea1d1994005e5b142248bd83e23b73->enter($__internal_9c10ca3b082e99b4114c25183a8670040dea1d1994005e5b142248bd83e23b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":role:addRole.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c10ca3b082e99b4114c25183a8670040dea1d1994005e5b142248bd83e23b73->leave($__internal_9c10ca3b082e99b4114c25183a8670040dea1d1994005e5b142248bd83e23b73_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2137d4c6f03f26050fcbb38ad74289ed091f5022ff248f70a15065fe3949efd4 = $this->env->getExtension("native_profiler");
        $__internal_2137d4c6f03f26050fcbb38ad74289ed091f5022ff248f70a15065fe3949efd4->enter($__internal_2137d4c6f03f26050fcbb38ad74289ed091f5022ff248f70a15065fe3949efd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
<table><tr><td>Nom</td><td>";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "</td></tr>
<tr><td></td><td><Button type=\"submit\">Ok</Button></td>
</tr></table>

";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_2137d4c6f03f26050fcbb38ad74289ed091f5022ff248f70a15065fe3949efd4->leave($__internal_2137d4c6f03f26050fcbb38ad74289ed091f5022ff248f70a15065fe3949efd4_prof);

    }

    public function getTemplateName()
    {
        return ":role:addRole.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  44 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* {{form_start(form, {'attr':{'novalidate':'novalidate'}})}}*/
/* <table><tr><td>Nom</td><td>{{form_widget(form.name)}}</td></tr>*/
/* <tr><td></td><td><Button type="submit">Ok</Button></td>*/
/* </tr></table>*/
/* */
/* {{form_end(form)}}*/
/* {% endblock %}*/
