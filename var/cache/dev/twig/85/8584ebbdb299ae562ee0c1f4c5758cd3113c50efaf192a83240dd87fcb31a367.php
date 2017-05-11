<?php

/* suppliers_details/show.html.twig */
class __TwigTemplate_ff3c2ec7ffa8eadba503ef6333bb5d60b14264657770489cc52e6432de70e2e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "suppliers_details/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2be0937fa8d17931bcedc73f9dfc504b2537eedb88ab633050b07eeecba4db82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2be0937fa8d17931bcedc73f9dfc504b2537eedb88ab633050b07eeecba4db82->enter($__internal_2be0937fa8d17931bcedc73f9dfc504b2537eedb88ab633050b07eeecba4db82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "suppliers_details/show.html.twig"));

        $__internal_4116dabf0f392a9918be7f222d3075f1a47c266da1190096872efb098e3ca371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4116dabf0f392a9918be7f222d3075f1a47c266da1190096872efb098e3ca371->enter($__internal_4116dabf0f392a9918be7f222d3075f1a47c266da1190096872efb098e3ca371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "suppliers_details/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2be0937fa8d17931bcedc73f9dfc504b2537eedb88ab633050b07eeecba4db82->leave($__internal_2be0937fa8d17931bcedc73f9dfc504b2537eedb88ab633050b07eeecba4db82_prof);

        
        $__internal_4116dabf0f392a9918be7f222d3075f1a47c266da1190096872efb098e3ca371->leave($__internal_4116dabf0f392a9918be7f222d3075f1a47c266da1190096872efb098e3ca371_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1c5686e6823dac867cf408636bf0c21756a30cd21a481b5092baec84be577aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1c5686e6823dac867cf408636bf0c21756a30cd21a481b5092baec84be577aa->enter($__internal_d1c5686e6823dac867cf408636bf0c21756a30cd21a481b5092baec84be577aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e9629783af148d281f365450c28096105fd592d4cc05f3c760e558f11c70f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e9629783af148d281f365450c28096105fd592d4cc05f3c760e558f11c70f90->enter($__internal_0e9629783af148d281f365450c28096105fd592d4cc05f3c760e558f11c70f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Suppliers_detail</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["suppliers_detail"] ?? $this->getContext($context, "suppliers_detail")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Suppliersid</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["suppliers_detail"] ?? $this->getContext($context, "suppliers_detail")), "suppliersId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Susuppliersname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["suppliers_detail"] ?? $this->getContext($context, "suppliers_detail")), "susuppliersName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Suppliersbusinesstype</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["suppliers_detail"] ?? $this->getContext($context, "suppliers_detail")), "suppliersBusinessType", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Suppliersweb</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["suppliers_detail"] ?? $this->getContext($context, "suppliers_detail")), "suppliersWeb", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppliers_details_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppliers_details_edit", array("id" => $this->getAttribute(($context["suppliers_detail"] ?? $this->getContext($context, "suppliers_detail")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0e9629783af148d281f365450c28096105fd592d4cc05f3c760e558f11c70f90->leave($__internal_0e9629783af148d281f365450c28096105fd592d4cc05f3c760e558f11c70f90_prof);

        
        $__internal_d1c5686e6823dac867cf408636bf0c21756a30cd21a481b5092baec84be577aa->leave($__internal_d1c5686e6823dac867cf408636bf0c21756a30cd21a481b5092baec84be577aa_prof);

    }

    public function getTemplateName()
    {
        return "suppliers_details/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 41,  107 => 39,  101 => 36,  95 => 33,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Suppliers_detail</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ suppliers_detail.id }}</td>
            </tr>
            <tr>
                <th>Suppliersid</th>
                <td>{{ suppliers_detail.suppliersId }}</td>
            </tr>
            <tr>
                <th>Susuppliersname</th>
                <td>{{ suppliers_detail.susuppliersName }}</td>
            </tr>
            <tr>
                <th>Suppliersbusinesstype</th>
                <td>{{ suppliers_detail.suppliersBusinessType }}</td>
            </tr>
            <tr>
                <th>Suppliersweb</th>
                <td>{{ suppliers_detail.suppliersWeb }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('suppliers_details_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('suppliers_details_edit', { 'id': suppliers_detail.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "suppliers_details/show.html.twig", "C:\\laragon\\www\\Hotel\\pro\\app\\Resources\\views\\suppliers_details\\show.html.twig");
    }
}
