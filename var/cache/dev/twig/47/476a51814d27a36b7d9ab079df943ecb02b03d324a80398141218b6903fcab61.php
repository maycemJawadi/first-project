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
        $__internal_9c3f404094c1fe012b411186b71b11683457d07a1fe3ce171cc84a3a2bf3f379 = $this->env->getExtension("native_profiler");
        $__internal_9c3f404094c1fe012b411186b71b11683457d07a1fe3ce171cc84a3a2bf3f379->enter($__internal_9c3f404094c1fe012b411186b71b11683457d07a1fe3ce171cc84a3a2bf3f379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c3f404094c1fe012b411186b71b11683457d07a1fe3ce171cc84a3a2bf3f379->leave($__internal_9c3f404094c1fe012b411186b71b11683457d07a1fe3ce171cc84a3a2bf3f379_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_af07a20a732edf6531c1793b64e71010a8f3479121ac4af2beaa1ff24aaef24d = $this->env->getExtension("native_profiler");
        $__internal_af07a20a732edf6531c1793b64e71010a8f3479121ac4af2beaa1ff24aaef24d->enter($__internal_af07a20a732edf6531c1793b64e71010a8f3479121ac4af2beaa1ff24aaef24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_af07a20a732edf6531c1793b64e71010a8f3479121ac4af2beaa1ff24aaef24d->leave($__internal_af07a20a732edf6531c1793b64e71010a8f3479121ac4af2beaa1ff24aaef24d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_929d9f2dcd1509b27574b5d5a88733a50838f9d31306964c24b2662de9de3e16 = $this->env->getExtension("native_profiler");
        $__internal_929d9f2dcd1509b27574b5d5a88733a50838f9d31306964c24b2662de9de3e16->enter($__internal_929d9f2dcd1509b27574b5d5a88733a50838f9d31306964c24b2662de9de3e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_929d9f2dcd1509b27574b5d5a88733a50838f9d31306964c24b2662de9de3e16->leave($__internal_929d9f2dcd1509b27574b5d5a88733a50838f9d31306964c24b2662de9de3e16_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c322349c078d79d078b3cd9529b288ad8d8c36e80718d9c48db0b2f0b4a27a4 = $this->env->getExtension("native_profiler");
        $__internal_7c322349c078d79d078b3cd9529b288ad8d8c36e80718d9c48db0b2f0b4a27a4->enter($__internal_7c322349c078d79d078b3cd9529b288ad8d8c36e80718d9c48db0b2f0b4a27a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7c322349c078d79d078b3cd9529b288ad8d8c36e80718d9c48db0b2f0b4a27a4->leave($__internal_7c322349c078d79d078b3cd9529b288ad8d8c36e80718d9c48db0b2f0b4a27a4_prof);

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
