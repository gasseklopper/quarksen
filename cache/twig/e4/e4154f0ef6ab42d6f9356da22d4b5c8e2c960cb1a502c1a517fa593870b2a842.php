<?php

/* modular/text.html.twig */
class __TwigTemplate_2df083645b18db279208a6fedc5eea1285b1ed57a247ec77ab17551fe0ae861d extends Twig_Template
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
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("grid-size");
        // line 2
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        // line 3
        echo "
<section id=\"modular-text\" class=\"section ";
        // line 4
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "class", array());
        echo " bg-gray\">
    <section class=\"container ";
        // line 5
        echo ($context["grid_size"] ?? null);
        echo "\">
        <div class=\"columns\">
            <div class=\"column col-6 col-md-12\">
                ";
        // line 8
        echo ($context["content"] ?? null);
        echo "
            </div>
            <div class=\"column col-6 col-md-12\">
                ";
        // line 11
        if (($context["image"] ?? null)) {
            // line 12
            echo "                    ";
            echo $this->getAttribute(($context["image"] ?? null), "html", array(0 => "", 1 => "", 2 => ("align-" . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image_align", array()))), "method");
            echo "
                ";
        }
        // line 14
        echo "            </div>
        </div>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  44 => 12,  42 => 11,  36 => 8,  30 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set grid_size = theme_var('grid-size') %}
{% set image = page.media.images|first %}

<section id=\"modular-text\" class=\"section {{ page.header.class}} bg-gray\">
    <section class=\"container {{ grid_size }}\">
        <div class=\"columns\">
            <div class=\"column col-6 col-md-12\">
                {{ content }}
            </div>
            <div class=\"column col-6 col-md-12\">
                {% if image %}
                    {{ image.html('','','align-'~page.header.image_align) }}
                {% endif %}
            </div>
        </div>
    </section>
</section>
", "modular/text.html.twig", "C:\\xampp\\htdocs\\morley\\user\\themes\\quark\\templates\\modular\\text.html.twig");
    }
}
