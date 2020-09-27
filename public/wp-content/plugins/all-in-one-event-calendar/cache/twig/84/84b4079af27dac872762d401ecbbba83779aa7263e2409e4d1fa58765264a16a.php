<?php

/* select2_multiselect.twig */
class __TwigTemplate_f408806f37caedad76b4e1ef2302ddae9e03fed4b3118c758b8839de97847234 extends Twig_Template
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
        echo "<div 
\t";
        // line 2
        if (((isset($context["container_class"]) ? $context["container_class"] : null) != false)) {
            // line 3
            echo "\t\tclass=\"";
            echo twig_escape_filter($this->env, (isset($context["container_class"]) ? $context["container_class"] : null), "html", null, true);
            echo "\"
\t";
        }
        // line 5
        echo "\t>
\t";
        // line 6
        $context["__internal_1bcea2e83158ff48e05f92ee019b0d8f969b9403ef4081e6d3c1cfcd895da556"] = $this->loadTemplate("form-elements/select.twig", "select2_multiselect.twig", 6);
        // line 7
        echo "\t";
        echo $context["__internal_1bcea2e83158ff48e05f92ee019b0d8f969b9403ef4081e6d3c1cfcd895da556"]->getselect((isset($context["id"]) ? $context["id"] : null), (isset($context["name"]) ? $context["name"] : null), (isset($context["select2_args"]) ? $context["select2_args"] : null), (isset($context["options"]) ? $context["options"] : null));
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "select2_multiselect.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  33 => 6,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div */
/* 	{% if container_class != false %}*/
/* 		class="{{ container_class }}"*/
/* 	{% endif %}*/
/* 	>*/
/* 	{% from 'form-elements/select.twig' import select %}*/
/* 	{{ select( id, name, select2_args, options ) }}*/
/* </div>*/
