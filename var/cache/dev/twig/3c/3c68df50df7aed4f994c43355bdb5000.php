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

/* panier/Panierlist.html.twig */
class __TwigTemplate_f8a3d0a5bb386f01c29998ea069fd68d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/Panierlist.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/Panierlist.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panier/Panierlist.html.twig", 3);
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

        yield "Panier";
        
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
        yield "    <h1 class=\"mb-4\">Panier</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-striped\">
            <thead class=\"thead-dark\">
                <tr>
                    <th>Product Name</th>  
                    <th>Price</th>   
                    <th>Quantity</th>
                    <th>Total Price</th>  ";
        // line 18
        yield "                    <th>Action</th> ";
        // line 19
        yield "                </tr>
            </thead>
            <tbody>
                ";
        // line 22
        $context["totalPrice"] = 0;
        // line 23
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["paniers"]) || array_key_exists("paniers", $context) ? $context["paniers"] : (function () { throw new RuntimeError('Variable "paniers" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            yield "                    <tr>
                        <td>";
            // line 25
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "idProduit", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 27
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 27) > 100)) {
                // line 28
                yield "                                ";
                yield Twig\Extension\EscaperExtension::escape($this->env, (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 28) * 0.85), "html", null, true);
                yield " ";
                // line 29
                yield "                            ";
            } else {
                // line 30
                yield "                                ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 30), "html", null, true);
                yield "
                            ";
            }
            // line 32
            yield "                        </td>
                        <td>";
            // line 33
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 35
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 35) > 100)) {
                // line 36
                yield "                                ";
                yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 36) * 0.85) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 36)), "html", null, true);
                yield " ";
                // line 37
                yield "                            ";
            } else {
                // line 38
                yield "                                ";
                yield Twig\Extension\EscaperExtension::escape($this->env, (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 38) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 38)), "html", null, true);
                yield "
                            ";
            }
            // line 40
            yield "                        </td>
                        ";
            // line 41
            $context["totalPrice"] = ((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 41, $this->source); })()) + ((((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 41) > 100)) ? ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 41) * 0.85)) : (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 41))) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 41)));
            // line 42
            yield "                        <td>
                            <form action=\"";
            // line 43
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Panier_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "idPanier", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\" method=\"post\" onsubmit=\"return confirm('Are you sure you want to delete this item?')\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Delete</button>
                            </form>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "            </tbody>
        </table>
    </div>

    <div class=\"row mt-4\">
        <div class=\"col-md-6\">
            <p class=\"font-weight-bold\">Total Price: ";
        // line 55
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 55, $this->source); })()), "html", null, true);
        yield "</p>
        </div>
        <div class=\"col-md-6 text-right\">
            <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pay");
        yield "\" class=\"btn btn-primary\">Proceed to Payment</a>
            <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Product_show");
        yield "\" class=\"btn btn-secondary ml-2\">Show List of Products</a>
        </div>
    </div>

    <hr>
    <div>
    <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_pdf");
        yield "\" class=\"btn btn-primary\">Generate PDF for cart</a>
</div>


    ";
        // line 70
        yield "    <form action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("send_sms");
        yield "\" method=\"post\" class=\"mt-4\">
        <div class=\"form-group\">
            <label for=\"number\">Recipient's Phone Number:</label>
            <input type=\"text\" name=\"number\" id=\"number\" class=\"form-control\" required>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Send SMS</button>
    </form>
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
        return "panier/Panierlist.html.twig";
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
        return array (  215 => 70,  208 => 65,  199 => 59,  195 => 58,  189 => 55,  181 => 49,  169 => 43,  166 => 42,  164 => 41,  161 => 40,  155 => 38,  152 => 37,  148 => 36,  146 => 35,  141 => 33,  138 => 32,  132 => 30,  129 => 29,  125 => 28,  123 => 27,  118 => 25,  115 => 24,  110 => 23,  108 => 22,  103 => 19,  101 => 18,  90 => 8,  80 => 7,  60 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/panier/PanierList.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Panier{% endblock %}

{% block body %}
    <h1 class=\"mb-4\">Panier</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-striped\">
            <thead class=\"thead-dark\">
                <tr>
                    <th>Product Name</th>  
                    <th>Price</th>   
                    <th>Quantity</th>
                    <th>Total Price</th>  {# Add a new column for total price #}
                    <th>Action</th> {# Add a new column for action (e.g., delete) #}
                </tr>
            </thead>
            <tbody>
                {% set totalPrice = 0 %}
                {% for item in paniers %}
                    <tr>
                        <td>{{ item.idProduit.name }}</td>
                        <td>
                            {% if item.price > 100 %}
                                {{ item.price * 0.85 }} {# Apply 15% discount if price > 100 #}
                            {% else %}
                                {{ item.price }}
                            {% endif %}
                        </td>
                        <td>{{ item.quantite }}</td>
                        <td>
                            {% if item.price > 100 %}
                                {{ (item.price * 0.85) * item.quantite }} {# Calculate total price with discount #}
                            {% else %}
                                {{ item.price * item.quantite }}
                            {% endif %}
                        </td>
                        {% set totalPrice = totalPrice + ((item.price > 100 ? item.price * 0.85 : item.price) * item.quantite) %}
                        <td>
                            <form action=\"{{ path('Panier_delete', {'id': item.idPanier}) }}\" method=\"post\" onsubmit=\"return confirm('Are you sure you want to delete this item?')\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Delete</button>
                            </form>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

    <div class=\"row mt-4\">
        <div class=\"col-md-6\">
            <p class=\"font-weight-bold\">Total Price: {{ totalPrice }}</p>
        </div>
        <div class=\"col-md-6 text-right\">
            <a href=\"{{ path('app_pay') }}\" class=\"btn btn-primary\">Proceed to Payment</a>
            <a href=\"{{ path('Product_show') }}\" class=\"btn btn-secondary ml-2\">Show List of Products</a>
        </div>
    </div>

    <hr>
    <div>
    <a href=\"{{ path('panier_pdf') }}\" class=\"btn btn-primary\">Generate PDF for cart</a>
</div>


    {# Form to send SMS #}
    <form action=\"{{ path('send_sms') }}\" method=\"post\" class=\"mt-4\">
        <div class=\"form-group\">
            <label for=\"number\">Recipient's Phone Number:</label>
            <input type=\"text\" name=\"number\" id=\"number\" class=\"form-control\" required>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Send SMS</button>
    </form>
{% endblock %}
", "panier/Panierlist.html.twig", "C:\\Users\\USER\\Desktop\\techterra\\templates\\panier\\Panierlist.html.twig");
    }
}
