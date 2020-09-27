<?php

/* form-elements/textarea.twig */
class __TwigTemplate_5ce160d47e780c84031ac9dc22438bf57620fdfdd51cd12305a5e36574ef8f2f extends Twig_Template
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
    }

    // line 1
    public function gettextarea($__id__ = null, $__name__ = "", $__value__ = "", $__attributes__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "\t";
            if (((isset($context["name"]) ? $context["name"] : null) == "")) {
                // line 3
                echo "\t\t";
                $context["id"] = (isset($context["name"]) ? $context["name"] : null);
                // line 4
                echo "\t";
            }
            // line 5
            echo "\t<textarea
\t\tname=\"";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"
\t\tid=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"
\t\tclass=\"ai1ec-form-control ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array()), "html", null, true);
            echo "\"
\t\t";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                // line 10
                echo "\t\t\t";
                if (($context["attribute"] != "class")) {
                    // line 11
                    echo "\t\t\t\t";
                    echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\"
\t\t\t";
                }
                // line 13
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "\t\t>";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "</textarea>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "form-elements/textarea.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 14,  75 => 13,  67 => 11,  64 => 10,  60 => 9,  56 => 8,  52 => 7,  48 => 6,  45 => 5,  42 => 4,  39 => 3,  36 => 2,  21 => 1,);
    }
}
/* {% macro textarea( id, name='', value = '', attributes = [] ) %}*/
/* 	{% if name == '' %}*/
/* 		{% set id = name %}*/
/* 	{% endif %}*/
/* 	<textarea*/
/* 		name="{{ name }}"*/
/* 		id="{{ id }}"*/
/* 		class="ai1ec-form-control {{ attributes.class }}"*/
/* 		{% for attribute, value in attributes %}*/
/* 			{% if attribute != 'class' %}*/
/* 				{{ attribute }}="{{ value }}"*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 		>{{ value }}</textarea>*/
/* {% endmacro %}*/
/* */
