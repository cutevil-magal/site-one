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

/* multishop/template/account/login.twig */
class __TwigTemplate_bd01c87b9eefb9ee3064a53704f2558172b28ed71b2136dfb83a3aeff4cb8fcc extends \Twig\Template
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

<div id=\"account-login\" class=\"container-fluid\">

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
        echo "    ";
        if (($context["error_warning"] ?? null)) {
            // line 30
            echo "        <div class=\"row px-xl-5\">
            <div class=\"col-12\">
                <div class=\"alert alert-danger alert-dismissible\"><i
                            class=\"fa fa-exclamation-circle\"></i> ";
            // line 33
            echo ($context["error_warning"] ?? null);
            echo "
                </div>
            </div>
        </div>
    ";
        }
        // line 38
        echo "
    <div class=\"row px-xl-5\">
        ";
        // line 40
        echo ($context["column_left"] ?? null);
        echo "
        ";
        // line 41
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 42
            echo "            ";
            $context["class"] = "col-sm-6";
            // line 43
            echo "        ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 44
            echo "            ";
            $context["class"] = "col-sm-9";
            // line 45
            echo "        ";
        } else {
            // line 46
            echo "            ";
            $context["class"] = "col-sm-12";
            // line 47
            echo "        ";
        }
        // line 48
        echo "        <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
            <div class=\"bg-light p-30 mb-5\">
                ";
        // line 50
        echo ($context["content_top"] ?? null);
        echo "
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        ";
        // line 58
        echo "                    </div>
                    <div class=\"col-sm-8\">
                        <div class=\"well\">
                            <h2>";
        // line 61
        echo ($context["text_returning_customer"] ?? null);
        echo "</h2>
                            <p><strong>";
        // line 62
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</strong></p>
                            <form action=\"";
        // line 63
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\" for=\"input-email\">";
        // line 65
        echo ($context["entry_email"] ?? null);
        echo "</label>
                                    <input type=\"text\" name=\"email\" value=\"";
        // line 66
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\"
                                           id=\"input-email\" class=\"form-control\"/>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\" for=\"input-password\">";
        // line 70
        echo ($context["entry_password"] ?? null);
        echo "</label>
                                    <input type=\"password\" name=\"password\" value=\"";
        // line 71
        echo ($context["password"] ?? null);
        echo "\"
                                           placeholder=\"";
        // line 72
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                                    <a href=\"";
        // line 73
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div>
                                <input type=\"submit\" value=\"";
        // line 74
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn btn-primary\"/>
                                ";
        // line 75
        if (($context["redirect"] ?? null)) {
            // line 76
            echo "                                    <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\"/>
                                ";
        }
        // line 78
        echo "                            </form>
                        </div>
                    </div>
                </div>
                ";
        // line 82
        echo ($context["content_bottom"] ?? null);
        echo "
            </div>
        </div>
        ";
        // line 85
        echo ($context["column_right"] ?? null);
        echo "</div>

</div>

";
        // line 89
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "multishop/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 89,  246 => 85,  240 => 82,  234 => 78,  228 => 76,  226 => 75,  222 => 74,  216 => 73,  212 => 72,  208 => 71,  204 => 70,  195 => 66,  191 => 65,  186 => 63,  182 => 62,  178 => 61,  173 => 58,  167 => 50,  161 => 48,  158 => 47,  155 => 46,  152 => 45,  149 => 44,  146 => 43,  143 => 42,  141 => 41,  137 => 40,  133 => 38,  125 => 33,  120 => 30,  117 => 29,  109 => 24,  105 => 22,  103 => 21,  96 => 16,  82 => 15,  74 => 13,  68 => 11,  65 => 10,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "multishop/template/account/login.twig", "");
    }
}
