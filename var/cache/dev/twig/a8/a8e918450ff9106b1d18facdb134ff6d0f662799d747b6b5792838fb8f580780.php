<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_bb463a295317fced45852b8a95db08b38a7b7e096560ed49ec3a06d690c36cfd extends Twig_Template
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
        $__internal_c7ddb0640718ceafa6ad563561315a6592cf967839fcd3968f0460f9fe42200b = $this->env->getExtension("native_profiler");
        $__internal_c7ddb0640718ceafa6ad563561315a6592cf967839fcd3968f0460f9fe42200b->enter($__internal_c7ddb0640718ceafa6ad563561315a6592cf967839fcd3968f0460f9fe42200b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c7ddb0640718ceafa6ad563561315a6592cf967839fcd3968f0460f9fe42200b->leave($__internal_c7ddb0640718ceafa6ad563561315a6592cf967839fcd3968f0460f9fe42200b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
