<?php

/* coffee/index.html.twig */
class __TwigTemplate_fe9599e0867970666571c5a776eb58d47333fdefc79fe3f042e596d9b9e38852 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "coffee/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coffee/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coffee/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Coffee index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container\">

        <h1>Coffee homepage</h1>

        <p>
            Welcome to the coffee homepage
        </p>

        <div class=\"row\">

            ";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 18
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["coffees"]) || array_key_exists("coffees", $context) ? $context["coffees"] : (function () { throw new Twig_Error_Runtime('Variable "coffees" does not exist.', 18, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["coffee"]) {
                // line 19
                echo "                <div class=\"col-lg-6 col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"thumbnail\">
                        <img src=\"/images/";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coffee"], "image", array()), "html", null, true);
                echo "\" class=\"img-thumbnail\"/>
                        <h3>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coffee"], "title", array()), "html", null, true);
                echo "</h3>
                        <p>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coffee"], "status", array()), "html", null, true);
                echo "</p>
                        <p>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coffee"], "author", array()), "html", null, true);
                echo "</p>
                        <p>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coffee"], "summary", array()), "html", null, true);
                echo "</p>
                        <p>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coffee"], "description", array()), "html", null, true);
                echo "</p>
                        <p>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coffee"], "ingredientsList", array()), "html", null, true);
                echo "</p>
                        <p>€";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coffee"], "priceRange", array()), "html", null, true);
                echo "</p>
                        <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coffee_show", array("id" => twig_get_attribute($this->env, $this->source, $context["coffee"], "id", array()))), "html", null, true);
                echo "\">View Coffee</a>
                    </div>

                </div>

            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 35
                echo "                <tr>
                    <td colspan=\"8\">no Coffees found</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coffee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "
            ";
        } else {
            // line 41
            echo "
                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["coffees"]) || array_key_exists("coffees", $context) ? $context["coffees"] : (function () { throw new Twig_Error_Runtime('Variable "coffees" does not exist.', 42, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["coffee"]) {
                // line 43
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["coffee"], "status", array()) == "public")) {
                    // line 44
                    echo "                        <div class=\"col-lg-6 col-md-3 col-sm-6 col-xs-12\">
                            <div class=\"thumbnail\">
                                <img src=\"/images/";
                    // line 46
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coffee"], "image", array()), "html", null, true);
                    echo "\" class=\"img-thumbnail\"/>
                                <h3>";
                    // line 47
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coffee"], "title", array()), "html", null, true);
                    echo "</h3>
                                <p>";
                    // line 48
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coffee"], "status", array()), "html", null, true);
                    echo "</p>
                                <p>";
                    // line 49
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coffee"], "author", array()), "html", null, true);
                    echo "</p>
                                <p>";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coffee"], "summary", array()), "html", null, true);
                    echo "</p>
                                <p>";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coffee"], "description", array()), "html", null, true);
                    echo "</p>
                                <p>";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coffee"], "ingredientsList", array()), "html", null, true);
                    echo "</p>
                                <p>€";
                    // line 53
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coffee"], "priceRange", array()), "html", null, true);
                    echo "</p>
                                <a href=\"";
                    // line 54
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coffee_show", array("id" => twig_get_attribute($this->env, $this->source, $context["coffee"], "id", array()))), "html", null, true);
                    echo "\">View Coffee</a>
                            </div>

                        </div>
                    ";
                }
                // line 59
                echo "
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 61
                echo "                    <tr>
                        <td colspan=\"8\">no Coffees found</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coffee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "
            ";
        }
        // line 67
        echo "


        </div>
    </div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "coffee/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 67,  223 => 65,  214 => 61,  208 => 59,  200 => 54,  196 => 53,  192 => 52,  188 => 51,  184 => 50,  180 => 49,  176 => 48,  172 => 47,  168 => 46,  164 => 44,  161 => 43,  156 => 42,  153 => 41,  149 => 39,  140 => 35,  129 => 29,  125 => 28,  121 => 27,  117 => 26,  113 => 25,  109 => 24,  105 => 23,  101 => 22,  97 => 21,  93 => 19,  87 => 18,  85 => 17,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Coffee index{% endblock %}

{% block body %}

    <div class=\"container\">

        <h1>Coffee homepage</h1>

        <p>
            Welcome to the coffee homepage
        </p>

        <div class=\"row\">

            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                {% for coffee in coffees %}
                <div class=\"col-lg-6 col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"thumbnail\">
                        <img src=\"/images/{{ coffee.image }}\" class=\"img-thumbnail\"/>
                        <h3>{{ coffee.title }}</h3>
                        <p>{{ coffee.status }}</p>
                        <p>{{ coffee.author }}</p>
                        <p>{{ coffee.summary }}</p>
                        <p>{{ coffee.description }}</p>
                        <p>{{ coffee.ingredientsList }}</p>
                        <p>€{{ coffee.priceRange }}</p>
                        <a href=\"{{ path('coffee_show', {'id': coffee.id}) }}\">View Coffee</a>
                    </div>

                </div>

            {% else %}
                <tr>
                    <td colspan=\"8\">no Coffees found</td>
                </tr>
            {% endfor %}

            {% else %}

                {% for coffee in coffees %}
                    {% if coffee.status == 'public' %}
                        <div class=\"col-lg-6 col-md-3 col-sm-6 col-xs-12\">
                            <div class=\"thumbnail\">
                                <img src=\"/images/{{ coffee.image }}\" class=\"img-thumbnail\"/>
                                <h3>{{ coffee.title }}</h3>
                                <p>{{ coffee.status }}</p>
                                <p>{{ coffee.author }}</p>
                                <p>{{ coffee.summary }}</p>
                                <p>{{ coffee.description }}</p>
                                <p>{{ coffee.ingredientsList }}</p>
                                <p>€{{ coffee.priceRange }}</p>
                                <a href=\"{{ path('coffee_show', {'id': coffee.id}) }}\">View Coffee</a>
                            </div>

                        </div>
                    {% endif %}

                {% else %}
                    <tr>
                        <td colspan=\"8\">no Coffees found</td>
                    </tr>
                {% endfor %}

            {% endif %}



        </div>
    </div>




{% endblock %}", "coffee/index.html.twig", "D:\\ITB\\Year3\\sem2\\php\\coffee-paradise\\templates\\coffee\\index.html.twig");
    }
}
