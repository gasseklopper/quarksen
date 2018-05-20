<?php

/* media-list-content.html.twig */
class __TwigTemplate_8237ecc4aaf054f718a436b353e69a3896b5b3a58f2f8c6d3ac96d28240bed92 extends Twig_Template
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
        $context["index"] = $this->getAttribute(($context["uri"] ?? null), "param", array(0 => "index"), "method");
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? null), "files", array(0 => true, 1 => ($context["index"] ?? null)), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 4
            echo "    ";
            $context["the_file"] = $this->getAttribute($context["file"], "file", array());
            // line 5
            echo "
    ";
            // line 6
            if (($this->getAttribute(($context["the_file"] ?? null), "exists", array()) &&  !twig_test_empty($this->getAttribute(($context["the_file"] ?? null), "display", array(), "method")))) {
                // line 7
                echo "    <div class=\"card-item\">
        <div class=\"admin-media-details\">
            <a href=\"";
                // line 9
                if (($context["is_modal"] ?? null)) {
                    echo "#";
                } else {
                    echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
                    echo "/media-manager/";
                    echo twig_escape_filter($this->env, base64_encode($this->getAttribute(($context["the_file"] ?? null), "filepath", array())), "html", null, true);
                }
                echo "\" class=\"js__media-element\" data-file-url=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["file"], "page_route", array()) . "/") . $this->getAttribute($context["file"], "title", array())), "html", null, true);
                echo "\">
                ";
                // line 10
                $context["thumbnail"] = $this->getAttribute(($context["the_file"] ?? null), "display", array(0 => ((($this->getAttribute(($context["the_file"] ?? null), "extension", array()) == "svg")) ? ("source") : ("thumbnail"))), "method");
                // line 11
                echo "                ";
                if (($context["thumbnail"] ?? null)) {
                    // line 12
                    echo "                <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["thumbnail"] ?? null), "cropZoom", array(0 => 250, 1 => 250), "method"), "url", array()), "html", null, true);
                    echo "\" />
                <h4 class=\"admin-media-title\">";
                    // line 13
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "title", array()), "html", null, true);
                    echo "</h4>
                ";
                }
                // line 15
                echo "            </a>
        </div>
    </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "media-list-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 15,  62 => 13,  57 => 12,  54 => 11,  52 => 10,  40 => 9,  36 => 7,  34 => 6,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set index = uri.param('index') %}

{% for file in admin.files(true, index) %}
    {% set the_file = file.file %}

    {% if the_file.exists and the_file.display() is not empty %}
    <div class=\"card-item\">
        <div class=\"admin-media-details\">
            <a href=\"{% if is_modal %}#{% else %}{{ base_url_relative }}/media-manager/{{base64_encode(the_file.filepath)}}{% endif %}\" class=\"js__media-element\" data-file-url=\"{{ file.page_route ~ '/' ~ file.title }}\">
                {% set thumbnail = the_file.display(the_file.extension == 'svg' ? 'source' : 'thumbnail') %}
                {% if thumbnail %}
                <img src=\"{{thumbnail.cropZoom(250, 250).url}}\" />
                <h4 class=\"admin-media-title\">{{ file.title }}</h4>
                {% endif %}
            </a>
        </div>
    </div>
    {% endif %}
{% endfor %}
", "media-list-content.html.twig", "C:\\xampp\\htdocs\\morley\\user\\plugins\\admin\\themes\\grav\\templates\\media-list-content.html.twig");
    }
}
