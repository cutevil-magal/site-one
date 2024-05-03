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

/* multishop/template/common/cart.twig */
class __TwigTemplate_7df472d2b94770ec47e5e230f76560295114d86ecddcaff0bbb0a4af5da9be81 extends \Twig\Template
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
        // line 2
        echo "<a href=\"";
        echo ($context["cart"] ?? null);
        echo "\" class=\"btn px-0 ml-2\" data-toggle=\"modal\" data-target=\"#modal-cart\">
    <i class=\"fa fa-check btn-outline-dark\"></i>
    <span class=\"badge text-dark border border-dark rounded-circle cart-info\" style=\"padding-bottom: 2px;\">";
        // line 4
        echo ($context["text_items"] ?? null);
        // line 5
        echo "</span>
</a>


<!-- Modal открытие модального окна -->
<div class=\"modal fade\" id=\"modal-cart\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl\">
        <div class=\"modal-content\">
            ";
        // line 14
        echo "            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">";
        // line 15
        echo ($context["text_header"] ?? null);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"in-cart\">
                    ";
        // line 23
        echo "                    ";
        if (($context["products"] ?? null)) {
            // line 24
            echo "                    <div class=\"table-esponsive\">
                        ";
            // line 26
            echo "                        <table class=\"table\">
                            <tbody>
                                ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 29
                echo "                                <tr>
                                    <td class=\"text-left\">
                                        <a href=\"";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 31);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 31);
                echo "\" alt=\"\"></a>
                                    </td>
                                    <td class=\"text-left\">
                                        <a href=\"";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 34);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 34);
                echo "</a>
                                    </td>
                                    ";
                // line 40
                echo "                                    ";
                // line 41
                echo "                                    <td class=\"text-left\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 41);
                echo "</td> 
                                    <td>
                                        <input type=\"hidden\" name=\"quantity[";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 43);
                echo "]\" value=\"1\">
                                        ";
                // line 47
                echo "
                                                <button class=\"btn btn-danger text-right\" type=\"button\"
                onclick=\"cart.update('";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 49);
                echo "', '1');\"><i
                    class=\"fa fa-times\"></i></button>
                                    </td>
                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                            </tbody>
                        </table>
                    </div>
                    ";
        } else {
            // line 58
            echo "                    ";
            // line 59
            echo "                    <p class=\"text-left\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
                    ";
        }
        // line 61
        echo "                    ";
        // line 62
        echo "                    <table class=\"table table-bordered\">
                        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 64
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 64) == 1)) {
                // line 65
                echo "                                <tr>
                                    <td class=\"text-right\"><strong>";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 66);
                echo "</strong></td>
                                    <td class=\"text-right\">";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 67);
                echo "</td>
                                </tr>
                            ";
            }
            // line 70
            echo "                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                    </table>
                </div>
            </div>
            ";
        // line 75
        echo "            <div class=\"modal-footer\">
                <a href=\"";
        // line 76
        echo ($context["cart"] ?? null);
        echo "\" class=\"btn btn-secondary\">";
        echo ($context["text_cart"] ?? null);
        echo "</a>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "multishop/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 76,  199 => 75,  194 => 71,  180 => 70,  174 => 67,  170 => 66,  167 => 65,  164 => 64,  147 => 63,  144 => 62,  142 => 61,  136 => 59,  134 => 58,  128 => 54,  117 => 49,  113 => 47,  109 => 43,  103 => 41,  101 => 40,  94 => 34,  86 => 31,  82 => 29,  78 => 28,  74 => 26,  71 => 24,  68 => 23,  58 => 15,  55 => 14,  45 => 5,  43 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "multishop/template/common/cart.twig", "");
    }
}
