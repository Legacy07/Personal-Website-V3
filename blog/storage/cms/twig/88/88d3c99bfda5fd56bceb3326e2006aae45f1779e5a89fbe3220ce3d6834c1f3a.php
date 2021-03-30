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
        $tags = array("set" => 2, "for" => 25, "if" => 64);
        $filters = array("escape" => 31, "trans" => 40, "date" => 41, "raw" => 44, "join" => 49, "map" => 49, "page" => 67);
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
    <div class=\"container\" style=\"margin-bottom: 60px;\">
        <!-- add search button -->
        <div class=\"row\">
            <div class=\"col-3 offset-9\">
                <div class=\"p-1 bg-light rounded rounded-pill shadow-sm mb-4\">
                    <div class=\"input-group\" style=\"height: 30px;\">
                        <div class=\"input-group-prepend\">
                            <button id=\"search-button\" type=\"submit\" class=\"btn btn-link\"
                                style=\"color: var(--primary);\">
                                <i class=\"fa fa-search fa-lg mt-2\"></i>
                            </button>
                        </div>
                        <input type=\"search\" aria-describedby=\"search-button\" class=\"border-0 bg-light\"
                            style=\"width: 90%;\">
                    </div>
                </div>
            </div>
        </div>

        <!-- look at design - https://codepen.io/ChynoDeluxe/pen/bdXeqQ -->
        <div class=\"row\">
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 26
            echo "            <div class=\"col-md-6 col-xs-4 mt-5\">
                <div class=\"card float-right blog-card\" style=\"height: 100%;\">
                    <div class=\"row\">
                        <div class=\"col-sm-5\">
                            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 30));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 31
                echo "                            <img class=\"\" height=\"225px\" width=\"100%\" data-src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                echo "\"
                                src=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                echo "\">
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                        </div>
                        <div class=\"col-sm-7\">
                            <div class=\"card-block px-2\">
                                <h2 class=\"blog-title\"><a class=\"title\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "</a>
                                </h2>
                                <p class=\"card-text\">
                                    ";
            // line 40
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.posted_byline_no_categories", ["date" => twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 41
$context["post"], "published_at", [], "any", false, false, true, 41), 41, $this->source), call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.date_format"]))]]);
            // line 42
            echo "
                                </p>
                                <p class=\"excerpt\">";
            // line 44
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, true, 44), 44, $this->source);
            echo "</p>
                            </div>

                            <ul class=\"blog-categories\">
                                ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 48));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 49
                echo "                                <!-- ";
                $context["categoryLinks"] = twig_join_filter(twig_array_map($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 49), 49, $this->source), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (((("<a href=\"" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "url", [], "any", false, false, true, 49), 49, $this->source)) . "\">") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "name", [], "any", false, false, true, 49), 49, $this->source)) . "</a>"); }), ", ");
                echo " -->
                                <li>";
                // line 50
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                echo "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                            </ul>
                        </div>
                    </div>
                </div>

                <!-- <li class=\"no-data\">";
            // line 57
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "noPostsMessage", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "</li> -->
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </div>
    </div>


    <!-- ";
        // line 64
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 64) > 1)) {
            // line 65
            echo "    <ul class=\"pagination\" style=\"margin-left: 100px;\" >
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
        return array (  241 => 84,  237 => 83,  229 => 79,  227 => 78,  224 => 77,  213 => 74,  208 => 73,  204 => 72,  201 => 71,  193 => 67,  191 => 66,  188 => 65,  186 => 64,  180 => 60,  171 => 57,  164 => 52,  156 => 50,  151 => 49,  147 => 48,  140 => 44,  136 => 42,  134 => 41,  133 => 40,  125 => 37,  120 => 34,  110 => 32,  105 => 31,  101 => 30,  95 => 26,  91 => 25,  67 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<body>
    {% set posts = __SELF__.posts %}

    <div class=\"container\" style=\"margin-bottom: 60px;\">
        <!-- add search button -->
        <div class=\"row\">
            <div class=\"col-3 offset-9\">
                <div class=\"p-1 bg-light rounded rounded-pill shadow-sm mb-4\">
                    <div class=\"input-group\" style=\"height: 30px;\">
                        <div class=\"input-group-prepend\">
                            <button id=\"search-button\" type=\"submit\" class=\"btn btn-link\"
                                style=\"color: var(--primary);\">
                                <i class=\"fa fa-search fa-lg mt-2\"></i>
                            </button>
                        </div>
                        <input type=\"search\" aria-describedby=\"search-button\" class=\"border-0 bg-light\"
                            style=\"width: 90%;\">
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
                                <h2 class=\"blog-title\"><a class=\"title\" href=\"{{ post.url }}\">{{ post.title }}</a>
                                </h2>
                                <p class=\"card-text\">
                                    {{ 'rainlab.blog::lang.post.posted_byline_no_categories' | trans({
                                        date: post.published_at | date('rainlab.blog::lang.post.date_format' | trans)
                                    }) }}
                                </p>
                                <p class=\"excerpt\">{{ post.summary | raw }}</p>
                            </div>

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
    <ul class=\"pagination\" style=\"margin-left: 100px;\" >
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
