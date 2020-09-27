<?php

/* bootstrap_tabs.twig */
class __TwigTemplate_ba812cdeeac627ab3dd241cba933845c25fcbec80315451ea52db69e0e3b29cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'extra_html' => array($this, 'block_extra_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((isset($context["stacked"]) ? $context["stacked"] : null)) {
            echo "<div class=\"ai1ec-row\"><div class=\"ai1ec-col-sm-3\">";
        }
        // line 2
        echo "
<ul class=\"ai1ec-nav
\t";
        // line 4
        if ((isset($context["stacked"]) ? $context["stacked"] : null)) {
            // line 5
            echo "\t\tai1ec-nav-pills ai1ec-nav-stacked
\t";
        } else {
            // line 7
            echo "\t\tai1ec-nav-tabs
\t";
        }
        // line 8
        echo "\">

\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["data"]) {
            if ($this->getAttribute($context["data"], "name", array(), "any", true, true)) {
                // line 11
                echo "\t\t";
                if ($this->getAttribute($context["data"], "items", array(), "any", true, true)) {
                    // line 12
                    echo "\t\t\t<li class=\"ai1ec-dropdown\">
\t\t\t\t<a href=\"#\" data-toggle=\"ai1ec-dropdown\">
\t\t\t\t\t";
                    // line 14
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
                    echo " <i class=\"ai1ec-fa ai1ec-fa-caret-down\"></i>
\t\t\t\t</a>
\t\t\t\t<ul class=\"ai1ec-dropdown-menu\">
\t\t\t\t\t";
                    // line 17
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["data"], "items", array()));
                    foreach ($context['_seq'] as $context["drop_id"] => $context["drop_name"]) {
                        // line 18
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#ai1ec-";
                        // line 19
                        echo twig_escape_filter($this->env, $context["drop_id"], "html", null, true);
                        echo "\" data-toggle=\"ai1ec-tab\">
\t\t\t\t\t\t\t\t";
                        // line 20
                        echo twig_escape_filter($this->env, $context["drop_name"], "html", null, true);
                        echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['drop_id'], $context['drop_name'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 24
                    echo "\t\t\t\t</ul>
\t\t\t</li>
\t\t";
                } else {
                    // line 27
                    echo "\t\t\t<li>
\t\t\t\t<a href=\"#ai1ec-";
                    // line 28
                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                    echo "\" data-toggle=\"ai1ec-tab\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
                    echo "</a>
\t\t\t</li>
\t\t";
                }
                // line 31
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
</ul>

";
        // line 35
        if ((isset($context["stacked"]) ? $context["stacked"] : null)) {
            echo "</div><div class=\"ai1ec-col-sm-9\">";
        }
        // line 36
        echo "
<div class=\"ai1ec-tab-content ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["content_class"]) ? $context["content_class"] : null), "html", null, true);
        echo "\">
\t";
        // line 38
        echo (isset($context["pre_tabs_markup"]) ? $context["pre_tabs_markup"] : null);
        echo "
\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["data"]) {
            // line 40
            echo "\t\t<div class=\"ai1ec-tab-pane\" id=\"ai1ec-";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">
\t\t\t";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["data"], "elements", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 42
                echo "\t\t\t\t";
                echo $this->getAttribute($context["element"], "html", array());
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</div>

";
        // line 48
        $this->displayBlock('extra_html', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        if ((isset($context["stacked"]) ? $context["stacked"] : null)) {
            echo "</div></div>";
        }
    }

    // line 48
    public function block_extra_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "bootstrap_tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 48,  162 => 51,  159 => 50,  157 => 48,  153 => 46,  146 => 44,  137 => 42,  133 => 41,  128 => 40,  124 => 39,  120 => 38,  116 => 37,  113 => 36,  109 => 35,  104 => 32,  97 => 31,  89 => 28,  86 => 27,  81 => 24,  71 => 20,  67 => 19,  64 => 18,  60 => 17,  54 => 14,  50 => 12,  47 => 11,  42 => 10,  38 => 8,  34 => 7,  30 => 5,  28 => 4,  24 => 2,  20 => 1,);
    }
}
/* {% if stacked %}<div class="ai1ec-row"><div class="ai1ec-col-sm-3">{% endif %}*/
/* */
/* <ul class="ai1ec-nav*/
/* 	{% if stacked %}*/
/* 		ai1ec-nav-pills ai1ec-nav-stacked*/
/* 	{% else %}*/
/* 		ai1ec-nav-tabs*/
/* 	{% endif %}">*/
/* */
/* 	{% for id, data in tabs if data.name is defined %}*/
/* 		{% if data.items is defined %}*/
/* 			<li class="ai1ec-dropdown">*/
/* 				<a href="#" data-toggle="ai1ec-dropdown">*/
/* 					{{ data.name }} <i class="ai1ec-fa ai1ec-fa-caret-down"></i>*/
/* 				</a>*/
/* 				<ul class="ai1ec-dropdown-menu">*/
/* 					{% for drop_id, drop_name in data.items %}*/
/* 						<li>*/
/* 							<a href="#ai1ec-{{ drop_id }}" data-toggle="ai1ec-tab">*/
/* 								{{ drop_name }}*/
/* 							</a>*/
/* 						</li>*/
/* 					{% endfor %}*/
/* 				</ul>*/
/* 			</li>*/
/* 		{% else %}*/
/* 			<li>*/
/* 				<a href="#ai1ec-{{ id }}" data-toggle="ai1ec-tab">{{ data.name }}</a>*/
/* 			</li>*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* */
/* </ul>*/
/* */
/* {% if stacked %}</div><div class="ai1ec-col-sm-9">{% endif %}*/
/* */
/* <div class="ai1ec-tab-content {{ content_class }}">*/
/* 	{{ pre_tabs_markup | raw}}*/
/* 	{% for id, data in tabs %}*/
/* 		<div class="ai1ec-tab-pane" id="ai1ec-{{ id }}">*/
/* 			{% for element in data.elements %}*/
/* 				{{ element.html | raw }}*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 	{% endfor %}*/
/* </div>*/
/* */
/* {% block extra_html %}*/
/* {% endblock %}*/
/* */
/* {% if stacked %}</div></div>{% endif %}*/
/* */
