<?php

/* setting/textarea.twig */
class __TwigTemplate_90a20e6a2c8be9efdfc167335d89b31b0a9058692951264149ddf72fc9a29948 extends Twig_Template
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
        echo "<label class=\"ai1ec-col-sm-12\" for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
\t";
        // line 2
        echo (isset($context["label"]) ? $context["label"] : null);
        echo "
</label>
<div class=\"ai1ec-col-sm-12\">
\t";
        // line 5
        if (array_key_exists("append", $context)) {
            // line 6
            echo "\t\t<div class=\"ai1ec-input-group\">
\t";
        }
        // line 8
        echo "
\t";
        // line 9
        $context["__internal_694059a911787c2b0396978b492b94e990e2ca56b94d3981859b36fa088213ff"] = $this->loadTemplate("form-elements/textarea.twig", "setting/textarea.twig", 9);
        // line 10
        echo "\t";
        ob_start();
        // line 11
        echo "\t";
        echo $context["__internal_694059a911787c2b0396978b492b94e990e2ca56b94d3981859b36fa088213ff"]->gettextarea((isset($context["id"]) ? $context["id"] : null), (isset($context["id"]) ? $context["id"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["input_args"]) ? $context["input_args"] : null));
        echo "

\t";
        // line 13
        if (array_key_exists("append", $context)) {
            // line 14
            echo "\t\t\t<span class=\"ai1ec-input-group-addon\">";
            echo twig_escape_filter($this->env, (isset($context["append"]) ? $context["append"] : null), "html", null, true);
            echo "</span>
\t\t</div>
\t";
        }
        // line 17
        echo "\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 18
        echo "</div>

";
        // line 20
        if (array_key_exists("help", $context)) {
            // line 21
            echo "\t<div class=\"ai1ec-col-sm-12 ai1ec-help-block\">";
            echo (isset($context["help"]) ? $context["help"] : null);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "setting/textarea.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 21,  66 => 20,  62 => 18,  59 => 17,  52 => 14,  50 => 13,  44 => 11,  41 => 10,  39 => 9,  36 => 8,  32 => 6,  30 => 5,  24 => 2,  19 => 1,);
    }
}
/* <label class="ai1ec-col-sm-12" for="{{ id }}">*/
/* 	{{ label | raw }}*/
/* </label>*/
/* <div class="ai1ec-col-sm-12">*/
/* 	{% if append is defined %}*/
/* 		<div class="ai1ec-input-group">*/
/* 	{% endif %}*/
/* */
/* 	{% from 'form-elements/textarea.twig' import textarea %}*/
/* 	{% spaceless %}*/
/* 	{{ textarea( id, id, value, input_args ) }}*/
/* */
/* 	{% if append is defined %}*/
/* 			<span class="ai1ec-input-group-addon">{{ append }}</span>*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	{% endspaceless %}*/
/* </div>*/
/* */
/* {% if help is defined %}*/
/* 	<div class="ai1ec-col-sm-12 ai1ec-help-block">{{ help | raw }}</div>*/
/* {% endif %}*/
/* */
