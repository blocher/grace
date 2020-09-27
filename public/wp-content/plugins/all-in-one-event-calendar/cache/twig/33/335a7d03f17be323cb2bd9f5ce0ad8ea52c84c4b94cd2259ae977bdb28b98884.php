<?php

/* setting/select.twig */
class __TwigTemplate_857b0d98c41d8301ef89e939e8b9a88036474b50458b79906562df7c6e65fded extends Twig_Template
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
        echo "<label class=\"ai1ec-control-label ";
        if ( !(isset($context["stacked"]) ? $context["stacked"] : null)) {
            echo "ai1ec-col-sm-5";
        }
        echo "\"
  for=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
\t";
        // line 3
        echo (isset($context["label"]) ? $context["label"] : null);
        echo "
</label>
<div ";
        // line 5
        if ( !(isset($context["stacked"]) ? $context["stacked"] : null)) {
            echo "class=\"ai1ec-col-sm-7\"";
        }
        echo ">
  ";
        // line 6
        $context["__internal_75345acfe225074f997bb8366051cd8a3912d0596d02262b3ada702598643716"] = $this->loadTemplate("form-elements/select.twig", "setting/select.twig", 6);
        // line 7
        echo "  ";
        echo $context["__internal_75345acfe225074f997bb8366051cd8a3912d0596d02262b3ada702598643716"]->getselect((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), (isset($context["options"]) ? $context["options"] : null));
        echo "
</div>
";
        // line 9
        if ( !twig_test_empty((isset($context["fieldsets"]) ? $context["fieldsets"] : null))) {
            // line 10
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fieldsets"]) ? $context["fieldsets"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["fieldset"]) {
                // line 11
                echo "    ";
                echo $context["fieldset"];
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fieldset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "setting/select.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  51 => 10,  49 => 9,  43 => 7,  41 => 6,  35 => 5,  30 => 3,  26 => 2,  19 => 1,);
    }
}
/* <label class="ai1ec-control-label {% if not stacked %}ai1ec-col-sm-5{% endif %}"*/
/*   for="{{ id }}">*/
/* 	{{ label | raw }}*/
/* </label>*/
/* <div {% if not stacked %}class="ai1ec-col-sm-7"{% endif %}>*/
/*   {% from 'form-elements/select.twig' import select %}*/
/*   {{ select( id, name, attributes, options ) }}*/
/* </div>*/
/* {% if fieldsets is not empty %}*/
/*   {% for fieldset in fieldsets %}*/
/*     {{ fieldset | raw }}*/
/*   {% endfor %}*/
/* {% endif %}*/
/* */
