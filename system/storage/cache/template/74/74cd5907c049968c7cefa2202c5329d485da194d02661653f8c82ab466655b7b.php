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

/* multishop/template/extension/module/slideshow.twig */
class __TwigTemplate_e2027073c2cfa39f0ef9157f8be200877ca30f29c1c23531a565b7f86c4e0101 extends \Twig\Template
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
        echo "<!-- Carousel Start -->
";
        // line 2
        if ((twig_length_filter($this->env, ($context["banners"] ?? null)) > 3)) {
            // line 4
            echo "\t";
            $context["length"] =  -2;
            // line 5
            echo "\t";
            $context["class"] = "col-lg-8";
        } else {
            // line 8
            echo "\t";
            $context["length"] = twig_length_filter($this->env, ($context["banners"] ?? null));
            // line 9
            echo "\t";
            $context["class"] = "col-lg-12";
        }
        // line 11
        echo "
<div class=\"container-fluid mb-3\">
\t<div class=\"row px-xl-5\">
\t\t<div class=\"";
        // line 14
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t<div id=\"header-carousel";
        // line 15
        echo ($context["module"] ?? null);
        echo "\" class=\"carousel slide carousel-fade mb-30 mb-lg-0\" data-ride=\"carousel\">
\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t";
        // line 18
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["banners"] ?? null), 0, ($context["length"] ?? null)));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 19
            echo "\t\t\t\t\t\t<li data-target=\"#header-carousel";
            echo ($context["module"] ?? null);
            echo "\" data-slide-to=\"";
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 19);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 19) == 0)) {
                echo " class=\"active\" ";
            }
            echo "></li>
\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t\t\t</ol>
\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t";
        // line 24
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["banners"] ?? null), 0, ($context["length"] ?? null)));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 25
            echo "\t\t\t\t\t\t<div class=\"carousel-item position-relative ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 25) == 0)) {
                echo "active";
            }
            echo "\" style=\"height: 450px;\">
\t\t\t\t\t\t\t<img class=\"position-absolute w-100 h-100\" src=\"";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 26);
            echo "\" style=\"object-fit: cover;\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"p-3\" style=\"max-width: 700px;\">
\t\t\t\t\t\t\t\t\t<h1 class=\"display-4 text-white mb-3 animate__animated animate__fadeInDown\">";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 29);
            echo "</h1>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<p class=\"mx-md-5 px-5 animate__animated animate__bounceIn\">";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 31);
            echo "</p>
\t\t\t\t\t\t\t\t\t<!--
\t\t\t\t\t\t\t\t\t";
            // line 33
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 33)) {
                // line 34
                echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 34);
                echo "\">Shop Now</a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 35
            echo "-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 44
        if ((twig_length_filter($this->env, ($context["banners"] ?? null)) > 3)) {
            // line 45
            echo "\t\t";
            // line 46
            echo "\t\t\t<div class=\"col-lg-4\">
\t\t\t";
            // line 48
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["banners"] ?? null),  -2, null));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 49
                echo "\t\t\t\t\t<div class=\"product-offer mb-30\" style=\"height: 200px;\">
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 50);
                echo "\" alt=\"\">
\t\t\t\t\t\t<div class=\"offer-text\">
\t\t\t\t\t\t\t<h6 class=\"text-white text-uppercase\">";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 52);
                echo "</h6>
\t\t\t\t\t\t\t<h3 class=\"text-white mb-3\">";
                // line 53
                echo ($context["text_offer"] ?? null);
                echo "</h3>
\t\t\t\t\t\t\t";
                // line 54
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 54)) {
                    // line 55
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 55);
                    echo "\" class=\"btn btn-primary\">Shop Now</a>
\t\t\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "
\t\t\t</div>
\t\t";
        }
        // line 63
        echo "

\t</div>
</div>
<!-- Carousel End -->
";
    }

    public function getTemplateName()
    {
        return "multishop/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 63,  232 => 60,  224 => 57,  218 => 55,  216 => 54,  212 => 53,  208 => 52,  203 => 50,  200 => 49,  195 => 48,  192 => 46,  190 => 45,  188 => 44,  182 => 40,  164 => 35,  158 => 34,  156 => 33,  151 => 31,  146 => 29,  140 => 26,  133 => 25,  115 => 24,  111 => 21,  88 => 19,  70 => 18,  65 => 15,  61 => 14,  56 => 11,  52 => 9,  49 => 8,  45 => 5,  42 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "multishop/template/extension/module/slideshow.twig", "");
    }
}
