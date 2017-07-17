<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_16c8e609ceec469c3cb1f642211751b5679ca6541fa49b700a3645e4861813f1 extends Twig_Template
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
        $__internal_45f0f9d6ab9364422e893cf4723385e223cad308022f8a5cbd0ef40a5e23a3b1 = $this->env->getExtension("native_profiler");
        $__internal_45f0f9d6ab9364422e893cf4723385e223cad308022f8a5cbd0ef40a5e23a3b1->enter($__internal_45f0f9d6ab9364422e893cf4723385e223cad308022f8a5cbd0ef40a5e23a3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_45f0f9d6ab9364422e893cf4723385e223cad308022f8a5cbd0ef40a5e23a3b1->leave($__internal_45f0f9d6ab9364422e893cf4723385e223cad308022f8a5cbd0ef40a5e23a3b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
