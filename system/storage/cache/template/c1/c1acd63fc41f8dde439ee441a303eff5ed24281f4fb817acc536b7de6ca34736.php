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

/* default/template/mail/forgotten.twig */
class __TwigTemplate_3995a13bc7b7b146c51cf948eaa05346f2635f7fd263162bbb5ca0c2712eb424 extends \Twig\Template
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
        echo ($context["text_greeting"] ?? null);
        echo "

";
        // line 3
        echo ($context["text_change"] ?? null);
        echo "

";
        // line 5
        echo ($context["reset"] ?? null);
        echo "

";
        // line 7
        echo ($context["text_ip"] ?? null);
        echo " 

";
        // line 9
        echo ($context["ip"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/mail/forgotten.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  52 => 7,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/mail/forgotten.twig", "");
    }
}
