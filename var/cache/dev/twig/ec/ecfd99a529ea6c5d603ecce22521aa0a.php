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

/* availability/show.html.twig */
class __TwigTemplate_f389d5ac83519dc37b1f83f2a47b7247 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "availability/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "availability/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "availability/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Disponibilités";
        
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
        yield "    <h1 class=\"mt-3 mb-3\">Disponibilités du véhicule ";
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::upperFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 7, $this->source); })()), "brand", [], "any", false, false, false, 7)), "html", null, true);
        yield " ";
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::upperFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 7, $this->source); })()), "model", [], "any", false, false, false, 7)), "html", null, true);
        yield "</h1>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["availabilities"]) || array_key_exists("availabilities", $context) ? $context["availabilities"] : (function () { throw new RuntimeError('Variable "availabilities" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["availability"]) {
            // line 9
            yield "        <div class=\"card mt-3\">
            <div class=\"card-body\">
                <ul>
                    <li>Date de début : ";
            // line 12
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["availability"], "startDate", [], "any", false, false, false, 12), "d-m-Y"), "html", null, true);
            yield "</li>
                    <li>Date de fin : ";
            // line 13
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["availability"], "endDate", [], "any", false, false, false, 13), "d-m-Y"), "html", null, true);
            yield "</li>
                    <li>Prix par jour : ";
            // line 14
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["availability"], "pricePerDay", [], "any", false, false, false, 14), "html", null, true);
            yield "</li>
                    <li>Statut : ";
            // line 15
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["availability"], "status", [], "any", false, false, false, 15)) ? ("Disponible") : ("Non disponible"));
            yield "</li>
                </ul>
                <a href=\"";
            // line 17
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("availability_edit", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 17, $this->source); })()), "slug", [], "any", false, false, false, 17), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["availability"], "id", [], "any", false, false, false, 17)]), "html", null, true);
            yield "\" class=\"btn btn-warning mt-3\">Modifier</a>
                <a href=\"";
            // line 18
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("availability_delete_confirm", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 18, $this->source); })()), "slug", [], "any", false, false, false, 18), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["availability"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            yield "\" class=\"btn btn-danger mt-3\">Supprimer</a>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['availability'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "availability/show.html.twig";
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
        return array (  127 => 18,  123 => 17,  118 => 15,  114 => 14,  110 => 13,  106 => 12,  101 => 9,  97 => 8,  90 => 7,  80 => 6,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Disponibilités{% endblock %}



{% block body %}
    <h1 class=\"mt-3 mb-3\">Disponibilités du véhicule {{ vehicle.brand | upper }} {{ vehicle.model | upper }}</h1>
    {% for availability in availabilities %}
        <div class=\"card mt-3\">
            <div class=\"card-body\">
                <ul>
                    <li>Date de début : {{ availability.startDate|date('d-m-Y') }}</li>
                    <li>Date de fin : {{ availability.endDate|date('d-m-Y') }}</li>
                    <li>Prix par jour : {{ availability.pricePerDay }}</li>
                    <li>Statut : {{ availability.status ? 'Disponible' : 'Non disponible' }}</li>
                </ul>
                <a href=\"{{ path('availability_edit', {'slug': vehicle.slug, 'id': availability.id}) }}\" class=\"btn btn-warning mt-3\">Modifier</a>
                <a href=\"{{ path('availability_delete_confirm', {'slug': vehicle.slug, 'id': availability.id}) }}\" class=\"btn btn-danger mt-3\">Supprimer</a>
            </div>
        </div>
    {% endfor %}
{% endblock %}
", "availability/show.html.twig", "C:\\Users\\Ikki\\Desktop\\mooving\\templates\\availability\\show.html.twig");
    }
}
