<?php

/* po/index.html.twig */
class __TwigTemplate_99c35925aa7a4f48505ed8514b5b75f8b56058320140276ae32834244effe36b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "po/index.html.twig", 1);
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
        $__internal_3ee153c3f5db0f799ead04898eeb04e7a59ecc87f41e27df22597200f6a84032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee153c3f5db0f799ead04898eeb04e7a59ecc87f41e27df22597200f6a84032->enter($__internal_3ee153c3f5db0f799ead04898eeb04e7a59ecc87f41e27df22597200f6a84032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "po/index.html.twig"));

        $__internal_fcb842d9fe2108c828a821cba411ad813aaa695037f59c265474cdd70a63b9f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb842d9fe2108c828a821cba411ad813aaa695037f59c265474cdd70a63b9f0->enter($__internal_fcb842d9fe2108c828a821cba411ad813aaa695037f59c265474cdd70a63b9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "po/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ee153c3f5db0f799ead04898eeb04e7a59ecc87f41e27df22597200f6a84032->leave($__internal_3ee153c3f5db0f799ead04898eeb04e7a59ecc87f41e27df22597200f6a84032_prof);

        
        $__internal_fcb842d9fe2108c828a821cba411ad813aaa695037f59c265474cdd70a63b9f0->leave($__internal_fcb842d9fe2108c828a821cba411ad813aaa695037f59c265474cdd70a63b9f0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d453fa0805c4d1cc0851f2e85f157fc3343ccd511f8f61a457cf7ed7a425efd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d453fa0805c4d1cc0851f2e85f157fc3343ccd511f8f61a457cf7ed7a425efd2->enter($__internal_d453fa0805c4d1cc0851f2e85f157fc3343ccd511f8f61a457cf7ed7a425efd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0932e70c36a15295e82602c499c3428821066edbba966675d028d8d448352310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0932e70c36a15295e82602c499c3428821066edbba966675d028d8d448352310->enter($__internal_0932e70c36a15295e82602c499c3428821066edbba966675d028d8d448352310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>List Of PO</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Hotel id</th>
                <th>Supplier id</th>
                <th>Po number</th>
                <th>PO date</th>
                <th>Ship to address</th>
                <th>Total</th>
                <th>Vat</th>
                <th>Discount</th>
                <th>Discount value</th>
                <th>Shipment costs</th>
                <th>Tax rate</th>
                <th>Approved </th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pOs"] ?? $this->getContext($context, "pOs")));
        foreach ($context['_seq'] as $context["_key"] => $context["pO"]) {
            // line 27
            echo "            <tr>
                <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("po_show", array("id" => $this->getAttribute($context["pO"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pO"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["pO"], "hotelID", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["pO"], "suppliersID", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["pO"], "poNo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            if ($this->getAttribute($context["pO"], "poDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pO"], "poDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["pO"], "shipToAddress", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["pO"], "total", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["pO"], "vAT", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["pO"], "discount", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["pO"], "discountValue", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["pO"], "shipmentCosts", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["pO"], "tAXRate", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            if ($this->getAttribute($context["pO"], "aprovedaproved", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("po_show", array("id" => $this->getAttribute($context["pO"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("po_edit", array("id" => $this->getAttribute($context["pO"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pO'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("po_new");
        echo "\">Create a new pO</a>
        </li>
    </ul>
";
        
        $__internal_0932e70c36a15295e82602c499c3428821066edbba966675d028d8d448352310->leave($__internal_0932e70c36a15295e82602c499c3428821066edbba966675d028d8d448352310_prof);

        
        $__internal_d453fa0805c4d1cc0851f2e85f157fc3343ccd511f8f61a457cf7ed7a425efd2->leave($__internal_d453fa0805c4d1cc0851f2e85f157fc3343ccd511f8f61a457cf7ed7a425efd2_prof);

    }

    public function getTemplateName()
    {
        return "po/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 58,  161 => 53,  149 => 47,  143 => 44,  132 => 40,  128 => 39,  124 => 38,  120 => 37,  116 => 36,  112 => 35,  108 => 34,  104 => 33,  98 => 32,  94 => 31,  90 => 30,  86 => 29,  80 => 28,  77 => 27,  73 => 26,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>List Of PO</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Hotel id</th>
                <th>Supplier id</th>
                <th>Po number</th>
                <th>PO date</th>
                <th>Ship to address</th>
                <th>Total</th>
                <th>Vat</th>
                <th>Discount</th>
                <th>Discount value</th>
                <th>Shipment costs</th>
                <th>Tax rate</th>
                <th>Approved </th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for pO in pOs %}
            <tr>
                <td><a href=\"{{ path('po_show', { 'id': pO.id }) }}\">{{ pO.id }}</a></td>
                <td>{{ pO.hotelID }}</td>
                <td>{{ pO.suppliersID }}</td>
                <td>{{ pO.poNo }}</td>
                <td>{% if pO.poDate %}{{ pO.poDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ pO.shipToAddress }}</td>
                <td>{{ pO.total }}</td>
                <td>{{ pO.vAT }}</td>
                <td>{{ pO.discount }}</td>
                <td>{{ pO.discountValue }}</td>
                <td>{{ pO.shipmentCosts }}</td>
                <td>{{ pO.tAXRate }}</td>
                <td>{% if pO.aprovedaproved %}Yes{% else %}No{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('po_show', { 'id': pO.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('po_edit', { 'id': pO.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('po_new') }}\">Create a new pO</a>
        </li>
    </ul>
{% endblock %}
", "po/index.html.twig", "C:\\laragon\\www\\Hotel\\pro\\app\\Resources\\views\\po\\index.html.twig");
    }
}
