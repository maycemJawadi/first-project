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
        $__internal_0f6193d4aaed7a33302f276332f7a814917e9c0f5c15d6f214dfa05f0801677e = $this->env->getExtension("native_profiler");
        $__internal_0f6193d4aaed7a33302f276332f7a814917e9c0f5c15d6f214dfa05f0801677e->enter($__internal_0f6193d4aaed7a33302f276332f7a814917e9c0f5c15d6f214dfa05f0801677e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_0f6193d4aaed7a33302f276332f7a814917e9c0f5c15d6f214dfa05f0801677e->leave($__internal_0f6193d4aaed7a33302f276332f7a814917e9c0f5c15d6f214dfa05f0801677e_prof);

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
