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
        $__internal_b382b85f64da36091f5b9f9cbb54cd0921460f40e17e376974c6aebfb000f43e = $this->env->getExtension("native_profiler");
        $__internal_b382b85f64da36091f5b9f9cbb54cd0921460f40e17e376974c6aebfb000f43e->enter($__internal_b382b85f64da36091f5b9f9cbb54cd0921460f40e17e376974c6aebfb000f43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_b382b85f64da36091f5b9f9cbb54cd0921460f40e17e376974c6aebfb000f43e->leave($__internal_b382b85f64da36091f5b9f9cbb54cd0921460f40e17e376974c6aebfb000f43e_prof);

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
