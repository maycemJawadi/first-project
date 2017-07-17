<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5830ef093348f2f95a4e0dc170ac96092519409ffef775dd1f847c5cdd830ad4 extends Twig_Template
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
        $__internal_c779f856287dd20add69b9be11ecd6600d5de313aa9c8b94f6a2b8d30d6f618e = $this->env->getExtension("native_profiler");
        $__internal_c779f856287dd20add69b9be11ecd6600d5de313aa9c8b94f6a2b8d30d6f618e->enter($__internal_c779f856287dd20add69b9be11ecd6600d5de313aa9c8b94f6a2b8d30d6f618e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c779f856287dd20add69b9be11ecd6600d5de313aa9c8b94f6a2b8d30d6f618e->leave($__internal_c779f856287dd20add69b9be11ecd6600d5de313aa9c8b94f6a2b8d30d6f618e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
