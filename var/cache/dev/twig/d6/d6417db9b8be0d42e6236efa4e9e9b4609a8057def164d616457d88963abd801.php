<?php

/* role/addRole.html.twig */
class __TwigTemplate_744f64f511ee5178104a75e369b4424d1f67f018d8c9c704c4dfe20942816d5e extends Twig_Template
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
        $__internal_957bcb1841fda54b00f801369973019d55d09dcc17437bb83a4b992d1307f46c = $this->env->getExtension("native_profiler");
        $__internal_957bcb1841fda54b00f801369973019d55d09dcc17437bb83a4b992d1307f46c->enter($__internal_957bcb1841fda54b00f801369973019d55d09dcc17437bb83a4b992d1307f46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "role/addRole.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_957bcb1841fda54b00f801369973019d55d09dcc17437bb83a4b992d1307f46c->leave($__internal_957bcb1841fda54b00f801369973019d55d09dcc17437bb83a4b992d1307f46c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcf841f48aca0961c63c233e60d1ac58e3d7162685c80efefe247837e3cab632 = $this->env->getExtension("native_profiler");
        $__internal_fcf841f48aca0961c63c233e60d1ac58e3d7162685c80efefe247837e3cab632->enter($__internal_fcf841f48aca0961c63c233e60d1ac58e3d7162685c80efefe247837e3cab632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fcf841f48aca0961c63c233e60d1ac58e3d7162685c80efefe247837e3cab632->leave($__internal_fcf841f48aca0961c63c233e60d1ac58e3d7162685c80efefe247837e3cab632_prof);

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
