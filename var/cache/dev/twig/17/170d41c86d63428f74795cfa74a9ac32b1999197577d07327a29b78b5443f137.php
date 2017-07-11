<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_59f9d3a5ed62d793c4300edb51608ee824cf4a4dfc005e980624282756504d3a extends Twig_Template
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
        $__internal_b031e57998f5cc9fe4c71fae98353ba19ce46157db17ea60264d8228ca40b88b = $this->env->getExtension("native_profiler");
        $__internal_b031e57998f5cc9fe4c71fae98353ba19ce46157db17ea60264d8228ca40b88b->enter($__internal_b031e57998f5cc9fe4c71fae98353ba19ce46157db17ea60264d8228ca40b88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b031e57998f5cc9fe4c71fae98353ba19ce46157db17ea60264d8228ca40b88b->leave($__internal_b031e57998f5cc9fe4c71fae98353ba19ce46157db17ea60264d8228ca40b88b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
