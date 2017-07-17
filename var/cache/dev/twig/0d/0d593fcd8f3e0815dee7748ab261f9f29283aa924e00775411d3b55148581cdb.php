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
        $__internal_7c5da730ea9837ce3227b86e68e83f31e05c248480198460f5fae6718609dea8 = $this->env->getExtension("native_profiler");
        $__internal_7c5da730ea9837ce3227b86e68e83f31e05c248480198460f5fae6718609dea8->enter($__internal_7c5da730ea9837ce3227b86e68e83f31e05c248480198460f5fae6718609dea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_7c5da730ea9837ce3227b86e68e83f31e05c248480198460f5fae6718609dea8->leave($__internal_7c5da730ea9837ce3227b86e68e83f31e05c248480198460f5fae6718609dea8_prof);

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
