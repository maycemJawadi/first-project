<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_9c555ce7fe7aabaa57840e3bb3cbabb32f66d808d81b0b9f104e8d6afd0f06a7 extends Twig_Template
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
        $__internal_912b19bbd218a0dd7ef2abb659a0527ccffb5800d366300ea72e65dbe2d32cac = $this->env->getExtension("native_profiler");
        $__internal_912b19bbd218a0dd7ef2abb659a0527ccffb5800d366300ea72e65dbe2d32cac->enter($__internal_912b19bbd218a0dd7ef2abb659a0527ccffb5800d366300ea72e65dbe2d32cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_912b19bbd218a0dd7ef2abb659a0527ccffb5800d366300ea72e65dbe2d32cac->leave($__internal_912b19bbd218a0dd7ef2abb659a0527ccffb5800d366300ea72e65dbe2d32cac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
