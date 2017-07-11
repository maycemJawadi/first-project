<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_16f5ce65d9e2242fc52e2b90e30d8a5d51cd9495411df43c6a89abcece4872e0 extends Twig_Template
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
        $__internal_7d1e46d3b654df1024d5a1f52d1ecec36bc746a0f47be4eca4ffaf54c46c4beb = $this->env->getExtension("native_profiler");
        $__internal_7d1e46d3b654df1024d5a1f52d1ecec36bc746a0f47be4eca4ffaf54c46c4beb->enter($__internal_7d1e46d3b654df1024d5a1f52d1ecec36bc746a0f47be4eca4ffaf54c46c4beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7d1e46d3b654df1024d5a1f52d1ecec36bc746a0f47be4eca4ffaf54c46c4beb->leave($__internal_7d1e46d3b654df1024d5a1f52d1ecec36bc746a0f47be4eca4ffaf54c46c4beb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
