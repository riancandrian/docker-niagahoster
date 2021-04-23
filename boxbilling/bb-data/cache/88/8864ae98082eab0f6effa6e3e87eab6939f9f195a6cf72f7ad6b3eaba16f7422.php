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

/* mod_forum_index.phtml */
class __TwigTemplate_3020b79790f620ec8626bfd849cf063c7d22351b6e6636e66a82284617b34fda extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_forum_index.phtml", 1);
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
        echo gettext("Forum");
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"big-light-icon i-forum\"></span></div>
            <h2>";
        // line 9
        echo gettext("Forum");
        echo "</h2>
            <p>";
        // line 10
        echo gettext("Welcome to our forums. If you wish to become a member and post, you have to be registered member.");
        echo "</p>
        </div>
        <div class=\"block\">

            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "forum_get_categories", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["cat_name"] => $context["forums"]) {
            // line 15
            echo "            <table>
                <caption>";
            // line 16
            echo twig_escape_filter($this->env, $context["cat_name"], "html", null, true);
            echo "</caption>
                <thead>
                    <tr>
                        <th>&nbsp;</th>
                        <th style=\"width:80%;\">";
            // line 20
            echo gettext("Forum");
            echo "</th>
                        <th>";
            // line 21
            echo gettext("Threads");
            echo "</th>
                        <th>";
            // line 22
            echo gettext("Posts");
            echo "</th>
                    </tr>
                </thead>

                <tbody>
                    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["forums"]);
            foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
                // line 28
                echo "                    <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle([0 => "odd", 1 => "even"], ($context["i"] ?? null)), "html", null, true);
                echo "\">
                        <td>
                            <span class=\"forum-status ";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forum"], "status", [], "any", false, false, false, 30), "html", null, true);
                echo "\"></span>
                        </td>
                        <td>
                            <a href=\"";
                // line 33
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/forum");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forum"], "slug", [], "any", false, false, false, 33), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forum"], "title", [], "any", false, false, false, 33), "html", null, true);
                echo "</a>
                            <p>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forum"], "description", [], "any", false, false, false, 34), "html", null, true);
                echo "</p>
                        </td>
                        <td>
                            ";
                // line 37
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["forum"], "stats", [], "any", false, true, false, 37), "topics_count", [], "any", true, true, false, 37)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["forum"], "stats", [], "any", false, true, false, 37), "topics_count", [], "any", false, false, false, 37), 0)) : (0)), "html", null, true);
                echo "
                        </td>
                        <td>";
                // line 39
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["forum"], "stats", [], "any", false, true, false, 39), "posts_count", [], "any", true, true, false, 39)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["forum"], "stats", [], "any", false, true, false, 39), "posts_count", [], "any", false, false, false, 39), 0)) : (0)), "html", null, true);
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forum'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                </tbody>
            </table>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['cat_name'], $context['forums'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            
            ";
        // line 46
        if ((($context["client"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "forum_favorites", [], "any", false, false, false, 46))) {
            // line 47
            echo "            <h2>";
            echo gettext("Favorite topics");
            echo "</h2>
            <table>
                <thead>
                    <tr>
                        <th style=\"width:5%\">&nbsp;</th>
                        <th style=\"width:5%\">&nbsp;</th>
                        <th style=\"width:40%\">";
            // line 53
            echo gettext("Thread / Thread Starter");
            echo "</th>
                        <th>";
            // line 54
            echo gettext("Last post");
            echo "</th>
                        <th>";
            // line 55
            echo gettext("Replies");
            echo "</th>
                        <th>";
            // line 56
            echo gettext("Views");
            echo "</th>
                    </tr>
                </thead>

                <tbody>
                    ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "forum_favorites", [], "any", false, false, false, 61));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["topic"]) {
                // line 62
                echo "                    <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle([0 => "odd", 1 => "even"], $context["i"]), "html", null, true);
                echo "\">
                        <td>
                            <span class=\"forum-status ";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "status", [], "any", false, false, false, 64), "html", null, true);
                echo "\"></span>
                        </td>
                        <td>
                            <img src=\"";
                // line 67
                echo twig_escape_filter($this->env, twig_gravatar_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "first", [], "any", false, false, false, 67), "author", [], "any", false, false, false, 67), "email", [], "any", false, false, false, 67)), "html", null, true);
                echo "?size=30\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "first", [], "any", false, false, false, 67), "author", [], "any", false, false, false, 67), "name", [], "any", false, false, false, 67), "html", null, true);
                echo "\" />
                        </td>
                        <td>
                            <a href=\"";
                // line 70
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/forum");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "forum", [], "any", false, false, false, 70), "slug", [], "any", false, false, false, 70), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "slug", [], "any", false, false, false, 70), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "title", [], "any", false, false, false, 70), "html", null, true);
                echo "</a>
                            <p style=\"font-size: .9em\">";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "first", [], "any", false, false, false, 71), "author", [], "any", false, false, false, 71), "name", [], "any", false, false, false, 71), "html", null, true);
                echo "</p>
                        </td>
                        <td>
                            ";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_bb_date(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "last", [], "any", false, false, false, 74), "created_at", [], "any", false, false, false, 74)), "html", null, true);
                echo "
                            <p style=\"font-size: .9em\">";
                // line 75
                echo gettext("by");
                echo " <a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/forum");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "forum", [], "any", false, false, false, 75), "slug", [], "any", false, false, false, 75), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "slug", [], "any", false, false, false, 75), "html", null, true);
                echo "#m-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "last", [], "any", false, false, false, 75), "id", [], "any", false, false, false, 75), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "last", [], "any", false, false, false, 75), "author", [], "any", false, false, false, 75), "name", [], "any", false, false, false, 75), "html", null, true);
                echo " ";
                echo "</p>
                        </td>
                        <td>";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "stats", [], "any", false, false, false, 77), "posts_count", [], "any", false, false, false, 77), "html", null, true);
                echo "</td>
                        <td>";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "stats", [], "any", false, false, false, 78), "views_count", [], "any", false, false, false, 78), "html", null, true);
                echo "</td>
                    </tr>

                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 82
                echo "
                    <tr>
                        <td colspan=\"6\">";
                // line 84
                echo gettext("The list is empty");
                echo "</td>
                    </tr>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['topic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "
                </tbody>

            </table>
            ";
        }
        // line 93
        echo "        </div>
    </div>

    ";
        // line 96
        if ( !($context["client"] ?? null)) {
            // line 97
            echo "    <p><button class=\"bb-button bb-button-red\" type=\"button\" onclick=\"parent.location='";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/login");
            echo "'\">";
            echo gettext("Register");
            echo "</button></p>
    ";
        }
        // line 99
        echo "    
";
    }

    public function getTemplateName()
    {
        return "mod_forum_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 99,  292 => 97,  290 => 96,  285 => 93,  278 => 88,  268 => 84,  264 => 82,  255 => 78,  251 => 77,  235 => 75,  231 => 74,  225 => 71,  215 => 70,  207 => 67,  201 => 64,  195 => 62,  190 => 61,  182 => 56,  178 => 55,  174 => 54,  170 => 53,  160 => 47,  158 => 46,  155 => 45,  147 => 42,  138 => 39,  133 => 37,  127 => 34,  119 => 33,  113 => 30,  107 => 28,  103 => 27,  95 => 22,  91 => 21,  87 => 20,  80 => 16,  77 => 15,  73 => 14,  66 => 10,  62 => 9,  57 => 6,  53 => 5,  46 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}

{% block meta_title %}{% trans 'Forum' %}{% endblock %}

{% block content %}
    <div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"big-light-icon i-forum\"></span></div>
            <h2>{% trans 'Forum' %}</h2>
            <p>{% trans 'Welcome to our forums. If you wish to become a member and post, you have to be registered member.' %}</p>
        </div>
        <div class=\"block\">

            {% for cat_name, forums in guest.forum_get_categories %}
            <table>
                <caption>{{cat_name}}</caption>
                <thead>
                    <tr>
                        <th>&nbsp;</th>
                        <th style=\"width:80%;\">{% trans 'Forum' %}</th>
                        <th>{% trans 'Threads' %}</th>
                        <th>{% trans 'Posts' %}</th>
                    </tr>
                </thead>

                <tbody>
                    {%  for forum in forums %}
                    <tr class=\"{{ cycle(['odd', 'even'], i) }}\">
                        <td>
                            <span class=\"forum-status {{forum.status}}\"></span>
                        </td>
                        <td>
                            <a href=\"{{ '/forum'|link }}/{{forum.slug}}\">{{forum.title}}</a>
                            <p>{{forum.description}}</p>
                        </td>
                        <td>
                            {{forum.stats.topics_count|default(0)}}
                        </td>
                        <td>{{forum.stats.posts_count|default(0)}}</td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
            {% endfor %}
            
            {% if client and client.forum_favorites %}
            <h2>{% trans 'Favorite topics' %}</h2>
            <table>
                <thead>
                    <tr>
                        <th style=\"width:5%\">&nbsp;</th>
                        <th style=\"width:5%\">&nbsp;</th>
                        <th style=\"width:40%\">{% trans 'Thread / Thread Starter' %}</th>
                        <th>{% trans 'Last post' %}</th>
                        <th>{% trans 'Replies' %}</th>
                        <th>{% trans 'Views' %}</th>
                    </tr>
                </thead>

                <tbody>
                    {% for i, topic in client.forum_favorites %}
                    <tr class=\"{{ cycle(['odd', 'even'], i) }}\">
                        <td>
                            <span class=\"forum-status {{topic.status}}\"></span>
                        </td>
                        <td>
                            <img src=\"{{ topic.first.author.email|gravatar }}?size=30\" alt=\"{{ topic.first.author.name }}\" />
                        </td>
                        <td>
                            <a href=\"{{ '/forum'|link }}/{{topic.forum.slug}}/{{topic.slug}}\">{{topic.title}}</a>
                            <p style=\"font-size: .9em\">{{ topic.first.author.name }}</p>
                        </td>
                        <td>
                            {{ topic.last.created_at|bb_date }}
                            <p style=\"font-size: .9em\">{% trans 'by' %} <a href=\"{{ '/forum'|link }}/{{topic.forum.slug}}/{{topic.slug}}#m-{{ topic.last.id }}\">{{ topic.last.author.name }} {#<img src=\"{{ topic.last.author.email|gravatar }}?size=15\" alt=\"{{ topic.last.author.name }}\"></a>#}</p>
                        </td>
                        <td>{{ topic.stats.posts_count }}</td>
                        <td>{{ topic.stats.views_count }}</td>
                    </tr>

                    {% else %}

                    <tr>
                        <td colspan=\"6\">{% trans 'The list is empty' %}</td>
                    </tr>

                    {% endfor %}

                </tbody>

            </table>
            {% endif %}
        </div>
    </div>

    {% if not client %}
    <p><button class=\"bb-button bb-button-red\" type=\"button\" onclick=\"parent.location='{{ '/login'|link }}'\">{% trans 'Register' %}</button></p>
    {% endif %}
    
{% endblock %}", "mod_forum_index.phtml", "/var/www/public/boxbilling/bb-themes/boxbilling/html/mod_forum_index.phtml");
    }
}
