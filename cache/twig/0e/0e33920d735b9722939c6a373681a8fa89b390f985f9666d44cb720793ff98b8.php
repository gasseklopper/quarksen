<?php

/* forms/fields/colorpicker/colorpicker.html.twig */
class __TwigTemplate_c99aa924e73f9a8cd5ba6a26b13660697178ea73a2cf554314e196bed7abba50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/colorpicker/colorpicker.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
            'input_attributes' => array($this, 'block_input_attributes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["originalValue"] = ((array_key_exists("originalValue", $context)) ? (($context["originalValue"] ?? null)) : (($context["value"] ?? null)));
        // line 3
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", array())) : (($context["value"] ?? null)));
        // line 4
        $context["pattern"] = "^#([a-fA-F0-9]{6})|(rgba\\(\\s*(0|[1-9]\\d?|1\\d\\d?|2[0-4]\\d|25[0-5])\\s*,\\s*(0|[1-9]\\d?|1\\d\\d?|2[0-4]\\d|25[0-5])\\s*,\\s*(0|[1-9]\\d?|1\\d\\d?|2[0-4]\\d|25[0-5])\\s*,\\s*((0.[0-9]+)|(1.00)|1.0|1)\\s*\\))\$";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_input($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"form-list-wrapper ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", array()), "html", null, true);
        echo "\" data-type=\"collection\">
    <div class=\"g-colorpicker\">
        <input
                data-grav-colorpicker=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("update" => ".g-colorpicker-preview-wrap .g-colorpicker-preview")), "html_attr");
        echo "\"
                ";
        // line 12
        echo "                name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "html", null, true);
        echo "\"
                value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ", "), "html", null, true);
        echo "\"
                type=\"text\"
                ";
        // line 16
        echo "                ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 31
        echo "        />
        <div class=\"g-colorpicker-preview-wrap\">
            <div class=\"g-colorpicker-preview\" style=\"background-color: ";
        // line 33
        echo twig_escape_filter($this->env, ($context["value"] ?? null));
        echo "\"></div>
        </div>
    </div>
</div>
";
    }

    // line 16
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 17
        echo "                    ";
        if ($this->getAttribute(($context["field"] ?? null), "classes", array(), "any", true, true)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", array()), "html", null, true);
            echo "\" ";
        }
        // line 18
        echo "                    ";
        if ($this->getAttribute(($context["field"] ?? null), "id", array(), "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", array()));
            echo "\" ";
        }
        // line 19
        echo "                    ";
        if ($this->getAttribute(($context["field"] ?? null), "style", array(), "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", array()));
            echo "\" ";
        }
        // line 20
        echo "                    ";
        if ($this->getAttribute(($context["field"] ?? null), "disabled", array())) {
            echo "disabled=\"disabled\"";
        }
        // line 21
        echo "                    ";
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", array())) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder", array()), "html", null, true);
            echo "\"";
        }
        // line 22
        echo "                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 23
        echo "                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 24
        echo "                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "readonly", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "readonly=\"readonly\"";
        }
        // line 25
        echo "                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autocomplete", array()), array(0 => "on", 1 => "off"))) {
            echo "autocomplete=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "autocomplete", array()), "html", null, true);
            echo "\"";
        }
        // line 26
        echo "                    ";
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 27
        echo "                    pattern=\"";
        echo (($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array(), "any", false, true), "pattern", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array(), "any", false, true), "pattern", array()), ($context["pattern"] ?? null))) : (($context["pattern"] ?? null)));
        echo "\"
                    ";
        // line 28
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "message", array())) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "message", array()))), "html", null, true);
            echo "\"
                    ";
        } elseif ($this->getAttribute(        // line 29
($context["field"] ?? null), "title", array(), "any", true, true)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "title", array()))), "html", null, true);
            echo "\" ";
        }
        // line 30
        echo "                ";
    }

    public function getTemplateName()
    {
        return "forms/fields/colorpicker/colorpicker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 30,  150 => 29,  144 => 28,  139 => 27,  134 => 26,  127 => 25,  122 => 24,  117 => 23,  112 => 22,  105 => 21,  100 => 20,  93 => 19,  86 => 18,  79 => 17,  76 => 16,  67 => 33,  63 => 31,  60 => 16,  55 => 13,  50 => 12,  46 => 10,  39 => 7,  36 => 6,  32 => 1,  30 => 4,  28 => 3,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/field.html.twig\" %}
{% set originalValue = originalValue is defined ? originalValue : value %}
{% set value = (value is null ? field.default : value) %}
{% set pattern = '^#([a-fA-F0-9]{6})|(rgba\\\\(\\\\s*(0|[1-9]\\\\d?|1\\\\d\\\\d?|2[0-4]\\\\d|25[0-5])\\\\s*,\\\\s*(0|[1-9]\\\\d?|1\\\\d\\\\d?|2[0-4]\\\\d|25[0-5])\\\\s*,\\\\s*(0|[1-9]\\\\d?|1\\\\d\\\\d?|2[0-4]\\\\d|25[0-5])\\\\s*,\\\\s*((0.[0-9]+)|(1.00)|1.0|1)\\\\s*\\\\))\$' %}

{% block input %}
<div class=\"form-list-wrapper {{ field.size }}\" data-type=\"collection\">
    <div class=\"g-colorpicker\">
        <input
                data-grav-colorpicker=\"{{ {update: '.g-colorpicker-preview-wrap .g-colorpicker-preview'}|json_encode|e('html_attr') }}\"
                {# required attribute structures #}
                name=\"{{ (scope ~ field.name)|fieldName }}\"
                value=\"{{ value|raw|join(', ') }}\"
                type=\"text\"
                {# input attribute structures #}
                {% block input_attributes %}
                    {% if field.classes is defined %}class=\"{{ field.classes }}\" {% endif %}
                    {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                    {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                    {% if field.disabled %}disabled=\"disabled\"{% endif %}
                    {% if field.placeholder %}placeholder=\"{{ field.placeholder }}\"{% endif %}
                    {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                    {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                    {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
                    {% if field.autocomplete in ['on', 'off'] %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                    {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
                    pattern=\"{{ field.validate.pattern|default(pattern)|raw }}\"
                    {% if field.validate.message %}title=\"{{ field.validate.message|e|t }}\"
                    {% elseif field.title is defined %}title=\"{{ field.title|e|t }}\" {% endif %}
                {% endblock %}
        />
        <div class=\"g-colorpicker-preview-wrap\">
            <div class=\"g-colorpicker-preview\" style=\"background-color: {{ value|e }}\"></div>
        </div>
    </div>
</div>
{% endblock %}

", "forms/fields/colorpicker/colorpicker.html.twig", "C:\\xampp\\htdocs\\morley\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\colorpicker\\colorpicker.html.twig");
    }
}
