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

/* sidebar.html.twig */
class __TwigTemplate_60115977da6ae1c0897433852c00ac21 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sidebar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand d-flex flex-column align-item-start\" id=\"sidebar\">
\t<a href=\"#\" class=\"navbar-brand text-light mb-4\">
\t\t<div class=\"display-5 font-weight-bold\">TMA</div>
\t</a>
\t<ul class=\"navbar-nav d-flex flex-column  w-100\">
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "roles", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 7
            echo "\t\t\t";
            if (($context["role"] == "ROLE_ADMIN")) {
                // line 8
                echo "\t\t\t\t<li class=\"nav-item w-100 \">
\t\t\t\t<a class=\"nav-link text-light pl-4\" href=\"/equipments\">Equipments</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item w-100 \">
\t\t\t\t\t<a class=\"nav-link text-light pl-4\" href=\"\">Categories</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 15
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t<li class=\"nav-item w-100 \">
\t\t\t<a class=\"nav-link text-light pl-4\" href=\"\">My Equipments</a>
\t\t</li>
\t\t<li class=\"nav-item w-100\">
\t\t\t<a class=\"nav-link text-light pl-4\" href=\"\" class=\"\">My info</a>
\t\t</li>
\t\t<li class=\"nav-item w-100\">
\t\t\t<a class=\"nav-link text-light pl-4\" href=\"/logout\" class=\"\">Logout</a>
\t\t</li>
\t</ul>
</nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  63 => 15,  54 => 8,  51 => 7,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand d-flex flex-column align-item-start\" id=\"sidebar\">
\t<a href=\"#\" class=\"navbar-brand text-light mb-4\">
\t\t<div class=\"display-5 font-weight-bold\">TMA</div>
\t</a>
\t<ul class=\"navbar-nav d-flex flex-column  w-100\">
\t\t{% for role in app.user.roles %}
\t\t\t{% if role == 'ROLE_ADMIN' %}
\t\t\t\t<li class=\"nav-item w-100 \">
\t\t\t\t<a class=\"nav-link text-light pl-4\" href=\"/equipments\">Equipments</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item w-100 \">
\t\t\t\t\t<a class=\"nav-link text-light pl-4\" href=\"\">Categories</a>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t{% endfor %}
\t\t<li class=\"nav-item w-100 \">
\t\t\t<a class=\"nav-link text-light pl-4\" href=\"\">My Equipments</a>
\t\t</li>
\t\t<li class=\"nav-item w-100\">
\t\t\t<a class=\"nav-link text-light pl-4\" href=\"\" class=\"\">My info</a>
\t\t</li>
\t\t<li class=\"nav-item w-100\">
\t\t\t<a class=\"nav-link text-light pl-4\" href=\"/logout\" class=\"\">Logout</a>
\t\t</li>
\t</ul>
</nav>
", "sidebar.html.twig", "D:\\hoanganh\\symfony\\symfonytest\\templates\\sidebar.html.twig");
    }
}
