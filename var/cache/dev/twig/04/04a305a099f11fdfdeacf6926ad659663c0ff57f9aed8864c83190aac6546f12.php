<?php

/* product_invetory/show.html.twig */
class __TwigTemplate_90b586f22782335b5428d98762b686f67cac96b2c37089fe93e15d087b65247b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product_invetory/show.html.twig", 1);
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
        $__internal_65cfdc2eec515e0b52b74ca6335562fb0a5254e5aba029cb8b37cebab2ff77c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65cfdc2eec515e0b52b74ca6335562fb0a5254e5aba029cb8b37cebab2ff77c2->enter($__internal_65cfdc2eec515e0b52b74ca6335562fb0a5254e5aba029cb8b37cebab2ff77c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product_invetory/show.html.twig"));

        $__internal_bdc01f2fb54b89bd3acf7cdcbd2ea6cf145673b9080b9536da43632905d7717b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdc01f2fb54b89bd3acf7cdcbd2ea6cf145673b9080b9536da43632905d7717b->enter($__internal_bdc01f2fb54b89bd3acf7cdcbd2ea6cf145673b9080b9536da43632905d7717b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product_invetory/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65cfdc2eec515e0b52b74ca6335562fb0a5254e5aba029cb8b37cebab2ff77c2->leave($__internal_65cfdc2eec515e0b52b74ca6335562fb0a5254e5aba029cb8b37cebab2ff77c2_prof);

        
        $__internal_bdc01f2fb54b89bd3acf7cdcbd2ea6cf145673b9080b9536da43632905d7717b->leave($__internal_bdc01f2fb54b89bd3acf7cdcbd2ea6cf145673b9080b9536da43632905d7717b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ab80b236bcb5b1ec9e6e24f4db2549cdaff840026f0819bd23d69f47abdf876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ab80b236bcb5b1ec9e6e24f4db2549cdaff840026f0819bd23d69f47abdf876->enter($__internal_6ab80b236bcb5b1ec9e6e24f4db2549cdaff840026f0819bd23d69f47abdf876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f58c1fc0e63a7d20f98443f2170bdbf26d751de04f3cb2d63ff418061d02cf07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f58c1fc0e63a7d20f98443f2170bdbf26d751de04f3cb2d63ff418061d02cf07->enter($__internal_f58c1fc0e63a7d20f98443f2170bdbf26d751de04f3cb2d63ff418061d02cf07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Product inventory</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product_invetory"] ?? $this->getContext($context, "product_invetory")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Productid</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product_invetory"] ?? $this->getContext($context, "product_invetory")), "productID", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Productcountinggroup</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product_invetory"] ?? $this->getContext($context, "product_invetory")), "productCountingGroup", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Productunit</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product_invetory"] ?? $this->getContext($context, "product_invetory")), "productUnit", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Qualityunit</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product_invetory"] ?? $this->getContext($context, "product_invetory")), "qualityUnit", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Priceunit</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product_invetory"] ?? $this->getContext($context, "product_invetory")), "priceUnit", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Productdescription</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product_invetory"] ?? $this->getContext($context, "product_invetory")), "productDescription", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Url</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product_invetory"] ?? $this->getContext($context, "product_invetory")), "uRL", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Estimateddeliverytime</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product_invetory"] ?? $this->getContext($context, "product_invetory")), "estimatedDeliveryTime", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>

        <li>
            <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_invetory_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_invetory_edit", array("id" => $this->getAttribute(($context["product_invetory"] ?? $this->getContext($context, "product_invetory")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f58c1fc0e63a7d20f98443f2170bdbf26d751de04f3cb2d63ff418061d02cf07->leave($__internal_f58c1fc0e63a7d20f98443f2170bdbf26d751de04f3cb2d63ff418061d02cf07_prof);

        
        $__internal_6ab80b236bcb5b1ec9e6e24f4db2549cdaff840026f0819bd23d69f47abdf876->leave($__internal_6ab80b236bcb5b1ec9e6e24f4db2549cdaff840026f0819bd23d69f47abdf876_prof);

    }

    public function getTemplateName()
    {
        return "product_invetory/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 58,  136 => 56,  130 => 53,  124 => 50,  113 => 42,  106 => 38,  99 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Product inventory</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ product_invetory.id }}</td>
            </tr>
            <tr>
                <th>Productid</th>
                <td>{{ product_invetory.productID }}</td>
            </tr>
            <tr>
                <th>Productcountinggroup</th>
                <td>{{ product_invetory.productCountingGroup }}</td>
            </tr>
            <tr>
                <th>Productunit</th>
                <td>{{ product_invetory.productUnit }}</td>
            </tr>
            <tr>
                <th>Qualityunit</th>
                <td>{{ product_invetory.qualityUnit }}</td>
            </tr>
            <tr>
                <th>Priceunit</th>
                <td>{{ product_invetory.priceUnit }}</td>
            </tr>
            <tr>
                <th>Productdescription</th>
                <td>{{ product_invetory.productDescription }}</td>
            </tr>
            <tr>
                <th>Url</th>
                <td>{{ product_invetory.uRL }}</td>
            </tr>
            <tr>
                <th>Estimateddeliverytime</th>
                <td>{{ product_invetory.estimatedDeliveryTime }}</td>
            </tr>
        </tbody>
    </table>

    <ul>

        <li>
            <a href=\"{{ path('product_invetory_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('product_invetory_edit', { 'id': product_invetory.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "product_invetory/show.html.twig", "C:\\laragon\\www\\Hotel\\pro\\app\\Resources\\views\\product_invetory\\show.html.twig");
    }
}
