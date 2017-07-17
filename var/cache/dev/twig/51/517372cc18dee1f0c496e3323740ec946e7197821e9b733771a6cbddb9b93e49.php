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
        $__internal_db48bee1599d38929dfa62375481da9f8c7c6b0d8c09fe9d6755831a51b8d119 = $this->env->getExtension("native_profiler");
        $__internal_db48bee1599d38929dfa62375481da9f8c7c6b0d8c09fe9d6755831a51b8d119->enter($__internal_db48bee1599d38929dfa62375481da9f8c7c6b0d8c09fe9d6755831a51b8d119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_db48bee1599d38929dfa62375481da9f8c7c6b0d8c09fe9d6755831a51b8d119->leave($__internal_db48bee1599d38929dfa62375481da9f8c7c6b0d8c09fe9d6755831a51b8d119_prof);

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
