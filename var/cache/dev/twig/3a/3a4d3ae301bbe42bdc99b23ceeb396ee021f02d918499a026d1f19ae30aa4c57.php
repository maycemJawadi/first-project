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
        $__internal_284e323f696435ee3039396aaf4f14bd4c32566ad4f8d00b761a44b1f5f0ca4c = $this->env->getExtension("native_profiler");
        $__internal_284e323f696435ee3039396aaf4f14bd4c32566ad4f8d00b761a44b1f5f0ca4c->enter($__internal_284e323f696435ee3039396aaf4f14bd4c32566ad4f8d00b761a44b1f5f0ca4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_284e323f696435ee3039396aaf4f14bd4c32566ad4f8d00b761a44b1f5f0ca4c->leave($__internal_284e323f696435ee3039396aaf4f14bd4c32566ad4f8d00b761a44b1f5f0ca4c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_767c2949778baa17fde24a12d9dc6f41d7439da9a1a327982857dacf1c19e90d = $this->env->getExtension("native_profiler");
        $__internal_767c2949778baa17fde24a12d9dc6f41d7439da9a1a327982857dacf1c19e90d->enter($__internal_767c2949778baa17fde24a12d9dc6f41d7439da9a1a327982857dacf1c19e90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_767c2949778baa17fde24a12d9dc6f41d7439da9a1a327982857dacf1c19e90d->leave($__internal_767c2949778baa17fde24a12d9dc6f41d7439da9a1a327982857dacf1c19e90d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_456198eebc221ceb81bccc70c643b39b62c1306d44f418c150420fb8961b3a3d = $this->env->getExtension("native_profiler");
        $__internal_456198eebc221ceb81bccc70c643b39b62c1306d44f418c150420fb8961b3a3d->enter($__internal_456198eebc221ceb81bccc70c643b39b62c1306d44f418c150420fb8961b3a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_456198eebc221ceb81bccc70c643b39b62c1306d44f418c150420fb8961b3a3d->leave($__internal_456198eebc221ceb81bccc70c643b39b62c1306d44f418c150420fb8961b3a3d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_18e7e74315b50004b1d91f609def8c884cb07385ed3efbe82ca2b0d4cb9cf0e1 = $this->env->getExtension("native_profiler");
        $__internal_18e7e74315b50004b1d91f609def8c884cb07385ed3efbe82ca2b0d4cb9cf0e1->enter($__internal_18e7e74315b50004b1d91f609def8c884cb07385ed3efbe82ca2b0d4cb9cf0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_18e7e74315b50004b1d91f609def8c884cb07385ed3efbe82ca2b0d4cb9cf0e1->leave($__internal_18e7e74315b50004b1d91f609def8c884cb07385ed3efbe82ca2b0d4cb9cf0e1_prof);

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
