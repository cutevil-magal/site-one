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

/* multishop/template/common/header.twig */
class __TwigTemplate_a4d8cad6734ed30b183eb566869634f4eae025b9b106a7f9bdd3aad7c11fb8e2 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">

<head>
\t<meta charset=\"utf-8\">
\t<title>";
        // line 6
        echo ($context["title"] ?? null);
        echo "</title>
\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

\t<base href=\"";
        // line 9
        echo ($context["base"] ?? null);
        echo "\" />
\t";
        // line 10
        if (($context["description"] ?? null)) {
            // line 11
            echo "\t<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
\t";
        }
        // line 13
        echo "\t";
        if (($context["keywords"] ?? null)) {
            // line 14
            echo "\t<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
\t";
        }
        // line 16
        echo "
\t<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>

\t<!-- Google Web Fonts -->
\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
\t<link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap\" rel=\"stylesheet\">

\t<!-- Font Awesome -->
\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">

\t<!-- Libraries Stylesheet -->
\t<link href=\"catalog/view/theme/multishop/assets/lib/animate/animate.min.css\" rel=\"stylesheet\">
\t<link href=\"catalog/view/theme/multishop/assets/lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">

\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 31
            echo "\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 31);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 31);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 31);
            echo "\" />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 34
            echo "\t<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
\t<!-- Customized Bootstrap Stylesheet -->
\t<link href=\"catalog/view/theme/multishop/assets/css/style.css\" rel=\"stylesheet\">

\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 41
            echo "\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 41);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 41);
            echo "\" />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 44
            echo "\t";
            echo $context["analytic"];
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</head>

<body>
\t<!-- Topbar Start -->
\t<div class=\"container-fluid\">
\t\t<div class=\"row bg-secondary py-1 px-xl-5\">
\t\t\t<div class=\"col-lg-6 d-none d-lg-block\">
\t\t\t\t";
        // line 59
        echo "\t\t\t</div>
\t\t\t<div class=\"col-lg-6 text-center text-lg-right\">
\t\t\t\t<div class=\"d-inline-flex align-items-center\">
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-light dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\tМой аккаунт</button>
\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t";
        // line 66
        if (($context["logged"] ?? null)) {
            // line 67
            echo "\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 68
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 69
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t";
        } else {
            // line 71
            echo "\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 72
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t";
        }
        // line 74
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 86
        echo "
\t\t\t\t\t";
        // line 87
        echo ($context["language"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"d-inline-flex align-items-center\">
\t\t\t\t\t<a href=\"\" class=\"btn px-0 ml-2\">
\t\t\t\t\t\t<i class=\"fas fa-heart text-dark\"></i>
\t\t\t\t\t\t<span class=\"badge text-dark border border-dark rounded-circle\"
\t\t\t\t\t\t\tstyle=\"padding-bottom: 2px;\">0</span>
\t\t\t\t\t</a>

\t\t\t\t\t";
        // line 96
        echo ($context["cart"] ?? null);
        echo "

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- LOGO -->
\t\t<div class=\"row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex\">
\t\t\t<div class=\"col-lg-4\"> 
\t\t\t\t<a href=\"";
        // line 104
        echo ($context["base"] ?? null);
        echo "\" class=\"text-decoration-none\">
\t\t\t\t\t<span class=\"h1 text-uppercase text-primary bg-dark px-2\">CODE</span>
\t\t\t\t\t<span class=\"h1 text-uppercase text-dark bg-primary px-2 ml-n1\">BIRDY</span>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-6 text-left header-search\">
\t\t\t\t";
        // line 110
        echo ($context["search"] ?? null);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-6 text-right\">
\t\t\t\t<p class=\"m-0\">Customer Service</p>
\t\t\t\t<h5 class=\"m-0\">
\t\t\t\t\t<a href=\"tel:";
        // line 115
        echo twig_replace_filter(($context["telephone"] ?? null), ["-" => "", " " => ""]);
        echo "\">";
        echo ($context["telephone"] ?? null);
        echo "</a>
\t\t\t\t</h5>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Topbar End -->


\t<!-- Navbar Start -->
\t<div class=\"container-fluid bg-dark mb-30\">
\t\t<div class=\"row px-xl-5\">
\t\t\t<div class=\"col-lg-3\">
\t\t\t\t";
        // line 127
        echo ($context["menu"] ?? null);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-lg-9\">
\t\t\t\t<nav class=\"navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0\">
\t\t\t\t\t<a href=\"\" class=\"text-decoration-none d-block d-lg-none\">
\t\t\t\t\t\t<span class=\"h1 text-uppercase text-dark bg-light px-2\">Multi</span>
\t\t\t\t\t\t<span class=\"h1 text-uppercase text-light bg-primary px-2 ml-n1\">Shop</span>
\t\t\t\t\t</a>
\t\t\t\t\t<button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"collapse navbar-collapse justify-content-between\" id=\"navbarCollapse\">
\t\t\t\t\t\t<div class=\"navbar-nav mr-auto py-0\">
\t\t\t\t\t\t\t<a href=\"home.php\" class=\"nav-item nav-link active\">Главная</a>
\t\t\t\t\t\t\t<a href=\"shop.html\" class=\"nav-item nav-link\">КИБЕРшкола</a>
\t\t\t\t\t\t\t<a href=\"detail.html\" class=\"nav-item nav-link\">Блог</a>
\t\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Pages
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down mt-1\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu bg-primary rounded-0 border-0 m-0\">
\t\t\t\t\t\t\t\t\t<a href=\"cart.html\" class=\"dropdown-item\">Shopping Cart</a>
\t\t\t\t\t\t\t\t\t<a href=\"checkout.html\" class=\"dropdown-item\">Checkout</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"home.twig\" class=\"nav-item nav-link\">Распродажа</a>
\t\t\t\t\t\t\t<a href=\"contact.html\" class=\"nav-item nav-link\">Контакты</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Navbar End -->";
    }

    public function getTemplateName()
    {
        return "multishop/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 127,  260 => 115,  252 => 110,  243 => 104,  232 => 96,  220 => 87,  217 => 86,  212 => 74,  205 => 72,  198 => 71,  191 => 69,  185 => 68,  178 => 67,  176 => 66,  167 => 59,  158 => 46,  149 => 44,  144 => 43,  133 => 41,  129 => 40,  123 => 36,  114 => 34,  109 => 33,  96 => 31,  92 => 30,  76 => 16,  70 => 14,  67 => 13,  61 => 11,  59 => 10,  55 => 9,  49 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "multishop/template/common/header.twig", "");
    }
}
