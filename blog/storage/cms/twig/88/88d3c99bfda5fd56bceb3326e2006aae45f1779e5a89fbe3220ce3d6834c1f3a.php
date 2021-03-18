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
        $tags = array("set" => 2, "for" => 8, "if" => 22);
        $filters = array("escape" => 14, "trans" => 23, "date" => 24, "raw" => 33, "join" => 41, "map" => 41, "page" => 55);
        $functions = array("range" => 60);

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
    <div class=\"container\">

        <!-- look at design - https://codepen.io/ChynoDeluxe/pen/bdXeqQ -->
        <div class=\"row\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "            <div class=\"col-6\">
                <div class=\"card float-right\">
                    <div class=\"row\">
                        <div class=\"col-sm-5\">
                            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 13));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 14
                echo "                            <img class=\"d-block w-100\" data-src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "\">
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "                            <!-- <img class=\"d-block w-100\" src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "img", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "\" alt=\"\"> -->
                        </div>
                        <div class=\"col-sm-7\">
                            <div class=\"card-block px-2\">
                                <h4 class=\"card-title\"><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "</a></h4>
                                <p class=\"card-text\">
                                    ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 22), "count", [], "any", false, false, true, 22)) {
                // line 23
                echo "                                    ";
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.posted_byline", ["date" => twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                 // line 24
$context["post"], "published_at", [], "any", false, false, true, 24), 24, $this->source), call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.date_format"])), "categories" =>                 // line 25
($context["categoryLinks"] ?? null)]]);
                // line 26
                echo "
                                    ";
            } else {
                // line 28
                echo "                                    ";
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.posted_byline_no_categories", ["date" => twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                 // line 29
$context["post"], "published_at", [], "any", false, false, true, 29), 29, $this->source), call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.date_format"]))]]);
                // line 30
                echo "
                                    ";
            }
            // line 32
            echo "                                </p>
                                <p class=\"excerpt\">";
            // line 33
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, true, 33), 33, $this->source);
            echo "</p>
                            </div>

                        </div>
                        <div class=\"w-100\"></div>

                        <div class=\"card-footer w-100 text-muted\">
                            Tags:
                            ";
            // line 41
            $context["categoryLinks"] = twig_join_filter(twig_array_map($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 41), 41, $this->source), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (((("<a href=\"" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "url", [], "any", false, false, true, 41), 41, $this->source)) . "\">") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "name", [], "any", false, false, true, 41), 41, $this->source)) . "</a>"); }), ", ");
            // line 42
            echo "                        </div>
                    </div>
                </div>

                <!-- <li class=\"no-data\">";
            // line 46
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "noPostsMessage", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "</li> -->
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </div>
    </div>

    ";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 52) > 1)) {
            // line 53
            echo "    <ul class=\"pagination\">
        ";
            // line 54
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 54) > 1)) {
                // line 55
                echo "        <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 55), "baseFileName", [], "any", false, false, true, 55), 55, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageParam", [], "any", false, false, true, 55) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 55) - 1)]);
                echo "\">&larr;
                Prev</a>
        </li>
        ";
            }
            // line 59
            echo "
        ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 60)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 61
                echo "        <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 61) == $context["page"])) ? ("active") : (null));
                echo "\">
            <a href=\"";
                // line 62
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 62), "baseFileName", [], "any", false, false, true, 62), 62, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageParam", [], "any", false, false, true, 62) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 62, $this->source), "html", null, true);
                echo "</a>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "
        ";
            // line 66
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 66) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 66))) {
                // line 67
                echo "        <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 67), "baseFileName", [], "any", false, false, true, 67), 67, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageParam", [], "any", false, false, true, 67) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 67) + 1)]);
                echo "\">Next
                &rarr;</a>
        </li>
        ";
            }
            // line 71
            echo "    </ul>
    ";
        }
        // line 73
        echo "</body>";
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
        return array (  226 => 73,  222 => 71,  214 => 67,  212 => 66,  209 => 65,  198 => 62,  193 => 61,  189 => 60,  186 => 59,  178 => 55,  176 => 54,  173 => 53,  171 => 52,  166 => 49,  157 => 46,  151 => 42,  149 => 41,  138 => 33,  135 => 32,  131 => 30,  129 => 29,  127 => 28,  123 => 26,  121 => 25,  120 => 24,  118 => 23,  116 => 22,  109 => 20,  101 => 16,  88 => 14,  84 => 13,  78 => 9,  74 => 8,  67 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<body>
    {% set posts = __SELF__.posts %}

    <div class=\"container\">

        <!-- look at design - https://codepen.io/ChynoDeluxe/pen/bdXeqQ -->
        <div class=\"row\">
            {% for post in posts %}
            <div class=\"col-6\">
                <div class=\"card float-right\">
                    <div class=\"row\">
                        <div class=\"col-sm-5\">
                            {% for image in post.featured_images %}
                            <img class=\"d-block w-100\" data-src=\"{{ image.filename }}\" src=\"{{ image.path }}\" alt=\"{{ image.description }}\">
                            {% endfor %}
                            <!-- <img class=\"d-block w-100\" src=\"{{ post.img }}\" alt=\"\"> -->
                        </div>
                        <div class=\"col-sm-7\">
                            <div class=\"card-block px-2\">
                                <h4 class=\"card-title\"><a href=\"{{ post.url }}\">{{ post.title }}</a></h4>
                                <p class=\"card-text\">
                                    {% if post.categories.count %}
                                    {{ 'rainlab.blog::lang.post.posted_byline' | trans({
                                                date: post.published_at | date('rainlab.blog::lang.post.date_format' | trans),
                                                categories: categoryLinks
                                            }) }}
                                    {% else %}
                                    {{ 'rainlab.blog::lang.post.posted_byline_no_categories' | trans({
                                                date: post.published_at | date('rainlab.blog::lang.post.date_format' | trans)
                                            }) }}
                                    {% endif %}
                                </p>
                                <p class=\"excerpt\">{{ post.summary | raw }}</p>
                            </div>

                        </div>
                        <div class=\"w-100\"></div>

                        <div class=\"card-footer w-100 text-muted\">
                            Tags:
                            {% set categoryLinks = post.categories | map(c => \"<a href=\\\"#{c.url}\\\">#{c.name}</a>\") | join(', ') %}
                        </div>
                    </div>
                </div>

                <!-- <li class=\"no-data\">{{ __SELF__.noPostsMessage }}</li> -->
            </div>
            {% endfor %}
        </div>
    </div>

    {% if posts.lastPage > 1 %}
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
    {% endif %}
</body>", "C:\\xampp\\htdocs\\personal-website-v3\\blog/plugins/rainlab/blog/components/posts/default.htm", "");
    }
}
