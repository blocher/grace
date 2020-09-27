<?php

/* oneday.twig */
class __TwigTemplate_80a93406510212711a2ed2f383258c2c74d6b9abee586718990906a54b9bc645 extends Twig_Template
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
        echo (isset($context["navigation"]) ? $context["navigation"] : null);
        echo "

<table class=\"ai1ec-";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "-view-original";
        if ((isset($context["has_product_buy_button"]) ? $context["has_product_buy_button"] : null)) {
            echo " ai1ec-has-product-buy-button";
        }
        echo "\">
\t<thead>
\t\t<tr>
\t\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cell_array"]) ? $context["cell_array"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["date"] => $context["day"]) {
            // line 7
            echo "\t\t\t\t<th class=\"ai1ec-weekday
\t\t\t\t\t";
            // line 8
            if ( !twig_test_empty($this->getAttribute($context["day"], "today", array()))) {
                echo "ai1ec-today";
            }
            echo "\">
\t\t\t\t\t";
            // line 10
            echo "\t\t\t\t\t";
            if (((isset($context["show_reveal_button"]) ? $context["show_reveal_button"] : null) && $this->getAttribute($context["loop"], "last", array()))) {
                // line 11
                echo "\t\t\t\t\t\t<div class=\"ai1ec-reveal-full-day\">
\t\t\t\t\t\t\t<button class=\"ai1ec-btn ai1ec-btn-info ai1ec-btn-xs
\t\t\t\t\t\t\t\t\tai1ec-tooltip-trigger\"
\t\t\t\t\t\t\t\tdata-placement=\"left\"
\t\t\t\t\t\t\t\ttitle=\"";
                // line 15
                echo twig_escape_filter($this->env, (isset($context["text_full_day"]) ? $context["text_full_day"] : null), "html_attr");
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-expand\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 20
            echo "\t\t\t\t\t<a class=\"ai1ec-load-view\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["day"], "href", array()), "html_attr");
            echo "\"
\t\t\t\t\t\t";
            // line 21
            echo (isset($context["data_type"]) ? $context["data_type"] : null);
            echo ">
\t\t\t\t\t\t<span class=\"ai1ec-weekday-date\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["day"], "day", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t<span class=\"ai1ec-weekday-day\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["day"], "weekday", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</th>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['date'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t</tr>
\t\t<tr>
\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cell_array"]) ? $context["cell_array"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 30
            echo "\t\t\t\t<td class=\"ai1ec-allday-events
\t\t\t\t\t";
            // line 31
            if ( !twig_test_empty($this->getAttribute($context["day"], "today", array()))) {
                echo "ai1ec-today";
            }
            echo "\">

\t\t\t\t\t";
            // line 33
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 34
                echo "\t\t\t\t\t\t<div class=\"ai1ec-allday-label\">";
                echo twig_escape_filter($this->env, (isset($context["text_all_day"]) ? $context["text_all_day"] : null), "html", null, true);
                echo "</div>
\t\t\t\t\t";
            }
            // line 36
            echo "
\t\t\t\t\t";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["day"], "allday", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 38
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "permalink", array()), "html_attr");
                echo "\"
\t\t\t\t\t\t\tdata-instance-id=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "instance_id", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\tclass=\"ai1ec-event-container ai1ec-load-event ai1ec-popup-trigger
\t\t\t\t\t\t\t\tai1ec-event-id-";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "post_id", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\tai1ec-event-instance-id-";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "instance_id", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\tai1ec-allday
\t\t\t\t\t\t\t\t";
                // line 44
                if ($this->getAttribute($context["event"], "is_multiday", array())) {
                    echo "ai1ec-multiday";
                }
                echo "\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t<div class=\"ai1ec-event\"
\t\t\t\t\t\t\t\t style=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "color_style", array()), "html_attr");
                echo "\"
\t\t\t\t\t\t\t\t ";
                // line 48
                if ( !twig_test_empty($this->getAttribute($context["event"], "ticket_url", array()))) {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t\tdata-ticket-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "ticket_url", array()), "html_attr");
                    echo "\"
\t\t\t\t\t\t\t\t ";
                }
                // line 50
                echo ">
\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-title\">
\t\t\t\t\t\t\t\t\t";
                // line 52
                echo $this->getAttribute($context["event"], "filtered_title", array());
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 53
                if (((isset($context["show_location_in_title"]) ? $context["show_location_in_title"] : null) && $this->getAttribute($context["event"], "venue", array()))) {
                    // line 54
                    echo "\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t\t\t\t\t\t\t\t>";
                    // line 55
                    echo twig_escape_filter($this->env, sprintf((isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null), $this->getAttribute($context["event"], "venue", array())), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<div class=\"ai1ec-popover ai1ec-popup ai1ec-popup-in-";
                // line 61
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                echo "-view
\t\t\t\t\t\t\t\t\tai1ec-event-id-";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "post_id", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\tai1ec-event-instance-id-";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "instance_id", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 64
                if ( !twig_test_empty($this->getAttribute($context["event"], "ticket_url", array()))) {
                    // line 65
                    echo "\t\t\t\t\t\t\t\t\t\tai1ec-has-tickets-button
\t\t\t\t\t\t\t\t\t";
                }
                // line 66
                echo "\">
\t\t\t\t\t\t\t";
                // line 67
                if ($this->getAttribute($context["event"], "category_colors", array())) {
                    // line 68
                    echo "\t\t\t\t\t\t\t\t<div class=\"ai1ec-color-swatches\">";
                    echo $this->getAttribute($context["event"], "category_colors", array());
                    echo "</div>
\t\t\t\t\t\t\t";
                }
                // line 70
                echo "\t\t\t\t\t\t\t<span class=\"ai1ec-popup-title\">
\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\t\thref=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "permalink", array()), "html_attr");
                echo "\"
\t\t\t\t\t\t\t\t\t>";
                // line 73
                echo $this->getAttribute($context["event"], "filtered_title", array());
                echo "</a>
\t\t\t\t\t\t\t\t";
                // line 74
                if (((isset($context["show_location_in_title"]) ? $context["show_location_in_title"] : null) && $this->getAttribute($context["event"], "venue", array()))) {
                    // line 75
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t\t\t\t\t\t\t>";
                    // line 76
                    echo twig_escape_filter($this->env, sprintf((isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null), $this->getAttribute($context["event"], "venue", array())), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 78
                echo "\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t";
                // line 80
                if ($this->getAttribute($context["event"], "edit_post_link", array())) {
                    // line 81
                    echo "\t\t\t\t\t\t\t\t<a class=\"post-edit-link\"
\t\t\t\t\t\t\t\t\thref=\"";
                    // line 82
                    echo $this->getAttribute($context["event"], "edit_post_link", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i> ";
                    // line 83
                    echo twig_escape_filter($this->env, (isset($context["text_edit"]) ? $context["text_edit"] : null), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                }
                // line 86
                echo "
\t\t\t\t\t\t\t<div class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t";
                // line 88
                echo $this->getAttribute($context["event"], "popup_timespan", array());
                echo "
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<a class=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\thref=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "permalink", array()), "html_attr");
                echo "\">
\t\t\t\t\t\t\t\t";
                // line 93
                echo $this->getAttribute($context["event"], "avatar_not_wrapped", array());
                echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                // line 95
                echo (isset($context["action_buttons"]) ? $context["action_buttons"] : null);
                echo "
\t\t\t\t\t\t\t";
                // line 96
                if ($this->getAttribute($context["event"], "post_excerpt", array())) {
                    // line 97
                    echo "\t\t\t\t\t\t\t\t<div class=\"ai1ec-popup-excerpt\">";
                    echo $this->getAttribute($context["event"], "post_excerpt", array());
                    echo "</div>
\t\t\t\t\t\t\t";
                }
                // line 99
                echo "\t\t\t\t\t\t</div>

\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo " ";
            // line 102
            echo "
\t\t\t\t</td>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo " ";
        // line 105
        echo "\t\t</tr>

\t</thead>
\t<tbody>
\t\t<tr class=\"ai1ec-";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\">
\t\t\t";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cell_array"]) ? $context["cell_array"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 111
            echo "\t\t\t\t<td ";
            if ($this->getAttribute($context["day"], "today", array())) {
                echo "class=\"ai1ec-today\"";
            }
            echo ">

\t\t\t\t\t";
            // line 113
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 114
                echo "\t\t\t\t\t\t<div class=\"ai1ec-grid-container\">
\t\t\t\t\t\t\t";
                // line 115
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["hours"]) ? $context["hours"] : null));
                foreach ($context['_seq'] as $context["h"] => $context["hour"]) {
                    // line 116
                    echo "\t\t\t\t\t\t\t\t<div class=\"ai1ec-hour-marker
\t\t\t\t\t\t\t\t\t";
                    // line 117
                    if ((($context["h"] >= 8) && ($context["h"] < 18))) {
                        echo "ai1ec-business-hour";
                    }
                    echo "\"
\t\t\t\t\t\t\t\t\tstyle=\"top: ";
                    // line 118
                    echo twig_escape_filter($this->env, ($context["h"] * 60), "html", null, true);
                    echo "px;\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t";
                    // line 120
                    echo $context["hour"];
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    // line 123
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 3));
                    foreach ($context['_seq'] as $context["_key"] => $context["quarter"]) {
                        // line 124
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-quarter-marker\"
\t\t\t\t\t\t\t\t\t\tstyle=\"top: ";
                        // line 125
                        echo twig_escape_filter($this->env, (($context["h"] * 60) + ($context["quarter"] * 15)), "html", null, true);
                        echo "px;\"></div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quarter'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 127
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['h'], $context['hour'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["day"], "today", array()) || (isset($context["show_now"]) ? $context["show_now"] : null))) {
                    // line 129
                    echo "\t\t\t\t\t\t\t\t<div class=\"ai1ec-now-marker\" style=\"top: ";
                    echo twig_escape_filter($this->env, (isset($context["now_top"]) ? $context["now_top"] : null), "html", null, true);
                    echo "px;\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t";
                    // line 131
                    echo twig_escape_filter($this->env, (isset($context["text_now_label"]) ? $context["text_now_label"] : null), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["now_text"]) ? $context["now_text"] : null), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 135
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 137
            echo "
\t\t\t\t\t<div class=\"ai1ec-day\">

\t\t\t\t\t\t";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["day"], "notallday", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["day_array"]) {
                // line 141
                echo "\t\t\t\t\t\t\t";
                $context["event"] = $this->getAttribute($context["day_array"], "event", array());
                // line 142
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink", array()), "html_attr");
                echo "\"
\t\t\t\t\t\t\t\tdata-instance-id=\"";
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "instance_id", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\tclass=\"ai1ec-event-container ai1ec-load-event ai1ec-popup-trigger
\t\t\t\t\t\t\t\t\tai1ec-event-id-";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_id", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\tai1ec-event-instance-id-";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "instance_id", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 147
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "start_truncated", array())) {
                    echo "ai1ec-start-truncated";
                }
                // line 148
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "end_truncated", array())) {
                    echo "ai1ec-end-truncated";
                }
                // line 149
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "is_multiday", array())) {
                    echo "ai1ec-multiday";
                }
                echo "\"
\t\t\t\t\t\t\t\tstyle=\"top: ";
                // line 150
                echo twig_escape_filter($this->env, $this->getAttribute($context["day_array"], "top", array()), "html", null, true);
                echo "px;
\t\t\t\t\t\t\t\t\theight: ";
                // line 151
                echo twig_escape_filter($this->env, $this->getAttribute($context["day_array"], "height", array()), "html", null, true);
                echo "px;
\t\t\t\t\t\t\t\t\tleft: ";
                // line 152
                echo twig_escape_filter($this->env, (($this->getAttribute($context["day_array"], "indent", array()) * (isset($context["indent_multiplier"]) ? $context["indent_multiplier"] : null)) + (isset($context["indent_offset"]) ? $context["indent_offset"] : null)), "html", null, true);
                echo "px;
\t\t\t\t\t\t\t\t\t";
                // line 153
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "color_style", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 154
                $context["faded_color"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "faded_color", array());
                // line 155
                echo "\t\t\t\t\t\t\t\t\t";
                $context["rgba_color"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "rgba_color", array());
                // line 156
                echo "\t\t\t\t\t\t\t\t\t";
                if ((isset($context["faded_color"]) ? $context["faded_color"] : null)) {
                    // line 157
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context["rgba1"] = sprintf((isset($context["rgba_color"]) ? $context["rgba_color"] : null), "0.05");
                    // line 158
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context["rgba3"] = sprintf((isset($context["rgba_color"]) ? $context["rgba_color"] : null), "0.3");
                    // line 159
                    echo "\t\t\t\t\t\t\t\t\t\tborder: 1px solid ";
                    echo twig_escape_filter($this->env, (isset($context["faded_color"]) ? $context["faded_color"] : null), "html", null, true);
                    echo ";
\t\t\t\t\t\t\t\t\t\tborder-color: ";
                    // line 160
                    echo twig_escape_filter($this->env, sprintf((isset($context["rgba_color"]) ? $context["rgba_color"] : null), "0.5"), "html", null, true);
                    echo ";
\t\t\t\t\t\t\t\t\t\tbackground-image: -webkit-linear-gradient( top, ";
                    // line 161
                    echo twig_escape_filter($this->env, (isset($context["rgba1"]) ? $context["rgba1"] : null), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, (isset($context["rgba3"]) ? $context["rgba3"] : null), "html", null, true);
                    echo " 50px );
\t\t\t\t\t\t\t\t\t\tbackground-image: -moz-linear-gradient( top, ";
                    // line 162
                    echo twig_escape_filter($this->env, (isset($context["rgba1"]) ? $context["rgba1"] : null), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, (isset($context["rgba3"]) ? $context["rgba3"] : null), "html", null, true);
                    echo " 50px );
\t\t\t\t\t\t\t\t\t\tbackground-image: -ms-linear-gradient( top, ";
                    // line 163
                    echo twig_escape_filter($this->env, (isset($context["rgba1"]) ? $context["rgba1"] : null), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, (isset($context["rgba3"]) ? $context["rgba3"] : null), "html", null, true);
                    echo " 50px );
\t\t\t\t\t\t\t\t\t\tbackground-image: -o-linear-gradient( top, ";
                    // line 164
                    echo twig_escape_filter($this->env, (isset($context["rgba1"]) ? $context["rgba1"] : null), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, (isset($context["rgba3"]) ? $context["rgba3"] : null), "html", null, true);
                    echo " 50px );
\t\t\t\t\t\t\t\t\t\tbackground-image: linear-gradient( top, ";
                    // line 165
                    echo twig_escape_filter($this->env, (isset($context["rgba1"]) ? $context["rgba1"] : null), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, (isset($context["rgba3"]) ? $context["rgba3"] : null), "html", null, true);
                    echo " 50px );
\t\t\t\t\t\t\t\t\t";
                }
                // line 167
                echo "\t\t\t\t\t\t\t\t\t\">

\t\t\t\t\t\t\t\t";
                // line 169
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "start_truncated", array())) {
                    // line 170
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-start-truncator\">◤</div>
\t\t\t\t\t\t\t\t";
                }
                // line 172
                echo "\t\t\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "end_truncated", array())) {
                    // line 173
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-end-truncator\">◢</div>
\t\t\t\t\t\t\t\t";
                }
                // line 175
                echo "
\t\t\t\t\t\t\t\t<div class=\"ai1ec-event\"
\t\t\t\t\t\t\t\t\t";
                // line 177
                if ( !twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url", array()))) {
                    // line 178
                    echo "\t\t\t\t\t\t\t\t\t\tdata-ticket-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url", array()), "html_attr");
                    echo "\"
\t\t\t\t\t\t\t\t\t";
                }
                // line 179
                echo ">
\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t\t";
                // line 181
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "short_start_time", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-title\">
\t\t\t\t\t\t\t\t\t\t";
                // line 184
                echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_title", array());
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 185
                if (((isset($context["show_location_in_title"]) ? $context["show_location_in_title"] : null) && $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue", array()))) {
                    // line 186
                    echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t\t\t\t\t\t\t\t\t>";
                    // line 187
                    echo twig_escape_filter($this->env, sprintf((isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null), $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue", array())), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 189
                echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<div class=\"ai1ec-popover ai1ec-popup ai1ec-popup-in-";
                // line 194
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                echo "-view
\t\t\t\t\t\t\t\t\t\tai1ec-event-id-";
                // line 195
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_id", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\tai1ec-event-instance-id-";
                // line 196
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "instance_id", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 197
                if ( !twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url", array()))) {
                    // line 198
                    echo "\t\t\t\t\t\t\t\t\t\t\tai1ec-has-tickets-button
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 199
                echo "\">
\t\t\t\t\t\t\t\t";
                // line 200
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "category_colors", array())) {
                    // line 201
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-color-swatches\">";
                    echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "category_colors", array());
                    echo "</div>
\t\t\t\t\t\t\t\t";
                }
                // line 203
                echo "\t\t\t\t\t\t\t\t<span class=\"ai1ec-popup-title\">
\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\t\t\thref=\"";
                // line 205
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink", array()), "html_attr");
                echo "\"
\t\t\t\t\t\t\t\t\t\t>";
                // line 206
                echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_title", array());
                echo "</a>
\t\t\t\t\t\t\t\t\t";
                // line 207
                if (((isset($context["show_location_in_title"]) ? $context["show_location_in_title"] : null) && $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue", array()))) {
                    // line 208
                    echo "\t\t\t\t\t\t\t\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t\t\t\t\t\t\t\t>";
                    // line 209
                    echo twig_escape_filter($this->env, sprintf((isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null), $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue", array())), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t";
                }
                // line 211
                echo "\t\t\t\t\t\t\t\t\t";
                if (((isset($context["is_ticket_button_enabled"]) ? $context["is_ticket_button_enabled"] : null) && $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url", array()))) {
                    // line 212
                    echo "\t\t\t\t\t\t\t\t\t\t<a class=\"ai1ec-pull-right ai1ec-btn ai1ec-btn-primary ai1ec-btn-xs
\t\t\t\t\t\t\t\t\t\t\tai1ec-buy-tickets\" target=\"_blank\"
\t\t\t\t\t\t\t\t\t\t\thref=\"";
                    // line 214
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url", array()), "html_attr");
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t>";
                    // line 215
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url_label", array()), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 217
                echo "\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t";
                // line 219
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "edit_post_link", array())) {
                    // line 220
                    echo "\t\t\t\t\t\t\t\t\t<a class=\"post-edit-link\"
\t\t\t\t\t\t\t\t\t\thref=\"";
                    // line 221
                    echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "edit_post_link", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i> ";
                    // line 222
                    echo twig_escape_filter($this->env, (isset($context["text_edit"]) ? $context["text_edit"] : null), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                }
                // line 225
                echo "
\t\t\t\t\t\t\t\t<div class=\"ai1ec-event-time\">
\t\t\t\t\t\t\t\t\t";
                // line 227
                echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "popup_timespan", array());
                echo "
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<a class=\"ai1ec-load-event\"
\t\t\t\t\t\t\t\t\thref=\"";
                // line 231
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink", array()), "html_attr");
                echo "\">
\t\t\t\t\t\t\t\t\t";
                // line 232
                echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "avatar_not_wrapped", array());
                echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                // line 234
                echo (isset($context["action_buttons"]) ? $context["action_buttons"] : null);
                echo "
\t\t\t\t\t\t\t\t";
                // line 235
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_excerpt", array())) {
                    // line 236
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"ai1ec-popup-excerpt\">";
                    echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_excerpt", array());
                    echo "</div>
\t\t\t\t\t\t\t\t";
                }
                // line 238
                echo "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day_array'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 240
            echo " ";
            // line 241
            echo "\t\t\t\t\t</div>

\t\t\t\t</td>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        echo " ";
        // line 245
        echo "\t\t</tr>
\t</tbody>

</table>

<div class=\"ai1ec-pull-left\">";
        // line 250
        echo (isset($context["pagination_links"]) ? $context["pagination_links"] : null);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "oneday.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  784 => 250,  777 => 245,  775 => 244,  758 => 241,  756 => 240,  748 => 238,  742 => 236,  740 => 235,  736 => 234,  731 => 232,  727 => 231,  720 => 227,  716 => 225,  710 => 222,  706 => 221,  703 => 220,  701 => 219,  697 => 217,  692 => 215,  688 => 214,  684 => 212,  681 => 211,  676 => 209,  673 => 208,  671 => 207,  667 => 206,  663 => 205,  659 => 203,  653 => 201,  651 => 200,  648 => 199,  644 => 198,  642 => 197,  638 => 196,  634 => 195,  630 => 194,  623 => 189,  618 => 187,  615 => 186,  613 => 185,  609 => 184,  603 => 181,  599 => 179,  593 => 178,  591 => 177,  587 => 175,  583 => 173,  580 => 172,  576 => 170,  574 => 169,  570 => 167,  563 => 165,  557 => 164,  551 => 163,  545 => 162,  539 => 161,  535 => 160,  530 => 159,  527 => 158,  524 => 157,  521 => 156,  518 => 155,  516 => 154,  512 => 153,  508 => 152,  504 => 151,  500 => 150,  493 => 149,  488 => 148,  484 => 147,  480 => 146,  476 => 145,  471 => 143,  466 => 142,  463 => 141,  459 => 140,  454 => 137,  450 => 135,  441 => 131,  435 => 129,  432 => 128,  426 => 127,  418 => 125,  415 => 124,  411 => 123,  405 => 120,  400 => 118,  394 => 117,  391 => 116,  387 => 115,  384 => 114,  382 => 113,  374 => 111,  357 => 110,  353 => 109,  347 => 105,  345 => 104,  329 => 102,  327 => 101,  319 => 99,  313 => 97,  311 => 96,  307 => 95,  302 => 93,  298 => 92,  291 => 88,  287 => 86,  281 => 83,  277 => 82,  274 => 81,  272 => 80,  268 => 78,  263 => 76,  260 => 75,  258 => 74,  254 => 73,  250 => 72,  246 => 70,  240 => 68,  238 => 67,  235 => 66,  231 => 65,  229 => 64,  225 => 63,  221 => 62,  217 => 61,  211 => 57,  206 => 55,  203 => 54,  201 => 53,  197 => 52,  193 => 50,  187 => 49,  185 => 48,  181 => 47,  173 => 44,  168 => 42,  164 => 41,  159 => 39,  154 => 38,  150 => 37,  147 => 36,  141 => 34,  139 => 33,  132 => 31,  129 => 30,  112 => 29,  108 => 27,  90 => 23,  86 => 22,  82 => 21,  77 => 20,  69 => 15,  63 => 11,  60 => 10,  54 => 8,  51 => 7,  34 => 6,  24 => 3,  19 => 1,);
    }
}
/* {{ navigation | raw }}*/
/* */
/* <table class="ai1ec-{{ type }}-view-original{% if has_product_buy_button %} ai1ec-has-product-buy-button{% endif %}">*/
/* 	<thead>*/
/* 		<tr>*/
/* 			{% for date, day in cell_array %}*/
/* 				<th class="ai1ec-weekday*/
/* 					{% if day.today is not empty %}ai1ec-today{% endif %}">*/
/* 					{# Display Reveal button in last cell only #}*/
/* 					{% if show_reveal_button and loop.last %}*/
/* 						<div class="ai1ec-reveal-full-day">*/
/* 							<button class="ai1ec-btn ai1ec-btn-info ai1ec-btn-xs*/
/* 									ai1ec-tooltip-trigger"*/
/* 								data-placement="left"*/
/* 								title="{{ text_full_day | e('html_attr') }}">*/
/* 								<i class="ai1ec-fa ai1ec-fa-expand"></i>*/
/* 							</button>*/
/* 						</div>*/
/* 					{% endif %}*/
/* 					<a class="ai1ec-load-view" href="{{ day.href | e( 'html_attr' ) }}"*/
/* 						{{ data_type | raw }}>*/
/* 						<span class="ai1ec-weekday-date">{{ day.day }}</span>*/
/* 						<span class="ai1ec-weekday-day">{{ day.weekday }}</span>*/
/* 					</a>*/
/* 				</th>*/
/* 			{% endfor %}*/
/* 		</tr>*/
/* 		<tr>*/
/* 			{% for day in cell_array %}*/
/* 				<td class="ai1ec-allday-events*/
/* 					{% if day.today is not empty %}ai1ec-today{% endif %}">*/
/* */
/* 					{% if loop.first %}*/
/* 						<div class="ai1ec-allday-label">{{ text_all_day }}</div>*/
/* 					{% endif %}*/
/* */
/* 					{% for event in day.allday %}*/
/* 						<a href="{{ event.permalink | e( 'html_attr' ) }}"*/
/* 							data-instance-id="{{ event.instance_id }}"*/
/* 							class="ai1ec-event-container ai1ec-load-event ai1ec-popup-trigger*/
/* 								ai1ec-event-id-{{ event.post_id }}*/
/* 								ai1ec-event-instance-id-{{ event.instance_id }}*/
/* 								ai1ec-allday*/
/* 								{% if event.is_multiday %}ai1ec-multiday{% endif %}"*/
/* 							>*/
/* 							<div class="ai1ec-event"*/
/* 								 style="{{ event.color_style | e( 'html_attr' ) }}"*/
/* 								 {% if event.ticket_url is not empty %}*/
/* 									data-ticket-url="{{ event.ticket_url | e( 'html_attr' ) }}"*/
/* 								 {% endif %}>*/
/* 								<span class="ai1ec-event-title">*/
/* 									{{ event.filtered_title | raw }}*/
/* 									{% if show_location_in_title and event.venue %}*/
/* 										<span class="ai1ec-event-location"*/
/* 											>{{ text_venue_separator | format( event.venue ) }}</span>*/
/* 									{% endif %}*/
/* 								</span>*/
/* 							</div>*/
/* 						</a>*/
/* */
/* 						<div class="ai1ec-popover ai1ec-popup ai1ec-popup-in-{{ type }}-view*/
/* 									ai1ec-event-id-{{ event.post_id }}*/
/* 									ai1ec-event-instance-id-{{ event.instance_id }}*/
/* 									{% if event.ticket_url is not empty %}*/
/* 										ai1ec-has-tickets-button*/
/* 									{% endif %}">*/
/* 							{% if event.category_colors %}*/
/* 								<div class="ai1ec-color-swatches">{{ event.category_colors | raw }}</div>*/
/* 							{% endif %}*/
/* 							<span class="ai1ec-popup-title">*/
/* 								<a class="ai1ec-load-event"*/
/* 									href="{{ event.permalink | e( 'html_attr' ) }}"*/
/* 									>{{ event.filtered_title | raw }}</a>*/
/* 								{% if show_location_in_title and event.venue %}*/
/* 									<span class="ai1ec-event-location"*/
/* 										>{{ text_venue_separator | format( event.venue ) }}</span>*/
/* 								{% endif %}*/
/* 							</span>*/
/* */
/* 							{% if event.edit_post_link %}*/
/* 								<a class="post-edit-link"*/
/* 									href="{{ event.edit_post_link | raw }}">*/
/* 									<i class="ai1ec-fa ai1ec-fa-pencil"></i> {{ text_edit }}*/
/* 								</a>*/
/* 							{% endif %}*/
/* */
/* 							<div class="ai1ec-event-time">*/
/* 								{{ event.popup_timespan | raw }}*/
/* 							</div>*/
/* */
/* 							<a class="ai1ec-load-event"*/
/* 								href="{{ event.permalink | e('html_attr') }}">*/
/* 								{{ event.avatar_not_wrapped | raw }}*/
/* 							</a>*/
/* 							{{ action_buttons | raw }}*/
/* 							{% if event.post_excerpt %}*/
/* 								<div class="ai1ec-popup-excerpt">{{ event.post_excerpt | raw }}</div>*/
/* 							{% endif %}*/
/* 						</div>*/
/* */
/* 					{% endfor %} {# event in day.allday #}*/
/* */
/* 				</td>*/
/* 			{% endfor %} {# day in cell_array #}*/
/* 		</tr>*/
/* */
/* 	</thead>*/
/* 	<tbody>*/
/* 		<tr class="ai1ec-{{ type }}">*/
/* 			{% for day in cell_array %}*/
/* 				<td {% if day.today %}class="ai1ec-today"{% endif %}>*/
/* */
/* 					{% if loop.first %}*/
/* 						<div class="ai1ec-grid-container">*/
/* 							{% for h, hour in hours %}*/
/* 								<div class="ai1ec-hour-marker*/
/* 									{% if h >= 8 and h < 18 %}ai1ec-business-hour{% endif %}"*/
/* 									style="top: {{ h * 60 }}px;">*/
/* 									<div>*/
/* 										{{ hour | raw }}*/
/* 									</div>*/
/* 								</div>*/
/* 								{% for quarter in 1..3 %}*/
/* 									<div class="ai1ec-quarter-marker"*/
/* 										style="top: {{ h * 60 + quarter * 15 }}px;"></div>*/
/* 								{% endfor %}*/
/* 							{% endfor %}*/
/* 							{% if day.today or show_now %}*/
/* 								<div class="ai1ec-now-marker" style="top: {{ now_top }}px;">*/
/* 									<div>*/
/* 										{{ text_now_label }} {{ now_text }}*/
/* 									</div>*/
/* 								</div>*/
/* 							{% endif %}*/
/* 						</div>*/
/* 					{% endif %}*/
/* */
/* 					<div class="ai1ec-day">*/
/* */
/* 						{% for day_array in day.notallday %}*/
/* 							{% set event = day_array.event %}*/
/* 							<a href="{{ event.permalink | e( 'html_attr' ) }}"*/
/* 								data-instance-id="{{ event.instance_id }}"*/
/* 								class="ai1ec-event-container ai1ec-load-event ai1ec-popup-trigger*/
/* 									ai1ec-event-id-{{ event.post_id }}*/
/* 									ai1ec-event-instance-id-{{ event.instance_id }}*/
/* 									{% if event.start_truncated %}ai1ec-start-truncated{% endif %}*/
/* 									{% if event.end_truncated %}ai1ec-end-truncated{% endif %}*/
/* 									{% if event.is_multiday %}ai1ec-multiday{% endif %}"*/
/* 								style="top: {{ day_array.top }}px;*/
/* 									height: {{ day_array.height }}px;*/
/* 									left: {{ day_array.indent * indent_multiplier + indent_offset }}px;*/
/* 									{{ event.color_style }}*/
/* 									{% set faded_color = event.faded_color %}*/
/* 									{% set rgba_color  = event.rgba_color %}*/
/* 									{% if faded_color %}*/
/* 										{% set rgba1 = rgba_color | format( '0.05' ) %}*/
/* 										{% set rgba3 = rgba_color | format( '0.3' ) %}*/
/* 										border: 1px solid {{ faded_color }};*/
/* 										border-color: {{ rgba_color | format( '0.5' ) }};*/
/* 										background-image: -webkit-linear-gradient( top, {{ rgba1 }}, {{ rgba3 }} 50px );*/
/* 										background-image: -moz-linear-gradient( top, {{ rgba1 }}, {{ rgba3 }} 50px );*/
/* 										background-image: -ms-linear-gradient( top, {{ rgba1 }}, {{ rgba3 }} 50px );*/
/* 										background-image: -o-linear-gradient( top, {{ rgba1 }}, {{ rgba3 }} 50px );*/
/* 										background-image: linear-gradient( top, {{ rgba1 }}, {{ rgba3 }} 50px );*/
/* 									{% endif %}*/
/* 									">*/
/* */
/* 								{% if event.start_truncated %}*/
/* 									<div class="ai1ec-start-truncator">◤</div>*/
/* 								{% endif %}*/
/* 								{% if event.end_truncated %}*/
/* 									<div class="ai1ec-end-truncator">◢</div>*/
/* 								{% endif %}*/
/* */
/* 								<div class="ai1ec-event"*/
/* 									{% if event.ticket_url is not empty %}*/
/* 										data-ticket-url="{{ event.ticket_url | e( 'html_attr' ) }}"*/
/* 									{% endif %}>*/
/* 									<span class="ai1ec-event-time">*/
/* 										{{ event.short_start_time }}*/
/* 									</span>*/
/* 									<span class="ai1ec-event-title">*/
/* 										{{ event.filtered_title | raw }}*/
/* 										{% if show_location_in_title and event.venue %}*/
/* 											<span class="ai1ec-event-location"*/
/* 												>{{ text_venue_separator | format( event.venue ) }}</span>*/
/* 										{% endif %}*/
/* 									</span>*/
/* 								</div>*/
/* */
/* 							</a>*/
/* */
/* 							<div class="ai1ec-popover ai1ec-popup ai1ec-popup-in-{{ type }}-view*/
/* 										ai1ec-event-id-{{ event.post_id }}*/
/* 										ai1ec-event-instance-id-{{ event.instance_id }}*/
/* 										{% if event.ticket_url is not empty %}*/
/* 											ai1ec-has-tickets-button*/
/* 										{% endif %}">*/
/* 								{% if event.category_colors %}*/
/* 									<div class="ai1ec-color-swatches">{{ event.category_colors | raw }}</div>*/
/* 								{% endif %}*/
/* 								<span class="ai1ec-popup-title">*/
/* 									<a class="ai1ec-load-event"*/
/* 										href="{{ event.permalink | e( 'html_attr' ) }}"*/
/* 										>{{ event.filtered_title | raw }}</a>*/
/* 									{% if show_location_in_title and event.venue %}*/
/* 										<span class="ai1ec-event-location"*/
/* 											>{{ text_venue_separator | format( event.venue ) }}</span>*/
/* 									{% endif %}*/
/* 									{% if is_ticket_button_enabled and event.ticket_url %}*/
/* 										<a class="ai1ec-pull-right ai1ec-btn ai1ec-btn-primary ai1ec-btn-xs*/
/* 											ai1ec-buy-tickets" target="_blank"*/
/* 											href="{{ event.ticket_url | e( 'html_attr' ) }}"*/
/* 											>{{ event.ticket_url_label }}</a>*/
/* 									{% endif %}*/
/* 								</span>*/
/* */
/* 								{% if event.edit_post_link %}*/
/* 									<a class="post-edit-link"*/
/* 										href="{{ event.edit_post_link | raw }}">*/
/* 										<i class="ai1ec-fa ai1ec-fa-pencil"></i> {{ text_edit }}*/
/* 									</a>*/
/* 								{% endif %}*/
/* */
/* 								<div class="ai1ec-event-time">*/
/* 									{{ event.popup_timespan | raw }}*/
/* 								</div>*/
/* */
/* 								<a class="ai1ec-load-event"*/
/* 									href="{{ event.permalink | e('html_attr') }}">*/
/* 									{{ event.avatar_not_wrapped | raw }}*/
/* 								</a>*/
/* 								{{ action_buttons | raw }}*/
/* 								{% if event.post_excerpt %}*/
/* 									<div class="ai1ec-popup-excerpt">{{ event.post_excerpt | raw }}</div>*/
/* 								{% endif %}*/
/* 							</div>*/
/* */
/* 						{% endfor %} {# dayarray in day.notallday #}*/
/* 					</div>*/
/* */
/* 				</td>*/
/* 			{% endfor %} {# day in cell_array #}*/
/* 		</tr>*/
/* 	</tbody>*/
/* */
/* </table>*/
/* */
/* <div class="ai1ec-pull-left">{{ pagination_links | raw }}</div>*/
/* */
