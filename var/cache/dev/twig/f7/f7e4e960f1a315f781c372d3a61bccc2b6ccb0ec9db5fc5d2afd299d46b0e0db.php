<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_4f8726f6116c9edbd3bca9dc4dc3926bb56f9e162c1021fd9350b1835b4a1df1 extends Twig_Template
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
        $__internal_9d7a7a2f3fb3713e0c78a9c131b2a862401e65dbab2b4d3254e12c986fd314c1 = $this->env->getExtension("native_profiler");
        $__internal_9d7a7a2f3fb3713e0c78a9c131b2a862401e65dbab2b4d3254e12c986fd314c1->enter($__internal_9d7a7a2f3fb3713e0c78a9c131b2a862401e65dbab2b4d3254e12c986fd314c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9d7a7a2f3fb3713e0c78a9c131b2a862401e65dbab2b4d3254e12c986fd314c1->leave($__internal_9d7a7a2f3fb3713e0c78a9c131b2a862401e65dbab2b4d3254e12c986fd314c1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
