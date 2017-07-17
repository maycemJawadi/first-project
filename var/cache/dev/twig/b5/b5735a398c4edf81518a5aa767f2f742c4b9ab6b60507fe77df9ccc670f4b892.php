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
        $__internal_4e475ef86b7b744a3c0cb6d035ee2f129793d74fec871bc7a0f98af8b261a218 = $this->env->getExtension("native_profiler");
        $__internal_4e475ef86b7b744a3c0cb6d035ee2f129793d74fec871bc7a0f98af8b261a218->enter($__internal_4e475ef86b7b744a3c0cb6d035ee2f129793d74fec871bc7a0f98af8b261a218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4e475ef86b7b744a3c0cb6d035ee2f129793d74fec871bc7a0f98af8b261a218->leave($__internal_4e475ef86b7b744a3c0cb6d035ee2f129793d74fec871bc7a0f98af8b261a218_prof);

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
