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
        $__internal_ad493a73bdbe62864ec555dc9485f11cb50a5a94eba669a1287681dd1e1d302d = $this->env->getExtension("native_profiler");
        $__internal_ad493a73bdbe62864ec555dc9485f11cb50a5a94eba669a1287681dd1e1d302d->enter($__internal_ad493a73bdbe62864ec555dc9485f11cb50a5a94eba669a1287681dd1e1d302d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad493a73bdbe62864ec555dc9485f11cb50a5a94eba669a1287681dd1e1d302d->leave($__internal_ad493a73bdbe62864ec555dc9485f11cb50a5a94eba669a1287681dd1e1d302d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4e7bd339fc7aaf926da3a4d77b42c0cdbf910092aadd9d9fa7ab3e77d4b905a = $this->env->getExtension("native_profiler");
        $__internal_f4e7bd339fc7aaf926da3a4d77b42c0cdbf910092aadd9d9fa7ab3e77d4b905a->enter($__internal_f4e7bd339fc7aaf926da3a4d77b42c0cdbf910092aadd9d9fa7ab3e77d4b905a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f4e7bd339fc7aaf926da3a4d77b42c0cdbf910092aadd9d9fa7ab3e77d4b905a->leave($__internal_f4e7bd339fc7aaf926da3a4d77b42c0cdbf910092aadd9d9fa7ab3e77d4b905a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7bcf27879b66f11f5988ca247ddb44b3b735f6c81ac4c9fb97cc81948103b51 = $this->env->getExtension("native_profiler");
        $__internal_f7bcf27879b66f11f5988ca247ddb44b3b735f6c81ac4c9fb97cc81948103b51->enter($__internal_f7bcf27879b66f11f5988ca247ddb44b3b735f6c81ac4c9fb97cc81948103b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f7bcf27879b66f11f5988ca247ddb44b3b735f6c81ac4c9fb97cc81948103b51->leave($__internal_f7bcf27879b66f11f5988ca247ddb44b3b735f6c81ac4c9fb97cc81948103b51_prof);

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
