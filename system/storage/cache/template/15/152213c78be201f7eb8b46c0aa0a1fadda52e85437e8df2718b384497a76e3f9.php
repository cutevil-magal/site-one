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

/* extension/module/live_search.twig */
class __TwigTemplate_f05e1ca951db50d9cfc8fa9361f0ef68395f60f7b887e367a88951d4a3df10df extends \Twig\Template
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
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
      </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo ($context["text_edit"] ?? null);
        echo " </h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-show-image\">";
        // line 30
        echo ($context["entry_show_image"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_live_search_show_image\" id=\"input-show-image\" class=\"form-control\">
                ";
        // line 33
        if (($context["module_live_search_show_image"] ?? null)) {
            // line 34
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 35
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 37
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 38
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 40
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-show-price\">";
        // line 44
        echo ($context["entry_show_price"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_live_search_show_price\" id=\"input-show-price\" class=\"form-control\">
                ";
        // line 47
        if (($context["module_live_search_show_price"] ?? null)) {
            // line 48
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 49
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 51
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 52
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 54
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-show-description\">";
        // line 58
        echo ($context["entry_show_description"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_live_search_show_description\" id=\"input-show-description\" class=\"form-control\">
                ";
        // line 61
        if (($context["module_live_search_show_description"] ?? null)) {
            // line 62
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 63
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 65
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 66
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 68
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-show-add-button\">";
        // line 72
        echo ($context["entry_show_add_button"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_live_search_show_add_button\" id=\"input-show-add-button\" class=\"form-control\">
                ";
        // line 75
        if (($context["module_live_search_show_add_button"] ?? null)) {
            // line 76
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 77
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 79
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 80
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 82
        echo "              </select>
            </div>
          </div>
          
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 87
        echo ($context["help_view_all_results"] ?? null);
        echo "\">";
        echo ($context["entry_view_all_results"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 90
            echo "                <div class=\"input-group\"> <span class=\"input-group-addon\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "flag_img", [], "any", false, false, false, 90);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 90);
            echo "\" /></span>
                  <input type=\"text\" name=\"module_live_search_view_all_results[";
            // line 91
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91);
            echo "][name]\" value=\"";
            if ( !(null === (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["module_live_search_view_all_results"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91)] ?? null) : null))) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["module_live_search_view_all_results"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91)] ?? null) : null), "name", [], "any", false, false, false, 91);
                echo " ";
            }
            echo "\" placeholder=\"";
            echo ($context["text_view_all_results"] ?? null);
            echo "\" class=\"form-control\" />
                </div>
                ";
            // line 93
            if ( !(null === (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_view_all_results"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 93)] ?? null) : null))) {
                // line 94
                echo "                <div class=\"text-danger\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["error_view_all_results"] ?? null), "language", [], "any", false, false, false, 94), "language_id", [], "any", false, false, false, 94);
                echo "</div>
                ";
            }
            // line 96
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-limit\">";
        // line 100
        echo ($context["entry_limit"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" name=\"module_live_search_limit\" value=\"";
        // line 102
        echo ($context["module_live_search_limit"] ?? null);
        echo "\" placeholder=\"5\" id=\"input-limit\" class=\"form-control\" />
              ";
        // line 103
        if (($context["error_limit"] ?? null)) {
            // line 104
            echo "              <div class=\"text-danger\">";
            echo ($context["error_limit"] ?? null);
            echo "</div>
              ";
        }
        // line 106
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-width\">";
        // line 109
        echo ($context["entry_width"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" name=\"module_live_search_image_width\" value=\"";
        // line 111
        echo ($context["module_live_search_image_width"] ?? null);
        echo "\" placeholder=\"50\" id=\"input-width\" class=\"form-control\" />
              ";
        // line 112
        if (($context["error_width"] ?? null)) {
            // line 113
            echo "              <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
              ";
        }
        // line 115
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-height\">";
        // line 118
        echo ($context["entry_height"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" name=\"module_live_search_image_height\" value=\"";
        // line 120
        echo ($context["module_live_search_image_height"] ?? null);
        echo "\" placeholder=\"50\" id=\"input-height\" class=\"form-control\" />
              ";
        // line 121
        if (($context["error_height"] ?? null)) {
            // line 122
            echo "              <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
              ";
        }
        // line 124
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-title-length\"><span data-toggle=\"tooltip\" title=\"";
        // line 127
        echo ($context["help_length"] ?? null);
        echo "\">";
        echo ($context["entry_title_length"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"number\" name=\"module_live_search_title_length\" value=\"";
        // line 129
        echo ($context["module_live_search_title_length"] ?? null);
        echo "\" placeholder=\"100\" id=\"input-title-length\" class=\"form-control\" />
              ";
        // line 130
        if (($context["error_title_length"] ?? null)) {
            // line 131
            echo "              <div class=\"text-danger\">";
            echo ($context["error_title_length"] ?? null);
            echo "</div>
              ";
        }
        // line 133
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-description-length\"><span data-toggle=\"tooltip\" title=\"";
        // line 136
        echo ($context["help_length"] ?? null);
        echo "\">";
        echo ($context["entry_description_length"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"number\" name=\"module_live_search_description_length\" value=\"";
        // line 138
        echo ($context["module_live_search_description_length"] ?? null);
        echo "\" placeholder=\"100\" id=\"input-description-length\" class=\"form-control\" />
              ";
        // line 139
        if (($context["error_description_length"] ?? null)) {
            // line 140
            echo "              <div class=\"text-danger\">";
            echo ($context["error_description_length"] ?? null);
            echo "</div>
              ";
        }
        // line 142
        echo "            </div>
          </div>

          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-min-length\">";
        // line 146
        echo ($context["entry_min_length"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" name=\"module_live_search_min_length\" value=\"";
        // line 148
        echo ($context["module_live_search_min_length"] ?? null);
        echo "\" placeholder=\"1\" id=\"input-min-length\" class=\"form-control\" />
              ";
        // line 149
        if (($context["error_min_length"] ?? null)) {
            // line 150
            echo "              <div class=\"text-danger\">";
            echo ($context["error_min_length"] ?? null);
            echo "</div>
              ";
        }
        // line 152
        echo "            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 156
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_live_search_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 159
        if (($context["module_live_search_status"] ?? null)) {
            // line 160
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 161
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 163
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 164
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 166
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<script type=\"text/javascript\"><!--

//--></script></div>
";
        // line 176
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/live_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  473 => 176,  461 => 166,  456 => 164,  451 => 163,  446 => 161,  441 => 160,  439 => 159,  433 => 156,  427 => 152,  421 => 150,  419 => 149,  415 => 148,  410 => 146,  404 => 142,  398 => 140,  396 => 139,  392 => 138,  385 => 136,  380 => 133,  374 => 131,  372 => 130,  368 => 129,  361 => 127,  356 => 124,  350 => 122,  348 => 121,  344 => 120,  339 => 118,  334 => 115,  328 => 113,  326 => 112,  322 => 111,  317 => 109,  312 => 106,  306 => 104,  304 => 103,  300 => 102,  295 => 100,  290 => 97,  284 => 96,  278 => 94,  276 => 93,  263 => 91,  256 => 90,  252 => 89,  245 => 87,  238 => 82,  233 => 80,  228 => 79,  223 => 77,  218 => 76,  216 => 75,  210 => 72,  204 => 68,  199 => 66,  194 => 65,  189 => 63,  184 => 62,  182 => 61,  176 => 58,  170 => 54,  165 => 52,  160 => 51,  155 => 49,  150 => 48,  148 => 47,  142 => 44,  136 => 40,  131 => 38,  126 => 37,  121 => 35,  116 => 34,  114 => 33,  108 => 30,  103 => 28,  97 => 25,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/live_search.twig", "");
    }
}
