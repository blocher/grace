<?php

/* theme-options/font.twig */
class __TwigTemplate_26addd500286fd5fd0a0e2f6d32a2eb297636d3437af977e238d19fe9f7b3bf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("theme-options/base_option.twig", "theme-options/font.twig", 1);
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
        $context["__internal_06a9d27961667dbb96cd8d727465130cd8671395d2edb818fed890232943b3e4"] = $this->loadTemplate("form-elements/select.twig", "theme-options/font.twig", 2);
        // line 3
        $context["__internal_87b9958f6bddea68a5296dbf691d027ae97e800c2d3f86673d5691d331c5e044"] = $this->loadTemplate("form-elements/input.twig", "theme-options/font.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_variable($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"ai1ec-col-sm-6 ai1ec-col-xs-9\">
    ";
        // line 6
        echo $context["__internal_06a9d27961667dbb96cd8d727465130cd8671395d2edb818fed890232943b3e4"]->getselect($this->getAttribute((isset($context["select"]) ? $context["select"] : null), "id", array()), $this->getAttribute((isset($context["select"]) ? $context["select"] : null), "id", array()), $this->getAttribute((isset($context["select"]) ? $context["select"] : null), "args", array()), $this->getAttribute((isset($context["select"]) ? $context["select"] : null), "options", array()));
        echo "
    ";
        // line 7
        echo $context["__internal_87b9958f6bddea68a5296dbf691d027ae97e800c2d3f86673d5691d331c5e044"]->getinput($this->getAttribute((isset($context["input"]) ? $context["input"] : null), "id", array()), $this->getAttribute((isset($context["input"]) ? $context["input"] : null), "id", array()), $this->getAttribute((isset($context["input"]) ? $context["input"] : null), "value", array()), "text", $this->getAttribute((isset($context["input"]) ? $context["input"] : null), "args", array()));
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "theme-options/font.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  39 => 6,  36 => 5,  33 => 4,  29 => 1,  27 => 3,  25 => 2,  11 => 1,);
    }
}
/* {% extends "theme-options/base_option.twig" %}*/
/* {% from 'form-elements/select.twig' import select %}*/
/* {% from 'form-elements/input.twig' import input %}*/
/* {% block variable %}*/
/*   <div class="ai1ec-col-sm-6 ai1ec-col-xs-9">*/
/*     {{ select( select.id, select.id, select.args, select.options ) }}*/
/*     {{ input( input.id, input.id, input.value, 'text', input.args ) }}*/
/*   </div>*/
/* {% endblock %}*/
/* */
