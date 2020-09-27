<?php

/* theme-options/base_option.twig */
class __TwigTemplate_b3941007c4d498da0aa8b5f5782d3eea19be46668bf7b635b2e0ea204550dd10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'variable' => array($this, 'block_variable'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"ai1ec-form-group\">
\t<label for=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"ai1ec-col-sm-4 ai1ec-col-xs-12 ai1ec-control-label\">
    ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
        echo "
  </label>
\t";
        // line 5
        $this->displayBlock('variable', $context, $blocks);
        // line 6
        echo "</div>
";
    }

    // line 5
    public function block_variable($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "theme-options/base_option.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  34 => 6,  32 => 5,  27 => 3,  23 => 2,  20 => 1,);
    }
}
/* <div class="ai1ec-form-group">*/
/* 	<label for="{{ id }}" class="ai1ec-col-sm-4 ai1ec-col-xs-12 ai1ec-control-label">*/
/*     {{ label }}*/
/*   </label>*/
/* 	{% block variable %}{% endblock %}*/
/* </div>*/
/* */
