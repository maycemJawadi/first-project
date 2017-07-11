<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6381980ddf0d0704102cd53dc0229da6fb356109ed349519afe78c1a232a1906 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0495c9a862433b5027ab837d85a9c6413b961ab1c5e5250352651e4c795dd5c = $this->env->getExtension("native_profiler");
        $__internal_c0495c9a862433b5027ab837d85a9c6413b961ab1c5e5250352651e4c795dd5c->enter($__internal_c0495c9a862433b5027ab837d85a9c6413b961ab1c5e5250352651e4c795dd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0495c9a862433b5027ab837d85a9c6413b961ab1c5e5250352651e4c795dd5c->leave($__internal_c0495c9a862433b5027ab837d85a9c6413b961ab1c5e5250352651e4c795dd5c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9a9a9b60782ea7b25504ff90b0b6bf8bf514cc8d2fbef5d4600eb9ee81116c76 = $this->env->getExtension("native_profiler");
        $__internal_9a9a9b60782ea7b25504ff90b0b6bf8bf514cc8d2fbef5d4600eb9ee81116c76->enter($__internal_9a9a9b60782ea7b25504ff90b0b6bf8bf514cc8d2fbef5d4600eb9ee81116c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9a9a9b60782ea7b25504ff90b0b6bf8bf514cc8d2fbef5d4600eb9ee81116c76->leave($__internal_9a9a9b60782ea7b25504ff90b0b6bf8bf514cc8d2fbef5d4600eb9ee81116c76_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d2e7d7555322c5a2794a2c5626c058b21e663ef223eeb17629b79a66adb37c7e = $this->env->getExtension("native_profiler");
        $__internal_d2e7d7555322c5a2794a2c5626c058b21e663ef223eeb17629b79a66adb37c7e->enter($__internal_d2e7d7555322c5a2794a2c5626c058b21e663ef223eeb17629b79a66adb37c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d2e7d7555322c5a2794a2c5626c058b21e663ef223eeb17629b79a66adb37c7e->leave($__internal_d2e7d7555322c5a2794a2c5626c058b21e663ef223eeb17629b79a66adb37c7e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_54b755b30f837ff84d51313ea76ea786b8f1f9e24f657bbdb0bf05bdcc526f20 = $this->env->getExtension("native_profiler");
        $__internal_54b755b30f837ff84d51313ea76ea786b8f1f9e24f657bbdb0bf05bdcc526f20->enter($__internal_54b755b30f837ff84d51313ea76ea786b8f1f9e24f657bbdb0bf05bdcc526f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_54b755b30f837ff84d51313ea76ea786b8f1f9e24f657bbdb0bf05bdcc526f20->leave($__internal_54b755b30f837ff84d51313ea76ea786b8f1f9e24f657bbdb0bf05bdcc526f20_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
