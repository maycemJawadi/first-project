<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c9bce9ff3a0431a40a08ba8129844573a072002fd4e0fcf5ec5488831456d78a extends Twig_Template
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
        $__internal_a1ee35428b2e9239beb521b5f77c94c07dac280a7940be20952c4a14c0763205 = $this->env->getExtension("native_profiler");
        $__internal_a1ee35428b2e9239beb521b5f77c94c07dac280a7940be20952c4a14c0763205->enter($__internal_a1ee35428b2e9239beb521b5f77c94c07dac280a7940be20952c4a14c0763205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1ee35428b2e9239beb521b5f77c94c07dac280a7940be20952c4a14c0763205->leave($__internal_a1ee35428b2e9239beb521b5f77c94c07dac280a7940be20952c4a14c0763205_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f72ea1af92dba3cb7446ef0fd52af072186f248c4a06ccb6397b0fa7b357f85c = $this->env->getExtension("native_profiler");
        $__internal_f72ea1af92dba3cb7446ef0fd52af072186f248c4a06ccb6397b0fa7b357f85c->enter($__internal_f72ea1af92dba3cb7446ef0fd52af072186f248c4a06ccb6397b0fa7b357f85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f72ea1af92dba3cb7446ef0fd52af072186f248c4a06ccb6397b0fa7b357f85c->leave($__internal_f72ea1af92dba3cb7446ef0fd52af072186f248c4a06ccb6397b0fa7b357f85c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b14cdc707df82a95c99738f1d1515f4adc0f396c7cdb3489ae0323128fed8ae3 = $this->env->getExtension("native_profiler");
        $__internal_b14cdc707df82a95c99738f1d1515f4adc0f396c7cdb3489ae0323128fed8ae3->enter($__internal_b14cdc707df82a95c99738f1d1515f4adc0f396c7cdb3489ae0323128fed8ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b14cdc707df82a95c99738f1d1515f4adc0f396c7cdb3489ae0323128fed8ae3->leave($__internal_b14cdc707df82a95c99738f1d1515f4adc0f396c7cdb3489ae0323128fed8ae3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc1ac3429780de899e5edc3eed730dbd28a02f54ed39aa3fd1b6a99659164304 = $this->env->getExtension("native_profiler");
        $__internal_dc1ac3429780de899e5edc3eed730dbd28a02f54ed39aa3fd1b6a99659164304->enter($__internal_dc1ac3429780de899e5edc3eed730dbd28a02f54ed39aa3fd1b6a99659164304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_dc1ac3429780de899e5edc3eed730dbd28a02f54ed39aa3fd1b6a99659164304->leave($__internal_dc1ac3429780de899e5edc3eed730dbd28a02f54ed39aa3fd1b6a99659164304_prof);

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
