<?php

/* form-elements/select.twig */
class __TwigTemplate_04eed8373744a391bbb06f5bf1b71d5e681fdb92b8fe8a9a4f5fa614330bdedd extends Twig_Template
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
    public function getselect($__id__ = null, $__name__ = "", $__attributes__ = array(), $__options__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "name" => $__name__,
            "attributes" => $__attributes__,
            "options" => $__options__,
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
                $context["name"] = (isset($context["id"]) ? $context["id"] : null);
                // line 4
                echo "\t";
            }
            // line 5
            echo "\t<select
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
            echo "\t\t>
\t\t";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 16
                echo "\t\t\t";
                if ($this->env->getExtension('ai1ec')->is_string($context["key"])) {
                    // line 17
                    echo "\t\t\t\t<optgroup label=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
\t\t\t\t\t";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["option"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
                        // line 19
                        echo "\t\t\t\t\t\t<option
\t\t\t\t\t\t\tvalue=\"";
                        // line 20
                        echo twig_escape_filter($this->env, $this->getAttribute($context["opt"], "value", array()), "html", null, true);
                        echo "\"
\t\t\t\t\t\t";
                        // line 21
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["opt"], "args", array()));
                        foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                            // line 22
                            echo "\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                            echo "=\"";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "\"
\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 24
                        echo "\t\t\t\t\t\t>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["opt"], "text", array()), "html", null, true);
                        echo "</option>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 26
                    echo "\t\t\t\t</optgroup>
\t\t\t";
                } else {
                    // line 28
                    echo "\t\t\t\t<option
\t\t\t\t\tvalue=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "value", array()), "html", null, true);
                    echo "\"
\t\t\t\t";
                    // line 30
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "args", array()));
                    foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                        // line 31
                        echo "\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\"
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 33
                    echo "\t\t\t\t>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "text", array()), "html", null, true);
                    echo "</option>
\t\t\t";
                }
                // line 35
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t\t</select>
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
        return "form-elements/select.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 36,  163 => 35,  157 => 33,  146 => 31,  142 => 30,  138 => 29,  135 => 28,  131 => 26,  122 => 24,  111 => 22,  107 => 21,  103 => 20,  100 => 19,  96 => 18,  91 => 17,  88 => 16,  84 => 15,  81 => 14,  75 => 13,  67 => 11,  64 => 10,  60 => 9,  56 => 8,  52 => 7,  48 => 6,  45 => 5,  42 => 4,  39 => 3,  36 => 2,  21 => 1,);
    }
}
/* {% macro select( id, name='', attributes = [], options = [] ) %}*/
/* 	{% if name == '' %}*/
/* 		{% set name = id %}*/
/* 	{% endif %}*/
/* 	<select*/
/* 		name="{{ name }}"*/
/* 		id="{{ id }}"*/
/* 		class="ai1ec-form-control {{ attributes.class }}"*/
/* 		{% for attribute, value in attributes %}*/
/* 			{% if attribute != 'class' %}*/
/* 				{{ attribute }}="{{ value }}"*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 		>*/
/* 		{% for key, option in options %}*/
/* 			{% if key is string %}*/
/* 				<optgroup label="{{ key }}">*/
/* 					{% for opt in option %}*/
/* 						<option*/
/* 							value="{{ opt.value }}"*/
/* 						{% for attribute, value in opt.args %}*/
/* 							{{ attribute }}="{{ value }}"*/
/* 						{% endfor %}*/
/* 						>{{ opt.text }}</option>*/
/* 					{% endfor %}*/
/* 				</optgroup>*/
/* 			{% else %}*/
/* 				<option*/
/* 					value="{{ option.value }}"*/
/* 				{% for attribute, value in option.args %}*/
/* 					{{ attribute }}="{{ value }}"*/
/* 				{% endfor %}*/
/* 				>{{ option.text }}</option>*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 		</select>*/
/* {% endmacro %}*/
/* */
