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
        $__internal_3c44a3ac8a2d3b6b6abfa26b26373e944f5f7b922168931d003c0057bde9276b = $this->env->getExtension("native_profiler");
        $__internal_3c44a3ac8a2d3b6b6abfa26b26373e944f5f7b922168931d003c0057bde9276b->enter($__internal_3c44a3ac8a2d3b6b6abfa26b26373e944f5f7b922168931d003c0057bde9276b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c44a3ac8a2d3b6b6abfa26b26373e944f5f7b922168931d003c0057bde9276b->leave($__internal_3c44a3ac8a2d3b6b6abfa26b26373e944f5f7b922168931d003c0057bde9276b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b0c0e92dad9640a75ca921a84c6b0579006188571f4a4e4a46fa773220535fe2 = $this->env->getExtension("native_profiler");
        $__internal_b0c0e92dad9640a75ca921a84c6b0579006188571f4a4e4a46fa773220535fe2->enter($__internal_b0c0e92dad9640a75ca921a84c6b0579006188571f4a4e4a46fa773220535fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b0c0e92dad9640a75ca921a84c6b0579006188571f4a4e4a46fa773220535fe2->leave($__internal_b0c0e92dad9640a75ca921a84c6b0579006188571f4a4e4a46fa773220535fe2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e6d0b70614573f63e618fbd2e309b729fa9aa8fdc7bbce1ad8114a1639a8e323 = $this->env->getExtension("native_profiler");
        $__internal_e6d0b70614573f63e618fbd2e309b729fa9aa8fdc7bbce1ad8114a1639a8e323->enter($__internal_e6d0b70614573f63e618fbd2e309b729fa9aa8fdc7bbce1ad8114a1639a8e323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e6d0b70614573f63e618fbd2e309b729fa9aa8fdc7bbce1ad8114a1639a8e323->leave($__internal_e6d0b70614573f63e618fbd2e309b729fa9aa8fdc7bbce1ad8114a1639a8e323_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a798af7c02ab47e1850717d680b489407476cde8e7138b88e54b491967109405 = $this->env->getExtension("native_profiler");
        $__internal_a798af7c02ab47e1850717d680b489407476cde8e7138b88e54b491967109405->enter($__internal_a798af7c02ab47e1850717d680b489407476cde8e7138b88e54b491967109405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a798af7c02ab47e1850717d680b489407476cde8e7138b88e54b491967109405->leave($__internal_a798af7c02ab47e1850717d680b489407476cde8e7138b88e54b491967109405_prof);

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
