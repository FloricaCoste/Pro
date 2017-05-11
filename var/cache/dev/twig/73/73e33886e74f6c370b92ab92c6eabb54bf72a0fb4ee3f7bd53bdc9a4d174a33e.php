<?php

/* suppliers_details/index.html.twig */
class __TwigTemplate_92297ac7abf9a5db9ed8c8f9820170fd62687a3f7e717330dc97d80358956741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "suppliers_details/index.html.twig", 1);
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
        $__internal_3d176c01083fc4aa1a2ecb02f51bf66fce20ff8b67acb8ac06f5f00f2db24c6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d176c01083fc4aa1a2ecb02f51bf66fce20ff8b67acb8ac06f5f00f2db24c6f->enter($__internal_3d176c01083fc4aa1a2ecb02f51bf66fce20ff8b67acb8ac06f5f00f2db24c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "suppliers_details/index.html.twig"));

        $__internal_792675f074ef38822db6c45ac63e06accd2838cba962680160996b5f5b2ac45d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_792675f074ef38822db6c45ac63e06accd2838cba962680160996b5f5b2ac45d->enter($__internal_792675f074ef38822db6c45ac63e06accd2838cba962680160996b5f5b2ac45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "suppliers_details/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d176c01083fc4aa1a2ecb02f51bf66fce20ff8b67acb8ac06f5f00f2db24c6f->leave($__internal_3d176c01083fc4aa1a2ecb02f51bf66fce20ff8b67acb8ac06f5f00f2db24c6f_prof);

        
        $__internal_792675f074ef38822db6c45ac63e06accd2838cba962680160996b5f5b2ac45d->leave($__internal_792675f074ef38822db6c45ac63e06accd2838cba962680160996b5f5b2ac45d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_708bec57a985579d44ad156cd567f2cbdcc5892d0f8fc747e9d6940dde143c30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_708bec57a985579d44ad156cd567f2cbdcc5892d0f8fc747e9d6940dde143c30->enter($__internal_708bec57a985579d44ad156cd567f2cbdcc5892d0f8fc747e9d6940dde143c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f94ea0494946f716d73ac0422f77ebe8b5b79e5c886d1bbcef921ccbc229f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f94ea0494946f716d73ac0422f77ebe8b5b79e5c886d1bbcef921ccbc229f95->enter($__internal_9f94ea0494946f716d73ac0422f77ebe8b5b79e5c886d1bbcef921ccbc229f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Suppliers details</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Suppliers ID</th>
                <th>Susupplier sname</th>
                <th>Suppliers business type</th>
                <th>Suppliers web</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["suppliers_details"] ?? $this->getContext($context, "suppliers_details")));
        foreach ($context['_seq'] as $context["_key"] => $context["suppliers_detail"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppliers_details_show", array("id" => $this->getAttribute($context["suppliers_detail"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_detail"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_detail"], "suppliersId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_detail"], "susuppliersName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_detail"], "suppliersBusinessType", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_detail"], "suppliersWeb", array()), "html", null, true);
            echo ", { 'id': suppliers_detail.suppliersWeb }) }}\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_detail"], "suppliersWeb", array()), "html", null, true);
            echo "</a></td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppliers_details_show", array("id" => $this->getAttribute($context["suppliers_detail"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppliers_details_edit", array("id" => $this->getAttribute($context["suppliers_detail"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>

                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['suppliers_detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppliers_details_new");
        echo "\">New suppliers</a>
        </li>
    </ul>
";
        
        $__internal_9f94ea0494946f716d73ac0422f77ebe8b5b79e5c886d1bbcef921ccbc229f95->leave($__internal_9f94ea0494946f716d73ac0422f77ebe8b5b79e5c886d1bbcef921ccbc229f95_prof);

        
        $__internal_708bec57a985579d44ad156cd567f2cbdcc5892d0f8fc747e9d6940dde143c30->leave($__internal_708bec57a985579d44ad156cd567f2cbdcc5892d0f8fc747e9d6940dde143c30_prof);

    }

    public function getTemplateName()
    {
        return "suppliers_details/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 43,  118 => 38,  105 => 31,  99 => 28,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Suppliers details</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Suppliers ID</th>
                <th>Susupplier sname</th>
                <th>Suppliers business type</th>
                <th>Suppliers web</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for suppliers_detail in suppliers_details %}
            <tr>
                <td><a href=\"{{ path('suppliers_details_show', { 'id': suppliers_detail.id }) }}\">{{ suppliers_detail.id }}</a></td>
                <td>{{ suppliers_detail.suppliersId }}</td>
                <td>{{ suppliers_detail.susuppliersName }}</td>
                <td>{{ suppliers_detail.suppliersBusinessType }}</td>
                <td><a href=\"{{ suppliers_detail.suppliersWeb }}, { 'id': suppliers_detail.suppliersWeb }) }}\">{{ suppliers_detail.suppliersWeb }}</a></td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('suppliers_details_show', { 'id': suppliers_detail.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('suppliers_details_edit', { 'id': suppliers_detail.id }) }}\">edit</a>
                        </li>

                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('suppliers_details_new') }}\">New suppliers</a>
        </li>
    </ul>
{% endblock %}
", "suppliers_details/index.html.twig", "C:\\laragon\\www\\Hotel\\pro\\app\\Resources\\views\\suppliers_details\\index.html.twig");
    }
}
