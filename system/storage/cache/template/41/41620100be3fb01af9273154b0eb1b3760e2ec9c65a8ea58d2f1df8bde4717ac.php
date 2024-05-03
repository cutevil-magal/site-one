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

/* multishop/template/common/menu.twig */
class __TwigTemplate_40591e1183ad5dbd80eff25eb69a3f59507755427d05a4cdf933f461d4bf4db1 extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 3
            echo "\t<a class=\"btn d-flex align-items-center justify-content-between bg-primary w-100\" data-toggle=\"collapse\" href=\"#navbar-vertical\" style=\"height: 65px; padding: 0 30px;\">
\t\t<h6 class=\"text-dark m-0\">
\t\t\t<i class=\"fa fa-bars mr-2\"></i>
\t\t\t";
            // line 7
            echo "\t\t\t";
            echo ($context["text_category"] ?? null);
            echo "</h6>
\t\t<i class=\"fa fa-angle-down text-dark\"></i>
\t</a>
";
            // line 11
            echo "\t<nav class=\"collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light\" id=\"navbar-vertical\" style=\"width: calc(100% - 30px); z-index: 999;\">
\t\t<div class=\"navbar-nav w-100\">
\t\t\t";
            // line 14
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 15
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "\t\t\t\t";
                    // line 17
                    echo "\t\t\t\t\t<div class=\"nav-item dropdown dropright\">
\t\t\t\t\t\t<a href=\"";
                    // line 18
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 18);
                    echo "\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 18);
                    echo "
\t\t\t\t\t\t\t<i class=\"fa fa-angle-right float-right mt-1\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-menu position-absolute rounded-0 border-0 m-0\">
\t\t\t\t\t\t\t";
                    // line 22
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 22));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 23
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 23);
                        echo "\" class=\"dropdown-item\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 23);
                        echo "</a>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                } else {
                    // line 28
                    echo "\t\t\t\t";
                    // line 29
                    echo "\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 29);
                    echo "\" class=\"nav-item nav-link\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 29);
                    echo "</a>
\t\t\t\t";
                }
                // line 31
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "
\t\t</div>
\t</nav>
";
        }
    }

    public function getTemplateName()
    {
        return "multishop/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 32,  107 => 31,  99 => 29,  97 => 28,  92 => 25,  81 => 23,  77 => 22,  68 => 18,  65 => 17,  63 => 16,  60 => 15,  55 => 14,  51 => 11,  44 => 7,  39 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "multishop/template/common/menu.twig", "");
    }
}
