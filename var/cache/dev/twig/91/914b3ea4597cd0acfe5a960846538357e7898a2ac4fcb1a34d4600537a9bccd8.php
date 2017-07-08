<?php

/* categorie/addCategorie.html.twig */
class __TwigTemplate_e98fa02df9d611e645599e9e817bf02d13e428abe3dcb7d697418263d9ff6260 extends Twig_Template
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
        $__internal_95a0ffdc95044050e5851c9a0b9290e4891b897dfa6de2d7934b440828f30458 = $this->env->getExtension("native_profiler");
        $__internal_95a0ffdc95044050e5851c9a0b9290e4891b897dfa6de2d7934b440828f30458->enter($__internal_95a0ffdc95044050e5851c9a0b9290e4891b897dfa6de2d7934b440828f30458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/addCategorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95a0ffdc95044050e5851c9a0b9290e4891b897dfa6de2d7934b440828f30458->leave($__internal_95a0ffdc95044050e5851c9a0b9290e4891b897dfa6de2d7934b440828f30458_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b9d84d0f8c138da05d0572103ba7a321756a1fd56427a681bfad99940eb7955 = $this->env->getExtension("native_profiler");
        $__internal_5b9d84d0f8c138da05d0572103ba7a321756a1fd56427a681bfad99940eb7955->enter($__internal_5b9d84d0f8c138da05d0572103ba7a321756a1fd56427a681bfad99940eb7955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5b9d84d0f8c138da05d0572103ba7a321756a1fd56427a681bfad99940eb7955->leave($__internal_5b9d84d0f8c138da05d0572103ba7a321756a1fd56427a681bfad99940eb7955_prof);

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
