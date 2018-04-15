<?php

/* member/list.html.twig */
class __TwigTemplate_6dd3ba4672157e106eb1dd15da6cd4454b122b8edd3b8679000386c2108a6212 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "member/list.html.twig", 1);
        $this->blocks = array(
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">

        <h1>Member LIST page</h1>

        <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("member_new");
        echo "\">
            Create new Member
        </a>

        <ul>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["members"]) || array_key_exists("members", $context) ? $context["members"] : (function () { throw new Twig_Error_Runtime('Variable "members" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 15
            echo "                <li
                        ";
            // line 16
            if (array_key_exists("highlightId", $context)) {
                // line 17
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["member"], "id", array()) == (isset($context["highlightId"]) || array_key_exists("highlightId", $context) ? $context["highlightId"] : (function () { throw new Twig_Error_Runtime('Variable "highlightId" does not exist.', 17, $this->source); })()))) {
                    // line 18
                    echo "                                class=\"highlight\"
                            ";
                }
                // line 20
                echo "                        ";
            }
            // line 21
            echo "                >
                    id = ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "id", array()), "html", null, true);
            echo "
                    <br>
                    Username: ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "username", array()), "html", null, true);
            echo "
                    <br>
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("member_show", array("id" => twig_get_attribute($this->env, $this->source, $context["member"], "id", array()))), "html", null, true);
            echo "\">(details)</a>
                    <br>
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("member_delete", array("id" => twig_get_attribute($this->env, $this->source, $context["member"], "id", array()))), "html", null, true);
            echo "\">(DELETE)</a>

                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </ul>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "member/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 32,  105 => 28,  100 => 26,  95 => 24,  90 => 22,  87 => 21,  84 => 20,  80 => 18,  77 => 17,  75 => 16,  72 => 15,  68 => 14,  60 => 9,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container\">

        <h1>Member LIST page</h1>

        <a href=\"{{ path('member_new')}}\">
            Create new Member
        </a>

        <ul>
            {% for member in members %}
                <li
                        {% if highlightId is defined %}
                            {% if member.id == highlightId %}
                                class=\"highlight\"
                            {% endif %}
                        {% endif %}
                >
                    id = {{ member.id }}
                    <br>
                    Username: {{ member.username }}
                    <br>
                    <a href=\"{{ url('member_show', {id : member.id} ) }}\">(details)</a>
                    <br>
                    <a href=\"{{ url('member_delete', {id : member.id} ) }}\">(DELETE)</a>

                </li>
            {% endfor %}
        </ul>

    </div>
{% endblock %}", "member/list.html.twig", "D:\\ITB\\Year3\\sem2\\php\\coffee-paradise\\templates\\member\\list.html.twig");
    }
}
