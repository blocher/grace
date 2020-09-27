<?php

/* setting/checkbox.twig */
class __TwigTemplate_98d5f7b9dca8ab8de0a97793ddd3e4ba913ba02ab30c9bb1adcc77559c28cb7e extends Twig_Template
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
        echo "<div class=\"ai1ec-col-sm-12\">
\t<div class=\"checkbox\">
\t\t<label for=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
\t\t\t";
        // line 4
        $context["__internal_db7f55f6d9c65a38251409f82437f6e68ee83c086c99999d0d6da2dbb7b956cc"] = $this->loadTemplate("form-elements/input.twig", "setting/checkbox.twig", 4);
        // line 5
        echo "\t\t\t";
        echo $context["__internal_db7f55f6d9c65a38251409f82437f6e68ee83c086c99999d0d6da2dbb7b956cc"]->getinput((isset($context["id"]) ? $context["id"] : null), (isset($context["id"]) ? $context["id"] : null), 1, "checkbox", (isset($context["attributes"]) ? $context["attributes"] : null));
        echo "

\t\t\t";
        // line 7
        echo $this->getAttribute((isset($context["renderer"]) ? $context["renderer"] : null), "label", array());
        echo "

\t\t</label>
\t</div>
\t";
        // line 11
        if ($this->getAttribute((isset($context["renderer"]) ? $context["renderer"] : null), "help", array(), "any", true, true)) {
            // line 12
            echo "\t\t<div class=\"ai1ec-help-block\">";
            echo $this->getAttribute((isset($context["renderer"]) ? $context["renderer"] : null), "help", array());
            echo "</div>
\t";
        }
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "setting/checkbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  44 => 12,  42 => 11,  35 => 7,  29 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="ai1ec-col-sm-12">*/
/* 	<div class="checkbox">*/
/* 		<label for="{{ id }}">*/
/* 			{% from 'form-elements/input.twig' import input %}*/
/* 			{{ input( id, id, 1, 'checkbox', attributes ) }}*/
/* */
/* 			{{ renderer.label | raw }}*/
/* */
/* 		</label>*/
/* 	</div>*/
/* 	{% if renderer.help is defined %}*/
/* 		<div class="ai1ec-help-block">{{ renderer.help | raw }}</div>*/
/* 	{% endif %}*/
/* </div>*/
/* */
