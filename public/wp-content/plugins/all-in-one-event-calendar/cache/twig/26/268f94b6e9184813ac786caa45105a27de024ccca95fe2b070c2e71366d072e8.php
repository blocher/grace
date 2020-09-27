<?php

/* theme-options/bootstrap_tabs.twig */
class __TwigTemplate_b0c2dd9a84c6496dd704fa2dd7d87c58dcb9f456e4a5039d7a8cb3ce82f4ef8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap_tabs.twig", "theme-options/bootstrap_tabs.twig", 1);
        $this->blocks = array(
            'extra_html' => array($this, 'block_extra_html'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap_tabs.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_extra_html($context, array $blocks = array())
    {
        // line 3
        echo "\t";
        $context["__internal_c1de920713b5790daeeef1ec854d92691ffc75a2c3cf102d0375ecae97903ee6"] = $this->loadTemplate("form-elements/input.twig", "theme-options/bootstrap_tabs.twig", 3);
        // line 4
        echo "\t<div class=\"ai1ec-text-right\">
\t\t<div class=\"ai1ec-btn-toolbar\">
\t\t\t";
        // line 6
        echo $context["__internal_c1de920713b5790daeeef1ec854d92691ffc75a2c3cf102d0375ecae97903ee6"]->getbutton($this->getAttribute((isset($context["submit"]) ? $context["submit"] : null), "id", array()), $this->getAttribute((isset($context["submit"]) ? $context["submit"] : null), "id", array()), $this->getAttribute((isset($context["submit"]) ? $context["submit"] : null), "value", array()), "submit", $this->getAttribute((isset($context["submit"]) ? $context["submit"] : null), "args", array()));
        echo "
\t\t\t";
        // line 7
        echo $context["__internal_c1de920713b5790daeeef1ec854d92691ffc75a2c3cf102d0375ecae97903ee6"]->getbutton($this->getAttribute((isset($context["reset"]) ? $context["reset"] : null), "id", array()), $this->getAttribute((isset($context["reset"]) ? $context["reset"] : null), "id", array()), $this->getAttribute((isset($context["reset"]) ? $context["reset"] : null), "value", array()), "submit", $this->getAttribute((isset($context["reset"]) ? $context["reset"] : null), "args", array()));
        echo "
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "theme-options/bootstrap_tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  38 => 6,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "bootstrap_tabs.twig" %}*/
/* {% block extra_html %}*/
/* 	{% from 'form-elements/input.twig' import button %}*/
/* 	<div class="ai1ec-text-right">*/
/* 		<div class="ai1ec-btn-toolbar">*/
/* 			{{ button( submit.id, submit.id, submit.value, 'submit', submit.args ) }}*/
/* 			{{ button( reset.id, reset.id, reset.value, 'submit', reset.args ) }}*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
