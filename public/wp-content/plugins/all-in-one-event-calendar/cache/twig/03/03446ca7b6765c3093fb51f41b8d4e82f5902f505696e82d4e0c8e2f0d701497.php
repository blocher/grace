<?php

/* setting/calendar-page-selector.twig */
class __TwigTemplate_79951db1d4d3f2dc94cfa31e28842de8fd2caa1ecec1e907044967d0c36d8e16 extends Twig_Template
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
        echo "<p><a target=\"_blank\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        echo "\">
  ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["view"]) ? $context["view"] : null), "html", null, true);
        echo " \"";
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "\"
  <i class=\"ai1ec-fa ai1ec-fa-arrow-right\"></i>
</a></p>
";
    }

    public function getTemplateName()
    {
        return "setting/calendar-page-selector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
/* <p><a target="_blank" href="{{ link }}">*/
/*   {{ view }} "{{ title|raw }}"*/
/*   <i class="ai1ec-fa ai1ec-fa-arrow-right"></i>*/
/* </a></p>*/
/* */
