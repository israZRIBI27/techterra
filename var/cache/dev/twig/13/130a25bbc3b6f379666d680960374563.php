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

/* panier/showPdf.html.twig */
class __TwigTemplate_dfeb0b9a3cb62af8beca500cfc1b6464 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/showPdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/showPdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Panier PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            font-size: 24px;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        .total {
            font-weight: bold;
            font-size: 18px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <h1>Panier Details</h1>

    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
            </tr>
        </thead>
      <tbody>
    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 47
            yield "    <tr>
        <td>";
            // line 48
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "idProduit", [], "any", false, false, false, 48), "name", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
        <td>";
            // line 49
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 49), "html", null, true);
            yield " EUR</td>
        <td>";
            // line 50
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
        <td>";
            // line 51
            yield Twig\Extension\EscaperExtension::escape($this->env, (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 51) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 51)), "html", null, true);
            yield " EUR</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "</tbody>
    </table>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "panier/showPdf.html.twig";
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
        return array (  119 => 54,  110 => 51,  106 => 50,  102 => 49,  98 => 48,  95 => 47,  91 => 46,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Panier PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            font-size: 24px;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        .total {
            font-weight: bold;
            font-size: 18px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <h1>Panier Details</h1>

    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
            </tr>
        </thead>
      <tbody>
    {% for item in panier %}
    <tr>
        <td>{{ item.idProduit.name }}</td>
        <td>{{ item.price }} EUR</td>
        <td>{{ item.quantite }}</td>
        <td>{{ item.price * item.quantite }} EUR</td>
    </tr>
    {% endfor %}
</tbody>
    </table>

</body>
</html>
", "panier/showPdf.html.twig", "C:\\Users\\USER\\Desktop\\techterra\\templates\\panier\\showPdf.html.twig");
    }
}
