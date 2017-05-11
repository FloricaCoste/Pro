<?php

/* product_details/show.html.twig */
class __TwigTemplate_b15dd91e1f23108791184806324233169be938bf604ed08053348b7f2021dda8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product_details/show.html.twig", 1);
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
        $__internal_2dceefe883039e5c04a19a6847fd5aec97ae3bcd6eaef3e1d8c2df3d9ce146db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dceefe883039e5c04a19a6847fd5aec97ae3bcd6eaef3e1d8c2df3d9ce146db->enter($__internal_2dceefe883039e5c04a19a6847fd5aec97ae3bcd6eaef3e1d8c2df3d9ce146db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product_details/show.html.twig"));

        $__internal_4cd417106f3a93781fbea58854297750ba61cf7386387d8020418ac3de56cf69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cd417106f3a93781fbea58854297750ba61cf7386387d8020418ac3de56cf69->enter($__internal_4cd417106f3a93781fbea58854297750ba61cf7386387d8020418ac3de56cf69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product_details/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dceefe883039e5c04a19a6847fd5aec97ae3bcd6eaef3e1d8c2df3d9ce146db->leave($__internal_2dceefe883039e5c04a19a6847fd5aec97ae3bcd6eaef3e1d8c2df3d9ce146db_prof);

        
        $__internal_4cd417106f3a93781fbea58854297750ba61cf7386387d8020418ac3de56cf69->leave($__internal_4cd417106f3a93781fbea58854297750ba61cf7386387d8020418ac3de56cf69_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f74cff664a5e4848b4a8605b9b222dcfdb1b17be1f152fb24bed22fd3c179a6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f74cff664a5e4848b4a8605b9b222dcfdb1b17be1f152fb24bed22fd3c179a6a->enter($__internal_f74cff664a5e4848b4a8605b9b222dcfdb1b17be1f152fb24bed22fd3c179a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d736fa76a5fb0cbd4660317ecda8e03009086026c3f8b0afd658111f25c1a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d736fa76a5fb0cbd4660317ecda8e03009086026c3f8b0afd658111f25c1a47->enter($__internal_5d736fa76a5fb0cbd4660317ecda8e03009086026c3f8b0afd658111f25c1a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Product details: </h1>

    <table>
        <tbody>
            <tr>
                <th>Id:</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product_detail"] ?? $this->getContext($context, "product_detail")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Product id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product_detail"] ?? $this->getContext($context, "product_detail")), "productID", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Product name</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product_detail"] ?? $this->getContext($context, "product_detail")), "productName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Product type</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product_detail"] ?? $this->getContext($context, "product_detail")), "productType", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Suppliers id</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product_detail"] ?? $this->getContext($context, "product_detail")), "suppliersID", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Product description</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product_detail"] ?? $this->getContext($context, "product_detail")), "productDescription", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_details_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_details_edit", array("id" => $this->getAttribute(($context["product_detail"] ?? $this->getContext($context, "product_detail")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_5d736fa76a5fb0cbd4660317ecda8e03009086026c3f8b0afd658111f25c1a47->leave($__internal_5d736fa76a5fb0cbd4660317ecda8e03009086026c3f8b0afd658111f25c1a47_prof);

        
        $__internal_f74cff664a5e4848b4a8605b9b222dcfdb1b17be1f152fb24bed22fd3c179a6a->leave($__internal_f74cff664a5e4848b4a8605b9b222dcfdb1b17be1f152fb24bed22fd3c179a6a_prof);

    }

    public function getTemplateName()
    {
        return "product_details/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 45,  114 => 43,  108 => 40,  102 => 37,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Product details: </h1>

    <table>
        <tbody>
            <tr>
                <th>Id:</th>
                <td>{{ product_detail.id }}</td>
            </tr>
            <tr>
                <th>Product id</th>
                <td>{{ product_detail.productID }}</td>
            </tr>
            <tr>
                <th>Product name</th>
                <td>{{ product_detail.productName }}</td>
            </tr>
            <tr>
                <th>Product type</th>
                <td>{{ product_detail.productType }}</td>
            </tr>
            <tr>
                <th>Suppliers id</th>
                <td>{{ product_detail.suppliersID }}</td>
            </tr>
            <tr>
                <th>Product description</th>
                <td>{{ product_detail.productDescription }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('product_details_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('product_details_edit', { 'id': product_detail.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "product_details/show.html.twig", "C:\\laragon\\www\\Hotel\\pro\\app\\Resources\\views\\product_details\\show.html.twig");
    }
}
