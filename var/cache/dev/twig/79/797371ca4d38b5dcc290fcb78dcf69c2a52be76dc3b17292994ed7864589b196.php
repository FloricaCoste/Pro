<?php

/* suppliers_contact/index.html.twig */
class __TwigTemplate_cd7b6d8a944fd7f68a3bc221265107de7e19ff32408a916893072639753dfcf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "suppliers_contact/index.html.twig", 1);
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
        $__internal_3dec32587918bf95db33ce34e180394364850dd6cb9febdd51e91fbb496ddb6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dec32587918bf95db33ce34e180394364850dd6cb9febdd51e91fbb496ddb6a->enter($__internal_3dec32587918bf95db33ce34e180394364850dd6cb9febdd51e91fbb496ddb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "suppliers_contact/index.html.twig"));

        $__internal_bfbade453c4be8bc518953f06e1dd0b5151ae8cce2b3f215dadb807bc913a15f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfbade453c4be8bc518953f06e1dd0b5151ae8cce2b3f215dadb807bc913a15f->enter($__internal_bfbade453c4be8bc518953f06e1dd0b5151ae8cce2b3f215dadb807bc913a15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "suppliers_contact/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dec32587918bf95db33ce34e180394364850dd6cb9febdd51e91fbb496ddb6a->leave($__internal_3dec32587918bf95db33ce34e180394364850dd6cb9febdd51e91fbb496ddb6a_prof);

        
        $__internal_bfbade453c4be8bc518953f06e1dd0b5151ae8cce2b3f215dadb807bc913a15f->leave($__internal_bfbade453c4be8bc518953f06e1dd0b5151ae8cce2b3f215dadb807bc913a15f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c97861972de91b78d15e2152480512dc0ea59556d06a90f8ac88cd90121cdfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c97861972de91b78d15e2152480512dc0ea59556d06a90f8ac88cd90121cdfa->enter($__internal_1c97861972de91b78d15e2152480512dc0ea59556d06a90f8ac88cd90121cdfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_80c03d85a2c065247cb517d67ef885bfaf36f60de54e9757c72a360a74fd1d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c03d85a2c065247cb517d67ef885bfaf36f60de54e9757c72a360a74fd1d22->enter($__internal_80c03d85a2c065247cb517d67ef885bfaf36f60de54e9757c72a360a74fd1d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Suppliers_contacts list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Suppliersid</th>
                <th>Supplierscontactname</th>
                <th>Suppliersphone</th>
                <th>Suppliersmobile</th>
                <th>Suppliersemail</th>
                <th>Suppliersfax</th>
                <th>Suppliersweb</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["suppliers_contacts"] ?? $this->getContext($context, "suppliers_contacts")));
        foreach ($context['_seq'] as $context["_key"] => $context["suppliers_contact"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppliers_contact_show", array("id" => $this->getAttribute($context["suppliers_contact"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_contact"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_contact"], "suppliersId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_contact"], "suppliersContactName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_contact"], "suppliersPhone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_contact"], "suppliersMobile", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_contact"], "suppliersEMail", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_contact"], "suppliersFax", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_contact"], "suppliersWeb", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppliers_contact_show", array("id" => $this->getAttribute($context["suppliers_contact"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppliers_contact_edit", array("id" => $this->getAttribute($context["suppliers_contact"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['suppliers_contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppliers_contact_new");
        echo "\">Create a new suppliers_contact</a>
        </li>
    </ul>
";
        
        $__internal_80c03d85a2c065247cb517d67ef885bfaf36f60de54e9757c72a360a74fd1d22->leave($__internal_80c03d85a2c065247cb517d67ef885bfaf36f60de54e9757c72a360a74fd1d22_prof);

        
        $__internal_1c97861972de91b78d15e2152480512dc0ea59556d06a90f8ac88cd90121cdfa->leave($__internal_1c97861972de91b78d15e2152480512dc0ea59556d06a90f8ac88cd90121cdfa_prof);

    }

    public function getTemplateName()
    {
        return "suppliers_contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 48,  130 => 43,  118 => 37,  112 => 34,  105 => 30,  101 => 29,  97 => 28,  93 => 27,  89 => 26,  85 => 25,  81 => 24,  75 => 23,  72 => 22,  68 => 21,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Suppliers_contacts list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Suppliersid</th>
                <th>Supplierscontactname</th>
                <th>Suppliersphone</th>
                <th>Suppliersmobile</th>
                <th>Suppliersemail</th>
                <th>Suppliersfax</th>
                <th>Suppliersweb</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for suppliers_contact in suppliers_contacts %}
            <tr>
                <td><a href=\"{{ path('suppliers_contact_show', { 'id': suppliers_contact.id }) }}\">{{ suppliers_contact.id }}</a></td>
                <td>{{ suppliers_contact.suppliersId }}</td>
                <td>{{ suppliers_contact.suppliersContactName }}</td>
                <td>{{ suppliers_contact.suppliersPhone }}</td>
                <td>{{ suppliers_contact.suppliersMobile }}</td>
                <td>{{ suppliers_contact.suppliersEMail }}</td>
                <td>{{ suppliers_contact.suppliersFax }}</td>
                <td>{{ suppliers_contact.suppliersWeb }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('suppliers_contact_show', { 'id': suppliers_contact.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('suppliers_contact_edit', { 'id': suppliers_contact.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('suppliers_contact_new') }}\">Create a new suppliers_contact</a>
        </li>
    </ul>
{% endblock %}
", "suppliers_contact/index.html.twig", "C:\\laragon\\www\\Hotel\\pro\\app\\Resources\\views\\suppliers_contact\\index.html.twig");
    }
}
