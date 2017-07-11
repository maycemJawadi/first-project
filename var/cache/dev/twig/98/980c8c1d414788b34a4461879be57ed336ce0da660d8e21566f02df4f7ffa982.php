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
        $__internal_f1ee5c47e67025706b7259b3427d18e6dc58aa5397be25a57177352406ffda81 = $this->env->getExtension("native_profiler");
        $__internal_f1ee5c47e67025706b7259b3427d18e6dc58aa5397be25a57177352406ffda81->enter($__internal_f1ee5c47e67025706b7259b3427d18e6dc58aa5397be25a57177352406ffda81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f1ee5c47e67025706b7259b3427d18e6dc58aa5397be25a57177352406ffda81->leave($__internal_f1ee5c47e67025706b7259b3427d18e6dc58aa5397be25a57177352406ffda81_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5ef606e73253a10131918b7db8186a38e6ff01a423373ea39f76daba2c90cc05 = $this->env->getExtension("native_profiler");
        $__internal_5ef606e73253a10131918b7db8186a38e6ff01a423373ea39f76daba2c90cc05->enter($__internal_5ef606e73253a10131918b7db8186a38e6ff01a423373ea39f76daba2c90cc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5ef606e73253a10131918b7db8186a38e6ff01a423373ea39f76daba2c90cc05->leave($__internal_5ef606e73253a10131918b7db8186a38e6ff01a423373ea39f76daba2c90cc05_prof);

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
