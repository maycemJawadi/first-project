<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_fa23325579d31ca202fc3984360ec38982fe72ef324b36521e4e172efac6457c extends Twig_Template
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
        $__internal_1493b35d47eced1669848a2f4f0ac2e41784d96e5aad56f8266105729cba91ee = $this->env->getExtension("native_profiler");
        $__internal_1493b35d47eced1669848a2f4f0ac2e41784d96e5aad56f8266105729cba91ee->enter($__internal_1493b35d47eced1669848a2f4f0ac2e41784d96e5aad56f8266105729cba91ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1493b35d47eced1669848a2f4f0ac2e41784d96e5aad56f8266105729cba91ee->leave($__internal_1493b35d47eced1669848a2f4f0ac2e41784d96e5aad56f8266105729cba91ee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
