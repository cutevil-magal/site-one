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

/* multishop/template/account/account.twig */
class __TwigTemplate_516103109b683614212ac52baf2f0679cfdab0c3f64a7857fac73030867ccebd extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "

<div id=\"account-account\" class=\"container-fluid\">

    <!-- Breadcrumb Start -->
    <div class=\"row px-xl-5\">
        <div class=\"col-12\">
            <nav class=\"breadcrumb bg-light mb-30\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 10)) {
                // line 11
                echo "                        <span class=\"breadcrumb-item active\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
                echo "</span>
                    ";
            } else {
                // line 13
                echo "                        <a class=\"breadcrumb-item text-dark\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
                echo "</a>
                    ";
            }
            // line 15
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "            </nav>
        </div>
    </div>
    <!-- Breadcrumb End -->

    ";
        // line 21
        if (($context["success"] ?? null)) {
            // line 22
            echo "        <div class=\"row px-xl-5\">
            <div class=\"col-12\">
                <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            // line 24
            echo ($context["success"] ?? null);
            echo "
                </div>
            </div>
        </div>
    ";
        }
        // line 29
        echo "
    <div class=\"row px-xl-5\">
        ";
        // line 31
        echo ($context["column_left"] ?? null);
        echo "
        ";
        // line 32
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 33
            echo "            ";
            $context["class"] = "col-sm-6";
            // line 34
            echo "        ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 35
            echo "            ";
            $context["class"] = "col-sm-9";
            // line 36
            echo "        ";
        } else {
            // line 37
            echo "            ";
            $context["class"] = "col-sm-12";
            // line 38
            echo "        ";
        }
        // line 39
        echo "
        <div id=\"content\" class=\"";
        // line 40
        echo ($context["class"] ?? null);
        echo "\">
            <div class=\"bg-light p-30 mb-5\">
                ";
        // line 42
        echo ($context["content_top"] ?? null);
        echo "
                <h2>";
        // line 43
        echo ($context["text_my_account"] ?? null);
        echo "</h2>
                ";
        // line 50
        echo "                ";
        // line 58
        echo "                <h2>";
        echo ($context["text_my_orders"] ?? null);
        echo "</h2>
                <ul class=\"list-unstyled\">
                    <li><a href=\"";
        // line 60
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
                    <li><a href=\"";
        // line 61
        echo ($context["download"] ?? null);
        echo "\">";
        echo ($context["text_download"] ?? null);
        echo "</a></li>
                    ";
        // line 62
        if (($context["reward"] ?? null)) {
            // line 63
            echo "                        <li><a href=\"";
            echo ($context["reward"] ?? null);
            echo "\">";
            echo ($context["text_reward"] ?? null);
            echo "</a></li>
                    ";
        }
        // line 65
        echo "                    <li><a href=\"";
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
                    <li><a href=\"";
        // line 66
        echo ($context["transaction"] ?? null);
        echo "\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a></li>
                    <li><a href=\"";
        // line 67
        echo ($context["recurring"] ?? null);
        echo "\">";
        echo ($context["text_recurring"] ?? null);
        echo "</a></li>
                </ul>
                <h2>";
        // line 69
        echo ($context["text_my_affiliate"] ?? null);
        echo "</h2>
                <ul class=\"list-unstyled\">
                    ";
        // line 71
        if ( !($context["tracking"] ?? null)) {
            // line 72
            echo "                        <li><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_add"] ?? null);
            echo "</a></li>
                    ";
        } else {
            // line 74
            echo "                        <li><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_edit"] ?? null);
            echo "</a></li>
                        <li><a href=\"";
            // line 75
            echo ($context["tracking"] ?? null);
            echo "\">";
            echo ($context["text_tracking"] ?? null);
            echo "</a></li>
                    ";
        }
        // line 77
        echo "                </ul>
                <h2>";
        // line 78
        echo ($context["text_my_newsletter"] ?? null);
        echo "</h2>
                <ul class=\"list-unstyled\">
                    <li><a href=\"";
        // line 80
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
                </ul>
                ";
        // line 82
        echo ($context["content_bottom"] ?? null);
        echo "
            </div>
        </div>
        ";
        // line 85
        echo ($context["column_right"] ?? null);
        echo "
    </div>

</div>

";
        // line 90
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "multishop/template/account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 90,  261 => 85,  255 => 82,  248 => 80,  243 => 78,  240 => 77,  233 => 75,  226 => 74,  218 => 72,  216 => 71,  211 => 69,  204 => 67,  198 => 66,  191 => 65,  183 => 63,  181 => 62,  175 => 61,  169 => 60,  163 => 58,  161 => 50,  157 => 43,  153 => 42,  148 => 40,  145 => 39,  142 => 38,  139 => 37,  136 => 36,  133 => 35,  130 => 34,  127 => 33,  125 => 32,  121 => 31,  117 => 29,  109 => 24,  105 => 22,  103 => 21,  96 => 16,  82 => 15,  74 => 13,  68 => 11,  65 => 10,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "multishop/template/account/account.twig", "");
    }
}
