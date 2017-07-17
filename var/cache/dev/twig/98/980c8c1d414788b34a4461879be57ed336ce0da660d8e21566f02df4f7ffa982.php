<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8638b9cfb38ed9941e4865d5971f9f3f428b3bdc06403896bc2021861282e341 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d850a2af125ef21c148cbad6d5217f81f7155203e3f9365bf908e0ad3ce710db = $this->env->getExtension("native_profiler");
        $__internal_d850a2af125ef21c148cbad6d5217f81f7155203e3f9365bf908e0ad3ce710db->enter($__internal_d850a2af125ef21c148cbad6d5217f81f7155203e3f9365bf908e0ad3ce710db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d850a2af125ef21c148cbad6d5217f81f7155203e3f9365bf908e0ad3ce710db->leave($__internal_d850a2af125ef21c148cbad6d5217f81f7155203e3f9365bf908e0ad3ce710db_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c2d442ad4dc5f9d279272d88a24151b692bab17a837658651567b40303abf3ae = $this->env->getExtension("native_profiler");
        $__internal_c2d442ad4dc5f9d279272d88a24151b692bab17a837658651567b40303abf3ae->enter($__internal_c2d442ad4dc5f9d279272d88a24151b692bab17a837658651567b40303abf3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c2d442ad4dc5f9d279272d88a24151b692bab17a837658651567b40303abf3ae->leave($__internal_c2d442ad4dc5f9d279272d88a24151b692bab17a837658651567b40303abf3ae_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
