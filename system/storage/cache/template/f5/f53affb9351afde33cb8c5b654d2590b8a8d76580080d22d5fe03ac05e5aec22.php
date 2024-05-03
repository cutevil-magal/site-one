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

/* marketplace/api.twig */
class __TwigTemplate_272062286799cecfe839adb38d5fc30732315c47a4c13ca189379e03e7b6018d extends \Twig\Template
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
        echo "<div class=\"modal-dialog\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <h4 class=\"modal-title\"><i class=\"fa fa-cog\"></i> ";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h4>
    </div>
    <div class=\"modal-body\">
      <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i>  ";
        // line 8
        echo ($context["text_signup"] ?? null);
        echo "</div>
      <div class=\"form-group\">
        <label for=\"input-username\">";
        // line 10
        echo ($context["entry_username"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"opencart_username\" value=\"\" placeholder=\"";
        // line 11
        echo ($context["entry_username"] ?? null);
        echo "\" id=\"input-username\" class=\"form-control\" />
      </div>
      <div class=\"form-group\">
        <label for=\"input-secret\">";
        // line 14
        echo ($context["entry_secret"] ?? null);
        echo "</label>
        <textarea name=\"opencart_secret\" placeholder=\"";
        // line 15
        echo ($context["entry_secret"] ?? null);
        echo "\" rows=\"8\" id=\"input-secret\" class=\"form-control\"></textarea>
      </div>
      <div class=\"form-group text-right\">
        <button type=\"button\" id=\"button-save\" data-loading-text=\"";
        // line 18
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_save"] ?? null);
        echo "</button>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-save').on('click', function(e) {
\t\$.ajax({
\t\turl: 'index.php?route=marketplace/api/save&user_token=";
        // line 26
        echo ($context["user_token"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',\t\t
\t\tdata: \$('#modal-opencart :input'),\t\t
\t\tbeforeSend: function() {
\t\t\t\$('#button-save').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-save').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t
\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#modal-opencart .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t\t\t\t
\t\t\t\tif (json['error']['username']) {
\t\t\t\t\t\$('input[name=\"username\"]').after('<div class=\"text-danger\">' + json['error']['username'] + '</div>');
\t\t\t\t}\t
\t\t\t\t
\t\t\t\tif (json['error']['secret']) {
\t\t\t\t\t\$('textarea[name=\"secret\"]').after('<div class=\"text-danger\">' + json['error']['secret'] + '</div>');
\t\t\t\t}\t\t\t\t\t\t
\t\t\t}
\t\t\t
\t\t\tif (json['success']) {
\t\t\t\t\$('#modal-opencart .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t
\t\t\t\twindow.location.reload();
\t\t\t}\t\t\t
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script> ";
    }

    public function getTemplateName()
    {
        return "marketplace/api.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 26,  74 => 18,  68 => 15,  64 => 14,  58 => 11,  54 => 10,  49 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketplace/api.twig", "");
    }
}
