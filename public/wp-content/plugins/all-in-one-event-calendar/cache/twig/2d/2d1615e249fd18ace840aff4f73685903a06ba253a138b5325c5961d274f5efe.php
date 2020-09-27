<?php

/* setting/page.twig */
class __TwigTemplate_76b09812e8c44752dac3e850b5e01e2c4bec5c40634e86a69e52e87c50d95caa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base_page.twig", "setting/page.twig", 1);
        $this->blocks = array(
            'layout' => array($this, 'block_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base_page.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_layout($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"post-box-container column-1-ai1ec left-side timely\">
\t";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->do_meta_boxes($this->getAttribute((isset($context["metabox"]) ? $context["metabox"] : null), "screen", array()), $this->getAttribute((isset($context["metabox"]) ? $context["metabox"] : null), "action", array()), $this->getAttribute((isset($context["metabox"]) ? $context["metabox"] : null), "object", array())), "html", null, true);
        echo "
\t";
        // line 5
        if (array_key_exists("submit", $context)) {
            // line 6
            echo "\t\t";
            $context["__internal_73917fe10c4f30327a526923f5f463b85e1233b4a5c432f7b2532cda2dfc322c"] = $this->loadTemplate("form-elements/input.twig", "setting/page.twig", 6);
            // line 7
            echo "\t\t<div class=\"ai1ec-pull-right\">
\t\t\t";
            // line 8
            echo $context["__internal_73917fe10c4f30327a526923f5f463b85e1233b4a5c432f7b2532cda2dfc322c"]->getbutton($this->getAttribute((isset($context["submit"]) ? $context["submit"] : null), "id", array()), $this->getAttribute((isset($context["submit"]) ? $context["submit"] : null), "id", array()), $this->getAttribute((isset($context["submit"]) ? $context["submit"] : null), "value", array()), "submit", $this->getAttribute((isset($context["submit"]) ? $context["submit"] : null), "args", array()));
            echo "
\t\t</div>
\t";
        }
        // line 11
        echo "</div>
<div class=\"post-box-container column-2-ai1ec right-side timely\">
\t\t";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->do_meta_boxes($this->getAttribute((isset($context["support"]) ? $context["support"] : null), "screen", array()), $this->getAttribute((isset($context["support"]) ? $context["support"] : null), "action", array()), $this->getAttribute((isset($context["support"]) ? $context["support"] : null), "object", array())), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "setting/page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  52 => 11,  46 => 8,  43 => 7,  40 => 6,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "base_page.twig" %}*/
/* {% block layout %}*/
/* <div class="post-box-container column-1-ai1ec left-side timely">*/
/* 	{{ do_meta_boxes( metabox.screen, metabox.action, metabox.object ) }}*/
/* 	{% if submit is defined %}*/
/* 		{% from 'form-elements/input.twig' import button %}*/
/* 		<div class="ai1ec-pull-right">*/
/* 			{{ button( submit.id, submit.id, submit.value, 'submit', submit.args ) }}*/
/* 		</div>*/
/* 	{% endif %}*/
/* </div>*/
/* <div class="post-box-container column-2-ai1ec right-side timely">*/
/* 		{{ do_meta_boxes( support.screen, support.action, support.object ) }}*/
/* </div>*/
/* {% endblock %}*/
/* */
