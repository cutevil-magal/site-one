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

/* multishop/template/extension/module/carousel.twig */
class __TwigTemplate_22a13cbba2810fb3bb3f00e93cc554cde46815d76ddafba7a7025f972b80e073 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- Vendor Start -->
<div class=\"container-fluid py-5\">
<h2 class=\"section-title position-relative text-uppercase mx-xl-5 mb-4\">
\t\t<span class=\"bg-secondary pr-3\">";
        // line 4
        echo ($context["heading_title2"] ?? null);
        echo "</span>
\t</h2>
\t<div class=\"row px-xl-5\">
\t\t<div class=\"col\">
\t\t\t<div class=\"owl-carousel vendor-carousel\">
\t\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 10
            echo "\t\t\t\t\t<div class=\"bg-light p-4\">
\t\t\t\t\t\t";
            // line 11
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 11)) {
                // line 12
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 12);
                echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 13);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 13);
                echo "\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            } else {
                // line 16
                echo "\t\t\t\t\t\t\t<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 16);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 16);
                echo "\">
\t\t\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- Vendor End -->
";
    }

    public function getTemplateName()
    {
        return "multishop/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 20,  80 => 18,  72 => 16,  64 => 13,  59 => 12,  57 => 11,  54 => 10,  50 => 9,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "multishop/template/extension/module/carousel.twig", "");
    }
}
