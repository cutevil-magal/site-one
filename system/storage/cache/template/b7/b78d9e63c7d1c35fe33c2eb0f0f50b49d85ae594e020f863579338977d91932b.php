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

/* multishop/template/product/category.twig */
class __TwigTemplate_c46f8c46941a5c893cfeda8bff20b6a331c7216faaa68abd56437bec913e7f24 extends \Twig\Template
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
<script type=\"text/javascript\">
setTimeout(function(){
    // тут что-то
    location.reload();
  }, 1000);
</script>
<div id=\"product-category\">

    <!-- Breadcrumb Start -->
    <div class=\"container-fluid\">
        <div class=\"row px-xl-5\">
            <div class=\"col-12\">
                <nav class=\"breadcrumb bg-light mb-30\">
                    ";
        // line 15
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
            // line 16
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 16)) {
                // line 17
                echo "                            <span class=\"breadcrumb-item active\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 17);
                echo "</span>
                        ";
            } else {
                // line 19
                echo "                            <a class=\"breadcrumb-item text-dark\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 19);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 19);
                echo "</a>
                        ";
            }
            // line 21
            echo "                    ";
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
        // line 22
        echo "                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Start -->
    <div class=\"container-fluid\">
        <div class=\"row px-xl-5\">

            ";
        // line 33
        echo ($context["column_left"] ?? null);
        echo "

            ";
        // line 35
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 36
            echo "                ";
            list($context["class"], $context["card"]) =             ["col-lg-6 col-md-8", "col-lg-6"];
            // line 37
            echo "            ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 38
            echo "                ";
            list($context["class"], $context["card"]) =             ["col-lg-9 col-md-8", "col-lg-4"];
            // line 39
            echo "            ";
        } else {
            // line 40
            echo "                ";
            list($context["class"], $context["card"]) =             ["col-12", "col-lg-3"];
            // line 41
            echo "            ";
        }
        // line 42
        echo "
            <!-- Shop Product Start -->
            <div class=\"";
        // line 44
        echo ($context["class"] ?? null);
        echo "\" id=\"content\">

                <div class=\"row\">
                    <div class=\"col-12\">
                        <h1 class=\"section-title position-relative text-uppercase mb-4 h3\">
                            <span class=\"bg-secondary pr-3\">";
        // line 49
        echo ($context["heading_title"] ?? null);
        echo "</span>
                        </h1>
                    </div>

                    ";
        // line 53
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 54
            echo "                        ";
            if (($context["thumb"] ?? null)) {
                // line 55
                echo "                            <div class=\"col-4 col-sm-2\">
                                <img src=\"";
                // line 56
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\">
                            </div>
                        ";
            }
            // line 59
            echo "
                        ";
            // line 60
            if (($context["description"] ?? null)) {
                // line 61
                echo "                            <div class=\"col-8 col-sm-10\">
                                ";
                // line 62
                echo ($context["description"] ?? null);
                echo "
                            </div>
                        ";
            }
            // line 65
            echo "
                        <div class=\"col-12\">
                            <hr>
                        </div>
                    ";
        }
        // line 70
        echo "
                    ";
        // line 71
        if (($context["categories"] ?? null)) {
            // line 72
            echo "                        <div class=\"col-12\">
                            <h4>";
            // line 73
            echo ($context["text_refine"] ?? null);
            echo "</h4>
                            ";
            // line 74
            if ((twig_length_filter($this->env, ($context["categories"] ?? null)) <= 5)) {
                // line 75
                echo "                                <div class=\"row\">
                                    <div class=\"col-sm-3\">
                                        <ul class=\"list-unstyled\">
                                            ";
                // line 78
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 79
                    echo "                                                <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 79);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 79);
                    echo "</a></li>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "                                        </ul>
                                    </div>
                                </div>
                            ";
            } else {
                // line 85
                echo "                                <div class=\"row\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 86
                    echo "                                        <div class=\"col-sm-3\">
                                            <ul class=\"list-unstyled\">
                                                ";
                    // line 88
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 89
                        echo "                                                    <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 89);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 89);
                        echo "</a></li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 91
                    echo "                                            </ul>
                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "</div>
                                <br/>
                            ";
            }
            // line 96
            echo "                        </div>
                    ";
        }
        // line 98
        echo "
                </div>

                <div class=\"row pb-3\">

                    ";
        // line 103
        if (($context["products"] ?? null)) {
            // line 104
            echo "                        <div class=\"col-sm-6\">
                            <div class=\"input-group mb-3\">
                                <div class=\"input-group-prepend\">
                                    <label class=\"input-group-text\" for=\"sort-select\">";
            // line 107
            echo ($context["text_sort"] ?? null);
            echo "</label>
                                </div>
                                <select class=\"custom-select\" id=\"input-sort\" onchange=\"location = this.value;\">
                                    ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 111
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 111) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 112
                    echo "                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 112);
                    echo "\"
                                                    selected=\"selected\">";
                    // line 113
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 113);
                    echo "</option>
                                        ";
                } else {
                    // line 115
                    echo "                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 115);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 115);
                    echo "</option>
                                        ";
                }
                // line 117
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "                                </select>
                            </div>
                        </div>

                        <div class=\"col-sm-6\">
                            <div class=\"input-group mb-3\">
                                <div class=\"input-group-prepend\">
                                    <label class=\"input-group-text\" for=\"limit-select\">";
            // line 125
            echo ($context["text_limit"] ?? null);
            echo "</label>
                                </div>
                                <select class=\"custom-select\" id=\"input-limit\" onchange=\"location = this.value;\">
                                    ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 129
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 129) == ($context["limit"] ?? null))) {
                    // line 130
                    echo "                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 130);
                    echo "\"
                                                    selected=\"selected\">";
                    // line 131
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 131);
                    echo "</option>
                                        ";
                } else {
                    // line 133
                    echo "                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 133);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 133);
                    echo "</option>
                                        ";
                }
                // line 135
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "                                </select>
                            </div>
                        </div>

                        ";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 141
                echo "                            <div class=\"";
                echo ($context["card"] ?? null);
                echo " col-sm-6 pb-1\">
                                <div class=\"product-item bg-light mb-4\">
                                    <div class=\"product-img position-relative overflow-hidden\">
                                        <img class=\"img-fluid w-100\" src=\"";
                // line 144
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 144);
                echo "\" alt=\"\">
                                        ";
                // line 159
                echo "                                    </div>
                                    <div class=\"text-center py-4\">
                                        <a class=\"h6 text-decoration-none text-truncate\"
                                           href=\"";
                // line 162
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 162);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 162);
                echo "</a>
                                        ";
                // line 163
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 163)) {
                    // line 164
                    echo "                                            <div class=\"d-flex align-items-center justify-content-center mt-2\">
                                                ";
                    // line 165
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 165)) {
                        // line 166
                        echo "                                                    <h5>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 166);
                        echo "</h5>
                                                ";
                    } else {
                        // line 168
                        echo "                                                    <h5>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 168);
                        echo "</h5>
                                                    <h6 class=\"text-muted ml-2\">
                                                        <del>";
                        // line 170
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 170);
                        echo "</del>
                                                    </h6>
                                                ";
                    }
                    // line 173
                    echo "                                            </div>
                                        ";
                }
                // line 175
                echo "
                                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                                            ";
                // line 177
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 178
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 178) < $context["i"])) {
                        // line 179
                        echo "                                                    <small class=\"far fa-star text-primary mr-1\"></small>
                                                ";
                    } else {
                        // line 181
                        echo "                                                    <small class=\"fa fa-star text-primary mr-1\"></small>
                                                ";
                    }
                    // line 183
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 184
                echo "                                        </div>
                                        <div class=\"cart-buttons mt-2 d-flex align-items-center justify-content-center\">
                                            <button type=\"button\" onclick=\"cart.add('";
                // line 186
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 186);
                echo "');\" class=\"btn btn-outline-dark btn-square\" href=\"\">
                                                <i class=\"fa fa-check\"></i></i>";
                // line 188
                echo "                                            </button>
                                            <button type=\"button\" onclick=\"wishlist.add('";
                // line 189
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 189);
                echo "');\" class=\"btn btn-outline-dark btn-square\" href=\"\">
                                                <i class=\"fa fa-heart\"></i>";
                // line 191
                echo "                                            </button>
                                            
                                            ";
                // line 197
                echo "                                        </div>
                                        ";
                // line 212
                echo "
                                    </div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 217
            echo "
                        <div class=\"col-12\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <nav>
                                        ";
            // line 222
            echo ($context["pagination"] ?? null);
            echo "
                                    </nav>
                                </div>
                                <div class=\"col-md-6 text-right my-auto\">
                                    ";
            // line 226
            echo ($context["results"] ?? null);
            echo "
                                </div>
                            </div>
                        </div>

                    ";
        } else {
            // line 232
            echo "                        <div class=\"col-12\">
                            <p>";
            // line 233
            echo ($context["text_empty"] ?? null);
            echo "</p>
                        </div>
                    ";
        }
        // line 236
        echo "
                </div>
            </div>
            <!-- Shop Product End -->

        </div>
    </div>
    <!-- Shop End -->

</div>


";
        // line 248
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "multishop/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  540 => 248,  526 => 236,  520 => 233,  517 => 232,  508 => 226,  501 => 222,  494 => 217,  484 => 212,  481 => 197,  477 => 191,  473 => 189,  470 => 188,  466 => 186,  462 => 184,  456 => 183,  452 => 181,  448 => 179,  445 => 178,  441 => 177,  437 => 175,  433 => 173,  427 => 170,  421 => 168,  415 => 166,  413 => 165,  410 => 164,  408 => 163,  402 => 162,  397 => 159,  393 => 144,  386 => 141,  382 => 140,  376 => 136,  370 => 135,  362 => 133,  357 => 131,  352 => 130,  349 => 129,  345 => 128,  339 => 125,  330 => 118,  324 => 117,  316 => 115,  311 => 113,  306 => 112,  303 => 111,  299 => 110,  293 => 107,  288 => 104,  286 => 103,  279 => 98,  275 => 96,  270 => 93,  262 => 91,  251 => 89,  247 => 88,  243 => 86,  238 => 85,  232 => 81,  221 => 79,  217 => 78,  212 => 75,  210 => 74,  206 => 73,  203 => 72,  201 => 71,  198 => 70,  191 => 65,  185 => 62,  182 => 61,  180 => 60,  177 => 59,  167 => 56,  164 => 55,  161 => 54,  159 => 53,  152 => 49,  144 => 44,  140 => 42,  137 => 41,  134 => 40,  131 => 39,  128 => 38,  125 => 37,  122 => 36,  120 => 35,  115 => 33,  102 => 22,  88 => 21,  80 => 19,  74 => 17,  71 => 16,  54 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "multishop/template/product/category.twig", "");
    }
}
