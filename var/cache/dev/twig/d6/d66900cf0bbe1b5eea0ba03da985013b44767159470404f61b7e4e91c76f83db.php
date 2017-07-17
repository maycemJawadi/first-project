<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_f1f14ae210dd77702b50d52db622243ee996402d609316b3a2c72a14eb233e19 extends Twig_Template
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
        $__internal_e74cb6ca2e188204b9d929ef31ca1bf38114cdd25f4578291b9ca52c90375dce = $this->env->getExtension("native_profiler");
        $__internal_e74cb6ca2e188204b9d929ef31ca1bf38114cdd25f4578291b9ca52c90375dce->enter($__internal_e74cb6ca2e188204b9d929ef31ca1bf38114cdd25f4578291b9ca52c90375dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e74cb6ca2e188204b9d929ef31ca1bf38114cdd25f4578291b9ca52c90375dce->leave($__internal_e74cb6ca2e188204b9d929ef31ca1bf38114cdd25f4578291b9ca52c90375dce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
