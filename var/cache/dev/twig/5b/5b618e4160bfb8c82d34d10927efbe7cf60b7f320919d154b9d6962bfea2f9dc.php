<?php

/* role/addRole.html.twig */
class __TwigTemplate_221c68e63a74117d82abbf5c703e933dbb943041aaee2b48a6e16db061b80c4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "role/addRole.html.twig", 1);
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
        $__internal_3e6ecdc67500bec4b058098e9365d53ebc55cf7935e5314002d9ec44082711ad = $this->env->getExtension("native_profiler");
        $__internal_3e6ecdc67500bec4b058098e9365d53ebc55cf7935e5314002d9ec44082711ad->enter($__internal_3e6ecdc67500bec4b058098e9365d53ebc55cf7935e5314002d9ec44082711ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "role/addRole.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e6ecdc67500bec4b058098e9365d53ebc55cf7935e5314002d9ec44082711ad->leave($__internal_3e6ecdc67500bec4b058098e9365d53ebc55cf7935e5314002d9ec44082711ad_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfa273d8599e5d4cadf3d5b77098313480aeff9a5036a5793893d1070e7f4ecb = $this->env->getExtension("native_profiler");
        $__internal_bfa273d8599e5d4cadf3d5b77098313480aeff9a5036a5793893d1070e7f4ecb->enter($__internal_bfa273d8599e5d4cadf3d5b77098313480aeff9a5036a5793893d1070e7f4ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bfa273d8599e5d4cadf3d5b77098313480aeff9a5036a5793893d1070e7f4ecb->leave($__internal_bfa273d8599e5d4cadf3d5b77098313480aeff9a5036a5793893d1070e7f4ecb_prof);

    }

    public function getTemplateName()
    {
        return "role/addRole.html.twig";
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
