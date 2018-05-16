<?php

/* details.html.twig */
class __TwigTemplate_5d18a855b7dac1a5b63867d4dbd28bcc09d3a5210e8d3cf3a71f559d3ec60330 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "details.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
    ";
        // line 5
        echo $this->getAttribute(($context["page"] ?? null), "color", array());
        echo "
    ";
        // line 6
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "custom", array()), "textField", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}
    {{ page.content }}
    {{ page.color }}
    {{ page.header.custom.textField }}
{% endblock %}
", "details.html.twig", "C:\\xampp\\htdocs\\morley\\user\\themes\\quark\\templates\\details.html.twig");
    }
}
