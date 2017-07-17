<?php

/* :categorie:addCategorie.html.twig */
class __TwigTemplate_881f13a7603270554007cf2921f3b45aaa042f0c9c860571ad890bae160cdaa5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":categorie:addCategorie.html.twig", 1);
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
        $__internal_53cde4b70da14261d967346e08362cbe185b7a575c3f17cad9387bd9386ecc93 = $this->env->getExtension("native_profiler");
        $__internal_53cde4b70da14261d967346e08362cbe185b7a575c3f17cad9387bd9386ecc93->enter($__internal_53cde4b70da14261d967346e08362cbe185b7a575c3f17cad9387bd9386ecc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":categorie:addCategorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53cde4b70da14261d967346e08362cbe185b7a575c3f17cad9387bd9386ecc93->leave($__internal_53cde4b70da14261d967346e08362cbe185b7a575c3f17cad9387bd9386ecc93_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1ebfdaca79835ba7f37d1b95269db4838a2bd7e2fe54c5a7c712a3657ba0971 = $this->env->getExtension("native_profiler");
        $__internal_b1ebfdaca79835ba7f37d1b95269db4838a2bd7e2fe54c5a7c712a3657ba0971->enter($__internal_b1ebfdaca79835ba7f37d1b95269db4838a2bd7e2fe54c5a7c712a3657ba0971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b1ebfdaca79835ba7f37d1b95269db4838a2bd7e2fe54c5a7c712a3657ba0971->leave($__internal_b1ebfdaca79835ba7f37d1b95269db4838a2bd7e2fe54c5a7c712a3657ba0971_prof);

    }

    public function getTemplateName()
    {
        return ":categorie:addCategorie.html.twig";
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
