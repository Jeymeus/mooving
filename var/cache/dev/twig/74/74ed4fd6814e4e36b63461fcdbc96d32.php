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

/* availability/delete_confirm.html.twig */
class __TwigTemplate_115f4eb2323e3ea41aabe55ccf43b7d7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "availability/delete_confirm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "availability/delete_confirm.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "availability/delete_confirm.html.twig", 1);
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

        yield "Suppression d'une disponibilité";
        
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
        yield "    <h1 class=\"mt-4\">Suppression d'une disponibilité</h1>

    <p>Êtes-vous sûr de vouloir supprimer la disponibilité suivante ?</p>

    <ul>
        <li>Véhicule : ";
        // line 11
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::upperFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 11, $this->source); })()), "brand", [], "any", false, false, false, 11)), "html", null, true);
        yield " ";
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::upperFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 11, $this->source); })()), "model", [], "any", false, false, false, 11)), "html", null, true);
        yield "</li>
        <li>Date de début : ";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["availability"]) || array_key_exists("availability", $context) ? $context["availability"] : (function () { throw new RuntimeError('Variable "availability" does not exist.', 12, $this->source); })()), "startDate", [], "any", false, false, false, 12), "d-m-Y"), "html", null, true);
        yield "</li>
        <li>Date de fin : ";
        // line 13
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["availability"]) || array_key_exists("availability", $context) ? $context["availability"] : (function () { throw new RuntimeError('Variable "availability" does not exist.', 13, $this->source); })()), "endDate", [], "any", false, false, false, 13), "d-m-Y"), "html", null, true);
        yield "</li>
        <li>Prix par jour : ";
        // line 14
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["availability"]) || array_key_exists("availability", $context) ? $context["availability"] : (function () { throw new RuntimeError('Variable "availability" does not exist.', 14, $this->source); })()), "pricePerDay", [], "any", false, false, false, 14), "html", null, true);
        yield "</li>
        <li>Statut : ";
        // line 15
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["availability"]) || array_key_exists("availability", $context) ? $context["availability"] : (function () { throw new RuntimeError('Variable "availability" does not exist.', 15, $this->source); })()), "status", [], "any", false, false, false, 15)) ? ("Disponible") : ("Non disponible"));
        yield "</li>
    </ul>

    <form action=\"";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("availability_delete", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 18, $this->source); })()), "slug", [], "any", false, false, false, 18), "id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["availability"]) || array_key_exists("availability", $context) ? $context["availability"] : (function () { throw new RuntimeError('Variable "availability" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
        yield "\" method=\"post\">
        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        <button type=\"submit\" class=\"btn btn-danger mt-3\">Oui, supprimer</button>
    </form>
    <a href=\"";
        // line 22
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("availability_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 22, $this->source); })()), "slug", [], "any", false, false, false, 22)]), "html", null, true);
        yield "\" class=\"btn btn-secondary mt-3\">Non, annuler</a>
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
        return "availability/delete_confirm.html.twig";
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
        return array (  128 => 22,  121 => 18,  115 => 15,  111 => 14,  107 => 13,  103 => 12,  97 => 11,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Suppression d'une disponibilité{% endblock %}

{% block body %}
    <h1 class=\"mt-4\">Suppression d'une disponibilité</h1>

    <p>Êtes-vous sûr de vouloir supprimer la disponibilité suivante ?</p>

    <ul>
        <li>Véhicule : {{ vehicle.brand | upper }} {{ vehicle.model | upper }}</li>
        <li>Date de début : {{ availability.startDate|date('d-m-Y') }}</li>
        <li>Date de fin : {{ availability.endDate|date('d-m-Y') }}</li>
        <li>Prix par jour : {{ availability.pricePerDay }}</li>
        <li>Statut : {{ availability.status ? 'Disponible' : 'Non disponible' }}</li>
    </ul>

    <form action=\"{{ path('availability_delete', {'slug': vehicle.slug, 'id': availability.id}) }}\" method=\"post\">
        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        <button type=\"submit\" class=\"btn btn-danger mt-3\">Oui, supprimer</button>
    </form>
    <a href=\"{{ path('availability_show', {'slug': vehicle.slug}) }}\" class=\"btn btn-secondary mt-3\">Non, annuler</a>
{% endblock %}
", "availability/delete_confirm.html.twig", "C:\\Users\\Ikki\\Desktop\\mooving\\templates\\availability\\delete_confirm.html.twig");
    }
}
