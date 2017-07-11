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
        $__internal_01efd21cc35ecba51d72a0376a58555ff6906ea0fdd1af1e5f12e7ad99451c7e = $this->env->getExtension("native_profiler");
        $__internal_01efd21cc35ecba51d72a0376a58555ff6906ea0fdd1af1e5f12e7ad99451c7e->enter($__internal_01efd21cc35ecba51d72a0376a58555ff6906ea0fdd1af1e5f12e7ad99451c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01efd21cc35ecba51d72a0376a58555ff6906ea0fdd1af1e5f12e7ad99451c7e->leave($__internal_01efd21cc35ecba51d72a0376a58555ff6906ea0fdd1af1e5f12e7ad99451c7e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef28c4165ba9ce6276a2c83a949c1bb5caa21af6c15173c79a48dbdda0dd7a29 = $this->env->getExtension("native_profiler");
        $__internal_ef28c4165ba9ce6276a2c83a949c1bb5caa21af6c15173c79a48dbdda0dd7a29->enter($__internal_ef28c4165ba9ce6276a2c83a949c1bb5caa21af6c15173c79a48dbdda0dd7a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ef28c4165ba9ce6276a2c83a949c1bb5caa21af6c15173c79a48dbdda0dd7a29->leave($__internal_ef28c4165ba9ce6276a2c83a949c1bb5caa21af6c15173c79a48dbdda0dd7a29_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_658c799604e3050f3446c9673a6e16ab93478d1d86096b5d8a544ab4c5bae76f = $this->env->getExtension("native_profiler");
        $__internal_658c799604e3050f3446c9673a6e16ab93478d1d86096b5d8a544ab4c5bae76f->enter($__internal_658c799604e3050f3446c9673a6e16ab93478d1d86096b5d8a544ab4c5bae76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_658c799604e3050f3446c9673a6e16ab93478d1d86096b5d8a544ab4c5bae76f->leave($__internal_658c799604e3050f3446c9673a6e16ab93478d1d86096b5d8a544ab4c5bae76f_prof);

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
