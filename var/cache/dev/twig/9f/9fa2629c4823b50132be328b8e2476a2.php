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
class __TwigTemplate_3bf08ba030ddeeb0726ef13289d644b7 extends Template
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

        echo "Equipment index
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<section class=\"p-4 my-container\">
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
\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipment_filter_by_category", ["category" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\" class=\"btn btn-info\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 20), "html", null, true);
            echo "</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
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
\t\t\t\t\t";
        // line 53
        echo "\t\t\t\t\t<th class=\"text-center\" scope=\"col\" colspan=\"3\">Action</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody id=\"equipment-table-body\">
\t\t\t\t";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipments"]) || array_key_exists("equipments", $context) ? $context["equipments"] : (function () { throw new RuntimeError('Variable "equipments" does not exist.', 57, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["equipment"]) {
            // line 58
            echo "\t\t\t\t\t<tr id=\"\" class=\"table-row\">
\t\t\t\t\t\t<th class=\"text-center\" scope=\"row\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "id", [], "any", false, false, false, 59), "html", null, true);
            echo "</th>
\t\t\t\t\t\t<td class=\"equipName text-center\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "name", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"equipDesc text-center\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "description", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"equipCategory text-center\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["equipment"], "category", [], "any", false, false, false, 62), "name", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>

\t\t\t\t\t\t";
            // line 69
            echo "
\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t<button onclick=\"addDataToModel('";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipment"], "id", [], "any", false, false, false, 71), "html", null, true);
            echo "','edit')\" value=\"1\" class=\"btn btn-success text-center\" data-bs-toggle=\"modal\" data-bs-target=\"#editEquipModal\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-pen-to-square\"></i>Edit</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<button onclick=\"{addDataToModel('<?php echo \$equipment->serial_number; ?>','delete')}\" class=\"btn btn-danger text-center\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteEquipModal\">Delete</button>

\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 80
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t\t\t</tbody>
\t\t</table>
\t</section>
\t<h1 class=\"w-4/5 m-auto pt-40\">Equipment index</h1>

\t

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
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 114, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 115
            echo "\t\t\t\t\t\t\t\t\t<option value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 115), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 115), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
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
\t\t\t\t\t\t\t<input id=\"edit-name\" type=\"text\" class=\"form-control\" name=\"edit-name\" required>
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
\t\t\t\t\t\t                            changes</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<script>
    equipments = ";
        // line 169
        echo json_encode((isset($context["equipments"]) || array_key_exists("equipments", $context) ? $context["equipments"] : (function () { throw new RuntimeError('Variable "equipments" does not exist.', 169, $this->source); })()));
        echo "
    function searchEquipment() {
        searchForm = \$(\"#search-form\")
        searchInput = \$(\"#search-input\")
        serial_number = searchInput.val();

        searchForm.prop(\"action\", `/equipments/\${serial_number}`)
        searchForm.submit()
    }

    function addEquipment() {
        addStatus = \"available\"
        addCategory = \$(\"#add-category\").val()
        // \$('<input>').attr('type', 'hidden').attr('name', 'status').attr('value', addStatus).appendTo(
        // '#add-equipment-form');
        \$('<input>').attr('type', 'hidden').attr('name', 'category').attr('value', addCategory).appendTo('#add-equipment-form');
        \$(\"#add-equipment-form\").validate();
        \$(\"#add-equipment-form\").submit();
    }

     function addDataToModel(id, action) {
            \$(async function() {
                if (id) {
                    let equipment = {}
                    for (i = 0; i < equipments.length; i++) {
                       
                        if (equipments[i].id == id) {
                            equipment = equipments[i]
                            break
                        }
                    }
                    console.log(equipment);
                    editNameInput = \$(`#\${action}-name`)
                    editNameInput.val(equipment.name);

                    editDescInput = \$(`#\${action}-desc`)
                    editDescInput.val(equipment.description)

                    availableRadio = \$(`#\${action}-status-available`)
                    usedRadio = \$(`#\${action}-status-used`)
                    if (equipment.status == 'available') {
                        availableRadio.prop('checked', true)
                    } else {
                        usedRadio.prop('checked', true)
                    }
                    confirmButton = \$(`#\${action}-confirm`)
                    confirmButton.data(\"serial_number\", id)

                    if (action == 'edit') {
                        \$(\"#edit-name\").on(\"input\", function() {
                            if (this.value == '') {
                                \$(\"#edit-name-blank-error\").prop(\"hidden\", false)
                                confirmButton.prop(\"disabled\", true)
                            } else {
                                \$(\"#edit-name-blank-error\").prop(\"hidden\", true)
                                if (\$(\"#edit-desc-blank-error\").prop(\"hidden\"))
                                    confirmButton.prop(\"disabled\", false)
                            }

                        })
                        \$(\"#edit-desc\").on(\"input\", function() {
                            if (this.value == '') {
                                \$(\"#edit-desc-blank-error\").prop(\"hidden\", false)
                                confirmButton.prop(\"disabled\", true)
                            } else {
                                \$(\"#edit-desc-blank-error\").prop(\"hidden\", true)
                                if (\$(\"#edit-name-blank-error\").prop(\"hidden\"))
                                    confirmButton.prop(\"disabled\", false)
                            }
                        })
                    }
                }
            })

        }

        async function editEquipment() {

            serial_number = \$(\"#edit-confirm\").data(\"serial_number\")
            editName = \$(\"#edit-name\").val()
            editDesc = \$(\"#edit-desc\").val()
            editStatus = \$(\"#edit-status-available\").prop(\"checked\") ? \"available\" : \"used\"
            payload = {
                \"name\": editName,
                \"description\": editDesc,
            }
            console.log(payload)

            if (editName == '') {
                \$(\"#edit-name\").after(\"<p>Please fill in this field</p>\")

            } else if (editDesc == '') {
                \$(\"#edit-desc\").after(\"<p>Please fill in this field</p>\")
            } else {
               
                response = await axios.patch(`http://127.0.0.1:8000/equipments/api/\${serial_number}/edit`, payload)
                console.log(response)
                editedRow = \$(`#\${serial_number}`)

                editedRowName = editedRow.find(\".equipName\")
                editedRowName.text(response.data.data.name)

                editedRowDesc = editedRow.find(\".equipDesc\")
                editedRowDesc.text(response.data.data.description)

                editedRowStatus = editedRow.find(\".equipStatus\")
                editedRowStatus.text(response.data.data.status)

                for (i = 0; i < equipments.length; i++) {
                    if (equipments[i].id == serial_number) {
                        equipments[i].name = editedRowName.text()
                        equipments[i].description = editedRowDesc.text()
                    }
                }
            }
        }
\t</script>
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
        return array (  292 => 169,  238 => 117,  227 => 115,  223 => 114,  191 => 84,  182 => 80,  168 => 71,  164 => 69,  159 => 62,  155 => 61,  151 => 60,  147 => 59,  144 => 58,  139 => 57,  133 => 53,  103 => 22,  92 => 20,  88 => 19,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Equipment index
{% endblock %}

{% block body %}
\t<section class=\"p-4 my-container\">
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
\t\t\t\t\t{# <th class=\"text-center\" scope=\"col\">Category</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <th class=\"text-center\" scope=\"col\">Status</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <th class=\"text-center\" scope=\"col\">Using by</th> #}
\t\t\t\t\t<th class=\"text-center\" scope=\"col\" colspan=\"3\">Action</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody id=\"equipment-table-body\">
\t\t\t\t{% for equipment in equipments %}
\t\t\t\t\t<tr id=\"\" class=\"table-row\">
\t\t\t\t\t\t<th class=\"text-center\" scope=\"row\">{{ equipment.id }}</th>
\t\t\t\t\t\t<td class=\"equipName text-center\">{{ equipment.name }}</td>
\t\t\t\t\t\t<td class=\"equipDesc text-center\">{{ equipment.description }}</td>
\t\t\t\t\t\t<td class=\"equipCategory text-center\">{{ equipment.category.name }}</td>

\t\t\t\t\t\t{# <td class=\"text-center equipCategory\">asd</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <td class=\"text-center equipStatus\">asd</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <td class=\"text-center equipUser\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            asd
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        </td> #}

\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t<button onclick=\"addDataToModel('{{ equipment.id }}','edit')\" value=\"1\" class=\"btn btn-success text-center\" data-bs-toggle=\"modal\" data-bs-target=\"#editEquipModal\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-pen-to-square\"></i>Edit</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<button onclick=\"{addDataToModel('<?php echo \$equipment->serial_number; ?>','delete')}\" class=\"btn btn-danger text-center\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteEquipModal\">Delete</button>

\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% else %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t</section>
\t<h1 class=\"w-4/5 m-auto pt-40\">Equipment index</h1>

\t

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
\t\t\t\t\t\t\t<input id=\"edit-name\" type=\"text\" class=\"form-control\" name=\"edit-name\" required>
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
\t\t\t\t\t\t                            changes</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<script>
    equipments = {{ equipments | json_encode() | raw }}
    function searchEquipment() {
        searchForm = \$(\"#search-form\")
        searchInput = \$(\"#search-input\")
        serial_number = searchInput.val();

        searchForm.prop(\"action\", `/equipments/\${serial_number}`)
        searchForm.submit()
    }

    function addEquipment() {
        addStatus = \"available\"
        addCategory = \$(\"#add-category\").val()
        // \$('<input>').attr('type', 'hidden').attr('name', 'status').attr('value', addStatus).appendTo(
        // '#add-equipment-form');
        \$('<input>').attr('type', 'hidden').attr('name', 'category').attr('value', addCategory).appendTo('#add-equipment-form');
        \$(\"#add-equipment-form\").validate();
        \$(\"#add-equipment-form\").submit();
    }

     function addDataToModel(id, action) {
            \$(async function() {
                if (id) {
                    let equipment = {}
                    for (i = 0; i < equipments.length; i++) {
                       
                        if (equipments[i].id == id) {
                            equipment = equipments[i]
                            break
                        }
                    }
                    console.log(equipment);
                    editNameInput = \$(`#\${action}-name`)
                    editNameInput.val(equipment.name);

                    editDescInput = \$(`#\${action}-desc`)
                    editDescInput.val(equipment.description)

                    availableRadio = \$(`#\${action}-status-available`)
                    usedRadio = \$(`#\${action}-status-used`)
                    if (equipment.status == 'available') {
                        availableRadio.prop('checked', true)
                    } else {
                        usedRadio.prop('checked', true)
                    }
                    confirmButton = \$(`#\${action}-confirm`)
                    confirmButton.data(\"serial_number\", id)

                    if (action == 'edit') {
                        \$(\"#edit-name\").on(\"input\", function() {
                            if (this.value == '') {
                                \$(\"#edit-name-blank-error\").prop(\"hidden\", false)
                                confirmButton.prop(\"disabled\", true)
                            } else {
                                \$(\"#edit-name-blank-error\").prop(\"hidden\", true)
                                if (\$(\"#edit-desc-blank-error\").prop(\"hidden\"))
                                    confirmButton.prop(\"disabled\", false)
                            }

                        })
                        \$(\"#edit-desc\").on(\"input\", function() {
                            if (this.value == '') {
                                \$(\"#edit-desc-blank-error\").prop(\"hidden\", false)
                                confirmButton.prop(\"disabled\", true)
                            } else {
                                \$(\"#edit-desc-blank-error\").prop(\"hidden\", true)
                                if (\$(\"#edit-name-blank-error\").prop(\"hidden\"))
                                    confirmButton.prop(\"disabled\", false)
                            }
                        })
                    }
                }
            })

        }

        async function editEquipment() {

            serial_number = \$(\"#edit-confirm\").data(\"serial_number\")
            editName = \$(\"#edit-name\").val()
            editDesc = \$(\"#edit-desc\").val()
            editStatus = \$(\"#edit-status-available\").prop(\"checked\") ? \"available\" : \"used\"
            payload = {
                \"name\": editName,
                \"description\": editDesc,
            }
            console.log(payload)

            if (editName == '') {
                \$(\"#edit-name\").after(\"<p>Please fill in this field</p>\")

            } else if (editDesc == '') {
                \$(\"#edit-desc\").after(\"<p>Please fill in this field</p>\")
            } else {
               
                response = await axios.patch(`http://127.0.0.1:8000/equipments/api/\${serial_number}/edit`, payload)
                console.log(response)
                editedRow = \$(`#\${serial_number}`)

                editedRowName = editedRow.find(\".equipName\")
                editedRowName.text(response.data.data.name)

                editedRowDesc = editedRow.find(\".equipDesc\")
                editedRowDesc.text(response.data.data.description)

                editedRowStatus = editedRow.find(\".equipStatus\")
                editedRowStatus.text(response.data.data.status)

                for (i = 0; i < equipments.length; i++) {
                    if (equipments[i].id == serial_number) {
                        equipments[i].name = editedRowName.text()
                        equipments[i].description = editedRowDesc.text()
                    }
                }
            }
        }
\t</script>
{% endblock %}
", "equipment/index.html.twig", "D:\\hoanganh\\symfony\\symfonytest\\templates\\equipment\\index.html.twig");
    }
}
