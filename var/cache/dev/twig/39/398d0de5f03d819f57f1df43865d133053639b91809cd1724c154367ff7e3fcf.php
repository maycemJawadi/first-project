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
        $__internal_fcad2aea448a38e3ad65a514dd6a16f70dc8e2518ba6e769f086a001f77f059d = $this->env->getExtension("native_profiler");
        $__internal_fcad2aea448a38e3ad65a514dd6a16f70dc8e2518ba6e769f086a001f77f059d->enter($__internal_fcad2aea448a38e3ad65a514dd6a16f70dc8e2518ba6e769f086a001f77f059d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fcad2aea448a38e3ad65a514dd6a16f70dc8e2518ba6e769f086a001f77f059d->leave($__internal_fcad2aea448a38e3ad65a514dd6a16f70dc8e2518ba6e769f086a001f77f059d_prof);

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
