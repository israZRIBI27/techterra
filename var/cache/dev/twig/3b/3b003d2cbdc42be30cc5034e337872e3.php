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

/* threads/new.html.twig */
class __TwigTemplate_719f56761f4188d37cdfd73c8d4a6e53 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "threads/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "threads/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "threads/new.html.twig", 1);
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

        yield "Create New Thread";
        
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

        <div class=\"row\">
            <div class=\"col-md-6 offset-md-3\">

                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 12
            yield "                    <div class=\"alert alert-danger\">
                        ";
            // line 13
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["flash_message"], "html", null, true);
            yield "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "


                ";
        // line 19
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19), 'errors')) {
            // line 20
            yield "                    <div class=\"alert alert-danger\">
                        <p> ";
            // line 21
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "title", [], "any", false, false, false, 21), 'errors');
            yield "</p>
                    </div>
                ";
        }
        // line 24
        yield "

                ";
        // line 26
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "content", [], "any", false, false, false, 26), 'errors')) {
            // line 27
            yield "                    <div class=\"alert alert-danger\">
                        <p> ";
            // line 28
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "content", [], "any", false, false, false, 28), 'errors');
            yield "</p>
                    </div>
                ";
        }
        // line 31
        yield "
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h1 class=\"mt-4 mb-4\">Create New Thread</h1>

                        ";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_start');
        yield "

                        <div class=\"mb-3\">
                            <p class=\"space-between\"> ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "title", [], "any", false, false, false, 39), 'label');
        yield "  <a href=\"#\" id=\"generate-title-btn\">Generate Title with Ai</a></p>
                            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "title", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "content", [], "any", false, false, false, 44), 'label');
        yield "
                            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "content", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "category", [], "any", false, false, false, 49), 'label');
        yield "
                            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "category", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>


                        <div class=\"mb-3\">
                            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "createdAt", [], "any", false, false, false, 55), 'widget', ["attr" => ["style" => "display:none;"]]);
        yield "
                            ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), 'widget', ["attr" => ["style" => "display:none;"]]);
        yield "
                        </div>

                            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "envoyer", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        yield "


                        ";
        // line 62
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
                <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_threads_index");
        yield "\" class=\"btn btn-secondary mt-4\">Back to List</a>

            </div>

        </div>

    </div>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js\" integrity=\"sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script src=\"https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js\"></script>

    <script>
        document.getElementById('generate-title-btn').addEventListener('click', function() {
            // Get CKEditor instance
            var editor = CKEDITOR.instances.threads_content;

            if (editor) {
                // Get the content from CKEditor
                var content = editor.getData();

                // Call chatGPTRequest function with the content
                chatGPTRequest(content);
            } else {
                console.error('CKEditor instance not found');
            }
        });

        function chatGPTRequest(content) {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'https://chatgpt-api8.p.rapidapi.com/', true);
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.setRequestHeader('X-RapidAPI-Host', 'chatgpt-api8.p.rapidapi.com');
            xhr.setRequestHeader('X-RapidAPI-Key', '8433d15735msh2702a52a05e99bdp1e7f6djsn60b6c77343ce');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Extract the generated title from the response
                        var responseData = JSON.parse(xhr.responseText);
                        var title = responseData.text.replace(/\"/g, '');
                        // Check if the title is not null or empty
                        if (title) {
                            // Update the form field with the generated title
                            document.getElementById('threads_title').value = title;

                        } else {
                            console.error('Generated title is null or empty');
                        }
                    } else {
                        console.error('Error:', xhr.statusText);
                    }
                }
            };
            xhr.send(JSON.stringify([{ \"content\": \"Give me thread title for this article(Direct output only make it short and without quotations):\"+content, \"role\": \"user\" }]));
        }
    </script>
<style>

    #generate-title-btn{    background: linear-gradient(90deg, rgba(241, 114, 169, 1) 0%, rgba(98, 162, 237, 1) 100%);
        color: white;
        padding: .25em 1rem;
        border-radius: .5em;}

    .space-between{
        display: flex;
        justify-content: space-between;
        align-items: center;}
</style>


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
        return "threads/new.html.twig";
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
        return array (  213 => 65,  207 => 62,  201 => 59,  195 => 56,  191 => 55,  183 => 50,  179 => 49,  172 => 45,  168 => 44,  161 => 40,  157 => 39,  151 => 36,  144 => 31,  138 => 28,  135 => 27,  133 => 26,  129 => 24,  123 => 21,  120 => 20,  118 => 19,  113 => 16,  104 => 13,  101 => 12,  97 => 11,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Create New Thread{% endblock %}

{% block body %}
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-md-6 offset-md-3\">

                {% for flash_message in app.flashes('danger') %}
                    <div class=\"alert alert-danger\">
                        {{ flash_message }}
                    </div>
                {% endfor %}



                {% if form_errors(form.title) %}
                    <div class=\"alert alert-danger\">
                        <p> {{ form_errors(form.title) }}</p>
                    </div>
                {% endif %}


                {% if form_errors(form.content) %}
                    <div class=\"alert alert-danger\">
                        <p> {{ form_errors(form.content) }}</p>
                    </div>
                {% endif %}

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h1 class=\"mt-4 mb-4\">Create New Thread</h1>

                        {{ form_start(form) }}

                        <div class=\"mb-3\">
                            <p class=\"space-between\"> {{ form_label(form.title) }}  <a href=\"#\" id=\"generate-title-btn\">Generate Title with Ai</a></p>
                            {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}
                        </div>

                        <div class=\"mb-3\">
                            {{ form_label(form.content) }}
                            {{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}
                        </div>

                        <div class=\"mb-3\">
                            {{ form_label(form.category) }}
                            {{ form_widget(form.category, {'attr': {'class': 'form-control'}}) }}
                        </div>


                        <div class=\"mb-3\">
                            {{ form_widget(form.createdAt, {'attr': {'style': 'display:none;'}}) }}
                            {{ form_widget(form.user, {'attr': {'style': 'display:none;'}}) }}
                        </div>

                            {{ form_widget(form.envoyer, {'attr': {'class': 'btn btn-primary'}}) }}


                        {{ form_end(form) }}
                    </div>
                </div>
                <a href=\"{{ path('app_threads_index') }}\" class=\"btn btn-secondary mt-4\">Back to List</a>

            </div>

        </div>

    </div>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js\" integrity=\"sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script src=\"https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js\"></script>

    <script>
        document.getElementById('generate-title-btn').addEventListener('click', function() {
            // Get CKEditor instance
            var editor = CKEDITOR.instances.threads_content;

            if (editor) {
                // Get the content from CKEditor
                var content = editor.getData();

                // Call chatGPTRequest function with the content
                chatGPTRequest(content);
            } else {
                console.error('CKEditor instance not found');
            }
        });

        function chatGPTRequest(content) {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'https://chatgpt-api8.p.rapidapi.com/', true);
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.setRequestHeader('X-RapidAPI-Host', 'chatgpt-api8.p.rapidapi.com');
            xhr.setRequestHeader('X-RapidAPI-Key', '8433d15735msh2702a52a05e99bdp1e7f6djsn60b6c77343ce');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Extract the generated title from the response
                        var responseData = JSON.parse(xhr.responseText);
                        var title = responseData.text.replace(/\"/g, '');
                        // Check if the title is not null or empty
                        if (title) {
                            // Update the form field with the generated title
                            document.getElementById('threads_title').value = title;

                        } else {
                            console.error('Generated title is null or empty');
                        }
                    } else {
                        console.error('Error:', xhr.statusText);
                    }
                }
            };
            xhr.send(JSON.stringify([{ \"content\": \"Give me thread title for this article(Direct output only make it short and without quotations):\"+content, \"role\": \"user\" }]));
        }
    </script>
<style>

    #generate-title-btn{    background: linear-gradient(90deg, rgba(241, 114, 169, 1) 0%, rgba(98, 162, 237, 1) 100%);
        color: white;
        padding: .25em 1rem;
        border-radius: .5em;}

    .space-between{
        display: flex;
        justify-content: space-between;
        align-items: center;}
</style>


{% endblock %}
", "threads/new.html.twig", "C:\\Users\\Med\\Downloads\\techterra-Gestion-Evenement\\techterra-Gestion-Evenement\\templates\\threads\\new.html.twig");
    }
}
