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
        $__internal_5da38c9bbaf9547df684720a9e2f9151c342142030d6643bfd73a5047b52c9cb = $this->env->getExtension("native_profiler");
        $__internal_5da38c9bbaf9547df684720a9e2f9151c342142030d6643bfd73a5047b52c9cb->enter($__internal_5da38c9bbaf9547df684720a9e2f9151c342142030d6643bfd73a5047b52c9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5da38c9bbaf9547df684720a9e2f9151c342142030d6643bfd73a5047b52c9cb->leave($__internal_5da38c9bbaf9547df684720a9e2f9151c342142030d6643bfd73a5047b52c9cb_prof);

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
