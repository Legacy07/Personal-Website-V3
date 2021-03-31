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

/* C:\xampp\htdocs\personal-website-v3\blog/plugins/pkleindienst/blogsearch/components/searchresult/pagination.htm */
class __TwigTemplate_85c8bc749400083bb94c5d4ff5bc8c1440ad7eee55f92eed81403b77b7d3ae85 extends \Twig\Template
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
        $tags = array("if" => 1, "for" => 8);
        $filters = array("page" => 4, "_" => 4, "escape" => 10);
        $functions = array("range" => 8);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['page', '_', 'escape'],
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
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 1) > 1)) {
            // line 2
            echo "<ul class=\"pagination\">
    ";
            // line 3
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 3) > 1)) {
                // line 4
                echo "    <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 4), "baseFileName", [], "any", false, false, true, 4), 4, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 4) - 1)]);
                echo "\">";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["&larr; Prev"]);
                echo "</a>
    </li>
    ";
            }
            // line 7
            echo "
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 8)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 9
                echo "    <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 9) == $context["page"])) ? ("active") : (null));
                echo "\">
        <a href=\"";
                // line 10
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 10), "baseFileName", [], "any", false, false, true, 10), 10, $this->source), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 10, $this->source), "html", null, true);
                echo "</a>
    </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "
    ";
            // line 14
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 14) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 14))) {
                // line 15
                echo "    <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 15), "baseFileName", [], "any", false, false, true, 15), 15, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 15) + 1)]);
                echo "\">";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Next &rarr;"]);
                echo "</a>
    </li>
    ";
            }
            // line 18
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\personal-website-v3\\blog/plugins/pkleindienst/blogsearch/components/searchresult/pagination.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 18,  106 => 15,  104 => 14,  101 => 13,  90 => 10,  85 => 9,  81 => 8,  78 => 7,  69 => 4,  67 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if posts.lastPage > 1 %}
<ul class=\"pagination\">
    {% if posts.currentPage > 1 %}
    <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}\">{{ '&larr; Prev'|_ }}</a>
    </li>
    {% endif %}

    {% for page in 1..posts.lastPage %}
    <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
        <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
    </li>
    {% endfor %}

    {% if posts.lastPage > posts.currentPage %}
    <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}\">{{ 'Next &rarr;'|_ }}</a>
    </li>
    {% endif %}
</ul>
{% endif %}", "C:\\xampp\\htdocs\\personal-website-v3\\blog/plugins/pkleindienst/blogsearch/components/searchresult/pagination.htm", "");
    }
}
