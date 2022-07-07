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

/* base.html.twig */
class __TwigTemplate_e0debaedfcd21b7e74af82499411ba21 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t<link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t<script src=\"https://cdn.tailwindcss.com\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js\" defer></script>
\t\t<!-- bootstrap 5 css -->
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2\" crossorigin=\"anonymous\"></script>
\t\t<link rel=\"stylesheet\" href=\"app.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css\" integrity=\"sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
\t\t<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js\"></script>
\t</head>
\t<body class=\"bg-gray-100 h-screen antialiased leading-none font-sans\">
\t\t";
        // line 22
        $this->displayBlock('header', $context, $blocks);
        // line 75
        echo "
\t\t";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "
\t\t";
        // line 78
        $this->displayBlock('footer', $context, $blocks);
        // line 85
        echo "\t</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 22
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 23
        echo "\t\t\t<header>
\t\t\t\t<nav class=\"flex items-center justify-between flex-wrap p-6 fixed w-full z-10 top-0\" x-data=\"{ isOpen: false }\" @keydown.escape=\"isOpen = false\" :class=\"{ 'shadow-lg bg-gray-600' : isOpen , 'bg-gray-600' : !isOpen}\">

\t\t\t\t\t<div class=\"flex items-center flex-shrink-0 text-white mr-6\">
\t\t\t\t\t\t<a class=\"text-white no-underline hover:text-white hover:no-underline\" href=\"/\">
\t\t\t\t\t\t\t<span class=\"text-2xl pl-2 font-extrabold\">
\t\t\t\t\t\t\t\tMovies
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<button @click=\"isOpen = !isOpen\" type=\"button\" class=\"block lg:hidden px-2 text-gray-500 hover:text-white focus:outline-none focus:text-white\" :class=\"{ 'transition transform-180': isOpen }\">

\t\t\t\t\t\t<svg class=\"h-6 w-6 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\">

\t\t\t\t\t\t\t<path x-show=\"isOpen\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z\"/>

\t\t\t\t\t\t\t<path x-show=\"!isOpen\" fill-rule=\"evenodd\" d=\"M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>

\t\t\t\t\t<div class=\"w-full flex-grow lg:flex lg:items-center lg:w-auto\" :class=\"{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }\" @click.away=\"isOpen = false\" x-show.transition=\"true\">

\t\t\t\t\t\t<ul class=\"pt-6 lg:pt-0 list-reset lg:flex justify-end flex-1 items-center\">
\t\t\t\t\t\t\t<li class=\"mr-3\">
\t\t\t\t\t\t\t\t<a class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\" href=\"/\" @click=\"isOpen = false\">
\t\t\t\t\t\t\t\t\tHome
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"mr-3\">
\t\t\t\t\t\t\t\t<a class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\" href=\"/movies\" @click=\"isOpen = false\">Movies
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"mr-3\">
\t\t\t\t\t\t\t\t<a class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\" href=\"/contact\" @click=\"isOpen = false\">
\t\t\t\t\t\t\t\t\tContact
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"mr-3\">
\t\t\t\t\t\t\t\t<a class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\" href=\"/";
        // line 65
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65)) ? ("logout") : ("login"));
        echo "\" @click=\"isOpen = false\">
\t\t\t\t\t\t\t\t\t";
        // line 66
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66)) ? ("Logout") : ("Login"));
        echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</header>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 76
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 78
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 79
        echo "\t\t\t<footer class=\"bg-gray-600 py-6 mt-20\">
\t\t\t\t<p class=\"w-25 w-4/5 text-center pb-3 m-auto text-base text-gray-100 pt-6\">
\t\t\t\t\tCopyright 2021 Code With Dary. All Rights Reserved
\t\t\t\t</p>
\t\t\t</footer>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  194 => 79,  187 => 78,  175 => 76,  159 => 66,  155 => 65,  111 => 23,  104 => 22,  90 => 6,  81 => 85,  79 => 78,  76 => 77,  74 => 76,  71 => 75,  69 => 22,  53 => 8,  51 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}Welcome!
\t\t\t{% endblock %}
\t\t</title>
\t\t<link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t<script src=\"https://cdn.tailwindcss.com\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js\" defer></script>
\t\t<!-- bootstrap 5 css -->
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2\" crossorigin=\"anonymous\"></script>
\t\t<link rel=\"stylesheet\" href=\"app.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css\" integrity=\"sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
\t\t<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js\"></script>
\t</head>
\t<body class=\"bg-gray-100 h-screen antialiased leading-none font-sans\">
\t\t{% block header %}
\t\t\t<header>
\t\t\t\t<nav class=\"flex items-center justify-between flex-wrap p-6 fixed w-full z-10 top-0\" x-data=\"{ isOpen: false }\" @keydown.escape=\"isOpen = false\" :class=\"{ 'shadow-lg bg-gray-600' : isOpen , 'bg-gray-600' : !isOpen}\">

\t\t\t\t\t<div class=\"flex items-center flex-shrink-0 text-white mr-6\">
\t\t\t\t\t\t<a class=\"text-white no-underline hover:text-white hover:no-underline\" href=\"/\">
\t\t\t\t\t\t\t<span class=\"text-2xl pl-2 font-extrabold\">
\t\t\t\t\t\t\t\tMovies
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<button @click=\"isOpen = !isOpen\" type=\"button\" class=\"block lg:hidden px-2 text-gray-500 hover:text-white focus:outline-none focus:text-white\" :class=\"{ 'transition transform-180': isOpen }\">

\t\t\t\t\t\t<svg class=\"h-6 w-6 fill-current\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\">

\t\t\t\t\t\t\t<path x-show=\"isOpen\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z\"/>

\t\t\t\t\t\t\t<path x-show=\"!isOpen\" fill-rule=\"evenodd\" d=\"M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>

\t\t\t\t\t<div class=\"w-full flex-grow lg:flex lg:items-center lg:w-auto\" :class=\"{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }\" @click.away=\"isOpen = false\" x-show.transition=\"true\">

\t\t\t\t\t\t<ul class=\"pt-6 lg:pt-0 list-reset lg:flex justify-end flex-1 items-center\">
\t\t\t\t\t\t\t<li class=\"mr-3\">
\t\t\t\t\t\t\t\t<a class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\" href=\"/\" @click=\"isOpen = false\">
\t\t\t\t\t\t\t\t\tHome
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"mr-3\">
\t\t\t\t\t\t\t\t<a class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\" href=\"/movies\" @click=\"isOpen = false\">Movies
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"mr-3\">
\t\t\t\t\t\t\t\t<a class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\" href=\"/contact\" @click=\"isOpen = false\">
\t\t\t\t\t\t\t\t\tContact
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"mr-3\">
\t\t\t\t\t\t\t\t<a class=\"inline-block text-gray-300 no-underline hover:text-gray-200 hover:text-underline py-2 px-4\" href=\"/{{app.user ? 'logout' : 'login'}}\" @click=\"isOpen = false\">
\t\t\t\t\t\t\t\t\t{{ app.user ? 'Logout' : 'Login' }}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</header>
\t\t{% endblock %}

\t\t{% block body %}{% endblock %}

\t\t{% block footer %}
\t\t\t<footer class=\"bg-gray-600 py-6 mt-20\">
\t\t\t\t<p class=\"w-25 w-4/5 text-center pb-3 m-auto text-base text-gray-100 pt-6\">
\t\t\t\t\tCopyright 2021 Code With Dary. All Rights Reserved
\t\t\t\t</p>
\t\t\t</footer>
\t\t{% endblock %}
\t</body>
</html>
", "base.html.twig", "D:\\hoanganh\\symfony\\symfonytest\\templates\\base.html.twig");
    }
}
