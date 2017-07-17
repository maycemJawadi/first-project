<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b46f16301173b1d5453a9ed8b6294317f8a0103a4530ccfd02333d33bbe1efd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5af350fe5d6b438cce353acc0458565ab0795937eacb89b503e2a3464ca7b8f0 = $this->env->getExtension("native_profiler");
        $__internal_5af350fe5d6b438cce353acc0458565ab0795937eacb89b503e2a3464ca7b8f0->enter($__internal_5af350fe5d6b438cce353acc0458565ab0795937eacb89b503e2a3464ca7b8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5af350fe5d6b438cce353acc0458565ab0795937eacb89b503e2a3464ca7b8f0->leave($__internal_5af350fe5d6b438cce353acc0458565ab0795937eacb89b503e2a3464ca7b8f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
