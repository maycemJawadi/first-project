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
        $__internal_cf90979146627907bee078a49a1d38097b5e3a70f6bc383f53033f5b7cdb5e41 = $this->env->getExtension("native_profiler");
        $__internal_cf90979146627907bee078a49a1d38097b5e3a70f6bc383f53033f5b7cdb5e41->enter($__internal_cf90979146627907bee078a49a1d38097b5e3a70f6bc383f53033f5b7cdb5e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_cf90979146627907bee078a49a1d38097b5e3a70f6bc383f53033f5b7cdb5e41->leave($__internal_cf90979146627907bee078a49a1d38097b5e3a70f6bc383f53033f5b7cdb5e41_prof);

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
