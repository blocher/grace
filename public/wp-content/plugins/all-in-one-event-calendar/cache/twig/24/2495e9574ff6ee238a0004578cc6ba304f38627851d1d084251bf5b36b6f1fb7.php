<?php

/* base_page.twig */
class __TwigTemplate_a6228cbabc7e9370e746cd269f1987a54d6821d1d8d6e9c27e3a43cecb3dd788 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'layout' => array($this, 'block_layout'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"wrap\">
\t";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->screen_icon(), "html", null, true);
        echo "
\t<h2>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h2>
\t<div id=\"poststuff\">
\t\t<form method=\"post\" action=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
        echo "\">
\t\t\t";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->wp_nonce_field($this->getAttribute((isset($context["nonce"]) ? $context["nonce"] : null), "action", array()), $this->getAttribute((isset($context["nonce"]) ? $context["nonce"] : null), "name", array()), $this->getAttribute((isset($context["nonce"]) ? $context["nonce"] : null), "referrer", array())), "html", null, true);
        echo "
\t\t\t<div class=\"metabox-holder\">
\t\t\t\t";
        // line 8
        $this->displayBlock('layout', $context, $blocks);
        // line 9
        echo "\t\t\t</div>
\t\t</form>
\t</div>";
        // line 12
        echo "</div>";
    }

    // line 8
    public function block_layout($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base_page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  47 => 12,  43 => 9,  41 => 8,  36 => 6,  32 => 5,  27 => 3,  23 => 2,  20 => 1,);
    }
}
/* <div class="wrap">*/
/* 	{{ screen_icon() }}*/
/* 	<h2>{{ title }}</h2>*/
/* 	<div id="poststuff">*/
/* 		<form method="post" action="{{ action }}">*/
/* 			{{ wp_nonce_field( nonce.action, nonce.name, nonce.referrer ) }}*/
/* 			<div class="metabox-holder">*/
/* 				{% block layout %}{% endblock %}*/
/* 			</div>*/
/* 		</form>*/
/* 	</div>{# /#poststuff #}*/
/* </div>{# /.wrap #}*/
/* */
