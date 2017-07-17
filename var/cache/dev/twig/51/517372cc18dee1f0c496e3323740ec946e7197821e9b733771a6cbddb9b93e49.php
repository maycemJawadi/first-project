<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_427a06baac93620e89353bc41cd1de53dd0fa99825f63c64802be40d716489d8 extends Twig_Template
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
        $__internal_34d77d8d851d84da2adeee0aa97b4995af1dc6f321bda0f865c2807c1d0192a4 = $this->env->getExtension("native_profiler");
        $__internal_34d77d8d851d84da2adeee0aa97b4995af1dc6f321bda0f865c2807c1d0192a4->enter($__internal_34d77d8d851d84da2adeee0aa97b4995af1dc6f321bda0f865c2807c1d0192a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_34d77d8d851d84da2adeee0aa97b4995af1dc6f321bda0f865c2807c1d0192a4->leave($__internal_34d77d8d851d84da2adeee0aa97b4995af1dc6f321bda0f865c2807c1d0192a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
