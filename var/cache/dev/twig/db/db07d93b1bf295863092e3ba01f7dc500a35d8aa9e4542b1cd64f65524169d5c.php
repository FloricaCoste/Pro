<?php

/* orders_detail/index.html.twig */
class __TwigTemplate_650127dca801abf0b8cc1c662d804fbcb672b635c8ea2e58d953e68b0b8e4f39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "orders_detail/index.html.twig", 1);
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
        $__internal_2178f04c346ff9634f7aab505174b8a33a8e455259a8f71cbe4323339a7e9956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2178f04c346ff9634f7aab505174b8a33a8e455259a8f71cbe4323339a7e9956->enter($__internal_2178f04c346ff9634f7aab505174b8a33a8e455259a8f71cbe4323339a7e9956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orders_detail/index.html.twig"));

        $__internal_698add64f8719e843e60d4742fd769761d5920c50d5965d8ad27e73c9790c03b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_698add64f8719e843e60d4742fd769761d5920c50d5965d8ad27e73c9790c03b->enter($__internal_698add64f8719e843e60d4742fd769761d5920c50d5965d8ad27e73c9790c03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orders_detail/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2178f04c346ff9634f7aab505174b8a33a8e455259a8f71cbe4323339a7e9956->leave($__internal_2178f04c346ff9634f7aab505174b8a33a8e455259a8f71cbe4323339a7e9956_prof);

        
        $__internal_698add64f8719e843e60d4742fd769761d5920c50d5965d8ad27e73c9790c03b->leave($__internal_698add64f8719e843e60d4742fd769761d5920c50d5965d8ad27e73c9790c03b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c6448a074e20e08ed238b97a3c24c38b2ce16a5d7666fc11a039f3a75004df4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c6448a074e20e08ed238b97a3c24c38b2ce16a5d7666fc11a039f3a75004df4->enter($__internal_8c6448a074e20e08ed238b97a3c24c38b2ce16a5d7666fc11a039f3a75004df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3591d0824e37709a152f58596a788766c4675543eb1098c99a11659cb915880c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3591d0824e37709a152f58596a788766c4675543eb1098c99a11659cb915880c->enter($__internal_3591d0824e37709a152f58596a788766c4675543eb1098c99a11659cb915880c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Orders details list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Order id</th>
                <th>Product id</th>
                <th>Product quantity</th>
                <th>Quality unit</th>
                <th>Price unit</th>
                <th>Suppliers id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders_details"] ?? $this->getContext($context, "orders_details")));
        foreach ($context['_seq'] as $context["_key"] => $context["orders_detail"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orders_detail_show", array("id" => $this->getAttribute($context["orders_detail"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["orders_detail"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["orders_detail"], "ordersId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["orders_detail"], "productId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["orders_detail"], "productQuantity", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["orders_detail"], "qualityUnit", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["orders_detail"], "priceUnit", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["orders_detail"], "suppliersId", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orders_detail_show", array("id" => $this->getAttribute($context["orders_detail"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orders_detail_edit", array("id" => $this->getAttribute($context["orders_detail"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orders_detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orders_detail_new");
        echo "\">Create a new orders_detail</a>
        </li>
    </ul>
";
        
        $__internal_3591d0824e37709a152f58596a788766c4675543eb1098c99a11659cb915880c->leave($__internal_3591d0824e37709a152f58596a788766c4675543eb1098c99a11659cb915880c_prof);

        
        $__internal_8c6448a074e20e08ed238b97a3c24c38b2ce16a5d7666fc11a039f3a75004df4->leave($__internal_8c6448a074e20e08ed238b97a3c24c38b2ce16a5d7666fc11a039f3a75004df4_prof);

    }

    public function getTemplateName()
    {
        return "orders_detail/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 46,  125 => 41,  113 => 35,  107 => 32,  100 => 28,  96 => 27,  92 => 26,  88 => 25,  84 => 24,  80 => 23,  74 => 22,  71 => 21,  67 => 20,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Orders details list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Order id</th>
                <th>Product id</th>
                <th>Product quantity</th>
                <th>Quality unit</th>
                <th>Price unit</th>
                <th>Suppliers id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for orders_detail in orders_details %}
            <tr>
                <td><a href=\"{{ path('orders_detail_show', { 'id': orders_detail.id }) }}\">{{ orders_detail.id }}</a></td>
                <td>{{ orders_detail.ordersId }}</td>
                <td>{{ orders_detail.productId }}</td>
                <td>{{ orders_detail.productQuantity }}</td>
                <td>{{ orders_detail.qualityUnit }}</td>
                <td>{{ orders_detail.priceUnit }}</td>
                <td>{{ orders_detail.suppliersId }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('orders_detail_show', { 'id': orders_detail.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('orders_detail_edit', { 'id': orders_detail.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('orders_detail_new') }}\">Create a new orders_detail</a>
        </li>
    </ul>
{% endblock %}
", "orders_detail/index.html.twig", "C:\\laragon\\www\\Hotel\\pro\\app\\Resources\\views\\orders_detail\\index.html.twig");
    }
}
