<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ed616a8a830f8d9fe13a02d85a69d4489448714e177fb684bd5f2f103dd6c0a2 extends Twig_Template
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
        $__internal_8cdb8d0a712c8fadf82d09d310c30bd765ab61c7f41133ce4754f848ea3107e0 = $this->env->getExtension("native_profiler");
        $__internal_8cdb8d0a712c8fadf82d09d310c30bd765ab61c7f41133ce4754f848ea3107e0->enter($__internal_8cdb8d0a712c8fadf82d09d310c30bd765ab61c7f41133ce4754f848ea3107e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_8cdb8d0a712c8fadf82d09d310c30bd765ab61c7f41133ce4754f848ea3107e0->leave($__internal_8cdb8d0a712c8fadf82d09d310c30bd765ab61c7f41133ce4754f848ea3107e0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
