<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_117f8673eb1f0b90bcb42a335af308e35bbd5412f0a06e8282c1a23c85040664 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9817e1aa4a9ac99227adb5fc8fe9b9d1774526c48c66a8c2a9fde42dd15753eb = $this->env->getExtension("native_profiler");
        $__internal_9817e1aa4a9ac99227adb5fc8fe9b9d1774526c48c66a8c2a9fde42dd15753eb->enter($__internal_9817e1aa4a9ac99227adb5fc8fe9b9d1774526c48c66a8c2a9fde42dd15753eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9817e1aa4a9ac99227adb5fc8fe9b9d1774526c48c66a8c2a9fde42dd15753eb->leave($__internal_9817e1aa4a9ac99227adb5fc8fe9b9d1774526c48c66a8c2a9fde42dd15753eb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_526e5684ed9ba2f1f7236114cfe1c29baa01401452777016bc33d345b0309abb = $this->env->getExtension("native_profiler");
        $__internal_526e5684ed9ba2f1f7236114cfe1c29baa01401452777016bc33d345b0309abb->enter($__internal_526e5684ed9ba2f1f7236114cfe1c29baa01401452777016bc33d345b0309abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_526e5684ed9ba2f1f7236114cfe1c29baa01401452777016bc33d345b0309abb->leave($__internal_526e5684ed9ba2f1f7236114cfe1c29baa01401452777016bc33d345b0309abb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_45dbe858938309b18bdce7b367e06ccadc5acb4161219a07deca466e9796254b = $this->env->getExtension("native_profiler");
        $__internal_45dbe858938309b18bdce7b367e06ccadc5acb4161219a07deca466e9796254b->enter($__internal_45dbe858938309b18bdce7b367e06ccadc5acb4161219a07deca466e9796254b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_45dbe858938309b18bdce7b367e06ccadc5acb4161219a07deca466e9796254b->leave($__internal_45dbe858938309b18bdce7b367e06ccadc5acb4161219a07deca466e9796254b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6611a08814631f715ab7dab3444747dea89769c871e77ba23e09946c2ca5f33a = $this->env->getExtension("native_profiler");
        $__internal_6611a08814631f715ab7dab3444747dea89769c871e77ba23e09946c2ca5f33a->enter($__internal_6611a08814631f715ab7dab3444747dea89769c871e77ba23e09946c2ca5f33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6611a08814631f715ab7dab3444747dea89769c871e77ba23e09946c2ca5f33a->leave($__internal_6611a08814631f715ab7dab3444747dea89769c871e77ba23e09946c2ca5f33a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
