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

/* threads/show.html.twig */
class __TwigTemplate_81c92af31b6319bcdc9b5c392a7d0cbe extends Template
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

        yield "Thread Details";
        
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
            <style>.sticky-top{top:39px !important;}
                #google_translate_element img {
                    display: none;
                }

                 .btn-del{
                     display: flex;
                     background: red;
                     width: fit-content;
                     margin-top: 1rem;
                     border-radius: .5em;
                     color: white;
                     border:0;
                     padding: .5rem;
                 }
            </style>

            <div id=\"google_translate_element\"></div>


            <script type=\"text/javascript\" src=\"//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\"></script>
            <script src=\"https://static.elfsight.com/platform/platform.js\" data-use-service-core defer></script>
            <div class=\"elfsight-app-dd613778-eeb3-4c38-8584-d307e5dace87\" data-elfsight-app-lazy></div>


            <div class=\"col-md-8 offset-md-2\">
                ";
        // line 34
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 34, $this->source); })()), "content", [], "any", false, false, false, 34), 'errors')) {
            // line 35
            yield "                    <div class=\"alert alert-danger\">
                        <p> ";
            // line 36
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 36, $this->source); })()), "content", [], "any", false, false, false, 36), 'errors');
            yield "</p>
                    </div>
                ";
        }
        // line 39
        yield "                <div >
                    <!-- Trust progress bar -->
                    ";
        // line 41
        $context["trust"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 41, $this->source); })()), "upvotes", [], "any", false, false, false, 41) + 1) / ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 41, $this->source); })()), "upvotes", [], "any", false, false, false, 41) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 41, $this->source); })()), "downvotes", [], "any", false, false, false, 41)) + 2)) * 100);
        // line 42
        yield "                    ";
        $context["progress_bar_color"] = ((((isset($context["trust"]) || array_key_exists("trust", $context) ? $context["trust"] : (function () { throw new RuntimeError('Variable "trust" does not exist.', 42, $this->source); })()) < 25)) ? ("bg-danger") : (((((isset($context["trust"]) || array_key_exists("trust", $context) ? $context["trust"] : (function () { throw new RuntimeError('Variable "trust" does not exist.', 42, $this->source); })()) < 50)) ? ("bg-warning") : (((((isset($context["trust"]) || array_key_exists("trust", $context) ? $context["trust"] : (function () { throw new RuntimeError('Variable "trust" does not exist.', 42, $this->source); })()) < 75)) ? ("bg-info") : ("bg-success"))))));
        // line 43
        yield "                    <div class=\"progress mt-3\">
                        <div class=\"progress-bar ";
        // line 44
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["progress_bar_color"]) || array_key_exists("progress_bar_color", $context) ? $context["progress_bar_color"] : (function () { throw new RuntimeError('Variable "progress_bar_color" does not exist.', 44, $this->source); })()), "html", null, true);
        yield "\" role=\"progressbar\" style=\"width: ";
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["trust"]) || array_key_exists("trust", $context) ? $context["trust"] : (function () { throw new RuntimeError('Variable "trust" does not exist.', 44, $this->source); })()), "html", null, true);
        yield "%;\" aria-valuenow=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["trust"]) || array_key_exists("trust", $context) ? $context["trust"] : (function () { throw new RuntimeError('Variable "trust" does not exist.', 44, $this->source); })()), "html", null, true);
        yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>


                </div>
                <div class=\"card mt-5\">

                    <div class=\"card-header\">


                        <div class=\"row\">
                            <div class=\"col-auto\">

                        ";
        // line 57
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["voteForm"]) || array_key_exists("voteForm", $context) ? $context["voteForm"] : (function () { throw new RuntimeError('Variable "voteForm" does not exist.', 57, $this->source); })()), 'form_start');
        yield "
                        ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voteForm"]) || array_key_exists("voteForm", $context) ? $context["voteForm"] : (function () { throw new RuntimeError('Variable "voteForm" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), 'widget', ["attr" => ["style" => "display:none;"]]);
        yield "
                        ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["voteForm"]) || array_key_exists("voteForm", $context) ? $context["voteForm"] : (function () { throw new RuntimeError('Variable "voteForm" does not exist.', 59, $this->source); })()), "threads", [], "any", false, false, false, 59), 'widget', ["attr" => ["style" => "display:none;"]]);
        yield "
                        <input type=\"hidden\" id=\"voteType\" name=\"voteType\" value=\"\">
                        <button type=\"submit\" id=\"submit-btn\" style=\"display: none;\">Vote</button>
                        ";
        // line 62
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["voteForm"]) || array_key_exists("voteForm", $context) ? $context["voteForm"] : (function () { throw new RuntimeError('Variable "voteForm" does not exist.', 62, $this->source); })()), 'form_end');
        yield "

                            </div>
                            <div class=\"col\">

                        <h2 class=\"card-title\">";
        // line 67
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 67, $this->source); })()), "title", [], "any", false, false, false, 67), "html", null, true);
        yield "</h2>
                                <hr>
                                <div class=\"d-flex justify-content-between\">
                                    <p>";
        // line 70
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 70, $this->source); })()), "countVotesAsString", [], "method", false, false, false, 70), "html", null, true);
        yield "</p>

                                    <p class=\"card-text text-muted\">";
        // line 72
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 72, $this->source); })()), "createdAt", [], "any", false, false, false, 72)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 72, $this->source); })()), "createdAt", [], "any", false, false, false, 72), "Y-m-d H:i"), "html", null, true)) : (yield ""));
        yield "</p>

                                </div>


                        </div>

                        </div>

                    </div>
                    <div class=\"card-body\">
                        <p class=\"card-text\">";
        // line 83
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 83, $this->source); })()), "content", [], "any", false, false, false, 83);
        yield "</p>
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_threads_index");
        yield "\" class=\"btn btn-secondary\"><i class=\"bi bi-arrow-left\"></i> Back to List</a>
                        <button class=\"btn btn-dark\" id=\"print-btn\">🖨️</button>

                        <a href=\"";
        // line 89
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_threads_edit", ["threadId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 89, $this->source); })()), "threadId", [], "any", false, false, false, 89)]), "html", null, true);
        yield "\" class=\"btn btn-primary\"><i class=\"bi bi-pencil\"></i> Edit</a>
                        ";
        // line 90
        yield Twig\Extension\CoreExtension::include($this->env, $context, "threads/_delete_form.html.twig");
        yield "

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


                        function googleTranslateElementInit() {
                        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                    }
                </script>


                <div class=\"card mt-3\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">Add a Comment</h3>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 127
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 127, $this->source); })()), 'form_start', ["attr" => ["id" => "comment-form"]]);
        yield "
                        ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 128, $this->source); })()), "content", [], "any", false, false, false, 128), 'widget');
        yield "
                        ";
        // line 129
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 129, $this->source); })()), "createdAt", [], "any", false, false, false, 129), 'widget', ["attr" => ["style" => "display:none;"]]);
        yield "
                        ";
        // line 130
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 130, $this->source); })()), "user", [], "any", false, false, false, 130), 'widget', ["attr" => ["style" => "display:none;"]]);
        yield "
                        ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 131, $this->source); })()), "threads", [], "any", false, false, false, 131), 'widget', ["attr" => ["style" => "display:none;"]]);
        yield "

                        ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 133, $this->source); })()), "envoyer", [], "any", false, false, false, 133), 'widget', ["attr" => ["class" => "btn btn-primary mt-3"]]);
        yield "
                        ";
        // line 134
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 134, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
                <hr>
                <h3 class=\"mt-5\">Comments</h3>
                ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 139, $this->source); })()), "replies", [], "any", false, false, false, 139));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 140
            yield "                    <div class=\"card mt-3\">

                        <div class=\"card-header\" style=\"display: flex;align-items: center;justify-content: space-between;\">
                            <span><i class=\"bi bi-person me-1\"></i>
                                ";
            // line 144
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 144), "html", null, true);
            yield "
                            </span>


                            <span class=\"text-muted\">
                               <i class=\"bi bi-clock me-1\"></i>

                                ";
            // line 151
            ((CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 151)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 151), "Y-m-d H:i"), "html", null, true)) : (yield ""));
            yield "

                                ";
            // line 153
            if (((isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 153, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 153))) {
                // line 154
                yield "
<a href=\"";
                // line 155
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_reply_delete", ["threadId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 155, $this->source); })()), "threadId", [], "any", false, false, false, 155), "replyId" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "replyId", [], "any", false, false, false, 155)]), "html", null, true);
                yield "\" class=\"btn btn-danger ms-2\" onclick=\"event.preventDefault(); document.getElementById('delete-form-";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "replyId", [], "any", false, false, false, 155), "html", null, true);
                yield "').submit();\"><i class=\"bi bi-trash\"></i></a>

<form id=\"delete-form-";
                // line 157
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "replyId", [], "any", false, false, false, 157), "html", null, true);
                yield "\" action=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_reply_delete", ["threadId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 157, $this->source); })()), "threadId", [], "any", false, false, false, 157), "replyId" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "replyId", [], "any", false, false, false, 157)]), "html", null, true);
                yield "\" method=\"POST\" style=\"display: none;\">
    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 158
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "replyId", [], "any", false, false, false, 158))), "html", null, true);
                yield "\">
</form>
                                ";
            }
            // line 161
            yield "</span>

                        </div>

                        <div class=\"card-body\">
                            <p class=\"card-text\">";
            // line 166
            yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 166);
            yield "</p>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        yield "            </div>
        </div>
    </div>
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
        return array (  365 => 170,  355 => 166,  348 => 161,  342 => 158,  336 => 157,  329 => 155,  326 => 154,  324 => 153,  319 => 151,  309 => 144,  303 => 140,  299 => 139,  291 => 134,  287 => 133,  282 => 131,  278 => 130,  274 => 129,  270 => 128,  266 => 127,  226 => 90,  222 => 89,  216 => 86,  210 => 83,  196 => 72,  191 => 70,  185 => 67,  177 => 62,  171 => 59,  167 => 58,  163 => 57,  143 => 44,  140 => 43,  137 => 42,  135 => 41,  131 => 39,  125 => 36,  122 => 35,  120 => 34,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Thread Details{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <style>.sticky-top{top:39px !important;}
                #google_translate_element img {
                    display: none;
                }

                 .btn-del{
                     display: flex;
                     background: red;
                     width: fit-content;
                     margin-top: 1rem;
                     border-radius: .5em;
                     color: white;
                     border:0;
                     padding: .5rem;
                 }
            </style>

            <div id=\"google_translate_element\"></div>


            <script type=\"text/javascript\" src=\"//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\"></script>
            <script src=\"https://static.elfsight.com/platform/platform.js\" data-use-service-core defer></script>
            <div class=\"elfsight-app-dd613778-eeb3-4c38-8584-d307e5dace87\" data-elfsight-app-lazy></div>


            <div class=\"col-md-8 offset-md-2\">
                {% if form_errors(commentForm.content) %}
                    <div class=\"alert alert-danger\">
                        <p> {{ form_errors(commentForm.content) }}</p>
                    </div>
                {% endif %}
                <div >
                    <!-- Trust progress bar -->
                    {% set trust = (thread.upvotes + 1) / (thread.upvotes + thread.downvotes + 2) * 100 %}
                    {% set progress_bar_color = trust < 25 ? 'bg-danger' : trust < 50 ? 'bg-warning' : trust < 75 ? 'bg-info' : 'bg-success' %}
                    <div class=\"progress mt-3\">
                        <div class=\"progress-bar {{ progress_bar_color }}\" role=\"progressbar\" style=\"width: {{ trust }}%;\" aria-valuenow=\"{{ trust }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>


                </div>
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
                        <button class=\"btn btn-dark\" id=\"print-btn\">🖨️</button>

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


                        function googleTranslateElementInit() {
                        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                    }
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

                                {% if currentUser == comment.user %}

<a href=\"{{ path('front_reply_delete', {'threadId': thread.threadId, 'replyId': comment.replyId}) }}\" class=\"btn btn-danger ms-2\" onclick=\"event.preventDefault(); document.getElementById('delete-form-{{ comment.replyId }}').submit();\"><i class=\"bi bi-trash\"></i></a>

<form id=\"delete-form-{{ comment.replyId }}\" action=\"{{ path('front_reply_delete', {'threadId': thread.threadId, 'replyId': comment.replyId}) }}\" method=\"POST\" style=\"display: none;\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ comment.replyId) }}\">
</form>
                                {% endif %}
</span>

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
