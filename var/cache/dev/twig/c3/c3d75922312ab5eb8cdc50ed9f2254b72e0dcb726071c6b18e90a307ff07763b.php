<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ec8734abf3ded3b7aa47a1bc1058e5d57117edd0a5d57b7ea901c6084da691c5 extends Twig_Template
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
        $__internal_0e28b6280d64d44e9319993ed7ecfbbe90506cc940465aacaf50210fa698cc76 = $this->env->getExtension("native_profiler");
        $__internal_0e28b6280d64d44e9319993ed7ecfbbe90506cc940465aacaf50210fa698cc76->enter($__internal_0e28b6280d64d44e9319993ed7ecfbbe90506cc940465aacaf50210fa698cc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0e28b6280d64d44e9319993ed7ecfbbe90506cc940465aacaf50210fa698cc76->leave($__internal_0e28b6280d64d44e9319993ed7ecfbbe90506cc940465aacaf50210fa698cc76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
