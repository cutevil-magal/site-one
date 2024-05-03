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
class __TwigTemplate_8148a14a3175b28c898136a68f4a7a79d1cbc3ea2e5c19dcbf22f2c49faa9adc extends \Twig\Template
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
        echo "<a href=\"";
        echo ($context["cart"] ?? null);
        echo "\" class=\"btn px-0 ml-2\" data-toggle=\"modal\" data-target=\"#modal-cart\">
    <i class=\"fa fa-check btn-outline-dark\"></i>
    <span class=\"badge text-dark border border-dark rounded-circle cart-info\" style=\"padding-bottom: 2px;\">";
        // line 3
        echo ($context["text_items"] ?? null);
        // line 4
        echo "</span>
</a>


<!-- Modal открытие модального окна корзины-->
<div class=\"modal fade\" id=\"modal-cart\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">";
        // line 13
        echo ($context["text_title"] ?? null);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"in-cart\">
                    ";
        // line 20
        if (($context["products"] ?? null)) {
            // line 21
            echo "                    <div class=\"table-esponsive\">
                        <table class=\"table\">
                            <tbody>
                                ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 25
                echo "                                <tr class=\"text-left\">
                                    <td>
                                        <a href=\"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 27);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 27);
                echo "\" alt=\"\"></a>
                                    </td>
                                    <td>
                                        <a href=\"";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 30);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 30);
                echo "</a>
                                        ";
                // line 31
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 31)) {
                    // line 32
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 32));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
                                        - <small>";
                        // line 33
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 33);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 33);
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 34
                    echo "                                        ";
                }
                // line 35
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 35)) {
                    echo " <br />
                                        - <small>";
                    // line 36
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 36);
                    echo "</small> ";
                }
                // line 37
                echo "                                    </td>
                                    ";
                // line 42
                echo "                                    <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 42);
                echo "</td> 
                                    <td>";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 43);
                echo "</td> 
                                    <td>";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 44);
                echo "</td> 
                                    <td>
                                        <button class=\"btn btn-danger\" type=\"button\"
                                            onclick=\"cart.remove('";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 47);
                echo "');\"><i
                                                class=\"fa fa-times\"></i></button>
                                        ";
                // line 50
                echo "                                    </td>
                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                            </tbody>
                        </table>
                    </div>
                    ";
        } else {
            // line 57
            echo "                    <p class=\"text-left\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
                    ";
        }
        // line 59
        echo "                    итоговые суммы товаров в корзине
                    <table class=\"table table-bordered\">
                        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 62
            echo "                            <tr>
                                <td class=\"text-right\"><strong>";
            // line 63
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 63);
            echo "</strong></td>
                                <td class=\"text-right\">";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 64);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                    </table>
                </div>
            </div>
            <div class=\"modal-footer\">
                <a href=\"";
        // line 71
        echo ($context["cart"] ?? null);
        echo "\" class=\"btn btn-secondary\">";
        echo ($context["text_cart"] ?? null);
        echo "</a>
                ";
        // line 73
        echo "            </div>
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
        return array (  206 => 73,  200 => 71,  194 => 67,  185 => 64,  181 => 63,  178 => 62,  174 => 61,  170 => 59,  164 => 57,  158 => 53,  150 => 50,  145 => 47,  139 => 44,  135 => 43,  130 => 42,  127 => 37,  121 => 36,  116 => 35,  113 => 34,  104 => 33,  97 => 32,  95 => 31,  89 => 30,  81 => 27,  77 => 25,  73 => 24,  68 => 21,  66 => 20,  56 => 13,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "multishop/template/common/cart.twig", "");
    }
}
