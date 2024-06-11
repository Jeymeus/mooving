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

/* admin/vehicle/edit.html.twig */
class __TwigTemplate_24c21e67d79237156e3103c19ef00231 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/vehicle/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/vehicle/edit.html.twig"));

        $this->parent = $this->loadTemplate("admin/admin.html.twig", "admin/vehicle/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        yield "    <script src=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/delete.js"), "html", null, true);
        yield "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Modification d'un véhicule";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        yield "    <h1 class=\"mt-3 mb-3\">Modification d'un véhicule</h1>

    ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        yield "
    <div class=\"form-group\">
        ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "brand", [], "any", false, false, false, 15), 'label', ["label" => "Marque"]);
        yield "
        ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "brand", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "brand", [], "any", false, false, false, 16), "vars", [], "any", false, false, false, 16), "errors", [], "any", false, false, false, 16)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
        ";
        // line 17
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "brand", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "errors", [], "any", false, false, false, 17)) > 0)) {
            // line 18
            yield "            <div class=\"invalid-feedback\">
                ";
            // line 19
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "brand", [], "any", false, false, false, 19), 'errors');
            yield "
            </div>
        ";
        }
        // line 22
        yield "    </div>
    <div class=\"form-group\">
        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "model", [], "any", false, false, false, 24), 'label', ["label" => "Modèle"]);
        yield "
        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "model", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "model", [], "any", false, false, false, 25), "vars", [], "any", false, false, false, 25), "errors", [], "any", false, false, false, 25)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
        ";
        // line 26
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "model", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "errors", [], "any", false, false, false, 26)) > 0)) {
            // line 27
            yield "            <div class=\"invalid-feedback\">
                ";
            // line 28
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "model", [], "any", false, false, false, 28), 'errors');
            yield "
            </div>
        ";
        }
        // line 31
        yield "    </div>

    <h3>Images existantes</h3>
    <div class=\"form-group\">
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vehicle"]) || array_key_exists("vehicle", $context) ? $context["vehicle"] : (function () { throw new RuntimeError('Variable "vehicle" does not exist.', 35, $this->source); })()), "images", [], "any", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 36
            yield "        <d!iv>
            <img src=\"";
            // line 37
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "fileName", [], "any", false, false, false, 37))), "html", null, true);
            yield "\" alt=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["image"], "fileName", [], "any", false, false, false, 37), "html", null, true);
            yield "\" width=\"100\">
            <a href=\"";
            // line 38
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_vehicle_delete_image", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\" data-delete data-token= \"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 38))), "html", null, true);
            yield "\" class=\"btn btn-danger\">Supprimer</a>
        </d!iv>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "    </div>

    <div class=\"form-group\">
        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "images", [], "any", false, false, false, 44), 'label', ["label" => "Ajouter des images"]);
        yield "
        ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "images", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "images", [], "any", false, false, false, 45), "vars", [], "any", false, false, false, 45), "errors", [], "any", false, false, false, 45)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
        ";
        // line 46
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "images", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "errors", [], "any", false, false, false, 46)) > 0)) {
            // line 47
            yield "            <div class=\"invalid-feedback\">
                ";
            // line 48
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "images", [], "any", false, false, false, 48), 'errors');
            yield "
            </div>
        ";
        }
        // line 51
        yield "    </div>

    <button type=\"submit\" class=\"btn btn-warning mt-3\">Modifier</button>
    ";
        // line 54
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'form_end');
        yield "
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
        return "admin/vehicle/edit.html.twig";
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
        return array (  225 => 54,  220 => 51,  214 => 48,  211 => 47,  209 => 46,  205 => 45,  201 => 44,  196 => 41,  185 => 38,  179 => 37,  176 => 36,  172 => 35,  166 => 31,  160 => 28,  157 => 27,  155 => 26,  151 => 25,  147 => 24,  143 => 22,  137 => 19,  134 => 18,  132 => 17,  128 => 16,  124 => 15,  119 => 13,  115 => 11,  105 => 10,  85 => 8,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/admin.html.twig' %}

{% block javascripts %}
    <script src=\"{{ asset('js/delete.js') }}\"></script>
{% endblock %}


{% block title %}Modification d'un véhicule{% endblock %}

{% block body %}
    <h1 class=\"mt-3 mb-3\">Modification d'un véhicule</h1>

    {{ form_start(form) }}
    <div class=\"form-group\">
        {{ form_label(form.brand, 'Marque') }}
        {{ form_widget(form.brand, {'attr': {'class': 'form-control' ~ (form.brand.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
        {% if form.brand.vars.errors|length > 0 %}
            <div class=\"invalid-feedback\">
                {{ form_errors(form.brand) }}
            </div>
        {% endif %}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.model, 'Modèle') }}
        {{ form_widget(form.model, {'attr': {'class': 'form-control' ~ (form.model.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
        {% if form.model.vars.errors|length > 0 %}
            <div class=\"invalid-feedback\">
                {{ form_errors(form.model) }}
            </div>
        {% endif %}
    </div>

    <h3>Images existantes</h3>
    <div class=\"form-group\">
        {% for image in vehicle.images %}
        <d!iv>
            <img src=\"{{ asset('uploads/' ~ image.fileName) }}\" alt=\"{{ image.fileName }}\" width=\"100\">
            <a href=\"{{ path('admin_vehicle_delete_image', {id: image.id}) }}\" data-delete data-token= \"{{ csrf_token('delete' ~ image.id) }}\" class=\"btn btn-danger\">Supprimer</a>
        </d!iv>
        {% endfor %}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.images, 'Ajouter des images') }}
        {{ form_widget(form.images, {'attr': {'class': 'form-control' ~ (form.images.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
        {% if form.images.vars.errors|length > 0 %}
            <div class=\"invalid-feedback\">
                {{ form_errors(form.images) }}
            </div>
        {% endif %}
    </div>

    <button type=\"submit\" class=\"btn btn-warning mt-3\">Modifier</button>
    {{ form_end(form) }}
{% endblock %}
", "admin/vehicle/edit.html.twig", "C:\\Users\\Ikki\\Desktop\\mooving\\templates\\admin\\vehicle\\edit.html.twig");
    }
}
