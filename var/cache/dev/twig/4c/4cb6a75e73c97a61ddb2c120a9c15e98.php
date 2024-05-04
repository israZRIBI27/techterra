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

/* product/form.html.twig */
class __TwigTemplate_39624b433fd0c9805dbd552de290aa63 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/form.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "    <div class=\"formA-body\">
        <div class=\"row\">
            <div class=\"formA-holder\">
                <div class=\"formA-content\">
                    <div class=\"formA-items\">
                        <h3>Add Product</h3>
                        <p>Fill in the product details below.</p>
                        ";
        // line 12
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["class" => "requires-validation", "novalidate" => true]]);
        yield "
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <div class=\"formA-group\">
                                    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), 'label', ["label_attr" => ["class" => "formA-label"], "label" => "Product Name"]);
        yield "
                                    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "formA-control", "placeholder" => "Product Name", "required" => true]]);
        yield "
                                    ";
        // line 18
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), 'errors')) {
            // line 19
            yield "                                        <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), 'errors');
            yield "</div>
                                    ";
        }
        // line 21
        yield "                                </div>
                            </div>

                            <div class=\"col-md-6 mb-3\">
                                <div class=\"formA-group\">
                                    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 26, $this->source); })()), "price", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "formA-label"], "label" => "Product Price"]);
        yield "
                                    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 27, $this->source); })()), "price", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "formA-control", "placeholder" => "Product Price", "required" => true]]);
        yield "
                                    ";
        // line 28
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 28, $this->source); })()), "price", [], "any", false, false, false, 28), 'errors')) {
            // line 29
            yield "                                        <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 29, $this->source); })()), "price", [], "any", false, false, false, 29), 'errors');
            yield "</div>
                                    ";
        }
        // line 31
        yield "                                </div>
                            </div>

                            <div class=\"col-md-6 mb-3\">
                                <div class=\"formA-group\">
                                    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 36, $this->source); })()), "description", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "formA-label"], "label" => "Product Description"]);
        yield "
                                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 37, $this->source); })()), "description", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "formA-control", "placeholder" => "Product Description", "required" => true]]);
        yield "
                                    ";
        // line 38
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38), 'errors')) {
            // line 39
            yield "                                        <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 39, $this->source); })()), "description", [], "any", false, false, false, 39), 'errors');
            yield "</div>
                                    ";
        }
        // line 41
        yield "                                </div>
                            </div>

                            <div class=\"col-md-6 mb-3\">
                                <div class=\"formA-group\">
                                    ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 46, $this->source); })()), "image", [], "any", false, false, false, 46), 'label', ["label_attr" => ["class" => "formA-label"], "label" => "Product Image"]);
        yield "
                                    ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 47, $this->source); })()), "image", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "formA-control", "placeholder" => "Product Image URL", "required" => true]]);
        yield "
                                    ";
        // line 48
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 48, $this->source); })()), "image", [], "any", false, false, false, 48), 'errors')) {
            // line 49
            yield "                                        <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 49, $this->source); })()), "image", [], "any", false, false, false, 49), 'errors');
            yield "</div>
                                    ";
        }
        // line 51
        yield "                                </div>
                            </div>

                            <div class=\"col-md-6 mb-3\">
                                <div class=\"formA-group\">
                                    ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 56, $this->source); })()), "quantity", [], "any", false, false, false, 56), 'label', ["label_attr" => ["class" => "formA-label"], "label" => "Product quantity"]);
        yield "
                                    ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 57, $this->source); })()), "quantity", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "formA-control", "placeholder" => "Product quantity", "required" => true]]);
        yield "
                                    ";
        // line 58
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 58, $this->source); })()), "quantity", [], "any", false, false, false, 58), 'errors')) {
            // line 59
            yield "                                        <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 59, $this->source); })()), "quantity", [], "any", false, false, false, 59), 'errors');
            yield "</div>
                                    ";
        }
        // line 61
        yield "                                </div>
                            </div>
                            
                        </div>

                        <div class=\"form-group text-right\"> <!-- Alignement du bouton à droite -->
                            <button id=\"submit\" type=\"submit\" class=\"btn btn-primary\">Add Product</button>
                        </div>
                        ";
        // line 69
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formA"]) || array_key_exists("formA", $context) ? $context["formA"] : (function () { throw new RuntimeError('Variable "formA" does not exist.', 69, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
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
        return "product/form.html.twig";
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
        return array (  203 => 69,  193 => 61,  187 => 59,  185 => 58,  181 => 57,  177 => 56,  170 => 51,  164 => 49,  162 => 48,  158 => 47,  154 => 46,  147 => 41,  141 => 39,  139 => 38,  135 => 37,  131 => 36,  124 => 31,  118 => 29,  116 => 28,  112 => 27,  108 => 26,  101 => 21,  95 => 19,  93 => 18,  89 => 17,  85 => 16,  78 => 12,  69 => 5,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/product/form.html.twig #}
{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"formA-body\">
        <div class=\"row\">
            <div class=\"formA-holder\">
                <div class=\"formA-content\">
                    <div class=\"formA-items\">
                        <h3>Add Product</h3>
                        <p>Fill in the product details below.</p>
                        {{ form_start(formA, {'attr': {'class': 'requires-validation', 'novalidate': true}}) }}
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <div class=\"formA-group\">
                                    {{ form_label(formA.name, 'Product Name', {'label_attr': {'class': 'formA-label'}}) }}
                                    {{ form_widget(formA.name, {'attr': {'class': 'formA-control', 'placeholder': 'Product Name', 'required': true}}) }}
                                    {% if form_errors(formA.name) %}
                                        <div class=\"alert alert-danger\">{{ form_errors(formA.name) }}</div>
                                    {% endif %}
                                </div>
                            </div>

                            <div class=\"col-md-6 mb-3\">
                                <div class=\"formA-group\">
                                    {{ form_label(formA.price, 'Product Price', {'label_attr': {'class': 'formA-label'}}) }}
                                    {{ form_widget(formA.price, {'attr': {'class': 'formA-control', 'placeholder': 'Product Price', 'required': true}}) }}
                                    {% if form_errors(formA.price) %}
                                        <div class=\"alert alert-danger\">{{ form_errors(formA.price) }}</div>
                                    {% endif %}
                                </div>
                            </div>

                            <div class=\"col-md-6 mb-3\">
                                <div class=\"formA-group\">
                                    {{ form_label(formA.description, 'Product Description', {'label_attr': {'class': 'formA-label'}}) }}
                                    {{ form_widget(formA.description, {'attr': {'class': 'formA-control', 'placeholder': 'Product Description', 'required': true}}) }}
                                    {% if form_errors(formA.description) %}
                                        <div class=\"alert alert-danger\">{{ form_errors(formA.description) }}</div>
                                    {% endif %}
                                </div>
                            </div>

                            <div class=\"col-md-6 mb-3\">
                                <div class=\"formA-group\">
                                    {{ form_label(formA.image, 'Product Image', {'label_attr': {'class': 'formA-label'}}) }}
                                    {{ form_widget(formA.image, {'attr': {'class': 'formA-control', 'placeholder': 'Product Image URL', 'required': true}}) }}
                                    {% if form_errors(formA.image) %}
                                        <div class=\"alert alert-danger\">{{ form_errors(formA.image) }}</div>
                                    {% endif %}
                                </div>
                            </div>

                            <div class=\"col-md-6 mb-3\">
                                <div class=\"formA-group\">
                                    {{ form_label(formA.quantity, 'Product quantity', {'label_attr': {'class': 'formA-label'}}) }}
                                    {{ form_widget(formA.quantity, {'attr': {'class': 'formA-control', 'placeholder': 'Product quantity', 'required': true}}) }}
                                    {% if form_errors(formA.quantity) %}
                                        <div class=\"alert alert-danger\">{{ form_errors(formA.quantity) }}</div>
                                    {% endif %}
                                </div>
                            </div>
                            
                        </div>

                        <div class=\"form-group text-right\"> <!-- Alignement du bouton à droite -->
                            <button id=\"submit\" type=\"submit\" class=\"btn btn-primary\">Add Product</button>
                        </div>
                        {{ form_end(formA) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "product/form.html.twig", "C:\\Users\\USER\\Desktop\\techterra\\templates\\product\\form.html.twig");
    }
}
