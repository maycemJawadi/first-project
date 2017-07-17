<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_ce2cb497a3b472476a3bc28be04aa0e3ebab81e4e26649d3cc2170f07c03ba42 extends Twig_Template
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
        $__internal_8058e5ccdcd4f9bc4534d92370e09fec149ce22a9b4c2ceb62ecf7c8d2883d14 = $this->env->getExtension("native_profiler");
        $__internal_8058e5ccdcd4f9bc4534d92370e09fec149ce22a9b4c2ceb62ecf7c8d2883d14->enter($__internal_8058e5ccdcd4f9bc4534d92370e09fec149ce22a9b4c2ceb62ecf7c8d2883d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8058e5ccdcd4f9bc4534d92370e09fec149ce22a9b4c2ceb62ecf7c8d2883d14->leave($__internal_8058e5ccdcd4f9bc4534d92370e09fec149ce22a9b4c2ceb62ecf7c8d2883d14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
