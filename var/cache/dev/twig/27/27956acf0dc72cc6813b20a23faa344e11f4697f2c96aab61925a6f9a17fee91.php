<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_0f8140e29f09461387f8b3becd65386ad350a2f95ba7045b0dc9e4394c280c65 extends Twig_Template
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
        $__internal_5ba5b272e944ab87974d8f6b963797a754aa4e46fc4e2d58dee22c3be5056173 = $this->env->getExtension("native_profiler");
        $__internal_5ba5b272e944ab87974d8f6b963797a754aa4e46fc4e2d58dee22c3be5056173->enter($__internal_5ba5b272e944ab87974d8f6b963797a754aa4e46fc4e2d58dee22c3be5056173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5ba5b272e944ab87974d8f6b963797a754aa4e46fc4e2d58dee22c3be5056173->leave($__internal_5ba5b272e944ab87974d8f6b963797a754aa4e46fc4e2d58dee22c3be5056173_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
