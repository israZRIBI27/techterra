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

/* product/Productlist.html.twig */
class __TwigTemplate_cf23db41eda4b56778396c932f995e4e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/Productlist.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/Productlist.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/Productlist.html.twig", 3);
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

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "

<div class=\"row\">
    <h3>Our Market</h3>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["Products"]) || array_key_exists("Products", $context) ? $context["Products"] : (function () { throw new RuntimeError('Variable "Products" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 13
            yield "    <div class=\"col-md-3 mb-4\">
        <div class=\"card\">
            <img src=\"";
            // line 15
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 15))), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"Product Image\" style=\"max-height: 200px; object-fit: cover;\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">";
            // line 17
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17), "html", null, true);
            yield "</h5>
                <p class=\"card-text\">Description: ";
            // line 18
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 18), "html", null, true);
            yield "</p>
                <p class=\"card-text\">Price: ";
            // line 19
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 19), "html", null, true);
            yield "</p>
                <p class=\"card-text\">Quantity: ";
            // line 20
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 20), "html", null, true);
            yield "</p>
                
                <a href =\"";
            // line 22
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Product_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Update</a> 
                <a href =\"";
            // line 23
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Product_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Delete</a> 
                <button class=\"btn btn-primary\" onclick=\"addToCart(";
            // line 24
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 24), "html", null, true);
            yield ", ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 24), "html", null, true);
            yield ")\">Add to cart</button>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "</div>
";
        // line 30
        yield $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["Products"]) || array_key_exists("Products", $context) ? $context["Products"] : (function () { throw new RuntimeError('Variable "Products" does not exist.', 30, $this->source); })()));
        yield "

<script>
    function addToCart(productId, productQuantity) {
        // Prompt the user if the product quantity is insufficient
        if (productQuantity < 1) {
            alert(\"Sorry, this product is out of stock.\");
            return;
        }

        // Perform AJAX request to add the product to the cart
        // Example AJAX request using fetch API
        fetch(\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => 0]);
        yield "\".replace('0', productId), {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ quantity: 1 }) // You can adjust the quantity here
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to add the product to the cart.');
            }
            // Handle successful response if needed
            // For example, redirect to the cart page or show a success message
            console.log('Product added to the cart successfully!');
        })
        .catch(error => {
            console.error('Error adding product to cart:', error.message);
            // Handle the error condition, e.g., display an error message
        });
    }
</script>
";
        // line 63
        yield $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["Products"]) || array_key_exists("Products", $context) ? $context["Products"] : (function () { throw new RuntimeError('Variable "Products" does not exist.', 63, $this->source); })()));
        yield " <!-- Render pagination controls for products -->
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
        return "product/Productlist.html.twig";
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
        return array (  189 => 63,  165 => 42,  150 => 30,  147 => 29,  134 => 24,  130 => 23,  126 => 22,  121 => 20,  117 => 19,  113 => 18,  109 => 17,  104 => 15,  100 => 13,  96 => 12,  90 => 8,  80 => 7,  60 => 5,  37 => 3,);
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
                <button class=\"btn btn-primary\" onclick=\"addToCart({{ product.id }}, {{ product.quantity }})\">Add to cart</button>
            </div>
        </div>
    </div>
    {% endfor %}
</div>
{{ knp_pagination_render(Products) }}

<script>
    function addToCart(productId, productQuantity) {
        // Prompt the user if the product quantity is insufficient
        if (productQuantity < 1) {
            alert(\"Sorry, this product is out of stock.\");
            return;
        }

        // Perform AJAX request to add the product to the cart
        // Example AJAX request using fetch API
        fetch(\"{{ path('add_to_cart', {'id': 0}) }}\".replace('0', productId), {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ quantity: 1 }) // You can adjust the quantity here
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to add the product to the cart.');
            }
            // Handle successful response if needed
            // For example, redirect to the cart page or show a success message
            console.log('Product added to the cart successfully!');
        })
        .catch(error => {
            console.error('Error adding product to cart:', error.message);
            // Handle the error condition, e.g., display an error message
        });
    }
</script>
{{ knp_pagination_render(Products) }} <!-- Render pagination controls for products -->
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
</style>
{% endblock %}
", "product/Productlist.html.twig", "C:\\Users\\USER\\Desktop\\techterra\\templates\\product\\Productlist.html.twig");
    }
}
