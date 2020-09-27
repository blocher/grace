<?php

/* ticketing/signup.twig */
class __TwigTemplate_9f7f956df88c9f957679c4de9415429e9dcfbcdd9280c52169646af61debd4af extends Twig_Template
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
        echo "<div class=\"wrap timely ticketing\" style=\"max-width: 550px;\">
\t<h2>";
        // line 2
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</h2><br>
\t<div id=\"poststuff\" style=\"min-width:550px;\">
\t\t";
        // line 4
        echo (isset($context["signup_form"]) ? $context["signup_form"] : null);
        echo "
\t</div>";
        // line 6
        echo "</div>";
        // line 7
        echo "
";
    }

    public function getTemplateName()
    {
        return "ticketing/signup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  31 => 6,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="wrap timely ticketing" style="max-width: 550px;">*/
/* 	<h2>{{ title | raw }}</h2><br>*/
/* 	<div id="poststuff" style="min-width:550px;">*/
/* 		{{ signup_form | raw }}*/
/* 	</div>{# /#poststuff #}*/
/* </div>{# /.wrap #}*/
/* */
/* */
