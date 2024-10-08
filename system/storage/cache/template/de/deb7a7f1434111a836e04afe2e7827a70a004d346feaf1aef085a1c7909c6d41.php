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

/* default/template/account/reward.twig */
class __TwigTemplate_cfad8cb7160a5b700bab944adb97f624978b717435a87cb846fa635a80b6eb40 extends \Twig\Template
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
<div id=\"account-reward\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <p>";
        // line 18
        echo ($context["text_total"] ?? null);
        echo " <b>";
        echo ($context["total"] ?? null);
        echo "</b>.</p>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 23
        echo ($context["column_date_added"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 24
        echo ($context["column_description"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 25
        echo ($context["column_points"] ?? null);
        echo "</td>
            </tr>
          </thead>
          <tbody>
          
          ";
        // line 30
        if (($context["rewards"] ?? null)) {
            // line 31
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rewards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reward"]) {
                // line 32
                echo "          <tr>
            <td class=\"text-left\">";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["reward"], "date_added", [], "any", false, false, false, 33);
                echo "</td>
            <td class=\"text-left\">";
                // line 34
                if (twig_get_attribute($this->env, $this->source, $context["reward"], "order_id", [], "any", false, false, false, 34)) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["reward"], "href", [], "any", false, false, false, 34);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["reward"], "description", [], "any", false, false, false, 34);
                    echo "</a> ";
                } else {
                    // line 35
                    echo "              ";
                    echo twig_get_attribute($this->env, $this->source, $context["reward"], "description", [], "any", false, false, false, 35);
                    echo "
              ";
                }
                // line 36
                echo "</td>
            <td class=\"text-right\">";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["reward"], "points", [], "any", false, false, false, 37);
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reward'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "          ";
        } else {
            // line 41
            echo "          <tr>
            <td class=\"text-center\" colspan=\"3\">";
            // line 42
            echo ($context["text_empty"] ?? null);
            echo "</td>
          </tr>
          ";
        }
        // line 45
        echo "            </tbody>
          
        </table>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
        // line 50
        echo ($context["pagination"] ?? null);
        echo "</div>
        <div class=\"col-sm-6 text-right\">";
        // line 51
        echo ($context["results"] ?? null);
        echo "</div>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 54
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 56
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 57
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 59
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/account/reward.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 59,  202 => 57,  198 => 56,  191 => 54,  185 => 51,  181 => 50,  174 => 45,  168 => 42,  165 => 41,  162 => 40,  153 => 37,  150 => 36,  144 => 35,  136 => 34,  132 => 33,  129 => 32,  124 => 31,  122 => 30,  114 => 25,  110 => 24,  106 => 23,  96 => 18,  92 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/reward.twig", "");
    }
}
