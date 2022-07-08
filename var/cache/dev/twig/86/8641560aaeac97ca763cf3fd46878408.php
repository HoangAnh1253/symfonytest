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

/* movies/show.html.twig */
class __TwigTemplate_8ab2078d7a070baff9c9fc0318ea2c63 extends Template
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
        return "./base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movies/show.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "movies/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"sm:w-3/5 w-4/5 mx-auto\">
\t\t<h1 class=\"pt-20 sm:text-5xl md:text-7xl text-4xl font-bold text-center\">
\t\t\t";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "
\t\t</h1>

\t\t<div class=\"py-10 text-center\">
\t\t\t<div class=\"inline-block sm:pt-1\">
\t\t\t\t<h2 class=\"font-bold\">
\t\t\t\t\tCreated by: Code With Dary
\t\t\t\t</h2>

\t\t\t\t<p class=\"text-sm text-gray-600\">
\t\t\t\t\t28-01-2022 4 min. read
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<p class=\"text-xl\">
\t\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), "html", null, true);
        echo "
\t\t\t</p>
\t\t</div>

\t\t<img src=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 24, $this->source); })()), "imagePath", [], "any", false, false, false, 24), "html", null, true);
        echo "\" class=\"rounded-xl w-full shadow-xl text-center mx-auto\" alt=\"Icon of Code With Dary\" style=\" width: auto; height: 500px;\"/>

\t\t<a href=\"/movies/edit/";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), "html", null, true);
        echo "\" class=\"bg-green-500 font-bold py-2 px-4 rounded transition-all hover:bg-green-300\">
\t\t\tEdit Movie
\t\t</a>
\t\t<a href=\"/movies/delete/";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29), "html", null, true);
        echo "\" class=\"bg-red-500 font-bold py-2 px-4 ml-6 rounded transition-all hover:bg-red-300\">
\t\t\tDelete Movie
\t\t</a>

\t\t";
        // line 46
        echo "\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "movies/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 46,  98 => 29,  92 => 26,  87 => 24,  80 => 20,  63 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends './base.html.twig' %}

{% block body %}
\t<div class=\"sm:w-3/5 w-4/5 mx-auto\">
\t\t<h1 class=\"pt-20 sm:text-5xl md:text-7xl text-4xl font-bold text-center\">
\t\t\t{{ movie.title }}
\t\t</h1>

\t\t<div class=\"py-10 text-center\">
\t\t\t<div class=\"inline-block sm:pt-1\">
\t\t\t\t<h2 class=\"font-bold\">
\t\t\t\t\tCreated by: Code With Dary
\t\t\t\t</h2>

\t\t\t\t<p class=\"text-sm text-gray-600\">
\t\t\t\t\t28-01-2022 4 min. read
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<p class=\"text-xl\">
\t\t\t\t{{ movie.description }}
\t\t\t</p>
\t\t</div>

\t\t<img src=\"{{ movie.imagePath }}\" class=\"rounded-xl w-full shadow-xl text-center mx-auto\" alt=\"Icon of Code With Dary\" style=\" width: auto; height: 500px;\"/>

\t\t<a href=\"/movies/edit/{{ movie.id }}\" class=\"bg-green-500 font-bold py-2 px-4 rounded transition-all hover:bg-green-300\">
\t\t\tEdit Movie
\t\t</a>
\t\t<a href=\"/movies/delete/{{ movie.id }}\" class=\"bg-red-500 font-bold py-2 px-4 ml-6 rounded transition-all hover:bg-red-300\">
\t\t\tDelete Movie
\t\t</a>

\t\t{# {% if app.user and movie.userId == app.user.id %}
\t\t\t\t            <a 
\t\t\t\t                href=\"/movies/edit/{{ movie.id }}\"
\t\t\t\t                class=\"bg-green-500 font-bold py-2 px-4 rounded transition-all hover:bg-green-300\">
\t\t\t\t                Edit Movie
\t\t\t\t            </a>
\t\t\t\t
\t\t\t\t            <a 
\t\t\t\t                href=\"/movies/delete/{{ movie.id }}\"
\t\t\t\t                class=\"bg-red-500 font-bold py-2 px-4 ml-6 rounded transition-all hover:bg-red-300\">
\t\t\t\t                Delete Movie
\t\t\t\t            </a>
\t\t\t\t        {% endif %} #}
\t</div>
{% endblock %}
", "movies/show.html.twig", "D:\\hoanganh\\symfony\\symfonytest\\templates\\movies\\show.html.twig");
    }
}
