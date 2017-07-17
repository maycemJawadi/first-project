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
        $__internal_467edb7487f2c137d36aabf04a1f1d25b7ad22e19a9f16ccf193ca9228a57094 = $this->env->getExtension("native_profiler");
        $__internal_467edb7487f2c137d36aabf04a1f1d25b7ad22e19a9f16ccf193ca9228a57094->enter($__internal_467edb7487f2c137d36aabf04a1f1d25b7ad22e19a9f16ccf193ca9228a57094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_467edb7487f2c137d36aabf04a1f1d25b7ad22e19a9f16ccf193ca9228a57094->leave($__internal_467edb7487f2c137d36aabf04a1f1d25b7ad22e19a9f16ccf193ca9228a57094_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c6aa077c3556f082d2850cfcdbfd9d42717917feb9c09fe5cc68fb1e70f4fe7d = $this->env->getExtension("native_profiler");
        $__internal_c6aa077c3556f082d2850cfcdbfd9d42717917feb9c09fe5cc68fb1e70f4fe7d->enter($__internal_c6aa077c3556f082d2850cfcdbfd9d42717917feb9c09fe5cc68fb1e70f4fe7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c6aa077c3556f082d2850cfcdbfd9d42717917feb9c09fe5cc68fb1e70f4fe7d->leave($__internal_c6aa077c3556f082d2850cfcdbfd9d42717917feb9c09fe5cc68fb1e70f4fe7d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c0ad0529cdacf2224b05d03106ec7c09a83377fa7c3e4d76d584efc9762816e = $this->env->getExtension("native_profiler");
        $__internal_3c0ad0529cdacf2224b05d03106ec7c09a83377fa7c3e4d76d584efc9762816e->enter($__internal_3c0ad0529cdacf2224b05d03106ec7c09a83377fa7c3e4d76d584efc9762816e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3c0ad0529cdacf2224b05d03106ec7c09a83377fa7c3e4d76d584efc9762816e->leave($__internal_3c0ad0529cdacf2224b05d03106ec7c09a83377fa7c3e4d76d584efc9762816e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_791d71d5c7754e4647e2f6c65d01c903248a63f8def6146c567fdcb28535efe6 = $this->env->getExtension("native_profiler");
        $__internal_791d71d5c7754e4647e2f6c65d01c903248a63f8def6146c567fdcb28535efe6->enter($__internal_791d71d5c7754e4647e2f6c65d01c903248a63f8def6146c567fdcb28535efe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_791d71d5c7754e4647e2f6c65d01c903248a63f8def6146c567fdcb28535efe6->leave($__internal_791d71d5c7754e4647e2f6c65d01c903248a63f8def6146c567fdcb28535efe6_prof);

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
