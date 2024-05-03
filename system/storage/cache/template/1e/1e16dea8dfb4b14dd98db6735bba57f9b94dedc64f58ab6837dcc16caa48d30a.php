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
class __TwigTemplate_cf2cadc2669b49d79f2db8c92ea0d631c0b05c02a898dfab5eda68449cd116c2 extends \Twig\Template
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
\t\t\t\t\t\t<a class=\"h6 text-decoration-none text-truncate\" href=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 11);
            echo "\">
\t\t\t\t\t\t\t<img class=\"img-fluid w-100\" src=\"";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 12);
            echo "\" alt=\"\" >
\t\t\t\t\t\t</a>

\t\t\t\t\t\t";
            // line 28
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-center py-4\">
\t\t\t\t\t\t<a class=\"h6 text-decoration-none text-truncate\" href=\"";
            // line 30
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 30);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 30);
            echo "</a>
\t\t\t\t\t\t";
            // line 31
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 31)) {
                // line 32
                echo "\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-center mt-2\">
\t\t\t\t\t\t\t\t";
                // line 33
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 33)) {
                    // line 34
                    echo "\t\t\t\t\t\t\t\t\t<h5>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 34);
                    echo "</h5>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 36
                    echo "\t\t\t\t\t\t\t\t\t<h5>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 36);
                    echo "</h5>
\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted ml-2\">
\t\t\t\t\t\t\t\t\t\t<del>";
                    // line 38
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 38);
                    echo "</del>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t";
                }
                // line 41
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 43
            echo "
\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-center mb-1\">
\t\t\t\t\t\t\t";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 46
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 46) < $context["i"])) {
                    // line 47
                    echo "\t\t\t\t\t\t\t\t\t<small class=\"far fa-star text-primary mr-1\"></small>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t\t<small class=\"fa fa-star text-primary mr-1\"></small>
\t\t\t\t\t\t\t\t";
                }
                // line 51
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t\t\t\t\t\t\t<small>(";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 52);
            echo ")</small>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
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
        return array (  147 => 61,  131 => 52,  125 => 51,  121 => 49,  117 => 47,  114 => 46,  110 => 45,  106 => 43,  102 => 41,  96 => 38,  90 => 36,  84 => 34,  82 => 33,  79 => 32,  77 => 31,  71 => 30,  67 => 28,  61 => 12,  57 => 11,  52 => 8,  48 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "multishop/template/extension/module/featured.twig", "");
    }
}
