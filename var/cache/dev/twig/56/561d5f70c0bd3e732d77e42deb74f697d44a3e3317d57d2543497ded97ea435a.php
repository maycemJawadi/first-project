<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_e5371f14a6ec38c98bacb486b1ed9b3b9a1960e24e7410b2f45f09261e6e8cd5 extends Twig_Template
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
        $__internal_49899a10343c070f0b83ba383aab2df8ca73f43cd061658a2d062c8dfafdee0c = $this->env->getExtension("native_profiler");
        $__internal_49899a10343c070f0b83ba383aab2df8ca73f43cd061658a2d062c8dfafdee0c->enter($__internal_49899a10343c070f0b83ba383aab2df8ca73f43cd061658a2d062c8dfafdee0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_49899a10343c070f0b83ba383aab2df8ca73f43cd061658a2d062c8dfafdee0c->leave($__internal_49899a10343c070f0b83ba383aab2df8ca73f43cd061658a2d062c8dfafdee0c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
