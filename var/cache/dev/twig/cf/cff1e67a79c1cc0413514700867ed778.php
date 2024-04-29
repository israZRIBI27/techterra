<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* threads/index.html.twig */
class __TwigTemplate_f94944b23920c4fad5aff52be1ecfc86 extends Template
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
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
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

        yield "Threads Index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
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
        yield "    <div class=\"container\">
        <h1 class=\"mt-4\">Threads Index</h1>

        <div class=\"row\">
            <div class=\"col-lg-9\">
                ";
        // line 11
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["threads"]) || array_key_exists("threads", $context) ? $context["threads"] : (function () { throw new RuntimeError('Variable "threads" does not exist.', 11, $this->source); })()))) {
            // line 12
            yield "                    <div class=\"row row-cols-1 row-cols-md-2 g-4\">
                        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["threads"]) || array_key_exists("threads", $context) ? $context["threads"] : (function () { throw new RuntimeError('Variable "threads" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                // line 14
                yield "                            <div class=\"col\">
                                <div class=\"card h-100\">
                                    <div class=\"card-body\">
                                        <i class=\"fa-regular fa-calendar\"></i>  ";
                // line 17
                ((CoreExtension::getAttribute($this->env, $this->source, $context["thread"], "createdAt", [], "any", false, false, false, 17)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["thread"], "createdAt", [], "any", false, false, false, 17), "Y-m-d"), "html", null, true)) : (yield ""));
                yield "<br>
                                        <a href=\"";
                // line 18
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("threads_show", ["threadId" => CoreExtension::getAttribute($this->env, $this->source, $context["thread"], "threadId", [], "any", false, false, false, 18)]), "html", null, true);
                yield "\" class=\"card-title fs-4 fw-bold\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["thread"], "title", [], "any", false, false, false, 18), "html", null, true);
                yield "</a>
                                        <p class=\"card-text\">
                                            ";
                // line 20
                if ((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["thread"], "content", [], "any", false, false, false, 20)) > 100)) {
                    // line 21
                    yield "                                                ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, (Twig\Extension\CoreExtension::striptags(Twig\Extension\CoreExtension::slice($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["thread"], "content", [], "any", false, false, false, 21), 0, 100)) . "..."), "html", null, true);
                    yield "
                                            ";
                } else {
                    // line 23
                    yield "                                                ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["thread"], "content", [], "any", false, false, false, 23)), "html", null, true);
                    yield "
                                            ";
                }
                // line 25
                yield "                                        </p>
                                    </div>
                                    <div class=\"card-footer text-muted\">
                                        <a href=\"";
                // line 28
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_threads_edit", ["threadId" => CoreExtension::getAttribute($this->env, $this->source, $context["thread"], "threadId", [], "any", false, false, false, 28)]), "html", null, true);
                yield "\" class=\"btn btn-secondary\">Edit</a>
                                        ";
                // line 29
                if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["thread"], "category", [], "any", false, false, false, 29))) {
                    // line 30
                    yield "                                            <a href=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_threads_index", ["category" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["thread"], "category", [], "any", false, false, false, 30), "categoryId", [], "any", false, false, false, 30)]), "html", null, true);
                    yield "\" class=\"text-decoration-none\">
                                                <p class=\"text-light\" style=\"background: #585858;width: fit-content;border-radius: 10px;padding: 0.525em .5em;display: inline;\">";
                    // line 31
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["thread"], "category", [], "any", false, false, false, 31), "html", null, true);
                    yield "</p>
                                            </a>
                                        ";
                }
                // line 34
                yield "                                    </div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "                    </div>

                ";
        } else {
            // line 41
            yield "                    <p>No threads found.</p>
                ";
        }
        // line 43
        yield "                <div class=\"container-sm mt-5\">
                    ";
        // line 44
        yield $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["threads"]) || array_key_exists("threads", $context) ? $context["threads"] : (function () { throw new RuntimeError('Variable "threads" does not exist.', 44, $this->source); })()));
        yield "
                </div>
            </div>
            <div class=\"col-lg-3\">
                <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_threads_new");
        yield "\" class=\"addbtn\"><i class=\"fa-regular fa-square-plus\"></i>Add Yours</a>
                <div class=\"card mb-4\" style=\"background: #f9f9f9;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Search, Sort, and Filter</h5>
                        <form action=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_threads_index");
        yield "\" method=\"GET\">
                            <div class=\"mb-3\">
                                <input type=\"text\" id=\"search-input\" name=\"q\" class=\"form-control\" placeholder=\"Search threads...\" value=\"";
        // line 54
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "query", [], "any", false, false, false, 54), "get", ["q"], "method", false, false, false, 54), "html", null, true);
        yield "\">
                            </div>
                            <div class=\"mb-3\">
                                <select name=\"category\" class=\"form-select\">
                                    <option value=\"\">All Categories</option>
                                    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topics"]) || array_key_exists("topics", $context) ? $context["topics"] : (function () { throw new RuntimeError('Variable "topics" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
            // line 60
            yield "                                        <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["topic"], "categoryId", [], "any", false, false, false, 60), "html", null, true);
            yield "\" ";
            if (((isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 60, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["topic"], "categoryId", [], "any", false, false, false, 60))) {
                yield "selected";
            }
            yield ">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["topic"], "categoryName", [], "any", false, false, false, 60), "html", null, true);
            yield "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "                                </select>
                            </div>
                            <div class=\"mb-3\">
                                <select name=\"sortOrder\" class=\"form-select\">
                                    <option value=\"ASC\" ";
        // line 66
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "request", [], "any", false, false, false, 66), "query", [], "any", false, false, false, 66), "has", ["sortOrder"], "method", false, false, false, 66) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "request", [], "any", false, false, false, 66), "query", [], "any", false, false, false, 66), "get", ["sortOrder"], "method", false, false, false, 66) == "ASC"))) {
            yield "selected";
        }
        yield ">Ascending</option>
                                    <option value=\"DESC\" ";
        // line 67
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "request", [], "any", false, false, false, 67), "query", [], "any", false, false, false, 67), "has", ["sortOrder"], "method", false, false, false, 67) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "request", [], "any", false, false, false, 67), "query", [], "any", false, false, false, 67), "get", ["sortOrder"], "method", false, false, false, 67) == "DESC"))) {
            yield "selected";
        }
        yield ">Descending</option>
                                </select>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Apply Filters</button>
                            <a class=\"btn btn-outline-secondary\" href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_threads_index");
        yield "\">Reset</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        span{margin: 0;padding: 0;}
        .pagination {
            display: flex;
            justify-content: center;
            list-style-type: none;
            padding: 0;
            gap:.25em;
        }

        .pagination li {
            margin: 0 5px;
        }

        .pagination a {
            text-decoration: none;
            color: #007bff;
            border: 1px solid #007bff;
            padding: 6px 12px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .pagination a:hover {
            background-color: #007bff;
            color: #fff;
        }

        .pagination .current {
            font-weight: bold;
            background-color: #007bff;
            color: #fff;
            border: 1px solid #007bff;
            padding: 6px 12px;
            border-radius: 4px;
            margin-top: -7px;            }
.addbtn{    width: 100%;
    padding: 1rem;
    color: #f8f8f8;
    border-radius: .5em;
    margin-bottom: 1rem;
    font-size: 1.25rem;
    font-weight: 900;
    display: flex;
    align-items: center;
    gap: .5rem;
    background: linear-gradient(90deg, rgba(241, 114, 169, 1) 0%, rgba(98, 162, 237, 1) 100%);
}
    </style>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css\" integrity=\"sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
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
        return array (  246 => 71,  237 => 67,  231 => 66,  225 => 62,  210 => 60,  206 => 59,  198 => 54,  193 => 52,  186 => 48,  179 => 44,  176 => 43,  172 => 41,  167 => 38,  158 => 34,  152 => 31,  147 => 30,  145 => 29,  141 => 28,  136 => 25,  130 => 23,  124 => 21,  122 => 20,  115 => 18,  111 => 17,  106 => 14,  102 => 13,  99 => 12,  97 => 11,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Threads Index{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"mt-4\">Threads Index</h1>

        <div class=\"row\">
            <div class=\"col-lg-9\">
                {% if threads is not empty %}
                    <div class=\"row row-cols-1 row-cols-md-2 g-4\">
                        {% for thread in threads %}
                            <div class=\"col\">
                                <div class=\"card h-100\">
                                    <div class=\"card-body\">
                                        <i class=\"fa-regular fa-calendar\"></i>  {{ thread.createdAt ? thread.createdAt|date('Y-m-d') : '' }}<br>
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
                                        {% if thread.category is not null %}
                                            <a href=\"{{ path('app_threads_index', {'category': thread.category.categoryId}) }}\" class=\"text-decoration-none\">
                                                <p class=\"text-light\" style=\"background: #585858;width: fit-content;border-radius: 10px;padding: 0.525em .5em;display: inline;\">{{ thread.category }}</p>
                                            </a>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>

                {% else %}
                    <p>No threads found.</p>
                {% endif %}
                <div class=\"container-sm mt-5\">
                    {{ knp_pagination_render(threads) }}
                </div>
            </div>
            <div class=\"col-lg-3\">
                <a href=\"{{ path('app_threads_new') }}\" class=\"addbtn\"><i class=\"fa-regular fa-square-plus\"></i>Add Yours</a>
                <div class=\"card mb-4\" style=\"background: #f9f9f9;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Search, Sort, and Filter</h5>
                        <form action=\"{{ path('app_threads_index') }}\" method=\"GET\">
                            <div class=\"mb-3\">
                                <input type=\"text\" id=\"search-input\" name=\"q\" class=\"form-control\" placeholder=\"Search threads...\" value=\"{{ app.request.query.get('q') }}\">
                            </div>
                            <div class=\"mb-3\">
                                <select name=\"category\" class=\"form-select\">
                                    <option value=\"\">All Categories</option>
                                    {% for topic in topics %}
                                        <option value=\"{{ topic.categoryId }}\" {% if selectedCategory == topic.categoryId %}selected{% endif %}>{{ topic.categoryName }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"mb-3\">
                                <select name=\"sortOrder\" class=\"form-select\">
                                    <option value=\"ASC\" {% if app.request.query.has('sortOrder') and app.request.query.get('sortOrder') == 'ASC' %}selected{% endif %}>Ascending</option>
                                    <option value=\"DESC\" {% if app.request.query.has('sortOrder') and app.request.query.get('sortOrder') == 'DESC' %}selected{% endif %}>Descending</option>
                                </select>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Apply Filters</button>
                            <a class=\"btn btn-outline-secondary\" href=\"{{ path('app_threads_index') }}\">Reset</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        span{margin: 0;padding: 0;}
        .pagination {
            display: flex;
            justify-content: center;
            list-style-type: none;
            padding: 0;
            gap:.25em;
        }

        .pagination li {
            margin: 0 5px;
        }

        .pagination a {
            text-decoration: none;
            color: #007bff;
            border: 1px solid #007bff;
            padding: 6px 12px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .pagination a:hover {
            background-color: #007bff;
            color: #fff;
        }

        .pagination .current {
            font-weight: bold;
            background-color: #007bff;
            color: #fff;
            border: 1px solid #007bff;
            padding: 6px 12px;
            border-radius: 4px;
            margin-top: -7px;            }
.addbtn{    width: 100%;
    padding: 1rem;
    color: #f8f8f8;
    border-radius: .5em;
    margin-bottom: 1rem;
    font-size: 1.25rem;
    font-weight: 900;
    display: flex;
    align-items: center;
    gap: .5rem;
    background: linear-gradient(90deg, rgba(241, 114, 169, 1) 0%, rgba(98, 162, 237, 1) 100%);
}
    </style>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css\" integrity=\"sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />

{% endblock %}
", "threads/index.html.twig", "C:\\Users\\Med\\Downloads\\techterra-Gestion-Evenement\\techterra-Gestion-Evenement\\templates\\threads\\index.html.twig");
    }
}
