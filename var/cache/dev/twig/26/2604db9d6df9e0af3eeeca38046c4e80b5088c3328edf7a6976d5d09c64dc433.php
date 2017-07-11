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
        $__internal_b3916768e718863b055a580a73ea6413b398e3e63df3d6152082f18e73d3ab75 = $this->env->getExtension("native_profiler");
        $__internal_b3916768e718863b055a580a73ea6413b398e3e63df3d6152082f18e73d3ab75->enter($__internal_b3916768e718863b055a580a73ea6413b398e3e63df3d6152082f18e73d3ab75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b3916768e718863b055a580a73ea6413b398e3e63df3d6152082f18e73d3ab75->leave($__internal_b3916768e718863b055a580a73ea6413b398e3e63df3d6152082f18e73d3ab75_prof);

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
