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

/* backend/threads/show.html.twig */
class __TwigTemplate_a647582caedd2748b49ad1b5cb8acbc2 extends Template
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
        return "../../base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/threads/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/threads/show.html.twig"));

        $this->parent = $this->loadTemplate("../../base.html.twig", "backend/threads/show.html.twig", 1);
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

        echo "Threads";
        
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
        echo "    <h1>Threads</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>ThreadId</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 12, $this->source); })()), "threadId", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 20, $this->source); })()), "content", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>CreatedAt</th>
                <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 24, $this->source); })()), "createdAt", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 24, $this->source); })()), "createdAt", [], "any", false, false, false, 24), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backend_threads_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backend_threads_edit", ["threadId" => twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 31, $this->source); })()), "threadId", [], "any", false, false, false, 31)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 33
        echo twig_include($this->env, $context, "threads/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backend/threads/show.html.twig";
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
        return array (  135 => 33,  130 => 31,  125 => 29,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '../../base.html.twig' %}

{% block title %}Threads{% endblock %}

{% block body %}
    <h1>Threads</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>ThreadId</th>
                <td>{{ thread.threadId }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ thread.title }}</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>{{ thread.content }}</td>
            </tr>
            <tr>
                <th>CreatedAt</th>
                <td>{{ thread.createdAt ? thread.createdAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_backend_threads_index') }}\">back to list</a>

    <a href=\"{{ path('app_backend_threads_edit', {'threadId': thread.threadId}) }}\">edit</a>

    {{ include('threads/_delete_form.html.twig') }}
{% endblock %}
", "backend/threads/show.html.twig", "C:\\Users\\Med\\Downloads\\techterra-Gestion-Evenement\\techterra-Gestion-Evenement\\templates\\backend\\threads\\show.html.twig");
    }
}
