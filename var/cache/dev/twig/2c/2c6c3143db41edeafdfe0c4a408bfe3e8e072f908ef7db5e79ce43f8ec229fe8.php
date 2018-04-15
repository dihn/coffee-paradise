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

        <table>
            <tr>
                <th>Id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coffee"]) || array_key_exists("coffee", $context) ? $context["coffee"] : (function () { throw new Twig_Error_Runtime('Variable "coffee" does not exist.', 14, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coffee"]) || array_key_exists("coffee", $context) ? $context["coffee"] : (function () { throw new Twig_Error_Runtime('Variable "coffee" does not exist.', 18, $this->source); })()), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Summary</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coffee"]) || array_key_exists("coffee", $context) ? $context["coffee"] : (function () { throw new Twig_Error_Runtime('Variable "coffee" does not exist.', 22, $this->source); })()), "summary", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coffee"]) || array_key_exists("coffee", $context) ? $context["coffee"] : (function () { throw new Twig_Error_Runtime('Variable "coffee" does not exist.', 26, $this->source); })()), "image", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coffee"]) || array_key_exists("coffee", $context) ? $context["coffee"] : (function () { throw new Twig_Error_Runtime('Variable "coffee" does not exist.', 30, $this->source); })()), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>IngredientsList</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coffee"]) || array_key_exists("coffee", $context) ? $context["coffee"] : (function () { throw new Twig_Error_Runtime('Variable "coffee" does not exist.', 34, $this->source); })()), "ingredientsList", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>PriceRange</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coffee"]) || array_key_exists("coffee", $context) ? $context["coffee"] : (function () { throw new Twig_Error_Runtime('Variable "coffee" does not exist.', 38, $this->source); })()), "priceRange", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Reviews</th>
                <td>
                    ";
        // line 44
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 45
            echo "
                        ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["coffee"]) || array_key_exists("coffee", $context) ? $context["coffee"] : (function () { throw new Twig_Error_Runtime('Variable "coffee" does not exist.', 46, $this->source); })()), "reviews", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 47
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
                // line 50
                echo "                            (no reviews for this Coffee)
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "
                        ";
        } else {
            // line 54
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["coffee"]) || array_key_exists("coffee", $context) ? $context["coffee"] : (function () { throw new Twig_Error_Runtime('Variable "coffee" does not exist.', 54, $this->source); })()), "reviews", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 55
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
                // line 58
                echo "                                (no reviews for this Coffee)
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                    ";
        }
        // line 61
        echo "                </td>
            </tr>


        </table>

        <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coffee_index");
        echo "\">Back to Coffees</a>

        ";
        // line 69
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 70
            echo "
            <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("review_new", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["coffee"]) || array_key_exists("coffee", $context) ? $context["coffee"] : (function () { throw new Twig_Error_Runtime('Variable "coffee" does not exist.', 71, $this->source); })()), "id", array()))), "html", null, true);
            echo "\">Add Review</a>

            <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coffee_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["coffee"]) || array_key_exists("coffee", $context) ? $context["coffee"] : (function () { throw new Twig_Error_Runtime('Variable "coffee" does not exist.', 73, $this->source); })()), "id", array()))), "html", null, true);
            echo "\">Edit</a>

            ";
            // line 75
            $this->loadTemplate("coffee/_delete_form.html.twig", "coffee/show.html.twig", 75)->display(array("identifier" => twig_get_attribute($this->env, $this->source, (isset($context["coffee"]) || array_key_exists("coffee", $context) ? $context["coffee"] : (function () { throw new Twig_Error_Runtime('Variable "coffee" does not exist.', 75, $this->source); })()), "id", array())));
            // line 76
            echo "        ";
        }
        // line 77
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
        return array (  227 => 77,  224 => 76,  222 => 75,  217 => 73,  212 => 71,  209 => 70,  207 => 69,  202 => 67,  194 => 61,  191 => 60,  184 => 58,  173 => 55,  167 => 54,  163 => 52,  156 => 50,  143 => 47,  138 => 46,  135 => 45,  133 => 44,  124 => 38,  117 => 34,  110 => 30,  103 => 26,  96 => 22,  89 => 18,  82 => 14,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Coffee{% endblock %}

{% block body %}

    <div class=\"container\">

        <h1>Coffee</h1>

        <table>
            <tr>
                <th>Id</th>
                <td>{{ coffee.id }}</td>
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
                <th>Image</th>
                <td>{{ coffee.image }}</td>
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
