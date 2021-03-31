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

/* C:\xampp\htdocs\personal-website-v3\blog/plugins/rainlab/blog/components/post/default.htm */
class __TwigTemplate_9269b8dfe5f5448b98ba0d26dc7e539fee0fc6e9ce8e34df7faf564ca5c6b804 extends \Twig\Template
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
        $tags = array("set" => 1, "if" => 11, "for" => 13);
        $filters = array("escape" => 4, "trans" => 5, "date" => 6, "raw" => 21, "join" => 28, "map" => 28);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'trans', 'date', 'raw', 'join', 'map'],
                []
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
        $context["post"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "post", [], "any", false, false, true, 1);
        // line 2
        echo "
<div class=\"container\">
    <h1 class=\"blog-post-title\"> ";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo " </h1>
    <h5> ";
        // line 5
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.posted_byline_no_categories", ["date" => twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 6
($context["post"] ?? null), "published_at", [], "any", false, false, true, 6), 6, $this->source), call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.date_format"]))]]);
        // line 7
        echo "
    </h5>

    <div class=\"row\">
        ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 11), "count", [], "any", false, false, true, 11)) {
            // line 12
            echo "        <div class=\"col-lg-12 text-center \">
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 13));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 14
                echo "            <p>
                <img data-src=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "\" height=\"400px\"/>
            </p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "        </div>
        ";
        }
        // line 20
        echo "        <div class=\"col\">
            <div>";
        // line 21
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, true, 21), 21, $this->source);
        echo "</div>
        </div>
    </div>
</div>

<!-- <p class=\"info\">
    ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 27), "count", [], "any", false, false, true, 27)) {
            // line 28
            echo "    ";
            $context["categoryLinks"] = twig_join_filter(twig_array_map($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 28), 28, $this->source), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (((("<a href=\"" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "url", [], "any", false, false, true, 28), 28, $this->source)) . "\">") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "name", [], "any", false, false, true, 28), 28, $this->source)) . "</a>"); }), ", ");
            // line 29
            echo "
    ";
            // line 30
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.posted_byline", ["date" => twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 31
($context["post"] ?? null), "published_at", [], "any", false, false, true, 31), 31, $this->source), call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.date_format"])), "categories" =>             // line 32
($context["categoryLinks"] ?? null)]]);
            // line 33
            echo "
    ";
        } else {
            // line 35
            echo "    ";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.posted_byline_no_categories", ["date" => twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 36
($context["post"] ?? null), "published_at", [], "any", false, false, true, 36), 36, $this->source), call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.date_format"]))]]);
            // line 37
            echo "
    ";
        }
        // line 39
        echo "</p>  -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\personal-website-v3\\blog/plugins/rainlab/blog/components/post/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 39,  142 => 37,  140 => 36,  138 => 35,  134 => 33,  132 => 32,  131 => 31,  130 => 30,  127 => 29,  124 => 28,  122 => 27,  113 => 21,  110 => 20,  106 => 18,  93 => 15,  90 => 14,  86 => 13,  83 => 12,  81 => 11,  75 => 7,  73 => 6,  72 => 5,  68 => 4,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set post = __SELF__.post %}

<div class=\"container\">
    <h1 class=\"blog-post-title\"> {{post.title}} </h1>
    <h5> {{ 'rainlab.blog::lang.post.posted_byline_no_categories' | trans({
        date: post.published_at | date('rainlab.blog::lang.post.date_format' | trans)
    }) }}
    </h5>

    <div class=\"row\">
        {% if post.featured_images.count %}
        <div class=\"col-lg-12 text-center \">
            {% for image in post.featured_images %}
            <p>
                <img data-src=\"{{ image.filename }}\" src=\"{{ image.path }}\" alt=\"{{ image.description }}\" height=\"400px\"/>
            </p>
            {% endfor %}
        </div>
        {% endif %}
        <div class=\"col\">
            <div>{{ post.content_html | raw }}</div>
        </div>
    </div>
</div>

<!-- <p class=\"info\">
    {% if post.categories.count %}
    {% set categoryLinks = post.categories | map(c => \"<a href=\\\"#{c.url}\\\">#{c.name}</a>\") | join(', ') %}

    {{ 'rainlab.blog::lang.post.posted_byline' | trans({
            date: post.published_at | date('rainlab.blog::lang.post.date_format' | trans),
            categories: categoryLinks
        }) }}
    {% else %}
    {{ 'rainlab.blog::lang.post.posted_byline_no_categories' | trans({
            date: post.published_at | date('rainlab.blog::lang.post.date_format'|trans)
        }) }}
    {% endif %}
</p>  -->", "C:\\xampp\\htdocs\\personal-website-v3\\blog/plugins/rainlab/blog/components/post/default.htm", "");
    }
}
