<?php

/* setting/twig_cache.twig */
class __TwigTemplate_36e335a6f149714bf089762d98081eff0eb1f24639eead4d0d78e4551b26837c extends Twig_Template
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
        echo "<div class=\"ai1ec-col-sm-12\">
\t<ul class=\"ai1ec-fa-ul\">
\t\t<li id=\"ai1ec-cache-scan-success\" class=\"ai1ec-text-success";
        // line 3
        if (((isset($context["cache_available"]) ? $context["cache_available"] : null) == false)) {
            echo " ai1ec-hide";
        }
        echo "\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-li ai1ec-fa-check-circle\"></i>
\t\t\t";
        // line 5
        echo $this->getAttribute((isset($context["text"]) ? $context["text"] : null), "okcache", array());
        echo "
\t\t</li>
\t\t<li id=\"ai1ec-cache-scan-danger\" class=\"ai1ec-text-danger";
        // line 7
        if (((isset($context["cache_available"]) ? $context["cache_available"] : null) == true)) {
            echo " ai1ec-hide";
        }
        echo "\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-li ai1ec-fa-times-circle\"></i>
\t\t\t";
        // line 9
        echo $this->getAttribute((isset($context["text"]) ? $context["text"] : null), "nocache", array());
        echo "
\t\t\t<button class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-xs\" id=\"ai1ec-button-refresh\"
\t\t\t\tdata-loading-text=\"&lt;i class=&quot;ai1ec-fa ai1ec-fa-fw ai1ec-fa-refresh ai1ec-fa-spin&quot;&gt;&lt;/i&gt; ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : null), "rescan", array()), "html", null, true);
        echo "\">
\t\t\t\t<i class=\"ai1ec-fa ai1ec-fa-fw ai1ec-fa-refresh\"></i>
\t\t\t\t";
        // line 13
        echo $this->getAttribute((isset($context["text"]) ? $context["text"] : null), "refresh", array());
        echo "
\t\t\t</button>
\t\t</li>
\t</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "setting/twig_cache.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  47 => 11,  42 => 9,  35 => 7,  30 => 5,  23 => 3,  19 => 1,);
    }
}
/* <div class="ai1ec-col-sm-12">*/
/* 	<ul class="ai1ec-fa-ul">*/
/* 		<li id="ai1ec-cache-scan-success" class="ai1ec-text-success{% if cache_available == false %} ai1ec-hide{% endif %}">*/
/* 			<i class="ai1ec-fa ai1ec-fa-li ai1ec-fa-check-circle"></i>*/
/* 			{{ text.okcache | raw }}*/
/* 		</li>*/
/* 		<li id="ai1ec-cache-scan-danger" class="ai1ec-text-danger{% if cache_available == true %} ai1ec-hide{% endif %}">*/
/* 			<i class="ai1ec-fa ai1ec-fa-li ai1ec-fa-times-circle"></i>*/
/* 			{{ text.nocache | raw }}*/
/* 			<button class="ai1ec-btn ai1ec-btn-default ai1ec-btn-xs" id="ai1ec-button-refresh"*/
/* 				data-loading-text="&lt;i class=&quot;ai1ec-fa ai1ec-fa-fw ai1ec-fa-refresh ai1ec-fa-spin&quot;&gt;&lt;/i&gt; {{ text.rescan }}">*/
/* 				<i class="ai1ec-fa ai1ec-fa-fw ai1ec-fa-refresh"></i>*/
/* 				{{ text.refresh | raw }}*/
/* 			</button>*/
/* 		</li>*/
/* 	</ul>*/
/* </div>*/
/* */
