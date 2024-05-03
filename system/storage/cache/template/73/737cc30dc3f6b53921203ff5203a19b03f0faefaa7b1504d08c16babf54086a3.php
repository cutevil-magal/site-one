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

/* extension/ctmenu/index.twig */
class __TwigTemplate_02ce034a94d37ef962512f5c13677e5343466f30219c3a7913cc066de95d1ca3 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\"><a href=\"";
        // line 5
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
            </div>
            <ul class=\"breadcrumb\">
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 15
        if (($context["error_warning"] ?? null)) {
            // line 16
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 20
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 21
            echo "            <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 25
        echo "
        ";
        // line 26
        if (($context["error"] ?? null)) {
            // line 27
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["error"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 31
        echo "
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 34
        echo ($context["text_list"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">


                <div class=\"table-responsive\">
                    <table class=\"table table-bordered table-hover\">
                        <thead>
                        <tr>
                            <td>ID</td>
                            <td>Наименование</td>
                            <td>Действие</td>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 49
        if (($context["ctmenu"] ?? null)) {
            // line 50
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ctmenu"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 51
                echo "                                <tr>
                                    <td class=\"text-left\">";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "id", [], "any", false, false, false, 52);
                echo "</td>
                                    <td class=\"text-left\">";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "title", [], "any", false, false, false, 53);
                echo "</td>
                                    <td class=\"text-right\">
                                        <a href=\"";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "edit", [], "any", false, false, false, 55);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                                        <a href=\"";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "delete", [], "any", false, false, false, 56);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_delete"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i></a>
                                        <a href=\"";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "view_menu_links", [], "any", false, false, false, 57);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view_menu_items"] ?? null);
                echo "\" class=\"btn btn-warning\"><i class=\"fa fa-list\"></i></a>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                        ";
        } else {
            // line 62
            echo "                            <tr>
                                <td class=\"text-center\" colspan=\"4\">";
            // line 63
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                            </tr>
                        ";
        }
        // line 66
        echo "                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
</div>
";
        // line 75
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/ctmenu/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 75,  186 => 66,  180 => 63,  177 => 62,  174 => 61,  162 => 57,  156 => 56,  150 => 55,  145 => 53,  141 => 52,  138 => 51,  133 => 50,  131 => 49,  113 => 34,  108 => 31,  100 => 27,  98 => 26,  95 => 25,  87 => 21,  84 => 20,  76 => 16,  74 => 15,  68 => 11,  57 => 9,  53 => 8,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ctmenu/index.twig", "");
    }
}
