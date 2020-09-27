<?php

/* calendar.twig */
class __TwigTemplate_616e76cc76050da6b7477d30eda9f30ba799e9a531745e4ee17fa5aeacdc4bcc extends Twig_Template
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
        // line 2
        echo "<!-- START All-in-One Event Calendar Plugin - Version ";
        echo (isset($context["version"]) ? $context["version"] : null);
        echo " -->
<div id=\"ai1ec-container\"
\t class=\"ai1ec-main-container ";
        // line 4
        echo (isset($context["ai1ec_calendar_classes"]) ? $context["ai1ec_calendar_classes"] : null);
        echo "\">
\t<!-- AI1EC_PAGE_CONTENT_PLACEHOLDER -->
\t<div id=\"ai1ec-calendar\" class=\"timely ai1ec-calendar\">
\t\t";
        // line 7
        if (array_key_exists("ai1ec_above_calendar", $context)) {
            // line 8
            echo "\t\t\t";
            echo (isset($context["ai1ec_above_calendar"]) ? $context["ai1ec_above_calendar"] : null);
            echo "
\t\t";
        }
        // line 10
        echo "\t\t";
        echo (isset($context["filter_menu"]) ? $context["filter_menu"] : null);
        echo "
\t\t<div id=\"ai1ec-calendar-view-container\"
\t\t\t class=\"ai1ec-calendar-view-container\">
\t\t\t<div id=\"ai1ec-calendar-view-loading\"
\t\t\t\t class=\"ai1ec-loading ai1ec-calendar-view-loading\"></div>
\t\t\t<div id=\"ai1ec-calendar-view\" class=\"ai1ec-calendar-view\">
\t\t\t\t";
        // line 16
        echo (isset($context["view"]) ? $context["view"] : null);
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ai1ec-subscribe-container ai1ec-pull-right ai1ec-btn-group\">
\t\t\t";
        // line 20
        echo (isset($context["subscribe_buttons"]) ? $context["subscribe_buttons"] : null);
        echo "
\t\t</div>
\t\t";
        // line 22
        echo (isset($context["after_view"]) ? $context["after_view"] : null);
        echo "
\t</div><!-- /.timely -->
</div>
";
        // line 25
        if ( !twig_test_empty((isset($context["inline_js_calendar"]) ? $context["inline_js_calendar"] : null))) {
            // line 26
            echo "\t<script type=\"text/javascript\">";
            echo (isset($context["inline_js_calendar"]) ? $context["inline_js_calendar"] : null);
            echo "</script>
";
        }
        // line 28
        echo "<!-- END All-in-One Event Calendar Plugin -->
";
        // line 30
        echo "

";
    }

    public function getTemplateName()
    {
        return "calendar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 30,  75 => 28,  69 => 26,  67 => 25,  61 => 22,  56 => 20,  49 => 16,  39 => 10,  33 => 8,  31 => 7,  25 => 4,  19 => 2,);
    }
}
/* {% autoescape false %}*/
/* <!-- START All-in-One Event Calendar Plugin - Version {{ version }} -->*/
/* <div id="ai1ec-container"*/
/* 	 class="ai1ec-main-container {{ ai1ec_calendar_classes }}">*/
/* 	<!-- AI1EC_PAGE_CONTENT_PLACEHOLDER -->*/
/* 	<div id="ai1ec-calendar" class="timely ai1ec-calendar">*/
/* 		{% if ai1ec_above_calendar is defined %}*/
/* 			{{ ai1ec_above_calendar }}*/
/* 		{% endif %}*/
/* 		{{ filter_menu }}*/
/* 		<div id="ai1ec-calendar-view-container"*/
/* 			 class="ai1ec-calendar-view-container">*/
/* 			<div id="ai1ec-calendar-view-loading"*/
/* 				 class="ai1ec-loading ai1ec-calendar-view-loading"></div>*/
/* 			<div id="ai1ec-calendar-view" class="ai1ec-calendar-view">*/
/* 				{{ view }}*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="ai1ec-subscribe-container ai1ec-pull-right ai1ec-btn-group">*/
/* 			{{ subscribe_buttons }}*/
/* 		</div>*/
/* 		{{ after_view }}*/
/* 	</div><!-- /.timely -->*/
/* </div>*/
/* {% if inline_js_calendar is not empty %}*/
/* 	<script type="text/javascript">{{ inline_js_calendar }}</script>*/
/* {% endif %}*/
/* <!-- END All-in-One Event Calendar Plugin -->*/
/* {% endautoescape %}*/
/* */
/* */
/* */
