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
        $__internal_498c677994d8103a5befb47d719206e0f8b0c2e050b3d71227d3283eeb7e471d = $this->env->getExtension("native_profiler");
        $__internal_498c677994d8103a5befb47d719206e0f8b0c2e050b3d71227d3283eeb7e471d->enter($__internal_498c677994d8103a5befb47d719206e0f8b0c2e050b3d71227d3283eeb7e471d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_498c677994d8103a5befb47d719206e0f8b0c2e050b3d71227d3283eeb7e471d->leave($__internal_498c677994d8103a5befb47d719206e0f8b0c2e050b3d71227d3283eeb7e471d_prof);

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
