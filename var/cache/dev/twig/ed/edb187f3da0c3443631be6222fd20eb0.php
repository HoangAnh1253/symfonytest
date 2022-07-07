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

/* equipment/index.html.twig */
class __TwigTemplate_5b556902af38a47f23f5115bf6eb8287 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipment/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "equipment/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Equipment index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<section class=\"p-4 my-container\">
        <h1>Equipment</h1>
        <form method=\"GET\" id=\"search-form\">
            <div class=\"input-group\">
                <div class=\"form-outline\">
                    <input type=\"search\" id=\"search-input\" class=\"form-control\" placeholder=\"Enter equipment's id\" />
                </div>
                <button onclick=\"searchEquipment(event)\" id=\"search-btn\" style=\"height: 38px\" type=\"button\"
                    class=\"btn btn-primary\">
                    <i class=\"fas fa-search\">Search</i>
                </button>
                <a href=\"\" type=\"button\"
                    class=\"btn btn-info\">All</a>
              
            </div>
        
        </form>

        <div style=\"position: relative\" class=\"autocomplete form-outline\">
            <label style=\"margin-top: 40px\" for=\"\"><b>Filter by User</b></label>
            <input id=\"search-by-user-input\" class=\"form-control\" placeholder=\"Enter user's name or user's id\" />

            <p style=\"color: red\" hidden id='search-user-equipment-notfound-error'>User not found</p>

            <button onclick=\"searchUserEquipments()\" id=\"search-user-equipment-confirm\" style=\"height: 38px\" type=\"button\"
                class=\"btn btn-primary\" disabled>
                <i id=\"\" class=\"fas fa-search\">Search</i>
            </button>
            <form id=\"search-user-equipment-form\" method=\"GET\" action=\"\" hidden></form>
        </div>
        <div class=\"mt-4\">
            <button onclick=\"{addDataToModel(false,'addEquipModal')}\" class=\"btn btn-primary\" data-bs-toggle=\"modal\"
                data-bs-target=\"#addEquipModal\"><i class=\"fa-solid fa-plus\"></i>Add</button>
        </div>
        <table class=\"table table-hover\">
            <thead class=\"table-light\">
                <tr>
                    <th class=\"text-center\" scope=\"col\">Serial Number</th>
                    <th class=\"text-center\" scope=\"col\">Name</th>
                    <th class=\"text-center\" scope=\"col\">Description</th>
                    <th class=\"text-center\" scope=\"col\">Category</th>
                    <th class=\"text-center\" scope=\"col\">Status</th>
                    <th class=\"text-center\" scope=\"col\">Using by</th>
                    <th class=\"text-center\" scope=\"col\" colspan=\"3\">Actions</th>
                </tr>
            </thead>
            <tbody id=\"equipment-table-body\">
               
                    <tr id=\"\" class=\"table-row\">
                        <th class=\"text-center\" scope=\"row\">asd</th>
                        <td class=\"equipName\">asd</td>
                        <td class=\"equipDesc\">asd</td>
                        <td class=\"text-center equipCategory\">asd</td>
                        <td class=\"text-center equipStatus\">asd</td>
                        <td class=\"text-center equipUser\">
                            asd
                        </td>

                        <td>
                            <button onclick=\"{addDataToModel('<?php echo \$equipment->serial_number; ?>','edit')}\" value=\"1\"
                                class=\"btn btn-success\" data-bs-toggle=\"modal\" data-bs-target=\"#editEquipModal\">
                                <i class=\"fas fa-pen-to-square\"></i>Edit</button>
                        </td>
                        <td>
                           
                        </td>
                        <td>
                            <button onclick=\"{addDataToModel('<?php echo \$equipment->serial_number; ?>','delete')}\" class=\"btn btn-danger\"
                                data-bs-toggle=\"modal\" data-bs-target=\"#deleteEquipModal\">Delete</button>

                        </td>
                    </tr>
             
            </tbody>
        </table>
    </section>
    <h1 class=\"w-4/5 m-auto pt-40\">Equipment index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipments"]) || array_key_exists("equipments", $context) ? $context["equipments"] : (function () { throw new RuntimeError('Variable "equipments" does not exist.', 94, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["equipment"]) {
            // line 95
            echo "            <tr>
                <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "id", [], "any", false, false, false, 96), "html", null, true);
            echo "</td>
                <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "name", [], "any", false, false, false, 97), "html", null, true);
            echo "</td>
                <td>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "description", [], "any", false, false, false, 98), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipment_show", ["id" => twig_get_attribute($this->env, $this->source, $context["equipment"], "id", [], "any", false, false, false, 100)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipment_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["equipment"], "id", [], "any", false, false, false, 101)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 105
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipment_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "equipment/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 112,  206 => 109,  197 => 105,  188 => 101,  184 => 100,  179 => 98,  175 => 97,  171 => 96,  168 => 95,  163 => 94,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Equipment index{% endblock %}

{% block body %}
<section class=\"p-4 my-container\">
        <h1>Equipment</h1>
        <form method=\"GET\" id=\"search-form\">
            <div class=\"input-group\">
                <div class=\"form-outline\">
                    <input type=\"search\" id=\"search-input\" class=\"form-control\" placeholder=\"Enter equipment's id\" />
                </div>
                <button onclick=\"searchEquipment(event)\" id=\"search-btn\" style=\"height: 38px\" type=\"button\"
                    class=\"btn btn-primary\">
                    <i class=\"fas fa-search\">Search</i>
                </button>
                <a href=\"\" type=\"button\"
                    class=\"btn btn-info\">All</a>
              
            </div>
        
        </form>

        <div style=\"position: relative\" class=\"autocomplete form-outline\">
            <label style=\"margin-top: 40px\" for=\"\"><b>Filter by User</b></label>
            <input id=\"search-by-user-input\" class=\"form-control\" placeholder=\"Enter user's name or user's id\" />

            <p style=\"color: red\" hidden id='search-user-equipment-notfound-error'>User not found</p>

            <button onclick=\"searchUserEquipments()\" id=\"search-user-equipment-confirm\" style=\"height: 38px\" type=\"button\"
                class=\"btn btn-primary\" disabled>
                <i id=\"\" class=\"fas fa-search\">Search</i>
            </button>
            <form id=\"search-user-equipment-form\" method=\"GET\" action=\"\" hidden></form>
        </div>
        <div class=\"mt-4\">
            <button onclick=\"{addDataToModel(false,'addEquipModal')}\" class=\"btn btn-primary\" data-bs-toggle=\"modal\"
                data-bs-target=\"#addEquipModal\"><i class=\"fa-solid fa-plus\"></i>Add</button>
        </div>
        <table class=\"table table-hover\">
            <thead class=\"table-light\">
                <tr>
                    <th class=\"text-center\" scope=\"col\">Serial Number</th>
                    <th class=\"text-center\" scope=\"col\">Name</th>
                    <th class=\"text-center\" scope=\"col\">Description</th>
                    <th class=\"text-center\" scope=\"col\">Category</th>
                    <th class=\"text-center\" scope=\"col\">Status</th>
                    <th class=\"text-center\" scope=\"col\">Using by</th>
                    <th class=\"text-center\" scope=\"col\" colspan=\"3\">Actions</th>
                </tr>
            </thead>
            <tbody id=\"equipment-table-body\">
               
                    <tr id=\"\" class=\"table-row\">
                        <th class=\"text-center\" scope=\"row\">asd</th>
                        <td class=\"equipName\">asd</td>
                        <td class=\"equipDesc\">asd</td>
                        <td class=\"text-center equipCategory\">asd</td>
                        <td class=\"text-center equipStatus\">asd</td>
                        <td class=\"text-center equipUser\">
                            asd
                        </td>

                        <td>
                            <button onclick=\"{addDataToModel('<?php echo \$equipment->serial_number; ?>','edit')}\" value=\"1\"
                                class=\"btn btn-success\" data-bs-toggle=\"modal\" data-bs-target=\"#editEquipModal\">
                                <i class=\"fas fa-pen-to-square\"></i>Edit</button>
                        </td>
                        <td>
                           
                        </td>
                        <td>
                            <button onclick=\"{addDataToModel('<?php echo \$equipment->serial_number; ?>','delete')}\" class=\"btn btn-danger\"
                                data-bs-toggle=\"modal\" data-bs-target=\"#deleteEquipModal\">Delete</button>

                        </td>
                    </tr>
             
            </tbody>
        </table>
    </section>
    <h1 class=\"w-4/5 m-auto pt-40\">Equipment index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for equipment in equipments %}
            <tr>
                <td>{{ equipment.id }}</td>
                <td>{{ equipment.name }}</td>
                <td>{{ equipment.description }}</td>
                <td>
                    <a href=\"{{ path('app_equipment_show', {'id': equipment.id}) }}\">show</a>
                    <a href=\"{{ path('app_equipment_edit', {'id': equipment.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_equipment_new') }}\">Create new</a>
{% endblock %}
", "equipment/index.html.twig", "D:\\hoanganh\\symfony\\symfonytest\\templates\\equipment\\index.html.twig");
    }
}
