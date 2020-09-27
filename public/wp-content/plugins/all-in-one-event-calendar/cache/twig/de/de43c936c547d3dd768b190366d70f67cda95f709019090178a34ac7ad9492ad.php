<?php

/* setting/input.twig */
class __TwigTemplate_c1e90374e2f4124b9c62abd92973bddee0221d014fc0abdfdbd4c9c5c25b3cde extends Twig_Template
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
        echo "<label class=\"ai1ec-control-label ai1ec-col-sm-5\" for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
\t";
        // line 2
        echo (isset($context["label"]) ? $context["label"] : null);
        echo "
</label>
";
        // line 4
        if ((array_key_exists("append", $context) || array_key_exists("licence_valid", $context))) {
            // line 5
            echo "\t<div class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("group_class", $context)) ? (            // line 6
(isset($context["group_class"]) ? $context["group_class"] : null)) : ("ai1ec-col-lg-3 ai1ec-col-md-4 ai1ec-col-sm-5")), "html", null, true);
            echo "\">
\t\t<div class=\"ai1ec-input-group\">
";
        } else {
            // line 9
            echo "\t<div class=\"ai1ec-col-sm-7\">
";
        }
        // line 11
        echo "
\t";
        // line 12
        $context["__internal_a3b2bde7fdf6f1868b6eeaad68e5d97e86ea1b9595365f2837e09db93227dae4"] = $this->loadTemplate("form-elements/input.twig", "setting/input.twig", 12);
        // line 13
        echo "\t";
        ob_start();
        // line 14
        echo "\t";
        echo $context["__internal_a3b2bde7fdf6f1868b6eeaad68e5d97e86ea1b9595365f2837e09db93227dae4"]->getinput((isset($context["id"]) ? $context["id"] : null), (isset($context["id"]) ? $context["id"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["input_type"]) ? $context["input_type"] : null), (isset($context["input_args"]) ? $context["input_args"] : null));
        echo "


\t";
        // line 17
        if (array_key_exists("append", $context)) {
            // line 18
            echo "\t\t\t<span class=\"ai1ec-input-group-addon\">";
            echo twig_escape_filter($this->env, (isset($context["append"]) ? $context["append"] : null), "html", null, true);
            echo "</span>
\t\t</div>
\t";
        } elseif (        // line 20
array_key_exists("licence_valid", $context)) {
            // line 21
            echo "\t\t\t<span class=\"ai1ec-input-group-addon\">
\t\t\t\t<i class=\"ai1ec-fa
\t\t\t\t\t";
            // line 23
            if ((isset($context["licence_valid"]) ? $context["licence_valid"] : null)) {
                // line 24
                echo "\t\t\t\t\t\tai1ec-fa-check ai1ec-text-success
\t\t\t\t\t";
            } else {
                // line 26
                echo "\t\t\t\t\t\tai1ec-fa-times ai1ec-text-danger
\t\t\t\t\t";
            }
            // line 27
            echo "\">
\t\t\t\t</i>
\t\t\t</span>
\t\t</div>
\t";
        }
        // line 32
        echo "\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 33
        echo "</div>

";
        // line 35
        if (array_key_exists("help", $context)) {
            // line 36
            echo "\t<div class=\"ai1ec-col-sm-12 ai1ec-help-block\">";
            echo (isset($context["help"]) ? $context["help"] : null);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "setting/input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  96 => 35,  92 => 33,  89 => 32,  82 => 27,  78 => 26,  74 => 24,  72 => 23,  68 => 21,  66 => 20,  60 => 18,  58 => 17,  51 => 14,  48 => 13,  46 => 12,  43 => 11,  39 => 9,  33 => 6,  31 => 5,  29 => 4,  24 => 2,  19 => 1,);
    }
}
/* <label class="ai1ec-control-label ai1ec-col-sm-5" for="{{ id }}">*/
/* 	{{ label | raw }}*/
/* </label>*/
/* {% if append is defined or licence_valid is defined %}*/
/* 	<div class="{{ group_class is defined ?*/
/* 		group_class : 'ai1ec-col-lg-3 ai1ec-col-md-4 ai1ec-col-sm-5' }}">*/
/* 		<div class="ai1ec-input-group">*/
/* {% else %}*/
/* 	<div class="ai1ec-col-sm-7">*/
/* {% endif %}*/
/* */
/* 	{% from 'form-elements/input.twig' import input %}*/
/* 	{% spaceless %}*/
/* 	{{ input( id, id, value, input_type, input_args ) }}*/
/* */
/* */
/* 	{% if append is defined %}*/
/* 			<span class="ai1ec-input-group-addon">{{ append }}</span>*/
/* 		</div>*/
/* 	{% elseif licence_valid is defined %}*/
/* 			<span class="ai1ec-input-group-addon">*/
/* 				<i class="ai1ec-fa*/
/* 					{% if licence_valid %}*/
/* 						ai1ec-fa-check ai1ec-text-success*/
/* 					{% else %}*/
/* 						ai1ec-fa-times ai1ec-text-danger*/
/* 					{% endif %}">*/
/* 				</i>*/
/* 			</span>*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	{% endspaceless %}*/
/* </div>*/
/* */
/* {% if help is defined %}*/
/* 	<div class="ai1ec-col-sm-12 ai1ec-help-block">{{ help | raw }}</div>*/
/* {% endif %}*/
/* */
