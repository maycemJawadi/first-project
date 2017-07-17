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
        $__internal_4005561c56be40acd78c6dceed48b90d5d92a7a32854fa4eaa83627925913e25 = $this->env->getExtension("native_profiler");
        $__internal_4005561c56be40acd78c6dceed48b90d5d92a7a32854fa4eaa83627925913e25->enter($__internal_4005561c56be40acd78c6dceed48b90d5d92a7a32854fa4eaa83627925913e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_4005561c56be40acd78c6dceed48b90d5d92a7a32854fa4eaa83627925913e25->leave($__internal_4005561c56be40acd78c6dceed48b90d5d92a7a32854fa4eaa83627925913e25_prof);

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
