<?php

/* forms/fields/mediapicker/mediapicker.html.twig */
class __TwigTemplate_25459aa65c87dccce05df1234943fb3c9c9eb8c71f20fc512d9031bf81c025a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/fields/text/text.html.twig", "forms/fields/mediapicker/mediapicker.html.twig", 1);
        $this->blocks = array(
            'global_attributes' => array($this, 'block_global_attributes'),
            'contents' => array($this, 'block_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/fields/text/text.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["originalValue"] = ($context["value"] ?? null);
        // line 4
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", array())) : (($context["value"] ?? null)));
        // line 6
        $context["unique_identifier"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->randomStringFunc();
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 9
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
data-mediapicker-modal-trigger
data-grav-mediapicker-unique-identifier=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["unique_identifier"] ?? null), "html", null, true);
        echo "\"
";
    }

    // line 15
    public function block_contents($context, array $blocks = array())
    {
        // line 16
        $this->displayParentBlock("contents", $context, $blocks);
        echo "
<div class=\"remodal remodal-mediapicker\" data-remodal-mediapicker data-remodal-unique-identifier=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["unique_identifier"] ?? null), "html", null, true);
        echo "\" data-remodal-options=\"hashTracking: false\">
    ";
        // line 18
        $this->loadTemplate("partials/media-list-wrapper.html.twig", "forms/fields/mediapicker/mediapicker.html.twig", 18)->display(array_merge($context, array("is_modal" => true)));
        // line 19
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/mediapicker/mediapicker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 19,  61 => 18,  57 => 17,  53 => 16,  50 => 15,  44 => 11,  39 => 9,  36 => 8,  32 => 1,  30 => 6,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/fields/text/text.html.twig\" %}

{% set originalValue = value %}
{% set value = (value is null ? field.default : value) %}

{% set unique_identifier = random_string() %}

{% block global_attributes %}
{{ parent() }}
data-mediapicker-modal-trigger
data-grav-mediapicker-unique-identifier=\"{{ unique_identifier }}\"
{% endblock %}


{% block contents %}
{{ parent() }}
<div class=\"remodal remodal-mediapicker\" data-remodal-mediapicker data-remodal-unique-identifier=\"{{ unique_identifier }}\" data-remodal-options=\"hashTracking: false\">
    {% include 'partials/media-list-wrapper.html.twig' with { is_modal: true } %}
</div>
{% endblock %}
", "forms/fields/mediapicker/mediapicker.html.twig", "C:\\xampp\\htdocs\\morley\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\mediapicker\\mediapicker.html.twig");
    }
}
