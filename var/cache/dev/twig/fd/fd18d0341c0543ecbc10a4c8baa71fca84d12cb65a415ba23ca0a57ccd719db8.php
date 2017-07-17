<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d7df16d193ccd1d8456d090c51c0d161157d3ebeb64c2c0886da46780c406761 extends Twig_Template
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
        $__internal_000b72dcd4d18bde5a9fd7d2606a6f557ba9e933f52df72e121bff0b987f61c3 = $this->env->getExtension("native_profiler");
        $__internal_000b72dcd4d18bde5a9fd7d2606a6f557ba9e933f52df72e121bff0b987f61c3->enter($__internal_000b72dcd4d18bde5a9fd7d2606a6f557ba9e933f52df72e121bff0b987f61c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_000b72dcd4d18bde5a9fd7d2606a6f557ba9e933f52df72e121bff0b987f61c3->leave($__internal_000b72dcd4d18bde5a9fd7d2606a6f557ba9e933f52df72e121bff0b987f61c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
