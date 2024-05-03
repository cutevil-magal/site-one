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
class __TwigTemplate_314e32fe6b93f484ff4d46058bbbd2172ffc058b3142515af3bfa537e8e191bc extends \Twig\Template
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
        echo ($context["title"] ?? null);
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
\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"cart.add('";
            // line 13
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 13);
            echo "');\" class=\"btn btn-outline-dark btn-square\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"wishlist.add('";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 16);
            echo "');\" class=\"btn btn-outline-dark btn-square\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"far fa-heart\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"compare.add('";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 19);
            echo "');\" class=\"btn btn-outline-dark btn-square\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-sync-alt\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-center py-4\">
\t\t\t\t\t\t<a class=\"h6 text-decoration-none text-truncate\" href=\"";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 25);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25);
            echo "</a>
\t\t\t\t\t\t";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 26)) {
                // line 27
                echo "\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-center mt-2\">
\t\t\t\t\t\t\t\t";
                // line 28
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 28)) {
                    // line 29
                    echo "\t\t\t\t\t\t\t\t\t<h5>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 29);
                    echo "</h5>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 31
                    echo "\t\t\t\t\t\t\t\t\t<h5>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 31);
                    echo "</h5>
\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted ml-2\">
\t\t\t\t\t\t\t\t\t\t<del>";
                    // line 33
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 33);
                    echo "</del>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t";
                }
                // line 36
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 38
            echo "
\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-center mb-1\">
\t\t\t\t\t\t\t";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 41
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 41) < $context["i"])) {
                    // line 42
                    echo "\t\t\t\t\t\t\t\t\t<small class=\"far fa-star text-primary mr-1\"></small>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 44
                    echo "\t\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary mr-1\"></small>
\t\t\t\t\t\t\t\t";
                }
                // line 46
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "\t\t\t\t\t\t\t<small>(";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 47);
            echo ")</small>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"cart-buttons mt-2\">
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"cart.add('";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 51);
            echo "');\" class=\"btn btn-outline-dark btn-square\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"wishlist.add('";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 54);
            echo "');\" class=\"btn btn-outline-dark btn-square\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"far fa-heart\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"compare.add('";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 57);
            echo "');\" class=\"btn btn-outline-dark btn-square\" href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-sync-alt\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
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
        return array (  178 => 66,  163 => 57,  157 => 54,  151 => 51,  143 => 47,  137 => 46,  133 => 44,  129 => 42,  126 => 41,  122 => 40,  118 => 38,  114 => 36,  108 => 33,  102 => 31,  96 => 29,  94 => 28,  91 => 27,  89 => 26,  83 => 25,  74 => 19,  68 => 16,  62 => 13,  57 => 11,  52 => 8,  48 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "multishop/template/extension/module/featured.twig", "");
    }
}
