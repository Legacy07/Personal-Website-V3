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
        $tags = array("set" => 2, "for" => 23, "if" => 44);
        $filters = array("escape" => 29, "trans" => 37, "date" => 38, "raw" => 41, "join" => 45, "map" => 45, "page" => 76);
        $functions = array("range" => 81);

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
            <div class=\"col-3 offset-9\">
                <div class=\"p-1 bg-light rounded rounded-pill shadow-sm mb-4\">
                    <div class=\"input-group\" style=\"height: 30px;\">
                        <div class=\"input-group-prepend\">
                            <button id=\"search-button\" type=\"submit\" class=\"btn btn-link\" style=\"color: var(--primary);\">
                                <i class=\"fa fa-search fa-lg mt-2\"></i>
                            </button>
                        </div>
                        <input type=\"search\" aria-describedby=\"search-button\" class=\"border-0 bg-light\" style=\"width: 90%;\">
                    </div>
                </div>
            </div>
        </div>

        <!-- look at design - https://codepen.io/ChynoDeluxe/pen/bdXeqQ -->
        <div class=\"row\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 24
            echo "            <div class=\"col-md-6 col-xs-4 mt-5\">
                <div class=\"card float-right blog-card\" style=\"height: 100%;\">
                    <div class=\"row\">
                        <div class=\"col-sm-5\">
                            ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 29
                echo "                            <img class=\"\" height=\"225px\" width=\"100%\" data-src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "\"
                                src=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                echo "\">
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                        </div>
                        <div class=\"col-sm-7\">
                            <div class=\"card-block px-2\">
                                <h2 class=\"blog-title\"><a class=\"title\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "</a></h2>
                                <p class=\"card-text\">
                                    ";
            // line 37
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.posted_byline_no_categories", ["date" => twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 38
$context["post"], "published_at", [], "any", false, false, true, 38), 38, $this->source), call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.date_format"]))]]);
            // line 39
            echo "
                                </p>
                                <p class=\"excerpt\">";
            // line 41
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, true, 41), 41, $this->source);
            echo "</p>
                            </div>

                            <!-- ";
            // line 44
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 44), "count", [], "any", false, false, true, 44)) {
                // line 45
                echo "                            ";
                $context["categoryLinks"] = twig_join_filter(twig_array_map($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 45), 45, $this->source), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (((("<a href=\"" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "url", [], "any", false, false, true, 45), 45, $this->source)) . "\">") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "name", [], "any", false, false, true, 45), 45, $this->source)) . "</a>"); }), ", ");
                // line 46
                echo "
                            ";
                // line 47
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.posted_byline", ["categories" =>                 // line 48
($context["categoryLinks"] ?? null)]]);
                // line 50
                echo "
                            ";
            } else {
                // line 52
                echo "                            ";
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.posted_byline_no_categories", ["date" => twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                 // line 53
$context["post"], "published_at", [], "any", false, false, true, 53), 53, $this->source), call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.date_format"]))]]);
                // line 54
                echo "
                            ";
            }
            // line 55
            echo " -->

                            <ul class=\"blog-categories\">
                                ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 58));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 59
                echo "                                <!-- ";
                $context["categoryLinks"] = twig_join_filter(twig_array_map($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 59), 59, $this->source), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (((("<a href=\"" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "url", [], "any", false, false, true, 59), 59, $this->source)) . "\">") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "name", [], "any", false, false, true, 59), 59, $this->source)) . "</a>"); }), ", ");
                echo " -->
                                <li>";
                // line 60
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                echo "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                            </ul>
                        </div>
                    </div>
                </div>

                <!-- <li class=\"no-data\">";
            // line 67
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "noPostsMessage", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
            echo "</li> -->
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        </div>
    </div>

    <!-- ";
        // line 73
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 73) > 1)) {
            // line 74
            echo "    <ul class=\"pagination\">
        ";
            // line 75
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 75) > 1)) {
                // line 76
                echo "        <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 76), "baseFileName", [], "any", false, false, true, 76), 76, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageParam", [], "any", false, false, true, 76) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 76) - 1)]);
                echo "\">&larr;
                Prev</a>
        </li>
        ";
            }
            // line 80
            echo "
        ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 81)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 82
                echo "        <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 82) == $context["page"])) ? ("active") : (null));
                echo "\">
            <a href=\"";
                // line 83
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 83), "baseFileName", [], "any", false, false, true, 83), 83, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageParam", [], "any", false, false, true, 83) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 83, $this->source), "html", null, true);
                echo "</a>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "
        ";
            // line 87
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 87) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 87))) {
                // line 88
                echo "        <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 88), "baseFileName", [], "any", false, false, true, 88), 88, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageParam", [], "any", false, false, true, 88) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 88) + 1)]);
                echo "\">Next
                &rarr;</a>
        </li>
        ";
            }
            // line 92
            echo "    </ul>
    ";
        }
        // line 93
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
        return array (  264 => 93,  260 => 92,  252 => 88,  250 => 87,  247 => 86,  236 => 83,  231 => 82,  227 => 81,  224 => 80,  216 => 76,  214 => 75,  211 => 74,  209 => 73,  204 => 70,  195 => 67,  188 => 62,  180 => 60,  175 => 59,  171 => 58,  166 => 55,  162 => 54,  160 => 53,  158 => 52,  154 => 50,  152 => 48,  151 => 47,  148 => 46,  145 => 45,  143 => 44,  137 => 41,  133 => 39,  131 => 38,  130 => 37,  123 => 35,  118 => 32,  108 => 30,  103 => 29,  99 => 28,  93 => 24,  89 => 23,  67 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<body>
    {% set posts = __SELF__.posts %}

    <div class=\"container padding-left\" style=\"margin-bottom: 60px;\">
        <!-- add search button -->
        <div class=\"row\">
            <div class=\"col-3 offset-9\">
                <div class=\"p-1 bg-light rounded rounded-pill shadow-sm mb-4\">
                    <div class=\"input-group\" style=\"height: 30px;\">
                        <div class=\"input-group-prepend\">
                            <button id=\"search-button\" type=\"submit\" class=\"btn btn-link\" style=\"color: var(--primary);\">
                                <i class=\"fa fa-search fa-lg mt-2\"></i>
                            </button>
                        </div>
                        <input type=\"search\" aria-describedby=\"search-button\" class=\"border-0 bg-light\" style=\"width: 90%;\">
                    </div>
                </div>
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
                            <img class=\"\" height=\"225px\" width=\"100%\" data-src=\"{{ image.filename }}\"
                                src=\"{{ image.path }}\" alt=\"{{ image.description }}\">
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
