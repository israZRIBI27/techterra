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

/* threads/show.html.twig */
class __TwigTemplate_13d5a7cd1760ca3b426c0fc98b365f05 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "threads/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "threads/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "threads/show.html.twig", 1);
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

        echo "Thread Details";
        
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
        <div class=\"row\">
            <div class=\"col-md-8 offset-md-2\">
                ";
        // line 9
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 9, $this->source); })()), "content", [], "any", false, false, false, 9), 'errors')) {
            // line 10
            echo "                    <div class=\"alert alert-danger\">
                        <p> ";
            // line 11
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 11, $this->source); })()), "content", [], "any", false, false, false, 11), 'errors');
            echo "</p>
                    </div>
                ";
        }
        // line 14
        echo "                <div class=\"card mt-5\">

                    <div class=\"card-header\">


                        <div class=\"row\">
                            <div class=\"col-auto\">

                        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["voteForm"]) || array_key_exists("voteForm", $context) ? $context["voteForm"] : (function () { throw new RuntimeError('Variable "voteForm" does not exist.', 22, $this->source); })()), 'form_start');
        echo "
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["voteForm"]) || array_key_exists("voteForm", $context) ? $context["voteForm"] : (function () { throw new RuntimeError('Variable "voteForm" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), 'widget', ["attr" => ["style" => "display:none;"]]);
        echo "
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["voteForm"]) || array_key_exists("voteForm", $context) ? $context["voteForm"] : (function () { throw new RuntimeError('Variable "voteForm" does not exist.', 24, $this->source); })()), "threads", [], "any", false, false, false, 24), 'widget', ["attr" => ["style" => "display:none;"]]);
        echo "
                        <input type=\"hidden\" id=\"voteType\" name=\"voteType\" value=\"\">
                        <button type=\"submit\" id=\"submit-btn\" style=\"display: none;\">Vote</button>
                        ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["voteForm"]) || array_key_exists("voteForm", $context) ? $context["voteForm"] : (function () { throw new RuntimeError('Variable "voteForm" does not exist.', 27, $this->source); })()), 'form_end');
        echo "

                            </div>
                            <div class=\"col\">

                        <h2 class=\"card-title\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 32, $this->source); })()), "title", [], "any", false, false, false, 32), "html", null, true);
        echo "</h2>
                                <hr>
                                <div class=\"d-flex justify-content-between\">
                                    <p>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 35, $this->source); })()), "countVotesAsString", [], "method", false, false, false, 35), "html", null, true);
        echo "</p>

                                    <p class=\"card-text text-muted\">";
        // line 37
        ((twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 37, $this->source); })()), "createdAt", [], "any", false, false, false, 37)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 37, $this->source); })()), "createdAt", [], "any", false, false, false, 37), "Y-m-d H:i"), "html", null, true))) : (print ("")));
        echo "</p>

                                </div>


                        </div>

                        </div>

                    </div>
                    <div class=\"card-body\">
                        <p class=\"card-text\">";
        // line 48
        echo twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 48, $this->source); })()), "content", [], "any", false, false, false, 48);
        echo "</p>
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_threads_index");
        echo "\" class=\"btn btn-secondary\"><i class=\"bi bi-arrow-left\"></i> Back to List</a>
                        <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_threads_edit", ["threadId" => twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 52, $this->source); })()), "threadId", [], "any", false, false, false, 52)]), "html", null, true);
        echo "\" class=\"btn btn-primary\"><i class=\"bi bi-pencil\"></i> Edit</a>
                        ";
        // line 53
        echo twig_include($this->env, $context, "threads/_delete_form.html.twig");
        echo "
                    </div>
                </div>
                <hr>





                <script>
                    document.querySelectorAll('.upvote-btn').forEach(button => {
                        button.addEventListener('click', () => {
                            document.getElementById('voteType').value = 'upvote';
                            document.getElementById('submit-btn').click(); // Submit the form
                        });
                    });

                    document.querySelectorAll('.downvote-btn').forEach(button => {
                        button.addEventListener('click', () => {
                            document.getElementById('voteType').value = 'downvote';
                            document.getElementById('submit-btn').click(); // Submit the form
                        });
                    });
                </script>


                <div class=\"card mt-3\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Add a Comment</h3>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 84, $this->source); })()), 'form_start', ["attr" => ["id" => "comment-form"]]);
        echo "
                        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 85, $this->source); })()), "content", [], "any", false, false, false, 85), 'widget');
        echo "
                        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 86, $this->source); })()), "createdAt", [], "any", false, false, false, 86), 'widget', ["attr" => ["style" => "display:none;"]]);
        echo "
                        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), 'widget', ["attr" => ["style" => "display:none;"]]);
        echo "
                        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 88, $this->source); })()), "threads", [], "any", false, false, false, 88), 'widget', ["attr" => ["style" => "display:none;"]]);
        echo "

                        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 90, $this->source); })()), "envoyer", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "btn btn-primary mt-3"]]);
        echo "
                        ";
        // line 91
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 91, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
                <hr>
                <h3 class=\"mt-5\">Comments</h3>
                ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 96, $this->source); })()), "replies", [], "any", false, false, false, 96));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 97
            echo "                    <div class=\"card mt-3\">

                        <div class=\"card-header\" style=\"display: flex;align-items: center;justify-content: space-between;\">
                            <span><i class=\"bi bi-person me-1\"></i>
                                ";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 101), "html", null, true);
            echo "
                            </span>


                            <span class=\"text-muted\">
                               <i class=\"bi bi-clock me-1\"></i>

                                ";
            // line 108
            ((twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 108)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 108), "Y-m-d H:i"), "html", null, true))) : (print ("")));
            echo "
<a href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_reply_delete", ["threadId" => twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 109, $this->source); })()), "threadId", [], "any", false, false, false, 109), "replyId" => twig_get_attribute($this->env, $this->source, $context["comment"], "replyId", [], "any", false, false, false, 109)]), "html", null, true);
            echo "\" class=\"btn btn-danger ms-2\" onclick=\"event.preventDefault(); document.getElementById('delete-form-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "replyId", [], "any", false, false, false, 109), "html", null, true);
            echo "').submit();\"><i class=\"bi bi-trash\"></i></a>

<form id=\"delete-form-";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "replyId", [], "any", false, false, false, 111), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_reply_delete", ["threadId" => twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 111, $this->source); })()), "threadId", [], "any", false, false, false, 111), "replyId" => twig_get_attribute($this->env, $this->source, $context["comment"], "replyId", [], "any", false, false, false, 111)]), "html", null, true);
            echo "\" method=\"POST\" style=\"display: none;\">
    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["comment"], "replyId", [], "any", false, false, false, 112))), "html", null, true);
            echo "\">
</form>                            </span>

                        </div>

                        <div class=\"card-body\">
                            <p class=\"card-text\">";
            // line 118
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 118);
            echo "</p>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "            </div>
        </div>
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
        return "threads/show.html.twig";
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
        return array (  298 => 122,  288 => 118,  279 => 112,  273 => 111,  266 => 109,  262 => 108,  252 => 101,  246 => 97,  242 => 96,  234 => 91,  230 => 90,  225 => 88,  221 => 87,  217 => 86,  213 => 85,  209 => 84,  175 => 53,  171 => 52,  167 => 51,  161 => 48,  147 => 37,  142 => 35,  136 => 32,  128 => 27,  122 => 24,  118 => 23,  114 => 22,  104 => 14,  98 => 11,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Thread Details{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 offset-md-2\">
                {% if form_errors(commentForm.content) %}
                    <div class=\"alert alert-danger\">
                        <p> {{ form_errors(commentForm.content) }}</p>
                    </div>
                {% endif %}
                <div class=\"card mt-5\">

                    <div class=\"card-header\">


                        <div class=\"row\">
                            <div class=\"col-auto\">

                        {{ form_start(voteForm)}}
                        {{ form_widget(voteForm.user, {'attr': {'style': 'display:none;'}}) }}
                        {{ form_widget(voteForm.threads, {'attr': {'style': 'display:none;'}}) }}
                        <input type=\"hidden\" id=\"voteType\" name=\"voteType\" value=\"\">
                        <button type=\"submit\" id=\"submit-btn\" style=\"display: none;\">Vote</button>
                        {{ form_end(voteForm) }}

                            </div>
                            <div class=\"col\">

                        <h2 class=\"card-title\">{{ thread.title }}</h2>
                                <hr>
                                <div class=\"d-flex justify-content-between\">
                                    <p>{{ thread.countVotesAsString() }}</p>

                                    <p class=\"card-text text-muted\">{{ thread.createdAt ? thread.createdAt|date('Y-m-d H:i') : '' }}</p>

                                </div>


                        </div>

                        </div>

                    </div>
                    <div class=\"card-body\">
                        <p class=\"card-text\">{{ thread.content |raw }}</p>
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"{{ path('app_threads_index') }}\" class=\"btn btn-secondary\"><i class=\"bi bi-arrow-left\"></i> Back to List</a>
                        <a href=\"{{ path('app_threads_edit', {'threadId': thread.threadId}) }}\" class=\"btn btn-primary\"><i class=\"bi bi-pencil\"></i> Edit</a>
                        {{ include('threads/_delete_form.html.twig') }}
                    </div>
                </div>
                <hr>





                <script>
                    document.querySelectorAll('.upvote-btn').forEach(button => {
                        button.addEventListener('click', () => {
                            document.getElementById('voteType').value = 'upvote';
                            document.getElementById('submit-btn').click(); // Submit the form
                        });
                    });

                    document.querySelectorAll('.downvote-btn').forEach(button => {
                        button.addEventListener('click', () => {
                            document.getElementById('voteType').value = 'downvote';
                            document.getElementById('submit-btn').click(); // Submit the form
                        });
                    });
                </script>


                <div class=\"card mt-3\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Add a Comment</h3>
                    </div>
                    <div class=\"card-body\">
                        {{ form_start(commentForm, {'attr': {'id': 'comment-form'}}) }}
                        {{ form_widget(commentForm.content) }}
                        {{ form_widget(commentForm.createdAt, {'attr': {'style': 'display:none;'}}) }}
                        {{ form_widget(commentForm.user, {'attr': {'style': 'display:none;'}}) }}
                        {{ form_widget(commentForm.threads, {'attr': {'style': 'display:none;'}}) }}

                        {{ form_widget(commentForm.envoyer, {'attr': {'class': 'btn btn-primary mt-3'}}) }}
                        {{ form_end(commentForm) }}
                    </div>
                </div>
                <hr>
                <h3 class=\"mt-5\">Comments</h3>
                {% for comment in thread.replies %}
                    <div class=\"card mt-3\">

                        <div class=\"card-header\" style=\"display: flex;align-items: center;justify-content: space-between;\">
                            <span><i class=\"bi bi-person me-1\"></i>
                                {{ comment.user }}
                            </span>


                            <span class=\"text-muted\">
                               <i class=\"bi bi-clock me-1\"></i>

                                {{ comment.createdAt ? comment.createdAt|date('Y-m-d H:i') : '' }}
<a href=\"{{ path('front_reply_delete', {'threadId': thread.threadId, 'replyId': comment.replyId}) }}\" class=\"btn btn-danger ms-2\" onclick=\"event.preventDefault(); document.getElementById('delete-form-{{ comment.replyId }}').submit();\"><i class=\"bi bi-trash\"></i></a>

<form id=\"delete-form-{{ comment.replyId }}\" action=\"{{ path('front_reply_delete', {'threadId': thread.threadId, 'replyId': comment.replyId}) }}\" method=\"POST\" style=\"display: none;\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ comment.replyId) }}\">
</form>                            </span>

                        </div>

                        <div class=\"card-body\">
                            <p class=\"card-text\">{{ comment.content|raw }}</p>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}
", "threads/show.html.twig", "C:\\Users\\Med\\Downloads\\techterra-Gestion-Evenement\\techterra-Gestion-Evenement\\templates\\threads\\show.html.twig");
    }
}
