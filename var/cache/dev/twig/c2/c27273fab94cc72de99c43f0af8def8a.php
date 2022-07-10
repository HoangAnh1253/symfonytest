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
class __TwigTemplate_e29d1a4b1d06d47bf72070d216c90de4 extends Template
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
\t\t<li class=\"nav-item w-100 \">
\t\t\t<a class=\"nav-link text-light pl-4\" href=\"/equipments\">Equipments</a>
\t\t</li>
\t\t<li class=\"nav-item w-100 \">
\t\t\t<a class=\"nav-link text-light pl-4\" href=\"\">Categories</a>
\t\t</li>
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand d-flex flex-column align-item-start\" id=\"sidebar\">
\t<a href=\"#\" class=\"navbar-brand text-light mb-4\">
\t\t<div class=\"display-5 font-weight-bold\">TMA</div>
\t</a>
\t<ul class=\"navbar-nav d-flex flex-column  w-100\">
\t\t<li class=\"nav-item w-100 \">
\t\t\t<a class=\"nav-link text-light pl-4\" href=\"/equipments\">Equipments</a>
\t\t</li>
\t\t<li class=\"nav-item w-100 \">
\t\t\t<a class=\"nav-link text-light pl-4\" href=\"\">Categories</a>
\t\t</li>
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
", "sidebar.html.twig", "/Users/nguyenlamhoanganh/project/symfony/wtf/templates/sidebar.html.twig");
    }
}