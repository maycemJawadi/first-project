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
        $__internal_37ba4ccb06da5d97f96e6d2a38f2eda0c7c3a324f98d3ee984816e36b8a09a3f = $this->env->getExtension("native_profiler");
        $__internal_37ba4ccb06da5d97f96e6d2a38f2eda0c7c3a324f98d3ee984816e36b8a09a3f->enter($__internal_37ba4ccb06da5d97f96e6d2a38f2eda0c7c3a324f98d3ee984816e36b8a09a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_37ba4ccb06da5d97f96e6d2a38f2eda0c7c3a324f98d3ee984816e36b8a09a3f->leave($__internal_37ba4ccb06da5d97f96e6d2a38f2eda0c7c3a324f98d3ee984816e36b8a09a3f_prof);

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
