<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c929371085f242e263e4554eeb18608513cbb33405e3ea87010fdde7c1c92711 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f4cba7a1bc51a491a5b7aeadcafadae7d256d664513e418eafa57fb1d26e614 = $this->env->getExtension("native_profiler");
        $__internal_8f4cba7a1bc51a491a5b7aeadcafadae7d256d664513e418eafa57fb1d26e614->enter($__internal_8f4cba7a1bc51a491a5b7aeadcafadae7d256d664513e418eafa57fb1d26e614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f4cba7a1bc51a491a5b7aeadcafadae7d256d664513e418eafa57fb1d26e614->leave($__internal_8f4cba7a1bc51a491a5b7aeadcafadae7d256d664513e418eafa57fb1d26e614_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4883b7abd4176be55cc4f1e6a0215d393ce7f88254b61d1a850c5648970e7c6 = $this->env->getExtension("native_profiler");
        $__internal_c4883b7abd4176be55cc4f1e6a0215d393ce7f88254b61d1a850c5648970e7c6->enter($__internal_c4883b7abd4176be55cc4f1e6a0215d393ce7f88254b61d1a850c5648970e7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c4883b7abd4176be55cc4f1e6a0215d393ce7f88254b61d1a850c5648970e7c6->leave($__internal_c4883b7abd4176be55cc4f1e6a0215d393ce7f88254b61d1a850c5648970e7c6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad5c653ae1687d8e49a44db89827cfa2911709fdddaff72b3c7076874b504c21 = $this->env->getExtension("native_profiler");
        $__internal_ad5c653ae1687d8e49a44db89827cfa2911709fdddaff72b3c7076874b504c21->enter($__internal_ad5c653ae1687d8e49a44db89827cfa2911709fdddaff72b3c7076874b504c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ad5c653ae1687d8e49a44db89827cfa2911709fdddaff72b3c7076874b504c21->leave($__internal_ad5c653ae1687d8e49a44db89827cfa2911709fdddaff72b3c7076874b504c21_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
