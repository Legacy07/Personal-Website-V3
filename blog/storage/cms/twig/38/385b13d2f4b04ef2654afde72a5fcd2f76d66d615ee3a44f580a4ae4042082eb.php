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

/* C:\xampp\htdocs\personal-website-v3\blog/plugins/pkleindienst/blogsearch/components/searchform/default.htm */
class __TwigTemplate_f98d95209c8287895e6ca4af6918ab1b631605a7d7f81b6ca279659ded2e453a extends \Twig\Template
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
        $tags = array();
        $filters = array("page" => 5);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page'],
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-3 offset-9\">
            <div class=\"p-1 bg-light rounded rounded-pill shadow-sm mb-4\">
                <form class=\"\" method=\"GET\" action=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "resultPage", [], "any", false, false, true, 5), 5, $this->source));
        echo "\">
                    <div class=\"input-group\" style=\"height: 30px;\">
                        <div class=\"input-group-prepend\">
                            <button id=\"search-button\" type=\"submit\" class=\"btn btn-link\"
                                style=\"color: var(--primary);\">
                                <i class=\"fa fa-search fa-lg mt-2\"></i>
                            </button>
                        </div>
                        <input type=\"text\" aria-describedby=\"search-button\" name=\"search\" class=\"border-0 bg-light\"
                            style=\"width: 90%;\">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\personal-website-v3\\blog/plugins/pkleindienst/blogsearch/components/searchform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-3 offset-9\">
            <div class=\"p-1 bg-light rounded rounded-pill shadow-sm mb-4\">
                <form class=\"\" method=\"GET\" action=\"{{ __SELF__.resultPage|page }}\">
                    <div class=\"input-group\" style=\"height: 30px;\">
                        <div class=\"input-group-prepend\">
                            <button id=\"search-button\" type=\"submit\" class=\"btn btn-link\"
                                style=\"color: var(--primary);\">
                                <i class=\"fa fa-search fa-lg mt-2\"></i>
                            </button>
                        </div>
                        <input type=\"text\" aria-describedby=\"search-button\" name=\"search\" class=\"border-0 bg-light\"
                            style=\"width: 90%;\">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\personal-website-v3\\blog/plugins/pkleindienst/blogsearch/components/searchform/default.htm", "");
    }
}
