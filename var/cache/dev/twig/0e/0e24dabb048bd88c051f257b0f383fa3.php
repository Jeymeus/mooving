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

/* search/availability.html.twig */
class __TwigTemplate_f965e68a6bd76da495003a1dbafa322c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/availability.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/availability.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "search/availability.html.twig", 1);
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

        yield "Recherche";
        
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
        yield "    <h1 class=\"mt-4\">Recherche d'une disponibilité</h1>

    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["class" => "form"]]);
        yield "

                <div class=\"form-group mb-3 mt-3\">
                    ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 13, $this->source); })()), "start_date", [], "any", false, false, false, 13), 'label', ["label" => "Date de début"]);
        yield "
                    ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 14, $this->source); })()), "start_date", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 14, $this->source); })()), "start_date", [], "any", false, false, false, 14), "vars", [], "any", false, false, false, 14), "errors", [], "any", false, false, false, 14)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                    ";
        // line 15
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 15, $this->source); })()), "start_date", [], "any", false, false, false, 15), "vars", [], "any", false, false, false, 15), "errors", [], "any", false, false, false, 15)) > 0)) {
            // line 16
            yield "                        <div class=\"invalid-feedback\">
                            ";
            // line 17
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 17, $this->source); })()), "start_date", [], "any", false, false, false, 17), 'errors');
            yield "
                        </div>
                    ";
        }
        // line 20
        yield "                </div>

                <div class=\"form-group  mb-3\">
                    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 23, $this->source); })()), "end_date", [], "any", false, false, false, 23), 'label', ["label" => "Date de fin"]);
        yield "
                    ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 24, $this->source); })()), "end_date", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 24, $this->source); })()), "end_date", [], "any", false, false, false, 24), "vars", [], "any", false, false, false, 24), "errors", [], "any", false, false, false, 24)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                    ";
        // line 25
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 25, $this->source); })()), "end_date", [], "any", false, false, false, 25), "vars", [], "any", false, false, false, 25), "errors", [], "any", false, false, false, 25)) > 0)) {
            // line 26
            yield "                        <div class=\"invalid-feedback\">
                            ";
            // line 27
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 27, $this->source); })()), "end_date", [], "any", false, false, false, 27), 'errors');
            yield "
                        </div>
                    ";
        }
        // line 30
        yield "                </div>

            <div class=\"form-group mb-3\">
                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 33, $this->source); })()), "maxPrice", [], "any", false, false, false, 33), 'label', ["label" => "Prix maximum de la location"]);
        yield "
                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 34, $this->source); })()), "maxPrice", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            </div>

            <button type=\"submit\" class=\"btn btn-warning mb-3\">Rechercher</button>

            ";
        // line 39
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 39, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
    ";
        // line 42
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "method", [], "any", false, false, false, 42) == "POST") && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 42, $this->source); })()), "vars", [], "any", false, false, false, 42), "valid", [], "any", false, false, false, 42))) {
            // line 43
            yield "        <h2 class=\"mt-3 mb-3\">Résultat de la recherche</h2>
        ";
            // line 44
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["availabilities"]) || array_key_exists("availabilities", $context) ? $context["availabilities"] : (function () { throw new RuntimeError('Variable "availabilities" does not exist.', 44, $this->source); })()))) {
                // line 45
                yield "            <div class=\"alert alert-danger mt-3\" role=\"alert\">
                Aucun résultat trouvé
            </div>
            <form method=\"post\" action=\"";
                // line 48
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_availability");
                yield "\">
                <input type=\"hidden\" name=\"extend_search\" value=\"1\">
                <input type=\"hidden\" name=\"start_date\" value=\"";
                // line 50
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 50, $this->source); })()), "start_date", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "value", [], "any", false, false, false, 50), "html", null, true);
                yield "\">
                <input type=\"hidden\" name=\"end_date\" value=\"";
                // line 51
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 51, $this->source); })()), "end_date", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "value", [], "any", false, false, false, 51), "html", null, true);
                yield "\">
                <input type=\"hidden\" name=\"maxPrice\" value=\"";
                // line 52
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 52, $this->source); })()), "maxPrice", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "value", [], "any", false, false, false, 52), "html", null, true);
                yield "\">
                <button type=\"submit\" class=\"btn btn-warning mt-3\">Étendre la recherche à + / - 1 jour</button>
            </form>
        ";
            } else {
                // line 56
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["availabilities"]) || array_key_exists("availabilities", $context) ? $context["availabilities"] : (function () { throw new RuntimeError('Variable "availabilities" does not exist.', 56, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["availability"]) {
                    // line 57
                    yield "                ";
                    $context["vehicle"] = CoreExtension::getAttribute($this->env, $this->source, $context["availability"], "vehicle", [], "any", false, false, false, 57);
                    // line 58
                    yield "                <h4> ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 58, $this->source); })()), "brand", [], "any", false, false, false, 58), "html", null, true);
                    yield " ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 58, $this->source); })()), "model", [], "any", false, false, false, 58), "html", null, true);
                    yield "</h4>
                <div class=\"card mt-3 mb-3\">
                    <div class=\"card-body\">
                        <ul>
                            <li>Date de début : ";
                    // line 62
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["availability"], "startDate", [], "any", false, false, false, 62), "d-m-Y"), "html", null, true);
                    yield "</li>
                            <li>Date de fin : ";
                    // line 63
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["availability"], "endDate", [], "any", false, false, false, 63), "d-m-Y"), "html", null, true);
                    yield "</li>
                            <li>Prix par jour : ";
                    // line 64
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["availability"], "pricePerDay", [], "any", false, false, false, 64), "html", null, true);
                    yield "</li>
                            <li>Statut : ";
                    // line 65
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["availability"], "status", [], "any", false, false, false, 65)) ? ("Disponible") : ("Non disponible"));
                    yield "</li>
                        </ul>
                    </div>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['availability'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                yield "        ";
            }
            // line 71
            yield "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "search/availability.html.twig";
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
        return array (  244 => 71,  241 => 70,  230 => 65,  226 => 64,  222 => 63,  218 => 62,  208 => 58,  205 => 57,  200 => 56,  193 => 52,  189 => 51,  185 => 50,  180 => 48,  175 => 45,  173 => 44,  170 => 43,  168 => 42,  162 => 39,  154 => 34,  150 => 33,  145 => 30,  139 => 27,  136 => 26,  134 => 25,  130 => 24,  126 => 23,  121 => 20,  115 => 17,  112 => 16,  110 => 15,  106 => 14,  102 => 13,  96 => 10,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Recherche{% endblock %}

{% block body %}
    <h1 class=\"mt-4\">Recherche d'une disponibilité</h1>

    <div class=\"row\">
        <div class=\"col-md-6\">
            {{ form_start(search_form, {'attr': {'class': 'form'}}) }}

                <div class=\"form-group mb-3 mt-3\">
                    {{ form_label(search_form.start_date, 'Date de début') }}
                    {{ form_widget(search_form.start_date, {'attr': {'class': 'form-control' ~ (search_form.start_date.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
                    {% if search_form.start_date.vars.errors|length > 0 %}
                        <div class=\"invalid-feedback\">
                            {{ form_errors(search_form.start_date) }}
                        </div>
                    {% endif %}
                </div>

                <div class=\"form-group  mb-3\">
                    {{ form_label(search_form.end_date, 'Date de fin') }}
                    {{ form_widget(search_form.end_date, {'attr': {'class': 'form-control' ~ (search_form.end_date.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
                    {% if search_form.end_date.vars.errors|length > 0 %}
                        <div class=\"invalid-feedback\">
                            {{ form_errors(search_form.end_date) }}
                        </div>
                    {% endif %}
                </div>

            <div class=\"form-group mb-3\">
                {{ form_label(search_form.maxPrice, 'Prix maximum de la location') }}
                {{ form_widget(search_form.maxPrice, {'attr': {'class': 'form-control'}}) }}
            </div>

            <button type=\"submit\" class=\"btn btn-warning mb-3\">Rechercher</button>

            {{ form_end(search_form) }}
        </div>
    </div>
    {% if app.request.method == 'POST' and search_form.vars.valid %}
        <h2 class=\"mt-3 mb-3\">Résultat de la recherche</h2>
        {% if availabilities is empty %}
            <div class=\"alert alert-danger mt-3\" role=\"alert\">
                Aucun résultat trouvé
            </div>
            <form method=\"post\" action=\"{{ path('search_availability') }}\">
                <input type=\"hidden\" name=\"extend_search\" value=\"1\">
                <input type=\"hidden\" name=\"start_date\" value=\"{{ search_form.start_date.vars.value }}\">
                <input type=\"hidden\" name=\"end_date\" value=\"{{ search_form.end_date.vars.value }}\">
                <input type=\"hidden\" name=\"maxPrice\" value=\"{{ search_form.maxPrice.vars.value }}\">
                <button type=\"submit\" class=\"btn btn-warning mt-3\">Étendre la recherche à + / - 1 jour</button>
            </form>
        {% else %}
            {% for availability in availabilities %}
                {% set vehicle = availability.vehicle %}
                <h4> {{ vehicle.brand }} {{ vehicle.model }}</h4>
                <div class=\"card mt-3 mb-3\">
                    <div class=\"card-body\">
                        <ul>
                            <li>Date de début : {{ availability.startDate|date('d-m-Y') }}</li>
                            <li>Date de fin : {{ availability.endDate|date('d-m-Y') }}</li>
                            <li>Prix par jour : {{ availability.pricePerDay }}</li>
                            <li>Statut : {{ availability.status ? 'Disponible' : 'Non disponible' }}</li>
                        </ul>
                    </div>
                </div>
            {% endfor %}
        {% endif %}
    {% endif %}
{% endblock %}
", "search/availability.html.twig", "C:\\Users\\Ikki\\Desktop\\mooving\\templates\\search\\availability.html.twig");
    }
}
