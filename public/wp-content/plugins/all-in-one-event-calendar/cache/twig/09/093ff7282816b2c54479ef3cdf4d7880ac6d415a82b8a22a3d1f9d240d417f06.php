<?php

/* setting/embedding.twig */
class __TwigTemplate_f67515afdb0af88e2209182caff776c481b983d42355fbed97f41de1a1ff2520 extends Twig_Template
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
        echo "<div class=\"ai1ec-col-sm-12\">
<div id=\"ai1ec-embedding\">
\t<div class=\"ai1ec-well ai1ec-prose\">
\t\t<p>";
        // line 5
        echo (isset($context["text_insert_shortcode"]) ? $context["text_insert_shortcode"] : null);
        echo "</p>
\t\t<ul>
\t\t\t<li>";
        // line 7
        echo (isset($context["text_month_view"]) ? $context["text_month_view"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec view=\"monthly\"]</code></li>
\t\t\t<li>";
        // line 8
        echo (isset($context["text_week_view"]) ? $context["text_week_view"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec view=\"weekly\"]</code></li>
\t\t\t<li>";
        // line 9
        echo (isset($context["text_day_view"]) ? $context["text_day_view"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec view=\"oneday\"]</code></li>
\t\t\t<li>";
        // line 10
        echo (isset($context["text_agenda_view"]) ? $context["text_agenda_view"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec view=\"agenda\"]</code></li>

\t\t\t";
        // line 12
        echo (isset($context["viewing_events_shortcodes"]) ? $context["viewing_events_shortcodes"] : null);
        echo "

\t\t\t<li><em>";
        // line 14
        echo (isset($context["text_general_form"]) ? $context["text_general_form"] : null);
        echo "</em> ";
        echo (isset($context["text_other_view"]) ? $context["text_other_view"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec view=\"someother\"]</code></li>
\t\t\t<li>";
        // line 15
        echo (isset($context["text_default_view"]) ? $context["text_default_view"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec]</code></li>
\t\t</ul>
\t\t<p>
\t\t\t<span class=\"ai1ec-text-muted\">";
        // line 18
        echo (isset($context["text_optional"]) ? $context["text_optional"] : null);
        echo "</span>
\t\t\t";
        // line 19
        echo (isset($context["text_filter_label"]) ? $context["text_filter_label"] : null);
        echo "
\t\t</p>
\t\t<ul>
\t\t\t<li>";
        // line 22
        echo (isset($context["text_filter_category"]) ? $context["text_filter_category"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec cat_name=\"";
        echo (isset($context["text_filter_category_1"]) ? $context["text_filter_category_1"] : null);
        echo "\"]</code></li>
\t\t\t<li>";
        // line 23
        echo (isset($context["text_filter_category_comma"]) ? $context["text_filter_category_comma"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec cat_name=\"";
        echo (isset($context["text_filter_category_2"]) ? $context["text_filter_category_2"] : null);
        echo ",";
        echo (isset($context["text_filter_category_3"]) ? $context["text_filter_category_3"] : null);
        echo "\"]</code></li>
\t\t\t<li>";
        // line 24
        echo (isset($context["text_filter_category_id"]) ? $context["text_filter_category_id"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec cat_id=\"1\"]</code></li>
\t\t\t<li>";
        // line 25
        echo (isset($context["text_filter_category_id_comma"]) ? $context["text_filter_category_id_comma"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec cat_id=\"1,2\"]</code></li>

\t\t\t<li>";
        // line 27
        echo (isset($context["text_filter_tag"]) ? $context["text_filter_tag"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec tag_name=\"";
        echo (isset($context["text_filter_tag_1"]) ? $context["text_filter_tag_1"] : null);
        echo "\"]</code></li>
\t\t\t<li>";
        // line 28
        echo (isset($context["text_filter_tag_comma"]) ? $context["text_filter_tag_comma"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec tag_name=\"";
        echo (isset($context["text_filter_tag_2"]) ? $context["text_filter_tag_2"] : null);
        echo ",";
        echo (isset($context["text_filter_tag_3"]) ? $context["text_filter_tag_3"] : null);
        echo "\"]</code></li>
\t\t\t<li>";
        // line 29
        echo (isset($context["text_filter_tag_id"]) ? $context["text_filter_tag_id"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec tag_id=\"1\"]</code></li>
\t\t\t<li>";
        // line 30
        echo (isset($context["text_filter_tag_id_comma"]) ? $context["text_filter_tag_id_comma"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec tag_id=\"1,2\"]</code></li>

\t\t\t<li>";
        // line 32
        echo (isset($context["text_filter_post_id"]) ? $context["text_filter_post_id"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec post_id=\"1\"]</code></li>
\t\t\t<li>";
        // line 33
        echo (isset($context["text_filter_post_id_comma"]) ? $context["text_filter_post_id_comma"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec post_id=\"1,2\"]</code></li>
\t\t\t<li>";
        // line 34
        echo (isset($context["text_events_limit"]) ? $context["text_events_limit"] : null);
        echo " <code class=\"ai1ec-autoselect\">[ai1ec events_limit=\"5\"]</code></li>
\t\t</ul>
\t\t<div class=\"ai1ec-alert ai1ec-alert-warning\">
\t\t\t<strong>";
        // line 37
        echo (isset($context["text_warning"]) ? $context["text_warning"] : null);
        echo "</strong>
\t\t\t";
        // line 38
        echo (isset($context["text_single_calendar"]) ? $context["text_single_calendar"] : null);
        echo "
\t\t</div>
\t</div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "setting/embedding.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 38,  133 => 37,  127 => 34,  123 => 33,  119 => 32,  114 => 30,  110 => 29,  102 => 28,  96 => 27,  91 => 25,  87 => 24,  79 => 23,  73 => 22,  67 => 19,  63 => 18,  57 => 15,  51 => 14,  46 => 12,  41 => 10,  37 => 9,  33 => 8,  29 => 7,  24 => 5,  19 => 2,);
    }
}
/* {% autoescape false %}*/
/* <div class="ai1ec-col-sm-12">*/
/* <div id="ai1ec-embedding">*/
/* 	<div class="ai1ec-well ai1ec-prose">*/
/* 		<p>{{ text_insert_shortcode }}</p>*/
/* 		<ul>*/
/* 			<li>{{ text_month_view }} <code class="ai1ec-autoselect">[ai1ec view="monthly"]</code></li>*/
/* 			<li>{{ text_week_view }} <code class="ai1ec-autoselect">[ai1ec view="weekly"]</code></li>*/
/* 			<li>{{ text_day_view }} <code class="ai1ec-autoselect">[ai1ec view="oneday"]</code></li>*/
/* 			<li>{{ text_agenda_view }} <code class="ai1ec-autoselect">[ai1ec view="agenda"]</code></li>*/
/* */
/* 			{{ viewing_events_shortcodes }}*/
/* */
/* 			<li><em>{{ text_general_form }}</em> {{ text_other_view }} <code class="ai1ec-autoselect">[ai1ec view="someother"]</code></li>*/
/* 			<li>{{ text_default_view }} <code class="ai1ec-autoselect">[ai1ec]</code></li>*/
/* 		</ul>*/
/* 		<p>*/
/* 			<span class="ai1ec-text-muted">{{ text_optional }}</span>*/
/* 			{{ text_filter_label }}*/
/* 		</p>*/
/* 		<ul>*/
/* 			<li>{{ text_filter_category }} <code class="ai1ec-autoselect">[ai1ec cat_name="{{ text_filter_category_1 }}"]</code></li>*/
/* 			<li>{{ text_filter_category_comma }} <code class="ai1ec-autoselect">[ai1ec cat_name="{{ text_filter_category_2 }},{{ text_filter_category_3 }}"]</code></li>*/
/* 			<li>{{ text_filter_category_id }} <code class="ai1ec-autoselect">[ai1ec cat_id="1"]</code></li>*/
/* 			<li>{{ text_filter_category_id_comma }} <code class="ai1ec-autoselect">[ai1ec cat_id="1,2"]</code></li>*/
/* */
/* 			<li>{{ text_filter_tag }} <code class="ai1ec-autoselect">[ai1ec tag_name="{{ text_filter_tag_1 }}"]</code></li>*/
/* 			<li>{{ text_filter_tag_comma }} <code class="ai1ec-autoselect">[ai1ec tag_name="{{ text_filter_tag_2 }},{{ text_filter_tag_3 }}"]</code></li>*/
/* 			<li>{{ text_filter_tag_id }} <code class="ai1ec-autoselect">[ai1ec tag_id="1"]</code></li>*/
/* 			<li>{{ text_filter_tag_id_comma }} <code class="ai1ec-autoselect">[ai1ec tag_id="1,2"]</code></li>*/
/* */
/* 			<li>{{ text_filter_post_id }} <code class="ai1ec-autoselect">[ai1ec post_id="1"]</code></li>*/
/* 			<li>{{ text_filter_post_id_comma }} <code class="ai1ec-autoselect">[ai1ec post_id="1,2"]</code></li>*/
/* 			<li>{{ text_events_limit }} <code class="ai1ec-autoselect">[ai1ec events_limit="5"]</code></li>*/
/* 		</ul>*/
/* 		<div class="ai1ec-alert ai1ec-alert-warning">*/
/* 			<strong>{{ text_warning }}</strong>*/
/* 			{{ text_single_calendar }}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* </div>*/
/* {% endautoescape %}*/
/* */
