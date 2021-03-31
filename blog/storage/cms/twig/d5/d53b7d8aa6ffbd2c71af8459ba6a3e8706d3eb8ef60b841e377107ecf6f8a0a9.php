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

/* C:\xampp\htdocs\personal-website-v3\blog/plugins/rainlab/blog/components/categories/default.htm */
class __TwigTemplate_65e1a7e49a504dfce07aed28bcf6d61959f724c438f2e917f3fb497f3fc59bed extends \Twig\Template
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
        $tags = array("set" => 1, "if" => 3, "for" => 8, "partial" => 13);
        $filters = array("length" => 3, "escape" => 11);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'partial'],
                ['length', 'escape'],
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
        $context["categories"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categories", [], "any", false, false, true, 1);
        // line 2
        echo "
";
        // line 3
        if ((twig_length_filter($this->env, ($context["categories"] ?? null)) > 0)) {
            // line 4
            echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col\">
            <ul class=\"blog-categories all-categories\">
                ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 9
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["category"], "posts_count", [], "any", false, false, true, 9)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "count", [], "any", false, false, true, 9) > 1)) {
                    // line 10
                    echo "                <li>
                    <a href=\"/blog/category/";
                    // line 11
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                    echo "\">#";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                    echo "</a>
                    <span class=\"badge\"> ";
                    // line 12
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["category"], "posts_count", [], "any", false, false, true, 12)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "count", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                    echo " </span>
                    <!-- ";
                    // line 13
                    $context['__cms_partial_params'] = [];
                    $context['__cms_partial_params']['categories'] = twig_get_attribute($this->env, $this->source,                     // line 14
($context["__SELF__"] ?? null), "categories", [], "any", false, false, true, 14)                    ;
                    $context['__cms_partial_params']['currentCategorySlug'] = twig_get_attribute($this->env, $this->source,                     // line 15
($context["__SELF__"] ?? null), "currentCategorySlug", [], "any", false, false, true, 15)                    ;
                    echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((                    // line 13
($context["__SELF__"] ?? null) . "::items")                    , $context['__cms_partial_params']                    , true                    );
                    unset($context['__cms_partial_params']);
                    // line 16
                    echo " -->
                </li>
                    ";
                }
                // line 19
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "            </ul>
        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\personal-website-v3\\blog/plugins/rainlab/blog/components/categories/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 20,  109 => 19,  104 => 16,  101 => 13,  99 => 15,  97 => 14,  95 => 13,  91 => 12,  85 => 11,  82 => 10,  79 => 9,  75 => 8,  69 => 4,  67 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set categories = __SELF__.categories %}

{% if categories|length > 0 %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col\">
            <ul class=\"blog-categories all-categories\">
                {% for category in categories %}
                    {% if category.posts_count[0].count > 1 %}
                <li>
                    <a href=\"/blog/category/{{category.slug}}\">#{{ category.name }}</a>
                    <span class=\"badge\"> {{category.posts_count[0].count}} </span>
                    <!-- {% partial __SELF__ ~ \"::items\"
                        categories = __SELF__.categories
                        currentCategorySlug = __SELF__.currentCategorySlug
                    %} -->
                </li>
                    {% endif %}
                {% endfor %}
            </ul>
        </div>
    </div>
</div>
{% endif %}", "C:\\xampp\\htdocs\\personal-website-v3\\blog/plugins/rainlab/blog/components/categories/default.htm", "");
    }
}
