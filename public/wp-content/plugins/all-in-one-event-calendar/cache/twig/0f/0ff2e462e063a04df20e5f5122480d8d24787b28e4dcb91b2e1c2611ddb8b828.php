<?php

/* setting/bootstrap_tabs.twig */
class __TwigTemplate_8ab7b1d219b981d5effab122dd2238dae1ffcee55f159e841e05cd608868035c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap_tabs.twig", "setting/bootstrap_tabs.twig", 1);
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
        echo "  ";
        $context["__internal_49bbe50a9ef11cbcc78495ff6f38cb5057b07a61c403bdce267eb2f90cdf5738"] = $this->loadTemplate("form-elements/input.twig", "setting/bootstrap_tabs.twig", 3);
        // line 4
        echo "  <div class=\"ai1ec-text-right\">
    ";
        // line 5
        echo $context["__internal_49bbe50a9ef11cbcc78495ff6f38cb5057b07a61c403bdce267eb2f90cdf5738"]->getbutton($this->getAttribute((isset($context["submit"]) ? $context["submit"] : null), "id", array()), $this->getAttribute((isset($context["submit"]) ? $context["submit"] : null), "id", array()), $this->getAttribute((isset($context["submit"]) ? $context["submit"] : null), "value", array()), "submit", $this->getAttribute((isset($context["submit"]) ? $context["submit"] : null), "args", array()));
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "setting/bootstrap_tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "bootstrap_tabs.twig" %}*/
/* {% block extra_html %}*/
/*   {% from 'form-elements/input.twig' import button %}*/
/*   <div class="ai1ec-text-right">*/
/*     {{ button( submit.id, submit.id, submit.value, 'submit', submit.args ) }}*/
/*   </div>*/
/* {% endblock %}*/
/* */
