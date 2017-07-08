<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_879e4d2b2bca90190db2bc98c29befab83a6379bd0faa492b5aefa709e8b9186 extends Twig_Template
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
        $__internal_30be97dcd912a0277682cbb55cd5fa0d339a3f11eb12d9873836622a1b0aa26f = $this->env->getExtension("native_profiler");
        $__internal_30be97dcd912a0277682cbb55cd5fa0d339a3f11eb12d9873836622a1b0aa26f->enter($__internal_30be97dcd912a0277682cbb55cd5fa0d339a3f11eb12d9873836622a1b0aa26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30be97dcd912a0277682cbb55cd5fa0d339a3f11eb12d9873836622a1b0aa26f->leave($__internal_30be97dcd912a0277682cbb55cd5fa0d339a3f11eb12d9873836622a1b0aa26f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1bfc0fd2204c778bb32a25b120667d17071ca55968c868064aea9f410c5fb25b = $this->env->getExtension("native_profiler");
        $__internal_1bfc0fd2204c778bb32a25b120667d17071ca55968c868064aea9f410c5fb25b->enter($__internal_1bfc0fd2204c778bb32a25b120667d17071ca55968c868064aea9f410c5fb25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1bfc0fd2204c778bb32a25b120667d17071ca55968c868064aea9f410c5fb25b->leave($__internal_1bfc0fd2204c778bb32a25b120667d17071ca55968c868064aea9f410c5fb25b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5469b0313d246fe80da298fc1f3a40a7a82713c0007bea1301664a7208be9974 = $this->env->getExtension("native_profiler");
        $__internal_5469b0313d246fe80da298fc1f3a40a7a82713c0007bea1301664a7208be9974->enter($__internal_5469b0313d246fe80da298fc1f3a40a7a82713c0007bea1301664a7208be9974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5469b0313d246fe80da298fc1f3a40a7a82713c0007bea1301664a7208be9974->leave($__internal_5469b0313d246fe80da298fc1f3a40a7a82713c0007bea1301664a7208be9974_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c8a5b7c56f1875996d2d440575c25a82404235dc04e485548189bc69b281f29c = $this->env->getExtension("native_profiler");
        $__internal_c8a5b7c56f1875996d2d440575c25a82404235dc04e485548189bc69b281f29c->enter($__internal_c8a5b7c56f1875996d2d440575c25a82404235dc04e485548189bc69b281f29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c8a5b7c56f1875996d2d440575c25a82404235dc04e485548189bc69b281f29c->leave($__internal_c8a5b7c56f1875996d2d440575c25a82404235dc04e485548189bc69b281f29c_prof);

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
