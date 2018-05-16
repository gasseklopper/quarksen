<?php

/* forms/fields/spacer/spacer.html.twig */
class __TwigTemplate_e294e89e50cc611e1e32836b46db6efe8b4627353b70db44028f25303068906c extends Twig_Template
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
        echo "<div class=\"form-spacer ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", array()), "html", null, true);
        echo "\">
    ";
        // line 2
        if ($this->getAttribute(($context["field"] ?? null), "title", array())) {
            // line 3
            echo "        <h3>
            ";
            // line 4
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                // line 5
                echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "title", array()));
            } else {
                // line 7
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "title", array()));
            }
            // line 9
            echo "        </h3>
    ";
        }
        // line 11
        echo "
    ";
        // line 12
        if ($this->getAttribute(($context["field"] ?? null), "markdown", array())) {
            // line 13
            echo "        <p>
            ";
            // line 14
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                // line 15
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "text", array())));
            } else {
                // line 17
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "text", array())));
            }
            // line 19
            echo "        </p>
    ";
        } else {
            // line 21
            echo "        <p>
            ";
            // line 22
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                // line 23
                echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "text", array()));
            } else {
                // line 25
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "text", array()));
            }
            // line 27
            echo "        </p>
    ";
        }
        // line 29
        echo "
    ";
        // line 30
        if ($this->getAttribute(($context["field"] ?? null), "underline", array())) {
            // line 31
            echo "    <hr />
    ";
        }
        // line 33
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/spacer/spacer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 33,  81 => 31,  79 => 30,  76 => 29,  72 => 27,  69 => 25,  66 => 23,  64 => 22,  61 => 21,  57 => 19,  54 => 17,  51 => 15,  49 => 14,  46 => 13,  44 => 12,  41 => 11,  37 => 9,  34 => 7,  31 => 5,  29 => 4,  26 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"form-spacer {{ field.classes }}\">
    {% if field.title %}
        <h3>
            {% if grav.twig.twig.filters['tu'] is defined %}
                {{- field.title|tu|raw -}}
            {% else %}
                {{- field.title|t|raw -}}
            {% endif %}
        </h3>
    {% endif %}

    {% if field.markdown %}
        <p>
            {% if grav.twig.twig.filters['tu'] is defined %}
                {{- field.text|tu|markdown|raw -}}
            {% else %}
                {{- field.text|t|markdown|raw -}}
            {% endif %}
        </p>
    {% else %}
        <p>
            {% if grav.twig.twig.filters['tu'] is defined %}
                {{- field.text|tu|raw -}}
            {% else %}
                {{- field.text|t|raw -}}
            {% endif %}
        </p>
    {% endif %}

    {% if field.underline %}
    <hr />
    {% endif %}
</div>
", "forms/fields/spacer/spacer.html.twig", "C:\\xampp\\htdocs\\morley\\user\\plugins\\form\\templates\\forms\\fields\\spacer\\spacer.html.twig");
    }
}
