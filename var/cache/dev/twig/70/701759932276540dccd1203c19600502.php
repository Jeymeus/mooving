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

/* home/index.html.twig */
class __TwigTemplate_2bb2c42ff964a1574fbcef9aecf5cd75 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        yield "Bienvenue";
        
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
        yield "    <h1 class=\"my-5 text-center\">Bienvenue dans le projet de James Fierens</h1>

    <section>
        <h2 class=\"my-3\">Test Technique Symfony</h2>
        <p>Le but de ce test est de créer une application Symfony qui permet de gérer les disponibilités ainsi que les tarifs d’un véhicule à la location.</p>

        <h3 class=\"my-3\">Les fonctionnalités attendues sont les suivantes :</h3>
        <ul class=\"list-group p-3\">
            <li class=\"list-group-item\">Créer un véhicule</li>
            <li class=\"list-group-item\">Réaliser un CRUD des disponibilités pour un véhicule</li>
            <li class=\"list-group-item\">Consulter les disponibilités d’un véhicule</li>
            <li class=\"list-group-item\">Bonus 1 : Filtrer la recherche par prix</li>
            <li class=\"list-group-item\">Bonus 2 : Proposer des véhicules disponibles à +/- 1 jour de la date de recherche, si pas de disponibilités à la date souhaitée</li>
        </ul>

        <div class=\"my-3 text-center\">
        <a class=\"btn btn-warning text-center\" href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_vehicle_index");
        yield "\">C'est par ici</a>
        </div>
        
    </section>
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
        return "home/index.html.twig";
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
        return array (  108 => 22,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bienvenue{% endblock %}

{% block body %}
    <h1 class=\"my-5 text-center\">Bienvenue dans le projet de James Fierens</h1>

    <section>
        <h2 class=\"my-3\">Test Technique Symfony</h2>
        <p>Le but de ce test est de créer une application Symfony qui permet de gérer les disponibilités ainsi que les tarifs d’un véhicule à la location.</p>

        <h3 class=\"my-3\">Les fonctionnalités attendues sont les suivantes :</h3>
        <ul class=\"list-group p-3\">
            <li class=\"list-group-item\">Créer un véhicule</li>
            <li class=\"list-group-item\">Réaliser un CRUD des disponibilités pour un véhicule</li>
            <li class=\"list-group-item\">Consulter les disponibilités d’un véhicule</li>
            <li class=\"list-group-item\">Bonus 1 : Filtrer la recherche par prix</li>
            <li class=\"list-group-item\">Bonus 2 : Proposer des véhicules disponibles à +/- 1 jour de la date de recherche, si pas de disponibilités à la date souhaitée</li>
        </ul>

        <div class=\"my-3 text-center\">
        <a class=\"btn btn-warning text-center\" href=\"{{ path('admin_vehicle_index')}}\">C'est par ici</a>
        </div>
        
    </section>
{% endblock %}
", "home/index.html.twig", "C:\\Users\\Ikki\\Desktop\\mooving\\templates\\home\\index.html.twig");
    }
}
