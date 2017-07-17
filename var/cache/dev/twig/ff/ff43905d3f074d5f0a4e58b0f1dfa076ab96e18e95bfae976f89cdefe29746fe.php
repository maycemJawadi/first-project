<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_22c73d0fc65491b788a362a7426d086113da29bcbbddefebda00451f7b7a0b8c extends Twig_Template
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
        $__internal_924bdec4b20bea180d129e10012981d2e35f00902c51d8142274433df8e926df = $this->env->getExtension("native_profiler");
        $__internal_924bdec4b20bea180d129e10012981d2e35f00902c51d8142274433df8e926df->enter($__internal_924bdec4b20bea180d129e10012981d2e35f00902c51d8142274433df8e926df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_924bdec4b20bea180d129e10012981d2e35f00902c51d8142274433df8e926df->leave($__internal_924bdec4b20bea180d129e10012981d2e35f00902c51d8142274433df8e926df_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
