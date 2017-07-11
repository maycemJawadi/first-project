<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_28c2b2e104f36beef9d7b5d2108ac3ba48e6bdbe85193821629b89e6b34e4c1e extends Twig_Template
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
        $__internal_cdcc6482235d9799d3a49c38acfdfc16f21081d9874bb5ac2f8d1224515b2e4b = $this->env->getExtension("native_profiler");
        $__internal_cdcc6482235d9799d3a49c38acfdfc16f21081d9874bb5ac2f8d1224515b2e4b->enter($__internal_cdcc6482235d9799d3a49c38acfdfc16f21081d9874bb5ac2f8d1224515b2e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_cdcc6482235d9799d3a49c38acfdfc16f21081d9874bb5ac2f8d1224515b2e4b->leave($__internal_cdcc6482235d9799d3a49c38acfdfc16f21081d9874bb5ac2f8d1224515b2e4b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
