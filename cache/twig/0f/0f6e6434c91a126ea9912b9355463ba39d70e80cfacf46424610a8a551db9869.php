<?php

/* modular/features.html.twig */
class __TwigTemplate_2e33cf7d53cf89bda41f88e702c1d84786bc159ba8f8fd38ba5c30587d37d6b7 extends Twig_Template
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
        $context["columns"] = ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "class", array()) == "small")) ? ("col-3 col-md-4 col-sm-6") : ("col-4 col-md-6 col-sm-12"));
        // line 3
        echo "<section id=\"modular-features\" class=\"section ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "class", array());
        echo "\">
        <section class=\"container ";
        // line 4
        echo ($context["grid_size"] ?? null);
        echo "\">
            <div class=\"frame-box\">

                ";
        // line 7
        echo ($context["content"] ?? null);
        echo "

                <div class=\"columns\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "features", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 11
            echo "                   <div class=\"column ";
            echo ($context["columns"] ?? null);
            echo "\">
                       <div class=\"feature-icon\">
                           <i class=\"fa fa-fw ";
            // line 13
            echo $this->getAttribute($context["feature"], "icon", array());
            echo "\"></i>
                           ";
            // line 14
            if ($this->getAttribute($context["feature"], "header", array())) {
                // line 15
                echo "                               <h6>";
                echo $this->getAttribute($context["feature"], "header", array());
                echo "</h6>
                           ";
            }
            // line 17
            echo "                       </div>
                       <div class=\"feature-content\">
                           ";
            // line 19
            if ($this->getAttribute($context["feature"], "text", array())) {
                // line 20
                echo "                            <p>";
                echo $this->getAttribute($context["feature"], "text", array());
                echo "</p>
                           ";
            }
            // line 22
            echo "                       </div>
                   </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                </div>
            </div>
        </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 25,  74 => 22,  68 => 20,  66 => 19,  62 => 17,  56 => 15,  54 => 14,  50 => 13,  44 => 11,  40 => 10,  34 => 7,  28 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
{% set columns = page.header.class == 'small' ? 'col-3 col-md-4 col-sm-6' : 'col-4 col-md-6 col-sm-12'  %}
<section id=\"modular-features\" class=\"section {{ page.header.class}}\">
        <section class=\"container {{ grid_size }}\">
            <div class=\"frame-box\">

                {{ content }}

                <div class=\"columns\">
                {% for feature in page.header.features %}
                   <div class=\"column {{ columns }}\">
                       <div class=\"feature-icon\">
                           <i class=\"fa fa-fw {{ feature.icon }}\"></i>
                           {% if feature.header %}
                               <h6>{{ feature.header }}</h6>
                           {% endif %}
                       </div>
                       <div class=\"feature-content\">
                           {% if feature.text %}
                            <p>{{ feature.text }}</p>
                           {% endif %}
                       </div>
                   </div>
                {% endfor %}
                </div>
            </div>
        </section>
</section>
", "modular/features.html.twig", "C:\\xampp\\htdocs\\morley\\user\\themes\\quark\\templates\\modular\\features.html.twig");
    }
}
