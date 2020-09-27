<?php

/* navigation.twig */
class __TwigTemplate_c26a9658ee5fd4698811684a6b6149df8da0c4c9c353c796bfa341bc35d12e7a extends Twig_Template
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
        echo "<div class=\"ai1ec-clearfix\">
\t";
        // line 2
        echo (isset($context["views_dropdown"]) ? $context["views_dropdown"] : null);
        echo "
\t<div class=\"ai1ec-title-buttons ai1ec-btn-toolbar\">
\t\t";
        // line 4
        echo (isset($context["before_pagination"]) ? $context["before_pagination"] : null);
        echo "
\t\t";
        // line 5
        echo (isset($context["pagination_links"]) ? $context["pagination_links"] : null);
        echo "
\t\t";
        // line 6
        echo (isset($context["after_pagination"]) ? $context["after_pagination"] : null);
        echo "
\t\t";
        // line 7
        if (array_key_exists("contribution_buttons", $context)) {
            // line 8
            echo "\t\t\t";
            echo (isset($context["contribution_buttons"]) ? $context["contribution_buttons"] : null);
            echo "
\t\t";
        }
        // line 10
        echo "\t</div>
\t";
        // line 11
        if (array_key_exists("below_toolbar", $context)) {
            // line 12
            echo "\t\t";
            echo (isset($context["below_toolbar"]) ? $context["below_toolbar"] : null);
            echo "
\t";
        }
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "navigation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  52 => 12,  50 => 11,  47 => 10,  41 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="ai1ec-clearfix">*/
/* 	{{ views_dropdown | raw }}*/
/* 	<div class="ai1ec-title-buttons ai1ec-btn-toolbar">*/
/* 		{{ before_pagination | raw }}*/
/* 		{{ pagination_links | raw }}*/
/* 		{{ after_pagination | raw }}*/
/* 		{% if contribution_buttons is defined %}*/
/* 			{{ contribution_buttons | raw }}*/
/* 		{% endif %}*/
/* 	</div>*/
/* 	{% if below_toolbar is defined %}*/
/* 		{{ below_toolbar | raw }}*/
/* 	{% endif %}*/
/* </div>*/
/* */
