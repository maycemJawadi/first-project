<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_f71ebc9591fb4daed1da580dd1bb15182a08aad07be9c0c1a1d77b90ad561ddd extends Twig_Template
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
        $__internal_e9bbdd3e7c0f8871c6624075324a74af98c921a47201ac10705aacb0188d3cd0 = $this->env->getExtension("native_profiler");
        $__internal_e9bbdd3e7c0f8871c6624075324a74af98c921a47201ac10705aacb0188d3cd0->enter($__internal_e9bbdd3e7c0f8871c6624075324a74af98c921a47201ac10705aacb0188d3cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_e9bbdd3e7c0f8871c6624075324a74af98c921a47201ac10705aacb0188d3cd0->leave($__internal_e9bbdd3e7c0f8871c6624075324a74af98c921a47201ac10705aacb0188d3cd0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
