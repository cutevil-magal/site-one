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

/* upgrade/upgrade.twig */
class __TwigTemplate_9db7f73a130aa82bceb397380125ab47e16954d18a205bbffdbafa5ed92ed345 extends \Twig\Template
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
<div class=\"container\">
  <header>
    <div class=\"row\">
      <div class=\"col-sm-6\">
        <h1 class=\"pull-left\">1<small>/2</small></h1>
        <h3>";
        // line 7
        echo ($context["heading_title"] ?? null);
        echo "<br/>
          <small>";
        // line 8
        echo ($context["text_upgrade"] ?? null);
        echo "</small></h3>
      </div>
      <div class=\"col-sm-6\">
        <div id=\"logo\" class=\"pull-right hidden-xs\"><img src=\"view/image/logo.png\" alt=\"OpenCart\" title=\"OpenCart\" /></div>
      </div>
    </div>
  </header>
  <div class=\"row\">
    <div class=\"col-sm-9\">
      <h3>";
        // line 17
        echo ($context["text_server"] ?? null);
        echo "</h3>
      <fieldset>
        <ol>
          <li>";
        // line 20
        echo ($context["text_error"] ?? null);
        echo "</li>
          <li>";
        // line 21
        echo ($context["text_clear"] ?? null);
        echo "</li>
          <li>";
        // line 22
        echo ($context["text_admin"] ?? null);
        echo "</li>
          <li>";
        // line 23
        echo ($context["text_user"] ?? null);
        echo "</li>
          <li>";
        // line 24
        echo ($context["text_setting"] ?? null);
        echo "</li>
          <li>";
        // line 25
        echo ($context["text_store"] ?? null);
        echo "</li>
        </ol>
      </fieldset>
      <h3>";
        // line 28
        echo ($context["text_steps"] ?? null);
        echo "</h3>
      <fieldset>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\">";
        // line 31
        echo ($context["entry_progress"] ?? null);
        echo "</label>
          <div class=\"col-sm-10\">
            <div class=\"progress\">
              <div id=\"progress-bar\" class=\"progress-bar\" style=\"width: 0%;\"></div>
            </div>
            <div id=\"progress-text\"></div>
          </div>
        </div>
      </fieldset>
      <div class=\"buttons\">
        <div class=\"text-right\">
          <input type=\"submit\" value=\"";
        // line 42
        echo ($context["button_continue"] ?? null);
        echo "\" id=\"button-continue\" class=\"btn btn-primary\" />
        </div>
      </div>
    </div>
    <div class=\"col-sm-3\">";
        // line 46
        echo ($context["column_left"] ?? null);
        echo "</div>
  </div>
  <script type=\"text/javascript\"><!--
var step = 0;

\$('#button-continue').on('click', function() {
\t\$('#progress-bar').addClass('progress-bar-success').css('width', '0%').removeClass('progress-bar-danger');
\t\$('#progress-text').html('');
\t\$('#button-continue').prop('disabled', true).before('<i class=\"fa fa-spinner fa-spin\"></i> ');

\tstart('index.php?route=upgrade/upgrade/next');
});

function start(url) {
\tsetTimeout(function(){
\t\t\$.ajax({
\t\t\turl: url,
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#progress-bar').addClass('progress-bar-danger');
\t\t\t\t\t\$('#progress-text').html('<div class=\"text-danger\">' + json['error'] + '</div>');

\t\t\t\t\t\$('#button-continue').prop('disabled', false);
\t\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#progress-text').html('<span class=\"text-success\">' + json['success'] + '</span>');
\t\t\t\t\t\$('#progress-bar').css('width', ((step / ";
        // line 76
        echo ($context["total"] ?? null);
        echo ") * 100) + '%');
\t\t\t\t}

\t\t\t\tif (json['next']) {
\t\t\t\t\tstart(json['next']);
\t\t\t\t} else if (!json['error']) {
\t\t\t\t\t\$('#button-continue').replaceWith('<a href=\"";
        // line 82
        echo ($context["store"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a>');
\t\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t}

\t\t\t\tstep++;
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-danger');
\t\t\t\t\$('#progress-text').html('<div class=\"text-danger\">' + (thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText) + '</div>');
\t\t\t\t\$('#button-continue').prop('disabled', false);
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t}
\t\t});
\t}, 1000);
}
//--></script></div>
";
        // line 98
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "upgrade/upgrade.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 98,  163 => 82,  154 => 76,  121 => 46,  114 => 42,  100 => 31,  94 => 28,  88 => 25,  84 => 24,  80 => 23,  76 => 22,  72 => 21,  68 => 20,  62 => 17,  50 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "upgrade/upgrade.twig", "");
    }
}
