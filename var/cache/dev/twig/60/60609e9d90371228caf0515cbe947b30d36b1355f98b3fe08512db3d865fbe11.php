<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_9b2d69143de64820f1aac134f5eabbe3fa214cb2e54d4becdff8f189cd8bde9f extends Twig_Template
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
        $__internal_3fd7e07531bc0cf28ac9bbd780d2b97f0e2926b5ddfd047076e92a9918271d5a = $this->env->getExtension("native_profiler");
        $__internal_3fd7e07531bc0cf28ac9bbd780d2b97f0e2926b5ddfd047076e92a9918271d5a->enter($__internal_3fd7e07531bc0cf28ac9bbd780d2b97f0e2926b5ddfd047076e92a9918271d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3fd7e07531bc0cf28ac9bbd780d2b97f0e2926b5ddfd047076e92a9918271d5a->leave($__internal_3fd7e07531bc0cf28ac9bbd780d2b97f0e2926b5ddfd047076e92a9918271d5a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
