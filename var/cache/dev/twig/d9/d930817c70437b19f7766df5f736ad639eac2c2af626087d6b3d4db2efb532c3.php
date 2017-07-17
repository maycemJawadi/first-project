<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_e71330fcf236b6384ca691dc75fb46ad08b55824576d678fa9d2fb69e7711e7b extends Twig_Template
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
        $__internal_d1210ab209c0739e9b69458f36581b31d5e4f7407a5a1f1682bf0867a568fa99 = $this->env->getExtension("native_profiler");
        $__internal_d1210ab209c0739e9b69458f36581b31d5e4f7407a5a1f1682bf0867a568fa99->enter($__internal_d1210ab209c0739e9b69458f36581b31d5e4f7407a5a1f1682bf0867a568fa99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d1210ab209c0739e9b69458f36581b31d5e4f7407a5a1f1682bf0867a568fa99->leave($__internal_d1210ab209c0739e9b69458f36581b31d5e4f7407a5a1f1682bf0867a568fa99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
