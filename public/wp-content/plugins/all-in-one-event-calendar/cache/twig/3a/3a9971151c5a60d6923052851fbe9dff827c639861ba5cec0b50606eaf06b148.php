<?php

/* theme-options/page.twig */
class __TwigTemplate_0817f2641acc1feb26d5b92140ed050e511485d1c5beee967d56b40189bf01db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_page.twig", "theme-options/page.twig", 1);
        $this->blocks = array(
            'layout' => array($this, 'block_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base_page.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_layout($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"post-box-container left-side timely\">
\t";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->do_meta_boxes($this->getAttribute((isset($context["metabox"]) ? $context["metabox"] : null), "screen", array()), $this->getAttribute((isset($context["metabox"]) ? $context["metabox"] : null), "action", array()), $this->getAttribute((isset($context["metabox"]) ? $context["metabox"] : null), "object", array())), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "theme-options/page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "base_page.twig" %}*/
/* {% block layout %}*/
/* <div class="post-box-container left-side timely">*/
/* 	{{ do_meta_boxes( metabox.screen, metabox.action, metabox.object ) }}*/
/* </div>*/
/* {% endblock %}*/
/* */
