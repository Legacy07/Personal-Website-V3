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

/* C:\xampp\htdocs\personal-website-v3\blog/plugins/rainlab/blog/components/posts/default.htm */
class __TwigTemplate_b2c19d37fc7bf5bf04e2a8c3fe9acb072e358c14309c818333023047c3d6bea8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("set" => 2, "for" => 14, "if" => 35);
        $filters = array("escape" => 20, "trans" => 28, "date" => 29, "raw" => 32, "join" => 36, "map" => 36, "page" => 67);
        $functions = array("range" => 72);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'trans', 'date', 'raw', 'join', 'map', 'page'],
                ['range']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<body>
    ";
        // line 2
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "posts", [], "any", false, false, true, 2);
        // line 3
        echo "
    <div class=\"container padding-left\" style=\"margin-bottom: 60px;\">
        <!-- add search button -->
        <div class=\"row\">
            <div class=\"col-6\">
                <input type=\"text\">
            </div>
        </div>

        <!-- look at design - https://codepen.io/ChynoDeluxe/pen/bdXeqQ -->
        <div class=\"row\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 15
            echo "            <div class=\"col-md-6 col-xs-4 mt-5\">
                <div class=\"card float-right blog-card\" style=\"height: 100%;\">
                    <div class=\"row\">
                        <div class=\"col-sm-5\">
                            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 20
                echo "                            <img class=\"\" height=\"225px\" width=\"100%\" data-src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "\"
                                alt=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "\">
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                        </div>
                        <div class=\"col-sm-7\">
                            <div class=\"card-block px-2\">
                                <h2 class=\"blog-title\"><a class=\"title\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "</a></h2>
                                <p class=\"card-text\">
                                    ";
            // line 28
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.posted_byline_no_categories", ["date" => twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 29
$context["post"], "published_at", [], "any", false, false, true, 29), 29, $this->source), call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.date_format"]))]]);
            // line 30
            echo "
                                </p>
                                <p class=\"excerpt\">";
            // line 32
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, true, 32), 32, $this->source);
            echo "</p>
                            </div>

                            <!-- ";
            // line 35
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 35), "count", [], "any", false, false, true, 35)) {
                // line 36
                echo "                            ";
                $context["categoryLinks"] = twig_join_filter(twig_array_map($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 36), 36, $this->source), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (((("<a href=\"" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "url", [], "any", false, false, true, 36), 36, $this->source)) . "\">") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "name", [], "any", false, false, true, 36), 36, $this->source)) . "</a>"); }), ", ");
                // line 37
                echo "
                            ";
                // line 38
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.posted_byline", ["categories" =>                 // line 39
($context["categoryLinks"] ?? null)]]);
                // line 41
                echo "
                            ";
            } else {
                // line 43
                echo "                            ";
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.posted_byline_no_categories", ["date" => twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                 // line 44
$context["post"], "published_at", [], "any", false, false, true, 44), 44, $this->source), call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.date_format"]))]]);
                // line 45
                echo "
                            ";
            }
            // line 46
            echo " -->

                            <ul class=\"blog-categories\">
                                ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 50
                echo "                                <!-- ";
                $context["categoryLinks"] = twig_join_filter(twig_array_map($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 50), 50, $this->source), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (((("<a href=\"" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "url", [], "any", false, false, true, 50), 50, $this->source)) . "\">") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "name", [], "any", false, false, true, 50), 50, $this->source)) . "</a>"); }), ", ");
                echo " -->
                                <li>";
                // line 51
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                echo "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                            </ul>
                        </div>
                    </div>
                </div>

                <!-- <li class=\"no-data\">";
            // line 58
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "noPostsMessage", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo "</li> -->
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </div>
    </div>

    <!-- ";
        // line 64
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 64) > 1)) {
            // line 65
            echo "    <ul class=\"pagination\">
        ";
            // line 66
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 66) > 1)) {
                // line 67
                echo "        <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 67), "baseFileName", [], "any", false, false, true, 67), 67, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageParam", [], "any", false, false, true, 67) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 67) - 1)]);
                echo "\">&larr;
                Prev</a>
        </li>
        ";
            }
            // line 71
            echo "
        ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 72)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 73
                echo "        <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 73) == $context["page"])) ? ("active") : (null));
                echo "\">
            <a href=\"";
                // line 74
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 74), "baseFileName", [], "any", false, false, true, 74), 74, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageParam", [], "any", false, false, true, 74) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 74, $this->source), "html", null, true);
                echo "</a>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "
        ";
            // line 78
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 78) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 78))) {
                // line 79
                echo "        <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 79), "baseFileName", [], "any", false, false, true, 79), 79, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageParam", [], "any", false, false, true, 79) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 79) + 1)]);
                echo "\">Next
                &rarr;</a>
        </li>
        ";
            }
            // line 83
            echo "    </ul>
    ";
        }
        // line 84
        echo " -->
</body>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\personal-website-v3\\blog/plugins/rainlab/blog/components/posts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 84,  251 => 83,  243 => 79,  241 => 78,  238 => 77,  227 => 74,  222 => 73,  218 => 72,  215 => 71,  207 => 67,  205 => 66,  202 => 65,  200 => 64,  195 => 61,  186 => 58,  179 => 53,  171 => 51,  166 => 50,  162 => 49,  157 => 46,  153 => 45,  151 => 44,  149 => 43,  145 => 41,  143 => 39,  142 => 38,  139 => 37,  136 => 36,  134 => 35,  128 => 32,  124 => 30,  122 => 29,  121 => 28,  114 => 26,  109 => 23,  101 => 21,  94 => 20,  90 => 19,  84 => 15,  80 => 14,  67 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<body>
    {% set posts = __SELF__.posts %}

    <div class=\"container padding-left\" style=\"margin-bottom: 60px;\">
        <!-- add search button -->
        <div class=\"row\">
            <div class=\"col-6\">
                <input type=\"text\">
            </div>
        </div>

        <!-- look at design - https://codepen.io/ChynoDeluxe/pen/bdXeqQ -->
        <div class=\"row\">
            {% for post in posts %}
            <div class=\"col-md-6 col-xs-4 mt-5\">
                <div class=\"card float-right blog-card\" style=\"height: 100%;\">
                    <div class=\"row\">
                        <div class=\"col-sm-5\">
                            {% for image in post.featured_images %}
                            <img class=\"\" height=\"225px\" width=\"100%\" data-src=\"{{ image.filename }}\" src=\"{{ image.path }}\"
                                alt=\"{{ image.description }}\">
                            {% endfor %}
                        </div>
                        <div class=\"col-sm-7\">
                            <div class=\"card-block px-2\">
                                <h2 class=\"blog-title\"><a class=\"title\" href=\"{{ post.url }}\">{{ post.title }}</a></h2>
                                <p class=\"card-text\">
                                    {{ 'rainlab.blog::lang.post.posted_byline_no_categories' | trans({
                                        date: post.published_at | date('rainlab.blog::lang.post.date_format' | trans)
                                    }) }}
                                </p>
                                <p class=\"excerpt\">{{ post.summary | raw }}</p>
                            </div>

                            <!-- {% if post.categories.count %}
                            {% set categoryLinks = post.categories | map(c => \"<a href=\\\"#{c.url}\\\">#{c.name}</a>\") | join(', ') %}

                            {{ 'rainlab.blog::lang.post.posted_byline' | trans({
                                categories: categoryLinks
                            })
                         }}
                            {% else %}
                            {{ 'rainlab.blog::lang.post.posted_byline_no_categories' | trans({
                                date: post.published_at | date('rainlab.blog::lang.post.date_format'|trans)
                            }) }}
                            {% endif %} -->

                            <ul class=\"blog-categories\">
                                {% for category in post.categories %}
                                <!-- {% set categoryLinks = post.categories | map(c => \"<a href=\\\"#{c.url}\\\">#{c.name}</a>\") | join(', ') %} -->
                                <li>{{ category.name }}</li>
                                {% endfor %}
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- <li class=\"no-data\">{{ __SELF__.noPostsMessage }}</li> -->
            </div>
            {% endfor %}
        </div>
    </div>

    <!-- {% if posts.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if posts.currentPage > 1 %}
        <li><a href=\"{{ this.page.baseFileName | page({ (__SELF__.pageParam): (posts.currentPage-1) }) }}\">&larr;
                Prev</a>
        </li>
        {% endif %}

        {% for page in 1..posts.lastPage %}
        <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
            <a href=\"{{ this.page.baseFileName | page({ (__SELF__.pageParam): page }) }}\">{{ page }}</a>
        </li>
        {% endfor %}

        {% if posts.lastPage > posts.currentPage %}
        <li><a href=\"{{ this.page.baseFileName | page({ (__SELF__.pageParam): (posts.currentPage+1) }) }}\">Next
                &rarr;</a>
        </li>
        {% endif %}
    </ul>
    {% endif %} -->
</body>", "C:\\xampp\\htdocs\\personal-website-v3\\blog/plugins/rainlab/blog/components/posts/default.htm", "");
    }
}
