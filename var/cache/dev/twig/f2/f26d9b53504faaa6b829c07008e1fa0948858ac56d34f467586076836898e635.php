<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_a962034be8c89d55d456922f5c51f38207d7b389c0ac9c94d79d586ce67c0c31 extends Twig_Template
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
        $__internal_e88f0524d12654e7bbaa57570c5977cc1d7978ef4d6479291e70c1dbb1af35d9 = $this->env->getExtension("native_profiler");
        $__internal_e88f0524d12654e7bbaa57570c5977cc1d7978ef4d6479291e70c1dbb1af35d9->enter($__internal_e88f0524d12654e7bbaa57570c5977cc1d7978ef4d6479291e70c1dbb1af35d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e88f0524d12654e7bbaa57570c5977cc1d7978ef4d6479291e70c1dbb1af35d9->leave($__internal_e88f0524d12654e7bbaa57570c5977cc1d7978ef4d6479291e70c1dbb1af35d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
