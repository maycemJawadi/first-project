<?php

/* categorie/addCategorie.html.twig */
class __TwigTemplate_881f13a7603270554007cf2921f3b45aaa042f0c9c860571ad890bae160cdaa5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "categorie/addCategorie.html.twig", 1);
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
        $__internal_005e214c22cc66ff255443bd5ce8072a45fec58d44304725aeaeb797d6562a1d = $this->env->getExtension("native_profiler");
        $__internal_005e214c22cc66ff255443bd5ce8072a45fec58d44304725aeaeb797d6562a1d->enter($__internal_005e214c22cc66ff255443bd5ce8072a45fec58d44304725aeaeb797d6562a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/addCategorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_005e214c22cc66ff255443bd5ce8072a45fec58d44304725aeaeb797d6562a1d->leave($__internal_005e214c22cc66ff255443bd5ce8072a45fec58d44304725aeaeb797d6562a1d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_33fc285e9919222e51809adb35084d1cc274f7df1282e2bd721df7b278ff576c = $this->env->getExtension("native_profiler");
        $__internal_33fc285e9919222e51809adb35084d1cc274f7df1282e2bd721df7b278ff576c->enter($__internal_33fc285e9919222e51809adb35084d1cc274f7df1282e2bd721df7b278ff576c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_33fc285e9919222e51809adb35084d1cc274f7df1282e2bd721df7b278ff576c->leave($__internal_33fc285e9919222e51809adb35084d1cc274f7df1282e2bd721df7b278ff576c_prof);

    }

    public function getTemplateName()
    {
        return "categorie/addCategorie.html.twig";
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
