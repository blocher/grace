<?php

/* datepicker_link.twig */
class __TwigTemplate_762eddf81bc14e5039f914a13f5fd4d3fd7525dc70bb6987f2a0c02db6c04c1c extends Twig_Template
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
        echo "<a
\tclass=\"ai1ec-minical-trigger ai1ec-btn ai1ec-btn-sm ai1ec-btn-default
    ai1ec-tooltip-trigger\"
\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
        foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
            // line 5
            echo "\t\t";
            echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "\t";
        echo (isset($context["data_type"]) ? $context["data_type"] : null);
        echo "
\ttitle=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["text_date"]) ? $context["text_date"] : null), "html", null, true);
        echo "\"
\t>
\t<i class=\"ai1ec-fa ai1ec-fa-calendar-o ai1ec-fa-fw ai1ec-fa-lg\"></i>
  <span class=\"ai1ec-calendar-title\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</span>
  <span class=\"ai1ec-calendar-title-short\">";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["title_short"]) ? $context["title_short"] : null), "html", null, true);
        echo "</span>
</a>
";
    }

    public function getTemplateName()
    {
        return "datepicker_link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  50 => 11,  44 => 8,  39 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <a*/
/* 	class="ai1ec-minical-trigger ai1ec-btn ai1ec-btn-sm ai1ec-btn-default*/
/*     ai1ec-tooltip-trigger"*/
/* 	{% for attribute, value in attributes %}*/
/* 		{{ attribute }}="{{ value }}"*/
/* 	{% endfor %}*/
/* 	{{ data_type | raw }}*/
/* 	title="{{ text_date }}"*/
/* 	>*/
/* 	<i class="ai1ec-fa ai1ec-fa-calendar-o ai1ec-fa-fw ai1ec-fa-lg"></i>*/
/*   <span class="ai1ec-calendar-title">{{ title }}</span>*/
/*   <span class="ai1ec-calendar-title-short">{{ title_short }}</span>*/
/* </a>*/
/* */
