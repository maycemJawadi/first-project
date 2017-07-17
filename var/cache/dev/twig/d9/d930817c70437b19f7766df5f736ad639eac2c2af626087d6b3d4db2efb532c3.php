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
        $__internal_5b6814f6951fd0757399e92c4768ecc89148af38027b1f2ae7435e25cf72450f = $this->env->getExtension("native_profiler");
        $__internal_5b6814f6951fd0757399e92c4768ecc89148af38027b1f2ae7435e25cf72450f->enter($__internal_5b6814f6951fd0757399e92c4768ecc89148af38027b1f2ae7435e25cf72450f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5b6814f6951fd0757399e92c4768ecc89148af38027b1f2ae7435e25cf72450f->leave($__internal_5b6814f6951fd0757399e92c4768ecc89148af38027b1f2ae7435e25cf72450f_prof);

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
