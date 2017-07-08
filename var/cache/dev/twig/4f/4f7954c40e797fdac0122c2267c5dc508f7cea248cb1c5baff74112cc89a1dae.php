<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_94b50f4d4088c70905893a1cb218c817af83177608fd9ff12c4c967ee29c0fdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3055e6f04065a1e9a87e3a59d8817c2a787599d777793655b2858b6d6c09f21 = $this->env->getExtension("native_profiler");
        $__internal_c3055e6f04065a1e9a87e3a59d8817c2a787599d777793655b2858b6d6c09f21->enter($__internal_c3055e6f04065a1e9a87e3a59d8817c2a787599d777793655b2858b6d6c09f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3055e6f04065a1e9a87e3a59d8817c2a787599d777793655b2858b6d6c09f21->leave($__internal_c3055e6f04065a1e9a87e3a59d8817c2a787599d777793655b2858b6d6c09f21_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a37d7e87b53517e69041416f27106a19776302c1a0530f9dc621b025f5470e79 = $this->env->getExtension("native_profiler");
        $__internal_a37d7e87b53517e69041416f27106a19776302c1a0530f9dc621b025f5470e79->enter($__internal_a37d7e87b53517e69041416f27106a19776302c1a0530f9dc621b025f5470e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a37d7e87b53517e69041416f27106a19776302c1a0530f9dc621b025f5470e79->leave($__internal_a37d7e87b53517e69041416f27106a19776302c1a0530f9dc621b025f5470e79_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1d07c74dc9c643714837443528e6e6790294fa2319719031ed4a39741b305db = $this->env->getExtension("native_profiler");
        $__internal_d1d07c74dc9c643714837443528e6e6790294fa2319719031ed4a39741b305db->enter($__internal_d1d07c74dc9c643714837443528e6e6790294fa2319719031ed4a39741b305db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d1d07c74dc9c643714837443528e6e6790294fa2319719031ed4a39741b305db->leave($__internal_d1d07c74dc9c643714837443528e6e6790294fa2319719031ed4a39741b305db_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a71b6b38352359153747444608c26784fdd60c35417914405ef2bf817a7017a = $this->env->getExtension("native_profiler");
        $__internal_9a71b6b38352359153747444608c26784fdd60c35417914405ef2bf817a7017a->enter($__internal_9a71b6b38352359153747444608c26784fdd60c35417914405ef2bf817a7017a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9a71b6b38352359153747444608c26784fdd60c35417914405ef2bf817a7017a->leave($__internal_9a71b6b38352359153747444608c26784fdd60c35417914405ef2bf817a7017a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
