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
        $tags = array("set" => 2, "for" => 16, "if" => 55);
        $filters = array("escape" => 22, "trans" => 31, "date" => 32, "raw" => 35, "join" => 40, "map" => 40, "page" => 58);
        $functions = array("range" => 63);

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
    <!-- look at these plugins
    https://octobercms.com/plugin/rahman-blogtags
    https://octobercms.com/plugin/pollozen-nextprevpost
    https://octobercms.com/plugin/pkleindienst-blogsearch
    https://octobercms.com/plugin/al3xtig3r-blogutils
    https://octobercms.com/plugin/zakir-tableofcontent
    https://octobercms.com/plugin/flynsarmy-commentableratings
    https://octobercms.com/plugin/pmietlicki-problogsearch
     -->
    <div class=\"container\" style=\"margin-bottom: 60px;\">
        <!-- look at design - https://codepen.io/ChynoDeluxe/pen/bdXeqQ -->
        <div class=\"row\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 17
            echo "            <div class=\"col-md-6 col-xs-4 mt-5\">
                <div class=\"card float-right blog-card\" style=\"height: 100%;\">
                    <div class=\"row\">
                        <div class=\"col-sm-5\">
                            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 22
                echo "                            <img class=\"\" height=\"225px\" width=\"100%\" data-src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo "\"
                                src=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo "\">
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                        </div>
                        <div class=\"col-sm-7\">
                            <div class=\"card-block px-2\">
                                <h2 class=\"blog-title\"><a class=\"title\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "</a>
                                </h2>
                                <p class=\"card-text\">
                                    ";
            // line 31
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.posted_byline_no_categories", ["date" => twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 32
$context["post"], "published_at", [], "any", false, false, true, 32), 32, $this->source), call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.date_format"]))]]);
            // line 33
            echo "
                                </p>
                                <p class=\"excerpt\">";
            // line 35
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, true, 35), 35, $this->source);
            echo "</p>
                            </div>

                            <ul class=\"blog-categories\">
                                ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 39));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 40
                echo "                                <!-- ";
                $context["categoryLinks"] = twig_join_filter(twig_array_map($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 40), 40, $this->source), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (((("<a href=\"" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "url", [], "any", false, false, true, 40), 40, $this->source)) . "\">") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "name", [], "any", false, false, true, 40), 40, $this->source)) . "</a>"); }), ", ");
                echo " -->
                                <li>";
                // line 41
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                            </ul>
                        </div>
                    </div>
                </div>

                <!-- <li class=\"no-data\">";
            // line 48
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "noPostsMessage", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "</li> -->
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </div>
    </div>


    <!-- ";
        // line 55
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 55) > 1)) {
            // line 56
            echo "    <ul class=\"pagination\" style=\"margin-left: 100px;\" >
        ";
            // line 57
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 57) > 1)) {
                // line 58
                echo "        <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 58), "baseFileName", [], "any", false, false, true, 58), 58, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageParam", [], "any", false, false, true, 58) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 58) - 1)]);
                echo "\">&larr;
                Prev</a>
        </li>
        ";
            }
            // line 62
            echo "
        ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 63)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 64
                echo "        <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 64) == $context["page"])) ? ("active") : (null));
                echo "\">
            <a href=\"";
                // line 65
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 65), "baseFileName", [], "any", false, false, true, 65), 65, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageParam", [], "any", false, false, true, 65) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 65, $this->source), "html", null, true);
                echo "</a>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "
        ";
            // line 69
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 69) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 69))) {
                // line 70
                echo "        <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 70), "baseFileName", [], "any", false, false, true, 70), 70, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageParam", [], "any", false, false, true, 70) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 70) + 1)]);
                echo "\">Next
                &rarr;</a>
        </li>
        ";
            }
            // line 74
            echo "    </ul>
    ";
        }
        // line 75
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
        return array (  232 => 75,  228 => 74,  220 => 70,  218 => 69,  215 => 68,  204 => 65,  199 => 64,  195 => 63,  192 => 62,  184 => 58,  182 => 57,  179 => 56,  177 => 55,  171 => 51,  162 => 48,  155 => 43,  147 => 41,  142 => 40,  138 => 39,  131 => 35,  127 => 33,  125 => 32,  124 => 31,  116 => 28,  111 => 25,  101 => 23,  96 => 22,  92 => 21,  86 => 17,  82 => 16,  67 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<body>
    {% set posts = __SELF__.posts %}

    <!-- look at these plugins
    https://octobercms.com/plugin/rahman-blogtags
    https://octobercms.com/plugin/pollozen-nextprevpost
    https://octobercms.com/plugin/pkleindienst-blogsearch
    https://octobercms.com/plugin/al3xtig3r-blogutils
    https://octobercms.com/plugin/zakir-tableofcontent
    https://octobercms.com/plugin/flynsarmy-commentableratings
    https://octobercms.com/plugin/pmietlicki-problogsearch
     -->
    <div class=\"container\" style=\"margin-bottom: 60px;\">
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
