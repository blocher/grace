<?php

/* organize/tab.twig */
class __TwigTemplate_e5b7fcde7f2ba5da7239bf382b776ed8a898d7b1e244d282a9b4bea8ac5e0875 extends Twig_Template
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
        if ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "divider", array())) {
            // line 2
            echo "\t<li role=\"presentation\" class=\"ai1ec-divider\"></li>
";
        } else {
            // line 4
            echo "\t<li class=\"";
            if ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "active", array())) {
                echo "ai1ec-active";
            }
            // line 5
            echo "\t\tai1ec-taxonomy-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "taxonomy_name", array()), "html", null, true);
            echo "\">
\t\t<a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "url", array()), "html_attr");
            echo "\">
\t\t";
            // line 7
            if ( !twig_test_empty($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "icon", array()))) {
                // line 8
                echo "\t\t\t<i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "icon", array()), "html_attr");
                echo " ai1ec-fa-fw\"></i>
\t\t";
            }
            // line 10
            echo "\t\t";
            echo $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "name", array());
            echo "
\t\t</a>

\t\t";
            // line 13
            if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "active", array()) &&  !twig_test_empty($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "edit_url", array())))) {
                // line 14
                echo "\t\t\t<a class=\"ai1ec-taxonomy-edit-link ai1ec-hide button button-primary timely\"
\t\t\t\thref=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "edit_url", array()), "html_attr");
                echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i> ";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "edit_label", array()), "html", null, true);
                echo "
\t\t\t</a>
\t\t";
            }
            // line 19
            echo "\t</li>
";
        }
    }

    public function getTemplateName()
    {
        return "organize/tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  63 => 16,  59 => 15,  56 => 14,  54 => 13,  47 => 10,  41 => 8,  39 => 7,  35 => 6,  30 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if taxonomy.divider %}*/
/* 	<li role="presentation" class="ai1ec-divider"></li>*/
/* {% else %}*/
/* 	<li class="{% if taxonomy.active %}ai1ec-active{% endif %}*/
/* 		ai1ec-taxonomy-{{ taxonomy.taxonomy_name }}">*/
/* 		<a href="{{ taxonomy.url | e('html_attr') }}">*/
/* 		{% if taxonomy.icon is not empty %}*/
/* 			<i class="{{ taxonomy.icon | e('html_attr') }} ai1ec-fa-fw"></i>*/
/* 		{% endif %}*/
/* 		{{ taxonomy.name | raw }}*/
/* 		</a>*/
/* */
/* 		{% if taxonomy.active and taxonomy.edit_url is not empty %}*/
/* 			<a class="ai1ec-taxonomy-edit-link ai1ec-hide button button-primary timely"*/
/* 				href="{{ taxonomy.edit_url | e('html_attr') }}">*/
/* 				<i class="ai1ec-fa ai1ec-fa-pencil"></i> {{ taxonomy.edit_label }}*/
/* 			</a>*/
/* 		{% endif %}*/
/* 	</li>*/
/* {% endif %}*/
/* */
