<?php

/* partials/media-list-wrapper__sidebar.html.twig */
class __TwigTemplate_00b7a6ad87ef36922e770ea25dc48f5ad42dfcd6589c4a32d2d19406ce57b74b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"pages-list-container clear block size-1-4\">
    <h5>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGES"));
        echo "</h5>
    <div class=\"mediapicker-scroll\">
        <ul class=\"pages-list depth-0\">
            ";
        // line 5
        echo $this->getAttribute($this, "loop", array(0 => ($context["pages"] ?? null), 1 => 0, 2 => $context), "method");
        echo "
        </ul>
    </div>
</div>

";
    }

    // line 10
    public function getloop($__page__ = null, $__depth__ = null, $__twig_vars__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "depth" => $__depth__,
            "twig_vars" => $__twig_vars__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "    ";
            $context["separator"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["twig_vars"] ?? null), "config", array(), "array"), "system", array()), "param_sep", array());
            // line 12
            echo "    ";
            $context["base_url"] = $this->getAttribute(($context["twig_vars"] ?? null), "base_url_relative", array(), "array");
            // line 13
            echo "    ";
            $context["base_url_simple"] = $this->getAttribute(($context["twig_vars"] ?? null), "base_url_simple", array(), "array");
            // line 14
            echo "    ";
            $context["admin_route"] = $this->getAttribute(($context["twig_vars"] ?? null), "admin_route", array(), "array");
            // line 15
            echo "    ";
            $context["admin_lang"] = $this->getAttribute(($context["twig_vars"] ?? null), "admin_lang", array(), "array");
            // line 16
            echo "    ";
            $context["warn"] = $this->getAttribute(($context["twig_vars"] ?? null), "warn", array(), "array");
            // line 17
            echo "
    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "children", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 19
                echo "        ";
                $context["page_route"] = twig_trim_filter($this->getAttribute($context["p"], "rawRoute", array()), "/");
                // line 20
                echo "        ";
                if (($this->getAttribute($context["p"], "language", array()) && ($this->getAttribute($context["p"], "language", array()) != ($context["admin_lang"] ?? null)))) {
                    // line 21
                    echo "            ";
                    $context["page_url"] = ((((((($context["base_url_simple"] ?? null) . "/") . $this->getAttribute($context["p"], "language", array())) . "/") . ($context["admin_route"] ?? null)) . "/pages/") . ($context["page_route"] ?? null));
                    // line 22
                    echo "        ";
                } else {
                    // line 23
                    echo "            ";
                    $context["page_url"] = ((($context["base_url"] ?? null) . "/pages/") . ($context["page_route"] ?? null));
                    // line 24
                    echo "        ";
                }
                // line 25
                echo "
        <li class=\"page-item\" data-nav-id=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "route", array()), "html", null, true);
                echo "\">
            <div class=\"row\">
                <span ";
                // line 28
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", array(0 => 0), "method"), "count", array()) > 0)) ? ("data-toggle=\"children\"") : (""));
                echo " class=\"hint--bottom\">
                <i class=\"page-icon fa fa-fw fa-circle-o ";
                // line 29
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", array(0 => 0), "method"), "count", array()) > 0)) ? ("children-closed") : (""));
                echo " ";
                echo (($this->getAttribute($context["p"], "modular", array())) ? ("modular") : ((( !$this->getAttribute($context["p"], "routable", array())) ? ("not-routable") : ((( !$this->getAttribute($context["p"], "visible", array())) ? ("not-visible") : ((( !$this->getAttribute($context["p"], "page", array())) ? ("folder") : (""))))))));
                echo "\"></i>
                </span>

                <span data-hint=\"";
                // line 32
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", array()), "routes", array()), "default", array())) : ($this->getAttribute($context["p"], "route", array()))), "html", null, true);
                echo "\" class=\"hint--bottom\">
                    <a data-page=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "route", array()), "html", null, true);
                echo "\" class=\"js__page-link page-link\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", array()), "html", null, true);
                echo "</a>
                </span>

                <span class=\"page-home\">";
                // line 36
                echo (($this->getAttribute($context["p"], "home", array())) ? ("<i class=\"fa fa-home\"></i>") : (""));
                echo "</span>
            </div>
            ";
                // line 38
                if (($this->getAttribute($this->getAttribute($context["p"], "children", array(), "method"), "count", array()) > 0)) {
                    // line 39
                    echo "
            <ul class=\"depth-";
                    // line 40
                    echo twig_escape_filter($this->env, (($context["depth"] ?? null) + 1), "html", null, true);
                    echo "\" style=\"display:none;\">
                ";
                    // line 41
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"], 1 => (($context["depth"] ?? null) + 1), 2 => ($context["twig_vars"] ?? null)), "method");
                    echo "
            </ul>
            ";
                }
                // line 44
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/media-list-wrapper__sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 44,  141 => 41,  137 => 40,  134 => 39,  132 => 38,  127 => 36,  119 => 33,  115 => 32,  107 => 29,  103 => 28,  98 => 26,  95 => 25,  92 => 24,  89 => 23,  86 => 22,  83 => 21,  80 => 20,  77 => 19,  73 => 18,  70 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  38 => 10,  28 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"pages-list-container clear block size-1-4\">
    <h5>{{ \"PLUGIN_ADMIN.PAGES\"|tu|e }}</h5>
    <div class=\"mediapicker-scroll\">
        <ul class=\"pages-list depth-0\">
            {{ _self.loop(pages, 0, _context) }}
        </ul>
    </div>
</div>

{% macro loop(page, depth, twig_vars) %}
    {% set separator = twig_vars['config'].system.param_sep %}
    {% set base_url = twig_vars['base_url_relative'] %}
    {% set base_url_simple = twig_vars['base_url_simple'] %}
    {% set admin_route = twig_vars['admin_route'] %}
    {% set admin_lang = twig_vars['admin_lang'] %}
    {% set warn = twig_vars['warn'] %}

    {% for p in page.children() %}
        {% set page_route =  p.rawRoute|trim('/') %}
        {% if p.language and p.language != admin_lang %}
            {% set page_url = base_url_simple ~ '/' ~ p.language ~ '/' ~ admin_route ~ '/pages/' ~ page_route %}
        {% else %}
            {% set page_url = base_url ~ '/pages/' ~ page_route  %}
        {% endif %}

        <li class=\"page-item\" data-nav-id=\"{{ p.route }}\">
            <div class=\"row\">
                <span {{ p.children(0).count > 0 ? 'data-toggle=\"children\"' : ''}} class=\"hint--bottom\">
                <i class=\"page-icon fa fa-fw fa-circle-o {{ p.children(0).count > 0 ? 'children-closed' : ''}} {{ p.modular ? 'modular' : (not p.routable ? 'not-routable' : (not p.visible ? 'not-visible' : (not p.page ? 'folder' :  ''))) }}\"></i>
                </span>

                <span data-hint=\"{{ p.header.routes.default ?: p.route }}\" class=\"hint--bottom\">
                    <a data-page=\"{{ p.route }}\" class=\"js__page-link page-link\" href=\"#\">{{ p.title }}</a>
                </span>

                <span class=\"page-home\">{{ p.home ? '<i class=\"fa fa-home\"></i>' }}</span>
            </div>
            {% if p.children().count > 0 %}

            <ul class=\"depth-{{ depth + 1 }}\" style=\"display:none;\">
                {{ _self.loop(p, depth + 1, twig_vars) }}
            </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}", "partials/media-list-wrapper__sidebar.html.twig", "C:\\xampp\\htdocs\\morley\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\media-list-wrapper__sidebar.html.twig");
    }
}
