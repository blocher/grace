<?php

/* form-elements/input.twig */
class __TwigTemplate_33cf01cfdf37cf71aabc6ee923cb42a33e2cb8b3d316dc4be94fdd8368aff2dd extends Twig_Template
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
        // line 19
        echo "
";
    }

    // line 1
    public function getinput($__id__ = null, $__name__ = "", $__value__ = "", $__type__ = "text", $__attributes__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "name" => $__name__,
            "value" => $__value__,
            "type" => $__type__,
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
            echo "\t<input
\t\ttype=\"";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\"
\t\tname=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"
\t\tvalue=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"
\t\tid=\"";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"
\t\tclass=\"";
            // line 10
            if (!twig_in_filter((isset($context["type"]) ? $context["type"] : null), array(0 => "radio", 1 => "checkbox"))) {
                echo "ai1ec-form-control";
            }
            // line 11
            echo "\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array()), "html", null, true);
            echo "\"
\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                // line 13
                echo "\t\t\t";
                if (($context["attribute"] != "class")) {
                    // line 14
                    echo "\t\t\t\t";
                    echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\"
\t\t\t";
                }
                // line 16
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t\t/>
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

    // line 20
    public function getbutton($__id__ = null, $__name__ = "", $__value__ = "", $__type__ = "text", $__attributes__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "name" => $__name__,
            "value" => $__value__,
            "type" => $__type__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 21
            echo "\t";
            if (((isset($context["name"]) ? $context["name"] : null) == "")) {
                // line 22
                echo "\t\t";
                $context["id"] = (isset($context["name"]) ? $context["name"] : null);
                // line 23
                echo "\t";
            }
            // line 24
            echo "\t<button
\t\ttype=\"";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\"
\t\tname=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"
\t\tid=\"";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"
\t\t";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                // line 29
                echo "\t\t\t";
                echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t>";
            echo (isset($context["value"]) ? $context["value"] : null);
            echo "</button>
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
        return "form-elements/input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 31,  158 => 29,  154 => 28,  150 => 27,  146 => 26,  142 => 25,  139 => 24,  136 => 23,  133 => 22,  130 => 21,  114 => 20,  98 => 17,  92 => 16,  84 => 14,  81 => 13,  77 => 12,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  49 => 5,  46 => 4,  43 => 3,  40 => 2,  24 => 1,  19 => 19,);
    }
}
/* {% macro input( id, name = '', value = '', type = "text", attributes = [] ) %}*/
/* 	{% if name == '' %}*/
/* 		{% set id = name %}*/
/* 	{% endif %}*/
/* 	<input*/
/* 		type="{{ type }}"*/
/* 		name="{{ name }}"*/
/* 		value="{{ value }}"*/
/* 		id="{{ id }}"*/
/* 		class="{% if type not in [ 'radio', 'checkbox' ] %}ai1ec-form-control{% endif %}*/
/* 			{{ attributes.class }}"*/
/* 		{% for attribute, value in attributes %}*/
/* 			{% if attribute != 'class' %}*/
/* 				{{ attribute }}="{{ value }}"*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 		/>*/
/* {% endmacro %}*/
/* */
/* {% macro button( id, name = '', value = '', type = "text", attributes = [] ) %}*/
/* 	{% if name == '' %}*/
/* 		{% set id = name %}*/
/* 	{% endif %}*/
/* 	<button*/
/* 		type="{{ type }}"*/
/* 		name="{{ name }}"*/
/* 		id="{{ id }}"*/
/* 		{% for attribute, value in attributes %}*/
/* 			{{ attribute }}="{{ value }}"*/
/* 		{% endfor %}*/
/* 		>{{ value | raw }}</button>*/
/* {% endmacro %}*/
/* */
