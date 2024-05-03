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

/* catalog/review_form.twig */
class __TwigTemplate_e743112dd04fd688b99829274e69eeee3ac1a0968c400cb708b26413a5b7eb01 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-review\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-review\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-author\">";
        // line 28
        echo ($context["entry_author"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"author\" value=\"";
        // line 30
        echo ($context["author"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_author"] ?? null);
        echo "\" id=\"input-author\" class=\"form-control\" />
              ";
        // line 31
        if (($context["error_author"] ?? null)) {
            // line 32
            echo "              <div class=\"text-danger\">";
            echo ($context["error_author"] ?? null);
            echo "</div>
              ";
        }
        // line 33
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-product\"><span data-toggle=\"tooltip\" title=\"";
        // line 36
        echo ($context["help_product"] ?? null);
        echo "\">";
        echo ($context["entry_product"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"product\" value=\"";
        // line 38
        echo ($context["product"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 39
        echo ($context["product_id"] ?? null);
        echo "\" />
              ";
        // line 40
        if (($context["error_product"] ?? null)) {
            // line 41
            echo "              <div class=\"text-danger\">";
            echo ($context["error_product"] ?? null);
            echo "</div>
              ";
        }
        // line 42
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-text\">";
        // line 45
        echo ($context["entry_text"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"text\" cols=\"60\" rows=\"8\" placeholder=\"";
        // line 47
        echo ($context["entry_text"] ?? null);
        echo "\" id=\"input-text\" class=\"form-control\">";
        echo ($context["text"] ?? null);
        echo "</textarea>
              ";
        // line 48
        if (($context["error_text"] ?? null)) {
            // line 49
            echo "              <div class=\"text-danger\">";
            echo ($context["error_text"] ?? null);
            echo "</div>
              ";
        }
        // line 50
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 53
        echo ($context["entry_rating"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\"> ";
        // line 55
        if ((($context["rating"] ?? null) == 1)) {
            // line 56
            echo "                <input type=\"radio\" name=\"rating\" value=\"1\" checked=\"checked\" />
                1
                ";
        } else {
            // line 59
            echo "                <input type=\"radio\" name=\"rating\" value=\"1\" />
                1
                ";
        }
        // line 61
        echo " </label>
              <label class=\"radio-inline\"> ";
        // line 62
        if ((($context["rating"] ?? null) == 2)) {
            // line 63
            echo "                <input type=\"radio\" name=\"rating\" value=\"2\" checked=\"checked\" />
                2
                ";
        } else {
            // line 66
            echo "                <input type=\"radio\" name=\"rating\" value=\"2\" />
                2
                ";
        }
        // line 68
        echo " </label>
              <label class=\"radio-inline\"> ";
        // line 69
        if ((($context["rating"] ?? null) == 3)) {
            // line 70
            echo "                <input type=\"radio\" name=\"rating\" value=\"3\" checked=\"checked\" />
                3
                ";
        } else {
            // line 73
            echo "                <input type=\"radio\" name=\"rating\" value=\"3\" />
                3
                ";
        }
        // line 75
        echo " </label>
              <label class=\"radio-inline\"> ";
        // line 76
        if ((($context["rating"] ?? null) == 4)) {
            // line 77
            echo "                <input type=\"radio\" name=\"rating\" value=\"4\" checked=\"checked\" />
                4
                ";
        } else {
            // line 80
            echo "                <input type=\"radio\" name=\"rating\" value=\"4\" />
                4
                ";
        }
        // line 82
        echo " </label>
              <label class=\"radio-inline\"> ";
        // line 83
        if ((($context["rating"] ?? null) == 5)) {
            // line 84
            echo "                <input type=\"radio\" name=\"rating\" value=\"5\" checked=\"checked\" />
                5
                ";
        } else {
            // line 87
            echo "                <input type=\"radio\" name=\"rating\" value=\"5\" />
                5
                ";
        }
        // line 89
        echo " </label>
              ";
        // line 90
        if (($context["error_rating"] ?? null)) {
            // line 91
            echo "              <div class=\"text-danger\">";
            echo ($context["error_rating"] ?? null);
            echo "</div>
              ";
        }
        // line 92
        echo " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-date-added\">";
        // line 95
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
            <div class=\"col-sm-3\">
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"date_added\" value=\"";
        // line 98
        echo ($context["date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD HH:mm:ss\" id=\"input-date-added\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span> </div>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 105
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">                
                ";
        // line 108
        if (($context["status"] ?? null)) {
            echo "                
                <option value=\"1\" selected=\"selected\">";
            // line 109
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 110
            echo ($context["text_disabled"] ?? null);
            echo "</option>                
                ";
        } else {
            // line 111
            echo "                
                <option value=\"1\">";
            // line 112
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 113
            echo ($context["text_disabled"] ?? null);
            echo "</option>                
                ";
        }
        // line 115
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 124
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name=\\'product\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 133
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'product\\']').val(item['label']);
\t\t\$('input[name=\\'product_id\\']').val(item['value']);\t\t
\t}\t
});
//--></script></div>
";
        // line 151
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/review_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 151,  349 => 133,  337 => 124,  326 => 115,  321 => 113,  317 => 112,  314 => 111,  309 => 110,  305 => 109,  301 => 108,  295 => 105,  283 => 98,  277 => 95,  272 => 92,  266 => 91,  264 => 90,  261 => 89,  256 => 87,  251 => 84,  249 => 83,  246 => 82,  241 => 80,  236 => 77,  234 => 76,  231 => 75,  226 => 73,  221 => 70,  219 => 69,  216 => 68,  211 => 66,  206 => 63,  204 => 62,  201 => 61,  196 => 59,  191 => 56,  189 => 55,  184 => 53,  179 => 50,  173 => 49,  171 => 48,  165 => 47,  160 => 45,  155 => 42,  149 => 41,  147 => 40,  143 => 39,  137 => 38,  130 => 36,  125 => 33,  119 => 32,  117 => 31,  111 => 30,  106 => 28,  101 => 26,  95 => 23,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/review_form.twig", "");
    }
}
