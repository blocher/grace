<?php

/* buttons.twig */
class __TwigTemplate_8a603e2ea776e8fadabc50eb94288aecc186ba0d4035c5f2379bbaec50641d2e extends Twig_Template
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
        echo "<div class=\"ai1ec-sas-actions ai1ec-btn-group ai1ec-clearfix\">
\t";
        // line 2
        echo (isset($context["action_buttons"]) ? $context["action_buttons"] : null);
        if ((isset($context["tickets_button"]) ? $context["tickets_button"] : null)) {
            // line 3
            echo "<a href=\"#\" target=\"_blank\" class=\"ai1ec-sas-action ai1ec-btn ai1ec-btn-primary
\t\t\t";
            // line 4
            if ((isset($context["single"]) ? $context["single"] : null)) {
                echo "ai1ec-btn-sm";
            } else {
                echo "ai1ec-btn-xs";
            }
            // line 5
            echo "\t\t\tai1ec-btn-sm ai1ec-sas-action-tickets\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-ticket\"></i>
\t\t\t<span class=\"ai1ec-hidden-xs\">";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["text_tickets"]) ? $context["text_tickets"] : null), "html", null, true);
            echo "</span>
\t\t</a>
\t";
        }
        // line 10
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  38 => 7,  34 => 5,  28 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="ai1ec-sas-actions ai1ec-btn-group ai1ec-clearfix">*/
/* 	{{ action_buttons | raw }}{% if tickets_button*/
/* 	%}<a href="#" target="_blank" class="ai1ec-sas-action ai1ec-btn ai1ec-btn-primary*/
/* 			{% if single %}ai1ec-btn-sm{% else %}ai1ec-btn-xs{% endif %}*/
/* 			ai1ec-btn-sm ai1ec-sas-action-tickets">*/
/* 			<i class="ai1ec-fa ai1ec-fa-ticket"></i>*/
/* 			<span class="ai1ec-hidden-xs">{{ text_tickets }}</span>*/
/* 		</a>*/
/* 	{% endif %}*/
/* </div>*/
/* */
