<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6e2db03e4148e94f162e93723398370cf22dba59ea71c02d0c93ef5947f83270 extends Twig_Template
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
        $__internal_c6cdd58725f5ad23b632635dc37715177ee623a954e5aaad36f8ce7bfac1a1bd = $this->env->getExtension("native_profiler");
        $__internal_c6cdd58725f5ad23b632635dc37715177ee623a954e5aaad36f8ce7bfac1a1bd->enter($__internal_c6cdd58725f5ad23b632635dc37715177ee623a954e5aaad36f8ce7bfac1a1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6cdd58725f5ad23b632635dc37715177ee623a954e5aaad36f8ce7bfac1a1bd->leave($__internal_c6cdd58725f5ad23b632635dc37715177ee623a954e5aaad36f8ce7bfac1a1bd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_764bd86e6e99666d162584d36c3e70e9d6d2eb7cfed8c8f4a0fa16bce3259962 = $this->env->getExtension("native_profiler");
        $__internal_764bd86e6e99666d162584d36c3e70e9d6d2eb7cfed8c8f4a0fa16bce3259962->enter($__internal_764bd86e6e99666d162584d36c3e70e9d6d2eb7cfed8c8f4a0fa16bce3259962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_764bd86e6e99666d162584d36c3e70e9d6d2eb7cfed8c8f4a0fa16bce3259962->leave($__internal_764bd86e6e99666d162584d36c3e70e9d6d2eb7cfed8c8f4a0fa16bce3259962_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e0a3d31d13d145ffbd6341dfe8a0638ac64aaf110914a866863820b8d1f1ab17 = $this->env->getExtension("native_profiler");
        $__internal_e0a3d31d13d145ffbd6341dfe8a0638ac64aaf110914a866863820b8d1f1ab17->enter($__internal_e0a3d31d13d145ffbd6341dfe8a0638ac64aaf110914a866863820b8d1f1ab17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e0a3d31d13d145ffbd6341dfe8a0638ac64aaf110914a866863820b8d1f1ab17->leave($__internal_e0a3d31d13d145ffbd6341dfe8a0638ac64aaf110914a866863820b8d1f1ab17_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_63f0b22bd672236d2595d029c527c78944a55336219818c1ff7087141ed4d12f = $this->env->getExtension("native_profiler");
        $__internal_63f0b22bd672236d2595d029c527c78944a55336219818c1ff7087141ed4d12f->enter($__internal_63f0b22bd672236d2595d029c527c78944a55336219818c1ff7087141ed4d12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_63f0b22bd672236d2595d029c527c78944a55336219818c1ff7087141ed4d12f->leave($__internal_63f0b22bd672236d2595d029c527c78944a55336219818c1ff7087141ed4d12f_prof);

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
