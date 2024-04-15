<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* threads/index.html.twig */
class __TwigTemplate_50af92da8521cdfc8dbeb356bd9a7868 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "threads/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "threads/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "threads/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Threads Index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <h1 class=\"mt-4\">Threads Index</h1>

        ";
        // line 9
        if ( !twig_test_empty((isset($context["threads"]) || array_key_exists("threads", $context) ? $context["threads"] : (function () { throw new RuntimeError('Variable "threads" does not exist.', 9, $this->source); })()))) {
            // line 10
            echo "            <div class=\"row row-cols-1 row-cols-md-2 g-4\">
                ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["threads"]) || array_key_exists("threads", $context) ? $context["threads"] : (function () { throw new RuntimeError('Variable "threads" does not exist.', 11, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                // line 12
                echo "                    <div class=\"col\">
                        <div class=\"card h-100\">
                            <div class=\"card-body\">
                                <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("threads_show", ["threadId" => twig_get_attribute($this->env, $this->source, $context["thread"], "threadId", [], "any", false, false, false, 15)]), "html", null, true);
                echo "\" class=\"card-title fs-4 fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["thread"], "title", [], "any", false, false, false, 15), "html", null, true);
                echo "</a>
                                <p class=\"card-text\">
                                    ";
                // line 17
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["thread"], "content", [], "any", false, false, false, 17)) > 100)) {
                    // line 18
                    echo "                                        ";
                    echo twig_escape_filter($this->env, (twig_striptags(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["thread"], "content", [], "any", false, false, false, 18), 0, 100)) . "..."), "html", null, true);
                    echo "
                                    ";
                } else {
                    // line 20
                    echo "                                        ";
                    echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, $context["thread"], "content", [], "any", false, false, false, 20)), "html", null, true);
                    echo "
                                    ";
                }
                // line 22
                echo "                                </p>
                            </div>
                            <div class=\"card-footer text-muted\">
                                <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_threads_edit", ["threadId" => twig_get_attribute($this->env, $this->source, $context["thread"], "threadId", [], "any", false, false, false, 25)]), "html", null, true);
                echo "\" class=\"btn btn-secondary\">Edit</a>
                                <p class=\"text-light\" style=\"    background: #45835f;width: fit-content;border-radius: 10px;padding: 0.525em .5em;display:inline;\">";
                // line 26
                ((twig_get_attribute($this->env, $this->source, $context["thread"], "createdAt", [], "any", false, false, false, 26)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["thread"], "createdAt", [], "any", false, false, false, 26), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</p>
                                ";
                // line 27
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["thread"], "category", [], "any", false, false, false, 27))) {
                    // line 28
                    echo "
                                <p class=\"text-light\" style=\"    background: #e0895b;width: fit-content;border-radius: 10px;padding: 0.525em .5em;display: inline\">";
                    // line 29
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["thread"], "category", [], "any", false, false, false, 29), "html", null, true);
                    echo "</p>
                                ";
                }
                // line 31
                echo "
                            </div>
                        </div>
                    </div>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 36
                echo "                    <div class=\"col\">
                        <div class=\"card h-100\">
                            <div class=\"card-body\">
                                <p class=\"card-text\">No records found</p>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </div>
        ";
        } else {
            // line 46
            echo "            <p>No threads found.</p>
        ";
        }
        // line 48
        echo "
        <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_threads_new");
        echo "\" class=\"btn btn-success mt-4\">Create New Thread</a>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "threads/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  185 => 49,  182 => 48,  178 => 46,  174 => 44,  161 => 36,  152 => 31,  147 => 29,  144 => 28,  142 => 27,  138 => 26,  134 => 25,  129 => 22,  123 => 20,  117 => 18,  115 => 17,  108 => 15,  103 => 12,  98 => 11,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Threads Index{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"mt-4\">Threads Index</h1>

        {% if threads is not empty %}
            <div class=\"row row-cols-1 row-cols-md-2 g-4\">
                {% for thread in threads %}
                    <div class=\"col\">
                        <div class=\"card h-100\">
                            <div class=\"card-body\">
                                <a href=\"{{ path('threads_show', {'threadId': thread.threadId}) }}\" class=\"card-title fs-4 fw-bold\">{{ thread.title }}</a>
                                <p class=\"card-text\">
                                    {% if thread.content|length > 100 %}
                                        {{ thread.content|slice(0, 100)|striptags ~ '...' }}
                                    {% else %}
                                        {{ thread.content |striptags }}
                                    {% endif %}
                                </p>
                            </div>
                            <div class=\"card-footer text-muted\">
                                <a href=\"{{ path('app_threads_edit', {'threadId': thread.threadId}) }}\" class=\"btn btn-secondary\">Edit</a>
                                <p class=\"text-light\" style=\"    background: #45835f;width: fit-content;border-radius: 10px;padding: 0.525em .5em;display:inline;\">{{ thread.createdAt ? thread.createdAt|date('Y-m-d') : '' }}</p>
                                {% if thread.category is not null %}

                                <p class=\"text-light\" style=\"    background: #e0895b;width: fit-content;border-radius: 10px;padding: 0.525em .5em;display: inline\">{{thread.category}}</p>
                                {% endif %}

                            </div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"col\">
                        <div class=\"card h-100\">
                            <div class=\"card-body\">
                                <p class=\"card-text\">No records found</p>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <p>No threads found.</p>
        {% endif %}

        <a href=\"{{ path('app_threads_new') }}\" class=\"btn btn-success mt-4\">Create New Thread</a>
    </div>
{% endblock %}
", "threads/index.html.twig", "C:\\Users\\Med\\Downloads\\techterra-Gestion-Evenement\\techterra-Gestion-Evenement\\templates\\threads\\index.html.twig");
    }
}
