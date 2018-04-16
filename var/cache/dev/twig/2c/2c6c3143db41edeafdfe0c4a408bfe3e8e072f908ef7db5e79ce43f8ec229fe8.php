<?php

/* coffee/show.html.twig */
class __TwigTemplate_f0e15317e9feb3e0aec668c351e3796f93067cb0c3c9a7420861094965b3a010 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "coffee/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coffee/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coffee/show.html.twig"));

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

        echo "Coffee";
        
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

        <h1>Coffee</h1>

    <div class=\"col-lg-6 col-md-3 col-sm-6 col-xs-12\">
        <table>
            <tr>

                <td><img src=\"/images/";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coffee"]) || array_key_exists("coffee", $context) ? $context["coffee"] : (function () { throw new Twig_Error_Runtime('Variable "coffee" does not exist.', 15, $this->source); })()), "image", array()), "html", null, true);
        echo "\" class=\"img-thumbnail\"/></td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coffee"]) || array_key_exists("coffee", $context) ? $context["coffee"] : (function () { throw new Twig_Error_Runtime('Variable "coffee" does not exist.', 19, $this->source); })()), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Summary</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coffee"]) || array_key_exists("coffee", $context) ? $context["coffee"] : (function () { throw new Twig_Error_Runtime('Variable "coffee" does not exist.', 23, $this->source); })()), "summary", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coffee"]) || array_key_exists("coffee", $context) ? $context["coffee"] : (function () { throw new Twig_Error_Runtime('Variable "coffee" does not exist.', 27, $this->source); })()), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>IngredientsList</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coffee"]) || array_key_exists("coffee", $context) ? $context["coffee"] : (function () { throw new Twig_Error_Runtime('Variable "coffee" does not exist.', 31, $this->source); })()), "ingredientsList", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>PriceRange</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coffee"]) || array_key_exists("coffee", $context) ? $context["coffee"] : (function () { throw new Twig_Error_Runtime('Variable "coffee" does not exist.', 35, $this->source); })()), "priceRange", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Reviews</th>
                <td>
                    ";
        // line 41
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 42
            echo "
                        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["coffee"]) || array_key_exists("coffee", $context) ? $context["coffee"] : (function () { throw new Twig_Error_Runtime('Variable "coffee" does not exist.', 43, $this->source); })()), "reviews", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 44
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "author", array()), "html", null, true);
                echo " :: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "summary", array()), "html", null, true);
                echo " :: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "numStars", array()), "html", null, true);
                echo "
                            <br>
                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 47
                echo "                            (no reviews for this Coffee)
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "
                        ";
        } else {
            // line 51
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["coffee"]) || array_key_exists("coffee", $context) ? $context["coffee"] : (function () { throw new Twig_Error_Runtime('Variable "coffee" does not exist.', 51, $this->source); })()), "reviews", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 52
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "summary", array()), "html", null, true);
                echo " :: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "numStars", array()), "html", null, true);
                echo "
                                <br>
                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 55
                echo "                                (no reviews for this Coffee)
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                    ";
        }
        // line 58
        echo "                </td>
            </tr>


        </table>

    </div>

        <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coffee_index");
        echo "\">Back to Coffees</a>

        ";
        // line 68
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 69
            echo "
            <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("review_new", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["coffee"]) || array_key_exists("coffee", $context) ? $context["coffee"] : (function () { throw new Twig_Error_Runtime('Variable "coffee" does not exist.', 70, $this->source); })()), "id", array()))), "html", null, true);
            echo "\">Add Review</a>

            <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coffee_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["coffee"]) || array_key_exists("coffee", $context) ? $context["coffee"] : (function () { throw new Twig_Error_Runtime('Variable "coffee" does not exist.', 72, $this->source); })()), "id", array()))), "html", null, true);
            echo "\">Edit</a>

            ";
            // line 74
            $this->loadTemplate("coffee/_delete_form.html.twig", "coffee/show.html.twig", 74)->display(array("identifier" => twig_get_attribute($this->env, $this->source, (isset($context["coffee"]) || array_key_exists("coffee", $context) ? $context["coffee"] : (function () { throw new Twig_Error_Runtime('Variable "coffee" does not exist.', 74, $this->source); })()), "id", array())));
            // line 75
            echo "        ";
        }
        // line 76
        echo "


    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "coffee/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 76,  220 => 75,  218 => 74,  213 => 72,  208 => 70,  205 => 69,  203 => 68,  198 => 66,  188 => 58,  185 => 57,  178 => 55,  167 => 52,  161 => 51,  157 => 49,  150 => 47,  137 => 44,  132 => 43,  129 => 42,  127 => 41,  118 => 35,  111 => 31,  104 => 27,  97 => 23,  90 => 19,  83 => 15,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Coffee{% endblock %}

{% block body %}

    <div class=\"container\">

        <h1>Coffee</h1>

    <div class=\"col-lg-6 col-md-3 col-sm-6 col-xs-12\">
        <table>
            <tr>

                <td><img src=\"/images/{{ coffee.image }}\" class=\"img-thumbnail\"/></td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ coffee.title }}</td>
            </tr>
            <tr>
                <th>Summary</th>
                <td>{{ coffee.summary }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ coffee.description }}</td>
            </tr>
            <tr>
                <th>IngredientsList</th>
                <td>{{ coffee.ingredientsList }}</td>
            </tr>
            <tr>
                <th>PriceRange</th>
                <td>{{ coffee.priceRange }}</td>
            </tr>

            <tr>
                <th>Reviews</th>
                <td>
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}

                        {% for review in coffee.reviews %}
                            {{ review.author }} :: {{ review.summary }} :: {{ review.numStars }}
                            <br>
                        {% else %}
                            (no reviews for this Coffee)
                        {% endfor %}

                        {% else %}
                            {% for review in coffee.reviews %}
                                {{ review.summary }} :: {{ review.numStars }}
                                <br>
                            {% else %}
                                (no reviews for this Coffee)
                            {% endfor %}
                    {% endif %}
                </td>
            </tr>


        </table>

    </div>

        <a href=\"{{ path('coffee_index') }}\">Back to Coffees</a>

        {% if is_granted('IS_AUTHENTICATED_FULLY') %}

            <a href=\"{{ path('review_new', {'id': coffee.id}) }}\">Add Review</a>

            <a href=\"{{ path('coffee_edit', {'id': coffee.id}) }}\">Edit</a>

            {% include 'coffee/_delete_form.html.twig' with {'identifier': coffee.id} only %}
        {% endif %}



    </div>

{% endblock %}", "coffee/show.html.twig", "D:\\ITB\\Year3\\sem2\\php\\coffee-paradise\\templates\\coffee\\show.html.twig");
    }
}
