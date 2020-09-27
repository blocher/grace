<?php

/* subscribe-buttons.twig */
class __TwigTemplate_9f43f80e48f7bfe9c6dd66b11cb3741c938f055ff138953111a442000272737f extends Twig_Template
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
        $context["alignment"] = (((isset($context["alignment"]) ? $context["alignment"] : null)) ? ((isset($context["alignment"]) ? $context["alignment"] : null)) : ("left"));
        // line 2
        $context["placement"] = (((isset($context["placement"]) ? $context["placement"] : null)) ? ((isset($context["placement"]) ? $context["placement"] : null)) : ("down"));
        // line 3
        $context["alignment2"] = ((("left" == (isset($context["alignment"]) ? $context["alignment"] : null))) ? ("right") : ("left"));
        // line 4
        $context["button_classes"] = (((isset($context["button_classes"]) ? $context["button_classes"] : null)) ? ((isset($context["button_classes"]) ? $context["button_classes"] : null)) : ("ai1ec-btn-sm"));
        // line 5
        echo "<div class=\"ai1ec-subscribe-dropdown ai1ec-dropdown";
        if (((isset($context["placement"]) ? $context["placement"] : null) == "up")) {
            echo " ai1ec-dropup";
        }
        echo " ai1ec-btn
\tai1ec-btn-default ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["button_classes"]) ? $context["button_classes"] : null), "html_attr");
        echo "\">
\t<span role=\"button\" class=\"ai1ec-dropdown-toggle ai1ec-subscribe\"
\t\t\tdata-toggle=\"ai1ec-dropdown\">
\t\t<i class=\"ai1ec-fa ai1ec-icon-rss ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t<span class=\"ai1ec-hidden-xs\">
\t\t\t";
        // line 11
        if ( !twig_test_empty((isset($context["subscribe_label"]) ? $context["subscribe_label"] : null))) {
            // line 12
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["subscribe_label"]) ? $context["subscribe_label"] : null), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 14
            echo "\t\t\t\t";
            if ((isset($context["is_filtered"]) ? $context["is_filtered"] : null)) {
                // line 15
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["text_filtered"]) ? $context["text_filtered"] : null), "html", null, true);
                echo "
\t\t\t\t";
            } else {
                // line 17
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["text_subscribe"]) ? $context["text_subscribe"] : null), "html", null, true);
                echo "
\t\t\t\t";
            }
            // line 19
            echo "\t\t\t";
        }
        // line 20
        echo "\t\t\t<span class=\"ai1ec-caret\"></span>
\t\t</span>
\t</span>
\t";
        // line 23
        $context["url"] = (twig_replace_filter((isset($context["export_url"]) ? $context["export_url"] : null), array("webcal://" => "http://")) . (isset($context["url_args"]) ? $context["url_args"] : null));
        // line 24
        echo "\t";
        $context["url_no_html"] = (twig_replace_filter((isset($context["export_url_no_html"]) ? $context["export_url_no_html"] : null), array("webcal://" => "http://")) . (isset($context["url_args"]) ? $context["url_args"] : null));
        // line 25
        echo "\t<ul class=\"ai1ec-dropdown-menu ai1ec-pull-";
        echo twig_escape_filter($this->env, (isset($context["alignment2"]) ? $context["alignment2"] : null), "html", null, true);
        echo "\" role=\"menu\">
\t\t<li>
\t\t\t<a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\" target=\"_blank\"
\t\t\t\tdata-placement=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["alignment"]) ? $context["alignment"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "title", array()), "timely", array()), "html", null, true);
        echo "\"
\t\t\t\thref=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html_attr");
        echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-lg ai1ec-fa-fw ai1ec-icon-timely\"></i>
\t\t\t\t";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "label", array()), "timely", array()), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\" target=\"_blank\"
\t\t\t  data-placement=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["alignment"]) ? $context["alignment"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "title", array()), "google", array()), "html", null, true);
        echo "\"
\t\t\t  href=\"http://www.google.com/calendar/render?cid=";
        // line 37
        echo twig_escape_filter($this->env, twig_urlencode_filter((isset($context["url_no_html"]) ? $context["url_no_html"] : null)), "html_attr");
        echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-icon-google ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t\t\t";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "label", array()), "google", array()), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\" target=\"_blank\"
\t\t\t  data-placement=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["alignment"]) ? $context["alignment"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "title", array()), "outlook", array()), "html", null, true);
        echo "\"
\t\t\t  href=\"";
        // line 45
        echo twig_escape_filter($this->env, ((isset($context["export_url_no_html"]) ? $context["export_url_no_html"] : null) . (isset($context["url_args"]) ? $context["url_args"] : null)), "html_attr");
        echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-icon-windows ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t\t\t";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "label", array()), "outlook", array()), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\" target=\"_blank\"
\t\t\t  data-placement=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["alignment"]) ? $context["alignment"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "title", array()), "apple", array()), "html", null, true);
        echo "\"
\t\t\t  href=\"";
        // line 53
        echo twig_escape_filter($this->env, ((isset($context["export_url_no_html"]) ? $context["export_url_no_html"] : null) . (isset($context["url_args"]) ? $context["url_args"] : null)), "html_attr");
        echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-icon-apple ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t\t\t";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "label", array()), "apple", array()), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t";
        // line 59
        $context["export_url_no_html_http"] = twig_replace_filter((isset($context["export_url_no_html"]) ? $context["export_url_no_html"] : null), array("webcal://" => "http://"));
        // line 60
        echo "\t\t\t<a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\"
\t\t\t  data-placement=\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["alignment"]) ? $context["alignment"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "title", array()), "plaintext", array()), "html", null, true);
        echo "\"
\t\t\t  href=\"";
        // line 62
        echo twig_escape_filter($this->env, ((isset($context["export_url_no_html_http"]) ? $context["export_url_no_html_http"] : null) . (isset($context["url_args"]) ? $context["url_args"] : null)), "html_attr");
        echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-icon-calendar ai1ec-fa-fw\"></i>
\t\t\t\t";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "label", array()), "plaintext", array()), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\"
\t\t\t  data-placement=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["alignment"]) ? $context["alignment"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "title", array()), "xml", array()), "html", null, true);
        echo "\"
\t\t\t  href=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html_attr");
        echo "&xml=true\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-file-text ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t\t\t";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["text"]) ? $context["text"] : null), "label", array()), "xml", array()), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t</ul>
</div>

";
        // line 78
        if ((isset($context["show_get_calendar"]) ? $context["show_get_calendar"] : null)) {
            // line 79
            echo "\t<a href=\"http://time.ly\" target=\"_blank\"
\t\tclass=\"ai1ec-btn ai1ec-btn-default ai1ec-get-calendar
\t\t\t";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["button_classes"]) ? $context["button_classes"] : null), "html_attr");
            echo "\">
\t\t<small class=\"ai1ec-fa-stack ai1ec-text-info ai1ec-fa-fw\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-square ai1ec-fa-stack-2x\"></i>
\t\t\t<i class=\"ai1ec-fa ai1ec-icon-timely ai1ec-fa-stack-1x ai1ec-fa-inverse ai1ec-fa-lg\"></i>
\t\t</small>
\t\t<span class=\"ai1ec-hidden-xs\">";
            // line 86
            echo twig_escape_filter($this->env, (isset($context["text_get_calendar"]) ? $context["text_get_calendar"] : null), "html", null, true);
            echo "</span>
\t</a>
";
        }
    }

    public function getTemplateName()
    {
        return "subscribe-buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 86,  210 => 81,  206 => 79,  204 => 78,  195 => 72,  190 => 70,  184 => 69,  176 => 64,  171 => 62,  165 => 61,  162 => 60,  160 => 59,  153 => 55,  148 => 53,  142 => 52,  134 => 47,  129 => 45,  123 => 44,  115 => 39,  110 => 37,  104 => 36,  96 => 31,  91 => 29,  85 => 28,  78 => 25,  75 => 24,  73 => 23,  68 => 20,  65 => 19,  59 => 17,  53 => 15,  50 => 14,  44 => 12,  42 => 11,  34 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set alignment = alignment ? alignment : 'left' %}*/
/* {% set placement = placement ? placement : 'down' %}*/
/* {% set alignment2 = 'left' == alignment ? 'right' : 'left' %}*/
/* {% set button_classes = button_classes ? button_classes : 'ai1ec-btn-sm' %}*/
/* <div class="ai1ec-subscribe-dropdown ai1ec-dropdown{% if placement == 'up' %} ai1ec-dropup{% endif %} ai1ec-btn*/
/* 	ai1ec-btn-default {{ button_classes | e('html_attr') }}">*/
/* 	<span role="button" class="ai1ec-dropdown-toggle ai1ec-subscribe"*/
/* 			data-toggle="ai1ec-dropdown">*/
/* 		<i class="ai1ec-fa ai1ec-icon-rss ai1ec-fa-lg ai1ec-fa-fw"></i>*/
/* 		<span class="ai1ec-hidden-xs">*/
/* 			{% if subscribe_label is not empty %}*/
/* 				{{ subscribe_label }}*/
/* 			{% else %}*/
/* 				{% if is_filtered %}*/
/* 					{{ text_filtered }}*/
/* 				{% else %}*/
/* 					{{ text_subscribe }}*/
/* 				{% endif %}*/
/* 			{% endif %}*/
/* 			<span class="ai1ec-caret"></span>*/
/* 		</span>*/
/* 	</span>*/
/* 	{% set url = export_url | replace( {"webcal://": "http://"} ) ~ url_args %}*/
/* 	{% set url_no_html = export_url_no_html | replace( {"webcal://": "http://"} ) ~ url_args %}*/
/* 	<ul class="ai1ec-dropdown-menu ai1ec-pull-{{ alignment2 }}" role="menu">*/
/* 		<li>*/
/* 			<a class="ai1ec-tooltip-trigger ai1ec-tooltip-auto" target="_blank"*/
/* 				data-placement="{{ alignment }}" title="{{ text.title.timely }}"*/
/* 				href="{{ url | e('html_attr') }}">*/
/* 				<i class="ai1ec-fa ai1ec-fa-lg ai1ec-fa-fw ai1ec-icon-timely"></i>*/
/* 				{{ text.label.timely }}*/
/* 			</a>*/
/* 		</li>*/
/* 		<li>*/
/* 			<a class="ai1ec-tooltip-trigger ai1ec-tooltip-auto" target="_blank"*/
/* 			  data-placement="{{ alignment }}" title="{{ text.title.google }}"*/
/* 			  href="http://www.google.com/calendar/render?cid={{ url_no_html | url_encode | e('html_attr') }}">*/
/* 				<i class="ai1ec-fa ai1ec-icon-google ai1ec-fa-lg ai1ec-fa-fw"></i>*/
/* 				{{ text.label.google }}*/
/* 			</a>*/
/* 		</li>*/
/* 		<li>*/
/* 			<a class="ai1ec-tooltip-trigger ai1ec-tooltip-auto" target="_blank"*/
/* 			  data-placement="{{ alignment }}" title="{{ text.title.outlook }}"*/
/* 			  href="{{ ( export_url_no_html ~ url_args ) | e('html_attr') }}">*/
/* 				<i class="ai1ec-fa ai1ec-icon-windows ai1ec-fa-lg ai1ec-fa-fw"></i>*/
/* 				{{ text.label.outlook }}*/
/* 			</a>*/
/* 		</li>*/
/* 		<li>*/
/* 			<a class="ai1ec-tooltip-trigger ai1ec-tooltip-auto" target="_blank"*/
/* 			  data-placement="{{ alignment }}" title="{{ text.title.apple }}"*/
/* 			  href="{{ ( export_url_no_html ~ url_args ) | e('html_attr') }}">*/
/* 				<i class="ai1ec-fa ai1ec-icon-apple ai1ec-fa-lg ai1ec-fa-fw"></i>*/
/* 				{{ text.label.apple }}*/
/* 			</a>*/
/* 		</li>*/
/* 		<li>*/
/* 			{% set export_url_no_html_http = export_url_no_html | replace( {"webcal://": "http://"} ) %}*/
/* 			<a class="ai1ec-tooltip-trigger ai1ec-tooltip-auto"*/
/* 			  data-placement="{{ alignment }}" title="{{ text.title.plaintext }}"*/
/* 			  href="{{ ( export_url_no_html_http ~ url_args ) | e('html_attr') }}">*/
/* 				<i class="ai1ec-fa ai1ec-icon-calendar ai1ec-fa-fw"></i>*/
/* 				{{ text.label.plaintext }}*/
/* 			</a>*/
/* 		</li>*/
/* 		<li>*/
/* 			<a class="ai1ec-tooltip-trigger ai1ec-tooltip-auto"*/
/* 			  data-placement="{{ alignment }}" title="{{ text.title.xml }}"*/
/* 			  href="{{ url | e('html_attr') }}&xml=true">*/
/* 				<i class="ai1ec-fa ai1ec-fa-file-text ai1ec-fa-lg ai1ec-fa-fw"></i>*/
/* 				{{ text.label.xml }}*/
/* 			</a>*/
/* 		</li>*/
/* 	</ul>*/
/* </div>*/
/* */
/* {% if show_get_calendar %}*/
/* 	<a href="http://time.ly" target="_blank"*/
/* 		class="ai1ec-btn ai1ec-btn-default ai1ec-get-calendar*/
/* 			{{ button_classes | e('html_attr') }}">*/
/* 		<small class="ai1ec-fa-stack ai1ec-text-info ai1ec-fa-fw">*/
/* 			<i class="ai1ec-fa ai1ec-fa-square ai1ec-fa-stack-2x"></i>*/
/* 			<i class="ai1ec-fa ai1ec-icon-timely ai1ec-fa-stack-1x ai1ec-fa-inverse ai1ec-fa-lg"></i>*/
/* 		</small>*/
/* 		<span class="ai1ec-hidden-xs">{{ text_get_calendar }}</span>*/
/* 	</a>*/
/* {% endif %}*/
/* */
