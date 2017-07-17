<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_d346e2d5cb44ed263ff80396e90a0e1af1a97607fbaa60156a285933141a6f00 extends Twig_Template
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
        $__internal_6bbda506d75e4f0b73127f396314d04a05d10053ec21ae5f78658bd57383a2b0 = $this->env->getExtension("native_profiler");
        $__internal_6bbda506d75e4f0b73127f396314d04a05d10053ec21ae5f78658bd57383a2b0->enter($__internal_6bbda506d75e4f0b73127f396314d04a05d10053ec21ae5f78658bd57383a2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_6bbda506d75e4f0b73127f396314d04a05d10053ec21ae5f78658bd57383a2b0->leave($__internal_6bbda506d75e4f0b73127f396314d04a05d10053ec21ae5f78658bd57383a2b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
