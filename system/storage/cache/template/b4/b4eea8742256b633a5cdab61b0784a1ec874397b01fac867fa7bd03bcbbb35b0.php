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
class __TwigTemplate_a38f821b2ed00aae8e2110fa52297447c8e6f00456f46f115526e332efa5cab7 extends \Twig\Template
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
            // line 3
            echo "\t";
            $context["length"] =  -2;
            // line 4
            echo "\t";
            $context["class"] = "col-lg-8";
        } else {
            // line 6
            echo "\t";
            $context["length"] = twig_length_filter($this->env, ($context["banners"] ?? null));
            // line 7
            echo "\t";
            $context["class"] = "col-lg-12";
        }
        // line 9
        echo "
<div class=\"container-fluid mb-3\">
\t<div class=\"row px-xl-5\">
\t\t<div class=\"";
        // line 12
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t<div id=\"header-carousel";
        // line 13
        echo ($context["module"] ?? null);
        echo "\" class=\"carousel slide carousel-fade mb-30 mb-lg-0\" data-ride=\"carousel\">
\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t";
        // line 15
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
            // line 16
            echo "\t\t\t\t\t\t<li data-target=\"#header-carousel";
            echo ($context["module"] ?? null);
            echo "\" data-slide-to=\"";
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 16);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 16) == 0)) {
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
        // line 18
        echo "\t\t\t\t</ol>
\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t";
        // line 20
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
            // line 21
            echo "\t\t\t\t\t\t<div class=\"carousel-item position-relative ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 21) == 0)) {
                echo "active";
            }
            echo "\" style=\"height: 430px;\">
\t\t\t\t\t\t\t<img class=\"position-absolute w-100 h-100\" src=\"";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 22);
            echo "\" style=\"object-fit: cover;\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"p-3\" style=\"max-width: 700px;\">
\t\t\t\t\t\t\t\t\t<h1 class=\"display-4 text-white mb-3 animate__animated animate__fadeInDown\">";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 25);
            echo "</h1>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<p class=\"mx-md-5 px-5 animate__animated animate__bounceIn\">";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 27);
            echo "</p>
\t\t\t\t\t\t\t\t\t<!--
\t\t\t\t\t\t\t\t\t";
            // line 29
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 29)) {
                // line 30
                echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 30);
                echo "\">Shop Now</a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 31
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
        // line 36
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 40
        if ((twig_length_filter($this->env, ($context["banners"] ?? null)) > 3)) {
            // line 41
            echo "\t\t\t<div class=\"col-lg-4\">
\t\t\t\t";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["banners"] ?? null),  -2, null));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 43
                echo "\t\t\t\t\t<div class=\"product-offer mb-30\" style=\"height: 200px;\">
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 44);
                echo "\" alt=\"\">
\t\t\t\t\t\t<div class=\"offer-text\">
\t\t\t\t\t\t\t<h6 class=\"text-white text-uppercase\">";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 46);
                echo "</h6>
\t\t\t\t\t\t\t<h3 class=\"text-white mb-3\">";
                // line 47
                echo ($context["text_offer"] ?? null);
                echo "</h3>
\t\t\t\t\t\t\t";
                // line 48
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 48)) {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 49);
                    echo "\" class=\"btn btn-primary\">Shop Now</a>
\t\t\t\t\t\t\t";
                }
                // line 51
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "
\t\t\t</div>
\t\t";
        }
        // line 57
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
        return array (  232 => 57,  227 => 54,  219 => 51,  213 => 49,  211 => 48,  207 => 47,  203 => 46,  198 => 44,  195 => 43,  191 => 42,  188 => 41,  186 => 40,  180 => 36,  162 => 31,  156 => 30,  154 => 29,  149 => 27,  144 => 25,  138 => 22,  131 => 21,  114 => 20,  110 => 18,  87 => 16,  70 => 15,  65 => 13,  61 => 12,  56 => 9,  52 => 7,  49 => 6,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "multishop/template/extension/module/slideshow.twig", "");
    }
}
