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
        $__internal_d07a220f19f1c72d6d03049cfbe22c860e666d6a834367e99762755df1dd53b7 = $this->env->getExtension("native_profiler");
        $__internal_d07a220f19f1c72d6d03049cfbe22c860e666d6a834367e99762755df1dd53b7->enter($__internal_d07a220f19f1c72d6d03049cfbe22c860e666d6a834367e99762755df1dd53b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d07a220f19f1c72d6d03049cfbe22c860e666d6a834367e99762755df1dd53b7->leave($__internal_d07a220f19f1c72d6d03049cfbe22c860e666d6a834367e99762755df1dd53b7_prof);

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
