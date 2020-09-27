<?php

/* add-ons-list/page.twig */
class __TwigTemplate_bb65f3b910721335bef8265d670efeadf622cc59d9a46edf288a4912b0cb018a extends Twig_Template
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
        echo "<div class=\"wrap\" id=\"ai1ec-add-ons\">
\t<h2>
\t\t";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["labels"]) ? $context["labels"] : null), "title", array()), "html", null, true);
        echo "
\t\t&nbsp;&mdash;&nbsp;<a href=\"https://time.ly/wordpress-calendar-plugin/addons/\" class=\"button-primary\" title=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["labels"]) ? $context["labels"] : null), "button_title", array()), "html_attr");
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["labels"]) ? $context["labels"] : null), "button_title", array()), "html", null, true);
        echo "</a>
\t</h2>
\t<p>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["labels"]) ? $context["labels"] : null), "paragraph_content", array()), "html", null, true);
        echo "</p>
\t";
        // line 7
        if ((isset($context["is_error"]) ? $context["is_error"] : null)) {
            // line 8
            echo "\t\t<div class=\"error\"><p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["labels"]) ? $context["labels"] : null), "error", array()), "html", null, true);
            echo "</p></div>
\t";
        } else {
            // line 10
            echo "\t\t";
            echo (isset($context["content"]) ? $context["content"] : null);
            echo "
\t";
        }
        // line 12
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "add-ons-list/page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  46 => 10,  40 => 8,  38 => 7,  34 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="wrap" id="ai1ec-add-ons">*/
/* 	<h2>*/
/* 		{{ labels.title }}*/
/* 		&nbsp;&mdash;&nbsp;<a href="https://time.ly/wordpress-calendar-plugin/addons/" class="button-primary" title="{{ labels.button_title | e("html_attr") }}" target="_blank">{{ labels.button_title }}</a>*/
/* 	</h2>*/
/* 	<p>{{ labels.paragraph_content }}</p>*/
/* 	{% if is_error %}*/
/* 		<div class="error"><p>{{ labels.error }}</p></div>*/
/* 	{% else %}*/
/* 		{{ content | raw }}*/
/* 	{% endif %}*/
/* </div>*/
