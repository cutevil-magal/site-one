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

/* multishop/template/common/success.twig */
class __TwigTemplate_299333b448154d772aedaabdc6c7f91253e87cb32ae0a29f6565a5dffbac81e0 extends \Twig\Template
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

<div id=\"common-success\" class=\"container-fluid\">

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

    <div class=\"row px-xl-5\">
        ";
        // line 22
        echo ($context["column_left"] ?? null);
        echo "
        ";
        // line 23
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 24
            echo "            ";
            $context["class"] = "col-sm-6";
            // line 25
            echo "        ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 26
            echo "            ";
            $context["class"] = "col-sm-9";
            // line 27
            echo "        ";
        } else {
            // line 28
            echo "            ";
            $context["class"] = "col-sm-12";
            // line 29
            echo "        ";
        }
        // line 30
        echo "        <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
            <div class=\"bg-light p-30 mb-5\">
                ";
        // line 32
        echo ($context["content_top"] ?? null);
        echo "
                <h1>";
        // line 33
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                ";
        // line 34
        echo ($context["text_message"] ?? null);
        echo "
                <div class=\"buttons\">
                    <div class=\"pull-right\"><a href=\"";
        // line 36
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a>
                    </div>
                </div>
                ";
        // line 39
        echo ($context["content_bottom"] ?? null);
        echo "
            </div>
        </div>
        ";
        // line 42
        echo ($context["column_right"] ?? null);
        echo "</div>

</div>

";
        // line 46
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "multishop/template/common/success.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 46,  161 => 42,  155 => 39,  147 => 36,  142 => 34,  138 => 33,  134 => 32,  128 => 30,  125 => 29,  122 => 28,  119 => 27,  116 => 26,  113 => 25,  110 => 24,  108 => 23,  104 => 22,  96 => 16,  82 => 15,  74 => 13,  68 => 11,  65 => 10,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "multishop/template/common/success.twig", "");
    }
}
