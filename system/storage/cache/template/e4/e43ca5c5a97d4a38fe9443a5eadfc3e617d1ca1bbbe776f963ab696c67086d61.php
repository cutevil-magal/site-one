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
class __TwigTemplate_1dafb1ba295718717c1a81c0ddd22757edacdeccdff4c3c7321ff6308e4cf956 extends \Twig\Template
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
\t\t\t\t\t<a class=\"h6 text-decoration-none text-truncate\" href=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 11);
            echo "\">
\t\t\t\t\t\t<img class=\"img-fluid w-100\" src=\"";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 12);
            echo "\" alt=\"\" >
\t\t\t\t\t</a>
\t\t\t\t\t\t";
            // line 27
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-center py-4\">
\t\t\t\t\t\t<a class=\"h6 text-decoration-none text-truncate\" href=\"";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 29);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 29);
            echo "</a>
\t\t\t\t\t\t";
            // line 30
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 30)) {
                // line 31
                echo "\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-center mt-2\">
\t\t\t\t\t\t\t\t";
                // line 32
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 32)) {
                    // line 33
                    echo "\t\t\t\t\t\t\t\t\t<h5>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 33);
                    echo "</h5>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 35
                    echo "\t\t\t\t\t\t\t\t\t<h5>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 35);
                    echo "</h5>
\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted ml-2\">
\t\t\t\t\t\t\t\t\t\t<del>";
                    // line 37
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 37);
                    echo "</del>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t";
                }
                // line 40
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 42
            echo "
\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-center mb-1\">
\t\t\t\t\t\t\t";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 45
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 45) < $context["i"])) {
                    // line 46
                    echo "\t\t\t\t\t\t\t\t\t<small class=\"far fa-star text-primary mr-1\"></small>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 48
                    echo "\t\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary mr-1\"></small>
\t\t\t\t\t\t\t\t";
                }
                // line 50
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "\t\t\t\t\t\t\t<small>(";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 51);
            echo ")</small>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"cart-buttons mt-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"cart.add('";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 55);
            echo "');\" class=\"btn btn-outline-dark btn-square\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>";
            // line 57
            echo "\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"wishlist.add('";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 58);
            echo "');\" class=\"btn btn-outline-dark btn-square\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"far fa-heart\"></i>";
            // line 60
            echo "\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"compare.add('";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 61);
            echo "');\" class=\"btn btn-outline-dark btn-square\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-sync-alt\"></i>";
            // line 63
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
        // line 70
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
        return array (  168 => 70,  156 => 63,  152 => 61,  149 => 60,  145 => 58,  142 => 57,  138 => 55,  130 => 51,  124 => 50,  120 => 48,  116 => 46,  113 => 45,  109 => 44,  105 => 42,  101 => 40,  95 => 37,  89 => 35,  83 => 33,  81 => 32,  78 => 31,  76 => 30,  70 => 29,  66 => 27,  61 => 12,  57 => 11,  52 => 8,  48 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "multishop/template/extension/module/featured.twig", "");
    }
}
