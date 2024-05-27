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

/* availability/form.html.twig */
class __TwigTemplate_17f613892a74daa6ec43347153f7012a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "availability/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "availability/form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "availability/form.html.twig", 3);
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

        // line 6
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["availability"] ?? null), "id", [], "any", true, true, false, 6)) {
            // line 7
            yield "        Modifier la disponibilité
    ";
        } else {
            // line 9
            yield "        Ajout d'une disponibilité
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        yield "    <div class=\"container\">
        ";
        // line 15
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["availability"] ?? null), "id", [], "any", true, true, false, 15)) {
            // line 16
            yield "            <h1 class=\"mt-4\">Modifier la disponibilité</h1>
        ";
        } else {
            // line 18
            yield "            <h1 class=\"mt-4\">Ajout d'une disponibilité</h1>
        ";
        }
        // line 20
        yield "
        <div class=\"row\">
            <div class=\"col-md-6\">
                ";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["class" => "form"]]);
        yield "

                <div class=\"form-group mb-3 mt-3\">
                    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "start_date", [], "any", false, false, false, 26), 'label', ["label" => "Date de début"]);
        yield "
                    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "start_date", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"], "value" => ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["availability"]) || array_key_exists("availability", $context) ? $context["availability"] : (function () { throw new RuntimeError('Variable "availability" does not exist.', 27, $this->source); })()), "start_date", [], "any", false, false, false, 27)) ? (Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["availability"]) || array_key_exists("availability", $context) ? $context["availability"] : (function () { throw new RuntimeError('Variable "availability" does not exist.', 27, $this->source); })()), "start_date", [], "any", false, false, false, 27), "Y-m-d")) : (null))]);
        yield "
                </div>

                <div class=\"form-group mb-3\">
                    ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "end_date", [], "any", false, false, false, 31), 'label', ["label" => "Date de fin"]);
        yield "
                    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "end_date", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"], "value" => ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["availability"]) || array_key_exists("availability", $context) ? $context["availability"] : (function () { throw new RuntimeError('Variable "availability" does not exist.', 32, $this->source); })()), "end_date", [], "any", false, false, false, 32)) ? (Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["availability"]) || array_key_exists("availability", $context) ? $context["availability"] : (function () { throw new RuntimeError('Variable "availability" does not exist.', 32, $this->source); })()), "end_date", [], "any", false, false, false, 32), "Y-m-d")) : (null))]);
        yield "
                </div>

                <div class=\"form-group mb-3\">
                    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "price_per_day", [], "any", false, false, false, 36), 'label', ["label" => "Prix par jour"]);
        yield "
                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "price_per_day", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"], "value" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["availability"]) || array_key_exists("availability", $context) ? $context["availability"] : (function () { throw new RuntimeError('Variable "availability" does not exist.', 37, $this->source); })()), "price_per_day", [], "any", false, false, false, 37)]);
        yield "
                </div>

                <div class=\"form-group mb-3\">
                    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "status", [], "any", false, false, false, 41), 'label', ["label_attr" => ["class" => "form-check-label"], "label" => "Statut"]);
        yield "
                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "status", [], "any", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 43
            yield "                        <div class=\"form-check form-check-inline\">
                            ";
            // line 44
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => "form-check-input"], "label_attr" => ["class" => "form-check-label"]]);
            yield "
                            <label class=\"form-check-label\" for=\"";
            // line 45
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 45), "label", [], "any", false, false, false, 45), "html", null, true);
            yield "</label>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "                </div>
                
                <div class=\"form-group mb-3\">
                    ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "vehicle", [], "any", false, false, false, 51), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Véhicule"]);
        yield "
                    ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "vehicle", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                </div>

                <button type=\"submit\" class=\"btn btn-primary mb-3\">
                    ";
        // line 56
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["availability"] ?? null), "id", [], "any", true, true, false, 56)) {
            // line 57
            yield "                        Modifier
                    ";
        } else {
            // line 59
            yield "                        Créer
                    ";
        }
        // line 61
        yield "                </button>

                ";
        // line 63
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
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
        return "availability/form.html.twig";
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
        return array (  213 => 63,  209 => 61,  205 => 59,  201 => 57,  199 => 56,  192 => 52,  188 => 51,  183 => 48,  172 => 45,  168 => 44,  165 => 43,  161 => 42,  157 => 41,  150 => 37,  146 => 36,  139 => 32,  135 => 31,  128 => 27,  124 => 26,  118 => 23,  113 => 20,  109 => 18,  105 => 16,  103 => 15,  100 => 14,  90 => 13,  77 => 9,  73 => 7,  70 => 6,  60 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/availability/create.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}
    {% if availability.id is defined %}
        Modifier la disponibilité
    {% else %}
        Ajout d'une disponibilité
    {% endif %}
{% endblock %}

{% block body %}
    <div class=\"container\">
        {% if availability.id is defined %}
            <h1 class=\"mt-4\">Modifier la disponibilité</h1>
        {% else %}
            <h1 class=\"mt-4\">Ajout d'une disponibilité</h1>
        {% endif %}

        <div class=\"row\">
            <div class=\"col-md-6\">
                {{ form_start(form, {'attr': {'class': 'form'}}) }}

                <div class=\"form-group mb-3 mt-3\">
                    {{ form_label(form.start_date, 'Date de début') }}
                    {{ form_widget(form.start_date, {'attr': {'class': 'form-control'}, 'value': availability.start_date ? availability.start_date|date('Y-m-d') : null}) }}
                </div>

                <div class=\"form-group mb-3\">
                    {{ form_label(form.end_date, 'Date de fin') }}
                    {{ form_widget(form.end_date, {'attr': {'class': 'form-control'}, 'value': availability.end_date ? availability.end_date|date('Y-m-d') : null}) }}
                </div>

                <div class=\"form-group mb-3\">
                    {{ form_label(form.price_per_day, 'Prix par jour') }}
                    {{ form_widget(form.price_per_day, {'attr': {'class': 'form-control'}, 'value': availability.price_per_day}) }}
                </div>

                <div class=\"form-group mb-3\">
                    {{ form_label(form.status, 'Statut', {'label_attr': {'class': 'form-check-label'}}) }}
                    {% for child in form.status %}
                        <div class=\"form-check form-check-inline\">
                            {{ form_widget(child, {'attr': {'class': 'form-check-input'}, 'label_attr': {'class': 'form-check-label'}}) }}
                            <label class=\"form-check-label\" for=\"{{ child.vars.id }}\">{{ child.vars.label }}</label>
                        </div>
                    {% endfor %}
                </div>
                
                <div class=\"form-group mb-3\">
                    {{ form_label(form.vehicle, 'Véhicule', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.vehicle, {'attr': {'class': 'form-select'}}) }}
                </div>

                <button type=\"submit\" class=\"btn btn-primary mb-3\">
                    {% if availability.id is defined %}
                        Modifier
                    {% else %}
                        Créer
                    {% endif %}
                </button>

                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}
", "availability/form.html.twig", "C:\\Users\\Ikki\\Desktop\\wikicampers\\project\\templates\\availability\\form.html.twig");
    }
}
