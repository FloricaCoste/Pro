<?php

/* product_invetory/index.html.twig */
class __TwigTemplate_db39e29ebce7ac0186ba68bdc13c8da312ebbbd34e5f5a1e053c64022a8be5a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product_invetory/index.html.twig", 1);
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
        $__internal_d09ab6178d84c1b7f837be6835e286e3aa8e552f3272e64424cf46fc0e579705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d09ab6178d84c1b7f837be6835e286e3aa8e552f3272e64424cf46fc0e579705->enter($__internal_d09ab6178d84c1b7f837be6835e286e3aa8e552f3272e64424cf46fc0e579705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product_invetory/index.html.twig"));

        $__internal_b82a61774e191b5baf4f1ad9780dc866931e19ec6f33f07b476c56789715b386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b82a61774e191b5baf4f1ad9780dc866931e19ec6f33f07b476c56789715b386->enter($__internal_b82a61774e191b5baf4f1ad9780dc866931e19ec6f33f07b476c56789715b386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product_invetory/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d09ab6178d84c1b7f837be6835e286e3aa8e552f3272e64424cf46fc0e579705->leave($__internal_d09ab6178d84c1b7f837be6835e286e3aa8e552f3272e64424cf46fc0e579705_prof);

        
        $__internal_b82a61774e191b5baf4f1ad9780dc866931e19ec6f33f07b476c56789715b386->leave($__internal_b82a61774e191b5baf4f1ad9780dc866931e19ec6f33f07b476c56789715b386_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_54f886ac3ab2eb76119ff3d4803ea2d0fbd3c21fe9271c2af635a80220d9883f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54f886ac3ab2eb76119ff3d4803ea2d0fbd3c21fe9271c2af635a80220d9883f->enter($__internal_54f886ac3ab2eb76119ff3d4803ea2d0fbd3c21fe9271c2af635a80220d9883f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6c854889c9fa1756ebb4703d48b92a1bc33bfd405aba89b0b3f66d1ea9e2ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c854889c9fa1756ebb4703d48b92a1bc33bfd405aba89b0b3f66d1ea9e2ebd->enter($__internal_d6c854889c9fa1756ebb4703d48b92a1bc33bfd405aba89b0b3f66d1ea9e2ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Product invetories list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Product id</th>
                <th>Product counting group</th>
                <th>Product unit</th>
                <th>Quality unit</th>
                <th>Price / unit</th>
                <th>Product description</th>
                <th>URL</th>
                <th>Estimated delivery time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_invetories"] ?? $this->getContext($context, "product_invetories")));
        foreach ($context['_seq'] as $context["_key"] => $context["product_invetory"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_invetory_show", array("id" => $this->getAttribute($context["product_invetory"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product_invetory"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["product_invetory"], "productID", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["product_invetory"], "productCountingGroup", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["product_invetory"], "productUnit", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["product_invetory"], "qualityUnit", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["product_invetory"], "priceUnit", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["product_invetory"], "productDescription", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["product_invetory"], "uRL", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["product_invetory"], "estimatedDeliveryTime", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_invetory_show", array("id" => $this->getAttribute($context["product_invetory"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_invetory_edit", array("id" => $this->getAttribute($context["product_invetory"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_invetory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_invetory_new");
        echo "\">New product</a>
        </li>
    </ul>
";
        
        $__internal_d6c854889c9fa1756ebb4703d48b92a1bc33bfd405aba89b0b3f66d1ea9e2ebd->leave($__internal_d6c854889c9fa1756ebb4703d48b92a1bc33bfd405aba89b0b3f66d1ea9e2ebd_prof);

        
        $__internal_54f886ac3ab2eb76119ff3d4803ea2d0fbd3c21fe9271c2af635a80220d9883f->leave($__internal_54f886ac3ab2eb76119ff3d4803ea2d0fbd3c21fe9271c2af635a80220d9883f_prof);

    }

    public function getTemplateName()
    {
        return "product_invetory/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 50,  135 => 45,  123 => 39,  117 => 36,  110 => 32,  106 => 31,  102 => 30,  98 => 29,  94 => 28,  90 => 27,  86 => 26,  82 => 25,  76 => 24,  73 => 23,  69 => 22,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Product invetories list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Product id</th>
                <th>Product counting group</th>
                <th>Product unit</th>
                <th>Quality unit</th>
                <th>Price / unit</th>
                <th>Product description</th>
                <th>URL</th>
                <th>Estimated delivery time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for product_invetory in product_invetories %}
            <tr>
                <td><a href=\"{{ path('product_invetory_show', { 'id': product_invetory.id }) }}\">{{ product_invetory.id }}</a></td>
                <td>{{ product_invetory.productID }}</td>
                <td>{{ product_invetory.productCountingGroup }}</td>
                <td>{{ product_invetory.productUnit }}</td>
                <td>{{ product_invetory.qualityUnit }}</td>
                <td>{{ product_invetory.priceUnit }}</td>
                <td>{{ product_invetory.productDescription }}</td>
                <td>{{ product_invetory.uRL }}</td>
                <td>{{ product_invetory.estimatedDeliveryTime }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('product_invetory_show', { 'id': product_invetory.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('product_invetory_edit', { 'id': product_invetory.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('product_invetory_new') }}\">New product</a>
        </li>
    </ul>
{% endblock %}
", "product_invetory/index.html.twig", "C:\\laragon\\www\\Hotel\\pro\\app\\Resources\\views\\product_invetory\\index.html.twig");
    }
}
