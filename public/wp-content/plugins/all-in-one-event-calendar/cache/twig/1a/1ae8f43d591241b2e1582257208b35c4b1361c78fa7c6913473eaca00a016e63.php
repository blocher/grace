<?php

/* notification/admin.twig */
class __TwigTemplate_fb1c922d639b6a0f3b7c979eb0c3c4a56b2c4c0b3dcd0c4bc7354933ede81a5e extends Twig_Template
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
        echo "<div class=\"message ";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        echo " ai1ec-message\">
\t";
        // line 2
        if ( !array_key_exists("label", $context)) {
            // line 3
            echo "    ";
            $context["label"] = (isset($context["text_label"]) ? $context["text_label"] : null);
            // line 4
            echo "\t";
        }
        // line 5
        echo "\t<p><strong>";
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
        echo ":</strong></p>
\t";
        // line 6
        echo (isset($context["message"]) ? $context["message"] : null);
        echo "

\t";
        // line 8
        if ((isset($context["persistent"]) ? $context["persistent"] : null)) {
            // line 9
            echo "\t\t<button class=\"button button-primary ai1ec-dismissable\"
\t\t\tdata-key=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["msg_key"]) ? $context["msg_key"] : null), "html", null, true);
            echo "\">
\t\t\t";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["text_dismiss_button"]) ? $context["text_dismiss_button"] : null), "html", null, true);
            echo "
\t\t</button>
\t";
        }
        // line 14
        echo "\t<p></p>
</div>
";
    }

    public function getTemplateName()
    {
        return "notification/admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  51 => 11,  47 => 10,  44 => 9,  42 => 8,  37 => 6,  32 => 5,  29 => 4,  26 => 3,  24 => 2,  19 => 1,);
    }
}
/* <div class="message {{class}} ai1ec-message">*/
/* 	{% if label is not defined %}*/
/*     {% set label = text_label %}*/
/* 	{% endif %}*/
/* 	<p><strong>{{ label }}:</strong></p>*/
/* 	{{ message | raw }}*/
/* */
/* 	{% if persistent %}*/
/* 		<button class="button button-primary ai1ec-dismissable"*/
/* 			data-key="{{ msg_key }}">*/
/* 			{{ text_dismiss_button }}*/
/* 		</button>*/
/* 	{% endif %}*/
/* 	<p></p>*/
/* </div>*/
/* */
