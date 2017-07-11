<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_55aec978ef7c7d266a88c7509e79b1596174e8c04374de37e29bfb5de16d1405 extends Twig_Template
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
        $__internal_cbfd9987c57d7cd340b8a12a0e6750a426c02beae3b1cd9303564b04e1a1fb98 = $this->env->getExtension("native_profiler");
        $__internal_cbfd9987c57d7cd340b8a12a0e6750a426c02beae3b1cd9303564b04e1a1fb98->enter($__internal_cbfd9987c57d7cd340b8a12a0e6750a426c02beae3b1cd9303564b04e1a1fb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_cbfd9987c57d7cd340b8a12a0e6750a426c02beae3b1cd9303564b04e1a1fb98->leave($__internal_cbfd9987c57d7cd340b8a12a0e6750a426c02beae3b1cd9303564b04e1a1fb98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
