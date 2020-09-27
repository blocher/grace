<?php

/* select2_input.twig */
class __TwigTemplate_c43bbfeba551d0f1e2ea0c91243b1f4a197c3c1d022819ba73ccf68ee3acef04 extends Twig_Template
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
        // line 1
        $context["__internal_4880a503113065be399679bbc036fe9a301f6bebe93837daa53bb808671acb70"] = $this->loadTemplate("form-elements/input.twig", "select2_input.twig", 1);
        // line 2
        echo $context["__internal_4880a503113065be399679bbc036fe9a301f6bebe93837daa53bb808671acb70"]->getinput((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null), "", "text", (isset($context["select2_args"]) ? $context["select2_args"] : null));
    }

    public function getTemplateName()
    {
        return "select2_input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
/* {% from 'form-elements/input.twig' import input %}*/
/* {{ input( id, name, '', 'text', select2_args ) }}*/
