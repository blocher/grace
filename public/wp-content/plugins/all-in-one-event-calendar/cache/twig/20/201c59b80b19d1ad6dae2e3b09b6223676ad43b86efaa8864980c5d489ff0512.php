<?php

/* filter-menu.twig */
class __TwigTemplate_883512e04b3077c20e47a0e35a2cc4dc27ac6be710d4f364a82dccc77e6e7d05 extends Twig_Template
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
        if ( !array_key_exists("hide_toolbar", $context)) {
            // line 2
            echo "\t";
            if (array_key_exists("ai1ec_before_filter_menu", $context)) {
                // line 3
                echo "\t\t";
                echo (isset($context["ai1ec_before_filter_menu"]) ? $context["ai1ec_before_filter_menu"] : null);
                echo "
\t";
            }
            // line 5
            echo "\t<div class=\"timely ai1ec-calendar-toolbar ai1ec-clearfix
\t";
            // line 6
            if (((((twig_test_empty((isset($context["categories"]) ? $context["categories"] : null)) && twig_test_empty(            // line 7
(isset($context["tags"]) ? $context["tags"] : null))) &&  !            // line 8
array_key_exists("additional_filters", $context)) && twig_test_empty(            // line 9
(isset($context["contribution_buttons"]) ? $context["contribution_buttons"] : null))) &&  !            // line 10
array_key_exists("additional_buttons", $context))) {
                // line 12
                echo "\t\tai1ec-hidden
\t";
            }
            // line 14
            echo "\t\">
\t\t<ul class=\"ai1ec-nav ai1ec-nav-pills ai1ec-pull-left ai1ec-filters\">
\t\t\t";
            // line 16
            echo (isset($context["categories"]) ? $context["categories"] : null);
            echo "
\t\t\t";
            // line 17
            echo (isset($context["tags"]) ? $context["tags"] : null);
            echo "
\t\t\t";
            // line 18
            if (array_key_exists("additional_filters", $context)) {
                // line 19
                echo "\t\t\t\t";
                echo (isset($context["additional_filters"]) ? $context["additional_filters"] : null);
                echo "
\t\t\t";
            }
            // line 21
            echo "\t\t</ul>
\t\t<div class=\"ai1ec-pull-right\">
\t\t";
            // line 23
            if (array_key_exists("additional_buttons", $context)) {
                // line 24
                echo "\t\t\t";
                echo (isset($context["additional_buttons"]) ? $context["additional_buttons"] : null);
                echo "
\t\t";
            }
            // line 26
            echo "\t\t</div>
\t</div>";
        }
    }

    public function getTemplateName()
    {
        return "filter-menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 26,  69 => 24,  67 => 23,  63 => 21,  57 => 19,  55 => 18,  51 => 17,  47 => 16,  43 => 14,  39 => 12,  37 => 10,  36 => 9,  35 => 8,  34 => 7,  33 => 6,  30 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if hide_toolbar is not defined %}*/
/* 	{% if ai1ec_before_filter_menu is defined %}*/
/* 		{{ ai1ec_before_filter_menu | raw }}*/
/* 	{% endif %}*/
/* 	<div class="timely ai1ec-calendar-toolbar ai1ec-clearfix*/
/* 	{% if categories         is empty       and*/
/* 		tags                 is empty       and*/
/* 		additional_filters   is not defined and*/
/* 		contribution_buttons is empty       and*/
/* 		additional_buttons   is not defined*/
/* 		%}*/
/* 		ai1ec-hidden*/
/* 	{% endif %}*/
/* 	">*/
/* 		<ul class="ai1ec-nav ai1ec-nav-pills ai1ec-pull-left ai1ec-filters">*/
/* 			{{ categories | raw }}*/
/* 			{{ tags | raw }}*/
/* 			{% if additional_filters is defined %}*/
/* 				{{ additional_filters | raw }}*/
/* 			{% endif %}*/
/* 		</ul>*/
/* 		<div class="ai1ec-pull-right">*/
/* 		{% if additional_buttons is defined %}*/
/* 			{{ additional_buttons | raw }}*/
/* 		{% endif %}*/
/* 		</div>*/
/* 	</div>{# /.ai1ec-calendar-toolbar #}*/
/* {% endif %}{# hide_toolbar #}*/
