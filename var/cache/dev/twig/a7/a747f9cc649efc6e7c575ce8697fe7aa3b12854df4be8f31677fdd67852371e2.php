<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_fdff9d36e372bef476ee0b440b8a355718211fedeb39841521b7436c9740054b extends Twig_Template
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
        $__internal_37bec073c07242f2670575c5611c4a04256b304fa1ad780f123edc7d7b6ae860 = $this->env->getExtension("native_profiler");
        $__internal_37bec073c07242f2670575c5611c4a04256b304fa1ad780f123edc7d7b6ae860->enter($__internal_37bec073c07242f2670575c5611c4a04256b304fa1ad780f123edc7d7b6ae860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_37bec073c07242f2670575c5611c4a04256b304fa1ad780f123edc7d7b6ae860->leave($__internal_37bec073c07242f2670575c5611c4a04256b304fa1ad780f123edc7d7b6ae860_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
