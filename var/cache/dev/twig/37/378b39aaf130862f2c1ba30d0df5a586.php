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
class __TwigTemplate_849f2bf5e499eebfa7e1f7900a130497 extends Template
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
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<section class=\"p-4 my-container\">
\t\t";
        // line 5
        if (array_key_exists("errors", $context)) {
            // line 6
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 6, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 7
                echo "\t\t\t<div class=\"alert alert-danger alert-dismissible\" role=\"alert\" style=\"display: inline-block\">
                    <div>";
                // line 8
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</div>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\">X</button>
        \t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "\t\t";
        }
        // line 13
        echo "\t\t";
        if (array_key_exists("violations", $context)) {
            // line 14
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["violations"]) || array_key_exists("violations", $context) ? $context["violations"] : (function () { throw new RuntimeError('Variable "violations" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["violation"]) {
                // line 15
                echo "\t\t\t<div class=\"alert alert-danger alert-dismissible\" role=\"alert\" style=\"display: inline-block\">
                    <div>";
                // line 16
                echo twig_escape_filter($this->env, $context["violation"], "html", null, true);
                echo "</div>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\">X</button>
        \t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['violation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "\t\t";
        }
        // line 21
        echo "\t\t<h1>Equipment</h1>
\t\t<form method=\"GET\" id=\"search-form\">
\t\t\t<div class=\"input-group\">
\t\t\t\t<div class=\"form-outline\">
\t\t\t\t\t<input type=\"search\" id=\"search-input\" class=\"form-control\" placeholder=\"Enter equipment's id\"/>
\t\t\t\t</div>
\t\t\t\t<button onclick=\"searchEquipment()\" id=\"search-btn\" style=\"height: 38px\" class=\"btn btn-primary\">
\t\t\t\t\t<i class=\"fas fa-search\">Search</i>
\t\t\t\t</button>

\t\t\t\t<a href=\"/equipments\" class=\"btn btn-info\">All</a>
\t\t\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 33
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipment_filter_by_category", ["category" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\" class=\"btn btn-info\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 33), "html", null, true);
            echo "</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t</div>

\t\t</form>

\t\t<div style=\"position: relative\" class=\"autocomplete form-outline\">
\t\t\t<label style=\"margin-top: 40px\" for=\"\">
\t\t\t\t<b>Filter by User</b>
\t\t\t</label>
\t\t\t<input id=\"search-by-user-input\" class=\"form-control\" placeholder=\"Enter user's name or user's id\"/>

\t\t\t<p style=\"color: red\" hidden id='search-user-equipment-notfound-error'>User not found</p>

\t\t\t<button onclick=\"searchUserEquipments()\" id=\"search-user-equipment-confirm\" style=\"height: 38px\" class=\"btn btn-primary\" disabled>
\t\t\t\t<i id=\"\" class=\"fas fa-search\">Search</i>
\t\t\t</button>
\t\t\t<form id=\"search-user-equipment-form\" method=\"GET\" action=\"\" hidden></form>
\t\t</div>
\t\t<div class=\"mt-4\">
\t\t\t<button onclick=\"{addDataToModel(false,'addEquipModal')}\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#equipment\">
\t\t\t\t<i class=\"fa-solid fa-plus\"></i>Add</button>
\t\t</div>
\t\t<table class=\"table table-hover\">
\t\t\t<thead class=\"table-light\">
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"text-center\" scope=\"col\">ID</th>
\t\t\t\t\t<th class=\"text-center\" scope=\"col\">Name</th>
\t\t\t\t\t<th class=\"text-center\" scope=\"col\">Description</th>
\t\t\t\t\t<th class=\"text-center\" scope=\"col\">Category</th>
\t\t\t\t\t<th class=\"text-center\" scope=\"col\">Status</th>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <th class=\"text-center\" scope=\"col\">Using by</th>
\t\t\t\t\t<th class=\"text-center\" scope=\"col\" colspan=\"3\">Action</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody id=\"equipment-table-body\">
\t\t\t\t";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipments"]) || array_key_exists("equipments", $context) ? $context["equipments"] : (function () { throw new RuntimeError('Variable "equipments" does not exist.', 70, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["equipment"]) {
            // line 71
            echo "\t\t\t\t\t<tr id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "id", [], "any", false, false, false, 71), "html", null, true);
            echo "\" class=\"table-row\">
\t\t\t\t\t\t<th class=\"text-center\" scope=\"row\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "id", [], "any", false, false, false, 72), "html", null, true);
            echo "</th>
\t\t\t\t\t\t<td class=\"equipName text-center\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "name", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"equipDesc text-center\">";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "description", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"equipCategory text-center\">";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["equipment"], "category", [], "any", false, false, false, 75), "name", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"text-center equipStatus\">";
            // line 76
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["equipment"], "assigns", [], "any", false, false, false, 76), "first", [], "any", false, false, false, 76)) ? ("used") : ("available"));
            echo "</td>
                    \t<td class=\"text-center equipUser\">
                       \t ";
            // line 78
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["equipment"], "assigns", [], "any", false, false, false, 78), "first", [], "any", false, false, false, 78)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["equipment"], "assigns", [], "any", false, false, false, 78), "first", [], "any", false, false, false, 78), "user", [], "any", false, false, false, 78), "name", [], "any", false, false, false, 78), "html", null, true))) : (print ("")));
            echo "
                    \t</td>\t\t
\t\t\t\t\t
\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t<button onclick=\"addDataToModel('";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "id", [], "any", false, false, false, 82), "html", null, true);
            echo "','edit')\" value=\"1\" class=\"btn btn-success text-center\" data-bs-toggle=\"modal\" data-bs-target=\"#editEquipModal\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-pen-to-square\"></i>Edit</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
                            <button onclick=\"openAssignModal(";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "id", [], "any", false, false, false, 86), "html", null, true);
            echo ")\" class=\"btn btn-warning\"
                                data-bs-toggle=\"modal\" data-bs-target=\"#assignEquipModal\"
                                ";
            // line 88
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["equipment"], "assigns", [], "any", false, false, false, 88), "first", [], "any", false, false, false, 88)) ? ("hidden") : (""));
            echo "><i
                                    class=\"fas fa-user-check\"></i>Assign</button>
                            <button onclick=\"unAssignEquipment(this.parentNode.parentNode.id,this)\"
                                class=\"btn btn-secondary unassign-btn\"
                                ";
            // line 92
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["equipment"], "assigns", [], "any", false, false, false, 92), "first", [], "any", false, false, false, 92)) ? ("") : ("hidden"));
            echo "><i
                                    class=\"fas fa-user-xmark\"></i>Unassigned</button>
                        </td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<button  onclick=\"addDataToModel('";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "id", [], "any", false, false, false, 96), "html", null, true);
            echo "','delete')\" class=\"btn btn-danger text-center\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteEquipModal\">Delete</button>

\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 101
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "\t\t\t</tbody>
\t\t</table>
\t\t";
        // line 107
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["equipments"]) || array_key_exists("equipments", $context) ? $context["equipments"] : (function () { throw new RuntimeError('Variable "equipments" does not exist.', 107, $this->source); })()));
        echo "
\t</section>


\t<!-- Add Equipment Modal -->
\t<div class=\"modal fade \" id=\"equipment\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"false\">
\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Add Equipment</h5>
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<form method=\"POST\" action=\"/equipments/new\" id=\"add-equipment-form\">
\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add-item"), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t<div class=\"mb-3 form-group\">
\t\t\t\t\t\t\t<label for=\"add-name\" class=\"form-label\">Name</label>
\t\t\t\t\t\t\t<input id=\"add-name\" type=\"text\" class=\"form-control\" name=\"name\" minlength=\"3\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3 form-group\">
\t\t\t\t\t\t\t<label for=\"add-desc\" class=\"form-label\">Description</label>
\t\t\t\t\t\t\t<input id=\"add-desc\" type=\"text\" class=\"form-control\" name=\"description\" required>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mb3\">
\t\t\t\t\t\t\t<label for=\"add-category\" class=\"form-label\">Category</label>
\t\t\t\t\t\t\t<select id=\"add-category\" class=\"form-select form-select-sm\" aria-label=\".form-select-sm example\">
\t\t\t\t\t\t\t\t";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 134, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 135
            echo "\t\t\t\t\t\t\t\t\t<option value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 135), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 135), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t\t\t<button class=\"btn btn-primary\" onclick=\"addEquipment()\">Add Equipment</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Edit Equipment Modal -->
\t<div class=\"modal fade\" id=\"editEquipModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"false\">
\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Edit Equipment</h5>
\t\t\t\t\t<button class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<form action=\"\" id=\"edit-form\">
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"edit-name\" class=\"form-label\">Name</label>
\t\t\t\t\t\t\t<input id=\"edit-name\" type=\"text\" class=\"form-control\" name=\"edit-name\" minlength=\"3\" required>
\t\t\t\t\t\t\t<p style=\"color: red\" hidden id='edit-name-blank-error'>Please fill in this field</p>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"edit-desc\" class=\"form-label\">Description</label>
\t\t\t\t\t\t\t<input id=\"edit-desc\" type=\"text\" class=\"form-control\" name=\"edit-desc\" required>
\t\t\t\t\t\t\t<p style=\"color: red\" hidden id='edit-desc-blank-error'>Please fill in this field</p>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3\" hidden>
\t\t\t\t\t\t\t<label for=\"edit-status\" class=\"form-label\">Status</label>
\t\t\t\t\t\t\t<input class=\"ms-2\" type=\"radio\" name=\"status\" id=\"edit-status-available\"><label for=\"edit-status-available\">Available</label>
\t\t\t\t\t\t\t<input class=\"ms-2\" type=\"radio\" name=\"status\" id=\"edit-status-used\"><label for=\"edit-status-used\">Used</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t\t\t<button onclick=\"editEquipment()\" id=\"edit-confirm\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\">Save
\t\t\t\t\t\t\t\t\t\t\t\t                            changes</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t <!-- Delete Equipment Modal -->
        <div class=\"modal fade modal-delete\" id=\"deleteEquipModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\"
            aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Delete Equipment</h5>
                        <button type=\"button\" class=\"btn-close text-white\" data-bs-dismiss=\"modal\"
                            aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <form method=\"POST\" id=\"delete-form\" action=\"\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"DELETE\"/>
\t\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete"), "html", null, true);
        echo "\"/>
                            <div class=\"mb-3\">
                                <label for=\"delete-name\" class=\"form-label\">Name</label>
                                <input id=\"delete-name\" type=\"text\" class=\"form-control\" name=\"delete-name\"
                                    value=\"abcd\" disabled>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"delete-desc\" class=\"form-label\">Description</label>
                                <input id=\"delete-desc\" type=\"text\" class=\"form-control\" name=\"delete-desc\"
                                    value=\"abcd\" disabled>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"delete-status\" class=\"form-label\">Status</label>
                                <input class=\"ms-2\" type=\"radio\" name=\"status\" id=\"delete-status-available\"
                                    disabled><label for=\"delete-status-available\">Available</label>
                                <input class=\"ms-2\" type=\"radio\" name=\"status\" id=\"delete-status-used\"
                                    disabled><label for=\"delete-status-used\">Used</label>
                            </div>
                        </form>
                    </div>
                    <div class=\"modal-footer\">
                        <button class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                        <button id=\"delete-confirm\" onclick=\"{deleteEquipment()}\" data-bs-dismiss=\"modal\"
                            class=\"btn btn-danger\">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
\t<!-- Assign Equipment Modal -->
    \t<div class=\"modal fade\" id=\"assignEquipModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\"
            aria-hidden=\"false\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Assign Equipment</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"mb-3 autocomplete\">
                            <label for=\"assign-euqipment-input\" class=\"form-label\">User's name or ID</label>
                            <input id=\"assign-equipment-input\" type=\"text\" class=\"form-control\"
                                name=\"assign-equipment\" value=\"\" placeholder=\"Enter user's name or user's id\">
                            <p style=\"color: red\" hidden id='assign-blank-error'>Please fill in this field</p>
                            <p style=\"color: red\" hidden id='assign-notfound-error'>User not found</p>

                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                        <button onclick=\"assignEquipment()\" id=\"assign-confirm\" data-bs-dismiss=\"modal\"
                            class=\"btn btn-primary\">Save changes
\t\t\t\t\t\t</button>
                    </div>
                </div>
            </div>
        </div>
\t<script>
equipments = ";
        // line 257
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["equipments"]) || array_key_exists("equipments", $context) ? $context["equipments"] : (function () { throw new RuntimeError('Variable "equipments" does not exist.', 257, $this->source); })()), "items", [], "any", false, false, false, 257));
        echo "
users = ";
        // line 258
        echo json_encode(((array_key_exists("users", $context)) ? (_twig_default_filter((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 258, $this->source); })()), "")) : ("")));
        echo "
function searchEquipment() {
\tsearchForm = \$(\"#search-form\")
\tsearchInput = \$(\"#search-input\")
\tserial_number = searchInput.val();

\tsearchForm.prop(\"action\", `/equipments/\${serial_number}`)
\tsearchForm.submit()
}

function addEquipment() {
\taddStatus = \"available\"
\taddCategory = \$(\"#add-category\").val()
\t// \$('<input>').attr('type', 'hidden').attr('name', 'status').attr('value', addStatus).appendTo(
\t// '#add-equipment-form');
\t\$('<input>').attr('type', 'hidden').attr('name', 'category').attr('value', addCategory).appendTo('#add-equipment-form');
\t\$(\"#add-equipment-form\").validate();
\t\$(\"#add-equipment-form\").submit();
}

function addDataToModel(id, action) {
\t\t\$(async function () {
\t\t\tif (id) {
\t\t\tlet equipment = {}
\t\t\tfor (i = 0; i < equipments.length; i ++) {
\t\t\t\tif (equipments[i].id == id) {
\t\t\t\t\tequipment = equipments[i]
\t\t\t\t\tbreak
\t\t\t\t}
\t\t\t}
\t\t\teditNameInput = \$ (`#\${action}-name`)
\t\t\teditNameInput.val(equipment.name);

\t\t\teditDescInput = \$ (`#\${action}-desc`)
\t\t\teditDescInput.val(equipment.description)

\t\t\tavailableRadio = \$ (`#\${action}-status-available`)
\t\t\tusedRadio = \$ (`#\${action}-status-used`)
\t\t\tif (equipment.status == 'available') {
\t\t\tavailableRadio.prop('checked', true)
\t\t\t} else {
\t\t\tusedRadio.prop('checked', true)
\t\t\t}
\t\t\tconfirmButton = \$ (`#\${action}-confirm`)
\t\t\tconfirmButton.data(\"id\", id)

\t\t\tif (action == 'edit') {
\t\t\t\$(\"#edit-name\").on(\"input\", function () {
\t\t\tif (this.value == '') {
\t\t\t\$(\"#edit-name-blank-error\").prop(\"hidden\", false)
\t\t\tconfirmButton.prop(\"disabled\", true)
\t\t\t} else {
\t\t\t\$(\"#edit-name-blank-error\").prop(\"hidden\", true)
\t\t\tif (\$(\"#edit-desc-blank-error\").prop(\"hidden\")) 
\t\t\tconfirmButton.prop(\"disabled\", false)

\t\t\t}

\t\t\t})

\t\t\t\$(\"#edit-desc\").on(\"input\", function () {
\t\t\t\tif (this.value == '') {
\t\t\t\t\t\$(\"#edit-desc-blank-error\").prop(\"hidden\", false)
\t\t\t\t\tconfirmButton.prop(\"disabled\", true)
\t\t\t\t} else {
\t\t\t\t\t\$(\"#edit-desc-blank-error\").prop(\"hidden\", true)
\t\t\t\t\tif (\$(\"#edit-name-blank-error\").prop(\"hidden\")) 
\t\t\t\t\tconfirmButton.prop(\"disabled\", false)

\t\t\t\t}
\t\t\t})
\t\t}
\t\t}
\t})

}

async function editEquipment() {

\tserial_number = \$(\"#edit-confirm\").data(\"id\")
\teditName = \$(\"#edit-name\").val()
\teditDesc = \$(\"#edit-desc\").val()
\teditStatus = \$(\"#edit-status-available\").prop(\"checked\") ? \"available\" : \"used\"
\tpayload = {
\t\t\"name\": editName,
\t\t\"description\": editDesc
\t}


\tif (editName == '') {
\t\$(\"#edit-name\").after(\"<p>Please fill in this field</p>\")

\t} else if (editDesc == '') {
\t\$(\"#edit-desc\").after(\"<p>Please fill in this field</p>\")
\t} else {
\tresponse = await axios.patch(`http://127.0.0.1:8000/equipments/api/\${serial_number}/edit`, payload)
\t\teditedRow = \$ (`#\${serial_number}`)

\t\teditedRowName = editedRow.find(\".equipName\")
\t\teditedRowName.text(response.data.name)

\t\teditedRowDesc = editedRow.find(\".equipDesc\")
\t\teditedRowDesc.text(response.data.description)

\t

\t\t//editedRowStatus = editedRow.find(\".equipStatus\")
\t\t//editedRowStatus.text(response.data.status)

\t\tfor (i = 0; i < equipments.length; i ++) {
\t\tif (equipments[i].id == serial_number) {
\t\tequipments[i].name = editedRowName.text()
\t\tequipments[i].description = editedRowDesc.text()
\t\t}
\t\t}
\t}
}

function deleteEquipment(){
\tlet deleteForm = \$(\"#delete-form\")
    let id = \$(\"#delete-confirm\").data(\"id\")
    deleteForm.prop(\"action\", `/equipments/\${id}`)
    deleteForm.submit()
}

 function openAssignModal(id) {
    assignBtn = \$(\"#assign-confirm\");
    assignBtn.data(\"id\", id)
}

async function assignEquipment() {

            id = \$(\"#assign-confirm\").data(\"id\")
            userId = \$(\"#assign-equipment-input\").val()
            selectdEquipment = equipments.find(equipment => {
                return equipment.id == id
            })
            
                payload = {
                    \"user_id\": userId
                }
\t\t\t\tconsole.log(payload)

                response = await axios.patch(`http://127.0.0.1:8000/equipments/api/\${id}/assign`, payload)
\t\t\t\tconsole.log(response)
                editedRow = \$(`#\${id}`)

                editedRowUser = editedRow.find(\".equipUser\")
                editedRowUser.text(`\${response.data.name}`)

\t\t\t\teditedRowStatus = editedRow.find('.equipStatus')
                editedRowStatus.text('used')

                editedRowUnassignBtn = editedRow.find(\".unassign-btn\")
                editedRowUnassignBtn.prop(\"hidden\", false)

                editedRowAssignBtn = editedRow.find(\".btn-warning\")
                editedRowAssignBtn.prop(\"hidden\", true)

                assignModal = \$(\"#assignEquipModal\")
                assignModal.find(\".btn-secondary\").click()
            //}

}

async function unAssignEquipment(id) {
            selectdEquipment = equipments.find(equipment => {
                return equipment.id == id
            })

            response = await axios.get(`http://127.0.0.1:8000/equipments/api/\${id}/unassign`)
            editedRow = \$(`#\${id}`)

            editedRowUser = editedRow.find(\".equipUser\")
            editedRowUser.text(\"\")

\t\t\teditedRowStatus = editedRow.find('.equipStatus')
            editedRowStatus.text('available')

\t\t\tunassignBtn = editedRow.find(\".unassign-btn\")
            unassignBtn.prop(\"hidden\", true)

            assignBtn = editedRow.find(\".btn-warning\")
            assignBtn.prop(\"hidden\", false)
}

</script>
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
        return array (  438 => 258,  434 => 257,  374 => 200,  309 => 137,  298 => 135,  294 => 134,  278 => 121,  261 => 107,  257 => 105,  248 => 101,  238 => 96,  231 => 92,  224 => 88,  219 => 86,  212 => 82,  205 => 78,  200 => 76,  196 => 75,  192 => 74,  188 => 73,  184 => 72,  179 => 71,  174 => 70,  137 => 35,  126 => 33,  122 => 32,  109 => 21,  106 => 20,  96 => 16,  93 => 15,  88 => 14,  85 => 13,  82 => 12,  72 => 8,  69 => 7,  64 => 6,  62 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<section class=\"p-4 my-container\">
\t\t{% if errors is defined %}
\t\t{% for error in errors %}
\t\t\t<div class=\"alert alert-danger alert-dismissible\" role=\"alert\" style=\"display: inline-block\">
                    <div>{{ error }}</div>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\">X</button>
        \t</div>
\t\t{% endfor %}
\t\t{% endif %}
\t\t{% if violations is defined %}
\t\t{% for violation in violations %}
\t\t\t<div class=\"alert alert-danger alert-dismissible\" role=\"alert\" style=\"display: inline-block\">
                    <div>{{ violation }}</div>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\">X</button>
        \t</div>
\t\t{% endfor %}
\t\t{% endif %}
\t\t<h1>Equipment</h1>
\t\t<form method=\"GET\" id=\"search-form\">
\t\t\t<div class=\"input-group\">
\t\t\t\t<div class=\"form-outline\">
\t\t\t\t\t<input type=\"search\" id=\"search-input\" class=\"form-control\" placeholder=\"Enter equipment's id\"/>
\t\t\t\t</div>
\t\t\t\t<button onclick=\"searchEquipment()\" id=\"search-btn\" style=\"height: 38px\" class=\"btn btn-primary\">
\t\t\t\t\t<i class=\"fas fa-search\">Search</i>
\t\t\t\t</button>

\t\t\t\t<a href=\"/equipments\" class=\"btn btn-info\">All</a>
\t\t\t\t{% for category in categories %}
\t\t\t\t\t<a href=\"{{ path('app_equipment_filter_by_category', {'category': category.id}) }}\" class=\"btn btn-info\">{{ category.title }}</a>
\t\t\t\t{% endfor %}
\t\t\t</div>

\t\t</form>

\t\t<div style=\"position: relative\" class=\"autocomplete form-outline\">
\t\t\t<label style=\"margin-top: 40px\" for=\"\">
\t\t\t\t<b>Filter by User</b>
\t\t\t</label>
\t\t\t<input id=\"search-by-user-input\" class=\"form-control\" placeholder=\"Enter user's name or user's id\"/>

\t\t\t<p style=\"color: red\" hidden id='search-user-equipment-notfound-error'>User not found</p>

\t\t\t<button onclick=\"searchUserEquipments()\" id=\"search-user-equipment-confirm\" style=\"height: 38px\" class=\"btn btn-primary\" disabled>
\t\t\t\t<i id=\"\" class=\"fas fa-search\">Search</i>
\t\t\t</button>
\t\t\t<form id=\"search-user-equipment-form\" method=\"GET\" action=\"\" hidden></form>
\t\t</div>
\t\t<div class=\"mt-4\">
\t\t\t<button onclick=\"{addDataToModel(false,'addEquipModal')}\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#equipment\">
\t\t\t\t<i class=\"fa-solid fa-plus\"></i>Add</button>
\t\t</div>
\t\t<table class=\"table table-hover\">
\t\t\t<thead class=\"table-light\">
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"text-center\" scope=\"col\">ID</th>
\t\t\t\t\t<th class=\"text-center\" scope=\"col\">Name</th>
\t\t\t\t\t<th class=\"text-center\" scope=\"col\">Description</th>
\t\t\t\t\t<th class=\"text-center\" scope=\"col\">Category</th>
\t\t\t\t\t<th class=\"text-center\" scope=\"col\">Status</th>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <th class=\"text-center\" scope=\"col\">Using by</th>
\t\t\t\t\t<th class=\"text-center\" scope=\"col\" colspan=\"3\">Action</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody id=\"equipment-table-body\">
\t\t\t\t{% for equipment in equipments %}
\t\t\t\t\t<tr id=\"{{equipment.id}}\" class=\"table-row\">
\t\t\t\t\t\t<th class=\"text-center\" scope=\"row\">{{ equipment.id }}</th>
\t\t\t\t\t\t<td class=\"equipName text-center\">{{ equipment.name }}</td>
\t\t\t\t\t\t<td class=\"equipDesc text-center\">{{ equipment.description }}</td>
\t\t\t\t\t\t<td class=\"equipCategory text-center\">{{ equipment.category.name }}</td>
\t\t\t\t\t\t<td class=\"text-center equipStatus\">{{ equipment.assigns.first ? 'used' : 'available' }}</td>
                    \t<td class=\"text-center equipUser\">
                       \t {{ equipment.assigns.first ? equipment.assigns.first.user.name : '' }}
                    \t</td>\t\t
\t\t\t\t\t
\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t<button onclick=\"addDataToModel('{{ equipment.id }}','edit')\" value=\"1\" class=\"btn btn-success text-center\" data-bs-toggle=\"modal\" data-bs-target=\"#editEquipModal\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-pen-to-square\"></i>Edit</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
                            <button onclick=\"openAssignModal({{ equipment.id }})\" class=\"btn btn-warning\"
                                data-bs-toggle=\"modal\" data-bs-target=\"#assignEquipModal\"
                                {{ equipment.assigns.first  ? 'hidden' : '' }}><i
                                    class=\"fas fa-user-check\"></i>Assign</button>
                            <button onclick=\"unAssignEquipment(this.parentNode.parentNode.id,this)\"
                                class=\"btn btn-secondary unassign-btn\"
                                {{ equipment.assigns.first ? '' : 'hidden' }}><i
                                    class=\"fas fa-user-xmark\"></i>Unassigned</button>
                        </td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<button  onclick=\"addDataToModel('{{ equipment.id }}','delete')\" class=\"btn btn-danger text-center\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteEquipModal\">Delete</button>

\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% else %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t\t{{ knp_pagination_render(equipments) }}
\t</section>


\t<!-- Add Equipment Modal -->
\t<div class=\"modal fade \" id=\"equipment\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"false\">
\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Add Equipment</h5>
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<form method=\"POST\" action=\"/equipments/new\" id=\"add-equipment-form\">
\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('add-item') }}\"/>
\t\t\t\t\t\t<div class=\"mb-3 form-group\">
\t\t\t\t\t\t\t<label for=\"add-name\" class=\"form-label\">Name</label>
\t\t\t\t\t\t\t<input id=\"add-name\" type=\"text\" class=\"form-control\" name=\"name\" minlength=\"3\" required>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3 form-group\">
\t\t\t\t\t\t\t<label for=\"add-desc\" class=\"form-label\">Description</label>
\t\t\t\t\t\t\t<input id=\"add-desc\" type=\"text\" class=\"form-control\" name=\"description\" required>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mb3\">
\t\t\t\t\t\t\t<label for=\"add-category\" class=\"form-label\">Category</label>
\t\t\t\t\t\t\t<select id=\"add-category\" class=\"form-select form-select-sm\" aria-label=\".form-select-sm example\">
\t\t\t\t\t\t\t\t{% for category in categories %}
\t\t\t\t\t\t\t\t\t<option value={{ category.id }}>{{ category.title }}</option>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t\t\t<button class=\"btn btn-primary\" onclick=\"addEquipment()\">Add Equipment</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Edit Equipment Modal -->
\t<div class=\"modal fade\" id=\"editEquipModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"false\">
\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Edit Equipment</h5>
\t\t\t\t\t<button class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<form action=\"\" id=\"edit-form\">
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"edit-name\" class=\"form-label\">Name</label>
\t\t\t\t\t\t\t<input id=\"edit-name\" type=\"text\" class=\"form-control\" name=\"edit-name\" minlength=\"3\" required>
\t\t\t\t\t\t\t<p style=\"color: red\" hidden id='edit-name-blank-error'>Please fill in this field</p>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"edit-desc\" class=\"form-label\">Description</label>
\t\t\t\t\t\t\t<input id=\"edit-desc\" type=\"text\" class=\"form-control\" name=\"edit-desc\" required>
\t\t\t\t\t\t\t<p style=\"color: red\" hidden id='edit-desc-blank-error'>Please fill in this field</p>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3\" hidden>
\t\t\t\t\t\t\t<label for=\"edit-status\" class=\"form-label\">Status</label>
\t\t\t\t\t\t\t<input class=\"ms-2\" type=\"radio\" name=\"status\" id=\"edit-status-available\"><label for=\"edit-status-available\">Available</label>
\t\t\t\t\t\t\t<input class=\"ms-2\" type=\"radio\" name=\"status\" id=\"edit-status-used\"><label for=\"edit-status-used\">Used</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t\t\t<button onclick=\"editEquipment()\" id=\"edit-confirm\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\">Save
\t\t\t\t\t\t\t\t\t\t\t\t                            changes</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t <!-- Delete Equipment Modal -->
        <div class=\"modal fade modal-delete\" id=\"deleteEquipModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\"
            aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Delete Equipment</h5>
                        <button type=\"button\" class=\"btn-close text-white\" data-bs-dismiss=\"modal\"
                            aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <form method=\"POST\" id=\"delete-form\" action=\"\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"DELETE\"/>
\t\t\t\t\t\t<input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete') }}\"/>
                            <div class=\"mb-3\">
                                <label for=\"delete-name\" class=\"form-label\">Name</label>
                                <input id=\"delete-name\" type=\"text\" class=\"form-control\" name=\"delete-name\"
                                    value=\"abcd\" disabled>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"delete-desc\" class=\"form-label\">Description</label>
                                <input id=\"delete-desc\" type=\"text\" class=\"form-control\" name=\"delete-desc\"
                                    value=\"abcd\" disabled>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"delete-status\" class=\"form-label\">Status</label>
                                <input class=\"ms-2\" type=\"radio\" name=\"status\" id=\"delete-status-available\"
                                    disabled><label for=\"delete-status-available\">Available</label>
                                <input class=\"ms-2\" type=\"radio\" name=\"status\" id=\"delete-status-used\"
                                    disabled><label for=\"delete-status-used\">Used</label>
                            </div>
                        </form>
                    </div>
                    <div class=\"modal-footer\">
                        <button class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                        <button id=\"delete-confirm\" onclick=\"{deleteEquipment()}\" data-bs-dismiss=\"modal\"
                            class=\"btn btn-danger\">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
\t<!-- Assign Equipment Modal -->
    \t<div class=\"modal fade\" id=\"assignEquipModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\"
            aria-hidden=\"false\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Assign Equipment</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"mb-3 autocomplete\">
                            <label for=\"assign-euqipment-input\" class=\"form-label\">User's name or ID</label>
                            <input id=\"assign-equipment-input\" type=\"text\" class=\"form-control\"
                                name=\"assign-equipment\" value=\"\" placeholder=\"Enter user's name or user's id\">
                            <p style=\"color: red\" hidden id='assign-blank-error'>Please fill in this field</p>
                            <p style=\"color: red\" hidden id='assign-notfound-error'>User not found</p>

                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                        <button onclick=\"assignEquipment()\" id=\"assign-confirm\" data-bs-dismiss=\"modal\"
                            class=\"btn btn-primary\">Save changes
\t\t\t\t\t\t</button>
                    </div>
                </div>
            </div>
        </div>
\t<script>
equipments = {{ equipments.items | json_encode() | raw }}
users = {{ users|default('') | json_encode() | raw }}
function searchEquipment() {
\tsearchForm = \$(\"#search-form\")
\tsearchInput = \$(\"#search-input\")
\tserial_number = searchInput.val();

\tsearchForm.prop(\"action\", `/equipments/\${serial_number}`)
\tsearchForm.submit()
}

function addEquipment() {
\taddStatus = \"available\"
\taddCategory = \$(\"#add-category\").val()
\t// \$('<input>').attr('type', 'hidden').attr('name', 'status').attr('value', addStatus).appendTo(
\t// '#add-equipment-form');
\t\$('<input>').attr('type', 'hidden').attr('name', 'category').attr('value', addCategory).appendTo('#add-equipment-form');
\t\$(\"#add-equipment-form\").validate();
\t\$(\"#add-equipment-form\").submit();
}

function addDataToModel(id, action) {
\t\t\$(async function () {
\t\t\tif (id) {
\t\t\tlet equipment = {}
\t\t\tfor (i = 0; i < equipments.length; i ++) {
\t\t\t\tif (equipments[i].id == id) {
\t\t\t\t\tequipment = equipments[i]
\t\t\t\t\tbreak
\t\t\t\t}
\t\t\t}
\t\t\teditNameInput = \$ (`#\${action}-name`)
\t\t\teditNameInput.val(equipment.name);

\t\t\teditDescInput = \$ (`#\${action}-desc`)
\t\t\teditDescInput.val(equipment.description)

\t\t\tavailableRadio = \$ (`#\${action}-status-available`)
\t\t\tusedRadio = \$ (`#\${action}-status-used`)
\t\t\tif (equipment.status == 'available') {
\t\t\tavailableRadio.prop('checked', true)
\t\t\t} else {
\t\t\tusedRadio.prop('checked', true)
\t\t\t}
\t\t\tconfirmButton = \$ (`#\${action}-confirm`)
\t\t\tconfirmButton.data(\"id\", id)

\t\t\tif (action == 'edit') {
\t\t\t\$(\"#edit-name\").on(\"input\", function () {
\t\t\tif (this.value == '') {
\t\t\t\$(\"#edit-name-blank-error\").prop(\"hidden\", false)
\t\t\tconfirmButton.prop(\"disabled\", true)
\t\t\t} else {
\t\t\t\$(\"#edit-name-blank-error\").prop(\"hidden\", true)
\t\t\tif (\$(\"#edit-desc-blank-error\").prop(\"hidden\")) 
\t\t\tconfirmButton.prop(\"disabled\", false)

\t\t\t}

\t\t\t})

\t\t\t\$(\"#edit-desc\").on(\"input\", function () {
\t\t\t\tif (this.value == '') {
\t\t\t\t\t\$(\"#edit-desc-blank-error\").prop(\"hidden\", false)
\t\t\t\t\tconfirmButton.prop(\"disabled\", true)
\t\t\t\t} else {
\t\t\t\t\t\$(\"#edit-desc-blank-error\").prop(\"hidden\", true)
\t\t\t\t\tif (\$(\"#edit-name-blank-error\").prop(\"hidden\")) 
\t\t\t\t\tconfirmButton.prop(\"disabled\", false)

\t\t\t\t}
\t\t\t})
\t\t}
\t\t}
\t})

}

async function editEquipment() {

\tserial_number = \$(\"#edit-confirm\").data(\"id\")
\teditName = \$(\"#edit-name\").val()
\teditDesc = \$(\"#edit-desc\").val()
\teditStatus = \$(\"#edit-status-available\").prop(\"checked\") ? \"available\" : \"used\"
\tpayload = {
\t\t\"name\": editName,
\t\t\"description\": editDesc
\t}


\tif (editName == '') {
\t\$(\"#edit-name\").after(\"<p>Please fill in this field</p>\")

\t} else if (editDesc == '') {
\t\$(\"#edit-desc\").after(\"<p>Please fill in this field</p>\")
\t} else {
\tresponse = await axios.patch(`http://127.0.0.1:8000/equipments/api/\${serial_number}/edit`, payload)
\t\teditedRow = \$ (`#\${serial_number}`)

\t\teditedRowName = editedRow.find(\".equipName\")
\t\teditedRowName.text(response.data.name)

\t\teditedRowDesc = editedRow.find(\".equipDesc\")
\t\teditedRowDesc.text(response.data.description)

\t

\t\t//editedRowStatus = editedRow.find(\".equipStatus\")
\t\t//editedRowStatus.text(response.data.status)

\t\tfor (i = 0; i < equipments.length; i ++) {
\t\tif (equipments[i].id == serial_number) {
\t\tequipments[i].name = editedRowName.text()
\t\tequipments[i].description = editedRowDesc.text()
\t\t}
\t\t}
\t}
}

function deleteEquipment(){
\tlet deleteForm = \$(\"#delete-form\")
    let id = \$(\"#delete-confirm\").data(\"id\")
    deleteForm.prop(\"action\", `/equipments/\${id}`)
    deleteForm.submit()
}

 function openAssignModal(id) {
    assignBtn = \$(\"#assign-confirm\");
    assignBtn.data(\"id\", id)
}

async function assignEquipment() {

            id = \$(\"#assign-confirm\").data(\"id\")
            userId = \$(\"#assign-equipment-input\").val()
            selectdEquipment = equipments.find(equipment => {
                return equipment.id == id
            })
            
                payload = {
                    \"user_id\": userId
                }
\t\t\t\tconsole.log(payload)

                response = await axios.patch(`http://127.0.0.1:8000/equipments/api/\${id}/assign`, payload)
\t\t\t\tconsole.log(response)
                editedRow = \$(`#\${id}`)

                editedRowUser = editedRow.find(\".equipUser\")
                editedRowUser.text(`\${response.data.name}`)

\t\t\t\teditedRowStatus = editedRow.find('.equipStatus')
                editedRowStatus.text('used')

                editedRowUnassignBtn = editedRow.find(\".unassign-btn\")
                editedRowUnassignBtn.prop(\"hidden\", false)

                editedRowAssignBtn = editedRow.find(\".btn-warning\")
                editedRowAssignBtn.prop(\"hidden\", true)

                assignModal = \$(\"#assignEquipModal\")
                assignModal.find(\".btn-secondary\").click()
            //}

}

async function unAssignEquipment(id) {
            selectdEquipment = equipments.find(equipment => {
                return equipment.id == id
            })

            response = await axios.get(`http://127.0.0.1:8000/equipments/api/\${id}/unassign`)
            editedRow = \$(`#\${id}`)

            editedRowUser = editedRow.find(\".equipUser\")
            editedRowUser.text(\"\")

\t\t\teditedRowStatus = editedRow.find('.equipStatus')
            editedRowStatus.text('available')

\t\t\tunassignBtn = editedRow.find(\".unassign-btn\")
            unassignBtn.prop(\"hidden\", true)

            assignBtn = editedRow.find(\".btn-warning\")
            assignBtn.prop(\"hidden\", false)
}

</script>
{% endblock %}
", "equipment/index.html.twig", "/Users/nguyenlamhoanganh/project/symfony/wtf/templates/equipment/index.html.twig");
    }
}
