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

/* payement/pay.html.twig */
class __TwigTemplate_f977b5a0bd13feec399a2ac74be14d76 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payement/pay.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payement/pay.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "payement/pay.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <style>
        .payment-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .payment-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type=\"text\"], input[type=\"number\"], input[type=\"password\"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>

<div class=\"payment-container\">
    <h1>Paiement</h1>

    ";
        // line 57
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["paymentForm"]) || array_key_exists("paymentForm", $context) ? $context["paymentForm"] : (function () { throw new RuntimeError('Variable "paymentForm" does not exist.', 57, $this->source); })()), 'form_start');
        yield "
    
    <div class=\"form-group\">
        ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paymentForm"]) || array_key_exists("paymentForm", $context) ? $context["paymentForm"] : (function () { throw new RuntimeError('Variable "paymentForm" does not exist.', 60, $this->source); })()), "cardNumber", [], "any", false, false, false, 60), 'row', ["label" => "Numéro de carte"]);
        yield "
    </div>

    <div class=\"form-group\">
        ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paymentForm"]) || array_key_exists("paymentForm", $context) ? $context["paymentForm"] : (function () { throw new RuntimeError('Variable "paymentForm" does not exist.', 64, $this->source); })()), "expirationDate", [], "any", false, false, false, 64), 'row', ["label" => "Date d'expiration"]);
        yield "
    </div>

    <div class=\"form-group\">
        ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paymentForm"]) || array_key_exists("paymentForm", $context) ? $context["paymentForm"] : (function () { throw new RuntimeError('Variable "paymentForm" does not exist.', 68, $this->source); })()), "cvv2", [], "any", false, false, false, 68), 'row', ["label" => "CVV2"]);
        yield "
    </div>

    ";
        // line 72
        yield "    ";
        // line 73
        yield "
    <button type=\"submit\">Payer</button>
    ";
        // line 75
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["paymentForm"]) || array_key_exists("paymentForm", $context) ? $context["paymentForm"] : (function () { throw new RuntimeError('Variable "paymentForm" does not exist.', 75, $this->source); })()), 'form_end');
        yield "
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
        return "payement/pay.html.twig";
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
        return array (  156 => 75,  152 => 73,  150 => 72,  144 => 68,  137 => 64,  130 => 60,  124 => 57,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <style>
        .payment-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .payment-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type=\"text\"], input[type=\"number\"], input[type=\"password\"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>

<div class=\"payment-container\">
    <h1>Paiement</h1>

    {{ form_start(paymentForm) }}
    
    <div class=\"form-group\">
        {{ form_row(paymentForm.cardNumber, {'label': 'Numéro de carte'}) }}
    </div>

    <div class=\"form-group\">
        {{ form_row(paymentForm.expirationDate, {'label': 'Date d\\'expiration'}) }}
    </div>

    <div class=\"form-group\">
        {{ form_row(paymentForm.cvv2, {'label': 'CVV2'}) }}
    </div>

    {# Ajoutez d'autres champs de formulaire pour le code de sécurité, le nom du titulaire, etc. #}
    {# Assurez-vous de valider ces champs correctement pour des raisons de sécurité. #}

    <button type=\"submit\">Payer</button>
    {{ form_end(paymentForm) }}
</div>
{% endblock %}
", "payement/pay.html.twig", "C:\\Users\\USER\\Desktop\\techterra\\templates\\payement\\pay.html.twig");
    }
}
