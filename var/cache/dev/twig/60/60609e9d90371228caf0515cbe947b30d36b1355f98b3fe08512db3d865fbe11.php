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
        $__internal_a54ed34e102260358825433af51cc3b6ebb4ca07801e6a90052715a7109dbf77 = $this->env->getExtension("native_profiler");
        $__internal_a54ed34e102260358825433af51cc3b6ebb4ca07801e6a90052715a7109dbf77->enter($__internal_a54ed34e102260358825433af51cc3b6ebb4ca07801e6a90052715a7109dbf77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a54ed34e102260358825433af51cc3b6ebb4ca07801e6a90052715a7109dbf77->leave($__internal_a54ed34e102260358825433af51cc3b6ebb4ca07801e6a90052715a7109dbf77_prof);

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
