<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_ed4d37790b1e34f8a825a37d75e6b425620d7c4af179a52178a2b20d0fc2fd2b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_js.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_js.html.twig"));

        // line 1
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\" class=\"sf-toolbar sf-display-none\"></div>
";
        // line 2
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/base_js.html.twig");
        echo "
<style";
        // line 3
        if ((isset($context["csp_style_nonce"]) || array_key_exists("csp_style_nonce", $context) ? $context["csp_style_nonce"] : (function () { throw new Twig_Error_Runtime('Variable "csp_style_nonce" does not exist.', 3, $this->source); })())) {
            echo " nonce=\"";
            echo twig_escape_filter($this->env, (isset($context["csp_style_nonce"]) || array_key_exists("csp_style_nonce", $context) ? $context["csp_style_nonce"] : (function () { throw new Twig_Error_Runtime('Variable "csp_style_nonce" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 4
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar.css.twig");
        echo "
</style>
<script";
        // line 6
        if ((isset($context["csp_script_nonce"]) || array_key_exists("csp_script_nonce", $context) ? $context["csp_script_nonce"] : (function () { throw new Twig_Error_Runtime('Variable "csp_script_nonce" does not exist.', 6, $this->source); })())) {
            echo " nonce=\"";
            echo twig_escape_filter($this->env, (isset($context["csp_script_nonce"]) || array_key_exists("csp_script_nonce", $context) ? $context["csp_script_nonce"] : (function () { throw new Twig_Error_Runtime('Variable "csp_script_nonce" does not exist.', 6, $this->source); })()), "html", null, true);
            echo "\"";
        }
        echo ">/*<![CDATA[*/
    (function () {
        Sfjs.load(
            'sfwdt";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "',
            '";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_wdt", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 10, $this->source); })()))), "html", null, true);
        echo "',
            function(xhr, el) {

                /* Evaluate embedded scripts inside the toolbar */
                var i, scripts = [].slice.call(el.querySelectorAll('script'));

                for (i = 0; i < scripts.length; ++i) {
                    eval(scripts[i].firstChild.nodeValue);
                }

                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "').style.display = 'none';
                }

                /* Handle toolbar-info position */
                var toolbarBlocks = [].slice.call(el.querySelectorAll('.sf-toolbar-block'));
                for (i = 0; i < toolbarBlocks.length; ++i) {
                    toolbarBlocks[i].onmouseover = function () {
                        var toolbarInfo = this.querySelectorAll('.sf-toolbar-info')[0];
                        var pageWidth = document.body.clientWidth;
                        var elementWidth = toolbarInfo.offsetWidth;
                        var leftValue = (elementWidth + this.offsetLeft) - pageWidth;
                        var rightValue = (elementWidth + (pageWidth - this.offsetLeft)) - pageWidth;

                        /* Reset right and left value, useful on window resize */
                        toolbarInfo.style.right = '';
                        toolbarInfo.style.left = '';

                        if (elementWidth > pageWidth) {
                            toolbarInfo.style.left = 0;
                        }
                        else if (leftValue > 0 && rightValue > 0) {
                            toolbarInfo.style.right = (rightValue * -1) + 'px';
                        } else if (leftValue < 0) {
                            toolbarInfo.style.left = 0;
                        } else {
                            toolbarInfo.style.right = '0px';
                        }
                    };
                }
                Sfjs.addEventListener(document.getElementById('sfToolbarHideButton-";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "'), 'click', function (event) {
                    event.preventDefault();

                    var p = this.parentNode;
                    p.style.display = 'none';
                    (p.previousElementSibling || p.previousSibling).style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 68, $this->source); })()), "html", null, true);
        echo "').style.display = 'block';
                    Sfjs.setPreference('toolbar/displayState', 'none');
                });
                Sfjs.addEventListener(document.getElementById('sfToolbarMiniToggler-";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "'), 'click', function (event) {
                    event.preventDefault();

                    var elem = this.parentNode;
                    if (elem.style.display == 'none') {
                        document.getElementById('sfToolbarMainContent-";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 76, $this->source); })()), "html", null, true);
        echo "').style.display = 'none';
                        document.getElementById('sfToolbarClearer-";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "').style.display = 'none';
                        elem.style.display = 'block';
                    } else {
                        document.getElementById('sfToolbarMainContent-";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "').style.display = 'block';
                        document.getElementById('sfToolbarClearer-";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "').style.display = 'block';
                        elem.style.display = 'none'
                    }

                    Sfjs.setPreference('toolbar/displayState', 'block');
                });
                Sfjs.renderAjaxRequests();
                Sfjs.addEventListener(document.querySelector('.sf-toolbar-block-ajax > .sf-toolbar-icon'), 'click', function (event) {
                    event.preventDefault();

                    Sfjs.toggleClass(this.parentNode, 'hover');
                });

                var dumpInfo = document.querySelector('.sf-toolbar-block-dump .sf-toolbar-info');
                if (null !== dumpInfo) {
                    Sfjs.addEventListener(dumpInfo, 'sfbeforedumpcollapse', function () {
                        dumpInfo.style.minHeight = dumpInfo.getBoundingClientRect().height+'px';
                    });
                    Sfjs.addEventListener(dumpInfo, 'mouseleave', function () {
                        dumpInfo.style.minHeight = '';
                    });
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    var sfwdt = document.getElementById('sfwdt";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 106, $this->source); })()), "html", null, true);
        echo "');
                    sfwdt.innerHTML = '\\
                        <div class=\"sf-toolbarreset\">\\
                            <div class=\"sf-toolbar-icon\"><svg width=\"26\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 28\" enable-background=\"new 0 0 26 28\" xml:space=\"preserve\"><path fill=\"#FFFFFF\" d=\"M13 0C5.8 0 0 5.8 0 13c0 7.2 5.8 13 13 13c7.2 0 13-5.8 13-13C26 5.8 20.2 0 13 0z M20 7.5 c-0.6 0-1-0.3-1-0.9c0-0.2 0-0.4 0.2-0.6c0.1-0.3 0.2-0.3 0.2-0.4c0-0.3-0.5-0.4-0.7-0.4c-2 0.1-2.5 2.7-2.9 4.8l-0.2 1.1 c1.1 0.2 1.9 0 2.4-0.3c0.6-0.4-0.2-0.8-0.1-1.3C18 9.2 18.4 9 18.7 8.9c0.5 0 0.8 0.5 0.8 1c0 0.8-1.1 2-3.3 1.9 c-0.3 0-0.5 0-0.7-0.1L15 14.1c-0.4 1.7-0.9 4.1-2.6 6.2c-1.5 1.8-3.1 2.1-3.8 2.1c-1.3 0-2.1-0.6-2.2-1.6c0-0.9 0.8-1.4 1.3-1.4 c0.7 0 1.2 0.5 1.2 1.1c0 0.5-0.2 0.6-0.4 0.7c-0.1 0.1-0.3 0.2-0.3 0.4c0 0.1 0.1 0.3 0.4 0.3c0.5 0 0.9-0.3 1.2-0.5 c1.3-1 1.7-2.9 2.4-6.2l0.1-0.8c0.2-1.1 0.5-2.3 0.8-3.5c-0.9-0.7-1.4-1.5-2.6-1.8c-0.8-0.2-1.3 0-1.7 0.4C8.4 10 8.6 10.7 9 11.1 l0.7 0.7c0.8 0.9 1.3 1.7 1.1 2.7c-0.3 1.6-2.1 2.8-4.3 2.1c-1.9-0.6-2.2-1.9-2-2.7c0.2-0.6 0.7-0.8 1.2-0.6 c0.5 0.2 0.7 0.8 0.6 1.3c0 0.1 0 0.1-0.1 0.3C6 15 5.9 15.2 5.9 15.3c-0.1 0.4 0.4 0.7 0.8 0.8c0.8 0.3 1.7-0.2 1.9-0.9 c0.2-0.6-0.2-1.1-0.4-1.2l-0.8-0.9c-0.4-0.4-1.2-1.5-0.8-2.8c0.2-0.5 0.5-1 0.9-1.4c1-0.7 2-0.8 3-0.6c1.3 0.4 1.9 1.2 2.8 1.9 c0.5-1.3 1.1-2.6 2-3.8c0.9-1 2-1.7 3.3-1.8C20 4.8 21 5.4 21 6.3C21 6.7 20.8 7.5 20 7.5z\"/></svg></div>\\
                            An error occurred while loading the web debug toolbar. <a href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 110, $this->source); })()))), "html", null, true);
        echo "\">Open the web profiler.</a>\\
                        </div>\\
                    ';
                    sfwdt.setAttribute('class', 'sf-toolbar sf-error-toolbar');
                }
            },
            { maxTries: 5 }
        );
    })();
/*]]>*/</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 110,  203 => 106,  175 => 81,  171 => 80,  165 => 77,  161 => 76,  153 => 71,  147 => 68,  138 => 62,  106 => 33,  102 => 32,  98 => 31,  93 => 29,  89 => 28,  85 => 27,  65 => 10,  61 => 9,  51 => 6,  46 => 4,  38 => 3,  34 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"sfwdt{{ token }}\" class=\"sf-toolbar sf-display-none\"></div>
{{ include('@WebProfiler/Profiler/base_js.html.twig') }}
<style{% if csp_style_nonce %} nonce=\"{{ csp_style_nonce }}\"{% endif %}>
    {{ include('@WebProfiler/Profiler/toolbar.css.twig') }}
</style>
<script{% if csp_script_nonce %} nonce=\"{{ csp_script_nonce }}\"{% endif %}>/*<![CDATA[*/
    (function () {
        Sfjs.load(
            'sfwdt{{ token }}',
            '{{ path(\"_wdt\", { \"token\": token }) }}',
            function(xhr, el) {

                /* Evaluate embedded scripts inside the toolbar */
                var i, scripts = [].slice.call(el.querySelectorAll('script'));

                for (i = 0; i < scripts.length; ++i) {
                    eval(scripts[i].firstChild.nodeValue);
                }

                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-{{ token }}').style.display = 'none';
                    document.getElementById('sfToolbarClearer-{{ token }}').style.display = 'none';
                    document.getElementById('sfMiniToolbar-{{ token }}').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-{{ token }}').style.display = 'block';
                    document.getElementById('sfToolbarClearer-{{ token }}').style.display = 'block';
                    document.getElementById('sfMiniToolbar-{{ token }}').style.display = 'none';
                }

                /* Handle toolbar-info position */
                var toolbarBlocks = [].slice.call(el.querySelectorAll('.sf-toolbar-block'));
                for (i = 0; i < toolbarBlocks.length; ++i) {
                    toolbarBlocks[i].onmouseover = function () {
                        var toolbarInfo = this.querySelectorAll('.sf-toolbar-info')[0];
                        var pageWidth = document.body.clientWidth;
                        var elementWidth = toolbarInfo.offsetWidth;
                        var leftValue = (elementWidth + this.offsetLeft) - pageWidth;
                        var rightValue = (elementWidth + (pageWidth - this.offsetLeft)) - pageWidth;

                        /* Reset right and left value, useful on window resize */
                        toolbarInfo.style.right = '';
                        toolbarInfo.style.left = '';

                        if (elementWidth > pageWidth) {
                            toolbarInfo.style.left = 0;
                        }
                        else if (leftValue > 0 && rightValue > 0) {
                            toolbarInfo.style.right = (rightValue * -1) + 'px';
                        } else if (leftValue < 0) {
                            toolbarInfo.style.left = 0;
                        } else {
                            toolbarInfo.style.right = '0px';
                        }
                    };
                }
                Sfjs.addEventListener(document.getElementById('sfToolbarHideButton-{{ token }}'), 'click', function (event) {
                    event.preventDefault();

                    var p = this.parentNode;
                    p.style.display = 'none';
                    (p.previousElementSibling || p.previousSibling).style.display = 'none';
                    document.getElementById('sfMiniToolbar-{{ token }}').style.display = 'block';
                    Sfjs.setPreference('toolbar/displayState', 'none');
                });
                Sfjs.addEventListener(document.getElementById('sfToolbarMiniToggler-{{ token }}'), 'click', function (event) {
                    event.preventDefault();

                    var elem = this.parentNode;
                    if (elem.style.display == 'none') {
                        document.getElementById('sfToolbarMainContent-{{ token }}').style.display = 'none';
                        document.getElementById('sfToolbarClearer-{{ token }}').style.display = 'none';
                        elem.style.display = 'block';
                    } else {
                        document.getElementById('sfToolbarMainContent-{{ token }}').style.display = 'block';
                        document.getElementById('sfToolbarClearer-{{ token }}').style.display = 'block';
                        elem.style.display = 'none'
                    }

                    Sfjs.setPreference('toolbar/displayState', 'block');
                });
                Sfjs.renderAjaxRequests();
                Sfjs.addEventListener(document.querySelector('.sf-toolbar-block-ajax > .sf-toolbar-icon'), 'click', function (event) {
                    event.preventDefault();

                    Sfjs.toggleClass(this.parentNode, 'hover');
                });

                var dumpInfo = document.querySelector('.sf-toolbar-block-dump .sf-toolbar-info');
                if (null !== dumpInfo) {
                    Sfjs.addEventListener(dumpInfo, 'sfbeforedumpcollapse', function () {
                        dumpInfo.style.minHeight = dumpInfo.getBoundingClientRect().height+'px';
                    });
                    Sfjs.addEventListener(dumpInfo, 'mouseleave', function () {
                        dumpInfo.style.minHeight = '';
                    });
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    var sfwdt = document.getElementById('sfwdt{{ token }}');
                    sfwdt.innerHTML = '\\
                        <div class=\"sf-toolbarreset\">\\
                            <div class=\"sf-toolbar-icon\"><svg width=\"26\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 28\" enable-background=\"new 0 0 26 28\" xml:space=\"preserve\"><path fill=\"#FFFFFF\" d=\"M13 0C5.8 0 0 5.8 0 13c0 7.2 5.8 13 13 13c7.2 0 13-5.8 13-13C26 5.8 20.2 0 13 0z M20 7.5 c-0.6 0-1-0.3-1-0.9c0-0.2 0-0.4 0.2-0.6c0.1-0.3 0.2-0.3 0.2-0.4c0-0.3-0.5-0.4-0.7-0.4c-2 0.1-2.5 2.7-2.9 4.8l-0.2 1.1 c1.1 0.2 1.9 0 2.4-0.3c0.6-0.4-0.2-0.8-0.1-1.3C18 9.2 18.4 9 18.7 8.9c0.5 0 0.8 0.5 0.8 1c0 0.8-1.1 2-3.3 1.9 c-0.3 0-0.5 0-0.7-0.1L15 14.1c-0.4 1.7-0.9 4.1-2.6 6.2c-1.5 1.8-3.1 2.1-3.8 2.1c-1.3 0-2.1-0.6-2.2-1.6c0-0.9 0.8-1.4 1.3-1.4 c0.7 0 1.2 0.5 1.2 1.1c0 0.5-0.2 0.6-0.4 0.7c-0.1 0.1-0.3 0.2-0.3 0.4c0 0.1 0.1 0.3 0.4 0.3c0.5 0 0.9-0.3 1.2-0.5 c1.3-1 1.7-2.9 2.4-6.2l0.1-0.8c0.2-1.1 0.5-2.3 0.8-3.5c-0.9-0.7-1.4-1.5-2.6-1.8c-0.8-0.2-1.3 0-1.7 0.4C8.4 10 8.6 10.7 9 11.1 l0.7 0.7c0.8 0.9 1.3 1.7 1.1 2.7c-0.3 1.6-2.1 2.8-4.3 2.1c-1.9-0.6-2.2-1.9-2-2.7c0.2-0.6 0.7-0.8 1.2-0.6 c0.5 0.2 0.7 0.8 0.6 1.3c0 0.1 0 0.1-0.1 0.3C6 15 5.9 15.2 5.9 15.3c-0.1 0.4 0.4 0.7 0.8 0.8c0.8 0.3 1.7-0.2 1.9-0.9 c0.2-0.6-0.2-1.1-0.4-1.2l-0.8-0.9c-0.4-0.4-1.2-1.5-0.8-2.8c0.2-0.5 0.5-1 0.9-1.4c1-0.7 2-0.8 3-0.6c1.3 0.4 1.9 1.2 2.8 1.9 c0.5-1.3 1.1-2.6 2-3.8c0.9-1 2-1.7 3.3-1.8C20 4.8 21 5.4 21 6.3C21 6.7 20.8 7.5 20 7.5z\"/></svg></div>\\
                            An error occurred while loading the web debug toolbar. <a href=\"{{ path(\"_profiler\", { \"token\": token }) }}\">Open the web profiler.</a>\\
                        </div>\\
                    ';
                    sfwdt.setAttribute('class', 'sf-toolbar sf-error-toolbar');
                }
            },
            { maxTries: 5 }
        );
    })();
/*]]>*/</script>
", "@WebProfiler/Profiler/toolbar_js.html.twig", "D:\\ITB\\Year3\\sem2\\php\\coffee-paradise\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\toolbar_js.html.twig");
    }
}
