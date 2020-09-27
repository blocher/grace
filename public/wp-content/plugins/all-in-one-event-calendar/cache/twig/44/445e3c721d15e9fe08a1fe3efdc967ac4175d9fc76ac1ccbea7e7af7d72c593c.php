<?php

/* setting/api-signup.twig */
class __TwigTemplate_c81c7a9442c8b4b6d3c1a578ea3fe933341da295561cd4d6aad783185c91ac00 extends Twig_Template
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
        if ((isset($context["api_signed"]) ? $context["api_signed"] : null)) {
            // line 2
            echo "<div class=\"ai1ec-well\" id=\"ai1ec-api-signed-in\">
\t<i class=\"ai1ec-fa ai1ec-fa-check ai1ec-fa-fw\"></i>
\t";
            // line 4
            echo (isset($context["signed_in_text"]) ? $context["signed_in_text"] : null);
            echo "
\t";
            // line 5
            if ((isset($context["can_sign_out"]) ? $context["can_sign_out"] : null)) {
                // line 6
                echo "\t\t<a href=\"#\" id=\"ai1ec-api-signout\" class=\"ai1ec-pull-right\"
\t\t   data-action=\"";
                // line 7
                echo twig_escape_filter($this->env, (isset($context["api_action"]) ? $context["api_action"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["sign_out_text"]) ? $context["sign_out_text"] : null), "html", null, true);
                echo "</a>
\t";
            }
            // line 9
            echo "\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->wp_nonce_field($this->getAttribute((isset($context["nonce"]) ? $context["nonce"] : null), "action", array()), $this->getAttribute((isset($context["nonce"]) ? $context["nonce"] : null), "name", array()), $this->getAttribute((isset($context["nonce"]) ? $context["nonce"] : null), "referrer", array())), "html", null, true);
            echo "
\t<div id=\"ai1ec-api-signout-confirm\">
\t\t";
            // line 11
            echo (isset($context["sign_out_warning"]) ? $context["sign_out_warning"] : null);
            echo "
\t\t<div class=\"ai1ec-api-signout-buttons\">
\t\t\t<a href=\"#\" class=\"ai1ec-btn ai1ec-btn-cancel ai1ec-btn-warning\"
\t\t\t   id=\"ai1ec-api-signout-cancel\">
\t\t\t\t\t";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["sign_out_cancel"]) ? $context["sign_out_cancel"] : null), "html", null, true);
            echo "
\t\t\t</a>
\t\t\t<a href=\"#\" class=\"ai1ec-btn ai1ec-btn-danger\"
\t\t\t   id=\"ai1ec-api-signout-button\">
\t\t\t\t\t";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["sign_out_confirm"]) ? $context["sign_out_confirm"] : null), "html", null, true);
            echo "
\t\t\t  </a>
\t\t</div>
\t</div>
</div>
";
        } elseif (        // line 24
(isset($context["signup_available"]) ? $context["signup_available"] : null)) {
            // line 25
            echo "<div class=\"timely-api ai1ec-well\">
\t";
            // line 26
            if ( !twig_test_empty((isset($context["title"]) ? $context["title"] : null))) {
                // line 27
                echo "\t\t<span>";
                echo (isset($context["title"]) ? $context["title"] : null);
                echo "</span>
\t";
            }
            // line 29
            echo "\t<a href=\"#\" class=\"ai1ec-pull-right ai1ec-api-signup-hide ai1ec-hidden\">";
            echo twig_escape_filter($this->env, (isset($context["hide_form_text"]) ? $context["hide_form_text"] : null), "html", null, true);
            echo "</a>
\t<a href=\"#\" class=\"ai1ec-pull-right ai1ec-signup-show\">";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["show_form_text"]) ? $context["show_form_text"] : null), "html", null, true);
            echo "</a>
\t<div id=\"ai1ec-api-signup-form\" class=\"ai1ec-hidden\" data-action=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["api_action"]) ? $context["api_action"] : null), "html", null, true);
            echo "\">
\t\t<!-- Trick to disable autocomplete -->
\t\t<input type=\"hidden\" name=\"ai1ec_email\" class=\"ai1ec-noauto\" />
\t\t<input type=\"hidden\" name=\"ai1ec_password\" class=\"ai1ec-noauto\" />
\t\t<!-- -->
\t\t";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('ai1ec')->wp_nonce_field($this->getAttribute((isset($context["nonce"]) ? $context["nonce"] : null), "action", array()), $this->getAttribute((isset($context["nonce"]) ? $context["nonce"] : null), "name", array()), $this->getAttribute((isset($context["nonce"]) ? $context["nonce"] : null), "referrer", array())), "html", null, true);
            echo "
\t\t<div class=\"metabox-holder\">
\t\t\t<div class=\"post-box-container left-side\">
\t\t\t\t<table class=\"ai1ec-ticketing-signup\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"ai1ec_label_field\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"ai1ec_input_field\" style=\"padding-bottom:15px;\">
\t\t\t\t\t\t\t<label style=\"margin-right:10px\">
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"ai1ec_signing\"
\t\t\t\t\t\t\t\t\t   value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["register_text"]) ? $context["register_text"] : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"ai1ec_signing\" value=\"2\"/>
\t\t\t\t\t\t\t\t";
            // line 51
            echo twig_escape_filter($this->env, (isset($context["sign_in_text"]) ? $context["sign_in_text"] : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 57
            echo twig_escape_filter($this->env, (isset($context["full_name_text"]) ? $context["full_name_text"] : null), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"ai1ec-ticket-field-error\">
\t\t\t\t\t\t\t\t";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["required_text"]) ? $context["required_text"] : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"text\" name=\"ai1ec_name\" class=\"ai1ec-required\" />
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"signin\">
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["email_text"]) ? $context["email_text"] : null), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"ai1ec-ticket-field-error\">
\t\t\t\t\t\t\t\t";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["required_text"]) ? $context["required_text"] : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"text\" name=\"ai1ec_email\" class=\"ai1ec-required\" />
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"signin\">
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 79
            echo twig_escape_filter($this->env, (isset($context["password_text"]) ? $context["password_text"] : null), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"ai1ec-ticket-field-error\">
\t\t\t\t\t\t\t\t";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["required_text"]) ? $context["required_text"] : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"password\" name=\"ai1ec_password\" class=\"ai1ec-required\" />
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 90
            echo twig_escape_filter($this->env, (isset($context["confirm_password_text"]) ? $context["confirm_password_text"] : null), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"ai1ec-ticket-field-error\">
\t\t\t\t\t\t\t\t";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["required_text"]) ? $context["required_text"] : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"password\" name=\"ai1ec_password_confirmation\"
\t\t\t\t\t\t\t\t   class=\"ai1ec-required\" />
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 102
            echo twig_escape_filter($this->env, (isset($context["phone_number_text"]) ? $context["phone_number_text"] : null), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"ai1ec-ticket-field-error\">
\t\t\t\t\t\t\t\t";
            // line 106
            echo twig_escape_filter($this->env, (isset($context["required_text"]) ? $context["required_text"] : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"text\" name=\"ai1ec_phone\" class=\"ai1ec-required\" />
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"ai1ec-ticket-field-error\">
\t\t\t\t\t\t\t\t";
            // line 116
            echo twig_escape_filter($this->env, (isset($context["required_text"]) ? $context["required_text"] : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label for=\"ai1ec_terms\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ai1ec_terms\"
\t\t\t\t\t\t\t\t\t   name=\"ai1ec_terms\" class=\"ai1ec-required\" />
\t\t\t\t\t\t\t\t";
            // line 121
            echo (isset($context["terms_text"]) ? $context["terms_text"] : null);
            echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<a href=\"#\" name=\"ai1ec_tickets_signin\"  style=\"margin-top:20px;\"
\t\t\t\t\t\t\t   class=\"ai1ec-btn ai1ec-btn-lg ai1ec-btn-primary\">
\t\t\t\t\t\t\t\t";
            // line 125
            echo twig_escape_filter($this->env, (isset($context["sign_up_button_text"]) ? $context["sign_up_button_text"] : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"signin ai1ec-hidden\">
\t\t\t\t\t\t<td>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"#\" name=\"ai1ec_tickets_signin\"  style=\"margin-top:20px;\"
\t\t\t\t\t\t\t   class=\"ai1ec-btn ai1ec-btn-lg ai1ec-btn-primary\">
\t\t\t\t\t\t\t\t";
            // line 135
            echo twig_escape_filter($this->env, (isset($context["sign_in_button_text"]) ? $context["sign_in_button_text"] : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "setting/api-signup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 135,  233 => 125,  226 => 121,  218 => 116,  205 => 106,  198 => 102,  187 => 94,  180 => 90,  170 => 83,  163 => 79,  153 => 72,  146 => 68,  136 => 61,  129 => 57,  120 => 51,  113 => 47,  99 => 36,  91 => 31,  87 => 30,  82 => 29,  76 => 27,  74 => 26,  71 => 25,  69 => 24,  61 => 19,  54 => 15,  47 => 11,  41 => 9,  34 => 7,  31 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if api_signed %}*/
/* <div class="ai1ec-well" id="ai1ec-api-signed-in">*/
/* 	<i class="ai1ec-fa ai1ec-fa-check ai1ec-fa-fw"></i>*/
/* 	{{ signed_in_text | raw }}*/
/* 	{% if can_sign_out %}*/
/* 		<a href="#" id="ai1ec-api-signout" class="ai1ec-pull-right"*/
/* 		   data-action="{{ api_action }}">{{ sign_out_text }}</a>*/
/* 	{% endif %}*/
/* 	{{ wp_nonce_field( nonce.action, nonce.name, nonce.referrer ) }}*/
/* 	<div id="ai1ec-api-signout-confirm">*/
/* 		{{ sign_out_warning | raw }}*/
/* 		<div class="ai1ec-api-signout-buttons">*/
/* 			<a href="#" class="ai1ec-btn ai1ec-btn-cancel ai1ec-btn-warning"*/
/* 			   id="ai1ec-api-signout-cancel">*/
/* 					{{ sign_out_cancel }}*/
/* 			</a>*/
/* 			<a href="#" class="ai1ec-btn ai1ec-btn-danger"*/
/* 			   id="ai1ec-api-signout-button">*/
/* 					{{ sign_out_confirm }}*/
/* 			  </a>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% elseif signup_available %}*/
/* <div class="timely-api ai1ec-well">*/
/* 	{% if title is not empty %}*/
/* 		<span>{{ title | raw }}</span>*/
/* 	{% endif %}*/
/* 	<a href="#" class="ai1ec-pull-right ai1ec-api-signup-hide ai1ec-hidden">{{ hide_form_text }}</a>*/
/* 	<a href="#" class="ai1ec-pull-right ai1ec-signup-show">{{ show_form_text }}</a>*/
/* 	<div id="ai1ec-api-signup-form" class="ai1ec-hidden" data-action="{{ api_action }}">*/
/* 		<!-- Trick to disable autocomplete -->*/
/* 		<input type="hidden" name="ai1ec_email" class="ai1ec-noauto" />*/
/* 		<input type="hidden" name="ai1ec_password" class="ai1ec-noauto" />*/
/* 		<!-- -->*/
/* 		{{ wp_nonce_field( nonce.action, nonce.name, nonce.referrer ) }}*/
/* 		<div class="metabox-holder">*/
/* 			<div class="post-box-container left-side">*/
/* 				<table class="ai1ec-ticketing-signup">*/
/* 					<tr>*/
/* 						<td class="ai1ec_label_field">*/
/* 						</td>*/
/* 						<td class="ai1ec_input_field" style="padding-bottom:15px;">*/
/* 							<label style="margin-right:10px">*/
/* 								<input type="radio" name="ai1ec_signing"*/
/* 									   value="1" checked="checked" />*/
/* 								{{ register_text }}*/
/* 							</label>*/
/* 							<label>*/
/* 								<input type="radio" name="ai1ec_signing" value="2"/>*/
/* 								{{ sign_in_text }}*/
/* 							</label>*/
/* 						</td>*/
/* 					</tr>*/
/* 					<tr>*/
/* 						<td>*/
/* 							{{ full_name_text }}*/
/* 						</td>*/
/* 						<td>*/
/* 							<div class="ai1ec-ticket-field-error">*/
/* 								{{ required_text }}*/
/* 							</div>*/
/* 							<input type="text" name="ai1ec_name" class="ai1ec-required" />*/
/* 						</td>*/
/* 					</tr>*/
/* 					<tr class="signin">*/
/* 						<td>*/
/* 							{{ email_text }}*/
/* 						</td>*/
/* 						<td>*/
/* 							<div class="ai1ec-ticket-field-error">*/
/* 								{{ required_text }}*/
/* 							</div>*/
/* 							<input type="text" name="ai1ec_email" class="ai1ec-required" />*/
/* 						</td>*/
/* 					</tr>*/
/* 					<tr class="signin">*/
/* 						<td>*/
/* 							{{ password_text }}*/
/* 						</td>*/
/* 						<td>*/
/* 							<div class="ai1ec-ticket-field-error">*/
/* 								{{ required_text }}*/
/* 							</div>*/
/* 							<input type="password" name="ai1ec_password" class="ai1ec-required" />*/
/* 						</td>*/
/* 					</tr>*/
/* 					<tr>*/
/* 						<td>*/
/* 							{{ confirm_password_text }}*/
/* 						</td>*/
/* 						<td>*/
/* 							<div class="ai1ec-ticket-field-error">*/
/* 								{{ required_text }}*/
/* 							</div>*/
/* 							<input type="password" name="ai1ec_password_confirmation"*/
/* 								   class="ai1ec-required" />*/
/* 						</td>*/
/* 					</tr>*/
/* 					<tr>*/
/* 						<td>*/
/* 							{{ phone_number_text }}*/
/* 						</td>*/
/* 						<td>*/
/* 							<div class="ai1ec-ticket-field-error">*/
/* 								{{ required_text }}*/
/* 							</div>*/
/* 							<input type="text" name="ai1ec_phone" class="ai1ec-required" />*/
/* 						</td>*/
/* 					</tr>*/
/* 					<tr>*/
/* 						<td>*/
/* 						</td>*/
/* 						<td>*/
/* 							<div class="ai1ec-ticket-field-error">*/
/* 								{{ required_text }}*/
/* 							</div>*/
/* 							<label for="ai1ec_terms">*/
/* 								<input type="checkbox" id="ai1ec_terms"*/
/* 									   name="ai1ec_terms" class="ai1ec-required" />*/
/* 								{{ terms_text | raw }}*/
/* 							</label>*/
/* 							<a href="#" name="ai1ec_tickets_signin"  style="margin-top:20px;"*/
/* 							   class="ai1ec-btn ai1ec-btn-lg ai1ec-btn-primary">*/
/* 								{{ sign_up_button_text }}*/
/* 							</a>*/
/* 						</td>*/
/* 					</tr>*/
/* 					<tr class="signin ai1ec-hidden">*/
/* 						<td>*/
/* 						</td>*/
/* 						<td>*/
/* 							<a href="#" name="ai1ec_tickets_signin"  style="margin-top:20px;"*/
/* 							   class="ai1ec-btn ai1ec-btn-lg ai1ec-btn-primary">*/
/* 								{{ sign_in_button_text }}*/
/* 							</a>*/
/* 						</td>*/
/* 					</tr>*/
/* 				</table>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% endif %}*/
/* */
