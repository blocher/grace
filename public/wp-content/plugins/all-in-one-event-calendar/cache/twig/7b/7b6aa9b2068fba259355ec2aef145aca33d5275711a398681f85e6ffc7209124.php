<?php

/* theme-options/size.twig */
class __TwigTemplate_f1f75e17eb6f2c5509493e60588914389f539ad98d8ecb0b146afa630bc91747 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("theme-options/base_option.twig", "theme-options/size.twig", 1);
        $this->blocks = array(
            'variable' => array($this, 'block_variable'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "theme-options/base_option.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["__internal_be66c6f3124a4399cf65de648ef22eb7fc1065b0344a5ae5541004f3c57f2374"] = $this->loadTemplate("form-elements/input.twig", "theme-options/size.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_variable($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"ai1ec-col-sm-6 ai1ec-col-xs-9\">
    ";
        // line 5
        echo $context["__internal_be66c6f3124a4399cf65de648ef22eb7fc1065b0344a5ae5541004f3c57f2374"]->getinput((isset($context["id"]) ? $context["id"] : null), (isset($context["id"]) ? $context["id"] : null), (isset($context["value"]) ? $context["value"] : null), "text", (isset($context["args"]) ? $context["args"] : null));
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "theme-options/size.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  34 => 4,  31 => 3,  27 => 1,  25 => 2,  11 => 1,);
    }
}
/* {% extends "theme-options/base_option.twig" %}*/
/* {% from 'form-elements/input.twig' import input %}*/
/* {% block variable %}*/
/*   <div class="ai1ec-col-sm-6 ai1ec-col-xs-9">*/
/*     {{ input( id, id, value, 'text', args ) }}*/
/*   </div>*/
/* {% endblock %}*/
/* */
