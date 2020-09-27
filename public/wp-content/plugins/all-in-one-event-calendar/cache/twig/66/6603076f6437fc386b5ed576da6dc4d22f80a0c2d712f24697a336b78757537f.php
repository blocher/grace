<?php

/* setting/enabled-views.twig */
class __TwigTemplate_8d3bab5372bffe3d93f8694e13fb165e8ec546b09213be7640afe4c64ea33f31 extends Twig_Template
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
        echo "<div class=\"ai1ec-admin-view-settings ai1ec-form-group\">
\t<label class=\"ai1ec-control-label ai1ec-col-lg-5\">";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
        echo "</label>
\t<div class=\"ai1ec-col-lg-7\">
\t\t<table class=\"ai1ec-table ai1ec-table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"row\"></th>
\t\t\t\t\t<th scope=\"col\" colspan=\"2\" class=\"ai1ec-text-center\">
\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-desktop ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t\t\t\t\t";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["text_desktop"]) ? $context["text_desktop"] : null), "html", null, true);
        echo "
\t\t\t\t\t</th>
\t\t\t\t\t<th scope=\"col\" colspan=\"2\" class=\"ai1ec-text-center\">
\t\t\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-mobile ai1ec-fa-lg ai1ec-fa-fw\"></i>
\t\t\t\t\t\t";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["text_mobile"]) ? $context["text_mobile"] : null), "html", null, true);
        echo "
\t\t\t\t\t</th>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"row\"></th>
\t\t\t\t\t<th scope=\"col\" class=\"ai1ec-text-center\"><small>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["text_enabled"]) ? $context["text_enabled"] : null), "html", null, true);
        echo "</small></th>
\t\t\t\t\t<th scope=\"col\" class=\"ai1ec-text-center\"><small>";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["text_default"]) ? $context["text_default"] : null), "html", null, true);
        echo "</small></th>
\t\t\t\t\t<th scope=\"col\" class=\"ai1ec-text-center\"><small>";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["text_enabled"]) ? $context["text_enabled"] : null), "html", null, true);
        echo "</small></th>
\t\t\t\t\t<th scope=\"col\" class=\"ai1ec-text-center\"><small>";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["text_default"]) ? $context["text_default"] : null), "html", null, true);
        echo "</small></th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["views"]) ? $context["views"] : null));
        foreach ($context['_seq'] as $context["view"] => $context["args"]) {
            // line 27
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["args"], "longname", array()), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input class=\"ai1ec-toggle-view\" type=\"checkbox\"
\t\t\t\t\t\t\t\tname=\"view_";
            // line 33
            echo twig_escape_filter($this->env, $context["view"], "html", null, true);
            echo "_enabled\" value=\"1\"
\t\t\t\t\t\t\t\t";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["args"], "enabled", array()), "html", null, true);
            echo ">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input class=\"ai1ec-toggle-default-view\" type=\"radio\"
\t\t\t\t\t\t\t\tname=\"default_calendar_view\" value=\"";
            // line 38
            echo twig_escape_filter($this->env, $context["view"], "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["args"], "default", array()), "html", null, true);
            echo ">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input class=\"ai1ec-toggle-view\" type=\"checkbox\"
\t\t\t\t\t\t\t\tname=\"view_";
            // line 43
            echo twig_escape_filter($this->env, $context["view"], "html", null, true);
            echo "_enabled_mobile\" value=\"1\"
\t\t\t\t\t\t\t\t";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["args"], "enabled_mobile", array()), "html", null, true);
            echo ">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input class=\"ai1ec-toggle-default-view\" type=\"radio\"
\t\t\t\t\t\t\t\tname=\"default_calendar_view_mobile\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, $context["view"], "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["args"], "default_mobile", array()), "html", null, true);
            echo ">
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['view'], $context['args'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "setting/enabled-views.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 53,  119 => 49,  115 => 48,  108 => 44,  104 => 43,  97 => 39,  93 => 38,  86 => 34,  82 => 33,  75 => 29,  71 => 27,  67 => 26,  60 => 22,  56 => 21,  52 => 20,  48 => 19,  40 => 14,  33 => 10,  22 => 2,  19 => 1,);
    }
}
/* <div class="ai1ec-admin-view-settings ai1ec-form-group">*/
/* 	<label class="ai1ec-control-label ai1ec-col-lg-5">{{ label }}</label>*/
/* 	<div class="ai1ec-col-lg-7">*/
/* 		<table class="ai1ec-table ai1ec-table-striped">*/
/* 			<thead>*/
/* 				<tr>*/
/* 					<th scope="row"></th>*/
/* 					<th scope="col" colspan="2" class="ai1ec-text-center">*/
/* 						<i class="ai1ec-fa ai1ec-fa-desktop ai1ec-fa-lg ai1ec-fa-fw"></i>*/
/* 						{{ text_desktop }}*/
/* 					</th>*/
/* 					<th scope="col" colspan="2" class="ai1ec-text-center">*/
/* 						<i class="ai1ec-fa ai1ec-fa-mobile ai1ec-fa-lg ai1ec-fa-fw"></i>*/
/* 						{{ text_mobile }}*/
/* 					</th>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<th scope="row"></th>*/
/* 					<th scope="col" class="ai1ec-text-center"><small>{{ text_enabled }}</small></th>*/
/* 					<th scope="col" class="ai1ec-text-center"><small>{{ text_default }}</small></th>*/
/* 					<th scope="col" class="ai1ec-text-center"><small>{{ text_enabled }}</small></th>*/
/* 					<th scope="col" class="ai1ec-text-center"><small>{{ text_default }}</small></th>*/
/* 				</tr>*/
/* 			</thead>*/
/* 			<tbody>*/
/* 				{% for view, args in views %}*/
/* 					<tr>*/
/* 						<td>*/
/* 							{{ args.longname }}*/
/* 						</td>*/
/* 						<td>*/
/* 							<input class="ai1ec-toggle-view" type="checkbox"*/
/* 								name="view_{{ view }}_enabled" value="1"*/
/* 								{{ args.enabled }}>*/
/* 						</td>*/
/* 						<td>*/
/* 							<input class="ai1ec-toggle-default-view" type="radio"*/
/* 								name="default_calendar_view" value="{{ view }}"*/
/* 								{{ args.default }}>*/
/* 						</td>*/
/* 						<td>*/
/* 							<input class="ai1ec-toggle-view" type="checkbox"*/
/* 								name="view_{{ view }}_enabled_mobile" value="1"*/
/* 								{{ args.enabled_mobile }}>*/
/* 						</td>*/
/* 						<td>*/
/* 							<input class="ai1ec-toggle-default-view" type="radio"*/
/* 								name="default_calendar_view_mobile" value="{{ view }}"*/
/* 								{{ args.default_mobile }}>*/
/* 						</td>*/
/* 					</tr>*/
/* 				{% endfor %}*/
/* 			</tbody>*/
/* 		</table>*/
/* 	</div>*/
/* </div>*/
/* */
