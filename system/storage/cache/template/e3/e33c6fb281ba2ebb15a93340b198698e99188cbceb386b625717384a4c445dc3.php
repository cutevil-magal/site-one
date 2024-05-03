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
class __TwigTemplate_a49d03b898587e9a94a0ca381a3a57839f4c8f2c3402ddbdb3271cb09e5964bf extends \Twig\Template
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
        echo ($context["text_header"] ?? null);
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
                echo "                                <tr>
                                    <td class=\"text-left\">
                                        <a href=\"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 27);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 27);
                echo "\" alt=\"\"></a>
                                    </td>
                                    <td class=\"text-left\">
                                        <a href=\"";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 30);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 30);
                echo "</a>
                                        ";
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
                echo "                                    ";
                // line 43
                echo "                                    <td class=\"text-left\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 43);
                echo "</td> 
                                    <td>
                                        <button class=\"btn btn-danger text-right\" type=\"button\"
                                            onclick=\"cart.remove('";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 46);
                echo "');\"><i
                                                class=\"fa fa-times\"></i></button>
                                    </td>
                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                            </tbody>
                        </table>
                    </div>
                    ";
        } else {
            // line 55
            echo "                    <p class=\"text-left\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
                    ";
        }
        // line 57
        echo "                    ";
        // line 58
        echo "                    <table class=\"table table-bordered\">
                        ";
        // line 59
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
            // line 60
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 60) == 1)) {
                // line 61
                echo "                                <tr>
                                    <td class=\"text-right\"><strong>";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 62);
                echo "</strong></td>
                                    <td class=\"text-right\">";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 63);
                echo "</td>
                                </tr>
                            ";
            }
            // line 66
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
        return array (  205 => 73,  199 => 71,  193 => 67,  179 => 66,  173 => 63,  169 => 62,  166 => 61,  163 => 60,  146 => 59,  143 => 58,  141 => 57,  135 => 55,  129 => 51,  118 => 46,  111 => 43,  109 => 42,  106 => 37,  100 => 36,  95 => 35,  89 => 30,  81 => 27,  77 => 25,  73 => 24,  68 => 21,  66 => 20,  56 => 13,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "multishop/template/common/cart.twig", "");
    }
}
