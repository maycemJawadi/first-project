<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_58e23bfb542ff1be5062186c98ace71a8b6b46e8e36c6d0b311090d5070bbd11 extends Twig_Template
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
        $__internal_1539c016b78ae92c3796014fcd1fa1d654c2af15fe5bd02508bbeeefcbdf9723 = $this->env->getExtension("native_profiler");
        $__internal_1539c016b78ae92c3796014fcd1fa1d654c2af15fe5bd02508bbeeefcbdf9723->enter($__internal_1539c016b78ae92c3796014fcd1fa1d654c2af15fe5bd02508bbeeefcbdf9723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_1539c016b78ae92c3796014fcd1fa1d654c2af15fe5bd02508bbeeefcbdf9723->leave($__internal_1539c016b78ae92c3796014fcd1fa1d654c2af15fe5bd02508bbeeefcbdf9723_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
