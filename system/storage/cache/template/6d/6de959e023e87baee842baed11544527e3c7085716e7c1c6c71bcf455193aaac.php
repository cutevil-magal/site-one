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

/* extension/ctmenu/menu_view_links.twig */
class __TwigTemplate_87848e94a15cbb7973930caf55587a10143ffec4190f237fae2d9226777c837c extends \Twig\Template
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
        echo "\"
                                       class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
            </div>
            <ul class=\"breadcrumb\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i
                        class=\"fa fa-exclamation-circle\"></i> ";
            // line 18
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 22
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 23
            echo "            <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 27
        echo "
        ";
        // line 28
        if (($context["error"] ?? null)) {
            // line 29
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["error"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 33
        echo "
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 36
        echo ($context["text_list_menu"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">

                <style>
                    .list-group.list-group-root {
                        padding: 0;
                        overflow: hidden;
                    }

                    .list-group, .list-group.list-group-root > p .list-group {
                        margin-bottom: 0;
                        background-color: #fff;
                    }

                    .list-group.list-group-root .list-group-item {
                        border-radius: 0;
                        border-width: 1px 0 0 0;
                    }

                    .list-group.list-group-root > .list-group-item:first-child {
                        border-top-width: 0;
                    }

                    .item-p {
                        margin: 0;
                        position: relative;
                    }

                    .item-p ~ .list-group {
                        padding-left: 20px;
                    }

                    .item-p > span {
                        position: absolute;
                        right: 0;
                        top: 0;
                    }
                </style>
                ";
        // line 75
        if (($context["ctmenu"] ?? null)) {
            // line 76
            echo "                    <div class=\"list-group list-group-root well\">
                        ";
            // line 77
            echo ($context["ctmenu"] ?? null);
            echo "
                    </div>
                ";
        } else {
            // line 80
            echo "                    <p>Меню пусто...</p>
                ";
        }
        // line 82
        echo "            </div>
        </div>

    </div>
</div>
";
        // line 87
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/ctmenu/menu_view_links.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 87,  173 => 82,  169 => 80,  163 => 77,  160 => 76,  158 => 75,  116 => 36,  111 => 33,  103 => 29,  101 => 28,  98 => 27,  90 => 23,  87 => 22,  80 => 18,  77 => 17,  75 => 16,  69 => 12,  58 => 10,  54 => 9,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ctmenu/menu_view_links.twig", "");
    }
}
