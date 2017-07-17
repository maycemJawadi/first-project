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
        $__internal_199393851b22166205551bb11770026841bd988e54b3bc3209e92eba4abf2367 = $this->env->getExtension("native_profiler");
        $__internal_199393851b22166205551bb11770026841bd988e54b3bc3209e92eba4abf2367->enter($__internal_199393851b22166205551bb11770026841bd988e54b3bc3209e92eba4abf2367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_199393851b22166205551bb11770026841bd988e54b3bc3209e92eba4abf2367->leave($__internal_199393851b22166205551bb11770026841bd988e54b3bc3209e92eba4abf2367_prof);

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
