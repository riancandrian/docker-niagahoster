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

/* mod_kb_index.phtml */
class __TwigTemplate_3debfb1f06e5493d95f2b1e63a0694c78a1d9681281e43b164d5b0f718e0323c extends \Twig\Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_kb_index.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Knowledge base");
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "q", [], "any", false, false, false, 7)) {
            // line 8
            echo "        ";
            $context["kbcategories"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "kb_category_get_list", [0 => ["q" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "q", [], "any", false, false, false, 8)]], "method", false, false, false, 8);
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "        ";
            $context["kbcategories"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "kb_category_get_list", [], "any", false, false, false, 10);
            // line 11
            echo "    ";
        }
        // line 12
        echo "
<div class=\"h-block\" >
    <div class=\"h-block-header\">
        <div class=\"icon\"><span class=\"big-light-icon i-kb\"></span></div>
        <h2>";
        // line 16
        echo gettext("Knowledge base");
        echo "</h2>
    </div>
    <div class=\"block\">
        <div class=\"block\" style=\"text-align: center; margin: 20px 0 20px 0\">
            <form method=\"get\" action=\"";
        // line 20
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("kb");
        echo "\" class=\"search\">
                <p>
                    <input class=\"search text\" name=\"q\" type=\"text\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "q", [], "any", false, false, false, 22), "html", null, true);
        echo "\" placeholder=\"";
        echo gettext("What are you looking for?");
        echo "\">
                    <input class=\"bb-button bb-button-submit\" value=\"";
        // line 23
        echo gettext("Search");
        echo "\" type=\"submit\">
                </p>
            </form>
        </div>

    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["kbcategories"] ?? null), "list", [], "any", false, false, false, 28));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["category"]) {
            // line 29
            echo "        <div class=\"block kb\">
            <h2 class=\"big-dark-icon i-kb\" id=\"category-";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\"><a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("kb");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 30), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 30), "html", null, true);
            echo "</a></h2>
            <ul>
            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "articles", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["i"] => $context["article"]) {
                // line 33
                echo "                <li><a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/kb");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 33), "slug", [], "any", false, false, false, 33), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 33), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 33), "html", null, true);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            </ul>
        </div>

    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "        <p>
            ";
            // line 40
            echo gettext("Try using other keyword. No matches not for keyword:");
            // line 41
            echo "            <b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "q", [], "any", false, false, false, 41), "html", null, true);
            echo "</b>
        </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_kb_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 44,  157 => 41,  155 => 40,  152 => 39,  144 => 35,  129 => 33,  125 => 32,  114 => 30,  111 => 29,  106 => 28,  98 => 23,  92 => 22,  87 => 20,  80 => 16,  74 => 12,  71 => 11,  68 => 10,  65 => 9,  62 => 8,  60 => 7,  57 => 6,  53 => 5,  46 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}

{% block meta_title %}{%trans 'Knowledge base'%}{% endblock %}

{% block content %}

    {% if request.q %}
        {% set kbcategories = guest.kb_category_get_list({\"q\": request.q}) %}
    {% else %}
        {% set kbcategories = guest.kb_category_get_list %}
    {% endif %}

<div class=\"h-block\" >
    <div class=\"h-block-header\">
        <div class=\"icon\"><span class=\"big-light-icon i-kb\"></span></div>
        <h2>{% trans 'Knowledge base' %}</h2>
    </div>
    <div class=\"block\">
        <div class=\"block\" style=\"text-align: center; margin: 20px 0 20px 0\">
            <form method=\"get\" action=\"{{ 'kb'|link }}\" class=\"search\">
                <p>
                    <input class=\"search text\" name=\"q\" type=\"text\" value=\"{{ request.q }}\" placeholder=\"{% trans 'What are you looking for?' %}\">
                    <input class=\"bb-button bb-button-submit\" value=\"{% trans 'Search'%}\" type=\"submit\">
                </p>
            </form>
        </div>

    {% for i, category in kbcategories.list %}
        <div class=\"block kb\">
            <h2 class=\"big-dark-icon i-kb\" id=\"category-{{category.id}}\"><a href=\"{{ 'kb'|link }}/{{ category.slug }}\">{{category.title}}</a></h2>
            <ul>
            {% for i, article in category.articles %}
                <li><a href=\"{{ '/kb'|link }}/{{article.category.slug}}/{{article.slug}}\">{{article.title}}</a></li>
            {% endfor %}
            </ul>
        </div>

    {% else %}
        <p>
            {% trans 'Try using other keyword. No matches not for keyword:' %}
            <b>{{ request.q }}</b>
        </p>
    {% endfor %}
    </div>
</div>

{% endblock %}
", "mod_kb_index.phtml", "/Library/WebServer/Documents/box_billing/bb-themes/boxbilling/html/mod_kb_index.phtml");
    }
}
