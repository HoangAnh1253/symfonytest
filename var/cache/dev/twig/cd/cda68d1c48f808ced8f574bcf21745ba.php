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

/* security/login.html.twig */
class __TwigTemplate_b5683ab3de020b90a8a982a7201b3549 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "
";
        // line 60
        echo "
<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Login</title>
    <!-- CSS only -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
    <!-- custom css -->
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js\"
        integrity=\"sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://kit.fontawesome.com/a076d05399.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
    <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>


    <style>
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #0067FF;
            background-image: linear-gradient(-315deg, #0067FF 0%, #008FFD 30%);
        }

        .login {
            width: 360px;
            height: min-content;
            padding: 20px;
            border-radius: 12px;
            background: #FFF;
        }

        .login h1 {
            font-size: 36px;
            margin-bottom: 25px;

        }

        .login form .form-group {
            margin-bottom: 12px;
        }

        .login form input[type=submit] {
            font-size: 20px;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div class=\"login\">

        <h1 class=\"text-center\">LOGIN</h1>
        <form class=\"\" method=\"POST\" action=\"/login\">
        

    ";
        // line 126
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "user", [], "any", false, false, false, 126)) {
            // line 127
            echo "        <div class=\"mb-3\">
            You are logged in as ";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "user", [], "any", false, false, false, 128), "email", [], "any", false, false, false, 128), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        </div>
    ";
        }
        // line 131
        echo "            <div class=\"form-group\">
                <label class=\"form-lable\" for=\"email\">Email address</label>
                <input  type=\"email\" 
                value=\"";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 134, $this->source); })()), "html", null, true);
        echo "\" 
                name=\"email\" 
                id=\"inputEmail\" 
                class=\"form-control\" 
                placeholder=\"Email\"
                autocomplete=\"email\" 
                required 
                autofocus>
            </div>
            <div class=\"form-group\">
                <label class=\"form-lable\" for=\"password\">Password</label>
                <input class=\"form-control\" type=\"password\" name=\"password\" required autocomplete=\"current-password\" 
                placeholder=\"Password\"
                required>
            </div>
             <input 
                type=\"hidden\" 
                name=\"_csrf_token\"
                value=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
            >
            <input id=\"btnLogin\" class=\"btn btn-success w-100\" type=\"submit\" value=\"SIGN IN\">
             ";
        // line 155
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 155, $this->source); })())) {
            // line 156
            echo "        <div id=\"alert\" class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                    <div>Invalid credential</div>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
        ";
        }
        // line 161
        echo "        </form>
    </div>
</body>

</html>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 161,  158 => 156,  156 => 155,  150 => 152,  129 => 134,  124 => 131,  116 => 128,  113 => 127,  111 => 126,  43 => 60,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{# 
{% block title %}Log in!{% endblock %}

{% block body %}
<form method=\"post\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            You are logged in as {{ app.user.email }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}

    <div class=\"w-4/5 m-auto text-center\">
        <div class=\"py-12 border-b border-gray-200\">
            <h1 class=\"text-6xl pt-12 pb-8\">
                Login
            </h1>
    
            <input 
                type=\"email\" 
                value=\"{{ last_username }}\" 
                name=\"email\" 
                id=\"inputEmail\" 
                class=\"bg-transparent block mt-10 mx-auto border-b-2 w-1/5 h-20 text-2xl outline-none\" 
                placeholder=\"Email\"
                autocomplete=\"email\" 
                required 
                autofocus
            >

            <input 
                type=\"password\" 
                name=\"password\" 
                id=\"inputPassword\" 
                class=\"bg-transparent block mt-10 mx-auto border-b-2 w-1/5 h-20 text-2xl outline-none\" 
                autocomplete=\"current-password\" 
                placeholder=\"Password\"
                required
            >

            <input 
                type=\"hidden\" 
                name=\"_csrf_token\"
                value=\"{{ csrf_token('authenticate') }}\"
            >

            <button 
                class=\"uppercase mt-15 bg-blue-500 text-gray-100 text-lg w-1/5 mt-10 font-extrabold py-4 px-8 rounded-3xl\" 
                type=\"submit\">
                Sign in
            </button>
        </form>
    </div>
</div>
{% endblock %} #}

<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Login</title>
    <!-- CSS only -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
    <!-- custom css -->
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js\"
        integrity=\"sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://kit.fontawesome.com/a076d05399.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
    <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>


    <style>
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #0067FF;
            background-image: linear-gradient(-315deg, #0067FF 0%, #008FFD 30%);
        }

        .login {
            width: 360px;
            height: min-content;
            padding: 20px;
            border-radius: 12px;
            background: #FFF;
        }

        .login h1 {
            font-size: 36px;
            margin-bottom: 25px;

        }

        .login form .form-group {
            margin-bottom: 12px;
        }

        .login form input[type=submit] {
            font-size: 20px;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div class=\"login\">

        <h1 class=\"text-center\">LOGIN</h1>
        <form class=\"\" method=\"POST\" action=\"/login\">
        

    {% if app.user %}
        <div class=\"mb-3\">
            You are logged in as {{ app.user.email }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}
            <div class=\"form-group\">
                <label class=\"form-lable\" for=\"email\">Email address</label>
                <input  type=\"email\" 
                value=\"{{ last_username }}\" 
                name=\"email\" 
                id=\"inputEmail\" 
                class=\"form-control\" 
                placeholder=\"Email\"
                autocomplete=\"email\" 
                required 
                autofocus>
            </div>
            <div class=\"form-group\">
                <label class=\"form-lable\" for=\"password\">Password</label>
                <input class=\"form-control\" type=\"password\" name=\"password\" required autocomplete=\"current-password\" 
                placeholder=\"Password\"
                required>
            </div>
             <input 
                type=\"hidden\" 
                name=\"_csrf_token\"
                value=\"{{ csrf_token('authenticate') }}\"
            >
            <input id=\"btnLogin\" class=\"btn btn-success w-100\" type=\"submit\" value=\"SIGN IN\">
             {% if error %}
        <div id=\"alert\" class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                    <div>Invalid credential</div>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
        {% endif %}
        </form>
    </div>
</body>

</html>


", "security/login.html.twig", "D:\\hoanganh\\symfony\\symfonytest\\templates\\security\\login.html.twig");
    }
}
