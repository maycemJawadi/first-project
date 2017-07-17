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
        $__internal_2a0457847a61a9c3c8e2a6bf36bd9b88548cf6edfdb66700b7bed015dd2202cb = $this->env->getExtension("native_profiler");
        $__internal_2a0457847a61a9c3c8e2a6bf36bd9b88548cf6edfdb66700b7bed015dd2202cb->enter($__internal_2a0457847a61a9c3c8e2a6bf36bd9b88548cf6edfdb66700b7bed015dd2202cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2a0457847a61a9c3c8e2a6bf36bd9b88548cf6edfdb66700b7bed015dd2202cb->leave($__internal_2a0457847a61a9c3c8e2a6bf36bd9b88548cf6edfdb66700b7bed015dd2202cb_prof);

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
