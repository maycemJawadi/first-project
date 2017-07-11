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
        $__internal_7d3e572279c29411568558be978947d23715072cbe83ae762a564b4662cbfeec = $this->env->getExtension("native_profiler");
        $__internal_7d3e572279c29411568558be978947d23715072cbe83ae762a564b4662cbfeec->enter($__internal_7d3e572279c29411568558be978947d23715072cbe83ae762a564b4662cbfeec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d3e572279c29411568558be978947d23715072cbe83ae762a564b4662cbfeec->leave($__internal_7d3e572279c29411568558be978947d23715072cbe83ae762a564b4662cbfeec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cb84361412191e9cc7d02d52e5ba1c8740ab0011d6360f1294a3a5d4ac4353f0 = $this->env->getExtension("native_profiler");
        $__internal_cb84361412191e9cc7d02d52e5ba1c8740ab0011d6360f1294a3a5d4ac4353f0->enter($__internal_cb84361412191e9cc7d02d52e5ba1c8740ab0011d6360f1294a3a5d4ac4353f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cb84361412191e9cc7d02d52e5ba1c8740ab0011d6360f1294a3a5d4ac4353f0->leave($__internal_cb84361412191e9cc7d02d52e5ba1c8740ab0011d6360f1294a3a5d4ac4353f0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b0c949861ad1aeb65994cca43d86f3c7b14fe6cd38bf0133c0926984665a7e4 = $this->env->getExtension("native_profiler");
        $__internal_8b0c949861ad1aeb65994cca43d86f3c7b14fe6cd38bf0133c0926984665a7e4->enter($__internal_8b0c949861ad1aeb65994cca43d86f3c7b14fe6cd38bf0133c0926984665a7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8b0c949861ad1aeb65994cca43d86f3c7b14fe6cd38bf0133c0926984665a7e4->leave($__internal_8b0c949861ad1aeb65994cca43d86f3c7b14fe6cd38bf0133c0926984665a7e4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c6aa92523b590fd74a78a06e8324cdfa0d9b38745abef8a13d0a47856064bd4 = $this->env->getExtension("native_profiler");
        $__internal_4c6aa92523b590fd74a78a06e8324cdfa0d9b38745abef8a13d0a47856064bd4->enter($__internal_4c6aa92523b590fd74a78a06e8324cdfa0d9b38745abef8a13d0a47856064bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4c6aa92523b590fd74a78a06e8324cdfa0d9b38745abef8a13d0a47856064bd4->leave($__internal_4c6aa92523b590fd74a78a06e8324cdfa0d9b38745abef8a13d0a47856064bd4_prof);

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
