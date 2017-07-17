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
        $__internal_d3f4e0772ff7aa23286db39fab55bbc06d451e8bfe13f9604757c5d6333ce33d = $this->env->getExtension("native_profiler");
        $__internal_d3f4e0772ff7aa23286db39fab55bbc06d451e8bfe13f9604757c5d6333ce33d->enter($__internal_d3f4e0772ff7aa23286db39fab55bbc06d451e8bfe13f9604757c5d6333ce33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d3f4e0772ff7aa23286db39fab55bbc06d451e8bfe13f9604757c5d6333ce33d->leave($__internal_d3f4e0772ff7aa23286db39fab55bbc06d451e8bfe13f9604757c5d6333ce33d_prof);

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
