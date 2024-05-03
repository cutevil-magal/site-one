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

/* multishop/template/extension/module/featured.twig */
class __TwigTemplate_fbf860771dbb2d264dd870ab141697ee19312ae87cace308a3e2225bfd7ae494 extends \Twig\Template
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
        echo "<div class=\"container-fluid pt-5 pb-3\">
\t<h2 class=\"section-title position-relative text-uppercase mx-xl-5 mb-4\">
\t\t<span class=\"bg-secondary pr-3\">";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</span>
\t</h2>

\t<div class=\"row px-xl-5\">
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 8
            echo "\t\t\t<div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
\t\t\t\t<div class=\"product-item bg-light mb-4\">
\t\t\t\t\t<div class=\"product-img position-relative overflow-hidden\">
\t\t\t\t\t\t<img class=\"img-fluid w-100\" src=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 11);
            echo "\" alt=\"\">
\t\t\t\t\t\t";
            // line 24
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-center py-4\">
\t\t\t\t\t\t<a class=\"h6 text-decoration-none text-truncate\" href=\"";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 26);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
            echo "</a>
\t\t\t\t\t\t";
            // line 27
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 27)) {
                // line 28
                echo "\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-center mt-2\">
\t\t\t\t\t\t\t\t";
                // line 29
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "\t\t\t\t\t\t\t\t\t<h5>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 30);
                    echo "</h5>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 32
                    echo "\t\t\t\t\t\t\t\t\t<h5>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 32);
                    echo "</h5>
\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted ml-2\">
\t\t\t\t\t\t\t\t\t\t<del>";
                    // line 34
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 34);
                    echo "</del>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t";
                }
                // line 37
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 39
            echo "
\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-center mb-1\">
\t\t\t\t\t\t\t";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 42
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 42) < $context["i"])) {
                    // line 43
                    echo "\t\t\t\t\t\t\t\t\t<small class=\"far fa-star text-primary mr-1\"></small>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 45
                    echo "\t\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary mr-1\"></small>
\t\t\t\t\t\t\t\t";
                }
                // line 47
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t\t\t\t\t<small>(";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 48);
            echo ")</small>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"cart-buttons mt-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"cart.add('";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 52);
            echo "');\" class=\"btn btn-outline-dark btn-square\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>";
            // line 54
            echo "\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"wishlist.add('";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 55);
            echo "');\" class=\"btn btn-outline-dark btn-square\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"far fa-heart\"></i>";
            // line 57
            echo "\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"compare.add('";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 58);
            echo "');\" class=\"btn btn-outline-dark btn-square\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-sync-alt\"></i>";
            // line 60
            echo "\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "multishop/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 67,  151 => 60,  147 => 58,  144 => 57,  140 => 55,  137 => 54,  133 => 52,  125 => 48,  119 => 47,  115 => 45,  111 => 43,  108 => 42,  104 => 41,  100 => 39,  96 => 37,  90 => 34,  84 => 32,  78 => 30,  76 => 29,  73 => 28,  71 => 27,  65 => 26,  61 => 24,  57 => 11,  52 => 8,  48 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "multishop/template/extension/module/featured.twig", "");
    }
}
