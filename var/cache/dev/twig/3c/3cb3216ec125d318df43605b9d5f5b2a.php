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
                <div class=\"card mt-5\">
                    <div class=\"card-header\">

                        <div class=\"row\">
                            <div class=\"col-auto\">

                        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["voteForm"]) || array_key_exists("voteForm", $context) ? $context["voteForm"] : (function () { throw new RuntimeError('Variable "voteForm" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
                        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["voteForm"]) || array_key_exists("voteForm", $context) ? $context["voteForm"] : (function () { throw new RuntimeError('Variable "voteForm" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), 'widget', ["attr" => ["style" => "display:none;"]]);
        echo "
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["voteForm"]) || array_key_exists("voteForm", $context) ? $context["voteForm"] : (function () { throw new RuntimeError('Variable "voteForm" does not exist.', 17, $this->source); })()), "threads", [], "any", false, false, false, 17), 'widget', ["attr" => ["style" => "display:none;"]]);
        echo "
                        <input type=\"hidden\" id=\"voteType\" name=\"voteType\" value=\"\">
                        <button type=\"submit\" id=\"submit-btn\" style=\"display: none;\">Vote</button>
                        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["voteForm"]) || array_key_exists("voteForm", $context) ? $context["voteForm"] : (function () { throw new RuntimeError('Variable "voteForm" does not exist.', 20, $this->source); })()), 'form_end');
        echo "

                            </div>
                            <div class=\"col\">

                        <h2 class=\"card-title\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 25, $this->source); })()), "title", [], "any", false, false, false, 25), "html", null, true);
        echo "</h2>
                                <hr>
                                <div class=\"d-flex justify-content-between\">
                                    <p>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 28, $this->source); })()), "countVotesAsString", [], "method", false, false, false, 28), "html", null, true);
        echo "</p>

                                    <p class=\"card-text text-muted\">";
        // line 30
        ((twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 30, $this->source); })()), "createdAt", [], "any", false, false, false, 30)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 30, $this->source); })()), "createdAt", [], "any", false, false, false, 30), "Y-m-d H:i"), "html", null, true))) : (print ("")));
        echo "</p>

                                </div>


                        </div>

                        </div>

                    </div>
                    <div class=\"card-body\">
                        <p class=\"card-text\">";
        // line 41
        echo twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 41, $this->source); })()), "content", [], "any", false, false, false, 41);
        echo "</p>
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_threads_index");
        echo "\" class=\"btn btn-secondary\"><i class=\"bi bi-arrow-left\"></i> Back to List</a>
                        <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_threads_edit", ["threadId" => twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 45, $this->source); })()), "threadId", [], "any", false, false, false, 45)]), "html", null, true);
        echo "\" class=\"btn btn-primary\"><i class=\"bi bi-pencil\"></i> Edit</a>
                        ";
        // line 46
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
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 77, $this->source); })()), 'form_start', ["attr" => ["id" => "comment-form"]]);
        echo "
                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 78, $this->source); })()), "content", [], "any", false, false, false, 78), 'widget');
        echo "
                        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 79, $this->source); })()), "createdAt", [], "any", false, false, false, 79), 'widget', ["attr" => ["style" => "display:none;"]]);
        echo "
                        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80), 'widget', ["attr" => ["style" => "display:none;"]]);
        echo "
                        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 81, $this->source); })()), "threads", [], "any", false, false, false, 81), 'widget', ["attr" => ["style" => "display:none;"]]);
        echo "

                        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 83, $this->source); })()), "envoyer", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "btn btn-primary mt-3"]]);
        echo "
                        ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 84, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
                <hr>
                <h3 class=\"mt-5\">Comments</h3>
                ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 89, $this->source); })()), "replies", [], "any", false, false, false, 89));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 90
            echo "                    <div class=\"card mt-3\">

                        <div class=\"card-header\" style=\"display: flex;align-items: center;justify-content: space-between;\">
                            <span><i class=\"bi bi-person me-1\"></i>
                                ";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 94), "html", null, true);
            echo "
                            </span>


                            <span class=\"text-muted\">
                               <i class=\"bi bi-clock me-1\"></i>

                                ";
            // line 101
            ((twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 101)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 101), "Y-m-d H:i"), "html", null, true))) : (print ("")));
            echo "
<a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_reply_delete", ["threadId" => twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 102, $this->source); })()), "threadId", [], "any", false, false, false, 102), "replyId" => twig_get_attribute($this->env, $this->source, $context["comment"], "replyId", [], "any", false, false, false, 102)]), "html", null, true);
            echo "\" class=\"btn btn-danger ms-2\" onclick=\"event.preventDefault(); document.getElementById('delete-form-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "replyId", [], "any", false, false, false, 102), "html", null, true);
            echo "').submit();\"><i class=\"bi bi-trash\"></i></a>

<form id=\"delete-form-";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "replyId", [], "any", false, false, false, 104), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_reply_delete", ["threadId" => twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 104, $this->source); })()), "threadId", [], "any", false, false, false, 104), "replyId" => twig_get_attribute($this->env, $this->source, $context["comment"], "replyId", [], "any", false, false, false, 104)]), "html", null, true);
            echo "\" method=\"POST\" style=\"display: none;\">
    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["comment"], "replyId", [], "any", false, false, false, 105))), "html", null, true);
            echo "\">
</form>                            </span>

                        </div>

                        <div class=\"card-body\">
                            <p class=\"card-text\">";
            // line 111
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 111);
            echo "</p>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
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
        return array (  283 => 115,  273 => 111,  264 => 105,  258 => 104,  251 => 102,  247 => 101,  237 => 94,  231 => 90,  227 => 89,  219 => 84,  215 => 83,  210 => 81,  206 => 80,  202 => 79,  198 => 78,  194 => 77,  160 => 46,  156 => 45,  152 => 44,  146 => 41,  132 => 30,  127 => 28,  121 => 25,  113 => 20,  107 => 17,  103 => 16,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Thread Details{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 offset-md-2\">
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
