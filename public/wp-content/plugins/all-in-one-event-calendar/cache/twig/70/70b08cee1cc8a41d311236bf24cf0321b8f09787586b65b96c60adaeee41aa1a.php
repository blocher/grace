<?php

/* pagination.twig */
class __TwigTemplate_a508ddd5d84b34f051d479ac59f471a7ffab401f12daed6a17b31bbe650f89bb extends Twig_Template
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
        echo "<div class=\"ai1ec-pagination ai1ec-btn-group\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 3
            echo "\t\t";
            if (twig_test_iterable($context["link"])) {
                // line 4
                echo "\t\t\t<a class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "class", array()), "html", null, true);
                echo " ai1ec-load-view ai1ec-btn ai1ec-btn-sm
\t\t\t\tai1ec-btn-default ";
                // line 5
                if ( !$this->getAttribute($context["link"], "enabled", array())) {
                    echo "ai1ec-disabled";
                }
                echo "\"
\t\t\t\t";
                // line 6
                echo (isset($context["data_type"]) ? $context["data_type"] : null);
                echo "
\t\t\t\thref=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "href", array()), "html_attr");
                echo "\">
\t\t\t\t";
                // line 8
                echo $this->getAttribute($context["link"], "text", array());
                echo "
\t\t\t</a>
\t\t";
            } else {
                // line 11
                echo "\t\t\t";
                echo $context["link"];
                echo "
\t\t";
            }
            // line 13
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "pagination.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 14,  60 => 13,  54 => 11,  48 => 8,  44 => 7,  40 => 6,  34 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="ai1ec-pagination ai1ec-btn-group">*/
/* 	{% for link in links %}*/
/* 		{% if link is iterable %}*/
/* 			<a class="{{ link.class }} ai1ec-load-view ai1ec-btn ai1ec-btn-sm*/
/* 				ai1ec-btn-default {% if not link.enabled %}ai1ec-disabled{% endif %}"*/
/* 				{{ data_type | raw }}*/
/* 				href="{{ link.href | e('html_attr') }}">*/
/* 				{{ link.text | raw }}*/
/* 			</a>*/
/* 		{% else %}*/
/* 			{{ link | raw }}*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* </div>*/
/* */
