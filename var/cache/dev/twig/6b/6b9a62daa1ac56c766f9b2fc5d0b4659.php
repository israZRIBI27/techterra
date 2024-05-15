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

/* Product/listProductC.html.twig */
class __TwigTemplate_81f38c8b30530e9d0751db235d290c7c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Product/listProductC.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Product/listProductC.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Product/listProductC.html.twig", 1);
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

        yield "Products";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 4
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        yield "    <script>
        document.getElementById('currency').addEventListener('change', function() {
            var currency = this.value;
            var prixUnitaireCells = document.querySelectorAll('.price');

            prixUnitaireCells.forEach(function(cell) {
                var originalPriceTND = parseFloat(cell.dataset.originalPriceTnd);
                if (!isNaN(originalPriceTND)) {
                    var convertedPrice;
                    switch (currency) {
                        case 'TND':
                            convertedPrice = originalPriceTND;
                            break;
                        case 'USD':
                            convertedPrice = originalPriceTND * 0.36; // Conversion rate from TND to USD
                            break;
                        case 'Euro':
                            convertedPrice = originalPriceTND * 0.30; // Conversion rate from TND to Euro
                            break;
                        case 'Yen':
                            convertedPrice = originalPriceTND * 40.36; // Conversion rate from TND to Yen
                            break;
                        default:
                            convertedPrice = originalPriceTND;
                    }
                    cell.textContent = convertedPrice.toFixed(2) + ' ' + currency;
                }
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 39
        yield "<div class=\"row\">


<div style=\"display: flex;justify-content: space-between;\">
<h3>Our Market</h3>

        


        ";
        // line 49
        yield "        <form action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Panier_show");
        yield "\" method=\"get\" class=\"mb-3\">
            <button type=\"submit\" class=\"btn btn-primary mb-2 ";
        // line 50
        if ((isset($context["panierNonVide"]) || array_key_exists("panierNonVide", $context) ? $context["panierNonVide"] : (function () { throw new RuntimeError('Variable "panierNonVide" does not exist.', 50, $this->source); })())) {
            yield "animated";
        }
        yield "\">View Cart</button>
        </form>

</div> 


        <form id=\"currencyForm\">
    <label for=\"currency\">Change Currency:</label>
    <select name=\"currency\" id=\"currency\">
        <option value=\"TND\">TND (Tunisian Dinar)</option>
        <option value=\"USD\">USD (US Dollar)</option>
        <option value=\"Euro\">Euro</option>
        <option value=\"Yen\">Yen</option>
    </select>
</form>


        ";
        // line 68
        yield "        <form action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Product_show");
        yield "\" method=\"get\" class=\"form-inline mb-3 mt-2\">
            <div class=\"form-group\">
                <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search by name...\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary ml-2 mt-2\">Search</button>
        </form>
        


    <div class=\"col-md-12 mb-4\" style=\"display: flex;gap: 2rem;flex-wrap: wrap;\">
        

        ";
        // line 81
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["Products"]) || array_key_exists("Products", $context) ? $context["Products"] : (function () { throw new RuntimeError('Variable "Products" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 82
            yield "        <div class=\"col-md-3 mb-4\">
            <div class=\"card\">
                <img src=\"";
            // line 84
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 84))), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"Product Image\" style=\"max-height: 200px; object-fit: cover;\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
            // line 86
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 86), "html", null, true);
            yield "</h5>
                    <p class=\"card-text\">Description: ";
            // line 87
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 87), "html", null, true);
            yield "</p>

                    ";
            // line 90
            yield "                    <p id=\"product-price-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 90), "html", null, true);
            yield "\" class=\"card-text\" data-price=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 90), "html", null, true);
            yield "\" >
                        ";
            // line 91
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 91), "html", null, true);
            yield " DT <!-- Display original price in EUR format -->
                    </p>

                    <p class=\"card-text\">Quantite: ";
            // line 94
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantite", [], "any", false, false, false, 94), "html", null, true);
            yield "</p>

                    

                    <form action=\"";
            // line 98
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 98), "quantite" => ("quantite" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 98))]), "html", null, true);
            yield "\" method=\"post\">
                        <div class=\"form-group\">
                            <label for=\"quantite";
            // line 100
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 100), "html", null, true);
            yield "\">Quantite:</label>
                            <input type=\"number\" id=\"quantite";
            // line 101
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 101), "html", null, true);
            yield "\" name=\"quantite\" class=\"form-control\" value=\"1\" min=\"1\" required>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        yield "    </div>
</div>

";
        // line 112
        yield $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["Products"]) || array_key_exists("Products", $context) ? $context["Products"] : (function () { throw new RuntimeError('Variable "Products" does not exist.', 112, $this->source); })()));
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
        return "Product/listProductC.html.twig";
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
        return array (  267 => 112,  262 => 109,  248 => 101,  244 => 100,  239 => 98,  232 => 94,  226 => 91,  219 => 90,  214 => 87,  210 => 86,  205 => 84,  201 => 82,  196 => 81,  180 => 68,  158 => 50,  153 => 49,  142 => 39,  132 => 38,  91 => 5,  81 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Products{% endblock %}
{% block javascripts %}
    <script>
        document.getElementById('currency').addEventListener('change', function() {
            var currency = this.value;
            var prixUnitaireCells = document.querySelectorAll('.price');

            prixUnitaireCells.forEach(function(cell) {
                var originalPriceTND = parseFloat(cell.dataset.originalPriceTnd);
                if (!isNaN(originalPriceTND)) {
                    var convertedPrice;
                    switch (currency) {
                        case 'TND':
                            convertedPrice = originalPriceTND;
                            break;
                        case 'USD':
                            convertedPrice = originalPriceTND * 0.36; // Conversion rate from TND to USD
                            break;
                        case 'Euro':
                            convertedPrice = originalPriceTND * 0.30; // Conversion rate from TND to Euro
                            break;
                        case 'Yen':
                            convertedPrice = originalPriceTND * 40.36; // Conversion rate from TND to Yen
                            break;
                        default:
                            convertedPrice = originalPriceTND;
                    }
                    cell.textContent = convertedPrice.toFixed(2) + ' ' + currency;
                }
            });
        });
    </script>
{% endblock %}


{% block body %}
<div class=\"row\">


<div style=\"display: flex;justify-content: space-between;\">
<h3>Our Market</h3>

        


        {# View Cart Button (conditionally animated) #}
        <form action=\"{{ path('Panier_show') }}\" method=\"get\" class=\"mb-3\">
            <button type=\"submit\" class=\"btn btn-primary mb-2 {% if panierNonVide %}animated{% endif %}\">View Cart</button>
        </form>

</div> 


        <form id=\"currencyForm\">
    <label for=\"currency\">Change Currency:</label>
    <select name=\"currency\" id=\"currency\">
        <option value=\"TND\">TND (Tunisian Dinar)</option>
        <option value=\"USD\">USD (US Dollar)</option>
        <option value=\"Euro\">Euro</option>
        <option value=\"Yen\">Yen</option>
    </select>
</form>


        {# Search Form #}
        <form action=\"{{ path('Product_show') }}\" method=\"get\" class=\"form-inline mb-3 mt-2\">
            <div class=\"form-group\">
                <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search by name...\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary ml-2 mt-2\">Search</button>
        </form>
        


    <div class=\"col-md-12 mb-4\" style=\"display: flex;gap: 2rem;flex-wrap: wrap;\">
        

        {# Product Listing #}
        {% for product in Products %}
        <div class=\"col-md-3 mb-4\">
            <div class=\"card\">
                <img src=\"{{ asset('uploads/products/' ~ product.image) }}\" class=\"card-img-top\" alt=\"Product Image\" style=\"max-height: 200px; object-fit: cover;\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{ product.name }}</h5>
                    <p class=\"card-text\">Description: {{ product.description }}</p>

                    {# Price Display with data attributes for dynamic conversion #}
                    <p id=\"product-price-{{ product.id }}\" class=\"card-text\" data-price=\"{{ product.price }}\" >
                        {{ product.price }} DT <!-- Display original price in EUR format -->
                    </p>

                    <p class=\"card-text\">Quantite: {{ product.quantite }}</p>

                    

                    <form action=\"{{ path('add_to_cart', {'id': product.id, 'quantite': 'quantite' ~ product.id }) }}\" method=\"post\">
                        <div class=\"form-group\">
                            <label for=\"quantite{{ product.id }}\">Quantite:</label>
                            <input type=\"number\" id=\"quantite{{ product.id }}\" name=\"quantite\" class=\"form-control\" value=\"1\" min=\"1\" required>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
</div>

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
{% endblock %}", "Product/listProductC.html.twig", "C:\\Users\\USER\\Desktop\\techterra\\templates\\product\\listProductC.html.twig");
    }
}
