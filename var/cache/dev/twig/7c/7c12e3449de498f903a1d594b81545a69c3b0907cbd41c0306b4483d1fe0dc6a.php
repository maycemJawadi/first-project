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
        $__internal_a5e1b76201ea5a85e88f4391da79cdcbb76f51b8a2a16913ced6fcbaf651e5bd = $this->env->getExtension("native_profiler");
        $__internal_a5e1b76201ea5a85e88f4391da79cdcbb76f51b8a2a16913ced6fcbaf651e5bd->enter($__internal_a5e1b76201ea5a85e88f4391da79cdcbb76f51b8a2a16913ced6fcbaf651e5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a5e1b76201ea5a85e88f4391da79cdcbb76f51b8a2a16913ced6fcbaf651e5bd->leave($__internal_a5e1b76201ea5a85e88f4391da79cdcbb76f51b8a2a16913ced6fcbaf651e5bd_prof);

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
