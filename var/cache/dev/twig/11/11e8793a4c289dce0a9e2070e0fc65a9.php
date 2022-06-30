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
class __TwigTemplate_15d013d56711aacc47a742335157a873 extends Template
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
        echo "  <div class=\"sm:w-3/5 w-4/5 mx-auto\">
    <h1 class=\"pt-20 sm:text-5xl md:text-7xl text-4xl font-bold text-center\">
      ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "
    </h1>

    <div class=\"py-10 text-center\">
      <div class=\"inline-block sm:pt-1\">
        <h2 class=\"font-bold\">
          Created by: Code With Dary
        </h2>

        <p class=\"text-sm text-gray-600\">
          28-01-2022 4 min. read
        </p>
      </div>
      <p class=\"text-xl\">
        ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), "html", null, true);
        echo "
      </p>
    </div>

    <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 24, $this->source); })()), "imagePath", [], "any", false, false, false, 24), "html", null, true);
        echo "\"
      class=\"rounded-xl w-full shadow-xl text-center mx-auto\"
      alt=\"Icon of Code With Dary\" 
      style=\" width: auto; height: 500px;\"
    />

    ";
        // line 43
        echo "  </div>
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
        return array (  96 => 43,  87 => 24,  80 => 20,  63 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends './base.html.twig' %}

{% block body %}
  <div class=\"sm:w-3/5 w-4/5 mx-auto\">
    <h1 class=\"pt-20 sm:text-5xl md:text-7xl text-4xl font-bold text-center\">
      {{ movie.title }}
    </h1>

    <div class=\"py-10 text-center\">
      <div class=\"inline-block sm:pt-1\">
        <h2 class=\"font-bold\">
          Created by: Code With Dary
        </h2>

        <p class=\"text-sm text-gray-600\">
          28-01-2022 4 min. read
        </p>
      </div>
      <p class=\"text-xl\">
        {{ movie.description }}
      </p>
    </div>

    <img src=\"{{ movie.imagePath }}\"
      class=\"rounded-xl w-full shadow-xl text-center mx-auto\"
      alt=\"Icon of Code With Dary\" 
      style=\" width: auto; height: 500px;\"
    />

    {# {% if app.user and movie.userId == app.user.id %}
            <a 
                href=\"/movies/edit/{{ movie.id }}\"
                class=\"bg-green-500 font-bold py-2 px-4 rounded transition-all hover:bg-green-300\">
                Edit Movie
            </a>

            <a 
                href=\"/movies/delete/{{ movie.id }}\"
                class=\"bg-red-500 font-bold py-2 px-4 ml-6 rounded transition-all hover:bg-red-300\">
                Delete Movie
            </a>
        {% endif %} #}
  </div>
{% endblock %}
", "movies/show.html.twig", "D:\\hoanganh\\symfonytest\\templates\\movies\\show.html.twig");
    }
}
