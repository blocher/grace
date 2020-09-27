<?php

/* theme-options/color-picker.twig */
class __TwigTemplate_359cb3df42019d73d4e76e6bf905d14901d9d9e61c6780b3e897e107f8f0222a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("theme-options/base_option.twig", "theme-options/color-picker.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_variable($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "<div class=\"ai1ec-col-sm-6 ai1ec-col-xs-9\">
  <div class=\"ai1ec-input-group color colorpickers\"
    data-color=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\"
    data-color-format=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["format"]) ? $context["format"] : null), "html", null, true);
        echo "\">
  \t<input type=\"text\" id=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"ai1ec-form-control\"
      ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["readonly"]) ? $context["readonly"] : null), "html", null, true);
        echo " value=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\">
  \t<span class=\"ai1ec-input-group-addon\">
      <i style=\"background-color: ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\"></i>
    </span>
  </div>
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "theme-options/color-picker.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  51 => 10,  45 => 9,  41 => 8,  37 => 7,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "theme-options/base_option.twig" %}*/
/* */
/* {% block variable %}*/
/* {% spaceless %}*/
/* <div class="ai1ec-col-sm-6 ai1ec-col-xs-9">*/
/*   <div class="ai1ec-input-group color colorpickers"*/
/*     data-color="{{ value }}"*/
/*     data-color-format="{{ format }}">*/
/*   	<input type="text" id="{{ id }}" name="{{ id }}" class="ai1ec-form-control"*/
/*       {{ readonly }} value="{{ value }}">*/
/*   	<span class="ai1ec-input-group-addon">*/
/*       <i style="background-color: {{ value }}"></i>*/
/*     </span>*/
/*   </div>*/
/* </div>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* */
