<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* mod_support_contact_us.phtml */
class __TwigTemplate_cd0acb4fc207ceb6ee369cbd6c40dfa38217b6b20fd625b5fbcf4c3adced53c4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_support_contact_us.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_support_contact_us.phtml", 2)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Contact us");
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $context["company"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 6);
        // line 7
        echo "
    <div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"big-light-icon i-contacts\"></span></div>
            <h2>";
        // line 11
        echo gettext("Contact us");
        echo "</h2>
            <p>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "signature", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
        </div>
        <div class=\"block\">
                
            <div class=\"grid_6 alpha\">
            <form method=\"post\" action=\"\" id=\"public-ticket-create\">
                <fieldset>
                    <p>
                        <label>";
        // line 20
        echo gettext("Name");
        echo ": </label>
                        <input type=\"text\" name=\"name\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "\" required=\"required\">
                    </p>

                    <p>
                        <label>";
        // line 25
        echo gettext("Email");
        echo ": </label>
                        <input type=\"email\" name=\"email\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", false, false, false, 26), "html", null, true);
        echo "\" required=\"required\">
                    </p>

                    <p>
                        <label>";
        // line 30
        echo gettext("Subject");
        echo ": </label>
                        <input type=\"text\" name=\"subject\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "subject", [], "any", false, false, false, 31), "html", null, true);
        echo "\" required=\"required\">
                    </p>

                    <p>
                        <label>";
        // line 35
        echo gettext("Message");
        echo ": </label>
                        <textarea name=\"message\" cols=\"5\" rows=\"5\" required=\"required\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "message", [], "any", false, false, false, 36), "html", null, true);
        echo "</textarea>
                    </p>

                    ";
        // line 39
        echo twig_call_macro($macros["mf"], "macro_recaptcha", [], 39, $context, $this->getSourceContext());
        echo "

                    <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
        // line 41
        echo gettext("Send");
        echo "\" />
                    
                </fieldset>

                <input type=\"hidden\" name=\"anti-spam\" value=\"1\" id=\"anti-spam\" required=\"required\"/>
                </form>
            
            </div>

            <div class=\"grid_6 omega\">
                <ul class=\"contact-us\">
                    <li>
                        ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 53), "html", null, true);
        echo "
                    </li>
                    <li>
                        ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "address_1", [], "any", false, false, false, 56), "html", null, true);
        echo "
                    </li>
                    <li>
                        ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "address_2", [], "any", false, false, false, 59), "html", null, true);
        echo "
                    </li>
                    <li>
                        ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "address_3", [], "any", false, false, false, 62), "html", null, true);
        echo "
                    </li>
                    <li>
                        ";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "tel", [], "any", false, false, false, 65), "html", null, true);
        echo "
                    </li>
                    <li>
                        ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "www", [], "any", false, false, false, 68), "html", null, true);
        echo "
                    </li>
                    <li>
                        ";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "email", [], "any", false, false, false, 71), "html", null, true);
        echo "
                    </li>
                </ul>
            </div>
            <div class=\"clear\"></div>
        </div>
    </div>

";
    }

    // line 81
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "<script type=\"text/javascript\">
\$(function() {
    \$('#anti-spam').remove();

    \$('#public-ticket-create').bind('submit',function(event){
        bb.post(
            'guest/support/ticket_create',
            \$(this).serialize(),
            function(result) {
                bb.redirect('";
        // line 91
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/contact-us/conversation");
        echo "' + '/' + result);
            }
        );
        return false;
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_support_contact_us.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 91,  200 => 82,  196 => 81,  183 => 71,  177 => 68,  171 => 65,  165 => 62,  159 => 59,  153 => 56,  147 => 53,  132 => 41,  127 => 39,  121 => 36,  117 => 35,  110 => 31,  106 => 30,  99 => 26,  95 => 25,  88 => 21,  84 => 20,  73 => 12,  69 => 11,  63 => 7,  61 => 6,  57 => 5,  50 => 3,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}{% trans 'Contact us' %}{% endblock %}

{% block content %}
{% set company = guest.system_company %}

    <div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"big-light-icon i-contacts\"></span></div>
            <h2>{% trans 'Contact us' %}</h2>
            <p>{{ company.signature }}</p>
        </div>
        <div class=\"block\">
                
            <div class=\"grid_6 alpha\">
            <form method=\"post\" action=\"\" id=\"public-ticket-create\">
                <fieldset>
                    <p>
                        <label>{% trans 'Name' %}: </label>
                        <input type=\"text\" name=\"name\" value=\"{{request.name}}\" required=\"required\">
                    </p>

                    <p>
                        <label>{% trans 'Email' %}: </label>
                        <input type=\"email\" name=\"email\" value=\"{{request.email}}\" required=\"required\">
                    </p>

                    <p>
                        <label>{% trans 'Subject' %}: </label>
                        <input type=\"text\" name=\"subject\" value=\"{{request.subject}}\" required=\"required\">
                    </p>

                    <p>
                        <label>{% trans 'Message' %}: </label>
                        <textarea name=\"message\" cols=\"5\" rows=\"5\" required=\"required\">{{request.message}}</textarea>
                    </p>

                    {{ mf.recaptcha }}

                    <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"{% trans 'Send' %}\" />
                    
                </fieldset>

                <input type=\"hidden\" name=\"anti-spam\" value=\"1\" id=\"anti-spam\" required=\"required\"/>
                </form>
            
            </div>

            <div class=\"grid_6 omega\">
                <ul class=\"contact-us\">
                    <li>
                        {{ company.name }}
                    </li>
                    <li>
                        {{ company.address_1 }}
                    </li>
                    <li>
                        {{ company.address_2 }}
                    </li>
                    <li>
                        {{ company.address_3 }}
                    </li>
                    <li>
                        {{ company.tel }}
                    </li>
                    <li>
                        {{ company.www }}
                    </li>
                    <li>
                        {{ company.email }}
                    </li>
                </ul>
            </div>
            <div class=\"clear\"></div>
        </div>
    </div>

{% endblock %}

{% block js %}
<script type=\"text/javascript\">
\$(function() {
    \$('#anti-spam').remove();

    \$('#public-ticket-create').bind('submit',function(event){
        bb.post(
            'guest/support/ticket_create',
            \$(this).serialize(),
            function(result) {
                bb.redirect('{{ 'support/contact-us/conversation'|link }}' + '/' + result);
            }
        );
        return false;
    });
});
</script>
{% endblock %}
", "mod_support_contact_us.phtml", "/Library/WebServer/Documents/box_billing/bb-themes/boxbilling/html/mod_support_contact_us.phtml");
    }
}
