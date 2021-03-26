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

/* C:\xampp\htdocs\personal-website-v3\blog/themes/demo/partials/site/header.htm */
class __TwigTemplate_4a8ba4f84687d094ca4e5fc3aec958a8d3a956a8695d3a3c49540d895aac1cdf extends \Twig\Template
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
        $tags = array("if" => 16);
        $filters = array("page" => 11, "theme" => 26);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['page', 'theme'],
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
        echo "<!-- Nav
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">October Demo</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li class=\"";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 16), "id", [], "any", false, false, true, 16) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Basic concepts</a></li>
                <li class=\"";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 17), "id", [], "any", false, false, true, 17) == "ajax")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ajax");
        echo "\">AJAX framework</a></li>
                <li class=\"";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 18), "id", [], "any", false, false, true, 18) == "plugins")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("plugins");
        echo "\">Plugin components</a></li>
            </ul>
        </div>
    </div>
</nav> -->

<div id=\"nav-bar\" class=\"\">
    <a class=\"logo\" rel=\"index\" href=\"#home\">
        <img src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" width=\"24px\" height=\"100%\" alt=\"Ahmet Ince logo\">
    </a>
    <nav id=\"nav-bar-menu\">
        <a rel=\"index\" href=\"/#home\" class=\"nav-bar nav-bar-home active\">
            <i class=\"fa fa-home icon-home\"></i>
            <p class=\"nav-font-size-sm\">Home</p>
        </a>
        <a rel=\"about\" href=\"/#about\" class=\"nav-bar nav-bar-about\">
            <i class=\"fa fa-user-secret icon-about\"></i>
            <p class=\"nav-font-size-sm\">About</p>
        </a>
        <a rel=\"portfolio\" href=\"/#portfolio\" class=\"nav-bar nav-bar-portfolio\">
            <i class=\"fa fa-code icon-portfolio\"></i>
            <p class=\"nav-font-size-sm\">Portfolio</p>
        </a>
        <a rel=\"blog\" href=\"/blog\" class=\"nav-bar nav-bar-blog\">
            <i class=\"fa fa-rss icon-blog\"></i>
            <p class=\"nav-font-size-sm\">Blog</p>
        </a>
        <a rel=\"contact\" href=\"/#contact\" class=\"nav-bar nav-bar-contact\">
            <i class=\"fa fa-envelope icon-contact\"></i>
            <p class=\"nav-font-size-sm\">Contact</p>
        </a>

    </nav>

    <ul class=\"d-none d-lg-block\">
        <li>
            <a href=\"mailto:ahmetince771@gmail.com\" target=\"_blank\">
                <i class=\"fa fa-envelope\"></i>
            </a>
        </li>
        <li>
            <a href=\"https://www.linkedin.com/in/ahmet-ince-8a8054150/\" target=\"_blank\">
                <i class=\"fab fa-linkedin\"></i>
            </a>
        </li>
        <li>
            <a href=\"https://play.google.com/store/apps/developer?id=Ahmet+Ince&hl=en_GB&gl=US\" target=\"_blank\">
                <i class=\"fab fa-google-play\"></i>
            </a>
        </li>
        <li>
            <a href=\"https://github.com/Legacy07\" target=\"_blank\">
                <i class=\"fab fa-github\"></i>
            </a>
        </li>
        <li>
            <a href=\"https://www.producthunt.com/@legacy07\" target=\"_blank\">
                <i class=\"fab fa-product-hunt\"></i>
            </a>
        </li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\personal-website-v3\\blog/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 26,  98 => 18,  90 => 17,  82 => 16,  74 => 11,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Nav
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">October Demo</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li class=\"{% if this.page.id == 'home' %}active{% endif %}\"><a href=\"{{ 'home'|page }}\">Basic concepts</a></li>
                <li class=\"{% if this.page.id == 'ajax' %}active{% endif %}\"><a href=\"{{ 'ajax'|page }}\">AJAX framework</a></li>
                <li class=\"{% if this.page.id == 'plugins' %}active{% endif %}\"><a href=\"{{ 'plugins'|page }}\">Plugin components</a></li>
            </ul>
        </div>
    </div>
</nav> -->

<div id=\"nav-bar\" class=\"\">
    <a class=\"logo\" rel=\"index\" href=\"#home\">
        <img src=\"{{ 'assets/images/logo.png'|theme }}\" width=\"24px\" height=\"100%\" alt=\"Ahmet Ince logo\">
    </a>
    <nav id=\"nav-bar-menu\">
        <a rel=\"index\" href=\"/#home\" class=\"nav-bar nav-bar-home active\">
            <i class=\"fa fa-home icon-home\"></i>
            <p class=\"nav-font-size-sm\">Home</p>
        </a>
        <a rel=\"about\" href=\"/#about\" class=\"nav-bar nav-bar-about\">
            <i class=\"fa fa-user-secret icon-about\"></i>
            <p class=\"nav-font-size-sm\">About</p>
        </a>
        <a rel=\"portfolio\" href=\"/#portfolio\" class=\"nav-bar nav-bar-portfolio\">
            <i class=\"fa fa-code icon-portfolio\"></i>
            <p class=\"nav-font-size-sm\">Portfolio</p>
        </a>
        <a rel=\"blog\" href=\"/blog\" class=\"nav-bar nav-bar-blog\">
            <i class=\"fa fa-rss icon-blog\"></i>
            <p class=\"nav-font-size-sm\">Blog</p>
        </a>
        <a rel=\"contact\" href=\"/#contact\" class=\"nav-bar nav-bar-contact\">
            <i class=\"fa fa-envelope icon-contact\"></i>
            <p class=\"nav-font-size-sm\">Contact</p>
        </a>

    </nav>

    <ul class=\"d-none d-lg-block\">
        <li>
            <a href=\"mailto:ahmetince771@gmail.com\" target=\"_blank\">
                <i class=\"fa fa-envelope\"></i>
            </a>
        </li>
        <li>
            <a href=\"https://www.linkedin.com/in/ahmet-ince-8a8054150/\" target=\"_blank\">
                <i class=\"fab fa-linkedin\"></i>
            </a>
        </li>
        <li>
            <a href=\"https://play.google.com/store/apps/developer?id=Ahmet+Ince&hl=en_GB&gl=US\" target=\"_blank\">
                <i class=\"fab fa-google-play\"></i>
            </a>
        </li>
        <li>
            <a href=\"https://github.com/Legacy07\" target=\"_blank\">
                <i class=\"fab fa-github\"></i>
            </a>
        </li>
        <li>
            <a href=\"https://www.producthunt.com/@legacy07\" target=\"_blank\">
                <i class=\"fab fa-product-hunt\"></i>
            </a>
        </li>
    </ul>
</div>", "C:\\xampp\\htdocs\\personal-website-v3\\blog/themes/demo/partials/site/header.htm", "");
    }
}
