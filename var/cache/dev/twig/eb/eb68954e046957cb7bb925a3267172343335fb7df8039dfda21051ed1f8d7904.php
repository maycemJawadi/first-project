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
        $__internal_ff6c30885c9801e42f123976d21b8b650ae951421583b2e832a75794c42e44f9 = $this->env->getExtension("native_profiler");
        $__internal_ff6c30885c9801e42f123976d21b8b650ae951421583b2e832a75794c42e44f9->enter($__internal_ff6c30885c9801e42f123976d21b8b650ae951421583b2e832a75794c42e44f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ff6c30885c9801e42f123976d21b8b650ae951421583b2e832a75794c42e44f9->leave($__internal_ff6c30885c9801e42f123976d21b8b650ae951421583b2e832a75794c42e44f9_prof);

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
