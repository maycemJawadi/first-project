<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_51252a4cd9992334fef0dd6280c48f2543ec7eacd4b10a477095916a81776e04 extends Twig_Template
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
        $__internal_ddccd20124f232f66d35db772c87eb1fedde4f7fc229b832caa9bfcda050c98d = $this->env->getExtension("native_profiler");
        $__internal_ddccd20124f232f66d35db772c87eb1fedde4f7fc229b832caa9bfcda050c98d->enter($__internal_ddccd20124f232f66d35db772c87eb1fedde4f7fc229b832caa9bfcda050c98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ddccd20124f232f66d35db772c87eb1fedde4f7fc229b832caa9bfcda050c98d->leave($__internal_ddccd20124f232f66d35db772c87eb1fedde4f7fc229b832caa9bfcda050c98d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
