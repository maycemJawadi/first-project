<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b5c3ef772cf196d640481f12e977223866f44991ad584019ed1bfaa2ed87eac0 extends Twig_Template
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
        $__internal_2cdb922eaff66343a046537a6be78d0f6e1c47f8e6eaeac0b88343e4c506fad8 = $this->env->getExtension("native_profiler");
        $__internal_2cdb922eaff66343a046537a6be78d0f6e1c47f8e6eaeac0b88343e4c506fad8->enter($__internal_2cdb922eaff66343a046537a6be78d0f6e1c47f8e6eaeac0b88343e4c506fad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2cdb922eaff66343a046537a6be78d0f6e1c47f8e6eaeac0b88343e4c506fad8->leave($__internal_2cdb922eaff66343a046537a6be78d0f6e1c47f8e6eaeac0b88343e4c506fad8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
