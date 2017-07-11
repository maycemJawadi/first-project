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
        $__internal_c7a3c527d9a0659b1e60c809e9febfaea9a00edd2204d1e968d6e4625558ebaa = $this->env->getExtension("native_profiler");
        $__internal_c7a3c527d9a0659b1e60c809e9febfaea9a00edd2204d1e968d6e4625558ebaa->enter($__internal_c7a3c527d9a0659b1e60c809e9febfaea9a00edd2204d1e968d6e4625558ebaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c7a3c527d9a0659b1e60c809e9febfaea9a00edd2204d1e968d6e4625558ebaa->leave($__internal_c7a3c527d9a0659b1e60c809e9febfaea9a00edd2204d1e968d6e4625558ebaa_prof);

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
