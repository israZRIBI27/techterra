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

/* threads/_threads.html.twig */
class __TwigTemplate_0095b635d967bc9deeda9f9e0d5bae23 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "threads/_threads.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "threads/_threads.html.twig"));

        // line 1
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["threads"]) || array_key_exists("threads", $context) ? $context["threads"] : (function () { throw new RuntimeError('Variable "threads" does not exist.', 1, $this->source); })()))) {
            // line 2
            yield "    <div class=\"row row-cols-1 row-cols-md-2 g-4\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["threads"]) || array_key_exists("threads", $context) ? $context["threads"] : (function () { throw new RuntimeError('Variable "threads" does not exist.', 3, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                // line 4
                yield "            <div class=\"col\">
                <!-- Your thread card HTML -->
            </div>
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 8
                yield "            <div class=\"col\">
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
            // line 16
            yield "    </div>
";
        } else {
            // line 18
            yield "    <p>No threads found.</p>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "threads/_threads.html.twig";
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
        return array (  79 => 18,  75 => 16,  62 => 8,  54 => 4,  49 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if threads is not empty %}
    <div class=\"row row-cols-1 row-cols-md-2 g-4\">
        {% for thread in threads %}
            <div class=\"col\">
                <!-- Your thread card HTML -->
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
", "threads/_threads.html.twig", "C:\\Users\\Med\\Downloads\\techterra-Gestion-Evenement\\techterra-Gestion-Evenement\\templates\\threads\\_threads.html.twig");
    }
}
