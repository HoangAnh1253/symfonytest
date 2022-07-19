<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* equipment/myEquipment.html.twig */
class __TwigTemplate_0cf08a693dd282dca206d2a4e6717b18 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipment/myEquipment.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "equipment/myEquipment.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Equipment
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <section class=\"p-4 my-container\">
    <h1>
      My Equipments
    </h1>
    <table class=\"table\">
      <thead class=\"table-light\">
        <tr>
          <th scope=\"col\">
            ID
          </th>
          <th scope=\"col\">
            Name
          </th>
          <th scope=\"col\">
            Description
          </th>
        </tr>
      </thead>
      <tbody id=\"equipment-table-body\">
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipments"]) || array_key_exists("equipments", $context) ? $context["equipments"] : (function () { throw new RuntimeError('Variable "equipments" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["equipment"]) {
            // line 28
            echo "          <tr id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\" class=\"table-row\">
            <th scope=\"row\">
              ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "
            </th>
            <td class=\"equipName\">
              ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "name", [], "any", false, false, false, 33), "html", null, true);
            echo "
            </td>
            <td class=\"equipDesc\">
              ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "desc", [], "any", false, false, false, 36), "html", null, true);
            echo "
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "      </tbody>
    </table>
  </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "equipment/myEquipment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 40,  118 => 36,  112 => 33,  106 => 30,  100 => 28,  96 => 27,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
  Equipment
{% endblock %}

{% block body %}
  <section class=\"p-4 my-container\">
    <h1>
      My Equipments
    </h1>
    <table class=\"table\">
      <thead class=\"table-light\">
        <tr>
          <th scope=\"col\">
            ID
          </th>
          <th scope=\"col\">
            Name
          </th>
          <th scope=\"col\">
            Description
          </th>
        </tr>
      </thead>
      <tbody id=\"equipment-table-body\">
        {% for equipment in equipments %}
          <tr id=\"{{ equipment.id }}\" class=\"table-row\">
            <th scope=\"row\">
              {{ equipment.id }}
            </th>
            <td class=\"equipName\">
              {{ equipment.name }}
            </td>
            <td class=\"equipDesc\">
              {{ equipment.desc }}
            </td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </section>
{% endblock %}
", "equipment/myEquipment.html.twig", "/Users/nguyenlamhoanganh/project/symfony/wtf/templates/equipment/myEquipment.html.twig");
    }
}
