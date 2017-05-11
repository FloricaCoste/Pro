<?php

/* orders/index.html.twig */
class __TwigTemplate_86717617996b54789b5a2ec46554209ff70fafd8bb4ffc12700ba9e98301be90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "orders/index.html.twig", 1);
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
        $__internal_8298f0202fa0405cd91b6fd7be741d9597b8e47e856c029c816a5cb1d8c981e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8298f0202fa0405cd91b6fd7be741d9597b8e47e856c029c816a5cb1d8c981e6->enter($__internal_8298f0202fa0405cd91b6fd7be741d9597b8e47e856c029c816a5cb1d8c981e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orders/index.html.twig"));

        $__internal_b4060b094a25ce9f1cae8feb4994c0fd1c125c8c60fd208b5285509c48d5d047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4060b094a25ce9f1cae8feb4994c0fd1c125c8c60fd208b5285509c48d5d047->enter($__internal_b4060b094a25ce9f1cae8feb4994c0fd1c125c8c60fd208b5285509c48d5d047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orders/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8298f0202fa0405cd91b6fd7be741d9597b8e47e856c029c816a5cb1d8c981e6->leave($__internal_8298f0202fa0405cd91b6fd7be741d9597b8e47e856c029c816a5cb1d8c981e6_prof);

        
        $__internal_b4060b094a25ce9f1cae8feb4994c0fd1c125c8c60fd208b5285509c48d5d047->leave($__internal_b4060b094a25ce9f1cae8feb4994c0fd1c125c8c60fd208b5285509c48d5d047_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c18c95c925068eca2ff8af43ebfd9f5facf7bed03f00c80c29234555f8e83514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c18c95c925068eca2ff8af43ebfd9f5facf7bed03f00c80c29234555f8e83514->enter($__internal_c18c95c925068eca2ff8af43ebfd9f5facf7bed03f00c80c29234555f8e83514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc765278cde71737809efa6f7a3fad8c06c9676c083c8ddbee7e10c79db8abae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc765278cde71737809efa6f7a3fad8c06c9676c083c8ddbee7e10c79db8abae->enter($__internal_cc765278cde71737809efa6f7a3fad8c06c9676c083c8ddbee7e10c79db8abae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Orders list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Order id</th>
                <th>Suppliers id</th>
                <th>User ID</th>

                <th>Shipping address</th>
                <th>Orders cost</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? $this->getContext($context, "orders")));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orders_show", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "ordersId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "suppliersId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "userId", array()), "html", null, true);
            echo "</td>

                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "shipAddress", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "ordersCost", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orders_show", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orders_edit", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>

                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orders_new");
        echo "\">New order</a>
        </li>
    </ul>
";
        
        $__internal_cc765278cde71737809efa6f7a3fad8c06c9676c083c8ddbee7e10c79db8abae->leave($__internal_cc765278cde71737809efa6f7a3fad8c06c9676c083c8ddbee7e10c79db8abae_prof);

        
        $__internal_c18c95c925068eca2ff8af43ebfd9f5facf7bed03f00c80c29234555f8e83514->leave($__internal_c18c95c925068eca2ff8af43ebfd9f5facf7bed03f00c80c29234555f8e83514_prof);

    }

    public function getTemplateName()
    {
        return "orders/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 47,  123 => 42,  110 => 35,  104 => 32,  97 => 28,  93 => 27,  88 => 25,  84 => 24,  80 => 23,  74 => 22,  71 => 21,  67 => 20,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Orders list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Order id</th>
                <th>Suppliers id</th>
                <th>User ID</th>

                <th>Shipping address</th>
                <th>Orders cost</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for order in orders %}
            <tr>
                <td><a href=\"{{ path('orders_show', { 'id': order.id }) }}\">{{ order.id }}</a></td>
                <td>{{ order.ordersId }}</td>
                <td>{{ order.suppliersId }}</td>
                <td>{{ order.userId }}</td>

                <td>{{ order.shipAddress }}</td>
                <td>{{ order.ordersCost }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('orders_show', { 'id': order.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('orders_edit', { 'id': order.id }) }}\">edit</a>
                        </li>

                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('orders_new') }}\">New order</a>
        </li>
    </ul>
{% endblock %}
", "orders/index.html.twig", "C:\\laragon\\www\\Hotel\\pro\\app\\Resources\\views\\orders\\index.html.twig");
    }
}
