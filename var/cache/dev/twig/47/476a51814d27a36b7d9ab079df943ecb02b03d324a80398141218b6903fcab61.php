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
        $__internal_7e9add69f44ee3d7ba4cecbf36b3ead83e6ada65bfc4243279ecf13053daf326 = $this->env->getExtension("native_profiler");
        $__internal_7e9add69f44ee3d7ba4cecbf36b3ead83e6ada65bfc4243279ecf13053daf326->enter($__internal_7e9add69f44ee3d7ba4cecbf36b3ead83e6ada65bfc4243279ecf13053daf326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e9add69f44ee3d7ba4cecbf36b3ead83e6ada65bfc4243279ecf13053daf326->leave($__internal_7e9add69f44ee3d7ba4cecbf36b3ead83e6ada65bfc4243279ecf13053daf326_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d6cac7d52b52449272c0bdc079582cc5b8aa69954dd366543a10c5078b6306f1 = $this->env->getExtension("native_profiler");
        $__internal_d6cac7d52b52449272c0bdc079582cc5b8aa69954dd366543a10c5078b6306f1->enter($__internal_d6cac7d52b52449272c0bdc079582cc5b8aa69954dd366543a10c5078b6306f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d6cac7d52b52449272c0bdc079582cc5b8aa69954dd366543a10c5078b6306f1->leave($__internal_d6cac7d52b52449272c0bdc079582cc5b8aa69954dd366543a10c5078b6306f1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6aeee2f0f63bb1951b02d9c2d7d40a88dbaba9e475f2006e2ddf297855eed12a = $this->env->getExtension("native_profiler");
        $__internal_6aeee2f0f63bb1951b02d9c2d7d40a88dbaba9e475f2006e2ddf297855eed12a->enter($__internal_6aeee2f0f63bb1951b02d9c2d7d40a88dbaba9e475f2006e2ddf297855eed12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6aeee2f0f63bb1951b02d9c2d7d40a88dbaba9e475f2006e2ddf297855eed12a->leave($__internal_6aeee2f0f63bb1951b02d9c2d7d40a88dbaba9e475f2006e2ddf297855eed12a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9440f52a3dc2d98cb666b988666a5a15eb053a884ce6fc3f15a5e3972138bca0 = $this->env->getExtension("native_profiler");
        $__internal_9440f52a3dc2d98cb666b988666a5a15eb053a884ce6fc3f15a5e3972138bca0->enter($__internal_9440f52a3dc2d98cb666b988666a5a15eb053a884ce6fc3f15a5e3972138bca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9440f52a3dc2d98cb666b988666a5a15eb053a884ce6fc3f15a5e3972138bca0->leave($__internal_9440f52a3dc2d98cb666b988666a5a15eb053a884ce6fc3f15a5e3972138bca0_prof);

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
