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

/* admin/product/Productlist.html.twig */
class __TwigTemplate_852a1836af2e084ec263fa0b435e1dd0 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/Productlist.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/Productlist.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/product/Productlist.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Products";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "<div class=\"row\">
                        <h3>Our Market</h3>

    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["Products"]) || array_key_exists("Products", $context) ? $context["Products"] : (function () { throw new RuntimeError('Variable "Products" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 11
            yield "    <div class=\"col-md-3 mb-4\">
        <div class=\"card\">
            <img src=\"";
            // line 13
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 13))), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"Product Image\" style=\"max-height: 200px; object-fit: cover;\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">";
            // line 15
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15), "html", null, true);
            yield "</h5>
                <p class=\"card-text\">Description: ";
            // line 16
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 16), "html", null, true);
            yield "</p>
                <p class=\"card-text\">Price: ";
            // line 17
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 17), "html", null, true);
            yield "</p>
                <p class=\"card-text\">Quantity: ";
            // line 18
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 18), "html", null, true);
            yield "</p>
               <a href =\"";
            // line 19
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Product_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Update</a> 
                <a href =\"";
            // line 20
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Product_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Delete</a> 
                <a href=\"";
            // line 21
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Add to cart</a>


            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "</div>
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
        return "admin/product/Productlist.html.twig";
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
        return array (  145 => 28,  132 => 21,  128 => 20,  124 => 19,  120 => 18,  116 => 17,  112 => 16,  108 => 15,  103 => 13,  99 => 11,  95 => 10,  90 => 7,  80 => 6,  60 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/product/Productlist.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Products{% endblock %}
{% block body %}
<div class=\"row\">
                        <h3>Our Market</h3>

    {% for product in Products %}
    <div class=\"col-md-3 mb-4\">
        <div class=\"card\">
            <img src=\"{{ asset('uploads/products/' ~ product.image) }}\" class=\"card-img-top\" alt=\"Product Image\" style=\"max-height: 200px; object-fit: cover;\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">{{ product.name }}</h5>
                <p class=\"card-text\">Description: {{ product.description }}</p>
                <p class=\"card-text\">Price: {{ product.price }}</p>
                <p class=\"card-text\">Quantity: {{ product.quantity }}</p>
               <a href =\"{{ path('Product_update', {'id': product.id}) }}\" class=\"btn btn-primary\">Update</a> 
                <a href =\"{{ path('Product_delete', {'id': product.id}) }}\" class=\"btn btn-primary\">Delete</a> 
                <a href=\"{{ path('add_to_cart', {'id': product.id}) }}\" class=\"btn btn-primary\">Add to cart</a>


            </div>
        </div>
    </div>
    {% endfor %}
</div>
{% endblock %}
", "admin/product/Productlist.html.twig", "C:\\Users\\USER\\Desktop\\techterra\\templates\\admin\\product\\Productlist.html.twig");
    }
}
