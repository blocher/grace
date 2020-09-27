<?php

/* setting/categories-color-picker.twig */
class __TwigTemplate_102b73c37a886c9ed8c41376a080f1867de6dcb759f15f57172fc24448ce3e2b extends Twig_Template
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
        if ((isset($context["edit"]) ? $context["edit"] : null)) {
            // line 2
            echo "\t<tr class=\"form-field\">
\t\t<th scope=\"row\" valign=\"top\">
\t\t\t<label for=\"tag-color\">
\t\t\t\t";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "
\t\t\t</label>
\t\t</th>
\t\t<td>
\t\t\t<div id=\"tag-color\">
\t\t\t\t<div id=\"tag-color-background\" ";
            // line 10
            echo (isset($context["style"]) ? $context["style"] : null);
            echo "></div>
\t\t\t</div>
\t\t\t<input type=\"hidden\" name=\"tag-color-value\" id=\"tag-color-value\"
\t\t\t\tvalue=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : null), "html", null, true);
            echo "\">
\t\t\t<p class=\"description\">";
            // line 14
            echo (isset($context["description"]) ? $context["description"] : null);
            echo ".</p>
\t\t</td>
\t</tr>
";
        } else {
            // line 18
            echo "\t<div class=\"form-field\">
\t\t<label for=\"tag-color\">
\t\t\t";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "
\t\t</label>
\t\t<div id=\"tag-color\">
\t\t\t<div id=\"tag-color-background\"></div>
\t\t</div>
\t\t<input type=\"hidden\" name=\"tag-color-value\" id=\"tag-color-value\" value=\"\">
\t\t<p>";
            // line 26
            echo (isset($context["description"]) ? $context["description"] : null);
            echo ".</p>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "setting/categories-color-picker.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 26,  55 => 20,  51 => 18,  44 => 14,  40 => 13,  34 => 10,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if edit %}*/
/* 	<tr class="form-field">*/
/* 		<th scope="row" valign="top">*/
/* 			<label for="tag-color">*/
/* 				{{ label }}*/
/* 			</label>*/
/* 		</th>*/
/* 		<td>*/
/* 			<div id="tag-color">*/
/* 				<div id="tag-color-background" {{ style | raw }}></div>*/
/* 			</div>*/
/* 			<input type="hidden" name="tag-color-value" id="tag-color-value"*/
/* 				value="{{ color }}">*/
/* 			<p class="description">{{ description | raw }}.</p>*/
/* 		</td>*/
/* 	</tr>*/
/* {% else %}*/
/* 	<div class="form-field">*/
/* 		<label for="tag-color">*/
/* 			{{ label }}*/
/* 		</label>*/
/* 		<div id="tag-color">*/
/* 			<div id="tag-color-background"></div>*/
/* 		</div>*/
/* 		<input type="hidden" name="tag-color-value" id="tag-color-value" value="">*/
/* 		<p>{{ description | raw }}.</p>*/
/* 	</div>*/
/* {% endif %}*/
/* */
