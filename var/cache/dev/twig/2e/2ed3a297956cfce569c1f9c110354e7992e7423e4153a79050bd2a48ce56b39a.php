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
        $__internal_683ff352ec4731d683ad529889a8e14fb219f21645542609773d50e5ab503f4e = $this->env->getExtension("native_profiler");
        $__internal_683ff352ec4731d683ad529889a8e14fb219f21645542609773d50e5ab503f4e->enter($__internal_683ff352ec4731d683ad529889a8e14fb219f21645542609773d50e5ab503f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_683ff352ec4731d683ad529889a8e14fb219f21645542609773d50e5ab503f4e->leave($__internal_683ff352ec4731d683ad529889a8e14fb219f21645542609773d50e5ab503f4e_prof);

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
