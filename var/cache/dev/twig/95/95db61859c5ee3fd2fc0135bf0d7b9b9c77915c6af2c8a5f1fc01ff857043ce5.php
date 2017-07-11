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
        $__internal_12fb6bcb3b41b17c506e8ec829d47d852669d287a48c928c41a36c626c09cd00 = $this->env->getExtension("native_profiler");
        $__internal_12fb6bcb3b41b17c506e8ec829d47d852669d287a48c928c41a36c626c09cd00->enter($__internal_12fb6bcb3b41b17c506e8ec829d47d852669d287a48c928c41a36c626c09cd00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_12fb6bcb3b41b17c506e8ec829d47d852669d287a48c928c41a36c626c09cd00->leave($__internal_12fb6bcb3b41b17c506e8ec829d47d852669d287a48c928c41a36c626c09cd00_prof);

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
