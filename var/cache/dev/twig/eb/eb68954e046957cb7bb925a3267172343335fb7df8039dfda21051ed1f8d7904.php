<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_53b245e7d633c6dcc54fb3d58f7a98bef9cae90d91256bb639ecdbdec58d650d extends Twig_Template
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
        $__internal_21c6ff69fdbb9925ce38a35c728a050d2281c54d69f51f5c4616bc365a5ebc16 = $this->env->getExtension("native_profiler");
        $__internal_21c6ff69fdbb9925ce38a35c728a050d2281c54d69f51f5c4616bc365a5ebc16->enter($__internal_21c6ff69fdbb9925ce38a35c728a050d2281c54d69f51f5c4616bc365a5ebc16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_21c6ff69fdbb9925ce38a35c728a050d2281c54d69f51f5c4616bc365a5ebc16->leave($__internal_21c6ff69fdbb9925ce38a35c728a050d2281c54d69f51f5c4616bc365a5ebc16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
