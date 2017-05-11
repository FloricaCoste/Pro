<?php

/* orders/show.html.twig */
class __TwigTemplate_c6604ce6d6aefba232e396c56684930eeafb5fbc6d67e2dec19bf99a0630b09b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "orders/show.html.twig", 1);
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
        $__internal_e6373ea1a5d9b73bed15079bf61220d8ff283b16ecc85b324f0e8d967c5df822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6373ea1a5d9b73bed15079bf61220d8ff283b16ecc85b324f0e8d967c5df822->enter($__internal_e6373ea1a5d9b73bed15079bf61220d8ff283b16ecc85b324f0e8d967c5df822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orders/show.html.twig"));

        $__internal_a896b1f2089a185d99c244dede0d62b7962ba931ef34681a63bde40cc31a77ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a896b1f2089a185d99c244dede0d62b7962ba931ef34681a63bde40cc31a77ca->enter($__internal_a896b1f2089a185d99c244dede0d62b7962ba931ef34681a63bde40cc31a77ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orders/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6373ea1a5d9b73bed15079bf61220d8ff283b16ecc85b324f0e8d967c5df822->leave($__internal_e6373ea1a5d9b73bed15079bf61220d8ff283b16ecc85b324f0e8d967c5df822_prof);

        
        $__internal_a896b1f2089a185d99c244dede0d62b7962ba931ef34681a63bde40cc31a77ca->leave($__internal_a896b1f2089a185d99c244dede0d62b7962ba931ef34681a63bde40cc31a77ca_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4201ccce74735767339e6a9cedf90b166f9ed52ddc414821e5e8610d3c8c6588 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4201ccce74735767339e6a9cedf90b166f9ed52ddc414821e5e8610d3c8c6588->enter($__internal_4201ccce74735767339e6a9cedf90b166f9ed52ddc414821e5e8610d3c8c6588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df2f0a76c5f55856f8bd0b24f5ef1d6a398b288769f0154d95b98498e08393d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2f0a76c5f55856f8bd0b24f5ef1d6a398b288769f0154d95b98498e08393d6->enter($__internal_df2f0a76c5f55856f8bd0b24f5ef1d6a398b288769f0154d95b98498e08393d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Order</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ordersid</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "ordersId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Suppliersid</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "suppliersId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Userid</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "userId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ordersdate</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "ordersDate", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Deliverydate</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "deliveryDate", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Shipaddress</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "shipAddress", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Orderscost</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "ordersCost", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orders_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orders_edit", array("id" => $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_df2f0a76c5f55856f8bd0b24f5ef1d6a398b288769f0154d95b98498e08393d6->leave($__internal_df2f0a76c5f55856f8bd0b24f5ef1d6a398b288769f0154d95b98498e08393d6_prof);

        
        $__internal_4201ccce74735767339e6a9cedf90b166f9ed52ddc414821e5e8610d3c8c6588->leave($__internal_4201ccce74735767339e6a9cedf90b166f9ed52ddc414821e5e8610d3c8c6588_prof);

    }

    public function getTemplateName()
    {
        return "orders/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 53,  128 => 51,  122 => 48,  116 => 45,  106 => 38,  99 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Order</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ order.id }}</td>
            </tr>
            <tr>
                <th>Ordersid</th>
                <td>{{ order.ordersId }}</td>
            </tr>
            <tr>
                <th>Suppliersid</th>
                <td>{{ order.suppliersId }}</td>
            </tr>
            <tr>
                <th>Userid</th>
                <td>{{ order.userId }}</td>
            </tr>
            <tr>
                <th>Ordersdate</th>
                <td>{{ order.ordersDate }}</td>
            </tr>
            <tr>
                <th>Deliverydate</th>
                <td>{{ order.deliveryDate }}</td>
            </tr>
            <tr>
                <th>Shipaddress</th>
                <td>{{ order.shipAddress }}</td>
            </tr>
            <tr>
                <th>Orderscost</th>
                <td>{{ order.ordersCost }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('orders_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('orders_edit', { 'id': order.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "orders/show.html.twig", "C:\\laragon\\www\\Hotel\\pro\\app\\Resources\\views\\orders\\show.html.twig");
    }
}
