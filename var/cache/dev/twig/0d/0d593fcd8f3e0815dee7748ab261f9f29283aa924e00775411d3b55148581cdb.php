<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_eb0794b085ccffeab260e6e580136b0410628ea71bcc679ad0e3cccc75d07a67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1af7e2769a3253a9713e080192a409f3c8f4230d4025a6a2d5f8607207361d7c = $this->env->getExtension("native_profiler");
        $__internal_1af7e2769a3253a9713e080192a409f3c8f4230d4025a6a2d5f8607207361d7c->enter($__internal_1af7e2769a3253a9713e080192a409f3c8f4230d4025a6a2d5f8607207361d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_1af7e2769a3253a9713e080192a409f3c8f4230d4025a6a2d5f8607207361d7c->leave($__internal_1af7e2769a3253a9713e080192a409f3c8f4230d4025a6a2d5f8607207361d7c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
