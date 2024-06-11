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

/* admin/vehicle/index.html.twig */
class __TwigTemplate_e25dca053e9065d339fac584b352d193 extends Template
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
        return "admin/admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/vehicle/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/vehicle/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/admin.html.twig", "admin/vehicle/index.html.twig", 1);
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
        yield "    <h1 class=\"mt-3 mb-3\">Liste des Véhicules</h1>
    <div class=\"card\">
        <div class=\"list-group\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicle"]) {
            // line 8
            yield "            <a class=\"list-group-item list-group-item-action list-group-item-warning\" href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("availability_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "slug", [], "any", false, false, false, 8)]), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "brand", [], "any", false, false, false, 8), "html", null, true);
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "model", [], "any", false, false, false, 8), "html", null, true);
            yield "</a>
            <a href=\"";
            // line 9
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_vehicle_edit", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "slug", [], "any", false, false, false, 9), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 9)]), "html", null, true);
            yield "\" class=\"btn btn-warning mt-3\">Modifier</a>
            <a href=\"";
            // line 10
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_vehicle_delete", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "slug", [], "any", false, false, false, 10), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 10)]), "html", null, true);
            yield "\" class=\"btn btn-danger mt-3\">Supprimer</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "        </div>
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
        return "admin/vehicle/index.html.twig";
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
        return array (  99 => 12,  91 => 10,  87 => 9,  78 => 8,  74 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/admin.html.twig' %}

{% block body %}
    <h1 class=\"mt-3 mb-3\">Liste des Véhicules</h1>
    <div class=\"card\">
        <div class=\"list-group\">
            {% for vehicle in vehicles %}
            <a class=\"list-group-item list-group-item-action list-group-item-warning\" href=\"{{ path('availability_show', {'slug': vehicle.slug}) }}\">{{ vehicle.brand }} {{ vehicle.model }}</a>
            <a href=\"{{ path('admin_vehicle_edit', {'slug': vehicle.slug, 'id': vehicle.id}) }}\" class=\"btn btn-warning mt-3\">Modifier</a>
            <a href=\"{{ path('admin_vehicle_delete', {'slug': vehicle.slug, 'id': vehicle.id}) }}\" class=\"btn btn-danger mt-3\">Supprimer</a>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "admin/vehicle/index.html.twig", "C:\\Users\\Ikki\\Desktop\\mooving\\templates\\admin\\vehicle\\index.html.twig");
    }
}
