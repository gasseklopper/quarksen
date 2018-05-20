<?php

/* modular/text2.html.twig */
class __TwigTemplate_0a4069e0c4b1fad240a7939c236db08b751e14177a827258179470918ce1399f extends Twig_Template
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
        <div class=\"columns text-center\">
            <div class=\"column col-12 col-md-12\">
                ";
        // line 8
        echo ($context["content"] ?? null);
        echo "
            </div>
            <div class=\"column sameHeight col-4 col-md-12\">

                <div class=\"teaserbox\">
                  <div class=\"teaserbox-item\">
                    <div class=\"teaserbox-content\">
                      <h3>";
        // line 15
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "custom", array()), "headline1", array());
        echo " </h3>
                      <div class=\"teaserbox-image\">
                        ";
        // line 17
        $context["image_parts"] = pathinfo($this->getAttribute($this->getAttribute(($context["header"] ?? null), "custom", array()), "Teaserbox1", array()));
        // line 18
        echo "                        ";
        $context["image_basename"] = $this->getAttribute(($context["image_parts"] ?? null), "basename", array());
        // line 19
        echo "                        ";
        $context["image_page"] = ((($this->getAttribute(($context["image_parts"] ?? null), "dirname", array()) == ".")) ? (($context["page"] ?? null)) : ($this->getAttribute(($context["page"] ?? null), "find", array(0 => $this->getAttribute(($context["image_parts"] ?? null), "dirname", array())), "method")));
        // line 20
        echo "                        ";
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["image_page"] ?? null), "media", array()), ($context["image_basename"] ?? null), array(), "array"), "html", array(), "method");
        echo "
                      </div>
                      <p>";
        // line 22
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "custom", array()), "textField1", array());
        echo " </p>
                      <h5>";
        // line 23
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "custom", array()), "author1", array());
        echo " </h5>
                      <button class=\"btn btn-primary\">primary button</button>
                    </div>
                  </div>
                </div>
            </div>
            <div class=\"column sameHeight col-4 col-md-12 \">
              <div class=\"teaserbox\">
                <div class=\"teaserbox-item\">
                  <div class=\"teaserbox-content\">
                    <h3>";
        // line 33
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "custom", array()), "headline2", array());
        echo " </h3>
                    <div class=\"teaserbox-image\">
                      ";
        // line 35
        $context["image_parts"] = pathinfo($this->getAttribute($this->getAttribute(($context["header"] ?? null), "custom", array()), "Teaserbox2", array()));
        // line 36
        echo "                      ";
        $context["image_basename"] = $this->getAttribute(($context["image_parts"] ?? null), "basename", array());
        // line 37
        echo "                      ";
        $context["image_page"] = ((($this->getAttribute(($context["image_parts"] ?? null), "dirname", array()) == ".")) ? (($context["page"] ?? null)) : ($this->getAttribute(($context["page"] ?? null), "find", array(0 => $this->getAttribute(($context["image_parts"] ?? null), "dirname", array())), "method")));
        // line 38
        echo "                      ";
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["image_page"] ?? null), "media", array()), ($context["image_basename"] ?? null), array(), "array"), "html", array(), "method");
        echo "
                    </div>
                    <p class=\"text-left\">";
        // line 40
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "custom", array()), "textField2", array());
        echo " </p>
                    <h5>";
        // line 41
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "custom", array()), "author2", array());
        echo " </h5>
                    <button class=\"btn btn-sec\">primary button</button>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"column sameHeight col-4 col-md-12\">
              <div class=\"teaserbox\">
                <div class=\"teaserbox-item\">
                  <div class=\"teaserbox-content\">
                    <h3>";
        // line 51
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "custom", array()), "headline3", array());
        echo " </h3>
                    <div class=\"teaserbox-image\">
                    </div>
                    <p>";
        // line 54
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "custom", array()), "textField3", array());
        echo " </p>
                    <h5>";
        // line 55
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "custom", array()), "author3", array());
        echo " </h5>
                    <button class=\"btn btn\">primary button</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class=\"columns\">
          <div class=\"column sameHeight col-6 col-md-12\">
            <div class=\"teaserbox\">
              <div class=\"teaserbox-item\">
                <div class=\"teaserbox-content\">
                  <h3>";
        // line 67
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "custom", array()), "headline1", array());
        echo " </h3>
                  <div class=\"teaserbox-image\">
                    ";
        // line 69
        $context["image_parts"] = pathinfo($this->getAttribute($this->getAttribute(($context["header"] ?? null), "custom", array()), "Teaserbox1", array()));
        // line 70
        echo "                    ";
        $context["image_basename"] = $this->getAttribute(($context["image_parts"] ?? null), "basename", array());
        // line 71
        echo "                    ";
        $context["image_page"] = ((($this->getAttribute(($context["image_parts"] ?? null), "dirname", array()) == ".")) ? (($context["page"] ?? null)) : ($this->getAttribute(($context["page"] ?? null), "find", array(0 => $this->getAttribute(($context["image_parts"] ?? null), "dirname", array())), "method")));
        // line 72
        echo "                    ";
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["image_page"] ?? null), "media", array()), ($context["image_basename"] ?? null), array(), "array"), "html", array(), "method");
        echo "
                  </div>
                  <p>";
        // line 74
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "custom", array()), "textField1", array());
        echo " </p>
                  <h5>";
        // line 75
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "custom", array()), "author1", array());
        echo " </h5>
                  <button class=\"btn btn\">primary button</button>
                </div>
              </div>
            </div>
          </div>
          <div class=\"column sameHeight col-6 col-md-12\">
            <div class=\"teaserbox\">
              <div class=\"teaserbox-item\">
                <div class=\"teaserbox-content\">
                  <figure class=\"avatar avatar-lg\">
                    <img src=\"img/avatar-2.png\" alt=\"Avatar\">
                  </figure>
                  <div class=\"teaserbox-title h5 mt-10\">Bruce Banner</div>
                  <div class=\"teaserbox-subtitle\">THE HULK</div>
                  <nav class=\"teaserbox-nav\">
                    <ul class=\"tab tab-block\">
                      <div class=\"tab-item\"  >
                        <a href=\"#panels\" onclick=\"openCity(event, 'London')\" class=\"tab-item\" >
                          Profile
                        </a>
                      </div>
                      <li class=\"tab-item \" onclick=\"openCity(event, 'Paris')\"  id=\"defaultOpen\" >
                        <a href=\"#panels\">
                          Files
                        </a>
                      </li>
                      <li class=\"tab-item \" onclick=\"openCity(event, 'Tokyo')\">
                        <a href=\"#panels\">
                          Tasks
                        </a>
                      </li>
                    </ul>
                  </nav>
                  <h3>";
        // line 109
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "custom", array()), "headline3", array());
        echo " </h3>
                          <!-- Tab links -->

                  <!-- Tab content -->
                  <div id=\"London\" class=\"tabcontent\">
                    <h3>London</h3>
                    <p>London is the capital city of England.</p>
                  </div>

                  <div id=\"Paris\" class=\"tabcontent\">
                    <h3>Paris</h3>
                    <p>Paris is the capital of France.</p>
                  </div>

                  <div id=\"Tokyo\" class=\"tabcontent\">
                    <h3>Tokyo</h3>
                    <p>Tokyo is the capital of Japan.</p>
                  </div>
                  <div class=\"teaserbox-image\">
                  </div>
                  <p>";
        // line 129
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "custom", array()), "textField3", array());
        echo " </p>
                  <h5>";
        // line 130
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "custom", array()), "author3", array());
        echo " </h5>
                  <button class=\"btn btn\">primary button</button>
                </div>
              </div>
            </div>
          </div>
                  <div class=\"column sameHeight col-6 col-xs-12\">
                    <div class=\"panel\">
                      <div class=\"panel-header text-center\">
                        <figure class=\"avatar avatar-lg\">
                          <img src=\"img/avatar-2.png\" alt=\"Avatar\">
                        </figure>
                        <div class=\"panel-title h5 mt-10\">Bruce Banner</div>
                        <div class=\"panel-subtitle\">THE HULK</div>
                      </div>
                      <nav class=\"panel-nav\">
                        <ul class=\"tab tab-block\">
                          <li class=\"tab-item active\">
                            <a href=\"#panels\">
                              Profile
                            </a>
                          </li>
                          <li class=\"tab-item\">
                            <a href=\"#panels\">
                              Files
                            </a>
                          </li>
                          <li class=\"tab-item\">
                            <a href=\"#panels\">
                              Tasks
                            </a>
                          </li>
                        </ul>
                      </nav>
                      <div class=\"panel-body\">
                        <div class=\"tile tile-centered\">
                          <div class=\"tile-content\">
                            <div class=\"tile-title\">E-mail</div>
                            <div class=\"tile-subtitle\">bruce.banner@hulk.com</div>
                          </div>
                          <div class=\"tile-action\">
                            <button class=\"btn btn-link btn-action btn-lg\"><i class=\"icon icon-edit\"></i></button>
                          </div>
                        </div>
                        <div class=\"tile tile-centered\">
                          <div class=\"tile-content\">
                            <div class=\"tile-title\">Skype</div>
                            <div class=\"tile-subtitle\">bruce.banner</div>
                          </div>
                          <div class=\"tile-action\">
                            <button class=\"btn btn-link btn-action btn-lg\"><i class=\"icon icon-edit\"></i></button>
                          </div>
                        </div>
                        <div class=\"tile tile-centered\">
                          <div class=\"tile-content\">
                            <div class=\"tile-title\">Location</div>
                            <div class=\"tile-subtitle\">Dayton, Ohio</div>
                          </div>
                          <div class=\"tile-action\">
                            <button class=\"btn btn-link btn-action btn-lg\"><i class=\"icon icon-edit\"></i></button>
                          </div>
                        </div>
                      </div>
                      <div class=\"panel-footer\">
                        <button class=\"btn btn-primary btn-block\">Save</button>
                      </div>
                    </div>
                  </div>
                  <div class=\"column sameHeight col-6 col-xs-12\">
                    <div class=\"panel\">
                      <div class=\"panel-header\">
                        <div class=\"panel-title h6\">Comments</div>
                      </div>
                      <div class=\"panel-body\">
                        <div class=\"tile\">
                          <div class=\"tile-icon\">
                            <figure class=\"avatar\">
                              <img src=\"img/avatar-1.png\" alt=\"Avatar\">
                            </figure>
                          </div>
                          <div class=\"tile-content\">
                            <p class=\"tile-title\">Thor Odinson</p>
                            <p class=\"tile-subtitle\">Earth's Mightiest Heroes joined forces to take on threats that were too big for any one hero to tackle...</p>
                          </div>
                        </div>
                        <div class=\"tile\">
                          <div class=\"tile-icon\">
                            <figure class=\"avatar\">
                              <img src=\"img/avatar-2.png\" alt=\"Avatar\">
                            </figure>
                          </div>
                          <div class=\"tile-content\">
                            <p class=\"tile-title\">Bruce Banner</p>
                            <p class=\"tile-subtitle\">The Strategic Homeland Intervention, Enforcement, and Logistics Division...</p>
                          </div>
                        </div>
                        <div class=\"tile\">
                          <div class=\"tile-icon\">
                            <figure class=\"avatar\" data-initial=\"TS\"></figure>
                          </div>
                          <div class=\"tile-content\">
                            <p class=\"tile-title\">Tony Stark</p>
                            <p class=\"tile-subtitle\">Earth's Mightiest Heroes joined forces to take on threats that were too big for any one hero to tackle...</p>
                          </div>
                        </div>
                        <div class=\"tile\">
                          <div class=\"tile-icon\">
                            <figure class=\"avatar\">
                              <img src=\"img/avatar-4.png\" alt=\"Avatar\">
                            </figure>
                          </div>
                          <div class=\"tile-content\">
                            <p class=\"tile-title\">Steve Rogers</p>
                            <p class=\"tile-subtitle\">The Strategic Homeland Intervention, Enforcement, and Logistics Division...</p>
                          </div>
                        </div>
                        <div class=\"tile\">
                          <div class=\"tile-icon\">
                            <figure class=\"avatar\">
                              <img src=\"img/avatar-3.png\" alt=\"Avatar\">
                            </figure>
                          </div>
                          <div class=\"tile-content\">
                            <p class=\"tile-title\">Natasha Romanoff</p>
                            <p class=\"tile-subtitle\">Earth's Mightiest Heroes joined forces to take on threats that were too big for any one hero to tackle...</p>
                          </div>
                        </div>
                      </div>
                      <div class=\"panel-footer\">
                        <div class=\"input-group\">
                          <input type=\"text\" class=\"form-input\" placeholder=\"Hello\">
                          <button class=\"btn btn-primary input-group-btn\">Send</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
    </section>
</section>

<div class=\"columns sameHeight\">
          <div class=\"column sameHeight col-6 col-xs-12\">
            <div class=\"panel\">
              <div class=\"panel-header text-center\">
                <figure class=\"avatar avatar-lg\">
                  <img src=\"img/avatar-2.png\" alt=\"Avatar\">
                </figure>
                <div class=\"panel-title h5 mt-10\">Bruce Banner</div>
                <div class=\"panel-subtitle\">THE HULK</div>
              </div>
              <nav class=\"panel-nav\">
                <ul class=\"tab tab-block\">
                  <li class=\"tab-item active\">
                    <a href=\"#panels\">
                      Profile
                    </a>
                  </li>
                  <li class=\"tab-item\">
                    <a href=\"#panels\">
                      Files
                    </a>
                  </li>
                  <li class=\"tab-item\">
                    <a href=\"#panels\">
                      Tasks
                    </a>
                  </li>
                </ul>
              </nav>
              <div class=\"panel-body\">
                <div class=\"tile tile-centered\">
                  <div class=\"tile-content\">
                    <div class=\"tile-title\">E-mail</div>
                    <div class=\"tile-subtitle\">bruce.banner@hulk.com</div>
                  </div>
                  <div class=\"tile-action\">
                    <button class=\"btn btn-link btn-action btn-lg\"><i class=\"icon icon-edit\"></i></button>
                  </div>
                </div>
                <div class=\"tile tile-centered\">
                  <div class=\"tile-content\">
                    <div class=\"tile-title\">Skype</div>
                    <div class=\"tile-subtitle\">bruce.banner</div>
                  </div>
                  <div class=\"tile-action\">
                    <button class=\"btn btn-link btn-action btn-lg\"><i class=\"icon icon-edit\"></i></button>
                  </div>
                </div>
                <div class=\"tile tile-centered\">
                  <div class=\"tile-content\">
                    <div class=\"tile-title\">Location</div>
                    <div class=\"tile-subtitle\">Dayton, Ohio</div>
                  </div>
                  <div class=\"tile-action\">
                    <button class=\"btn btn-link btn-action btn-lg\"><i class=\"icon icon-edit\"></i></button>
                  </div>
                </div>
              </div>
              <div class=\"panel-footer\">
                <button class=\"btn btn-primary btn-block\">Save</button>
              </div>
            </div>
          </div>
          <div class=\"column sameHeight col-6 col-xs-12\">
            <div class=\"panel\">
              <div class=\"panel-header\">
                <div class=\"panel-title h6\">Comments</div>
              </div>
              <div class=\"panel-body\">
                <div class=\"tile\">
                  <div class=\"tile-icon\">
                    <figure class=\"avatar\">
                      <img src=\"img/avatar-1.png\" alt=\"Avatar\">
                    </figure>
                  </div>
                  <div class=\"tile-content\">
                    <p class=\"tile-title\">Thor Odinson</p>
                    <p class=\"tile-subtitle\">Earth's Mightiest Heroes joined forces to take on threats that were too big for any one hero to tackle...</p>
                  </div>
                </div>
                <div class=\"tile\">
                  <div class=\"tile-icon\">
                    <figure class=\"avatar\">
                      <img src=\"img/avatar-2.png\" alt=\"Avatar\">
                    </figure>
                  </div>
                  <div class=\"tile-content\">
                    <p class=\"tile-title\">Bruce Banner</p>
                    <p class=\"tile-subtitle\">The Strategic Homeland Intervention, Enforcement, and Logistics Division...</p>
                  </div>
                </div>
                <div class=\"tile\">
                  <div class=\"tile-icon\">
                    <figure class=\"avatar\" data-initial=\"TS\"></figure>
                  </div>
                  <div class=\"tile-content\">
                    <p class=\"tile-title\">Tony Stark</p>
                    <p class=\"tile-subtitle\">Earth's Mightiest Heroes joined forces to take on threats that were too big for any one hero to tackle...</p>
                  </div>
                </div>
                <div class=\"tile\">
                  <div class=\"tile-icon\">
                    <figure class=\"avatar\">
                      <img src=\"img/avatar-4.png\" alt=\"Avatar\">
                    </figure>
                  </div>
                  <div class=\"tile-content\">
                    <p class=\"tile-title\">Steve Rogers</p>
                    <p class=\"tile-subtitle\">The Strategic Homeland Intervention, Enforcement, and Logistics Division...</p>
                  </div>
                </div>
                <div class=\"tile\">
                  <div class=\"tile-icon\">
                    <figure class=\"avatar\">
                      <img src=\"img/avatar-3.png\" alt=\"Avatar\">
                    </figure>
                  </div>
                  <div class=\"tile-content\">
                    <p class=\"tile-title\">Natasha Romanoff</p>
                    <p class=\"tile-subtitle\">Earth's Mightiest Heroes joined forces to take on threats that were too big for any one hero to tackle...</p>
                  </div>
                </div>
              </div>
              <div class=\"panel-footer\">
                <div class=\"input-group\">
                  <input type=\"text\" class=\"form-input\" placeholder=\"Hello\">
                  <button class=\"btn btn-primary input-group-btn\">Send</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <span class=\"js-btn btn\">Click me</span>
<div class='js-fade is-hidden'>You look amazing!</div>
";
    }

    public function getTemplateName()
    {
        return "modular/text2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 130,  226 => 129,  203 => 109,  166 => 75,  162 => 74,  156 => 72,  153 => 71,  150 => 70,  148 => 69,  143 => 67,  128 => 55,  124 => 54,  118 => 51,  105 => 41,  101 => 40,  95 => 38,  92 => 37,  89 => 36,  87 => 35,  82 => 33,  69 => 23,  65 => 22,  59 => 20,  56 => 19,  53 => 18,  51 => 17,  46 => 15,  36 => 8,  30 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
        <div class=\"columns text-center\">
            <div class=\"column col-12 col-md-12\">
                {{ content }}
            </div>
            <div class=\"column sameHeight col-4 col-md-12\">

                <div class=\"teaserbox\">
                  <div class=\"teaserbox-item\">
                    <div class=\"teaserbox-content\">
                      <h3>{{ page.header.custom.headline1 }} </h3>
                      <div class=\"teaserbox-image\">
                        {% set image_parts = pathinfo(header.custom.Teaserbox1) %}
                        {% set image_basename = image_parts.basename %}
                        {% set image_page = image_parts.dirname == '.' ? page : page.find(image_parts.dirname) %}
                        {{ image_page.media[image_basename].html() }}
                      </div>
                      <p>{{ page.header.custom.textField1 }} </p>
                      <h5>{{ page.header.custom.author1 }} </h5>
                      <button class=\"btn btn-primary\">primary button</button>
                    </div>
                  </div>
                </div>
            </div>
            <div class=\"column sameHeight col-4 col-md-12 \">
              <div class=\"teaserbox\">
                <div class=\"teaserbox-item\">
                  <div class=\"teaserbox-content\">
                    <h3>{{ page.header.custom.headline2 }} </h3>
                    <div class=\"teaserbox-image\">
                      {% set image_parts = pathinfo(header.custom.Teaserbox2) %}
                      {% set image_basename = image_parts.basename %}
                      {% set image_page = image_parts.dirname == '.' ? page : page.find(image_parts.dirname) %}
                      {{ image_page.media[image_basename].html() }}
                    </div>
                    <p class=\"text-left\">{{ page.header.custom.textField2 }} </p>
                    <h5>{{ page.header.custom.author2 }} </h5>
                    <button class=\"btn btn-sec\">primary button</button>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"column sameHeight col-4 col-md-12\">
              <div class=\"teaserbox\">
                <div class=\"teaserbox-item\">
                  <div class=\"teaserbox-content\">
                    <h3>{{ page.header.custom.headline3 }} </h3>
                    <div class=\"teaserbox-image\">
                    </div>
                    <p>{{ page.header.custom.textField3 }} </p>
                    <h5>{{ page.header.custom.author3 }} </h5>
                    <button class=\"btn btn\">primary button</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class=\"columns\">
          <div class=\"column sameHeight col-6 col-md-12\">
            <div class=\"teaserbox\">
              <div class=\"teaserbox-item\">
                <div class=\"teaserbox-content\">
                  <h3>{{ page.header.custom.headline1 }} </h3>
                  <div class=\"teaserbox-image\">
                    {% set image_parts = pathinfo(header.custom.Teaserbox1) %}
                    {% set image_basename = image_parts.basename %}
                    {% set image_page = image_parts.dirname == '.' ? page : page.find(image_parts.dirname) %}
                    {{ image_page.media[image_basename].html() }}
                  </div>
                  <p>{{ page.header.custom.textField1 }} </p>
                  <h5>{{ page.header.custom.author1 }} </h5>
                  <button class=\"btn btn\">primary button</button>
                </div>
              </div>
            </div>
          </div>
          <div class=\"column sameHeight col-6 col-md-12\">
            <div class=\"teaserbox\">
              <div class=\"teaserbox-item\">
                <div class=\"teaserbox-content\">
                  <figure class=\"avatar avatar-lg\">
                    <img src=\"img/avatar-2.png\" alt=\"Avatar\">
                  </figure>
                  <div class=\"teaserbox-title h5 mt-10\">Bruce Banner</div>
                  <div class=\"teaserbox-subtitle\">THE HULK</div>
                  <nav class=\"teaserbox-nav\">
                    <ul class=\"tab tab-block\">
                      <div class=\"tab-item\"  >
                        <a href=\"#panels\" onclick=\"openCity(event, 'London')\" class=\"tab-item\" >
                          Profile
                        </a>
                      </div>
                      <li class=\"tab-item \" onclick=\"openCity(event, 'Paris')\"  id=\"defaultOpen\" >
                        <a href=\"#panels\">
                          Files
                        </a>
                      </li>
                      <li class=\"tab-item \" onclick=\"openCity(event, 'Tokyo')\">
                        <a href=\"#panels\">
                          Tasks
                        </a>
                      </li>
                    </ul>
                  </nav>
                  <h3>{{ page.header.custom.headline3 }} </h3>
                          <!-- Tab links -->

                  <!-- Tab content -->
                  <div id=\"London\" class=\"tabcontent\">
                    <h3>London</h3>
                    <p>London is the capital city of England.</p>
                  </div>

                  <div id=\"Paris\" class=\"tabcontent\">
                    <h3>Paris</h3>
                    <p>Paris is the capital of France.</p>
                  </div>

                  <div id=\"Tokyo\" class=\"tabcontent\">
                    <h3>Tokyo</h3>
                    <p>Tokyo is the capital of Japan.</p>
                  </div>
                  <div class=\"teaserbox-image\">
                  </div>
                  <p>{{ page.header.custom.textField3 }} </p>
                  <h5>{{ page.header.custom.author3 }} </h5>
                  <button class=\"btn btn\">primary button</button>
                </div>
              </div>
            </div>
          </div>
                  <div class=\"column sameHeight col-6 col-xs-12\">
                    <div class=\"panel\">
                      <div class=\"panel-header text-center\">
                        <figure class=\"avatar avatar-lg\">
                          <img src=\"img/avatar-2.png\" alt=\"Avatar\">
                        </figure>
                        <div class=\"panel-title h5 mt-10\">Bruce Banner</div>
                        <div class=\"panel-subtitle\">THE HULK</div>
                      </div>
                      <nav class=\"panel-nav\">
                        <ul class=\"tab tab-block\">
                          <li class=\"tab-item active\">
                            <a href=\"#panels\">
                              Profile
                            </a>
                          </li>
                          <li class=\"tab-item\">
                            <a href=\"#panels\">
                              Files
                            </a>
                          </li>
                          <li class=\"tab-item\">
                            <a href=\"#panels\">
                              Tasks
                            </a>
                          </li>
                        </ul>
                      </nav>
                      <div class=\"panel-body\">
                        <div class=\"tile tile-centered\">
                          <div class=\"tile-content\">
                            <div class=\"tile-title\">E-mail</div>
                            <div class=\"tile-subtitle\">bruce.banner@hulk.com</div>
                          </div>
                          <div class=\"tile-action\">
                            <button class=\"btn btn-link btn-action btn-lg\"><i class=\"icon icon-edit\"></i></button>
                          </div>
                        </div>
                        <div class=\"tile tile-centered\">
                          <div class=\"tile-content\">
                            <div class=\"tile-title\">Skype</div>
                            <div class=\"tile-subtitle\">bruce.banner</div>
                          </div>
                          <div class=\"tile-action\">
                            <button class=\"btn btn-link btn-action btn-lg\"><i class=\"icon icon-edit\"></i></button>
                          </div>
                        </div>
                        <div class=\"tile tile-centered\">
                          <div class=\"tile-content\">
                            <div class=\"tile-title\">Location</div>
                            <div class=\"tile-subtitle\">Dayton, Ohio</div>
                          </div>
                          <div class=\"tile-action\">
                            <button class=\"btn btn-link btn-action btn-lg\"><i class=\"icon icon-edit\"></i></button>
                          </div>
                        </div>
                      </div>
                      <div class=\"panel-footer\">
                        <button class=\"btn btn-primary btn-block\">Save</button>
                      </div>
                    </div>
                  </div>
                  <div class=\"column sameHeight col-6 col-xs-12\">
                    <div class=\"panel\">
                      <div class=\"panel-header\">
                        <div class=\"panel-title h6\">Comments</div>
                      </div>
                      <div class=\"panel-body\">
                        <div class=\"tile\">
                          <div class=\"tile-icon\">
                            <figure class=\"avatar\">
                              <img src=\"img/avatar-1.png\" alt=\"Avatar\">
                            </figure>
                          </div>
                          <div class=\"tile-content\">
                            <p class=\"tile-title\">Thor Odinson</p>
                            <p class=\"tile-subtitle\">Earth's Mightiest Heroes joined forces to take on threats that were too big for any one hero to tackle...</p>
                          </div>
                        </div>
                        <div class=\"tile\">
                          <div class=\"tile-icon\">
                            <figure class=\"avatar\">
                              <img src=\"img/avatar-2.png\" alt=\"Avatar\">
                            </figure>
                          </div>
                          <div class=\"tile-content\">
                            <p class=\"tile-title\">Bruce Banner</p>
                            <p class=\"tile-subtitle\">The Strategic Homeland Intervention, Enforcement, and Logistics Division...</p>
                          </div>
                        </div>
                        <div class=\"tile\">
                          <div class=\"tile-icon\">
                            <figure class=\"avatar\" data-initial=\"TS\"></figure>
                          </div>
                          <div class=\"tile-content\">
                            <p class=\"tile-title\">Tony Stark</p>
                            <p class=\"tile-subtitle\">Earth's Mightiest Heroes joined forces to take on threats that were too big for any one hero to tackle...</p>
                          </div>
                        </div>
                        <div class=\"tile\">
                          <div class=\"tile-icon\">
                            <figure class=\"avatar\">
                              <img src=\"img/avatar-4.png\" alt=\"Avatar\">
                            </figure>
                          </div>
                          <div class=\"tile-content\">
                            <p class=\"tile-title\">Steve Rogers</p>
                            <p class=\"tile-subtitle\">The Strategic Homeland Intervention, Enforcement, and Logistics Division...</p>
                          </div>
                        </div>
                        <div class=\"tile\">
                          <div class=\"tile-icon\">
                            <figure class=\"avatar\">
                              <img src=\"img/avatar-3.png\" alt=\"Avatar\">
                            </figure>
                          </div>
                          <div class=\"tile-content\">
                            <p class=\"tile-title\">Natasha Romanoff</p>
                            <p class=\"tile-subtitle\">Earth's Mightiest Heroes joined forces to take on threats that were too big for any one hero to tackle...</p>
                          </div>
                        </div>
                      </div>
                      <div class=\"panel-footer\">
                        <div class=\"input-group\">
                          <input type=\"text\" class=\"form-input\" placeholder=\"Hello\">
                          <button class=\"btn btn-primary input-group-btn\">Send</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
    </section>
</section>

<div class=\"columns sameHeight\">
          <div class=\"column sameHeight col-6 col-xs-12\">
            <div class=\"panel\">
              <div class=\"panel-header text-center\">
                <figure class=\"avatar avatar-lg\">
                  <img src=\"img/avatar-2.png\" alt=\"Avatar\">
                </figure>
                <div class=\"panel-title h5 mt-10\">Bruce Banner</div>
                <div class=\"panel-subtitle\">THE HULK</div>
              </div>
              <nav class=\"panel-nav\">
                <ul class=\"tab tab-block\">
                  <li class=\"tab-item active\">
                    <a href=\"#panels\">
                      Profile
                    </a>
                  </li>
                  <li class=\"tab-item\">
                    <a href=\"#panels\">
                      Files
                    </a>
                  </li>
                  <li class=\"tab-item\">
                    <a href=\"#panels\">
                      Tasks
                    </a>
                  </li>
                </ul>
              </nav>
              <div class=\"panel-body\">
                <div class=\"tile tile-centered\">
                  <div class=\"tile-content\">
                    <div class=\"tile-title\">E-mail</div>
                    <div class=\"tile-subtitle\">bruce.banner@hulk.com</div>
                  </div>
                  <div class=\"tile-action\">
                    <button class=\"btn btn-link btn-action btn-lg\"><i class=\"icon icon-edit\"></i></button>
                  </div>
                </div>
                <div class=\"tile tile-centered\">
                  <div class=\"tile-content\">
                    <div class=\"tile-title\">Skype</div>
                    <div class=\"tile-subtitle\">bruce.banner</div>
                  </div>
                  <div class=\"tile-action\">
                    <button class=\"btn btn-link btn-action btn-lg\"><i class=\"icon icon-edit\"></i></button>
                  </div>
                </div>
                <div class=\"tile tile-centered\">
                  <div class=\"tile-content\">
                    <div class=\"tile-title\">Location</div>
                    <div class=\"tile-subtitle\">Dayton, Ohio</div>
                  </div>
                  <div class=\"tile-action\">
                    <button class=\"btn btn-link btn-action btn-lg\"><i class=\"icon icon-edit\"></i></button>
                  </div>
                </div>
              </div>
              <div class=\"panel-footer\">
                <button class=\"btn btn-primary btn-block\">Save</button>
              </div>
            </div>
          </div>
          <div class=\"column sameHeight col-6 col-xs-12\">
            <div class=\"panel\">
              <div class=\"panel-header\">
                <div class=\"panel-title h6\">Comments</div>
              </div>
              <div class=\"panel-body\">
                <div class=\"tile\">
                  <div class=\"tile-icon\">
                    <figure class=\"avatar\">
                      <img src=\"img/avatar-1.png\" alt=\"Avatar\">
                    </figure>
                  </div>
                  <div class=\"tile-content\">
                    <p class=\"tile-title\">Thor Odinson</p>
                    <p class=\"tile-subtitle\">Earth's Mightiest Heroes joined forces to take on threats that were too big for any one hero to tackle...</p>
                  </div>
                </div>
                <div class=\"tile\">
                  <div class=\"tile-icon\">
                    <figure class=\"avatar\">
                      <img src=\"img/avatar-2.png\" alt=\"Avatar\">
                    </figure>
                  </div>
                  <div class=\"tile-content\">
                    <p class=\"tile-title\">Bruce Banner</p>
                    <p class=\"tile-subtitle\">The Strategic Homeland Intervention, Enforcement, and Logistics Division...</p>
                  </div>
                </div>
                <div class=\"tile\">
                  <div class=\"tile-icon\">
                    <figure class=\"avatar\" data-initial=\"TS\"></figure>
                  </div>
                  <div class=\"tile-content\">
                    <p class=\"tile-title\">Tony Stark</p>
                    <p class=\"tile-subtitle\">Earth's Mightiest Heroes joined forces to take on threats that were too big for any one hero to tackle...</p>
                  </div>
                </div>
                <div class=\"tile\">
                  <div class=\"tile-icon\">
                    <figure class=\"avatar\">
                      <img src=\"img/avatar-4.png\" alt=\"Avatar\">
                    </figure>
                  </div>
                  <div class=\"tile-content\">
                    <p class=\"tile-title\">Steve Rogers</p>
                    <p class=\"tile-subtitle\">The Strategic Homeland Intervention, Enforcement, and Logistics Division...</p>
                  </div>
                </div>
                <div class=\"tile\">
                  <div class=\"tile-icon\">
                    <figure class=\"avatar\">
                      <img src=\"img/avatar-3.png\" alt=\"Avatar\">
                    </figure>
                  </div>
                  <div class=\"tile-content\">
                    <p class=\"tile-title\">Natasha Romanoff</p>
                    <p class=\"tile-subtitle\">Earth's Mightiest Heroes joined forces to take on threats that were too big for any one hero to tackle...</p>
                  </div>
                </div>
              </div>
              <div class=\"panel-footer\">
                <div class=\"input-group\">
                  <input type=\"text\" class=\"form-input\" placeholder=\"Hello\">
                  <button class=\"btn btn-primary input-group-btn\">Send</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <span class=\"js-btn btn\">Click me</span>
<div class='js-fade is-hidden'>You look amazing!</div>
", "modular/text2.html.twig", "C:\\xampp\\htdocs\\morley\\user\\themes\\quark\\templates\\modular\\text2.html.twig");
    }
}
