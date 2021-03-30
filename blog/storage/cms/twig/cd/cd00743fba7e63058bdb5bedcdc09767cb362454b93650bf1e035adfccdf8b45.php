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

/* C:\xampp\htdocs\personal-website-v3\blog/themes/demo/partials/site/footer.htm */
class __TwigTemplate_3fe4035dcaf981d875b9ea9b8a07f2513991cf558c93e50a27675908611fdaef extends \Twig\Template
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
        $filters = array("escape" => 4, "date" => 4);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'date'],
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
        echo "<!-- <div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p class=\"muted credit\">&copy; 2013 - ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Alexey Bobkov &amp; Samuel Georges.</p>
    </div>
</div> -->

<footer id=\"contact\" class=\"\">
    <div class=\"container\">
        <div class=\"row\">
            <i class=\"fas fa-angle-double-up\" id=\"autoScrollButton\" onclick=\"autoScrollFunction()\"></i>
        </div>
        <div class=\"row\">
            <ul id=\"footer-links\">
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
                    <a href=\"https://play.google.com/store/apps/developer?id=Ahmet+Ince&hl=en_GB&gl=US\"
                        target=\"_blank\">
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
        </div>

        <div class=\"row\">
            <p class=\"footer-name\">Ahmet Ince ©2021</p>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\personal-website-v3\\blog/themes/demo/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- <div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p class=\"muted credit\">&copy; 2013 - {{ \"now\"|date(\"Y\") }} Alexey Bobkov &amp; Samuel Georges.</p>
    </div>
</div> -->

<footer id=\"contact\" class=\"\">
    <div class=\"container\">
        <div class=\"row\">
            <i class=\"fas fa-angle-double-up\" id=\"autoScrollButton\" onclick=\"autoScrollFunction()\"></i>
        </div>
        <div class=\"row\">
            <ul id=\"footer-links\">
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
                    <a href=\"https://play.google.com/store/apps/developer?id=Ahmet+Ince&hl=en_GB&gl=US\"
                        target=\"_blank\">
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
        </div>

        <div class=\"row\">
            <p class=\"footer-name\">Ahmet Ince ©2021</p>
        </div>
    </div>
</footer>", "C:\\xampp\\htdocs\\personal-website-v3\\blog/themes/demo/partials/site/footer.htm", "");
    }
}
