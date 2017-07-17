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
        $__internal_d23447e82092e2c0a647f09b7a4a6b3d152f3795c08d28e52109616d0969c3bb = $this->env->getExtension("native_profiler");
        $__internal_d23447e82092e2c0a647f09b7a4a6b3d152f3795c08d28e52109616d0969c3bb->enter($__internal_d23447e82092e2c0a647f09b7a4a6b3d152f3795c08d28e52109616d0969c3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d23447e82092e2c0a647f09b7a4a6b3d152f3795c08d28e52109616d0969c3bb->leave($__internal_d23447e82092e2c0a647f09b7a4a6b3d152f3795c08d28e52109616d0969c3bb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3d0afd3fb5a45eb5b71c77056c016f119a7f1619c2d46a14918f0a69a2be3e77 = $this->env->getExtension("native_profiler");
        $__internal_3d0afd3fb5a45eb5b71c77056c016f119a7f1619c2d46a14918f0a69a2be3e77->enter($__internal_3d0afd3fb5a45eb5b71c77056c016f119a7f1619c2d46a14918f0a69a2be3e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3d0afd3fb5a45eb5b71c77056c016f119a7f1619c2d46a14918f0a69a2be3e77->leave($__internal_3d0afd3fb5a45eb5b71c77056c016f119a7f1619c2d46a14918f0a69a2be3e77_prof);

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
