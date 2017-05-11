<?php

/* product_details/index.html.twig */
class __TwigTemplate_be6fa8221d983f7ff184c5ba2496fbe96826f822dd77d20e866614c13b1c6e7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product_details/index.html.twig", 1);
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
        $__internal_6631cebcdcdcca1f26d43fa249b850e162398ced828a5da5c9ad1c8815e20255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6631cebcdcdcca1f26d43fa249b850e162398ced828a5da5c9ad1c8815e20255->enter($__internal_6631cebcdcdcca1f26d43fa249b850e162398ced828a5da5c9ad1c8815e20255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product_details/index.html.twig"));

        $__internal_31dfc4e32079e110af87e117e443d170494b0934bc536e6bd5095b7b15fc6387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31dfc4e32079e110af87e117e443d170494b0934bc536e6bd5095b7b15fc6387->enter($__internal_31dfc4e32079e110af87e117e443d170494b0934bc536e6bd5095b7b15fc6387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product_details/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6631cebcdcdcca1f26d43fa249b850e162398ced828a5da5c9ad1c8815e20255->leave($__internal_6631cebcdcdcca1f26d43fa249b850e162398ced828a5da5c9ad1c8815e20255_prof);

        
        $__internal_31dfc4e32079e110af87e117e443d170494b0934bc536e6bd5095b7b15fc6387->leave($__internal_31dfc4e32079e110af87e117e443d170494b0934bc536e6bd5095b7b15fc6387_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba43dd69b3449406e29e77c4d93d424d28cc325a29fe925e4d864c132e184105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba43dd69b3449406e29e77c4d93d424d28cc325a29fe925e4d864c132e184105->enter($__internal_ba43dd69b3449406e29e77c4d93d424d28cc325a29fe925e4d864c132e184105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_add0c12f48005337fb97bf7038535b2199566de6e34444aa2b4ee7a21c5bb659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add0c12f48005337fb97bf7038535b2199566de6e34444aa2b4ee7a21c5bb659->enter($__internal_add0c12f48005337fb97bf7038535b2199566de6e34444aa2b4ee7a21c5bb659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Product details list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Product id:         </th>
                <th>Product type:       </th>
                <th>Supplier id:        </th>
                <th>Product description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_details"] ?? $this->getContext($context, "product_details")));
        foreach ($context['_seq'] as $context["_key"] => $context["product_detail"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_details_show", array("id" => $this->getAttribute($context["product_detail"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product_detail"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["product_detail"], "productID", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["product_detail"], "productName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["product_detail"], "productType", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["product_detail"], "suppliersID", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["product_detail"], "productDescription", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_details_show", array("id" => $this->getAttribute($context["product_detail"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_details_edit", array("id" => $this->getAttribute($context["product_detail"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_details_new");
        echo "\">New product</a>
        </li>
    </ul>
";
        
        $__internal_add0c12f48005337fb97bf7038535b2199566de6e34444aa2b4ee7a21c5bb659->leave($__internal_add0c12f48005337fb97bf7038535b2199566de6e34444aa2b4ee7a21c5bb659_prof);

        
        $__internal_ba43dd69b3449406e29e77c4d93d424d28cc325a29fe925e4d864c132e184105->leave($__internal_ba43dd69b3449406e29e77c4d93d424d28cc325a29fe925e4d864c132e184105_prof);

    }

    public function getTemplateName()
    {
        return "product_details/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 43,  119 => 38,  107 => 32,  101 => 29,  94 => 25,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Product details list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Product id:         </th>
                <th>Product type:       </th>
                <th>Supplier id:        </th>
                <th>Product description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for product_detail in product_details %}
            <tr>
                <td><a href=\"{{ path('product_details_show', { 'id': product_detail.id }) }}\">{{ product_detail.id }}</a></td>
                <td>{{ product_detail.productID }}</td>
                <td>{{ product_detail.productName }}</td>
                <td>{{ product_detail.productType }}</td>
                <td>{{ product_detail.suppliersID }}</td>
                <td>{{ product_detail.productDescription }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('product_details_show', { 'id': product_detail.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('product_details_edit', { 'id': product_detail.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('product_details_new') }}\">New product</a>
        </li>
    </ul>
{% endblock %}
", "product_details/index.html.twig", "C:\\laragon\\www\\Hotel\\pro\\app\\Resources\\views\\product_details\\index.html.twig");
    }
}
