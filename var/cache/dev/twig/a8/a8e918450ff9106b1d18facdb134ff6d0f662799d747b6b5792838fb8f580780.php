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
        $__internal_3a0a986f61e0284ebddaf194aacca6abbdbc639ee5e4fb6300a2f67552ef5d3a = $this->env->getExtension("native_profiler");
        $__internal_3a0a986f61e0284ebddaf194aacca6abbdbc639ee5e4fb6300a2f67552ef5d3a->enter($__internal_3a0a986f61e0284ebddaf194aacca6abbdbc639ee5e4fb6300a2f67552ef5d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3a0a986f61e0284ebddaf194aacca6abbdbc639ee5e4fb6300a2f67552ef5d3a->leave($__internal_3a0a986f61e0284ebddaf194aacca6abbdbc639ee5e4fb6300a2f67552ef5d3a_prof);

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
