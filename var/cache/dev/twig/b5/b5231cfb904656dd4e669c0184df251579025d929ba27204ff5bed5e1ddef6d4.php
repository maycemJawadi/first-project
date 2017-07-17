<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_0e0e9856fed01ef0e51ab6a189747e030ed9159e179565953c96d7e47ea34b45 extends Twig_Template
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
        $__internal_468ca5e5fbc6cbf4a90b27dbea970233dd8bf66b41fcb1ce9efd99ac2f3058f1 = $this->env->getExtension("native_profiler");
        $__internal_468ca5e5fbc6cbf4a90b27dbea970233dd8bf66b41fcb1ce9efd99ac2f3058f1->enter($__internal_468ca5e5fbc6cbf4a90b27dbea970233dd8bf66b41fcb1ce9efd99ac2f3058f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_468ca5e5fbc6cbf4a90b27dbea970233dd8bf66b41fcb1ce9efd99ac2f3058f1->leave($__internal_468ca5e5fbc6cbf4a90b27dbea970233dd8bf66b41fcb1ce9efd99ac2f3058f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
